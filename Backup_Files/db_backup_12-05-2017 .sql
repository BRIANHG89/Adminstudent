DROP TABLE IF EXISTS Array;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(24) NOT NULL,
  `password` varchar(12) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO adminVALUES("1","admin","admin","Administrator","","");
INSERT INTO adminVALUES("2","BRYAN","BRYAN123","BRYAN","NELSON","Hernandez Garcia ");


DROP TABLE IF EXISTS Array;

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_title` varchar(50) NOT NULL,
  `book_description` varchar(200) NOT NULL,
  `book_category` varchar(50) NOT NULL,
  `book_author` varchar(60) NOT NULL,
  `date_publish` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

INSERT INTO bookVALUES("1","English 1","Learning English","History","San Juan","1999-10-18","25");
INSERT INTO bookVALUES("2","Literatura","Fundamentos de lengua literatura ","Lenguague ","Mr. Hamilton","2005-09-10","20");


DROP TABLE IF EXISTS Array;

CREATE TABLE `borrowing` (
  `borrow_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) NOT NULL,
  `student_no` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`borrow_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO borrowingVALUES("3","1","101054","1","2017-10-26","Returned");
INSERT INTO borrowingVALUES("4","1","101054","1","2017-11-10","Borrowed");
INSERT INTO borrowingVALUES("5","1","12020","1","2017-11-11","Borrowed");


DROP TABLE IF EXISTS Array;

CREATE TABLE `ficha_student` (
  `ficha_id` int(5) NOT NULL AUTO_INCREMENT,
  `nro_ficha` int(5) NOT NULL,
  `student_id` int(5) NOT NULL,
  `name_student` varchar(30) NOT NULL,
  `goal_recuperation` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`ficha_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

INSERT INTO ficha_studentVALUES("4","117","8","Maria Garcia Burgos ","refuerzo","Academico");
INSERT INTO ficha_studentVALUES("5","3","117","Maria Garcia Burgos ","refuerzo","Academico");
INSERT INTO ficha_studentVALUES("6","112","120","Lola Burgos","Refuerzo academico en literatura, unidad 1","mejora ");


DROP TABLE IF EXISTS Array;

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_no` varchar(8) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `course` varchar(8) NOT NULL,
  `section` varchar(6) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO studentVALUES("1","101054","Ruby","","Diamon","BSIT","2B");
INSERT INTO studentVALUES("2","12020","Bryan ","Nelson","Hernandez Garcia ","8vo","C");
INSERT INTO studentVALUES("7","12","LOLA","LAURA","BURGOS MONTAÑO","8vo","A");


