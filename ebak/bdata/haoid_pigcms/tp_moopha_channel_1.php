<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_moopha_channel`;");
E_C("CREATE TABLE `tp_moopha_channel` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `shortname` varchar(50) NOT NULL DEFAULT '',
  `isnav` tinyint(1) NOT NULL DEFAULT '1',
  `channeltype` tinyint(1) NOT NULL DEFAULT '1',
  `cindex` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL DEFAULT '',
  `link` varchar(200) NOT NULL,
  `externallink` tinyint(1) NOT NULL DEFAULT '0',
  `des` mediumtext NOT NULL,
  `thumb` varchar(100) DEFAULT NULL,
  `metatitle` varchar(100) DEFAULT NULL,
  `metakeyword` varchar(100) DEFAULT NULL,
  `metades` varchar(200) DEFAULT NULL,
  `thumbwidth` int(4) NOT NULL,
  `thumbheight` int(4) NOT NULL,
  `thumb2width` mediumint(4) NOT NULL DEFAULT '0',
  `thumb2height` mediumint(4) NOT NULL DEFAULT '0',
  `thumb3width` mediumint(4) NOT NULL DEFAULT '0',
  `thumb3height` mediumint(4) NOT NULL DEFAULT '0',
  `thumb4width` mediumint(4) NOT NULL DEFAULT '0',
  `thumb4height` mediumint(4) NOT NULL DEFAULT '0',
  `parentid` int(10) NOT NULL DEFAULT '0',
  `channeltemplate` int(10) DEFAULT '1',
  `contenttemplate` int(10) DEFAULT '1',
  `autotype` varchar(10) NOT NULL DEFAULT '',
  `ex` tinyint(1) NOT NULL DEFAULT '0',
  `iscity` tinyint(1) NOT NULL DEFAULT '0',
  `site` int(4) NOT NULL DEFAULT '0',
  `taxis` int(10) NOT NULL DEFAULT '0',
  `lastcreate` int(10) NOT NULL DEFAULT '1400000000',
  `pagesize` smallint(3) NOT NULL DEFAULT '30',
  `specialid` mediumint(4) NOT NULL DEFAULT '0',
  `homepicturechannel` tinyint(1) NOT NULL DEFAULT '0',
  `hometextchannel` tinyint(1) NOT NULL DEFAULT '0',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `parentid` (`parentid`),
  KEY `site` (`site`),
  KEY `taxis` (`taxis`),
  KEY `time` (`time`),
  KEY `specialid` (`specialid`),
  KEY `token` (`token`),
  KEY `isnav` (`isnav`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `tp_moopha_channel` values('1','首页','首页','0','1','homepage','qyscir1403234167','?m=site&c=home&a=channel&channelid=1','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','9','11','','0','0','1','0','1400000000','30','0','0','0','1403241889');");
E_D("replace into `tp_moopha_channel` values('2','关于我们','简介','1','1','aboutus','qyscir1403234167','?m=site&c=home&a=channel&channelid=2','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','1','9','11','','0','0','1','0','1400000000','30','0','0','0','1403241889');");
E_D("replace into `tp_moopha_channel` values('3','最新动态','动态','1','1','news','qyscir1403234167','?m=site&c=home&a=channel&channelid=3','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','1','9','11','','0','0','1','0','1400000000','30','0','0','0','1403241889');");
E_D("replace into `tp_moopha_channel` values('4','产品展示','产品','1','1','products','qyscir1403234167','?m=site&c=home&a=channel&channelid=4','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','1','10','11','','0','0','1','0','1400000000','30','0','0','0','1403241889');");
E_D("replace into `tp_moopha_channel` values('5','精彩案例','案例','1','1','case','qyscir1403234167','?m=site&c=home&a=channel&channelid=5','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','1','9','11','','0','0','1','0','1400000000','30','0','0','0','1403241889');");
E_D("replace into `tp_moopha_channel` values('6','联系我们','联系','1','1','contact','qyscir1403234167','?m=site&c=home&a=channel&channelid=6','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','1','9','11','','0','0','1','0','1400000000','30','0','0','0','1403241889');");
E_D("replace into `tp_moopha_channel` values('7','幻灯片','幻灯片','0','1','focus','qyscir1403234167','?m=site&c=home&a=channel&channelid=7','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','1','9','11','','0','0','1','0','1400000000','30','0','0','0','1403241889');");
E_D("replace into `tp_moopha_channel` values('8','首页','首页','0','1','homepage','lwxynh1403322765','?m=site&c=home&a=channel&channelid=8','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','0','51','53','','0','0','2','0','1400000000','30','0','0','0','1403336739');");
E_D("replace into `tp_moopha_channel` values('9','关于我们','简介','1','1','aboutus','lwxynh1403322765','?m=site&c=home&a=channel&channelid=9','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','51','53','','0','0','2','0','1400000000','30','0','0','0','1403336739');");
E_D("replace into `tp_moopha_channel` values('10','最新动态','动态','1','1','news','lwxynh1403322765','?m=site&c=home&a=channel&channelid=10','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','51','53','','0','0','2','0','1400000000','30','0','0','0','1403336739');");
E_D("replace into `tp_moopha_channel` values('11','产品展示','产品','1','1','products','lwxynh1403322765','?m=site&c=home&a=channel&channelid=11','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','52','53','','0','0','2','0','1400000000','30','0','0','0','1403336739');");
E_D("replace into `tp_moopha_channel` values('12','精彩案例','案例','1','1','case','lwxynh1403322765','?m=site&c=home&a=channel&channelid=12','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','51','53','','0','0','2','0','1400000000','30','0','0','0','1403336739');");
E_D("replace into `tp_moopha_channel` values('13','联系我们','联系','1','1','contact','lwxynh1403322765','?m=site&c=home&a=channel&channelid=13','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','51','53','','0','0','2','0','1400000000','30','0','0','0','1403336739');");
E_D("replace into `tp_moopha_channel` values('14','幻灯片','幻灯片','0','1','focus','lwxynh1403322765','?m=site&c=home&a=channel&channelid=14','0','',NULL,NULL,NULL,NULL,'0','0','0','0','0','0','0','0','8','51','53','','0','0','2','0','1400000000','30','0','0','0','1403336739');");

require("../../inc/footer.php");
?>