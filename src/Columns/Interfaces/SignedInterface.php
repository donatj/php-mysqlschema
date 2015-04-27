<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface SignedInterface {

	/**
	 * @return boolean
	 */
	public function isSigned();

	/**
	 * @param boolean $signed
	 */
	public function setSigned( $signed );
}
