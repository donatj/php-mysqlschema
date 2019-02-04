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

	protected $engine;

	/**
	 * @return Columns\AbstractColumn[]
	 */
	public function getColumns() {
		return $this->columns;
	}

	/**
	 * @return string
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * @param string $comment
	 */
	public function setComment( $comment ) {
		$this->comment = $comment;
	}

	public function getEngine() {
		return $this->engine;
	}

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
	 */
	public function setName( string $name ) : void {
		$this->name = $name;
	}

	/**
	 * @var AbstractIntegerColumn|null
	 */
	protected $autoIncrement;

	public function addAutoIncrement( AbstractIntegerColumn $column ) : void {
		$this->autoIncrement = $column;

		$this->addPrimaryKey($column);
	}

	/**
	 * @param \donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn $column
	 * @return bool
	 */
	public function isAutoIncrement( AbstractIntegerColumn $column ) {
		return $this->autoIncrement === $column;
	}

	/**
	 * @var AbstractColumn[]
	 */
	protected $primaryKeys = [ ];

	public function addPrimaryKey( AbstractColumn $column ) {
		$this->primaryKeys[spl_object_hash($column)] = $column;

		$this->addColumn($column);
	}

	/**
	 * @param \donatj\MySqlSchema\Columns\AbstractColumn $column
	 * @return bool
	 */
	public function isPrimaryKey( AbstractColumn $column ) {
		return isset($this->primaryKeys[spl_object_hash($column)]);
	}

	protected $keys = [ ];

	public function addKeyColumn( $keyName, AbstractColumn $column, $index = null, $type = 'NORMAL', $method = '' ) {
		if( !isset($this->keys[$keyName]) ) {
			$this->keys[$keyName] = [
				'columns' => [ ],
			];
		}

		$this->keys[$keyName]['type']   = $type;
		$this->keys[$keyName]['method'] = $method;

		if( is_null($index) ) {
			$this->keys[$keyName]['columns'][] = $column;
		} else {
			$this->keys[$keyName]['columns'][$index] = $column;
		}
	}

	protected $foreignKeys = [ ];

	public function addForeignKey( AbstractColumn $local, AbstractColumn $remote ) {
		$this->foreignKeys[spl_object_hash($local)] = [
			'local'  => $local,
			'remote' => $remote,
		];
	}

	/**
	 * @var Columns\AbstractColumn[]
	 */
	protected $columns = [ ];

	public function addColumn( AbstractColumn $column ) {
		$this->columns[spl_object_hash($column)] = $column;
		$column->addTable($this);
	}

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

		if( !is_null($this->autoIncrement) ) {
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
			 * @var $local AbstractColumn
			 * @var $remote AbstractColumn
			 */
			$local  = $fks['local'];
			$remote = $fks['remote'];

			$tables = $remote->getTables();
			// @todo doesn't really need to be a PK, just a key
			$tables = array_filter($tables, function ( Table $a ) use ( $remote ) {
				return $a->isPrimaryKey($remote);
			});

			foreach( $tables as $tbl ) {
				// @todo check length and perhaps other stuff
				if( $local->getTypeName() != $remote->getTypeName() ) {
					$warnings[] = $this->mkString($this->autoIncrement->getName()) . ' type does not match defined foreign key type';
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
