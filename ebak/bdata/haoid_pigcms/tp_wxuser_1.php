<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_wxuser`;");
E_C("CREATE TABLE `tp_wxuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `wxname` varchar(60) NOT NULL COMMENT '公众号名称',
  `winxintype` smallint(2) NOT NULL DEFAULT '1',
  `appid` varchar(50) NOT NULL DEFAULT '',
  `appsecret` varchar(50) NOT NULL DEFAULT '',
  `wxid` varchar(20) NOT NULL COMMENT '公众号原始ID',
  `weixin` char(20) NOT NULL COMMENT '微信号',
  `headerpic` char(255) NOT NULL COMMENT '头像地址',
  `token` char(255) NOT NULL,
  `province` varchar(30) NOT NULL COMMENT '省',
  `color_id` mediumint(4) NOT NULL DEFAULT '0',
  `city` varchar(60) NOT NULL COMMENT '市',
  `qq` char(25) NOT NULL COMMENT '公众号邮箱',
  `wxfans` int(11) NOT NULL COMMENT '微信粉丝',
  `typeid` int(11) NOT NULL COMMENT '分类ID',
  `typename` varchar(90) NOT NULL DEFAULT '0' COMMENT '分类名',
  `tongji` text NOT NULL,
  `allcardnum` int(11) NOT NULL,
  `cardisok` int(11) NOT NULL,
  `yetcardnum` int(11) NOT NULL,
  `totalcardnum` int(11) NOT NULL,
  `createtime` varchar(13) NOT NULL,
  `tpltypeid` varchar(2) NOT NULL DEFAULT '1' COMMENT '默认首页模版ID',
  `updatetime` varchar(13) NOT NULL,
  `tpltypename` varchar(20) NOT NULL COMMENT '首页模版名',
  `tpllistid` varchar(2) NOT NULL COMMENT '列表模版ID',
  `tpllistname` varchar(20) NOT NULL COMMENT '列表模版名',
  `tplcontentid` varchar(2) NOT NULL COMMENT '内容模版ID',
  `tplcontentname` varchar(20) NOT NULL COMMENT '内容模版名',
  `routerid` varchar(50) NOT NULL,
  `transfer_customer_service` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  KEY `uid_2` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `tp_wxuser` values('3','3','周飞','1','','','gh_99ceb2aebfe6','zhoufeishow','./tpl/User/default/common/images/portrait.jpg','wnizln1403059574','p','0','c','1403059574@yourdomain.com','0','8','服务','','0','0','0','0','1403059622','96','1403059622','196_index_sdf3','1','yl_list','1','ktv_content','','0');");
E_D("replace into `tp_wxuser` values('4','4','我的微易得','1','','','gh_f60459f6bdab','jn_liuqj','http://bjxit.com/uploads/q/qyscir1403234167/9/d/0/1/thumb_53a538fd2655c.jpg','qyscir1403234167','山东','0','济南','1403234167@yourdomain.com','0','8','服务','','10000','1','0','0','1403234189','99','1403336961','199_index_asdw','1','yl_list','1','ktv_content','','0');");
E_D("replace into `tp_wxuser` values('6','4','mixapp合应用','2','wx50b147cfb97fb61a','172c6176d7ad40404c7739eb1b9bede8','gh_6b8228db148b','mixapp365','./tpl/User/default/common/images/portrait.jpg','lwxynh1403322765','p','0','c','1403322765@yourdomain.com','0','8','服务','','10000','1','0','0','1403323504','10','1403329753','1102_index_cvb5u','1','yl_list','1','ktv_content','','0');");

require("../../inc/footer.php");
?>