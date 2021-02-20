-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2020 at 04:19 AM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkreg`
--

CREATE TABLE `checkreg` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkreg`
--

INSERT INTO `checkreg` (`id`, `roll_no`, `name`, `dob`) VALUES
(1, 'Y18271001', 'Aakrti Shakya \r\n', '08/10/1997\r\n'),
(2, 'Y18271002', 'Aayushi Jain\r\n', '16/08/1997\r\n'),
(3, 'Y18271003', 'Akash Ahirwar\r\n', '01/08/1998\r\n'),
(4, 'Y18271004', 'Anuj Patel \r\n', '10/10/1997\r\n'),
(5, 'Y18271006', 'Ashutosh Katare \r\n', '02/04/1998\r\n'),
(6, 'Y18271007', 'Kanchan Namdev \r\n', '22/01/1998\r\n'),
(7, 'Y18271008', 'Kapil Kushwaha \r\n', '18/12/1995\r\n'),
(8, 'Y18271010', 'Mahendra Kumar Patel \r\n', '27/01/1998\r\n'),
(9, 'Y18271012', 'Mukesh Kumar Sah \r\n', '04/01/1997\r\n'),
(10, 'Y18271016', 'Rinkal Jain \r\n', '10/12/1997\r\n'),
(11, 'Y18271017', 'Sakshi Soni \r\n', '16/08/1997\r\n'),
(12, 'Y18271020', 'Shagufta Bano\r\n', '28/04/1998\r\n'),
(13, 'Y18271021', 'Shashank Jain \r\n', '01/09/1995\r\n'),
(14, 'Y18271022', 'Shiba Sankar Ghose \r\n', '18/07/1998\r\n'),
(15, 'Y18271023', 'Shivam Chourasia \r\n', '13/07/1997\r\n'),
(16, 'Y18271024', 'Suyash Sen \r\n', '30/11/1998\r\n'),
(17, 'Y18271025', 'Vipin Rai \r\n', '15/01/1995\r\n'),
(18, 'Y18271026', 'Vishal Singh \r\n', '18/11/1996\r\n'),
(19, 'Y18271027', 'Ankit Thakur \r\n', '01/01/1998\r\n'),
(20, 'Y18271028', 'Shivani Chourasiya \r\n', '25/08/1997\r\n'),
(21, 'Y18271029', 'Sonika Mourya \r\n', '17/02/1998\r\n'),
(22, 'Y18271030', 'Ankita Vaidya \r\n', '12/01/1998\r\n'),
(23, 'Y18271031', 'Arvind Vishwakarma \r\n', '27/08/1995\r\n'),
(24, 'Y18271032', 'Shrikant Dwivedi \r\n', '10/07/1996\r\n'),
(25, 'Y18271033', 'Suchee Jain \r\n', '22/01/1998\r\n'),
(26, 'Y18271034', 'Shivam Seth \r\n', '06/11/1997\r\n'),
(27, 'Y18271035', 'Surbhi Patel \r\n', '24/09/1997\r\n'),
(30, 'Y19271003', 'Aman Jain', ''),
(29, 'Y19271002', 'Akhilesh Gupta ', ''),
(28, 'Y19271001', 'Abhishek Mishra', ''),
(31, 'Y19271004', 'Anamika Kesharwani', ''),
(32, 'Y19271005', 'Anupriya Shrivastava', ''),
(33, 'Y19271006', 'Ashutosh Muduli', ''),
(34, 'Y19271007', 'Deepali Jain', ''),
(35, 'Y19271008', 'Deviprasad Patel', ''),
(36, 'Y19271009', 'Harshita Sharma ', ''),
(37, 'Y19271011', 'Khushbu Chobey ', ''),
(38, 'Y19271012', 'Namrata Sahu ', ''),
(39, 'Y19271013', 'Priya Pateriya ', ''),
(40, 'Y19271014', 'Rohit Kushwaha ', ''),
(41, 'Y19271015', 'Sonam Prajapati', ''),
(42, 'Y19271016', 'Swapnil Kesarwani', ''),
(43, 'Y17170061', 'Sandeep Mishra ', ''),
(44, 'Y18170001', 'Adarsh Rawat ', ''),
(45, 'Y18170002', 'Amrita Soni', ''),
(46, 'Y18170003', 'Diksha Sahu ', ''),
(47, 'Y18170004', 'Paras Jain ', ''),
(48, 'Y18170005', 'Prashant Soni ', ''),
(49, 'Y18170007', 'Yogendra Singh Kurmi', ''),
(50, 'Y18170009', 'Akash Sharma ', ''),
(51, 'Y18170011', 'Deepesh Lodhi ', ''),
(52, 'Y18170012', 'Devendra Ahirwar', ''),
(53, 'Y18170013', 'Devesh Patel ', ''),
(54, 'Y18170015', 'Himanshu Panday ', ''),
(55, 'Y18170019', 'Paras Jain ', ''),
(56, 'Y18170020', 'Pranjal Chourasiya ', ''),
(57, 'Y18170021', 'Prinse Jain ', ''),
(58, 'Y18170022', 'Sandeep Vishwakarma', ''),
(59, 'Y18170023', 'Saumya Mishra', ''),
(60, 'Y18170024', 'Shalu Tamrakar ', ''),
(61, 'Y18170027', 'Yogesh Patel ', ''),
(62, 'Y18170028', 'Vivek Sahu ', ''),
(63, 'Y18170029', 'Mahendra Ladiya ', ''),
(64, 'Y18170030', 'Chandbhan Singh Lodhi', ''),
(65, 'Y18170031', 'Sushil Patel', ''),
(66, 'Y18170033', 'Adarsh Pratap Sahu ', ''),
(67, 'Y18170035', 'Kishore Kumar Sahu', ''),
(68, 'Y18170036', 'Akshay Sen ', ''),
(69, 'Y18170037', 'Naman Chourasia ', ''),
(70, 'Y18170038', 'Sahil Patel', ''),
(71, 'Y18170039', 'Anil Sahu', ''),
(72, 'Y18170040', 'Anshika Jain ', ''),
(73, 'Y18170041', 'Anushree Mourya ', ''),
(74, 'Y18170042', 'Arpit Sahu ', ''),
(75, 'Y18170043', 'Deepesh Singh Rathore', ''),
(76, 'Y18170045', 'Muskan Jain ', ''),
(77, 'Y18170046', 'Ritu Chadar ', ''),
(78, 'Y18170047', 'Satyam Nema', ''),
(79, 'Y18170049', 'Aashutosh Dangi ', ''),
(80, 'Y18170051', 'Anamika Kushwaha', ''),
(81, 'Y18170054', 'Harsh Richhariya ', ''),
(82, 'Y18170056', 'Krishna Bhurji', ''),
(83, 'Y18170057', 'Neeraj Rajput ', ''),
(84, 'Y18170058', 'Prabandhan Jain ', ''),
(85, 'Y18170059', 'Priyanshi Sen', ''),
(86, 'Y18170060', 'Raunak Jain ', ''),
(87, 'Y18170062', 'Neelam Suryavanshi', ''),
(88, 'Y18170063', 'Shiv Dubey ', ''),
(89, 'Y18170065', 'Prashant Gautam', ''),
(90, 'Y18170067', 'Ankit Shrivastava', ''),
(91, 'Y18170068', 'Satyendra Kumar Rathore', ''),
(92, 'Y18170069', 'Saumitra Tiwari ', '');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `fid` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `type`, `fid`, `password`) VALUES
(1, 'Gaurav Jain', 'Assistant Professor', 'GJ123', '123'),
(2, 'Prasant Namdeo', 'Assistant Professor', 'PN123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `fid` varchar(100) NOT NULL,
  `for` varchar(100) NOT NULL,
  `tid` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` text NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `uid` varchar(100) NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload_t`
--

CREATE TABLE `upload_t` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` text NOT NULL,
  `time` text NOT NULL,
  `fid` varchar(100) NOT NULL,
  `ufor` varchar(100) NOT NULL,
  `tid` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `sem` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roll_no`, `name`, `dob`, `email`, `contact`, `degree`, `sem`, `password`) VALUES
(1, 'Y18271031', 'Arvind Vishwakarma', '1995-08-27', 'arvindvish2588@gmail.com', '8518871350', 'MCA', 'V', '123'),
(2, 'Y18271032', 'shrikant dwivedi', '1996-07-10', 'shrikantdwivedi786@gmail.com', '6392519698', 'MCA', 'V', '41226888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checkreg`
--
ALTER TABLE `checkreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_t`
--
ALTER TABLE `upload_t`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checkreg`
--
ALTER TABLE `checkreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload_t`
--
ALTER TABLE `upload_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
