/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.1.36-MariaDB : Database - dinkes_sambas
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `kode_rekening_rincian` */

DROP TABLE IF EXISTS `kode_rekening_rincian`;

CREATE TABLE `kode_rekening_rincian` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `kode_rekening` varchar(50) NOT NULL,
  `nama_rekening` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `kode_rekening_rincian` */

insert  into `kode_rekening_rincian`(`id`,`kode_rekening`,`nama_rekening`) values 
(11,'5.2.2.03.01.','Belanja Telepon'),
(12,'5.2.2.03.02.','Belanja Air');

/*Table structure for table `renja` */

DROP TABLE IF EXISTS `renja`;

CREATE TABLE `renja` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `no_dokumen` char(15) NOT NULL,
  `no_rka` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `kegiatan` varchar(100) NOT NULL,
  `waktu_pelaksanaan` varchar(100) NOT NULL,
  `lokasi_kegiatan` varchar(100) NOT NULL,
  `sumber_dana` varchar(100) NOT NULL,
  `capaian_program` text NOT NULL,
  `masukan` text NOT NULL,
  `keluaran` text NOT NULL,
  `hasil` text NOT NULL,
  `kelompok_sasaran_kegiatan` text NOT NULL,
  `triwulan1` varchar(100) NOT NULL,
  `triwulan2` varchar(100) NOT NULL,
  `triwulan3` varchar(100) NOT NULL,
  `triwulan4` varchar(100) NOT NULL,
  `total_penarikan` varchar(100) NOT NULL,
  `add_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `renja` */

insert  into `renja`(`id`,`no_dokumen`,`no_rka`,`program`,`kegiatan`,`waktu_pelaksanaan`,`lokasi_kegiatan`,`sumber_dana`,`capaian_program`,`masukan`,`keluaran`,`hasil`,`kelompok_sasaran_kegiatan`,`triwulan1`,`triwulan2`,`triwulan3`,`triwulan4`,`total_penarikan`,`add_time`) values 
(9,'90130182204','1.02.1.02.01.01.02.5.8','1.02.1.02.01.01. - Program Pelayanan Administrasi Perkantoran','1.02.1.02.01.01.02. - Penyediaan Jasa Komunikasi, Sumber Daya Air dan Listrik','01-01-2018 sampai dengan 31-12-2018','Dinas Kesehatan',' ','% Cakupan Pelayanan Administrasi Perkantoran###100%','Dana yang Tersedia###Rp.100.000.000','Tersedianya Jasa Komunikasi, Sumber Daya AIr (Dinkes) Selama 1 Tahun###1 Tahun','Terlaksananya Jasa Komunikasi, Sumber Daya Air (Dinkes) Selama 1 Tahun###100%','Dinas Kesehatan','25000000','25000000','25000000','32928192.77','','2019-01-31 00:34:14'),
(11,'90131184628','','1.02.1.02.01.01. - Program Pelayanan Administrasi Perkantoran','1.02.1.02.01.01.08. - Penyediaan jasa kebersihan kantor','01-01-2018 sampai dengan 31-12-2018','Dinas Kesehatan',' ','% Cakupan pelayanan administrasi perkantoran urusan\r\nkesehatan\r\n###100 %','Dana yang tersedia###Rp. 3.000.000','Tersedianya jasa kebersihan kantor (Dinkes) dan aula selama 1\r\ntahun###1 tahun','terlaksananya jasa kebersihan kantor (Dinkes) dan aula selama\r\n1 tahun###100 %','Dinas Kesehatan','7000','7000','7000','2979000','','2019-02-01 00:58:02'),
(12,'90131191239','','1.02.1.02.01.01. - Program Pelayanan Administrasi Perkantoran','1.02.1.02.01.01.02. - Penyediaan Jasa Komunikasi, Sumber Daya Air dan Listrik','01-01-2018 sampai dengan 31-12-2018','Dinas Kesehatan','','a###a','a###a','a###a','a###a','a','500000','500000','500000','500000','','2019-02-01 01:14:20');

/*Table structure for table `renja_rincian` */

DROP TABLE IF EXISTS `renja_rincian`;

CREATE TABLE `renja_rincian` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `no_dokumen` char(15) NOT NULL,
  `kode_rekening` varchar(50) NOT NULL,
  `uraian` varchar(100) NOT NULL,
  `volume` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `harga_satuan` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `grup` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `renja_rincian` */

insert  into `renja_rincian`(`id`,`no_dokumen`,`kode_rekening`,`uraian`,`volume`,`satuan`,`harga_satuan`,`jumlah`,`grup`) values 
(20,'90130182204','5.02','BELANJA LANGSUNG','','','','107928192.77',1),
(21,'90130182204','5.02.02','BELANJA BARANG DAN JASA','','','','107928192.77',1),
(22,'90130182204','5.2.2.03.','Belanja Jasa Kantor','','','','107928192.77',1),
(23,'90130182204','5.2.2.03.01.','Belanja Telepon','1','tahun','3000000','3000000',0),
(24,'90130182204','5.2.2.03.02.','Belanja Air','1','tahun','4000000','4000000',0),
(25,'90130182204','5.2.2.03.03.','Belanja Listrik','1','tahun','74928192.77','74928192.77',0),
(26,'90130182204','5.2.2.03.06.','Belanja Kawat/Faksimili/Internet','1','tahun','24000000','24000000',0),
(27,'90130182204','5.2.2.03.32.','Belanja TV Kabel','1','tahun','2000000','2000000',0),
(30,'90131184628','5.2.','BELANJA LANGSUNG','','','','3000000',1),
(31,'90131184628','5.2.2.','BELANJA BARANG DAN JASA','','','','3000000',1),
(32,'90131184628','5.2.2.01.','Belanja Barang Pakai Habis','','','','3000000',1),
(33,'90131184628','5.2.2.01.05','Belanja peralatan kebersihan dan bahan pembersih','','','','3000000',1),
(34,'90131184628','','Hand Soap','30','buah','28000','840000',0),
(35,'90131184628','','Karbol ruangan','20','botol','14000','280000',0),
(36,'90131184628','','Pewangi Ruangan','40','kaleng','20000','800000',0),
(37,'90131184628','','Tisu Gulung','20','roll','3000','60000',0),
(38,'90131184628','','Tisu Kering','30','kotak','12000','360000',0),
(39,'90131184628','','Selabar','1','buah','10000','10000',0),
(40,'90131184628','','Tempat Sampah Plastik','13','buah','50000','650000',0),
(41,'90131191239','5.2.2.03.02.','Belanja Air','','','','2000000',1),
(42,'90131191239','','Belanja Air','2','tahun','1000000','2000000',0);

/*Table structure for table `renja_rincian_array` */

DROP TABLE IF EXISTS `renja_rincian_array`;

CREATE TABLE `renja_rincian_array` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `no_dokumen` char(15) NOT NULL,
  `kode_rekening` text NOT NULL,
  `uraian` text NOT NULL,
  `volume` text NOT NULL,
  `satuan` text NOT NULL,
  `harga_satuan` text NOT NULL,
  `jumlah` text NOT NULL,
  `grup` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `renja_rincian_array` */

insert  into `renja_rincian_array`(`id`,`no_dokumen`,`kode_rekening`,`uraian`,`volume`,`satuan`,`harga_satuan`,`jumlah`,`grup`) values 
(9,'90130182204','5.02###5.02.02###5.2.2.03.###5.2.2.03.01.###5.2.2.03.02.###5.2.2.03.03.###5.2.2.03.06.###5.2.2.03.32.','BELANJA LANGSUNG###BELANJA BARANG DAN JASA###Belanja Jasa Kantor###Belanja Telepon###Belanja Air###Belanja Listrik###Belanja Kawat/Faksimili/Internet###Belanja TV Kabel','#########1###1###1###1###1','#########tahun###tahun###tahun###tahun###tahun','#########3,000,000###4,000,000###7,492,819,277###24,000,000###2,000,000','107,928,192.77###107,928,192.77###107,928,192.77###3,000,000###4,000,000###74,928,192.77###24,000,000###2,000,000',''),
(11,'90131184628','5.2.###5.2.2.###5.2.2.01.###5.2.2.01.05#####################','BELANJA LANGSUNG###BELANJA BARANG DAN JASA###Belanja Barang Pakai Habis###Belanja peralatan kebersihan dan bahan pembersih###Hand Soap###Karbol ruangan###Pewangi Ruangan###Tisu Gulung###Tisu Kering###Selabar###Tempat Sampah Plastik','############30###20###40###20###30###1###13','############buah###botol###kaleng###roll###kotak###buah###buah','############28000###14000###20000###3000###12000###10000###50000','0###3000000###3000000###3000000###840000###280000###800000###60000###360000###10000###650000',''),
(12,'90131191239','5.2.2.03.02.###','Belanja Air###Belanja Air','###2','###tahun','###1000000','2000000###2000000','1###0');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` char(15) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`) values 
(1,'admin','8bab434138eb69859bcc825ad4f6d368');

/* Function  structure for function  `SPLIT_STR` */

/*!50003 DROP FUNCTION IF EXISTS `SPLIT_STR` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `SPLIT_STR`(
  x VARCHAR(255),
  delim VARCHAR(12),
  pos INT
) RETURNS varchar(255) CHARSET latin1
RETURN REPLACE(SUBSTRING(SUBSTRING_INDEX(x, delim, pos),
       LENGTH(SUBSTRING_INDEX(x, delim, pos -1)) + 1),
       delim, '') */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
