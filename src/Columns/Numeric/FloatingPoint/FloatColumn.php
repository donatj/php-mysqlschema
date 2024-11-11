<?php

namespace donatj\MySqlSchema\Columns\Numeric\FloatingPoint;

use donatj\MySqlSchema\Columns\Numeric\AbstractFloatingColumn;

class FloatColumn extends AbstractFloatingColumn {

	/**
	 * @return string
	 */
	public function getTypeName() {
		return 'float';
	}
}
