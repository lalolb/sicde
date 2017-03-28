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
  `password` varchar(20) NOT NULL,
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
INSERT INTO `administrador` VALUES (1120704,5,'1120704',5);
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
  `password` varchar(20) NOT NULL,
  `datos_domicilio` int(11) NOT NULL,
  PRIMARY KEY (`clave`),
  KEY `cve_carrera` (`cve_carrera`),
  KEY `cve_datos` (`cve_datos`),
  KEY `datos_domicilio` (`datos_domicilio`),
  CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`cve_carrera`) REFERENCES `carrera` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`cve_datos`) REFERENCES `datos_personales` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `alumno_ibfk_3` FOREIGN KEY (`datos_domicilio`) REFERENCES `domicilio` (`clave`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alumno`
--

LOCK TABLES `alumno` WRITE;
/*!40000 ALTER TABLE `alumno` DISABLE KEYS */;
INSERT INTO `alumno` VALUES (1,1,1,'1',1),(2,1,2,'2',2),(3,1,3,'3',3),(4,2,6,'4',6);
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calificacion`
--

LOCK TABLES `calificacion` WRITE;
/*!40000 ALTER TABLE `calificacion` DISABLE KEYS */;
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
  PRIMARY KEY (`clave`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `datos_personales`
--

LOCK TABLES `datos_personales` WRITE;
/*!40000 ALTER TABLE `datos_personales` DISABLE KEYS */;
INSERT INTO `datos_personales` VALUES (1,'Fany','Romer','Lopez','1992-02-16','F','RELE920216','México','RELE920216MMCLMS13','coso@dominio.com',NULL,'México','México','Toluca','O-','Antonia López','130549510-74','Si','No'),(2,'Lalo','Beltran','Dominguez','1993-07-08','M','BEDL930708','México','BEDL930708HMCLMS13','coso@dominio.com',NULL,'México','México','Toluca','O+','Susana Ma. del Pilar Dominguez Villalva','130540-08','No','No'),(3,'Vyasa','Ituarte','Correa','1994-01-23','M','RIVC940226','México','RIVC940226HMCLMS13','coso@dominio.com',NULL,'México','México','Valle de Bravo','O+','Emilio Ituarte','130510-74','Si','Si'),(4,'Francisco','Chavez','Castañeda','1970-07-25','M','CICF700725','México','CICF700725HMCLMS13','coso@dominio.com',NULL,'México','CDMX','Iztapalapa','A+','Sara Vera','130540-08','No','No'),(5,'Silvia Edith','Albarrán','Trujillo','1965-05-16','M','SEAT650516','México','SEAT650516MMCLMS13','root@admin.com',NULL,'México','México','Toluca','O+','Silvia Edith','130510-52','No','No'),(6,'Carlos','Quintero','Valdés','1992-02-05','M','QEVC920205','México','QEVC920205HMCLMS12','coso@dominio.com',NULL,'México','México','Toluca','O+','Tía Paty','130540-11','No','No');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `domicilio`
--

LOCK TABLES `domicilio` WRITE;
/*!40000 ALTER TABLE `domicilio` DISABLE KEYS */;
INSERT INTO `domicilio` VALUES (1,'','',0,'','','',''),(2,'','',0,'','','',''),(3,'','',0,'','','',''),(4,'','',0,'','','',''),(5,'','',0,'','','',''),(6,'','',0,'','','','');
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grupo`
--

LOCK TABLES `grupo` WRITE;
/*!40000 ALTER TABLE `grupo` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
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
  `password` varchar(20) NOT NULL,
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
INSERT INTO `profesor` VALUES ('CICF700725',4,'CICF700725',4);
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `semestre`
--

LOCK TABLES `semestre` WRITE;
/*!40000 ALTER TABLE `semestre` DISABLE KEYS */;
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

-- Dump completed on 2017-03-28 11:38:56