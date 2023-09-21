-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2023 at 10:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itc`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_students`
--

CREATE TABLE `table_students` (
  `id` int NOT NULL,
  `StudID` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `StudName` text NOT NULL,
  `StudGender` varchar(10) NOT NULL,
  `StudCourse` text NOT NULL,
  `StudSection` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `StudYear` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_students`
--

INSERT INTO `table_students` (`id`, `StudID`, `StudName`, `StudGender`, `StudCourse`, `StudSection`, `StudYear`) VALUES
(21, 'MCC2021-001', 'John A. Doe', 'Male', 'BSIT', 'F1', '3rd Year'),
(22, 'MCC2021-002', 'Jane B. Smith', 'Female', 'BSIT', 'F2', '3rd Year'),
(23, 'MCC2021-003', 'Robert C. Johnson', 'Male', 'BSIT', 'F3', '3rd Year'),
(24, 'MCC2021-004', 'Lisa D. Brown', 'Female', 'BSIT', 'F4', '3rd Year'),
(25, 'MCC2021-005', 'Michael E. Wilson', 'Male', 'BSIT', 'F1', '3rd Year'),
(26, 'MCC2021-006', 'Emily F. Lee', 'Female', 'BSIT', 'F2', '3rd Year'),
(27, 'MCC2021-007', 'William G. Davis', 'Male', 'BSIT', 'F3', '3rd Year'),
(28, 'MCC2021-008', 'Olivia H. Anderson', 'Female', 'BSIT', 'F4', '3rd Year'),
(29, 'MCC2021-009', 'James I. Martinez', 'Male', 'BSIT', 'F1', '3rd Year'),
(30, 'MCC2021-010', 'Sophia J. Garcia', 'Female', 'BSIT', 'F2', '3rd Year'),
(31, 'MCC2021-011', 'David K. Hernandez', 'Male', 'BSIT', 'F3', '3rd Year'),
(32, 'MCC2021-012', 'Emma L. Wilson', 'Female', 'BSIT', 'F4', '3rd Year'),
(33, 'MCC2021-013', 'Daniel M. Clark', 'Male', 'BSIT', 'F1', '3rd Year'),
(34, 'MCC2021-014', 'Mia N. Turner', 'Female', 'BSIT', 'F2', '3rd Year'),
(35, 'MCC2021-015', 'Joseph O. Moore', 'Male', 'BSIT', 'F3', '3rd Year'),
(36, 'MCC2021-016', 'Ava P. White', 'Female', 'BSIT', 'F4', '3rd Year'),
(37, 'MCC2021-017', 'Matthew Q. Taylor', 'Male', 'BSIT', 'F1', '3rd Year'),
(38, 'MCC2021-018', 'Chloe R. Walker', 'Female', 'BSIT', 'F2', '3rd Year'),
(39, 'MCC2021-019', 'Andrew S. Hall', 'Male', 'BSIT', 'F3', '3rd Year'),
(40, 'MCC2021-020', 'Grace T. Adams', 'Female', 'BSIT', 'F4', '3rd Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_students`
--
ALTER TABLE `table_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `StudSection` (`StudSection`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_students`
--
ALTER TABLE `table_students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_students`
--
ALTER TABLE `table_students`
  ADD CONSTRAINT `table_students_ibfk_1` FOREIGN KEY (`StudSection`) REFERENCES `table_section` (`Section`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
