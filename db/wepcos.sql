-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 12, 2019 at 02:21 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wepcos`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `stud_num` varchar(100) NOT NULL,
  `stud_id` varchar(100) NOT NULL,
  `cost` float NOT NULL,
  `payments` float NOT NULL,
  `reg_fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gurdian_info`
--

CREATE TABLE `gurdian_info` (
  `stud_num` varchar(100) NOT NULL,
  `stud_id` varchar(100) NOT NULL,
  `parent_id` varchar(100) NOT NULL,
  `parent_name` varchar(150) DEFAULT NULL,
  `parent_surname` varchar(150) DEFAULT NULL,
  `parent_address` text,
  `parent_cell` varchar(50) DEFAULT NULL,
  `work_cell` varchar(50) DEFAULT NULL,
  `parent_email` varchar(200) DEFAULT NULL,
  `title` varchar(20) DEFAULT NULL,
  `postal` text,
  `employer` varchar(255) DEFAULT NULL,
  `occupation` varchar(100) DEFAULT NULL,
  `work_addr` text,
  `other_cell` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `inv_no` int(11) NOT NULL,
  `referrence` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offered_subj`
--

CREATE TABLE `offered_subj` (
  `date_created` date NOT NULL,
  `subj_code` varchar(100) NOT NULL,
  `subj_name` varchar(200) NOT NULL,
  `subj_cost` float NOT NULL,
  `educator` varchar(100) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registered_subj`
--

CREATE TABLE `registered_subj` (
  `stud_num` varchar(100) NOT NULL,
  `stud_id` varchar(100) NOT NULL,
  `subj_name` varchar(200) NOT NULL,
  `subj_cost` float NOT NULL,
  `date_reg` date NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered_subj`
--

INSERT INTO `registered_subj` (`stud_num`, `stud_id`, `subj_name`, `subj_cost`, `date_reg`, `grade`) VALUES
('2017000001', '9208125856099', 'Mathematics', 250, '2017-02-20', 0),
('2017000001', '9208125856099', 'Accounting', 250, '2017-02-20', 0),
('2017000002', '9407310920085', 'Physical Science', 390, '2017-02-23', 0),
('2017000002', '9407310920085', 'Life Science', 390, '2017-02-23', 0),
('2017000003', '9707025495087', 'Mathematics', 390, '2017-02-23', 0),
('2017000003', '9707025495087', 'Physical Science', 390, '2017-02-23', 0),
('2017000004', '9509100689083', 'Life Science', 390, '2017-02-23', 0),
('2017000004', '9509100689083', 'Geography', 390, '2017-02-23', 0),
('2017000004', '9509100689083', 'Agricultural Science', 390, '2017-02-23', 0),
('2017000005', '9811220454087', 'Physical Science', 390, '2017-02-23', 0),
('2017000005', '9811220454087', 'Life Science', 390, '2017-02-23', 0),
('2017000005', '9811220454087', 'Agricultural Science', 390, '2017-02-23', 0),
('2017000006', '9510100421089', 'Mathematics', 390, '2017-02-24', 0),
('2017000006', '9510100421089', 'Life Science', 390, '2017-02-24', 0),
('2017000007', '9511190366085', 'Maths Literacy', 390, '2017-02-24', 0),
('2017000007', '9511190366085', 'Agricultural Science', 390, '2017-02-24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `stud_num` varchar(100) NOT NULL,
  `stud_id` varchar(100) NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `surname` varchar(150) NOT NULL,
  `h_address` varchar(255) NOT NULL,
  `cell` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `date_reg` date NOT NULL,
  `title` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(150) NOT NULL,
  `h_language` varchar(200) NOT NULL,
  `p_address` text NOT NULL,
  `prev_school` varchar(255) NOT NULL,
  `grade` int(11) NOT NULL,
  `programme` int(11) NOT NULL,
  `campus` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `duration` int(11) NOT NULL,
  `reg_by` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `id` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `surname` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `id`, `name`, `surname`, `email`, `phone`, `password`, `status`) VALUES
('Test account 1', '1', 'webmaster', 'webmaster', 'mekgwele@gmail.com', '0608667708', 'd5c186983b52c4551ee00f72316c6eaa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`stud_num`),
  ADD UNIQUE KEY `stud_id` (`stud_id`);

--
-- Indexes for table `gurdian_info`
--
ALTER TABLE `gurdian_info`
  ADD UNIQUE KEY `stud_id` (`stud_id`),
  ADD UNIQUE KEY `stud_num` (`stud_num`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`inv_no`);

--
-- Indexes for table `offered_subj`
--
ALTER TABLE `offered_subj`
  ADD PRIMARY KEY (`subj_code`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`stud_num`),
  ADD UNIQUE KEY `stud_id` (`stud_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `inv_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `Linka ccounts by stud_id` FOREIGN KEY (`stud_id`) REFERENCES `student_info` (`stud_id`),
  ADD CONSTRAINT `Linka ccounts by stud_num` FOREIGN KEY (`stud_num`) REFERENCES `student_info` (`stud_num`);

--
-- Constraints for table `gurdian_info`
--
ALTER TABLE `gurdian_info`
  ADD CONSTRAINT `Link by student ID` FOREIGN KEY (`stud_id`) REFERENCES `student_info` (`stud_id`),
  ADD CONSTRAINT `Link by student number` FOREIGN KEY (`stud_num`) REFERENCES `student_info` (`stud_num`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
