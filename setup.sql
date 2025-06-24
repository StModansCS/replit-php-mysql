--
-- User for php to use
-- 
CREATE USER 'dujour'@'localhost' IDENTIFIED BY 'followthewhiterabbit';
GRANT ALL PRIVILEGES ON zion.* TO 'dujour'@'localhost';


--
-- Current Database: `zion`
--
CREATE DATABASE zion;
USE zion;


--
-- Table structure for table `recruits`
--
CREATE TABLE recruits (
  id          int         NOT NULL,
  title       varchar(5)  NOT NULL,
  first_name  varchar(30) NOT NULL,
  second_name varchar(30) NOT NULL
);


--
-- Data for table `recruits`
--
INSERT INTO recruits VALUES(0, 'Mr', 'Thomas', 'Anderson');
INSERT INTO recruits VALUES(1, 'Mr', 'Michael', 'Popper');
