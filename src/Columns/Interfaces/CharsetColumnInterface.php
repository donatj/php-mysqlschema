<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface CharsetColumnInterface {

	/**
	 * @return string|null
	 */
	public function getCharset();

	/**
	 * @param string|null $charset
	 * @return void
	 */
	public function setCharset( $charset );

	/**
	 * @return string|null
	 */
	public function getCollation();

	/**
	 * @param string|null $collation
	 * @return void
	 */
	public function setCollation( $collation );
}
