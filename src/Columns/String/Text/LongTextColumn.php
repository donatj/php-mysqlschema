<?php

namespace donatj\MySqlSchema\Columns\String\Text;

use donatj\MySqlSchema\Columns\String\AbstractTextColumn;

class LongTextColumn extends AbstractTextColumn {

	public function getTypeName(): string {
		return 'longtext';
	}

}
