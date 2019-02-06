<?php

namespace donatj\MySqlSchema\Columns\String\Enumerated;

use donatj\MySqlSchema\Columns\String\AbstractEnumeratedColumn;

class EnumColumn extends AbstractEnumeratedColumn {

	/**
	 * @return string
	 */
	public function getTypeName() : string {
		return 'varchar';
	}
}
