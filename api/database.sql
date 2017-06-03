-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2017 at 03:14 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `std_db`
--
CREATE DATABASE IF NOT EXISTS `std_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `std_db`;

-- --------------------------------------------------------

--
-- Table structure for table `std_address`
--

CREATE TABLE `std_address` (
  `userID` int(11) NOT NULL COMMENT 'User ID',
  `addNo` varchar(10) DEFAULT NULL COMMENT 'No. house',
  `addArea` varchar(3) DEFAULT NULL COMMENT 'Area (Moo)',
  `addVill` varchar(20) DEFAULT NULL COMMENT 'Village',
  `addRoad` varchar(20) DEFAULT NULL COMMENT 'Road (Soi)',
  `addStreet` varchar(30) DEFAULT NULL COMMENT 'Street',
  `addSubDis` varchar(20) DEFAULT NULL COMMENT 'Sub District',
  `addDis` varchar(20) DEFAULT NULL COMMENT 'District',
  `addPro` varchar(20) DEFAULT NULL COMMENT 'Province',
  `addZip` int(6) DEFAULT NULL COMMENT 'Zip code'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `std_parent`
--

CREATE TABLE `std_parent` (
  `userID` int(11) NOT NULL COMMENT 'User ID',
  `ffName` varchar(30) DEFAULT NULL COMMENT 'Father first name',
  `flName` varchar(30) DEFAULT NULL COMMENT 'Father last name',
  `fJob` varchar(40) DEFAULT NULL COMMENT 'Father job',
  `fPhone` varchar(11) DEFAULT NULL COMMENT 'Father Phone',
  `mfName` varchar(30) DEFAULT NULL COMMENT 'Mother first name',
  `mlName` varchar(30) DEFAULT NULL COMMENT 'Mother last name',
  `mJob` varchar(40) DEFAULT NULL COMMENT 'Mother job',
  `mPhone` varchar(11) DEFAULT NULL COMMENT 'Mother Phone'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `std_personality`
--

CREATE TABLE `std_personality` (
  `userID` int(11) NOT NULL COMMENT 'User ID',
  `pName` varchar(20) DEFAULT NULL COMMENT 'Prefix name',
  `fName` varchar(30) DEFAULT NULL COMMENT 'First name',
  `lName` varchar(30) DEFAULT NULL COMMENT 'Last name',
  `nName` varchar(20) DEFAULT NULL COMMENT 'Nick name',
  `bDay` date DEFAULT NULL COMMENT 'Birth day',
  `ppID` varchar(14) DEFAULT NULL COMMENT 'Person ID',
  `blood` enum('A','B','O','AB') DEFAULT NULL COMMENT 'Blood group',
  `origin` varchar(20) DEFAULT NULL COMMENT 'Origin',
  `national` varchar(20) DEFAULT NULL COMMENT 'Nationality',
  `phone` varchar(11) DEFAULT NULL COMMENT 'Student phone',
  `sick` varchar(50) DEFAULT NULL COMMENT 'Congenital disease',
  `pic` varchar(33) DEFAULT NULL COMMENT 'Picture URL'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `std_school`
--

CREATE TABLE `std_school` (
  `userID` int(11) NOT NULL COMMENT 'User ID',
  `stdID` int(11) DEFAULT NULL COMMENT 'Student ID',
  `gen` int(11) DEFAULT NULL COMMENT 'School generation',
  `dorm` varchar(20) DEFAULT NULL COMMENT 'Dormitory'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_address`
--
ALTER TABLE `std_address`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `std_parent`
--
ALTER TABLE `std_parent`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `std_personality`
--
ALTER TABLE `std_personality`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `std_school`
--
ALTER TABLE `std_school`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std_personality`
--
ALTER TABLE `std_personality`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT COMMENT 'User ID', AUTO_INCREMENT=1;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
