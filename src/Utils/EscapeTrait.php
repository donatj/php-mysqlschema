<?php

namespace donatj\MySqlSchema\Utils;

trait EscapeTrait {

	/**
	 * @param string $input
	 * @param string $wrapChar
	 * @return mixed
	 */
	protected function escape( $input, $wrapChar = '`' ) {
		return str_replace($wrapChar, $wrapChar . $wrapChar, $input);
	}

	/**
	 * @param string $input
	 * @param string $wrapChar
	 * @return string
	 */
	protected function mkString( $input, $wrapChar = '`' ) {
		return $wrapChar . $this->escape($input, $wrapChar) . $wrapChar;
	}
}
