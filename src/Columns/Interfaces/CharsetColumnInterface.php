<?php

namespace donatj\MySqlSchema\Columns\Interfaces;

interface CharsetColumnInterface {

	public function getCharset() : ?string;

	public function setCharset( ?string $charset ) : void;

	public function getCollation() : ?string;

	public function setCollation( ?string $collation ) : void;
}
