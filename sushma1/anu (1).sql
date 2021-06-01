-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2021 at 05:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anu`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`username`, `password`) VALUES
('hari', 'hari'),
('sushma', 'boggaram');

-- --------------------------------------------------------

--
-- Table structure for table `aplogin`
--

CREATE TABLE `aplogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aplogin`
--

INSERT INTO `aplogin` (`username`, `password`) VALUES
('aruna', 'login'),
('sajida', 'shaik'),
('karthik', 'bujji'),
('harsha', 'harsha');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Name` varchar(20) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Jdate` date NOT NULL,
  `EmailId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Name`, `Department`, `Gender`, `Jdate`, `EmailId`) VALUES
('aruna', 'School', 'Female', '2021-01-12', 'aruna@gmail.com'),
('sajida', 'School', 'Female', '2020-09-15', 'sajishaik@gmail.com'),
('karthik', 'School', 'Male', '2019-05-07', 'karthik@gmail.com'),
('harsha', 'School', 'Male', '2013-06-29', 'harsha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `info1`
--

CREATE TABLE `info1` (
  `Name` varchar(20) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Jdate` date NOT NULL,
  `EmailId` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info1`
--

INSERT INTO `info1` (`Name`, `Department`, `Gender`, `Jdate`, `EmailId`) VALUES
('chanikya', 'School', 'Male', '2020-10-13', 'chanikya@gmail.com'),
('mounika', 'School', 'Female', '2020-11-09', 'mouni@gmail.com'),
('kumari', 'School', 'Female', '2020-02-04', 'kumari@gmail.com'),
('sri', 'School', 'Female', '2021-05-04', 'sri@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `leavetab`
--

CREATE TABLE `leavetab` (
  `Typeofleave` varchar(20) NOT NULL,
  `Noofleaves` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leavetab`
--

INSERT INTO `leavetab` (`Typeofleave`, `Noofleaves`) VALUES
('casual', 15),
('medical', 15),
('earned', 15),
('maternity', 60);

-- --------------------------------------------------------

--
-- Table structure for table `leavetable`
--

CREATE TABLE `leavetable` (
  `Name` varchar(20) NOT NULL,
  `Typeofleave` varchar(20) NOT NULL,
  `Noofdays` int(11) NOT NULL,
  `Fromdate` date NOT NULL,
  `Todate` date NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Cancellation` varchar(10) NOT NULL,
  `Leaveid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leavetable`
--

INSERT INTO `leavetable` (`Name`, `Typeofleave`, `Noofdays`, `Fromdate`, `Todate`, `Status`, `Cancellation`, `Leaveid`) VALUES
('chanikya', 'medical', 3, '2021-05-12', '2021-05-15', 'rejected', 'cancel', 579167064),
('chanikya', 'casual', 3, '2021-06-02', '2021-06-05', 'rejected', 'cancel', 149306738),
('chanikya', 'medical', 14, '2021-06-06', '2021-06-23', 'pending', 'cancel', 1046039325),
('mounika', 'medical', 6, '2021-06-03', '2021-06-10', 'approved', 'cancel', 1176666821),
('mounika', 'casual', 2, '2021-06-02', '2021-06-04', 'rejected', 'cancel', 2120951800),
('mounika', 'casual', 2, '2021-06-01', '2021-06-03', 'cancelled', 'cancel', 1636005533),
('mounika', 'medical', 1, '2021-06-06', '2021-06-08', 'approved', 'cancel', 1911844629);

-- --------------------------------------------------------

--
-- Table structure for table `leavetable1`
--

CREATE TABLE `leavetable1` (
  `Name` varchar(20) NOT NULL,
  `Typeofleave` varchar(20) NOT NULL,
  `Noofdays` int(11) NOT NULL,
  `Fromdate` date NOT NULL,
  `Todate` date NOT NULL,
  `Status` varchar(15) NOT NULL,
  `Cancellation` varchar(10) NOT NULL,
  `Leaveid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `leavetable1`
--

INSERT INTO `leavetable1` (`Name`, `Typeofleave`, `Noofdays`, `Fromdate`, `Todate`, `Status`, `Cancellation`, `Leaveid`) VALUES
('aruna', 'casual', 3, '2021-06-01', '2021-06-04', 'pending', 'cancel', 1371024870),
('aruna', 'medical', 1, '2021-07-09', '2021-07-10', 'cancelled', 'cancel', 1338118583),
('aruna', 'maternity', 3, '2021-06-02', '2021-06-06', 'approved', 'cancel', 1388514477),
('sajida', 'medical', 10, '2021-06-05', '2021-06-17', 'approved', 'cancel', 1991074265),
('karthik', 'earned', 7, '2021-06-16', '2021-06-24', 'rejected', 'cancel', 1179487951),
('karthik', 'casual', 2, '2021-06-03', '2021-06-05', 'rejected', 'cancel', 1662107845),
('harsha', 'medical', 5, '2021-06-30', '2021-07-06', 'pending', 'cancel', 24907219),
('sajida', 'earned', 2, '2021-06-03', '2021-06-06', 'pending', 'cancel', 1868667723),
('sajida', 'maternity', 23, '2021-06-03', '2021-06-30', 'pending', 'cancel', 294326108);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('chanikya', 'channu'),
('mounika', 'chinni'),
('pooja', 'pinky'),
('srimanth', 'bolla'),
('poojitha', 'pooji'),
('kumari', 'naga'),
('sri', 'sri');

-- --------------------------------------------------------

--
-- Table structure for table `reason1`
--

CREATE TABLE `reason1` (
  `id` int(11) NOT NULL,
  `reason` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reason1`
--

INSERT INTO `reason1` (`id`, `reason`) VALUES
(1662107845, 'more staff required'),
(1179487951, 'more staff required');

-- --------------------------------------------------------

--
-- Table structure for table `reason2`
--

CREATE TABLE `reason2` (
  `id` int(11) NOT NULL,
  `reason` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reason2`
--

INSERT INTO `reason2` (`id`, `reason`) VALUES
(579167064, 'exams'),
(149306738, 'exams'),
(2120951800, 'exams are going on');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
