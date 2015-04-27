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

	protected $engine = null;

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

	/**
	 * @return null
	 */
	public function getEngine() {
		return $this->engine;
	}

	/**
	 * @param null $engine
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
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * @var AbstractIntegerColumn[]
	 */
	protected $autoIncrements = [ ];

	public function addAutoIncrement( AbstractIntegerColumn $column ) {
		$this->autoIncrements[spl_object_hash($column)] = $column;

		$this->addPrimaryKey($column);
	}

	public function isAutoIncrement( AbstractIntegerColumn $column ) {
		return isset($this->autoIncrements[spl_object_hash($column)]);
	}

	/**
	 * @var AbstractColumn[]
	 */
	protected $primaryKeys = [ ];

	public function addPrimaryKey( AbstractColumn $column ) {
		$this->primaryKeys[spl_object_hash($column)] = $column;

		$this->addColumn($column);
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
			$primary .= implode(",", array_map(function ( AbstractColumn $column ) { return $this->mkString($column->getName()); }, $this->primaryKeys));
			$primary .= ")";
			$statements[] = $primary;
		}

		foreach( $this->autoIncrements as $ai ) {
			if( $ai->isSigned() ) {
				$warnings[] = $this->mkString($ai->getName()) . ' is a signed AUTO_INCREMENT';
			}
		}

		foreach( $this->keys as $keyName => $key ) {
			$keys = "\tKEY " . $this->mkString($keyName) . " (";
			$keys .= implode(",", array_map(function ( AbstractColumn $column ) { return $this->mkString($column->getName()); }, $key['columns']));
			$keys .= ")";
			$statements[] = $keys;
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
){$comment}{$warn};

EOT;
	}
}
