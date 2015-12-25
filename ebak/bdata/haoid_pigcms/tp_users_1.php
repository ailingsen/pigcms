<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_users`;");
E_C("CREATE TABLE `tp_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `inviter` int(10) NOT NULL DEFAULT '0',
  `gid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `mp` varchar(11) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL,
  `email` varchar(90) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `lasttime` varchar(13) NOT NULL,
  `status` varchar(1) NOT NULL,
  `createip` varchar(30) NOT NULL,
  `lastip` varchar(30) NOT NULL,
  `diynum` int(11) NOT NULL,
  `activitynum` int(11) NOT NULL,
  `card_num` int(11) NOT NULL,
  `card_create_status` tinyint(1) NOT NULL,
  `wechat_card_num` tinyint(3) NOT NULL,
  `serviceUserNum` tinyint(3) NOT NULL,
  `money` int(11) NOT NULL,
  `moneybalance` int(10) NOT NULL DEFAULT '0',
  `spend` int(10) NOT NULL DEFAULT '0',
  `viptime` varchar(13) NOT NULL,
  `connectnum` int(11) NOT NULL DEFAULT '0',
  `lastloginmonth` smallint(2) NOT NULL DEFAULT '0',
  `attachmentsize` int(10) NOT NULL DEFAULT '0',
  `invitecode` varchar(6) NOT NULL DEFAULT '',
  `smscount` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8");
E_D("replace into `tp_users` values('3','0','4','zhoufei','13810370520','f72a27150848d9ccda0dadb64ff09a8a','asdfasdf@163.com','1403059534','1403255534','1','125.39.108.75','125.39.9.128','0','0','0','0','1','0','0','0','0','1420041600','0','6','25146','','0');");
E_D("replace into `tp_users` values('4','0','4','test','13810522126','098f6bcd4621d373cade4e832627b4f6','1381052212623@qq.com','1403152360','1403672984','1','125.39.108.75','175.2.102.54','18','0','0','0','3','0','0','0','0','1451577600','42','6','1323558','','0');");
E_D("replace into `tp_users` values('5','0','0','qqqqqq','','343b1c4a3ea721b2d640fc8700db0f36','qq@q.com','1403263642','1403263642','0','223.104.4.59','223.104.4.59','0','0','0','0','0','0','0','0','0','','0','0','0','vspket','0');");
E_D("replace into `tp_users` values('6','0','0','haha123','','e10adc3949ba59abbe56e057f20f883e','df@sina.com','1403320560','1403320560','0','140.206.203.6','140.206.203.6','0','0','0','0','0','0','0','0','0','','0','0','0','nukuxc','0');");
E_D("replace into `tp_users` values('7','3','0','16423258','13896446176','d22103c848a11273b1944d67b93feb1d','1641@qq.om','1403341417','1403341417','0','110.184.53.30','110.184.53.30','0','0','0','0','0','0','0','0','0','','0','0','0','bczcdv','0');");

require("../../inc/footer.php");
?>