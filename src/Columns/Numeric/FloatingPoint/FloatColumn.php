<?php

namespace donatj\MySqlSchema\Columns\Numeric\FloatingPoint;

use donatj\MySqlSchema\Columns\Numeric\AbstractFractionColumn;

class FloatColumn extends AbstractFractionColumn {

	/**
	 * @return string
	 */
	public function getTypeName() : string {
		return 'float';
	}
}
