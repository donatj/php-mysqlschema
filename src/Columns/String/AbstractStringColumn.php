<?php

namespace donatj\MySqlSchema\Columns\String;

use donatj\MySqlSchema\Columns\AbstractColumn;
use donatj\MySqlSchema\Columns\Interfaces\CharsetColumnInterface;
use donatj\MySqlSchema\Traits\CharsetAndCollationTrait;

abstract class AbstractStringColumn extends AbstractColumn implements CharsetColumnInterface {

	use CharsetAndCollationTrait;
}
