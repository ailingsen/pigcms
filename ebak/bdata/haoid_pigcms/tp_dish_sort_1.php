<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_dish_sort`;");
E_C("CREATE TABLE `tp_dish_sort` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `name` varchar(100) NOT NULL,
  `des` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL,
  `num` smallint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `tp_dish_sort` values('1','1','123','124','http://bjxit.com/tpl/static/attachment/icon/lovely/cloud-check.png','1');");
E_D("replace into `tp_dish_sort` values('2','2','菜一','阿斯顿','http://bjxit.com/uploads/l/lwxynh1403322765/4/f/3/c/thumb_53a50965a5899.png','1');");
E_D("replace into `tp_dish_sort` values('3','2','菜2','','http://bjxit.com/uploads/l/lwxynh1403322765/d/d/1/0/thumb_53a50e3cbc562.png','0');");

require("../../inc/footer.php");
?>