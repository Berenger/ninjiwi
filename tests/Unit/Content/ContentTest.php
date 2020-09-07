<?php declare(strict_types=1);

use Ninjiwi\Content\Content;
use PHPUnit\Framework\TestCase;

final class ContentTest extends TestCase
{
    /**
     * @covers  Ninjiwi\Content\Content::loadContent
     */
    public function testConfigContent(): void
    {
        $contentFile = file_get_contents(__DIR__ . '/content-test.md');
        $cf = new Content($contentFile);
        $this->assertEquals($cf->config['title'], 'Test Post');
        $this->assertEquals($cf->config['date'], '2020-06-22T15:17:57+02:00');
        $this->assertEquals($cf->config['draft'], true);
        $this->assertEquals($cf->config['categories'][0], 'Test');
    }

    /**
     * @covers  Ninjiwi\Content\Content::loadContent
     */
    public function testMoreContent(): void
    {
        $contentFile = file_get_contents(__DIR__ . '/content-test.md');
        $cf = new Content($contentFile);
        $this->assertEquals($cf->more, 'more content');
    }

    /**
     * @covers  Ninjiwi\Content\Content::loadContent
     */
    public function testContent(): void
    {
        $contentFile = file_get_contents(__DIR__ . '/content-test.md');
        $cf = new Content($contentFile);
        $this->assertEquals($cf->content,
            'more content
<!--more-->
content');
    }
}
