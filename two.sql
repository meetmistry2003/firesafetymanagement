-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2022 at 07:33 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myofiice`
--

-- --------------------------------------------------------

--
-- Table structure for table `two`
--

CREATE TABLE `two` (
  `id` bigint(255) NOT NULL,
  `date` date NOT NULL,
  `dealer_name` varchar(50) NOT NULL,
  `amount` int(50) NOT NULL,
  `p_u` varchar(20) NOT NULL,
  `pdate` date NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `two`
--

INSERT INTO `two` (`id`, `date`, `dealer_name`, `amount`, `p_u`, `pdate`, `description`) VALUES
(1, '2022-08-23', 'fhdshlf', 1000, 'paid', '2022-08-23', 'jshdlkj'),
(2, '2022-08-24', 'hkjhkj', 10000, 'paid', '2022-08-23', 'jhhj'),
(3, '2022-08-24', 'fhkdj', 1999, 'paid', '2022-08-23', 'hsjdhs'),
(4, '2022-08-23', 'ddf', 1000, 'paid', '2022-08-23', 'dsdasd'),
(5, '2022-08-24', 'xyz', 10000, 'paid', '2022-08-24', 'dsdfds'),
(6, '2022-08-24', 'nk', 10000, 'paid', '2022-08-23', 'rtshfds'),
(7, '2022-08-24', 'gjgjh', 1000, 'paid', '2022-08-24', 'hkjhkj'),
(8, '2022-08-24', 'dsafdsfa', 100000, 'paid', '2022-08-24', 'afddsfd'),
(9, '2022-08-25', 'hhjk', 70000, 'paid', '2022-08-23', 'hgkjhgkj'),
(10, '2022-08-23', 'hfdsaf', 100000, 'paid', '2022-08-23', 'hHSKJDs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `two`
--
ALTER TABLE `two`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `two`
--
ALTER TABLE `two`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
