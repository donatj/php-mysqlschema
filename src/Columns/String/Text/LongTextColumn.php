<?php

namespace donatj\MySqlSchema\Columns\String\Text;

use donatj\MySqlSchema\Columns\String\AbstractTextColumn;

class LongTextColumn extends AbstractTextColumn {
	/**
	 * @return string
	 */
	public function getTypeName() {
		return 'longtext';
	}
}