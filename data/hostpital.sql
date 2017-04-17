/*
SQLyog Ultimate v11.26 (32 bit)
MySQL - 5.0.27-community-nt : Database - hostpital
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hostpital` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `hostpital`;

/*Table structure for table `ts_access` */

DROP TABLE IF EXISTS `ts_access`;

CREATE TABLE `ts_access` (
  `role_id` smallint(6) unsigned NOT NULL,
  `node_id` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) NOT NULL,
  `pid` smallint(6) NOT NULL,
  `module` varchar(50) default NULL,
  KEY `groupId` (`role_id`),
  KEY `nodeId` (`node_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ts_access` */

insert  into `ts_access`(`role_id`,`node_id`,`level`,`pid`,`module`) values (6,35,3,33,NULL),(6,37,3,33,NULL),(6,39,3,33,NULL),(6,38,3,33,NULL),(6,36,3,33,NULL),(6,33,2,25,NULL),(6,51,3,41,NULL),(6,46,3,41,NULL),(6,45,3,41,NULL),(6,44,3,41,NULL),(6,43,3,41,NULL),(6,42,3,41,NULL),(6,41,2,25,NULL),(6,25,1,0,NULL),(6,48,2,47,NULL),(6,47,1,0,NULL),(6,28,3,26,NULL),(6,29,3,26,NULL),(6,30,3,26,NULL),(6,31,3,26,NULL),(6,32,3,26,NULL),(6,27,3,26,NULL),(6,26,2,25,NULL),(6,34,3,33,NULL),(3,28,3,26,NULL),(3,29,3,26,NULL),(3,30,3,26,NULL),(3,31,3,26,NULL),(3,32,3,26,NULL),(3,27,3,26,NULL),(3,26,2,25,NULL),(3,51,3,41,NULL),(3,46,3,41,NULL),(3,45,3,41,NULL),(3,44,3,41,NULL),(3,43,3,41,NULL),(3,42,3,41,NULL),(3,41,2,25,NULL);

/*Table structure for table `ts_hostinfo` */

DROP TABLE IF EXISTS `ts_hostinfo`;

CREATE TABLE `ts_hostinfo` (
  `hid` int(20) NOT NULL auto_increment COMMENT '医院id',
  `name` varchar(30) default NULL COMMENT '医院名称',
  `link` varchar(50) default NULL COMMENT '医院网址',
  `content` text COMMENT '医院简介',
  PRIMARY KEY  (`hid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ts_hostinfo` */

insert  into `ts_hostinfo`(`hid`,`name`,`link`,`content`) values (1,'海南边防总队医院','http://www.bjwjwc120.com','<p><strong>海南边防胃肠病诊疗中心</strong>是经海口市卫生局批准、以三级甲等医院标准建设的综合性医院。医院的胃肠科为医院重点 建设与打造的科室。曾被国家政府有关单位授牌评为&quot;海南诚信医疗示范单位</p>\r\n\r\n\r\n'),(2,'四川消防医院胃肠诊疗','http://www.scxfqb.cn','<p>1222222222222222</p>\r\n\r\n\r\n\r\n<p>&nbsp;</p>\r\n'),(4,'黑龙江武警','http://www.hebwjwc.com','<p>云南医院是三级甲等医院</p>\r\n');

/*Table structure for table `ts_meet` */

DROP TABLE IF EXISTS `ts_meet`;

CREATE TABLE `ts_meet` (
  `id` int(10) NOT NULL auto_increment COMMENT '会诊id',
  `username` varchar(18) NOT NULL default '' COMMENT '用户名',
  `age` smallint(3) default NULL COMMENT '年龄',
  `sex` tinyint(2) default NULL COMMENT '性别',
  `hostid` int(6) default NULL COMMENT '医院id',
  `ks` varchar(10) NOT NULL default '胃肠专科' COMMENT '科室',
  `tel` varchar(12) NOT NULL COMMENT '联系电话',
  `cont` text NOT NULL COMMENT '病情描述',
  `yul` int(20) default NULL COMMENT '预约日期',
  `jz_time` int(20) default NULL COMMENT '就诊时期',
  `status` smallint(2) default '0' COMMENT '未就诊',
  PRIMARY KEY  (`id`),
  KEY `name` (`username`,`tel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ts_meet` */

insert  into `ts_meet`(`id`,`username`,`age`,`sex`,`hostid`,`ks`,`tel`,`cont`,`yul`,`jz_time`,`status`) values (4,'王五',20,0,2,'胃肠专科','13714439341','有问题',1366041600,NULL,0),(11,'王九',29,0,1,'胃肠专科','13714439348','偶尔胃不疼.',1365523200,NULL,0),(22,'王九',29,0,1,'胃肠专科','13714439348','偶尔胃不疼.',1365523200,NULL,0),(29,'小储',29,0,2,'胃肠专科','13714439347','开始测试',1365955200,NULL,0),(31,'王九',25,0,4,'胃肠专科','13714439347','ddddd',1367164800,NULL,0),(32,'王九',25,0,4,'胃肠专科','13714439347','ddddd',1367164800,NULL,0),(33,'王九',25,0,2,'胃肠专科','13714439347','ddddd',1367164800,NULL,0),(34,'王九',25,0,2,'胃肠专科','13714439347','ddddd',1367164800,NULL,0),(35,'王五',20,0,2,'胃肠专科','13714439348','dd',1365436800,NULL,0),(36,'小试',20,1,1,'胃肠专科','13714439348','开始测试',1366387200,NULL,0),(42,'飞机2',25,0,4,'胃肠专科','13714439343','test',1367251200,NULL,0),(49,'小试1',20,1,4,'胃肠专科','13714439048','开始测试',1366387200,NULL,0),(53,'飞机',20,0,4,'胃肠专科','13714439341','dd',1365350400,NULL,0),(55,'王九2',20,0,2,'胃肠专科','13714439310','ddddd',1365609600,NULL,0),(56,'王九3',20,0,1,'胃肠专科','13714439347','ccccc',1366261683,NULL,1),(57,'afei',0,0,4,'胃肠专科','13714439312','ccccc',1366262886,NULL,0),(58,'afei',0,0,1,'胃肠专科','13714439313','胃病',1366263103,NULL,1),(59,'csdn',22,0,2,'胃肠专科','13855750002','dd',1367769600,NULL,1),(60,'陈小武',25,0,4,'胃肠专科','13714439343','胃hehe',1379606400,NULL,0),(61,'陈小武',25,0,4,'胃肠专科','13714439343','胃hehe',1379606400,NULL,0),(62,'张小东',20,0,4,'胃肠专科','18955685522','口臭',1379692800,NULL,0),(63,'张小东',20,0,4,'胃肠专科','18955685522','口臭',1379692800,NULL,0),(64,'张小东',20,0,4,'胃肠专科','18955685522','口臭',1379692800,NULL,0),(66,'任我行',52,0,4,'胃肠专科','13800000001','好不舒服',1379692800,NULL,0),(67,'小何',40,0,4,'胃肠专科','15288554122','不想吃东西，胃不舒服',1379748959,NULL,0),(68,'c',20,0,4,'胃肠专科','13910001000','ccc',1379749149,NULL,0),(69,'小任',32,0,4,'胃肠专科','13852332641','测试一个',1379749931,NULL,0);

/*Table structure for table `ts_node` */

DROP TABLE IF EXISTS `ts_node`;

CREATE TABLE `ts_node` (
  `id` smallint(6) unsigned NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `title` varchar(50) default NULL,
  `status` tinyint(1) default '0',
  `remark` varchar(255) default NULL,
  `sort` smallint(6) unsigned default NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`),
  KEY `status` (`status`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

/*Data for the table `ts_node` */

insert  into `ts_node`(`id`,`name`,`title`,`status`,`remark`,`sort`,`pid`,`level`) values (36,'delUser','删除用户',1,NULL,1,33,3),(35,'modifyUser','用户账号修改',1,NULL,1,33,3),(34,'userinfo','登录用户信息',1,NULL,1,33,3),(33,'Index','登录管理',1,NULL,1,25,2),(32,'hostDelete','医院信息删除',1,NULL,1,26,3),(31,'hostList','查看医院信息',1,NULL,1,26,3),(30,'hostAdd','医院添加',1,NULL,1,26,3),(29,'deletePatient','患者信息删除',1,NULL,1,26,3),(28,'seePatient','接待患者',1,NULL,1,26,3),(25,'Admin','后台应用',1,NULL,1,0,1),(26,' Guahao','挂号管理',1,NULL,1,25,2),(27,'showPatient','患者信息',1,NULL,1,26,3),(37,'useraddForm','添加账号',1,NULL,1,33,3),(38,'search','用户探索',1,NULL,1,33,3),(39,'modifyPassword','修改密码',1,NULL,1,33,3),(41,'Rbac','权限管理',1,NULL,1,25,2),(42,'addRole','添加角色',1,NULL,1,41,3),(43,'showRole','显示角色',1,NULL,1,41,3),(44,'addApp','添加应用',1,NULL,1,41,3),(45,'showNode','显示节点',1,NULL,1,41,3),(46,'modifyAcess','修改权限',1,NULL,1,41,3),(47,'Home','前端应用',1,NULL,1,0,1),(48,'Index','患者挂号',1,NULL,1,47,2),(51,'','',1,NULL,1,41,3);

/*Table structure for table `ts_role` */

DROP TABLE IF EXISTS `ts_role`;

CREATE TABLE `ts_role` (
  `id` smallint(6) unsigned NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) default NULL,
  `status` tinyint(1) unsigned default NULL,
  `remark` varchar(255) default NULL,
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`),
  KEY `status` (`status`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `ts_role` */

insert  into `ts_role`(`id`,`name`,`pid`,`status`,`remark`) values (1,'Manger',NULL,1,'系统管理员'),(2,'Root',NULL,1,'后台管理员'),(3,'Editor',NULL,1,'编辑'),(6,'Admin',NULL,1,'超级管理员');

/*Table structure for table `ts_role_user` */

DROP TABLE IF EXISTS `ts_role_user`;

CREATE TABLE `ts_role_user` (
  `role_id` mediumint(9) unsigned default NULL,
  `user_id` char(32) default NULL,
  KEY `group_id` (`role_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ts_role_user` */

insert  into `ts_role_user`(`role_id`,`user_id`) values (6,'37'),(1,'38'),(1,'39'),(3,'47'),(6,'48');

/*Table structure for table `ts_user` */

DROP TABLE IF EXISTS `ts_user`;

CREATE TABLE `ts_user` (
  `uid` int(10) NOT NULL auto_increment COMMENT '用户id',
  `username` varchar(10) default NULL COMMENT '用户名',
  `password` varchar(64) default NULL COMMENT '密码',
  `realname` varchar(10) default NULL COMMENT '真实姓名',
  `loginIP` varchar(10) default NULL COMMENT '最后一次登录ip',
  `loginTime` int(20) default NULL COMMENT '最后一次登录时间',
  `status` smallint(2) default NULL COMMENT '帐号使用状态',
  `addTime` int(20) default NULL COMMENT '帐号创建时间',
  `modifyTime` int(20) default NULL COMMENT '帐号修改时间',
  `level` varchar(20) default NULL COMMENT '管理员级别',
  `email` varchar(20) default NULL COMMENT '管理员email',
  PRIMARY KEY  (`uid`),
  KEY `indexusername` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `ts_user` */

insert  into `ts_user`(`uid`,`username`,`password`,`realname`,`loginIP`,`loginTime`,`status`,`addTime`,`modifyTime`,`level`,`email`) values (37,'afei','e10adc3949ba59abbe56e057f20f883e','阿飞','127.0.0.1',1382433160,1,NULL,0,'6','chuhappyday@163.com'),(38,'job','202cb962ac59075b964b07152d234b70','job','127.0.0.1',1381549747,1,NULL,0,'1',NULL),(39,'chu','202cb962ac59075b964b07152d234b70','chu','127.0.0.1',1379475373,1,NULL,NULL,'1',NULL),(47,'lisi','202cb962ac59075b964b07152d234b70','李四','127.0.0.1',1382433601,1,NULL,NULL,'3',NULL),(48,'admin','21232f297a57a5a743894a0e4a801fc3','admin','127.0.0.1',1383989568,1,1379319864,NULL,'6','admin@qq.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
