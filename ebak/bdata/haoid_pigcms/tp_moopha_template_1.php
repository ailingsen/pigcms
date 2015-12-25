<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_moopha_template`;");
E_C("CREATE TABLE `tp_moopha_template` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `path` varchar(200) NOT NULL,
  `generate_path` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL COMMENT '1-index,2-channel,3-template,4-singlepage',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  `createhtml` tinyint(1) NOT NULL DEFAULT '1',
  `site` int(4) NOT NULL,
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `isdefault` (`isdefault`),
  KEY `site` (`site`),
  KEY `time` (`time`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8");
E_D("replace into `tp_moopha_template` values('13','顶部','@/smarty/templates/1/qyscir1403234167/header.html','','4','0','0','1','1403328110');");
E_D("replace into `tp_moopha_template` values('12','样式css','@/smarty/templates/1/qyscir1403234167/style.css','','4','0','0','1','1403328110');");
E_D("replace into `tp_moopha_template` values('11','内容','@/smarty/templates/1/qyscir1403234167/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','1','1403328110');");
E_D("replace into `tp_moopha_template` values('10','图片列表','@/smarty/templates/1/qyscir1403234167/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','1','1403328110');");
E_D("replace into `tp_moopha_template` values('9','文字列表','@/smarty/templates/1/qyscir1403234167/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','1','1403328110');");
E_D("replace into `tp_moopha_template` values('8','首页','@/smarty/templates/1/qyscir1403234167/index.html','','1','1','0','1','1403328110');");
E_D("replace into `tp_moopha_template` values('14','底部','@/smarty/templates/1/qyscir1403234167/footer.html','','4','0','0','1','1403328110');");
E_D("replace into `tp_moopha_template` values('15','首页','@/smarty/templates/0//index.html','','1','1','0','0','1403328919');");
E_D("replace into `tp_moopha_template` values('16','文字列表','@/smarty/templates/0//channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','0','1403328919');");
E_D("replace into `tp_moopha_template` values('17','图片列表','@/smarty/templates/0//channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','0','1403328919');");
E_D("replace into `tp_moopha_template` values('18','内容','@/smarty/templates/0//content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','0','1403328919');");
E_D("replace into `tp_moopha_template` values('19','样式css','@/smarty/templates/0//style.css','','4','0','0','0','1403328919');");
E_D("replace into `tp_moopha_template` values('20','顶部','@/smarty/templates/0//header.html','','4','0','0','0','1403328919');");
E_D("replace into `tp_moopha_template` values('21','底部','@/smarty/templates/0//footer.html','','4','0','0','0','1403328919');");
E_D("replace into `tp_moopha_template` values('56','底部','@/smarty/templates/2/lwxynh1403322765/footer.html','','4','0','0','2','1403337383');");
E_D("replace into `tp_moopha_template` values('55','顶部','@/smarty/templates/2/lwxynh1403322765/header.html','','4','0','0','2','1403337383');");
E_D("replace into `tp_moopha_template` values('54','样式css','@/smarty/templates/2/lwxynh1403322765/style.css','','4','0','0','2','1403337383');");
E_D("replace into `tp_moopha_template` values('53','内容','@/smarty/templates/2/lwxynh1403322765/content.html','?m=site&c=home&a=content&contentid={contentID}','3','1','0','2','1403337383');");
E_D("replace into `tp_moopha_template` values('51','文字列表','@/smarty/templates/2/lwxynh1403322765/channel_text.html','?m=site&c=home&a=channel&channelid={channelID}','2','1','0','2','1403337383');");
E_D("replace into `tp_moopha_template` values('52','图片列表','@/smarty/templates/2/lwxynh1403322765/channel_picture.html','?m=site&c=home&a=channel&channelid={channelID}','2','0','0','2','1403337383');");
E_D("replace into `tp_moopha_template` values('50','首页','@/smarty/templates/2/lwxynh1403322765/index.html','','1','1','0','2','1403337383');");

require("../../inc/footer.php");
?>