<html>
<head>
	<title>注册：ASCII 图书管理系统</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<style type="text/css">
	*{margin: 0; padding: 0;}
	.ts0{background: pink; border: 1px solid #ededed;}

	</style>
</head>

<body>
	<div id='register' class='ts0'>
		<form>
			<table>
				<tr>
					<td class='left'>账号：</td>
					<td class='right'><input tupe='text' id='account' placeholder='请输入账号...'></td>
				</tr>
				<tr>
					<td class='left'>姓名：</td>
					<td class='right'><input type='text' id='name' placeholder='请输入您的姓名...'></td>
				</tr>
				<tr>
					<td class='left'>专业班级：</td>
					<td class='right'><input type='text' id='major' placeholder='请填写您所在的专业班级'></td>
				</tr>
				<tr>
					<td class='left'>密码：</td>
					<td class='right'><input type='password' id='pw' placeholder='请输入密码...'></td>
				</tr>
				<tr>
					<td class='left'>确定密码：</td>
					<td class='right'><input type='password' id='pw2' placeholder='请再次输入密码'></td>
				</tr>
				<tr>
					<td><a href="javascript:void(0);">注册</a></td>
					<td><a href="javascript:void(0);">取消</a></td>
				</tr>

			</table>
		</form>
	</div>

</body>
</html>