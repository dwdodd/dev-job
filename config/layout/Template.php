<?php

class Template
{
    public static function html($description, $keyword, $title, $content)
    {
        require_once PATH_TO . 'config/system/BaseUrl.php';

        $top = str_replace(
            ['{{ description }}','{{ keyword }}','{{ title }}','{{ host }}'],
            [$description, $keyword, $title, BaseUrl::url()],
            file_get_contents(PATH_TO . 'config/layout/html-content/html-top.php')
        );

        $header = str_replace(
            '{{ host }}',
            BaseUrl::url(),
            file_get_contents(PATH_TO . 'config/layout/html-content/header.php')
        );

        $con = str_replace(
            '{{ host }}',
            BaseUrl::url(),
            $content
        );

        $footer = str_replace(
            '{{ year }}',
            date('Y'),
            file_get_contents(PATH_TO . 'config/layout/html-content/footer.php')
        );

        $end = str_replace(
            '{{ host }}',
            BaseUrl::url(),
            file_get_contents(PATH_TO . 'config/layout/html-content/html-end.php')
        );

        exit($top.$header.$con.$footer.$end);
    }

    public static function index($description, $keyword, $title, $content)
    {
        require_once 'config/system/BaseUrl.php';

        $top = str_replace(
            ['{{ description }}','{{ keyword }}','{{ title }}','{{ host }}'],
            [$description, $keyword, $title, BaseUrl::url()],
            file_get_contents('config/layout/html-content/html-top.php')
        );

        $header = str_replace(
            '{{ host }}',
            BaseUrl::url(),
            file_get_contents('config/layout/html-content/header.php')
        );

        $con = str_replace(
            '{{ host }}',
            BaseUrl::url(),
            $content
        );

        $footer = str_replace(
            '{{ year }}',
            date('Y'),
            file_get_contents('config/layout/html-content/footer.php')
        );

        $end = str_replace(
            '{{ host }}',
            BaseUrl::url(),
            file_get_contents('config/layout/html-content/html-end.php')
        );

        exit($top.$header.$con.$footer.$end);
    }

    public static function header_location()
    {
        require_once PATH_TO . 'resources/HeaderLocation.php';
        return HeaderLocation::header_location();
    }
}