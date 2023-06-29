-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 09:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blooddinfo`
--

CREATE TABLE `blooddinfo` (
  `bdid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `bg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blooddinfo`
--

INSERT INTO `blooddinfo` (`bdid`, `rid`, `bg`) VALUES
(10, 10, 'A-'),
(11, 1, 'A+'),
(12, 2, 'AB+'),
(13, 3, 'O+'),
(14, 4, 'B+'),
(15, 5, 'B-'),
(18, 6, 'A-'),
(21, 7, 'AB+'),
(22, 9, 'O-'),
(23, 8, 'O+'),
(32, 11, 'B-'),
(34, 12, 'O-'),
(35, 13, 'A+'),
(36, 14, 'AB-'),
(38, 15, 'B+'),
(40, 16, 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `blooddonate`
--

CREATE TABLE `blooddonate` (
  `donoid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `bg` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blooddonate`
--

INSERT INTO `blooddonate` (`donoid`, `rid`, `hid`, `bg`, `status`) VALUES
(7, 1, 1, 'A+', 'Accepted'),
(11, 5, 1, 'B-', 'Pending'),
(13, 1, 6, 'A+', 'Pending'),
(14, 3, 6, 'O+', 'Pending'),
(15, 7, 6, 'AB+', 'Pending'),
(16, 8, 6, 'O+', 'Pending'),
(17, 4, 6, 'B+', 'Pending'),
(18, 2, 5, 'AB+', 'Pending'),
(19, 5, 5, 'B-', 'Pending'),
(20, 9, 5, 'O-', 'Pending'),
(21, 6, 5, 'A-', 'Pending'),
(24, 2, 1, 'AB+', 'Pending'),
(25, 7, 1, 'AB+', 'Pending'),
(26, 3, 1, 'O+', 'Pending'),
(27, 8, 1, 'O+', 'Pending'),
(28, 1, 2, 'A+', 'Pending'),
(30, 6, 2, 'A-', 'Pending'),
(32, 8, 2, 'O+', 'Pending'),
(33, 7, 2, 'AB+', 'Pending'),
(34, 3, 2, 'O+', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `bloodinfo`
--

CREATE TABLE `bloodinfo` (
  `bid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `bg` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodinfo`
--

INSERT INTO `bloodinfo` (`bid`, `hid`, `bg`) VALUES
(7, 1, 'A-'),
(8, 1, 'O+'),
(12, 4, 'A-'),
(13, 4, 'A+'),
(14, 4, 'AB+'),
(16, 5, 'A+'),
(17, 5, 'B-'),
(18, 5, 'O-'),
(20, 5, 'B+'),
(21, 6, 'O+'),
(22, 6, 'A-'),
(23, 6, 'O-'),
(24, 7, 'A-'),
(25, 7, 'A+'),
(26, 7, 'B-'),
(27, 7, 'B+'),
(31, 1, 'B-'),
(32, 2, 'A-'),
(33, 2, 'B+'),
(34, 2, 'AB-'),
(35, 2, 'AB+'),
(36, 2, 'O+'),
(37, 1, 'AB-'),
(38, 1, 'AB+');

-- --------------------------------------------------------

--
-- Table structure for table `bloodrequest`
--

CREATE TABLE `bloodrequest` (
  `reqid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `bg` varchar(11) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodrequest`
--

INSERT INTO `bloodrequest` (`reqid`, `hid`, `rid`, `bg`, `status`) VALUES
(7, 1, 1, 'A-', 'Pending'),
(8, 4, 1, 'A-', 'Pending'),
(9, 1, 5, 'A-', 'Pending'),
(10, 4, 5, 'AB+', 'Pending'),
(11, 5, 5, 'O-', 'Pending'),
(12, 7, 5, 'B-', 'Pending'),
(13, 1, 2, 'B-', 'Pending'),
(14, 4, 2, 'AB+', 'Pending'),
(15, 5, 2, 'O-', 'Pending'),
(16, 6, 2, 'O-', 'Pending'),
(17, 1, 6, 'O+', 'Pending'),
(18, 6, 6, 'A-', 'Pending'),
(19, 7, 6, 'B-', 'Pending'),
(20, 7, 6, 'B+', 'Pending'),
(21, 1, 9, 'O+', 'Pending'),
(22, 4, 9, 'A+', 'Pending'),
(23, 5, 9, 'A+', 'Pending'),
(24, 7, 9, 'A-', 'Pending'),
(25, 7, 9, 'B+', 'Pending'),
(26, 1, 4, 'A-', 'Pending'),
(27, 2, 4, 'B+', 'Pending'),
(28, 4, 4, 'A-', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `hemail` varchar(100) NOT NULL,
  `hpassword` varchar(100) NOT NULL,
  `hphone` varchar(100) NOT NULL,
  `hcity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hname`, `hemail`, `hpassword`, `hphone`, `hcity`) VALUES
(1, 'Gandhi Hospital', 'gandhi@gmail.com', 'gandhi@123', '7865376358', 'Bengaluru'),
(2, 'KLE Hospital', 'kle@gmail.com', 'kle@123', '9864792737', 'Belgaum'),
(3, 'SIMS Hospital', 'sims@gmail.com', 'sims@123', '7389636477', 'Shivamogga'),
(4, 'Arunodhaya', 'arunodhaya@gmail.com', 'arunodhaya@123', '9898988909', 'Ballari'),
(5, 'KIIMS', 'kiims@gmail.com', 'kiims@123', '80616156262', 'Bengaluru'),
(6, 'Apollo Hospital', 'apollo@gmail.com', 'apollo@123', '04428293333', 'Mysore'),
(7, 'Manipal Hospital', 'manipal@gmail.com', 'manipal@123', '9441432567', 'Udupi');

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

CREATE TABLE `receivers` (
  `id` int(11) NOT NULL,
  `rname` varchar(100) NOT NULL,
  `rwght` int(3) NOT NULL,
  `rage` int(3) NOT NULL,
  `remail` varchar(100) NOT NULL,
  `rpassword` varchar(100) NOT NULL,
  `rphone` varchar(100) NOT NULL,
  `rbg` varchar(10) NOT NULL,
  `rcity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `rname`, `rwght`, `rage`, `remail`, `rpassword`, `rphone`, `rbg`, `rcity`) VALUES
(1, 'Darshan Pednekar', 55, 21, 'darshan@gmail.com', 'darshan@123', '9876543210', 'A+', 'Karwar'),
(2, 'Nirmala Naik', 65, 21, 'nirmala@gmail.com', 'nirmala@123', '9876543215', 'AB-', 'Kolhapur'),
(3, 'Sheetal C M', 65, 16, 'sheetal@gmail.com', 'sheetal@123', '9876543218', 'O+', 'Gokak'),
(4, 'Harish Kumbhar', 50, 18, 'harish@gmail.com', 'harish@123', '9876543210', 'B+', 'Belgaum'),
(5, 'Praveen M R', 57, 23, 'praveen@gmail.com', 'praveen@123', '9876543211', 'B-', 'Shivamoga'),
(6, 'Adarsh Masekar', 60, 25, 'adarsh@gmail.com', 'adarsh@123', 'adarsh@123', 'A-', 'Haliyal'),
(7, 'Nandhini Patil', 44, 70, 'nandhini@gmail.com', 'nandhini@123', '9876543210', 'AB+', 'Bengaluru'),
(8, 'Shreeshail S S', 90, 67, 'shreeshail@gmail.com', 'shreeshail@123', '9876543210', 'O+', 'Bagalkot'),
(9, 'Anvitha Naik', 65, 78, 'anvitha@gmail.com', 'anvitha@123', '9876543219', 'O-', 'Karwar'),
(10, 'Shama syad', 55, 22, 'shama@gmail.com', 'shama@123', '9876456788', 'A-', 'Karwar'),
(11, 'Rose', 58, 25, 'rose@gmail.com', 'rose@123', '9837376285', 'B-', 'Mysore'),
(12, 'Manali', 60, 30, 'manali@gmail.com', 'manali@123', '7282872891', 'O-', 'Hubli'),
(13, 'Vidya Naik', 77, 22, 'vidya@gmail.com', 'vidya@123', '8123974127', 'A+', 'Bellary'),
(14, 'Vaishnavi', 55, 21, 'vaishnavi@gmail.com', 'vaishnavi@123', '8739065369', 'AB-', 'Tumkur'),
(15, 'Pooja', 50, 22, 'pooja@gmail.com', 'pooja@123', '9173864262', 'B+', 'Shivmogga'),
(16, 'Deeksha', 54, 25, 'deeksha@gmail.com', 'deeksha@123', '9765875765', 'AB+', 'Davangere');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blooddinfo`
--
ALTER TABLE `blooddinfo`
  ADD PRIMARY KEY (`bdid`),
  ADD KEY `blooddinfo_ibfk_2` (`rid`);

--
-- Indexes for table `blooddonate`
--
ALTER TABLE `blooddonate`
  ADD PRIMARY KEY (`donoid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  ADD PRIMARY KEY (`reqid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receivers`
--
ALTER TABLE `receivers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blooddinfo`
--
ALTER TABLE `blooddinfo`
  MODIFY `bdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `blooddonate`
--
ALTER TABLE `blooddonate`
  MODIFY `donoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `bloodrequest`
--
ALTER TABLE `bloodrequest`
  MODIFY `reqid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `receivers`
--
ALTER TABLE `receivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blooddinfo`
--
ALTER TABLE `blooddinfo`
  ADD CONSTRAINT `blooddinfo_ibfk_2` FOREIGN KEY (`rid`) REFERENCES `receivers` (`id`);

--
-- Constraints for table `bloodinfo`
--
ALTER TABLE `bloodinfo`
  ADD CONSTRAINT `bloodinfo_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hospitals` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
