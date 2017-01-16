DROP TABLE IF EXISTS a_appointment;

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




DROP TABLE IF EXISTS annual_expense;

CREATE TABLE `annual_expense` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS annual_income;

CREATE TABLE `annual_income` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS architect;

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
  `location` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO architect VALUES("1","Priyantha","","Premathilaka","52","240/17E","Mahawatte,Kaduwela Road","Battaramulla","premathilaka@gmail.com","0718223366","0112546378","644359478V","WD 7197","2016-12-08","active","architect@gmail.com","architect","6.903768,79.927960"),
("2","geeth ","","gamage","","","","","","","","","","","","geeth@gmail.com","geeth","");



DROP TABLE IF EXISTS attendance;

CREATE TABLE `attendance` (
  `employee_id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  KEY `fk_attendance_employee1_idx` (`employee_id`),
  CONSTRAINT `fk_attendance_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS award;

CREATE TABLE `award` (
  `id` int(11) NOT NULL,
  `architect_id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_award_architect1_idx` (`architect_id`),
  CONSTRAINT `fk_award_architect1` FOREIGN KEY (`architect_id`) REFERENCES `architect` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO award VALUES("11","1","","",""),
("12","1","","",""),
("13","1","","",""),
("14","1","","",""),
("15","1","Best Design Award","Trillium Residencies (300 units luxury apartment complex) for Ceylinco Real Estate Company Limited in2005","Awards"),
("16","1","Best Design Award","Passekudah Holiday Resort & Master Plan for Sri Lanka Tourist Development Authority in 2009","Awards"),
("18","1","3rd Place","All Religious Center for Ministry of Justice in 1998","Awards"),
("20","1","","Chartered Architect\nB.Sc(BE),M.Sc(Arch),RIBA(UK),AIA(SL)","Academic Qualifications"),
("21","1","","",""),
("23","1","","",""),
("24","1","Proto-Type Model","Won 3 rd place in the photo-type model for National Savings Bank in 2002","Awards"),
("25","1","","",""),
("26","1","","",""),
("27","1","","","");



DROP TABLE IF EXISTS c_appointment;

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




DROP TABLE IF EXISTS c_reg;

CREATE TABLE `c_reg` (
  `project_id` int(11) NOT NULL,
  `consultant_id` int(11) NOT NULL,
  KEY `fk_c_reg_project1_idx` (`project_id`),
  KEY `fk_c_reg_consultant1_idx` (`consultant_id`),
  CONSTRAINT `fk_c_reg_consultant1` FOREIGN KEY (`consultant_id`) REFERENCES `consultant` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_c_reg_project1` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS consultant_assign;

CREATE TABLE `consultant_assign` (
  `project_id` int(11) DEFAULT NULL,
  `consultant_id` int(11) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO consultant_assign VALUES("1","2","Structural Consultant","Fernando Shiromal","Structural Consultant","Ongoing"),
("1","6","Design Developer","Sandakelum C.","Design Developer","Ongoing"),
("1","9","Draftman","Gallage P.M.","Draftment","Ongoing"),
("21","1","Consultant","Dassanayaka Rajith","erwaerwe","Ongoing");



DROP TABLE IF EXISTS consultantappointment;

CREATE TABLE `consultantappointment` (
  `UserName` varchar(25) NOT NULL,
  `appointmentName` varchar(30) NOT NULL,
  `appointmentDescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO consultantappointment VALUES("samadi","new ","house"),
("sumedha","meeting prefer time","I need bla bla blaa ... Sdasd asdsd asd sA"),
("prabudda","next day dog","sumeda kekunawa"),
("viraj ","malaya","halasdasda"),
("viraj ","malaya","halasdasdadasf"),
("ununtu","sumeda","ssda"),
("pgdfd","sudo","asdafasd"),
("s","s","s"),
("s","s","s"),
("s","s","s"),
("s","s","s"),
("s","s","s"),
("s","s","s"),
("s","s","s");



DROP TABLE IF EXISTS consultants;

CREATE TABLE `consultants` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `nic` varchar(50) DEFAULT NULL,
  `add_no` varchar(45) DEFAULT NULL,
  `add_street` varchar(45) DEFAULT NULL,
  `add_city` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile_no` varchar(45) DEFAULT NULL,
  `land_no` varchar(45) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(400) DEFAULT NULL,
  `psswd` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `uname` varchar(45) DEFAULT NULL,
  `payment` int(11) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO consultants VALUES("1","Rajith","","Dassanayaka","34","821506789V","567","Reid Avenue","Colombo 07","rajith@gmail.com","0721568597","0112456785","2017-01-15 05:16:53","Chartered Quantity Surveyor and Consultant with 20 Years Experience","rajith","active","rajith@gmail.com","23234234","Consultant",""),
("2","Shiromal","","Fernando","45","715364293V","45","Kings Road","Colombo 07","shiromal@gmail.com","0778453621","0112567839","2017-01-15 07:27:10","Chartered Engineer and Structural Consultant with 20 years of Experience","shiromal","active","shiromal@gmail.com","","Structural Consultant","5,5"),
("3","P.","","Somarathne","56","603456233V","23/b","Handala","Waththala","somarathne@gmail.com","0764583123","0113786436","2016-12-08 16:37:49","Chartered Engineer and Services Consultant with 20 Years Experience. B.Sc.Eng(Elect) C Eng,MIESL","priyantha","active","priyantha@gmail.com","","Services Consultant",""),
("4","M.A.P.L.","","Padmakumara","45","718945629V","34","Panagoda","Homagama","padmakumara@gmail.com","0716723846","0112567849","2016-12-08 11:00:50","Architect with 3 Years of Experience. B.Arch ","padmakumara","active","padmakumara@gmail.com","","Architect",""),
("5","N.D.","","Wijendra","52","648475932V","23","Waththegedara","Maharagama","wijendra@gmail.com","0723456789","0112453743","2016-12-08 11:01:08","B.Arch    Architect with 3 years Experience","wijendra","active","wijendra@gmail.com","","Architect",""),
("6","C.","","Sandakelum","30","856473829V","3/2a","Gonapola","Battaramulla","sandakelum@gmail.com","0785643372","0113452738","2016-12-08 11:01:38","Design Developer","sandakalum","active","sandakalum@gmail.com","","Design Developer",""),
("7","S.","","Kalubowila","56","","","","","kalubowila@gmail.com","","","2016-12-08 11:02:00","Design Developer","kalubowila","active","kalubowila@gmail.com","","Design Developer",""),
("8","I.D.J.","","Charuka","23","","","","","charuka@gmail.com","","","2016-12-08 11:02:15","Draftman","charuka","inactive","charuka@gmail.com","","Draftman",""),
("9","P.M.","","Gallage","34","","","","","gallage@gmail.com","","","2016-12-08 11:02:22","Draftman","gallage","inactive","gallage@gmail.com","","Draftman",""),
("10","M.","","Fazly","27","","","","","fazly@gmail.com","","","2016-12-09 02:48:58","Draftman","fazly","active","fazly@gamil.com","","Draftman",""),
("11","L.","","Rangana","25","","","","","rangana@gmail.com","","","2016-12-08 11:03:12","Draftman","rangana","inactive","rangana@gmail.com","","Draftman",""),
("12","vghv","gvgh","vhv","56","hbhjb","bkj","nknk","nkn","knk","nn","knknk","2017-01-13 08:16:47","","nkjn","inactive","knk","","Consultant",""),
("13","cfhc","cfhc","fhc","45","456456","vghj","bhj","bhj","abc@gmail.com","123","123","2017-01-13 09:38:45","","123","inactive","abc@gmail.com","","Consultant",""),
("14","sdfasd","sdfsad","sdf","4334","dsaf","sdf","sdaf","sdaf","test@gmail.com","3453","ohuiuk","2017-01-14 08:57:29","","test","inactive","test@gmail.com","","Architect","6.932904, 79.851476"),
("15","temp","temp","temp","78","789","789","temp","temp","temp@gmail.com","123","123","2017-01-15 05:09:07","","123","inactive","temp@gmail.com","","Consultant","6.932904, 79.851476"),
("16","temp","temp","temp","45","456","456","temp","temp","temp2@gmail.com","123","123","2017-01-15 05:11:25","","123","inactive","temp2@gmail.com","","Consultant","6.932904, 79.851476"),
("17","temp","temp","temp","45","654","654","temp","temp","temp3@gmail.com","123","123","2017-01-15 05:20:27","","123","inactive","temp3@gmail.com","","Consultant","6.932904, 79.851476"),
("18","samadhi","thathsarani","gunarathne","23","938473892V","12/50 ","Kebillewela-North","Bandarawela","bstg2k16@gmail.com","0710000001","0572222221","2017-01-15 05:28:04","","ss","inactive","bstg2k16@gmail.com","","Architect","6.932904, 79.851476"),
("19","sneha","amali","kannangara","12","9387627818V","37","647","828","jidw@gmail.com","112255478","2541763","2017-01-15 08:58:04","","000","inactive","jidw@gmail.com","","Services Consultant","6.932904, 79.851476");



DROP TABLE IF EXISTS customer;

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(45) DEFAULT NULL,
  `mname` varchar(45) DEFAULT NULL,
  `lname` varchar(45) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `nic` varchar(45) DEFAULT NULL,
  `add_no` varchar(45) DEFAULT NULL,
  `add_street` varchar(45) DEFAULT NULL,
  `add_city` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `mobile_no` varchar(45) DEFAULT NULL,
  `land_no` varchar(45) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `passwd` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `uname` varchar(45) DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO customer VALUES("1","Jagath","","Kannangara","40","sadf","408/A","Anuradhapura Road","Dambulla","jagath@gmail.com","0775648354","0112453748","2017-01-15 09:21:33","jagath","","jagath@gmail.com","7.9800194159106255,80.72626237695317"),
("2","Ruchira ","","Jayarathne","38","","30/20","Suriyamal Mawatha","Thalangama North","ruchira@gmail.com","0756489067","0112345678","2017-01-08 15:10:37","ruchira","","ruchira@gmail.com",""),
("3","Janak","","Dasanayake","54","","62","Hibutana","Angoda","janak@gmail.com","0717384647","0113783493","2017-01-08 15:14:15","janak","","janak@gmail.com",""),
("4","Shalindra","","Fernando","65","","59","Lauries Road","Colombo 04","shalindra@gmail.com","0723893498","0112837578","2017-01-08 15:18:35","shalindra","","shalindra@gmail.com",""),
("5","Piripun Holdings Pvt Ltd","","","0","","93","Dharmapala Mawatha","Colombo 07","piripun@gmail.com","0713253642","0115363535","2017-01-08 15:25:13","piripun","","piripun@gmail.com",""),
("6","Ravi Investments Pvt Ltd","","","0","","19","Kensigngton Gardens","Colombo 04","ravi@gmail.com","0763598493","0116325366","2017-01-08 21:02:40","ravi","","ravi@gmail.com",""),
("7","Lakshitha","","Priyarathne","27","","181","Watarake","Polgasovita","lakshitha@gmail.com","0723478648","0113437682","2017-01-08 15:39:15","lakshitha","","lakshitha@gmail.com",""),
("8","Durdans Lab","","","0","","","Kalubowila","Nugegoda","durdans@gmail.com","0772566333","0116734889","2017-01-09 05:57:02","durdans","","durdans@gmail.com",""),
("9","HSBC","","","0","","","Galle Road","Moratuwa","hsbc@gmail.com","0712238384","0112387568","2017-01-09 05:57:24","hsbc","","hsbc@gmail.com",""),
("10","Thudawe Brothers Ltd","","","0","","","Industrial Estate","Homagama","thudawe@gmail.com","0765482936","0112347375","2017-01-09 11:54:57","thudawe","","thudawe@gmail.com",""),
("11","Avantha ","","Subasinghe","56","","15/16/1","Kuda Edanda Road","Wattala","avantha@gmail.com","0715364784","0116373785","2017-01-09 06:33:40","avantha","","avantha@gmail.com",""),
("12","Buddhika","","Disanayake","37","","574/3","Muttetugoda Road","Battaramulla","buddhika@gmail.com","0735323646","0112453466","2017-01-09 06:40:31","buddhika","","buddhika@gmail.com",""),
("13","Chamara","","Bandara","47","","39","Melfred estate","Kaduwela","chamara@gmail.com","0782563590","0115367585","2017-01-09 06:56:53","chamara","","chamara@gmail.com",""),
("14","mandy","mandy","mandy","12","21","inni","nni","nji","asd@yahoo.com","dodfidisf","sdnfslk","2017-01-14 07:12:47","asd","inactive","asd@yahoo.com",""),
("22","Ashan","Sanjaya","Danthanarayana","22","940062179V","No.18, Samudrarama road,","Niwaththakachethiya Road,","Galle","vidurada@gmail.com","776590686","Sri Lanka","2017-01-14 07:12:33","123","","vidurada@gmail.com","6.932904, 79.851476"),
("24","madhava","","dabare","23","942761997v","23","Park RD.","Kerolapitiya","dabare@gmail.com","0754925989","0112234345","2017-01-14 07:05:50","dabare","","dabare@gmail.com","6.932904, 79.851476"),
("25","Temp","temp","temp","78","789","789","ghj","ghj","temp@gmail.com","123","123","2017-01-15 04:45:10","123","","temp@gmail.com","6.932904, 79.851476"),
("26","temp","temp","temp","78","temp","789","789","789","temp@gmail","123","123","2017-01-15 04:45:52","123","","temp@gmail","6.932904, 79.851476"),
("27","temp","temp","temp","78","789","789","temp","temp","temp@gmail.com","123","123","2017-01-15 04:48:56","123","","temp@gmail.com","6.932904, 79.851476"),
("28","temp","temp","temp","45","456","456","temp","temp","temp2@gmail.com","123","123","2017-01-15 05:12:28","123","","temp2@gmail.com","6.932904, 79.851476"),
("29","temp","temp","temp","56","123","123","temp","temp","temp4@gmail.com","123","123","2017-01-15 05:28:30","123","","temp4@gmail.com","6.932904, 79.851476"),
("30","samadhi","thathsarani","gunarathne","10","288836477V","774","sjfsfh","geusa","jidm@gmail.com","2514536","","2017-01-15 08:56:28","11","","jidm@gmail.com","6.932904, 79.851476");



DROP TABLE IF EXISTS e_type;

CREATE TABLE `e_type` (
  `id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS employee;

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

INSERT INTO employee VALUES("1","1","shanil","","gamaghe","912374667V","","","","","","","","","","employee@gmail.com","employee");



DROP TABLE IF EXISTS employeee;

CREATE TABLE `employeee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
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
  `image` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO employeee VALUES("1","sdfs","dfdsaf","sdfsdf","sdf","sadfsdfdf","dfsdf","sdfsdf","sdf","sdf","sdfsdaf","sdfsdf","","uploads/"),
("2","sdfsdfdf","sdfsd","fsdfsdfdsf","23423423","dfsdf","sdfs","dfsdf","32323","2323423","sdfsdf","wjnwaj2shdbf.cv","","uploads/");



DROP TABLE IF EXISTS expense;

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




DROP TABLE IF EXISTS g_image;

CREATE TABLE `g_image` (
  `id` int(11) NOT NULL,
  `g_project_id` int(11) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_g_image_g_project1_idx` (`g_project_id`),
  CONSTRAINT `fk_g_image_g_project1` FOREIGN KEY (`g_project_id`) REFERENCES `g_project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO g_image VALUES("3","7","Ampara central College","gal3.jpg"),
("4","20","Located on a small foot print of 2720sqft the","gal4.jpg"),
("5","20","The  1st floor comprises the lobby, work spac","gal5.jpg"),
("6","20","The upper most level has a living and enterta","gal6.jpg"),
("7","20","Although located along urban fringe near a se","gal7.jpg"),
("8","5","A Completed Tower as of 2013","gal8.jpg"),
("9","5","Edge-on view of the construction of Phase 1","gal9.jpg"),
("10","5","Phase 2","gal10.jpg"),
("12","6","The design aesthetic of a â€˜Tâ€™-shaped plan","gal12.jpg"),
("13","6","Side view","gal13.jpg"),
("14","6","The design is principally conceived with clar","gal14.jpg"),
("15","6","View","gal15.jpg"),
("16","6","The rear garden with the large Avacado tree f","gal16.jpg"),
("17","18","Picture 1","gal17.jpg"),
("18","18","Picture 2","gal18.jpg"),
("19","18","Picture 3","gal19.jpg"),
("20","18","Picture 4","gal20.jpg"),
("21","18","Picture 5","gal21.jpg"),
("22","26","sdfasdfasdf","gal22.jpg"),
("23","27","sdfsadf","gal23.jpg"),
("24","27","sdfsadfsf","gal24.jpg"),
("26","28","dgdfsg","gal26.jpg"),
("27","29","It is all about living","gal27.jpg"),
("28","49","Front View","gal28.jpg"),
("29","50","Design View","gal29.jpg"),
("30","51","HSBC Training Center","gal30.jpg"),
("31","51","HSCB Bank","gal31.jpg"),
("32","52","Entire Building","gal32.jpg"),
("33","53","Completed House","gal33.jpg"),
("34","51","Bank at Moratuwa","gal34.jpg"),
("35","54","Jeewa Plastic(Pvt) Ltd.","gal35.jpg"),
("36","55","Durdans Lab","gal36.jpg"),
("37","56","Design View","gal37.jpg"),
("38","52","Bird Eye","gal38.jpg"),
("39","52","Side View","gal39.jpg"),
("41","56","Winsor Apartment","gal41.jpg"),
("43","58","Design View","gal43.jpg"),
("44","59","House","gal44.jpg"),
("45","55","Durdans lab","gal45.jpg"),
("49","68","dfgdfgdf","gal49.png");



DROP TABLE IF EXISTS g_project;

CREATE TABLE `g_project` (
  `id` int(11) NOT NULL,
  `category` varchar(45) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `title` varchar(45) DEFAULT NULL,
  `finish` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO g_project VALUES("1","Industrial","Root of jameica","Ameriavcan house schema","0","Inactive"),
("2","Residential","","sadfsdfasf","","Inactive"),
("3","Industrial","","ghfghfghddfgh","","Inactive"),
("4","Residential","asdsaf","madhava home","",""),
("5","Industrial","The Havelock City Project, well known locally for its Asia Pacific Property Awards, is one of the largest and most expensive mixed used real-estate development projects in the world, being constructed in the Havelock Town region of Sri Lanka. ","Havelock City Project","","Inactive"),
("6","Residential","Built on a 22 perch site situated on a residential enclave in Katubedda; surrounded on three sides by a cluster of two to three storied houses;theneed was to accommodate the clientâ€™s generous and spacious brief while allowing for unstinting garden space.","Lucid Living,Katubadda","","Inactive"),
("7","Community","","School ","","Inactive"),
("8","Industrial","","sdfasdfasdfsadf","","Inactive"),
("9","Community","","sdfsadfsadf","","Inactive"),
("10","","","","","Active"),
("11","","","","","Active"),
("12","","","","","Active"),
("13","","","","","Active"),
("14","","","","","Active"),
("15","Industrial","The Havelock City Project, well known locally for its Asia Pacific Property Awards, is one of the largest and most expensive mixed used real-estate development projects in the world, being constructed in the Havelock Town region of Sri Lanka. The project consist of eight residential towers, a state ","Havelock City Project","","Inactive"),
("17","Industrial","","er","","Inactive"),
("18","Residential","Built on a 25 perch site situated in Moratuwa; the design plan form is a U encasing the existing Avacado,Magoand king coconut trees forming a positive outdoor space connected with living and dining spaces with timber framed sliding windows.\n","U house","","Inactive"),
("19","","","","","Inactive"),
("20","Industrial","This is an office and residence of an architect, located by a marsh, in Rajagiriya Sri Lanka.","Studio Dwelling","","Inactive"),
("26","Residential","sdafsdfasdfa","dfsgdsfg","","Inactive"),
("27","Community","this is ankjsandfs","community1","","Inactive"),
("28","Residential","sdfsad","sdfd","","Inactive"),
("29","Community","Community service is the best","Restaurent","","Inactive"),
("33","","","","","Active"),
("34","","","","","Inactive"),
("35","","","","","Active"),
("36","","","","","Active"),
("37","","","","","Active"),
("38","","","","","Active"),
("39","","","","","Active"),
("40","","","","","Active"),
("41","","","","","Active"),
("42","","","","","Active"),
("43","","","","","Active"),
("44","","","","","Active"),
("45","","","","","Active"),
("46","","","","","Active"),
("47","Residential","House is situated at Baththaramulla","House at Battharamulla","","Inactive"),
("48","Industrial","This is a Huge project","Arpico Showroom","","Inactive"),
("49","Residential","Mount View Residencies for Dutch Property Development Company Ltd at No. 97,Galle Road","Mount View Residencies","","Active"),
("50","Residential","Maun Entrance and Facility Building for Litro Gas Lanka Ltd. at Hendala, Wattalaerfgtedrfgtedrgt","Litro Gas Lanka Ltd.","","Active"),
("51","Community","Bank Building for HSBC at Galle Road,Moratuwa\nBank Building for HSBC at Negombo Road,Negombo","HSBC Bank","","Active"),
("52","Residential","Trillium Residencies at Elvitigala Mawatha,Colombo 08","Trillium Residencies","","Active"),
("53","Residential","This House is situated at Battaramulla","House at Battaramulla","","Inactive"),
("54","Industrial","Office and Showroom for Jeewa Plastic(Pvt) Ltd. at No.505,Galle Road,Mt.Lavinia","Jeewa Plastic(Pvt) Ltd.","","Active"),
("55","Community","Durdans Lab at Kalubowila","Durdans Lab","","Inactive"),
("56","Residential","Winsor Apartments at Dehiwala","Winsor Apartments","","Active"),
("57","Industrial","Arpico Showroom at Dehiwala","Arpico Showroom","","Active"),
("58","Industrial","NMK Head Office at Baseline Road,Colombo 10","NMK Head Office","","Active"),
("59","Residential","House at Wattegedara at Maharagama","House at Maharagama","","Active"),
("60","","","","","Active"),
("61","","","","","Active"),
("62","","","","","Active"),
("63","","","","","Active"),
("64","","","","","Active"),
("65","","","","","Active"),
("66","","","","","Active"),
("67","","","","","Active"),
("68","Community","fsdfsdfsd","mandy","","Inactive"),
("69","","","","","Active"),
("70","","","","","Active"),
("71","","","","","Active"),
("72","","","","","Active"),
("73","","","","","Active");



DROP TABLE IF EXISTS income_city;

CREATE TABLE `income_city` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS invoice;

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

INSERT INTO invoice VALUES("20","21","Cash","100000","2017-01-15","","Initial payment"),
("21","21","Cash","75000","2017-01-15","","payment"),
("22","5","Cash","100000","2016-04-28","","Initial payment"),
("23","5","Cash","75000","2016-05-20","","payment"),
("24","5","Cash","85000","2016-06-22","",""),
("25","5","Cash","300000","2016-08-12","","payment"),
("26","13","Cash","100000","2016-08-12","","initial payment"),
("27","13","Cash","65000","2016-11-17","","payment"),
("28","13","Cash","75000","2016-12-06","","payment"),
("29","4","Cash","500000","2017-01-10","","initial payment"),
("30","3","Cash","100000","2016-11-12","","initial payment"),
("31","3","Cash","85000","2016-12-06","","payment"),
("32","20","Cash","100000","2017-01-15","","initial payment"),
("33","16","Cash","25000","2017-01-15","","initial payment"),
("34","9","Cash","125000","2016-10-08","","initial payment"),
("35","9","Cash","75000","2016-11-10","","payment"),
("36","9","Cash","85000","2016-12-06","","payment"),
("37","6","Cash","200000","2016-12-05","","initial payment"),
("38","6","Cash","125000","2016-12-22","","payment"),
("39","12","Cash","130000","2016-10-21","","initial payment"),
("40","12","Cash","85000","2016-11-10","","payment"),
("41","12","Cash","65000","2016-12-10","","payment"),
("42","8","Cash","125000","2000-07-15","","initial payment"),
("43","8","Cash","85000","2000-08-15","","payment"),
("44","8","Cash","440000","2000-09-18","","payment"),
("45","7","Cash","125000","2003-09-28","","initial payment"),
("46","7","Cash","200000","2003-10-28","","payment"),
("47","7","Cash","75000","2003-11-05","","payment"),
("48","7","Cash","50000","2003-11-03","","payment"),
("49","10","Cash","225000","2004-05-12","","initial payment"),
("50","10","Cash","175000","2004-06-16","","payment"),
("51","10","Cash","250000","2005-05-16","","payment"),
("52","1","Cash","125000","2008-08-02","","initial payment"),
("53","1","Cash","325000","2008-09-24","","payment"),
("54","1","Cash","200000","2008-10-25","","payment"),
("55","15","Cash","225000","2014-07-02","","initial payment"),
("56","15","Cash","200000","2014-07-19","","payment"),
("57","15","Cash","85000","2014-08-26","","payment"),
("58","15","Cash","240000","2014-11-28","","payment"),
("59","2","Cash","180000","2009-09-28","","initial payment"),
("60","2","Cash","85000","2009-11-18","","payment"),
("61","2","Cash","265000","2010-09-22","","payment"),
("62","14","Cash","270000","2011-07-15","","initial payment"),
("63","14","Cash","150000","2011-09-06","","payment"),
("64","14","Cash","250000","2011-10-26","","payment"),
("65","11","Cash","175000","2013-08-10","","initial payment"),
("66","11","Cash","100000","2013-08-28","","payment"),
("67","11","Cash","325000","2013-09-22","","payment"),
("68","11","Cash","200000","2013-11-02","","payment");



DROP TABLE IF EXISTS jobseeker;

CREATE TABLE `jobseeker` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pswd` varchar(40) NOT NULL,
  `jobtype` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO jobseeker VALUES("a","a","Male","aa","aaaa","33","aa","f1290186a5d0b1ceab27",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("q","q","Male","q","q","33","q","7694f4a66316e53c8cdd",""),
("qqq","qqq","Male","q","q","33","qq","7694f4a66316e53c8cdd",""),
("dd","dd","Male","dd","dd","0","dd","1aabac6d068eef6a7bad",""),
("ww","ww","Male","ww","ww","0","ww","ad57484016654da87125db86f4227ea3",""),
("u","u","Male","u","u","0","u","7b774effe4a349c6dd82ad4f4f21d34c","empr"),
("rr","rr","Male","r","r","0","r","4b43b0aee35624cd95b910189b3dc231","jobsk"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("e","e","Male","e","e","0","t","e358efa489f58062f10dd7316b65649e","emp"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","08a4415e9d594ff960030b921d42b91e","jobsk"),
("sds","ftydyd","Female","20140201","dtydtt@fg","22154431","ddtrd","77963b7a931377ad4ab5ad6a9cd718aa","jobsk"),
("asd","asd","Male","asq","scasc","1212131","asda","7694f4a66316e53c8cdd9d9954bd611d",""),
("ww","44","Female","4 16","samadhigunar","718953125","rrt","90b96938746e2807481a9d64bc80cad1","empr"),
("ww","44","Female","4 16","samadhigunarathne1993@gmail.com","718953125","rrt","90b96938746e2807481a9d64bc80cad1","empr"),
("a","a","Male","aa","aaaa","33","aa","f1290186a5d0b1ceab27",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("q","q","Male","q","q","33","q","7694f4a66316e53c8cdd",""),
("qqq","qqq","Male","q","q","33","qq","7694f4a66316e53c8cdd",""),
("dd","dd","Male","dd","dd","0","dd","1aabac6d068eef6a7bad",""),
("ww","ww","Male","ww","ww","0","ww","ad57484016654da87125db86f4227ea3",""),
("u","u","Male","u","u","0","u","7b774effe4a349c6dd82ad4f4f21d34c","empr"),
("rr","rr","Male","r","r","0","r","4b43b0aee35624cd95b910189b3dc231","jobsk"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("e","e","Male","e","e","0","t","e358efa489f58062f10dd7316b65649e","emp"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","08a4415e9d594ff960030b921d42b91e","jobsk"),
("a","a","Male","aa","aaaa","33","aa","f1290186a5d0b1ceab27",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("q","q","Male","q","q","33","q","7694f4a66316e53c8cdd",""),
("qqq","qqq","Male","q","q","33","qq","7694f4a66316e53c8cdd",""),
("dd","dd","Male","dd","dd","0","dd","1aabac6d068eef6a7bad",""),
("ww","ww","Male","ww","ww","0","ww","ad57484016654da87125db86f4227ea3",""),
("u","u","Male","u","u","0","u","7b774effe4a349c6dd82ad4f4f21d34c","empr"),
("rr","rr","Male","r","r","0","r","4b43b0aee35624cd95b910189b3dc231","jobsk"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("e","e","Male","e","e","0","t","e358efa489f58062f10dd7316b65649e","emp"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","08a4415e9d594ff960030b921d42b91e","jobsk"),
("a","a","Male","aa","aaaa","33","aa","f1290186a5d0b1ceab27",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("q","q","Male","q","q","33","q","7694f4a66316e53c8cdd",""),
("qqq","qqq","Male","q","q","33","qq","7694f4a66316e53c8cdd",""),
("dd","dd","Male","dd","dd","0","dd","1aabac6d068eef6a7bad",""),
("ww","ww","Male","ww","ww","0","ww","ad57484016654da87125db86f4227ea3",""),
("u","u","Male","u","u","0","u","7b774effe4a349c6dd82ad4f4f21d34c","empr"),
("rr","rr","Male","r","r","0","r","4b43b0aee35624cd95b910189b3dc231","jobsk"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("e","e","Male","e","e","0","t","e358efa489f58062f10dd7316b65649e","emp"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","08a4415e9d594ff960030b921d42b91e","jobsk"),
("a","a","Male","aa","aaaa","33","aa","f1290186a5d0b1ceab27",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("q","q","Male","q","q","33","q","7694f4a66316e53c8cdd",""),
("qqq","qqq","Male","q","q","33","qq","7694f4a66316e53c8cdd",""),
("dd","dd","Male","dd","dd","0","dd","1aabac6d068eef6a7bad",""),
("ww","ww","Male","ww","ww","0","ww","ad57484016654da87125db86f4227ea3",""),
("u","u","Male","u","u","0","u","7b774effe4a349c6dd82ad4f4f21d34c","empr"),
("rr","rr","Male","r","r","0","r","4b43b0aee35624cd95b910189b3dc231","jobsk"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("e","e","Male","e","e","0","t","e358efa489f58062f10dd7316b65649e","emp"),
("nethum","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("pathum","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("prabha","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","08a4415e9d594ff960030b921d42b91e","jobsk"),
("a","a","Male","aa","aaaa","33","aa","f1290186a5d0b1ceab27",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("a","a","Male","aa","aaaa","33","aa","7694f4a66316e53c8cdd",""),
("q","q","Male","q","q","33","q","7694f4a66316e53c8cdd",""),
("qqq","qqq","Male","q","q","33","qq","7694f4a66316e53c8cdd",""),
("dd","dd","Male","dd","dd","0","dd","1aabac6d068eef6a7bad",""),
("ww","ww","Male","ww","ww","0","ww","ad57484016654da87125db86f4227ea3",""),
("u","u","Male","u","u","0","u","7b774effe4a349c6dd82ad4f4f21d34c","empr"),
("rr","rr","Male","r","r","0","r","4b43b0aee35624cd95b910189b3dc231","jobsk"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("s","s","Male","s","s","0","s","03c7c0ace395d80182db07ae2c30f034","emp"),
("e","e","Male","e","e","0","t","e358efa489f58062f10dd7316b65649e","emp"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","3691308f2a4c2f6983f2880d32e29c84","jobsk"),
("prabudda","fernando","Male","91 03 07","prabudda@gmail.com","33333333","prabuda","08a4415e9d594ff960030b921d42b91e","jobsk");



DROP TABLE IF EXISTS monthly_expense;

CREATE TABLE `monthly_expense` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS post;

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

INSERT INTO post VALUES("11","8","","2017-01-07 04:13:53","Image","Client","1","post11.jpg"),
("12","8","","2017-01-07 04:14:14","Document","Client","1","post12.pdf"),
("18","20","What are your expected requirements? ","2017-01-13 22:51:24","Post","Architect","1",""),
("20","20","This is my preferred structure\n","2017-01-14 02:04:37","Post","Client","1",""),
("21","20","What is the area of the land that you owned","2017-01-14 02:08:06","Post","Architect","1",""),
("22","20","30 pr. \n","2017-01-14 02:10:47","Post","Client","1",""),
("23","20","This is the basic plan.For further discussions have an appointment with me","2017-01-14 02:19:17","Document","Architect","1","post23.pdf"),
("24","20","Can I have an appointment recently?","2017-01-14 02:21:57","Post","Client","1",""),
("25","20","20th January at 8.30 pm\n\nCome and meet me at my work place ","2017-01-14 02:24:18","Post","Architect","1",""),
("26","20","Ok.thanks","2017-01-14 02:24:52","Post","Client","1",""),
("27","1","I need to hire you to build my office building","2017-01-14 02:45:55","Post","Client","1",""),
("28","1","You can meet me at my office ","2017-01-14 02:47:49","Post","Architect","1",""),
("29","1","These are the restrictions you need to pay attention","2017-01-14 02:53:38","Document","Architect","1","post29.pdf"),
("30","1","thanks I will meat you.\n","2017-01-14 02:54:36","Post","Client","1",""),
("31","1","This is your Final Project","2017-01-14 02:56:38","Image","Architect","1","post31.jpg"),
("32","20","","2017-01-14 20:38:18","Image","Client","1","post32.jpg");



DROP TABLE IF EXISTS project;

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `architect_id` int(11) NOT NULL,
  `category` varchar(45) DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `pdate` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `location` varchar(60) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
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

INSERT INTO project VALUES("1","1","1","Industrial","1","2008-07-25","Active","6.2330550276398595,81.1231434804688","office building","100","6 months","650000","Tissamaharama","Office Building"),
("2","2","1","Residential","3","2009-09-20","Active","7.50511165851513,80.57657365625005","house at thalangama","100","1year","530000","Kandy","House at Thalangama"),
("3","3","1","Residential","3","2016-10-29","Active","6.212577036486058,80.23599748437505","Residence of mrs.Ruchira","30","4 months","85000","Galle","Residence"),
("4","4","1","Residential","4","2017-01-04","Active","6.932904, 79.851476","House at colombo","30","1year and 9 moths","550000","Colombo","House at Colombo"),
("5","5","1","Industrial","1","2016-04-07","Active","8.580683401446626,80.40765886132817","City Hotel","80","12 months","1250000","Anuradhapura","City Hotel"),
("6","6","1","Community","5","2016-11-28","Active","8.120074533803043,80.77432756250005","Apartment Complex ","40","1 year","1500000","Dambulla","Apartment Complex"),
("7","1","1","Industrial","2","2003-08-23","Active","6.991520083575858,80.27856950585942","Kithulgala Residencies","100","5months","450000","Kithulgala","Kitulgala Residencies"),
("8","3","1","Industrial","2","2000-06-16","Active","7.011965827776179,80.02588395898442","Ambepussa Residencies","100","3 months","650000","Abepussa","Abepussa Residencies"),
("9","7","1","Residential","3","2016-09-09","Active","6.932904, 79.851476","Residence","80","6 months","950000","Wataraka","Residence"),
("10","5","1","Industrial","1","2004-04-28","Active","5.954486938912746,80.55048112695317","Office Building ","100","1 year","650000","Matara","Office Building"),
("11","8","1","Community","4","2013-07-10","Active","7.3192239264097,81.68001298730474","Durdans lan at Nugegoda","100","3months","800000","Ampara","Durdans Lab"),
("12","9","1","Community","1","2016-07-09","Active","6.864736597387103,79.89954118554692","HSBC Office Building","50","8 months","1400000","Moratuwa","HSBC Bank"),
("13","10","1","Industrial","1","2016-08-25","Active","6.839171298718114,79.99567155664067","Thudawe Brothers","50","8 months","800000","Homagama","Thudawe Brothers"),
("14","11","1","Residential","1","2011-07-04","Active","8.59833594317239,81.19180803125005","Avantha Residencies","100","3months","670000","Trincomalee","Residencies"),
("15","12","1","Residential","4","2016-06-10","Active","6.9342672477945255,79.92426042382817","buddhika@gmail.com","100","5months","750000","Battaramulla","House at Battaramulla"),
("16","13","1","Residential","1","2017-01-02","Active","7.837195369858026,81.60928850000005","chamara@gmail.com","2","3months","650000","Btticaloa","Residence"),
("17","4","1","Industrial","","2017-01-09","Inactive","6.939038584004584,79.97661714379888","this is a testing project","40","2 years","300000","Colombo","test new"),
("18","4","1","Industrial","","2017-01-09","Inactive","6.932904, 79.851476","another testng","80","4 years","23","kandy","testing 2"),
("19","4","1","Industrial","","2017-01-09","Inactive","6.932904, 79.851476","another testng","90","4 years","23","kandy","testing 5"),
("20","1","1","Residential","3","2017-01-13","Active","6.973799714735783,80.78394059960942","Residence","40","1year","500000","Nuwara Eliya","House at Nuwara Eliya"),
("21","24","1","Industrial","5","2017-01-13","Active","8.075016578304195,79.84198265646796","four story house.\nwith a swimming pool.\nroof top.","40","8 months","400000","Puttalam","Mandy Home");



DROP TABLE IF EXISTS salary;

CREATE TABLE `salary` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `date` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_salary_employee1_idx` (`employee_id`),
  CONSTRAINT `fk_salary_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




DROP TABLE IF EXISTS settings;

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO settings VALUES("1","satisfied_clients","51"),
("2","projects_delivered","51"),
("3","awards_won","6"),
("4","visitors_count","1525");



