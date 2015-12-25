<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_user_group`;");
E_C("CREATE TABLE `tp_user_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `taxisid` int(10) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL,
  `diynum` int(11) NOT NULL,
  `connectnum` int(11) NOT NULL,
  `iscopyright` tinyint(1) NOT NULL,
  `activitynum` int(3) NOT NULL,
  `price` int(11) NOT NULL,
  `statistics_user` int(11) NOT NULL,
  `create_card_num` int(4) NOT NULL,
  `wechat_card_num` tinyint(4) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_user_group` values('1','1','VIP0','2000','2000','1','0','0','0','0','1','1');");
E_D("replace into `tp_user_group` values('2','2','VIP1','3000','3000','1','1','100','0','0','1','1');");
E_D("replace into `tp_user_group` values('3','3','VIP2','40000','40000','1','2','200','0','0','1','1');");
E_D("replace into `tp_user_group` values('4','4','VIP3','500000','500000','1','3','300','0','10000','10','1');");

require("../../inc/footer.php");
?>