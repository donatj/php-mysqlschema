<?php

namespace donatj\MySqlSchema\Columns\Numeric;

use donatj\MySqlSchema\Columns\Interfaces\OptionalLengthInterface;
use donatj\MySqlSchema\Columns\Traits\OptionalLengthTrait;

abstract class AbstractIntegerColumn extends AbstractNumberColumn implements OptionalLengthInterface {

	use OptionalLengthTrait;
}
