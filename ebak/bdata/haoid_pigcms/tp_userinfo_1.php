<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_userinfo`;");
E_C("CREATE TABLE `tp_userinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `wecha_id` varchar(60) NOT NULL,
  `wechaname` varchar(60) NOT NULL,
  `truename` varchar(60) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `bornyear` varchar(4) NOT NULL DEFAULT '',
  `bornmonth` varchar(4) NOT NULL DEFAULT '',
  `bornday` varchar(4) NOT NULL DEFAULT '',
  `qq` varchar(11) NOT NULL DEFAULT '',
  `sex` tinyint(1) NOT NULL,
  `age` varchar(3) NOT NULL DEFAULT '',
  `birthday` varchar(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `getcardtime` int(10) NOT NULL DEFAULT '0',
  `info` varchar(200) NOT NULL,
  `total_score` int(11) NOT NULL,
  `expensetotal` int(10) NOT NULL DEFAULT '0',
  `sign_score` int(11) NOT NULL,
  `expend_score` int(11) NOT NULL,
  `continuous` int(11) NOT NULL,
  `add_expend` int(11) NOT NULL,
  `add_expend_time` int(11) NOT NULL,
  `live_time` int(11) NOT NULL,
  `portrait` varchar(200) NOT NULL,
  `wallopen` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_userinfo` values('1','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','','可口可乐','18553222112','','','','0','-1','0','','利丽栾经理','0','','0','0','0','0','0','0','0','0','','0');");
E_D("replace into `tp_userinfo` values('2','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','','过分f','13678877665','','','','0','-1','0','','吃好喝好','0','','0','0','0','0','0','0','0','0','','0');");

require("../../inc/footer.php");
?>