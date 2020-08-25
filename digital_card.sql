-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2020 at 10:19 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digital_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `resume_additional`
--

CREATE TABLE `resume_additional` (
  `email` varchar(50) NOT NULL,
  `adittional` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_additional`
--

INSERT INTO `resume_additional` (`email`, `adittional`) VALUES
('vaibhav@gmail.com', 'name'),
('vishalkarande6@gmail.com', 'sad\r\n\r\nasnicjnijajcj'),
('amit@gmail.com', 'hard working person');

-- --------------------------------------------------------

--
-- Table structure for table `resume_certificate`
--

CREATE TABLE `resume_certificate` (
  `email` varchar(50) NOT NULL,
  `certificate_domain` varchar(50) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_certificate`
--

INSERT INTO `resume_certificate` (`email`, `certificate_domain`, `detail`, `link`) VALUES
('vishalkarande6@gmail.com', 'aws', 'aws certificate', 'aws adasd sad'),
('vishalkarande6@gmail.com', 'aws', 'aws certificate', 'aws adasd sad'),
('amit@gmail.com', 'aws', 'aws amazon certified', 'networking');

-- --------------------------------------------------------

--
-- Table structure for table `resume_detail`
--

CREATE TABLE `resume_detail` (
  `email` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phoneno.` bigint(20) NOT NULL,
  `address` varchar(150) NOT NULL,
  `pincode` int(10) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(50) NOT NULL,
  `personal_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_detail`
--

INSERT INTO `resume_detail` (`email`, `first_name`, `last_name`, `phoneno.`, `address`, `pincode`, `city`, `state`, `personal_profile`) VALUES
('vishalkarande6@gmail.com', 'joker', 'karande', 9175615634, 'pune', 102, 'pune\r\n', 'Delhi', 'red'),
('vaibhav@gmail.com', 'j', 'k', 87, 'asddasadsd', 12, 'pune', 'bnbm', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('joker@gmail.com', 'joker', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('joker@gmail.com', 'casturd', 'karande', 9175615634, 'pune', 0, 'pune', 'Delhi', 'null'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('joker@gmail.com', 'casturd', 'karande', 9175615634, 'pune', 0, 'pune', 'Delhi', 'null'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', 'red'),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('vishalkarande6@gmail.com', 'jack', '', 0, '', 0, '', '', ''),
('amit@gmail.com', 'amit', 'pawar', 8669166244, 'sr. no. 37/2 omkar colony hadapsar ', 0, 'pune', 'Maharashtra', 'i am a good and bad person');

-- --------------------------------------------------------

--
-- Table structure for table `resume_education`
--

CREATE TABLE `resume_education` (
  `email` varchar(50) NOT NULL,
  `x_school` varchar(100) NOT NULL,
  `x_board` varchar(50) NOT NULL,
  `x_percentage` varchar(4) NOT NULL,
  `x_year_complete` varchar(5) NOT NULL,
  `12_stream` varchar(50) NOT NULL,
  `12_school` varchar(100) NOT NULL,
  `12_board` varchar(50) NOT NULL,
  `12_percentage` varchar(10) NOT NULL,
  `12_year_complete` varchar(5) NOT NULL,
  `be_course` varchar(50) NOT NULL,
  `be_school` varchar(100) NOT NULL,
  `be_board` varchar(50) NOT NULL,
  `be_percentage` varchar(4) NOT NULL,
  `be_year_complete` varchar(5) NOT NULL,
  `me_course` varchar(50) NOT NULL,
  `me_school` varchar(100) NOT NULL,
  `me_board` varchar(50) NOT NULL,
  `me_percentage` varchar(4) NOT NULL,
  `me_year_complete` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_education`
--

INSERT INTO `resume_education` (`email`, `x_school`, `x_board`, `x_percentage`, `x_year_complete`, `12_stream`, `12_school`, `12_board`, `12_percentage`, `12_year_complete`, `be_course`, `be_school`, `be_board`, `be_percentage`, `be_year_complete`, `me_course`, `me_school`, `me_board`, `me_percentage`, `me_year_complete`) VALUES
('vishalkarande6@gmail.com', 'aps pune', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('vishalkarande6@gmail.com', 'jackwatson', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('vishalkarande6@gmail.com', 'jackwatson', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('vishalkarande6@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('vishalkarande6@gmail.com', 'pune', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('vaibhav@gmail.com', '', '', '', '', '', '6', '5', '', '3', '2', '1', '', '', '', '', '', '', '', ''),
('vaibhav@gmail.com', '', '', '', '', '', '6', '5', '', '3', '2', '1', '', '', '', '', '', '', '', ''),
('vaibhav@gmail.com', '', '', '', '', '', '6', '7', '', '9', '10', '11', '', '', '', '', '', '', '', ''),
('vaibhav@gmail.com', '', '', '', '', '', '6', '7', '', '9', '', '', '', '', '', '', '', '', '', ''),
('vaibhav@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
('vaibhav@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `resume_projects`
--

CREATE TABLE `resume_projects` (
  `email` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `time_month` int(4) NOT NULL,
  `time_year` int(4) NOT NULL,
  `project_detail` varchar(150) NOT NULL,
  `skills` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_projects`
--

INSERT INTO `resume_projects` (`email`, `title`, `domain`, `time_month`, `time_year`, `project_detail`, `skills`) VALUES
('vishalkarande6@gmail.com', 'we33ras', 'web development', 4, 2, 'java', 'c,c++'),
('vishalkarande6@gmail.com', 'we33ras', 'web development', 4, 2, 'java', 'c,c++'),
('amit@gmail.com', 'apetet', 'android', 2, 2, 'android application', 'android, firebase');

-- --------------------------------------------------------

--
-- Table structure for table `resume_skill`
--

CREATE TABLE `resume_skill` (
  `email` varchar(50) NOT NULL,
  `skill` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_skill`
--

INSERT INTO `resume_skill` (`email`, `skill`) VALUES
('vishalkarande6@gmail.com', 'c,c++,html,css,j'),
('vishalkarande6@gmail.com', 'c,c++,java'),
('amit@gmail.com', 'c,c++,java,html');

-- --------------------------------------------------------

--
-- Table structure for table `resume_work_exp`
--

CREATE TABLE `resume_work_exp` (
  `email` varchar(50) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `duration_year` int(5) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL,
  `duration_month` int(3) NOT NULL,
  `company_location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resume_work_exp`
--

INSERT INTO `resume_work_exp` (`email`, `company_name`, `duration_year`, `designation`, `role`, `duration_month`, `company_location`) VALUES
('vishalkarande6@gmail.com', 'sad', 2, 'sd', 'ssdad', 1, 't syat'),
('amit@gmail.com', 'we33ras', 2, 'intern', 'develeping work', 2, 'pune'),
('amit@gmail.com', 'we33ras', 2, 'intern', 'develeping work', 2, 'pune'),
('amit@gmail.com', 'we33ras', 2, 'intern', 'develeoper', 2, 'pune'),
('amit@gmail.com', 'we33ras', 2, 'intern', 'develeoper', 2, 'pune');

-- --------------------------------------------------------

--
-- Table structure for table `students_user`
--

CREATE TABLE `students_user` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `sub_status` varchar(10) NOT NULL,
  `sub_amount` int(30) NOT NULL,
  `form` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students_user`
--

INSERT INTO `students_user` (`first_name`, `last_name`, `email`, `password`, `mobile`, `sub_status`, `sub_amount`, `form`) VALUES
('pokemon', 'amit', 'amit@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d30a', '7588218796', 'yes', 1000, 'done'),
('joker', 'k', 'joker@gmail.com', 'joker', '87', 'asdasd', 10, ''),
('pokemon', 'sorav', 'sourav@gmail.com', '25f9e794323b453885f5181f1b624d0b', '7588218796', 'yes', 1000, 'done'),
('j', 'k', 'vaibhav@gmail.com', 'joker', '87', 'y', 10, ''),
('joker', 'karande', 'vaibhavkarande@gmail.com', 'c44a471bd78cc6c2fea32b9fe028d3', '2147483647', 'yes', 1000, ''),
('v', 'k', 'vishalkarande6@gmail.com', 'joker', '87', 'y', 10, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resume_additional`
--
ALTER TABLE `resume_additional`
  ADD KEY `email` (`email`);

--
-- Indexes for table `resume_certificate`
--
ALTER TABLE `resume_certificate`
  ADD KEY `email` (`email`);

--
-- Indexes for table `resume_detail`
--
ALTER TABLE `resume_detail`
  ADD KEY `email` (`email`);

--
-- Indexes for table `resume_education`
--
ALTER TABLE `resume_education`
  ADD KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Indexes for table `resume_projects`
--
ALTER TABLE `resume_projects`
  ADD KEY `email` (`email`);

--
-- Indexes for table `resume_skill`
--
ALTER TABLE `resume_skill`
  ADD KEY `email` (`email`);

--
-- Indexes for table `resume_work_exp`
--
ALTER TABLE `resume_work_exp`
  ADD KEY `email` (`email`);

--
-- Indexes for table `students_user`
--
ALTER TABLE `students_user`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `resume_additional`
--
ALTER TABLE `resume_additional`
  ADD CONSTRAINT `relation_aditional` FOREIGN KEY (`email`) REFERENCES `students_user` (`email`);

--
-- Constraints for table `resume_certificate`
--
ALTER TABLE `resume_certificate`
  ADD CONSTRAINT `resume_certificate_ibfk_1` FOREIGN KEY (`email`) REFERENCES `students_user` (`email`);

--
-- Constraints for table `resume_detail`
--
ALTER TABLE `resume_detail`
  ADD CONSTRAINT `resume_detail_ibfk_1` FOREIGN KEY (`email`) REFERENCES `students_user` (`email`);

--
-- Constraints for table `resume_education`
--
ALTER TABLE `resume_education`
  ADD CONSTRAINT `resume_education_ibfk_1` FOREIGN KEY (`email`) REFERENCES `students_user` (`email`);

--
-- Constraints for table `resume_projects`
--
ALTER TABLE `resume_projects`
  ADD CONSTRAINT `resume_projects_ibfk_1` FOREIGN KEY (`email`) REFERENCES `students_user` (`email`);

--
-- Constraints for table `resume_skill`
--
ALTER TABLE `resume_skill`
  ADD CONSTRAINT `resume_skill_ibfk_1` FOREIGN KEY (`email`) REFERENCES `students_user` (`email`);

--
-- Constraints for table `resume_work_exp`
--
ALTER TABLE `resume_work_exp`
  ADD CONSTRAINT `resume_work_exp_ibfk_1` FOREIGN KEY (`email`) REFERENCES `students_user` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
