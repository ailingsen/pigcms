<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_car_utility`;");
E_C("CREATE TABLE `tp_car_utility` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `url` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `tp_car_utility` values('1','车贷计算器','http://car.m.yiche.com/qichedaikuanjisuanqi/','1');");
E_D("replace into `tp_car_utility` values('2','保险计算','http://car.m.yiche.com/qichebaoxianjisuan/','1');");
E_D("replace into `tp_car_utility` values('3','全款计算','http://car.m.yiche.com/gouchejisuanqi/','1');");
E_D("replace into `tp_car_utility` values('4','车型比较','http://car.m.yiche.com/chexingduibi/?carIDs=102501','1');");
E_D("replace into `tp_car_utility` values('5','违章查询','http://wap.bjjtgl.gov.cn/wimframework/portal/wwwroot/bjjgj/xxcx.psml?contentType=%E8%BF%9D%E6%B3%95%','0');");

require("../../inc/footer.php");
?>