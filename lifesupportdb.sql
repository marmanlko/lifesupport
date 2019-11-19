-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2019 at 01:17 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifesupportdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Mobile_No` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `apptime` varchar(10) NOT NULL,
  `appdate` date NOT NULL,
  `service` varchar(20) NOT NULL,
  `Appoint_Booked_By` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `Name`, `Mobile_No`, `Email`, `apptime`, `appdate`, `service`, `Appoint_Booked_By`) VALUES
(14, 'shhan', '123', 'shan@gmail.com', '3PM-6PM', '2019-11-08', 'Ortho', 'sam'),
(15, 'dams', '123', 'dams@gmail.com', '9AM-1PM', '2019-11-01', 'Neuro', 'sam'),
(16, 'monty', '54321', 'monty@gmail.com', '3PM-6PM', '2019-11-13', 'Cordio', 'mak'),
(17, 'messi', '1234', 'messi@gmail.com', '8PM-10PM', '2019-11-20', 'Sports', 'mak'),
(18, 'shann', '12345', 'shaan@gmail.com', '3PM-6PM', '2019-11-06', 'Ortho', 'mak');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(30) NOT NULL,
  `doctorname` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `Specialization` varchar(30) NOT NULL,
  `hospitalname` varchar(30) NOT NULL,
  `hospitaladdress` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctorname`, `mobile`, `email`, `password`, `Specialization`, `hospitalname`, `hospitaladdress`) VALUES
(39, 'md arman', 123456789, 'arman@gmail.com', '1234', 'Neuro', 'AIIMS', 'Delhi'),
(40, 'md fahad', 123454321, 'fahad@gmail.com', '4321', 'Ortho', 'New Life', 'Lucknow'),
(41, 'waez', 123443, 'waez@gamil.com', 'waez', 'Sports', 'Appolo', 'Delhi'),
(42, 'john', 43224321, 'john@gmail.com', 'john', 'Cordio', 'Sahara', 'Lucknow');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(30) NOT NULL,
  `patientname` varchar(30) NOT NULL,
  `mobile` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `patientname`, `mobile`, `email`, `password`, `gender`, `age`) VALUES
(12, 'sam', 1234321, 'sam@gmail.com', 'sam', 'male', 23),
(13, 'mak', 654321, 'mak@gmail.com', 'mak', 'male', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
