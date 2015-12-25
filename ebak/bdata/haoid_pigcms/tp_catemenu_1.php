<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_catemenu`;");
E_C("CREATE TABLE `tp_catemenu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fid` int(10) NOT NULL DEFAULT '0',
  `token` varchar(60) NOT NULL,
  `name` varchar(120) NOT NULL,
  `orderss` varchar(10) NOT NULL DEFAULT '0',
  `picurl` varchar(120) NOT NULL,
  `url` varchar(120) NOT NULL DEFAULT '0',
  `status` varchar(10) NOT NULL,
  `RadioGroup1` varchar(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `tp_catemenu` values('3','0','lwxynh1403322765','导航二','0','http://bjxit.com/tpl/User/default/common/images/photo/plugmenu15.png','{siteUrl}/index.php?g=Wap&amp;m=Car&amp;a=brands&amp;token=lwxynh1403322765&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `tp_catemenu` values('2','0','lwxynh1403322765','导航一','0','http://bjxit.com/tpl/User/default/common/images/photo/plugmenu5.png','{siteUrl}/index.php?g=Wap&amp;m=Store&amp;a=index&amp;token=lwxynh1403322765&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `tp_catemenu` values('4','0','lwxynh1403322765','导航三','0','http://bjxit.com/tpl/User/default/common/images/photo/plugmenu14.png','{siteUrl}/index.php?g=Wap&amp;m=Estate&amp;a=index&amp;token=lwxynh1403322765&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `tp_catemenu` values('5','0','lwxynh1403322765','导航四','0','http://bjxit.com/tpl/User/default/common/images/photo/plugmenu9.png','','1','0');");
E_D("replace into `tp_catemenu` values('6','5','lwxynh1403322765','分类1','0','http://bjxit.com/tpl/User/default/common/images/photo/plugmenu15.png','{siteUrl}/index.php?g=Wap&amp;m=Reply&amp;a=index&amp;token=lwxynh1403322765&amp;wecha_id={wechat_id}','1','0');");
E_D("replace into `tp_catemenu` values('7','5','lwxynh1403322765','分类2','0','http://bjxit.com/tpl/User/default/common/images/photo/plugmenu18.png','{siteUrl}/index.php/show/lwxynh1403322765','1','0');");

require("../../inc/footer.php");
?>