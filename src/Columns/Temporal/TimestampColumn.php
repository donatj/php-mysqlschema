<?php

namespace donatj\MySqlSchema\Columns\Temporal;

class TimestampColumn extends AbstractTemporalColumn {

	public function getTypeName(): string {
		return 'timestamp';
	}

}
