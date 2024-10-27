<?php

namespace donatj\MySqlSchema\Columns\Json;

use donatj\MySqlSchema\Columns\AbstractColumn;

class JsonColumn extends AbstractColumn {

	public function getTypeName() : string {
		return 'json';
	}

}
