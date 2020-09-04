<?php

namespace Ninjiwi\Util;

class ContentParser
{

    /**
     * @var array
     */
    public $config = [];

    /**
     * @var string
     */
    public $content = '';

    /**
     * @var string
     */
    public $more = '';

    /**
     * @param string $content
     */
    public function __construct(string $content)
    {
        $tmp = explode('---', $content);
        $more = explode('<!--more-->', $tmp[2]);

        $this->config = Spyc::YAMLLoadString($tmp[1]);
        $this->content = $tmp[2];
        $this->more = current($more);
    }
}