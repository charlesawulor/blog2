-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 09:39 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorytbl`
--

CREATE TABLE `categorytbl` (
  `catid` int(11) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categorytbl`
--

INSERT INTO `categorytbl` (`catid`, `category`) VALUES
(1, 'Politics'),
(3, 'Gossip'),
(5, 'Entertainment'),
(6, 'Religion');

-- --------------------------------------------------------

--
-- Table structure for table `commenttbl`
--

CREATE TABLE `commenttbl` (
  `commentid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `website` text NOT NULL,
  `comment` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commenttbl`
--

INSERT INTO `commenttbl` (`commentid`, `postid`, `name`, `email`, `website`, `comment`, `date`) VALUES
(1, 0, 'Charles', '', '', 'Submit Comment', '2018-05-21 17:49:18'),
(2, 0, 'Oge', '', '', 'Submit Comment', '2018-05-21 17:49:18'),
(3, 0, 'Charles', '', '', '', '2018-05-21 17:49:18'),
(4, 0, 'Charles', '', '', '', '2018-05-21 17:49:18'),
(5, 0, 'Me', '', '', '', '2018-05-21 17:49:18'),
(6, 0, 'jjjjjjjj', '', '', 'Submit Comment', '2018-05-21 17:49:18'),
(7, 10, 'Oraver', '', '', 'Submit Comment', '2018-05-21 17:49:18'),
(10, 14, 'Gladys', 'ghgghgh@yahoo.com', 'www.gl.com', 'This post is cool This post is cool  This post is cool This post is cool This post is cool This post is cool This post is cool This post is cool', '2018-06-01 15:31:13'),
(15, 14, 'Good', 'g@yahoo.com', 'www.g.com', 'Big head  Big head Big head Big head Big head Big head Big head Big head Big head Big head Big head Big head ', '2018-06-01 16:55:40'),
(16, 14, 'Good', 'g@yahoo.com', 'www.g.com', 'Big head  Big head Big head Big head Big head Big head Big head Big head Big head Big head Big head Big head ', '2018-06-01 16:55:53'),
(17, 14, 'Jocy', 'jo@yahoo.com', 'www.jo.com', 'new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment new comment ', '2018-06-01 17:30:31'),
(18, 14, 'Oraver Oraver', 'hashdfws@yahoo.com', 'nmacsds', 'oraveroraveroraveroraveroraveroraveroraveroraver', '2018-06-01 17:32:03'),
(19, 15, 'Facebook ', 'facebook@f.com', 'www.facebook.com', 'Complete your profile   Complete your profileComplete your profileComplete your profileComplete your profileComplete your profile', '2018-06-04 16:45:23'),
(20, 14, 'CB', 'cb@yahoo.com', 'www.cb.com', 'welcome CB', '2018-06-06 16:17:32');

-- --------------------------------------------------------

--
-- Table structure for table `newslettertbl`
--

CREATE TABLE `newslettertbl` (
  `subscriberid` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newslettertbl`
--

INSERT INTO `newslettertbl` (`subscriberid`, `name`, `email`) VALUES
(10, 'Charles', 'c.awulor@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `posttbl`
--

CREATE TABLE `posttbl` (
  `postid` int(11) NOT NULL,
  `catid` int(11) NOT NULL,
  `post_img` text NOT NULL,
  `post_title` text NOT NULL,
  `post_content` text NOT NULL,
  `posted_by` text NOT NULL,
  `posted_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posttbl`
--

INSERT INTO `posttbl` (`postid`, `catid`, `post_img`, `post_title`, `post_content`, `posted_by`, `posted_date`) VALUES
(14, 1, 'bg.jpg', 'Man', 'Hello.. How are you ?<br>', 'Admin', '2018-05-30 07:39:02'),
(17, 1, 'bg.jpg', 'bg', 'hello', 'Admin', '2018-07-03 17:18:07');

-- --------------------------------------------------------

--
-- Table structure for table `replytbl`
--

CREATE TABLE `replytbl` (
  `replyid` int(11) NOT NULL,
  `commentid` int(11) NOT NULL,
  `reply` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replytbl`
--

INSERT INTO `replytbl` (`replyid`, `commentid`, `reply`) VALUES
(43, 18, 'my man how far'),
(44, 17, 'reply kvhjk'),
(45, 16, 'reply MEW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorytbl`
--
ALTER TABLE `categorytbl`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `commenttbl`
--
ALTER TABLE `commenttbl`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `newslettertbl`
--
ALTER TABLE `newslettertbl`
  ADD PRIMARY KEY (`subscriberid`);

--
-- Indexes for table `posttbl`
--
ALTER TABLE `posttbl`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `replytbl`
--
ALTER TABLE `replytbl`
  ADD PRIMARY KEY (`replyid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorytbl`
--
ALTER TABLE `categorytbl`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `commenttbl`
--
ALTER TABLE `commenttbl`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `newslettertbl`
--
ALTER TABLE `newslettertbl`
  MODIFY `subscriberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posttbl`
--
ALTER TABLE `posttbl`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `replytbl`
--
ALTER TABLE `replytbl`
  MODIFY `replyid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
