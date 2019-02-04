<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface SignedInterface {

	/**
	 * @return bool
	 */
	public function isSigned() : bool;

	/**
	 * @param bool $signed
	 */
	public function setSigned( bool $signed ) : void;
}
