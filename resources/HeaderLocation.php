<?php

class HeaderLocation
{
    public static function logout()
    {
        header('location: //'.$_SERVER['HTTP_HOST'].'/dev-job');
    }

    public static function header_location()
    {
        return header('location: /dev-job');
    }

    public static function host()
    {
        return  '//'.$_SERVER['HTTP_HOST'].'/dev-job/';
    }
}