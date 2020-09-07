<?php
namespace Ninjiwi\Util;

class Sanitize
{
    /**
     * @param string $html
     * @return string
     */
    static function html(string $html): string
    {
        $search = [
            '/\>[^\S ]+/s',
            '/[^\S ]+\</s',
            '/(\s)+/s',
            '/<!--(.|\s)*?-->/'
        ];

        $replace = [
            '>',
            '<',
            '\\1',
            ''
        ];

        return trim(preg_replace($search, $replace, $html));
    }

    /**
     * @param string $css
     * @return string
     */
    static function css(string $css): string
    {
        $css = preg_replace('/\/\*((?!\*\/).)*\*\//', '', $css); // negative look ahead
        $css = preg_replace('/\s{2,}/', ' ', $css);
        $css = preg_replace('/\s*([:;{}])\s*/', '$1', $css);
        $css = preg_replace('/;}/', '}', $css);
        return $css;
    }
}