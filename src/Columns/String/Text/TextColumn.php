<?php

namespace donatj\MySqlSchema\Columns\String\Text;

use donatj\MySqlSchema\Columns\String\AbstractTextColumn;

class TextColumn extends AbstractTextColumn {

	/**
	 * @return string
	 */
	public function getTypeName() : string {
		return 'text';
	}
}
