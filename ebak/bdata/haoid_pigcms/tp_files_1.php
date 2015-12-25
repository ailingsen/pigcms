<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `tp_files`;");
E_C("CREATE TABLE `tp_files` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `token` varchar(30) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL DEFAULT '',
  `size` int(10) NOT NULL DEFAULT '0',
  `type` varchar(20) NOT NULL DEFAULT '',
  `time` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8");
E_D("replace into `tp_files` values('1','wnizln1403059574','http://bjxit.com/uploads/w/wnizln1403059574/e/c/6/f/thumb_53a319270088f.jpg','25146','jpg','1403197735');");
E_D("replace into `tp_files` values('2','qyscir1403234167','http://bjxit.com/uploads/q/qyscir1403234167/e/9/2/e/thumb_53a4e25476d1f.jpg','61612','jpg','1403314774');");
E_D("replace into `tp_files` values('3','qyscir1403234167','http://bjxit.com/uploads/q/qyscir1403234167/9/d/f/0/thumb_53a5003a72fc8.jpg','38154','jpg','1403322427');");
E_D("replace into `tp_files` values('4','lwxynh1403322765','http://bjxit.com/uploads/l/lwxynh1403322765/4/b/f/7/thumb_53a505bd59d9e.png','4116','png','1403323837');");
E_D("replace into `tp_files` values('5','lwxynh1403322765','http://bjxit.com/uploads/l/lwxynh1403322765/3/c/4/7/thumb_53a508d003a9b.jpg','65186','jpg','1403324624');");
E_D("replace into `tp_files` values('6','lwxynh1403322765','http://bjxit.com/uploads/l/lwxynh1403322765/d/3/7/5/thumb_53a5090f29f56.png','4116','png','1403324687');");
E_D("replace into `tp_files` values('7','lwxynh1403322765','http://bjxit.com/uploads/l/lwxynh1403322765/4/f/3/c/thumb_53a50965a5899.png','3802','png','1403324773');");
E_D("replace into `tp_files` values('8','lwxynh1403322765','http://bjxit.com/uploads/l/lwxynh1403322765/6/7/e/0/thumb_53a5097dc4cb4.jpg','65186','jpg','1403324798');");
E_D("replace into `tp_files` values('9','lwxynh1403322765','http://bjxit.com/uploads/l/lwxynh1403322765/d/d/1/0/thumb_53a50e3cbc562.png','4116','png','1403326012');");
E_D("replace into `tp_files` values('10','qyscir1403234167','http://bjxit.com/uploads/q/qyscir1403234167/0/b/9/8/thumb_53a537edefaed.jpg','38154','jpg','1403336686');");
E_D("replace into `tp_files` values('11','qyscir1403234167','http://bjxit.com/uploads/q/qyscir1403234167/9/d/0/1/thumb_53a538fd2655c.jpg','38154','jpg','1403336957');");
E_D("replace into `tp_files` values('12','admin','http://bjxit.com/uploads/a/admin/b/e/3/f/thumb_53a53a9c5a1a2.JPG','128839','JPG','1403337372');");
E_D("replace into `tp_files` values('13','qyscir1403234167','http://bjxit.com/uploads/q/qyscir1403234167/9/5/0/8/thumb_53a555b05a954.jpg','220947','jpg','1403344304');");
E_D("replace into `tp_files` values('14','qyscir1403234167','http://bjxit.com/uploads/q/qyscir1403234167/4/f/8/a/thumb_53a559b83de41.jpg','220947','jpg','1403345336');");
E_D("replace into `tp_files` values('15','qyscir1403234167','http://bjxit.com/uploads/q/qyscir1403234167/e/9/7/3/thumb_53a56c1048b46.jpg','256143','jpg','1403350033');");
E_D("replace into `tp_files` values('16','qyscir1403234167','http://bjxit.com/uploads/q/qyscir1403234167/6/e/e/5/thumb_53a56c2ae29a9.jpg','174086','jpg','1403350059');");

require("../../inc/footer.php");
?>