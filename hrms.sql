-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 11:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_filenames`
--

CREATE TABLE `attendance_filenames` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attendance_filenames`
--

INSERT INTO `attendance_filenames` (`id`, `name`, `description`, `date`, `created_at`, `updated_at`) VALUES
(1, 'attendance_sheet1.xlsx', 'Testing Attendance Sheet', '2022-09-12', '2022-09-13 07:20:08', '2022-09-13 07:20:08'),
(2, 'attendance_sheet1.xlsx', 'New Date', '2022-09-11', '2022-09-13 07:22:53', '2022-09-13 07:22:53'),
(3, 'attendance_sheet1.xlsx', 'Today ', '2022-09-01', '2022-09-13 07:23:54', '2022-09-13 07:23:54'),
(4, 'hrms-total.xlsx', 'Testing', '2022-10-04', '2022-10-04 00:34:33', '2022-10-04 00:34:33'),
(5, 'hrms-total.xlsx', 'Testing', '2022-10-04', '2022-10-04 00:34:59', '2022-10-04 00:34:59'),
(6, 'hrms-total.xlsx', 'Testing', '2022-10-04', '2022-10-04 00:35:11', '2022-10-04 00:35:11'),
(7, 'hrms-total.xlsx', 'Tetsing', '2022-10-04', '2022-10-04 00:36:45', '2022-10-04 00:36:45'),
(8, 'hrms-total.xlsx', 'Tetsing', '2022-10-04', '2022-10-04 00:37:10', '2022-10-04 00:37:10'),
(9, 'hrms-total.xlsx', 'adsasd', '2022-10-04', '2022-10-04 00:37:23', '2022-10-04 00:37:23'),
(10, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:38:16', '2022-10-04 00:38:16'),
(11, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:38:27', '2022-10-04 00:38:27'),
(12, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:38:41', '2022-10-04 00:38:41'),
(13, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:38:56', '2022-10-04 00:38:56'),
(14, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:39:06', '2022-10-04 00:39:06'),
(15, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:40:42', '2022-10-04 00:40:42'),
(16, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:41:34', '2022-10-04 00:41:34'),
(17, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:48:15', '2022-10-04 00:48:15'),
(18, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:48:34', '2022-10-04 00:48:34'),
(19, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:48:39', '2022-10-04 00:48:39'),
(20, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:49:00', '2022-10-04 00:49:00'),
(21, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:49:13', '2022-10-04 00:49:13'),
(22, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:49:19', '2022-10-04 00:49:19'),
(23, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:49:20', '2022-10-04 00:49:20'),
(24, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:49:33', '2022-10-04 00:49:33'),
(25, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:50:01', '2022-10-04 00:50:01'),
(26, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:50:04', '2022-10-04 00:50:04'),
(27, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:50:13', '2022-10-04 00:50:13'),
(28, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:50:18', '2022-10-04 00:50:18'),
(29, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:51:16', '2022-10-04 00:51:16'),
(30, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:51:17', '2022-10-04 00:51:17'),
(31, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:53:42', '2022-10-04 00:53:42'),
(32, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:53:52', '2022-10-04 00:53:52'),
(33, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:54:30', '2022-10-04 00:54:30'),
(34, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:54:53', '2022-10-04 00:54:53'),
(35, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:55:20', '2022-10-04 00:55:20'),
(36, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:55:32', '2022-10-04 00:55:32'),
(37, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:55:41', '2022-10-04 00:55:41'),
(38, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:55:52', '2022-10-04 00:55:52'),
(39, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:56:08', '2022-10-04 00:56:08'),
(40, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:56:35', '2022-10-04 00:56:35'),
(41, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:56:49', '2022-10-04 00:56:49'),
(42, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:56:56', '2022-10-04 00:56:56'),
(43, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:57:09', '2022-10-04 00:57:09'),
(44, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:57:18', '2022-10-04 00:57:18'),
(45, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:57:30', '2022-10-04 00:57:30'),
(46, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:57:41', '2022-10-04 00:57:41'),
(47, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:57:55', '2022-10-04 00:57:55'),
(48, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:58:05', '2022-10-04 00:58:05'),
(49, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:58:11', '2022-10-04 00:58:11'),
(50, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:58:32', '2022-10-04 00:58:32'),
(51, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:58:43', '2022-10-04 00:58:43'),
(52, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:58:55', '2022-10-04 00:58:55'),
(53, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:59:10', '2022-10-04 00:59:10'),
(54, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 00:59:28', '2022-10-04 00:59:28'),
(55, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:00:08', '2022-10-04 01:00:08'),
(56, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:00:20', '2022-10-04 01:00:20'),
(57, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:00:33', '2022-10-04 01:00:33'),
(58, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:00:48', '2022-10-04 01:00:48'),
(59, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:01:08', '2022-10-04 01:01:08'),
(60, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:01:24', '2022-10-04 01:01:24'),
(61, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:03:04', '2022-10-04 01:03:04'),
(62, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:03:13', '2022-10-04 01:03:13'),
(63, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:03:30', '2022-10-04 01:03:30'),
(64, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:04:49', '2022-10-04 01:04:49'),
(65, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:10:52', '2022-10-04 01:10:52'),
(66, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:11:16', '2022-10-04 01:11:16'),
(67, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:11:37', '2022-10-04 01:11:37'),
(68, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:11:53', '2022-10-04 01:11:53'),
(69, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:12:17', '2022-10-04 01:12:17'),
(70, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:12:45', '2022-10-04 01:12:45'),
(71, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:12:47', '2022-10-04 01:12:47'),
(72, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:12:55', '2022-10-04 01:12:55'),
(73, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:13:13', '2022-10-04 01:13:13'),
(74, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:13:33', '2022-10-04 01:13:33'),
(75, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:14:35', '2022-10-04 01:14:35'),
(76, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:14:45', '2022-10-04 01:14:45'),
(77, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:15:14', '2022-10-04 01:15:14'),
(78, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:15:36', '2022-10-04 01:15:36'),
(79, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:15:45', '2022-10-04 01:15:45'),
(80, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:15:55', '2022-10-04 01:15:55'),
(81, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:16:24', '2022-10-04 01:16:24'),
(82, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:16:46', '2022-10-04 01:16:46'),
(83, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:16:53', '2022-10-04 01:16:53'),
(84, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:17:01', '2022-10-04 01:17:01'),
(85, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:17:08', '2022-10-04 01:17:08'),
(86, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:17:11', '2022-10-04 01:17:11'),
(87, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:17:26', '2022-10-04 01:17:26'),
(88, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:17:33', '2022-10-04 01:17:33'),
(89, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:17:37', '2022-10-04 01:17:37'),
(90, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:17:39', '2022-10-04 01:17:39'),
(91, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:17:51', '2022-10-04 01:17:51'),
(92, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:18:01', '2022-10-04 01:18:01'),
(93, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:18:08', '2022-10-04 01:18:08'),
(94, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:19:52', '2022-10-04 01:19:52'),
(95, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:20:14', '2022-10-04 01:20:14'),
(96, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:21:23', '2022-10-04 01:21:23'),
(97, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:22:53', '2022-10-04 01:22:53'),
(98, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:23:14', '2022-10-04 01:23:14'),
(99, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:23:27', '2022-10-04 01:23:27'),
(100, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:26:26', '2022-10-04 01:26:26'),
(101, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:27:02', '2022-10-04 01:27:02'),
(102, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:28:33', '2022-10-04 01:28:33'),
(103, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:29:58', '2022-10-04 01:29:58'),
(104, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:30:59', '2022-10-04 01:30:59'),
(105, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:31:30', '2022-10-04 01:31:30'),
(106, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:36:37', '2022-10-04 01:36:37'),
(107, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:37:18', '2022-10-04 01:37:18'),
(108, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:39:23', '2022-10-04 01:39:23'),
(109, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:40:20', '2022-10-04 01:40:20'),
(110, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:40:30', '2022-10-04 01:40:30'),
(111, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:40:38', '2022-10-04 01:40:38'),
(112, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:41:12', '2022-10-04 01:41:12'),
(113, 'hrms-total.xlsx', 'asdasd', '2022-10-04', '2022-10-04 01:42:20', '2022-10-04 01:42:20'),
(114, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:50:33', '2022-10-31 19:50:33'),
(115, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:50:45', '2022-10-31 19:50:45'),
(116, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:51:22', '2022-10-31 19:51:22'),
(117, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:53:13', '2022-10-31 19:53:13'),
(118, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:53:39', '2022-10-31 19:53:39'),
(119, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:53:40', '2022-10-31 19:53:40'),
(120, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:54:37', '2022-10-31 19:54:37'),
(121, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:55:03', '2022-10-31 19:55:03'),
(122, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:55:04', '2022-10-31 19:55:04'),
(123, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:55:32', '2022-10-31 19:55:32'),
(124, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:55:34', '2022-10-31 19:55:34'),
(125, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:56:06', '2022-10-31 19:56:06'),
(126, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:56:17', '2022-10-31 19:56:17'),
(127, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:56:29', '2022-10-31 19:56:29'),
(128, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:57:03', '2022-10-31 19:57:03'),
(129, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:57:23', '2022-10-31 19:57:23'),
(130, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:57:39', '2022-10-31 19:57:39'),
(131, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:58:12', '2022-10-31 19:58:12'),
(132, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:58:25', '2022-10-31 19:58:25'),
(133, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:58:37', '2022-10-31 19:58:37'),
(134, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:58:52', '2022-10-31 19:58:52'),
(135, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:59:05', '2022-10-31 19:59:05'),
(136, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:59:21', '2022-10-31 19:59:21'),
(137, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:59:36', '2022-10-31 19:59:36'),
(138, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 19:59:47', '2022-10-31 19:59:47'),
(139, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:00:00', '2022-10-31 20:00:00'),
(140, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:00:14', '2022-10-31 20:00:14'),
(141, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:00:25', '2022-10-31 20:00:25'),
(142, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:01:01', '2022-10-31 20:01:01'),
(143, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:01:15', '2022-10-31 20:01:15'),
(144, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:01:30', '2022-10-31 20:01:30'),
(145, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:01:50', '2022-10-31 20:01:50'),
(146, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:02:10', '2022-10-31 20:02:10'),
(147, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:02:32', '2022-10-31 20:02:32'),
(148, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:02:46', '2022-10-31 20:02:46'),
(149, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:03:10', '2022-10-31 20:03:10'),
(150, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:03:27', '2022-10-31 20:03:27'),
(151, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:03:41', '2022-10-31 20:03:41'),
(152, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:03:53', '2022-10-31 20:03:53'),
(153, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:05:04', '2022-10-31 20:05:04'),
(154, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:05:15', '2022-10-31 20:05:15'),
(155, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:05:44', '2022-10-31 20:05:44'),
(156, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:06:09', '2022-10-31 20:06:09'),
(157, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:06:16', '2022-10-31 20:06:16'),
(158, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:06:33', '2022-10-31 20:06:33'),
(159, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:07:06', '2022-10-31 20:07:06'),
(160, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:07:16', '2022-10-31 20:07:16'),
(161, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:07:31', '2022-10-31 20:07:31'),
(162, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:07:46', '2022-10-31 20:07:46'),
(163, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:08:09', '2022-10-31 20:08:09'),
(164, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:12:39', '2022-10-31 20:12:39'),
(165, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:17:49', '2022-10-31 20:17:49'),
(166, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:17:54', '2022-10-31 20:17:54'),
(167, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:18:04', '2022-10-31 20:18:04'),
(168, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:19:30', '2022-10-31 20:19:30'),
(169, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:20:50', '2022-10-31 20:20:50'),
(170, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:21:00', '2022-10-31 20:21:00'),
(171, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:21:06', '2022-10-31 20:21:06'),
(172, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:21:39', '2022-10-31 20:21:39'),
(173, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:21:52', '2022-10-31 20:21:52'),
(174, 'full_attendance.xls', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:22:11', '2022-10-31 20:22:11'),
(175, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:41:48', '2022-10-31 20:41:48'),
(176, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:42:02', '2022-10-31 20:42:02'),
(177, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:42:04', '2022-10-31 20:42:04'),
(178, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:42:14', '2022-10-31 20:42:14'),
(179, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 20:42:19', '2022-10-31 20:42:19'),
(180, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet Updated', '2022-11-01', '2022-10-31 22:34:46', '2022-10-31 22:34:46'),
(181, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet Updated', '2022-11-01', '2022-10-31 22:35:01', '2022-10-31 22:35:01'),
(182, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet', '2022-11-01', '2022-10-31 22:35:43', '2022-10-31 22:35:43'),
(183, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet Updated', '2022-11-01', '2022-10-31 22:38:01', '2022-10-31 22:38:01'),
(184, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet Updated', '2022-11-01', '2022-10-31 22:39:14', '2022-10-31 22:39:14'),
(185, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet Updated', '2022-11-01', '2022-10-31 22:09:14', NULL),
(186, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet Updated', '2022-11-01', '2022-10-31 22:38:29', NULL),
(187, 'full_attandance_eidatable.xlsx', 'Testing Attendance Sheet Updated', '2022-11-01', '2022-10-31 22:39:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_managers`
--

CREATE TABLE `attendance_managers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `in_time` time NOT NULL,
  `out_time` time NOT NULL,
  `late` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `early` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hours_worked` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `difference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `leave_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `attendance_managers`
--

INSERT INTO `attendance_managers` (`id`, `name`, `code`, `date`, `day`, `in_time`, `out_time`, `late`, `early`, `hours_worked`, `difference`, `status`, `leave_status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Daniyal Hussain', '34', '2022-09-01', 'Thursday', '22:29:00', '07:54:00', '01:29', '', '09:24', '0', 1, '', 27, NULL, NULL),
(2, 'Daniyal Hussain', '34', '2022-09-02', 'Friday', '21:12:00', '08:53:00', '', '', '11:41', '0', 1, '', 27, NULL, NULL),
(3, 'Daniyal Hussain', '34', '2022-09-03', 'Saturday', '00:00:00', '00:00:00', '', '', '', '0', 1, 'Saturday Off', 27, NULL, NULL),
(4, 'Daniyal Hussain', '34', '2022-09-04', 'Sunday', '00:00:00', '00:00:00', '', '', '', '0', 1, 'Sunday Off', 27, NULL, NULL),
(5, 'Daniyal Hussain', '34', '2022-09-05', 'Monday', '21:05:00', '07:22:00', '', '', '10:17', '0', 1, '', 27, NULL, NULL),
(6, 'Daniyal Hussain', '34', '2022-09-06', 'Tuesday', '20:57:00', '07:03:00', '', '', '10:06', '0', 1, '', 27, NULL, NULL),
(7, 'Daniyal Hussain', '34', '2022-09-07', 'Wednesday', '21:54:00', '07:06:00', '00:54', '', '09:11', '0', 1, '', 27, NULL, NULL),
(8, 'Daniyal Hussain', '34', '2022-09-08', 'Thursday', '21:09:00', '07:04:00', '', '', '09:55', '0', 1, '', 27, NULL, NULL),
(9, 'Daniyal Hussain', '34', '2022-09-09', 'Friday', '21:05:00', '09:07:00', '', '', '12:02', '0', 1, '', 27, NULL, NULL),
(10, 'Daniyal Hussain', '34', '2022-09-10', 'Saturday', '00:00:00', '00:00:00', '', '', '', '0', 1, 'Saturday Off', 27, NULL, NULL),
(11, 'Daniyal Hussain', '34', '2022-09-11', 'Sunday', '00:00:00', '00:00:00', '', '', '', '0', 1, 'Sunday Off', 27, NULL, NULL),
(12, 'Daniyal Hussain', '34', '2022-09-12', 'Monday', '21:06:00', '07:24:00', '', '', '10:18', '0', 1, '', 27, NULL, NULL),
(13, 'Daniyal Hussain', '34', '2022-09-13', 'Tuesday', '21:04:00', '00:00:00', '', '01:00', '07:55', '0', 1, '', 27, NULL, NULL),
(14, 'Daniyal Hussain', '34', '2022-09-14', 'Wednesday', '20:57:00', '07:29:00', '', '', '10:31', '0', 1, '', 27, NULL, NULL),
(15, 'Daniyal Hussain', '34', '2022-09-15', 'Thursday', '21:00:00', '07:06:00', '', '', '10:06', '0', 1, '', 27, NULL, NULL),
(16, 'Daniyal Hussain', '34', '2022-09-16', 'Friday', '21:15:00', '07:21:00', '', '', '10:05', '0', 1, '', 27, NULL, NULL),
(17, 'Daniyal Hussain', '34', '2022-09-17', 'Saturday', '00:00:00', '00:00:00', '', '', '', '0', 1, 'Saturday Off', 27, NULL, NULL),
(18, 'Daniyal Hussain', '34', '2022-09-18', 'Sunday', '00:00:00', '00:00:00', '', '', '', '0', 1, 'Sunday Off', 27, NULL, NULL),
(19, 'Daniyal Hussain', '34', '2022-09-19', 'Monday', '21:02:00', '08:25:00', '', '', '11:23', '0', 1, '', 27, NULL, NULL),
(20, 'Daniyal Hussain', '34', '2022-09-20', 'Tuesday', '21:13:00', '06:53:00', '', '', '09:39', '0', 1, '', 27, NULL, NULL),
(21, 'Daniyal Hussain', '34', '2022-09-21', 'Wednesday', '21:16:00', '07:03:00', '', '', '09:47', '0', 1, '', 27, NULL, NULL),
(22, 'Daniyal Hussain', '34', '2022-09-22', 'Thursday', '21:10:00', '07:02:00', '', '', '09:52', '0', 1, '', 27, NULL, NULL),
(23, 'Daniyal Hussain', '34', '2022-09-23', 'Friday', '21:12:00', '08:19:00', '', '', '11:07', '0', 1, '', 27, NULL, NULL),
(24, 'Daniyal Hussain', '34', '2022-09-24', 'Saturday', '00:00:00', '00:00:00', '', '', '', '0', 1, 'Saturday Off', 27, NULL, NULL),
(25, 'Daniyal Hussain', '34', '2022-09-25', 'Sunday', '00:00:00', '00:00:00', '', '', '', '0', 1, 'Sunday Off', 27, NULL, NULL),
(26, 'Daniyal Hussain', '34', '2022-09-26', 'Monday', '21:16:00', '07:03:00', '', '', '09:46', '0', 1, '', 27, NULL, NULL),
(27, 'Daniyal Hussain', '34', '2022-09-27', 'Tuesday', '21:43:00', '06:57:00', '00:43', '', '09:14', '0', 1, '', 27, NULL, NULL),
(28, 'Daniyal Hussain', '34', '2022-09-28', 'Wednesday', '21:04:00', '06:54:00', '', '', '09:49', '0', 1, '', 27, NULL, NULL),
(29, 'Daniyal Hussain', '34', '2022-09-29', 'Thursday', '21:16:00', '06:45:00', '', '', '09:29', '0', 1, '', 27, NULL, NULL),
(30, 'Daniyal Hussain', '34', '2022-09-30', 'Friday', '21:17:00', '07:39:00', '', '', '10:22', '0', 1, '', 27, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_joining` date NOT NULL,
  `number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emergency_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pan_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `formalities` tinyint(4) DEFAULT NULL,
  `offer_acceptance` tinyint(4) DEFAULT NULL,
  `probation_period` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_of_confirmation` date NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salary` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bank_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ifsc_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pf_account_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `un_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pf_status` tinyint(4) DEFAULT NULL,
  `date_of_resignation` date NOT NULL,
  `notice_period` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_working_day` date NOT NULL,
  `full_final` tinyint(4) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `photo`, `code`, `name`, `status`, `gender`, `date_of_birth`, `date_of_joining`, `number`, `qualification`, `emergency_number`, `pan_number`, `father_name`, `current_address`, `permanent_address`, `formalities`, `offer_acceptance`, `probation_period`, `date_of_confirmation`, `department`, `designation`, `salary`, `account_number`, `bank_name`, `ifsc_code`, `pf_account_number`, `un_number`, `pf_status`, `date_of_resignation`, `notice_period`, `last_working_day`, `full_final`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '', 'HR0001', 'HR Manager', 1, 1, '0000-00-00', '0000-00-00', '9999999999', '', '', '', '', '', '', 0, 0, '', '0000-00-00', '', NULL, '', '', '', '', '', '', 0, '0000-00-00', '', '0000-00-00', 0, 1, NULL, NULL),
(2, 'xDWz6eP02eTm.jpg', '10221', 'Shafira Finley', 1, 0, '2022-09-13', '2022-09-13', '1234567890', 'B.Sc', '1234567890', '256', 'Quon Waller', 'Doloremque aut quibu', 'Voluptatem ipsa ius', 1, 1, '180', '2022-06-08', 'IT', NULL, '120000', '1022221', 'Test', 'ssdas', '212121', '2121', 0, '2022-09-13', '1', '2022-09-13', 0, 2, '2022-09-13 07:13:36', '2022-09-13 07:13:36'),
(3, '', '34', 'Daniyal Hussain', 1, 0, '2022-09-28', '2022-09-28', 'as23123', 'adasd', NULL, NULL, 'asdasdas', 'asdasd', 'asdasd', NULL, NULL, NULL, '2022-09-28', '', NULL, NULL, '123131323', 'Mezzan Bank', NULL, NULL, 'asdasd', NULL, '2022-09-28', NULL, '2022-09-28', NULL, 27, '2022-09-28 00:23:06', '2022-09-28 23:11:29'),
(4, '', '123123123', 'Testing Name', 1, NULL, '2022-09-28', '2022-09-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-28', NULL, '2022-09-28', NULL, 28, '2022-09-28 00:29:48', '2022-09-28 00:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leaves`
--

CREATE TABLE `employee_leaves` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tl_id` int(10) UNSIGNED NOT NULL,
  `manager_id` int(10) UNSIGNED NOT NULL,
  `leave_type_id` int(10) UNSIGNED NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `from_time` time DEFAULT NULL,
  `to_time` time DEFAULT NULL,
  `days` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0 = Unapproved, 1 = Approved',
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee_leaves`
--

INSERT INTO `employee_leaves` (`id`, `user_id`, `tl_id`, `manager_id`, `leave_type_id`, `date_from`, `date_to`, `from_time`, `to_time`, `days`, `status`, `remarks`, `reason`, `created_at`, `updated_at`) VALUES
(1, 27, 0, 0, 1, '2022-09-30', '2022-10-01', NULL, NULL, '2', 0, '', 'Not Feeling Well', '2022-09-30 02:00:15', '2022-09-30 02:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `employee_uploads`
--

CREATE TABLE `employee_uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` int(10) UNSIGNED NOT NULL,
  `occasion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `holiday_filenames`
--

CREATE TABLE `holiday_filenames` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_applies`
--

CREATE TABLE `leave_applies` (
  `id` int(10) UNSIGNED NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL,
  `reason` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_drafts`
--

CREATE TABLE `leave_drafts` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `leave_type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `leave_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `total_leave` int(191) NOT NULL DEFAULT 0,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `leave_type`, `total_leave`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Casual Leave', 10, '', '2022-09-30 01:42:48', '2022-09-30 01:42:48'),
(2, 'Sick Leave', 15, '', '2022-09-30 01:43:06', '2022-09-30 01:43:06'),
(3, 'Annual Leave', 20, '', '2022-09-30 01:43:34', '2022-09-30 01:43:34');

-- --------------------------------------------------------

--
-- Table structure for table `leave_type_applies`
--

CREATE TABLE `leave_type_applies` (
  `id` int(10) UNSIGNED NOT NULL,
  `leave_type_id` int(10) UNSIGNED NOT NULL,
  `leave_apply_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_uploads`
--

CREATE TABLE `leave_uploads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seller_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_04_08_104008_create_profiles_table', 1),
(4, '2016_04_21_111604_create_roles_table', 1),
(5, '2016_04_21_111832_create_user_roles_table', 1),
(6, '2016_04_27_115938_create_employees_table', 1),
(7, '2016_05_04_123920_create_leave_types_table', 1),
(8, '2016_05_06_060806_create_leave_applies_table', 1),
(9, '2016_05_06_063627_create_leave_type_applies_table', 1),
(10, '2016_05_13_065329_create_teams_table', 1),
(11, '2016_05_30_051327_create_attendance_filenames_table', 1),
(12, '2016_05_30_051629_create_leave_uploads_table', 1),
(13, '2016_06_02_072217_create_employee_uploads_table', 1),
(14, '2016_06_02_111416_create_assets_table', 1),
(15, '2016_06_02_123731_create_assign_assets_table', 1),
(16, '2016_06_30_085514_create_leave_drafts_table', 1),
(17, '2016_06_30_090733_create_employee_leaves_table', 1),
(18, '2016_08_11_164621_create_attendance_manager_table', 1),
(19, '2016_08_14_000122_alter_table_attendance_manager_add_one_field', 1),
(20, '2016_08_27_001608_create_holidays_table', 1),
(21, '2016_08_28_151111_create_events_table', 1),
(22, '2016_08_28_151431_create_event_attendees_table', 1),
(23, '2016_08_29_130810_create_holiday_filenames', 1),
(24, '2016_09_07_182031_create_meetings_table', 1),
(25, '2016_09_07_182538_create_meeting_attendees', 1),
(26, '2016_12_05_210112_create_expenses_table', 1),
(27, '2016_12_06_102039_create_awards_table', 1),
(28, '2016_12_06_111217_create_awardees_table', 1),
(29, '2016_12_06_161800_create_training_programs_table', 1),
(30, '2016_12_06_170605_create_training_invites_table', 1),
(31, '2016_12_07_162939_create_promotions_table', 1),
(32, '2017_04_25_144352_create_posts_table', 1),
(33, '2017_04_25_144545_create_post_replies_table', 1),
(34, '2017_04_27_123435_create_clients_table', 1),
(35, '2017_04_27_131835_create_projects_table', 1),
(36, '2017_09_15_223652_create_assign_projects_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_replies`
--

CREATE TABLE `post_replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dob` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(2, 'Director', 'Company Director', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(3, 'Research Analyst', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(4, 'Senior Research Analyst', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(5, 'Team Lead', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(6, 'IT Executive', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(7, 'HR Manager', 'Human Resource Manager', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(8, 'Associate-Enforcement', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(9, 'Enforcement Head', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(10, 'Finance Controller', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(11, 'Consultant', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(12, 'Front Desk Executive', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(13, 'Software Developer', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(14, 'Senior Software Developer', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(15, 'Accounts Executive', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(16, 'Manager', 'Has all the rights', '2022-09-13 05:33:14', '2022-09-13 05:33:14');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team_id` int(11) NOT NULL,
  `manager_id` int(10) UNSIGNED NOT NULL,
  `leader_id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'HR Manager', 'test@demo.com', '$2y$10$UMJA0W5vxdFu0XTMcBG0sudVSgJJFQymHY23/JhLLQM5cnpFDEt7K', '8h3MQ4UPu62a7jUBTEDnoFqRiHrnKQ6F8dQQZmoHg49gpHkDRIArNsmwvYeO', NULL, NULL),
(2, 'Shafira Finley', 'Shafira_Finley@sipi-ip.sg', '$2y$10$lSjctQMVFFE1hsuxkOsVOO84F3H/xZWAsr08tORW6tRjQiK.QwaFG', '3kVb2IeHOhd36eBrbZQIZuCchM85oBovOHQAJCWcwmF20rxXEfUJvaQbjSqe', '2022-09-13 07:13:36', '2022-09-13 07:13:36'),
(27, 'Daniyal Hussain', 'daniyal.hussain@technifiedlabs.com', '$2y$10$UMJA0W5vxdFu0XTMcBG0sudVSgJJFQymHY23/JhLLQM5cnpFDEt7K', NULL, '2022-09-28 00:23:06', '2022-09-28 00:23:06'),
(28, 'Testing Name', 'testing@domain.com', '$2y$10$UMJA0W5vxdFu0XTMcBG0sudVSgJJFQymHY23/JhLLQM5cnpFDEt7K', NULL, '2022-09-28 00:29:48', '2022-09-28 00:29:48');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2022-09-13 05:33:14', '2022-09-13 05:33:14'),
(2, 16, 2, '2022-09-13 07:13:36', '2022-09-13 07:13:36'),
(4, 5, 27, '2022-09-28 00:23:06', '2022-09-28 00:23:06'),
(5, 16, 28, '2022-09-28 00:29:48', '2022-09-28 00:29:48'),
(6, 5, 27, '2022-09-13 07:13:36', '2022-09-13 07:13:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_filenames`
--
ALTER TABLE `attendance_filenames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance_managers`
--
ALTER TABLE `attendance_managers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_managers_user_id_foreign` (`user_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employees_user_id_foreign` (`user_id`);

--
-- Indexes for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_leaves_user_id_foreign` (`user_id`),
  ADD KEY `employee_leaves_leave_type_id_foreign` (`leave_type_id`);

--
-- Indexes for table `employee_uploads`
--
ALTER TABLE `employee_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holiday_filenames`
--
ALTER TABLE `holiday_filenames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_applies`
--
ALTER TABLE `leave_applies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_drafts`
--
ALTER TABLE `leave_drafts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leave_drafts_leave_type_id_foreign` (`leave_type_id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_type_applies`
--
ALTER TABLE `leave_type_applies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `leave_type_applies_leave_type_id_foreign` (`leave_type_id`),
  ADD KEY `leave_type_applies_leave_apply_id_foreign` (`leave_apply_id`);

--
-- Indexes for table `leave_uploads`
--
ALTER TABLE `leave_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_replies`
--
ALTER TABLE `post_replies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_replies_user_id_foreign` (`user_id`),
  ADD KEY `post_replies_post_id_foreign` (`post_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_manager_id_foreign` (`manager_id`),
  ADD KEY `teams_leader_id_foreign` (`leader_id`),
  ADD KEY `teams_member_id_foreign` (`member_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_role_id_foreign` (`role_id`),
  ADD KEY `user_roles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_filenames`
--
ALTER TABLE `attendance_filenames`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `attendance_managers`
--
ALTER TABLE `attendance_managers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_uploads`
--
ALTER TABLE `employee_uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `holiday_filenames`
--
ALTER TABLE `holiday_filenames`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_applies`
--
ALTER TABLE `leave_applies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_drafts`
--
ALTER TABLE `leave_drafts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leave_type_applies`
--
ALTER TABLE `leave_type_applies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_uploads`
--
ALTER TABLE `leave_uploads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_replies`
--
ALTER TABLE `post_replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance_managers`
--
ALTER TABLE `attendance_managers`
  ADD CONSTRAINT `attendance_managers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `employees`
--
ALTER TABLE `employees`
  ADD CONSTRAINT `employees_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  ADD CONSTRAINT `employee_leaves_leave_type_id_foreign` FOREIGN KEY (`leave_type_id`) REFERENCES `leave_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `employee_leaves_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `leave_drafts`
--
ALTER TABLE `leave_drafts`
  ADD CONSTRAINT `leave_drafts_leave_type_id_foreign` FOREIGN KEY (`leave_type_id`) REFERENCES `leave_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `leave_type_applies`
--
ALTER TABLE `leave_type_applies`
  ADD CONSTRAINT `leave_type_applies_leave_apply_id_foreign` FOREIGN KEY (`leave_apply_id`) REFERENCES `leave_applies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `leave_type_applies_leave_type_id_foreign` FOREIGN KEY (`leave_type_id`) REFERENCES `leave_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_replies`
--
ALTER TABLE `post_replies`
  ADD CONSTRAINT `post_replies_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_replies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teams`
--
ALTER TABLE `teams`
  ADD CONSTRAINT `teams_leader_id_foreign` FOREIGN KEY (`leader_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teams_manager_id_foreign` FOREIGN KEY (`manager_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `teams_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
