<?php

namespace Isometriks\Grammar\Client;

class GuzzleClient extends AbstractClient
{
    public function process($string, $language = 'en')
    {
        $guzzle = new \GuzzleHttp\Client();
        $query = http_build_query(array(
            'language' => $language,
            'text' => $string,
        ));

        $response = $guzzle->get($this->url.'?'.$query);

        return $this->convertXml($response->getBody());
    }
}
