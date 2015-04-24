<?php

namespace donatj\MySqlSchema;

use donatj\MySqlSchema\Columns\AbstractColumn;
use donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn;
use donatj\MySqlSchema\Utils\EscapeTrait;

class Table {

	use EscapeTrait;

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

	protected $charset = null;

	protected $collation = null;

	/**
	 * @return null
	 */
	public function getCharset() {
		return $this->charset;
	}

	/**
	 * @param null $charset
	 */
	public function setCharset( $charset ) {
		$this->charset = $charset;
	}

	/**
	 * @return null
	 */
	public function getCollation() {
		return $this->collation;
	}

	/**
	 * @param null $collation
	 */
	public function setCollation( $collation ) {
		$this->collation = $collation;
	}

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

	/**
	 * @var Columns\AbstractColumn[]
	 */
	protected $columns = [ ];

	public function addColumn( AbstractColumn $column ) {
		$this->columns[spl_object_hash($column)] = $column;
		$column->addTable($this);
	}

	function toString() {
		$columns = '';
		foreach( $this->columns as $column ) {
			$columns .= "\t" . $column->toString($this) . ",\n";
		}
		$columns = rtrim($columns, " \n\t,");

		$primary = '';
		if( $this->primaryKeys ) {
			$primary = ",\n\tPRIMARY KEY (";
			$primary .= '`' . implode("`,`", array_map(function ( AbstractColumn $column ) { return $column->getName(); }, $this->primaryKeys)) . '`';
			$primary .= ")";
		}

		$comment = '';
		if($this->comment) {
			$comment = ' COMMENT ' . $this->mkString($this->comment, "'");
		}

		$name = $this->mkString($this->name);

		return <<<EOT
CREATE TABLE {$name} (
{$columns}{$primary}
){$comment};

EOT;
	}
}
