<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_reply_info`;");
E_C("CREATE TABLE `tp_reply_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `title` varchar(30) NOT NULL DEFAULT '',
  `picurl` varchar(120) NOT NULL DEFAULT '',
  `info` varchar(120) NOT NULL DEFAULT '',
  `infotype` varchar(20) NOT NULL DEFAULT '',
  `diningyuding` tinyint(1) NOT NULL DEFAULT '1',
  `diningwaimai` tinyint(1) NOT NULL DEFAULT '1',
  `config` text NOT NULL,
  `apiurl` varchar(200) NOT NULL DEFAULT '',
  `keyword` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `tp_reply_info` values('1','qyscir1403234167','商城','','阿斯蒂芬','Shop','1','1','','','商城');");
E_D("replace into `tp_reply_info` values('2','qyscir1403234167','点餐','','阿斯蒂芬','Dining','1','1','','','订餐');");
E_D("replace into `tp_reply_info` values('3','lwxynh1403322765','欢迎光临商城','http://bjxit.com/uploads/l/lwxynh1403322765/3/c/4/7/thumb_53a508d003a9b.jpg','最多填写120个','Shop','1','1','','','商城');");
E_D("replace into `tp_reply_info` values('4','lwxynh1403322765','不错真不错','http://bjxit.com/tpl/static/attachment/focus/default/6.jpg','卡嘉莉','Dining','1','1','','','订餐');");
E_D("replace into `tp_reply_info` values('5','qyscir1403234167','房间预订','http://bjxit.com/uploads/q/qyscir1403234167/e/9/7/3/thumb_53a56c1048b46.jpg','在线预订','Hotels','1','1','','','酒店');");

require("../../inc/footer.php");
?>