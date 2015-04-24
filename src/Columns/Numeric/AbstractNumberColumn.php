<?php

namespace donatj\MySqlSchema\Columns\Numeric;

use donatj\MySqlSchema\Columns\AbstractColumn;
use donatj\MySqlSchema\Table;

abstract class AbstractNumberColumn extends AbstractColumn {


	/**
	 * @var bool
	 */
	protected $signed = false;

	/**
	 * @return boolean
	 */
	public function isSigned() {
		return $this->signed;
	}

	/**
	 * @param boolean $signed
	 */
	public function setSigned( $signed ) {
		$this->signed = $signed;
	}

	public function toString( Table $table ) {
		$type = $this->getTypeName();

		$length = '';
		if( $this->length ) {
			$length = "({$this->length}";
			if( $this instanceof AbstractFractionColumn && $this->decimals != null ) {
				$length .= ",{$this->decimals}";
			}
			$length .= ")";
		}

		$signed = '';
		if( !$this->signed ) {
			$signed = " unsigned";
		}

		$nullable = '';
		if( !$this->nullable ) {
			$nullable = ' NOT NULL';
		}

		$default       = '';
		$autoIncrement = '';
		if( $this instanceof AbstractIntegerColumn && $table->isAutoIncrement($this) ) {
			$autoIncrement = ' AUTO_INCREMENT';
		} elseif( !is_null($this->default) ) {
			$default = " DEFAULT " . $this->mkString($this->default, "'");
		}

		$comment = '';
		if( $this->comment ) {
			$data    = $this->escape($this->comment, "'");
			$comment = " COMMENT " . $this->mkString($this->default, "'");
		}

		$name = $this->mkString($this->name);

		return "{$name} {$type}{$length}{$signed}{$nullable}{$default}{$autoIncrement}{$comment}";
	}
}
