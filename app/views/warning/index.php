<?php

define('PATH_TO', '../../../');

require_once PATH_TO . 'config/layout/Template.php';

$datum = explode('/', $_GET['data']);

$content = str_replace('{{ page }}', $datum[0], file_get_contents('elements/404.php'));

Template::html(null, null, 'Error 404', $content);