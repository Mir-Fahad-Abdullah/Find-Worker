-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 05:20 PM
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
-- Database: `find_worker`
--

-- --------------------------------------------------------

--
-- Table structure for table `quickaccess`
--

CREATE TABLE `quickaccess` (
  `name` varchar(50) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `looking_for` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signupuser`
--

CREATE TABLE `signupuser` (
  `user` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` varchar(15) DEFAULT NULL,
  `address` varchar(150) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signupworker`
--

CREATE TABLE `signupworker` (
  `name` varchar(50) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(16) NOT NULL,
  `working_as` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `worker_review`
--

CREATE TABLE `worker_review` (
  `username` varchar(50) NOT NULL,
  `worker_username` varchar(50) NOT NULL,
  `working_as` varchar(100) NOT NULL,
  `comments` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quickaccess`
--
ALTER TABLE `quickaccess`
  ADD KEY `looking_for` (`looking_for`);

--
-- Indexes for table `signupuser`
--
ALTER TABLE `signupuser`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `signupworker`
--
ALTER TABLE `signupworker`
  ADD PRIMARY KEY (`username`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `worker_review`
--
ALTER TABLE `worker_review`
  ADD PRIMARY KEY (`worker_username`),
  ADD KEY `username` (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `signupworker`
--
ALTER TABLE `signupworker`
  ADD CONSTRAINT `signupworker_ibfk_1` FOREIGN KEY (`username`) REFERENCES `worker_review` (`worker_username`) ON UPDATE CASCADE;

--
-- Constraints for table `worker_review`
--
ALTER TABLE `worker_review`
  ADD CONSTRAINT `worker_review_ibfk_1` FOREIGN KEY (`username`) REFERENCES `signupuser` (`user`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
