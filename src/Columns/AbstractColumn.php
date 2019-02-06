<?php

namespace donatj\MySqlSchema\Columns;

use donatj\MySqlSchema\Columns\Interfaces\CharsetColumnInterface;
use donatj\MySqlSchema\Columns\Interfaces\OptionalLengthInterface;
use donatj\MySqlSchema\Columns\Interfaces\RequiredLengthInterface;
use donatj\MySqlSchema\Columns\Interfaces\SignedInterface;
use donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn;
use donatj\MySqlSchema\Table;
use donatj\MySqlSchema\Traits\EscapeTrait;

abstract class AbstractColumn {

	use EscapeTrait;

	/**
	 * @var \donatj\MySqlSchema\Table[]
	 */
	protected $tables = [];
	/**
	 * @var string
	 */
	protected $name;
	/**
	 * @var string
	 */
	protected $comment = '';
	/**
	 * @var bool
	 */
	protected $nullable = false;
	/**
	 * @var mixed
	 */
	protected $default;

	/**
	 * @param string $name
	 */
	public function __construct( string $name ) {
		$this->name = $name;
	}

	/**
	 * @access private
	 * @param \donatj\MySqlSchema\Table $table
	 */
	public function addTable( Table $table ) : void {
		$this->tables[spl_object_hash($table)] = $table;
	}

	/**
	 * @return \donatj\MySqlSchema\Table[]
	 */
	public function getTables() : array {
		return array_values($this->tables);
	}

	/**
	 * @return string
	 */
	public function getComment() : string {
		return $this->comment;
	}

	/**
	 * @param string $comment
	 */
	public function setComment( string $comment ) : void {
		$this->comment = $comment;
	}

	/**
	 * @return bool
	 */
	public function isNullable() : bool {
		return $this->nullable;
	}

	/**
	 * @param bool $nullable
	 */
	public function setNullable( bool $nullable ) : void {
		$this->nullable = $nullable;
	}

	/**
	 * @return string
	 */
	public function getName() : string {
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName( string $name ) : void {
		$this->name = $name;
	}

	/**
	 * @param \donatj\MySqlSchema\Table $table
	 * @return string
	 */
	public function toString( Table $table ) : string {
		$type = $this->getTypeName();

		$nullable = '';
		if( !$this->nullable ) {
			$nullable = ' NOT NULL';
		}

		$length = '';
		if( $this instanceof RequiredLengthInterface ||
			($this instanceof OptionalLengthInterface && $this->getLength())
		) {
			$l      = (int)$this->getLength();
			$length = "($l)";
		}

		$signed = '';
		if( ($this instanceof SignedInterface) && !$this->isSigned() ) {
			$signed = ' unsigned';
		}

		$default = '';
		if( $this->default !== null ) {
			$default = ' DEFAULT ' . $this->mkString($this->default, "'");
		}

		$charset   = '';
		$collation = '';
		if( ($this instanceof CharsetColumnInterface) && $this->getCharset() ) {
			$charset = ' CHARACTER SET ' . $this->getCharset();
			if( $this->getCollation() ) {
				$collation = ' COLLATE ' . $this->getCollation();
			}
		}

		$comment = '';
		if( $this->comment ) {
			$comment = ' COMMENT ' . $this->mkString($this->comment, "'");
		}

		$autoIncrement = '';
		if( ($this instanceof AbstractIntegerColumn) && $table->isAutoIncrement($this) ) {
			$autoIncrement = ' AUTO_INCREMENT';
		}

		$name = $this->mkString($this->name);

		return "{$name} {$type}{$length}{$signed}{$charset}{$collation}{$nullable}{$default}{$autoIncrement}{$comment}";
	}

	/**
	 * @return string
	 */
	abstract public function getTypeName() : string;

	/**
	 * @return mixed varies by column type
	 */
	public function getDefault() {
		return $this->default;
	}

	/**
	 * @param mixed $default varies by column type
	 */
	public function setDefault( $default ) : void {
		$this->default = $default;
	}
}
