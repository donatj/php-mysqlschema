<?php

namespace donatj\MySqlSchema;

use donatj\MySqlSchema\Columns\AbstractColumn;
use donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn;
use donatj\MySqlSchema\Traits\CharsetAndCollationTrait;

class Table {

	use Traits\EscapeTrait;
	use CharsetAndCollationTrait;

	/**
	 * Table constructor.
	 *
	 * @param string $name
	 */
	public function __construct( $name ) {
		$this->name = $name;
	}

	/**
	 * Table Name
	 *
	 * @var string
	 */
	protected $name;

	/**
	 * Table Comment
	 *
	 * @var string
	 */
	protected $comment = '';

	/** @var string|null */
	protected $engine;

	/**
	 * @return list<AbstractColumn>
	 */
	public function getColumns() {
		return array_values($this->columns);
	}

	/**
	 * @return string
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * @param string $comment
	 * @return void
	 */
	public function setComment( $comment ) {
		$this->comment = $comment;
	}

	/**
	 * @return string|null
	 */
	public function getEngine() {
		return $this->engine;
	}

	/**
	 * @param string|null $engine
	 * @return void
	 */
	public function setEngine( $engine ) {
		$this->engine = $engine;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @param string $name
	 * @return void
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/** @var AbstractIntegerColumn|null */
	protected $autoIncrement;

	/**
	 * @return void
	 */
	public function addAutoIncrement( AbstractIntegerColumn $column ) {
		$this->autoIncrement = $column;

		$this->addPrimaryKey($column);
	}

	/**
	 * @return AbstractIntegerColumn|null
	 */
	public function getAutoIncrementColumn() {
		return $this->autoIncrement;
	}

	/**
	 * @param \donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn $column
	 * @return bool
	 */
	public function isAutoIncrement( AbstractIntegerColumn $column ) {
		return $this->autoIncrement === $column;
	}

	/** @var array<int, AbstractColumn> */
	protected $primaryKeys = [ ];

	/**
	 * @return void
	 */
	public function addPrimaryKey( AbstractColumn $column ) {
		$this->primaryKeys[spl_object_id($column)] = $column;

		$this->addColumn($column);
	}

	/**
	 * @param \donatj\MySqlSchema\Columns\AbstractColumn $column
	 * @return bool
	 */
	public function isPrimaryKey( AbstractColumn $column ) {
		return isset($this->primaryKeys[spl_object_id($column)]);
	}

	/** @var array<string, array{columns:array<int, AbstractColumn>,type:string,method:string}> */
	protected $keys = [ ];

	/**
	 * @param string         $keyName
	 * @param AbstractColumn $column
	 * @param int|null       $index
	 * @param string         $type
	 * @param string         $method
	 * @return void
	 */
	public function addKeyColumn( $keyName, AbstractColumn $column, $index = null, $type = 'NORMAL', $method = '' ) {
		if( !isset($this->keys[$keyName]) ) {
			$this->keys[$keyName] = [
				'columns' => [],
				'type'    => $type,
				'method'  => $method,
			];
		} else {
			$this->keys[$keyName]['type']   = $type;
			$this->keys[$keyName]['method'] = $method;
		}

		if( $index === null ) {
			$this->keys[$keyName]['columns'][] = $column;
		} else {
			$this->keys[$keyName]['columns'][$index] = $column;
		}
	}

	/** @var array<int, array{local:AbstractColumn,remote:AbstractColumn}> */
	protected $foreignKeys = [ ];

	/**
	 * @return void
	 */
	public function addForeignKey( AbstractColumn $local, AbstractColumn $remote ) {
		$this->foreignKeys[spl_object_id($local)] = [
			'local'  => $local,
			'remote' => $remote,
		];
	}

	/** @var array<int, AbstractColumn> */
	protected $columns = [ ];

	/**
	 * @return void
	 */
	public function addColumn( AbstractColumn $column ) {
		$this->columns[spl_object_id($column)] = $column;
		$column->addTable($this);
	}

	/**
	 * @return string
	 */
	public function toString() {
		$warnings   = [ ];
		$statements = [ ];
		foreach( $this->columns as $column ) {
			$statements[] = "\t" . $column->toString($this);
		}

		if( count($this->primaryKeys) > 0 ) {
			$primary = "\tPRIMARY KEY (";
			$primary .= implode(",", array_map(function ( AbstractColumn $column ) {
				return $this->mkString($column->getName());
			}, $this->primaryKeys));
			$primary .= ")";
			$statements[] = $primary;
		}

		if( $this->autoIncrement !== null ) {
			if( $this->autoIncrement->isSigned() ) {
				$warnings[] = $this->mkString($this->autoIncrement->getName()) . ' is a signed AUTO_INCREMENT';
			}

			if( $this->autoIncrement->isNullable() ) {
				$warnings[] = $this->mkString($this->autoIncrement->getName()) . ' is a nullable AUTO_INCREMENT';
			}
		}

		foreach( $this->keys as $keyName => $key ) {
			$keys = "\t";
			if( $key['type'] != 'NORMAL' ) {
				$keys .= $key['type'] . ' ';
			}

			$keys .= "KEY " . $this->mkString($keyName) . " (";
			$keys .= implode(",", array_map(function ( AbstractColumn $column ) {
				return $this->mkString($column->getName());
			}, $key['columns']));
			$keys .= ")";
			$statements[] = $keys;
		}

		foreach( $this->foreignKeys as $fks ) {
			/**
			 * @var AbstractColumn $local
			 * @var AbstractColumn $remote
			 */
			$local  = $fks['local'];
			$remote = $fks['remote'];

			$tables = $remote->getTables();
			// @todo doesn't really need to be a PK, just a key
			$tables = array_filter($tables, function ( self $a ) use ( $remote ) {
				return $a->isPrimaryKey($remote);
			});

			foreach( $tables as $tbl ) {
				// @todo check length and perhaps other stuff
				if( $local->getTypeName() != $remote->getTypeName() ) {
					$warnings[] = $this->mkString($local->getName()) . ' type does not match defined foreign key type';
				}

				$localName     = $this->mkString($local->getName());
				$remoteName    = $this->mkString($remote->getName());
				$remoteTblName = $this->mkString($tbl->getName());

				$keys = "\tFOREIGN KEY ({$localName}) REFERENCES {$remoteTblName}({$remoteName})";
				$statements[] = $keys;
			}
		}

		$charset   = '';
		$collation = '';
		if( $this->getCharset() ) {
			$charset = ' CHARACTER SET ' . $this->getCharset();
			if( $this->getCollation() ) {
				$collation = ' COLLATE ' . $this->getCollation();
			}
		}

		$comment = '';
		if( $this->comment ) {
			$comment = ' COMMENT ' . $this->mkString($this->comment, "'");
		}

		$name   = $this->mkString($this->name);
		$stmnts = implode(",\n", $statements);

		$warn = '';
		if( count($warnings) > 0 ) {
			$warn = "\n# Warning: " . implode("\n# Warning: ", $warnings);
		}

		return <<<EOT
			CREATE TABLE {$name} (
			{$stmnts}
			){$charset}{$collation}{$comment}{$warn};

			EOT;
	}

}
