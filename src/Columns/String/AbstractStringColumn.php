<?php

namespace donatj\MySqlSchema\Columns\String;

use donatj\MySqlSchema\Columns\AbstractColumn;
use donatj\MySqlSchema\Table;

abstract class AbstractStringColumn extends AbstractColumn {

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

	public function toString( Table $table ) {
		$type = $this->getTypeName();

		$nullable = '';
		if( !$this->nullable ) {
			$nullable = ' NOT NULL';
		}

		$length = '';
		if($this instanceof AbstractCharacterColumn) {
			$length = "($this->length)";
		}

		$default = '';
		if( !is_null($this->default) ) {
			$default = ' DEFAULT ' . $this->mkString($this->default, "'");;
		}

		$charset   = '';
		$collation = '';
		if( $this->charset ) {
			$charset = ' CHARACTER SET ' . $this->charset;
			if( $this->collation ) {
				$collation = ' COLLATE ' . $this->collation;
			}
		}

		$comment = '';
		if( $this->comment ) {
			$comment = ' COMMENT ' . $this->mkString($this->comment, "'");
		}


		$name = $this->mkString($this->name);

		return "{$name} {$type}{$length}{$charset}{$collation}{$nullable}{$default}{$comment}";
	}
}
