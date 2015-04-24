<?php

namespace donatj\MySqlSchema\Columns\Numeric\Integers;

use donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn;

class BigIntColumn extends AbstractIntegerColumn {

	/**
	 * @return string
	 */
	function getTypeName() {
		return 'bigint';
	}
}
