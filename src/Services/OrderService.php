<?php

namespace Beslist\OrderAPI\Services;

use Beslist\OrderAPI\Entities\AbstractEntity;
use Beslist\OrderAPI\Entities\Order;
use Psr\Http\Message\ResponseInterface;

class OrderService extends AbstractService
{
    /**
     * @param array $filter
     *
     * @return AbstractEntity[]
     */
    public function browse(array $filter = [], array $sort = [], $properties = [])
    {
        $body = ['filter' => $filter, 'sort' => $sort, 'include' => $properties];

        return $this->guzzle->requestAsync('GET', '/orders', [
            'body' => json_encode($body),
        ])->then(function (ResponseInterface $response) {
            return json_decode($response->getBody());
        })->then(function (array $response) {
            $collection = [];

            foreach ($response['data'] as $resourceInstance) {
                $collection[] = new Order($resourceInstance);
            };

            return $collection;
        });
    }

    /**
     * @param int $id
     *
     * @return AbstractEntity
     */
    public function read($id, array $properties = [])
    {
        $body = ['include' => $properties];

        return $this->guzzle->requestAsync('GET', "/orders/{$id}", [
            'body' => json_encode($body),
        ])->then(function (ResponseInterface $response) {
            return json_decode($response->getBody());
        })->then(function (array $response) {
            return new Order($response['data']);
        });
    }

    /**
     * @param int   $id
     * @param array $properties
     *
     * @return AbstractEntity
     */
    public function edit($id, array $properties)
    {
        return $this->guzzle->requestAsync('PATCH', "/orders/{$id}", [
            'body' => json_encode($properties),
        ])->then(function (ResponseInterface $response) {
            return json_decode($response->getBody());
        })->then(function (array $response) {
            return new Order($response['data']);
        });
    }

    /**
     * @param array $properties
     *
     * @return AbstractEntity
     */
    public function add(array $properties)
    {
        return $this->guzzle->requestAsync('POST', "/orders", [
            'body' => json_decode($properties),
        ])->then(function (ResponseInterface $response) {
            return json_decode($response['data']);
        })->then(function (array $response) {
            return new Order($response['data']);
        });
    }

    /**
     * @param int $id
     *
     * @return bool
     */
    public function delete($id)
    {
        return $this->guzzle->requestAsync('DELETE', "/orders/{$id}", [
        ])->then(function (ResponseInterface $response) {
            return true;
        }, function (ResponseInterface $response) {
            return false;
        });
    }
}
