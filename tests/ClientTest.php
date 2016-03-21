<?php

namespace Beslist\OrderAPI\Tests;

use Beslist\OrderAPI\Client;
use PHPUnit_Framework_TestCase;
use PHPUnit_Framework_Assert as Assert;

class ClientTest extends PHPUnit_Framework_TestCase
{

    /** @var  Client */
    private $client;

    /**
     * Set up test suite
     */
    public function setUp()
    {
        parent::setUp();

        $clientId = mt_rand();
        $clientSecret = mt_rand();

        $this->client = new Client($clientId, $clientSecret);
    }

    public function testClientInstantiation()
    {
        Assert::assertInstanceOf(Client::class, $this->client);
    }

}