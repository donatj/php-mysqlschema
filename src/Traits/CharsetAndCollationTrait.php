<?php

namespace donatj\MySqlSchema\Traits;

trait CharsetAndCollationTrait {

	/**
	 * @var string|null
	 */
	protected $charset;

	/**
	 * @var string|null
	 */
	protected $collation;

	public function getCharset() : ?string {
		return $this->charset;
	}

	public function setCharset( ?string $charset ) : void {
		$this->charset = $charset;
	}

	public function getCollation() : ?string {
		return $this->collation;
	}

	public function setCollation( ?string $collation ) : void {
		$this->collation = $collation;
	}
}
