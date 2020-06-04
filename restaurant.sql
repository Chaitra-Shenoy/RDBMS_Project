-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 04:59 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `CNAME` varchar(30) NOT NULL,
  `CNUMBER` int(11) NOT NULL,
  `CTIME` time NOT NULL,
  `CDATE` date NOT NULL,
  `RNAME` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`CNAME`, `CNUMBER`, `CTIME`, `CDATE`, `RNAME`) VALUES
('Chaitra', 123123, '20:30:00', '2020-10-10', 'SAVOURY');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `rid` int(11) NOT NULL,
  `cuisine` varchar(30) NOT NULL,
  `vorn` varchar(30) NOT NULL,
  `ambience` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`rid`, `cuisine`, `vorn`, `ambience`) VALUES
(101, 'ITALIAN', 'NONVEG', 'CASUAL'),
(102, 'JAPANESE', 'NONVEG', 'PARTY'),
(103, 'INDIAN', 'NONVEG', 'PARTY'),
(104, 'CONTINENTAL', 'NONVEG', 'CASUAL'),
(105, 'INDIAN', 'VEG', 'CASUAL'),
(106, 'INDIAN', 'VEG', 'OFFICIAL'),
(107, 'CONTINENTAL', 'NONVEG', 'PARTY'),
(108, 'JAPANESE', 'VEG', 'PARTY');

-- --------------------------------------------------------

--
-- Table structure for table `res_info`
--

CREATE TABLE `res_info` (
  `rid` int(11) NOT NULL,
  `rname` varchar(30) NOT NULL,
  `ratings` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `res_info`
--

INSERT INTO `res_info` (`rid`, `rname`, `ratings`, `location`) VALUES
(101, 'SAVOURY', '4.5', 'MANGALORE'),
(102, 'BRIO CAFE', '3.6', 'MANGALORE'),
(103, 'CHARCOAL BBQ', '4.3', 'MANIPAL'),
(104, 'EGG FACTORY', '4.1', 'MANIPAL'),
(105, 'WOODLANDS RESTAURANT', '3.5', 'UDUPI'),
(106, 'SAFFRON VEG CUISINE', '4.6', 'UDUPI'),
(107, 'EDO JAPANESE RESTRO', '4.8', 'BANGALORE'),
(108, 'BLACK PEARL', '4.0', 'BANGALORE');

-- --------------------------------------------------------

--
-- Table structure for table `table_info`
--

CREATE TABLE `table_info` (
  `rid` int(11) NOT NULL,
  `table_name` varchar(30) NOT NULL,
  `tables_booked` int(11) NOT NULL,
  `rname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_info`
--

INSERT INTO `table_info` (`rid`, `table_name`, `tables_booked`, `rname`) VALUES
(101, 'AC', 9, 'SAVOURY'),
(101, 'NAC', 5, 'SAVOURY'),
(102, 'AC', 12, 'BRIO CAFE'),
(102, 'NAC', 6, 'BRIO CAFE'),
(103, 'AC', 6, 'CHARCOAL BBQ'),
(103, 'NAC', 4, 'CHARCOAL BBQ'),
(104, 'AC', 11, 'EGG FACTORY'),
(104, 'NAC', 7, 'EGG FACTORY'),
(105, 'AC', 12, 'WOODLANDS RESTAURANT'),
(105, 'NAC', 20, 'WOODLANDS RESTAURANT'),
(106, 'AC', 10, 'SAFFRON VEG CUISINE'),
(106, 'NAC', 10, 'SAFFRON VEG CUISINE'),
(107, 'AC', 10, 'EDO JAPANESE RESTRO'),
(107, 'NAC', 4, 'EDO JAPANESE RESTRO'),
(108, 'AC', 20, 'BLACK PEARL'),
(108, 'NAC', 10, 'BLACK PEARL');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `Name` varchar(30) NOT NULL,
  `Email_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`Name`, `Email_id`) VALUES
('Chaitra', 'chaitra@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `res_info`
--
ALTER TABLE `res_info`
  ADD PRIMARY KEY (`rid`),
  ADD UNIQUE KEY `rname` (`rname`);

--
-- Indexes for table `table_info`
--
ALTER TABLE `table_info`
  ADD KEY `rid` (`rid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `features`
--
ALTER TABLE `features`
  ADD CONSTRAINT `features_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `res_info` (`rid`);

--
-- Constraints for table `table_info`
--
ALTER TABLE `table_info`
  ADD CONSTRAINT `table_info_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `res_info` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
