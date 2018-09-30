-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 30, 2018 at 02:17 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ethiotms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE `tbldepartments` (
  `dept_id` int(11) NOT NULL,
  `dept_name` text COLLATE utf8_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL,
  `groups` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`dept_id`, `dept_name`, `parent`, `groups`) VALUES
(1, 'CEO', 0, 'corporate'),
(2, 'ISD', 1, 'Corporate'),
(3, 'ITSD', 2, 'Corprate'),
(4, 'SD', 3, 'corporate');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `id` int(11) NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pass` text COLLATE utf8_unicode_ci NOT NULL,
  `emp_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emp_dept` int(11) NOT NULL,
  `emp_group` text COLLATE utf8_unicode_ci NOT NULL,
  `emp_status` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `ecreated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`id`, `email`, `pass`, `emp_id`, `full_name`, `emp_dept`, `emp_group`, `emp_status`, `ecreated_at`) VALUES
(1, 'yonas.engida', 'pass@123', '8940', 'Yonas Engida', 3, 'corporate', 'active', '2018-09-02'),
(2, 'samuel.dadi', 'pass@123', '8732', 'Samuel Dadi', 2, 'corporate', 'active', '2018-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `tblhistory`
--

CREATE TABLE `tblhistory` (
  `hist_id` int(11) NOT NULL,
  `htask_id` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `remark` text COLLATE utf8_unicode_ci NOT NULL,
  `hcreated_by` int(11) NOT NULL,
  `hcreated_at` date NOT NULL,
  `hupdated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblhistory`
--

INSERT INTO `tblhistory` (`hist_id`, `htask_id`, `owner`, `status`, `remark`, `hcreated_by`, `hcreated_at`, `hupdated_at`) VALUES
(1, 2, 1, 'Open', '', 1, '2018-09-30', '2018-09-03 00:00:00'),
(2, 3, 1, 'Open', '', 1, '2018-09-30', NULL),
(3, 2, 1, 'OnProgress', 'Progress Update', 0, '0000-00-00', NULL),
(4, 2, 1, 'OnProgress', 'Progress Update 2', 0, '0000-00-00', NULL),
(6, 2, 1, 'Closed', 'closed Task', 0, '0000-00-00', NULL),
(7, 4, 1, 'Open', '', 1, '2018-09-30', NULL),
(8, 4, 1, 'Closed', 'skdskfskf', 0, '0000-00-00', NULL),
(9, 5, 2, 'Open', '', 1, '2018-09-30', NULL),
(10, 5, 2, 'Closed', 'This task is cloide by Sami', 0, '0000-00-00', NULL),
(11, 3, 1, 'Closed', 'dkfjdkf', 0, '0000-00-00', NULL),
(12, 6, 1, 'Open', '', 1, '2018-09-30', NULL),
(13, 6, 1, 'OnProgress', 'dsks', 0, '0000-00-00', NULL),
(14, 6, 1, 'OnProgress', 'dsks', 0, '0000-00-00', NULL),
(15, 6, 1, 'OnProgress', 'prksjdskfjskfjf', 0, '0000-00-00', NULL),
(16, 6, 1, 'OnProgress', 'smdnsmnsmsf', 0, '0000-00-00', NULL),
(17, 6, 1, 'OnProgress', 'skdsnkd', 0, '0000-00-00', '2018-09-30 11:53:36'),
(18, 6, 1, 'OnProgress', 'sksksfsf', 0, '0000-00-00', '2018-09-30 11:53:53'),
(19, 6, 1, 'Closed', 'Final Update', 0, '0000-00-00', '2018-09-30 11:54:15'),
(20, 7, 1, 'Open', '', 2, '2018-09-30', NULL),
(21, 7, 1, 'OnProgress', 'sdsjdsjs', 0, '0000-00-00', '2018-09-30 12:55:43'),
(22, 7, 1, 'OnProgress', 'ksdjksd', 0, '0000-00-00', '2018-09-30 12:57:07'),
(23, 7, 1, 'Closed', 'this is Yonas', 0, '0000-00-00', '2018-09-30 13:53:50'),
(24, 8, 2, 'Open', '', 1, '2018-09-30', NULL),
(25, 9, 2, 'Open', '', 1, '2018-09-30', NULL),
(26, 10, 1, 'Open', '', 1, '2018-09-30', NULL),
(27, 10, 1, 'Closed', 'skajaskjas', 0, '0000-00-00', '2018-09-30 14:04:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbltasks`
--

CREATE TABLE `tbltasks` (
  `task_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `est_time` int(11) DEFAULT NULL,
  `deadline` date NOT NULL,
  `tdept_id` int(11) NOT NULL,
  `task_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Open',
  `tcreated_by` int(11) NOT NULL,
  `assignedto` int(11) NOT NULL,
  `creator` text COLLATE utf8_unicode_ci NOT NULL,
  `approved` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `tcreated_at` date NOT NULL,
  `tupdated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbltasks`
--

INSERT INTO `tbltasks` (`task_id`, `title`, `description`, `est_time`, `deadline`, `tdept_id`, `task_status`, `tcreated_by`, `assignedto`, `creator`, `approved`, `tcreated_at`, `tupdated_at`) VALUES
(2, 'Title2', 'Summaray12', 12, '2018-09-13', 2, 'Closed', 1, 1, '', 'false', '2018-09-30', '2018-09-30'),
(3, 'My TAsk', 'My TASK', 12, '2018-09-28', 1, 'Closed', 1, 1, '', 'false', '2018-09-30', '2018-09-30'),
(4, 'jsdhfjfhjf', 'ssjfhjsfsfj', 123, '2018-09-21', 1, 'Closed', 1, 1, '', 'false', '2018-09-30', '2018-09-30'),
(5, 'TAsk for Sami', 'fskfjk', 34, '2018-10-05', 1, 'Closed', 1, 2, '', 'false', '2018-09-30', '2018-09-30'),
(6, 'min1', 'sdsjds', 65, '2018-09-26', 1, 'Closed', 1, 1, '', 'false', '2018-09-30', '2018-09-30'),
(7, 'task from sami to yonas', 'This Is task for Yonas', 10, '2018-09-29', 1, 'Closed', 2, 1, '', 'false', '2018-09-30', '2018-09-30'),
(8, 'Title2', 'This is Yonas', 10, '2018-09-27', 1, 'Open', 1, 2, '', 'false', '2018-09-30', NULL),
(9, 'Title334', 'kkdfdkjk', 12, '2018-09-22', 3, 'Open', 1, 2, '', 'false', '2018-09-30', NULL),
(10, 'Title1', 'jHDDHDK', 15, '2018-09-30', 1, 'Closed', 1, 1, '', 'false', '2018-09-30', '2018-09-30');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewtaskhistory`
--
CREATE TABLE `viewtaskhistory` (
`hist_id` int(11)
,`htask_id` int(11)
,`owner` int(11)
,`status` varchar(50)
,`remark` text
,`hcreated_by` int(11)
,`hcreated_at` date
,`hupdated_at` datetime
,`id` int(11)
,`email` varchar(100)
,`pass` text
,`emp_id` varchar(100)
,`full_name` varchar(100)
,`emp_dept` int(11)
,`emp_group` text
,`emp_status` varchar(100)
,`ecreated_at` date
,`dept_id` int(11)
,`dept_name` text
,`parent` int(11)
,`groups` text
,`task_id` int(11)
,`title` text
,`description` text
,`est_time` int(11)
,`deadline` date
,`tdept_id` int(11)
,`task_status` varchar(50)
,`tcreated_by` int(11)
,`assignedto` int(11)
,`creator` text
,`approved` varchar(10)
,`tcreated_at` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewtasks`
--
CREATE TABLE `viewtasks` (
`task_id` int(11)
,`title` text
,`description` text
,`est_time` int(11)
,`deadline` date
,`tdept_id` int(11)
,`task_status` varchar(50)
,`tcreated_by` int(11)
,`assignedto` int(11)
,`creator` text
,`approved` varchar(10)
,`tcreated_at` date
,`dept_id` int(11)
,`dept_name` text
,`parent` int(11)
,`groups` text
,`id` int(11)
,`email` varchar(100)
,`pass` text
,`emp_id` varchar(100)
,`full_name` varchar(100)
,`emp_dept` int(11)
,`emp_group` text
,`emp_status` varchar(100)
,`ecreated_at` date
);

-- --------------------------------------------------------

--
-- Structure for view `viewtaskhistory`
--
DROP TABLE IF EXISTS `viewtaskhistory`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewtaskhistory`  AS  select `tblhistory`.`hist_id` AS `hist_id`,`tblhistory`.`htask_id` AS `htask_id`,`tblhistory`.`owner` AS `owner`,`tblhistory`.`status` AS `status`,`tblhistory`.`remark` AS `remark`,`tblhistory`.`hcreated_by` AS `hcreated_by`,`tblhistory`.`hcreated_at` AS `hcreated_at`,`tblhistory`.`hupdated_at` AS `hupdated_at`,`tblemployees`.`id` AS `id`,`tblemployees`.`email` AS `email`,`tblemployees`.`pass` AS `pass`,`tblemployees`.`emp_id` AS `emp_id`,`tblemployees`.`full_name` AS `full_name`,`tblemployees`.`emp_dept` AS `emp_dept`,`tblemployees`.`emp_group` AS `emp_group`,`tblemployees`.`emp_status` AS `emp_status`,`tblemployees`.`ecreated_at` AS `ecreated_at`,`tbldepartments`.`dept_id` AS `dept_id`,`tbldepartments`.`dept_name` AS `dept_name`,`tbldepartments`.`parent` AS `parent`,`tbldepartments`.`groups` AS `groups`,`tbltasks`.`task_id` AS `task_id`,`tbltasks`.`title` AS `title`,`tbltasks`.`description` AS `description`,`tbltasks`.`est_time` AS `est_time`,`tbltasks`.`deadline` AS `deadline`,`tbltasks`.`tdept_id` AS `tdept_id`,`tbltasks`.`task_status` AS `task_status`,`tbltasks`.`tcreated_by` AS `tcreated_by`,`tbltasks`.`assignedto` AS `assignedto`,`tbltasks`.`creator` AS `creator`,`tbltasks`.`approved` AS `approved`,`tbltasks`.`tcreated_at` AS `tcreated_at` from (((`tblhistory` join `tblemployees`) join `tbldepartments`) join `tbltasks`) where ((`tblhistory`.`htask_id` = `tbltasks`.`task_id`) and (`tblhistory`.`owner` = `tblemployees`.`id`) and (`tbltasks`.`tdept_id` = `tbldepartments`.`dept_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `viewtasks`
--
DROP TABLE IF EXISTS `viewtasks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewtasks`  AS  select `tbltasks`.`task_id` AS `task_id`,`tbltasks`.`title` AS `title`,`tbltasks`.`description` AS `description`,`tbltasks`.`est_time` AS `est_time`,`tbltasks`.`deadline` AS `deadline`,`tbltasks`.`tdept_id` AS `tdept_id`,`tbltasks`.`task_status` AS `task_status`,`tbltasks`.`tcreated_by` AS `tcreated_by`,`tbltasks`.`assignedto` AS `assignedto`,`tbltasks`.`creator` AS `creator`,`tbltasks`.`approved` AS `approved`,`tbltasks`.`tcreated_at` AS `tcreated_at`,`tbldepartments`.`dept_id` AS `dept_id`,`tbldepartments`.`dept_name` AS `dept_name`,`tbldepartments`.`parent` AS `parent`,`tbldepartments`.`groups` AS `groups`,`tblemployees`.`id` AS `id`,`tblemployees`.`email` AS `email`,`tblemployees`.`pass` AS `pass`,`tblemployees`.`emp_id` AS `emp_id`,`tblemployees`.`full_name` AS `full_name`,`tblemployees`.`emp_dept` AS `emp_dept`,`tblemployees`.`emp_group` AS `emp_group`,`tblemployees`.`emp_status` AS `emp_status`,`tblemployees`.`ecreated_at` AS `ecreated_at` from ((`tbltasks` join `tbldepartments`) join `tblemployees`) where ((`tbltasks`.`tdept_id` = `tbldepartments`.`dept_id`) and (`tbltasks`.`assignedto` = `tblemployees`.`id`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblhistory`
--
ALTER TABLE `tblhistory`
  ADD PRIMARY KEY (`hist_id`,`htask_id`,`owner`,`hcreated_by`),
  ADD KEY `owner` (`owner`);

--
-- Indexes for table `tbltasks`
--
ALTER TABLE `tbltasks`
  ADD PRIMARY KEY (`task_id`,`tdept_id`,`tcreated_by`,`assignedto`),
  ADD KEY `tbltasks_ibfk_1` (`tdept_id`),
  ADD KEY `assignedto` (`assignedto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblhistory`
--
ALTER TABLE `tblhistory`
  MODIFY `hist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbltasks`
--
ALTER TABLE `tbltasks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblhistory`
--
ALTER TABLE `tblhistory`
  ADD CONSTRAINT `tblhistory_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `tblemployees` (`id`);

--
-- Constraints for table `tbltasks`
--
ALTER TABLE `tbltasks`
  ADD CONSTRAINT `tbltasks_ibfk_1` FOREIGN KEY (`tdept_id`) REFERENCES `tbldepartments` (`dept_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbltasks_ibfk_2` FOREIGN KEY (`assignedto`) REFERENCES `tblemployees` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
