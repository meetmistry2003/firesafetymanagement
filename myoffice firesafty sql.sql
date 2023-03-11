-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2023 at 05:31 PM
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
-- Database: `myoffice`
--

-- --------------------------------------------------------

--
-- Table structure for table `cust_date`
--

CREATE TABLE `cust_date` (
  `cname` varchar(250) NOT NULL,
  `estimate` int(250) NOT NULL,
  `company_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cust_date`
--

INSERT INTO `cust_date` (`cname`, `estimate`, `company_name`) VALUES
('bansri', 100000, 'meetmistry'),
('jk', 10000, 'meetmistry'),
('meet', 100000, 'bansri');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `dname` varchar(250) NOT NULL,
  `number` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`dname`, `number`) VALUES
('hkhjkk', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `eid` bigint(255) NOT NULL,
  `hsncode` text NOT NULL,
  `cname` varchar(250) NOT NULL,
  `dname` varchar(250) NOT NULL,
  `pname` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `amount` int(250) NOT NULL,
  `qty` int(250) NOT NULL,
  `unit` text NOT NULL,
  `p_u` varchar(250) NOT NULL,
  `amt_date` date DEFAULT NULL,
  `productdis` text NOT NULL,
  `des` text NOT NULL,
  `company_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`eid`, `hsncode`, `cname`, `dname`, `pname`, `date`, `amount`, `qty`, `unit`, `p_u`, `amt_date`, `productdis`, `des`, `company_name`) VALUES
(21, 'gjgjhg', 'bansri', 'nk', 'pipe', '2023-03-15', 60000, 40, 'ft', 'paid', '2023-03-15', 'gjhghj', 'ghjgjhgh', 'meetmistry'),
(22, 'gjhghj', 'jk', 'nk', 'bolt', '2023-03-15', 10000, 6, 'mtr', 'paid', '2023-03-15', 'ghghj', 'gjhghj', 'meetmistry'),
(23, 'gjhghj', 'meet', 'hkhjkk', 'jkjk', '2023-03-15', 10000, 12, 'ft', 'paid', '2023-03-16', 'hgjh', 'ghgjh', 'bansri');

-- --------------------------------------------------------

--
-- Table structure for table `godown`
--

CREATE TABLE `godown` (
  `pname` varchar(250) NOT NULL,
  `qty` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `inid` bigint(255) NOT NULL,
  `cname` varchar(250) NOT NULL,
  `company_name` varchar(250) NOT NULL,
  `amount` int(250) NOT NULL,
  `amt_date` date NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`inid`, `cname`, `company_name`, `amount`, `amt_date`, `des`) VALUES
(13, 'bansri', 'meetmistry', 80000, '2023-03-15', 'ggjhgjh'),
(14, 'jk', 'meetmistry', 100000, '2023-03-15', 'hgjhgjh'),
(15, 'meet', 'bansri', 100000, '2023-03-15', 'hjhg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cust_date`
--
ALTER TABLE `cust_date`
  ADD PRIMARY KEY (`cname`),
  ADD KEY `comname` (`company_name`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`dname`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `did` (`dname`),
  ADD KEY `pid` (`pname`),
  ADD KEY `conname` (`company_name`),
  ADD KEY `cid` (`cname`);

--
-- Indexes for table `godown`
--
ALTER TABLE `godown`
  ADD PRIMARY KEY (`pname`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`inid`),
  ADD KEY `compnay_name` (`company_name`),
  ADD KEY `c_id` (`cname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `eid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `inid` bigint(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cust_date`
--
ALTER TABLE `cust_date`
  ADD CONSTRAINT `comname` FOREIGN KEY (`company_name`) REFERENCES `contractor` (`company_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `cid` FOREIGN KEY (`cname`) REFERENCES `cust_date` (`cname`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `conname` FOREIGN KEY (`company_name`) REFERENCES `contractor` (`company_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `income`
--
ALTER TABLE `income`
  ADD CONSTRAINT `c_id` FOREIGN KEY (`cname`) REFERENCES `cust_date` (`cname`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `compnay_name` FOREIGN KEY (`company_name`) REFERENCES `contractor` (`company_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
