<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_product_cart_list`;");
E_C("CREATE TABLE `tp_product_cart_list` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cartid` int(10) NOT NULL DEFAULT '0',
  `productid` int(10) NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '0',
  `total` mediumint(4) NOT NULL DEFAULT '0',
  `wecha_id` varchar(60) NOT NULL DEFAULT '',
  `token` varchar(50) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `cartid` (`cartid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_product_cart_list` values('2','2','2','0','1','ogwbjs2NE43oHi2ByTR3nqTAiTvE','lwxynh1403322765','1403325112');");
E_D("replace into `tp_product_cart_list` values('3','3','2','0','2','ogwbjs2NE43oHi2ByTR3nqTAiTvE','lwxynh1403322765','1403325171');");
E_D("replace into `tp_product_cart_list` values('4','4','2','0','4','ogwbjs2NE43oHi2ByTR3nqTAiTvE','lwxynh1403322765','1403325299');");

require("../../inc/footer.php");
?>