-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 09:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `credits`) VALUES
('Ramesh Sen', 'Malti Roy', 123),
('Alok Sharma', 'Riya Roy', 567),
('Riya Roy', 'Arpita Choudhury', 899),
('Ramesh Sen', 'Ananat Roy', 569),
('Priya Koley', 'Raju Sharma', 789),
('Ramuna Karmakar', 'Arpita Choudhury', 34),
('Tapas Sen', 'Ramuna Karmakar', 67);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `credits`) VALUES
(1, 'Ramesh Sen', 'ramesh@gmail.com', 4308),
(2, 'Malti Roy', 'roy12@gmail.com', 6823),
(3, 'Ramuna Karmakar', 'ramuna123@gmail.com', 9032),
(4, 'Tapas Sen', 'tapas123@gmail.com', 78819),
(5, 'Riya Roy', 'riya234@gmail.com', 7564),
(6, 'Priya Koley', 'koley123@gmail.com', 8211),
(7, 'Alok Sharma', 'alok123@gmail.com', 7301),
(8, 'Arpita Choudhury', 'arpita34@gmail.com', 10809),
(9, 'Raju Sharma', 'sharma@gmail.com', 7578),
(10, 'Ananat Roy', 'anant123@gmail.com', 99329);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
