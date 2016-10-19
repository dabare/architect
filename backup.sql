-- MySQL dump 10.13  Distrib 5.7.13, for Linux (x86_64)
--
-- Host: localhost    Database: architect
-- ------------------------------------------------------
-- Server version	5.7.13-0ubuntu0.16.04.2

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
-- Table structure for table `a_appointment`
--

DROP TABLE IF EXISTS `a_appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `a_appointment` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `architect_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `msg` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_a_appointment_customer1_idx` (`customer_id`),
  KEY `fk_a_appointment_architect1_idx` (`architect_id`),
  CONSTRAINT `fk_a_appointment_architect1` FOREIGN KEY (`architect_id`) REFERENCES `architect` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_a_appointment_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `a_appointment`
--

LOCK TABLES `a_appointment` WRITE;
/*!40000 ALTER TABLE `a_appointment` DISABLE KEYS */;
/*!40000 ALTER TABLE `a_appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `annual_expense`
--

DROP TABLE IF EXISTS `annual_expense`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `annual_expense` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `annual_expense`
--

LOCK TABLES `annual_expense` WRITE;
/*!40000 ALTER TABLE `annual_expense` DISABLE KEYS */;
/*!40000 ALTER TABLE `annual_expense` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `annual_income`
--

DROP TABLE IF EXISTS `annual_income`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `annual_income` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `annual_income`
--

LOCK TABLES `annual_income` WRITE;
/*!40000 ALTER TABLE `annual_income` DISABLE KEYS */;
/*!40000 ALTER TABLE `annual_income` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `architect`
--

DROP TABLE IF EXISTS `architect`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `architect` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `add_no` varchar(45) DEFAULT NULL,
  `add_street` varchar(45) DEFAULT NULL,
  `add_city` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile_no` varchar(45) DEFAULT NULL,
  `land_no` varchar(45) DEFAULT NULL,
  `nic` varchar(45) DEFAULT NULL,
  `reg_no` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `uname` varchar(45) DEFAULT NULL,
  `passwd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `architect`
--

LOCK TABLES `architect` WRITE;
/*!40000 ALTER TABLE `architect` DISABLE KEYS */;
INSERT INTO `architect` VALUES (1,'madhava',NULL,'dabare',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'null','mandy','aelo');
/*!40000 ALTER TABLE `architect` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `attendance` (
  `employee_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  KEY `fk_attendance_employee1_idx` (`employee_id`),
  CONSTRAINT `fk_attendance_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attendance`
--

LOCK TABLES `attendance` WRITE;
/*!40000 ALTER TABLE `attendance` DISABLE KEYS */;
/*!40000 ALTER TABLE `attendance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `award`
--

DROP TABLE IF EXISTS `award`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `award` (
  `id` int(11) NOT NULL,
  `architect_id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_award_architect1_idx` (`architect_id`),
  CONSTRAINT `fk_award_architect1` FOREIGN KEY (`architect_id`) REFERENCES `architect` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `award`
--

LOCK TABLES `award` WRITE;
/*!40000 ALTER TABLE `award` DISABLE KEYS */;
/*!40000 ALTER TABLE `award` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c_appointment`
--

DROP TABLE IF EXISTS `c_appointment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `c_appointment` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `consultant_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `msg` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_c_appointment_customer1_idx` (`customer_id`),
  KEY `fk_c_appointment_consultant1_idx` (`consultant_id`),
  CONSTRAINT `fk_c_appointment_consultant1` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_c_appointment_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c_appointment`
--

LOCK TABLES `c_appointment` WRITE;
/*!40000 ALTER TABLE `c_appointment` DISABLE KEYS */;
/*!40000 ALTER TABLE `c_appointment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `c_reg`
--

DROP TABLE IF EXISTS `c_reg`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `c_reg` (
  `project_id` int(11) NOT NULL,
  `consultant_id` int(11) NOT NULL,
  KEY `fk_c_reg_project1_idx` (`project_id`),
  KEY `fk_c_reg_consultant1_idx` (`consultant_id`),
  CONSTRAINT `fk_c_reg_consultant1` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_c_reg_project1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `c_reg`
--

LOCK TABLES `c_reg` WRITE;
/*!40000 ALTER TABLE `c_reg` DISABLE KEYS */;
/*!40000 ALTER TABLE `c_reg` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `consultant`
--

DROP TABLE IF EXISTS `consultant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `consultant` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `reg_no` varchar(45) DEFAULT NULL,
  `add_no` varchar(45) DEFAULT NULL,
  `add_street` varchar(45) DEFAULT NULL,
  `add_city` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `land_no` varchar(45) DEFAULT NULL,
  `mobile_no` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `uname` varchar(45) DEFAULT NULL,
  `passwd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `consultant`
--

LOCK TABLES `consultant` WRITE;
/*!40000 ALTER TABLE `consultant` DISABLE KEYS */;
/*!40000 ALTER TABLE `consultant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `add_no` varchar(45) DEFAULT NULL,
  `add_street` varchar(45) DEFAULT NULL,
  `add_city` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile_no` varchar(45) DEFAULT NULL,
  `land_no` varchar(45) DEFAULT NULL,
  `nic` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `uname` varchar(45) DEFAULT NULL,
  `passwd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer`
--

LOCK TABLES `customer` WRITE;
/*!40000 ALTER TABLE `customer` DISABLE KEYS */;
INSERT INTO `customer` VALUES (1,'dhanura',NULL,'munasinghe',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'chobodi',NULL,'damsarani',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `e_type`
--

DROP TABLE IF EXISTS `e_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `e_type` (
  `id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `e_type`
--

LOCK TABLES `e_type` WRITE;
/*!40000 ALTER TABLE `e_type` DISABLE KEYS */;
/*!40000 ALTER TABLE `e_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `architect_id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `nic` varchar(45) DEFAULT NULL,
  `add_no` varchar(45) DEFAULT NULL,
  `add_street` varchar(45) DEFAULT NULL,
  `add_city` varchar(45) DEFAULT NULL,
  `mobile_no` varchar(45) DEFAULT NULL,
  `land_no` varchar(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `uname` varchar(45) DEFAULT NULL,
  `passwd` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_employee_architect1_idx` (`architect_id`),
  CONSTRAINT `fk_employee_architect1` FOREIGN KEY (`architect_id`) REFERENCES `architect` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expense`
--

DROP TABLE IF EXISTS `expense`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense` (
  `id` int(11) NOT NULL,
  `architect_id` int(11) NOT NULL,
  `e_type_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `description` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_expense_architect1_idx` (`architect_id`),
  KEY `fk_expense_e_type1_idx` (`e_type_id`),
  CONSTRAINT `fk_expense_architect1` FOREIGN KEY (`architect_id`) REFERENCES `architect` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_expense_e_type1` FOREIGN KEY (`e_type_id`) REFERENCES `e_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense`
--

LOCK TABLES `expense` WRITE;
/*!40000 ALTER TABLE `expense` DISABLE KEYS */;
/*!40000 ALTER TABLE `expense` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_image`
--

DROP TABLE IF EXISTS `g_image`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_image` (
  `id` int(11) NOT NULL,
  `g_project_id` int(11) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_g_image_g_project1_idx` (`g_project_id`),
  CONSTRAINT `fk_g_image_g_project1` FOREIGN KEY (`g_project_id`) REFERENCES `g_project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_image`
--

LOCK TABLES `g_image` WRITE;
/*!40000 ALTER TABLE `g_image` DISABLE KEYS */;
/*!40000 ALTER TABLE `g_image` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `g_project`
--

DROP TABLE IF EXISTS `g_project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `g_project` (
  `id` int(11) NOT NULL,
  `category` varchar(45) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `finish` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `g_project`
--

LOCK TABLES `g_project` WRITE;
/*!40000 ALTER TABLE `g_project` DISABLE KEYS */;
INSERT INTO `g_project` VALUES (1,'Industrial','well this is fgs','sdfgdfg','0'),(2,'Community','dfsgdsf','dfgsdfgdsfgsdfg','1');
/*!40000 ALTER TABLE `g_project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `income_city`
--

DROP TABLE IF EXISTS `income_city`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `income_city` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `income_city`
--

LOCK TABLES `income_city` WRITE;
/*!40000 ALTER TABLE `income_city` DISABLE KEYS */;
/*!40000 ALTER TABLE `income_city` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `chequeno` varchar(45) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_invoice_project1_idx` (`project_id`),
  CONSTRAINT `fk_invoice_project1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
INSERT INTO `invoice` VALUES (7,1,'Cheque','67567','2016-09-11','ghjghjg','hjgfhjh'),(9,1,'Cheque','8977','2016-09-12','km',''),(10,1,'Cheque','23423','2016-09-13','dsaf','fasd');
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monthly_expense`
--

DROP TABLE IF EXISTS `monthly_expense`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `monthly_expense` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monthly_expense`
--

LOCK TABLES `monthly_expense` WRITE;
/*!40000 ALTER TABLE `monthly_expense` DISABLE KEYS */;
/*!40000 ALTER TABLE `monthly_expense` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `byy` varchar(45) DEFAULT NULL,
  `seen` int(11) DEFAULT NULL,
  `format` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_image_project1_idx` (`project_id`),
  CONSTRAINT `fk_image_project1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
INSERT INTO `post` VALUES (4,1,'bjhb','2016-09-12 15:26:17','Post',NULL,1,''),(5,2,'as it is in the root folder we are about to here','2016-09-12 18:34:12','Post',NULL,0,''),(9,1,'REad this please, iwant you to be in the ','2016-09-13 21:31:46','Document',NULL,1,'post9.pdf'),(10,1,'this is a post','2016-09-13 21:35:02','Post',NULL,1,''),(11,1,'i can post too','2016-09-13 21:35:43','Post',NULL,1,''),(12,1,'Hay','2016-09-13 21:36:09','Image',NULL,1,'post12.jpg'),(13,1,'tyhrtyt','2016-09-13 21:56:02','Post',NULL,1,''),(14,1,'aelo is my name','2016-09-13 21:58:45','Image',NULL,1,'post14.jpg'),(15,1,'tjy','2016-09-14 17:46:16','Post','Architect',1,''),(16,1,'tryrtyr','2016-09-14 17:46:45','Post','Client',1,''),(17,1,'winiw jeuwf','2016-09-15 09:02:44','Post','Client',1,'');
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `architect_id` int(11) NOT NULL,
  `category` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL,
  `location` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `progress` int(11) DEFAULT NULL,
  `estimated_duration` varchar(45) DEFAULT NULL,
  `estimated_cost` int(11) DEFAULT NULL,
  `city` varchar(45) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_project_customer1_idx` (`customer_id`),
  KEY `fk_project_architect1_idx` (`architect_id`),
  CONSTRAINT `fk_project_architect1` FOREIGN KEY (`architect_id`) REFERENCES `architect` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_project_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
INSERT INTO `project` VALUES (1,1,1,'Industrial',NULL,NULL,NULL,NULL,'sdgfsdfsdf',50,'one year',2343234,'Colombo','Colombo Fort near Baray Lake'),(2,2,1,'Residential',NULL,NULL,NULL,NULL,'dfgdfgf',50,'6 months',345345,'Maharagama','maharagama cupe'),(3,2,1,'Community',NULL,NULL,NULL,NULL,'gdsfg',40,'2 years',345345,'Mahara','sdfgoidj');
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_salary_employee1_idx` (`employee_id`),
  CONSTRAINT `fk_salary_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-15  9:04:19
