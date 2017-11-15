-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 12 Novembre 2015 à 16:42
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `stock`
--

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

CREATE TABLE IF NOT EXISTS `voitures` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `annee` int(4) NOT NULL,
  `marque` varchar(11) NOT NULL,
  `modele` varchar(11) NOT NULL,
  `energie` varchar(11) NOT NULL,
  `km` int(6) NOT NULL,
  `prix` int(5) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `reference` (`annee`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `voitures`
--

INSERT INTO `voitures` (`id`, `annee`, `marque`, `modele`, `energie`, `km`, `prix`) VALUES
(2, 2007, 'peugeot', '208', 'essence', 65000, 8300),
(3, 2005, 'peugeot', '208', 'essence', 98000, 6200),
(4, 2008, 'renault', 'megane', 'essence', 30540, 13400),
(5, 2008, 'renault', 'megane', 'diesel', 21205, 14200),
(6, 2012, 'renault', 'clio', 'essence', 12014, 13299),
(7, 2009, 'renault', 'clio', 'diesel', 64950, 6989),
(8, 2013, 'renault', 'zoe', 'electrique', 10230, 9990),
(9, 2013, 'renault', 'zoe', 'electrique', 23200, 11200),
(10, 2014, 'renault', 'zoe', 'electrique', 12000, 11099),
(11, 2014, 'renault', 'zoe', 'electrique', 22120, 9200),
(12, 2007, 'peugeot', '208', 'essence', 65000, 8300),
(13, 2005, 'peugeot', '208', 'essence', 98000, 6200),
(14, 2008, 'peugeot', '308', 'essence', 30540, 13400),
(15, 2008, 'peugeot', '308', 'diesel', 21205, 14200),
(16, 2012, 'peugeot', '308', 'essence', 12014, 13299),
(17, 2009, 'peugeot', '308', 'diesel', 64950, 6989),
(18, 2013, 'peugeot', '308', 'essence', 10230, 9990),
(19, 2013, 'peugeot', '308', 'essence', 23200, 11200),
(20, 2014, 'peugeot', '508', 'diesel', 12000, 19010),
(21, 2014, 'peugeot', '508', 'diesel', 22120, 17200),
(22, 2007, 'peugeot', '508', 'diesel', 64000, 15300),
(23, 2005, 'peugeot', '508', 'diesel', 102500, 12200),
(24, 2008, 'renault', 'megane', 'essence', 33043, 12370),
(25, 2008, 'renault', 'megane', 'diesel', 21100, 14504),
(26, 2012, 'renault', 'clio', 'essence', 10230, 12300),
(27, 2009, 'renault', 'clio', 'diesel', 59034, 7800),
(28, 2013, 'renault', 'twizy', 'electrique', 5042, 5200),
(29, 2013, 'renault', 'twizy', 'electrique', 8600, 4300),
(30, 2012, 'renault', 'twizy', 'electrique', 12000, 3020),
(31, 2013, 'tesla', 'S', 'electrique', 10600, 65200),
(32, 2013, 'tesla', 'S', 'electrique', 11020, 66497),
(33, 2013, 'tesla', 'S', 'electrique', 11300, 63004),
(34, 2014, 'tesla', 'S', 'electrique', 22014, 60120),
(35, 2014, 'tesla', 'S', 'electrique', 35045, 55000),
(36, 2014, 'tesla', 'S', 'electrique', 10230, 9990),
(37, 2015, 'tesla', 'X', 'electrique', 3, 132500),
(38, 2015, 'tesla', 'X', 'electrique', 10, 132000),
(39, 2015, 'tesla', 'X', 'electrique', 0, 132900);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
