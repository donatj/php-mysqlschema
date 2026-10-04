<?php

namespace donatj\MySqlSchema\Traits;

trait CharsetAndCollationTrait {

	/** @var string|null */
	protected $charset;

	/** @var string|null */
	protected $collation;

	/**
	 * @return string|null
	 */
	public function getCharset() {
		return $this->charset;
	}

	/**
	 * @param string|null $charset
	 * @return void
	 */
	public function setCharset( $charset ) {
		$this->charset = $charset;
	}

	/**
	 * @return string|null
	 */
	public function getCollation() {
		return $this->collation;
	}

	/**
	 * @param string|null $collation
	 * @return void
	 */
	public function setCollation( $collation ) {
		$this->collation = $collation;
	}

}
