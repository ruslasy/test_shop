-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: test_shop
-- ------------------------------------------------------
-- Server version	5.7.26-1+b1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `available` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'2020-06-11 17:38:55','2020-06-11 17:38:55','Calvin Klein 4154-060','Очки солнцезащитные','/data/c2c870a7b10a91adee1eedbb827c900b_500x500.jpg',3000.00,1),(2,'2020-06-11 17:38:55','2020-06-11 17:38:55','Polaroid PLD 2034 S CVS','Очки солнцезащитные','/data/97dda061b63dee0d893aa8a7e05e9e8a_500x500.jpg',3600.00,0),(3,'2020-06-11 17:38:55','2020-06-11 17:38:55','Polarstar PSGF- 0703 1','Очки солнцезащитные','/data/346b8741a314330c232a7524275e0f86_500x500.jpg',1500.00,0),(4,'2020-06-11 17:38:55','2020-06-11 17:38:55','Puma PE 0007S 001','Очки солнцезащитные','/data/ecabbe366c03c10692aa0dfceaf9b2d4_500x500.jpg',5700.00,1),(5,'2020-06-11 17:38:55','2020-06-11 17:38:55','D. Swarovski 0195- 32F','Очки солнцезащитные','/data/11b1a381e1d0868cfc621db61726fcae_500x500.jpg',15700.00,1),(6,'2020-06-11 17:38:55','2020-06-11 17:38:55','Polar Solar T1503 9','Очки солнцезащитные','/data/f872c2e7ada89be5f402623bf7dd6af9_500x500.jpg',1300.00,1),(7,'2020-06-11 17:38:55','2020-06-11 17:38:55','Genex Sungl 416 046','Очки солнцезащитные','/data/48dd736c27a6efea565fbb90b2a0a5e5_500x500.jpg',2000.00,1),(8,'2020-06-11 17:38:55','2020-06-11 17:38:55','Stella 0031S-002','Очки солнцезащитные','/data/727133b3751869bd7ef78c52b0261bce_500x500.png',20350.00,0),(9,'2020-06-11 17:38:55','2020-06-11 17:38:55','McQ 0037S-002','Очки солнцезащитные','/data/db089746da4e4dd618a3729a320d0ee9_500x500.png',12950.00,0),(10,'2020-06-11 17:38:55','2020-06-11 17:38:55','McQ 0067S-003','Очки солнцезащитные','/data/8b2f67bf59a47182b4ab649dc15ff27e_500x500.png',9950.00,0),(11,'2020-06-11 17:38:55','2020-06-11 17:38:55','Enni Marco IS 11-477 05Z','Очки солнцезащитные','/data/c8cd449f1724d4716072ce50f99ac277_500x500.bmp',6200.00,0),(12,'2020-06-11 17:38:55','2020-06-11 17:38:55','Tom Ford 562 K 01 A','Очки солнцезащитные','/data/5d0a70e6ceb0e478ab95a9db14d35c5d_500x500.jpg',26800.00,0),(13,'2020-06-11 17:38:55','2020-06-11 17:38:55','Polar Solar HT880240 3','Очки солнцезащитные','/data/c7e8b40a8b7bd9e44989bee895d9ecae_500x500.jpg',2700.00,1),(14,'2020-06-11 17:38:55','2020-06-11 17:38:55','Romeo Popular 29060-13','Очки солнцезащитные','/data/dbd6326c51cb1dc76733a1129c851e9b_500x500.jpg',2300.00,1),(15,'2020-06-11 17:38:55','2020-06-11 17:38:55','Romeo Popular 29088-1','Очки солнцезащитные','/data/0ba815e617ae8b8c96768de9200c5709_500x500.jpg',2500.00,0),(16,'2020-06-11 17:38:55','2020-06-11 17:38:55','Romeo Popular 29052-3','Очки солнцезащитные','/data/ca49bf7937e6d15cd1b41bb9c7c8f744_500x500.jpg',2300.00,0),(17,'2020-06-11 17:38:55','2020-06-11 17:38:55','Langtemeng 56209-13-101','Очки солнцезащитные','/data/4dda88919806586630df7bc4a6220d42_500x500.jpg',600.00,0),(18,'2020-06-11 17:38:55','2020-06-11 17:38:55','Langtemeng 56234-422-178','Очки солнцезащитные','/data/8cbc8054d12f47f1afa17d05838939c3_500x500.jpg',600.00,1),(19,'2020-06-11 17:38:55','2020-06-11 17:38:55','Langtemeng 56283-13-101','Очки солнцезащитные','/data/c6d5e85e32eeaa0461e3295b102afe0a_500x500.jpg',600.00,1),(20,'2020-06-11 17:38:55','2020-06-11 17:38:55','Langtemeng 56283-10-129','Очки солнцезащитные','/data/f209288a461c5907d36e0096169b81aa_500x500.jpg',600.00,0),(21,'2020-06-11 17:38:55','2020-06-11 17:38:55','Langtemeng 56323 13-194','Очки солнцезащитные','/data/a7c84c1b6ceaa1bdd1d79e619f8dd5eb_500x500.jpg',600.00,0),(22,'2020-06-11 17:38:55','2020-06-11 17:38:55','Polarone P1 5035 AD1','Очки солнцезащитные','/data/4aa02ec8bb1843038abe4e2e267c084f_500x500.jpg',5000.00,1),(23,'2020-06-11 17:38:55','2020-06-11 17:38:55','Prada 04P NAC-6S1','Очки солнцезащитные','/data/ca20b7afd22cd941ef44974f8e0719cb_500x500.png',20800.00,0),(24,'2020-06-11 17:38:55','2020-06-11 17:38:55','Genex Sunglasses 3421 048','Очки солнцезащитные','/data/6e4f8b6255c5d71599b2ea8a38317b39_500x500.jpg',2000.00,0),(25,'2020-06-11 17:38:55','2020-06-11 17:38:55','Nina Ricci 164 174','Очки солнцезащитные','/data/a6da6292f148539c3ec261043ef63384_500x500.jpg',15500.00,1),(26,'2020-06-11 17:38:55','2020-06-11 17:38:55','Mario Rossi 04-076 18P','Очки солнцезащитные','/data/82d1fb6d421e60ebac5ee1bc44021fb1_500x500.bmp',3900.00,0),(27,'2020-06-11 17:38:55','2020-06-11 17:38:55','Silhouette 8705-7000','Очки солнцезащитные','/data/a6ab2802504e8ea8ad6cd5dc7fd92e3d_500x500.jpg',31400.00,0),(28,'2020-06-11 17:38:55','2020-06-11 17:38:55','Police 8103-531','Очки солнцезащитные','/data/ef35eea101ae0507f1a08051034fcc21_500x500.jpg',2500.00,1),(29,'2020-06-11 17:38:55','2020-06-11 17:38:55','Tom Ford 588 01 E','Очки солнцезащитные','/data/00419c3fc928a2681f09f6003f46e702_500x500.jpg',24200.00,1),(30,'2020-06-11 17:38:55','2020-06-11 17:38:55','Polarstar 3838-2','Очки солнцезащитные','/data/0d9fe3ac1fe92af9ab9376d5fa43ed36_500x500.jpg',2500.00,1),(31,'2020-06-11 17:38:55','2020-06-11 17:38:55','Enni Marco IS 11-491 19P-3','Очки солнцезащитные','/data/e3da8a9dc700c6a18c4fb356b8541589_500x500.bmp',6200.00,0),(32,'2020-06-11 17:38:55','2020-06-11 17:38:55','Police 8103-B531','Очки солнцезащитные','/data/9b7686c9816f3dbb49502fbe303a9afc_500x500.jpg',5500.00,0),(33,'2020-06-11 17:38:55','2020-06-11 17:38:55','Max Mara LINA I 807','Очки солнцезащитные','/data/595643cebd7e4bb6474fba57700edeee_500x500.jpg',22500.00,0),(34,'2020-06-11 17:38:55','2020-06-11 17:38:55','Polarone PX 1004 AL 2','Очки солнцезащитные','/data/e70dc8d5bb070af670b92b244e07cbdc_500x500.jpg',3600.00,0),(35,'2020-06-11 17:38:55','2020-06-11 17:38:55','Vogue 5270S-238673','Очки солнцезащитные','/data/281e07123c5c3c5fdae6aa2a2790a7e8_500x500.jpg',6500.00,0),(36,'2020-06-11 17:38:55','2020-06-11 17:38:55','Max Mara Shine IFS 000','Очки солнцезащитные','/data/b611a1d28da7c6f689ce49c7065fa79a_500x500.jpg',19200.00,1),(37,'2020-06-11 17:38:55','2020-06-11 17:38:55','Carolina Herrera 792 9QA','Очки солнцезащитные','/data/b081282ba2c21d4a1fc981c5e22bbabc_500x500.jpg',11700.00,0),(38,'2020-06-11 17:38:55','2020-06-11 17:38:55','Puma PE 0005S 004','Очки солнцезащитные','/data/2611ca1b4af2287b109b371e5f5f8659_500x500.png',5700.00,1),(39,'2020-06-11 17:38:55','2020-06-11 17:38:55','Carolina Herrera 788 1CP','Очки солнцезащитные','/data/16427a50a8d0ad7f7a18a9a5039c3f77_500x500.jpg',10450.00,0),(40,'2020-06-11 17:38:55','2020-06-11 17:38:55','Langtemeng 58159 D227-193','Очки солнцезащитные','/data/7573c11122d6382e74b05daca3550be5_500x500.jpg',600.00,0),(41,'2020-06-11 17:38:55','2020-06-11 17:38:55','Polarone P1 6132 CR2','Очки солнцезащитные','/data/8bb5e0e3c775abbcc212c4f20b4a8e1c_500x500.jpg',5500.00,1),(42,'2020-06-11 17:38:55','2020-06-11 17:38:55','Carolina Herrera 120 1AY','Очки солнцезащитные','/data/d5c76c40f2f5c05df198898965943b8c_500x500.jpg',12000.00,0),(43,'2020-06-11 17:38:55','2020-06-11 17:38:55','Neolook Sunglasses 1383- 316','Очки солнцезащитные','/data/57e8747f2a952edded05a65989fa8bbc_500x500.jpg',4900.00,1),(44,'2020-06-11 17:38:55','2020-06-11 17:38:55','Sting 138 8D1','Очки солнцезащитные','/data/04f27234d13ae8c93ec0b1271e75917d_500x500.jpg',7400.00,0),(45,'2020-06-11 17:38:55','2020-06-11 17:38:55','Ray Ban 3025-004/78','Очки солнцезащитные','/data/aa8939d7fbaf1640c55a8871db262937_500x500.jpg',12900.00,1),(46,'2020-06-11 17:38:55','2020-06-11 17:38:55','Neolook Sunglasses 1384- 313','Очки солнцезащитные','/data/23f2b4b98adaf1ba86545c2b9926d308_500x500.jpg',4900.00,1),(47,'2020-06-11 17:38:55','2020-06-11 17:38:55','Genex 364 065','Очки солнцезащитные','/data/453f5c6afa6e79db9e9791136e41b871_500x500.jpg',1500.00,0),(48,'2020-06-11 17:38:55','2020-06-11 17:38:55','Enni Marco IS 11-074 06Z','Очки солнцезащитные','/data/ba7181164182faddb14bcdd324af98f8_500x500.gif',6200.00,0),(49,'2020-06-11 17:38:55','2020-06-11 17:38:55','Mario Rossi 01-344 13P','Очки солнцезащитные','/data/6fd9bc819e8c47e79c73c173fb67031e_500x500.jpg',4400.00,0),(50,'2020-06-11 17:38:55','2020-06-11 17:38:55','Elfspirit 1055 309','Очки солнцезащитные','/data/0e4c53ed0ef471f00c040a39b3b92880_500x500.jpg',3600.00,0);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-12 21:28:41
