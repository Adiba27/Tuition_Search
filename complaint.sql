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
-- Database: `complaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_id` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Area` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin_id`, `Password`, `Position`, `Name`, `Area`) VALUES
('1', '123456', 'Complaint Manager', 'Jaman Khan', 'International '),
('2', '654321', 'Complaint Manager', 'Jamila Enam', 'Domestic'),
('3', '123', 'Class 9 ', 'Student 1', 'Dhanmondi'),
('4', '123', 'Class 6', 'Student 2', 'Demra'),
('5', '456', 'CSE Graduate', 'Teacher 1', 'Jigatola'),
('6', '456', 'BUET Graduate', 'Teacher 2', 'Banani');

-- --------------------------------------------------------

--
-- Table structure for table `complaintlist`
--

CREATE TABLE `complaintlist` (
  `Submit` varchar(50) NOT NULL,
  `Process` varchar(20) NOT NULL,
  `Complaint_id` varchar(50) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Short_description` varchar(500) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Day` varchar(5) NOT NULL,
  `Month` varchar(10) NOT NULL,
  `Year` varchar(10) NOT NULL,
  `Time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaintlist`
--

INSERT INTO `complaintlist` (`Submit`, `Process`, `Complaint_id`, `Type`, `Status`, `City`, `Short_description`, `Location`, `Day`, `Month`, `Year`, `Time`) VALUES
('111', '0001', '1', 'Technical', 'Processed', 'Dhaka', 'Connection Problem', '23.8103° N, 90.4125° E', '23', '7', '2020', '5:50 PM'),
('112', '0002', '2', 'Info', 'Processed', 'Dhaka', 'Can\'t find teacher\'s info', '23.9103° N, 90.3125° E', '24', '7', '2020', '7:50 PM'),
('113', '0003', '3', 'Response', 'Processed', 'Gazipur', 'Teacher is not Communicating', '23.4203° N, 90.6125° E', '4', '9', '2020', '6.05 PM'),
('114', '0004', '4', 'Technical', 'Processed', 'Dhaka', 'Website crashes again and again', '23.4103° N, 90.5138° E', '14', '8', '2019', '3.00 PM'),
('115', '0005', '5', 'Misbehave', 'Unprocessed', 'Dhaka', 'student is very rude', '23.7503° N, 90.4225° E', '01', '8', '2020', '1.30 PM');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
