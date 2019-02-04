<?php

namespace donatj\MySqlSchema\Columns\Numeric\Integers;

use donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn;

class SmallIntColumn extends AbstractIntegerColumn {

	/**
	 * @return string
	 */
	public function getTypeName() : string {
		return 'smallint';
	}
}
