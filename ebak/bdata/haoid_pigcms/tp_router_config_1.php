<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_router_config`;");
E_C("CREATE TABLE `tp_router_config` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `keyword` varchar(200) NOT NULL DEFAULT '',
  `title` varchar(200) NOT NULL DEFAULT '',
  `picurl` varchar(200) NOT NULL DEFAULT '',
  `info` varchar(300) NOT NULL DEFAULT '',
  `contact_qq` varchar(12) NOT NULL DEFAULT '',
  `welcome_img` varchar(200) NOT NULL DEFAULT '',
  `other_img` varchar(200) NOT NULL DEFAULT '',
  `token` varchar(60) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_router_config` values('1','12312312','123123','12312312','123123123','123123','123123','123123','qyscir1403234167');");
E_D("replace into `tp_router_config` values('2','我要上网','我要上网我要上网','http://bjxit.com/tpl/static/attachment/focus/default/6.jpg','实打实地','45454545','http://bjxit.com/tpl/static/attachment/focus/default/2.jpg','http://bjxit.com/tpl/static/attachment/focus/default/4.jpg','lwxynh1403322765');");

require("../../inc/footer.php");
?>