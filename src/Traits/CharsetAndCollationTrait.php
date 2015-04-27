<?php

namespace donatj\MySqlSchema\Traits;

trait CharsetAndCollationTrait {


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
}
