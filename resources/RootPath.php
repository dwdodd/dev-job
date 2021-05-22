<?php

class RootPath
{
    public static function request_uri($request_uri)
    {
        $uri = explode('/', rtrim($request_uri,'/'));
        array_shift($uri);
        return $uri;
    }

    public static function request_host($http_host)
    {
        return $http_host === 'localhost' ? '/tureceta-web/' : '/';
    }

    public static function count_params($host, $info)
    {
        if($host === '/'){
            if(count($info) > 1 ){
                header('location: /aviso/'.$info[1]);
            }
        }
        else{
            if(count($info) > 2 ){
                header('location: '.$host.'aviso/'.$info[2]);
            }
        }
    }
}