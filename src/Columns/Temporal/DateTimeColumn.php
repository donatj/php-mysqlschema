<?php

namespace donatj\MySqlSchema\Columns\Temporal;

class DateTimeColumn extends AbstractTemporalColumn {
	/**
	 * @return string
	 */
	public function getTypeName() {
		return 'datetime';
	}
}
