<?php


class LinkAbbreviation
{


    private static $abbreviatedlink;

    public static function linkMaker()
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $abbreviatedlink = '';
        for ($x = 0; $x < 7; $x++) {
            $abbreviatedlink .= $characters[rand(0, strlen($characters)) - 1];
        }

        return $abbreviatedlink;
    }

    public static function subLink($abbreviatedlink)
    {
        $subabbreviatedlink = substr($abbreviatedlink, 9, 3);
        return $subabbreviatedlink;
    }
}
