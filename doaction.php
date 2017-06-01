<?php
header("Content-Type:text/html;charset=utf-8");

// 处理增删改查页面
$action = $_GET['act']; // url?后的参数默认在_GET变量中
// echo $action . '  ' . $_POST['username'] . '  ' . $_POST['password'] . '<hr/>';

$mysqli = new mysqli("127.0.0.1", "root", "", "test");
if (!$mysqli)
    die($mysqli->errno . ':' . $mysqli->error);
$sql = '';

switch ($action) {
    case 'add':
        break;
    case 'delete':
        break;
    case 'update':
        break;
    case 'select':
        break;
    default:
        break;
}


$mysqli->close();
