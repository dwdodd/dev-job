<?php

if( $_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] === '/dev-job/'  ){
    require_once 'connections/Conn.php';
}
else{
    require_once '../../../connections/Conn.php';
}

final class RepositoryHome
{
    public static function doctors()
    {
        require_once('context/contextHome.php');

        @$result = QueryManager::openquery("select * users", new Conn);

        $content = null;
        foreach($result as $val){
            $content .= contextHome($val->nombre, $val->apellido, $val->especialidad);
        }
        return $content;
    }
}