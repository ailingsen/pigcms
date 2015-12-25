<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_behavior`;");
E_C("CREATE TABLE `tp_behavior` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `token` varchar(60) NOT NULL,
  `openid` varchar(60) NOT NULL,
  `date` varchar(11) NOT NULL,
  `enddate` int(11) NOT NULL,
  `model` varchar(60) NOT NULL,
  `num` int(11) NOT NULL,
  `keyword` varchar(60) NOT NULL,
  `type` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `openid` (`openid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `tp_behavior` values('1','1','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','2014-06-21','1403314879','Reservation','0','预约','0');");
E_D("replace into `tp_behavior` values('2','2','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','2014-06-21','1403315000','Reservation','0','试驾','0');");
E_D("replace into `tp_behavior` values('3','1','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','2014-06-21','1403315796','follow','4','用户关注','0');");
E_D("replace into `tp_behavior` values('4','0','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','2014-06-21','1403315855','chat','1','用户关注','0');");
E_D("replace into `tp_behavior` values('5','0','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','2014-06-21','1403315911','home','0','用户关注','1');");
E_D("replace into `tp_behavior` values('6','1','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','2014-06-21','1403316086','Img','0','用户关注','0');");
E_D("replace into `tp_behavior` values('7','0','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','2014-06-21','1403318581','chat','0','购物','0');");
E_D("replace into `tp_behavior` values('8','1','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','2014-06-21','1403323605','follow','1','用户关注','0');");
E_D("replace into `tp_behavior` values('9','0','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','2014-06-21','1403324234','home','2','首页','1');");
E_D("replace into `tp_behavior` values('10','0','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','2014-06-21','1403326836','chat','1','图文回复一','0');");
E_D("replace into `tp_behavior` values('11','0','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','2014-06-21','1403327585','chat','0','优惠产品','0');");
E_D("replace into `tp_behavior` values('12','3','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','2014-06-21','1403327621','Img','0','图文一','0');");
E_D("replace into `tp_behavior` values('13','4','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','2014-06-21','1403332651','Img','0','图文一','0');");
E_D("replace into `tp_behavior` values('14','1','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','2014-06-21','1403333837','Member_card_set','5','会员卡','0');");
E_D("replace into `tp_behavior` values('15','1','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','2014-06-21','1403334413','Selfform','0','表单','0');");
E_D("replace into `tp_behavior` values('16','0','lwxynh1403322765','ogwbjs2NE43oHi2ByTR3nqTAiTvE','2014-06-21','1403339723','chat','0','渠道一','0');");
E_D("replace into `tp_behavior` values('17','1','qyscir1403234167','okkUFuG3IzCqn2CmIss_GkVLT9Yk','2014-06-21','1403349974','follow','0','用户关注','0');");
E_D("replace into `tp_behavior` values('18','1','qyscir1403234167','okkUFuG3IzCqn2CmIss_GkVLT9Yk','2014-06-21','1403349975','Router_config','0','用户关注','0');");
E_D("replace into `tp_behavior` values('19','0','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','2014-06-21','1403352456','chat','2','刮刮卡','0');");
E_D("replace into `tp_behavior` values('20','0','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','2014-06-21','1403352516','chat','0','刮刮','0');");
E_D("replace into `tp_behavior` values('21','0','qyscir1403234167','okkUFuIIItyAd43LL6ahiUUgDgQo','2014-06-21','1403352797','home','0','首页','1');");

require("../../inc/footer.php");
?>