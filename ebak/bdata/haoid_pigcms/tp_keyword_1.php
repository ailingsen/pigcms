<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_keyword`;");
E_C("CREATE TABLE `tp_keyword` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `keyword` char(255) NOT NULL,
  `pid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `module` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8");
E_D("replace into `tp_keyword` values('1','预约','1','qyscir1403234167','Reservation');");
E_D("replace into `tp_keyword` values('2','试驾','2','qyscir1403234167','Reservation');");
E_D("replace into `tp_keyword` values('3','123','1','qyscir1403234167','Img');");
E_D("replace into `tp_keyword` values('4','345','2','qyscir1403234167','Img');");
E_D("replace into `tp_keyword` values('5','12312312','1','qyscir1403234167','Router_config');");
E_D("replace into `tp_keyword` values('6','图文一','3','lwxynh1403322765','Img');");
E_D("replace into `tp_keyword` values('7','欢迎','1','lwxynh1403322765','Estate');");
E_D("replace into `tp_keyword` values('8','图文一','4','lwxynh1403322765','Img');");
E_D("replace into `tp_keyword` values('9','表单','1','lwxynh1403322765','Selfform');");

require("../../inc/footer.php");
?>