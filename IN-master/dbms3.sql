-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2023 at 11:53 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms3`
--
CREATE DATABASE IF NOT EXISTS `dbms3` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbms3`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `Email` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Password`) VALUES
('pj@gmail.c', '123');

-- --------------------------------------------------------

--
-- Table structure for table `captcha3`
--

DROP TABLE IF EXISTS `captcha3`;
CREATE TABLE `captcha3` (
  `id` int(20) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `USN` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Semester` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `chords3`
--

DROP TABLE IF EXISTS `chords3`;
CREATE TABLE `chords3` (
  `id` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `USN` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Semester` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `design3`
--

DROP TABLE IF EXISTS `design3`;
CREATE TABLE `design3` (
  `id` int(5) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `USN` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Mobile` varchar(20) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Branch` varchar(20) DEFAULT NULL,
  `Semester` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `litrary3`
--

DROP TABLE IF EXISTS `litrary3`;
CREATE TABLE `litrary3` (
  `id` int(5) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `USN` varchar(10) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `Semester` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
CREATE TABLE `log` (
  `USN` varchar(10) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`USN`, `Name`, `Email`, `Password`) VALUES
('4MT20CS116', 'Pranav', 'Joshi@gmail.com', 123),
('4MT20CS117', 'Pranav', 'joshi@333', 55555),
('4MT20CS119', 'Venkatesh', 'Joshi@gmail.com', 0),
('4MT20CS134', 'PAVANA', 'pv@gmail.com', 123);

-- --------------------------------------------------------

--
-- Table structure for table `mask3`
--

DROP TABLE IF EXISTS `mask3`;
CREATE TABLE `mask3` (
  `id` int(5) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `USN` varchar(10) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `Semester` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pallete3`
--

DROP TABLE IF EXISTS `pallete3`;
CREATE TABLE `pallete3` (
  `id` int(5) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `USN` varchar(10) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `Semester` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `razzele3`
--

DROP TABLE IF EXISTS `razzele3`;
CREATE TABLE `razzele3` (
  `id` int(5) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `USN` varchar(10) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `Semester` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `razzele3`
--

INSERT INTO `razzele3` (`id`, `FirstName`, `LastName`, `USN`, `Email`, `Mobile`, `Gender`, `Branch`, `Semester`) VALUES
(4, 'Pavana', ' Joshi', '4MT20CS134', 'pv@gmail.com', '1234555', 'Female', 'IOT', 6);

-- --------------------------------------------------------

--
-- Table structure for table `speaker3`
--

DROP TABLE IF EXISTS `speaker3`;
CREATE TABLE `speaker3` (
  `id` int(5) NOT NULL,
  `FirstName` varchar(20) DEFAULT NULL,
  `LastName` varchar(20) DEFAULT NULL,
  `USN` varchar(10) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Mobile` varchar(10) DEFAULT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Branch` varchar(10) DEFAULT NULL,
  `Semester` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha3`
--
ALTER TABLE `captcha3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USN` (`USN`);

--
-- Indexes for table `chords3`
--
ALTER TABLE `chords3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USN` (`USN`);

--
-- Indexes for table `design3`
--
ALTER TABLE `design3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USN` (`USN`);

--
-- Indexes for table `litrary3`
--
ALTER TABLE `litrary3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USN` (`USN`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `mask3`
--
ALTER TABLE `mask3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USN` (`USN`);

--
-- Indexes for table `pallete3`
--
ALTER TABLE `pallete3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USN` (`USN`);

--
-- Indexes for table `razzele3`
--
ALTER TABLE `razzele3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USN` (`USN`);

--
-- Indexes for table `speaker3`
--
ALTER TABLE `speaker3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `USN` (`USN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha3`
--
ALTER TABLE `captcha3`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chords3`
--
ALTER TABLE `chords3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `design3`
--
ALTER TABLE `design3`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `litrary3`
--
ALTER TABLE `litrary3`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mask3`
--
ALTER TABLE `mask3`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pallete3`
--
ALTER TABLE `pallete3`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `razzele3`
--
ALTER TABLE `razzele3`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `speaker3`
--
ALTER TABLE `speaker3`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `captcha3`
--
ALTER TABLE `captcha3`
  ADD CONSTRAINT `test` FOREIGN KEY (`USN`) REFERENCES `log` (`USN`);

--
-- Constraints for table `chords3`
--
ALTER TABLE `chords3`
  ADD CONSTRAINT `test1` FOREIGN KEY (`USN`) REFERENCES `log` (`USN`);

--
-- Constraints for table `design3`
--
ALTER TABLE `design3`
  ADD CONSTRAINT `design3_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `log` (`USN`);

--
-- Constraints for table `litrary3`
--
ALTER TABLE `litrary3`
  ADD CONSTRAINT `litrary3_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `log` (`USN`);

--
-- Constraints for table `mask3`
--
ALTER TABLE `mask3`
  ADD CONSTRAINT `mask3_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `log` (`USN`);

--
-- Constraints for table `pallete3`
--
ALTER TABLE `pallete3`
  ADD CONSTRAINT `pallete3_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `log` (`USN`);

--
-- Constraints for table `razzele3`
--
ALTER TABLE `razzele3`
  ADD CONSTRAINT `razzele3_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `log` (`USN`);

--
-- Constraints for table `speaker3`
--
ALTER TABLE `speaker3`
  ADD CONSTRAINT `speaker3_ibfk_1` FOREIGN KEY (`USN`) REFERENCES `log` (`USN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
