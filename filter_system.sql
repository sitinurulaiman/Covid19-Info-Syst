-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 01:32 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filter_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(1) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_name`, `password`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `case_no` int(11) NOT NULL,
  `age` varchar(30) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `nationality` varchar(120) NOT NULL,
  `status` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`case_no`, `age`, `gender`, `state`, `nationality`, `status`, `from_date`, `to_date`) VALUES
(13, '45', 'male', 'Negeri Sembilan', 'Malaysia', 'Recovered', '2019-09-04', '2020-08-04'),
(14, '45', 'male', 'Negeri Sembilan', 'Malaysia', 'Death', '2019-09-04', '0000-00-00'),
(15, '80', 'male', 'Johor', 'Malaysia', 'Death', '2020-07-15', '0000-00-00'),
(16, '45', 'female', 'Negeri Sembilan', 'Malaysia', 'Recovered', '2020-07-22', '2020-08-03'),
(17, '96', 'female', 'Pahang', 'Malaysia', 'Death', '2020-06-04', '0000-00-00'),
(18, '53', 'male', 'Putrajaya', 'Malaysia', 'Recovered', '2020-05-05', '2020-06-01'),
(19, '37', 'male', 'Other', 'China', 'Hospital', '2020-08-03', '0000-00-00'),
(20, '54', 'male', 'Johor', 'Malaysia', 'Recovered', '2020-07-22', '0000-00-00'),
(22, '34', 'female', 'Johor', 'Malaysia', 'hospital', '2019-09-04', '2019-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(21, 'sitinurulaiman', 'siti123@sky.com', '827ccb0eea8a706c4c34a16891f84e7b', '2021-02-04 13:00:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`case_no`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `case_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
