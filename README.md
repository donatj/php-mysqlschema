# Simple PHP MySQL Schema Model

[![Latest Stable Version](https://poser.pugx.org/donatj/mysql-schema/version)](https://packagist.org/packages/donatj/mysql-schema)
[![License](https://poser.pugx.org/donatj/mysql-schema/license)](https://packagist.org/packages/donatj/mysql-schema)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/donatj/PhpMySqlSchema/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/donatj/PhpMySqlSchema)


Simple PHP MySQL Schema Model

## Requirements

- **php**: >=5.4.0

## Installing

Install the latest version with:

```bash
composer require 'donatj/mysql-schema'
```

## Documentation

### Class: \donatj\MySqlSchema\Columns\AbstractColumn

#### Method: AbstractColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: AbstractColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: AbstractColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: AbstractColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: AbstractColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: AbstractColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: AbstractColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: AbstractColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: AbstractColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: AbstractColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: AbstractColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: AbstractColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Interfaces\CharsetColumnInterface

#### Method: CharsetColumnInterface->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: CharsetColumnInterface->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: CharsetColumnInterface->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: CharsetColumnInterface->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Interfaces\DecimalPlacesInterface

#### Method: DecimalPlacesInterface->getDecimalPlaces

```php
function getDecimalPlaces()
```

##### Returns:

- ***int***

---

#### Method: DecimalPlacesInterface->setDecimalPlaces

```php
function setDecimalPlaces($decimalPlaces)
```

##### Parameters:

- ***int*** `$decimalPlaces`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Interfaces\MaxDigitsInterface

#### Method: MaxDigitsInterface->getMaxDigits

```php
function getMaxDigits()
```

##### Returns:

- ***int***

---

#### Method: MaxDigitsInterface->setMaxDigits

```php
function setMaxDigits($maxDigits)
```

##### Parameters:

- ***int*** `$maxDigits`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Interfaces\OptionalLengthInterface

#### Method: OptionalLengthInterface->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: OptionalLengthInterface->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Interfaces\PrecisionInterface

#### Method: PrecisionInterface->getPrecision

```php
function getPrecision()
```

##### Returns:

- ***int***

---

#### Method: PrecisionInterface->setPrecision

```php
function setPrecision($precision)
```

##### Parameters:

- ***int*** `$precision`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Interfaces\RequiredLengthInterface

#### Method: RequiredLengthInterface->getLength

```php
function getLength()
```

##### Returns:

- ***int***

---

#### Method: RequiredLengthInterface->setLength

```php
function setLength($length)
```

##### Parameters:

- ***int*** `$length`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Interfaces\SignedInterface

#### Method: SignedInterface->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: SignedInterface->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Json\JsonColumn

#### Method: JsonColumn->getTypeName

```php
function getTypeName() : string
```

##### Returns:

- ***string***

---

#### Method: JsonColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: JsonColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: JsonColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: JsonColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: JsonColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: JsonColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: JsonColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: JsonColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: JsonColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: JsonColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: JsonColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Numeric\AbstractFloatingColumn

#### Method: AbstractFloatingColumn->__construct

```php
function __construct($name, $precision)
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$precision`

---

#### Method: AbstractFloatingColumn->getPrecision

```php
function getPrecision()
```

##### Returns:

- ***int***

---

#### Method: AbstractFloatingColumn->setPrecision

```php
function setPrecision($precision)
```

##### Parameters:

- ***int*** `$precision`

##### Returns:

- ***void***

---

#### Method: AbstractFloatingColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: AbstractFloatingColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: AbstractFloatingColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: AbstractFloatingColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: AbstractFloatingColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: AbstractFloatingColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: AbstractFloatingColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: AbstractFloatingColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: AbstractFloatingColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: AbstractFloatingColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: AbstractFloatingColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: AbstractFloatingColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: AbstractFloatingColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

### Class: \donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn

#### Method: AbstractIntegerColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: AbstractIntegerColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: AbstractIntegerColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: AbstractIntegerColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: AbstractIntegerColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: AbstractIntegerColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: AbstractIntegerColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: AbstractIntegerColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: AbstractIntegerColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: AbstractIntegerColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: AbstractIntegerColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: AbstractIntegerColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: AbstractIntegerColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: AbstractIntegerColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

---

#### Method: AbstractIntegerColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: AbstractIntegerColumn->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

### Class: \donatj\MySqlSchema\Columns\Numeric\AbstractNumberColumn

#### Method: AbstractNumberColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: AbstractNumberColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: AbstractNumberColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: AbstractNumberColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: AbstractNumberColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: AbstractNumberColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: AbstractNumberColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: AbstractNumberColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: AbstractNumberColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: AbstractNumberColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: AbstractNumberColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: AbstractNumberColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: AbstractNumberColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: AbstractNumberColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

### Class: \donatj\MySqlSchema\Columns\Numeric\FixedPoint\DecimalColumn

#### Method: DecimalColumn->__construct

```php
function __construct($name, $maxDigits, $decimalPlaces)
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$maxDigits`
- ***int*** `$decimalPlaces`

---

#### Method: DecimalColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: DecimalColumn->getMaxDigits

```php
function getMaxDigits()
```

##### Returns:

- ***int***

---

#### Method: DecimalColumn->setMaxDigits

```php
function setMaxDigits($maxDigits)
```

##### Parameters:

- ***int*** `$maxDigits`

##### Returns:

- ***void***

---

#### Method: DecimalColumn->getDecimalPlaces

```php
function getDecimalPlaces()
```

##### Returns:

- ***int***

---

#### Method: DecimalColumn->setDecimalPlaces

```php
function setDecimalPlaces($decimalPlaces)
```

##### Parameters:

- ***int*** `$decimalPlaces`

##### Returns:

- ***void***

---

#### Method: DecimalColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: DecimalColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: DecimalColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: DecimalColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: DecimalColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: DecimalColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: DecimalColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: DecimalColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: DecimalColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: DecimalColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: DecimalColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: DecimalColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

### Class: \donatj\MySqlSchema\Columns\Numeric\FloatingPoint\DoubleColumn

#### Method: DoubleColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: DoubleColumn->__construct

```php
function __construct($name, $precision)
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$precision`

---

#### Method: DoubleColumn->getPrecision

```php
function getPrecision()
```

##### Returns:

- ***int***

---

#### Method: DoubleColumn->setPrecision

```php
function setPrecision($precision)
```

##### Parameters:

- ***int*** `$precision`

##### Returns:

- ***void***

---

#### Method: DoubleColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: DoubleColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: DoubleColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: DoubleColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: DoubleColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: DoubleColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: DoubleColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: DoubleColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: DoubleColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: DoubleColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: DoubleColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: DoubleColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

### Class: \donatj\MySqlSchema\Columns\Numeric\FloatingPoint\FloatColumn

#### Method: FloatColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: FloatColumn->__construct

```php
function __construct($name, $precision)
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$precision`

---

#### Method: FloatColumn->getPrecision

```php
function getPrecision()
```

##### Returns:

- ***int***

---

#### Method: FloatColumn->setPrecision

```php
function setPrecision($precision)
```

##### Parameters:

- ***int*** `$precision`

##### Returns:

- ***void***

---

#### Method: FloatColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: FloatColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: FloatColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: FloatColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: FloatColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: FloatColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: FloatColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: FloatColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: FloatColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: FloatColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: FloatColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: FloatColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

### Class: \donatj\MySqlSchema\Columns\Numeric\Integers\BigIntColumn

#### Method: BigIntColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: BigIntColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: BigIntColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: BigIntColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: BigIntColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: BigIntColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: BigIntColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: BigIntColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: BigIntColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: BigIntColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: BigIntColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: BigIntColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: BigIntColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: BigIntColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

---

#### Method: BigIntColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: BigIntColumn->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

### Class: \donatj\MySqlSchema\Columns\Numeric\Integers\IntColumn

#### Method: IntColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: IntColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: IntColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: IntColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: IntColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: IntColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: IntColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: IntColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: IntColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: IntColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: IntColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: IntColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: IntColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: IntColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

---

#### Method: IntColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: IntColumn->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

### Class: \donatj\MySqlSchema\Columns\Numeric\Integers\MediumIntColumn

#### Method: MediumIntColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: MediumIntColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: MediumIntColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: MediumIntColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: MediumIntColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: MediumIntColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: MediumIntColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: MediumIntColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: MediumIntColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: MediumIntColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: MediumIntColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: MediumIntColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: MediumIntColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: MediumIntColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

---

#### Method: MediumIntColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: MediumIntColumn->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

### Class: \donatj\MySqlSchema\Columns\Numeric\Integers\SmallIntColumn

#### Method: SmallIntColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: SmallIntColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: SmallIntColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: SmallIntColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: SmallIntColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: SmallIntColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: SmallIntColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: SmallIntColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: SmallIntColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: SmallIntColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: SmallIntColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: SmallIntColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: SmallIntColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: SmallIntColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

---

#### Method: SmallIntColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: SmallIntColumn->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

### Class: \donatj\MySqlSchema\Columns\Numeric\Integers\TinyIntColumn

#### Method: TinyIntColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: TinyIntColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: TinyIntColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: TinyIntColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: TinyIntColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: TinyIntColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: TinyIntColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: TinyIntColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: TinyIntColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: TinyIntColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: TinyIntColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: TinyIntColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: TinyIntColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: TinyIntColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

---

#### Method: TinyIntColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: TinyIntColumn->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

### Class: \donatj\MySqlSchema\Columns\String\AbstractCharacterColumn

#### Method: AbstractCharacterColumn->__construct

```php
function __construct($name, $length)
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$length`

---

#### Method: AbstractCharacterColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: AbstractCharacterColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: AbstractCharacterColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: AbstractCharacterColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: AbstractCharacterColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: AbstractCharacterColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: AbstractCharacterColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: AbstractCharacterColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: AbstractCharacterColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: AbstractCharacterColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: AbstractCharacterColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: AbstractCharacterColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: AbstractCharacterColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: AbstractCharacterColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: AbstractCharacterColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

---

#### Method: AbstractCharacterColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int***

---

#### Method: AbstractCharacterColumn->setLength

```php
function setLength($length)
```

##### Parameters:

- ***int*** `$length`

### Class: \donatj\MySqlSchema\Columns\String\AbstractStringColumn

#### Method: AbstractStringColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: AbstractStringColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: AbstractStringColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: AbstractStringColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: AbstractStringColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: AbstractStringColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: AbstractStringColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: AbstractStringColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: AbstractStringColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: AbstractStringColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: AbstractStringColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: AbstractStringColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: AbstractStringColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: AbstractStringColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: AbstractStringColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: AbstractStringColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\String\AbstractTextColumn

#### Method: AbstractTextColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: AbstractTextColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: AbstractTextColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: AbstractTextColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: AbstractTextColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: AbstractTextColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: AbstractTextColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: AbstractTextColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: AbstractTextColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: AbstractTextColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: AbstractTextColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: AbstractTextColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: AbstractTextColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: AbstractTextColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: AbstractTextColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: AbstractTextColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\String\Character\CharColumn

#### Method: CharColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: CharColumn->__construct

```php
function __construct($name, $length)
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$length`

---

#### Method: CharColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: CharColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: CharColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: CharColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: CharColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: CharColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: CharColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: CharColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: CharColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: CharColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: CharColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: CharColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: CharColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: CharColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

---

#### Method: CharColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int***

---

#### Method: CharColumn->setLength

```php
function setLength($length)
```

##### Parameters:

- ***int*** `$length`

### Class: \donatj\MySqlSchema\Columns\String\Character\VarcharColumn

#### Method: VarcharColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: VarcharColumn->__construct

```php
function __construct($name, $length)
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$length`

---

#### Method: VarcharColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: VarcharColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: VarcharColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: VarcharColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: VarcharColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: VarcharColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: VarcharColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: VarcharColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: VarcharColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: VarcharColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: VarcharColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: VarcharColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: VarcharColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: VarcharColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

---

#### Method: VarcharColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int***

---

#### Method: VarcharColumn->setLength

```php
function setLength($length)
```

##### Parameters:

- ***int*** `$length`

### Class: \donatj\MySqlSchema\Columns\String\Text\LongTextColumn

#### Method: LongTextColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: LongTextColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: LongTextColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: LongTextColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: LongTextColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: LongTextColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: LongTextColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: LongTextColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: LongTextColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: LongTextColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: LongTextColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: LongTextColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: LongTextColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: LongTextColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: LongTextColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: LongTextColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\String\Text\MediumTextColumn

#### Method: MediumTextColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: MediumTextColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: MediumTextColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: MediumTextColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: MediumTextColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: MediumTextColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: MediumTextColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: MediumTextColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: MediumTextColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: MediumTextColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: MediumTextColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: MediumTextColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: MediumTextColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: MediumTextColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: MediumTextColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: MediumTextColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\String\Text\TextColumn

#### Method: TextColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: TextColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: TextColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: TextColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: TextColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: TextColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: TextColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: TextColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: TextColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: TextColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: TextColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: TextColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: TextColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: TextColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: TextColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: TextColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\String\Text\TinyTextColumn

#### Method: TinyTextColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: TinyTextColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: TinyTextColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: TinyTextColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: TinyTextColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: TinyTextColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: TinyTextColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: TinyTextColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: TinyTextColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: TinyTextColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: TinyTextColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: TinyTextColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: TinyTextColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: TinyTextColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: TinyTextColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: TinyTextColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Temporal\AbstractTemporalColumn

#### Method: AbstractTemporalColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: AbstractTemporalColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: AbstractTemporalColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: AbstractTemporalColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: AbstractTemporalColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: AbstractTemporalColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: AbstractTemporalColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: AbstractTemporalColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: AbstractTemporalColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: AbstractTemporalColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: AbstractTemporalColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: AbstractTemporalColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Temporal\DateTimeColumn

#### Method: DateTimeColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: DateTimeColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: DateTimeColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: DateTimeColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: DateTimeColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: DateTimeColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: DateTimeColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: DateTimeColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: DateTimeColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: DateTimeColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: DateTimeColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: DateTimeColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Temporal\TimeColumn

#### Method: TimeColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: TimeColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: TimeColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: TimeColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: TimeColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: TimeColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: TimeColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: TimeColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: TimeColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: TimeColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: TimeColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: TimeColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Temporal\TimestampColumn

#### Method: TimestampColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: TimestampColumn->__construct

```php
function __construct($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: TimestampColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: TimestampColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: TimestampColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: TimestampColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: TimestampColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: TimestampColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: TimestampColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: TimestampColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: TimestampColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: TimestampColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Columns\Temporal\YearColumn

#### Method: YearColumn->__construct

```php
function __construct($name [, $length = 4])
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$length` - 2 or 4

---

#### Method: YearColumn->setLength

```php
function setLength($length)
```

##### Parameters:

- ***int*** `$length` - 2 or 4

**Throws**: `\InvalidArgumentException`

##### Returns:

- ***void***

---

#### Method: YearColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: YearColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: YearColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: YearColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: YearColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***bool***

---

#### Method: YearColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***bool*** `$nullable`

##### Returns:

- ***void***

---

#### Method: YearColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: YearColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: YearColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: YearColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: YearColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

##### Returns:

- ***void***

---

#### Method: YearColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int***

### Class: \donatj\MySqlSchema\Columns\Traits\OptionalLengthTrait

#### Method: OptionalLengthTrait->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: OptionalLengthTrait->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

### Class: \donatj\MySqlSchema\Columns\Traits\RequiredLengthTrait

#### Method: RequiredLengthTrait->getLength

```php
function getLength()
```

##### Returns:

- ***int***

---

#### Method: RequiredLengthTrait->setLength

```php
function setLength($length)
```

##### Parameters:

- ***int*** `$length`

### Class: \donatj\MySqlSchema\Columns\Traits\SignedTrait

#### Method: SignedTrait->isSigned

```php
function isSigned()
```

##### Returns:

- ***bool***

---

#### Method: SignedTrait->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***bool*** `$signed`

### Class: \donatj\MySqlSchema\Table

#### Method: Table->__construct

```php
function __construct($name)
```

Table constructor.

##### Parameters:

- ***string*** `$name`

---

#### Method: Table->getColumns

```php
function getColumns()
```

##### Returns:

- ***\donatj\MySqlSchema\Columns\AbstractColumn[]***

---

#### Method: Table->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: Table->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

##### Returns:

- ***void***

---

#### Method: Table->getEngine

```php
function getEngine()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: Table->setEngine

```php
function setEngine($engine)
```

##### Parameters:

- ***null*** | ***string*** `$engine`

##### Returns:

- ***void***

---

#### Method: Table->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: Table->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

##### Returns:

- ***void***

---

#### Method: Table->addAutoIncrement

```php
function addAutoIncrement(\donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn $column)
```

##### Returns:

- ***void***

---

#### Method: Table->getAutoIncrementColumn

```php
function getAutoIncrementColumn()
```

##### Returns:

- ***\donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn*** | ***null***

---

#### Method: Table->isAutoIncrement

```php
function isAutoIncrement(\donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn $column)
```

##### Parameters:

- ***\donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn*** `$column`

##### Returns:

- ***bool***

---

#### Method: Table->addPrimaryKey

```php
function addPrimaryKey(\donatj\MySqlSchema\Columns\AbstractColumn $column)
```

##### Returns:

- ***void***

---

#### Method: Table->isPrimaryKey

```php
function isPrimaryKey(\donatj\MySqlSchema\Columns\AbstractColumn $column)
```

##### Parameters:

- ***\donatj\MySqlSchema\Columns\AbstractColumn*** `$column`

##### Returns:

- ***bool***

---

#### Method: Table->addKeyColumn

```php
function addKeyColumn($keyName, \donatj\MySqlSchema\Columns\AbstractColumn $column [, $index = null [, $type = 'NORMAL' [, $method = '']]])
```

##### Parameters:

- ***string*** `$keyName`
- ***\donatj\MySqlSchema\Columns\AbstractColumn*** `$column`
- ***int*** | ***null*** `$index`
- ***string*** `$type`
- ***string*** `$method`

##### Returns:

- ***void***

---

#### Method: Table->addForeignKey

```php
function addForeignKey(\donatj\MySqlSchema\Columns\AbstractColumn $local, \donatj\MySqlSchema\Columns\AbstractColumn $remote)
```

##### Returns:

- ***void***

---

#### Method: Table->addColumn

```php
function addColumn(\donatj\MySqlSchema\Columns\AbstractColumn $column)
```

##### Returns:

- ***void***

---

#### Method: Table->toString

```php
function toString()
```

##### Returns:

- ***string***

---

#### Method: Table->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: Table->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: Table->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: Table->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Traits\CharsetAndCollationTrait

#### Method: CharsetAndCollationTrait->getCharset

```php
function getCharset()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: CharsetAndCollationTrait->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** | ***string*** `$charset`

##### Returns:

- ***void***

---

#### Method: CharsetAndCollationTrait->getCollation

```php
function getCollation()
```

##### Returns:

- ***null*** | ***string***

---

#### Method: CharsetAndCollationTrait->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** | ***string*** `$collation`

##### Returns:

- ***void***

### Class: \donatj\MySqlSchema\Traits\EscapeTrait