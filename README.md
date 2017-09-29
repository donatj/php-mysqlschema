# Simple PHP MySQL Schema Model

[![Latest Stable Version](https://poser.pugx.org/donatj/mysql-schema/version)](https://packagist.org/packages/donatj/mysql-schema)
[![License](https://poser.pugx.org/donatj/mysql-schema/license)](https://packagist.org/packages/donatj/mysql-schema)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/donatj/PhpMySqlSchema/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/donatj/PhpMySqlSchema)


Simple PHP MySQL Schema Model

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

---

#### Method: AbstractColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: AbstractColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: AbstractColumn->toString

```php
function toString($table)
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

### Class: \donatj\MySqlSchema\Columns\Interfaces\CharsetColumnInterface

#### Method: CharsetColumnInterface->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: CharsetColumnInterface->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: CharsetColumnInterface->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: CharsetColumnInterface->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

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

### Class: \donatj\MySqlSchema\Columns\Interfaces\SignedInterface

#### Method: SignedInterface->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: SignedInterface->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

### Class: \donatj\MySqlSchema\Columns\Numeric\AbstractFractionColumn

#### Method: AbstractFractionColumn->__construct

```php
function __construct($name, $decimals)
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$decimals`

---

#### Method: AbstractFractionColumn->getDecimals

```php
function getDecimals()
```

##### Returns:

- ***int***

---

#### Method: AbstractFractionColumn->setDecimals

```php
function setDecimals($decimals)
```

##### Parameters:

- ***int*** `$decimals`



---

#### Method: AbstractFractionColumn->getTables

```php
function getTables()
```

##### Returns:

- ***\donatj\MySqlSchema\Table[]***

---

#### Method: AbstractFractionColumn->getComment

```php
function getComment()
```

##### Returns:

- ***string***

---

#### Method: AbstractFractionColumn->setComment

```php
function setComment($comment)
```

##### Parameters:

- ***string*** `$comment`

---

#### Method: AbstractFractionColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: AbstractFractionColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

---

#### Method: AbstractFractionColumn->getName

```php
function getName()
```

##### Returns:

- ***string***

---

#### Method: AbstractFractionColumn->setName

```php
function setName($name)
```

##### Parameters:

- ***string*** `$name`

---

#### Method: AbstractFractionColumn->toString

```php
function toString($table)
```

##### Parameters:

- ***\donatj\MySqlSchema\Table*** `$table`

##### Returns:

- ***string***

---

#### Method: AbstractFractionColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: AbstractFractionColumn->getDefault

```php
function getDefault()
```

##### Returns:

- ***mixed***

---

#### Method: AbstractFractionColumn->setDefault

```php
function setDefault($default)
```

##### Parameters:

- ***mixed*** `$default`

---

#### Method: AbstractFractionColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: AbstractFractionColumn->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

---

#### Method: AbstractFractionColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: AbstractFractionColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

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

---

#### Method: AbstractIntegerColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: AbstractIntegerColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: AbstractIntegerColumn->toString

```php
function toString($table)
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

---

#### Method: AbstractIntegerColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: AbstractIntegerColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

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

---

#### Method: AbstractNumberColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: AbstractNumberColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: AbstractNumberColumn->toString

```php
function toString($table)
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

---

#### Method: AbstractNumberColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: AbstractNumberColumn->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

---

#### Method: AbstractNumberColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: AbstractNumberColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

### Class: \donatj\MySqlSchema\Columns\Numeric\FixedPoint\DecimalColumn

#### Method: DecimalColumn->getTypeName

```php
function getTypeName()
```

##### Returns:

- ***string***

---

#### Method: DecimalColumn->__construct

```php
function __construct($name, $decimals)
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$decimals`

---

#### Method: DecimalColumn->getDecimals

```php
function getDecimals()
```

##### Returns:

- ***int***

---

#### Method: DecimalColumn->setDecimals

```php
function setDecimals($decimals)
```

##### Parameters:

- ***int*** `$decimals`



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

---

#### Method: DecimalColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: DecimalColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: DecimalColumn->toString

```php
function toString($table)
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

---

#### Method: DecimalColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: DecimalColumn->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

---

#### Method: DecimalColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: DecimalColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

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
function __construct($name, $decimals)
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$decimals`

---

#### Method: DoubleColumn->getDecimals

```php
function getDecimals()
```

##### Returns:

- ***int***

---

#### Method: DoubleColumn->setDecimals

```php
function setDecimals($decimals)
```

##### Parameters:

- ***int*** `$decimals`



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

---

#### Method: DoubleColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: DoubleColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: DoubleColumn->toString

```php
function toString($table)
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

---

#### Method: DoubleColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: DoubleColumn->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

---

#### Method: DoubleColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: DoubleColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

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
function __construct($name, $decimals)
```

##### Parameters:

- ***string*** `$name`
- ***int*** `$decimals`

---

#### Method: FloatColumn->getDecimals

```php
function getDecimals()
```

##### Returns:

- ***int***

---

#### Method: FloatColumn->setDecimals

```php
function setDecimals($decimals)
```

##### Parameters:

- ***int*** `$decimals`



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

---

#### Method: FloatColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: FloatColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: FloatColumn->toString

```php
function toString($table)
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

---

#### Method: FloatColumn->getLength

```php
function getLength()
```

##### Returns:

- ***int*** | ***null***

---

#### Method: FloatColumn->setLength

```php
function setLength([ $length = null])
```

##### Parameters:

- ***int*** | ***null*** `$length`

---

#### Method: FloatColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: FloatColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

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

---

#### Method: BigIntColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: BigIntColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: BigIntColumn->toString

```php
function toString($table)
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

---

#### Method: BigIntColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: BigIntColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

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

---

#### Method: IntColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: IntColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: IntColumn->toString

```php
function toString($table)
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

---

#### Method: IntColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: IntColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

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

---

#### Method: MediumIntColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: MediumIntColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: MediumIntColumn->toString

```php
function toString($table)
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

---

#### Method: MediumIntColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: MediumIntColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

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

---

#### Method: SmallIntColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: SmallIntColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: SmallIntColumn->toString

```php
function toString($table)
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

---

#### Method: SmallIntColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: SmallIntColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

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

---

#### Method: TinyIntColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: TinyIntColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: TinyIntColumn->toString

```php
function toString($table)
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

---

#### Method: TinyIntColumn->isSigned

```php
function isSigned()
```

##### Returns:

- ***boolean***

---

#### Method: TinyIntColumn->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

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

---

#### Method: AbstractCharacterColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: AbstractCharacterColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: AbstractCharacterColumn->toString

```php
function toString($table)
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

---

#### Method: AbstractCharacterColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: AbstractCharacterColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: AbstractCharacterColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: AbstractCharacterColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

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

---

#### Method: AbstractStringColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: AbstractStringColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: AbstractStringColumn->toString

```php
function toString($table)
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

---

#### Method: AbstractStringColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: AbstractStringColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: AbstractStringColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: AbstractStringColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

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

---

#### Method: AbstractTextColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: AbstractTextColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: AbstractTextColumn->toString

```php
function toString($table)
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

---

#### Method: AbstractTextColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: AbstractTextColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: AbstractTextColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: AbstractTextColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

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

---

#### Method: CharColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: CharColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: CharColumn->toString

```php
function toString($table)
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

---

#### Method: CharColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: CharColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: CharColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: CharColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

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

---

#### Method: VarcharColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: VarcharColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: VarcharColumn->toString

```php
function toString($table)
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

---

#### Method: VarcharColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: VarcharColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: VarcharColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: VarcharColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

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

---

#### Method: LongTextColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: LongTextColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: LongTextColumn->toString

```php
function toString($table)
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

---

#### Method: LongTextColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: LongTextColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: LongTextColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: LongTextColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

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

---

#### Method: MediumTextColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: MediumTextColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: MediumTextColumn->toString

```php
function toString($table)
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

---

#### Method: MediumTextColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: MediumTextColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: MediumTextColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: MediumTextColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

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

---

#### Method: TextColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: TextColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: TextColumn->toString

```php
function toString($table)
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

---

#### Method: TextColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: TextColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: TextColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: TextColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

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

---

#### Method: TinyTextColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: TinyTextColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: TinyTextColumn->toString

```php
function toString($table)
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

---

#### Method: TinyTextColumn->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: TinyTextColumn->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: TinyTextColumn->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: TinyTextColumn->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

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

---

#### Method: AbstractTemporalColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: AbstractTemporalColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: AbstractTemporalColumn->toString

```php
function toString($table)
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

---

#### Method: DateTimeColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: DateTimeColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: DateTimeColumn->toString

```php
function toString($table)
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

---

#### Method: TimeColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: TimeColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: TimeColumn->toString

```php
function toString($table)
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

---

#### Method: TimestampColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: TimestampColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: TimestampColumn->toString

```php
function toString($table)
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

---

#### Method: YearColumn->isNullable

```php
function isNullable()
```

##### Returns:

- ***boolean***

---

#### Method: YearColumn->setNullable

```php
function setNullable($nullable)
```

##### Parameters:

- ***boolean*** `$nullable`

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

---

#### Method: YearColumn->toString

```php
function toString($table)
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

- ***boolean***

---

#### Method: SignedTrait->setSigned

```php
function setSigned($signed)
```

##### Parameters:

- ***boolean*** `$signed`

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

---

#### Method: Table->getEngine

```php
function getEngine()
```

##### Returns:

- ***null***

---

#### Method: Table->setEngine

```php
function setEngine($engine)
```

##### Parameters:

- ***null*** `$engine`

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



#### Undocumented Method: `Table->addAutoIncrement($column)`

---

#### Method: Table->isAutoIncrement

```php
function isAutoIncrement($column)
```

##### Parameters:

- ***\donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn*** `$column`

##### Returns:

- ***bool***



#### Undocumented Method: `Table->addPrimaryKey($column)`

---

#### Method: Table->isPrimaryKey

```php
function isPrimaryKey($column)
```

##### Parameters:

- ***\donatj\MySqlSchema\Columns\AbstractColumn*** `$column`

##### Returns:

- ***bool***



#### Undocumented Method: `Table->addKeyColumn($keyName, $column [, $index = null [, $type = 'NORMAL' [, $method = '']]])`



#### Undocumented Method: `Table->addForeignKey($local, $remote)`



#### Undocumented Method: `Table->addColumn($column)`



#### Undocumented Method: `Table->toString()`

---

#### Method: Table->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: Table->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: Table->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: Table->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

### Class: \donatj\MySqlSchema\Traits\CharsetAndCollationTrait

#### Method: CharsetAndCollationTrait->getCharset

```php
function getCharset()
```

##### Returns:

- ***null***

---

#### Method: CharsetAndCollationTrait->setCharset

```php
function setCharset($charset)
```

##### Parameters:

- ***null*** `$charset`

---

#### Method: CharsetAndCollationTrait->getCollation

```php
function getCollation()
```

##### Returns:

- ***null***

---

#### Method: CharsetAndCollationTrait->setCollation

```php
function setCollation($collation)
```

##### Parameters:

- ***null*** `$collation`

### Class: \donatj\MySqlSchema\Traits\EscapeTrait