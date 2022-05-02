-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 07:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `name` varchar(20) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `mname` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `bg` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`name`, `fname`, `mname`, `address`, `dob`, `email`, `bg`) VALUES
('Bharat Mahesh', 'wqf', 'wfq', 'B/602, Akanksha Building,Prem Nagar\r\nThane,MIra Road East', '2022-05-11', 'mbharat04@gmail.com', 'asf'),
('Bharat Mahesh', '21eaf', 'wfq', 'B/602, Akanksha Building,Prem Nagar\r\nThane,MIra Road East', '2022-04-27', 'mbharat04@gmail.com', 'awd'),
('Bharat Mahesh', 'dawd', 'awdawd', 'B/602, Akanksha Building,Prem Nagar\r\nThane,MIra Road East', '2022-05-26', 'bharat.mahesh@somaiya.edu', 'dwadw'),
('Bharat Mahesh', 'wqf', 'wfq', 'B/602, Akanksha Building,Prem Nagar\r\nThane,MIra Road East', '2022-04-26', 'bharat.mahesh@somaiya.edu', 'asdwd');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Name` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Content` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Name`, `email`, `Content`) VALUES
('Bharat Mahesh', 'mbharat04@gmail.com', 'asdasd'),
('Bharat Mahesh', 'mbharat04@gmail.com', 'asdasd'),
('Bharat Mahesh', 'mbharat04@gmail.com', 'asasasas'),
('Bharat Mahesh', 'mbharat04@gmail.com', 'hi'),
('Jenson', 'bharat.mahesh@somaiya.edu', 'hello'),
('Bharat Mahesh', 'mbharat04@gmail.com', 'awdfwqd'),
('Bharat Mahesh', 'mbharat04@gmail.com', 'awdfwqd'),
('Bharat Mahesh', 'mbharat04@gmail.com', 'dawkjlgjkasd');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `Title` varchar(100) NOT NULL,
  `Dated` date DEFAULT NULL,
  `Content` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`Title`, `Dated`, `Content`) VALUES
('Annual Day Celebration 2023', '2023-12-10', 'This is to inform all students that Annual Day 2023 will be celebrated on December 29th from 6pm to 11 pm at the school auditorium with various cultural programmes. IAS Mr. Ravi Shankar will grace the occasion as the Chief Guest. \r\n\r\nStudents who would like to participate in various programmes should contact their respective class teachers latest by December 25, 2023.\r\n\r\nAditya(Event Head)'),
('Blood Donation Campaign', '2018-03-18', 'This is hereby notified that Life-way organization is going to organize a Blood Donate Camp in our school on 20th July, 2023. All\r\nthe willing students are hereby requested to be a part of the camp by submitting their names to the undersigned latest by 15th July, 2023.\r\n\r\nActive participation of all the students is expected to make the camp successful.\r\n\r\nYours Truly,\r\nMr. Krishnakumar Iyer'),
('School Magazine', '2023-09-20', 'This is to inform all the students that the school is going to publish the fifth issue of the annual school magazine \"Darpan\" this year. You are requested to contribute your reading material in the form of poems, articles, travelogues, etc. Submit your articles to your class teachers latest by 1st October. For more information contact the undersigned.\r\n\r\nKabir \r\nStudent Editor');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Id` varchar(10) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Qualification` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id`, `Name`, `email`, `Qualification`) VALUES
('TR1011', 'Pratap Salunke', 'prsalunke@gmail.com', 'B.Ed. and M.Sc. Maths'),
('TR1020', 'Ramesh Chandra', 'ramch1898@gmail.com', 'B.Ed. and M.Sc. Maths'),
('TR2012', 'Rohit Desai', 'rtdesai@gmail.com', 'B.Ed. and M.Sc. English'),
('TR3013', 'Mehul Parsa', 'mparsa@gmail.com', 'B.Ed. and M.Sc. History'),
('TR4014', 'Advay Sinha', 'asinha@gmail.com', 'B.Ed. and M.Sc. Geography'),
('TR5015', 'Vinay Ray', 'vray21@gmail.com', 'B.Ed. and M.Sc. Chemistry'),
('TR6016', 'Aparna Kuruvilla', 'apkuvi25@gmail.com', 'B.Ed. and M.Sc. Biology'),
('TR7017', 'Yash Uppal', 'yashuppu2113@gmail.com', 'B.Ed. and M.Sc. Physics'),
('TR8018', 'Pravin Sura', 'prsura199@gmail.com', 'B.Ed. and M.Sc. History'),
('TR9019', 'Sarvesh Jhaveri', 'sarveshjhaveri@gmail.com', 'B.Ed. and M.Sc. Chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_taught`
--

CREATE TABLE `subjects_taught` (
  `Staff_ID` varchar(10) DEFAULT NULL,
  `Subject_Name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects_taught`
--

INSERT INTO `subjects_taught` (`Staff_ID`, `Subject_Name`) VALUES
('TR1011', 'Maths'),
('TR1011', 'EVS'),
('TR2012', 'English'),
('TR2012', 'History'),
('TR3013', 'History'),
('TR3013', 'Civics'),
('TR4014', 'Geography'),
('TR4014', 'EVS'),
('TR5015', 'Chemistry'),
('TR5015', 'English'),
('TR6016', 'Biology'),
('TR6016', 'Chemistry'),
('TR7017', 'Physics'),
('TR7017', 'Chemistry'),
('TR8018', 'History'),
('TR8018', 'English'),
('TR9019', 'Chemistry'),
('TR9019', 'EVS'),
('TR1020', 'Maths'),
('TR1020', 'Physics');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`Title`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
