<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_dish_order`;");
E_C("CREATE TABLE `tp_dish_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `wecha_id` varchar(100) NOT NULL,
  `token` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `price` float NOT NULL,
  `nums` smallint(3) unsigned NOT NULL,
  `info` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `tel` varchar(13) NOT NULL,
  `address` varchar(200) NOT NULL,
  `tableid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `reservetime` int(11) NOT NULL,
  `isuse` tinyint(1) NOT NULL,
  `paid` tinyint(1) unsigned NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `printed` tinyint(1) unsigned NOT NULL,
  `des` varchar(500) NOT NULL,
  `takeaway` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`,`wecha_id`),
  KEY `token` (`token`),
  KEY `orderid` (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `tp_dish_order` values('1','1','okkUFuIIItyAd43LL6ahiUUgDgQo','qyscir1403234167','1','1','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:1:\"1\";s:3:\"num\";i:1;s:4:\"name\";s:6:\"123414\";s:3:\"des\";s:0:\"\";}}}','','1','','','1','1403314375','1403314964','0','0','o20140621093255','0','','2');");
E_D("replace into `tp_dish_order` values('2','1','okkUFuIIItyAd43LL6ahiUUgDgQo','qyscir1403234167','3','3','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:1:\"1\";s:3:\"num\";i:3;s:4:\"name\";s:6:\"123414\";s:3:\"des\";s:0:\"\";}}}','','1','','','2','1403314497','1403315078','0','0','o20140621093457','0','','2');");
E_D("replace into `tp_dish_order` values('3','1','okkUFuIIItyAd43LL6ahiUUgDgQo','qyscir1403234167','1','1','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:1;a:4:{s:5:\"price\";s:1:\"1\";s:3:\"num\";i:1;s:4:\"name\";s:6:\"123414\";s:3:\"des\";s:0:\"\";}}}','可口可乐','0','18553222112','','1','1403314623','1403362800','0','0','o20140621093703','0','','0');");
E_D("replace into `tp_dish_order` values('4','2','ogwbjs2NE43oHi2ByTR3nqTAiTvE','lwxynh1403322765','1','33','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:2;a:4:{s:5:\"price\";s:2:\"33\";s:3:\"num\";i:1;s:4:\"name\";s:12:\"豆制品类\";s:3:\"des\";s:0:\"\";}}}','','1','','','3','1403335342','1403335900','0','0','E20140621152222','0','','2');");
E_D("replace into `tp_dish_order` values('5','2','ogwbjs2NE43oHi2ByTR3nqTAiTvE','lwxynh1403322765','1','33','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:2;a:4:{s:5:\"price\";s:2:\"33\";s:3:\"num\";i:1;s:4:\"name\";s:12:\"豆制品类\";s:3:\"des\";s:0:\"\";}}}','','1','','','3','1403335456','1403335825','0','0','E20140621152416','0','','2');");
E_D("replace into `tp_dish_order` values('6','2','ogwbjs2NE43oHi2ByTR3nqTAiTvE','lwxynh1403322765','1','33','1','a:2:{s:13:\"takeAwayPrice\";i:0;s:4:\"list\";a:1:{i:2;a:4:{s:5:\"price\";s:2:\"33\";s:3:\"num\";i:1;s:4:\"name\";s:12:\"豆制品类\";s:3:\"des\";s:0:\"\";}}}','过分f','0','13678877665','','3','1403335583','1403625600','0','0','E20140621152623','0','菲菲','0');");

require("../../inc/footer.php");
?>