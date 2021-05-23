-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2020 at 08:29 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `Id` int(11) NOT NULL,
  `Client_name` varchar(255) NOT NULL,
  `Client_email` varchar(255) NOT NULL,
  `Client_type` varchar(255) NOT NULL,
  `Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Id`, `Client_name`, `Client_email`, `Client_type`, `Created`) VALUES
(19, 'mitesh', 'miteshsukh0057@gmail.com', 'india', '2020-11-08 22:40:06'),
(31, 'vir', 'v@gmail.com', 'oakland', '2020-11-09 02:18:29'),
(32, 'vir', 'virenzalavadiya3@gmail.com', 'newzeland', '2020-11-09 12:43:02'),
(33, 'tgyyy', 'vftt@1221gamil.com', 'us', '2020-11-09 13:53:31');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Id` int(11) NOT NULL,
  `Key_id` bigint(11) NOT NULL,
  `Role_id` int(11) NOT NULL,
  `Activated` tinyint(1) NOT NULL,
  `Emp_name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Ph_no` bigint(14) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL DEFAULT '17004.png',
  `Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Id`, `Key_id`, `Role_id`, `Activated`, `Emp_name`, `Password`, `Email`, `Ph_no`, `Designation`, `Image`, `Created`) VALUES
(57, 270561001581571244, 1, 1, 'Viren_zalavadiya', '$2y$10$HRGGgRFPLOP/jFshLoaKFOsHPOBveufjLU5JKSUQzZc5SalHEnEhe', 'virenzalavadiya35@gmail.com', 7865435678, 'Programmer', 'IMG_20180517_122547_308.jpg', '2020-02-13 10:50:44'),
(68, 230450001604276984, 2, 0, 'jay', '$2y$10$uAAPXeAwYfNgx01YYOrX9e1YFcafdUA08kZVEcItd0KxJIZ0bwiMO', 'jay@123.com', 9876543451, 'web-design', '17004.png', '2020-11-02 05:59:44'),
(69, 290182001604300172, 2, 0, 'jack_bro', '$2y$10$LQB8ne6BdnApdwlqS/JyJuFgbJYcmQXaOJBcik4ItkME4Or5EL3Dm', 'jack@123.com', 9876543345, 'web devloper', 'IMG_20180520_093105_696.jpg', '2020-11-02 12:26:12'),
(70, 846595001604300946, 2, 0, 'mitesh', '$2y$10$mSLOWzXVnBiq.aI/7QpBDuA5s1HNO70IZ5v5RJwCBYnB.UsJ1s71.', 'miteshsukh0057@gmail.com', 9876543223, 'back end devloper', '17004.png', '2020-11-02 12:39:06'),
(73, 317161001604482017, 2, 0, 'stuti_patel', '$2y$10$Ey9Q9yuKov6gZPLhPl1ZSuBVlvdr9/cPbZCk6f/XMDZKandKXZKku', 'stutipatel321@gmail.com', 3445678876, 'backend devloper', '17004.png', '2020-11-04 14:56:57'),
(92, 616459001604561395, 2, 0, 'jaimin', '$2y$10$hR3p5jDxrLeo01EV4RQ3b.6UeQpQJem78xlvCuyd/CxvUn5HO7xXW', 'jaiminantala1405@gmail.com', 1234567890, 'engineering', '17004.png', '2020-11-05 12:59:55'),
(93, 3412001604645070, 2, 0, 'helly', '$2y$10$wZsQNqkVEMw03kn/8ukdaOPCmRyLs.pJTVEFG9jLTYAuy3Lk02XRW', 'helly123@gmail.com', 1234567898, 'programmer', '17004.png', '2020-11-06 12:14:30'),
(98, 346239001604905395, 2, 0, 'stuti', '$2y$10$/BjbTIZE3jqMKWR1SuWwO.YTBth8Fzzy9Eof27rEbaPM/3SWcIFCG', 'stutipatel32@gmail.com', 9876543212, 'programmer', '17004.png', '2020-11-09 12:33:15'),
(102, 600973001604905580, 2, 0, 'utsav', '$2y$10$QwTza8ZXgLnyiKfpTc9PmuO8I8NW0HffP607yo/XffaTFQ5cuNBF.', 'utsav@123.com', 9876543211, 'lecturer', '17004.png', '2020-11-09 12:36:20'),
(104, 451600001604916827, 2, 0, 'Viren', '$2y$10$37Nqr4hJMIJR.cfe6bPYCOixB1HxRPzVOM4RH/eD2RVwdtnBjxhka', 'virenzalavaa36@gmail.com', 89765453321, 'lecturer', '17004.png', '2020-11-09 15:43:47'),
(110, 83587001604919993, 2, 0, 'Mi', '$2y$10$RlaQAvZr31fq2s6Z4m1rIO2YXyEPLjO4/EQ80.zWxbshxkU.0pfgC', 'mi@gmail.com', 4545454545, 'programmer', '17004.png', '2020-11-09 16:36:33'),
(111, 313339001604922697, 2, 0, 'ashiti', '$2y$10$9EvvyVyyNp2dJGfw660oquoyI3EGvrzRwTmUmFMfhpe4aUMtgHGtW', 'ashitivora08@gmail.com', 7878767654, 'lecturer', '17004.png', '2020-11-09 17:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Id` int(11) NOT NULL,
  `Client_type` varchar(255) NOT NULL,
  `Project_type` varchar(255) NOT NULL,
  `Project_name` varchar(255) NOT NULL,
  `Start_project` varchar(255) NOT NULL,
  `End_project` varchar(255) NOT NULL,
  `Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Id`, `Client_type`, `Project_type`, `Project_name`, `Start_project`, `End_project`, `Created`) VALUES
(22, 'baijing', 'app', 'jango', '11/16/2020', '11/25/2020', '2020-11-02 01:21:05'),
(23, 'hocking', 'webdesign', 'school management system', '11/09/2020', '11/30/2020', '2020-11-02 06:09:55'),
(30, 'Out OF Country', 'Graphics', 'kim jom', '11/05/2020', '11/18/2020', '2020-11-04 15:03:51'),
(31, '$new zealand', 'Webdesign', 'new university', '11/24/2020', '11/25/2020', '2020-11-09 13:04:43');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Id` int(11) NOT NULL,
  `Role_id` int(11) NOT NULL,
  `Role_name` varchar(255) NOT NULL,
  `Created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Id`, `Role_id`, `Role_name`, `Created`) VALUES
(1, 1, 'Admin', '2020-02-08 05:24:32'),
(33, 2, 'employee', '2020-11-02 05:58:47'),
(37, 3, 'editor', '2020-11-09 13:45:47');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `salary_type` varchar(255) NOT NULL,
  `salary_amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `task1`
--

CREATE TABLE `task1` (
  `Id` int(11) NOT NULL,
  `Project_name` varchar(255) NOT NULL,
  `Task` varchar(255) NOT NULL,
  `Start_date` varchar(255) DEFAULT NULL,
  `End_date` varchar(255) DEFAULT NULL,
  `Ass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task1`
--

INSERT INTO `task1` (`Id`, `Project_name`, `Task`, `Start_date`, `End_date`, `Ass`) VALUES
(61, 'school management system', 'webpage', '11/17/2020', '11/25/2020', 'jack_bro'),
(65, 'school management system', 'logout', '11/11/2020', '11/13/2020', 'jay'),
(66, 'school management system', 'login', '11/24/2020', '11/26/2020', 'jay'),
(67, 'school management system', 'logout', '11/17/2020', '11/26/2020', 'jack_bro'),
(68, 'kim jom', 'login', '11/17/2020', '11/18/2020', 'jay'),
(69, 'jango', 'login', '11/24/2020', '11/25/2020', 'jay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Client_email` (`Client_email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Emp_name` (`Emp_name`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Ph_no` (`Ph_no`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Role_id` (`Role_id`),
  ADD UNIQUE KEY `Role_name` (`Role_name`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `task1`
--
ALTER TABLE `task1`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `task1`
--
ALTER TABLE `task1`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
