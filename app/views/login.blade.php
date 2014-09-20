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
			<form id='login'>
				<input type='text' id='account' placeholder="账号" class='input'>
				<br/>
				<input type='password' id='password' placeholder='密码' class='input'>
				<br>
				<a href='javascript:void(0);' class='submit'>登录</a>                  
                    <input type="checkbox" name="remenber" id="remenber" value="记住密码">
                    <label for='remenber'>记住密码</label>
				<a href="javascript:void(0);">忘记密码？</a><br>
				<a href='javascript:void(0);'>还没有账号？</a>
			</form>
			{{-- <form id='register'>
				<input class='input' tupe='text' id='account' placeholder='账号'><span class='tips'></span><br/>
				<input class='input' type='text' id='id' placeholder='学号'><span class='tips'></span><br/>
				<!-- <input class='input' type='text' id='name' placeholder='姓名'><span class='tips'>有错误</span><br/>
				<input class='input' type='text' id='major' placeholder='专业班级'><span class='tips'>有错误</span><br/> -->
				<input class='input' type='password' id='pw' placeholder='密码'><span class='tips'></span><br/>
				<input class='input' type='password' id='pw2' placeholder='确认密码'><span class='tips'></span><br/>
				<select>
					<option>组别</option>
					<option>web</option>
					<option>安卓</option>
					<option>pd</option>
					<option>rs</option>
				</select><br>
				<a href="javascript:void(0);" class='submit2'>注册</a>
				<a href="javascript:void(0);" class='submit2'>取消</a>
		</form> --}}
		</div>
	</div>


<script type="text/javascript" src="js/login.js"></script>
</body>
</html>