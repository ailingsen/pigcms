<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" /><meta charset="utf-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="black" name="apple-mobile-web-app-status-bar-style" />
<meta name="format-detection" content="telephone=no"/>
<title><?php echo ($metaTitle); ?></title>
<link rel="stylesheet" type="text/css" href="../tpl/static/repast/css/wei_dialog.css" media="all" />
<link rel="stylesheet" type="text/css" href="../tpl/static/repast/css/wei_canyin.css" media="all" />
<link rel="stylesheet" type="text/css" href="../tpl/static/repast/css/home.css" media="all">
<script type="text/javascript" src="../tpl/static/repast/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="../tpl/static/repast/js/wei_webapp_v2_common.js"></script>
</head>
<body id="page_intelOrder" class="myOrderCon">

<div style="float:none;width:100%;" class="headselect">
	<a class="link_tel icon-phone">我的订单</a>
</div>
<div class="container">
<br/>
<header id="container">
	<div>
	    <select class="select_orderType" onchange="orderList(this);">
	        <option value="0" <?php if ($status == 0) {echo "selected";} ?> >全部就餐状态</option>
	        <option value="1" <?php if ($status == 1) {echo "selected";} ?> >未付款，未就餐</option>
	        <option value="3" <?php if ($status == 3) {echo "selected";} ?> >已付款，未就餐</option>
	        <option value="4" <?php if ($status == 4) {echo "selected";} ?> >已付款，已就餐</option>
	    </select>
	</div>
	<div style="padding:10px 0;">
		<ul class="list_order" id='list'>
			<?php if(is_array($orderList)): $i = 0; $__LIST__ = $orderList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$order): $mod = ($i % 2 );++$i;?><li>
				<label style="float:none;" onclick="this.classList.toggle('on');">订餐人：<?php echo ($order["name"]); ?>&nbsp;预约时间：<?php echo (date("Y-m-d H:i:s",$order["reservetime"])); ?> </label>
				<ol>
					<!-- <p>就餐地址： 上海市宝山区 </p> 
					<p>付款方式：线下支付</p> -->
					<table>
						<thead>
							<tr>
							    <td colspan="3" style="font-size:16px;">我的菜单</td>
							</tr>
							<tr>
							    <td style="width:33%">菜名</td>
								<td style="width:33%">单价</td>
							    <td>数量</td>
							</tr>
						</thead>
						<tbody>
						<?php if(is_array($order['info']['list'])): $i = 0; $__LIST__ = $order['info']['list'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$row): $mod = ($i % 2 );++$i;?><tr>
							<td><?php echo ($row["name"]); ?></td>
							<td><?php echo ($row["price"]); ?>元</td>
							<td><?php echo ($row["num"]); ?>份</td>
						</tr><?php endforeach; endif; else: echo "" ;endif; ?>
						</tbody>
 						<tfoot>
						<tr>
							<td colspan="3" style="text-align:right;">
								<?php if($order['info']['takeAwayPrice'] > 0): ?><label>送餐费：<span class="red h5"><?php echo ($order['info']['takeAwayPrice']); ?>元</span></label><?php endif; ?>
								<label>总金额：<span class="red h5"><?php echo ($order["price"]); ?>元</span>&nbsp;&nbsp;</label>
							</td>
						</tr>
						</tfoot>
					</table>
				</ol>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>
</header>
</div>
 <style type="text/css">
ul, li { list-style:none; margin:0; padding:0 }
<?php if(ACTION_NAME == 'selectTable' OR ACTION_NAME == 'myOrder'): ?>.top_bar {position: static; z-index: 9; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }
<?php else: ?>
.top_bar {position: fixed; z-index: 9; bottom: 0; left: 0; right: 0; margin: auto; font-family: Helvetica, Tahoma, Arial, Microsoft YaHei, sans-serif; }<?php endif; ?>
.top_menu { display:-webkit-box; border-top: 1px solid #3D3D46; display: block; width: 100%; background: rgba(255, 255, 255, 0.7); height: 48px; display: -webkit-box; display: box; margin:0; padding:0; -webkit-box-orient: horizontal; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1) inset; }
.top_bar .top_menu>li { -webkit-box-flex:1; position:relative; text-align:center; }
.top_menu li:first-child { background:none; }
.top_bar .top_menu>li>a { height:48px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
.top_bar .top_menu>li.home { max-width:70px }
.top_bar .top_menu>li.home a { height: 66px; width: 66px; margin: auto; border-radius: 60px; position: relative; top: -22px; left: 2px; background: url('tpl/Wap/default/common/images/home.png') no-repeat center center; background-size: 100% 100%; }
.top_bar .top_menu>li>a label { overflow:hidden; margin: 0 0 0 0; font-size: 12px; display: block !important; line-height: 18px; text-align: center; }
.top_bar .top_menu>li>a img { padding: 3px 0 0 0; height: 24px; width: 24px; color: #fff; line-height: 48px; vertical-align:middle; }
.top_bar li:first-child a { display: block; }
.menu_font { text-align:left; position:absolute; right:10px; z-index:5; background: -webkit-gradient(linear, 0 0, 0 100%, from(#524945), to(#48403c), color-stop(60%, #524945)); border-radius: 5px; width: 120px; margin-top: 10px; padding: 0; box-shadow: 0 1px 5px rgba(0, 0, 0, 0.3); }
.menu_font.hidden { display:none; }
.menu_font { top:inherit !important; bottom:60px; }
.menu_font li a { height:40px; margin-right: 1px; display:block; text-align:center; color:#FFF; text-decoration:none; text-shadow: 0 1px rgba(0, 0, 0, 0.3); -webkit-box-flex:1; }
.menu_font li a { text-align: left !important; }
.top_menu li:last-of-type a { background: none; overflow:hidden; }
.menu_font:after { top: inherit!important; bottom: -6px; border-color: #48403c rgba(0, 0, 0, 0) rgba(0, 0, 0, 0); border-width: 6px 6px 0; position: absolute; content: ""; display: inline-block; width: 0; height: 0; border-style: solid; left: 80%; }
.menu_font li { border-top: 1px solid rgba(255, 255, 255, 0.1); border-bottom: 1px solid rgba(0, 0, 0, 0.2); }
.menu_font li:first-of-type { border-top: 0; }
.menu_font li:last-of-type { border-bottom: 0; }
.menu_font li a { height: 40px; line-height: 40px !important; position: relative; color: #fff; display: block; width: 100%; text-indent: 10px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden; }
.menu_font li a img { width: 20px; height:20px; display: inline-block; margin-top:-2px; color: #fff; line-height: 40px; vertical-align:middle; }
.menu_font>li>a label { padding:3px 0 0 3px; font-size:14px; overflow:hidden; margin: 0; }
#menu_list0 { right:0; left:10px; }
#menu_list0:after { left: 20%; }
.top_bar .top_menu>li>a:hover, .top_bar .top_menu>li>a:active { background-color:#333; }
.menu_font li a:hover, .menu_font li a:active { background-color:#333; }
.menu_font li:first-of-type a { border-radius:5px 5px 0 0; }
.menu_font li:last-of-type a { border-radius:0 0 5px 5px; }
#plug-wrap { position: static; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0); z-index:8; }
</style>
<div class="top_bar" id="footer_menu">
	<ul id="top_menu" class="top_menu">
		<li><a href="<?php echo U('Index/index', array('token'=>$token, 'wecha_id'=>$wecha_id));?>"><img src="/tpl/User/default/common/images/photo/plugmenu6.png"><label>首页</label></a></li>
		<li><a href="<?php echo U('Repast/index', array('token'=>$token, 'wecha_id'=>$wecha_id));?>"><img src="/tpl/User/default/common/images/photo/plugmenu5.png"><label>选择</label></a></li>    
		<li><a onclick="t(1, '<?php echo U('Repast/dish', array('token'=>$token, 'wecha_id'=>$wecha_id, 'cid'=>$cid));?>');"><img src="/tpl/User/default/common/images/photo/plugmenu11.png"><label>点菜</label></a></li>
		<li><a onclick="javascript:displayit(3)" id="childmenu"><img src="/tpl/User/default/common/images/photo/plugmenu2.png"><label>我的</label></a>
			<ul id="menu_list3" class="menu_font" style=" display:none">
				<li><a onclick="t(3, '<?php echo U('Repast/myOrder', array('token'=>$token, 'wecha_id'=>$wecha_id, 'cid'=>$cid));?>');"><img src="/tpl/User/default/common/images/photo/plugmenu4.png"><label>我的订单</label></a></li>
				<li><a onclick="t(4, '<?php echo U('Repast/like', array('token'=>$token, 'wecha_id'=>$wecha_id, 'cid'=>$cid));?>');"><img src="/tpl/User/default/common/images/photo/plugmenu18.png"><label>我的喜欢</label></a></li>
			</ul>
		</li>
		<li class="footer_menu"><a onclick="t(5, '<?php echo U('Repast/mymenu', array('token'=>$token, 'wecha_id'=>$wecha_id, 'cid'=>$cid));?>');" id="my_menu"><span class="icons icons_5"><label id="num" class="num"><?php echo ($totalDishCount); ?></label></span></a></li>
	</ul>
</div>
<div id="plug-wrap" onclick="closeall()" style="display: none;"></div>
 
 <script>

var cid = '<?php echo ($cid); ?>';
$(document).ready(function() {
	var tt = 0;
	$("#childmenu").click(function(){
		clearTimeout(tt);
		$("#menu_list3").show();
	}).mouseleave(function(){
		tt = setTimeout("$('#menu_list3').hide();", 1000);
	});
	$("#menu_list3").mouseenter(function(){
		clearTimeout(tt);
		$(this).show();
	}).mouseleave(function(){
		tt = setTimeout("$('#menu_list3').hide();", 1000);
	});
});

function t(index, url) {
	if (cid > 0) {
		if (index == 3 || index == 4 || index == 5) {
			$.ajax({
	            'url': "<?php echo U('Repast/getInfo', array('token'=>$token, 'wecha_id' => $wecha_id, 'cid' => $cid));?>",
	            'dataType': "json",
	            'success': function(db) {
	            	if (db.success == 1) {
	            		location.href = url;
	            	} else {
	            		MDialog.confirm('', db.msg, null,
	            	            '确定', function() {
	            	    					isCancle = false;
	            	    					location.href = "<?php echo U('Repast/index', array('token'=>$token, 'wecha_id'=>$wecha_id, 'cid' => $cid));?>";
	            	            }, null, null, null, null, null, true, true);
	            	}
	            }
	        });
		} else {
			location.href = url;
		}
	} else {
	    MDialog.confirm('', '请您先选择餐厅？', null,
	            '确定', function() {
	    					isCancle = false;
	    					location.href = "<?php echo U('Repast/index', array('token'=>$token, 'wecha_id'=>$wecha_id));?>";
	            }, null, null, null, null, null, true, true);
	}
}
</script>

<script>
$(document).ready(function(){
    var min_height = $(document).height() - 80;
    $("#container").css({"min-height":min_height});
});

function orderList(obj) {
	location.href = "<?php echo U('Repast/myOrder', array('token'=>$token, 'wecha_id'=>$wecha_id, 'cid'=>$cid));?>&status=" + $(obj).val();
}
</script>
</body>
<script type="text/javascript">
window.shareData = {  
            "moduleName":"Repast",
            "moduleID":"0",
            "imgUrl": "", 
            "timeLineLink": "<?php echo C('site_url') . U('Repast/myOrder',array('token' => $_GET['token']));?>",
            "sendFriendLink": "<?php echo C('site_url') . U('Repast/myOrder',array('token' => $_GET['token']));?>",
            "weiboLink": "<?php echo C('site_url') . U('Repast/myOrder',array('token' => $_GET['token']));?>",
            "tTitle": "<?php echo ($metaTitle); ?>",
            "tContent": "<?php echo ($metaTitle); ?>"
        };
</script>
<?php echo ($shareScript); ?>
</html>