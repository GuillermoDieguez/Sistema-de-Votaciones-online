CREATE DATABASE  IF NOT EXISTS `sistema1` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sistema1`;
-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: sistema1
-- ------------------------------------------------------
-- Server version	5.7.17-log

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
-- Table structure for table `candidatos`
--

DROP TABLE IF EXISTS `candidatos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `candidatos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DPI` varchar(150) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Apellido` varchar(150) NOT NULL,
  `Departamento` varchar(150) NOT NULL,
  `Municipio` varchar(150) NOT NULL,
  `Cargo` varchar(50) NOT NULL,
  `Partido` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dui` (`DPI`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `candidatos`
--

LOCK TABLES `candidatos` WRITE;
/*!40000 ALTER TABLE `candidatos` DISABLE KEYS */;
INSERT INTO `candidatos` VALUES (1,'0845 54874 0101','Alverto Ignacio','Reyes Lourdes','01','0107','Diputado','UNE'),(2,'2132 154856 0102','Julio Cesar','Coronado Ruletas','02','0208','Diputado','UNE'),(3,'5465 458458 0102','Amilcar Carlos','Colindrez Rodas','02','0208','Diputado','UNE'),(4,'2579 45845 0101','David Eliezer','Orantes Gonzalez','01','0102','Presidente','UNE'),(5,'4585 154684 0105','Ramiro Casimiro','Rodorolfines Julianos','02','0208','Alcalde','UNE'),(6,'1235 546845 1235','Rederico Meches','Morales Carrio','02','0208','Diputado','LIDER'),(7,'8458 5425 0504','Liliana Maria','Muñoz Ruano','02','0208','Diputado','LIDER'),(8,'5465 215465 0105','Gudiel Arturo','Morales Chajin','02','0208','Diputado','LIDER'),(9,'2542 15123 1542','Esteban','Noriega','02','0208','Presidente','LIDER'),(10,'1545 12545 0105','Pedro Luis','Yoc Lopes','02','0208','Alcalde','LIDER'),(11,'12542 51235 0101','Guillermo Alejandro','Dieguez Santos','01','0102','Presidente','FRG'),(12,'4515 21354 0106','Rafael','Velasquez','01','0102','Presidente','PAN'),(13,'4515 84521 0504','Hesler Estuardo','Lopes Barraza','01','0102','Presidente','PP'),(14,'7845 5484 0504','Jorge Mario','Aceituno Diaz','01','0102','Presidente','LPU');
/*!40000 ALTER TABLE `candidatos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cargo`
--

DROP TABLE IF EXISTS `cargo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cargo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_cargo` varchar(25) NOT NULL,
  `year_electoral` varchar(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cargo`
--

LOCK TABLES `cargo` WRITE;
/*!40000 ALTER TABLE `cargo` DISABLE KEYS */;
INSERT INTO `cargo` VALUES (1,'Presidente','2017'),(2,'Diputado','2017'),(3,'Alcalde','2017');
/*!40000 ALTER TABLE `cargo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ciudadanos`
--

DROP TABLE IF EXISTS `ciudadanos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ciudadanos` (
  `Numero_Interno` int(11) NOT NULL AUTO_INCREMENT,
  `DPI` varchar(45) DEFAULT NULL,
  `Nombre` varchar(150) DEFAULT NULL,
  `Apellido` varchar(150) DEFAULT NULL,
  `Foto` varchar(150) DEFAULT NULL,
  `Genero` varchar(150) DEFAULT NULL,
  `Direccion` varchar(200) DEFAULT NULL,
  `IdDepartamento` int(11) DEFAULT NULL,
  `IdMunicipio` int(11) DEFAULT NULL,
  `Estado` int(11) DEFAULT NULL,
  `Contraseña` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`Numero_Interno`),
  KEY `indx_departamento_idx` (`IdDepartamento`),
  KEY `indx_municipio_idx` (`IdMunicipio`),
  CONSTRAINT `indx_departamento` FOREIGN KEY (`IdDepartamento`) REFERENCES `departamentos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `indx_municipio` FOREIGN KEY (`IdMunicipio`) REFERENCES `municipio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ciudadanos`
--

LOCK TABLES `ciudadanos` WRITE;
/*!40000 ALTER TABLE `ciudadanos` DISABLE KEYS */;
INSERT INTO `ciudadanos` VALUES (1,'123 123 123','Ciudadano de prueba','Apellido De Prueba',NULL,'Hombre','Direccion de Prueba',1,1,1,'clave de prueba'),(2,'2597 39738 0101','David Eliezer','Orantes Gonzalez',NULL,'Hombre','38 av a 4-46 Zona 3 San Lucas Sacatepequez',2,208,0,'ac91702bccc7990967d6e0e1f0679bf4'),(3,'2578 24544 0101 ','Pedro Mario','Urias Arias',NULL,'Hombre','25 calle 4-78 Zona 1 Mixco Guatemala',1,107,1,'c6cc8094c2dc07b700ffcc36d64e2138'),(10,'1994','David Eliezer','Orantes González',NULL,'Hombre','38 av a 4-46 Zona 3 San Lucas Sacatepequez',2,208,0,'893ce80729195afed54dd71286ef15bc'),(11,'45845 42154 0205','Cristian Amisadai','Ibarra Ramos',NULL,'Hombre','3 Av A 9-78 Colonia El rosoario Zona 7 Mixco',1,107,1,'b08c8c585b6d67164c163767076445d6');
/*!40000 ALTER TABLE `ciudadanos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coalicion_departamento`
--

DROP TABLE IF EXISTS `coalicion_departamento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coalicion_departamento` (
  `idCoalicion_Depa` int(11) NOT NULL AUTO_INCREMENT,
  `idLocalidad` int(11) NOT NULL,
  `id_Depa` int(11) NOT NULL,
  PRIMARY KEY (`idCoalicion_Depa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coalicion_departamento`
--

LOCK TABLES `coalicion_departamento` WRITE;
/*!40000 ALTER TABLE `coalicion_departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `coalicion_departamento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `coalicion_municipal`
--

DROP TABLE IF EXISTS `coalicion_municipal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coalicion_municipal` (
  `idCoalicion_Muni` int(11) NOT NULL AUTO_INCREMENT,
  `idLocalidad` int(11) DEFAULT NULL,
  `idMunicipio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idCoalicion_Muni`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coalicion_municipal`
--

LOCK TABLES `coalicion_municipal` WRITE;
/*!40000 ALTER TABLE `coalicion_municipal` DISABLE KEYS */;
/*!40000 ALTER TABLE `coalicion_municipal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departamentos`
--

DROP TABLE IF EXISTS `departamentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departamentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `codigo` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_UNIQUE` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departamentos`
--

LOCK TABLES `departamentos` WRITE;
/*!40000 ALTER TABLE `departamentos` DISABLE KEYS */;
INSERT INTO `departamentos` VALUES (1,'Guatemala','01'),(2,'Sacatepequez','02'),(3,'Chimaltenango','03'),(4,'El Progreso','04'),(5,'Jutiapa','05'),(6,'Jalapa','06'),(7,'Escuintla','07'),(8,'Quetzaltenango','08'),(9,'Totonicapan','09'),(10,'Suchitepequez','10'),(11,'Zacapa','11'),(12,'Quiche','12'),(13,'Huehuetenango','13'),(14,'Alta Verapaz','14'),(15,'Baja Verapaz','15'),(16,'Peten','16'),(17,'Chiquimula','17'),(18,'Retalhuleu','18'),(19,'San Marcos','19'),(20,'Solola','20'),(21,'Santa Rosa','21');
/*!40000 ALTER TABLE `departamentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalle_coalicion`
--

DROP TABLE IF EXISTS `detalle_coalicion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_coalicion` (
  `idDetalle_Coalicion` int(11) NOT NULL AUTO_INCREMENT,
  `id_coalicion` int(11) NOT NULL DEFAULT '0',
  `id_inscripcion` int(11) DEFAULT NULL,
  PRIMARY KEY (`idDetalle_Coalicion`,`id_coalicion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_coalicion`
--

LOCK TABLES `detalle_coalicion` WRITE;
/*!40000 ALTER TABLE `detalle_coalicion` DISABLE KEYS */;
/*!40000 ALTER TABLE `detalle_coalicion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elecciones`
--

DROP TABLE IF EXISTS `elecciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elecciones` (
  `ID_Eleccion` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(150) DEFAULT NULL,
  `Descripcion` varchar(150) DEFAULT NULL,
  `Año` varchar(45) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_Eleccion`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elecciones`
--

LOCK TABLES `elecciones` WRITE;
/*!40000 ALTER TABLE `elecciones` DISABLE KEYS */;
INSERT INTO `elecciones` VALUES (1,'Primera Vuelta','Selecciones Precidenciales','2017','Activo'),(2,'Primera Vuelta','Selecciones de Alcales Municipales','2017','Activo'),(3,'Primera Vuelta','Seleccion de Diputados','2017','Activo'),(4,'Segunda Vuelta','Selecciones Precidenciales','2017','Desactivado'),(5,'Segunda Vuelta','Selecciones de Alcaldes Municipales','2017','Desactivado'),(6,'Segunda Vuelta','Seleccione De Diputados','2017','Desactivado');
/*!40000 ALTER TABLE `elecciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inscri_partido`
--

DROP TABLE IF EXISTS `inscri_partido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inscri_partido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Partido` varchar(50) NOT NULL,
  `Bandera` varchar(100) NOT NULL DEFAULT 'N/A',
  `DPI` varchar(100) NOT NULL,
  `Reprecentante` varchar(100) NOT NULL,
  `Descripcion` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dui` (`DPI`),
  UNIQUE KEY `dui_2` (`DPI`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inscri_partido`
--

LOCK TABLES `inscri_partido` WRITE;
/*!40000 ALTER TABLE `inscri_partido` DISABLE KEYS */;
INSERT INTO `inscri_partido` VALUES (1,'UNE','bandera/UNE.png','12345678-9','DAVID ORANTES','Una Nacion Escondida'),(2,'LIDER','bandera/LIDER.png','11111111-1','ESTEBAN NORIEGA','Libertad De Estevan Rapido'),(3,'FRG','bandera/FRG.png','17878212-1','GUILLERMO DIEGUEZ','Facil Robaremos Guatemala'),(4,'PAN','bandera/PAN.png','169632212-1','RAFAEL VELASQUEZ','Partido Anarquista Nacional'),(5,'PP','bandera/PP.png','222128792-2','HESSLER LOPEZ','Puros Piratas'),(6,'LPU','N/A','4587 548787 0101','JORGE ACEITUNO','La Pura Uva');
/*!40000 ALTER TABLE `inscri_partido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `localidad`
--

DROP TABLE IF EXISTS `localidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localidad` (
  `id_localidad` int(11) NOT NULL AUTO_INCREMENT,
  `localidad` varchar(50) NOT NULL,
  PRIMARY KEY (`id_localidad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localidad`
--

LOCK TABLES `localidad` WRITE;
/*!40000 ALTER TABLE `localidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `localidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `municipio`
--

DROP TABLE IF EXISTS `municipio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `municipio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `codigo` varchar(4) NOT NULL,
  `codigo_depto` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `codigo_UNIQUE` (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=284 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `municipio`
--

LOCK TABLES `municipio` WRITE;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
INSERT INTO `municipio` VALUES (1,'Amatitlan','0101','01'),(2,'Guatemala','0102','01'),(3,'San Jose Pinula','0103','01'),(4,'San Pedrto Sacatepequez','0104','01'),(5,'Villa Nueva','0105','01'),(6,'Chinautla','0106','01'),(7,'Mixco','0107','01'),(8,'San Juan Sacatepequez','0108','01'),(9,'San Raymundo','0109','01'),(10,'Chuarrancho','0110','01'),(11,'Palencia','0111','01'),(12,'San Miguel Petapa','0112','01'),(13,'Santa Catarina Pinula','0201','01'),(14,'Fraijanes','0202','01'),(15,'San Jose del Golfo','0203','01'),(16,'San Pedro Ayampuc','0204','01'),(17,'Villa Canales','0205','01'),(18,'Alotenango','0206','02'),(19,'Magdalena Milpas Altas','0207','02'),(20,'San Lucas Sacatepequez','0208','02'),(21,'Santa Maria de Jesus','0209','02'),(22,'La Antigua Guatemala','0210','02'),(23,'Pastores','0211','02'),(24,'San Miguel Dueñas','0212','02'),(25,'Santiago Sacatepequez','0213','02'),(26,'Ciudad Vieja','0301','02'),(27,'San Antonio Aguas Calientes','0302','02'),(28,'Santa Catarina Barahona','0303','02'),(29,'Santo Domingo Xenacoj','0304','02'),(30,'Jocotenango','0305','02'),(31,'San Bartolome Milpas Altas','0306','02'),(32,'Santa Lucia Milpas Altas','0307','02'),(33,'Sumpango','0308','02'),(34,'Acatenango','0309','03'),(35,'Patzicia','0310','03'),(36,'San Jose Poaquil','0311','03'),(37,'Santa Cruz Balanya','0312','03'),(38,'Chimaltenango','0313','03'),(39,'Patzun','0314','03'),(40,'San Juan Comalapa','0315','03'),(41,'Tecpan','0316','03'),(42,'El Tejar','0401','03'),(43,'Pochuta','0402','03'),(44,'San Martin Jilotepeque','0403','03'),(45,'Yepocapa','0404','03'),(46,'Parramos','0405','03'),(47,'San Andres Itzapa','0406','03'),(48,'Santa Apolonia','0407','03'),(49,'Zaragoza','0408','03'),(50,'El Jicaro','0409','04'),(51,'San Antonio La Paz','0410','04'),(52,'Guastatoya','0411','04'),(53,'San Cristobal Acasaguastlan','0412','04'),(54,'Morazan','0413','04'),(55,'Sanarate','0414','04'),(56,'San Agustin Acasaguastlan','0415','04'),(57,'Sansare','0416','04'),(58,'Agua Blanca','0417','05'),(59,'Conguaco','0418','05'),(60,'Jerez','0419','05'),(61,'Quezada','0420','05'),(62,'Zapotitlan','0421','05'),(63,'Asuncion Mita','0422','05'),(64,'El Adelanto','0423','05'),(65,'Jutiapa','0424','05'),(66,'San Jose Acatempa','0425','05'),(67,'Atescatempa','0426','05'),(68,'El Progreso','0427','05'),(69,'Moyuta','0428','05'),(70,'Santa Catarina Mita','0429','05'),(71,'Comapa','0430','05'),(72,'Jalpatagua','0431','05'),(73,'Pasaco','0432','05'),(74,'Yupiltepeque','0433','05'),(75,'Jalapa','0501','06'),(76,'San Luis Jilotepeque','0502','06'),(77,'Mataquescuintla','0503','06'),(78,'San Manuel Chaparron','0504','06'),(79,'Monjas','0505','06'),(80,'San Pedro Pinula','0506','06'),(81,'San Carlos Alzatate','0507','06'),(82,'Escuintla','0508','07'),(83,'La Gomera','0509','07'),(84,'San Jose','0510','07'),(85,'Tiquisate','0511','07'),(86,'Guanagazapa','0512','07'),(87,'Masagua','0513','07'),(88,'San Vicente Pacaya','0514','07'),(89,'Iztapa','0515','07'),(90,'Nueva Concepcion','0516','07'),(91,'Santa Lucia Cotzumalguapa','0517','07'),(92,'La DEmocracia','0518','07'),(93,'Palin','0519','07'),(94,'Siquinala','0520','07'),(95,'Almolonga','0521','08'),(96,'Coatepeque','0522','08'),(97,'Flores Costa Cuca','0601','08'),(98,'Olintepeque','0602','08'),(99,'San Carlos Sija','0603','08'),(100,'San Mateo','0604','08'),(101,'Cabrican','0605','08'),(102,'Colomba','0606','08'),(103,'Genova','0607','08'),(104,'Palestina de Los Altos','0608','08'),(105,'San Francisco LA Union','0609','08'),(106,'San Miguel Siguila','0610','08'),(107,'Cajola','0611','08'),(108,'Concepcion Chiquirichapa','0612','08'),(109,'Huitan','0613','08'),(110,'Quetzaltenango','0614','08'),(111,'San Juan Ostuncalco','0615','08'),(112,'Sibilia','0616','08'),(113,'Cantel','0617','08'),(114,'El Palmar','0618','08'),(115,'La Esperanza','0619','08'),(116,'Salcaja','0701','08'),(117,'San Matin Sacatepquez','0702','08'),(118,'Zunil','0703','08'),(119,'Momostenango','0704','09'),(120,'San Francisco el Alto','0705','09'),(121,'San Andres Xecul','0706','09'),(122,'Santa Lucia La Reforma','0707','09'),(123,'San Bartolo','0708','09'),(124,'Santa Maria Chiquimula','0709','09'),(125,'San Cristobal Totonicapan','0710','09'),(126,'Totonicapan','0711','09'),(127,'Chicacao','0712','10'),(128,'Pueblo Nuevo','0713','10'),(129,'San Bernardino','0714','10'),(130,'San Juan Bautista','0715','10'),(131,'Santa Barbara','0716','10'),(132,'Cuyotenango','0801','10'),(133,'Rio Bravo','0802','10'),(134,'San Francisco Zapotitlan','0803','10'),(135,'San Lorenzo','0804','10'),(136,'Santo Domingo','0805','10'),(137,'Mazatenango','0806','10'),(138,'Samayac','0807','10'),(139,'San Gabriel','0808','10'),(140,'San Miguel Panan','0809','10'),(141,'Santo Tomas LA Union','0810','10'),(142,'Patulul','0811','10'),(143,'San Antonio','0812','10'),(144,'San Jose El Idolo','0813','10'),(145,'San Pablo Jocopilas','0814','10'),(146,'Zunilito','0815','10'),(147,'Cabañas','0816','11'),(148,'La Union','0817','11'),(149,'Usumatlan','0818','11'),(150,'Estanzuela','0819','11'),(151,'Rio Hondo','0820','11'),(152,'Zacapa','0821','11'),(153,'Gualan','0822','11'),(154,'San Diego','0901','11'),(155,'Huite','0902','11'),(156,'Teculutan','0903','11'),(157,'Canilla','0904','12'),(158,'Chichicastenango','0905','12'),(159,'Joyabaj','0906','12'),(160,'Sacapulas','0907','12'),(161,'San Juan Cotzal','0908','12'),(162,'Zacualpa','0909','12'),(163,'Chajul','1001','12'),(164,'Chinique','1002','12'),(165,'Nebaj','1003','12'),(166,'San Andres Sajcabaja','1004','12'),(167,'San Pedro Jocopilas','1005','12'),(168,'Chicaman','1006','12'),(169,'Cunen','1007','12'),(170,'Pachalum','1008','12'),(171,'San Antonio Ilotenango','1009','12'),(172,'Santa Cruz delk Quiche','1010','12'),(173,'Chiche','1011','12'),(174,'Ixcan','1012','12'),(175,'Patzite','1013','12'),(176,'San Bartolome Jocotenango','1101','12'),(177,'Uspantan','1102','12'),(178,'Aguacatan','1103','13'),(179,'Cuilco','1104','13'),(180,'La Libertad','1105','13'),(181,'San Gaspar Ixchil','1106','13'),(182,'San Mateo Ixtatan','1107','13'),(183,'San Rafael La Independencia','1108','13'),(184,'Santa Ana Huista','1109','13'),(185,'Santiago Chimaltenango','1110','13'),(186,'Chiantla','1111','13'),(187,'Huehuetenango','1112','13'),(188,'Malacatancito','1113','13'),(189,'San Ildefonso Ixtahuacan','1114','13'),(190,'San Miguel Acatan','1115','13'),(191,'San Rafael Petzal','1116','13'),(192,'Santa Barbara','1117','13'),(193,'Tectitlan','1118','13'),(194,'Colotenango','1119','13'),(195,'Jacaltenango','1120','13'),(196,'Nenton','1121','13'),(197,'San Juan Atitan','1122','13'),(198,'San Pedro Necta','1123','13'),(199,'San Sebastian Coatan','1201','13'),(200,'Santa Cruz Barillas','1202','13'),(201,'Todos Santos Cuchumatanes','1203','13'),(202,'Concepcion Huista','1204','13'),(203,'La Democracia','1205','13'),(204,'San Antonio Huista','1206','13'),(205,'San Juan Ixcoy','1207','13'),(206,'San Pedro Soloma','1208','13'),(207,'San Sebastian','1209','13'),(208,'Santa Eulalia','1210','13'),(209,'Union Cantinil','1211','13'),(210,'Chahal','1212','14'),(211,'Lanquin','1213','14'),(212,'San Juan Chamelco','1214','14'),(213,'Santa Maria Cahabon','1215','14'),(214,'Tucuru','1216','14'),(215,'Chisec','1217','14'),(216,'Panzos','1218','14'),(217,'San Pedro Carcha','1219','14'),(218,'Senahu','1220','14'),(219,'Coban','1301','14'),(220,'Raxruha','1302','14'),(221,'Santa Catalina LA Tinta','1303','14'),(222,'Tactic','1304','14'),(223,'Fray Bartolome de Las Casas','1305','14'),(224,'San Cristobal Verapaz','1306','14'),(225,'Santa Cruz Verapaz','1307','14'),(226,'Tamahu','1308','14'),(227,'Cubulco','1309','15'),(228,'Salama','1310','15'),(229,'Granados','1311','15'),(230,'San Jeronimo','1312','15'),(231,'Purulha','1313','15'),(232,'San Miguel Chicaj','1314','15'),(233,'Rabinal','1315','15'),(234,'Santa Cruz El Chol','1316','15'),(235,'Dolores','1317','16'),(236,'Melchor de Mencos','1318','16'),(237,'Sah Francisco','1319','16'),(238,'Sayaxche','1320','16'),(239,'Flores','1321','16'),(240,'Poptun','1322','16'),(241,'San Jose','1323','16'),(242,'La Libertad','1324','16'),(243,'San Andres','1325','16'),(244,'San Luis','1326','16'),(245,'Las Cruces','1401','16'),(246,'San Benito','1402','16'),(247,'Santa Ana','1403','16'),(248,'Camotan','1404','17'),(249,'Ipala','1405','17'),(250,'San Jacinto','1406','17'),(251,'Chiquimula','1407','17'),(252,'Jocotan','1408','17'),(253,'San Jose La Arada','1409','17'),(254,'Concepcion Las Minas','1410','17'),(255,'Olopa','1411','17'),(256,'San Juan Ermita','1412','17'),(257,'Esquipulas','1413','17'),(258,'Quetzaltepeque','1414','17'),(259,'Champerico','1415','18'),(260,'San Andres Villa Seca','1416','18'),(261,'Santa Cruz Mulua','1417','18'),(262,'El Asintal','1418','18'),(263,'San Felipe','1419','18'),(264,'Nuevo San Carlos','1420','18'),(265,'San Martin Zapotitlan','1421','18'),(266,'Retalhuleu','1422','18'),(267,'San Sebastian','1423','18'),(268,'Ayutla','1424','19'),(269,'El Quetzal','1425','19'),(270,'Ixchiguan','1426','19'),(271,'Ocos','1427','19'),(272,'San Cristobal Cucho','1428','19'),(273,'San Miguel Ixtahuacan','1429','19'),(274,'Sibinal','1430','19'),(275,'Tejutla','1431','19'),(276,'Catarina','1432','19'),(277,'El Rodeo','1433','19'),(278,'La Reforma','1434','19'),(279,'Pajapita','1435','19'),(280,'San Jose Ojetenam','1436','19'),(281,'San Pablo','1437','19'),(282,'Sipacapa','1438','19'),(283,'Yucuaiquín','1439','14');
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nombre_coalicion`
--

DROP TABLE IF EXISTS `nombre_coalicion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nombre_coalicion` (
  `id_coalicion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_coalicion` varchar(50) NOT NULL,
  `localidad` varchar(35) NOT NULL,
  PRIMARY KEY (`id_coalicion`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nombre_coalicion`
--

LOCK TABLES `nombre_coalicion` WRITE;
/*!40000 ALTER TABLE `nombre_coalicion` DISABLE KEYS */;
/*!40000 ALTER TABLE `nombre_coalicion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registro_votante`
--

DROP TABLE IF EXISTS `registro_votante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registro_votante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dui` varchar(10) NOT NULL,
  `nombre` varchar(35) NOT NULL,
  `apellido` varchar(35) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `genero` varchar(15) NOT NULL,
  `fecha` date NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `iddepa` int(11) NOT NULL,
  `idmuni` int(11) NOT NULL,
  `estado` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dui` (`dui`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registro_votante`
--

LOCK TABLES `registro_votante` WRITE;
/*!40000 ALTER TABLE `registro_votante` DISABLE KEYS */;
INSERT INTO `registro_votante` VALUES (1,'05334602-3','Alejandra','Perez','Sistemas 21.png','Mujer','2017-03-16','Av13. calle Monterey casa2',8,817,0);
/*!40000 ALTER TABLE `registro_votante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(25) NOT NULL,
  `pw` varchar(32) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'admin','admin');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `voto`
--

DROP TABLE IF EXISTS `voto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `voto` (
  `Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Precidente` varchar(50) NOT NULL,
  `Alcalde` varchar(50) NOT NULL,
  `Diputado` varchar(50) NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `voto`
--

LOCK TABLES `voto` WRITE;
/*!40000 ALTER TABLE `voto` DISABLE KEYS */;
INSERT INTO `voto` VALUES (1,'David Eliezer','Ramiro Casimiro','Julio Cesar'),(2,'Jorge Mario','Ramiro Casimiro','Alverto Ignacio'),(3,'Rafael','Ramiro Casimiro','Julio Cesar'),(4,'David Eliezer','Ramiro Casimiro','Alverto Ignacio');
/*!40000 ALTER TABLE `voto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-10-20 23:07:46
