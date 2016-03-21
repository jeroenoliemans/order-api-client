<?php

namespace Beslist\OrderAPI;

class Client
{
    /** @var  string $clientId */
    private $clientId;
    /** @var  string $clientSecret */
    private $clientSecret;

    /**
     * Client constructor.
     *
     * @param string $clientId
     * @param string $clientSecret
     */
    public function __construct($clientId, $clientSecret)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }
}
