-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2018 at 03:16 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `name` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `cid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`name`, `year`, `cid`) VALUES
('esiot', 'te', 1),
('spos', 'te', 2),
('daa', 'te', 3),
('smd', 'te', 4),
('wt', 'te', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questionbank`
--

CREATE TABLE `questionbank` (
  `cid` int(50) NOT NULL,
  `qid` int(50) NOT NULL,
  `question` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `ans` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questionbank`
--

INSERT INTO `questionbank` (`cid`, `qid`, `question`, `a`, `b`, `c`, `d`, `ans`) VALUES
(1, 1, '1. Publishing messages is handled through ________ Class.', 'a) Client()\r\n\r\n', 'b) Server()', 'c) Publish()', 'd) Batch()', 'a) Client()\r\n'),
(1, 2, '2 client() class provides ________ to create topics.\r\n', 'a) Software\r\n', 'b) Classes\r\n', 'c) Methods\r\n', 'd) Batch', 'c) Methods'),
(1, 3, '3. ________ method publishes messages to pub/sub.\r\n', 'a) Client()\r\n', 'b) Publish()\r\n', 'c) Server()\r\n', 'd) Batch()', 'b) Publish()'),
(1, 4, '4. How many arguments are accepted by publish()?\r\n', 'a) 5 arguments\r\n', 'b) 3 arguments\r\n', 'c) 1 argument\r\n', 'd) 2 arguments', 'd) 2 arguments'),
(1, 5, '5. Does publish() method accepts arbitrary arguments?\r\n', 'a) True\r\n', 'b) False', '', '', 'a) True'),
(1, 6, '6. The topic in the publish method is in which form?\r\n', 'a) Binomial form\r\n', 'b) Canonical form\r\n', 'c) Nominal form\r\n', 'd) Message form', 'b) Canonical form'),
(1, 7, '7. The message in pub/sub is an opaque blob of ________\r\n', 'a) Bits\r\n', 'b) Bytes\r\n', 'c) Word\r\n', 'd) Nibble', 'b) Bytes\r\n'),
(1, 8, '8. ________ error will show if we try to send text string instead of bytes.\r\n', 'a) TypeError\r\n', 'b) Error\r\n', 'c) Linker error\r\n', 'd) Compiler error', 'a) TypeError\r\n'),
(1, 9, '9. What do we call string in python 2?\r\n', 'a) Str\r\n', 'b) Unicode\r\n', 'c) Strs\r\n', 'd) Unicades', 'b) Unicode'),
(1, 10, '10. When you publish a message ________ is automatically created?\r\n', 'a) Client\r\n', 'b) Server\r\n', 'c) Batch\r\n', 'd) Server', 'c) Batch');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `name` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `erpno` int(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `erpno` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`username`, `password`, `erpno`) VALUES
('akpotdar', '458693', 3152099),
('rsingal', '4589632', 3152115),
('radesh', '4589632', 3152105),
('trahul', '125789', 3152118);

-- --------------------------------------------------------

--
-- Table structure for table `teacherlogin`
--

CREATE TABLE `teacherlogin` (
  `username` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacherlogin`
--

INSERT INTO `teacherlogin` (`username`, `password`) VALUES
('kvani', 1236556),
('swagh', 4561238),
('mkalpana', 25698);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
