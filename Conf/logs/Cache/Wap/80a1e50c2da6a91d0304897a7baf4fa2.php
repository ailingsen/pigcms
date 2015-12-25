<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/wap/estate/pigcms-ui-1-1.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/wap/estate/common.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/wap/estate/car_reset.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/wap/estate/list-8.css" media="all">
<link rel="stylesheet" type="text/css" href="<?php echo STATICS;?>/wap/estate/menu-2.css" media="all">
<script type="text/javascript" src="<?php echo STATICS;?>/wap/estate/jQuery.js"></script>
<title><?php echo ($classify['name']); ?></title>

        <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="Keywords" content="小猪cms、微信营销、微信代运营、微信定制开发、微信托管、微网站、微商城、微营销">
        <meta name="Description" content="小猪cms，国内最大的微信公众智能服务平台，小猪cms八大微体系：微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计，企业微营销必备。">
        <!-- Mobile Devices Support @begin -->

            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes"> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">

        <!-- Mobile Devices Support @end -->
        
    </head>
    <body onselectstart="return true;" ondragstart="return false;">
      

<div class="body">
            <footer class="nav_footer">
        <ul class="box">
            <li><a href="javascript:history.go(-1);">返回</a></li>
            <li><a href="javascript:history.go(1);">前进</a></li>
            <li><a href="<?php echo U('Estate/index',array('token'=>$token,'wecha_id'=>$Think.get.wecha_id));?>">首页</a></li>
            <li><a href="javascript:location.reload();">刷新</a></li>
        </ul>
    </footer>
 
                    <header>
            <div class="head_news">
                <a href="<?php echo ($classify['url']); ?>">
                    <ul>
<?php if($classify['img'] != ''): ?><li><img src="<?php echo ($classify['img']); ?>" style="width:100%; max-height:400px;"></li><?php endif; ?>
                    </ul>
                    <ol><?php echo ($classify['name']); ?></ol>
                </a>
            </div>
        </header>
        <p></p>
            <section>

                    <ul class="list_ul list_ul_news">
                     <?php if(is_array($imgtxt)): $i = 0; $__LIST__ = $imgtxt;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                        <a class="tbox" href="<?php echo U('Estate/newlist',array('token'=>$token,'wecha_id'=>$wecha_id,'mid'=>$vo['mid']));?>">
                            <div>
                                <img src="<?php echo ($vo['pic']); ?>" style="width:60px!important; height:60px;">
                            </div>
                            <div>
                                <p><?php echo ($vo['title']); ?></p>
                                <p><?php echo (date("Y年m月d日",$vo['createtime'])); ?></p>
                            </div>
                        </a><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    </section>
</div>            <div mark="stat_code" style="width:0px; height:0px; display:none;">
                    </div>

</body></html>