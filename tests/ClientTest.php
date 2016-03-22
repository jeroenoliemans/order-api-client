<?php

namespace Beslist\OrderAPI\Tests;

use Beslist\OrderAPI\Client;
use PHPUnit_Framework_TestCase;
use PHPUnit_Framework_Assert as Assert;

class ClientTest extends PHPUnit_Framework_TestCase
{

    /** @var  Client $client */
    private $client;
    /** @var  string $clientId */
    private $clientId;
    /** @var  string $clientSecret */
    private $clientSecret;

    /**
     * Set up test suite
     */
    public function setUp()
    {
        parent::setUp();

        $this->clientId = mt_rand();
        $this->clientSecret = mt_rand();

        $this->client = new Client($this->clientId, $this->clientSecret);
    }

    /**
     * Test instantiation of the Client with client credentials.
     */
    public function testClientInstantiation()
    {
        Assert::assertInstanceOf('Beslist\OrderAPI\Client', $this->client);
        $reflectionClass = new \ReflectionClass($this->client);
        $reflectionClientId = $reflectionClass->getProperty('clientId');
        $reflectionClientSecret = $reflectionClass->getProperty('clientSecret');

        $reflectionClientId->setAccessible(true);
        $reflectionClientSecret->setAccessible(true);

        Assert::assertEquals($this->clientId, $reflectionClientId->getValue($this->client));
        Assert::assertEquals($this->clientSecret, $reflectionClientSecret->getValue($this->client));
    }

}