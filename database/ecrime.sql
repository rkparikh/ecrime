-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2013 at 02:11 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ecrime`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizen_record`
--

CREATE TABLE IF NOT EXISTS `citizen_record` (
  `citizen_id` int(11) NOT NULL,
  `citizen_f_name` varchar(50) NOT NULL,
  `citizen_m_name` varchar(50) NOT NULL,
  `citizen_l_name` varchar(50) NOT NULL,
  `mob_no` varchar(15) NOT NULL,
  `res_no` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `location` varchar(50) NOT NULL,
  `details` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`citizen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizen_record`
--

INSERT INTO `citizen_record` (`citizen_id`, `citizen_f_name`, `citizen_m_name`, `citizen_l_name`, `mob_no`, `res_no`, `email`, `password`, `dob`, `location`, `details`, `pic`) VALUES
(1, 'Tejaswi', '', 'Pandit', '+919423937644', '34523', 'tej2489@yahoo.com', 'teju', '1988-08-09', 'Pune', 'zxcvsdzf', '3d_Crystal_Ball.jpg'),
(2, 'Phil', 'D.', 'Bronstein', '9412311231', '134', 'bronstein@gmail.com', 'bron', '1988-08-09', 'New York', 'Street No.34', 'bronstein.jpg'),
(3, 'Archana', 'A.', 'Sonje', '9412311231', '134', 'archu@gmail.com', '', '1990-07-12', 'Dhule', 'Parola', 'sanaya.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `crime_ques`
--

CREATE TABLE IF NOT EXISTS `crime_ques` (
  `crime_id` int(11) DEFAULT NULL,
  `ques1` varchar(50) DEFAULT NULL,
  `ques2` varchar(50) DEFAULT NULL,
  `ques3` varchar(50) DEFAULT NULL,
  `ques4` varchar(50) DEFAULT NULL,
  `ques5` varchar(50) DEFAULT NULL,
  KEY `crime_id` (`crime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime_ques`
--

INSERT INTO `crime_ques` (`crime_id`, `ques1`, `ques2`, `ques3`, `ques4`, `ques5`) VALUES
(1, NULL, NULL, NULL, NULL, NULL),
(2, 'What amount of bribery has been taken?', 'What was the name of that person?', 'Who have given the amount?', 'Is there any witness ?', 'What was the location?'),
(3, 'Who got blakmail?', 'What is the name of blakmailer?', 'What is the reason of blackmailing?', 'What is the media of blakmailing?', 'From what time he/she is blackmailing?'),
(4, 'What was the location?', 'Who was killed?', 'At what time he/she was killed?', 'Is there any witness ?', 'Is there any evidence?'),
(5, 'Who is kidnap?', 'Where did he/she got kidnap?', 'What was the time?', 'Is there any witness ?', 'Is there any suspecoius person?'),
(6, 'Where did the Robbery occures?', 'When did the Robbery happen? ', 'What was stolen?', 'Where was you present at the time of Robbery?', 'Was there any witness at the Robbery location?');

-- --------------------------------------------------------

--
-- Table structure for table `crime_status`
--

CREATE TABLE IF NOT EXISTS `crime_status` (
  `case_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `criminal_id` varchar(11) NOT NULL,
  `updated_date` date NOT NULL,
  `updated_by` varchar(15) NOT NULL,
  PRIMARY KEY (`case_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime_status`
--

INSERT INTO `crime_status` (`case_id`, `status`, `criminal_id`, `updated_date`, `updated_by`) VALUES
(1, '2', '4', '0000-00-00', ''),
(2, '2', '5', '2013-04-07', 'Admin'),
(3, '0', '4', '2013-04-07', 'Admin'),
(4, '2', '5', '0000-00-00', ''),
(5, '2', '5', '2013-04-07', 'Admin'),
(6, 'Pending', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `crime_type`
--

CREATE TABLE IF NOT EXISTS `crime_type` (
  `crime_id` int(11) NOT NULL,
  `crime_name` varchar(50) NOT NULL,
  PRIMARY KEY (`crime_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crime_type`
--

INSERT INTO `crime_type` (`crime_id`, `crime_name`) VALUES
(1, 'Missing'),
(2, 'Bribery'),
(3, 'Extortion'),
(4, 'Homicide'),
(5, 'Kidnap'),
(6, 'Robbery');

-- --------------------------------------------------------

--
-- Table structure for table `criminal_record`
--

CREATE TABLE IF NOT EXISTS `criminal_record` (
  `criminal_id` int(11) NOT NULL,
  `criminal_f_name` varchar(50) NOT NULL,
  `criminal_m_name` varchar(50) NOT NULL,
  `criminal_l_name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `mob_no` varchar(15) NOT NULL,
  `res_no` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `skin_color` varchar(15) NOT NULL,
  `hair_color` varchar(15) NOT NULL,
  `height` decimal(5,2) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `scars` varchar(15) NOT NULL,
  `phy_deformity` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`criminal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `criminal_record`
--

INSERT INTO `criminal_record` (`criminal_id`, `criminal_f_name`, `criminal_m_name`, `criminal_l_name`, `dob`, `mob_no`, `res_no`, `address`, `skin_color`, `hair_color`, `height`, `weight`, `scars`, `phy_deformity`, `pic`) VALUES
(1, 'Munna', 'S.', 'Bhai', '1975-01-12', '997777755', '766533455', 'mumbai', 'black', 'black', 6.10, 80.20, 'no', 'no', ''),
(2, 'Kiran', 'Gopal', 'Patil', '1990-10-03', '9423937542', '3432134', 'Nigadi', 'cream', 'black', 5.20, 45.20, 'sdasd', 'nothig', 'ram.jpg'),
(3, 'Abu', 'B.', 'Salim', '1989-12-03', '9412311231', '131', 'Alandi', 'fair', 'black', 124.00, 34.00, 'cvsdfg', 'sdvsdfg', 'abu.jpg'),
(4, 'Sanjay', 'sunil', 'dutt', '1989-12-03', '9955158678', '675', 'chinpokli raod', 'white', 'black', 6.90, 82.00, 'No', 'Bold pesonality.', 'sanjay.jpg'),
(5, 'Vivek', 'Sanjay', 'Oberooy', '2011-12-04', '', '12341', 'zxcsdfa', '', 'burgandy', 230.00, 56.00, 'zxcvasdfas', 'xcasdfsa', 'daud.jpg'),
(6, 'Osama', 'bin', 'laden', '1945-12-04', '878787864', '765543333', 'Afganistan', 'White', 'White', 6.00, 78.00, 'No', 'Dangerous person', 'laden.jpg'),
(7, 'Saddam', 'N.', 'Husein', '1950-11-03', '988765466', '56', 'No', 'black', 'black', 6.40, 6.00, 'No', 'no', 'saddam.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fir_data`
--

CREATE TABLE IF NOT EXISTS `fir_data` (
  `case_id` int(11) NOT NULL,
  `crime_id` int(11) DEFAULT NULL,
  `crime_name` varchar(12) NOT NULL,
  `location` varchar(20) NOT NULL,
  `citizen_id` int(11) DEFAULT NULL,
  `fdate` date NOT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `ans5` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`case_id`),
  KEY `case_id` (`crime_id`),
  KEY `citizen_id` (`citizen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir_data`
--

INSERT INTO `fir_data` (`case_id`, `crime_id`, `crime_name`, `location`, `citizen_id`, `fdate`, `ans1`, `ans2`, `ans3`, `ans4`, `ans5`) VALUES
(1, NULL, 'Extortion', 'Bhusawal', 103, '2013-03-29', 'Office', '10am', 'Rupees', 'In that office', '2 persons'),
(2, NULL, 'Bribery', 'Nasik', 103, '2013-03-29', 'College office', '4pm', 'Rupees', 'Lecture', '1 person'),
(3, NULL, 'Homicide', 'Jalgaon', 103, '2013-03-30', 'sdfszdf', 'ZXcsdf', 'zxcZCsda', 'hdfvsdfas', 'dsfasdfa'),
(4, NULL, 'Kidnap', 'Bhusawal', 105, '2013-03-26', 'At school', '12 pm', '-', 'Classroom', 'One girl'),
(5, NULL, 'Robbery', 'Jalgaon', 103, '2013-04-04', 'dcvbhnh', 'kiujhrgbgfv ', 'sfvthgyujyhn', 'edfvgtrh', 'dvrhtjt'),
(6, 4, 'Homicide', 'Mumbai', 103, '2013-04-04', 'Office', '12pm', 'Rupees', 'In Pune', 'Noone');

-- --------------------------------------------------------

--
-- Table structure for table `missing_citizen_record`
--

CREATE TABLE IF NOT EXISTS `missing_citizen_record` (
  `missing_citizen_id` int(11) NOT NULL,
  `missing_citizen_f_name` varchar(50) NOT NULL,
  `missing_citizen_m_name` varchar(50) NOT NULL,
  `missing_citizen_l_name` varchar(50) NOT NULL,
  `mob_no` varchar(15) NOT NULL,
  `res_no` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `details` varchar(50) NOT NULL,
  `skin_color` varchar(50) NOT NULL,
  `hair_color` varchar(50) NOT NULL,
  `height` decimal(5,2) NOT NULL,
  PRIMARY KEY (`missing_citizen_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missing_citizen_record`
--

INSERT INTO `missing_citizen_record` (`missing_citizen_id`, `missing_citizen_f_name`, `missing_citizen_m_name`, `missing_citizen_l_name`, `mob_no`, `res_no`, `address`, `dob`, `details`, `skin_color`, `hair_color`, `height`) VALUES
(2, 'Pooja', 'N', 'Shinde', '8765446654', '754445677', 'Shirgav', '2009-03-03', 'Lost from School', 'fair', 'black', 3.00),
(3, 'Aliya', 'V.', 'Bhatt', '8923456710', '78', 'Mumbai', '1987-09-03', 'Tattu on hand', 'Fair', 'burgandy', 5.90),
(4, 'Imran', 'Ehmad', 'Khan', '9412311231', '45767', 'zxcsefrefwerq', '2011-12-04', '  xczdvfasf   ', 'black', 'black', 300.00);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL,
  `reg_id` int(11) NOT NULL,
  `news_pdf` varchar(50) NOT NULL,
  `ndate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `reg_id`, `news_pdf`, `ndate`) VALUES
(1, 1, '1.pdf', '2013-04-20'),
(2, 3, '2.pdf', '2013-03-25'),
(3, 2, '3.pdf', '2013-02-12'),
(4, 7, '4.pdf', '2013-04-01'),
(5, 7, '5.pdf', '2013-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `reg_id` int(11) NOT NULL,
  `reg_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`reg_id`, `reg_name`) VALUES
(1, 'Karvenagar'),
(2, 'Warje'),
(3, 'Kothrud'),
(4, 'Dekkan'),
(5, 'Aundh'),
(6, 'Swargate'),
(7, 'Shivaji Nagar'),
(8, 'Hadapsar');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `crime_ques`
--
ALTER TABLE `crime_ques`
  ADD CONSTRAINT `crime_ques_ibfk_1` FOREIGN KEY (`crime_id`) REFERENCES `crime_type` (`crime_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
