<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_diymen_class`;");
E_C("CREATE TABLE `tp_diymen_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `pid` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `keyword` varchar(30) NOT NULL,
  `url` varchar(120) NOT NULL,
  `is_show` tinyint(1) NOT NULL,
  `sort` tinyint(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `tp_diymen_class` values('1','lwxynh1403322765','0','菜单一','首页','','1','1');");
E_D("replace into `tp_diymen_class` values('2','lwxynh1403322765','0','菜单二','地图','http://yshl.mobi','1','2');");
E_D("replace into `tp_diymen_class` values('3','lwxynh1403322765','0','菜单三','相册','','1','0');");
E_D("replace into `tp_diymen_class` values('4','lwxynh1403322765','3','分类1','首页','http://3g.cn','1','0');");
E_D("replace into `tp_diymen_class` values('5','lwxynh1403322765','3','分类2','首页','','1','0');");

require("../../inc/footer.php");
?>