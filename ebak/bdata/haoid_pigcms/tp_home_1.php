<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_home`;");
E_C("CREATE TABLE `tp_home` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL,
  `picurl` varchar(120) NOT NULL,
  `homeurl` varchar(150) NOT NULL DEFAULT '',
  `info` varchar(120) NOT NULL,
  `apiurl` varchar(200) NOT NULL DEFAULT '',
  `musicurl` varchar(180) NOT NULL DEFAULT '',
  `plugmenucolor` varchar(10) NOT NULL DEFAULT '',
  `copyright` varchar(200) NOT NULL DEFAULT '',
  `logo` varchar(200) NOT NULL DEFAULT '',
  `bjdh` int(11) NOT NULL,
  `tongji` varchar(500) NOT NULL,
  `dianhua` varchar(500) NOT NULL,
  `radiogroup` mediumint(4) NOT NULL DEFAULT '0',
  `advancetpl` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_home` values('1','qyscir1403234167','阿斯蒂芬','http://bjxit.com/uploads/q/qyscir1403234167/e/9/2/e/thumb_53a4e25476d1f.jpg','','爱的','','','','','','0','','','12','0');");
E_D("replace into `tp_home` values('2','lwxynh1403322765','欢迎光临','http://bjxit.com/tpl/static/attachment/focus/default/1.gif','','水电费是否','','','','','http://bjxit.com/uploads/l/lwxynh1403322765/4/b/f/7/thumb_53a505bd59d9e.png','0','','','9','0');");

require("../../inc/footer.php");
?>