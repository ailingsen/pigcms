<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_company`;");
E_C("CREATE TABLE `tp_company` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `token` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `shortname` varchar(50) NOT NULL DEFAULT '',
  `mp` varchar(11) NOT NULL DEFAULT '',
  `tel` varchar(20) NOT NULL DEFAULT '',
  `address` varchar(200) NOT NULL DEFAULT '',
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `intro` text NOT NULL,
  `catid` mediumint(3) NOT NULL DEFAULT '0',
  `taxis` int(10) NOT NULL DEFAULT '0',
  `isbranch` tinyint(1) NOT NULL DEFAULT '0',
  `logourl` varchar(180) NOT NULL DEFAULT '',
  `display` tinyint(1) DEFAULT '1',
  `username` varchar(60) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `tp_company` values('1','qyscir1403234167','wwqwqwq','wqwqwq','13312312312','wqwqwq','wqwqwqwq','0','0','','0','0','0','212121','1','','');");
E_D("replace into `tp_company` values('2','lwxynh1403322765','路人甲','路人甲','13878788789','87898988','电饭锅67','31.230665','121.465853','对方水电费','0','1','0','http://bjxit.com/uploads/l/lwxynh1403322765/d/d/1/0/thumb_53a50e3cbc562.png','1','','');");
E_D("replace into `tp_company` values('3','lwxynh1403322765','分店一','风电已','13989899898','87878989','吴中路8号锦辉大厦','31.203982','121.45263','梵蒂冈地方郭德纲','0','1','1','http://bjxit.com/uploads/l/lwxynh1403322765/d/d/1/0/thumb_53a50e3cbc562.png','1','haha123','e10adc3949ba59abbe56e057f20f883e');");

require("../../inc/footer.php");
?>