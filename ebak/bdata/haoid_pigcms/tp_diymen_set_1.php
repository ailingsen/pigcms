<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_diymen_set`;");
E_C("CREATE TABLE `tp_diymen_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `appid` varchar(18) NOT NULL,
  `appsecret` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `tp_diymen_set` values('3','wnizln1403059574','','');");
E_D("replace into `tp_diymen_set` values('4','qyscir1403234167','','');");
E_D("replace into `tp_diymen_set` values('5','budphv1403322552','','');");
E_D("replace into `tp_diymen_set` values('6','lwxynh1403322765','wx50b147cfb97fb61a','172c6176d7ad40404c7739eb1b9bede8');");

require("../../inc/footer.php");
?>