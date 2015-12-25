<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wehcat_member_enddate`;");
E_C("CREATE TABLE `tp_wehcat_member_enddate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `openid` varchar(60) NOT NULL,
  `enddate` int(11) NOT NULL,
  `joinUpDate` int(11) NOT NULL DEFAULT '0',
  `uid` int(11) NOT NULL DEFAULT '0',
  `token` varchar(40) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `tp_wehcat_member_enddate` values('1','okkUFuIIItyAd43LL6ahiUUgDgQo','1403352797','0','0','qyscir1403234167');");
E_D("replace into `tp_wehcat_member_enddate` values('2','ogwbjs2NE43oHi2ByTR3nqTAiTvE','1403339723','0','0','lwxynh1403322765');");
E_D("replace into `tp_wehcat_member_enddate` values('3','okkUFuG3IzCqn2CmIss_GkVLT9Yk','1403349975','0','0','qyscir1403234167');");

require("../../inc/footer.php");
?>