<html>
<head>
	<title>登陆：ASCII 图书管理系统</title>
	<meta charset="utf-8" >
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<style type="text/css">
	
	</style>
</head>

<body>
	<div id='container'>
		<div id='left'>
			ASCII <br>
			<span>Library</span>
		</div>
		<div id="right" class=''>
			<div id='switch'>
				<span>注册</span>→
			</div>
			<form id='login' action = '/logine' method = 'get'>
				<input type='text' id='account' placeholder="账号" class='input' name='account'><span class='tips'></span>
				<br/>
				<input type='password' id='password' placeholder='密码' class='input' name = 'password'><span class='tips'></span>
				<br>
				<input type = 'submit' class = 'submit' value = '登录'> <br>               
                    <input type="checkbox" name="remenber" id="remenber" value="记住密码">
                    <label for='remenber'>记住密码</label>
				<a href="javascript:void(0);" id='forget'>忘记密码？</a><br>
				<a href='javascript:void(0);' id='no_account'>还没有账号？</a>
			</form>
			<form id='register' action = 'register' method = 'post'>
				<input class='input' tupe='text' id='account' placeholder='账号' name = 'account'><span class='tips'></span><br/>
				<input class='input' type='text' id='name' placeholder='姓名' name = 'name'><span class='tips'></span><br/>
				<input class='input' type='password' id='pw' placeholder='密码' name = 'password'><span class='tips'></span><br/>
				<input class='input' type='password' id='pw2' placeholder='确认密码'><span class='tips'></span><br/>
				<select>
					<option value='undefined'>组别</option>
					<option value="web">web</option>
					<option value='安卓'>安卓</option>
					<option value='PD'>PD</option>
					<option value='PS'>RS</option>
				</select><br>
				<input type = 'submit' class = 'submit2' id = 'register_button' value = '注册'>
				<a href="javascript:void(0);" class='submit2' id='cancel'>取消</a>
		</form>
		</div>
	</div>


<script type="text/javascript" src="js/login.js"></script>
</body>
</html>