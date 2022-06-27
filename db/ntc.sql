-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2022 at 11:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntc`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `transid` text NOT NULL,
  `amount` varchar(100) NOT NULL,
  `dateadded` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `uid`, `transid`, `amount`, `dateadded`) VALUES
(2, '6', 'YPAdfSXD62a6e98ceacb51655105932', '100', '13th June,2022');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `telegram` varchar(20) DEFAULT NULL,
  `lincesed` varchar(100) DEFAULT NULL,
  `nameofschool` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `dother` varchar(50) DEFAULT NULL,
  `venue` text DEFAULT NULL,
  `foodpref` varchar(100) DEFAULT NULL,
  `paystatus` varchar(50) DEFAULT NULL,
  `heard` varchar(50) DEFAULT NULL,
  `password` text NOT NULL,
  `dateadded` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `title`, `name`, `gender`, `email`, `contact`, `telegram`, `lincesed`, `nameofschool`, `district`, `region`, `dother`, `venue`, `foodpref`, `paystatus`, `heard`, `password`, `dateadded`) VALUES
(1, 'Dr.', 'Frederick Ansah', 'Male', 'kpin463@gmail.com', '0556676471', '0241336895', '', '', '', '', NULL, NULL, '', NULL, '', '202cb962ac59075b964b07152d234b70', ''),
(2, NULL, 'Stephen Dapaah', NULL, 'stephendapaah1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '81dc9bdb52d04dc20036dbd8313ed055', ''),
(6, 'Dr.', 'Desmond Danso', 'Male', 'desmond@gmail.com', '0556676471', '0248363672', 'PSSDDSDS', 'Dome Academy', 'Adenta Municipality', 'Greater Accra', NULL, '', 'Waakye with chicken', 'paid', 'website', '144511569df16a9004ab821980be5137', '12th June, 2022');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
