<?php

namespace donatj\MySqlSchema\Columns\Temporal;

class DateTimeColumn extends AbstractTemporalColumn {

	public function getTypeName(): string {
		return 'datetime';
	}

}
