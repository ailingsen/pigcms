<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_img`;");
E_C("CREATE TABLE `tp_img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `uname` varchar(90) NOT NULL,
  `keyword` char(255) NOT NULL,
  `type` varchar(1) NOT NULL COMMENT '关键词匹配类型',
  `text` text NOT NULL COMMENT '简介',
  `classid` int(11) NOT NULL,
  `classname` varchar(60) NOT NULL,
  `pic` char(255) NOT NULL COMMENT '封面图片',
  `showpic` varchar(1) NOT NULL COMMENT '图片是否显示封面',
  `info` text NOT NULL COMMENT '图文详细内容',
  `url` char(255) NOT NULL COMMENT '图文外链地址',
  `createtime` varchar(13) NOT NULL,
  `uptatetime` varchar(13) NOT NULL,
  `click` int(11) NOT NULL,
  `token` char(30) NOT NULL,
  `title` varchar(60) NOT NULL,
  `usort` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `tp_img` values('1','4','test','123','2','1234134','1','123','http://bjxit.com/uploads/q/qyscir1403234167/e/9/2/e/thumb_53a4e25476d1f.jpg','1','1241414134134','','1403315608','1403315608','2','qyscir1403234167','123','1');");
E_D("replace into `tp_img` values('2','4','test','345','2','345','1','123','http://bjxit.com/uploads/q/qyscir1403234167/e/9/2/e/thumb_53a4e25476d1f.jpg','1','2342134','','1403315679','1403315679','0','qyscir1403234167','345','1');");
E_D("replace into `tp_img` values('3','4','test','图文一','2','图文一图文一','2','分类1','http://bjxit.com/tpl/static/attachment/focus/default/1.gif','1','是打发斯蒂芬发放水电费水电费','','1403326550','1403326550','6','lwxynh1403322765','图文一图文一','1');");
E_D("replace into `tp_img` values('4','4','test','图文一','2','图文二图文二图文二图文二','3','分类2','http://bjxit.com/tpl/static/attachment/focus/default/6.jpg','1','第四个是地方郭德纲','','1403332581','1403332621','1','lwxynh1403322765','图文二图文二图文二','1');");

require("../../inc/footer.php");
?>