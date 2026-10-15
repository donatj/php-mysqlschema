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

	/** @var array<int, \donatj\MySqlSchema\Table> */
	protected $tables = [ ];
	/** @var string */
	protected $name;
	/** @var string */
	protected $comment = '';
	/** @var bool */
	protected $nullable = false;
	/** @var mixed */
	protected $default;

	/**
	 * @param string $name The SQL column name.
	 */
	public function __construct( string $name ) {
		$this->name = $name;
	}

	/**
	 * @access private
	 * @param \donatj\MySqlSchema\Table $table
	 * @return void
	 */
	public function addTable( Table $table ): void {
		$this->tables[spl_object_id($table)] = $table;
	}

	/**
	 * @return list<Table> Tables that include this column.
	 */
	public function getTables(): array {
		return array_values($this->tables);
	}

	public function getComment(): string {
		return $this->comment;
	}

	/**
	 * @param string $comment The column comment.
	 * @return void
	 */
	public function setComment( string $comment ): void {
		$this->comment = $comment;
	}

	public function isNullable(): bool {
		return $this->nullable;
	}

	/**
	 * @param bool $nullable Whether the column accepts NULL values.
	 * @return void
	 */
	public function setNullable( bool $nullable ): void {
		$this->nullable = $nullable;
	}

	public function getName(): string {
		return $this->name;
	}

	/**
	 * @param string $name The SQL column name.
	 * @return void
	 */
	public function setName( string $name ): void {
		$this->name = $name;
	}

	/**
	 * @param Table $table The table that contains the column.
	 * @return string The SQL column definition.
	 */
	public function toString( Table $table ): string {
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
		if( $this->default !== null ) {
			$default = ' DEFAULT ' . $this->mkString($this->default, "'");
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
	 * @return string The MySQL type name.
	 */
	abstract public function getTypeName(): string;

	/**
	 * @return mixed The value used in the SQL DEFAULT clause.
	 */
	public function getDefault() {
		return $this->default;
	}

	/**
	 * Sets the value used in the SQL DEFAULT clause.
	 *
	 * @param mixed $default Pass null to omit the DEFAULT clause.
	 * @return void
	 */
	public function setDefault( $default ): void {
		$this->default = $default;
	}

	private function getTypeModifierString(): string {
		if( $this instanceof RequiredLengthInterface
			|| ($this instanceof OptionalLengthInterface && $this->getLength() !== null)
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
