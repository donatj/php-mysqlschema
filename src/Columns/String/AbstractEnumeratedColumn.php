<?php

namespace donatj\MySqlSchema\Columns\String;

use donatj\MySqlSchema\Columns\AbstractColumn;
use donatj\MySqlSchema\Columns\Interfaces\CharsetColumnInterface;
use donatj\MySqlSchema\Columns\Interfaces\EnumeratedColumnInterface;
use donatj\MySqlSchema\Columns\Traits\EnumerationTrait;
use donatj\MySqlSchema\Traits\CharsetAndCollationTrait;

abstract class AbstractEnumeratedColumn extends AbstractColumn implements CharsetColumnInterface, EnumeratedColumnInterface {

	use EnumerationTrait;
	use CharsetAndCollationTrait;
}
