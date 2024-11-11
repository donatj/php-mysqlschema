<?php

namespace donatj\MySqlSchema\Columns;

use donatj\MySqlSchema\Columns\Interfaces\CharsetColumnInterface;
use donatj\MySqlSchema\Columns\Interfaces\DecimalPlacesInterface;
use donatj\MySqlSchema\Columns\Interfaces\MaxDigitsInterface;
use donatj\MySqlSchema\Columns\Interfaces\OptionalLengthInterface;
use donatj\MySqlSchema\Columns\Interfaces\PrecisionInterface;
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
	protected $tables = [ ];
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
	public function __construct( $name ) {
		$this->name = $name;
	}

	/**
	 * @access private
	 * @param \donatj\MySqlSchema\Table $table
	 * @return void
	 */
	public function addTable( Table $table ) {
		$this->tables[spl_object_hash($table)] = $table;
	}

	/**
	 * @return \donatj\MySqlSchema\Table[]
	 */
	public function getTables() {
		return array_values($this->tables);
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
	 * @return boolean
	 */
	public function isNullable() {
		return $this->nullable;
	}

	/**
	 * @param boolean $nullable
	 * @return void
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
	 * @return void
	 */
	public function setName( $name ) {
		$this->name = $name;
	}

	/**
	 * @param \donatj\MySqlSchema\Table $table
	 * @return string
	 */
	public function toString( Table $table ) {
		$type = $this->getTypeName();

		$nullable = '';
		if( !$this->nullable ) {
			$nullable = ' NOT NULL';
		}

		$modifier = $this->getTypeModifierString();

		$signed = '';
		if( $this instanceof SignedInterface ) {
			if( !$this->isSigned() ) {
				$signed = " unsigned";
			}
		}

		$default = '';
		if( !is_null($this->default) ) {
			$default = ' DEFAULT ' . $this->mkString($this->default, "'");;
		}

		$charset   = '';
		$collation = '';
		if( $this instanceof CharsetColumnInterface ) {
			if( $this->getCharset() ) {
				$charset = ' CHARACTER SET ' . $this->getCharset();
				if( $this->getCollation() ) {
					$collation = ' COLLATE ' . $this->getCollation();
				}
			}
		}

		$comment = '';
		if( $this->comment ) {
			$comment = ' COMMENT ' . $this->mkString($this->comment, "'");
		}

		$autoIncrement = '';
		if( $this instanceof AbstractIntegerColumn ) {
			if( $table->isAutoIncrement($this) ) {
				$autoIncrement = ' AUTO_INCREMENT';
			}
		}

		$name = $this->mkString($this->name);

		return "{$name} {$type}{$modifier}{$signed}{$charset}{$collation}{$nullable}{$default}{$autoIncrement}{$comment}";
	}

	/**
	 * @return string
	 */
	abstract public function getTypeName();

	/**
	 * @return mixed
	 */
	public function getDefault() {
		return $this->default;
	}

	/**
	 * @param mixed $default
	 * @return void
	 */
	public function setDefault( $default ) {
		$this->default = $default;
	}

	/**
	 * @return string
	 */
	private function getTypeModifierString() {
		if( $this instanceof RequiredLengthInterface ||
			($this instanceof OptionalLengthInterface && !is_null($this->getLength()))
		) {
			return sprintf("(%s)", $this->getLength());
		}

		if( $this instanceof PrecisionInterface ) {
			return sprintf("(%d)", $this->getPrecision());
		}

		if( $this instanceof DecimalPlacesInterface && $this instanceof MaxDigitsInterface) {
			return sprintf("(%d,%d)", $this->getMaxDigits(), $this->getDecimalPlaces());
		}

		return '';
	}
}
