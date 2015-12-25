<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_moopha_article`;");
E_C("CREATE TABLE `tp_moopha_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `channel_id` int(10) NOT NULL,
  `token` varchar(50) NOT NULL,
  `site` int(4) NOT NULL DEFAULT '1',
  `title` varchar(200) NOT NULL,
  `titles` varchar(400) NOT NULL DEFAULT '',
  `subtitle` varchar(200) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `externallink` tinyint(1) NOT NULL DEFAULT '0',
  `thumb` varchar(100) DEFAULT NULL,
  `content` longtext,
  `intro` varchar(2000) NOT NULL,
  `author` varchar(20) DEFAULT NULL,
  `source` varchar(100) DEFAULT NULL,
  `keywords` varchar(300) DEFAULT NULL,
  `uid` varchar(10) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL,
  `last_update` int(10) NOT NULL,
  `viewcount` int(10) NOT NULL DEFAULT '0',
  `template` varchar(50) DEFAULT NULL,
  `pagecount` tinyint(2) NOT NULL DEFAULT '1',
  `disagree` int(10) NOT NULL DEFAULT '0',
  `cancomment` tinyint(1) NOT NULL DEFAULT '1',
  `commentcount` int(10) NOT NULL DEFAULT '0',
  `agree` int(10) NOT NULL DEFAULT '0',
  `taxis` int(10) NOT NULL DEFAULT '0',
  `lastcreate` int(10) NOT NULL DEFAULT '1400000000',
  `sourcetype` smallint(2) NOT NULL DEFAULT '0',
  `ex` tinyint(1) DEFAULT '0',
  `pubed` tinyint(1) NOT NULL DEFAULT '1',
  `geoid` mediumint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`),
  KEY `channel_id_2` (`channel_id`,`thumb`),
  KEY `time` (`time`),
  KEY `taxis` (`taxis`),
  KEY `ex` (`ex`),
  KEY `geoid` (`geoid`),
  KEY `uid` (`uid`),
  KEY `keywords` (`keywords`),
  KEY `sourcetype` (`sourcetype`),
  KEY `pubed` (`pubed`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `tp_moopha_article` values('1','2','','1','会员卡','','会员卡','{siteUrl}/index.php?g=Wap&m=Card&a=index&token=qyscir1403234167&wecha_id={wechat_id}','1','','<p>\r\n	你好</p>\r\n','你好','','',',','','1403327499','1403327499','0',NULL,'1','0','1','0','0','1','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('2','2','','1','关于我么','','关于我么','?m=site&c=home&a=content&contentid=2','1','','<p>\r\n	你还还是飞啊算了快递费按上法律考试答复阿拉山口打翻了阿卡水电费按上发到</p>\r\n','你还还是飞啊算了快递费按上法律考试答复阿拉山口打翻了阿卡水电费按上发到','','',',','','1403328126','1403328126','0',NULL,'1','0','1','0','0','2','1400000000','1','0','1','0');");
E_D("replace into `tp_moopha_article` values('3','14','lwxynh1403322765','2','法国队','',NULL,'http://yshl.mobi','0','http://bjxit.com/tpl/static/attachment/focus/default/6.jpg','法国队','',NULL,NULL,NULL,'0','1403336739','0','0',NULL,'1','0','1','0','0','0','1400000000','0','0','1','0');");

require("../../inc/footer.php");
?>