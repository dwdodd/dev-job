<?php

define('PATH_TO', '../../../');

$info = explode('/', rtrim($_SERVER['REQUEST_URI'],'/'));
array_shift($info);

if(count($info) > 2 ){
    header('location: /aviso/'.$info[1]);
}

function request_uri($require_template, $require_data, $element_path, $method){
    $require_template;
    $require_data;

    $content = str_replace(
        [
            '{{ cnt }}',
        ],
        [
            27
        ],
        file_get_contents($element_path)
    );

    $title       = (empty($title) ? 'Tu Sitio | Inicio' : $title);
    $keyword     = (empty($keyword) ? 'tusitio' : $keyword);
    $description = (empty($description) ? 'tu sitio' : $description);
    Template::$method($description, $keyword, $title, $content);
}

if( empty($info) || $_SERVER['REQUEST_URI'] === '/dev-job/' ){
    request_uri(
        require_once 'config/layout/Template.php',
        require_once 'src/home/RepositoryHome.php',
        'app/views/home/elements/home.php',
        'index'
    );
}

request_uri(
    require_once PATH_TO . 'config/layout/Template.php',
    require_once PATH_TO . 'src/home/RepositoryHome.php',
    'elements/home.php',
    'html'
);