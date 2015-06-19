<?php

namespace Isometriks\Grammar\Client;

interface ClientInterface
{
    /**
     * Process the string and return an array of the errors
     * 
     * @return array Array of errors
     */
    public function process($string);
}
