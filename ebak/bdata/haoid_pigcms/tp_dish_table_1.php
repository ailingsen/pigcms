<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_dish_table`;");
E_C("CREATE TABLE `tp_dish_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(10) unsigned NOT NULL,
  `tableid` int(10) unsigned NOT NULL,
  `wecha_id` varchar(50) NOT NULL,
  `reservetime` int(10) unsigned NOT NULL,
  `creattime` int(10) unsigned NOT NULL,
  `orderid` int(10) unsigned NOT NULL,
  `isuse` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `wecha_id` (`wecha_id`,`reservetime`),
  KEY `tableid` (`tableid`),
  KEY `orderid` (`orderid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `tp_dish_table` values('1','1','1','okkUFuIIItyAd43LL6ahiUUgDgQo','1403314964','1403314375','1','0');");
E_D("replace into `tp_dish_table` values('2','1','2','okkUFuIIItyAd43LL6ahiUUgDgQo','1403315078','1403314497','2','0');");
E_D("replace into `tp_dish_table` values('3','1','1','okkUFuIIItyAd43LL6ahiUUgDgQo','1403362800','1403314623','3','0');");
E_D("replace into `tp_dish_table` values('4','2','3','ogwbjs2NE43oHi2ByTR3nqTAiTvE','1403335900','1403335343','4','0');");
E_D("replace into `tp_dish_table` values('5','2','3','ogwbjs2NE43oHi2ByTR3nqTAiTvE','1403335825','1403335456','5','0');");
E_D("replace into `tp_dish_table` values('6','2','3','ogwbjs2NE43oHi2ByTR3nqTAiTvE','1403625600','1403335583','6','0');");

require("../../inc/footer.php");
?>