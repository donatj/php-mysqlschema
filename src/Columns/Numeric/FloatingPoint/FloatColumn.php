<?php

namespace donatj\MySqlSchema\Columns\Numeric\FloatingPoint;

use donatj\MySqlSchema\Columns\Numeric\AbstractFractionColumn;

class FloatColumn extends AbstractFractionColumn {

	/**
	 * @return string
	 */
	function getTypeName() {
		return 'float';
	}
}
