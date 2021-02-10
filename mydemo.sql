-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 02:17 PM
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
-- Database: `mydemo`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` char(15) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phno` int(11) DEFAULT NULL,
  `project` varchar(30) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `u_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `phno`, `project`, `message`, `u_id`) VALUES
(1, 'lakshmi', 're@bb.com', 2147483647, 'nskJ', 'jsdhka', NULL),
(2, NULL, NULL, NULL, NULL, 'hsgjhk', 's547'),
(3, NULL, NULL, NULL, NULL, '3fhasgjs', 's547'),
(4, 'sree', 're@bb.com', 54344788, 'nskJ', 'hjkll', NULL),
(5, NULL, NULL, NULL, NULL, 'bsjsksmlz', 's547'),
(6, 'jfkd', 'sjd@b.com', 34789, 'hsdjj', 'hfjs', NULL),
(7, NULL, NULL, NULL, NULL, 'gjghk', 's547'),
(8, 'JHJM', 'ggj@', 0, '', '', NULL),
(9, 'JHJM', 'ggj@', 2147483647, 'PROJECT 1', 'abhi', NULL),
(10, 'ghjjk', 'fgh@f', 2147483647, 'PROJECT 1', 'abhi', NULL),
(11, 'hjkh', 'cgd@dd', 2147483647, 'PROJECT 2', 'abhi', NULL),
(12, 'hjkh', 'cgd@dd', 2147483647, 'PROJECT 2', 'abhi', NULL),
(13, 'gfh', 'hgh@f', 2147483647, 'PROJECT 2', 'abhisree', NULL),
(14, 'gfh', 'hgh@f', 2147483647, 'PROJECT 2', 'abhisree', NULL),
(15, 'sjdk', 'dhg@h', 2147483647, 'PROJECT 2', 'abhisreeforever', NULL),
(16, 'sree', 'hgjj@dg', 2147483647, 'PROJECT 1', 'abhiii', NULL),
(17, NULL, NULL, NULL, NULL, 'abhiiiii', 's547'),
(18, NULL, NULL, NULL, NULL, 'abhiiiii', 's547'),
(19, NULL, NULL, NULL, NULL, 'abhiiiii', 's547'),
(20, NULL, NULL, NULL, NULL, 'my favourite', '3031');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `site_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `u_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `site_id`, `message`, `u_id`) VALUES
(1, 55, 'tedggg', 'td45'),
(2, 56, 'helllo', 's547'),
(3, 0, 'helllooooo', ''),
(4, 0, 'yooooooo', ''),
(5, 56, 'sreeeeee', 's547'),
(6, 56, 'helllloooo', 's547'),
(7, 56, 'hello world', 's547'),
(8, 78, 'hi world', '678a'),
(9, 56, 'hiiiii', 's547'),
(10, 56, 'sreelakshmi', 's547'),
(11, 78, 'yoooooo', '678a'),
(12, 56, 'helllooo', 'y89'),
(13, 30, 'my name is sreelakshmi', 'a387'),
(14, 30, 'i live in panvel', 'a387'),
(15, 30, 'this is enquiry system', 'a387'),
(16, 3130, 'hellooooooo', 'a30'),
(17, 3130, 'yooooooo', 'a30');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `u_id` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `site_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `u_id` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `site_id` int(11) NOT NULL,
  `phno` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`u_id`, `name`, `password`, `site_id`, `phno`) VALUES
('3031', 'abhilash', 'myyy', 30, 2147483647),
('678a', 'lakshmi', '890', 78, 567890008),
('a30', 'naina', '45', 3130, 467888889),
('a387', 'sreelakshmi', '3031', 30, 2147483647),
('s547', 'sree', '123', 56, 2147483647),
('y89', 'nanann', '345', 56, 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phno` varchar(10) DEFAULT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `cpassword` varchar(20) DEFAULT NULL,
  `siteid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`name`, `email`, `phno`, `user`, `password`, `cpassword`, `siteid`) VALUES
('jkfldcs', 'hxcks@jh.c', '9123456780', 'ajkdhk', 'asdfg', 'asdfg', 89),
('djslah', 'sjdhk@js.c', '7923912341', 'jdhk', 'iop', 'iop', 0),
('sreelakshmi', 'djhskh@kjks.com', '9341256789', 'jskhfk', 'tyuiop', 'tyuiop', 3837),
('hsdhzk', 'djhlca@sh.c', '9123456780', 'ukfsdl', 'qwerty', 'qwerty', 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
