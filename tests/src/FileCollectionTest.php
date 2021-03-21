<?php

namespace Live\Collection;

use PHPUnit\Framework\TestCase;

class FileCollectionTest extends TestCase
{
    /**
     * @test
     * @dataCanBeAdded
     */
    public function dataCanBeAdded()
    {
        $file = new FileCollection('fake-database/db.json');

        $this->assertEquals(1, $file->count());
    }

    /**
     * @test
     * @collectionCanBePopuled
     */
    public function collectionCanBePopuled()
    {
        $file = new FileCollection('fake-database/db.json');
        $setMemory = $file->setMemoryCollection(new MemoryCollection);

        $memoryPopuled = $setMemory > 0 ? true : false;

        $this->assertTrue($memoryPopuled);
    }
}
