<?php

namespace donatj\MySqlSchema\Columns\String\Character;

use donatj\MySqlSchema\Columns\String\AbstractCharacterColumn;

class VarcharColumn extends AbstractCharacterColumn {

	public function getTypeName(): string {
		return 'varchar';
	}

}
