<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface SignedInterface {

	/**
	 * @return boolean
	 */
	public function isSigned();

	/**
	 * @param boolean $signed
	 * @return void
	 */
	public function setSigned( $signed );
}
