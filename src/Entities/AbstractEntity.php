<?php

namespace Beslist\OrderAPI\Entities;

abstract class AbstractEntity
{
    /**
     * Hydrate the entity from array.
     *
     * @param array $source
     */
    protected function fromArray(array $source = [])
    {
        foreach ($source as $property => $value) {
            $this->$property = $value;
        }
    }
}
