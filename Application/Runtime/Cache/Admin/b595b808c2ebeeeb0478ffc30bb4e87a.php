<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>后台管理</title>

	<link rel="stylesheet" type="text/css" href="/web3/Public/resource/reset.css" />
	<link rel="stylesheet" type="text/css" href="/web3/Public/resource/<?php echo ($css_file); ?>.css" />
	<script type="text/javascript" src="/web3/Public/resource/jquery.js"></script>
	<script type="text/javascript" src="/web3/Public/resource/<?php echo ($js_file); ?>.js"></script>
</head>
<body>
	<header>后台管理</header><!-- end of header -->
	<div id="main_area">
		<div id="sidebar">

			<div id="product_manage">
				<a href="#">产品管理</a>
				<div class="sub_menu">
					<a href="#">新建分类</a>
					<a href="#">查看分类</a>
					<a href="#">新建产品</a>
					<a href="#">查看产品</a>
				</div>
			</div><!--end of #product_manage-->

			<div id="article_manage">
				<a href="#">文章管理</a>
				<div class="sub_menu">
					<a href="#">新建分类</a>
					<a href="#">所有分类</a>
					<a href="#">新建文章</a>
					<a href="#">所有文章</a>
				</div>
			</div><!--end of #article_manage-->

			<div id="web_manage">
				<a href="#">网站管理</a>
				<div class="sub_menu">
					<a href="#">menu设置</a>
					<a href="#">幻灯片设置</a>
					<a href="#">little_box设置</a>
					<a href="#">Customer show设置</a>
				</div>
			</div><!-- end of #web_manage -->

		</div><!-- end of #sidebar -->
		<!-- 下面开始#content内容
			是用<div #id="content">......</div>包围起来
	 	-->
		<div id="content">
  点击左侧的菜单来进行管理操作。
</div>


	</div><!-- end of #main_area -->
</body>
</html>