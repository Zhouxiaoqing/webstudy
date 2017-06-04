<?php
header("Content-type: text/html; charset=utf-8");

$host = "127.0.0.1";
$user = "root";
$password = "";
$db = "test";

$mysqli = new mysqli($host, $user, $password, $db);
if ($mysqli->connect_errno)
    die('mysqli connect error' . $mysqli->connect_error);
$mysqli->set_charset('utf8');

// 1. 调用query()，取得查询的 结果集
$sql = 'SELECT id,name FROM user';
$result = $mysqli->query($sql);

// 2. 取出 结果集 中的数据
while ($row = $result->fetch_assoc()) {
    $rows[] = $row;
}

// 3. 关闭结果集
$result->free();

$mysqli->close();
?>

<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>用户列表</title>
</head>
<body>
	<h2 align="center">
		用户列表 - <a href="adduser.php">添加用户</a>
	</h2>
	<table border='1' cellpadding='0' cellspacing='0' bgcolor='#ABCDEF'
		width='100%'>
		<tr>
			<td>编号</td>
			<td>用户名</td>
			<td>操作</td>
		</tr>
		<?php
            if (isset($rows)) {
                foreach ($rows as $row) :
        ?>
                            <tr>
            			<td><?php echo $row['id'] ?></td>
            			<td><?php echo $row['name'] ?></td>
            			<td><a href="updateuser.php?act=update&id=<?php echo $row['id']; ?>">更新</a>
            				| <a href="doaction.php?act=delete&id=<?php echo $row['id']; ?>">删除</a></td>
            		</tr>
        <?php
                endforeach;
            }
        ?>

	</table>
</body>
</html>