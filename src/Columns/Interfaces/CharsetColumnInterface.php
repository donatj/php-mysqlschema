<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface CharsetColumnInterface {

	/**
	 * @return string|null The configured character set.
	 */
	public function getCharset(): ?string;

	/**
	 * @param string|null $charset The character set, or null to unset it.
	 */
	public function setCharset( ?string $charset ): void;

	/**
	 * @return string|null The configured collation.
	 */
	public function getCollation(): ?string;

	/**
	 * @param string|null $collation The collation, or null to unset it.
	 */
	public function setCollation( ?string $collation ): void;

}
