-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: notes_project_db_test
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (4,'2014_10_12_000000_create_users_table',1),(5,'2014_10_12_100000_create_password_resets_table',1),(6,'2017_08_09_015311_create_notes_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notes_user_id_foreign` (`user_id`),
  CONSTRAINT `notes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notes`
--

LOCK TABLES `notes` WRITE;
/*!40000 ALTER TABLE `notes` DISABLE KEYS */;
INSERT INTO `notes` VALUES (1,'Corporis qui pariatur dolore aut qui eligendi voluptas. Consectetur autem nostrum ex. Consequatur asperiores impedit molestiae rerum rerum earum. Amet nisi numquam molestias minus laudantium provident.',1,'2017-08-10 03:27:22','2017-08-10 03:27:22'),(2,'Officiis mollitia non debitis velit. Et et ipsa et facere repudiandae consequatur voluptatem aliquam. Nobis debitis aperiam maiores dolores et.',1,'2017-08-10 03:27:22','2017-08-10 03:27:22'),(3,'Et quos culpa voluptatem et delectus assumenda. Doloribus saepe modi et. Et cum ad aperiam magnam commodi.',1,'2017-08-10 03:27:22','2017-08-10 03:27:22'),(4,'Voluptates natus non consequatur possimus ut iure dolorem. Autem quisquam libero quis atque eligendi natus quia. Nesciunt quaerat velit dignissimos accusamus.',1,'2017-08-10 03:27:22','2017-08-10 03:27:22'),(5,'Quam rerum voluptas hic iusto at at. In expedita velit corporis et.',1,'2017-08-10 03:27:22','2017-08-10 03:27:22'),(6,'Non tempora exercitationem excepturi voluptates. Illum quos aliquid distinctio ut nemo dolores et magnam. Temporibus omnis et aut excepturi. Minima vel fuga porro in.',1,'2017-08-10 03:27:22','2017-08-10 03:27:22'),(7,'Dicta provident tempora consequatur sint dolores. Exercitationem ratione ea occaecati in quia laborum odit. Enim rem ut veritatis.',2,'2017-08-10 03:27:22','2017-08-10 03:27:22'),(8,'Ab officiis voluptas qui sed rerum autem iste. Nemo unde ut qui quo. Quas reiciendis illo enim voluptatem et architecto autem. At saepe cumque qui rem.',2,'2017-08-10 03:27:22','2017-08-10 03:27:22'),(9,'Inventore perspiciatis unde maxime modi dicta eius. Tempore fuga culpa laborum quos repellendus et. Recusandae voluptatem necessitatibus enim debitis aperiam ipsa. Qui recusandae voluptas nesciunt id distinctio.',1,'2017-08-10 03:27:22','2017-08-10 03:27:22'),(10,'Tim\'s first note test!\r\nNew line',2,'2017-08-10 03:28:24','2017-08-10 12:13:36'),(13,'Tacos aren\'t just for Tuesdays',1,'2017-08-10 12:19:32','2017-08-10 12:19:32'),(14,'I agree with you about the tacos, Greg!',2,'2017-08-10 12:20:38','2017-08-10 12:20:38');
/*!40000 ALTER TABLE `notes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Greg','greg@test.com','$2y$10$dHNWkP.x61phVYz1SF604e39ACTCcCqDzBnZln/B7mbU0okS6cE0q','2tk2jptqNN4Of1wS65u6FRhEN2Zu9twyKg2Fju61faPnlt6HW9fDWeDtX4xT','2017-08-10 03:27:21','2017-08-10 03:27:21'),(2,'Tim','tim@test.com','$2y$10$v5qrQ438SujGljZS4AN.rOf0FB6kY.VmMLIf10yPmudZ3nfMm78he','ibLijH0GXghtCjAmMdh2sIRQ188SXYQ3ErfhFdIXZ41dNDe5mzI3USTZWTrg','2017-08-10 03:27:22','2017-08-10 03:27:22');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-10 12:25:27
