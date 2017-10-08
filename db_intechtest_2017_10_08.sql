/*
SQLyog Ultimate v12.12 (64 bit)
MySQL - 10.1.16-MariaDB : Database - sakersoft_intech_test
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sakersoft_intech_test` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `sakersoft_intech_test`;

/*Table structure for table `itt_page` */

DROP TABLE IF EXISTS `itt_page`;

CREATE TABLE `itt_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `itt_page` */

insert  into `itt_page`(`id`,`code`,`name`,`description`,`is_enabled`) values (1,'home','Lorem ipsum dolor sit amet, consectetur adipiscing elit.','<p>Etiam ac sodales orci, id tristique magna.<br />\r\nEtiam sit amet lacus eu diam faucibus mattis. Nam convallis lobortis sapien, et consequat volutpat in.</p>\r\n',1),(3,'test','test','<p>This is a test page</p>\r\n',1);

/*Table structure for table `itt_slide` */

DROP TABLE IF EXISTS `itt_slide`;

CREATE TABLE `itt_slide` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `itt_slide` */

insert  into `itt_slide`(`id`,`code`,`file_name`,`is_enabled`) values (1,'hand_www','lock.png',1),(2,'peoples','peoples.jpg',1),(3,'hand_www2','hand_www2.jpg',1),(4,'peoples_2','peoples2.jpg',1),(5,'test','b4.jpg',1);

/*Table structure for table `itt_tag` */

DROP TABLE IF EXISTS `itt_tag`;

CREATE TABLE `itt_tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `frequency` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `itt_tag` */

insert  into `itt_tag`(`id`,`name`,`frequency`) values (1,'yii',1),(2,'blog',1),(3,'test',1);

/*Table structure for table `itt_user` */

DROP TABLE IF EXISTS `itt_user`;

CREATE TABLE `itt_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `profile` text COLLATE utf8_unicode_ci,
  `is_enabled` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `itt_user` */

insert  into `itt_user`(`id`,`username`,`password`,`email`,`profile`,`is_enabled`) values (1,'test','$2a$10$JTJf6/XqC94rrOtzuF397OHa4mbmZrVTBOQCmYD9U.obZRUut4BoC','sakersoft@gmail.com',NULL,1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
