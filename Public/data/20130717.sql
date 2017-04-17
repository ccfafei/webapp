/*
SQLyog 企业版 - MySQL GUI v8.14 
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

/*Table structure for table `jajax` */

DROP TABLE IF EXISTS `jajax`;

CREATE TABLE `jajax` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(20) default NULL,
  `age` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `jajax` */

insert  into `jajax`(`id`,`username`,`age`) values (2,'fei',18),(7,'job',25),(8,'阿飞2',25),(9,'jonh',15);

/*Table structure for table `meet` */

DROP TABLE IF EXISTS `meet`;

CREATE TABLE `meet` (
  `id` int(10) NOT NULL auto_increment COMMENT '会诊id',
  `username` varchar(18) NOT NULL default '' COMMENT '用户名',
  `age` smallint(3) default NULL COMMENT '年龄',
  `sex` tinyint(2) default NULL COMMENT '性别',
  `ks` varchar(10) NOT NULL default '胃肠专科' COMMENT '科室',
  `tel` varchar(12) NOT NULL COMMENT '联系电话',
  `cont` text NOT NULL COMMENT '病情描述',
  `yul` int(20) default NULL COMMENT '会诊日期',
  PRIMARY KEY  (`id`),
  KEY `name` (`username`,`tel`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `meet` */

insert  into `meet`(`id`,`username`,`age`,`sex`,`ks`,`tel`,`cont`,`yul`) values (1,'jobs',26,1,'胃肠专科','13714439347','see a doctor',1366170865),(4,'王五',20,0,'胃肠专科','13714439341','有问题',1366041600),(5,'王五',20,0,'胃肠专科','13714439341','有问题',1366041600),(6,'王五',20,0,'胃肠专科','13714439341','有问题',1366041600),(7,'王五',20,0,'胃肠专科','13714439341','有问题',1366041600),(11,'王九',29,0,'胃肠专科','13714439348','偶尔胃不疼.',1365523200),(22,'王九',29,0,'胃肠专科','13714439348','偶尔胃不疼.',1365523200),(29,'小储',29,0,'胃肠专科','13714439347','开始测试',1365955200),(30,'dd',29,0,'胃肠专科','13714439348','ddd',1364745600),(31,'王九',25,0,'胃肠专科','13714439347','ddddd',1367164800),(32,'王九',25,0,'胃肠专科','13714439347','ddddd',1367164800),(33,'王九',25,0,'胃肠专科','13714439347','ddddd',1367164800),(34,'王九',25,0,'胃肠专科','13714439347','ddddd',1367164800),(35,'王五',20,0,'胃肠专科','13714439348','dd',1365436800),(36,'小试',20,1,'胃肠专科','13714439348','开始测试',1366387200),(40,'飞机',25,0,'胃肠专科','13714439340','test',1367251200),(41,'飞机1',25,0,'胃肠专科','13714439342','test',1367251200),(42,'飞机2',25,0,'胃肠专科','13714439343','test',1367251200),(43,'飞机3',25,0,'胃肠专科','13714438343','test',1367251200),(44,'飞机4',25,0,'胃肠专科','13714438341','test',1367251200),(45,'飞机5',25,0,'胃肠专科','13714438342','test',1367251200),(46,'飞机6',25,0,'胃肠专科','13714438347','test',1367251200),(47,'飞机7',25,0,'胃肠专科','13714438348','test',1367251200),(48,'飞机8',25,0,'胃肠专科','13714438001','test',1367251200),(49,'小试1',20,1,'胃肠专科','13714439048','开始测试',1366387200),(50,'李小六1',28,0,'胃肠专科','13875814200','咨询后才知道',1365523200),(51,'李小六2',28,0,'胃肠专科','13875814201','咨询后才知道',1365523200),(52,'王九',20,0,'胃肠专科','13714439342','dd',1364745600),(53,'飞机',20,0,'胃肠专科','13714439341','dd',1365350400),(54,'王九1',25,0,'胃肠专科','13714439348','sds',1365609600),(55,'王九2',20,0,'胃肠专科','13714439310','',1365609600),(56,'王九3',20,0,'胃肠专科','13714439347','',1366261683),(57,'afei',0,0,'胃肠专科','13714439312','',1366262886),(58,'afei',0,0,'胃肠专科','13714439313','$get_info[6]$get_info[6]$get_info[6]$get_info[6]$get_info[6]$get_info[6]',1366263103),(59,'csdn',22,0,'胃肠专科','13855750002','dd',1367769600);

/*Table structure for table `ts_user` */

DROP TABLE IF EXISTS `ts_user`;

CREATE TABLE `ts_user` (
  `uid` int(10) NOT NULL auto_increment COMMENT '用户id',
  `username` varchar(10) default NULL COMMENT '用户名',
  `age` int(10) default NULL COMMENT '年龄',
  `password` varchar(64) default NULL COMMENT '密码',
  PRIMARY KEY  (`uid`),
  KEY `indexusername` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `ts_user` */

insert  into `ts_user`(`uid`,`username`,`age`,`password`) values (37,'afei',20,'202cb962ac59075b964b07152d234b70'),(38,'job',27,'202cb962ac59075b964b07152d234b70'),(39,'chu',27,'202cb962ac59075b964b07152d234b70'),(40,'asd',20,'202cb962ac59075b964b07152d234b70'),(41,'tsd',20,'202cb962ac59075b964b07152d234b70'),(42,'afeis',20,'202cb962ac59075b964b07152d234b70'),(43,'vivi',25,'202cb962ac59075b964b07152d234b70'),(44,'tigg',24,'1cc39ffd758234422e1f75beadfc5fb2'),(45,'zhong',20,'e10adc3949ba59abbe56e057f20f883e'),(46,'fifi',25,'202cb962ac59075b964b07152d234b70'),(47,'coco',20,'202cb962ac59075b964b07152d234b70'),(48,'lili',20,'202cb962ac59075b964b07152d234b70'),(49,'bob',25,'ad7532d5b3860a408fbe01f9455dca36'),(50,'kc',123,'190a4568b24548e0dc8592f61f0a8cd2'),(51,'rere',20,'202cb962ac59075b964b07152d234b70'),(52,'jo',123,'674f33841e2309ffdd24c85dc3b999de');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
