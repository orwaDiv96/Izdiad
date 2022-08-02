-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 08:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezdyad_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `abstract_tasks`
--

CREATE TABLE `abstract_tasks` (
  `id` int(255) NOT NULL,
  `uniq_id` varchar(255) NOT NULL,
  `taskTitle` varchar(255) NOT NULL,
  `taskDetails` varchar(255) NOT NULL,
  `taskDeadline` date NOT NULL,
  `task_priority` varchar(255) NOT NULL,
  `responsibleEmp_id` varchar(255) NOT NULL,
  `addedBy_id` varchar(255) NOT NULL,
  `task_status` varchar(255) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  `see_date` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `finish_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attendance_info`
--

CREATE TABLE `attendance_info` (
  `id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `attendance_type` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `month` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `leave_time` varchar(255) NOT NULL,
  `working_hours` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `d_id` int(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `ar_department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(255) NOT NULL,
  `uniq_id` varchar(255) NOT NULL,
  `invitor_id` varchar(255) NOT NULL,
  `invitor_name` varchar(255) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  `meeting_subject` varchar(255) NOT NULL,
  `meeting_details` varchar(255) NOT NULL,
  `meeting_time` varchar(255) NOT NULL,
  `meeting_participants` varchar(255) NOT NULL,
  `meet_outcome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project_data`
--

CREATE TABLE `project_data` (
  `id` int(255) NOT NULL,
  `project_uniq_id` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_info` varchar(255) NOT NULL,
  `project_requirments` varchar(255) NOT NULL,
  `work_phases` varchar(255) NOT NULL,
  `prototype_delivery` varchar(255) NOT NULL,
  `final_version_delivery` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project_files`
--

CREATE TABLE `project_files` (
  `id` int(255) NOT NULL,
  `project_uniq_id` varchar(255) NOT NULL,
  `work_model` varchar(255) NOT NULL,
  `agreement_attachment` varchar(255) NOT NULL,
  `user_experiance` varchar(255) NOT NULL,
  `technical_attachment` varchar(255) NOT NULL,
  `privacy_policy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project_metadata`
--

CREATE TABLE `project_metadata` (
  `id` int(255) NOT NULL,
  `uniq_id` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  `initiator_id` varchar(255) NOT NULL,
  `initiator_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `project_task_comments`
--

CREATE TABLE `project_task_comments` (
  `id` int(255) NOT NULL,
  `project_uniq_id` varchar(255) NOT NULL,
  `task_uniq_id` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `commentar_id` varchar(255) NOT NULL,
  `commentar_name` varchar(255) NOT NULL,
  `comment_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `task_comments`
--

CREATE TABLE `task_comments` (
  `id` int(255) NOT NULL,
  `task_uniq_id` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `commentar_id` varchar(255) NOT NULL,
  `commentar_name` varchar(255) NOT NULL,
  `comment_time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `technical_project_tasks_info`
--

CREATE TABLE `technical_project_tasks_info` (
  `id` int(255) NOT NULL,
  `task_id` varchar(255) NOT NULL,
  `project_id` varchar(255) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `responsible_emp_id` varchar(255) NOT NULL,
  `addedBy_id` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `features` varchar(255) NOT NULL,
  `front_end_task_duration` varchar(255) NOT NULL,
  `back_end_task_duration` varchar(255) NOT NULL,
  `task_start_date` varchar(255) NOT NULL,
  `task_end_date` varchar(255) NOT NULL,
  `obstacles` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `task_status` varchar(255) NOT NULL,
  `add_date` varchar(255) NOT NULL,
  `see_date` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `finish_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ar_fullname` varchar(255) NOT NULL,
  `en_fullname` varchar(255) NOT NULL,
  `ar_job` varchar(255) NOT NULL,
  `en_job` varchar(255) NOT NULL,
  `emp_num` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `ar_fullname`, `en_fullname`, `ar_job`, `en_job`, `emp_num`, `department`, `phone`, `role`) VALUES
(2, 'admin@izdiad.net', '827ccb0eea8a706c4c34a16891f84e7b', 'آدمن', 'Admin', 'مطور', 'Web Developer', 'IZ-0-8', '2', '0120023647', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abstract_tasks`
--
ALTER TABLE `abstract_tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_info`
--
ALTER TABLE `attendance_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_data`
--
ALTER TABLE `project_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_files`
--
ALTER TABLE `project_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_metadata`
--
ALTER TABLE `project_metadata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_task_comments`
--
ALTER TABLE `project_task_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_comments`
--
ALTER TABLE `task_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technical_project_tasks_info`
--
ALTER TABLE `technical_project_tasks_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abstract_tasks`
--
ALTER TABLE `abstract_tasks`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `attendance_info`
--
ALTER TABLE `attendance_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `d_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `project_data`
--
ALTER TABLE `project_data`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `project_files`
--
ALTER TABLE `project_files`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `project_metadata`
--
ALTER TABLE `project_metadata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `project_task_comments`
--
ALTER TABLE `project_task_comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `task_comments`
--
ALTER TABLE `task_comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `technical_project_tasks_info`
--
ALTER TABLE `technical_project_tasks_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
