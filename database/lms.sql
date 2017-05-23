-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 01:16 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_name` varchar(55) NOT NULL,
  `book_name` varchar(55) NOT NULL,
  `bill_price` int(15) NOT NULL,
  `bill_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `borrow_id`, `user_id`, `book_id`, `user_name`, `book_name`, `bill_price`, `bill_status`) VALUES
(1, 1, 13, 1, 'Nasreddine', 'Gumbo Love', 6, 'unpaid'),
(2, 2, 14, 5, 'nasreddine darazi', 'The Brain', 2, 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` tinyint(8) NOT NULL,
  `isbn` varchar(15) CHARACTER SET utf8 NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `author` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `publicationDate` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `price` double NOT NULL,
  `category` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `publisher_name` varchar(50) NOT NULL,
  `edition_year` int(12) NOT NULL,
  `status` varchar(55) NOT NULL DEFAULT 'available',
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `isbn`, `title`, `author`, `publicationDate`, `price`, `category`, `publisher_name`, `edition_year`, `status`, `image`) VALUES
(1, '1', 'Gumbo Love', 'Lucy Buffett', '2017-05-09', 6, 'Cook and food', 'Grand Central ', 2017, '2017-05-22', '9781501145308_p0_v7_s192x300.jpg'),
(2, '2', 'Whole New You', 'Tia Mowry', '2017-03-14', 5, 'Cook and food', 'Random House ', 2015, 'available', '9781101967355_p0_v3_s192x300.jpg'),
(3, '3', 'Six Seasons', ' Joshua McFadden', '2017-05-02', 5, 'Cook and food', 'Artisan', 2016, 'available', '9781579656317_p0_v1_s192x300.jpg'),
(4, '4', 'Almost Human', ' Lee Berger, John Hawks', '2017-05-09', 8, 'Science and technology', 'National Geographic ', 2012, 'available', '9781426218118_p0_v1_s192x300.jpg'),
(5, '5', 'The Brain', ' David Eagleman', '2017-03-07', 2, 'Science and technology', 'Knopf Doubleday ', 2017, 'available', '9780525433446_p0_v2_s192x300.jpg'),
(6, '6', 'Into the Black', 'Rowland White', '2017-04-18', 1, 'Science and technology', 'Touchstone', 2015, 'available', 'BendingTheUniverse.jpg'),
(7, '7', 'I Love My Love', 'Reyna Biddy', '2017-02-14', 11, 'Poetry and romance', 'Andrews McMeel ', 2009, 'available', '9781449486761_p0_v2_s192x300.jpg'),
(8, '8', 'Whiskey Words &  Shovel1', 'r.h. Sin', '2017-05-02', 11, 'Poetry and romance', 'Andrews McMeel ', 2016, 'available', '9781449488062_p0_v1_s192x300.jpg'),
(9, '9', 'Whiskey Words &  Shovel3', 'r.h. Sin', '2017-04-04', 12, 'Poetry and romance', 'Andrews McMeel ', 2014, 'available', '9781449484590_p0_v2_s192x300.jpg'),
(10, '10', 'The Freshman Survival ', 'Nora Bradbury-Haehl,', '2016-04-05', 12, 'Education', ' Center Street', 2017, 'available', '9781455567034_p0_v3_s462x700.jpg'),
(11, '11', 'Teach Like a Champion 2.0', 'Doug Lemov', '2017-01-07', 12, 'Education', 'Wiley', 2017, 'available', '9781118901854_p0_v3_s192x300.jpg'),
(12, '12', 'Teach Like a Pirate', ' Dave Burgess', '2012-09-25', 13, 'Education', 'Dave Burgess ', 2015, 'available', '9780988217607_p0_v3_s192x300.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` int(11) NOT NULL,
  `borrow_book_id` int(11) NOT NULL,
  `borrow_book_name` varchar(55) NOT NULL,
  `borrow_mem_id` int(11) NOT NULL,
  `borrow_date` date NOT NULL,
  `borrow_return_date` date NOT NULL,
  `borrow_status` tinytext,
  `book_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `borrow_book_id`, `borrow_book_name`, `borrow_mem_id`, `borrow_date`, `borrow_return_date`, `borrow_status`, `book_price`) VALUES
(1, 1, 'Gumbo Love', 13, '2017-05-08', '2017-05-22', 'not available', 6),
(2, 5, 'The Brain', 14, '2017-05-04', '2017-05-18', 'not available', 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Cook and food'),
(2, 'Science and technology'),
(3, 'Poetry and romance'),
(4, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) NOT NULL,
  `sex` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `address` text CHARACTER SET utf8,
  `phone` varchar(20) DEFAULT NULL,
  `nationality` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `user_id`, `name`, `email`, `sex`, `dob`, `address`, `phone`, `nationality`) VALUES
(6, 11, 'nasreddine', 'darazinasreddine@gmail.com', NULL, NULL, NULL, NULL, NULL),
(7, 12, 'darazinasreddine', 'ned@ned.com', NULL, NULL, NULL, NULL, NULL),
(8, 13, 'Nasreddine', 'darazinasreddine@gmail.com', 'male', '1996-06-18', 'Beirut', '76755211', 'Lebanon'),
(9, 14, 'nasreddine darazi', 'itsned@itsned.com', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(5) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `user_type`) VALUES
(1, 'admin'),
(2, 'member'),
(3, 'librarian');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(8) NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`) VALUES
(1, 1, 'admin', 'admin@admin.com', '25f9e794323b453885f5181f1b624d0b'),
(12, 3, 'darazinasreddine', 'ned@ned.com', '5f4dcc3b5aa765d61d8327deb882cf99'),
(13, 2, 'Nasreddine', 'darazinasreddine@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD UNIQUE KEY `isbn` (`isbn`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` tinyint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
