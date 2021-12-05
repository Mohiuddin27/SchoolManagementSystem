-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2021 at 06:44 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `software`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `name`, `email`, `password`) VALUES
(1, 'Sifat Rahman', 'admin@gmail.com', 'admin123'),
(2, 'Sifat Bin Mahbub', 'user@gmail.com', 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `roll_no` int(20) NOT NULL,
  `bangla1` int(20) NOT NULL,
  `bangla2` int(20) NOT NULL,
  `bangla3` int(20) NOT NULL,
  `english1` int(20) NOT NULL,
  `english2` int(20) NOT NULL,
  `english3` int(20) NOT NULL,
  `math1` int(20) NOT NULL,
  `math2` int(20) NOT NULL,
  `math3` int(20) NOT NULL,
  `science1` int(20) NOT NULL,
  `science2` int(20) NOT NULL,
  `science3` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `roll_no`, `bangla1`, `bangla2`, `bangla3`, `english1`, `english2`, `english3`, `math1`, `math2`, `math3`, `science1`, `science2`, `science3`) VALUES
(1, 101, 80, 70, 60, 50, 60, 70, 80, 70, 60, 90, 70, 80),
(3, 102, 80, 75, 70, 60, 40, 90, 80, 90, 95, 60, 70, 80);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `roll_no` int(20) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `fee_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `roll_no`, `fname`, `lname`, `mother_name`, `father_name`, `dob`, `email`, `password`, `mobile`, `class`, `address`, `gender`, `fee_status`) VALUES
(1, 101, 'Md', 'Mohiuddin khan', 'Fatema Begum', 'abul kalam', '2004-07-27', 'sobuj@gmail.com', 'sobuj123', '01234098765', '11', 'Mirpur, dhaka', 'Male', '0'),
(4, 102, 'Md', 'Halim', 'Hafeza', 'Md Kabir', '2002-04-27', 'kabir@gmail.com', 'kabir123', '01783456789', '11', 'Banani,Dhaka', 'Male', '1'),
(8, 103, 'MD', 'Noman', 'Habib', 'Jahanara', '1999-02-28', 'noman@gmail.com', 'noman123', '01678234098', '11', 'Rajshahi', 'Male', '0'),
(9, 104, 'Sabrina', 'Haque', 'Nazmur Nahar', 'Hasan Ali', '1998-02-28', 'sabrina@gmail.com', 'sabrina123', '01789234123', '11', 'Mirpur', 'Female', '1'),
(10, 105, 'Sharmin', 'khan', 'Khadiza', 'Nasir uddin', '2001-03-29', 'mim@gmail.com', 'mim123', '01567890234', '11', 'Jatrabari', 'Female', '1');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `e_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `dob` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `created_at` varchar(30) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`e_id`, `fname`, `lname`, `dob`, `gender`, `email`, `password`, `mobile`, `subject`, `address`, `created_at`) VALUES
(201, 'Mahir rahaman', 'Asraf', '1980-02-27', 'Male', 'mahir@gmail.com', 'marhir123', '01893289457', 'English', 'Dhaka,Bangladesh', '2021-10-27 21:23:50'),
(202, 'Tabeen', 'Tasneem', '1984-02-28', 'Female', 'tabeen@gmail.com', 'tabeen123', '01980234678', 'Math', 'Mirpur-10', '2021-10-29 22:24:57'),
(203, 'Md', 'Mohaiminul', '1987-02-28', 'Male', 'hasan@gmail.com', 'hasan123', '01987652456', 'Bangla', 'Uttara,Dhaka', '2021-10-31 11:29:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`e_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
