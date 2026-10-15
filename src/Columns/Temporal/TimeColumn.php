<?php

namespace donatj\MySqlSchema\Columns\Temporal;

class TimeColumn extends AbstractTemporalColumn {

	public function getTypeName(): string {
		return "time";
	}

}
