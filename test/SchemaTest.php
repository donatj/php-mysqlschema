<?php

namespace Test;

use donatj\MySqlSchema\Columns\Numeric\Integers\IntColumn;
use donatj\MySqlSchema\Columns\String\Character\VarcharColumn;
use donatj\MySqlSchema\Table;
use PHPUnit\Framework\TestCase;

class SchemaTest extends TestCase {

	public function testRendersColumnModifiersAndEscapesValues() {
		$table = new Table('user` accounts');
		$table->setCharset('utf8mb4');
		$table->setCollation('utf8mb4_unicode_ci');
		$table->setComment('Account table');

		$column = new VarcharColumn('display`name', 80);
		$column->setNullable(true);
		$column->setDefault("John's");
		$column->setCharset('utf8mb4');
		$column->setCollation('utf8mb4_unicode_ci');
		$column->setComment('Visible name');
		$table->addColumn($column);

		$this->assertSame(
			"CREATE TABLE `user`` accounts` (\n\t`display``name` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'John''s' COMMENT 'Visible name'\n) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'Account table';\n",
			$table->toString()
		);
	}

	public function testAutoIncrementColumnIsAlsoAPrimaryKey() {
		$table = new Table('users');
		$id = new IntColumn('id');
		$table->addAutoIncrement($id);

		$this->assertSame($id, $table->getAutoIncrementColumn());
		$this->assertTrue($table->isPrimaryKey($id));
		$this->assertSame(
			"CREATE TABLE `users` (\n\t`id` int unsigned NOT NULL AUTO_INCREMENT,\n\tPRIMARY KEY (`id`)\n);\n",
			$table->toString()
		);
	}

	public function testRendersIndexesAndForeignKeys() {
		$roles = new Table('roles');
		$roleId = new IntColumn('id');
		$roles->addPrimaryKey($roleId);

		$users = new Table('users');
		$userRoleId = new IntColumn('role_id');
		$users->addColumn($userRoleId);
		$users->addKeyColumn('role_id_idx', $userRoleId);
		$users->addForeignKey($userRoleId, $roleId);

		$this->assertSame(
			"CREATE TABLE `users` (\n\t`role_id` int unsigned NOT NULL,\n\tKEY `role_id_idx` (`role_id`),\n\tFOREIGN KEY (`role_id`) REFERENCES `roles`(`id`)\n);\n",
			$users->toString()
		);
	}

}
