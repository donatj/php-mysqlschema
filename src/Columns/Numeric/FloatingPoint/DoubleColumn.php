<?php

namespace donatj\MySqlSchema\Columns\Numeric\FloatingPoint;

use donatj\MySqlSchema\Columns\Numeric\AbstractFloatingColumn;

class DoubleColumn extends AbstractFloatingColumn {

	public function getTypeName(): string {
		return 'double';
	}

}
