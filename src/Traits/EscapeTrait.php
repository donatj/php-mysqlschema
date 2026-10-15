<?php

namespace donatj\MySqlSchema\Traits;

trait EscapeTrait {

	protected function escape( string $input, string $wrapChar = '`' ): string {
		return str_replace($wrapChar, $wrapChar . $wrapChar, $input);
	}

	protected function mkString( string $input, string $wrapChar = '`' ): string {
		return $wrapChar . $this->escape($input, $wrapChar) . $wrapChar;
	}

}
