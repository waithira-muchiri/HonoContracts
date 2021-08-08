-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 03:55 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hono`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_contracts`
--

CREATE TABLE `active_contracts` (
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `active_contracts`
--

INSERT INTO `active_contracts` (`name`, `phone`, `email`, `category`, `start`, `end`, `status`, `created`) VALUES
('Caroline Muchiri', '0706504315', 'carolmuchiri80@gmail.com', 'Employee', '2021-08-01', '2021-08-05', 'Active', '2021-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `ended_contracts`
--

CREATE TABLE `ended_contracts` (
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `term_contracts`
--

CREATE TABLE `term_contracts` (
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `terminate` date NOT NULL,
  `reason` varchar(255) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `term_contracts`
--

INSERT INTO `term_contracts` (`name`, `phone`, `email`, `category`, `start`, `end`, `status`, `terminate`, `reason`, `created`) VALUES
('Caroline Muchiri', '0706504315', 'carolmuchiri80@gmail.com', 'Employee', '2021-08-01', '2021-08-05', 'Termination', '2021-08-04', 'Absentiism', '2021-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Email`, `Password`) VALUES
('honoboss@gmail.com', '@Boss2021'),
('honouser@gmail.com', '@Hono123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_contracts`
--
ALTER TABLE `active_contracts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `ended_contracts`
--
ALTER TABLE `ended_contracts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `term_contracts`
--
ALTER TABLE `term_contracts`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
