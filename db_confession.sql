# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-06-06 02:30:08
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "comment"
#

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cId` int(11) DEFAULT NULL,
  `comment` text,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "comment"
#

INSERT INTO `comment` VALUES (1,14,'jgijgi lkdsjflkds fjlkfds lkfjd lkfj flkds jflkds','2018-06-04 16:56:37'),(2,14,'lkdsfjdslkfjdsflkjflkdsjfslkfjdsflkjlklkds jds lkflkds jflkds jfds lkfj lfds','2018-06-04 16:56:37'),(3,14,'\n                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2018-06-04 16:56:37');

#
# Structure for table "confession"
#

DROP TABLE IF EXISTS `confession`;
CREATE TABLE `confession` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `message` text,
  `datetime` datetime DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  `relate` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

#
# Data for table "confession"
#

INSERT INTO `confession` VALUES (1,'A Dream','sfds','  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                ','2018-06-04 16:56:37',2,0),(2,'A Guilt','fdsf','  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                \r\n','2018-06-04 16:56:37',0,0),(3,'A Lie','dsfds','  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                \r\n','2018-06-04 16:56:37',0,0),(4,'A Wild Experience','fdsf','  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n                                \r\n','2018-06-04 16:56:37',2,0),(5,'A First Experience','dsfdsfdsfdsf','hehehe','2018-06-04 16:56:37',0,0),(6,'A Lie','dsfe','dskjfds dsfjkhdsf\r\nfdskjfdshflkhkjh kjdshfds kjfhdsf\r\npfdshjfdshf kjh fkjds hfkjdshf\r\nds fh jfkds fhds jf hfsf\r\ndsfhds jfk hds','2018-06-04 16:56:37',0,27),(7,'A Dream','rdsfds','dfdfd','2018-06-04 16:56:37',0,19),(8,'A Pain','fdsfds','dfdsfsd','2018-06-04 16:56:37',0,10),(9,'A Dream','fdsfdsfdsf','','2018-06-05 13:27:40',0,12),(10,'A Dream','fdsfdsf','dfdsfs','2018-06-05 01:32:25',5,10),(11,'A Dream','hahahahahahahahaha','dskjfdskjfhdskjfdsf','2018-06-05 20:11:20',1,11),(12,'A Fantasy','dskfjhdskfjsd','dslkjfdslk dslkfjdslkfjdslkfds f','2018-06-05 20:12:19',16,55),(13,'A First Experience','This is my sample thought','kjdshflk\r\ndsfdslkfjdslkfjflkdsj lkds jflkjlfds\r\nfdfjdsklf jdslkfjflds jf\r\nds jds lkfjlkdsjflkdj flk fjds lkfjds flkds jflkds jfds lkfj lkfj flkds jf\r\njds kflsd jflks fjds lkjlk jds lkf jfl jfds lkfjf','2018-06-05 20:12:45',18,22),(14,'A Regret','this is my new confession','I have regreted the fact that I did this to my life','2018-06-06 00:23:44',5,2),(16,'A Guilt','check time','dslkfjdslkfjdslkfjdslfds','2018-06-06 01:42:05',1,0),(17,'A Fantasy','test time again','dslkjfhdslkf lkdshflkfdslkfhflkdshf lkds f','2018-06-06 01:43:49',5,5);
