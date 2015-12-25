<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_product_cart`;");
E_C("CREATE TABLE `tp_product_cart` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `productid` int(10) NOT NULL DEFAULT '0',
  `code` varchar(50) NOT NULL DEFAULT '',
  `token` varchar(50) NOT NULL DEFAULT '',
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `info` text NOT NULL,
  `total` mediumint(4) NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '0',
  `truename` varchar(20) NOT NULL DEFAULT '',
  `tel` varchar(14) NOT NULL DEFAULT '',
  `address` varchar(100) NOT NULL DEFAULT '',
  `diningtype` mediumint(2) NOT NULL DEFAULT '0',
  `tableid` mediumint(4) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL DEFAULT '0',
  `buytime` varchar(100) NOT NULL DEFAULT '',
  `groupon` tinyint(1) NOT NULL DEFAULT '0',
  `dining` tinyint(1) NOT NULL DEFAULT '0',
  `year` mediumint(4) NOT NULL DEFAULT '0',
  `month` mediumint(4) NOT NULL DEFAULT '0',
  `day` mediumint(4) NOT NULL DEFAULT '0',
  `hour` smallint(4) NOT NULL DEFAULT '0',
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `orderid` varchar(40) NOT NULL DEFAULT '',
  `sent` tinyint(1) NOT NULL DEFAULT '0',
  `logistics` varchar(70) NOT NULL DEFAULT '',
  `logisticsid` varchar(50) NOT NULL DEFAULT '',
  `printed` tinyint(1) NOT NULL DEFAULT '0',
  `handled` tinyint(1) NOT NULL DEFAULT '0',
  `handledtime` int(10) NOT NULL DEFAULT '0',
  `handleduid` int(10) NOT NULL DEFAULT '0',
  `transactionid` varchar(100) DEFAULT '0',
  `paytype` varchar(30) DEFAULT '0',
  `mailprice` float DEFAULT '0',
  `ordertype` mediumint(2) DEFAULT '0',
  `score` int(10) NOT NULL,
  `paymode` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`,`time`),
  KEY `groupon` (`groupon`),
  KEY `dining` (`dining`),
  KEY `printed` (`printed`),
  KEY `year` (`year`,`month`,`day`,`hour`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_product_cart` values('2','0','','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','a:1:{i:2;a:1:{i:2;a:1:{s:5:\"count\";i:1;}}}','1','5','过分f','13678877665','吃好喝好','0','0','1403325112','','0','0','0','0','0','0','0','E20140621123152','0','','','0','0','0','0','0','0','0','0','0','1');");
E_D("replace into `tp_product_cart` values('3','0','','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','a:1:{i:2;a:1:{i:1;a:1:{s:5:\"count\";i:2;}}}','2','5','过分f','13678877665','吃好喝好','0','0','1403325171','','0','0','0','0','0','0','0','E20140621123251','0','','','0','0','0','0','0','0','0','0','0','1');");
E_D("replace into `tp_product_cart` values('4','0','','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','a:1:{i:2;a:1:{i:2;a:1:{s:5:\"count\";i:4;}}}','4','0','过分f','13678877665','吃好喝好','0','0','1403325299','','0','0','0','0','0','0','0','E20140621123459','0','','','0','0','0','0','0','0','0','0','0','1');");

require("../../inc/footer.php");
?>