-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 20, 2020 at 07:16 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `librairie`
--

-- --------------------------------------------------------

--
-- Table structure for table `emprunts`
--

DROP TABLE IF EXISTS `emprunts`;
CREATE TABLE IF NOT EXISTS `emprunts` (
  `empnum` int(16) NOT NULL AUTO_INCREMENT,
  `empdate` date DEFAULT NULL,
  `empdateret` date DEFAULT NULL,
  `empcodelivre` char(255) DEFAULT NULL,
  `empnumlect` char(255) DEFAULT NULL,
  PRIMARY KEY (`empnum`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `emprunts`
--

INSERT INTO `emprunts` (`empnum`, `empdate`, `empdateret`, `empcodelivre`, `empnumlect`) VALUES
(11, '2020-04-20', '2020-04-25', '7', '15'),
(10, '2020-04-20', '2020-04-25', '8', '16');

-- --------------------------------------------------------

--
-- Table structure for table `lecteurs`
--

DROP TABLE IF EXISTS `lecteurs`;
CREATE TABLE IF NOT EXISTS `lecteurs` (
  `lecnum` int(16) NOT NULL AUTO_INCREMENT,
  `lecnom` char(16) DEFAULT NULL,
  `lecprenom` char(16) DEFAULT NULL,
  `lecadresse` char(80) DEFAULT NULL,
  `lecville` char(16) DEFAULT NULL,
  `leccodepostal` char(10) DEFAULT NULL,
  `lecmotdepasse` char(80) DEFAULT NULL,
  PRIMARY KEY (`lecnum`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lecteurs`
--

INSERT INTO `lecteurs` (`lecnum`, `lecnom`, `lecprenom`, `lecadresse`, `lecville`, `leccodepostal`, `lecmotdepasse`) VALUES
(1, 'Lamy', 'Elena', '7 rue du Paradis', 'Paris', '75012', 'Elena'),
(2, 'Theos', 'Pablo', '3 passage Secret', 'Paris', '75004', 'Pablo'),
(3, 'Camden', 'Nicolas', '24 av du Papillon', 'Paris', '75013', 'Nicolas'),
(4, 'Line', 'Margo', '22 rue de la Liberté', 'Paris', '75005', 'Margo'),
(16, 'Houhou', 'Ismail', 'Laayoune', 'Laayoune', '80000', 'StillClosed'),
(15, 'test', 'test', 'test', 'test', 'test', 'test'),
(19, 'hassan', 'hassan', 'laayoune', 'laayoune', '70000', 'hassan');

-- --------------------------------------------------------

--
-- Table structure for table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `livcode` int(16) NOT NULL AUTO_INCREMENT,
  `livnomaut` char(255) DEFAULT NULL,
  `livprenomaut` char(255) DEFAULT NULL,
  `livtitre` char(255) DEFAULT NULL,
  `livcategorie` char(255) DEFAULT NULL,
  `livISBN` char(255) DEFAULT NULL,
  `livdejareserve` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`livcode`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `livres`
--

INSERT INTO `livres` (`livcode`, `livnomaut`, `livprenomaut`, `livtitre`, `livcategorie`, `livISBN`, `livdejareserve`) VALUES
(1, 'Kazan', 'Elia', 'L’arrangement', 'Roman', '2234023858', 0),
(2, 'Asimov', 'Isaac', 'Fondation', 'Science-fiction', '2070415708', 0),
(3, 'Dick', 'Philip K.', 'Blade Runner', 'Science-fiction', '2290314943', 0),
(4, 'Walker', 'Alice', 'La couleur pourpre', 'Roman', '2290021237', 0),
(5, 'Kundera', 'Milan', 'La plaisanterie', 'Roman', '2070703738', 0),
(6, 'Barrie', 'James M.', 'Peter Pan', 'Junior', '2290333263', 0),
(7, 'Verne', 'Jules', 'L île mysterieuse', 'Roman', '0812966422', 1),
(8, 'Houhou', 'Ismail', 'My life is potato', 'roman', '0102030405', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
