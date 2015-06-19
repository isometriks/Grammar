<?php

namespace Isometriks\Grammar\Analyze;

use Isometriks\Grammar\Client\ClientInterface;

class Analyzer
{
    protected $client;

    public function __construct(ClientInterface $client)
    {
        $this->client = $client;
    }

    public function analyze($text)
    {
        $context = new Context($text);
        $errorArray = $this->client->process($text);
        $errors = array();

        foreach ($errorArray as $errorData) {
            $errors[] = new Error($context, $errorData);
        }

        return new Analysis($context, $errors);
    }
}
