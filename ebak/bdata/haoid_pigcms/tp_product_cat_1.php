<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_product_cat`;");
E_C("CREATE TABLE `tp_product_cat` (
  `id` mediumint(4) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL,
  `des` varchar(500) NOT NULL DEFAULT '',
  `parentid` mediumint(4) NOT NULL,
  `logourl` varchar(100) NOT NULL,
  `dining` tinyint(1) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL,
  `norms` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`),
  KEY `token` (`token`),
  KEY `dining` (`dining`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_product_cat` values('1','qyscir1403234167','撒地方','ASF','0','http://bjxit.com/tpl/static/attachment/icon/lovely/backpack-2.png','0','1403313753','萨芬','阿斯蒂芬');");
E_D("replace into `tp_product_cat` values('2','lwxynh1403322765','分类1','两节课后','0','http://bjxit.com/uploads/l/lwxynh1403322765/d/3/7/5/thumb_53a5090f29f56.png','0','1403324710','尺寸','颜色');");

require("../../inc/footer.php");
?>