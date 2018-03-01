-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2013 at 04:34 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_info`
--

CREATE TABLE `academic_info` (
  `uni_name` varchar(30) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `semister` varchar(30) NOT NULL,
  `std_id` varchar(30) NOT NULL,
  UNIQUE KEY `std_id` (`std_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_info`
--

INSERT INTO `academic_info` (`uni_name`, `dept_name`, `semister`, `std_id`) VALUES
('Southern university', 'EEE', 'Winter', '006-11-77');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `batch_id` varchar(30) NOT NULL,
  `course_id` varchar(30) NOT NULL,
  PRIMARY KEY  (`batch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`batch_id`, `course_id`) VALUES
('23456', '34'),
('324', '2213');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` varchar(30) NOT NULL,
  `course_name` varchar(30) NOT NULL,
  `course_dur` varchar(30) NOT NULL,
  `course_fee` varchar(30) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  PRIMARY KEY  (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_dur`, `course_fee`, `dept_name`) VALUES
('2', 'CSE', '2', '2000', 'EEE'),
('2213', 'asdads', 'assad', '23132', 'CSIT'),
('34', 'CSE', '2', '2000', 'CSIT');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `std_id` varchar(30) NOT NULL,
  `batch_id` varchar(30) NOT NULL,
  `c` varchar(30) NOT NULL,
  `oop` varchar(30) NOT NULL,
  `java` varchar(30) NOT NULL,
  `cgpa` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`std_id`, `batch_id`, `c`, `oop`, `java`, `cgpa`) VALUES
('006-11-77', '324', 'A+', 'A+', 'A+', '4'),
('006-11-01', '23456', 'A', 'B+', 'A-', '2.4166666666667');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `std_id` varchar(30) NOT NULL,
  `std_name` varchar(30) NOT NULL,
  `father_name` varchar(30) NOT NULL,
  `mother_name` varchar(30) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact_no` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `religion` varchar(30) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  PRIMARY KEY  (`std_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`std_id`, `std_name`, `father_name`, `mother_name`, `address`, `contact_no`, `email`, `date_of_birth`, `religion`, `nationality`) VALUES
('006-11-77', 'mizan', 'ahmed ', 'farhana', 'baized bostami', 1921929292, 'afifmoonrat@yahoo.com', '1989-01-12', 'islam', 'bangladesi');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teach_id` varchar(30) NOT NULL,
  `teach_name` varchar(30) NOT NULL,
  `teach_contact` varchar(30) NOT NULL,
  `teach_email` varchar(30) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  PRIMARY KEY  (`teach_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teach_id`, `teach_name`, `teach_contact`, `teach_email`, `dept_name`) VALUES
('01289', 'kabir', '01921929292', 'afsad@asd.com', 'EEE'),
('034', 'ahmed', '01676634622', 'ahmed@gmail.com', 'CSIT'),
('123432', 'tasnova', '01818874022', 'asd@aa.com', 'CSIT');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `academic_info`
--
ALTER TABLE `academic_info`
  ADD CONSTRAINT `academic_info_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `student_info` (`std_id`) ON DELETE CASCADE ON UPDATE CASCADE;
