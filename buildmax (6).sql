-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2025 at 05:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buildmax`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_architect`
--

CREATE TABLE `add_architect` (
  `architect_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(70) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `qualification` varchar(70) NOT NULL,
  `qualificationcertificate` varchar(70) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `add_architect`
--

INSERT INTO `add_architect` (`architect_id`, `name`, `photo`, `email`, `address`, `phoneno`, `qualification`, `qualificationcertificate`, `experience`, `password`) VALUES
(1, 'Abhishek s', 'abhishek.jpg', 'Abhishek123@gmail.com', 'aa houseindira nagardelhi', 2147483647, 'b.arch', 'certificate1.jpg', 'two years', 'abhi@#'),
(2, 'Nabeela', 'nabeela.jpg', 'nabeela@gmail.com', 'nabeela house\r\nMG road\r\nMumbai', 2147483647, 'm.arch', 'certificate3.jpg', 'three years', 'nabeela1'),
(3, 'Ajmal', 'ajmal.jpg', 'ajmal@gamil.com', 'ajmal house\r\nsm road\r\ndelhi', 2147483647, 'm.arch', 'certificate2.jpg', 'five years', 'ajmal123'),
(56, 'jana', 'images (1).jpg', 'jana@gmail.com', 'jana manzil, kasaragod', 987654321, 'b arch', 'certificate3.jpg', '3 year', 'jana@#');

-- --------------------------------------------------------

--
-- Table structure for table `arch_schedule`
--

CREATE TABLE `arch_schedule` (
  `schedule_id` int(11) NOT NULL,
  `assignedto` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `startingdate` date NOT NULL,
  `endingdate` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `arch_schedule`
--

INSERT INTO `arch_schedule` (`schedule_id`, `assignedto`, `email`, `startingdate`, `endingdate`, `status`) VALUES
(6, 'aysha', 'Abhishek123@gmail.com', '2024-12-30', '2025-03-28', 'In Progres'),
(7, 'aysha', 'Abhishek123@gmail.com', '2024-12-30', '2025-03-28', 'In Progres'),
(8, 'aysha@gmail.com', 'abhishek123@gmail.com', '2024-02-22', '2025-02-22', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `book_id` int(11) NOT NULL,
  `email` varchar(70) NOT NULL,
  `preffereddate` date NOT NULL,
  `message` varchar(200) NOT NULL,
  `bookstatus` varchar(10) NOT NULL,
  `archemail` varchar(70) NOT NULL,
  `process_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`book_id`, `email`, `preffereddate`, `message`, `bookstatus`, `archemail`, `process_status`) VALUES
(11, 'aysha@gmail.com', '2025-02-28', 'gtrgt', 'Rejected', 'abhi@gmail.com', ''),
(14, 'shyma@gmail.com', '2025-01-01', 'wesesx', 'Approved', 'huda@gmail.com', ''),
(15, 'shyma@gmail.com', '2025-02-08', 'fbb', 'Approved', 'abhi@gmail.com', ''),
(16, 'aysha@gmail.com', '2025-02-08', 'safffg', 'Approved', 'Abhishek123@gmail.com', 'finished'),
(17, 'shyma@gmail.com', '2026-02-05', 'hello', 'Approved', 'Abhishek123@gmail.com', 'roofing'),
(18, 'rinu@gmail.com', '2025-03-21', 'hi', 'Approved', 'nabeela@gmail.com', ''),
(19, 'rinu@gmail.com', '2025-04-18', 'hello', 'Rejected', 'ajmal@gamil.com', ''),
(20, 'aysha@gmail.com', '2026-06-22', 'hhyu', 'Pending', 'Abhishek123@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `designtype_details`
--

CREATE TABLE `designtype_details` (
  `designtype_id` int(11) NOT NULL,
  `designtype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `designtype_details`
--

INSERT INTO `designtype_details` (`designtype_id`, `designtype`) VALUES
(1, 'Modern'),
(2, 'Traditional');

-- --------------------------------------------------------

--
-- Table structure for table `design_details`
--

CREATE TABLE `design_details` (
  `design_id` int(11) NOT NULL,
  `designtype_id` int(11) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(70) NOT NULL,
  `email` varchar(200) NOT NULL,
  `budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `design_details`
--

INSERT INTO `design_details` (`design_id`, `designtype_id`, `description`, `image`, `email`, `budget`) VALUES
(1, 1, 'modern interior design for hall ', 'moderninteriordesign.jpg', 'Abhishek123@gmail.com', 0),
(2, 2, 'traditional interior design with traditional swing in hall ', 'traditional.jpg', 'Abhishek123@gmail.com', 0),
(3, 1, 'modern design with wood top and glass wall', 'moderninteriordesign1.jpg', 'nabeela@gmail.com', 0),
(4, 2, 'traditional design for veranda', 'traditional1.jpg', 'nabeela@gmail.com', 0),
(5, 1, 'modern interior design with partition between hall and dining', 'moderninteriordesign2.jpg', 'ajmal@gamil.com', 0),
(6, 2, 'traditional design for sofa area', 'traditional2.jpg', 'ajmal@gamil.com', 0),
(44, 1, 'modern design for hall of 300 sqrft', 'moderninteriordesign1.jpg', 'Abhishek123@gmail.com', 1200),
(45, 2, 'home', '22.jpeg', 'jubi@gmail.com', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `email`, `password`, `usertype`) VALUES
(1, 'admin@buildmax.com', 'admi@#', 'Admin'),
(15, 'aysha@gmail.com', 'aysh@#', 'user'),
(27, 'shyma@gmail.com', '123', 'user'),
(29, 'Abhishek123@gmail.com', 'abhi@#', 'architect'),
(30, 'nabeela@gmail.com', 'nabeela123', 'architect'),
(31, 'ajmal@gamil.com', 'ajmal123', 'architect'),
(40, 'jana@gmail.com', 'jana@#', 'architect'),
(41, 'aysha@gmail.com', '1234', 'user'),
(45, 'shym@gmail.com', 'shym@', 'user'),
(46, 'hi@gmail.com', 'hello@', 'user'),
(47, 'fida@gmail.com', 'fida@#', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `sender` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `receiver` varchar(50) DEFAULT NULL,
  `image` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`id`, `sender`, `message`, `created_at`, `receiver`, `image`) VALUES
(11, 'abhishek123@gmail.com', 'hi', '2025-02-18 06:29:01', 'admin@buildmax.com', ''),
(12, 'abhishek123@gmail.com', 'hello', '2025-02-18 06:37:42', 'aysha@gmail.com', ''),
(13, 'aysha@gmail.com', 'hello', '2025-02-18 06:38:37', 'admin@buildmax.com', ''),
(14, 'aysha@gmail.com', 'hi', '2025-02-18 06:39:01', 'abhishek123@gmail.com', ''),
(15, 'aysha@gmail.com', 'hi', '2025-02-22 08:40:11', 'jubi@buildmax.com', ''),
(16, 'aysha@gmail.com', 'uu8hu', '2025-02-22 08:40:32', 'jubi@buildmax.com', ''),
(17, 'jubi@gmail.com', 'hiy78', '2025-02-22 08:40:38', 'aysha@buildmax.com', ''),
(18, 'aysha@gmail.com', 'hi', '2025-02-22 08:41:50', 'jubi@gmail.com', ''),
(19, 'aysha@gmail.com', 'huuu', '2025-02-22 09:33:58', 'admin@buildmax.com', ''),
(20, 'abhishek123@gmail.com', 'ghuuii', '2025-02-22 09:34:12', 'aysha@gmail.com', ''),
(21, 'aysha@gmail.com', 'hello', '2025-02-22 10:31:58', 'abhishek123@gmail.com', ''),
(22, 'abhishek123@gmail.com', 'lo', '2025-02-23 12:43:13', 'aysha@gmail.com', ''),
(23, 'abhishek123@gmail.com', '', '2025-02-24 16:52:05', 'admin@buildmax.com', 'msg/22.jpeg'),
(24, 'admin@buildmax.com', 'hii', '2025-02-24 16:55:19', 'abhishek123@gmail.com', ''),
(25, 'abhishek123@gmail.com', 'gwdysgtf', '2025-02-25 04:03:06', 'admin@buildmax.com', ''),
(26, 'admin@buildmax.com', 'hxsusc', '2025-02-25 04:03:13', 'abhishek123@gmail.com', ''),
(27, 'abhishek123@gmail.com', '', '2025-02-25 04:03:39', 'admin@buildmax.com', 'msg/closedfloorplan2.png'),
(28, 'abhishek123@gmail.com', 'heyyyyyy', '2025-02-27 14:51:11', 'aysha@gmail.com', ''),
(29, 'aysha@gmail.com', 'loooo', '2025-02-27 14:51:26', 'abhishek123@gmail.com', ''),
(30, 'aysha@gmail.com', '', '2025-02-27 14:52:13', 'abhishek123@gmail.com', 'msg/22.jpeg'),
(31, 'admin@buildmax.com', 'loooo', '2025-03-01 16:05:55', 'aysha@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `date` date NOT NULL,
  `paytype` varchar(70) NOT NULL,
  `amount` int(11) NOT NULL,
  `paymentstatus` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `username`, `date`, `paytype`, `amount`, `paymentstatus`) VALUES
(1, 'aysha@gmail.com', '2025-02-22', 'credit-card', 1000, 'paid'),
(2, 'aysha@gmail.com', '2025-02-22', 'credit-card', 1000, 'paid'),
(3, 'aysha@gmail.com', '2025-03-01', 'debit-card', 1000, 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `plantype_details`
--

CREATE TABLE `plantype_details` (
  `plantype_id` int(11) NOT NULL,
  `plantype` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `plantype_details`
--

INSERT INTO `plantype_details` (`plantype_id`, `plantype`) VALUES
(3, 'Open Floor Plan'),
(5, 'Closed Floor Plan'),
(6, 'kitchen plan');

-- --------------------------------------------------------

--
-- Table structure for table `plan_details`
--

CREATE TABLE `plan_details` (
  `plan_id` int(11) NOT NULL,
  `plantype_id` int(11) NOT NULL,
  `plandescription` varchar(200) NOT NULL,
  `image` varchar(70) NOT NULL,
  `email` varchar(200) NOT NULL,
  `budget` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `plan_details`
--

INSERT INTO `plan_details` (`plan_id`, `plantype_id`, `plandescription`, `image`, `email`, `budget`) VALUES
(1, 3, 'open floor plan for kitchen', 'openfloorplan.png', 'Abhishek123@gmail.com', 0),
(2, 5, 'closed floor plan for 2BHK house', 'closedfloorplans1.jpg', 'Abhishek123@gmail.com', 0),
(3, 3, '2 bedroom  open floor plan', 'openfloorplan1.png', 'nabeela@gmail.com', 0),
(4, 5, 'closed floor plan for 3BHK house', 'closedfloorplan2.png', 'nabeela@gmail.com', 0),
(5, 3, 'open floor plan for 4BHK house', 'openfloorplan2.png', 'ajmal@gamil.com', 0),
(6, 5, 'closed floor plan for 3BHK house', 'closedfloorplan3.png', 'ajmal@gamil.com', 0),
(23, 3, 'open floor plan of 2000 sqrtft', 'openfloorplan1.png', 'Abhishek123@gmail.com', 800),
(24, 3, 'home', 'openfloorplan1.png', 'jubi@gmail.com', 1500),
(25, 3, 'home', 'openfloorplan.png', 'abhishek123@gmail.com', 1500),
(26, 3, 'home', 'openfloorplan2.png', 'abhishek123@gmail.com', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `userid` bigint(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`userid`, `name`, `email`, `phoneno`, `address`, `password`) VALUES
(1, 'heily', 'heily@gmail.com', 2147483647, 'jjjj', '22'),
(2, 'aysha maryam', 'aysha@gmail.com', 2147483647, 'ayshahh', 'aysh@#'),
(3, 'shyma sulaika', 'shyma@gmail.com', 2147483647, 'pk', '123'),
(7, 'INA', 'aysha@gmail.com', 123456789, 'HI', '1234'),
(11, 'shymm', 'shym@gmail.com', 2147483647, 'kiki', 'shym@'),
(12, 'hiii', 'hi@gmail.com', 2147483647, 'hyyy', 'hello@'),
(13, 'fida', 'fida@gmail.com', 2147483647, 'dgfjzahskq', 'fida@#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_architect`
--
ALTER TABLE `add_architect`
  ADD PRIMARY KEY (`architect_id`);

--
-- Indexes for table `arch_schedule`
--
ALTER TABLE `arch_schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `designtype_details`
--
ALTER TABLE `designtype_details`
  ADD PRIMARY KEY (`designtype_id`);

--
-- Indexes for table `design_details`
--
ALTER TABLE `design_details`
  ADD PRIMARY KEY (`design_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `plantype_details`
--
ALTER TABLE `plantype_details`
  ADD PRIMARY KEY (`plantype_id`);

--
-- Indexes for table `plan_details`
--
ALTER TABLE `plan_details`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_architect`
--
ALTER TABLE `add_architect`
  MODIFY `architect_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `arch_schedule`
--
ALTER TABLE `arch_schedule`
  MODIFY `schedule_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `designtype_details`
--
ALTER TABLE `designtype_details`
  MODIFY `designtype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `design_details`
--
ALTER TABLE `design_details`
  MODIFY `design_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plantype_details`
--
ALTER TABLE `plantype_details`
  MODIFY `plantype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `plan_details`
--
ALTER TABLE `plan_details`
  MODIFY `plan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `userid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
