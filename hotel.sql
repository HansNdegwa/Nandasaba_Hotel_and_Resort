-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2020 at 04:18 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
CREATE TABLE IF NOT EXISTS `manager` (
  `uid` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(30) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `uemail` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(1, 'hans', '1234', 'Hans Ndegwa', 'hansndegwa@gmail.com'),
(3, 'benm', 'benm', 'benm musy', 'musybenm@gmail.com'),
(6, 'admin', '1234', 'admin', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `room_id` int NOT NULL AUTO_INCREMENT,
  `room_cat` text NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `name` text NOT NULL,
  `phone` int NOT NULL,
  `book` text NOT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_cat`, `checkin`, `checkout`, `name`, `phone`, `book`) VALUES
(43, 'Duplex', '2020-12-02', '2020-12-04', 'Hans Ndegwa', 724312747, 'true'),
(44, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(45, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(46, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(47, 'Duplex', '0000-00-00', '0000-00-00', '', 0, 'false'),
(48, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(49, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(50, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(51, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(52, 'Family', '0000-00-00', '0000-00-00', '', 0, 'false'),
(53, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(54, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(55, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(56, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false'),
(57, 'Super Comfort', '0000-00-00', '0000-00-00', '', 0, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

DROP TABLE IF EXISTS `room_category`;
CREATE TABLE IF NOT EXISTS `room_category` (
  `roomname` text NOT NULL,
  `room_qnty` int NOT NULL,
  `available` int NOT NULL,
  `booked` int NOT NULL,
  `no_bed` int NOT NULL,
  `bedtype` text NOT NULL,
  `facility` text NOT NULL,
  `price` float NOT NULL,
  PRIMARY KEY (`roomname`(100))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`roomname`, `room_qnty`, `available`, `booked`, `no_bed`, `bedtype`, `facility`, `price`) VALUES
('Duplex', 5, 5, 0, 2, 'single', 'Air Conditioning, WiFi available, DSTV', 4500),
('Family', 5, 5, 0, 2, 'double', 'Couches, DSTV, WIFI available, Balcony, Air Conditioning.', 6500),
('Super Comfort', 5, 5, 0, 1, 'double', 'Air Conditioning, DSTV, WIFI available', 5200);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
