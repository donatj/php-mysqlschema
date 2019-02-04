<?php

namespace donatj\MySqlSchema\Columns\Traits;

trait SignedTrait {

	/**
	 * @var bool
	 */
	protected $signed = false;

	/**
	 * @return bool
	 */
	public function isSigned() : bool {
		return $this->signed;
	}

	/**
	 * @param bool $signed
	 */
	public function setSigned( bool $signed ) : void {
		$this->signed = $signed;
	}
}
