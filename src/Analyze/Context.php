<?php

namespace Isometriks\Grammar\Analyze;

class Context
{
    protected $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getText()
    {
        return $this->text;
    }
}
