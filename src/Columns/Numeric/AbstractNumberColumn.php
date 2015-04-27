<?php

namespace donatj\MySqlSchema\Columns\Numeric;

use donatj\MySqlSchema\Columns\AbstractColumn;
use donatj\MySqlSchema\Columns\Interfaces\OptionalLengthInterface;
use donatj\MySqlSchema\Columns\Interfaces\SignedInterface;
use donatj\MySqlSchema\Columns\Traits\OptionalLengthTrait;
use donatj\MySqlSchema\Columns\Traits\SignedTrait;

abstract class AbstractNumberColumn extends AbstractColumn implements OptionalLengthInterface, SignedInterface {

	use OptionalLengthTrait;
	use SignedTrait;
}
