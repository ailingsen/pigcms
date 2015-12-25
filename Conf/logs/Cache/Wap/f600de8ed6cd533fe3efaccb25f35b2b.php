<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/reset.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/common.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/css/datepicker.css" media="all" />
<script type="text/javascript" src="<?php echo RES;?>/car/js/jQuery.js"></script>

<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/car/Tabs/css/easy-responsive-tabs.css" media="all">
<script type="text/javascript" src="<?php echo RES;?>/car/Tabs/js/easyResponsiveTabs.js"></script>

<title>预约列表</title>

        <style>
            img{width:100%!important;}
        </style>
    </head>
    <body onselectstart="return true;" ondragstart="return false;">

    <body onselectstart="return true;" ondragstart="return false;">
        <div id="bookBody" class="body">
            <header>
                <ul>
                    <li><img src="<?php echo ($reser['headpic']); ?>" style="width:100%;" /></li>
                </ul>
            </header>
<?php if($books == ''): ?><li><a href="javascript:;">
            </a><div class="text"><a href="javascript:;">
               您还没有预约。
                </div>

</li><?php endif; ?>

            <section>
                <div class="p_10">
                    <form id="form1" action="#" method="post" >
  <div id="horizontalTab">
            <ul class="resp-tabs-list">

            <?php if(is_array($books)): $i = 0; $__LIST__ = $books;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php echo ($vo['dateline']); ?>订单详情  <a href="javascript:;" style="background-color:#ccc;float:right;margin-right:0px;color:#000;line-height:20px;border-radius:8px;margin-top:3px;padding:0 5px;"> <?php if($vo['remate'] == 0): ?><em class="no">等待客服回电</em><?php elseif($vo['remate'] == 1): ?><em class="no"><font color="green">客服已回复</font></em><?php elseif($vo['remate'] == 2): ?><em class="no"><font color="red">您的请求被拒绝</font></em><?php endif; ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            <div class="resp-tabs-container">
             <?php if(is_array($books)): $i = 0; $__LIST__ = $books;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>
                     <dl class="list_book">

                            <dt class="ofh">
                                <label style="width:150px;">&nbsp;</label>
                            </dt>
                            <dd class="tbox">
                                <div><label>联系人:</label></div>
                                <div><label><?php echo ($vo['truename']); ?></label></div>
                            </dd>
                            <dd class="tbox">
                                <div><label>联系电话：</label></div>
                                <div><a href="tel:<?php echo ($vo['tel']); ?>" style="color:#000;"><?php echo ($vo['tel']); ?></a></div>
                            </dd>
                            <dd class="tbox">
                                <div><label>品牌/车系：</label></div>
                                <div><label><?php echo ($vo['housetype']); ?></label></div>
                            </dd>
                            <dd class="tbox">
                                <div><label>车型：</label></div>
                                <div><label><?php echo ($vo['choose']); ?></label></div>
                            </dd>
                            <?php if($vo['type'] == 'maintain'): ?><dd class="tbox">
                                <div><label>车牌：</label></div>
                                <div><label><?php echo ($vo['carnum']); ?></label></div>
                                </dd>
                                <dd class="tbox">
                                    <div><label>公里：</label></div>
                                    <div><label><?php echo ($vo['km']); ?></label></div>
                                </dd><?php endif; ?>

                            <dd class="tbox">
                                <div><label>预约日期：</label></div>
                                <div><label><?php echo ($vo['dateline']); ?> <?php echo ($vo['timepart']); ?></label></div>
                            </dd>
                            <dd class="tbox">
                                <div><label>提交时间：</label></div>
                                <div><label><?php echo (date('Y年m月d日',$vo['booktime'])); ?></label></div>
                            </dd>
                            <div>
                                <li class="box group_btn">
                                    <div>

                                    </div>
                                    <div><a href="<?php echo U('Car/delOrder',array('token'=>$vo['token'],'wecha_id'=>$vo['wecha_id'],'id'=>$vo['id'],'addtype'=>$vo['type']));?>" onclick="return(confirm('您确定要删除吗?'));return false;" id="showcard2" class="gray">删除订单</a></div>
                                </li>
                            </div>
                        </dl>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>
<script type="text/javascript">
    $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
            type: 'accordion', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true,   // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#tabInfo');
                var $name = $('span', $info);

                $name.text($tab.text());

                $info.show();
            }
        });
    });
</script>
                    </form>
                </div>
            </section>
        </div>

    </body>             <div mark="stat_code" style="width:0px; height:0px; display:none;">
                    </div>
    </body>
</html>