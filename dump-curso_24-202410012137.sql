-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: curso_24
-- ------------------------------------------------------
-- Server version	5.5.5-10.6.16-MariaDB-0ubuntu0.22.04.1

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
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Usuario` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` text NOT NULL,
  `excluido` tinyint(1) NOT NULL DEFAULT 0,
  `usuario_alteracao` varchar(100) NOT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` datetime NOT NULL DEFAULT '0001-01-01 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'02676390074','kevindebarbadeassis@gmail.com','1234',0,'aaaaa','2024-09-24 20:41:36','2024-09-24 20:52:17'),(2,'04522525222','emailsupimpa@gmail.com','1234',0,'aaaaa','2024-10-01 20:26:46','0001-01-01 00:00:00'),(3,'11111111111','emaildocabra@gmail.com','1234',0,'aaaa','2024-10-01 20:35:13','0001-01-01 00:00:00');
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `rua` varchar(512) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(9) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `complemento` varchar(512) DEFAULT NULL,
  `cidade` varchar(512) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `id_pessoa` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `endereco_pessoa_FK` (`id_pessoa`),
  CONSTRAINT `endereco_pessoa_FK` FOREIGN KEY (`id_pessoa`) REFERENCES `pessoa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'antonio dalla chiesa','borgo','197','95705500','ap','são sebastião do nordeste','JP',1);
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pessoa` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `excluido` tinyint(1) NOT NULL DEFAULT 0,
  `usuario_alteracao` varchar(100) NOT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` datetime NOT NULL DEFAULT '0001-01-01 00:00:00' ON UPDATE current_timestamp(),
  `nome` varchar(500) NOT NULL,
  `sobrenome` varchar(500) NOT NULL,
  `nome_completo` varchar(1000) NOT NULL,
  `sexo` enum('M','F','Outros') NOT NULL DEFAULT 'M',
  `cnpj` varchar(14) DEFAULT NULL,
  `tipo_pessoa` enum('J','F') NOT NULL DEFAULT 'F',
  `estado_civil` enum('Solteiro','Casado','Viuvo') NOT NULL DEFAULT 'Solteiro',
  `data_aniversario` datetime NOT NULL,
  `Id_usuario` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pessoa_Usuario_FK` (`Id_usuario`),
  CONSTRAINT `pessoa_Usuario_FK` FOREIGN KEY (`Id_usuario`) REFERENCES `Usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pessoa`
--

LOCK TABLES `pessoa` WRITE;
/*!40000 ALTER TABLE `pessoa` DISABLE KEYS */;
INSERT INTO `pessoa` VALUES (1,'04542585000','emaillegar@gmail.com',0,'25','2024-10-01 20:28:43','2024-10-01 20:52:00','carol','casdf','asdafsdg er','M','01151551151','F','Solteiro','2012-12-12 00:00:00',1),(2,'04141424222','dsfsdfs',0,'25','2024-10-01 20:28:50','2024-10-01 20:52:00','pedro','pereira','pedro pereira ','M','665656565','F','Solteiro','2012-12-12 00:00:00',2),(3,'12312312311','cepeéfe',0,'25','2024-10-01 20:41:49','2024-10-01 20:52:00','brumo','Lbelt','João pereira','M','1231231231233','F','Solteiro','2012-12-12 00:00:00',3);
/*!40000 ALTER TABLE `pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'curso_24'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-01 21:37:43
