-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 06:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `addpackage`
--

CREATE TABLE `addpackage` (
  `packageid` int(11) NOT NULL,
  `packagename` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addpackage`
--

INSERT INTO `addpackage` (`packageid`, `packagename`, `location`, `price`, `features`, `details`, `image`) VALUES
(8, 'paraguiding', 'vagamon', '10000', 'fly around the world', 'aasddfgghhjj', 'pic7.jpg'),
(9, 'theekoyi', 'vagamon', '4455', 'tttttt', 'jjjjjj', 'pic4.jpg'),
(10, 'pine forest', 'vagamon', '10000', 'beautiful atmosphere', 'asdfgh', 'photo-1507525428034-b723cf961d3e.jfif'),
(11, 'err', 'ttyyy', '3333', 'gghhh', 'dffgfg', 'pic2.jpg'),
(12, 'qwe', 'kk', '300', 'ggh', 'hhjj', 'pic6.jpg'),
(13, 'thangalupara', 'vagamon', '10000', 'asdfghj', 'asdfgh', 'pic5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@gmail.com', 'admin'),
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `pid` int(11) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `expiration` varchar(255) NOT NULL,
  `security` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`pid`, `cardnumber`, `expiration`, `security`, `amount`) VALUES
(1, '0123456789101112', '01/23', '555', 5000000);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookid` int(11) NOT NULL,
  `userid` varchar(255) NOT NULL,
  `packageid` int(11) NOT NULL,
  `calender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookid`, `userid`, `packageid`, `calender`) VALUES
(1, '7', 8, ''),
(2, '7', 11, '2022-01-27'),
(3, '7', 10, '2022-01-14'),
(4, '7', 10, '2022-01-14'),
(5, '4', 9, '2022-01-20'),
(6, '3', 11, '2022-01-15'),
(7, '4', 13, '2022-01-22');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `fname`, `lname`, `email`, `mobile`, `msg`) VALUES
(1, 'rds', 'gfds', 'alb@gmail.com', '2147483647', 'sdfgh'),
(2, 'anna', 'alan', 'anna@gmail.com ', '2147483647', 'beautiful place , i will come again.......'),
(6, 'achu', 'appu', 'achuz@gmail.com', '2147483647', 'beautiful place , i will come again.......'),
(7, 'achu', 'appu', 'achuz@gmail.com', '2147483647', 'beautiful place , i will come again.......'),
(8, 'achu', 'appu', 'achuz@gmail.com', '98867556767', 'beautiful place , i will come again.......'),
(9, 'achu', 'appus', 'achuz@gmail.com', '9977665544', 'such a beauty full place'),
(10, 'achu', 'appus', 'achuz@gmail.com', '9977665544', 'such a beauty full place');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`name`, `password`) VALUES
('admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `userid` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`userid`, `name`, `address`, `mobile`, `district`, `email`, `password`) VALUES
(4, 'achuz', 'kottal', '9977665544', 'idukki', 'achuz@gmail.com', 'achuz123'),
(5, 'ammu', 'palakal', '9988776655', 'kollam', 'ammu@gmail.com', 'ammu'),
(6, 'akku', 'parambuvila', '7306062008', 'idukki', 'akku@gmail.com', 'akku123'),
(9, 'anoop', 'parambhuvila', '9977665544', 'idukki', 'anoop@gmail.com', 'echu'),
(13, 'sree', 'parambhuvila', '9977665544', 'kollam', 'sree@gmail.com', 'sree'),
(14, 'muth', 'kunnathu', '9776543636', 'kottayam', 'muth@gmail.com', 'muth');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addpackage`
--
ALTER TABLE `addpackage`
  ADD PRIMARY KEY (`packageid`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addpackage`
--
ALTER TABLE `addpackage`
  MODIFY `packageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
