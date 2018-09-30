-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2018 at 09:22 PM
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
  `emp_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emp_dept` int(11) NOT NULL,
  `emp_group` text COLLATE utf8_unicode_ci NOT NULL,
  `ecreated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`id`, `email`, `emp_id`, `full_name`, `emp_dept`, `emp_group`, `ecreated_at`) VALUES
(1, 'yonas.engida', '8940', 'Yonas Engida', 3, 'corporate', '2018-09-02'),
(2, 'samuel.dadi', '8732', 'Samuel Dadi', 2, 'corporate', '2018-09-27');

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
  `hcreated_at` date NOT NULL,
  `hupdated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblhistory`
--

INSERT INTO `tblhistory` (`hist_id`, `htask_id`, `owner`, `status`, `remark`, `hcreated_at`, `hupdated_at`) VALUES
(1, 1, 1, 'Closed', '', '2018-09-28', '2018-09-04'),
(2, 2, 1, 'Open', '', '2018-09-28', '2018-09-04'),
(3, 3, 1, 'Open', '', '2018-09-28', '0000-00-00'),
(5, 5, 1, 'Open', '', '2018-09-29', '0000-00-00'),
(7, 3, 1, 'OnProgress', 'Remark1', '0000-00-00', '2018-09-29'),
(8, 3, 1, 'OnProgress', 'Remark 2', '0000-00-00', '2018-09-29'),
(9, 3, 1, 'OnProgress', 'Remark1', '0000-00-00', '2018-09-29');

-- --------------------------------------------------------

--
-- Table structure for table `tbltaks`
--

CREATE TABLE `tbltaks` (
  `task_id` int(11) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `est_time` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `tdept_id` int(11) NOT NULL,
  `task_status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_by` text COLLATE utf8_unicode_ci NOT NULL,
  `creator` text COLLATE utf8_unicode_ci NOT NULL,
  `tcreated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbltaks`
--

INSERT INTO `tbltaks` (`task_id`, `title`, `description`, `est_time`, `deadline`, `tdept_id`, `task_status`, `created_by`, `creator`, `tcreated_at`) VALUES
(1, 'What is Lorem Ipsum?Tsehaye', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 0, '2018-09-27', 1, 'Open', '', '', '2018-09-28'),
(2, 'Where does it come from? Yonas', '\r\nWhere does it come from?\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham', 0, '2018-09-29', 4, '', '', '', '2018-09-28'),
(3, 'Where does it come from?', '\r\nWhere does it come from?\r\n\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham', 0, '2018-09-29', 2, '', '', '', '2018-09-28'),
(4, 'Title2', '', 0, '2018-09-20', 1, '', '', '', '2018-09-29'),
(5, 'ofdof', 'Test', 0, '2018-09-26', 2, '', '', '', '2018-09-29'),
(6, 'lxvkq', 'lskxlvk', 0, '2018-09-07', 1, '', '', '', '2018-09-29');

-- --------------------------------------------------------

--
-- Stand-in structure for view `viewtasks`
--
CREATE TABLE `viewtasks` (
`dept_id` int(11)
,`dept_name` text
,`parent` int(11)
,`groups` text
,`id` int(11)
,`email` varchar(100)
,`emp_id` varchar(100)
,`full_name` varchar(100)
,`emp_dept` int(11)
,`emp_group` text
,`ecreated_at` date
,`task_id` int(11)
,`title` text
,`description` text
,`est_time` int(11)
,`deadline` date
,`tdept_id` int(11)
,`created_by` text
,`tcreated_at` date
,`hist_id` int(11)
,`htask_id` int(11)
,`owner` int(11)
,`status` varchar(50)
,`hcreated_at` date
,`hupdated_at` date
);

-- --------------------------------------------------------

--
-- Structure for view `viewtasks`
--
DROP TABLE IF EXISTS `viewtasks`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `viewtasks`  AS  select `tbldepartments`.`dept_id` AS `dept_id`,`tbldepartments`.`dept_name` AS `dept_name`,`tbldepartments`.`parent` AS `parent`,`tbldepartments`.`groups` AS `groups`,`tblemployees`.`id` AS `id`,`tblemployees`.`email` AS `email`,`tblemployees`.`emp_id` AS `emp_id`,`tblemployees`.`full_name` AS `full_name`,`tblemployees`.`emp_dept` AS `emp_dept`,`tblemployees`.`emp_group` AS `emp_group`,`tblemployees`.`ecreated_at` AS `ecreated_at`,`tbltaks`.`task_id` AS `task_id`,`tbltaks`.`title` AS `title`,`tbltaks`.`description` AS `description`,`tbltaks`.`est_time` AS `est_time`,`tbltaks`.`deadline` AS `deadline`,`tbltaks`.`tdept_id` AS `tdept_id`,`tbltaks`.`created_by` AS `created_by`,`tbltaks`.`tcreated_at` AS `tcreated_at`,`tblhistory`.`hist_id` AS `hist_id`,`tblhistory`.`htask_id` AS `htask_id`,`tblhistory`.`owner` AS `owner`,`tblhistory`.`status` AS `status`,`tblhistory`.`hcreated_at` AS `hcreated_at`,`tblhistory`.`hupdated_at` AS `hupdated_at` from (((`tbldepartments` join `tblemployees`) join `tbltaks`) join `tblhistory`) where ((`tbldepartments`.`dept_id` = `tbltaks`.`tdept_id`) and (`tblhistory`.`htask_id` = `tbltaks`.`task_id`) and (`tblhistory`.`owner` = `tblemployees`.`id`)) ;

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
  ADD PRIMARY KEY (`hist_id`,`htask_id`,`owner`),
  ADD KEY `owner` (`owner`);

--
-- Indexes for table `tbltaks`
--
ALTER TABLE `tbltaks`
  ADD PRIMARY KEY (`task_id`,`tdept_id`),
  ADD KEY `tdept_id` (`tdept_id`);

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
  MODIFY `hist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbltaks`
--
ALTER TABLE `tbltaks`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblhistory`
--
ALTER TABLE `tblhistory`
  ADD CONSTRAINT `tblhistory_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `tblemployees` (`id`);

--
-- Constraints for table `tbltaks`
--
ALTER TABLE `tbltaks`
  ADD CONSTRAINT `tbltaks_ibfk_1` FOREIGN KEY (`tdept_id`) REFERENCES `tbldepartments` (`dept_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
