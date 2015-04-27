<?php

namespace donatj\MySqlSchema\Columns\String\Character;

use donatj\MySqlSchema\Columns\String\AbstractCharacterColumn;

class CharColumn extends AbstractCharacterColumn {
	/**
	 * @return string
	 */
	public function getTypeName() {
		return 'char';
	}
}
