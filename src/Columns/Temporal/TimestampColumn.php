<?php

namespace donatj\MySqlSchema\Columns\Temporal;

class TimestampColumn extends AbstractTemporalColumn {
	/**
	 * @return string
	 */
	public function getTypeName() {
		return 'timestamp';
	}
}
