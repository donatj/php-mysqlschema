<?php

namespace donatj\MySqlSchema\Columns;

use donatj\MySqlSchema\Table;
use donatj\MySqlSchema\Utils\EscapeTrait;

abstract class AbstractColumn {

	use EscapeTrait;

	/**
	 * @param string $name
	 */
	function __construct( $name ) {
		$this->name = $name;
	}

	/**
	 * @return string
	 */
	abstract public function getTypeName();

	/**
	 * @var \donatj\MySqlSchema\Table[]
	 */
	protected $tables = [ ];

	/**
	 * @access private
	 * @param \donatj\MySqlSchema\Table $table
	 */
	public function addTable( Table $table ) {
		$this->tables[spl_object_hash($table)] = $table;
	}

	/**
	 * @var int
	 */
	protected $length = 0;

	/**
	 * @return int
	 */
	public function getLength() {
		return $this->length;
	}

	/**
	 * @param int $length
	 */
	public function setLength( $length ) {
		$this->length = $length;
	}

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var string
	 */
	protected $comment = '';

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
	 * @var bool
	 */
	protected $nullable = false;

	/**
	 * @return boolean
	 */
	public function isNullable() {
		return $this->nullable;
	}

	/**
	 * @param boolean $nullable
	 */
	public function setNullable( $nullable ) {
		$this->nullable = $nullable;
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
	 * @param \donatj\MySqlSchema\Table $table
	 * @return string
	 */
	abstract public function toString( Table $table );

	/**
	 * @var mixed
	 */
	protected $default;

	/**
	 * @param mixed $default
	 */
	public function setDefault( $default ) {
		$this->default = $default;
	}

	/**
	 * @return mixed
	 */
	public function getDefault() {
		return $this->default;
	}
}
