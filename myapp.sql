-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2016 at 07:19 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `supervisor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `email`, `supervisor_id`) VALUES
(12, 'Kabir Hasan', 'acrush987@gmail.com', 3),
(13, 'Salekul Islam', 'salekul@cse.uiu.ac.bd', 2),
(14, 'vc', 'vc@gmail.com', 1),
(15, 'vc', 'vc@gmail.com', 1),
(16, 'provc', 'provc@gmail.com', 1),
(17, 'Akash Islam', 'akash@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

CREATE TABLE `leave_application` (
  `id` int(11) NOT NULL,
  `reason` varchar(50) NOT NULL,
  `leave_type` varchar(35) NOT NULL,
  `ffrome` varchar(8) NOT NULL,
  `tto` varchar(8) NOT NULL,
  `fac_id` int(11) NOT NULL,
  `sup_id` int(11) NOT NULL,
  `approval` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`id`, `reason`, `leave_type`, `ffrome`, `tto`, `fac_id`, `sup_id`, `approval`) VALUES
(11, 'fever', 'short', 'dd-mm-yy', 'dd-mm-yy', 12, 5, 2),
(12, 'slowo', 'short', 'dd-mm-yy', 'dd-mm-yy', 12, 5, 1),
(13, 'contest', 'short', 'dd-mm-yy', 'dd-mm-yy', 17, 5, 0),
(14, '', 'short', 'dd-mm-yy', 'dd-mm-yy', 12, 5, 0),
(15, '', 'short', 'dd-mm-yy', 'dd-mm-yy', 12, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `status` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `name`, `status`, `email`) VALUES
(5, 'Salekul Islam', 'head', 'salekul@cse.uiu.ac.bd'),
(6, 'vc', 'vc', 'vc@gmail.com'),
(7, 'vc', 'vc', 'vc@gmail.com'),
(8, 'provc', 'provc', 'provc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `status` varchar(20) NOT NULL,
  `username` varchar(35) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `status`, `username`, `pass`) VALUES
(6, 'Kabir Hasan', 'acrush987@gmail.com', '4', 'kab', '123'),
(7, 'Salekul Islam', 'salekul@cse.uiu.ac.bd', '3', 'sal', '123'),
(8, 'vc', 'vc@gmail.com', '1', 'vc', '123'),
(9, 'vc', 'vc@gmail.com', '1', 'vc', '123'),
(10, 'provc', 'provc@gmail.com', '2', 'provc', '123'),
(11, 'Akash Islam', 'akash@gmail.com', '4', 'aka', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_application`
--
ALTER TABLE `leave_application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `leave_application`
--
ALTER TABLE `leave_application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
