<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<title>管理后台</title>
	<link rel="stylesheet" href="__PUBLIC__/css/base.css">
	<link rel="stylesheet" href="__PUBLIC__/css/admin.style.css">
	<script type="text/javascript" src='__PUBLIC__/Js/jquery-1.7.2.min.js'></script>
</head>
<body>
	<header>
		<div class="logo">BAIMI管理后台</div>
		<nav>
			<ul class="main-nav">
				<li class="current"><a href="#">首页</a></li>
				<li><a href="#">内容</a></li>
				<li><a href="#">用户</a></li>
			</ul>
		</nav>
		<div class="user">
			<a href="javascript:viod(0)" class="icon-user">用户</a>
			<a href="<?php echo U('Admin/Index/logout');?>">退出</a>
			<ul>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</header>
	<aside>
		<div class="sub-nav">
			<h3><i class="icon"></i>内容管理</h3>
				<ul class="side-sub-menu">
					<li class="current"><a href="^">查看内容</a></li>
					<li><a href="^">发布内容</a></li>
					<li><a href="^">审核内容</a></li>
				</ul>
			<h3><i class="icon icon-fold"></i>内容管理</h3>
				<ul class="side-sub-menu">
					<li><a href="^">查看内容</a></li>
					<li><a href="^">发布内容</a></li>
					<li><a href="^">审核内容</a></li>
				</ul>
		</div>
	</aside>
这里是后台
<?php echo var_dump($_SESSION);?>
	<a href="<?php echo U('Admin/Index/logout');?>">退出</a>
}
</body>
</html>