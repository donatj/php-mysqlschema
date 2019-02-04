<?php

namespace donatj\MySqlSchema\Columns\Numeric\FixedPoint;

use donatj\MySqlSchema\Columns\Numeric\AbstractFractionColumn;

class DecimalColumn extends AbstractFractionColumn {

	/**
	 * @return string
	 */
	public function getTypeName() : string {
		return 'decimal';
	}
}
