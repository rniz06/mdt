CREATE DATABASE  IF NOT EXISTS `mdt` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `mdt`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mdt
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `addresses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
INSERT INTO `addresses` VALUES (1,'TIC','2024-06-25 23:41:58','2024-06-25 23:41:58'),(2,'TRANSITO','2024-06-25 23:41:58','2024-06-25 23:41:58'),(3,'TRANSITO-PMT','2024-06-25 23:41:58','2024-06-25 23:41:58'),(4,'SECRETARIA DE LA JUNTA','2024-06-25 23:41:58','2024-06-25 23:41:58'),(5,'JUZGADO DE FALTAS','2024-06-25 23:41:58','2024-06-25 23:41:58'),(6,'MECIP','2024-06-25 23:41:58','2024-06-25 23:41:58'),(7,'UAIP','2024-06-25 23:41:58','2024-06-25 23:41:58'),(8,'ASESORIA JURIDICA','2024-06-25 23:41:58','2024-06-25 23:41:58'),(9,'SECRETARIA PRIVADA','2024-06-25 23:41:58','2024-06-25 23:41:58'),(10,'AUDITORIA INTERNA','2024-06-25 23:41:58','2024-06-25 23:41:58'),(11,'UOC','2024-06-25 23:41:58','2024-06-25 23:41:58'),(12,'DIRECCION GRAL. ADM. Y FINANZAS','2024-06-25 23:41:58','2024-06-25 23:41:58'),(13,'TALENTO HUMANO','2024-06-25 23:41:58','2024-06-25 23:41:58'),(14,'PREVENCION DE ADICCIONES','2024-06-25 23:41:58','2024-06-25 23:41:58'),(15,'MUJER','2024-06-25 23:41:58','2024-06-25 23:41:58'),(16,'ADULTOS MAYORES','2024-06-25 23:41:58','2024-06-25 23:41:58'),(17,'DISCAPACIDAD','2024-06-25 23:41:58','2024-06-25 23:41:58'),(18,'ASISTENCIA SOCIAL','2024-06-25 23:41:58','2024-06-25 23:41:58'),(19,'TURISMO','2024-06-25 23:41:58','2024-06-25 23:41:58'),(20,'CODENI','2024-06-25 23:41:58','2024-06-25 23:41:58'),(21,'SALUD','2024-06-25 23:41:58','2024-06-25 23:41:58'),(22,'ARTES','2024-06-25 23:41:58','2024-06-25 23:41:58'),(23,'CULTURA','2024-06-25 23:41:58','2024-06-25 23:41:58'),(24,'JUVENTUD','2024-06-25 23:41:58','2024-06-25 23:41:58'),(25,'DEPORTES','2024-06-25 23:41:58','2024-06-25 23:41:58'),(26,'CATASTRO','2024-06-25 23:41:58','2024-06-25 23:41:58'),(27,'SEDECO','2024-06-25 23:41:58','2024-06-25 23:41:58'),(28,'EDUCACION','2024-06-25 23:41:58','2024-06-25 23:41:58'),(29,'COMISIONES VECINALES','2024-06-25 23:41:58','2024-06-25 23:41:58'),(30,'OBRAS','2024-06-25 23:41:58','2024-06-25 23:41:58'),(31,'MEDIO AMBIENTE','2024-06-25 23:41:58','2024-06-25 23:41:58'),(32,'DANZA','2024-06-25 23:41:58','2024-06-25 23:41:58'),(33,'TERRITORIO SOCIAL','2024-06-25 23:41:58','2024-06-25 23:41:58'),(34,'MIPYMES','2024-06-25 23:41:58','2024-06-25 23:41:58');
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fine_batches`
--

DROP TABLE IF EXISTS `fine_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fine_batches` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `boleta_inicial` varchar(191) NOT NULL,
  `boleta_final` varchar(191) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `created_by` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fine_batches_user_id_foreign` (`user_id`),
  KEY `fine_batches_created_by_foreign` (`created_by`),
  CONSTRAINT `fine_batches_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `fine_batches_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fine_batches`
--

LOCK TABLES `fine_batches` WRITE;
/*!40000 ALTER TABLE `fine_batches` DISABLE KEYS */;
INSERT INTO `fine_batches` VALUES (1,'0010001','0010010',2,1,'2024-06-25 23:46:41','2024-06-25 23:46:41'),(2,'0010011','0010020',3,1,'2024-06-26 00:15:05','2024-06-26 00:15:05');
/*!40000 ALTER TABLE `fine_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fines`
--

DROP TABLE IF EXISTS `fines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fines` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `codigo_multa` varchar(191) DEFAULT NULL,
  `n_boleta` varchar(191) DEFAULT NULL,
  `vehiculo` varchar(191) DEFAULT NULL,
  `chapa_vehiculo` varchar(191) DEFAULT NULL,
  `lugar` varchar(191) DEFAULT NULL,
  `descripcion` varchar(191) DEFAULT NULL,
  `fecha_infraccion` datetime DEFAULT NULL,
  `conductor` varchar(191) DEFAULT NULL,
  `conductor_ci` varchar(191) DEFAULT NULL,
  `conductor_municipio` varchar(191) DEFAULT NULL,
  `propietario` varchar(191) DEFAULT NULL,
  `propietario_ci` varchar(191) DEFAULT NULL,
  `state` enum('Generado','Cargado','Pagado','Anulado') NOT NULL DEFAULT 'Generado',
  `cargado_el` datetime DEFAULT NULL,
  `mot_anulacion` varchar(191) DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `cargado_por` bigint(20) unsigned DEFAULT NULL,
  `generate_by` bigint(20) unsigned DEFAULT NULL,
  `anulado_por` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fines_codigo_multa_unique` (`codigo_multa`),
  UNIQUE KEY `fines_n_boleta_unique` (`n_boleta`),
  KEY `fines_user_id_foreign` (`user_id`),
  KEY `fines_cargado_por_foreign` (`cargado_por`),
  KEY `fines_generate_by_foreign` (`generate_by`),
  KEY `fines_anulado_por_foreign` (`anulado_por`),
  CONSTRAINT `fines_anulado_por_foreign` FOREIGN KEY (`anulado_por`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `fines_cargado_por_foreign` FOREIGN KEY (`cargado_por`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `fines_generate_by_foreign` FOREIGN KEY (`generate_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  CONSTRAINT `fines_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fines`
--

LOCK TABLES `fines` WRITE;
/*!40000 ALTER TABLE `fines` DISABLE KEYS */;
INSERT INTO `fines` VALUES (1,'D68393B008','0010001','kmzsdvnso','aosdnfvowandv','oanfvns','vconasdvona',NULL,NULL,NULL,NULL,NULL,NULL,'Cargado','2024-06-25 20:17:05',NULL,2,1,1,NULL,'2024-06-25 23:46:41','2024-06-26 00:17:05'),(2,'F235C636A6','0010002',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,2,NULL,1,NULL,'2024-06-25 23:46:41','2024-06-25 23:46:41'),(3,'01CFE58881','0010003',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,2,NULL,1,NULL,'2024-06-25 23:46:41','2024-06-25 23:46:41'),(4,'6420B1363A','0010004',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,2,NULL,1,NULL,'2024-06-25 23:46:41','2024-06-25 23:46:41'),(5,'F68EF8D1AA','0010005',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,2,NULL,1,NULL,'2024-06-25 23:46:41','2024-06-25 23:46:41'),(6,'BE177EB379','0010006',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,2,NULL,1,NULL,'2024-06-25 23:46:41','2024-06-25 23:46:41'),(7,'3BCB8BC3D4','0010007',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,2,NULL,1,NULL,'2024-06-25 23:46:41','2024-06-25 23:46:41'),(8,'7AC6E866D1','0010008',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,2,NULL,1,NULL,'2024-06-25 23:46:41','2024-06-25 23:46:41'),(9,'FB245A9B0B','0010009',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,2,NULL,1,NULL,'2024-06-25 23:46:41','2024-06-25 23:46:41'),(10,'AD5B483E90','0010010',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,2,NULL,1,NULL,'2024-06-25 23:46:41','2024-06-25 23:46:41'),(11,'3DAB0B3E14','0010011',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,3,NULL,1,NULL,'2024-06-26 00:15:05','2024-06-26 00:15:05'),(12,'7B89875669','0010012',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,3,NULL,1,NULL,'2024-06-26 00:15:05','2024-06-26 00:15:05'),(13,'259DF347D5','0010013',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,3,NULL,1,NULL,'2024-06-26 00:15:05','2024-06-26 00:15:05'),(14,'4225F83BEB','0010014',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,3,NULL,1,NULL,'2024-06-26 00:15:05','2024-06-26 00:15:05'),(15,'D6BDE8214C','0010015',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,3,NULL,1,NULL,'2024-06-26 00:15:05','2024-06-26 00:15:05'),(16,'625142F0F5','0010016',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,3,NULL,1,NULL,'2024-06-26 00:15:05','2024-06-26 00:15:05'),(17,'B0A64364DB','0010017',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,3,NULL,1,NULL,'2024-06-26 00:15:05','2024-06-26 00:15:05'),(18,'423BF34C31','0010018',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,3,NULL,1,NULL,'2024-06-26 00:15:05','2024-06-26 00:15:05'),(19,'51616164E8','0010019',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,3,NULL,1,NULL,'2024-06-26 00:15:05','2024-06-26 00:15:05'),(20,'500782C7CE','0010020',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Generado',NULL,NULL,3,NULL,1,NULL,'2024-06-26 00:15:05','2024-06-26 00:15:05');
/*!40000 ALTER TABLE `fines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2014_10_12_100000_create_password_resets_table',1),(4,'2019_08_19_000000_create_failed_jobs_table',1),(5,'2019_12_14_000001_create_personal_access_tokens_table',1),(6,'2024_05_03_005934_create_addresses_table',1),(7,'2024_05_16_205146_create_permission_tables',1),(8,'2024_05_21_211007_add_address_id_to_users_table',1),(9,'2024_06_12_074639_create_fines_table',1),(10,'2024_06_12_075629_create_fine_batches_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) unsigned NOT NULL,
  `model_type` varchar(191) NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(2,'App\\Models\\User',2),(2,'App\\Models\\User',3);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'usuarios-listar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(2,'usuarios-crear','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(3,'usuarios-ver','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(4,'usuarios-editar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(5,'usuarios-eliminar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(6,'roles-listar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(7,'roles-crear','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(8,'roles-ver','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(9,'roles-editar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(10,'roles-eliminar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(11,'permisos-listar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(12,'permisos-crear','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(13,'permisos-ver','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(14,'permisos-editar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(15,'permisos-eliminar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(16,'generar-boletas-listar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(17,'generar-boletas-crear','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(18,'generar-boletas-ver','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(19,'generar-boletas-editar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(20,'generar-boletas-eliminar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(21,'multas-listar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(22,'multas-crear','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(23,'multas-ver','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(24,'multas-editar','web','2024-06-25 23:41:57','2024-06-25 23:41:57'),(25,'multas-eliminar','web','2024-06-25 23:41:57','2024-06-25 23:41:57');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) unsigned NOT NULL,
  `role_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(21,2),(22,1),(22,2),(23,1),(23,2),(24,1),(24,2),(25,1);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `guard_name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Admin','web','2024-06-25 23:41:58','2024-06-25 23:41:58'),(2,'TRANSITO-PMT','web','2024-06-25 23:41:58','2024-06-25 23:41:58');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `address_id` bigint(20) unsigned DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_address_id_foreign` (`address_id`),
  CONSTRAINT `users_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`) ON DELETE SET NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Administrador','Administrador','rniz@nemby.gov.py',NULL,NULL,'$2y$12$xvJo59930De//T/6vMh3D.SjKZ.DNG0FbmCqNXXwn4qEuGqooH/Xm',NULL,'2024-06-25 23:41:58','2024-06-25 23:41:58'),(2,'Juan Perez','juan.perez','jperez@nemby.gov.py',3,NULL,'$2y$12$seCmT8vMsG3JJbh6sFgMiOTNyvvAJHN82RooDZ4Q9FBeDqD04slgC',NULL,'2024-06-25 23:41:58','2024-06-25 23:41:58'),(3,'Maria Gomez','maria.gomez','mgomez@nemby.gov.py',3,NULL,'$2y$12$8DFQoqhSvYqMZqGGWOh9oOuNR3wHtsps6maItLmhKpIH3sznkKKfe',NULL,'2024-06-25 23:41:58','2024-06-25 23:41:58');
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

-- Dump completed on 2024-06-25 20:19:05
