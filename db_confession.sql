# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-06-07 02:18:11
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

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
  `alias` varchar(50) DEFAULT 'unknown',
  `category` varchar(50) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `message` text,
  `datetime` datetime DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

#
# Data for table "confession"
#

INSERT INTO `confession` VALUES (14,'unknown','A Regret','this is my new confession','I have regreted the fact that I did this to my life','2018-06-06 00:23:44',9),(19,'unknown','A Fantasy','Ex with benefits ','The hottest woman on the planet and I broke up July 5, 2014. I still send her dick pics, though, because she loves my dick and she says she hasnâ€™t found anyone to fuck her as well as I did even after 4 years. PS I donâ€™t send dick pics to any other woman, ever. She just likes my big dick and she says other guys either canâ€™t take instructions or they have a big weiner that they donâ€™t know how to use. My girl has 38DDs, brown, creamy skin, a â€œmermaidâ€ figure, enormous brown eyes, and a low voice. When we broke up she said â€œYouâ€™re never going to find another pussy like mine.â€ She was right. I feel lucky that she still talks to me, I am nothing special to look at, really. But I went to NY last September and slept in her bed for two nights, no sex, just enjoying this beautiful brown angel that every guy chases after.','2018-06-05 18:50:24',19),(20,'unknown','A Truth','I knew it','My wife is having an affair and i know about it (she doesnâ€™t know that i know) . She is very independent personality and i think iâ€™m even proud that she is showing her own will so strongly.','2018-06-06 02:16:15',4),(21,'unknown','A Truth','My natural enemy','I had recently found out that Iâ€™m a psychopath.\r\nIâ€™m not scared of what people could think of me because I can hide it well. Nobody could ever guessâ€¦\r\n\r\nBut Iâ€™m scared of myself, because I donâ€™t see the way I am, as a bad thing.\r\n\r\nActually I feel that somehow people like me has a right to exist.\r\nEvery creature has itâ€™s natural enemy.\r\nHow paradoxical would be, if psychopaths are humans nemesis.','2018-06-06 02:16:55',3),(22,'unknown','A Guilt','By accident','One time, my leg accidentally brushed up against a girl and my pee pee became big and hard and pushed my pants. It went from .5 inches to .75 inches!!! Iâ€™m scared father. A1s0, l m@5turb@t3 t0 101l5 on H3nt@1 H3@v3n wh1l3 my m0m w@tch35 m3','2018-06-06 02:17:58',7),(23,'unknown','A Truth','Divine mercy','Luh','2018-06-06 05:06:12',0),(24,'unknown','A First Experience','From 6.5 to 7\" real quick','I am selling authentic Hair GEL!','2018-06-06 05:15:14',5),(25,'unknown','A Truth','Confession','Hi. mmmm dont know where to start. I was inspired by the movie love, simon. so I know everyone of you knows what im talking about. so imâ€¦â€¦â€¦.. gay. just like everyone else. and im not out. a few knows. but im not out. I guess its hard to spill it out. because thereâ€™s a lot of doubts. hehehe so yeah this me a newbie posting here and confessing, and I dont even know if it is real here. so yeaaah. byeeâ€¦.','2018-06-06 09:44:33',3),(26,'unknown','A Lie','','I have been with my partner for four years now. He still hasnâ€™t met my family â€“ my official excuse for not bringing him home is the distance (yeah right, three states away, big dealâ€¦), but the real thing is that my parents are right-wing. Stupidly, stolidly, fiercely fascist. I am ashamed of my parents.','2018-06-06 09:45:09',10),(27,'unknown','A Pain','Ang sakit sa akon tagipusuon.','Dugay na kami nag break sang akon miga. Its been 7 months, naka move on naman ko. Guro? Pero ngaa everytime ma dumduman or makita ko sya sakit2 gid ya. Pero friends kami subong. Ano mayo himoon ko man? Dulaon ko nagid sya sa kabuhi ko para wala na? ','2018-06-06 13:17:05',19),(28,'unknown','A Pain','Pano mo i explain kung indi kaya ichindihon?','Abi sang parents mo ubra mo nga IT ka gapungko2 ka lg kg ga computer2 kg kung pagpuli ka wala ka gid karapatan makapoi. Hambalon ka pa gapungko2 kman lang. Haayz... ma stress kpa mag explain kg di kman japon ma gets. ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚','2018-06-06 16:08:39',2),(29,'unknown','A Dream','A thought','Bakit galit kayu sa tamad? Wala naman silang ginagawa e. ','2018-06-06 17:39:15',0);

#
# Structure for table "relate"
#

DROP TABLE IF EXISTS `relate`;
CREATE TABLE `relate` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cId` int(11) DEFAULT NULL,
  `alias` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "relate"
#

INSERT INTO `relate` VALUES (1,30,'fred'),(2,29,'fred');
