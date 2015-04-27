<?php

namespace donatj\MySqlSchema\Columns\String\Character;

use donatj\MySqlSchema\Columns\String\AbstractCharacterColumn;

class VarcharColumn extends AbstractCharacterColumn {
	/**
	 * @return string
	 */
	public function getTypeName() {
		return 'varchar';
	}
}
