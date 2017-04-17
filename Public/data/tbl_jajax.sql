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

/*Table structure for table `jajax` */

DROP TABLE IF EXISTS `jajax`;

CREATE TABLE `jajax` (
  `id` int(10) NOT NULL auto_increment,
  `username` varchar(20) default NULL,
  `age` int(10) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `jajax` */

insert  into `jajax` values (2,'fei',18),(7,'job',25),(8,'阿飞2',25),(9,'jonh',15);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
