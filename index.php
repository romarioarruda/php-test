<?php
require_once ("vendor/autoload.php");

use Live\Collection\FileCollection;
use Live\Collection\MemoryCollection;

$file   = new FileCollection('fake-database/db.json');
$memory = new MemoryCollection;

$file->setMemoryCollection($memory);

$result = $memory->get(1);
