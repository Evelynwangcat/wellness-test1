-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 2018-04-30 13:53:09
-- 服务器版本： 5.5.58-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kouzaevi_group2`
--

-- --------------------------------------------------------

--
-- 表的结构 `Achievements`
--

CREATE TABLE `Achievements` (
  `User-id` int(11) NOT NULL,
  `Tool-id` int(11) NOT NULL,
  `DoneNotDone` tinyint(1) NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `Achievements`
--

INSERT INTO `Achievements` (`User-id`, `Tool-id`, `DoneNotDone`, `Date`) VALUES
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 6, 0, '0000-00-00'),
(5, 6, 0, '0000-00-00'),
(5, 6, 0, '0000-00-00'),
(5, 6, 0, '0000-00-00'),
(5, 46, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 45, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00'),
(5, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- 表的结构 `Goals`
--

CREATE TABLE `Goals` (
  `User-id` int(11) NOT NULL,
  `Tool-id` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `Goals`
--

INSERT INTO `Goals` (`User-id`, `Tool-id`, `Date`) VALUES
(5, 42, '2018-04-12'),
(5, 42, '2018-04-12'),
(5, 42, '2018-04-12'),
(5, 42, '2018-04-12'),
(5, 42, '2018-04-12'),
(5, 42, '2018-04-12'),
(5, 42, '2018-04-12'),
(5, 42, '2018-04-12'),
(5, 42, '2018-04-12'),
(5, 42, '2018-04-12'),
(5, 42, '2018-04-12'),
(5, 43, '2018-05-01'),
(5, 44, '2018-04-14'),
(5, 44, '2018-04-14'),
(5, 44, '2018-04-14'),
(5, 44, '2018-04-14'),
(5, 44, '2018-04-14'),
(5, 44, '2018-04-14'),
(5, 44, '2018-04-14'),
(5, 44, '2018-04-14'),
(5, 44, '2018-04-14'),
(5, 44, '2018-04-14'),
(5, 44, '2018-04-14'),
(5, 44, '2018-04-14'),
(5, 44, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 7, '2018-04-17'),
(5, 7, '2018-04-17'),
(5, 7, '0000-00-00'),
(5, 7, '2018-04-17'),
(0, 0, '0000-00-00'),
(5, 7, '2018-04-17'),
(5, 7, '2018-04-17'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(5, 0, '0000-00-00'),
(22, 22, '2018-04-03'),
(9, 1, '2018-04-20'),
(0, 32, '0000-00-00'),
(5, 12, '0000-00-00'),
(5, 12, '0000-00-00'),
(5, 49, '2018-04-19'),
(9, 1, '0000-00-00'),
(9, 1, '2018-04-20'),
(9, 1, '2018-04-20'),
(9, 1, '0000-00-00'),
(5, 13, '2018-04-04'),
(5, 49, '2018-04-19'),
(5, 2, '0000-00-00'),
(5, 13, '2018-04-04'),
(5, 25, '0000-00-00'),
(5, 12, '0000-00-00'),
(9, 1, '0000-00-00'),
(9, 1, '0000-00-00'),
(5, 1, '0000-00-00'),
(9, 1, '0000-00-00'),
(9, 1, '0000-00-00'),
(5, 26, '0000-00-00'),
(5, 27, '0000-00-00'),
(5, 46, '0000-00-00'),
(5, 23, '0000-00-00'),
(9, 23, '0000-00-00'),
(9, 8, '0000-00-00'),
(5, 23, '0000-00-00'),
(9, 1, '0000-00-00'),
(9, 44, '0000-00-00'),
(14, 1, '2018-04-17'),
(14, 1, '2018-04-17'),
(14, 50, '2018-04-10'),
(14, 1, '2018-04-17');

-- --------------------------------------------------------

--
-- 表的结构 `MyTools`
--

CREATE TABLE `MyTools` (
  `User-id` int(11) NOT NULL,
  `Tool-id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `MyTools`
--

INSERT INTO `MyTools` (`User-id`, `Tool-id`) VALUES
(7, 9),
(1, 14),
(7, 15),
(6, 5),
(7, 19),
(7, 21),
(8, 22),
(5, 9),
(9, 2),
(9, 8),
(9, 5),
(5, 23),
(5, 32),
(5, 25),
(5, 0),
(5, 0),
(5, 0),
(5, 0),
(14, 5),
(5, 31),
(14, 50),
(9, 31),
(5, 5),
(5, 46),
(5, 0),
(5, 0),
(5, 0),
(5, 0),
(5, 27),
(5, 16),
(5, 27),
(5, 49),
(5, 49),
(5, 11),
(5, 45),
(5, 48),
(5, 14);

-- --------------------------------------------------------

--
-- 表的结构 `Schedule`
--

CREATE TABLE `Schedule` (
  `User-id` int(11) NOT NULL,
  `Tool-id` int(11) NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='For My Schedule Page';

--
-- 转存表中的数据 `Schedule`
--

INSERT INTO `Schedule` (`User-id`, `Tool-id`, `Date`) VALUES
(5, 12, '0000-00-00'),
(5, 2, '0000-00-00'),
(5, 13, '2018-04-04'),
(5, 16, '0000-00-00'),
(5, 4, '0000-00-00'),
(5, 1, '0000-00-00'),
(5, 11, '0000-00-00'),
(5, 4, '2018-04-03'),
(1, 13, '2018-04-05'),
(1, 4, '2018-04-24'),
(1, 2, '0000-00-00'),
(1, 4, '0000-00-00'),
(1, 11, '0000-00-00'),
(9, 1, '0000-00-00'),
(9, 1, '2018-04-20'),
(5, 16, '0000-00-00'),
(5, 30, '0000-00-00'),
(5, 30, '2018-04-30'),
(5, 25, '0000-00-00'),
(5, 41, '2018-04-12'),
(5, 42, '2018-04-12'),
(5, 43, '2018-05-01'),
(5, 44, '2018-04-14'),
(5, 1, '0000-00-00'),
(5, 5, '0000-00-00'),
(5, 43, '0000-00-00'),
(5, 16, '0000-00-00'),
(5, 1, '0000-00-00'),
(5, 1, '0000-00-00'),
(5, 45, '2018-04-21'),
(5, 13, '0000-00-00'),
(5, 46, '2018-04-14'),
(5, 6, '0000-00-00'),
(5, 47, '2018-04-15'),
(5, 4, '0000-00-00'),
(5, 32, '0000-00-00'),
(5, 1, '0000-00-00'),
(5, 49, '2018-04-19'),
(9, 1, '0000-00-00'),
(5, 26, '0000-00-00'),
(5, 27, '0000-00-00'),
(5, 46, '0000-00-00'),
(9, 8, '0000-00-00'),
(9, 14, '0000-00-00'),
(9, 18, '0000-00-00'),
(9, 23, '0000-00-00'),
(5, 23, '0000-00-00'),
(9, 42, '0000-00-00'),
(9, 44, '0000-00-00'),
(14, 1, '2018-04-17'),
(14, 50, '2018-04-10');

-- --------------------------------------------------------

--
-- 表的结构 `Tool`
--

CREATE TABLE `Tool` (
  `Tool-id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Section` varchar(1) NOT NULL,
  `Description` text NOT NULL,
  `Privacy` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `Tool`
--

INSERT INTO `Tool` (`Tool-id`, `Name`, `Section`, `Description`, `Privacy`) VALUES
(1, 'Yoga', 'B', 'Yoga - Description', 1),
(2, 'Running', 'B', 'Running - Tool description', 1),
(5, 'Work', 'A', 'Description', 1),
(4, 'Walking', 'B', 'Description goes here', 1),
(6, 'Chores', 'A', 'Description', 1),
(7, 'Study', 'A', 'Description', 1),
(8, 'Read', 'A', 'Description', 1),
(9, 'Learn', 'A', 'Learn', 1),
(10, '$Name', '$', '$Description', 1),
(11, '$Name', 'B', '$Description', 1),
(12, 'efefrf', 'B', 'cdcdcdc', 1),
(13, 'swswsws', 'B', 'swswswswsws', 1),
(14, 'rrrrrrrrr', 'E', 'rrrrrrrrr', 1),
(15, 'swsws', 'B', 'swswsws', 1),
(16, 'Test tool', 'B', 'And yet...', 1),
(17, 'I am so done', 'C', 'With this project', 1),
(18, 'My New Tool ', 'S', 'Decription', 1),
(19, 'Aaa', 'E', 'AAAAA', 1),
(20, 'New Tool', 'E', 'New Tool', 1),
(21, 'video games', 'C', '\r\ngamez', 1),
(23, 'Get enough sleep', 'S', 'Rest and relax', 2),
(24, ' Vacation', 'E', 'Leave! Just Go!!! ', 2),
(25, 'Call Mom', 'C', 'Why not?', 1),
(26, 'Code', 'E', 'Code', 2),
(27, 'Code-test', 'E', 'Code-test Description.', 2),
(28, 'TestingSchedule', 'S', '12 April Description.', 2),
(29, 'SchedTest2', 'S', 'SchedTest2', 2),
(30, 'New B Tool ', 'B', 'New B Tool.', 2),
(31, 'New Achieve Tool', 'A', 'New Achieve Tool', 2),
(32, 'New Achieve Tool 2', 'A', 'New Achieve Tool 2', 2),
(33, 'New Tool From Schedule Page', 'C', 'Test test test', 2),
(34, 'New Tool From Schedule 2', 'E', '222222 Description.', 2),
(35, 'From Schedule', 'S', 'April 27', 2),
(36, 'Schedule4', 'C', 'Sch 4', 2),
(37, 'Schedule 5', 'S', 'Schedule 5 Description', 2),
(38, 'Schedule 6', 'S', 'D', 2),
(39, 'Schedule 7', 'S', 'D7', 2),
(40, 'Schedule 8', 'E', 'D8', 2),
(41, 'Schedule 10', 'S', 'D10.', 2),
(42, 'Schedule 12', 'E', 'D12.', 2),
(43, 'nEW', 'B', 'May 1', 2),
(44, 'New B Tool From Shcedule Page', 'B', 'D', 2),
(45, 'New Schedule Tool', 'S', 'd.', 2),
(46, 'Test', 'S', 'Test', 2),
(47, 'New Connect Tool', 'C', 'c', 2),
(48, 'Tool April 17', 'E', 'April 17', 2),
(49, 'sdcvx', 'A', 'xcvxczv', 2),
(50, 'XVBCVBXCB', 'B', 'DFGDFGDFG', 1);

-- --------------------------------------------------------

--
-- 表的结构 `User`
--

CREATE TABLE `User` (
  `User-id` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `User`
--

INSERT INTO `User` (`User-id`, `Username`, `Password`, `Email`) VALUES
(1, 'User1', 'Pass1', 'Email@gmail.com'),
(2, 'User2', 'Pass2', 'Email2@gmail.com'),
(3, 'User4', 'Pass4', 'user-pass-4'),
(5, 'User5', 'Pass5', 'pass-5-user5'),
(6, 'uuu', 'uuu', 'iii'),
(7, 'was', 'was', 'was'),
(8, 'www', 'www', 'www'),
(9, 'evelynwang', 'evelynwang', 'evelynwang0429@gmail.com'),
(10, 'Reg', 'Reg', 'Reg'),
(11, 'Reg', 'Reg', 'Reg'),
(12, 'Reg', 'Reg', 'Reg'),
(13, 'AS', 'ASD', 'ASD'),
(14, 'RRR', 'RRR', 'RRR');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Achievements`
--
ALTER TABLE `Achievements`
  ADD KEY `User-id` (`User-id`),
  ADD KEY `Tool-id` (`Tool-id`),
  ADD KEY `Date` (`Date`);

--
-- Indexes for table `Goals`
--
ALTER TABLE `Goals`
  ADD KEY `User-id` (`User-id`),
  ADD KEY `Tool-id` (`Tool-id`),
  ADD KEY `Date` (`Date`);

--
-- Indexes for table `MyTools`
--
ALTER TABLE `MyTools`
  ADD KEY `User-id` (`User-id`),
  ADD KEY `Tool-id` (`Tool-id`);

--
-- Indexes for table `Schedule`
--
ALTER TABLE `Schedule`
  ADD KEY `User-id` (`User-id`),
  ADD KEY `Tool-id` (`Tool-id`);

--
-- Indexes for table `Tool`
--
ALTER TABLE `Tool`
  ADD PRIMARY KEY (`Tool-id`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`User-id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `Tool`
--
ALTER TABLE `Tool`
  MODIFY `Tool-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- 使用表AUTO_INCREMENT `User`
--
ALTER TABLE `User`
  MODIFY `User-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
