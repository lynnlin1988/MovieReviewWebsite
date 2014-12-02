-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2014 at 04:42 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12
create database moviereviewwebsite;

use moviereviewwebsite;


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moviereviewwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `a6_actor`
--

CREATE TABLE IF NOT EXISTS `a6_actor` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MovieID` int(11) DEFAULT NULL,
  `StaffID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKMovie` (`MovieID`),
  KEY `FKStaff` (`StaffID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `a6_category`
--

CREATE TABLE IF NOT EXISTS `a6_category` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `a6_comment`
--

CREATE TABLE IF NOT EXISTS `a6_comment` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MovieID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Content` text,
  PRIMARY KEY (`ID`),
  KEY `FKMovie` (`MovieID`),
  KEY `FKUser` (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `a6_director`
--

CREATE TABLE IF NOT EXISTS `a6_director` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MovieID` int(11) DEFAULT NULL,
  `StaffID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKMovie` (`MovieID`),
  KEY `FKStaff` (`StaffID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `a6_friend`
--

CREATE TABLE IF NOT EXISTS `a6_friend` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserAID` int(11) DEFAULT NULL,
  `UserBID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKA` (`UserAID`),
  KEY `FKB` (`UserBID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `a6_movie`
--

CREATE TABLE IF NOT EXISTS `a6_movie` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  `Language` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Year` int(11) DEFAULT NULL,
  `Length` time DEFAULT NULL,
  `Summary` text,
  `Image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `a6_moviecategory`
--

CREATE TABLE IF NOT EXISTS `a6_moviecategory` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MovieID` int(11) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKMovie` (`MovieID`),
  KEY `FKCategory` (`CategoryID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `a6_rating`
--

CREATE TABLE IF NOT EXISTS `a6_rating` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MovieID` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Rating` double DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKMovie` (`MovieID`),
  KEY `FKUser` (`UserID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `a6_staff`
--

CREATE TABLE IF NOT EXISTS `a6_staff` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Gender` varchar(1) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `a6_user`
--

CREATE TABLE IF NOT EXISTS `a6_user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `Summary` varchar(255) DEFAULT NULL,
  `ImageID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `a6_user`
--

INSERT INTO `a6_user` (`ID`, `Username`, `Password`, `Email`, `Country`, `Summary`, `ImageID`) VALUES
(1, 'lin', 'comp426', 'lynnlin@unc.edu', NULL, NULL, NULL),
(2, 'linl', 'comp', 'lynnlin@live.unc.edu', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `a6_usercategory`
--

CREATE TABLE IF NOT EXISTS `a6_usercategory` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `UserID` int(11) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FKUser` (`UserID`),
  KEY `FKCategory` (`CategoryID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `a6_userimage`
--

CREATE TABLE IF NOT EXISTS `a6_userimage` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Location` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



-- Dumping data for single movie
--

INSERT INTO `moviereviewwebsite`.`a6_movie` (`ID`, `Title`, `Rating`, `Language`, `Country`, `Year`, `Length`, `Summary`, `Image`) VALUES 
('1', 'Avatar', '9', 'English', 'USA', '2009', '02:42:00', 'When his brother is killed in a robbery, paraplegic Marine Jake Sully decides to take his place in a mission on the distant world of Pandora. There he learns of greedy corporate figurehead Parker Selfridge''s intentions of driving off the native humanoid "Na''vi" in order to mine for the precious material scattered throughout their rich woodland. In exchange for the spinal surgery that will fix his legs, Jake gathers intel for the cooperating military unit spearheaded by gung-ho Colonel Quaritch, while simultaneously attempting to infiltrate the Na''vi people with the use of an "avatar" identity. While Jake begins to bond with the native tribe and quickly falls in love with the beautiful alien Neytiri, the restless Colonel moves forward with his ruthless extermination tactics, forcing the soldier to take a stand - and fight back in an epic battle for the fate of Pandora.', NULL),
('2', 'Alice in Wonderland', '7', 'English', 'USA', '2010', '00:01:48', 'Alice, an unpretentious and individual 19-year-old, is betrothed to a dunce of an English nobleman. At her engagement party, she escapes the crowd to consider whether to go through with the marriage and falls down a hole in the garden after spotting an unusual rabbit. Arriving in a strange and surreal place called "Underland," she finds herself in a world that resembles the nightmares she had as a child, filled with talking animals, villainous queens and knights, and frumious bandersnatches. Alice realizes that she is there for a reason--to conquer the horrific Jabberwocky and restore the rightful queen to her throne.', NULL),
('3', 'Titanic', '8', 'English', 'USA', '1997', '00:03:16', '84 years later, a 101-year-old woman named Rose DeWitt Bukater tells the story to her granddaughter Lizzy Calvert, Brock Lovett, Lewis Bodine, Bobby Buell and Anatoly Mikailavich on the Keldysh about her life set in April 10th 1912, on a ship called Titanic when young Rose boards the departing ship with the upper-class passengers and her mother, Ruth DeWitt Bukater, and her fiancé, Caledon Hockley. Meanwhile, a drifter and artist named Jack Dawson and his best friend Fabrizio De Rossi win third-class tickets to the ship in a game. And she explains the whole story from departure until the death of Titanic on its first and last voyage April 15th, 1912 at 2:20 in the morning.', NULL),
('4', 'Inception', '9', 'English', 'USA', '2010', '00:02:28', 'Dom Cobb is a skilled thief, the absolute best in the dangerous art of extraction, stealing valuable secrets from deep within the subconscious during the dream state, when the mind is at its most vulnerable. Cobb\'s rare ability has made him a coveted player in this treacherous new world of corporate espionage, but it has also made him an international fugitive and cost him everything he has ever loved. Now Cobb is being offered a chance at redemption. One last job could give him his life back but only if he can accomplish the impossible-inception. Instead of the perfect heist, Cobb and his team of specialists have to pull off the reverse: their task is not to steal an idea but to plant one. If they succeed, it could be the perfect crime. But no amount of careful planning or expertise can prepare the team for the dangerous enemy that seems to predict their every move. An enemy that only Cobb could have seen coming.', NULL),
('5', 'Pirates of the Caribbean: The Curse of the Black Pearl', '8', 'English', 'USA', '2003', '00:02:23', 'This swash-buckling tale follows the quest of Captain Jack Sparrow, a savvy pirate, and Will Turner, a resourceful blacksmith, as they search for Elizabeth Swann. Elizabeth, the daughter of the governor and the love of Will\'s life, has been kidnapped by the feared Captain Barbossa. Little do they know, but the fierce and clever Barbossa has been cursed. He, along with his large crew, are under an ancient curse, doomed for eternity to neither live, nor die. That is, unless a blood sacrifice is made.', NULL),
('6', 'The Wolverine', '7', 'English', 'USA', '2013', '00:02:06', 'In modern day Japan, Wolverine is out of his depth in an unknown world as he faces his ultimate nemesis in a life-or-death battle that will leave him forever changed. Vulnerable for the first time and pushed to his physical and emotional limits, he confronts not only lethal samurai steel but also his inner struggle against his own immortality, emerging more powerful than we have ever seen him before.', NULL),
('7', 'The Matrix', '9', 'English', 'USA', '1999', '00:02:16', 'Thomas A. Anderson is a man living two lives. By day he is an average computer programmer and by night a hacker known as Neo. Neo has always questioned his reality, but the truth is far beyond his imagination. Neo finds himself targeted by the police when he is contacted by Morpheus, a legendary computer hacker branded a terrorist by the government. Morpheus awakens Neo to the real world, a ravaged wasteland where most of humanity have been captured by a race of machines that live off of the humans\' body heat and electrochemical energy and who imprison their minds within an artificial reality known as the Matrix. As a rebel against the machines, Neo must return to the Matrix and confront the agents: super-powerful computer programs devoted to snuffing out Neo and the entire human rebellion.', NULL),
('8', 'Skyfall', '8', 'English', 'USA', '2012', '00:02:23', 'When Bond\'s latest assignment goes gravely wrong and agents around the world are exposed, MI6 is attacked forcing M to relocate the agency. These events cause her authority and position to be challenged by Gareth Mallory (Ralph Fiennes), the new Chairman of the Intelligence and Security Committee. With MI6 now compromised from both inside and out, M is left with one ally she can trust: Bond. 007 takes to the shadows - aided only by field agent, Eve (Naomie Harris) - following a trail to the mysterious Silva (Javier Bardem), whose lethal and hidden motives have yet to reveal themselves.', NULL),
('9', 'Pulp Fiction', '9', 'English', 'USA', '1994', '00:02:34', 'Jules Winnfield and Vincent Vega are two hitmen who are out to retrieve a suitcase stolen from their employer, mob boss Marsellus Wallace. Wallace has also asked Vincent to take his wife Mia out a few days later when Wallace himself will be out of town. Butch Coolidge is an aging boxer who is paid by Wallace to lose his next fight. The lives of these seemingly unrelated people are woven together comprising of a series of funny, bizarre and uncalled-for incidents.', NULL),
('10', 'The Hunger Games', '7', 'English', 'USA', '2012', '00:02:22', 'In a dystopian future, the totalitarian nation of Panem is divided between 12 districts and the Capitol. Each year two young representatives from each district are selected by lottery to participate in The Hunger Games. Part entertainment, part brutal retribution for a past rebellion, the televised games are broadcast throughout Panem. The 24 participants are forced to eliminate their competitors while the citizens of Panem are required to watch. When 16-year-old Katniss\'s young sister, Prim, is selected as District 12\'s female representative, Katniss volunteers to take her place. She and her male counterpart, Peeta, are pitted against bigger, stronger representatives, some of whom have trained for this their whole lives.', NULL),
('11', 'The Avengers', '8', 'English', 'USA', '2012', '00:02:23', 'Nick Fury is director of S.H.I.E.L.D, an international peace keeping agency. The agency is a who\'s who of Marvel Super Heroes, with Iron Man, The Incredible Hulk, Thor, Captain America, Hawkeye and Black Widow. When global security is threatened by Loki and his cohorts, Nick Fury and his team will need all their powers to save the world from disaster.', NULL),
('12', 'Captain America: The First Avenger', '7', 'English', 'USA', '2011', '00:02:04', 'It is 1942, America has entered World War II, and sickly but determined Steve Rogers is frustrated at being rejected yet again for military service. Everything changes when Dr. Erskine recruits him for the secret Project Rebirth. Proving his extraordinary courage, wits and conscience, Rogers undergoes the experiment and his weak body is suddenly enhanced into the maximum human potential. When Dr. Erskine is then immediately assassinated by an agent of Nazi Germany\'s secret HYDRA research department (headed by Johann Schmidt, a.k.a. the Red Skull), Rogers is left as a unique man who is initially misused as a propaganda mascot; however, when his comrades need him, Rogers goes on a successful adventure that truly makes him Captain America, and his war against Schmidt begins.', NULL),
('13', 'Thor', '7', 'English', 'USA', '2011', '00:01:55', 'The warrior Thor (Hemsworth) is cast out of the fantastic realm of Asgard by his father Odin (Hopkins) for his arrogance and sent to Earth to live among humans. Falling in love with scientist Jane Foster (Portman) teaches Thor much-needed lessons, and his new-found strength comes into play as a villain from his homeland sends dark forces toward Earth.', NULL);

INSERT INTO `moviereviewwebsite`.`a6_staff` (`ID`, `FirstName`, `LastName`, `Gender`, `Age`) VALUES 
('1', 'James', 'Cameron', 'Male', '60'),
('2', 'Leonardo', 'DiCaprio', 'Male', '40'),
('3', 'Kate', 'Winslet', 'Female', '39'),
('4', 'Billy', 'Zane', 'Male', '48'),
('5', 'Sam', 'Worthington', 'Male', '38'),
('6','Zoe','Saldana','Female','36'),
('7','Sigourney','Weaver','Female','65'),
('8','Tim','Burton','Male','56'),
('9','Mia','Wasikowska','Female','25'),
('10','Johnny','Depp','Male','51'),
('11','Helena Bonham','Carter','Female','48'),
('12','Christopher','Nolan','Male','46'),
('13','Joseph','Gordon-Levitt','Male','35'),
('14','Ellen','Page','Female','27'),
('15','Gore','Verbinski','Male','50'),
('16','Geoffery','Rush','Male','63'),
('17','Orlando','Bloom','Male','37'),
('18','James','Mangold','Male','51'),
('19','Hugh','Jackman','Male','46'),
('20','Will Yun','Lee','Male','43'),
('21','Tao','Okamoto','Female','29'),
('22','Andy','Wachowski','Male','47'),
('23','Lana','Wachowski','Female','49'),
('24','Keanu','Reeves','Male','50'),
('25','Laurence','Fishburne','Male','53'),
('26','Carrie-Anne','Moss','Female','47'),
('27','Sam','Mendes','Male','49'),
('28','Daniel','Craig','Male','48'),
('29','Javier','Bardem','Male','46'),
('30','Naomie','Harris','Female','38'),
('31','Quentin','Tarantino','Male','51'),
('32','John','Travolta','Male','60'),
('33','Uma','Thurma','Female','44'),
('34','Samuel L.','Jackson','Male','66'),
('35','Gary','Ross','Male','58'),
('36','Jennifer','Lawrence','Female','24'),
('37','Josh','Hutcherson','Male','22'),
('38','Liam','Hemsworth','Male','24'),
('39','Joss','Whedon','Male','50'),
('40','Robert','Downey Jr.','Male','49'),
('41','Chris','Evans','Male','33'),
('42','Scarlett','Johansson','Female','30'),
('43','Joe','Johnston','Female','64'),
('44','Hugo','Weaving','Male','54'),
('45','Kenneth','Branagh','Male','54'),
('46','Chris','Hemsworth','Male','31'),
('47','Anthony','Hopkins','Male','77'),
('48','Natalie','Portman','Female','33');

INSERT INTO `moviereviewwebsite`.`a6_category` (`ID`, `Category`) VALUES 
('1', 'Action'), 
('2', 'Adventure'),
('3', 'Fantasy'),
('4','Drama'),
('5','Romance'),
('6','Family'),
('7','Mystrey'),
('8','Sci-Fi'),
('9','Crime'),
('10','Thriller');

INSERT INTO `moviereviewwebsite`.`a6_moviecategory` (`ID`, `MovieID`, `CategoryID`) VALUES 
('1', '1', '1'),('2', '1', '2'), ('3', '1', '3'),
('4','3','4'),('5','3','5'),
('6','2','2'),('7','2','6'),('8','2','3'),
('9','4','1'),('10','4','7'),('11','4','8'),
('12','5','1'),('13','5','2'),('14','5','3'),
('15','6','1'),('16','6','2'),('17','6','8'),
('18','7','1'),('19','7','8'),
('20','8','1'),('21','8','2'),
('22','9','9'),('23','9','4'),('24','9','10'),
('25','10','2'),('26','10','8'),
('27','11','1'),('28','11','2'),('29','11','8'),
('30','12','1'),('31','12','2'),('32','11','8'),
('33','13','1'),('34','13','2'),('35','13','3');

INSERT INTO `moviereviewwebsite`.`a6_actor` (`ID`, `MovieID`, `StaffID`) VALUES 
 ('1', '1', '5'),('2','1','6'),('3','1','7'),
 ('4','3','2'),('5','3','3'),('6','3','4'),
 ('7','2','9'),('8','2','10'),('9','2','11'),
 ('10','4','2'),('11','4','13'),('12','4','14'),
 ('13','5','10'),('14','5','16'),('15','5','17'),
 ('16','6','19'),('17','6','20'),('18','6','21'),
 ('19','7','24'),('20','7','25'),('21','7','26'),
 ('22','8','28'),('23','8','29'),('24','8','30'),
 ('25','9','32'),('26','9','33'),('27','9','34'),
 ('28','10','36'),('29','10','37'),('30','10','38'),
 ('31','11','40'),('32','11','41'),('33','11','42'),
 ('34','12','41'),('35','12','44'),('36','12','34'),
 ('37','13','46'),('38','13','47'),('39','13','48');

 INSERT INTO `moviereviewwebsite`.`a6_director` (`ID`, `MovieID`, `StaffID`) VALUES 
 ('1', '1', '1'), ('2', '3', '1'),('3', '2', '6'),('4','4','12'),('5','5','15'),
 ('6','6','18'),('7','7','22'),('8','7','23'),('9','8','27'),('10','9','31'),('11','10','35'),
 ('12','11','39'),('13','12','43'),('14','13','45');

