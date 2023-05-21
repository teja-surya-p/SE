-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 02:10 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsm`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `cid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`cid`, `username`, `email`, `mobile`, `age`, `password`, `image`, `gender`, `profile`) VALUES
(1, 'prudhvi', 'prudhviattuluri@gmail.com', '983473828', 19, '1', '', '', ''),
(2, 'A Prudhvi', 'prudviattuluri@gmail.com', '983473808', 19, 'abc', 'adharimage/group assignment.jpg', '', 'profileimage/nanisignatureresized.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `comp`
--

CREATE TABLE `comp` (
  `coid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `ward` int(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `dl` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comp`
--

INSERT INTO `comp` (`coid`, `username`, `age`, `ward`, `district`, `dl`, `pan`, `video`, `des`) VALUES
(1, 'prudhvi', 19, 123, 'guntur', '', '', '', 'lahlialihic hlahliu hweiluhiwuehfliuhwleifhiluawheflihwilefiluhwelfihlwiefewfhiulewf');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `username` varchar(40) NOT NULL,
  `ward_number` int(11) NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `dl` varchar(20) NOT NULL,
  `evidence` varchar(50) NOT NULL,
  `complaint_brief` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`username`, `ward_number`, `source`, `destination`, `dl`, `evidence`, `complaint_brief`) VALUES
('prudhvi', 1234, 'Guntur', 'Hyderabad', 'dl/MY PIC.jpg', 'complaints/AP19110010299 Lab Assignment - 2.zip', 'lkjehaiulhiuwaeuilfhe');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`area`) VALUES
('Guntur'),
('Vijayawada'),
('Kakinada'),
('Hyderabad');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `oid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `idproof` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`oid`, `username`, `email`, `age`, `mobile`, `profile`, `idproof`, `image`, `gender`, `password`) VALUES
(1, 'b', 'b@gmail.com', 19, '1', '', '', '', '', 'q'),
(2, 'hasitha', 'hasitha@gmail.com', 21, '999999999', '', '', '', '', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`coid`);

--
-- Indexes for table `complaints`
--
ALTER TABLE `complaints`
  ADD UNIQUE KEY `evidence` (`evidence`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`oid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citizen`
--
ALTER TABLE `citizen`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comp`
--
ALTER TABLE `comp`
  MODIFY `coid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
