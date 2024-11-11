<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface CharsetColumnInterface {

	/**
	 * @return null|string
	 */
	public function getCharset();

	/**
	 * @param null|string $charset
	 * @return void
	 */
	public function setCharset( $charset );

	/**
	 * @return null|string
	 */
	public function getCollation();

	/**
	 * @param null|string $collation
	 * @return void
	 */
	public function setCollation( $collation );
}
