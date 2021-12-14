SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


-- Database: `Travellance`


-- --------------------------------------------------------


-- Table structure for table `admin`


DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  UNIQUE KEY `aid` (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



-- Table structure for table `bookings`


DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `adult_members` varchar(255) NOT NULL,
  `children` varchar(255) NOT NULL,
  `journey` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;



-- Table structure for table `customers`


DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `security_que` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


-- Table structure for table `holiday`


DROP TABLE IF EXISTS `holiday`;
CREATE TABLE IF NOT EXISTS `holiday` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;


-- Table structure for table 'security_questions'


DROP TABLE IF EXISTS `security_questions`;
CREATE TABLE IF NOT EXISTS `security_questions` (
    `sec_id` INT(10) NOT NULL AUTO_INCREMENT,
     `sec_que` VARCHAR(255) NOT NULL,
      PRIMARY KEY(`sec_id`))
      ENGINE = InnoDB DEFAULT CHARSET=latin1;  


insert into security_questions (sec_id,sec_que) values(0,'In what city were you born?');  
insert into security_questions (sec_id,sec_que) values(1,'What is the name of your favorite pet?');  
insert into security_questions (sec_id,sec_que) values(2,"What is your mother's maiden name?");  
insert into security_questions (sec_id,sec_que) values(3,'What high school did you attend?');  
insert into security_questions (sec_id,sec_que) values(4,'What is the name of your first school?');  
insert into security_questions (sec_id,sec_que) values(5,'What was the make of your first car?');  
insert into security_questions (sec_id,sec_que) values(6,'What was your favorite food as a child?');  
insert into security_questions (sec_id,sec_que) values(7,'Where did you meet your spouse?');


COMMIT;
