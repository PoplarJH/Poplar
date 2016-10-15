-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2016 at 12:16 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poplar`
--

-- --------------------------------------------------------

--
-- Table structure for table `anfragen`
--

CREATE TABLE `anfragen` (
  `BID1` int(11) NOT NULL,
  `BID2` int(11) NOT NULL,
  `bestätigung` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `antwort`
--

CREATE TABLE `antwort` (
  `BID` int(11) NOT NULL,
  `FID` int(11) NOT NULL,
  `antwort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `benutzer`
--

CREATE TABLE `benutzer` (
  `BID` int(11) NOT NULL,
  `benutzername` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `benutzer`
--

INSERT INTO `benutzer` (`BID`, `benutzername`, `Password`) VALUES
(1, 'Horst', '123456'),
(2, 'Mareike', '4321');

-- --------------------------------------------------------

--
-- Table structure for table `frage`
--

CREATE TABLE `frage` (
  `FID` int(11) NOT NULL,
  `Frage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frage`
--

INSERT INTO `frage` (`FID`, `Frage`) VALUES
(1, 'Magst du Bratwurst?'),
(2, 'Was ist dein Lieblingsessen?');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antwort`
--
ALTER TABLE `antwort`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `benutzer`
--
ALTER TABLE `benutzer`
  ADD PRIMARY KEY (`BID`);

--
-- Indexes for table `frage`
--
ALTER TABLE `frage`
  ADD PRIMARY KEY (`FID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `benutzer`
--
ALTER TABLE `benutzer`
  MODIFY `BID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `frage`
--
ALTER TABLE `frage`
  MODIFY `FID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
