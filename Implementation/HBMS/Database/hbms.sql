-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2019 at 06:06 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `addroom`
--

CREATE TABLE `addroom` (
  `id` int(11) NOT NULL,
  `rtype` varchar(30) NOT NULL,
  `bedding` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `cusid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addroom`
--

INSERT INTO `addroom` (`id`, `rtype`, `bedding`, `place`, `cusid`) VALUES
(11, 'Deluxe Room', 'Single', 'FREE', 0),
(12, 'Single Room', 'Single', 'FREE', 0),
(13, 'Superior Room', 'Triple', 'FREE', 0);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(10, 'admin@admin', 'admin@admin'),
(14, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `phone`, `email`) VALUES
(1, 'pradip', '9876541230', 'p@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `troom` varchar(30) NOT NULL,
  `bed` varchar(30) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `nroom` int(30) NOT NULL,
  `meal` varchar(30) NOT NULL,
  `roomprice` double(8,2) NOT NULL,
  `mealprice` double(8,2) NOT NULL,
  `grtotal` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roombooking`
--

CREATE TABLE `roombooking` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `national` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `troom` varchar(30) NOT NULL,
  `bed` varchar(30) NOT NULL,
  `nroom` int(10) NOT NULL,
  `meal` varchar(30) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombooking`
--

INSERT INTO `roombooking` (`id`, `title`, `fname`, `lname`, `email`, `national`, `country`, `phone`, `troom`, `bed`, `nroom`, `meal`, `checkin`, `checkout`) VALUES
(5, 'Dr.', 'pradip', 'dkl', 'p@gmail.com', ' Nepalese', 'Nepal', '2345554323', 'Superior Room', 'Double', 1, 'Breakfast', '2019-06-20', '2019-06-25'),
(6, 'Dr.', 'rupesh', 'thapa', 'rupesh.thapa2050@gmail.com', ' Nepalese', 'United States', '9874563210', 'Superior Room', 'Single', 1, 'Full Board', '2019-06-22', '2019-06-23'),
(7, 'Rev .', 'anil', 'thapa', 'anil@gmail.com', 'Non Sri Lankan ', 'Canada', '+98522222222', 'Superior Room', 'Double', 1, 'Half Board', '2019-06-23', '2019-06-26'),
(8, 'Mr.', 'mp', 'khatri', 'mp@gmail.com', 'Non Nepalese ', 'Uganda', '+885221155', 'Deluxe Room', 'Triple', 2, 'Room only', '2019-06-23', '2019-06-25'),
(9, 'Mr.', 'arjun', 'thapa', 'arjun@gmail.com', 'Non Nepalese ', 'Estonia', '6595925295', 'Single Room', 'Single', 1, 'Half Board', '2019-06-24', '2019-06-26');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `id` int(11) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phonenumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`id`, `uname`, `password`, `address`, `email`, `phonenumber`) VALUES
(1, 'admin', '123', 'dhapashi', 'pradipdhakal46@gmail.com', '9841236588'),
(2, 'pradip', '12345', 'ktm', 'p@gmail.com', '9841236588'),
(3, 'pass', 'pass', 'dhapashi', 'p@gmail.com', '9841236588'),
(4, 'pradip12', 'pradip', 'ktm', 'pradip.dhakal12@yahoo.com', '9841236588'),
(5, 'chris', '74125', 'UK', 'chris@gmail.com', '984123657'),
(6, 'anil12', 'anil123', 'banepa', 'anil@gmail.com', '987456321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addroom`
--
ALTER TABLE `addroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombooking`
--
ALTER TABLE `roombooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addroom`
--
ALTER TABLE `addroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roombooking`
--
ALTER TABLE `roombooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
