<?php
header("Content-Type:text/html;charset=utf-8");

function js_alert($msg = '', $url = '#') {
    echo "<script type='text/javascript'>
              alert('{$msg}');
              location.href = '{$url}';
          </script>";
    return;
}

// 处理增删改查页面
$action = $_GET['act'] ? $_GET['act'] : null; // url?后的参数默认在_GET变量中
$id = $_GET['id'] ? $_GET['id'] : null;
// echo $action . ' ' . $_POST['username'] . ' ' . $_POST['password'] . '<hr/>';

$mysqli = new mysqli("127.0.0.1", "root", "", "test");
if ($mysqli->errno)
    die($mysqli->errno . ':' . $mysqli->error);

switch ($action) {
    case 'add':
        $username = $mysqli->escape_string($_POST['username']);
        $password = md5($_POST['password']); // md5加密
        // {坑}这里要注意:mysql表里数据是varchar类型，这里需要在sql语句中使用 "value" 形式来插入值！！(必须要有双引号)
        $sql = "INSERT user(name,password) VALUES('{$username}','{$password}')";
        if ($mysqli->query($sql))
            js_alert("添加成功!" . $mysqli->insert_id, 'userlist.php');
        else
            js_alert("添加失败,请重新添加！", "adduser.php");
        break;
    case 'delete':
        $sql = "DELETE FROM user where id = " . $id;
        if ($mysqli->query($sql))
            js_alert("删除成功!", "userlist.php");
        else
            js_alert("删除失败!", "userlist.php");
        break;
    case 'update':
        $sql = "UPDATE user where id = " . $id;
        if ($mysqli->query($sql))
            js_alert("更改失败!", "userlist.php");
        else
            js_alert("更改失败!", "userlist.php");
        break;
    case 'select':
        break;
    default:
        break;
}

$mysqli->close();

?>