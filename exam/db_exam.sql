-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 10:11 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(11) NOT NULL,
  `adminUser` varchar(100) NOT NULL,
  `adminPass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ans`
--

CREATE TABLE `tbl_ans` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `rightAns` int(11) NOT NULL DEFAULT '0',
  `ans` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ans`
--

INSERT INTO `tbl_ans` (`id`, `quesNo`, `rightAns`, `ans`) VALUES
(19, 2, 0, 'Balancing'),
(12, 1, 0, 'Anti'),
(11, 1, 0, 'Exit'),
(10, 1, 1, 'Closing'),
(9, 1, 0, 'Quit'),
(18, 2, 1, 'Interlacing'),
(17, 2, 0, 'Dithering'),
(20, 3, 1, '~ '),
(21, 3, 0, '!'),
(22, 3, 0, '&'),
(23, 3, 0, '|'),
(24, 4, 0, '6'),
(25, 4, 0, '8'),
(26, 4, 0, '256'),
(27, 4, 1, '16 '),
(28, 5, 0, 'ASP'),
(29, 5, 1, 'PHP '),
(30, 5, 0, 'Perl CGI'),
(31, 5, 0, 'JSP');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ques`
--

CREATE TABLE `tbl_ques` (
  `id` int(11) NOT NULL,
  `quesNo` int(11) NOT NULL,
  `ques` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_ques`
--

INSERT INTO `tbl_ques` (`id`, `quesNo`, `ques`) VALUES
(4, 1, 'The Browser applies the feature of a tag until it encounters _____tag.'),
(6, 2, '_____refers to the way the GIF file is saved by the graphics software.'),
(7, 3, 'What operator makes converts 00110011 into 11001100?'),
(8, 4, 'There are_____color names recognized by all version of HTML.'),
(9, 5, 'What is the most widely use e-mail form script?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `userId` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `userName` varchar(32) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(32) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`userId`, `name`, `userName`, `password`, `email`, `status`) VALUES
(1, 'Md. Imran Hosen', 'imranhosen.up', 'ImHosen.up', 'imranhossen5912@gmail.com', 1),
(3, 'Arjun', 'arjun', '202cb962ac59075b964b07152d234b70', 'arjun@gmail.com', 0),
(4, 'Delowar', 'delowar', '202cb962ac59075b964b07152d234b70', 'delowar@gmail.com', 0),
(5, 'Imran Hosen', 'imran', '202cb962ac59075b964b07152d234b70', 'imran@gmail.com', 0),
(8, 'Md. Imran Hosen', 'imranhosen', '202cb962ac59075b964b07152d234b70', 'imh@gmail.com', 0),
(9, 'imran', 'admin', 'd41d8cd98f00b204e9800998ecf8427e', 'ims@gmail.com', 0),
(10, 'imran', 'admin', 'md5(34)', 'imy@gmail.com', 0),
(11, 'im@gmail.com', 'username', 'md5(123)', 'im@gmail.com', 0),
(12, 'aaaa', 'aaaaaaaaaa', 'md5(aaa)', 'aaa@aaa.aa', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_ans`
--
ALTER TABLE `tbl_ans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tbl_ques`
--
ALTER TABLE `tbl_ques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
