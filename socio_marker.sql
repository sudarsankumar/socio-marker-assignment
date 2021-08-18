-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 05:11 PM
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
-- Database: `socio_marker`
--

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `s` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`s`, `name`, `email`, `phone_number`, `address`, `pincode`) VALUES
(11, '﻿Akshaya', 'akshaya@gmail.com', '9876543210', '1, First Street', 620001),
(12, 'Bala', 'bala@gmail.com', '9876543211', '2, Second Street', 620002),
(13, 'Charles', 'charles@gmail.com', '9876543212', '3, Third Street', 620003),
(14, 'Durga', 'durga@gmail.com', '9876543213', '4, Fourth Street', 620004),
(15, 'Elizabeth', 'elizabeth@gmail.com', '9876543214', '5, Fifth Street', 620005),
(16, 'Francis', 'francis@gmail.com', '9876543215', '6, Sixth Street', 620006),
(17, 'Gopal', 'gopal@gmail.com', '9876543216', '7, Seventh Street', 620007),
(18, 'Hemanth', 'hemanth@gmail.com', '9876543217', '8, Eighth Street', 620008),
(19, 'Ishwarya', 'ishwarya@gmail.com', '9876543218', '9, Ninth Street', 620009),
(20, 'Joseph', 'joseph@gmail.com', '9876543219', '10, Tenth Street', 620010);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`s`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
