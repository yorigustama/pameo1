/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.8-MariaDB : Database - pameo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pameo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `pameo`;

/*Table structure for table `design` */

DROP TABLE IF EXISTS `design`;

CREATE TABLE `design` (
  `id_design` int(12) NOT NULL,
  `id_reques_design` int(12) DEFAULT NULL,
  `revisi_ke` varchar(30) DEFAULT NULL,
  `catatan_revisi` varchar(50) DEFAULT NULL,
  `upload` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_design`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `design` */

/*Table structure for table `reques_design` */

DROP TABLE IF EXISTS `reques_design`;

CREATE TABLE `reques_design` (
  `id_reques_design` int(12) NOT NULL,
  `nama_design` varchar(30) DEFAULT NULL,
  `jenis_design` varchar(30) DEFAULT NULL,
  `batas_waktu` date DEFAULT NULL,
  `jumlah_design` varchar(10) DEFAULT NULL,
  `catatan_khusus` varchar(50) DEFAULT NULL,
  `waktu_reques` date DEFAULT NULL,
  `materi_pendukung` varchar(30) DEFAULT NULL,
  `id_user_perorangan` int(12) DEFAULT NULL,
  PRIMARY KEY (`id_reques_design`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `reques_design` */

insert  into `reques_design`(`id_reques_design`,`nama_design`,`jenis_design`,`batas_waktu`,`jumlah_design`,`catatan_khusus`,`waktu_reques`,`materi_pendukung`,`id_user_perorangan`) values 
(0,'asd','asd','2021-05-31','12','dfsdfds','2021-05-31','file_1621922939.pdf',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(32) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`username`,`password`,`nama`,`email`,`level`) values 
(1,'admin','admin','Administrator','admin@gmail.com',1),
(2,'desain','desain','Desainer','desainer@gmail.com',2),
(3,'pembeli','pembeli','pembeli','pembeli@gmail.com',3),
(0,'yori','5ee016cfa2d2c358f87c5c5eb700044c','yori','yori@gmail.com',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
