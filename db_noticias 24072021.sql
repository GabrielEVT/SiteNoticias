-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: db_noticias
-- ------------------------------------------------------
-- Server version	8.0.22

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
-- Table structure for table `tbl_categoria`
--

DROP TABLE IF EXISTS `tbl_categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_categoria` (
  `idcategoria` int NOT NULL AUTO_INCREMENT,
  `nomecategoria` varchar(35) NOT NULL,
  PRIMARY KEY (`idcategoria`),
  UNIQUE KEY `nomecategoria` (`nomecategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_categoria`
--

LOCK TABLES `tbl_categoria` WRITE;
/*!40000 ALTER TABLE `tbl_categoria` DISABLE KEYS */;
INSERT INTO `tbl_categoria` VALUES (2,'Ciência e Saúde'),(1,'Educação'),(3,'Tecnologia');
/*!40000 ALTER TABLE `tbl_categoria` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_noticia`
--

DROP TABLE IF EXISTS `tbl_noticia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_noticia` (
  `idnoticia` int NOT NULL AUTO_INCREMENT,
  `titulonoticia` varchar(50) NOT NULL,
  `conteudonoticia` varchar(200) NOT NULL,
  `fk_categoria` int NOT NULL,
  `imgnoticias` varchar(40) NOT NULL,
  PRIMARY KEY (`idnoticia`),
  KEY `fk_categoria` (`fk_categoria`),
  CONSTRAINT `tbl_noticia_ibfk_1` FOREIGN KEY (`fk_categoria`) REFERENCES `tbl_categoria` (`idcategoria`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_noticia`
--

LOCK TABLES `tbl_noticia` WRITE;
/*!40000 ALTER TABLE `tbl_noticia` DISABLE KEYS */;
INSERT INTO `tbl_noticia` VALUES (1,'Volta às aulas no segundo semestre','Em alguns locais, atividades presenciais serão retomadas pela primeira vez desde o início da pandemia. Veja o que se sabe sobre as redes pública e particular nos ensinos infantil, fundamental e médio.',1,'439b3ec0b9fc45d43dbdf6b62461fe13.jpg'),(2,'Pare tudo e respire fundo agora. Por quê?','Controlar sua respiração pode combater o estresse e até mesmo tornar a mente mais aguçada.\r\n',2,'a2bc5ced0a36ad7020b62ee2929a3602.jpg'),(3,'Drones usados na abertura das Olímpiadas de Tóquio','Show teve 1.824 drones controlados remotamente por computador. Movidos a eletricidade, aparelhos têm 4 hélices para se manterem no ar.',3,'cf63c61b194ef64e1c8e8ff60bbf4aaa.jpg'),(4,'Enem tem o menor número de inscritos desde 2005','Para confirmar a inscrição, era necessário o pagamento da taxa de R$ 85; inscrições confirmadas correspondem a 77,5% das iniciais. Ao todo, 68.891 farão prova no formato digital.',1,'ee9e154871db346ae43a3a8b9c9a5c61.jpg');
/*!40000 ALTER TABLE `tbl_noticia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'db_noticias'
--

--
-- Dumping routines for database 'db_noticias'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-07-24 22:01:24
