<?php declare(strict_types=1);

use Ninjiwi\Util\Sanitize;
use PHPUnit\Framework\TestCase;

final class SanitizeTest extends TestCase
{
    /**
     * @covers  Ninjiwi\Util\Sanitize::css
     */
    public function testCss(): void
    {
        $contentFile = file_get_contents(__DIR__ . '/sanatize-test.css');
        $css = Sanitize::css($contentFile);
        $this->assertEquals($css, 'body{background-color:#6d6d6d;font-size:15px}');
    }

    /**
     * @covers  Ninjiwi\Util\Sanitize::html
     */
    public function testHtml(): void
    {
        $contentFile = file_get_contents(__DIR__ . '/sanatize-test.html');
        $html = Sanitize::html($contentFile);
        $this->assertEquals($html, '<html> <head> <title>Test</title> </head> <body> <h1>Test</h1> <p>content html</p> </body></html>');
    }
}
