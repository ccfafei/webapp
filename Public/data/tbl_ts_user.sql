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
  `manage_id` int(20) default NULL COMMENT '管理员编号',
  `email` varchar(20) default NULL COMMENT '管理员email',
  PRIMARY KEY  (`uid`),
  KEY `indexusername` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AVG_ROW_LENGTH=1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

/*Data for the table `ts_user` */

insert  into `ts_user` values (37,'afei','202cb962ac59075b964b07152d234b70','阿飞','127.0.0.1',1375782607,1,NULL,0,'1',NULL,'chuhappyday@163.com'),(38,'job','202cb962ac59075b964b07152d234b70','job',NULL,NULL,1,NULL,0,'1',NULL,NULL),(39,'chu','202cb962ac59075b964b07152d234b70','chu',NULL,NULL,1,NULL,NULL,'1',NULL,NULL),(40,'asd','202cb962ac59075b964b07152d234b70','阿弟',NULL,NULL,1,NULL,NULL,'2',NULL,NULL),(41,'tsd','202cb962ac59075b964b07152d234b70','tsd',NULL,NULL,1,NULL,NULL,'2',NULL,NULL),(43,'vivi','d41d8cd98f00b204e9800998ecf8427e','vivi',NULL,NULL,1,NULL,NULL,'3',NULL,NULL),(44,'tigg','d41d8cd98f00b204e9800998ecf8427e','tigg',NULL,NULL,1,NULL,NULL,'3',NULL,NULL),(45,'zhong','626726e60bd1215f36719a308a25b798','zhong',NULL,NULL,1,NULL,NULL,'3',NULL,NULL),(47,'coco1tr','202cb962ac59075b964b07152d234b70','小王','127.0.0.1',1374895970,1,NULL,NULL,'3',NULL,NULL),(48,'lili','202cb962ac59075b964b07152d234b70','lili',NULL,NULL,1,NULL,NULL,'3',NULL,NULL),(49,'bob','ad7532d5b3860a408fbe01f9455dca36','bob',NULL,NULL,1,NULL,NULL,'3',NULL,NULL),(50,'kc','190a4568b24548e0dc8592f61f0a8cd2','kc',NULL,NULL,1,NULL,NULL,'3',NULL,NULL),(51,'rere','202cb962ac59075b964b07152d234b70','rere',NULL,NULL,1,NULL,NULL,'3',NULL,NULL),(52,'jo','674f33841e2309ffdd24c85dc3b999de','jo',NULL,NULL,1,NULL,NULL,'3',NULL,NULL),(53,'ad','202cb962ac59075b964b07152d234b70','dd',NULL,NULL,NULL,NULL,NULL,'3',NULL,NULL),(54,'tete','202cb962ac59075b964b07152d234b70','tt','127.0.0.1',1374907468,1,NULL,NULL,'3',NULL,NULL),(58,'hic','202cb962ac59075b964b07152d234b70','hic',NULL,NULL,NULL,1375432824,NULL,'3',NULL,'td@qq.com'),(62,'gou','202cb962ac59075b964b07152d234b70','gou1',NULL,NULL,1,1375437951,NULL,'3',NULL,'tk@163.com'),(63,'shocan','202cb962ac59075b964b07152d234b70','sho',NULL,NULL,1,1375438345,NULL,'3',NULL,'hh@163.com'),(64,'ddd','202cb962ac59075b964b07152d234b70','dddd',NULL,NULL,1,1375438406,NULL,'3',NULL,'ci@163.com'),(65,'whois','202cb962ac59075b964b07152d234b70','whois',NULL,NULL,1,1375672224,NULL,'3',NULL,'who@163.com');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
