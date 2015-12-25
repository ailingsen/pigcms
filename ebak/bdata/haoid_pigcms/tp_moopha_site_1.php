<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_moopha_site`;");
E_C("CREATE TABLE `tp_moopha_site` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `intro` varchar(600) NOT NULL DEFAULT '',
  `picurl` varchar(120) NOT NULL DEFAULT '',
  `token` varchar(50) NOT NULL DEFAULT '',
  `template` varchar(40) NOT NULL DEFAULT '',
  `logourl` varchar(120) NOT NULL DEFAULT '',
  `siteindex` varchar(50) NOT NULL,
  `taxis` int(4) NOT NULL,
  `main` int(1) NOT NULL,
  `abspath` tinyint(1) NOT NULL DEFAULT '0',
  `url` varchar(100) DEFAULT NULL,
  `statisticcode` varchar(600) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `siteindex` (`siteindex`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_moopha_site` values('1','','','','qyscir1403234167','v_23','http://bjxit.com/cms/upload/images/2014/06/20/1403241884eJMD.jpg','','0','0','0',NULL,'YXNkZmFzZGZhc2Rm','0');");
E_D("replace into `tp_moopha_site` values('2','欢迎光临','水电费是否','http://bjxit.com/tpl/static/attachment/focus/default/1.gif','lwxynh1403322765','hongsecanting','http://bjxit.com/cms/upload/images/2014/06/21/1403336735UbZy.gif','','0','0','0',NULL,'','0');");

require("../../inc/footer.php");
?>