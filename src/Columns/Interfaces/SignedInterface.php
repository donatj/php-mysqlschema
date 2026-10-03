<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface SignedInterface {

	/**
	 * @return bool
	 */
	public function isSigned();

	/**
	 * @param bool $signed
	 * @return void
	 */
	public function setSigned( $signed );
}
