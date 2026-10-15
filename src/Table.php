<?php

namespace donatj\MySqlSchema;

use donatj\MySqlSchema\Columns\AbstractColumn;
use donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn;
use donatj\MySqlSchema\Traits\CharsetAndCollationTrait;

class Table {

	use Traits\EscapeTrait;
	use CharsetAndCollationTrait;

	/**
	 * Creates a table definition.
	 *
	 * @param string $name The SQL table name.
	 */
	public function __construct( string $name ) {
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
	 * @return list<AbstractColumn> Columns in the order they were added.
	 */
	public function getColumns(): array {
		return array_values($this->columns);
	}

	public function getComment(): string {
		return $this->comment;
	}

	/**
	 * @param string $comment The table comment.
	 * @return void
	 */
	public function setComment( string $comment ): void {
		$this->comment = $comment;
	}

	/**
	 * @return string|null The configured storage engine.
	 */
	public function getEngine(): ?string {
		return $this->engine;
	}

	/**
	 * @param string|null $engine The storage engine, or null to unset it.
	 */
	public function setEngine( ?string $engine ): void {
		$this->engine = $engine;
	}

	public function getName(): string {
		return $this->name;
	}

	/**
	 * @param string $name The SQL table name.
	 * @return void
	 */
	public function setName( string $name ): void {
		$this->name = $name;
	}

	/** @var AbstractIntegerColumn|null */
	protected $autoIncrement;

	/**
	 * Marks an integer column as auto-incrementing and as a primary key.
	 *
	 * @param AbstractIntegerColumn $column The auto-incrementing column.
	 */
	public function addAutoIncrement( AbstractIntegerColumn $column ): void {
		$this->autoIncrement = $column;

		$this->addPrimaryKey($column);
	}

	/**
	 * @return AbstractIntegerColumn|null The auto-incrementing column, if one is set.
	 */
	public function getAutoIncrementColumn(): ?AbstractIntegerColumn {
		return $this->autoIncrement;
	}

	/**
	 * @param AbstractIntegerColumn $column The column to check.
	 * @return bool
	 */
	public function isAutoIncrement( AbstractIntegerColumn $column ): bool {
		return $this->autoIncrement === $column;
	}

	/** @var array<int, AbstractColumn> */
	protected $primaryKeys = [ ];

	/**
	 * @param AbstractColumn $column The column to add to the primary key.
	 */
	public function addPrimaryKey( AbstractColumn $column ): void {
		$this->primaryKeys[spl_object_id($column)] = $column;

		$this->addColumn($column);
	}

	/**
	 * @param AbstractColumn $column The column to check.
	 * @return bool
	 */
	public function isPrimaryKey( AbstractColumn $column ): bool {
		return isset($this->primaryKeys[spl_object_id($column)]);
	}

	/** @var array<string, array{columns:array<int, AbstractColumn>,type:string,method:string}> */
	protected $keys = [ ];

	/**
	 * Adds a column to an index.
	 *
	 * @param string         $keyName The index name.
	 * @param AbstractColumn $column  The column to include in the index.
	 * @param int|null       $index   The zero-based position in a multi-column index. Appends when null.
	 * @param string         $type    The index type, such as NORMAL or UNIQUE.
	 * @param string         $method  The index method, such as BTREE.
	 */
	public function addKeyColumn(
		string $keyName,
		AbstractColumn $column,
		?int $index = null,
		string $type = 'NORMAL',
		string $method = ''
	): void {
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
	 * Adds a foreign key from a local column to a remote column.
	 *
	 * @param AbstractColumn $local  The local column.
	 * @param AbstractColumn $remote The referenced column.
	 */
	public function addForeignKey( AbstractColumn $local, AbstractColumn $remote ): void {
		$this->foreignKeys[spl_object_id($local)] = [
			'local'  => $local,
			'remote' => $remote,
		];
	}

	/** @var array<int, AbstractColumn> */
	protected $columns = [ ];

	/**
	 * @param AbstractColumn $column The column to add.
	 */
	public function addColumn( AbstractColumn $column ): void {
		$this->columns[spl_object_id($column)] = $column;
		$column->addTable($this);
	}

	/**
	 * @return string The CREATE TABLE statement.
	 */
	public function toString(): string {
		$warnings   = [ ];
		$statements = [ ];
		foreach( $this->columns as $column ) {
			$statements[] = "\t" . $column->toString($this);
		}

		if( count($this->primaryKeys) > 0 ) {
			$primary = "\tPRIMARY KEY (";
			$primary .= implode(",", array_map(function ( AbstractColumn $column ): string {
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
			$keys .= implode(",", array_map(function ( AbstractColumn $column ): string {
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
			$tables = array_filter($tables, function ( self $a ) use ( $remote ): bool {
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
