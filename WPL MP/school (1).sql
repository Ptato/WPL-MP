-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2022 at 04:25 AM
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
  `bg` varchar(5) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_title` varchar(200) NOT NULL,
  `banner_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_image`) VALUES
(1, 'Banner 1', 'banner-1.jpg'),
(2, 'Banner 2', 'banner-2.jpg'),
(3, 'Banner 3', 'banner-3.jpg'),
(4, 'Banner 4', 'banner-4.jpg'),
(5, 'Banner 5', 'banner-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Name` varchar(100) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `Content` varchar(2000) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Qualification` varchar(100) DEFAULT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id`, `Name`, `email`, `Qualification`, `image`) VALUES
('TR1011', 'Pratap Salunke', 'prsalunke@gmail.com', 'B.Ed. and M.Sc. Maths', 'pics/f1.png'),
('TR1020', 'Ramesh Chandra', 'ramch1898@gmail.com', 'B.Ed. and M.Sc. Maths', 'pics/f2.jpeg'),
('TR2012', 'Rohit Desai', 'rtdesai@gmail.com', 'B.Ed. and M.Sc. English', 'pics/f3.jpeg'),
('TR3013', 'Mehul Parsa', 'mparsa@gmail.com', 'B.Ed. and M.Sc. History', 'pics/f4.jpeg'),
('TR4014', 'Advay Sinha', 'asinha@gmail.com', 'B.Ed. and M.Sc. Geography', 'pics/f5.jpeg'),
('TR5015', 'Vinay Ray', 'vray21@gmail.com', 'B.Ed. and M.Sc. Chemistry', 'pics/f6.jpeg'),
('TR6016', 'Aparna Kuruvilla', 'apkuvi25@gmail.com', 'B.Ed. and M.Sc. Biology', 'pics/f7.jpeg'),
('TR7017', 'Yash Uppal', 'yashuppu2113@gmail.com', 'B.Ed. and M.Sc. Physics', 'pics/f8.jpeg'),
('TR8018', 'Pravin Sura', 'prsura199@gmail.com', 'B.Ed. and M.Sc. History', 'pics/f9.jpeg'),
('TR9019', 'Sarvesh Jhaveri', 'sarveshjhaveri@gmail.com', 'B.Ed. and M.Sc. Chemistry', 'pics/f10.jpeg');

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
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
