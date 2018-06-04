# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-06-04 16:57:06
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "confession"
#

DROP TABLE IF EXISTS `confession`;
CREATE TABLE `confession` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  `message` text,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

#
# Data for table "confession"
#

INSERT INTO `confession` VALUES (1,'A Dream','  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                ',NULL),(2,'A Guilt','  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                \r\n',NULL),(3,'A Lie','  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                \r\n',NULL),(4,'A Wild Experience','  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                \r\n',NULL),(5,'A First Experience','hehehe',NULL),(6,'A Lie','dskjfds dsfjkhdsf\r\nfdskjfdshflkhkjh kjdshfds kjfhdsf\r\npfdshjfdshf kjh fkjds hfkjdshf\r\nds fh jfkds fhds jf hfsf\r\ndsfhds jfk hds',NULL),(7,'A Dream','dfdfd',NULL),(8,'A Pain','dfdsfsd','2018-06-04 16:56:37');
