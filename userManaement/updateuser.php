<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>更改用户</title>
</head>
<body>
	<h2 align="center">更改用户</h2>
	<form action="doaction.php?act=update&id=<?php echo $_GET['id']; ?>" method="post">
		<table border="1" cellspacing='0' cellpadding='0' bgcolor='#ABCDEF'
			width='100%'>
			<h2><?php  ?></h2>
			<tr>
				<td>密码</td>
				<td><input type="password" value="清输入密码" name='password' placeholder="清输入合法密码" required="required" /></td>
			</tr>
			<tr>
				<td>确认密码</td>
				<td><input type="password" value="清再次输入密码" name='password2' placeholder="清输入合法密码" required="required" /></td>
			</tr>
			<tr>
				<td colspan='2'><input type="submit" value="确认更改" /></td>
			</tr>
		</table>
	</form>
</body>
</html>