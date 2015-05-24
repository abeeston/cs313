-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2015 at 02:14 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `name`) VALUES
(1, 'Action'),
(2, 'Animated'),
(3, 'Family'),
(5, 'Horror'),
(4, 'Musical'),
(6, 'Sci-Fi');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE IF NOT EXISTS `movie` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `year` int(4) DEFAULT NULL,
  `image` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `title` (`title`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `title`, `year`, `image`) VALUES
(1, 'Steamboat Willie', 1928, NULL),
(2, 'Star Wars: Episode III - Revenge of the Sith ', 2005, NULL),
(3, 'Inception', 2010, NULL),
(4, 'Raiders of the Lost Ark', 1981, NULL),
(5, 'The Lion King', 1994, NULL),
(6, 'Batman Begins', 2005, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `moviegenre`
--

CREATE TABLE IF NOT EXISTS `moviegenre` (
  `movieid` int(10) NOT NULL,
  `genreid` int(10) NOT NULL,
  KEY `movieid` (`movieid`,`genreid`),
  KEY `genreid` (`genreid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviegenre`
--

INSERT INTO `moviegenre` (`movieid`, `genreid`) VALUES
(1, 2),
(1, 3),
(2, 1),
(2, 6),
(3, 1),
(4, 1),
(5, 2),
(5, 3),
(6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `movieid` int(10) NOT NULL,
  `rating` int(5) NOT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `movieid` (`movieid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `movieid`, `rating`, `subject`, `content`) VALUES
(1, 1, 5, 'A classic', 'Steamboat Willie is a timeless classic! It''s a must watch for all Disney fans'),
(2, 2, 5, 'My favorite in the series', 'I waited many years for this movie and it did not disappoint! It tied the entire series together very well'),
(3, 3, 4, 'Great movie', 'Can we just give Leonardo DiCaprio an Oscar already?'),
(4, 4, 5, 'Great Movie', 'This movie never gets old'),
(5, 5, 5, 'One of my favorite Disney movies!', 'Great story, great message. I would highly recommend this movie!'),
(6, 6, 4, 'Good', 'This was a good movie, but I still felt like I left wanting more'),
(7, 1, 5, 'Interesting', 'I loved the vintage look and feel to the film');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `moviegenre`
--
ALTER TABLE `moviegenre`
  ADD CONSTRAINT `gid` FOREIGN KEY (`genreid`) REFERENCES `genre` (`id`),
  ADD CONSTRAINT `mid` FOREIGN KEY (`movieid`) REFERENCES `movie` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `movieid` FOREIGN KEY (`movieid`) REFERENCES `movie` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
