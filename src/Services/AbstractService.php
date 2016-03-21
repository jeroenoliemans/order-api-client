<?php

namespace Beslist\OrderAPI\Services;

use Beslist\OrderAPI\Entities\AbstractEntity;
use GuzzleHttp\ClientInterface;

abstract class AbstractService
{
    /** @var  ClientInterface $guzzle */
    protected $guzzle;

    /**
     * AbstractService constructor.
     *
     * @param ClientInterface $guzzle
     */
    protected function __construct(ClientInterface $guzzle)
    {
        $this->guzzle = $guzzle;
    }

    /**
     * @param array $filter
     *
     * @return AbstractEntity[]
     */
    abstract public function browse(array $filter = [], array $sort = []);

    /**
     * @param int $id
     *
     * @return AbstractEntity
     */
    abstract public function read($id);

    /**
     * @param int   $id
     * @param array $properties
     *
     * @return AbstractEntity
     */
    abstract public function edit($id, array $properties);

    /**
     * @param array $properties
     *
     * @return AbstractEntity
     */
    abstract public function add(array $properties);

    /**
     * @param int $id
     *
     * @return bool
     */
    abstract public function delete($id);
}
