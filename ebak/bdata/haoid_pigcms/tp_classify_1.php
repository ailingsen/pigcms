<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_classify`;");
E_C("CREATE TABLE `tp_classify` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL DEFAULT '0',
  `name` varchar(60) NOT NULL,
  `info` varchar(90) NOT NULL COMMENT '分类描述',
  `sorts` varchar(6) NOT NULL COMMENT '显示顺序',
  `img` char(255) NOT NULL,
  `url` char(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  `token` varchar(30) NOT NULL,
  `path` varchar(3000) NOT NULL,
  `tpid` tinyint(4) DEFAULT '1',
  `conttpid` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `tp_classify` values('1','0','123','12','1','http://bjxit.com/tpl/static/attachment/icon/lovely/cloud-check.png','','1','qyscir1403234167','','101','6');");
E_D("replace into `tp_classify` values('2','0','分类1','个字简短分类','1','http://bjxit.com/tpl/static/attachment/icon/lovely/cloud-check.png','{siteUrl}/index.php?g=Wap&amp;m=Store&amp;a=index&amp;token=lwxynh1403322765&amp;wecha_id={wechat_id}','1','lwxynh1403322765','','100','6');");
E_D("replace into `tp_classify` values('3','0','分类2','分类2分类2分类2分类2','1','http://bjxit.com/tpl/static/attachment/icon/lovely/cloud-refresh.png','http://yshl.mobi','1','lwxynh1403322765','','102','5');");

require("../../inc/footer.php");
?>