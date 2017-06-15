-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2017 at 02:41 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `book_bank_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_dept` varchar(50) NOT NULL,
  `total` int(11) NOT NULL,
  `fine` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `book_name`, `book_dept`, `total`, `fine`) VALUES
(6, 'Let Us C', 'cse', 12, 1),
(9, 'Introduction to Algorithms by Cormen', 'cse', 14, 2),
(10, 'Basic Electrical Engineering', 'eee', 15, 0.7),
(11, 'Semiconductor Devices. ', 'ece', 16, 0.5),
(12, 'Basic Civil Engineering ', 'ce', 10, 0.9),
(13, 'Iron Making and Steel Making ', 'mme', 18, 1),
(14, 'Machine Systems ', 'me', 22, 0.8),
(15, 'Microprocessor & Interfacing ', 'ece', 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_issue`
--

CREATE TABLE IF NOT EXISTS `book_issue` (
  `roll` varchar(50) NOT NULL,
  `book1` int(11) NOT NULL,
  `book2` int(11) NOT NULL,
  `idate1` date NOT NULL,
  `idate2` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_issue`
--

INSERT INTO `book_issue` (`roll`, `book1`, `book2`, `idate1`, `idate2`) VALUES
('2014ugcs032', 7, 0, '2016-07-07', '0000-00-00'),
('2015ugcs019', 0, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `book_request`
--

CREATE TABLE IF NOT EXISTS `book_request` (
  `roll` varchar(50) NOT NULL,
  `book1` varchar(100) NOT NULL,
  `book2` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_request`
--

INSERT INTO `book_request` (`roll`, `book1`, `book2`, `total`) VALUES
('2014ugcs032', 'automobile', 'Complete Reference in Java', 2),
('2015ugcs019', 'kdjdjkj', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `roll` varchar(50) NOT NULL,
  `stname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `branch` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` char(10) NOT NULL,
  `batch` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(150) NOT NULL,
  `issued` int(11) NOT NULL,
  `requested` int(11) NOT NULL,
  `late_fine` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `stname`, `dob`, `branch`, `email`, `mobile`, `batch`, `username`, `password`, `address`, `issued`, `requested`, `late_fine`) VALUES
('2014ugcs032', 'Devesh Jagwani', '1996-12-12', 'cse', 'deveshjagwani8@gmail.com', '9097570023', 2014, 'devesh8091', 'bd2a261741c66e69a7a023d818b9dd7e', 'Room-1008 Hostel-D NIT Jamshedpur', 1, 2, 0),
('2014ugcs500', 'Admin', '1996-12-12', 'cse', 'deveshjagwani8@gmail.com', '9097570023', 2014, 'admin', '0192023a7bbd73250516f069df18b500', 'Room-1008 Hostel-D NIT Jamshedpur', 0, 0, 0),
('2015ugcs019', 'Gautam', '1996-04-16', 'cse', 'gautamsingh722@gmail.com', '9876543210', 2015, 'gautam', '125a77f1085bf9c374f91aee6912863c', 'Room no. - 1008, Hostel-D\r\nNational Institute of Technology, Jamshedpur', 0, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_issue`
--
ALTER TABLE `book_issue`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `book_request`
--
ALTER TABLE `book_request`
  ADD PRIMARY KEY (`roll`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`roll`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
