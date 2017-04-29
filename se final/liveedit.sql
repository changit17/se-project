-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2017 at 03:29 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `liveedit`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `subject_id` int(11) NOT NULL,
  `subject_name` char(10) NOT NULL,
  `subject_description` char(50) NOT NULL,
  `lecture_units` int(1) NOT NULL,
  `lab_units` int(1) NOT NULL,
  `number_units` int(1) NOT NULL,
  `sem` char(10) NOT NULL,
  `preq` char(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`, `subject_description`, `lecture_units`, `lab_units`, `number_units`, `sem`, `preq`) VALUES
(1, 'GEENG 1', 'Study of Thinking Skills in English', 3, 0, 3, '1st', 'None'),
(2, 'GEMath 2', 'College Algebra', 3, 0, 3, '1st', 'None'),
(3, 'Phys 1', 'Physics', 3, 0, 3, '1st', 'None'),
(4, 'Prog 1', 'Programming Fundamentals', 2, 1, 3, '1st', 'None'),
(5, 'ITF', 'IT Fundamentals', 2, 1, 3, '1st', 'None'),
(6, 'Ptools', 'Productivity Tools', 2, 1, 3, '1st', 'None'),
(7, 'PE 1', 'Physical Fitness', 2, 0, 2, '1st', 'None'),
(8, 'NSTP 1', 'Civic Welfare Training', 3, 0, 3, '1st', 'None'),
(9, 'GEENG 2', 'Reading and Writing Discipline', 3, 0, 3, '2nd', 'GEENG 1'),
(10, 'GEMath 3', 'Plane Trigonometry', 3, 0, 3, '2nd', 'GEMath 2'),
(11, 'Phys 2', 'Physics 2', 3, 0, 3, '2nd', 'Phys1'),
(12, 'GEHum 4', 'Logic and Critical Thinking', 3, 0, 3, '2nd', 'None'),
(13, 'Prog 2', 'Advanced Programming', 2, 1, 3, '2nd', 'Prog 1'),
(14, 'MMS', 'Multimedia System', 2, 1, 3, '2nd', 'ITF'),
(15, 'PE 2', 'Rhythmic Activities', 2, 0, 2, '2nd', 'PE 1'),
(16, 'NSTP 2', 'Civic Welfare Training', 3, 0, 3, '2nd', 'NSTP 1');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_tbl`
--

CREATE TABLE IF NOT EXISTS `subjects_tbl` (
  `subject_id` int(11) NOT NULL,
  `subject_name` char(10) NOT NULL,
  `subject_desc` char(50) NOT NULL,
  `lecture_units` int(1) NOT NULL,
  `lab_units` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', 'admin'),
(10, 'febe', '9f51ce8e8e4374fd0736f3ece4a679dc'),
(9, 'argie', '6cf51b9070c74b2b7b90a24428e9a99b'),
(11, 'changit', 'changit'),
(12, 'changit', 'dfe4f2afb7abb6535c8cbe7c0a6a80f4'),
(13, 'pauloc', 'pauloc'),
(14, 'pauloc', '4173293ec2562c9ace300f631cbdc933');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `subjects_tbl`
--
ALTER TABLE `subjects_tbl`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `subjects_tbl`
--
ALTER TABLE `subjects_tbl`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
