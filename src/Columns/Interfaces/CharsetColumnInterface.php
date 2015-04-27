<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface CharsetColumnInterface {

	/**
	 * @return null
	 */
	public function getCharset();

	/**
	 * @param null $charset
	 */
	public function setCharset( $charset );

	/**
	 * @return null
	 */
	public function getCollation();

	/**
	 * @param null $collation
	 */
	public function setCollation( $collation );
}
