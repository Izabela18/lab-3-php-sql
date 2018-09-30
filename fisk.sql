-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2018 at 03:26 PM
-- Server version: 5.6.34-log
-- PHP Version: 7.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fisk`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`ID`, `Name`, `Price`) VALUES
(1, 'håv', 250),
(2, 'vadarbyxa', 499),
(3, 'fiskevåg', 249),
(4, 'fiskelina', 40),
(5, 'fiskeväska', 399);

-- --------------------------------------------------------

--
-- Table structure for table `fisk`
--

CREATE TABLE `fisk` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Weight` varchar(255) DEFAULT NULL,
  `Catch_area` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fisk`
--

INSERT INTO `fisk` (`ID`, `Name`, `Weight`, `Catch_area`) VALUES
(1, 'hummer', '1kg', 'Skagerrak'),
(2, 'karp', '3kg', 'södra Sverige'),
(3, 'krabba', '5kg', 'Skagerrak, Kattegatt'),
(4, 'kummel', '1-4kg', 'Nordsjön, Skagerrak, Kattegatt'),
(5, 'kungfisk', '15kg', 'Skagerrak'),
(6, 'makrill', '3.5kg', 'Skagerrak, Kattegatt och Öresund'),
(7, 'röding', '0.5-1kg', 'syd- och mellansverige'),
(8, 'sik', '1-2kg', 'Öresund'),
(9, 'sej', '1-3kg', 'Nordsjön, Skagerrak, Kattegatt'),
(10, 'tonfisk', '920kg', 'Öresund, Skagerrak, Kattegatt'),
(11, 'torsk', '10kg', 'Nordsjön, Skagerrak, Kattegatt'),
(12, 'ål', '5kg', 'hela Sverige'),
(13, 'öring', '15kg', 'nästan hela Sverige'),
(14, 'sill', '1kg', 'Skagerrak och Kattegatt'),
(15, 'kolja', '0,5-3kg', 'Nordsjön, Skagerrak, Kattegatt');

-- --------------------------------------------------------

--
-- Table structure for table `ready_meal`
--

CREATE TABLE `ready_meal` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ready_meal`
--

INSERT INTO `ready_meal` (`ID`, `Name`, `Price`) VALUES
(1, 'panerad fisk', 50),
(2, 'fisk gratäng', 60),
(3, 'fiskfile', 50),
(4, 'fisk soppa', 30),
(5, 'stekt strömming', 60);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `fisk`
--
ALTER TABLE `fisk`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ready_meal`
--
ALTER TABLE `ready_meal`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fisk`
--
ALTER TABLE `fisk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `ready_meal`
--
ALTER TABLE `ready_meal`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
