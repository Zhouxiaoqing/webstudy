<?php
$mysqli = new mysqli("127.0.0.1", "root", "", "test");
if ($mysqli->errno)
    die($mysqli->errno . ':' . $mysqli->error);
// {重要}一定要设置字符集，否则mysql那边没设置，可能导致乱码！！！
$mysqli->set_charset('utf8');

$id = $_GET['id'];
$sql = "SELECT id,name,password FROM user WHERE id = " . $id;
$mysqli_result = $mysqli->query($sql);
if ($mysqli_result)
    $row = $mysqli_result->fetch_assoc();
print_r($row);
$mysqli_result->free();
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>更改用户</title>
<script type="text/javascript">
	function check() {
		var old_password = document.getElementsByName("password")[0].value;
		var new_password = document.getElementsByName("newpassword")[0].value;
		if (old_password != new_password) {
			alert('两次输入的密码不一致，请重新输入！');
			return false;
		}
		return true;
	}
</script>
</head>

<body>
	<h2 align="center">更改用户</h2>
	<form action="doaction.php?act=update&id=<?php echo $_GET['id']; ?>" method="post">
		<table border="1" cellspacing='0' cellpadding='0' bgcolor='#ABCDEF'
			width='100%'>
			<h2><?php echo $row['name']; ?></h2>
			<tr>
				<td>密码</td>
				<td><input type="password" value="清输入密码" name='password' placeholder="清输入合法密码" required="required" /></td>
			</tr>
			<tr>
				<td>确认密码</td>
				<td><input type="password" value="清再次输入密码" name='newpassword' placeholder="清输入合法密码" required="required" /></td>
			</tr>
			<tr>
			    <!-- onclick这里一定要return调用函数的值，否则无法使用false/true来控制表单是否提交！！ -->
				<td colspan='2'><input type="submit" value="确认更改" onclick="return check();"/></td>
			</tr>
		</table>
	</form>

</body>
</html>