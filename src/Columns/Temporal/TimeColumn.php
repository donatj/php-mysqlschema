<?php

namespace donatj\MySqlSchema\Columns\Temporal;

class TimeColumn extends AbstractTemporalColumn {
	/**
	 * @return string
	 */
	public function getTypeName() {
		return "time";
	}
}
