-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 07:37 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `routine`
--

-- --------------------------------------------------------

--
-- Table structure for table `classtimes`
--

CREATE TABLE `classtimes` (
  `id` int(11) NOT NULL,
  `time_duration` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classtimes`
--

INSERT INTO `classtimes` (`id`, `time_duration`, `created_at`, `updated_at`) VALUES
(1, '8am-10am', '2020-02-07 10:47:03', '2020-02-07 04:47:03'),
(2, '10am-12pm', '2020-02-07 04:47:21', '2020-02-07 04:47:21'),
(3, '12pm-2pm', '2020-02-07 04:47:34', '2020-02-07 04:47:34'),
(4, '2pm-4pm', '2020-02-07 04:47:47', '2020-02-07 04:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(10) NOT NULL,
  `title` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Saturday', '2020-02-07 11:36:34', '2020-02-07 11:36:34'),
(2, 'Sunday', '2020-02-07 11:36:49', '2020-02-07 11:36:49'),
(3, 'Monday', '2020-02-07 11:36:57', '2020-02-07 11:36:57'),
(4, 'Tuesday', '2020-02-07 11:37:05', '2020-02-07 11:37:05'),
(5, 'Wednesday', '2020-02-07 11:37:15', '2020-02-07 11:37:15'),
(6, 'Thursday', '2020-02-07 11:37:20', '2020-02-07 11:37:20'),
(8, 'Friday', '2020-02-07 11:37:26', '2020-02-07 11:37:26');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `created_at`, `updated_at`) VALUES
(3, 'Zoology', '2020-02-06 18:55:41', '2020-02-06 12:55:41'),
(4, 'Biomedical', '2020-02-06 18:23:18', '2020-02-06 12:23:18'),
(5, 'CSE', '2020-02-07 03:36:36', '2020-02-07 03:36:36'),
(7, 'EEE', '2020-02-07 03:36:44', '2020-02-07 03:36:44'),
(8, 'BBA', '2020-02-07 03:36:56', '2020-02-07 03:36:56'),
(9, 'Arabic', '2020-02-07 03:37:06', '2020-02-07 03:37:06'),
(10, 'English', '2020-02-07 03:37:11', '2020-02-07 03:37:11'),
(11, 'Journalism', '2020-02-07 03:37:18', '2020-02-07 03:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routines`
--

CREATE TABLE `routines` (
  `id` int(11) NOT NULL,
  `subject_id` varchar(191) NOT NULL,
  `classtime_id` varchar(191) NOT NULL,
  `day_id` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routines`
--

INSERT INTO `routines` (`id`, `subject_id`, `classtime_id`, `day_id`, `created_at`, `updated_at`) VALUES
(1, '2', '1', '3', '2020-02-07 18:33:58', '2020-02-07 12:33:58'),
(2, '3', '3', '5', '2020-02-07 18:34:11', '2020-02-07 12:34:11'),
(3, '6', '4', '1', '2020-02-07 12:27:24', '2020-02-07 12:27:24'),
(5, '1', '1', '4', '2020-02-07 12:32:17', '2020-02-07 12:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `title`, `created_at`, `updated_at`) VALUES
(2, '2nd semester', '2020-02-06 14:04:31', '2020-02-06 14:04:31'),
(3, '1st Semester', '2020-02-06 14:20:49', '2020-02-06 14:20:49'),
(4, '3rd Semester', '2020-02-07 03:35:40', '2020-02-07 03:35:40'),
(5, '4th semester', '2020-02-07 03:35:49', '2020-02-07 03:35:49'),
(6, '5th semester', '2020-02-07 03:35:57', '2020-02-07 03:35:57'),
(7, '6th semester', '2020-02-07 03:36:03', '2020-02-07 03:36:03'),
(8, '7th semester', '2020-02-07 03:36:11', '2020-02-07 03:36:11'),
(9, '8th semester', '2020-02-07 03:36:19', '2020-02-07 03:36:19'),
(10, 'Saturday', '2020-02-07 11:16:59', '2020-02-07 11:16:59'),
(11, 'Sunday', '2020-02-07 11:17:04', '2020-02-07 11:17:04'),
(12, 'Monday', '2020-02-07 11:17:13', '2020-02-07 11:17:13'),
(13, 'Tuesday', '2020-02-07 11:17:20', '2020-02-07 11:17:20'),
(14, 'Wednesday', '2020-02-07 11:17:27', '2020-02-07 11:17:27'),
(15, 'Thursday', '2020-02-07 11:17:34', '2020-02-07 11:17:34'),
(16, 'Friday', '2020-02-07 11:17:42', '2020-02-07 11:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `roll` varchar(191) DEFAULT NULL,
  `reg_id` varchar(191) NOT NULL,
  `department_id` varchar(191) NOT NULL,
  `semester_id` int(191) NOT NULL,
  `phone_no` int(191) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `reg_id`, `department_id`, `semester_id`, `phone_no`, `email`, `password`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Jony', '123453', '34245', '4', 3, 1781190057, 'anamul@live.com', '12345678', '1581087739.jpg', '2020-02-07 09:02:21', '2020-02-07 09:02:21'),
(2, 'Sohel Khan', '34343', '334245', '5', 2, 1674874748, 'sohel@live.com', '123456', '1581087811.jpg', '2020-02-07 09:03:33', '2020-02-07 09:03:33'),
(3, 'Hasib', '45452', '3543', '8', 5, 1498839484, 'hasib@admin.com', '12345678', '1581087898.jpg', '2020-02-07 09:04:59', '2020-02-07 09:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `title` varchar(191) NOT NULL,
  `code` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Computer Fundamentals', 'CSE-1101', '2020-02-07 10:12:52', '2020-02-07 04:12:52'),
(2, 'Electrical Circuits', 'CSE-1103', '2020-02-07 04:14:16', '2020-02-07 04:14:16'),
(3, 'Physics', 'CSE-1105', '2020-02-07 04:14:54', '2020-02-07 04:14:54'),
(4, 'Electronics-1', 'CSE-1201', '2020-02-07 04:15:24', '2020-02-07 04:15:24'),
(6, 'Discrete Mathematics', 'CSE-1203', '2020-02-07 04:16:33', '2020-02-07 04:16:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Jony', 'jony@admin.com', NULL, NULL, '$2y$10$TN/PqKRenYzxJa9luaBZqe.EmcMgOb6E5sUS5LR9sIjM4Vp/S0fKe', NULL, '2020-02-05 23:57:37', '2020-02-05 23:57:37'),
(4, 'Anamul', 'anamul@live.com', NULL, NULL, '$2y$10$gCyBd1fkrRMupZccX94hYOtIadAZm2At.OHUP9mTw4CsvlmylUI6C', NULL, '2020-02-05 23:59:07', '2020-02-05 23:59:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classtimes`
--
ALTER TABLE `classtimes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `classtimes`
--
ALTER TABLE `classtimes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
