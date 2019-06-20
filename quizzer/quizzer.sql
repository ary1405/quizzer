-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2019 at 07:51 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `text`) VALUES
(1, 1, 1, 'PHP: HYPERTEXT PREPROCESSOR'),
(2, 1, 0, 'PRIVATE HOME PAGE'),
(3, 1, 0, 'personal home page'),
(4, 1, 0, 'personal hypertext processor'),
(5, 2, 1, 'echo \"Hello world\";'),
(6, 2, 0, '\"hellow world\"'),
(7, 2, 0, 'print hellow world;'),
(8, 2, 0, 'none of these'),
(9, 3, 0, '!'),
(10, 3, 1, '$'),
(11, 3, 0, '@'),
(12, 4, 1, 'WWW'),
(13, 4, 0, 'google'),
(14, 4, 0, 'Apple'),
(15, 4, 0, 'microsoft'),
(16, 5, 1, 'Hypertext Markup Language'),
(17, 5, 0, 'hometext markup language'),
(18, 5, 0, 'holiday text markup language'),
(19, 6, 0, '<lb>'),
(20, 6, 0, '<break>'),
(21, 6, 1, '<br>'),
(22, 7, 0, '<li>'),
(23, 7, 1, '<ol>'),
(24, 7, 0, '<ul>'),
(25, 7, 0, '<dl>');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'What does PHP stand for?'),
(2, 'How do you write \"Hello World\" in PHP'),
(3, 'All variables in PHP start with which symbol?'),
(4, 'Who is making the Web standards?'),
(5, 'What does HTML stand for?'),
(6, 'What is the correct HTML element for inserting a line break?'),
(7, 'How can you make a numbered list?');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `username` varchar(255) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`username`, `score`) VALUES
('', 2),
('ary2001', 1),
('ary2001', 2),
('1234', 0),
('1234', 2),
('ary2001', 2),
('ary2001', 0),
('ary2001', 0),
('ary2001', 0),
('', 0),
('ary2001', 0),
('ary2001', 0),
('ary2001', 3),
('ary2001', 3),
('ary2001', 5),
('ary2001', 5),
('ary2001', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('1234', '1234'),
('12345', '12345'),
('123456', '123456'),
('147', '147'),
('adi', 'adi'),
('ary2001', 'ary2001'),
('aryan', '12345'),
('qwerty', 'qwerty'),
('test1', 'test2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
