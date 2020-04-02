-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2020 at 05:24 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- Table structure for table `bonus`
--

CREATE TABLE `bonus` (
  `emp-id` int(11) NOT NULL,
  `emp-performance` int(11) NOT NULL,
  `average` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comp-emp`
--

CREATE TABLE `comp-emp` (
  `comp-id` int(11) NOT NULL,
  `emp-id` int(11) NOT NULL,
  `pos-salary` int(11) NOT NULL,
  `weekend-Overtime` int(11) NOT NULL,
  `nightshift-overtime` int(11) NOT NULL,
  `total` float NOT NULL,
  `bonus-avg` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `compensation-plan`
--

CREATE TABLE `compensation-plan` (
  `id` int(11) NOT NULL,
  `weekend-rate` int(11) NOT NULL,
  `nightshift-rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` int(11) NOT NULL,
  `mobile` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `deactivate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fullname`, `address`, `email`, `department`, `position`, `username`, `password`, `telephone`, `mobile`, `img`, `deactivate`) VALUES
(1, 'mayar osama', 'elrehab', 'mayar@gmail.com', 'hr', 1, 'mayar', '1234', 52255324, 961246823, '', 0),
(2, 'rawan sherif', 'masr el-gdeeda', 'rawansherif@gmail.com', 'hr', 2, 'rawan', '1234', 92742949, 19799302, '', 0),
(3, 'mohamed hassan', 'el tagmo3', 'mohamed@gmail.com', 'it', 3, 'khazbak', '1234', 23535, 252466, '', 0),
(4, 'john hany', 'el sherouk', 'john@gmail.com', 'it', 4, 'john', '1234', 714587285, 89362959, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `mng-id` int(11) NOT NULL,
  `emp-id` int(11) NOT NULL,
  `p-name` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `performance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `position-type`
--

CREATE TABLE `position-type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `salary` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `position-type`
--

INSERT INTO `position-type` (`id`, `type`, `salary`) VALUES
(1, 'Hr Manager', 7000),
(2, 'HR Employee', 9000),
(3, 'Project Manager', 8000),
(4, 'Employee', 60000);

-- --------------------------------------------------------

--
-- Table structure for table `proj-state`
--

CREATE TABLE `proj-state` (
  `id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `mng-id` int(11) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `noOfemp` int(11) NOT NULL,
  `state-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `hr-id` int(11) NOT NULL,
  `emp-id` int(11) NOT NULL,
  `type-id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request-type`
--

CREATE TABLE `request-type` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request-type`
--

INSERT INTO `request-type` (`id`, `type`) VALUES
(1, 'add'),
(2, 'edit'),
(3, 'deactivate');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `p-name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `assigned` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `task-emp`
--

CREATE TABLE `task-emp` (
  `task-id` int(11) NOT NULL,
  `emp-id` int(11) NOT NULL,
  `mng-id` int(11) NOT NULL,
  `state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `works_on`
--

CREATE TABLE `works_on` (
  `emp-id` int(11) NOT NULL,
  `p-name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bonus`
--
ALTER TABLE `bonus`
  ADD PRIMARY KEY (`emp-id`,`emp-performance`);

--
-- Indexes for table `comp-emp`
--
ALTER TABLE `comp-emp`
  ADD PRIMARY KEY (`comp-id`,`emp-id`);

--
-- Indexes for table `compensation-plan`
--
ALTER TABLE `compensation-plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`mng-id`,`emp-id`,`p-name`);

--
-- Indexes for table `position-type`
--
ALTER TABLE `position-type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proj-state`
--
ALTER TABLE `proj-state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`hr-id`,`emp-id`);

--
-- Indexes for table `request-type`
--
ALTER TABLE `request-type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task-emp`
--
ALTER TABLE `task-emp`
  ADD PRIMARY KEY (`task-id`);

--
-- Indexes for table `works_on`
--
ALTER TABLE `works_on`
  ADD PRIMARY KEY (`emp-id`,`p-name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compensation-plan`
--
ALTER TABLE `compensation-plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `position-type`
--
ALTER TABLE `position-type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `proj-state`
--
ALTER TABLE `proj-state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request-type`
--
ALTER TABLE `request-type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `task-emp`
--
ALTER TABLE `task-emp`
  MODIFY `task-id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
