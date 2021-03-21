<?php

namespace Live\Collection;

/**
 * File collection
 *
 * @package Live\Collection
 */
class FileCollection
{
    /**
     * Collection data
     *
     * @var array
     */
    protected $data;

    /**
     * Constructor
     */
    public function __construct($fileInput)
    {
        $this->readFileJson($fileInput);
    }

    /**
     * Reade File Method
     */
    private function readFileJson($fileInput)
    {
        $fileResults = file_get_contents($fileInput);

        $jsonData = json_decode($fileResults, true);

        $this->data = $jsonData ?? null;
    }

    /**
     * return count data
     */
    public function count(): int
    {
        return count($this->data);
    }

    /**
     * Set Memory Collection
     */
    public function setMemoryCollection(MemoryCollection $collections)
    {
        foreach ($this->data['users'] as $users) {
            if ($users['expired_at'] >= date('Y-m-d')) {
                $collections->set($users['id'], $users);
                $log++;
            }
        }

        return $log;
    }
}
