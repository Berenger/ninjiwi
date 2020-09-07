<?php

namespace Ninjiwi\Content;

use Ninjiwi\Util\Spyc;

class Content
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
        $this->loadContent($content);
    }

    private function loadContent(string $content)
    {
        $tmp = explode('---', $content);
        $more = explode('<!--more-->', $tmp[2]);

        $this->config = Spyc::YAMLLoadString($tmp[1]);
        $this->content = trim($tmp[2]);
        $this->more = trim(current($more));
    }
}