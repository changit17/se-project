-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 01:15 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_left_tbl`
--

CREATE TABLE IF NOT EXISTS `course_left_tbl` (
  `c_id` int(11) NOT NULL,
  `course` varchar(25) NOT NULL,
  `d_id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_left_tbl`
--

INSERT INTO `course_left_tbl` (`c_id`, `course`, `d_id`, `ref_id`) VALUES
(53, 'abh          ', 2, 18),
(54, 'abh          ', 2, 19);

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE IF NOT EXISTS `course_tbl` (
  `c_id` int(10) NOT NULL,
  `course` varchar(25) NOT NULL,
  `d_id` int(10) NOT NULL,
  `ref_id` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`c_id`, `course`, `d_id`, `ref_id`) VALUES
(51, 'BSIT                     ', 17, '20'),
(52, 'ABH', 2, 'ABH2');

-- --------------------------------------------------------

--
-- Table structure for table `department_left_tbl`
--

CREATE TABLE IF NOT EXISTS `department_left_tbl` (
  `d_id` int(11) NOT NULL,
  `department` varchar(25) NOT NULL,
  `dean` varchar(25) NOT NULL,
  `deanlname` varchar(25) NOT NULL,
  `ref_d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department_tbl`
--

CREATE TABLE IF NOT EXISTS `department_tbl` (
  `d_id` int(10) NOT NULL,
  `department` varchar(255) NOT NULL,
  `dean` varchar(255) NOT NULL,
  `deanlname` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_tbl`
--

INSERT INTO `department_tbl` (`d_id`, `department`, `dean`, `deanlname`) VALUES
(2, 'IAS                    ', 'Dino                    ', 'Arenillo'),
(3, 'IHM                                ', 'Dianna                             ', 'Varona'),
(4, 'ITE', 'Rowena ', 'Macapagal'),
(5, 'IBE                    ', 'Reynaldo                    ', 'Laxamana'),
(17, 'ICS                                ', 'George                             ', 'Granados');

-- --------------------------------------------------------

--
-- Table structure for table `sectiontaken_tbl`
--

CREATE TABLE IF NOT EXISTS `sectiontaken_tbl` (
  `sectionref_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `section_id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sectiontaken_tbl`
--

INSERT INTO `sectiontaken_tbl` (`sectionref_id`, `s_id`, `section_id`, `c_id`, `d_id`) VALUES
(14, 1124, 51, 51, 17),
(16, 1123, 51, 51, 17);

-- --------------------------------------------------------

--
-- Table structure for table `section_tbl`
--

CREATE TABLE IF NOT EXISTS `section_tbl` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(50) NOT NULL,
  `c_id` int(25) NOT NULL,
  `year_id` int(11) NOT NULL,
  `sem_id` int(11) NOT NULL,
  `ref_id` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_tbl`
--

INSERT INTO `section_tbl` (`section_id`, `section_name`, `c_id`, `year_id`, `sem_id`, `ref_id`) VALUES
(51, 'B', 51, 25, 4, 'B51254'),
(52, 'A', 50, 25, 4, 'A50254'),
(53, 'A', 51, 25, 4, 'A51254');

-- --------------------------------------------------------

--
-- Table structure for table `semester_tbl`
--

CREATE TABLE IF NOT EXISTS `semester_tbl` (
  `sem_id` int(11) NOT NULL,
  `sem_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester_tbl`
--

INSERT INTO `semester_tbl` (`sem_id`, `sem_name`) VALUES
(5, '1st Semester'),
(4, '2nd Semester');

-- --------------------------------------------------------

--
-- Table structure for table `student_number_left_tbl`
--

CREATE TABLE IF NOT EXISTS `student_number_left_tbl` (
  `ref_id` int(11) NOT NULL,
  `s_id` int(10) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `fname2` varchar(25) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `lname` varchar(25) NOT NULL,
  `contact` varchar(25) NOT NULL,
  `c_id` int(10) NOT NULL,
  `d_id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_number_left_tbl`
--

INSERT INTO `student_number_left_tbl` (`ref_id`, `s_id`, `fname`, `fname2`, `mname`, `lname`, `contact`, `c_id`, `d_id`) VALUES
(53, 0, '', '', '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `student_number_tbl`
--

CREATE TABLE IF NOT EXISTS `student_number_tbl` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_number_tbl`
--

INSERT INTO `student_number_tbl` (`id`, `s_id`) VALUES
(5, 1110),
(6, 1111),
(7, 1112),
(8, 1113),
(9, 1114),
(10, 1115),
(11, 1116),
(12, 1117),
(13, 1118),
(14, 1119),
(15, 1120),
(16, 1121),
(17, 1122),
(18, 1123),
(19, 1124),
(20, 1125),
(21, 1126),
(31, 1127),
(32, 1128),
(33, 1129),
(34, 1130),
(35, 1131),
(36, 1132),
(37, 1133),
(39, 1134),
(40, 1135),
(41, 1136),
(42, 1137);

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE IF NOT EXISTS `student_tbl` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `fname2` varchar(50) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `d_id` int(10) NOT NULL,
  `c_id` int(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`id`, `s_id`, `fname`, `fname2`, `mname`, `lname`, `contact`, `d_id`, `c_id`) VALUES
(52, 1124, 'Sairen', 'Christian', 'Ramos', 'Buerano', '09265213582', 17, 51),
(74, 1123, 'Joana', 'Marie', 'Dioso', 'Dantes', '09364732859', 17, 51),
(76, 1126, 'Paulo                              ', '                                   ', 'Jimenez                            ', 'Babadilla                          ', '09364732859                        ', 17, 51);

-- --------------------------------------------------------

--
-- Table structure for table `subject_tbl`
--

CREATE TABLE IF NOT EXISTS `subject_tbl` (
  `su_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `c_id` int(10) NOT NULL,
  `ref_id` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=183 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_tbl`
--

INSERT INTO `subject_tbl` (`su_id`, `name`, `c_id`, `ref_id`) VALUES
(169, 'PROG1', 47, 'PROG147'),
(170, 'PROG3', 47, 'PROG347'),
(171, 'SAD', 47, 'SAD47'),
(175, 'SE', 47, 'SE47'),
(180, 'PROG2', 51, 'PROG251'),
(181, 'SE', 51, 'SE51'),
(182, '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `subtaken_tbl`
--

CREATE TABLE IF NOT EXISTS `subtaken_tbl` (
  `sub_id` int(10) NOT NULL,
  `su_id` int(10) NOT NULL,
  `s_id` varchar(20) NOT NULL,
  `ref_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=466 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subtaken_tbl`
--

INSERT INTO `subtaken_tbl` (`sub_id`, `su_id`, `s_id`, `ref_id`) VALUES
(385, 180, '1124', 1801124),
(386, 181, '1124', 1811124),
(464, 180, '1123', 1801123),
(465, 181, '1123', 1811123);

-- --------------------------------------------------------

--
-- Table structure for table `year_tbl`
--

CREATE TABLE IF NOT EXISTS `year_tbl` (
  `year_id` int(11) NOT NULL,
  `year_name` varchar(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year_tbl`
--

INSERT INTO `year_tbl` (`year_id`, `year_name`) VALUES
(22, '1st Year'),
(23, '2nd Year'),
(24, '3rd Year'),
(25, '4th Year'),
(26, '5th Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_left_tbl`
--
ALTER TABLE `course_left_tbl`
  ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`c_id`),
  ADD UNIQUE KEY `ref_id` (`ref_id`);

--
-- Indexes for table `department_left_tbl`
--
ALTER TABLE `department_left_tbl`
  ADD PRIMARY KEY (`ref_d_id`);

--
-- Indexes for table `department_tbl`
--
ALTER TABLE `department_tbl`
  ADD PRIMARY KEY (`d_id`),
  ADD UNIQUE KEY `department` (`department`);

--
-- Indexes for table `sectiontaken_tbl`
--
ALTER TABLE `sectiontaken_tbl`
  ADD PRIMARY KEY (`sectionref_id`),
  ADD UNIQUE KEY `s_id` (`s_id`);

--
-- Indexes for table `section_tbl`
--
ALTER TABLE `section_tbl`
  ADD PRIMARY KEY (`section_id`),
  ADD UNIQUE KEY `ref_id` (`ref_id`);

--
-- Indexes for table `semester_tbl`
--
ALTER TABLE `semester_tbl`
  ADD PRIMARY KEY (`sem_id`),
  ADD UNIQUE KEY `sem_name` (`sem_name`);

--
-- Indexes for table `student_number_left_tbl`
--
ALTER TABLE `student_number_left_tbl`
  ADD PRIMARY KEY (`ref_id`);

--
-- Indexes for table `student_number_tbl`
--
ALTER TABLE `student_number_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `s_id` (`s_id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `s_id` (`s_id`);

--
-- Indexes for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  ADD PRIMARY KEY (`su_id`),
  ADD UNIQUE KEY `ref_id` (`ref_id`);

--
-- Indexes for table `subtaken_tbl`
--
ALTER TABLE `subtaken_tbl`
  ADD PRIMARY KEY (`sub_id`),
  ADD UNIQUE KEY `ref_id` (`ref_id`);

--
-- Indexes for table `year_tbl`
--
ALTER TABLE `year_tbl`
  ADD PRIMARY KEY (`year_id`),
  ADD UNIQUE KEY `year_name` (`year_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_left_tbl`
--
ALTER TABLE `course_left_tbl`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `department_left_tbl`
--
ALTER TABLE `department_left_tbl`
  MODIFY `ref_d_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department_tbl`
--
ALTER TABLE `department_tbl`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `sectiontaken_tbl`
--
ALTER TABLE `sectiontaken_tbl`
  MODIFY `sectionref_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `section_tbl`
--
ALTER TABLE `section_tbl`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `semester_tbl`
--
ALTER TABLE `semester_tbl`
  MODIFY `sem_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `student_number_left_tbl`
--
ALTER TABLE `student_number_left_tbl`
  MODIFY `ref_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `student_number_tbl`
--
ALTER TABLE `student_number_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  MODIFY `su_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=183;
--
-- AUTO_INCREMENT for table `subtaken_tbl`
--
ALTER TABLE `subtaken_tbl`
  MODIFY `sub_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=466;
--
-- AUTO_INCREMENT for table `year_tbl`
--
ALTER TABLE `year_tbl`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
