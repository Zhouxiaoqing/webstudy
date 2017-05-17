<?php 

function C($classname, $method) {
    require_once ('libs/Controller/' . $classname . 'Controller.class.php');
    $c = new $classname();
    $c->$method();
}

function M($classname) {
    require_once ('libs/Controller/' . $classname . 'Model.class.php');
    $c = new $classname();
    return $c;
}

function V($classname) {
    require_once ('libs/Controller/' . $classname . 'View.class.php');
    $c = new $classname();
    return $c;
}

?>