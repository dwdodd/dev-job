<?php

class BaseUrl
{
    public static function url()
    {
        return '//'.$_SERVER['HTTP_HOST'].'/dev-job/';
    }
}