-- MySQL dump 10.13  Distrib 8.0.31, for macos13.0 (arm64)
--
-- Host: localhost    Database: guestbook
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `user_book`
--

DROP TABLE IF EXISTS `user_book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_book` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `message_text` varchar(2000) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `message_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_book`
--

LOCK TABLES `user_book` WRITE;
/*!40000 ALTER TABLE `user_book` DISABLE KEYS */;
INSERT INTO `user_book` VALUES (2,'','7450399485','alex@gmail.com','resident','','','2022-12-29 12:09:18'),(3,'','7450399485','alex@gmail.com','resident','','','2022-12-29 12:16:54'),(4,'','7450399486','alex2@gmail.com','foreigner','hello','','2022-12-29 12:19:01'),(5,'Nick','7450399488','dfjghk@gmail.com','resident','Hello','','2022-12-29 12:23:35'),(6,'Sam','375291234567','sam@gmail.com','resident','hello','','2022-12-29 12:38:36'),(7,'Nickolaus','34562862682','nostar@kdsgh.com','foreigner','ksdfhgsdos','','2022-12-29 14:06:49'),(8,'Lima','224572057','fnbdkbnkd@sdfs.com','resident','Hello','','2022-12-29 14:19:16'),(9,'Nickas','2386593562','skru4@dvs.com','resident','skbkbsobrebv','','2022-12-29 14:20:51'),(10,'Nick','7450399485','aliaksta@gmail.com','foreigner','vjvjvkvjvjkk','','2022-12-29 14:22:39'),(11,'Aleksei','7450399486','ikta@gmail.com','resident','vjvjvkvkvk','','2022-12-29 14:25:17'),(12,'Nick','7450399485','alihta@gmail.com','resident','ydvtydyvtd','','2022-12-29 14:28:07'),(13,'Aleksei','7450399485','dsjbfvso@gmail.com','foreigner','sjbvsbvk','','2022-12-29 14:41:10'),(14,'Aleks','7450399485','sagasd@dfds.com','resident','skdnbfsldnblds','','2022-12-29 15:01:41'),(15,'sdgsg','7450399485','ssgfsgs@dgdg.com','resident','sdbsbs','','2022-12-29 15:10:53'),(16,'Aleksei','7450399485','dsigvsigisg@gmail.com','resident','sdbs bfgbdfbd','/','2022-12-29 15:14:08'),(17,'sjbgksjg','7450399485','sdkffslkgso@sdjgbf.com','foreigner','dkfglskbs','','2022-12-29 15:22:50'),(18,'Aleksei','7450399485','jsdkgfdakg@sjdgf.com','resident','dsfgbfslbgls','','2022-12-29 15:27:49');
/*!40000 ALTER TABLE `user_book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_messages`
--

DROP TABLE IF EXISTS `user_messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_messages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL,
  `message_text` varchar(2000) NOT NULL,
  `message_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_messages`
--

LOCK TABLES `user_messages` WRITE;
/*!40000 ALTER TABLE `user_messages` DISABLE KEYS */;
INSERT INTO `user_messages` VALUES (1,'adam','message_1','2022-12-09 14:46:31'),(2,'sam','message_2','2022-12-10 14:46:31'),(3,'amy','message_3','2022-12-11 14:46:31'),(4,'john','message_4','2022-12-13 14:46:31'),(5,'mary','message_5','2022-12-14 14:46:31'),(6,'sandy','message_6','2022-12-14 15:46:31'),(7,'elena','message_7','2022-12-14 18:46:31'),(8,'ivan','message_8','2022-12-14 20:46:31'),(9,'Aleksei','hello','2022-12-24 13:14:34'),(10,'Nick','Wow','2022-12-24 13:25:01'),(12,'Mike','string','2022-12-24 16:30:52');
/*!40000 ALTER TABLE `user_messages` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-29 17:31:28
