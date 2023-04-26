-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2022 at 06:49 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airport`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `Air_code` int(11) NOT NULL,
  `A_name` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `State` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`Air_code`, `A_name`, `Country`, `State`) VALUES
(129, 'International 5', 'India', 'Banglore'),
(132, 'International 3', 'India', 'Chennai'),
(145, 'International 1', 'India', 'Indore'),
(784, 'International 4', 'India', 'Hyderabad'),
(845, 'International 2', 'India', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `a_d`
--

CREATE TABLE `a_d` (
  `Plane_no` int(10) NOT NULL,
  `Air_time` int(10) NOT NULL,
  `Arrival_air_city` varchar(30) NOT NULL,
  `Dept_air_city` varchar(30) NOT NULL,
  `arrival_time` int(10) NOT NULL,
  `dept_time` int(10) NOT NULL,
  `arrival_date` varchar(20) NOT NULL,
  `dept_date` varchar(20) NOT NULL,
  `fly_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `a_d`
--

INSERT INTO `a_d` (`Plane_no`, `Air_time`, `Arrival_air_city`, `Dept_air_city`, `arrival_time`, `dept_time`, `arrival_date`, `dept_date`, `fly_id`) VALUES
(1, 45, 'Delhi', 'Indore', 54, 21, '2022-12-12', '2022-12-12', 1),
(2, 55, 'Delhi', 'Indore', 84, 48, '2022-12-12', '2022-12-12', 2),
(3, 84, 'Delhi', 'Banglore', 41, 84, '2022-08-01', '2022-08-01', 3),
(4, 23, 'Chennai', 'Hyderabad', 41, 98, '2022-09-05', '2022-09-05', 4);

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

CREATE TABLE `boards` (
  `P_id` int(11) NOT NULL,
  `Plane_no` int(11) NOT NULL,
  `Ticket_No` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`P_id`, `Plane_no`, `Ticket_No`) VALUES
(6, 1, 65488),
(6, 2, 65490);

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `Plane_no` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`Plane_no`, `Name`, `Capacity`) VALUES
(1, 'fly', 200),
(2, 'Indigo', 150),
(3, 'Air India', 125),
(4, 'Spicejet', 150);

-- --------------------------------------------------------

--
-- Table structure for table `fly`
--

CREATE TABLE `fly` (
  `Plane_no` int(11) NOT NULL,
  `Pi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fly`
--

INSERT INTO `fly` (`Plane_no`, `Pi_id`) VALUES
(1, 41),
(2, 42),
(3, 43),
(4, 43);

-- --------------------------------------------------------

--
-- Table structure for table `pilot`
--

CREATE TABLE `pilot` (
  `Pi_id` int(11) NOT NULL,
  `Pi_name` varchar(50) NOT NULL,
  `years_flying` int(11) NOT NULL,
  `Lic_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pilot`
--

INSERT INTO `pilot` (`Pi_id`, `Pi_name`, `years_flying`, `Lic_no`) VALUES
(41, 'Kanishk', 30, '651648686464'),
(42, 'Ayush', 12, '546985412354'),
(43, 'Sritama', 7, '846845245651'),
(44, 'Shreya', 5, '845795452154');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `P_Id` int(11) NOT NULL,
  `P_Name` varchar(50) NOT NULL,
  `P_Ph_No` varchar(15) NOT NULL,
  `P_Mail` varchar(25) NOT NULL,
  `P_Pass` int(10) NOT NULL,
  `P_Gender` varchar(10) NOT NULL,
  `P_City` varchar(25) NOT NULL,
  `P_State` varchar(25) NOT NULL,
  `P_Address` varchar(100) NOT NULL,
  `P_Pincode` int(10) NOT NULL,
  `P_DOB` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`P_Id`, `P_Name`, `P_Ph_No`, `P_Mail`, `P_Pass`, `P_Gender`, `P_City`, `P_State`, `P_Address`, `P_Pincode`, `P_DOB`) VALUES
(1, 'Kanishk Mittal', '9560699316', 'kanishkrajmittal@gmail.co', 12345, 'Male', 'East Delhi', 'Delhi', 'B-12 Anand Vihar', 110092, '2002-11-22'),
(6, 'Sanidhya Jain', '184284819298888', 'abcd@gmail.com', 0, 'Male', 'Noida', 'UP', 'ghar', 12369, '1990-03-25'),
(7, 'Rajesh Agarwal', '8458468451', 'rajeshagarwal@gmail.com', 5462, 'Male', 'UP', 'Noida', 'B-4 sector 62', 546212, '2001-12-3'),
(8, 'Riya Gupta', '8456245515', 'riyagupta@gmail.com', 8745, 'Female', 'Delhi', 'South Delhi', 'A-45 Ram Vihar', 112548, '2002-10-5');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`Air_code`);

--
-- Indexes for table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`Ticket_No`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`Plane_no`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`P_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `Air_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=846;

--
-- AUTO_INCREMENT for table `boards`
--
ALTER TABLE `boards`
  MODIFY `Ticket_No` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65491;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `Plane_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `P_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
