<?php

namespace donatj\MySqlSchema\Traits;

trait CharsetAndCollationTrait {


	/**
	 * @var null|string
	 */
	protected $charset = null;

	/**
	 * @var null|string
	 */
	protected $collation = null;

	/**
	 * @return null|string
	 */
	public function getCharset() {
		return $this->charset;
	}

	/**
	 * @param null|string $charset
	 * @return void
	 */
	public function setCharset( $charset ) {
		$this->charset = $charset;
	}

	/**
	 * @return null|string
	 */
	public function getCollation() {
		return $this->collation;
	}

	/**
	 * @param null|string $collation
	 * @return void
	 */
	public function setCollation( $collation ) {
		$this->collation = $collation;
	}
}
