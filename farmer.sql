-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 05:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farmer`
--

-- --------------------------------------------------------

--
-- Table structure for table `directorate_info`
--

CREATE TABLE `directorate_info` (
  `sno` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `directorate_info`
--

INSERT INTO `directorate_info` (`sno`, `user_name`, `password`) VALUES
(1, 'admin', '2222');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_question`
--

CREATE TABLE `farmer_question` (
  `sno` int(11) NOT NULL,
  `farmer_name` varchar(30) NOT NULL,
  `phone_no` varchar(14) NOT NULL,
  `area` varchar(20) NOT NULL,
  `type_of_crop` varchar(100) NOT NULL,
  `soil_conditon` varchar(100) NOT NULL,
  `surface` varchar(100) NOT NULL,
  `duration_of_crop` varchar(100) NOT NULL,
  `current_duration` varchar(100) NOT NULL,
  `previous_crop` varchar(100) NOT NULL,
  `previous_fertilizer_used` varchar(100) NOT NULL,
  `question` varchar(500) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer_question`
--

INSERT INTO `farmer_question` (`sno`, `farmer_name`, `phone_no`, `area`, `type_of_crop`, `soil_conditon`, `surface`, `duration_of_crop`, `current_duration`, `previous_crop`, `previous_fertilizer_used`, `question`, `photo`, `status`) VALUES
(1, 'YUGANDHAN', 'gdhhykgh', 'gdhgfhj', '', '', '', '', '', '', '', 'bnhhghdjyjbcvcfshghgngfhgggf', '62790e86e48f98.34361959.jpeg', 'naveen'),
(2, 'MAGI', 'hgcjhkglh', 'jhgjgggg', '', '', '', '', '', '', '', 'bfdgdgdm', '62790ed3a09d89.20243688.jpg', 'yugandhan\r\n'),
(3, 'yugandhan', '9940765433', 'CHENNAI', 'FJ,KY', 'KJG', 'HKHK', 'GKHG', 'HKG', 'JHGK', 'HGKJ', 'KG,JKGKGKG', '627d3b16748d03.62200363.jpg', 'CHANDRU');

-- --------------------------------------------------------

--
-- Table structure for table `farmer_reg`
--

CREATE TABLE `farmer_reg` (
  `Sno` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile_no` varchar(12) NOT NULL,
  `aadhar_no` varchar(14) NOT NULL,
  `area` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer_reg`
--

INSERT INTO `farmer_reg` (`Sno`, `name`, `mobile_no`, `aadhar_no`, `area`, `user_name`, `password`) VALUES
(1, 'yugandhan', '8610639869', '978991231198', 'PONNERI', 'test', '1111'),
(2, 'MAGI', '9876543210', '098765432112', 'ponneri', 'test2', '0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `directorate_info`
--
ALTER TABLE `directorate_info`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `farmer_question`
--
ALTER TABLE `farmer_question`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `farmer_reg`
--
ALTER TABLE `farmer_reg`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `directorate_info`
--
ALTER TABLE `directorate_info`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `farmer_question`
--
ALTER TABLE `farmer_question`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `farmer_reg`
--
ALTER TABLE `farmer_reg`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
