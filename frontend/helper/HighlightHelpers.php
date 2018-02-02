<?php

namespace frontend\helper;

class HighlightHelpers
{
    public static function process($keyword, $text)
    {
        $words = explode(' ', trim($keyword));
        return preg_replace('/' . implode('|', $words) . '/i', '<b>$0</b>', $text);
        //return str_replace($keyword, '<b>'. $keyword . '</b>', $text);
    }
}