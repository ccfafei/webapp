/*
SQLyog Job Agent Version 8.14 Copyright(c) Webyog Softworks Pvt. Ltd. All Rights Reserved.


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

insert  into `meet` values (1,'jobs',26,1,'胃肠专科','13714439347','see a doctor',1366170865),(4,'王五',20,0,'胃肠专科','13714439341','有问题',1366041600),(5,'王五',20,0,'胃肠专科','13714439341','有问题',1366041600),(6,'王五',20,0,'胃肠专科','13714439341','有问题',1366041600),(7,'王五',20,0,'胃肠专科','13714439341','有问题',1366041600),(11,'王九',29,0,'胃肠专科','13714439348','偶尔胃不疼.',1365523200),(22,'王九',29,0,'胃肠专科','13714439348','偶尔胃不疼.',1365523200),(29,'小储',29,0,'胃肠专科','13714439347','开始测试',1365955200),(30,'dd',29,0,'胃肠专科','13714439348','ddd',1364745600),(31,'王九',25,0,'胃肠专科','13714439347','ddddd',1367164800),(32,'王九',25,0,'胃肠专科','13714439347','ddddd',1367164800),(33,'王九',25,0,'胃肠专科','13714439347','ddddd',1367164800),(34,'王九',25,0,'胃肠专科','13714439347','ddddd',1367164800),(35,'王五',20,0,'胃肠专科','13714439348','dd',1365436800),(36,'小试',20,1,'胃肠专科','13714439348','开始测试',1366387200),(40,'飞机',25,0,'胃肠专科','13714439340','test',1367251200),(41,'飞机1',25,0,'胃肠专科','13714439342','test',1367251200),(42,'飞机2',25,0,'胃肠专科','13714439343','test',1367251200),(43,'飞机3',25,0,'胃肠专科','13714438343','test',1367251200),(44,'飞机4',25,0,'胃肠专科','13714438341','test',1367251200),(45,'飞机5',25,0,'胃肠专科','13714438342','test',1367251200),(46,'飞机6',25,0,'胃肠专科','13714438347','test',1367251200),(47,'飞机7',25,0,'胃肠专科','13714438348','test',1367251200),(48,'飞机8',25,0,'胃肠专科','13714438001','test',1367251200),(49,'小试1',20,1,'胃肠专科','13714439048','开始测试',1366387200),(50,'李小六1',28,0,'胃肠专科','13875814200','咨询后才知道',1365523200),(51,'李小六2',28,0,'胃肠专科','13875814201','咨询后才知道',1365523200),(52,'王九',20,0,'胃肠专科','13714439342','dd',1364745600),(53,'飞机',20,0,'胃肠专科','13714439341','dd',1365350400),(54,'王九1',25,0,'胃肠专科','13714439348','sds',1365609600),(55,'王九2',20,0,'胃肠专科','13714439310','',1365609600),(56,'王九3',20,0,'胃肠专科','13714439347','',1366261683),(57,'afei',0,0,'胃肠专科','13714439312','',1366262886),(58,'afei',0,0,'胃肠专科','13714439313','$get_info[6]$get_info[6]$get_info[6]$get_info[6]$get_info[6]$get_info[6]',1366263103),(59,'csdn',22,0,'胃肠专科','13855750002','dd',1367769600);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
