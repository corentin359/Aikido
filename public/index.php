<?php
define('ROOT', dirname(__DIR__));
require ROOT . '/app/App.php';
App::load();

if(isset($_GET['p'])){
    $page = $_GET['p'];
}else{
    $page = 'home.show';
}
// un paterne :
// page[0] = le controleur
// page[1] = l'action a appeler
$page = explode('.', $page);

if($page[0] == 'admin'){
    $controller = '\App\Controller\Admin\\' . ucfirst($page[1]) . 'Controller';
    $action = $page[2];
} else{
    $controller = '\App\Controller\\' . ucfirst($page[0]) . 'Controller';
    if(isset($page[1])){
        $action = $page[1];
    }
}

$controller = new $controller();
$controller->$action();