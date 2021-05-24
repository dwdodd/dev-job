<?php

if( $_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/dev-job/'  ){
    require_once 'connections/Conn.php';
}
else{
    require_once '../../../connections/Conn.php';
}

final class RepositoryHome
{
    public static function users()
    {
        require_once('context/contextHome.php');

        @$result = QueryManager::openquery("select UserName, Email from users", new Conn);

        $content = null;
        foreach($result as $val){
            $content .= contextHome($val->UserName, $val->Email);
        }
        return $content;
    }
}