<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_forum_topics`;");
E_C("CREATE TABLE `tp_forum_topics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(300) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `likeid` varchar(3000) DEFAULT NULL,
  `commentid` varchar(3000) DEFAULT NULL,
  `favourid` varchar(3000) DEFAULT NULL,
  `createtime` int(11) NOT NULL,
  `updatetime` int(11) DEFAULT NULL,
  `uid` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `token` varchar(50) DEFAULT NULL,
  `photos` varchar(300) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `tp_forum_topics` values('1','复活节jh','发挥好cxcv&amp;lt;img src=&amp;quot;./tpl/static/forum/images/8.gif&amp;quot; data-innerhtml=&amp;quot;/::Z&amp;quot;&amp;gt;&amp;lt;/img&amp;gt;',NULL,NULL,NULL,'1403333655',NULL,'ogwbjs2NE43oHi2ByTR3nqTAiTvE','游客','lwxynh1403322765','','1');");
E_D("replace into `tp_forum_topics` values('2','刚回家','反感hj反感hjy',NULL,NULL,NULL,'1403333829',NULL,'ogwbjs2NE43oHi2ByTR3nqTAiTvE','游客','lwxynh1403322765','','1');");

require("../../inc/footer.php");
?>