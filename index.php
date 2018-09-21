<?php
//http://localhost/gal/cinema/index.php?controller=movies&action=get_movies
if(isset($_REQUEST['controller']) && isset($_REQUEST['action'])){
    $controller = $_REQUEST['controller'];
    $action = $_REQUEST['action'];
}else{
    $controller = 'login';
    $action = 'get_login';
}

require_once('routes.php');


?>