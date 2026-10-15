# Simple PHP MySQL Schema Model

[![Latest Stable Version](https://poser.pugx.org/donatj/mysql-schema/version)](https://packagist.org/packages/donatj/mysql-schema)
[![License](https://poser.pugx.org/donatj/mysql-schema/license)](https://packagist.org/packages/donatj/mysql-schema)
[![ci.yml](https://github.com/donatj/php-mysqlschema/actions/workflows/ci.yml/badge.svg)](https://github.com/donatj/php-mysqlschema/actions/workflows/ci.yml)


An intentionally small PHP object model for describing MySQL tables and rendering `CREATE TABLE` statements. Define columns, keys, foreign keys, and table options in PHP, then call `toString()` to produce SQL for your application or migration tool to execute.

## Requirements

- **php**: >=7.4

## Installing

Install the latest version with:

```bash
composer require 'donatj/mysql-schema'
```

## Example

The following example defines a `users` table with an auto-increment primary key and a unique email index:

```php
<?php

require __DIR__ . '/../vendor/autoload.php';

use donatj\MySqlSchema\Columns\Numeric\Integers\IntColumn;
use donatj\MySqlSchema\Columns\String\Character\VarcharColumn;
use donatj\MySqlSchema\Table;

$users = new Table('users');

$id = new IntColumn('id');
$users->addAutoIncrement($id);

$email = new VarcharColumn('email', 255);
$users->addColumn($email);
$users->addKeyColumn('email_unique', $email, null, 'UNIQUE');

echo $users->toString();

```

It renders:

```sql
CREATE TABLE `users` (
	`id` int unsigned NOT NULL AUTO_INCREMENT,
	`email` varchar(255) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `email_unique` (`email`)
);
```

## Documentation

### Class: donatj\MySqlSchema\Columns\AbstractColumn

#### Method: AbstractColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: AbstractColumn->getComment

```php
function getComment(): string
```

---

#### Method: AbstractColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: AbstractColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: AbstractColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: AbstractColumn->getName

```php
function getName(): string
```

---

#### Method: AbstractColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: AbstractColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: AbstractColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: AbstractColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

### Class: donatj\MySqlSchema\Columns\Interfaces\CharsetColumnInterface

#### Method: CharsetColumnInterface->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: CharsetColumnInterface->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: CharsetColumnInterface->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: CharsetColumnInterface->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

### Class: donatj\MySqlSchema\Columns\Interfaces\DecimalPlacesInterface

#### Method: DecimalPlacesInterface->getDecimalPlaces

```php
function getDecimalPlaces(): int
```

##### Return Value

- ***int*** - The number of digits after the decimal point.

---

#### Method: DecimalPlacesInterface->setDecimalPlaces

```php
function setDecimalPlaces(int $decimalPlaces): void
```

##### Parameters

- ***int*** `$decimalPlaces` - The number of digits after the decimal point.

### Class: donatj\MySqlSchema\Columns\Interfaces\MaxDigitsInterface

#### Method: MaxDigitsInterface->getMaxDigits

```php
function getMaxDigits(): int
```

##### Return Value

- ***int*** - The total number of digits.

---

#### Method: MaxDigitsInterface->setMaxDigits

```php
function setMaxDigits(int $maxDigits): void
```

##### Parameters

- ***int*** `$maxDigits` - The total number of digits.

### Class: donatj\MySqlSchema\Columns\Interfaces\OptionalLengthInterface

#### Method: OptionalLengthInterface->getLength

```php
function getLength(): ?int
```

##### Return Value

- ***int*** | ***null*** - The configured length, if any.

---

#### Method: OptionalLengthInterface->setLength

```php
function setLength(?int $length = null): void
```

##### Parameters

- ***int*** | ***null*** `$length` - The length, or null to omit it.

### Class: donatj\MySqlSchema\Columns\Interfaces\PrecisionInterface

#### Method: PrecisionInterface->getPrecision

```php
function getPrecision(): int
```

##### Return Value

- ***int*** - The floating-point precision.

---

#### Method: PrecisionInterface->setPrecision

```php
function setPrecision(int $precision): void
```

##### Parameters

- ***int*** `$precision` - The floating-point precision.

### Class: donatj\MySqlSchema\Columns\Interfaces\RequiredLengthInterface

#### Method: RequiredLengthInterface->getLength

```php
function getLength(): int
```

##### Return Value

- ***int*** - The configured length.

---

#### Method: RequiredLengthInterface->setLength

```php
function setLength(int $length): void
```

##### Parameters

- ***int*** `$length` - The required length.

### Class: donatj\MySqlSchema\Columns\Interfaces\SignedInterface

#### Method: SignedInterface->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: SignedInterface->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

### Class: donatj\MySqlSchema\Columns\Json\JsonColumn

#### Method: JsonColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: JsonColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: JsonColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: JsonColumn->getComment

```php
function getComment(): string
```

---

#### Method: JsonColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: JsonColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: JsonColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: JsonColumn->getName

```php
function getName(): string
```

---

#### Method: JsonColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: JsonColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: JsonColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: JsonColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

### Class: donatj\MySqlSchema\Columns\Numeric\AbstractFloatingColumn

#### Method: AbstractFloatingColumn->__construct

```php
function __construct(string $name, int $precision)
```

##### Parameters

- ***string*** `$name` - The SQL column name.
- ***int*** `$precision` - The floating-point precision.

---

#### Method: AbstractFloatingColumn->getPrecision

```php
function getPrecision(): int
```

##### Return Value

- ***int*** - The floating-point precision.

---

#### Method: AbstractFloatingColumn->setPrecision

```php
function setPrecision(int $precision): void
```

##### Parameters

- ***int*** `$precision` - The floating-point precision.

---

#### Method: AbstractFloatingColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: AbstractFloatingColumn->getComment

```php
function getComment(): string
```

---

#### Method: AbstractFloatingColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: AbstractFloatingColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: AbstractFloatingColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: AbstractFloatingColumn->getName

```php
function getName(): string
```

---

#### Method: AbstractFloatingColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractFloatingColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: AbstractFloatingColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: AbstractFloatingColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: AbstractFloatingColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: AbstractFloatingColumn->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: AbstractFloatingColumn->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

### Class: donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn

#### Method: AbstractIntegerColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractIntegerColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: AbstractIntegerColumn->getComment

```php
function getComment(): string
```

---

#### Method: AbstractIntegerColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: AbstractIntegerColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: AbstractIntegerColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: AbstractIntegerColumn->getName

```php
function getName(): string
```

---

#### Method: AbstractIntegerColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractIntegerColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: AbstractIntegerColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: AbstractIntegerColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: AbstractIntegerColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: AbstractIntegerColumn->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: AbstractIntegerColumn->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

---

#### Method: AbstractIntegerColumn->getLength

```php
function getLength(): ?int
```

##### Return Value

- ***int*** | ***null*** - The configured length, if any.

---

#### Method: AbstractIntegerColumn->setLength

```php
function setLength(?int $length = null): void
```

##### Parameters

- ***int*** | ***null*** `$length` - The length, or null to omit it.

### Class: donatj\MySqlSchema\Columns\Numeric\AbstractNumberColumn

#### Method: AbstractNumberColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractNumberColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: AbstractNumberColumn->getComment

```php
function getComment(): string
```

---

#### Method: AbstractNumberColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: AbstractNumberColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: AbstractNumberColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: AbstractNumberColumn->getName

```php
function getName(): string
```

---

#### Method: AbstractNumberColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractNumberColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: AbstractNumberColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: AbstractNumberColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: AbstractNumberColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: AbstractNumberColumn->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: AbstractNumberColumn->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

### Class: donatj\MySqlSchema\Columns\Numeric\FixedPoint\DecimalColumn

#### Method: DecimalColumn->__construct

```php
function __construct(string $name, int $maxDigits, int $decimalPlaces)
```

##### Parameters

- ***string*** `$name` - The SQL column name.
- ***int*** `$maxDigits` - The total number of digits.
- ***int*** `$decimalPlaces` - The number of digits after the decimal point.

---

#### Method: DecimalColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: DecimalColumn->getMaxDigits

```php
function getMaxDigits(): int
```

##### Return Value

- ***int*** - The total number of digits.

---

#### Method: DecimalColumn->setMaxDigits

```php
function setMaxDigits(int $maxDigits): void
```

##### Parameters

- ***int*** `$maxDigits` - The total number of digits.

---

#### Method: DecimalColumn->getDecimalPlaces

```php
function getDecimalPlaces(): int
```

##### Return Value

- ***int*** - The number of digits after the decimal point.

---

#### Method: DecimalColumn->setDecimalPlaces

```php
function setDecimalPlaces(int $decimalPlaces): void
```

##### Parameters

- ***int*** `$decimalPlaces` - The number of digits after the decimal point.

---

#### Method: DecimalColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: DecimalColumn->getComment

```php
function getComment(): string
```

---

#### Method: DecimalColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: DecimalColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: DecimalColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: DecimalColumn->getName

```php
function getName(): string
```

---

#### Method: DecimalColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: DecimalColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: DecimalColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: DecimalColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: DecimalColumn->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: DecimalColumn->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

### Class: donatj\MySqlSchema\Columns\Numeric\FloatingPoint\DoubleColumn

#### Method: DoubleColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: DoubleColumn->__construct

```php
function __construct(string $name, int $precision)
```

##### Parameters

- ***string*** `$name` - The SQL column name.
- ***int*** `$precision` - The floating-point precision.

---

#### Method: DoubleColumn->getPrecision

```php
function getPrecision(): int
```

##### Return Value

- ***int*** - The floating-point precision.

---

#### Method: DoubleColumn->setPrecision

```php
function setPrecision(int $precision): void
```

##### Parameters

- ***int*** `$precision` - The floating-point precision.

---

#### Method: DoubleColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: DoubleColumn->getComment

```php
function getComment(): string
```

---

#### Method: DoubleColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: DoubleColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: DoubleColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: DoubleColumn->getName

```php
function getName(): string
```

---

#### Method: DoubleColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: DoubleColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: DoubleColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: DoubleColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: DoubleColumn->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: DoubleColumn->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

### Class: donatj\MySqlSchema\Columns\Numeric\FloatingPoint\FloatColumn

#### Method: FloatColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: FloatColumn->__construct

```php
function __construct(string $name, int $precision)
```

##### Parameters

- ***string*** `$name` - The SQL column name.
- ***int*** `$precision` - The floating-point precision.

---

#### Method: FloatColumn->getPrecision

```php
function getPrecision(): int
```

##### Return Value

- ***int*** - The floating-point precision.

---

#### Method: FloatColumn->setPrecision

```php
function setPrecision(int $precision): void
```

##### Parameters

- ***int*** `$precision` - The floating-point precision.

---

#### Method: FloatColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: FloatColumn->getComment

```php
function getComment(): string
```

---

#### Method: FloatColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: FloatColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: FloatColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: FloatColumn->getName

```php
function getName(): string
```

---

#### Method: FloatColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: FloatColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: FloatColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: FloatColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: FloatColumn->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: FloatColumn->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

### Class: donatj\MySqlSchema\Columns\Numeric\Integers\BigIntColumn

#### Method: BigIntColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: BigIntColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: BigIntColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: BigIntColumn->getComment

```php
function getComment(): string
```

---

#### Method: BigIntColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: BigIntColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: BigIntColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: BigIntColumn->getName

```php
function getName(): string
```

---

#### Method: BigIntColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: BigIntColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: BigIntColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: BigIntColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: BigIntColumn->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: BigIntColumn->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

---

#### Method: BigIntColumn->getLength

```php
function getLength(): ?int
```

##### Return Value

- ***int*** | ***null*** - The configured length, if any.

---

#### Method: BigIntColumn->setLength

```php
function setLength(?int $length = null): void
```

##### Parameters

- ***int*** | ***null*** `$length` - The length, or null to omit it.

### Class: donatj\MySqlSchema\Columns\Numeric\Integers\IntColumn

#### Method: IntColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: IntColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: IntColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: IntColumn->getComment

```php
function getComment(): string
```

---

#### Method: IntColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: IntColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: IntColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: IntColumn->getName

```php
function getName(): string
```

---

#### Method: IntColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: IntColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: IntColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: IntColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: IntColumn->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: IntColumn->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

---

#### Method: IntColumn->getLength

```php
function getLength(): ?int
```

##### Return Value

- ***int*** | ***null*** - The configured length, if any.

---

#### Method: IntColumn->setLength

```php
function setLength(?int $length = null): void
```

##### Parameters

- ***int*** | ***null*** `$length` - The length, or null to omit it.

### Class: donatj\MySqlSchema\Columns\Numeric\Integers\MediumIntColumn

#### Method: MediumIntColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: MediumIntColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: MediumIntColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: MediumIntColumn->getComment

```php
function getComment(): string
```

---

#### Method: MediumIntColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: MediumIntColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: MediumIntColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: MediumIntColumn->getName

```php
function getName(): string
```

---

#### Method: MediumIntColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: MediumIntColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: MediumIntColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: MediumIntColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: MediumIntColumn->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: MediumIntColumn->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

---

#### Method: MediumIntColumn->getLength

```php
function getLength(): ?int
```

##### Return Value

- ***int*** | ***null*** - The configured length, if any.

---

#### Method: MediumIntColumn->setLength

```php
function setLength(?int $length = null): void
```

##### Parameters

- ***int*** | ***null*** `$length` - The length, or null to omit it.

### Class: donatj\MySqlSchema\Columns\Numeric\Integers\SmallIntColumn

#### Method: SmallIntColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: SmallIntColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: SmallIntColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: SmallIntColumn->getComment

```php
function getComment(): string
```

---

#### Method: SmallIntColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: SmallIntColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: SmallIntColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: SmallIntColumn->getName

```php
function getName(): string
```

---

#### Method: SmallIntColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: SmallIntColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: SmallIntColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: SmallIntColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: SmallIntColumn->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: SmallIntColumn->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

---

#### Method: SmallIntColumn->getLength

```php
function getLength(): ?int
```

##### Return Value

- ***int*** | ***null*** - The configured length, if any.

---

#### Method: SmallIntColumn->setLength

```php
function setLength(?int $length = null): void
```

##### Parameters

- ***int*** | ***null*** `$length` - The length, or null to omit it.

### Class: donatj\MySqlSchema\Columns\Numeric\Integers\TinyIntColumn

#### Method: TinyIntColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: TinyIntColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: TinyIntColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: TinyIntColumn->getComment

```php
function getComment(): string
```

---

#### Method: TinyIntColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: TinyIntColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: TinyIntColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: TinyIntColumn->getName

```php
function getName(): string
```

---

#### Method: TinyIntColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: TinyIntColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: TinyIntColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: TinyIntColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: TinyIntColumn->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: TinyIntColumn->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

---

#### Method: TinyIntColumn->getLength

```php
function getLength(): ?int
```

##### Return Value

- ***int*** | ***null*** - The configured length, if any.

---

#### Method: TinyIntColumn->setLength

```php
function setLength(?int $length = null): void
```

##### Parameters

- ***int*** | ***null*** `$length` - The length, or null to omit it.

### Class: donatj\MySqlSchema\Columns\String\AbstractCharacterColumn

#### Method: AbstractCharacterColumn->__construct

```php
function __construct(string $name, int $length)
```

##### Parameters

- ***string*** `$name` - The SQL column name.
- ***int*** `$length` - The column length.

---

#### Method: AbstractCharacterColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: AbstractCharacterColumn->getComment

```php
function getComment(): string
```

---

#### Method: AbstractCharacterColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: AbstractCharacterColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: AbstractCharacterColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: AbstractCharacterColumn->getName

```php
function getName(): string
```

---

#### Method: AbstractCharacterColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractCharacterColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: AbstractCharacterColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: AbstractCharacterColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: AbstractCharacterColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: AbstractCharacterColumn->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: AbstractCharacterColumn->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: AbstractCharacterColumn->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: AbstractCharacterColumn->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

---

#### Method: AbstractCharacterColumn->getLength

```php
function getLength(): int
```

##### Return Value

- ***int*** - The configured length.

---

#### Method: AbstractCharacterColumn->setLength

```php
function setLength(int $length): void
```

##### Parameters

- ***int*** `$length` - The required length.

### Class: donatj\MySqlSchema\Columns\String\AbstractStringColumn

#### Method: AbstractStringColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractStringColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: AbstractStringColumn->getComment

```php
function getComment(): string
```

---

#### Method: AbstractStringColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: AbstractStringColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: AbstractStringColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: AbstractStringColumn->getName

```php
function getName(): string
```

---

#### Method: AbstractStringColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractStringColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: AbstractStringColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: AbstractStringColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: AbstractStringColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: AbstractStringColumn->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: AbstractStringColumn->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: AbstractStringColumn->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: AbstractStringColumn->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

### Class: donatj\MySqlSchema\Columns\String\AbstractTextColumn

#### Method: AbstractTextColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractTextColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: AbstractTextColumn->getComment

```php
function getComment(): string
```

---

#### Method: AbstractTextColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: AbstractTextColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: AbstractTextColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: AbstractTextColumn->getName

```php
function getName(): string
```

---

#### Method: AbstractTextColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractTextColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: AbstractTextColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: AbstractTextColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: AbstractTextColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: AbstractTextColumn->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: AbstractTextColumn->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: AbstractTextColumn->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: AbstractTextColumn->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

### Class: donatj\MySqlSchema\Columns\String\Character\CharColumn

#### Method: CharColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: CharColumn->__construct

```php
function __construct(string $name, int $length)
```

##### Parameters

- ***string*** `$name` - The SQL column name.
- ***int*** `$length` - The column length.

---

#### Method: CharColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: CharColumn->getComment

```php
function getComment(): string
```

---

#### Method: CharColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: CharColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: CharColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: CharColumn->getName

```php
function getName(): string
```

---

#### Method: CharColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: CharColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: CharColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: CharColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: CharColumn->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: CharColumn->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: CharColumn->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: CharColumn->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

---

#### Method: CharColumn->getLength

```php
function getLength(): int
```

##### Return Value

- ***int*** - The configured length.

---

#### Method: CharColumn->setLength

```php
function setLength(int $length): void
```

##### Parameters

- ***int*** `$length` - The required length.

### Class: donatj\MySqlSchema\Columns\String\Character\VarcharColumn

#### Method: VarcharColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: VarcharColumn->__construct

```php
function __construct(string $name, int $length)
```

##### Parameters

- ***string*** `$name` - The SQL column name.
- ***int*** `$length` - The column length.

---

#### Method: VarcharColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: VarcharColumn->getComment

```php
function getComment(): string
```

---

#### Method: VarcharColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: VarcharColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: VarcharColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: VarcharColumn->getName

```php
function getName(): string
```

---

#### Method: VarcharColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: VarcharColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: VarcharColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: VarcharColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: VarcharColumn->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: VarcharColumn->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: VarcharColumn->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: VarcharColumn->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

---

#### Method: VarcharColumn->getLength

```php
function getLength(): int
```

##### Return Value

- ***int*** - The configured length.

---

#### Method: VarcharColumn->setLength

```php
function setLength(int $length): void
```

##### Parameters

- ***int*** `$length` - The required length.

### Class: donatj\MySqlSchema\Columns\String\Text\LongTextColumn

#### Method: LongTextColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: LongTextColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: LongTextColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: LongTextColumn->getComment

```php
function getComment(): string
```

---

#### Method: LongTextColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: LongTextColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: LongTextColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: LongTextColumn->getName

```php
function getName(): string
```

---

#### Method: LongTextColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: LongTextColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: LongTextColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: LongTextColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: LongTextColumn->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: LongTextColumn->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: LongTextColumn->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: LongTextColumn->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

### Class: donatj\MySqlSchema\Columns\String\Text\MediumTextColumn

#### Method: MediumTextColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: MediumTextColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: MediumTextColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: MediumTextColumn->getComment

```php
function getComment(): string
```

---

#### Method: MediumTextColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: MediumTextColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: MediumTextColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: MediumTextColumn->getName

```php
function getName(): string
```

---

#### Method: MediumTextColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: MediumTextColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: MediumTextColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: MediumTextColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: MediumTextColumn->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: MediumTextColumn->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: MediumTextColumn->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: MediumTextColumn->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

### Class: donatj\MySqlSchema\Columns\String\Text\TextColumn

#### Method: TextColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: TextColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: TextColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: TextColumn->getComment

```php
function getComment(): string
```

---

#### Method: TextColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: TextColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: TextColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: TextColumn->getName

```php
function getName(): string
```

---

#### Method: TextColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: TextColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: TextColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: TextColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: TextColumn->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: TextColumn->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: TextColumn->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: TextColumn->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

### Class: donatj\MySqlSchema\Columns\String\Text\TinyTextColumn

#### Method: TinyTextColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: TinyTextColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: TinyTextColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: TinyTextColumn->getComment

```php
function getComment(): string
```

---

#### Method: TinyTextColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: TinyTextColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: TinyTextColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: TinyTextColumn->getName

```php
function getName(): string
```

---

#### Method: TinyTextColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: TinyTextColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: TinyTextColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: TinyTextColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: TinyTextColumn->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: TinyTextColumn->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: TinyTextColumn->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: TinyTextColumn->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

### Class: donatj\MySqlSchema\Columns\Temporal\AbstractTemporalColumn

#### Method: AbstractTemporalColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractTemporalColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: AbstractTemporalColumn->getComment

```php
function getComment(): string
```

---

#### Method: AbstractTemporalColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: AbstractTemporalColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: AbstractTemporalColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: AbstractTemporalColumn->getName

```php
function getName(): string
```

---

#### Method: AbstractTemporalColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: AbstractTemporalColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: AbstractTemporalColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: AbstractTemporalColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: AbstractTemporalColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

### Class: donatj\MySqlSchema\Columns\Temporal\DateTimeColumn

#### Method: DateTimeColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: DateTimeColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: DateTimeColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: DateTimeColumn->getComment

```php
function getComment(): string
```

---

#### Method: DateTimeColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: DateTimeColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: DateTimeColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: DateTimeColumn->getName

```php
function getName(): string
```

---

#### Method: DateTimeColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: DateTimeColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: DateTimeColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: DateTimeColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

### Class: donatj\MySqlSchema\Columns\Temporal\TimeColumn

#### Method: TimeColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: TimeColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: TimeColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: TimeColumn->getComment

```php
function getComment(): string
```

---

#### Method: TimeColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: TimeColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: TimeColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: TimeColumn->getName

```php
function getName(): string
```

---

#### Method: TimeColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: TimeColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: TimeColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: TimeColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

### Class: donatj\MySqlSchema\Columns\Temporal\TimestampColumn

#### Method: TimestampColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: TimestampColumn->__construct

```php
function __construct(string $name)
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: TimestampColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: TimestampColumn->getComment

```php
function getComment(): string
```

---

#### Method: TimestampColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: TimestampColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: TimestampColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: TimestampColumn->getName

```php
function getName(): string
```

---

#### Method: TimestampColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: TimestampColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: TimestampColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: TimestampColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

### Class: donatj\MySqlSchema\Columns\Temporal\YearColumn

#### Method: YearColumn->__construct

```php
function __construct(string $name, int $length = 4)
```

##### Parameters

- ***string*** `$name` - The SQL column name.
- ***int*** `$length` - The year length. Must be 2 or 4.

---

#### Method: YearColumn->setLength

```php
function setLength(int $length): void
```

##### Parameters

- ***int*** `$length` - The year length. Must be 2 or 4.

**Throws**: `\InvalidArgumentException`

---

#### Method: YearColumn->getTypeName

```php
function getTypeName(): string
```

##### Return Value

- ***string*** - The MySQL type name.

---

#### Method: YearColumn->getTables

```php
function getTables(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Table>*** - Tables that include this column.

---

#### Method: YearColumn->getComment

```php
function getComment(): string
```

---

#### Method: YearColumn->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The column comment.

---

#### Method: YearColumn->isNullable

```php
function isNullable(): bool
```

---

#### Method: YearColumn->setNullable

```php
function setNullable(bool $nullable): void
```

##### Parameters

- ***bool*** `$nullable` - Whether the column accepts NULL values.

---

#### Method: YearColumn->getName

```php
function getName(): string
```

---

#### Method: YearColumn->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL column name.

---

#### Method: YearColumn->toString

```php
function toString(\donatj\MySqlSchema\Table $table): string
```

##### Parameters

- ***\donatj\MySqlSchema\Table*** `$table` - The table that contains the column.

##### Return Value

- ***string*** - The SQL column definition.

---

#### Method: YearColumn->getDefault

```php
function getDefault()
```

##### Return Value

- ***mixed*** - The value used in the SQL DEFAULT clause.

---

#### Method: YearColumn->setDefault

```php
function setDefault($default): void
```

Sets the value used in the SQL DEFAULT clause.

##### Parameters

- ***mixed*** `$default` - Pass null to omit the DEFAULT clause.

---

#### Method: YearColumn->getLength

```php
function getLength(): int
```

##### Return Value

- ***int*** - The configured length.

### Class: donatj\MySqlSchema\Columns\Traits\OptionalLengthTrait

#### Method: OptionalLengthTrait->getLength

```php
function getLength(): ?int
```

##### Return Value

- ***int*** | ***null*** - The configured length, if any.

---

#### Method: OptionalLengthTrait->setLength

```php
function setLength(?int $length = null): void
```

##### Parameters

- ***int*** | ***null*** `$length` - The length, or null to omit it.

### Class: donatj\MySqlSchema\Columns\Traits\RequiredLengthTrait

#### Method: RequiredLengthTrait->getLength

```php
function getLength(): int
```

##### Return Value

- ***int*** - The configured length.

---

#### Method: RequiredLengthTrait->setLength

```php
function setLength(int $length): void
```

##### Parameters

- ***int*** `$length` - The required length.

### Class: donatj\MySqlSchema\Columns\Traits\SignedTrait

#### Method: SignedTrait->isSigned

```php
function isSigned(): bool
```

##### Return Value

- ***bool*** - Whether the numeric column is signed.

---

#### Method: SignedTrait->setSigned

```php
function setSigned(bool $signed): void
```

##### Parameters

- ***bool*** `$signed` - Whether the numeric column is signed.

### Class: donatj\MySqlSchema\Table

#### Method: Table->__construct

```php
function __construct(string $name)
```

Creates a table definition.

##### Parameters

- ***string*** `$name` - The SQL table name.

---

#### Method: Table->getColumns

```php
function getColumns(): array
```

##### Return Value

- ***list<\donatj\MySqlSchema\Columns\AbstractColumn>*** - Columns in the order they were added.

---

#### Method: Table->getComment

```php
function getComment(): string
```

---

#### Method: Table->setComment

```php
function setComment(string $comment): void
```

##### Parameters

- ***string*** `$comment` - The table comment.

---

#### Method: Table->getEngine

```php
function getEngine(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured storage engine.

---

#### Method: Table->setEngine

```php
function setEngine(?string $engine): void
```

##### Parameters

- ***string*** | ***null*** `$engine` - The storage engine, or null to unset it.

---

#### Method: Table->getName

```php
function getName(): string
```

---

#### Method: Table->setName

```php
function setName(string $name): void
```

##### Parameters

- ***string*** `$name` - The SQL table name.

---

#### Method: Table->addAutoIncrement

```php
function addAutoIncrement(
	\donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn $column,
): void
```

Marks an integer column as auto-incrementing and as a primary key.

##### Parameters

- ***\donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn*** `$column` - The auto-incrementing column.

---

#### Method: Table->getAutoIncrementColumn

```php
function getAutoIncrementColumn(
): ?\donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn
```

##### Return Value

- ***\donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn*** | ***null*** - The auto-incrementing column, if one is set.

---

#### Method: Table->isAutoIncrement

```php
function isAutoIncrement(
	\donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn $column,
): bool
```

##### Parameters

- ***\donatj\MySqlSchema\Columns\Numeric\AbstractIntegerColumn*** `$column` - The column to check.

##### Return Value

- ***bool***

---

#### Method: Table->addPrimaryKey

```php
function addPrimaryKey(\donatj\MySqlSchema\Columns\AbstractColumn $column): void
```

##### Parameters

- ***\donatj\MySqlSchema\Columns\AbstractColumn*** `$column` - The column to add to the primary key.

---

#### Method: Table->isPrimaryKey

```php
function isPrimaryKey(\donatj\MySqlSchema\Columns\AbstractColumn $column): bool
```

##### Parameters

- ***\donatj\MySqlSchema\Columns\AbstractColumn*** `$column` - The column to check.

##### Return Value

- ***bool***

---

#### Method: Table->addKeyColumn

```php
function addKeyColumn(
	string $keyName,
	\donatj\MySqlSchema\Columns\AbstractColumn $column,
	?int $index = null,
	string $type = 'NORMAL',
	string $method = '',
): void
```

Adds a column to an index.

##### Parameters

- ***string*** `$keyName` - The index name.
- ***\donatj\MySqlSchema\Columns\AbstractColumn*** `$column` - The column to include in the index.
- ***int*** | ***null*** `$index` - The zero-based position in a multi-column index. Appends when null.
- ***string*** `$type` - The index type, such as NORMAL or UNIQUE.
- ***string*** `$method` - The index method, such as BTREE.

---

#### Method: Table->addForeignKey

```php
function addForeignKey(
	\donatj\MySqlSchema\Columns\AbstractColumn $local,
	\donatj\MySqlSchema\Columns\AbstractColumn $remote,
): void
```

Adds a foreign key from a local column to a remote column.

##### Parameters

- ***\donatj\MySqlSchema\Columns\AbstractColumn*** `$local` - The local column.
- ***\donatj\MySqlSchema\Columns\AbstractColumn*** `$remote` - The referenced column.

---

#### Method: Table->addColumn

```php
function addColumn(\donatj\MySqlSchema\Columns\AbstractColumn $column): void
```

##### Parameters

- ***\donatj\MySqlSchema\Columns\AbstractColumn*** `$column` - The column to add.

---

#### Method: Table->toString

```php
function toString(): string
```

##### Return Value

- ***string*** - The CREATE TABLE statement.

---

#### Method: Table->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: Table->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: Table->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: Table->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

### Class: donatj\MySqlSchema\Traits\CharsetAndCollationTrait

#### Method: CharsetAndCollationTrait->getCharset

```php
function getCharset(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured character set.

---

#### Method: CharsetAndCollationTrait->setCharset

```php
function setCharset(?string $charset): void
```

##### Parameters

- ***string*** | ***null*** `$charset` - The character set, or null to unset it.

---

#### Method: CharsetAndCollationTrait->getCollation

```php
function getCollation(): ?string
```

##### Return Value

- ***string*** | ***null*** - The configured collation.

---

#### Method: CharsetAndCollationTrait->setCollation

```php
function setCollation(?string $collation): void
```

##### Parameters

- ***string*** | ***null*** `$collation` - The collation, or null to unset it.

### Class: donatj\MySqlSchema\Traits\EscapeTrait