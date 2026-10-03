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
