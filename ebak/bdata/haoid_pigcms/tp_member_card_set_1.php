<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_member_card_set`;");
E_C("CREATE TABLE `tp_member_card_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `cardname` varchar(60) NOT NULL,
  `miniscore` int(10) NOT NULL DEFAULT '0',
  `logo` varchar(200) NOT NULL,
  `bg` varchar(100) NOT NULL,
  `diybg` varchar(200) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `numbercolor` varchar(10) NOT NULL,
  `vipnamecolor` varchar(10) NOT NULL,
  `Lastmsg` varchar(100) NOT NULL,
  `vip` varchar(100) NOT NULL,
  `qiandao` varchar(100) NOT NULL,
  `shopping` varchar(100) NOT NULL,
  `memberinfo` varchar(100) NOT NULL,
  `membermsg` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `create_time` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `token` (`token`),
  KEY `miniscore` (`miniscore`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `tp_member_card_set` values('1','qyscir1403234167','小猪微信平台会员卡','11','/tpl/User/default/common/images/cart_info/logo-card.png','./tpl/User/default/common/images/card/card_bg15.png','/tpl/User/default/common/images/card/card_bg17.png','微时代会员卡，方便携带收藏，永不挂失','#000000','#121212','/tpl/User/default/common/images/cart_info/news.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/qiandao.jpg','/tpl/User/default/common/images/cart_info/shopping.jpg','/tpl/User/default/common/images/cart_info/user.jpg','/tpl/User/default/common/images/cart_info/vippower.jpg','/tpl/User/default/common/images/cart_info/addr.jpg','1403246876');");

require("../../inc/footer.php");
?>