-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2019 at 09:31 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `exam_summary`
--

CREATE TABLE `exam_summary` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `total_time` int(11) NOT NULL,
  `questions` int(11) NOT NULL,
  `answered` int(11) NOT NULL,
  `unanswered` int(11) NOT NULL,
  `not_visited` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `negative_marks` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `t_q` varchar(255) NOT NULL,
  `answered` varchar(255) NOT NULL,
  `m_r` varchar(255) DEFAULT NULL,
  `a_m_r` varchar(255) DEFAULT NULL,
  `n_v` varchar(255) NOT NULL,
  `c_a` varchar(255) NOT NULL,
  `w_a` varchar(255) NOT NULL,
  `p_m` varchar(255) NOT NULL,
  `n_m` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `student_id`, `test_id`, `mark`, `t_q`, `answered`, `m_r`, `a_m_r`, `n_v`, `c_a`, `w_a`, `p_m`, `n_m`, `created_at`, `updated_at`) VALUES
(14, 7, 41, '-0.6400000000000001', '5', '5', '0', '2', '0', '1', '4', '2', '2.64', '2019-03-27 04:11:36', '2019-03-27 04:11:36'),
(15, 7, 1, '0', '3', '0', '0', '0', '3', '0', '0', '0', '0', '2019-03-27 04:27:04', '2019-03-27 04:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `moderator`
--

CREATE TABLE `moderator` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moderator`
--

INSERT INTO `moderator` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin@admin.com', '$2y$10$su0BZGYDAE2h4DvkUtqmkur/DUBOQlklgxTSuWIV4wonjrEICHZYa', '2019-03-18 09:53:19', '2019-03-26 07:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'cg civil judge', '2019-03-18 10:51:42', '2019-03-18 10:51:42'),
(2, 'cg cmo', '2019-03-18 10:51:42', '2019-03-18 10:51:42'),
(3, 'cg assistant prof', '2019-03-18 10:52:22', '2019-03-18 10:52:22'),
(4, 'cg psc', '2019-03-18 10:52:22', '2019-03-18 10:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `student_id`, `package_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, '2019-03-18 11:25:36', '2019-03-18 11:25:36'),
(2, 5, 3, '2019-03-21 10:35:29', '2019-03-21 10:35:29'),
(3, 6, 4, '2019-03-23 10:46:29', '2019-03-23 10:46:29'),
(4, 6, 4, '2019-03-24 02:26:43', '2019-03-24 02:26:43'),
(5, 6, 2, '2019-03-24 04:59:34', '2019-03-24 04:59:34'),
(6, 6, 1, '2019-03-24 05:55:31', '2019-03-24 05:55:31'),
(7, 7, 1, '2019-03-26 05:41:21', '2019-03-26 05:41:21'),
(8, 7, 1, '2019-03-26 05:41:35', '2019-03-26 05:41:35'),
(9, 7, 1, '2019-03-26 05:42:03', '2019-03-26 05:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `questions_en`
--

CREATE TABLE `questions_en` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `chose_1` varchar(255) NOT NULL,
  `chose_2` varchar(255) NOT NULL,
  `chose_3` varchar(255) NOT NULL,
  `chose_4` varchar(255) NOT NULL,
  `right_ans` varchar(255) NOT NULL,
  `descriptions` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_en`
--

INSERT INTO `questions_en` (`id`, `test_id`, `question`, `chose_1`, `chose_2`, `chose_3`, `chose_4`, `right_ans`, `descriptions`, `created_at`, `updated_at`) VALUES
(2, 2, 'Q 1', '1', '1', '1', '1', 'a', '1', '2019-03-19 12:42:16', '2019-03-19 12:42:16'),
(3, 2, 'Q 2', '3', '3', '3', '3', 'a', '3', '2019-03-19 12:44:29', '2019-03-19 12:44:29'),
(4, 1, 'English 01', '1', '2', '3', '4', 'a', NULL, '2019-03-25 11:51:18', '2019-03-25 11:51:18'),
(5, 1, 'question 2???', '2', '4', '4', '7', 'a', NULL, '2019-03-26 06:03:26', '2019-03-26 06:03:26'),
(6, 1, 'question3????', '1', '3', '4', '5', 'a', NULL, '2019-03-26 06:03:26', '2019-03-26 06:03:26'),
(7, 2, 'question ????????', 'asdasd', 'fssdsdasd', 'aaaaaaaaaaaaaaa', 'ggggggggggggggg', 'a', NULL, '2019-03-26 08:13:16', '2019-03-26 08:13:16'),
(8, 41, 'Demo e1', 'a', 's', 'd', 'f', 'a', NULL, '2019-03-26 04:58:50', '2019-03-26 04:58:50'),
(9, 41, 'Demo 2 e', 'd', 'd', 'd', 'd', 'a', NULL, '2019-03-26 05:08:41', '2019-03-26 05:08:41'),
(10, 41, 'Demo 3 e', 'gg', 'g', 'g', 'g', 'a', NULL, '2019-03-26 05:09:09', '2019-03-26 05:09:09'),
(11, 41, 'Demo 4 e', 'g', 'g', 'g', 'g', 'a', NULL, '2019-03-26 05:09:34', '2019-03-26 05:09:34'),
(12, 41, 'Demo 5 e', 'd', 'd', 'd', 'd', 'a', NULL, '2019-03-26 05:10:54', '2019-03-26 05:10:54');

-- --------------------------------------------------------

--
-- Table structure for table `questions_hi`
--

CREATE TABLE `questions_hi` (
  `id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `chose_1` varchar(255) NOT NULL,
  `chose_2` varchar(255) NOT NULL,
  `chose_3` varchar(255) NOT NULL,
  `chose_4` varchar(255) NOT NULL,
  `right_ans` varchar(255) NOT NULL,
  `descriptions` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions_hi`
--

INSERT INTO `questions_hi` (`id`, `test_id`, `question`, `chose_1`, `chose_2`, `chose_3`, `chose_4`, `right_ans`, `descriptions`, `created_at`, `updated_at`) VALUES
(2, 2, '2 hi', '2', '2', '2', '2', '', '2', '2019-03-19 12:42:16', '2019-03-19 12:42:16'),
(3, 2, '4 hi', '4', '4', '4', '4', '', '4', '2019-03-19 12:44:29', '2019-03-19 12:44:29'),
(4, 1, 'Hindi 03', '7', '8', '9', '6', '', NULL, '2019-03-25 11:51:18', '2019-03-25 11:51:18'),
(5, 41, 'Demo h1', 'g', 'g', 'g', 'g', '', NULL, '2019-03-26 04:58:50', '2019-03-26 04:58:50'),
(6, 41, 'Demo 2 h', 'g', 'g', 'g', 'g', '', NULL, '2019-03-26 05:08:41', '2019-03-26 05:08:41'),
(7, 41, 'Demo 3 h', 'g', 'g', 'g', 'g', '', 'g', '2019-03-26 05:09:09', '2019-03-26 05:09:09'),
(8, 41, 'Demo 4 h', 'g', 'g', 'g', 'g', '', NULL, '2019-03-26 05:09:34', '2019-03-26 05:09:34'),
(9, 41, 'Demo 5 h', 'd', 'd', 'd', 'd', '', NULL, '2019-03-26 05:10:53', '2019-03-26 05:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `request_package`
--

CREATE TABLE `request_package` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `student_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `alternative_no` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `questions_en_id` int(11) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `premium` int(11) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `alternate_no` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `college_name` varchar(255) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `passing_year` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `photo_link` varchar(255) NOT NULL,
  `exam` varchar(255) NOT NULL,
  `strem` varchar(255) NOT NULL,
  `stream` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father_name`, `email`, `birth`, `password`, `premium`, `mobile_no`, `alternate_no`, `address`, `qualification`, `college_name`, `pin_code`, `passing_year`, `marks`, `photo_link`, `exam`, `strem`, `stream`, `created_at`, `updated_at`) VALUES
(6, 'Zahid', 'Demo', 'z@gmail.com', '14/11/1991', '$2y$10$uj4lPXBSRJe3ympZxR88bOLuS.AWGvbExu7sAuE8wbv2fgb7/HxJ.', 0, '1111111111', '1111111111', 'East Kazipara Dhaka Dhaka', 'B.Sc', 'College Dhaka', 1216, '1991', '2', 'image/Student photo/Zahid1734155223.png', 'CGPSC-CMO', 'Demo', 'Stream', '2019-03-23 10:38:18', '2019-03-25 00:51:42'),
(7, 'Arif', 'Demo', 'a@gmail.com', '18/10/1991', '$2y$10$u6hgscYsKpBXWOgBN.oR.OqLXDMy/RCPCEX3EoEXvHFbzqdRm0RBa', 0, '1111111111', '1111111111', 'East Kazipara Dhaka Dhaka', 'B.Sc', 'College Dhaka', 1216, '1992', '14', 'image/Student photo/Arif1588083795.png', 'CGPSC-CIVIL JUDGE', 'Demo', 'Stream', '2019-03-26 05:30:02', '2019-03-27 03:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

CREATE TABLE `student_feedback` (
  `id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `experience` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_feedback`
--

INSERT INTO `student_feedback` (`id`, `student_name`, `test_name`, `rating`, `experience`, `created_at`, `updated_at`) VALUES
(2, 'Zahid', 'T-01', 'Totaly Setisfited', NULL, '2019-03-25 09:35:50', '2019-03-25 09:35:50'),
(3, 'Zahid', 'T-02', 'Totaly Setisfited', NULL, '2019-03-25 14:30:29', '2019-03-25 14:30:29'),
(4, 'Zahid', 'Demo Test', 'Totaly Setisfited', NULL, '2019-03-26 05:00:22', '2019-03-26 05:00:22'),
(5, 'Arif', 'Demo Test', 'Totaly Setisfited', NULL, '2019-03-27 02:55:18', '2019-03-27 02:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `student_forgot_password`
--

CREATE TABLE `student_forgot_password` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_name`
--

CREATE TABLE `test_name` (
  `id` int(11) NOT NULL,
  `test_name` varchar(255) NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_name`
--

INSERT INTO `test_name` (`id`, `test_name`, `package_id`, `created_at`, `updated_at`) VALUES
(1, 'T-01', 1, '2019-03-18 11:06:13', '2019-03-18 11:06:13'),
(2, 'T-02', 1, '2019-03-18 11:06:13', '2019-03-18 11:06:13'),
(3, 'T-03', 1, '2019-03-18 11:08:03', '2019-03-18 11:08:03'),
(4, 'T-04', 1, '2019-03-18 11:08:03', '2019-03-18 11:08:03'),
(5, 'T-05', 1, '2019-03-18 11:08:03', '2019-03-18 11:08:03'),
(6, 'T-06', 1, '2019-03-18 11:08:03', '2019-03-18 11:08:03'),
(7, 'T-07', 1, '2019-03-18 11:08:03', '2019-03-18 11:08:03'),
(8, 'T-08', 1, '2019-03-18 11:08:03', '2019-03-18 11:08:03'),
(9, 'T-09', 1, '2019-03-18 11:08:03', '2019-03-18 11:08:03'),
(10, 'T-10', 1, '2019-03-18 11:08:03', '2019-03-18 11:08:03'),
(11, 'T-01', 2, '2019-03-18 11:12:46', '2019-03-18 11:12:46'),
(12, 'T-02', 2, '2019-03-18 11:12:46', '2019-03-18 11:12:46'),
(13, 'T-03', 2, '2019-03-18 11:12:46', '2019-03-18 11:12:46'),
(14, 'T-04', 2, '2019-03-18 11:12:46', '2019-03-18 11:12:46'),
(15, 'T-05', 2, '2019-03-18 11:12:46', '2019-03-18 11:12:46'),
(16, 'T-06', 2, '2019-03-18 11:12:46', '2019-03-18 11:12:46'),
(17, 'T-07', 2, '2019-03-18 11:12:46', '2019-03-18 11:12:46'),
(18, 'T-08', 2, '2019-03-18 11:12:46', '2019-03-18 11:12:46'),
(19, 'T-09', 2, '2019-03-18 11:12:46', '2019-03-18 11:12:46'),
(20, 'T-10', 2, '2019-03-18 11:12:46', '2019-03-18 11:12:46'),
(21, 'T-01', 3, '2019-03-18 11:14:46', '2019-03-18 11:14:46'),
(22, 'T-02', 3, '2019-03-18 11:14:46', '2019-03-18 11:14:46'),
(23, 'T-03', 3, '2019-03-18 11:14:46', '2019-03-18 11:14:46'),
(24, 'T-04', 3, '2019-03-18 11:14:46', '2019-03-18 11:14:46'),
(25, 'T-05', 3, '2019-03-18 11:14:46', '2019-03-18 11:14:46'),
(26, 'T-06', 3, '2019-03-18 11:14:46', '2019-03-18 11:14:46'),
(27, 'T-07', 3, '2019-03-18 11:14:46', '2019-03-18 11:14:46'),
(28, 'T-08', 3, '2019-03-18 11:14:46', '2019-03-18 11:14:46'),
(29, 'T-09', 3, '2019-03-18 11:14:46', '2019-03-18 11:14:46'),
(30, 'T-10', 3, '2019-03-18 11:14:46', '2019-03-18 11:14:46'),
(31, 'T-01', 4, '2019-03-18 11:17:47', '2019-03-18 11:17:47'),
(32, 'T-02', 4, '2019-03-18 11:17:47', '2019-03-18 11:17:47'),
(33, 'T-03', 4, '2019-03-18 11:17:47', '2019-03-18 11:17:47'),
(34, 'T-04', 4, '2019-03-18 11:17:47', '2019-03-18 11:17:47'),
(35, 'T-05', 4, '2019-03-18 11:17:47', '2019-03-18 11:17:47'),
(36, 'T-06', 4, '2019-03-18 11:17:47', '2019-03-18 11:17:47'),
(37, 'T-07', 4, '2019-03-18 11:17:47', '2019-03-18 11:17:47'),
(38, 'T-08', 4, '2019-03-18 11:17:47', '2019-03-18 11:17:47'),
(39, 'T-09', 4, '2019-03-18 11:17:47', '2019-03-18 11:17:47'),
(40, 'T-10', 4, '2019-03-18 11:17:47', '2019-03-18 11:17:47'),
(41, 'Demo Test', NULL, '2019-03-24 13:38:16', '2019-03-24 13:38:16');

-- --------------------------------------------------------

--
-- Table structure for table `user_questions`
--

CREATE TABLE `user_questions` (
  `id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `question` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_summary`
--
ALTER TABLE `exam_summary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_summary_fk0` (`student_id`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_id` (`test_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `moderator`
--
ALTER TABLE `moderator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payment_fk0` (`student_id`),
  ADD KEY `payment_fk1` (`package_id`);

--
-- Indexes for table `questions_en`
--
ALTER TABLE `questions_en`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_en_fk0` (`test_id`);

--
-- Indexes for table `questions_hi`
--
ALTER TABLE `questions_hi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_hi_fk0` (`test_id`);

--
-- Indexes for table `request_package`
--
ALTER TABLE `request_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD KEY `result_fk0` (`student_id`),
  ADD KEY `result_fk1` (`questions_en_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_forgot_password`
--
ALTER TABLE `student_forgot_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_name`
--
ALTER TABLE `test_name`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test_name_fk0` (`package_id`);

--
-- Indexes for table `user_questions`
--
ALTER TABLE `user_questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_summary`
--
ALTER TABLE `exam_summary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `moderator`
--
ALTER TABLE `moderator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `questions_en`
--
ALTER TABLE `questions_en`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `questions_hi`
--
ALTER TABLE `questions_hi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `request_package`
--
ALTER TABLE `request_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_feedback`
--
ALTER TABLE `student_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `student_forgot_password`
--
ALTER TABLE `student_forgot_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_name`
--
ALTER TABLE `test_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_questions`
--
ALTER TABLE `user_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `exam_summary`
--
ALTER TABLE `exam_summary`
  ADD CONSTRAINT `exam_summary_fk0` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`);

--
-- Constraints for table `questions_en`
--
ALTER TABLE `questions_en`
  ADD CONSTRAINT `questions_en_fk0` FOREIGN KEY (`test_id`) REFERENCES `test_name` (`id`);

--
-- Constraints for table `questions_hi`
--
ALTER TABLE `questions_hi`
  ADD CONSTRAINT `questions_hi_fk0` FOREIGN KEY (`test_id`) REFERENCES `test_name` (`id`);

--
-- Constraints for table `test_name`
--
ALTER TABLE `test_name`
  ADD CONSTRAINT `test_name_fk0` FOREIGN KEY (`package_id`) REFERENCES `package` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
