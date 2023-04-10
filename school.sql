-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 03:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `teacher_id`) VALUES
(111, 'Reception Year', 2),
(222, 'year one', 3),
(333, ' year fifteen ', 4),
(444, 'year three', 5),
(555, 'year four', 1),
(666, ' year ten', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `enrollment_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `date_enrolled` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enrollment_id`, `student_id`, `class_id`, `date_enrolled`) VALUES
(800, 222, 222, '2023-04-05'),
(1002, 448, 333, '2023-04-18'),
(1003, 555, 111, '2022-04-20'),
(1004, 575, 333, '0000-00-00'),
(1005, 555, 333, '2023-04-12'),
(1007, 554, 222, '2019-04-05'),
(2000, 12, 888, '2023-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `parent_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`parent_id`, `first_name`, `last_name`, `email`, `phone`) VALUES
(100, 'ankut', 'butani', 'ankutbutani@gmail.com', 2147483647),
(131, 'rumal', 'card', 'nokaridyone@gmail.com', 2147483647),
(200, 'rumal', 'rastogi', 'nokaridyone@gmail.com', 525225252),
(560, 'numul', 'singh', 'numulsingh@gmail.com', 45225554),
(1000, 'ankur ', 'butani', 'ankurbutani@gmail.com', 8624878);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `first_name`, `last_name`, `dob`, `email`, `phone`, `parent_id`) VALUES
(12, 'sdc', 'scc ', '2013-04-17', 'gfbghnfhmfg@gmail.com', '587275115715', 251),
(111, 'virat', 'kohli', '2016-04-06', 'viratbhai@gmail.com', '987654321', 10),
(222, 'tilak', 'pasoi', '2012-12-02', 'iuv@gmail.com', '789654123', 20),
(448, 'nokare', 'narayan', '2015-02-04', 'nokarenarayan@gmail.com', '8965753258', 131),
(554, 'nokare', 'card', '2013-11-09', 'welldfnngs@gmail.com', '9855624315', 100),
(555, 'tilak', 'narayan', '2017-04-05', 'flsledfnngs@gmail.com', '8965753258', 200);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `first_name`, `last_name`, `email`, `phone`) VALUES
(1, 'samixa', 'rajodi', 'samixarajodi@gmail.com', '86559558652'),
(3, 'prit', 'borat', 'pritborad@gmail.com', '7854521563'),
(4, 'butani', 'ankur', 'butaniankur@gmail.com', '999999999'),
(5, 'rumal', 'lotaviya', 'flsledfnngs@gmail.com', '7854521563');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `Teacher_id` (`teacher_id`),
  ADD KEY `teacher_id_2` (`teacher_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD UNIQUE KEY `parent_id_3` (`parent_id`),
  ADD KEY `parent_id` (`parent_id`),
  ADD KEY `parent_id_2` (`parent_id`),
  ADD KEY `parent_id_4` (`parent_id`),
  ADD KEY `parent_id_5` (`parent_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
