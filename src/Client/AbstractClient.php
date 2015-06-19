<?php

namespace Isometriks\Grammar\Client;

abstract class AbstractClient implements ClientInterface
{
    protected $url;

    public function __construct($url)
    {
        $this->url = $url;
    }

    protected function convertXml($xml)
    {
        $document = new \DOMDocument();
        $document->loadXML($xml);
        $errors = $document->getElementsByTagName('error');
        $output = array();

        foreach ($errors as $error) {
            $attr = array();

            foreach ($error->attributes as $attribute) {
                $attr[$attribute->name] = $attribute->value;
            }

            $output[] = $attr;
        }

        return $output;
    }
}
