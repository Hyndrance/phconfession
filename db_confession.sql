# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-06-07 14:50:06
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "comment"
#

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cId` int(11) DEFAULT NULL,
  `comment` text,
  `alias` varchar(50) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

#
# Data for table "comment"
#

INSERT INTO `comment` VALUES (1,14,'jgijgi lkdsjflkds fjlkfds lkfjd lkfj flkds jflkds',NULL,'2018-06-04 16:56:37'),(2,14,'lkdsfjdslkfjdsflkjflkdsjfslkfjdsflkjlklkds jds lkflkds jflkds jfds lkfj lfds',NULL,'2018-06-04 16:56:37'),(3,14,'\n                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',NULL,'2018-06-04 16:56:37'),(4,0,'test comment ah','fred','2018-06-07 02:25:18'),(5,0,'test comment ah','fred','2018-06-07 02:25:29'),(6,29,'sam ple comment lang ni ha','fred','2018-06-07 02:25:47'),(7,29,'anu naman pwede ko ibutang aside from lain2 gasulod sa mind ko man','fred','2018-06-07 02:27:55'),(8,28,'s','fred','2018-06-07 02:28:56'),(9,29,'baw grabe','james reid','2018-06-07 02:31:53'),(10,29,'uhuh','ben','2018-06-06 18:41:18'),(11,32,'Shout out!!!','Khaleesi','2018-06-06 18:59:55'),(12,32,'Buraters 4 Layf! ','burat','2018-06-06 19:03:10'),(13,31,'Patikim nmn po','KyahWill','2018-06-06 19:06:37'),(14,33,'Pain ðŸ’”','Jane','2018-06-07 01:11:55'),(15,36,'My song for my boss ðŸ˜‚ðŸ˜‚ðŸ˜‚','Khaleesi','2018-06-07 01:27:54'),(16,35,'This is so true! ','Tito','2018-06-07 04:07:30'),(17,38,'Atleast you have a girlfriend ðŸ˜‚','Tito','2018-06-07 04:08:47'),(18,39,'','How are you today','2018-06-07 14:23:25');

#
# Structure for table "confession"
#

DROP TABLE IF EXISTS `confession`;
CREATE TABLE `confession` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `alias` varchar(50) DEFAULT 'unknown',
  `category` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `message` text,
  `datetime` datetime DEFAULT NULL,
  `view` int(11) DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

#
# Data for table "confession"
#

INSERT INTO `confession` VALUES (14,'unknown',3,'this is my new confession','I have regreted the fact that I did this to my life','2018-06-06 00:23:44',11),(19,'unknown',6,'Ex with benefits ','The hottest woman on the planet and I broke up July 5, 2014. I still send her dick pics, though, because she loves my dick and she says she hasnâ€™t found anyone to fuck her as well as I did even after 4 years. PS I donâ€™t send dick pics to any other woman, ever. She just likes my big dick and she says other guys either canâ€™t take instructions or they have a big weiner that they donâ€™t know how to use. My girl has 38DDs, brown, creamy skin, a â€œmermaidâ€ figure, enormous brown eyes, and a low voice. When we broke up she said â€œYouâ€™re never going to find another pussy like mine.â€ She was right. I feel lucky that she still talks to me, I am nothing special to look at, really. But I went to NY last September and slept in her bed for two nights, no sex, just enjoying this beautiful brown angel that every guy chases after.','2018-06-05 18:50:24',20),(20,'unknown',6,'I knew it','My wife is having an affair and i know about it (she doesnâ€™t know that i know) . She is very independent personality and i think iâ€™m even proud that she is showing her own will so strongly.','2018-06-06 02:16:15',4),(21,'unknown',7,'My natural enemy','I had recently found out that Iâ€™m a psychopath.\r\nIâ€™m not scared of what people could think of me because I can hide it well. Nobody could ever guessâ€¦\r\n\r\nBut Iâ€™m scared of myself, because I donâ€™t see the way I am, as a bad thing.\r\n\r\nActually I feel that somehow people like me has a right to exist.\r\nEvery creature has itâ€™s natural enemy.\r\nHow paradoxical would be, if psychopaths are humans nemesis.','2018-06-06 02:16:55',5),(22,'unknown',1,'By accident','One time, my leg accidentally brushed up against a girl and my pee pee became big and hard and pushed my pants. It went from .5 inches to .75 inches!!! Iâ€™m scared father. A1s0, l m@5turb@t3 t0 101l5 on H3nt@1 H3@v3n wh1l3 my m0m w@tch35 m3','2018-06-06 02:17:58',8),(23,'unknown',2,'Divine mercy','Luh','2018-06-06 05:06:12',0),(24,'unknown',3,'From 6.5 to 7\" real quick','I am selling authentic Hair GEL!','2018-06-06 05:15:14',5),(25,'unknown',4,'Confession','Hi. mmmm dont know where to start. I was inspired by the movie love, simon. so I know everyone of you knows what im talking about. so imâ€¦â€¦â€¦.. gay. just like everyone else. and im not out. a few knows. but im not out. I guess its hard to spill it out. because thereâ€™s a lot of doubts. hehehe so yeah this me a newbie posting here and confessing, and I dont even know if it is real here. so yeaaah. byeeâ€¦.','2018-06-06 09:44:33',4),(26,'unknown',5,'','I have been with my partner for four years now. He still hasnâ€™t met my family â€“ my official excuse for not bringing him home is the distance (yeah right, three states away, big dealâ€¦), but the real thing is that my parents are right-wing. Stupidly, stolidly, fiercely fascist. I am ashamed of my parents.','2018-06-06 09:45:09',17),(27,'unknown',6,'Ang sakit sa akon tagipusuon.','Dugay na kami nag break sang akon miga. Its been 7 months, naka move on naman ko. Guro? Pero ngaa everytime ma dumduman or makita ko sya sakit2 gid ya. Pero friends kami subong. Ano mayo himoon ko man? Dulaon ko nagid sya sa kabuhi ko para wala na? ','2018-06-06 13:17:05',22),(28,'unknown',10,'Pano mo i explain kung indi kaya ichindihon?','Abi sang parents mo ubra mo nga IT ka gapungko2 ka lg kg ga computer2 kg kung pagpuli ka wala ka gid karapatan makapoi. Hambalon ka pa gapungko2 kman lang. Haayz... ma stress kpa mag explain kg di kman japon ma gets. ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚','2018-06-06 16:08:39',12),(29,'unknown',1,'A thought','Bakit galit kayu sa tamad? Wala naman silang ginagawa e. ','2018-06-06 17:39:15',12),(30,'00',2,'Girl Crush','Perte gid sa iya ka shomet ya. Gna pm pm ya pako perme. Tskkkkkk! Anhon ko ni man','2018-06-06 18:44:07',1),(31,'burat',8,'buraters ','burat burat burat','2018-06-06 18:48:21',3),(32,'KyahWill',8,'Ang Sarap Talaga!','Ng putahe ng ina mo.','2018-06-06 18:58:23',9),(33,'lodi',6,'Pasakit','How do you get the courage to tell your ex , after 3 years you still have an unconditional love for her, especially after having your child? I am in a point in my life where its just dragging me down, dont have no one to talk to, so i end up drinking on the weekend to numb myself any advice?','2018-06-06 18:58:54',9),(34,'dongem',8,'super shoomet','Sa imo palang ko na ka singit namit namitðŸ˜‚ðŸ˜‚ðŸ˜‚ðŸ˜‚','2018-06-06 20:30:15',1),(35,'Floter',7,'Engineering in PH','Studied for 5 years, you get paid 13500 after getting a job. Better learn how to make business.','2018-06-06 22:31:55',4),(36,'James Reid',6,'May Tama Rin Ako','Walang saysay ang sinasabi kaya hindi mo mawari. Kung iimik pa ba o mananahimik na lang at sa tuwing magpapaliwanag pakinggan mo naman ito. Akala mo ikaw lang ang marunong tumama. Paminsan-minsan tama rin ako, may tama rin ako.','2018-06-07 01:22:35',7),(37,'midnightstar',8,'Rugby Boys','Back when I was in High School, my classmates and I, along with a few schoolmates, like to practice outside our school after class. We would stay there until late at night. One night, a group of rugby boys decided to threaten one of the students with a knife and everybody went into chaos. I remember one classmate na  nadasma and she was stepped on by  everyone in class. From then on, ginclose na ang vacant lot sa kilid sang school. YES, WE WERE THE REASON NGAA GINCLOSE NA DA ANG VACANT LOT SA TABOK JOLLIBEE, KILID PETRON. Our school is the biggest semi-private high school in the city. I know you know where that is.','2018-06-07 01:35:20',2),(38,'Wonderpet',9,'My crazy gf','I get really annoyed when my girlfriend texts me \"goodnight\" but five minutes later starts texting like crazy. ðŸ˜£ðŸ˜£ðŸ˜£','2018-06-07 02:23:50',5);

#
# Structure for table "relate"
#

DROP TABLE IF EXISTS `relate`;
CREATE TABLE `relate` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `cId` int(11) DEFAULT NULL,
  `alias` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

#
# Data for table "relate"
#

INSERT INTO `relate` VALUES (1,30,'fred'),(2,29,'fred'),(3,28,'fred'),(4,27,'00'),(5,26,'00'),(6,25,'00'),(7,31,'lodi'),(8,30,'lodi'),(9,29,'lodi'),(10,26,'lodi'),(11,31,'xander_ford'),(12,28,'KyahWill'),(13,32,'lodi'),(14,33,'lodi'),(15,29,'KyahWill'),(16,33,'Khaleesi'),(17,32,'Khaleesi'),(18,30,'Khaleesi'),(19,29,'Khaleesi'),(20,27,'Khaleesi'),(21,31,'KyahWill'),(22,28,'Secret'),(23,35,'Khaleesi'),(24,34,'Khaleesi'),(25,36,'Khaleesi'),(26,37,'Khaleesi'),(27,35,'midnightstar'),(28,32,'Wonderpet'),(29,39,'star'),(30,14,'star'),(31,39,'dlkfjdslf');
