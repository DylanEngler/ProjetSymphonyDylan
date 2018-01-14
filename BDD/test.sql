-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: test
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
-- Table structure for table `civilite`
--

DROP TABLE IF EXISTS `civilite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `civilite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_civilite` int(11) NOT NULL,
  `nom_moi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom_moi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_naissance_moi` datetime NOT NULL,
  `adresse_moi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numero_moi` int(11) NOT NULL,
  `mail_moi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `civilite`
--

LOCK TABLES `civilite` WRITE;
/*!40000 ALTER TABLE `civilite` DISABLE KEYS */;
INSERT INTO `civilite` VALUES (1,1,'Engler','Dylan','2013-07-27 00:00:00','7 route de Cardan 33410 Beguey',909090909,'dylan.engler@ynov.com');
/*!40000 ALTER TABLE `civilite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titreCommentaire` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texteCommentaire` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commentaire`
--

LOCK TABLES `commentaire` WRITE;
/*!40000 ALTER TABLE `commentaire` DISABLE KEYS */;
INSERT INTO `commentaire` VALUES (1,'Pas de Css','Je déteste ça'),(8,'Java JEE for ever','<3'),(9,'Java > symphony','<3 <3');
/*!40000 ALTER TABLE `commentaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `competence`
--

DROP TABLE IF EXISTS `competence`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `competence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_competence` int(11) NOT NULL,
  `nom_competence` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `competence`
--

LOCK TABLES `competence` WRITE;
/*!40000 ALTER TABLE `competence` DISABLE KEYS */;
INSERT INTO `competence` VALUES (1,1,'Programmation Java'),(3,2,'Programmation Python'),(4,3,'Programmation C#');
/*!40000 ALTER TABLE `competence` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exp_pro`
--

DROP TABLE IF EXISTS `exp_pro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exp_pro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ExpTitre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ExpLieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ExpDebut` datetime NOT NULL,
  `ExpFin` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exp_pro`
--

LOCK TABLES `exp_pro` WRITE;
/*!40000 ALTER TABLE `exp_pro` DISABLE KEYS */;
INSERT INTO `exp_pro` VALUES (1,'Opérateur service expédition','Grand chais de France à Landiras','2017-06-01 00:00:00','2017-09-01 00:00:00'),(2,'Technicien sur ligne','Grand chais de France à Landiras','2016-06-01 00:00:00','2016-09-01 00:00:00'),(3,'Ouvrier Viticole','Château REYNON à Beguey','2015-06-01 00:00:00','2015-07-31 00:00:00');
/*!40000 ALTER TABLE `exp_pro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `formation`
--

DROP TABLE IF EXISTS `formation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_formation` int(11) NOT NULL,
  `nom_formation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `datedebut_formation` datetime NOT NULL,
  `datefin_formation` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `formation`
--

LOCK TABLES `formation` WRITE;
/*!40000 ALTER TABLE `formation` DISABLE KEYS */;
INSERT INTO `formation` VALUES (1,1,'Ynov Bordeaux','2017-09-05 00:00:00','2013-01-01 00:00:00');
/*!40000 ALTER TABLE `formation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (44,'product 0','description product0.....',41),(45,'product 1','description product1.....',12),(46,'product 2','description product2.....',37),(47,'product 3','description product3.....',53),(48,'product 4','description product4.....',82),(49,'product 5','description product5.....',33),(50,'product 6','description product6.....',35),(51,'product 7','description product7.....',77),(52,'product 8','description product8.....',43),(53,'product 9','description product9.....',82),(54,'product 10','description product10.....',18),(55,'product 11','description product11.....',53),(56,'product 12','description product12.....',94),(57,'product 13','description product13.....',67),(58,'product 14','description product14.....',89),(59,'product 15','description product15.....',60),(60,'product 16','description product16.....',59),(61,'product 17','description product17.....',31),(62,'product 18','description product18.....',21),(63,'product 19','description product19.....',34),(64,'Mon premier produit','....',19.54),(65,'Mon premier produit','....',19.54),(66,'Mon premier produit','....',19.54),(67,'Dylan','généreux',0.1),(68,'etoile','e-girl',1000000);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'adminuser','adminuser','dylan.engler@ynov.com','dylan.engler@ynov.com',1,NULL,'$2y$13$ouRKFum6zMkqineQ0n3AJO0doCSspZ0ZbXZ6dVVRwA3NB7QRDMFx.','2017-11-20 16:22:33',NULL,NULL,'a:1:{i:0;s:16:\"ROLE_SUPER_ADMIN\";}'),(2,'user','user','user@ynov.com','user@ynov.com',1,NULL,'$2y$13$mOzV2HRr9YrGfER/Wcz2A.Gc.PHjhHLE/ilPe.SPnPgZ9upTUdZQS',NULL,NULL,NULL,'a:0:{}'),(3,'admin','admin','admin@ynov.com','admin@ynov.com',1,NULL,'$2y$13$jCDyClWHcExbIRwkRKb04.B1pzpHOuR7WhZAOMPdw8f/a4g9dbR9G','2018-01-13 11:19:43',NULL,NULL,'a:1:{i:0;s:10:\"ROLE_ADMIN\";}');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-14 12:26:46
