<?php

namespace Razvan\FirstBundle\Service;

class Text
{
    /** @var string */
    private $prefix;

    /** @var string */
    private $text;

    public function __construct(string $prefix, string $text)
    {
        $this->prefix = $prefix;
        $this->text = $text;
    }

    public function text(): string
    {
        return $this->prefix . $this->text;
    }
}
