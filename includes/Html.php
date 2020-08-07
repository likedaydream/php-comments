<?php


class Html
{
    public static function encode($html)
    {
        return htmlspecialchars($html, ENT_QUOTES);
    }
}