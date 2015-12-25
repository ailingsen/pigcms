<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">    
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php echo C('site_name');?> | <?php echo C('site_title');?></title>
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
<style type="text/css">
<!--
.red {color: #FF0000}
.login { color:#555555}
.login input { 
	padding: 5px;
	margin-top:12px;
	border: solid 1px #E1E1E1;
	outline: 0;
	font: normal 13px/100% Verdana, Tahoma, sans-serif;
	width: 150px;
	box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	-moz-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	-webkit-box-shadow: rgba(0,0,0, 0.1) 0px 0px 8px;
	}
.login input:hover,.login input:focus{ 
	border-color: #C9C9C9; 
	-webkit-box-shadow: rgba(0, 0, 0, 0.15) 0px 0px 8px;
	}
.think-login{ margin-top: 36px;padding-right: 60px; border-right: 1px solid #ddd; }
.think-login .body{ padding-top: 12px; }
.think-login{ float: left; }
.think-form{ padding-bottom: 36px; }
.think-form .submit{ background: #348FD4; color: #fff; font-size: 16px; height: 30px; line-height: 21px; padding: 0 24px; vertical-align: middle; border: 0; cursor: pointer; }
.think-form .submit:hover{ background-color: #2F81BF; }
-->
</style>

<div class="nav clearfix">
	<div class="nav-content">
		<h1 class="left"><?php echo C('site_name');?>·微信营销，如此简单！</h1>
		<div class="right line-li">
			<ul>
				<li>
					<a href="/" class="hover">首页</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/common');?>">经典案例</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/gongneng');?>">功能介绍</a>
				</li>
				<li>
					<a href="<?php echo U('Home/Index/daili');?>">合作代理</a>
				</li>
				<li>
					<a href="http://www.weshangjia.com" target="_blank">更多服务</a>
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
<DIV class="Public-content clearfix" style="margin-top:38px;">
<DIV class=Public>
<H2 class=Public-h2>帐户登录</H2>
<DIV class=Public-box>
<DIV class=Proxy>
<div class="think-login">
<DIV class="body think-form ">
<FORM class=login method=post action="<?php echo U('Users/checklogin');?>">
<TABLE height=272 class="login">
  <TBODY>
    <TR>
      <TH width=101>用户名</TH>
      <TD width=565><INPUT class=text type=text name=username>
      </TD>
      <TD rowSpan=4 width=263><IMG alt="" src="<?php echo RES;?>/images/weshangjia-com.jpg" width=258 
      height=258></TD>
    </TR>
    <TR>
      <TH>密　码</TH>
      <TD><INPUT class=text type=password name=password>
      </TD>
    </TR>

    <TR>
      <TH></TH>
      <TD><INPUT name="submit" type=submit class=submit value=请审核后再登录>
         <a href="<?php echo U('Index/regpwd');?>" style="position:relative; top:15px; left:10px;">找回密码？</a>
      </TD>
    </TR>
   
  </TBODY>
</TABLE>
<input type="hidden" name="__hash__" value="3e9fde7441cc55bf46afe7f8361af205_ab037d0cb24069e86b06c23943410ad1" /></FORM>

</div>
</DIV></DIV>
</DIV></DIV>

<!--公告信息-->
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


</body></html>