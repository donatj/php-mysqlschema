<?php

namespace donatj\MySqlSchema\Columns\Temporal;

class DateColumn extends AbstractTemporalColumn {

	/**
	 * @return string
	 */
	public function getTypeName() : string {
		return 'date';
	}
}
