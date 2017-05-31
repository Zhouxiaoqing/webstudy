<?php ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8" />
<title>添加用户</title>
</head>
<body>
	<h2 align="center">添加用户</h2>
	<form action="doaction.php?act=add" method="post">
		<table border="1" cellspacing='0' cellpadding='0' bgcolor='#ABCDEF'
			width='100%'>
			<tr>
				<td>用户名</td>
				<td><input type="text" value="清输入用户名" name='username' placeholder="清输入合法用户名" required="required" /></td>
			</tr>
			<tr>
				<td>密码</td>
				<td><input type="password" value="清输入密码" name='password' placeholder="清输入合法密码" required="required" /></td>
			</tr>
			<tr>
				<td colspan='2'><input type="submit" value="确认添加" /></td>
			</tr>
		</table>
	</form>
</body>
</html>