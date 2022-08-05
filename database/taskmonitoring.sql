-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2022 at 03:59 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taskmonitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(11) NOT NULL,
  `todotask` text NOT NULL,
  `userid` int(11) NOT NULL,
  `status` enum('TODO','DOING','DONE','') NOT NULL DEFAULT 'TODO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `todotask`, `userid`, `status`) VALUES
(14, 'Laptop kinnaparyo', 9, 'TODO'),
(54, 'eating food khaisakyo', 13, 'DONE'),
(56, 'vfjen ge sdfghjkl', 17, 'TODO'),
(57, 'Khana banaune\r\n', 11, 'TODO'),
(58, 'task banaune\r\n hfjhj', 9, 'DOING'),
(60, 'how to work?\r\n', 9, 'DONE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fullName`, `email`, `password`, `otp`) VALUES
(9, 'Milan Parajuli', 'milan@gmail.com', 'c5fd883179088aee9e38aa11802586ad', 0),
(11, 'Madan Dahal', 'madan@gmail.com', '0257acd5bb44b1bda717c403f016faab', 0),
(12, 'demo', 'abc@gmail.com', '4641999a7679fcaef2df0e26d11e3c72', 0),
(13, 'Kapil Dahal', 'kapil@gmail.com', '962012d09b8170d912f0669f6d7d9d07', 0),
(14, 'Ram', 'jhk@gmail.com', '4641999a7679fcaef2df0e26d11e3c72', 0),
(15, 'fjvndjfnbj', 'nfnj@gmail.com', 'fc994e5c1c67757d0d52e3fab3b7108d', 0),
(16, 'vfre', 'asc@gmail.com', 'd16fb36f0911f878998c136191af705e', 0),
(17, 'Milan Parajuli', 'milanbhai2058@gmail.com', '912ec803b2ce49e4a541068d495ab570', 0),
(18, 'bvh', 'ram@gmail.com', '337e969cdb1d12d408dcbcef0e26f3b0', 0),
(19, '', '', 'd41d8cd98f00b204e9800998ecf8427e', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
