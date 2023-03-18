-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2023 at 07:36 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_db`
--

DROP TABLE IF EXISTS `portfolio_db`;
CREATE TABLE IF NOT EXISTS `portfolio_db` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio_db`
--

INSERT INTO `portfolio_db` (`id`, `name`, `email`, `phone`, `body`) VALUES
(1, 'Michael', 'mich@gmail.com', '09127608965', 'I need a complete e-commerce website'),
(3, 'Olapade ', 'pade@gmail.com', '123456789', 'I am an intermediate frontend, i need tutorial'),
(4, 'Olatunde Grace', 'grace@gmail.com', '08108975135', 'I need a website for my bussiness'),
(5, 'Godwin wesley', 'win@gmail.com', '+167-4578906', 'i have a restaurant and i need a website'),
(6, 'Toluwani Joy', 'joy@gmail.com', '+167-4578906', 'pls where is your offline nearest center'),
(7, 'Akinade Joel', 'joel@gmail.com', '09153470892', 'i need a church website'),
(8, 'Akinade Joel', 'joel@gmail.com', '09153470892', 'Am very interested in programming'),
(9, 'johnson brave', 'joel@gmail.com', '09153470892', 'Am very interested in frontend programming'),
(22, 'Sule ', 'su@gmail.com', '7805432675', 'Pls, help me with a website'),
(23, 'ade', 'dey@gmail.com', '87654098765', 'hi'),
(21, 'Hanah Goodness', 'goodness@gmail.com', '4563728904625', 'Hi, can you help me with my community website'),
(17, 'Adeagbo Joy', 'agbo@gmail.com', '9087156443', 'pls help me with land purchasing website!!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
