<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>经典案例|<?php echo C('site_name');?>|<?php echo C('site_title');?></title>
﻿<meta content="<?php echo C('keyword');?>" name="Keywords">
<meta content="<?php echo C('content');?>" name="Description">
<link rel="shortcut icon" href="/img/favicon.ico">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/index.css" media="all">
<script src="<?php echo RES;?>/html5.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/jQuery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/carouFredSel.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/weimob-index.js"></script>
<body>
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<iframe style="display: none; "></iframe>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[begin]>
<script>
var $do_submit = false;

// 绑定回车键
$('#loginBox').keydown(function(e){
	if(13 == event.keyCode){
		login();
	}
});

function login()
{
	if (true == $do_submit)
	{
		return false;
	}

	var $pre_submit = '登录', $do_submit = '登录中...';
	var $username = $('#username').val(), $password = $('#password').val(), $keepalive = $('#rememberPwdIcon').val();
	$('#login_button').text($do_submit);
	$do_submit = true;

	// check
	if ('' == $username || '' == $password)
	{
		$('#err_tips').text('您输入的<?php echo C('site_name');?>号或密码错误，请重新输入！');
		$('#err_area').show();
		$('#login_button').text($pre_submit);
		$do_submit = false;
		return false;
	}

	var $login_data = {
		username:$username,
		password:$password,
		keepalive:$keepalive
	};
	$.post('/index.php?m=Users&amp;a=checklogin', $login_data, function(rs){
		if(rs.errno == 200)
		{
			location.href = rs.url_route;
		}
		else
		{
			$('#err_tips').text(rs.error);
			$('#err_area').show();
		}
		$('#login_button').text($pre_submit);
		$do_submit = false;
	}, 'json');
}
</script>
<![end]-->
<div class="nav clearfix">
	<div class="nav-content">
		<h1 class="left"><?php echo C('site_name');?>·微信营销，如此简单！</h1>
		<div class="right line-li">
			<ul>
				<li>
					<a href="/">首页</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/common');?>" class="hover">经典案例</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/gongneng');?>">功能介绍</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/daili');?>">合作代理</a>
				</li>
				<li>
					<a href="#" target="_blank">更多服务</a>
				</li>
			<?php if($_SESSION[uid]==false): ?><li><a href="<?php echo U('Index/login');?>" class="hover">登录</a></li>
				<li><a href="<?php echo U('Index/reg');?>">注册</a></li>
			<?php else: ?><li>
			<a href="<?php echo U('User/Index/index');?>" hidefocus="true"  ><span style="color:red">管理中心</span></a>
			<a href="javascript:void(0)" onClick="Javascript:window.open('<?php echo U('Admin/Admin/logout');?>','_self')" >退出</a></li><?php endif; ?>		
			</ul>
		</div>
	</div>
</div>
<!-- banner -->
<div class="Public-content clearfix" style="margin-top:38px;">
	<div class="Public">
		<h1 class="Public-h2">经典案例</h1>
		<div class="Public-box clearfix">
			<ul id="nav_lis" class="case-nav left">
				<li data-index="0" data-hash="#case-a" class="hover">汽车</li>
				<li data-index="1" data-hash="#case-b" class="">房产</li>
				<li data-index="2" data-hash="#case-c" class="">医疗</li>
				<li data-index="3" data-hash="#case-d" class="">酒店</li>
				<li data-index="4" data-hash="#case-e" class="">餐饮</li>
				<li data-index="5" data-hash="#case-f" class="">旅游</li>
				<li data-index="6" data-hash="#case-g" class="">电商</li>
				<li data-index="7" data-hash="#case-h" class="">娱乐</li>
				<li data-index="8" data-hash="#case-i" class="">装潢装饰</li>
				<li data-index="9" data-hash="#case-j" class="">婚纱摄影</li>
				<li data-index="10" data-hash="#case-k" class="">通讯</li>
				<li data-index="11" data-hash="#case-l" class="">养生美容健身</li>
				<li data-index="12" data-hash="#case-m" class="">金融</li>
				<li data-index="13" data-hash="#case-n" class="">广告传媒</li>
				<li data-index="14" data-hash="#case-o" class="">零售</li>
				<li data-index="15" data-hash="#case-p" class="">百货商场</li>
				<li data-index="16" data-hash="#case-q" class="">法律</li>
				<li data-index="17" data-hash="#case-r" class="">婚庆</li>
				<li data-index="18" data-hash="#case-s" class="">IT行业</li>
				<li data-index="19" data-hash="#case-t" class="">教育机构</li>
				<li data-index="20" data-hash="#case-u" class="">生活服务</li>
			</ul>
			<div id="nav_uls" style="overflow:hidden;">

			<!-- 汽车开始 -->
				<div data-index="0" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case car2" style="background-image: url(<?php echo RES;?>/img/icon_wm_case_car.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">绿地宝马5S</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case car1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_car.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">咸阳尚乘</h4>
						</li>
						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case car3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_car.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">奔驰世家</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case car4" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_car.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">沃尔沃丰颐</h4>
						</li>
						<li class="wm_case_item" data-id="4">
							<span class="icon_wrapper">
								<i class="icon_wm_case car5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_car.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">长安福特阳天</h4>
						</li>
						<li class="wm_case_item" data-id="5">
							<span class="icon_wrapper">
								<i class="icon_wm_case car6 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_car.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">长安铃木</h4>
						</li>
						<li class="wm_case_item" data-id="6">
							<span class="icon_wrapper">
								<i class="icon_wm_case car7" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_car.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">郑州日产</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/car1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/car1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/car1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/car2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/car2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/car2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/car3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/car3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/car3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/car4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/car4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/car4-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="4" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/car5-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/car5-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/car5-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="5" style="">
						<img id="case_img_left" src="<?php echo RES;?>/car6-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/car6-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/car6-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="6" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/car7-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/car7-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/car7-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="7" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/car7-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/car7-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/car7-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<span class="arrow" id="case_arrow">
						<i class="arrow_out"></i>
						<i class="arrow_in"></i>
					</span>
				</div>
			<!--汽车结束-->

			<!--房地产开始-->
				<div data-index="1" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case est1 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_est.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">苏州雍景湾</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case est2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_est.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">中诚地产</h4>
						</li>
						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case est3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_est.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">保利达翠堤湾</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case est4" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_est.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">十里银滩</h4>
						</li>
						<li class="wm_case_item" data-id="4">
							<span class="icon_wrapper">
								<i class="icon_wm_case est5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_est.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">金地檀溪</h4>
						</li>
						<li class="wm_case_item" data-id="5">
							<span class="icon_wrapper">
								<i class="icon_wm_case est6" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_est.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">绿城蘭园</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="">
						<img id="case_img_left" src="<?php echo RES;?>/fdc1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/fdc1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/fdc1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/fdc2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/fdc2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/fdc2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/fdc3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/fdc3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/fdc3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/fdc4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/fdc4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/fdc4-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="4" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/fdc5-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/fdc5-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/fdc5-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="5" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/fdc6-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/fdc6-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/fdc6-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--房地产结束-->

			<!--医疗开始-->
				<div data-index="2" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case med1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_yl.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">上海复大医院</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case med2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_yl.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">美缔整形美容</h4>
						</li>
                        <li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case med3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_yl.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">成都万年医院</h4>
						</li>
                        <li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case med4 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_yl.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">玛丽亚妇产医院</h4>
						</li>
                        <li class="wm_case_item" data-id="4">
							<span class="icon_wrapper">
								<i class="icon_wm_case med5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_yl.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">苏州同济医院</h4>
						</li>
                        <li class="wm_case_item" data-id="5">
							<span class="icon_wrapper">
								<i class="icon_wm_case med6" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_yl.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">泰安丽人妇产医院</h4>
						</li>
                        <li class="wm_case_item" data-id="6">
							<span class="icon_wrapper">
								<i class="icon_wm_case med7" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_yl.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">重庆圣保罗医院</h4>
						</li>
                       
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/yl1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/yl1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/yl1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/yl2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/yl2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/yl2-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    
                    <div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/yl3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/yl3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/yl3-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    
                    <div class="default_wrapper wm_case_desc" data-id="3" style="">
						<img id="case_img_left" src="<?php echo RES;?>/yl4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/yl4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/yl4-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    
                    <div class="default_wrapper wm_case_desc" data-id="4" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/yl5-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/yl5-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/yl5-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    
                    <div class="default_wrapper wm_case_desc" data-id="5" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/yl6-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/yl6-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/yl6-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    
                    <div class="default_wrapper wm_case_desc" data-id="6" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/yl7-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/yl7-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/yl7-erwei.jpg" width="180" height="180">
						</p>
					</div>

				</div>
			<!--医疗结束-->

			<!--酒店开始-->
				<div data-index="3" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case jd1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_jd.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">丽彩天禧酒店</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case jd2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_jd.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">年代风尚</h4>
						</li>
						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case jd3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_jd.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">五环大酒店</h4>
						</li>
                        <li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case jd4 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_jd.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">最佳财富西方酒店</h4>
						</li>
                        <li class="wm_case_item" data-id="4">
							<span class="icon_wrapper">
								<i class="icon_wm_case jd5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_jd.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">大城小爱酒店</h4>
						</li>
                        <li class="wm_case_item" data-id="5">
							<span class="icon_wrapper">
								<i class="icon_wm_case jd6" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_jd.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">宁波朗逸大酒店</h4>
						</li>
                        <li class="wm_case_item" data-id="6">
							<span class="icon_wrapper">
								<i class="icon_wm_case jd7" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_jd.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">深圳唐拉雅秀酒店</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/jd1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/jd1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/jd1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/jd2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/jd2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/jd2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/jd3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/jd3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/jd3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="">
						<img id="case_img_left" src="<?php echo RES;?>/jd4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/jd4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/jd4-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="4" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/jd5-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/jd5-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/jd5-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="5" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/jd6-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/jd6-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/jd6-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="6" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/jd7-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/jd7-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/jd4-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    
				</div>
			<!--酒店结束-->

			<!--餐饮开始-->
				<div data-index="4" class="wm_case_mod_bd right show">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case cy1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_cy.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">Angelwithus</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case cy2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_cy.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">金龙海鲜烧烤</h4>
						</li>
						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case cy3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_cy.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">麦兜点点</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case cy4 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_cy.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">南京典尚餐饮</h4>
						</li>
						<li class="wm_case_item" data-id="4">
							<span class="icon_wrapper">
								<i class="icon_wm_case cy5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_cy.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">黔香阁</h4>
						</li>
						<li class="wm_case_item" data-id="5">
							<span class="icon_wrapper">
								<i class="icon_wm_case cy6" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_cy.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">舌尖上的酸菜鱼</h4>
						</li>
						<li class="wm_case_item" data-id="6">
							<span class="icon_wrapper">
								<i class="icon_wm_case cy7" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_cy.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">襄阳甜甜馆</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ys1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ys1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ys1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ys2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ys2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ys2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ys3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ys3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ys3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="">
						<img id="case_img_left" src="<?php echo RES;?>/ys4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ys4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ys4-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="4" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ys5-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ys5-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ys5-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="5" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ys6-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ys6-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ys6-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="6" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ys7-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ys7-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img"> <img id="case_ewm" src="<?php echo RES;?>/ys7-erwei.jpg" width="180" height="180"></p>
					</div>
				</div>
			<!--餐饮结束-->

			<!--旅游开始-->
				<div data-index="5" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case ly1 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ly.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">深圳东部华侨城</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case ly2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ly.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">美地度假</h4>
						</li>
                        <li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case ly3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ly.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">金假期旅游</h4>
						</li>
                        <li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case ly4" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ly.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">深圳天安旅游</h4>
						</li>
                        <li class="wm_case_item" data-id="4">
							<span class="icon_wrapper">
								<i class="icon_wm_case ly5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ly.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">西林生态旅游</h4>
						</li>
                        <li class="wm_case_item" data-id="5">
							<span class="icon_wrapper">
								<i class="icon_wm_case ly6" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ly.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">众信旅游网</h4>
						</li>
                       
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="">
						<img id="case_img_left" src="<?php echo RES;?>/ly1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ly1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ly1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ly2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ly2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ly2-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ly3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ly3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ly3-erwei.jpg" width="180" height="180">
						</p>
					</div>
                      <div class="default_wrapper wm_case_desc" data-id="3" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ly4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ly4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ly4-erwei.jpg" width="180" height="180">
						</p>
					</div>
                     <div class="default_wrapper wm_case_desc" data-id="4" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ly5-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ly5-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ly5-erwei.jpg" width="180" height="180">
						</p>
					</div>
                     <div class="default_wrapper wm_case_desc" data-id="4" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ly6-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ly6-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ly6-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--旅游结束-->

			<!--电商开始-->
				<div data-index="6" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case ds1 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ds.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">一号店</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case ds2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ds.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">龙飞凤舞</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="">
						<img id="case_img_left" src="<?php echo RES;?>/ds1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ds1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ds1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ds2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ds2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ds2-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--电商结束-->

			<!--娱乐开始-->
				<div data-index="7" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case yul1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_yul.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">BBOSS至尊</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case yul2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_yul.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">丹东二人转大</h4>
						</li>
						<li class="wm_case_item" name="hgyj" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case yul3 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_yul.png?v=2013-10-21-2);"></i>
							</span>
							<h4 classwm_case_item="wm_case_t">名流之星KTV</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case yul4" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_yul.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">西安倾国倾城</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/yu1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/yu1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/yu1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" styue="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/yu2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/yu2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/yu2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" styue="">
						<img id="case_img_left" src="<?php echo RES;?>/yu3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/yu3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/yu3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" styue="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/yu4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/yu4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/yu4-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--娱乐结束-->

			<!--装潢开始-->
				<div data-index="8" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case zh1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_zh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">大涌红木家具</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case zh2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_zh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">鸿起顺门业</h4>
						</li>
						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case zh3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_zh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">慧能地暖</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case zh4 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_zh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">健威人性家具</h4>
						</li>
						<li class="wm_case_item" data-id="4">
							<span class="icon_wrapper">
								<i class="icon_wm_case zh5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_zh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">宁波浪琴屿</h4>
						</li>
						<li class="wm_case_item" data-id="5">
							<span class="icon_wrapper">
								<i class="icon_wm_case zh6" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_zh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">欧派木门</h4>
						</li>
						<li class="wm_case_item" data-id="6">
							<span class="icon_wrapper">
								<i class="icon_wm_case zh7" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_zh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">欧然墙纸</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/zh1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/zh1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/zh1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/zh2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/zh2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/zh2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/zh3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/zh3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/zh3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="">
						<img id="case_img_left" src="<?php echo RES;?>/zh4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/zh4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/zh4-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="4" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/zh5-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/zh5-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/zh5-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="5" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/zh6-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/zh6-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/zh6-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="6" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/zh7-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/zh7-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/zh7-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--装潢结束-->

			<!--婚纱开始-->
				<div data-index="9" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case hs1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_hs.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">爱女神3D婚纱</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case hs2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_hs.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">iweddingstudio</h4>
						</li>
						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case hs3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_hs.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">韩国艺匠</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case hs4 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_hs.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">美十摄影</h4>
						</li>
						<li class="wm_case_item" data-id="4">
									<span class="icon_wrapper">
										<i class="icon_wm_case hs5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_hs.png?v=2013-10-21-2);"></i>
									</span>
							<h4 class="wm_case_t">星梦奇缘</h4>
						</li>
						<li class="wm_case_item" data-id="5">
									<span class="icon_wrapper">
										<i class="icon_wm_case hs6" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_hs.png?v=2013-10-21-2);"></i>
									</span>
							<h4 class="wm_case_t">拍吧视觉</h4>
						</li>
						<li class="wm_case_item" data-id="6">
							<span class="icon_wrapper">
								<i class="icon_wm_case hs7" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_hs.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">罗门婚纱</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/hs1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/hs1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/hs1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/hs2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/hs2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/hs2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/hs3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/hs3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/hs3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="">
						<img id="case_img_left" src="<?php echo RES;?>/hs4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/hs4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/hs4-erwei.jpg" width="180" height="180"></p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/hs5-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/hs5-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/hs5-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/hs6-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/hs6-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/hs6-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/hs7-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/hs7-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/hs7-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--婚纱结束-->

			<!--通讯开始-->
				<div data-index="10" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case tx1 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_tx.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">衡阳金联合通讯</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case tx2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_tx.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">洛阳移动</h4>
						</li>
						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case tx3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_tx.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">莆田沃体验手机</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="">
						<img id="case_img_left" src="<?php echo RES;?>/tx1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/tx1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/tx1-erwei.jpg" width="180" height="180"></p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/tx2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/tx2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/tx2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/tx3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/tx3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/tx3-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--通讯结束-->

			<!--美容开始-->
				<div data-index="11" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case mr1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_mr.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">名草泉</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case mr2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_mr.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">诗美诗格</h4>
						</li>

						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case mr3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_mr.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">辰嫣国际微刊</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case mr4 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_mr.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">凤凰温泉</h4>
						</li>
						<li class="wm_case_item" data-id="4">
							<span class="icon_wrapper">
								<i class="icon_wm_case mr5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_mr.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">慧之通</h4>
						</li>
						<li class="wm_case_item" data-id="5">
							<span class="icon_wrapper">
								<i class="icon_wm_case mr6" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_mr.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">匠人造型</h4>
						</li>
						<li class="wm_case_item" data-id="6">
							<span class="icon_wrapper">
								<i class="icon_wm_case mr7" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_mr.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">爵士美发</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/mr7-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/mr7-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/mr7-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/mr1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/mr1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/mr1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/mr2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/mr2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/mr2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="">
						<img id="case_img_left" src="<?php echo RES;?>/mr3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/mr3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/mr3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="4" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/mr4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/mr4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/mr4-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="5" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/mr5-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/mr5-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/mr5-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="6" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/mr6-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/mr6-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/mr6-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--美容结束-->

			<!--金融开始-->
				<div data-index="12" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case bk1 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_bk.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">融易宝</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case bk2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_bk.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">微诺亚</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="">
						<img id="case_img_left" src="<?php echo RES;?>/bk1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/bk1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/bk1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/bk2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/bk2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/bk2-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--金融结束-->

			<!--广告开始-->
				<div data-index="13" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case ad1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ad.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">JM传媒</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case  ad2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ad.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">车视传媒</h4>
						</li>
						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case ad3 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ad.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">彭城晚报</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case ad4" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_ad.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">文创文化</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ad1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ad1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ad1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ad2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ad2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ad2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="">
						<img id="case_img_left" src="<?php echo RES;?>/ad3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ad3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ad3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ad4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ad4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ad4-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--广告结束-->

			<!--零售开始-->
				<div data-index="14" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case lis1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_lis.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">安贝儿童座椅</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case lis2 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_lis.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">拜耳水产</h4>
						</li>
						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case lis3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_lis.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">超凡计算机</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case lis4" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_lis.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">牛牛生态水产</h4>
						</li>
						<li class="wm_case_item" data-id="4">
							<span class="icon_wrapper">
								<i class="icon_wm_case lis5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_lis.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">YFAN伊梵</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ls1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ls1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ls1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="">
						<img id="case_img_left" src="<?php echo RES;?>/ls2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ls2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ls2-erwei.jpg" width="180" height="180">
						</p>

					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ls3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ls3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ls3-erwei.jpg" width="180" height="180">
						</p>

					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ls4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ls4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ls4-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="4" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/ls5-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/ls5-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/ls5-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--零售结束-->

			<!--百货结束-->
				<div data-index="15" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case bh1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_bh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">潮流百货</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case bh2 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_bh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">兰州每轮百货</h4>
						</li>
						<li class="wm_case_item" name="shdz" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case bh3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_bh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">廊坊万达广场</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case bh4" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_bh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">星摩尔购物广场</h4>
						</li>
						<li class="wm_case_item" data-id="4">
							<span class="icon_wrapper">
								<i class="icon_wm_case bh5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_bh.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">知名度服饰</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/bh1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/bh1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/bh1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="">
						<img id="case_img_left" src="<?php echo RES;?>/bh2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/bh2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/bh2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/bh3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/bh3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/bh3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/bh4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/bh4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/bh4-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/bh5-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/bh5-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/bh5-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--百货场结束-->

			<!--法律开始-->
				<div data-index="16" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case fl1 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_fl.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">大诚律师</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="">
						<img id="case_img_left" src="<?php echo RES;?>/fl1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/fl1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/fl1-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--法律结束-->

			<!--婚庆开始-->
				<div data-index="17" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case hq1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_hq.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">铂菲婚礼顾问</h4>
						</li>
                        <li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case hq2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_hq.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">福州婚庆导航</h4>
						</li>
                        <li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case hq3 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_hq.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">花香阁婚庆花艺</h4>
						</li>
                        <li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case hq4" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_hq.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">施华洛婚纱婚庆</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/hq1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/hq1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/hq1-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/hq2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/hq2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/hq2-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="2" style="">
						<img id="case_img_left" src="<?php echo RES;?>/hq3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/hq3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/hq3-erwei.jpg" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="3" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/hq4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/hq4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/hq4-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--婚庆结束-->

			<!--it开始-->
				<div data-index="18" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case it1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_it.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">艾定义互动</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case it2 on" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_it.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">方志电子</h4>
						</li>
						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case it3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_it.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">前十名</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case it4" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_it.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">易维网络</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/it1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/it1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/it1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="">
						<img id="case_img_left" src="<?php echo RES;?>/it2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/it2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/it2-erwei.jpg" width="180" height="180">
						</p>

					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/it3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/it3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/it3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/it4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/it4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/it4-erwei.jpg" width="180" height="180">
						</p>
					</div>
				</div>
			<!--it结束-->

			<!--教育开始-->
				<div data-index="19" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item" data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case edu1" style="background-image:url(<?php echo RES;?>/edu/icon_wm_case_edu.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">阿杰发艺</h4>
						</li>
						<li class="wm_case_item" data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case  edu2" style="background-image:url(<?php echo RES;?>/edu/icon_wm_case_edu.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">见悟修教育</h4>
						</li>
						<li class="wm_case_item" data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case edu3 on" style="background-image:url(<?php echo RES;?>/edu/icon_wm_case_edu.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">廊坊第六小学</h4>
						</li>
						<li class="wm_case_item" data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case edu4" style="background-image:url(<?php echo RES;?>/edu/icon_wm_case_edu.png?v=2013-10-21-2);"></i>
							</span>
							<h4 class="wm_case_t">CZ娱乐培训</h4>
						</li>
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/edu1-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/edu1-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/edu1-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/edu2-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/edu2-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/edu2-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="2" style="">
						<img id="case_img_left" src="<?php echo RES;?>/edu3-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/edu3-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/edu3-erwei.jpg" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="3" style="display: none; ">
						<img id="case_img_left" src="<?php echo RES;?>/edu4-1.jpg" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/edu4-2.jpg" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/edu4-erwei.jpg" width="180" height="180">
						</p>

					</div>
				</div>
			<!--教育结束-->
            
            	<!--生活开始-->
				<div data-index="20" class="wm_case_mod_bd right">
					<ul class="wm_case_list">
						<li class="wm_case_item"  data-id="0">
							<span class="icon_wrapper">
								<i class="icon_wm_case on wsh1" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_wsh.png?v=2013-11-25-1);"></i>
							</span>
							<h4 class="wm_case_t">微生活-衡阳</h4>
						</li>
						<li class="wm_case_item"  data-id="1">
							<span class="icon_wrapper">
								<i class="icon_wm_case  wsh2" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_wsh.png?v=2013-11-25-1);"></i>
							</span>
							<h4 class="wm_case_t">惠州生活圈</h4>
						</li>
                        <li class="wm_case_item"  data-id="2">
							<span class="icon_wrapper">
								<i class="icon_wm_case  wsh3" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_wsh.png?v=2013-11-25-1);"></i>
							</span>
							<h4 class="wm_case_t">通灵珠宝</h4>
						</li>
                        <li class="wm_case_item"  data-id="3">
							<span class="icon_wrapper">
								<i class="icon_wm_case  wsh4" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_wsh.png?v=2013-11-25-1);"></i>
							</span>
							<h4 class="wm_case_t">嘉州生活</h4>
						</li>
                        <li class="wm_case_item"  data-id="4">
							<span class="icon_wrapper">
								<i class="icon_wm_case  wsh5" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_wsh.png?v=2013-11-25-1);"></i>
							</span>
							<h4 class="wm_case_t">邵阳微盟</h4>
						</li>
                        <li class="wm_case_item"  data-id="5">
							<span class="icon_wrapper">
								<i class="icon_wm_case  wsh6" style="background-image:url(<?php echo RES;?>/img/icon_wm_case_wsh.png?v=2013-11-25-1);"></i>
							</span>
							<h4 class="wm_case_t">太仓南洋广场</h4>
						</li>
                      
						
					</ul>
					<div class="default_wrapper wm_case_desc" data-id="0">
						<img id="case_img_left" src="<?php echo RES;?>/wsh1-1.jpg?v=2013-11-25-1" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/wsh1-2.jpg?v=2013-11-25-1" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/wsh1-erwei.jpg?v=2013-11-25-1" width="180" height="180">
						</p>
					</div>
					<div class="default_wrapper wm_case_desc" data-id="1" style="display:none;">
						<img id="case_img_left" src="<?php echo RES;?>/wsh2-1.jpg?v=2013-11-25-1" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/wsh2-2.jpg?v=2013-11-25-1" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/wsh2-erwei.jpg?v=2013-11-25-1" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="1" style="display:none;">
						<img id="case_img_left" src="<?php echo RES;?>/wsh3-1.jpg?v=2013-11-25-1" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/wsh3-2.jpg?v=2013-11-25-1" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/wsh3-erwei.jpg?v=2013-11-25-1" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="1" style="display:none;">
						<img id="case_img_left" src="<?php echo RES;?>/wsh4-1.jpg?v=2013-11-25-1" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/wsh4-2.jpg?v=2013-11-25-1" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/wsh4-erwei.jpg?v=2013-11-25-1" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="1" style="display:none;">
						<img id="case_img_left" src="<?php echo RES;?>/wsh5-1.jpg?v=2013-11-25-1" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/wsh5-2.jpg?v=2013-11-25-1" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/wsh5-erwei.jpg?v=2013-11-25-1" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="1" style="display:none;">
						<img id="case_img_left" src="<?php echo RES;?>/wsh6-1.jpg?v=2013-11-25-1" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/wsh6-2.jpg?v=2013-11-25-1" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/wsh6-erwei.jpg?v=2013-11-25-1" width="180" height="180">
						</p>
					</div>
                    <div class="default_wrapper wm_case_desc" data-id="1" style="display:none;">
						<img id="case_img_left" src="<?php echo RES;?>/wsh7-1.jpg?v=2013-11-25-1" class="wm_case_desc_img">
						<img id="case_img_right" src="<?php echo RES;?>/wsh7-2.jpg?v=2013-11-25-1" class="wm_case_desc_img extra">
						<p class="case_ewm_img">
							<img id="case_ewm" src="<?php echo RES;?>/wsh7-erwei.jpg?v=2013-11-25-1" width="180" height="180">
						</p>
					</div>
                
                  
				</div>
			<!--生活结束-->

		</div>
	</div>
</div>
﻿<div class="erwei" title="微信扫一扫">
	<span class="hudongzhushou">官方微信</span>
	<div class="erwei_big" style="display:none;">
		<p>扫一扫，关注微香河官方微信</p>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var erwei_time = null;
		$(".erwei").hover(function(){
			$(".erwei_big").show();
		}).mouseleave(function(){
				erwei_time = setTimeout(function(){
					$(".erwei_big").hide();
				},1000);
			});
		$(".erwei_big").mouseenter(function(){
			if(erwei_time){
				clearTimeout(erwei_time);
			}
		}).mouseleave(function(){
				erwei_time = setTimeout(function(){
					$(".erwei_big").hide();
				},1000);
			});
	});
</script>
<div class="footer">
	<div class="footer-content clearfix">
		<div class="foot-menu" style="padding-top:5px;">
			<p>手机：188888888 &nbsp;&nbsp; QQ：<?php echo C('site_qq');?> &nbsp;&nbsp; 邮箱：<?php echo C('site_email');?></p>
		  <p>地址：中国·香河&nbsp; 免费热线：18888888889</p>
		  <p><?php echo C('copyright');?>  &nbsp;&nbsp; <?php echo C('ipc');?></p>
	  </div>
  </div>
</div>
<!--公告信息-->
<script src="/images/css/qqserver.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="/images/css/qqserver.css"/>
<div id="onlinebox" class="onlinebox onlinebox_1 onlinebox_1_2" style="position: fixed; top: 80px; right:35px; ">
	<div class="onlinebox-showbox" id="onlinebox-showbox" onMouseMove="qq(0)"><span>在<br>线<br>客<br>服<br></span></div>
	<div class="onlinebox-conbox" id="onlinebox-conbox" style="position: absolute; left: -94px; width: 118px; display:none;">
		<div class="onlinebox-top" id="onlinebox-top" title="点击可隐藏" onClick="qq(1)"><span>在线客服</span></div>
		<div class="onlinebox-center">
			<div class="onlinebox-center-box">
				<dl>
					<dt>使用帮助</dt>
						<dd><a href="tencent://message/?uin=<?php echo C('site_qq');?>&amp;Site=&amp;Menu=yes" title="QQ咨询服务">
						<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:41"></a>
						</dd>
					</dl>
				<div class="clear"></div>
				<dl>
					<dt>技术询问</dt>
					<dd>
						<a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('site_qq');?>&site=qq&menu=yes">
							<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:41" alt="在线咨询服务"/>
						</a>
					</dd>
				</dl>
				<div class="clear"></div>
				<dl><dt>合作加盟</dt>
				<dd>
					<a href="tencent://message/?uin=<?php echo C('site_qq');?>&amp;Site=&amp;Menu=yes" title="QQ合作加盟">
						<img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('site_qq');?>:41">
					</a>
				</dd>
				</dl>
				<div class="clear"></div>
			</div>
		</div>
		<div class="onlinebox-bottom">
			<div class="onlinebox-bottom-box">
				<div class="online-tbox">
					<div style="text-align: center; "><strong>在线时间</strong><br>	08:30-17:30<br>
						<span style="color:#999;">—————————</span><br>
						<span style="font-weight: bold; ">服务热线<br>1888888888
							<span style="font-weight: normal; "><br></span>
						</span>
					</div>
				</div>
			</div>
		</div>
		<div class="onlinebox-bottom-bg"></div>
	</div>
</div>
<div style="display:none">
<?php echo C('counts');?>
</div>
<!--公告信息
<script type="text/javascript" src="./themes/Home/default/common/js/index.js"></script>
<script type="text/javascript">
/*250*200，创建于2014-1-1*/
var cpro_id = "u952545";
</script>
-->

</div>
<script type="text/javascript">
	$(document).ready(function(){
		var hash=window.location.hash || "#case-a";
		if(hash){
			var lis=$("#nav_lis>li"),
				divs=$("#nav_uls>div");
			lis.each(function(index, v) {
				if(hash == v.getAttribute("data-hash")){
					v.className="hover";
					//.var divs = $("#nav_uls>div");
					for(var i=0,ci; ci = divs[i]; i++){
						if(index == ci.getAttribute("data-index")){
							$(ci).addClass("show");
						}else{
							$(ci).removeClass("show");
						}
					}
					/*divs.removeAttr("data-on").each(function(k,vv){
						if(index == vv.getAttribute("data-index")){
							vv.setAttribute("data-on", "true");
							return;
						}
					});*/
				}
			});
		}

	$("#nav_lis").on("mouseover", function(e){
			$(this).find("li").removeClass("hover");
			e.target.className = "hover";
			var index = e.target.getAttribute("data-index");
			//
			var divs = $("#nav_uls>div");
			for(var i=0,ci; ci = divs[i]; i++){
				if(index == ci.getAttribute("data-index")){
					$(ci).addClass("show");
				}else{
					$(ci).removeClass("show");
				}
			}

		});


		$("#nav_uls>div").each(function(k,v){
			function show_case(id, thi, pause) {
				if(pause){return;}
				$(thi).parent().find(".on").removeClass("on");
				$(thi).find(".icon_wm_case").addClass("on");
				var divs=$(thi).closest("div").find(".wm_case_desc");
				divs.css("display", "none")[id].style.display="";
			};
			(function(){
				var lis=$(v).find(".wm_case_item");
				var index=0;
				var pause=false;
				//
				$(v).on("mouseover", function(){
					pause=true;
				}).on("mouseout", function(){
						pause=false;
					}).find(".wm_case_item").hover(function () {
						index=$(this).attr("data-id");
						show_case(index, this);
					});
				//
				var timer=setInterval(function(){
					index=++index>=lis.length? 0: index;
					show_case(index, lis[index], pause);
				}, 3000);
			})();
		});
	});
</script>
</body></html>