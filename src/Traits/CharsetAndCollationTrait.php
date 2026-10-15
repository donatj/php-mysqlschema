<?php

namespace donatj\MySqlSchema\Traits;

trait CharsetAndCollationTrait {

	/** @var string|null */
	protected $charset;

	/** @var string|null */
	protected $collation;

	/**
	 * @return string|null The configured character set.
	 */
	public function getCharset(): ?string {
		return $this->charset;
	}

	/**
	 * @param string|null $charset The character set, or null to unset it.
	 */
	public function setCharset( ?string $charset ): void {
		$this->charset = $charset;
	}

	/**
	 * @return string|null The configured collation.
	 */
	public function getCollation(): ?string {
		return $this->collation;
	}

	/**
	 * @param string|null $collation The collation, or null to unset it.
	 */
	public function setCollation( ?string $collation ): void {
		$this->collation = $collation;
	}

}
