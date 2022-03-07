-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 12:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `busbooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingid` int(11) NOT NULL,
  `busrouteid` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `seats` int(11) DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `bdate` date DEFAULT NULL,
  `jdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `busrouteid`, `cust_id`, `seats`, `amount`, `bdate`, `jdate`) VALUES
(3, 3, 2, 2, 2500, '2022-01-09', '2022-01-21'),
(5, 2, 2, 1, 700, '2022-01-09', '2022-01-21'),
(6, 2, 2, 1, 700, '2022-01-09', '2022-01-21'),
(7, 2, 2, 1, 700, '2022-01-09', '2022-01-21'),
(8, 2, 2, 1, 700, '2022-01-09', '2022-01-21'),
(9, 2, 2, 2, 1400, '2022-01-10', '2022-01-21'),
(10, 5, 2, 2, 800, '2022-01-12', '2022-01-27'),
(12, 2, 2, 1, 700, '2022-01-13', '2022-01-27'),
(14, 6, 1, 1, 400, '2022-01-13', '2022-01-27'),
(15, 3, 2, 1, 1250, '2022-01-15', '2022-01-27'),
(16, 2, 2, 1, 700, '2022-01-17', '2022-01-27'),
(17, 2, 2, 1, 700, '2022-01-18', '2022-01-27'),
(18, 2, 2, 1, 700, '2022-01-18', '2022-01-27'),
(19, 2, 2, 1, 700, '2022-01-18', '2022-01-27'),
(20, 2, 2, 1, 700, '2022-01-18', '2022-01-27'),
(21, 2, 2, 1, 700, '2022-01-18', '2022-01-27'),
(22, 2, 2, 1, 700, '2022-01-19', '2022-01-27'),
(23, 2, 2, 1, 700, '2022-01-19', '2022-01-27'),
(24, 2, 2, 1, 700, '2022-01-19', '2022-01-27'),
(25, 2, 2, 1, 700, '2022-01-19', '2022-01-27'),
(26, 2, 2, 1, 700, '2022-01-19', '2022-01-27'),
(27, 2, 2, 2, 1400, '2022-01-21', '2022-01-27'),
(28, 2, 2, 2, 1400, '2022-01-21', '2022-01-27'),
(29, 2, 2, 2, 1400, '2022-01-21', '2022-01-27'),
(30, 2, 2, 1, 700, '2022-01-21', '2022-01-27'),
(31, 2, 2, 1, 700, '2022-01-22', '2022-01-27'),
(32, 2, 2, 1, 700, '2022-01-22', '2022-01-27'),
(33, 2, 2, 1, 700, '2022-01-22', '2022-01-27'),
(34, 2, 2, 1, 700, '2022-01-22', '2022-01-27'),
(35, 2, 2, 1, 700, '2022-01-22', '2022-01-27'),
(36, 2, 2, 1, 700, '2022-01-22', '2022-01-27'),
(37, 2, 2, 1, 700, '2022-01-22', '2022-01-27'),
(38, 2, 2, 1, 700, '2022-01-22', '2022-01-27'),
(39, 2, 2, 1, 700, '2022-01-22', '2022-01-27'),
(40, 2, 2, 1, 700, '2022-01-22', '2022-01-27'),
(41, 2, 2, 1, 700, '2022-01-22', '2022-01-27'),
(42, 1, 2, 1, 400, '2022-01-22', '2022-01-27'),
(43, 1, 2, 1, 400, '2022-01-23', '2022-01-27'),
(44, 1, 2, 1, 400, '2022-01-23', '2022-01-27'),
(45, 1, 2, 1, 400, '2022-01-23', '2022-01-27'),
(46, 1, 2, 1, 400, '2022-01-23', '2022-01-27'),
(47, 1, 2, 1, 400, '2022-01-23', '2022-01-27'),
(48, 1, 2, 6, 2400, '2022-01-23', '2022-01-27'),
(49, 7, 3, 2, 4000, '2022-01-23', '2022-01-24'),
(50, 7, 3, 2, 4000, '2022-01-23', '2022-01-27'),
(51, 2, 6, 1, 700, '2022-01-25', '2022-01-28'),
(52, 7, 2, 1, 2000, '2022-01-25', '2022-01-28'),
(53, 3, 2, 1, 1250, '2022-01-25', '2022-01-27'),
(54, 3, 2, 1, 1250, '2022-01-25', '2022-01-27'),
(55, 3, 2, 1, 1250, '2022-01-26', '2022-01-28'),
(56, 7, 2, 1, 2000, '2022-01-26', '2022-01-28'),
(57, 5, 4, 1, 400, '2022-01-26', '2022-01-29'),
(58, 5, 3, 1, 400, '2022-01-26', '2022-01-29'),
(59, 3, 7, 4, 5000, '2022-01-27', '2022-01-30'),
(60, 2, 2, 1, 700, '2022-02-01', '2022-02-02'),
(61, 4, 8, 2, 900, '2022-02-09', '2022-02-10'),
(62, 3, 2, 1, 1250, '2022-02-09', '2022-02-10'),
(63, 3, 9, 2, 2500, '2022-02-09', '2022-02-15'),
(64, 4, 9, 1, 450, '2022-02-09', '2022-02-23'),
(65, 2, 2, 1, 700, '2022-02-09', '2022-02-10'),
(66, 8, 2, 1, 2000, '2022-02-10', '2022-02-11'),
(67, 9, 2, 1, 3000, '2022-02-10', '2022-02-11'),
(68, 9, 3, 2, 6000, '2022-02-10', '2022-02-11'),
(69, 6, 3, 2, 800, '2022-02-13', '2022-02-14'),
(70, 3, 2, 4, 5000, '2022-02-18', '2022-02-26'),
(72, 5, 2, 1, 400, '2022-02-18', '2022-02-25'),
(73, 4, 2, 2, 900, '2022-02-20', '2022-02-25'),
(74, 10, 10, 2, 5000, '2022-02-22', '2022-02-24'),
(75, 2, 8, 1, 700, '2022-02-22', '2022-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `breview`
--

CREATE TABLE `breview` (
  `rno` int(11) NOT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `rdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `breview`
--

INSERT INTO `breview` (`rno`, `cust_id`, `review`, `cname`, `rdate`) VALUES
(15, 2, 'Very Good', 'Karan', '2022-01-16'),
(16, 2, 'Easy to use', 'Karan', '2022-01-17'),
(17, 2, 'Easy to use', 'Karan', '2022-01-17'),
(18, 2, 'Nice booking Experience', 'Karan', '2022-01-23'),
(19, 6, 'Very Good booking expiriance', 'Mohan', '2022-01-25'),
(20, 10, 'Very Good Expiriance', 'Kartik Mohan', '2022-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_no` varchar(50) NOT NULL,
  `busname` varchar(50) DEFAULT NULL,
  `seat` int(11) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_no`, `busname`, `seat`, `type`) VALUES
('GJ-20-AB-2015', 'VRL', 30, 'Non AC'),
('KA-32-PQ-6545', 'Dolphin', 30, 'AC'),
('MH-05-AB-4565', 'Volvo', 30, 'Non AC'),
('MH-05-AB-6578', 'Orange Bus', 30, 'AC'),
('MH-15-AB-1965', 'Srs', 30, 'Non AC'),
('MH-15-JK-6969', 'Scania', 30, 'AC');

-- --------------------------------------------------------

--
-- Table structure for table `bus_route`
--

CREATE TABLE `bus_route` (
  `busrouteid` int(11) NOT NULL,
  `source` varchar(20) DEFAULT NULL,
  `destination` varchar(20) DEFAULT NULL,
  `arrival_time` time DEFAULT NULL,
  `departure_time` time DEFAULT NULL,
  `distance` int(11) DEFAULT NULL,
  `fare` int(11) DEFAULT NULL,
  `bus_no` varchar(50) DEFAULT NULL,
  `driver_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_route`
--

INSERT INTO `bus_route` (`busrouteid`, `source`, `destination`, `arrival_time`, `departure_time`, `distance`, `fare`, `bus_no`, `driver_no`) VALUES
(1, 'Nashik', 'Mumbai', '20:30:00', '12:30:00', 200, 400, 'GJ-20-AB-2015', 1),
(2, 'Nashik', 'Karad', '22:30:00', '05:30:00', 560, 700, 'MH-15-AB-1965', 2),
(3, 'Nashik', 'Bengluru', '14:30:00', '11:00:00', 1150, 1250, 'KA-32-PQ-6545', 3),
(4, 'Nashik', 'Mumbai', '22:30:00', '06:30:00', 200, 450, 'KA-32-PQ-6545', 3),
(5, 'Mumbai', 'Nashik', '10:30:00', '12:30:00', 200, 400, 'MH-15-AB-1965', 3),
(6, 'Mumbai', 'Nashik', '12:30:00', '17:30:00', 250, 400, 'MH-15-JK-6969', 2),
(7, 'Nashik', 'Bengluru', '12:30:00', '11:20:00', 1250, 2000, 'MH-15-AB-1965', 3),
(8, 'Bengluru', 'Nashik', '19:09:00', '16:09:00', 1200, 2000, 'MH-05-AB-4565', 2),
(9, 'Chennai', 'Nashik', '05:18:00', '19:18:00', 1500, 3000, 'MH-15-JK-6969', 3),
(10, 'Bengluru', 'Mumbai', '14:09:00', '11:09:00', 1250, 2500, 'KA-32-PQ-6545', 2),
(11, 'Chennai', 'Mumbai', '22:13:00', '20:13:00', 2000, 3500, 'GJ-20-AB-2015', 1),
(12, 'Mumbai', 'Chennai', '12:15:00', '10:15:00', 2500, 3500, 'MH-05-AB-4565', 3),
(13, 'Mumbai', 'Bengluru', '23:16:00', '16:16:00', 1300, 2500, 'KA-32-PQ-6545', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact_no` mediumtext NOT NULL,
  `adharno` mediumtext NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `address`, `contact_no`, `adharno`, `uname`, `password`, `email`) VALUES
(1, 'Admin', 'Nashik', '9834610521', '123456789012', 'admin', '$2y$10$TqGQmgR6HNtq0ejz7Yz3/OOshynrCPv3HdAx3C.Lty2huBvs06X/u', 'abc@gmail.com'),
(2, 'Karan', 'Pune', '1234567890', '123456789412', 'customer1', '$2y$10$dEeZ8rDYjmFXJ21LZYxWeu0f3Sz7zuJXiYnYlR02NUQ8gQia0TsPC', 'kundansonawane844@gmail.com'),
(3, 'Pravin', 'Mumbai', '1234569870', '123654789987', 'customer2', '$2y$10$n2U/8dE2Xj/6Z1M1xIVegecHruRVtpNedsiREMOGWUQDldgZEvmqe', 'surajvishwakarma9850@gmail.com'),
(4, 'Vaibhav', 'Karad', '1234569870', '987456321012', 'customer3', '$2y$10$NsvBwvdpwcNwaJ71e8Qdze01CGlO8oA9ZnVxrFjHl/SEtveJ34YfK', 'abc4@gmail.com'),
(5, 'Soham', 'Mumbai', '1236547892', '123456987016', 'customer4', '$2y$10$q4KeqKFp/RSk.7KN9yvQyu7N656zvWvv97E0pbFoqVB3K3sCtsH0e', 'abc5@gmail.com'),
(6, 'Mohan', 'Karad', '1234567890', '123456789012', 'customer5', '$2y$10$h0CLm8x94XTBmMVZI0fYFePceZxGmKb172MtF5D1jmrVxWvWOh0Me', 'abc6@gmail.com'),
(7, 'Neha', 'nashik', '8668437571', '757578797610', 'Neha1', '$2y$10$goZ1IOl6lm9d4QUr3nCAyeFxLB6BMaGceWcaVAdGW83/YMcdX2aMm', 'neha985086@gmail.com'),
(8, 'Gaurav', 'dubai', '7873892839', '828283929493', 'gaurav', '$2y$10$fTFAwCLPab0mR6qmYKyROOTG2jHfCskxW03b7n070xqIILiXLlhoe', 'gauravhire2001@gmail.com'),
(9, 'shubham', 'jalgaon', '1234567890', '123456987012', 'sp7777', '$2y$10$1KAkCZh4N5KH13t9tF0J4e0L4gHjaxBt5.wvc6wIqTpFio.jNNgm6', 'sp777731@gmail.com'),
(10, 'Kartik Mohan', 'Pune', '1234567890', '123456987012', 'Kartik', '$2y$10$Ld2YA2OYWY6hszWvByBN8e9k1o6MFgQhfXWfebneXJZEJ2cHtI9jq', 'Suraj98508686@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_no` int(11) NOT NULL,
  `driver_name` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `contact_no` mediumtext DEFAULT NULL,
  `license_number` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_no`, `driver_name`, `address`, `contact_no`, `license_number`) VALUES
(1, 'Mohan', 'Nashik', '6512324565', '123456789112'),
(2, 'Ashok', 'Mumbai', '6547891231', '123789654012'),
(3, 'Ramesh', 'Karad', '3214659870', '123654789032'),
(4, 'Mahesh', 'Mumbai', '1234569870', '123456987012');

-- --------------------------------------------------------

--
-- Table structure for table `jreview`
--

CREATE TABLE `jreview` (
  `rno` int(11) NOT NULL,
  `busroute` varchar(50) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `review` varchar(255) DEFAULT NULL,
  `cname` varchar(50) DEFAULT NULL,
  `rdate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jreview`
--

INSERT INTO `jreview` (`rno`, `busroute`, `cust_id`, `review`, `cname`, `rdate`) VALUES
(4, 'Nashik-Bengluru', 2, 'Journey Was so good', 'Karan', '2022-01-17'),
(5, 'Nashik-Bengluru', 2, 'Good journey', 'Karan', '2022-01-23'),
(6, 'Nashik-Bengluru', 7, 'bus is very dirty and driver or conductor behavaiour is not good .... very bad experiance', 'Neha', '2022-02-01'),
(7, 'Chennai-Nashik', 2, 'Good Journey', 'Karan', '2022-02-13'),
(8, 'Chennai-Nashik', 2, 'Best Journey Expiriance', 'Karan', '2022-02-22');

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `pid` int(11) NOT NULL,
  `pname` varchar(25) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `seat_no` int(11) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `bookingid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`pid`, `pname`, `age`, `gender`, `seat_no`, `cust_id`, `bookingid`) VALUES
(1, 'Suraj', 21, 'MALE', 1, 2, 1),
(2, 'Rohit', 18, 'MALE', 2, 2, 1),
(9, 'Gaurav', 21, 'MALE', 1, 2, 3),
(10, 'Mohan', 22, 'MALE', 2, 2, 3),
(12, 'Suraj', 21, 'MALE', 10, 2, 5),
(13, 'Suraj', 21, 'MALE', 11, 2, 6),
(14, 'Suraj', 21, 'MALE', 12, 2, 7),
(15, 'Suraj', 18, 'MALE', 13, 2, 8),
(16, 'Suraj', 18, 'MALE', 14, 2, 9),
(17, 'Rohit', 18, 'MALE', 15, 2, 9),
(18, 'Soham', 21, 'MALE', 1, 2, 10),
(19, 'Mohan', 22, 'MALE', 2, 2, 10),
(21, 'Suraj', 21, 'MALE', 17, 2, 12),
(23, 'Rohan', 21, 'MALE', 1, 1, 14),
(24, 'Mohit', 21, 'MALE', 3, 2, 15),
(25, 'Suresh', 21, 'MALE', 20, 2, 16),
(26, 'karan', 21, 'MALE', 21, 2, 17),
(27, 'Mohan', 12, 'MALE', 22, 2, 18),
(28, 'Soham', 22, 'MALE', 23, 2, 19),
(29, 'Manohar', 22, 'MALE', 24, 2, 20),
(30, 'Soham', 21, 'MALE', 25, 2, 21),
(31, 'Soham', 21, 'MALE', 26, 2, 22),
(32, 'Mohan', 22, '', 27, 2, 23),
(33, 'Moahn', 21, 'MALE', 28, 2, 24),
(34, 'Mohan', 21, 'MALE', 29, 2, 25),
(35, 'Mohan', 21, 'MALE', 30, 2, 26),
(36, 'Suraj', 21, 'MALE', 31, 2, 27),
(37, 'Rohit', 18, 'MALE', 32, 2, 27),
(38, 'Suraj', 21, 'MALE', 33, 2, 28),
(39, 'Rohit', 18, 'MALE', 34, 2, 28),
(40, 'Suraj', 21, 'MALE', 35, 2, 29),
(41, 'Rohit', 18, 'MALE', 36, 2, 29),
(42, 'Suraj', 21, 'MALE', 37, 2, 30),
(43, 'Mohan', 21, 'MALE', 38, 2, 31),
(44, 'Mohan', 21, 'MALE', 39, 2, 32),
(45, 'Mohan', 21, 'MALE', 40, 2, 33),
(46, 'Suresh', 21, 'MALE', 41, 2, 34),
(47, 'Mohan', 21, 'MALE', 42, 2, 35),
(48, 'Mohan', 21, 'MALE', 43, 2, 36),
(49, 'Mohan', 21, 'MALE', 44, 2, 37),
(50, 'Mohan', 21, 'MALE', 44, 2, 38),
(51, 'Mohan', 21, 'MALE', 45, 2, 39),
(52, 'Gaurav', 21, 'MALE', 46, 2, 40),
(53, 'Soham', 21, 'MALE', 47, 2, 41),
(54, 'Suraj', 21, 'MALE', 48, 2, 42),
(55, 'Rohit', 21, 'MALE', 49, 2, 42),
(56, 'Mohit', 21, 'MALE', 50, 2, 42),
(57, 'Karan', 21, 'MALE', 1, 2, 42),
(58, 'Rohit', 21, 'MALE', 1, 2, 43),
(59, 'Rohit', 21, 'MALE', 1, 2, 43),
(60, 'Rohit', 21, 'MALE', 1, 2, 44),
(61, 'Soham', 21, 'MALE', 1, 2, 45),
(62, 'Soham', 21, 'MALE', 1, 2, 46),
(63, 'Soham', 21, 'MALE', 1, 2, 47),
(64, 'Mohan', 21, 'MALE', 3, 2, 48),
(65, 'Rohit', 13, 'MALE', 4, 2, 48),
(66, 'Devanand', 21, 'MALE', 5, 2, 48),
(67, 'Krishna', 45, 'MALE', 6, 2, 48),
(68, 'Abhishek', 21, 'MALE', 7, 2, 48),
(69, 'Manohar', 32, 'MALE', 8, 2, 48),
(70, 'Mohan', 21, 'MALE', 1, 3, 49),
(71, 'Mohit', 22, 'MALE', 2, 3, 49),
(72, 'Rohit', 21, 'MALE', 1, 3, 50),
(73, 'Karan', 22, 'MALE', 2, 3, 50),
(74, 'Karan', 21, 'MALE', 1, 6, 51),
(75, 'Mohan', 21, 'MALE', 1, 2, 52),
(76, 'Mohit', 25, 'MALE', 2, 2, 53),
(77, 'Mohit', 24, 'MALE', 3, 2, 54),
(78, 'Karan', 32, 'MALE', 1, 2, 55),
(79, 'Soham', 21, 'MALE', 2, 2, 56),
(80, 'Vaibhav', 21, 'MALE', 1, 4, 57),
(81, 'Mohit', 21, 'MALE', 2, 3, 58),
(82, 'Neha', 19, 'FEMALE', 1, 7, 59),
(83, 'Rohit', 17, 'MALE', 2, 7, 59),
(84, 'anita', 32, 'FEMALE', 3, 7, 59),
(85, 'rakesh', 35, 'MALE', 4, 7, 59),
(86, 'Mohan', 21, 'MALE', 1, 2, 60),
(87, 'gaurav', 21, 'MALE', 1, 8, 61),
(88, 'suraj', 50, 'MALE', 2, 8, 61),
(89, 'Gaurav', 21, 'MALE', 1, 2, 62),
(90, 'shubham', 23, 'MALE', 1, 9, 63),
(91, 'abhi', 21, 'MALE', 2, 9, 63),
(92, 'Gaurav', 75, 'MALE', 1, 9, 64),
(93, 'Suraj', 21, 'MALE', 1, 2, 65),
(94, 'Mohan', 21, 'MALE', 1, 2, 66),
(95, 'Kisan', 31, 'MALE', 1, 2, 67),
(96, 'Mohan', 21, 'MALE', 2, 3, 68),
(97, 'Soham', 22, 'MALE', 3, 3, 68),
(98, 'Mohan', 21, 'MALE', 1, 3, 69),
(99, 'Rohit', 22, 'MALE', 2, 3, 69),
(100, 'Kundan', 21, 'MALE', 1, 2, 70),
(101, 'Devanand', 21, 'MALE', 2, 2, 70),
(102, 'Abhishek', 21, 'MALE', 3, 2, 70),
(103, 'Shubham', 25, 'MALE', 4, 2, 70),
(105, 'Mohan', 21, 'MALE', 1, 2, 72),
(106, 'Mohan', 21, 'MALE', 1, 2, 73),
(107, 'Rohit', 21, 'MALE', 2, 2, 73),
(108, 'Suraj', 21, 'MALE', 1, 10, 74),
(109, 'Mohan', 22, 'MALE', 2, 10, 74),
(110, 'gaurav', 50, 'MALE', 1, 8, 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingid`);

--
-- Indexes for table `breview`
--
ALTER TABLE `breview`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_no`);

--
-- Indexes for table `bus_route`
--
ALTER TABLE `bus_route`
  ADD PRIMARY KEY (`busrouteid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `contact_no` (`contact_no`,`adharno`,`uname`,`email`) USING HASH;

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_no`),
  ADD UNIQUE KEY `contact_no` (`contact_no`,`license_number`) USING HASH;

--
-- Indexes for table `jreview`
--
ALTER TABLE `jreview`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
