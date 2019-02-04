<?php

namespace donatj\MySqlSchema\Columns\Numeric\Integers;

use donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn;

class MediumIntColumn extends AbstractIntegerColumn {

	/**
	 * @return string
	 */
	public function getTypeName() : string {
		return 'mediumint';
	}
}
