<?php

namespace Isometriks\Grammar\Analyze;

class Error
{
    protected $context;
    protected $config;

    public function __construct(Context $context, array $config)
    {
        $this->context = $context;
        $this->config = $config;
    }

    public function getContext()
    {
        return $this->config['context'];
    }

    public function getSubstring()
    {
        return substr($this->context->getText(), $this->config['fromx'], $this->config['errorlength']);
    }

    public function getTextBefore()
    {
        return substr($this->context->getText(), 0, $this->config['fromx']);
    }

    public function getTextAfter()
    {
        return substr($this->context->getText(), $this->config['tox']);
    }

    public function getMessage()
    {
        return $this->config['msg'];
    }

    public function getRule()
    {
        return $this->config['ruleId'];
    }

    public function getCategory()
    {
        return $this->config['category'];
    }

    public function getReplacements()
    {
        return $this->config['replacements'];
    }
}
