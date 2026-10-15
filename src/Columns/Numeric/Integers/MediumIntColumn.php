<?php

namespace donatj\MySqlSchema\Columns\Numeric\Integers;

use donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn;

class MediumIntColumn extends AbstractIntegerColumn {

	public function getTypeName(): string {
		return 'mediumint';
	}

}
