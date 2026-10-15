<?php

namespace donatj\MySqlSchema\Columns\String\Character;

use donatj\MySqlSchema\Columns\String\AbstractCharacterColumn;

class CharColumn extends AbstractCharacterColumn {

	public function getTypeName(): string {
		return 'char';
	}

}
