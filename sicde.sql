-- MySQL dump 10.16  Distrib 10.1.16-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: sicde
-- ------------------------------------------------------
-- Server version	10.1.16-MariaDB

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
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `administrador` (
  `clave` int(11) NOT NULL AUTO_INCREMENT,
  `cve_datos` int(11) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `datos_domicilio` int(11) NOT NULL,
  PRIMARY KEY (`clave`),
  KEY `cve_datos` (`cve_datos`),
  KEY `datos_domicilio` (`datos_domicilio`),
  CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`cve_datos`) REFERENCES `datos_personales` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `administrador_ibfk_2` FOREIGN KEY (`datos_domicilio`) REFERENCES `domicilio` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1120705 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `administrador`
--

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;
INSERT INTO `administrador` VALUES (1120704,5,'402a793228a40d386e81736aff5b8958',5);
/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno`
--

DROP TABLE IF EXISTS `alumno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno` (
  `clave` int(11) NOT NULL AUTO_INCREMENT,
  `cve_carrera` int(11) NOT NULL,
  `cve_datos` int(11) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `datos_domicilio` int(11) NOT NULL,
  PRIMARY KEY (`clave`),
  KEY `cve_carrera` (`cve_carrera`),
  KEY `cve_datos` (`cve_datos`),
  KEY `datos_domicilio` (`datos_domicilio`),
  CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`cve_carrera`) REFERENCES `carrera` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`cve_datos`) REFERENCES `datos_personales` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`datos_domicilio`) REFERENCES `domicilio` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (1,1,1,'e8479a1c033f8badc96f824410574c33',1),(2,1,2,'c81e728d9d4c2f636f067f89cc14862c',2),(3,1,3,'eccbc87e4b5ce2fe28308fd9f2a7baf3',3),(4,1,11,'a87ff679a2f3e71d9181a67b7542122c',11),(5,5,12,'e4da3b7fbbce2345d777',12),(6,5,15,'1679091c5a880faf6fb5e6087eb1b2dc',15),(7,3,16,'8f14e45fceea167a5a36dedd4bea2543',16);
/*!40000 ALTER TABLE `alumno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumno_x_semestre`
--

DROP TABLE IF EXISTS `alumno_x_semestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumno_x_semestre` (
  `cve_alumno` int(11) NOT NULL,
  `cve_semestre` int(11) NOT NULL,
  `situacion` varchar(20) DEFAULT NULL,
  KEY `cve_alumno` (`cve_alumno`),
  KEY `cve_semestre` (`cve_semestre`),
  CONSTRAINT `alumno_x_semestre_ibfk_1` FOREIGN KEY (`cve_alumno`) REFERENCES `alumno` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `alumno_x_semestre_ibfk_2` FOREIGN KEY (`cve_semestre`) REFERENCES `semestre` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno_x_semestre`
--

LOCK TABLES `alumno_x_semestre` WRITE;
/*!40000 ALTER TABLE `alumno_x_semestre` DISABLE KEYS */;
INSERT INTO `alumno_x_semestre` VALUES (1,1,NULL),(1,2,NULL),(2,2,NULL),(2,3,NULL),(3,2,NULL),(3,3,NULL),(4,4,NULL),(4,5,NULL),(1,3,NULL),(3,5,NULL),(1,6,NULL),(1,4,NULL);
/*!40000 ALTER TABLE `alumno_x_semestre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `alumnos_x_grupo`
--

DROP TABLE IF EXISTS `alumnos_x_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alumnos_x_grupo` (
  `cve_grupo` int(11) NOT NULL,
  `cve_alumno` int(11) NOT NULL,
  `cve_calificacion` int(11) NOT NULL,
  `cve_semestre` int(11) NOT NULL,
  KEY `cve_alumno` (`cve_alumno`),
  KEY `cve_calificacion` (`cve_calificacion`),
  KEY `cve_grupo` (`cve_grupo`),
  KEY `cve_semestre` (`cve_semestre`),
  CONSTRAINT `alumnos_x_grupo_ibfk_1` FOREIGN KEY (`cve_alumno`) REFERENCES `alumno` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `alumnos_x_grupo_ibfk_2` FOREIGN KEY (`cve_calificacion`) REFERENCES `calificacion` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `alumnos_x_grupo_ibfk_3` FOREIGN KEY (`cve_grupo`) REFERENCES `grupo` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `alumnos_x_grupo_ibfk_4` FOREIGN KEY (`cve_semestre`) REFERENCES `semestre` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumnos_x_grupo`
--

LOCK TABLES `alumnos_x_grupo` WRITE;
/*!40000 ALTER TABLE `alumnos_x_grupo` DISABLE KEYS */;
INSERT INTO `alumnos_x_grupo` VALUES (2,1,12,1),(6,1,13,1),(7,1,14,2),(9,1,15,2),(12,2,16,2),(11,2,17,2),(10,2,18,3),(14,2,19,3),(2,3,20,2),(7,3,21,2),(10,3,22,3),(14,3,23,3),(12,4,24,4),(7,4,25,4),(9,4,26,5),(8,1,27,3),(13,3,28,5),(11,1,29,6),(12,1,30,4);
/*!40000 ALTER TABLE `alumnos_x_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calificacion`
--

DROP TABLE IF EXISTS `calificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calificacion` (
  `clave` int(11) NOT NULL AUTO_INCREMENT,
  `ordinario` varchar(5) DEFAULT NULL,
  `extra` varchar(5) DEFAULT NULL,
  `titulo` varchar(5) DEFAULT NULL,
  `aprobado` int(11) DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calificacion`
--

LOCK TABLES `calificacion` WRITE;
/*!40000 ALTER TABLE `calificacion` DISABLE KEYS */;
INSERT INTO `calificacion` VALUES (12,'5.0','8.5','--',1),(13,'8.5','--','--',1),(14,'8.0','--','--',1),(15,'5.9','5.9','9.0',1),(16,'9.1','--','--',1),(17,'5.9','6.1','--',1),(18,'7.6','--','--',1),(19,'9.0','--','--',1),(20,'5.0','6.0','--',1),(21,'5.0','9.0','--',1),(22,'--','--','6.0',1),(23,'7.5','--','--',1),(24,'--','7.5','--',1),(25,'10.0','--','--',1),(26,'8.0','--','--',1),(27,'7.5','--','--',1),(28,'8.0','--','--',1),(29,'5.0','7.5','--',1),(30,'5.9','--','--',0);
/*!40000 ALTER TABLE `calificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera` (
  `clave` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'Ingeniería en Computación'),(2,'Ingeniería Civil'),(3,'Ingeniería Mecánica'),(4,'Ingeniería Electrónica'),(5,'Ingeniería en Sistemas Energéticos Sustentables');
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `datos_personales`
--

DROP TABLE IF EXISTS `datos_personales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `datos_personales` (
  `clave` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `paterno` varchar(50) DEFAULT NULL,
  `materno` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `genero` varchar(1) DEFAULT NULL,
  `RFC` varchar(10) DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `curp` varchar(20) DEFAULT NULL,
  `correo_personal` varchar(50) DEFAULT NULL,
  `corre_institucional` varchar(50) DEFAULT NULL,
  `pais_nacimiento` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `municipio` varchar(30) DEFAULT NULL,
  `tipo_sangre` varchar(4) DEFAULT NULL,
  `contacto_emergencia` varchar(100) DEFAULT NULL,
  `clave_imss` varchar(25) DEFAULT NULL,
  `grupo_indigena` varchar(30) DEFAULT NULL,
  `dialecto_indigena` varchar(3) DEFAULT NULL,
  `foto` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_personales`
--

LOCK TABLES `datos_personales` WRITE;
/*!40000 ALTER TABLE `datos_personales` DISABLE KEYS */;
INSERT INTO `datos_personales` VALUES (1,'Estefanía','Romero','López','1992-02-16','F','RELE920216','México','RELE920216MMCLMS13','coso@dominio.com',NULL,'México','México','Neza','A+','Antonia López','130549510-74','No','No','1.jpg'),(2,'Lalo','Beltran','Dominguez','1993-07-08','M','BEDL930708','México','BEDL930708HMCLMS13','coso@dominio.com',NULL,'México','México','Toluca','O+','Susana Ma. del Pilar Dominguez Villalva','130540-08','No','No','avatar04.png'),(3,'Vyasa','Ituarte','Correa','1994-01-23','M','RIVC940226','México','RIVC940226HMCLMS13','coso@dominio.com',NULL,'México','México','Valle de Bravo','O+','Emilio Ituarte','130510-74','Si','Si','avatar04.png'),(5,'Silvia Edith','Albarrán','Trujillo','1965-05-16','M','SEAT650516','México','SEAT650516MMCLMS13','root@admin.com',NULL,'México','México','Toluca','O+','Silvia Edith','130510-52','No','No','avatar04.png'),(7,'Everardo','Granados','Flores','2084-06-05','M','EGFL930708','México','EGFL930708HMCLMS04','profe@miau.com',NULL,'México','México','Toluca','O+','Su gfita','130510-74','No','No','7.jpg'),(9,'Juan Carlos','Matadamas','Gómez','1965-06-05','M','MATA650605','México','SEAT650516HMCLMS13','profe@admin.com',NULL,'México','México','Seminario','O-','Carol Leyva','130540-08','No','No','avatar04.png'),(10,'Sara','Vera','Noguez','1962-04-05','M','SVNN620405','México','SVNN620405MMCLMS13','sara@bati.com',NULL,'México','Nuevo León','León','A+','Francisco Chávez','130510-52','No','No','avatar04.png'),(11,'Itzel','Mercado','Salas','1991-05-09','F','CICF700725','México','CICF700725HMCLMS13','coso@dominio.com',NULL,'México','México','Toluca','O+','Itzel Salas','130510-52','No','No','avatar04.png'),(12,'Edgar','Rodriguez','Rodriguez','1995-05-04','M','RERO950504','México','RERO950504HMCLMS01','edgar@dominio.com',NULL,'México','México','Toluca','A+','Edgar R.','130540-08','No','No','avatar04.png'),(13,'Francisco Ignacio','Chavez','Castañeda','1970-07-21','M','CFIC700721','México','CFIC700721HMCLMS00','coso@dominio.com',NULL,'México','CDMX','Miguel Hidalgo','B+','Sara Vera Noguez','130540-11','No','No','avatar04.png'),(14,'Armando Noé','Lopez','Lopez','1985-08-25','M','LOAL850825','M7','LOAL850825HMCLMS15','profe@ice.com',NULL,'México','México','Toluca','A+','Armando López','130540-11','No','No','avatar04.png'),(15,'Carlos Eduardo','Quintero','Valdés','1992-02-05','M','QEVC920502','México','QEVC920502HMCLMS13','carlos@correo.com',NULL,'México','México','Toluca','A-','Tía Paty','467840-15','Si','Si','avatar04.png'),(16,'Grecia','Vallejo','del Río','1991-05-06','F','GVDR910506','México','GVDR910506MMCLMS13','grecia@correo.com',NULL,'México','México','Valle de Bravo','O-','Grecia del Río','130540-11','No','No','avatar2.png');
/*!40000 ALTER TABLE `datos_personales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `domicilio`
--

DROP TABLE IF EXISTS `domicilio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `domicilio` (
  `clave` int(11) NOT NULL AUTO_INCREMENT,
  `calle` varchar(100) DEFAULT NULL,
  `colonia` varchar(30) DEFAULT NULL,
  `cp` int(11) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `pais` varchar(30) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `municipio` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domicilio`
--

LOCK TABLES `domicilio` WRITE;
/*!40000 ALTER TABLE `domicilio` DISABLE KEYS */;
INSERT INTO `domicilio` VALUES (1,'Jose María Mata #300','Juarez',51265,'','México','México','Toluca'),(2,'','',0,'','','',''),(3,'','',0,'','','',''),(5,'','',0,'','','',''),(7,'','',0,'','','',''),(9,'','',0,'','','',''),(10,'','',0,'','','',''),(11,'','',0,'','','',''),(12,'','',0,'','','',''),(13,'Quintana Roo Sur #708','Morelos',50120,'','México','México','Toluca'),(14,'','',0,'','','',''),(15,'','',0,'','','',''),(16,'','',0,'','','','');
/*!40000 ALTER TABLE `domicilio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grupo`
--

DROP TABLE IF EXISTS `grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grupo` (
  `clave` int(11) NOT NULL AUTO_INCREMENT,
  `cve_profesor` varchar(30) NOT NULL,
  `cve_materia` int(11) NOT NULL,
  `capacidad` int(11) DEFAULT NULL,
  `horario` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`clave`),
  KEY `cve_materia` (`cve_materia`),
  KEY `cve_profesor` (`cve_profesor`),
  CONSTRAINT `grupo_ibfk_1` FOREIGN KEY (`cve_materia`) REFERENCES `materia` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `grupo_ibfk_2` FOREIGN KEY (`cve_profesor`) REFERENCES `profesor` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
INSERT INTO `grupo` VALUES (2,'EGFL930708',2,30,'Miércoles,7 : 00 PM,9 : 00 PM,Viernes,5 : 00 PM,8 : 00 PM,'),(5,'MATA650605',2,25,'Lunes,07 : 00,09 : 00,Miércoles,07 : 00,09 : 00,Viernes,07 : 00,09 : 00,'),(6,'SVNN620405',1,25,'Lunes,07 : 00,09 : 00,Miércoles,07 : 00,09 : 00,'),(7,'LOAL850825',4,20,'Lunes,09 : 00,11 : 00,Viernes,09 : 00,11 : 00,'),(8,'MATA650605',3,30,'Lunes,07 : 00,09 : 00,Miércoles,07 : 00,09 : 00,Viernes,07 : 00,09 : 00,'),(9,'LOAL850825',8,25,'Martes,13 : 00,15 : 00,Jueves,07 : 00,09 : 00,'),(10,'CFIC700721',1,30,'Lunes,09 : 00,10 : 30,Miércoles,09 : 00,10 : 30,Viernes,09 : 00,09 : 30,'),(11,'CFIC700721',4,20,'Martes,19 : 00,21 : 00,Jueves,19 : 00,21 : 00,'),(12,'EGFL930708',6,20,'Sabado,09 : 00,11 : 00,'),(13,'EGFL930708',5,20,'Viernes,10 : 00,13 : 00,'),(14,'MATA650605',7,30,'Lunes,07 : 00,08 : 30,Miércoles,07 : 00,09 : 00,Viernes,07 : 00,08 : 30,');
/*!40000 ALTER TABLE `grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia`
--

DROP TABLE IF EXISTS `materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materia` (
  `clave` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `hrs_teoricas` int(11) DEFAULT NULL,
  `hrs_practicas` int(11) DEFAULT NULL,
  `creditos` int(11) DEFAULT NULL,
  `cve_carrera` int(11) NOT NULL,
  PRIMARY KEY (`clave`),
  KEY `cve_carrera` (`cve_carrera`),
  CONSTRAINT `materia_ibfk_1` FOREIGN KEY (`cve_carrera`) REFERENCES `carrera` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
INSERT INTO `materia` VALUES (1,'POO',2,4,8,1),(2,'Tipos de Sistemas Operativos',2,2,6,1),(3,'Transmisión de Datos',4,0,8,1),(4,'Electrónica 1',2,2,6,4),(5,'Sociología',3,0,6,1),(6,'Sociedad e ingeniería',3,0,6,2),(7,'ICCSO',3,1,7,1),(8,'Termodinámica',4,0,8,4);
/*!40000 ALTER TABLE `materia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesor` (
  `clave` varchar(30) NOT NULL,
  `cve_datos` int(11) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `datos_domicilio` int(11) NOT NULL,
  PRIMARY KEY (`clave`),
  KEY `cve_datos` (`cve_datos`),
  KEY `datos_domicilio` (`datos_domicilio`),
  CONSTRAINT `profesor_ibfk_1` FOREIGN KEY (`cve_datos`) REFERENCES `datos_personales` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `profesor_ibfk_2` FOREIGN KEY (`datos_domicilio`) REFERENCES `domicilio` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
INSERT INTO `profesor` VALUES ('CFIC700721',13,'38cb54c850626765d5133892033290c1',13),('EGFL930708',7,'be71f2057975cf34d962710a7b58a184',7),('LOAL850825',14,'aac5db230057cb45f06616a1330a943f',14),('MATA650605',9,'6ea02346d1414418a321448e2b15658a',9),('SVNN620405',10,'0975ee5d768cb0e4c80167e2faf3a251',10);
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `semestre`
--

DROP TABLE IF EXISTS `semestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `semestre` (
  `clave` int(11) NOT NULL AUTO_INCREMENT,
  `anio` int(11) DEFAULT NULL,
  `letra` varbinary(1) DEFAULT NULL,
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semestre`
--

LOCK TABLES `semestre` WRITE;
/*!40000 ALTER TABLE `semestre` DISABLE KEYS */;
INSERT INTO `semestre` VALUES (1,2011,'A'),(2,2011,'B'),(3,2012,'A'),(4,2012,'B'),(5,2013,'A'),(6,2013,'B'),(7,2014,'A'),(8,2014,'B'),(9,2015,'A'),(10,2015,'B'),(11,2016,'A'),(12,2016,'B'),(13,2017,'A');
/*!40000 ALTER TABLE `semestre` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-26  2:24:58
