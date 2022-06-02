-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 03:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `apoinment`
--

CREATE TABLE `apoinment` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `specialist` varchar(100) NOT NULL,
  `patient_id` varchar(100) NOT NULL,
  `doctor_id` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `message` varchar(360) NOT NULL,
  `accept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apoinment`
--

INSERT INTO `apoinment` (`id`, `name`, `phone`, `email`, `specialist`, `patient_id`, `doctor_id`, `time`, `date`, `message`, `accept`) VALUES
(4, '', '', '', '', '1', '8', '2022-01-24', 'Evening (1 PM - 6 PM)', 'df fdsfdsfd  dfdf', '2'),
(5, '', '', '', '', '5', '6', '2022-01-22', 'Morning(9 AM - 12 PM)', 'Hello doctor', '2'),
(6, '', '', '', '', '11', '', '2022-01-06', 'Morning(9 AM - 12 PM)', 'Hello doctor', 'accept'),
(7, '', '', '', '', '11', '11', '2022-01-21', 'Morning(9 AM - 12 PM)', 'I want to', 'accept'),
(10, '', '', '', '', '0', '0', '', '', '', ''),
(19, 'dfew', '435425', 'Hard', 'arifas@gmail.com', '0', '0', '2022-01-13', 'Morning(9 AM - 12 PM)', 'fedf', 'accept'),
(20, '0', '0', '0', '0', '11', '6', '2022-01-14', 'Morning(9 AM - 12 PM)', 'fgfg  fdsfs ', 'accept'),
(21, 'abcd', '01984736643', 'Hard', 'abcd@gmail.com', '0', '0', '2022-01-14', 'Morning(9 AM - 12 PM)', 'Clinical excellence must ', 'accept'),
(22, '0', '0', '0', '0', '', '11', '2022-01-07', 'Morning(9 AM - 12 PM)', 'dfd dfgds ', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apoinment`
--
ALTER TABLE `apoinment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apoinment`
--
ALTER TABLE `apoinment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
