<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>管理后台登陆</title>
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/base.css">
	<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/login.css">
	<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
	
</head>
<body class="login">
	<div id="login">
		<from action="111.php" method="post" class="login-from">
			<h3>
				<i class="login-logo"></i>
				BAIMI管理后台
			</h3>
			<div class="itembox" id="itembox">
				<div class="item">
					<i class="icon-user"></i>
					<input type="text" name="username" placeholder="请填写用户名" autocomplete="off">
				</div>
				<div class="item">
					<i class="icon-password"></i>
					<input type="password" name="password" placeholder="请填写密码" autocomplete="off">
				</div>
				<div class="item verifycode">
					<i class="icon-verifycode"></i>
					<input type="password" name="password" placeholder="请填写验证码" autocomplete="off">
					<a class="reloadverify" title="换一张" href="javascript:void(0)">换一张？</a>
				</div>
				<div>
					<img src="<?php echo U('Admin/Loginb/verify');?>" width="290px" height="80px" id="code">
				</div>
			</div>
			<div class="login-panel">
				<button type="submit" class="btn-login">
					登录
				</button>
			</div>
		</from>
	</div>
	<script type="text/javascript">
	/* 登陆表单获取焦点变色 */
    	$(".login-from").on("focus", "input", function(){
            $(this).closest('.item').addClass('focus');
        }).on("blur","input",function(){
            $(this).closest('.item').removeClass('focus');
        });
        $(function(){
        	$("#itembox").find("input[name=username]").focus();
        })
    </script>
</body>
</html>