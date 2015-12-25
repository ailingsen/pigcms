<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_node`;");
E_C("CREATE TABLE `tp_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL COMMENT '节点名称',
  `title` varchar(50) NOT NULL COMMENT '菜单名称',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '是否激活 1：是 2：否',
  `remark` varchar(255) DEFAULT NULL COMMENT '备注说明',
  `pid` smallint(6) unsigned NOT NULL COMMENT '父ID',
  `level` tinyint(1) unsigned NOT NULL COMMENT '节点等级',
  `data` varchar(255) DEFAULT NULL COMMENT '附加参数',
  `sort` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '排序权重',
  `display` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '菜单显示类型 0:不显示 1:导航菜单 2:左侧菜单',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=84 DEFAULT CHARSET=utf8");
E_D("replace into `tp_node` values('1','cms','根节点','1','','0','1',NULL,'0','0');");
E_D("replace into `tp_node` values('2','Site','站点管理','1','','1','0',NULL,'0','1');");
E_D("replace into `tp_node` values('3','User','用户管理','1','','1','0',NULL,'0','1');");
E_D("replace into `tp_node` values('4','extent','扩展管理','1','','1','0',NULL,'10','1');");
E_D("replace into `tp_node` values('5','article','内容管理','1','','1','0',NULL,'0','1');");
E_D("replace into `tp_node` values('6','Site','站点设置','1','','2','2',NULL,'0','2');");
E_D("replace into `tp_node` values('7','index','基本信息设置','1','','6','3',NULL,'0','2');");
E_D("replace into `tp_node` values('8','safe','安全设置','1','','6','3',NULL,'0','2');");
E_D("replace into `tp_node` values('9','email','邮箱设置','1','','6','3',NULL,'0','2');");
E_D("replace into `tp_node` values('10','upfile','附件设置','1','','6','3',NULL,'0','2');");
E_D("replace into `tp_node` values('11','Node','节点管理','1',NULL,'2','2',NULL,'0','2');");
E_D("replace into `tp_node` values('12','add','添加节点','1','','11','3',NULL,'0','2');");
E_D("replace into `tp_node` values('13','index','节点列表','1','','11','3',NULL,'0','2');");
E_D("replace into `tp_node` values('14','insert','写入','1','0','11','3',NULL,'0','0');");
E_D("replace into `tp_node` values('15','edit','编辑节点','1','0','11','3',NULL,'0','0');");
E_D("replace into `tp_node` values('16','update','更新节点','1','0','11','3',NULL,'0','0');");
E_D("replace into `tp_node` values('17','del','删除节点','1','0','11','3',NULL,'0','0');");
E_D("replace into `tp_node` values('18','User','用户中心','1','0','3','2',NULL,'0','2');");
E_D("replace into `tp_node` values('19','add','添加用户','1','0','18','3',NULL,'0','2');");
E_D("replace into `tp_node` values('20','index','用户列表','1','0','18','3',NULL,'0','2');");
E_D("replace into `tp_node` values('21','edit','编辑用户','1','0','18','3',NULL,'0','0');");
E_D("replace into `tp_node` values('22','insert','写入数据库','1','0','18','3',NULL,'0','0');");
E_D("replace into `tp_node` values('23','update','更新用户','1','0','18','3',NULL,'0','0');");
E_D("replace into `tp_node` values('24','del','删除用户','1','0','18','3',NULL,'0','0');");
E_D("replace into `tp_node` values('25','Group','管理组','1','0','3','2',NULL,'0','2');");
E_D("replace into `tp_node` values('26','add','创建用户组','1','0','25','3',NULL,'0','2');");
E_D("replace into `tp_node` values('27','index','用户组列表','1','0','25','3',NULL,'0','2');");
E_D("replace into `tp_node` values('28','edit','编辑用户组','1','0','25','3',NULL,'0','0');");
E_D("replace into `tp_node` values('29','del','删除用户组','1','0','25','3',NULL,'0','0');");
E_D("replace into `tp_node` values('30','insert','写入数据库','1','0','25','3',NULL,'0','0');");
E_D("replace into `tp_node` values('31','update','更新用户组','1','0','25','3',NULL,'0','0');");
E_D("replace into `tp_node` values('32','insert','保存测试','1','0','6','3',NULL,'0','0');");
E_D("replace into `tp_node` values('36','menu','左侧栏','1','0','35','3',NULL,'0','0');");
E_D("replace into `tp_node` values('35','System','首页','1','0','2','2',NULL,'0','0');");
E_D("replace into `tp_node` values('37','main','右侧栏目','1','0','35','3',NULL,'0','0');");
E_D("replace into `tp_node` values('38','Article','微信图文','1','0','5','2',NULL,'0','2');");
E_D("replace into `tp_node` values('39','index','图文列表','1','0','38','3',NULL,'0','2');");
E_D("replace into `tp_node` values('40','add','图文添加','1','0','38','3',NULL,'0','2');");
E_D("replace into `tp_node` values('41','edit','微信图文编辑','1','0','38','3',NULL,'0','0');");
E_D("replace into `tp_node` values('42','del','微信图文删除','1','0','38','3',NULL,'0','0');");
E_D("replace into `tp_node` values('80','token','公众号管理','1','0','1','2',NULL,'0','1');");
E_D("replace into `tp_node` values('45','Function','功能模块','1','0','1','0',NULL,'0','1');");
E_D("replace into `tp_node` values('46','Function','功能模块','1','0','45','2',NULL,'0','2');");
E_D("replace into `tp_node` values('47','add','添加模块','1','0','46','3',NULL,'0','2');");
E_D("replace into `tp_node` values('48','User_group','会员组','1','0','3','2',NULL,'0','2');");
E_D("replace into `tp_node` values('49','add','添加会员组','1','0','48','3',NULL,'0','2');");
E_D("replace into `tp_node` values('50','Users','前台用户','1','0','3','2',NULL,'0','2');");
E_D("replace into `tp_node` values('51','index','用户列表','1','0','50','3',NULL,'0','0');");
E_D("replace into `tp_node` values('52','add','添加用户','1','0','50','3',NULL,'0','2');");
E_D("replace into `tp_node` values('53','edit','编辑用户','1','0','50','3',NULL,'0','0');");
E_D("replace into `tp_node` values('54','del','删除用户','1','0','50','3',NULL,'0','0');");
E_D("replace into `tp_node` values('55','insert','写入数据库','1','0','50','3',NULL,'0','0');");
E_D("replace into `tp_node` values('56','upsave','更新用户','1','0','50','3',NULL,'0','0');");
E_D("replace into `tp_node` values('57','Text','微信文本','1','0','5','2',NULL,'0','2');");
E_D("replace into `tp_node` values('58','index','文本列表','1','0','57','3',NULL,'0','2');");
E_D("replace into `tp_node` values('59','del','删除','1','0','57','3',NULL,'0','0');");
E_D("replace into `tp_node` values('60','Custom','自定义页面','1','0','5','2',NULL,'0','2');");
E_D("replace into `tp_node` values('61','index','列表','1','0','60','3',NULL,'0','2');");
E_D("replace into `tp_node` values('62','edit','编辑','1','0','60','3',NULL,'0','2');");
E_D("replace into `tp_node` values('63','del','删除','1','0','60','3',NULL,'0','0');");
E_D("replace into `tp_node` values('64','Records','充值记录','1','0','4','2',NULL,'0','2');");
E_D("replace into `tp_node` values('65','index','充值列表','1','0','64','3',NULL,'0','2');");
E_D("replace into `tp_node` values('66','Case','用户案例','1','0','4','2',NULL,'0','2');");
E_D("replace into `tp_node` values('67','index','案例列表','1','0','66','3',NULL,'0','2');");
E_D("replace into `tp_node` values('68','add','添加案例','1','0','66','3',NULL,'0','2');");
E_D("replace into `tp_node` values('69','edit','编辑案例','1','0','66','3',NULL,'0','0');");
E_D("replace into `tp_node` values('70','del','删除案例','1','0','66','3',NULL,'0','0');");
E_D("replace into `tp_node` values('71','insert','写入数据库','1','0','66','3',NULL,'0','0');");
E_D("replace into `tp_node` values('72','upsave','更新数据库','1','0','66','3',NULL,'0','0');");
E_D("replace into `tp_node` values('73','Links','友情链接','1','0','4','2',NULL,'0','2');");
E_D("replace into `tp_node` values('74','index','友情链接','1','0','73','3',NULL,'0','2');");
E_D("replace into `tp_node` values('75','add','添加链接','1','0','73','3',NULL,'0','2');");
E_D("replace into `tp_node` values('76','edit','编辑链接','1','0','73','3',NULL,'0','0');");
E_D("replace into `tp_node` values('77','insert','插入数据库','1','0','73','3',NULL,'0','0');");
E_D("replace into `tp_node` values('78','upsave','更新数据库','1','0','73','3',NULL,'0','0');");
E_D("replace into `tp_node` values('79','del','删除友情链接','1','0','73','3',NULL,'0','0');");
E_D("replace into `tp_node` values('81','Token','公众号管理','1','0','80','2',NULL,'0','2');");
E_D("replace into `tp_node` values('83','alipay','在线支付接口','1','0','6','3',NULL,'0','2');");

require("../../inc/footer.php");
?>