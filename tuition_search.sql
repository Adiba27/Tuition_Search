-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2021 at 01:35 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tuition_search`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` int(60) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Designation` varchar(60) NOT NULL,
  `Shift` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Name`, `Password`, `Designation`, `Shift`, `Email`) VALUES
(1, 'Karim Khan', '123456', 'Complaint Manager', 'Morning', 'karim@gmail.com'),
(2, 'Kakoli Enam', '654321', 'Complaint Manager', 'Day', 'kakoli@gmail.com'),
(3, 'Student 1', '123', 'SSC Candidate', 'N/A', 'student@gmail.com'),
(4, 'Teacher 1', '456', 'CSE Graduate', 'N/A', 'teacher@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `ID` int(60) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Contact` varchar(60) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Institution` varchar(60) NOT NULL,
  `Class` varchar(60) NOT NULL,
  `Subject` varchar(60) NOT NULL,
  `Honorarium` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`ID`, `Name`, `Email`, `Contact`, `Address`, `Institution`, `Class`, `Subject`, `Honorarium`) VALUES
(1, 'Adiba', 'adiba@gmail.com', '01638394632', 'Dhanmondi', 'BNMPC', 'Class 9 ', 'Science', '4000'),
(2, 'Farhan', 'farhan@gmail.com', '01863427494', 'Banani', 'St. Joseph', 'Class 5', 'Mathematics', '3000'),
(3, 'Hasan', 'hasan@yahoo.com', '015346487294', 'Cumilla', 'BAF', 'Class 7', 'Social Science', '2000'),
(4, 'Moumita', 'mou@gmail.com', '017936482648', 'Mohammadpur', 'Scholastica', '8', 'Bangla', '5000'),
(5, 'Dola', 'dola@xyz.com', '017383284758', 'Demra', 'Saleha School', 'Class 7', 'All', '7000'),
(3, 'Tabassum', 'tabassum@gmail.com', '97348478435', 'Dhanmondi', 'Holy Cross', 'Class 5 ', 'Bangla', '3000'),
(9, 'Fahim', 'fahim@gmail.com', '4234', 'Greenroad', 'NDC', 'class 12', 'Physics', '4000');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(60) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Phone` varchar(60) NOT NULL,
  `Degree` varchar(60) NOT NULL,
  `Subject` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `Name`, `Password`, `Email`, `Phone`, `Degree`, `Subject`) VALUES
(0, 'Kamal', '123456', 'kamal@gmail.com', '018263823992', 'CSE Graduate', 'ICT, English'),
(0, 'Nafisa', '123456', 'nafisa@gmail.com', '91273928392', 'BBA Graduate', 'Accounting'),
(3, 'Rafin', '00000', 'rafin@yahoo.com', '128392389283', '7th Semester, EEE', 'Science'),
(6, 'Rahim', '12345', 'rahim@gmail.com', '3456466', 'CSE Graduate', 'ICT'),
(10, 'Mou', '4362', 'mou@gmail.com', '124445345', 'EEE Graduate', 'ICT, Chemistry');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
