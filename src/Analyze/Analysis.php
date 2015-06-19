<?php

namespace Isometriks\Grammar\Analyze;

class Analysis
{
    protected $context;
    protected $errors;

    public function __construct(Context $context, array $errors = array())
    {
        $this->context = $context;
        $this->errors = $errors;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}
