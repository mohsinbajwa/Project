-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 24, 2017 at 02:19 AM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `homstel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('bajwa', 'bajwa');

-- --------------------------------------------------------

--
-- Table structure for table `hostels`
--

CREATE TABLE IF NOT EXISTS `hostels` (
  `hostelid` varchar(100) NOT NULL,
  `hostelname` varchar(100) NOT NULL,
  `desc` varchar(400) NOT NULL,
  `rooms` int(10) NOT NULL,
  `date` date NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  PRIMARY KEY (`hostelid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostels`
--

INSERT INTO `hostels` (`hostelid`, `hostelname`, `desc`, `rooms`, `date`, `price`, `image`, `city`, `address`, `username`) VALUES
('123', 'bajwa ka hostel', 'dfwekdfnkjn', 2, '0002-12-02', 15000, '23634189_1494088450628456_1551315882_o.jpg', '', 'fdsv5641fdsv', 'nanibutt'),
('23', 'df', 'ddvf`', 4, '0005-04-05', 52, 'IMG_20141226_200026.jpg', 'Lahore', 'dsvdf', 'AbubakarBajwa'),
('786', 'testing', 'nfskjdf', 4, '2017-01-02', 15000, '12346266_1621207118100081_815907516_n.jpg', 'Lahore', 'dvf', 'AbubakarBajwa');

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `cnicimage` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`first`, `last`, `username`, `password`, `email`, `mobile`, `image`, `cnicimage`) VALUES
('Abubakar', 'Bajwa', 'AbubakarBajwa', 'bajwa', 'abubakar.bajwa2@gmail.com', '03060482815', '12345705_755780624549511_1936132713_n.jpg', 'IMG_20141213_184750.jpg'),
('mohsin', 'Bajwa', 'mohsinbajwa', 'bajwa', 'mohsin@gmail.com', '03060482815', '23634189_1494088450628456_1551315882_o.jpg', '23634189_1494088450628456_1551315882_o.jpg'),
('hassnain', 'shahid', 'nanibutt', 'bajwa', 'hassnain@gmail.com', '03060482815', '03044616006', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
