<?php

namespace donatj\MySqlSchema\Columns\Numeric\FloatingPoint;

use donatj\MySqlSchema\Columns\Numeric\AbstractFloatingColumn;

class FloatColumn extends AbstractFloatingColumn {

	public function getTypeName(): string {
		return 'float';
	}

}
