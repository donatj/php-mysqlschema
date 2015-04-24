<?php

namespace donatj\MySqlSchema\Columns\String\Text;

use donatj\MySqlSchema\Columns\String\AbstractTextColumn;

class MediumTextColumn extends AbstractTextColumn {
	/**
	 * @return string
	 */
	public function getTypeName() {
		return 'mediumtext';
	}
}