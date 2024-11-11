<?php

namespace donatj\MySqlSchema\Columns\Numeric\FloatingPoint;

use donatj\MySqlSchema\Columns\Numeric\AbstractFloatingColumn;

class DoubleColumn extends AbstractFloatingColumn {

	/**
	 * @return string
	 */
	public function getTypeName() {
		return 'double';
	}
}
