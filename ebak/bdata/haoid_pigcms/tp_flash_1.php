<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_flash`;");
E_C("CREATE TABLE `tp_flash` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `img` char(255) NOT NULL,
  `url` char(255) NOT NULL,
  `info` varchar(90) NOT NULL,
  `tip` smallint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `tip` (`tip`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_flash` values('1','lwxynh1403322765','http://bjxit.com/tpl/static/attachment/focus/default/6.jpg','http://yshl.mobi','法国队','1');");
E_D("replace into `tp_flash` values('2','lwxynh1403322765','http://bjxit.com/tpl/static/attachment/background/view/8.jpg','','er','2');");

require("../../inc/footer.php");
?>