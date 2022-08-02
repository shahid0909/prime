-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2022 at 08:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `primeuniversitypu`
--

-- --------------------------------------------------------

--
-- Table structure for table `aca_calenders`
--

CREATE TABLE `aca_calenders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `upload_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aca_calenders`
--

INSERT INTO `aca_calenders` (`id`, `session_id`, `upload_file`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'file/aca_calender/1646552996.pdf', 1, '2022-03-06 01:49:56', '2022-03-06 01:58:20'),
(3, 2, 'file/aca_calender/1646554457.pdf', 1, '2022-03-06 02:14:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `aca_programs`
--

CREATE TABLE `aca_programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `p_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credits` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_course` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cgpa` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_objective` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_outcome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_structure` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_distribution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `status` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aca_programs`
--

INSERT INTO `aca_programs` (`id`, `p_name`, `credits`, `m_year`, `m_course`, `cgpa`, `p_objective`, `p_outcome`, `c_structure`, `c_distribution`, `dept_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Akash in CSE', '53', '4', '24', '2.50', '<p>gcv</p>', '<p>asfg</p>', '<p>ggg</p>', '<p>asg</p>', 2, 1, '2022-02-14 05:31:36', '2022-02-14 06:04:05'),
(4, 'asdsss', '53', '4', '24', '2.50', '<p>FGERG</p>', '<p>sdgdf</p>', '<p>sdffd</p>', '<p>dfgbd</p>', 2, 1, '2022-02-14 05:32:10', '2022-02-14 06:08:57'),
(5, 'jjjjj', '53', '4', '24', '2.50', '<p>asdfdg</p>', '<p>dger</p>', '<p>dsgedr</p>', '<p>sdgred</p>', 2, 1, '2022-02-14 05:32:37', '2022-02-14 06:09:08');

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `o_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`id`, `o_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Board of Trustees it', 1, NULL, '2022-02-17 07:20:21'),
(2, 'Board of Governors', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admission_promotions`
--

CREATE TABLE `admission_promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_promotions`
--

INSERT INTO `admission_promotions` (`id`, `a_title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 'gggggggggg', 'image/admission_promotion/1645610335.jpg', '1', '2022-02-23 03:58:55', '2022-02-23 04:05:53');

-- --------------------------------------------------------

--
-- Table structure for table `admission_requirements`
--

CREATE TABLE `admission_requirements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `schedule` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_l_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_t_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `a_requirement` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `how_to_apply` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_fee` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_requirements`
--

INSERT INTO `admission_requirements` (`id`, `type`, `schedule`, `a_l_date`, `a_t_date`, `a_requirement`, `how_to_apply`, `admission_fee`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 'Admission Schedule for Spring 2022', '2022-02-11', '2022-02-23', '<p>ggggggggggggggggg</p>', '<p>eeeeeeeeeeeeeeee</p>', '<p>uuuuuuuuuuuuuuuu</p>', 1, '2022-02-23 06:00:07', '2022-03-06 04:16:04'),
(3, 1, 'Admission Schedule for Summer 2022', '2022-02-10', '2022-02-23', '<p>gfffffffffg</p>', '<p>kkkkkkkkkkkkkk</p>', '<p>oooooooooooooooo</p>', 1, '2022-02-23 06:34:26', '2022-03-06 04:00:50'),
(4, 3, 'Admission Schedule for Fall 2022', '2022-02-16', '2022-02-23', '<p>hhhhhhhhhhhhhhhh</p>', '<p>uuuuuuuuuuuuuuuu</p>', '<p>lllllllllllllllllllllllllll</p>', 1, '2022-02-23 06:34:49', '2022-03-06 04:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batche` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `breaking_news`
--

CREATE TABLE `breaking_news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `breaking_news`
--

INSERT INTO `breaking_news` (`id`, `b_title`, `file`, `status`, `created_at`, `updated_at`) VALUES
(2, 'You are so preaty girl', 'file/breaking_news/1645537776.pdf', 1, '2022-02-22 07:49:36', '2022-02-22 07:56:45'),
(3, 'ttttttttttttttttttttthhhhhhhhhhhhh', 'file/breaking_news/1645611578.pdf', 1, '2022-02-23 04:19:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `class_exams`
--

CREATE TABLE `class_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `status` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_exams`
--

INSERT INTO `class_exams` (`id`, `title`, `file`, `date`, `type`, `dept_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'thank you bbbbbbbbbbb', 'file/class_exam_routing/1644755472.pdf', '2022-02-19', '1', 1, 1, '2022-02-13 06:31:12', '2022-02-14 01:58:24'),
(3, 'Lorem Ipsu', 'file/class_exam_routing/1644756025.pdf', '2022-02-13', '1', 2, 1, '2022-02-13 06:40:25', '2022-02-14 01:59:09'),
(4, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'file/class_exam_routing/1644756078.pdf', '2022-02-13', '1', 2, 1, '2022-02-13 06:41:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `title`, `image`, `description`, `dept_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'hhhhh', 'image/department/clubs/1643791533.jpg', '<p>jjjjjjjjjjjjjjjjjjjjjklyyyyyyyyyyyy</p>', 2, '1', '2022-02-01 06:27:33', '2022-02-02 02:45:34'),
(3, 'thank you', 'image/department/clubs/1644477109.PNG', '<p>jjjjjjjjjj</p>', 2, '1', '2022-02-10 01:11:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `club_details`
--

CREATE TABLE `club_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vision` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activities` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_member_id` bigint(20) NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `club_details`
--

INSERT INTO `club_details` (`id`, `vision`, `activities`, `faculty_member_id`, `description`, `club_id`, `status`, `created_at`, `updated_at`) VALUES
(2, '<p>sdfvawefg</p>', '<p>asdfwe</p>', 12, '<p>sdfvwefg</p>', 2, '1', '2022-02-10 02:33:59', '2022-02-10 03:30:48'),
(3, '<p>zcfbved</p>', '<p>agerge rg</p>', 10, '<p>sdagertgre</p>', 3, '1', '2022-02-10 02:52:42', '2022-02-10 03:18:54'),
(4, '<p>dsre</p>', '<p>rfedrtr</p>', 13, '<p>sgrg</p>', 3, '1', '2022-02-10 04:21:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `club__committees`
--

CREATE TABLE `club__committees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `club_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `club__committees`
--

INSERT INTO `club__committees` (`id`, `designation`, `name`, `batch`, `club_id`, `status`, `created_at`, `updated_at`) VALUES
(2, '1', 'Md Ashiquzzaman', 'CSE-46', 2, '1', '2022-02-09 02:38:39', '2022-02-09 03:20:25'),
(3, '2', 'akash', 'CSE-46', 2, '1', '2022-02-09 06:31:29', NULL),
(4, '3', 'akashgggggggggggg', 'CSE-46', 2, '1', '2022-02-09 06:31:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `controller_of_examinations`
--

CREATE TABLE `controller_of_examinations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `papers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `controller_of_examinations`
--

INSERT INTO `controller_of_examinations` (`id`, `papers`, `status`, `created_at`, `updated_at`) VALUES
(2, '<p>lllllllllllllllllllllllll</p>', '1', '2022-02-24 06:16:18', '2022-02-24 06:20:27'),
(3, '<p>ergewgh3e4</p>', '1', '2022-02-24 06:16:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `controller_of_examination_applications`
--

CREATE TABLE `controller_of_examination_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `a_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uplode_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `controller_of_examination_applications`
--

INSERT INTO `controller_of_examination_applications` (`id`, `a_title`, `uplode_file`, `status`, `created_at`, `updated_at`) VALUES
(2, 'vvvvvvvvvvvvvvvv', 'file/controller_of_application/1645707176.pdf', '1', '2022-02-24 06:52:56', '2022-02-24 07:00:54');

-- --------------------------------------------------------

--
-- Table structure for table `crhps`
--

CREATE TABLE `crhps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibilities` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crhps`
--

INSERT INTO `crhps` (`id`, `about`, `vision`, `mission`, `responsibilities`, `status`, `created_at`, `updated_at`) VALUES
(1, '<p>ffffffffffffffff</p>', '<p>zzzzzzzzzzzzzzzzzzzzzzzz</p>', '<p>tttttttttttttttttttttttt</p>', '<p>sdededededededededededededede</p>', '1', '2022-02-24 04:47:17', '2022-02-24 04:58:49');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `image`, `faculty_id`, `created_at`, `updated_at`) VALUES
(1, 'Akash Ahmed', 'image/department/1643569354.jpg', 2, '2022-01-30 13:02:34', NULL),
(2, 'CSE', 'image/department/1643614154.jpg', 2, '2022-01-31 01:29:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dept_addresses`
--

CREATE TABLE `dept_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dept_addresses`
--

INSERT INTO `dept_addresses` (`id`, `address`, `phone_number`, `email`, `dept_id`, `status`, `created_at`, `updated_at`) VALUES
(2, '<p>thank you</p>', '<p>dddddddddddd</p>', '<p>ghesfdg</p>', 2, '1', '2022-02-06 06:41:55', '2022-02-07 01:01:52'),
(3, '<p>drtgerg</p>', '<p>serge4r5g</p>', '<p>asdrge</p>', 1, '1', '2022-02-15 02:55:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dept_events`
--

CREATE TABLE `dept_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dept_events`
--

INSERT INTO `dept_events` (`id`, `title`, `image`, `date`, `place`, `description`, `dept_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'hsssssssssssssd', 'image/department/events/1643875874.jpg', '2022-02-03', 'asdfwdfefqwdf', '<p>hhhhhhhhhhhhhhhhhhhh</p>', 2, '1', '2022-02-03 02:11:14', '2022-02-10 05:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `dept_news_media`
--

CREATE TABLE `dept_news_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dept_news_media`
--

INSERT INTO `dept_news_media` (`id`, `title`, `image`, `date`, `description`, `dept_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'image/department/news_media/1644143595.png', '2022-02-24', '<p>kkkkkkkkkkkkkkkkkkk</p>', 2, '1', '2022-02-06 04:33:16', '2022-02-06 04:48:46');

-- --------------------------------------------------------

--
-- Table structure for table `dept_notable_alumnis`
--

CREATE TABLE `dept_notable_alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dept_notable_alumnis`
--

INSERT INTO `dept_notable_alumnis` (`id`, `title`, `image`, `designation`, `description`, `dept_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'thank you', 'image/department/notable_alumni/1643888664.jpg', 'Student', '<p>jjjjjjjjjjjjjjjjjjj</p>', 2, '1', '2022-02-03 05:44:25', '2022-02-04 10:27:01'),
(2, 'thank you bbbbbbbbbbb', 'image/department/notable_alumni/1644494013.PNG', 'Student', '<p>dfgzdrbbbbb</p>', 2, '1', '2022-02-10 05:53:34', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dept_notices`
--

CREATE TABLE `dept_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dept_notices`
--

INSERT INTO `dept_notices` (`id`, `title`, `date`, `file`, `description`, `dept_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '2022-02-17', 'file/dept_notice/1645091375.pdf', '<p>ggggggggggggggg</p>', 2, '1', '2022-02-17 03:49:35', '2022-02-17 03:57:21');

-- --------------------------------------------------------

--
-- Table structure for table `dept__details`
--

CREATE TABLE `dept__details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designations`
--

CREATE TABLE `designations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adi_designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parity` int(120) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designations`
--

INSERT INTO `designations` (`id`, `designation`, `adi_designation`, `parity`, `created_at`, `updated_at`) VALUES
(1, 'Professor', 'Dean, Faculty of Engineering', 1, NULL, NULL),
(2, 'Associate Professor', 'and Head', 2, NULL, NULL),
(3, 'Senior Lecturer', NULL, 3, NULL, NULL),
(4, 'Lecturer', NULL, 4, NULL, NULL),
(5, 'Head', NULL, 5, NULL, NULL),
(6, 'Chairman', NULL, 0, NULL, NULL),
(7, 'Senior Vice Chairman', NULL, 0, NULL, NULL),
(8, 'Vice Chancellor', NULL, 0, NULL, NULL),
(9, 'Secretary General', NULL, 0, NULL, NULL),
(10, 'Treasurer', NULL, 0, NULL, NULL),
(11, 'Member', NULL, 0, NULL, NULL),
(12, 'Dean', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detp_sliders`
--

CREATE TABLE `detp_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detp_sliders`
--

INSERT INTO `detp_sliders` (`id`, `title`, `image`, `dept_id`, `created_at`, `updated_at`) VALUES
(3, 'hi ai amm', 'image/department/slider/1643621656.jpg', 1, '2022-01-31 01:28:53', '2022-01-31 03:34:16'),
(5, 'thank you', 'image/department/slider/1643620710.jpg', 2, '2022-01-31 03:18:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employs`
--

CREATE TABLE `employs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `e_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `administrators_id` bigint(20) UNSIGNED NOT NULL,
  `status` bigint(20) DEFAULT NULL,
  `parity` int(120) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employs`
--

INSERT INTO `employs` (`id`, `e_name`, `e_designation`, `email`, `image`, `about`, `number`, `administrators_id`, `status`, `parity`, `created_at`, `updated_at`) VALUES
(1, 'akash', '8', '[\"ashiquzzaman1997@gmail.com\",\"admin@gmail.com\"]', 'image/employ/1645093649.jpg', '<p>gggggggggggggg</p>', '{\"0\":\"01983476444\",\"2\":\"444555555555\"}', 1, 1, 1, '2022-02-17 04:27:29', '2022-02-17 06:27:27'),
(2, 'Akash Ahmed', '6', '[\"ashiquzzaman1997@gmail.com\"]', 'image/employ/1645349151.PNG', '<p>sdfgbdsfg</p>', '[\"01983476444\"]', 1, 1, 2, '2022-02-20 03:25:51', NULL),
(3, 'Md Ashiquzzaman', '12', '[\"ashiquzzaman1997@gmail.com\",\"rkakash46@gmail.com\"]', 'image/employ/1645349209.PNG', '<p>xcgbdb</p>', '[\"1983476444\",\"01983476444\"]', 1, 1, 3, '2022-02-20 03:26:49', '2022-03-07 07:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `exam_infos`
--

CREATE TABLE `exam_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_session_id` bigint(20) UNSIGNED NOT NULL,
  `date_of_exam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_sessions`
--

CREATE TABLE `exam_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `exam_session` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `title`, `image`, `description`, `dept_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'thank you', 'image/department/facilities/1643710846.jpg', '<p>jjjjjjjjjjjjjjjjjjjjjklyyyyyyyyyyyy</p>', 2, '1', '2022-02-01 04:20:46', '2022-02-01 06:36:34'),
(3, 'pppp', 'image/department/facilities/1643713699.jpg', '<p>kkkkkkkkkkkkkkkkkkk</p>', 2, '1', '2022-02-01 05:08:19', NULL),
(4, 'pppppppppp', 'image/department/facilities/1643713715.jpg', '<p>ppppppppppppppppppppp</p>', 1, '1', '2022-02-01 05:08:35', NULL),
(5, 'lllllllll', 'image/department/facilities/1643714410.jpg', '<p>iiiiiiiiiiiiiiiiii</p>', 2, '2', '2022-02-01 05:20:10', '2022-02-01 05:45:12'),
(6, 'yyyyyyyyyyyyyyyy', 'image/department/facilities/1643714422.jpg', '<p>uuuuuuuuuuuuuuuuuuuu</p>', 2, '1', '2022-02-01 05:20:22', NULL),
(7, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'image/department/facilities/1643714449.jpg', '<p>nnnnnnnnnnnnnnnnnnnnn</p>', 2, '1', '2022-02-01 05:20:49', '2022-02-01 05:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `establish_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `name`, `establish_year`, `created_at`, `updated_at`) VALUES
(1, 'DSCP', '2022-01-31', NULL, NULL),
(2, 'FSIT', '2022-01-31', '2022-01-30 12:19:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_members`
--

CREATE TABLE `faculty_members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adi_designation_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `edu_que` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_me` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `research_area` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `research_interest` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leave` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parity` int(250) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculty_members`
--

INSERT INTO `faculty_members` (`id`, `m_name`, `designation_id`, `adi_designation_id`, `edu_que`, `email`, `phone`, `about_me`, `research_area`, `research_interest`, `publication`, `experience`, `image`, `type`, `leave`, `dept_id`, `status`, `parity`, `created_at`, `updated_at`) VALUES
(10, 'Akash Ahmed', '1', '0', '<p>sadvsagv</p>', '[\"ashiquzzaman1997@gmail.com\"]', '[\"1831763867\"]', '<p>sdvwseg</p>', '<p>sgwswe</p>', '<p>sdfwefwef</p>', '<p>asdfwegf</p>', '<p>segwefg</p>', 'image/department/faculty_member/1644408735.png', '1', '0', 2, '1', 4, '2022-02-09 06:12:15', NULL),
(11, 'akash', '2', '2', '<p>ZXDVwsef</p>', '[\"admin@gmail.com\",\"ashiquzzaman1997@gmail.com\",null]', '[\"01831763868\",\"1983476444\",null]', '<p>asdfce</p>', '<p>asfqef</p>', '<p>asfqwef</p>', '<p>asfqwe</p>', '<p>asefqwef</p>', 'image/department/faculty_member/1644408790.png', '1', '1', 2, '1', 2, '2022-02-09 06:13:11', '2022-02-20 05:11:18'),
(12, 'Md Ashiquzzaman', '5', NULL, '<p>aCFqWF</p>', '[\"ashiquzzaman1997@gmail.com\",\"rkakash46@gmail.com\"]', '[\"1983476444\",\"01983476444\"]', '<p>SCFAEF</p>', '<p>SDFVSEF</p>', '<p>SDFVWEA</p>', '<p>sdfvsef</p>', '<p>sdfwef</p>', 'image/department/faculty_member/1644408820.jpg', '1', '1', 2, '1', 3, '2022-02-09 06:13:40', '2022-03-07 07:27:45'),
(13, 'akash', '1', '1', '<p>asdvcasef</p>', '[\"rkakash46@gmail.com\"]', '[\"1983476444\"]', '<p>asfaef</p>', '<p>sdvcsef</p>', '<p>sdfvwef</p>', '<p>sdfvwe</p>', '<p>asfwe</p>', 'image/department/faculty_member/1644408859.jpg', '1', '0', 2, '1', 4, '2022-02-09 06:14:19', NULL),
(15, 'nnnnnnnnn', '10', '0', '<p>dzfvbsd</p>', '[\"rkakash46@gmail.com\"]', '[\"01983476444\"]', '<p>xzfvbd</p>', '<p>zdfgbref</p>', '<p>sdzgbzre</p>', '<p>xfberfb</p>', '<p>svbsrdg</p>', 'image/department/faculty_member/1645352046.PNG', '1', '0', 2, '1', 1, '2022-02-20 04:14:06', NULL),
(16, 'akash', '1', '2', '<div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-bottom: 15px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Why do we use it?</h2><p style=\"margin-bottom: 15px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><p><br style=\"margin: 0px; padding: 0px; clear: both; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: center;\"></p><div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where does it come from?</h2><p style=\"margin-bottom: 15px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-bottom: 15px; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where can I get some?</h2><p style=\"margin-bottom: 15px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc</p></div>', '[\"admin@gmail.com\"]', '[\"1983476444\"]', '<div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-bottom: 15px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Why do we use it?</h2><p style=\"margin-bottom: 15px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><p><br style=\"margin: 0px; padding: 0px; clear: both; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: center;\"></p><div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where does it come from?</h2><p style=\"margin-bottom: 15px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-bottom: 15px; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where can I get some?</h2><p style=\"margin-bottom: 15px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc</p></div>', '<div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-bottom: 15px; text-align: justify;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Why do we use it?</h2><p style=\"margin-bottom: 15px; text-align: justify;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><p><br style=\"margin: 0px; padding: 0px; clear: both; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: center;\"></p><div style=\"margin: 0px 14.3906px 0px 28.7969px; padding: 0px; width: 436.797px; float: left; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where does it come from?</h2><p style=\"margin-bottom: 15px; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-bottom: 15px; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><div style=\"margin: 0px 28.7969px 0px 14.3906px; padding: 0px; width: 436.797px; float: right; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where can I get some?</h2><p style=\"margin-bottom: 15px; text-align: justify;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc</p></div>', '<p><br></p><h2 style=\"margin-top: 0px; margin-bottom: 10px; line-height: 24px; font-size: 24px; font-family: DauphinPlain;\">Where does it come from?</h2><p style=\"margin-bottom: 15px; letter-spacing: normal; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-bottom: 15px; letter-spacing: normal; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p><br></p><h2 style=\"margin-top: 0px; margin-bottom: 10px; line-height: 24px; font-size: 24px; font-family: DauphinPlain;\">Where does it come from?</h2><p style=\"margin-bottom: 15px; letter-spacing: normal; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-bottom: 15px; letter-spacing: normal; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p><br></p><h2 style=\"margin-top: 0px; margin-bottom: 10px; line-height: 24px; font-size: 24px; font-family: DauphinPlain;\">Where does it come from?</h2><p style=\"margin-bottom: 15px; letter-spacing: normal; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-bottom: 15px; letter-spacing: normal; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 'image/department/faculty_member/1645531021.png', '1', '1', 2, '1', 18, '2022-02-22 05:57:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `former_vice_chancellors`
--

CREATE TABLE `former_vice_chancellors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `former_vice_chancellors`
--

INSERT INTO `former_vice_chancellors` (`id`, `f_name`, `image`, `s_date`, `e_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 'akash', 'image/f_v_chancellor/1645521313.png', '2022-02-10', '2022-02-22', '1', '2022-02-22 03:15:13', '2022-02-22 03:44:10'),
(4, 'Akash Ahmed', 'image/f_v_chancellor/1645521519.jpg', '2022-02-11', '2022-02-25', '1', '2022-02-22 03:18:39', NULL),
(5, 'Akash Ahmed', 'image/f_v_chancellor/1645521537.jpg', '2022-02-11', '2022-02-21', '1', '2022-02-22 03:18:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `group_or_sections`
--

CREATE TABLE `group_or_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groupsection` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `home_addresses`
--

CREATE TABLE `home_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_addresses`
--

INSERT INTO `home_addresses` (`id`, `address`, `phone_number`, `email`, `status`, `created_at`, `updated_at`) VALUES
(2, '<p>hhhhhhhhhhhhhhhh</p>', '<p>fffffffffffffffffffff</p>', '<p>kkkkkkkkkkkkkkkkk</p>', '1', '2022-02-06 06:04:54', '2022-02-06 06:09:08'),
(3, '<p>zdgbsdz</p>', NULL, '<p>zdgbsdg</p>', '1', '2022-02-06 06:36:12', NULL),
(4, NULL, NULL, NULL, '1', '2022-02-27 05:02:36', NULL),
(5, NULL, NULL, NULL, '1', '2022-02-27 05:03:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_events`
--

CREATE TABLE `home_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_events`
--

INSERT INTO `home_events` (`id`, `title`, `image`, `date`, `place`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'thank you', 'image/home_event/1643872565.jpg', '2022-02-03', 'ggggggggggggg', '<p>fffffffffffffffffffffffffffff</p>', '1', '2022-02-03 01:00:52', '2022-02-03 01:16:05'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', 'image/home_event/1645526252.png', '2022-02-22', 'ggggggggggggg', '<p>bbbbbbbbbbbbbbbbbbbb</p>', '1', '2022-02-22 04:37:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_news_media`
--

CREATE TABLE `home_news_media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_news_media`
--

INSERT INTO `home_news_media` (`id`, `title`, `image`, `date`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Lorem Ipsum is simply dummy', 'image/home_news/1644140572.png', '2022-02-06', '<p>The IS this s</p>', '1', '2022-02-06 03:42:53', '2022-02-06 03:55:44'),
(3, 'dsagb', 'image/home_news/1644140587.png', '2022-02-17', '<p>thrherghe</p>', '1', '2022-02-06 03:43:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_notable_alumnis`
--

CREATE TABLE `home_notable_alumnis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_notable_alumnis`
--

INSERT INTO `home_notable_alumnis` (`id`, `name`, `image`, `designation`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Akash Ahmed 123456', 'image/home_notable_alumni/1643884536.jpg', 'Student', '<p>HI My Dear</p>', '1', '2022-02-03 04:00:40', '2022-02-22 04:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `home_notices`
--

CREATE TABLE `home_notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_notices`
--

INSERT INTO `home_notices` (`id`, `title`, `date`, `file`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'thank you', '2022-02-17', 'file/home_notice/1645089656.pdf', '<p>hhhhhhhhhh</p>', '1', '2022-02-17 03:20:56', '2022-02-17 03:28:34'),
(3, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy', '2022-02-22', 'file/home_notice/1645525439.pdf', '<p>fffggggggggggg</p>', '1', '2022-02-22 04:23:59', NULL),
(4, 'thank you', '2022-02-23', 'file/home_notice/1645531598.pdf', '<h2 style=\"margin-top: 0px; margin-bottom: 10px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">Where does it come from?</h2><p style=\"margin-bottom: 15px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; letter-spacing: normal;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-bottom: 15px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; letter-spacing: normal;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '2', '2022-02-22 06:06:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_sliders`
--

CREATE TABLE `home_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_sliders`
--

INSERT INTO `home_sliders` (`id`, `s_title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Thank you', 'image/home_slider/1645535270.png', 1, '2022-02-22 07:07:51', '2022-02-22 07:14:29'),
(3, 'Thank you', 'image/home_slider/1645611450.png', 1, '2022-02-23 04:17:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `importent_dates`
--

CREATE TABLE `importent_dates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `i_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `importent_dates`
--

INSERT INTO `importent_dates` (`id`, `i_title`, `s_date`, `e_date`, `status`, `created_at`, `updated_at`) VALUES
(2, 'sssssssssssskkkkkkkkkkk', '2022-02-18', '2022-02-23', '1', '2022-02-23 07:21:21', '2022-02-23 07:29:39');

-- --------------------------------------------------------

--
-- Table structure for table `iqacs`
--

CREATE TABLE `iqacs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsibilities` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iqacs`
--

INSERT INTO `iqacs` (`id`, `about`, `vision`, `mission`, `responsibilities`, `status`, `created_at`, `updated_at`) VALUES
(2, 'ttttttttttttttttttt', '<p>eeeeeeeeeee</p>', '<p>kkkkkkkk</p>', '<p>yyyyyyyyyyyyyyyyyyyy</p>', 1, '2022-02-24 00:44:00', '2022-02-27 01:46:14'),
(3, '<p>rrrrrrrrrrrrr</p>', '<p>uuuuuuuuuuuuuuuuuu</p>', '<p>kkkkkkkkkkk</p>', '<p>tttttttttttttttt</p>', 1, '2022-02-27 00:47:30', NULL),
(4, '<p>rrrrrrrrrrrr</p>', '<p>ttttttttttttttttttt</p>', '<p>uuuuuuuuuuuuuuuuuuuuu</p>', '<p>iiiiiiiiiiiiiiiiiiiiii</p>', 1, '2022-02-27 01:38:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `iqac_resources`
--

CREATE TABLE `iqac_resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `r_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iqac_resources`
--

INSERT INTO `iqac_resources` (`id`, `r_title`, `upload_file`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ggggggggggggg', 'file/iqac_resource/1645696492.pdf', '1', '2022-02-24 03:54:52', '2022-02-24 04:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `iqac_workshops`
--

CREATE TABLE `iqac_workshops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `w_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `w_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iqac_workshops`
--

INSERT INTO `iqac_workshops` (`id`, `w_title`, `w_details`, `dept_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'thank you', '<p>aaaaaaaaaaaaa</p>', 2, '1', NULL, '2022-02-24 03:25:12'),
(3, 'you are so cute', '<p>ttttttttttttttttt</p>', 1, '1', NULL, '2022-02-27 01:55:20');

-- --------------------------------------------------------

--
-- Table structure for table `job_applies`
--

CREATE TABLE `job_applies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applies`
--

INSERT INTO `job_applies` (`id`, `name`, `phone`, `email`, `date`, `upload_file`, `image`, `job_id`, `created_at`, `updated_at`) VALUES
(2, 'Akash Ahmed', '1983476444', 'ashiquzzaman1997@gmail.com', '2022-02-25', 'file/job_cv/1646042642.pdf', 'image/job_apply/1646042642.png', 1, '2022-02-28 04:04:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_posts`
--

CREATE TABLE `job_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `j_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `e_requirement` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_posts`
--

INSERT INTO `job_posts` (`id`, `j_title`, `location`, `vacation`, `e_status`, `experience`, `e_requirement`, `salary`, `description`, `age`, `p_date`, `d_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lecturer', 'Dhaka', '12', '1', '3 year', '<p>uuuuuuuuuuuuuuu</p>', '<p>rrrrrrrrrrrrrrrrrrrrrrrr</p>', '<p>oooooooooooooooooo</p>', '30', '2022-02-27', '2022-03-12', '1', '2022-02-27 05:06:15', '2022-02-27 06:06:21'),
(3, 'Lecturer sssssssss', 'Dhaka', '12', '1', '3 year', '<p>qqqqqqqqqqqqqqqqq</p>', '<p>eeeeeeeeeeeeeeeeeee</p>', '<p>hhhhhhhhhhhhhhhhhhh</p>', '24', '2022-02-27', '2022-03-12', '1', '2022-02-27 06:05:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `massage_chairmen`
--

CREATE TABLE `massage_chairmen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `e_id` bigint(20) UNSIGNED NOT NULL,
  `short_massage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_massage` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massage_chairmen`
--

INSERT INTO `massage_chairmen` (`id`, `e_id`, `short_massage`, `long_massage`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'kkkkkkkkkkkkkkkk', '<p>yyyyyyyyyyyyyyyyyyyyyyy</p>', 1, '2022-03-06 07:11:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `massage_deans`
--

CREATE TABLE `massage_deans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `e_id` bigint(20) UNSIGNED NOT NULL,
  `short_massage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_massage` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massage_deans`
--

INSERT INTO `massage_deans` (`id`, `faculty_id`, `e_id`, `short_massage`, `long_massage`, `status`, `created_at`, `updated_at`) VALUES
(2, 2, 3, 'kkkkkkkkkkkkkkkk', '<p>llllllllllllllllllllllllllllll</p>', 1, '2022-03-06 07:41:10', '2022-03-06 08:04:27');

-- --------------------------------------------------------

--
-- Table structure for table `massage_dept_hads`
--

CREATE TABLE `massage_dept_hads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `faculty_member_id` bigint(20) UNSIGNED NOT NULL,
  `short_massage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_massage` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massage_dept_hads`
--

INSERT INTO `massage_dept_hads` (`id`, `dept_id`, `faculty_member_id`, `short_massage`, `long_massage`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 12, 'ooooooooooooo', '<p>oooooooooooo</p>', 1, '2022-03-07 05:00:45', '2022-03-07 05:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `massage_v_c_s`
--

CREATE TABLE `massage_v_c_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `e_id` bigint(20) UNSIGNED NOT NULL,
  `short_massage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_massage` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massage_v_c_s`
--

INSERT INTO `massage_v_c_s` (`id`, `e_id`, `short_massage`, `long_massage`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'kkkkkkkkkkkkkkkk', '<p>ttttttttttttttttttttttt</p>', 1, '2022-03-06 06:14:54', '2022-03-06 07:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_24_173328_create_admins_table', 1),
(6, '2021_10_28_091444_create_start_sessions_table', 1),
(7, '2021_10_28_091531_create_programs_table', 1),
(8, '2021_10_28_091544_create_shifts_table', 1),
(9, '2021_10_28_091606_create_batches_table', 1),
(10, '2021_10_28_091632_create_group_or_sections_table', 1),
(11, '2021_10_30_150546_create_exam_sessions_table', 1),
(12, '2021_10_30_150730_create_exam_infos_table', 1),
(13, '2022_01_25_103251_create_faculties_table', 1),
(14, '2022_01_30_100312_create_dept__details_table', 1),
(15, '2022_01_30_132129_create_departments_table', 1),
(16, '2022_01_30_133043_create_studends_table', 1),
(17, '2022_01_30_181237_create_detp_sliders_table', 1),
(18, '2022_01_31_094043_create_vision_missions_table', 2),
(19, '2022_01_31_124355_create_notices_table', 3),
(20, '2022_01_31_132614_create_notices_table', 4),
(21, '2022_02_01_080932_create_facilities_table', 5),
(22, '2022_02_01_115629_create_clubs_table', 6),
(25, '2022_02_02_125536_create_home_events_table', 9),
(26, '2022_02_03_071706_create_dept_events_table', 10),
(27, '2022_02_03_090944_create_home_notable_alumnis_table', 11),
(28, '2022_02_03_103945_create_dept_notable_alumnis_table', 12),
(29, '2022_02_03_113528_create_dept_notable_alumnis_table', 13),
(30, '2022_02_06_085618_create_home_news_media_table', 14),
(31, '2022_02_06_091318_create_home_news_media_table', 15),
(32, '2022_02_06_100304_create_dept_news_media_table', 16),
(33, '2022_02_06_105113_create_home_addresses_table', 17),
(34, '2022_02_06_121100_create_dept_addresses_table', 18),
(35, '2022_02_06_123829_create_dept_addresses_table', 19),
(38, '2022_02_07_070920_create_faculty_members_table', 22),
(39, '2022_02_09_064804_create_club__committees_table', 23),
(40, '2022_02_07_082714_create_designations_table', 24),
(41, '2022_02_09_092916_create_club_details_table', 24),
(42, '2022_02_13_072004_create_class_exams_table', 25),
(43, '2022_02_13_114926_create_aca_programs_table', 26),
(44, '2022_02_15_082038_create_administrators_table', 27),
(46, '2022_02_02_092350_create_home_notices_table', 29),
(47, '2022_02_02_110044_create_dept_notices_table', 29),
(49, '2022_02_15_104809_create_employs_table', 30),
(51, '2022_02_20_135909_create_former_vice_chancellors_table', 31),
(52, '2022_02_22_114722_create_home_sliders_table', 32),
(53, '2022_02_22_131732_create_breaking_news_table', 33),
(54, '2022_02_23_083233_create_admission_promotions_table', 34),
(55, '2022_02_23_104739_create_admission_requirements_table', 35),
(56, '2022_02_23_125815_create_importent_dates_table', 36),
(57, '2022_02_24_061655_create_iqacs_table', 37),
(58, '2022_02_24_071344_create_iqac_workshops_table', 38),
(59, '2022_02_24_092901_create_iqac_resources_table', 39),
(60, '2022_02_24_102130_create_crhps_table', 40),
(61, '2022_02_24_110401_create_controller_of_examinations_table', 41),
(62, '2022_02_24_122155_create_controller_of_examination_applications_table', 42),
(63, '2022_02_27_102445_create_job_posts_table', 43),
(64, '2022_02_28_070310_create_job_applies_table', 44),
(76, '2022_03_01_132106_create_student_infos_table', 45),
(77, '2022_03_01_132213_create_student_permanent_addresses_table', 46),
(78, '2022_03_01_132251_create_student_prasent_addresses_table', 47),
(79, '2022_03_01_132419_create_student_adminastrations_table', 48),
(80, '2022_03_01_132443_create_student_education_table', 49),
(81, '2022_03_06_070109_create_aca_calenders_table', 50),
(86, '2022_03_06_110501_create_massage_v_c_s_table', 51),
(87, '2022_03_06_110556_create_massage_chairmen_table', 51),
(88, '2022_03_06_110639_create_massage_dept_hads_table', 51),
(89, '2022_03_06_110708_create_massage_deans_table', 51);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programs`
--

CREATE TABLE `programs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `program` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shifts`
--

CREATE TABLE `shifts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shift` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `start_sessions`
--

CREATE TABLE `start_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `startsession` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `start_sessions`
--

INSERT INTO `start_sessions` (`id`, `startsession`, `created_at`, `updated_at`) VALUES
(1, 'Spring 2022', NULL, NULL),
(2, 'Summer 2022', NULL, NULL),
(3, 'Fall 2022', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `studends`
--

CREATE TABLE `studends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_session_id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `shift_id` bigint(20) UNSIGNED NOT NULL,
  `batche_id` bigint(20) UNSIGNED NOT NULL,
  `group_or_section_id` bigint(20) UNSIGNED NOT NULL,
  `std_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departments_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_adminastrations`
--

CREATE TABLE `student_adminastrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `faculty_id` bigint(20) UNSIGNED NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `program_id` bigint(20) UNSIGNED NOT NULL,
  `session_id` bigint(20) UNSIGNED NOT NULL,
  `shift` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_adminastrations`
--

INSERT INTO `student_adminastrations` (`id`, `student_id`, `faculty_id`, `dept_id`, `program_id`, `session_id`, `shift`, `created_at`, `updated_at`) VALUES
(13, 20, 2, 2, 3, 2, 1, '2022-03-03 05:35:16', NULL),
(14, 21, 2, 2, 4, 1, 1, '2022-03-03 05:36:16', NULL),
(15, 22, 2, 2, 3, 2, 1, '2022-03-07 23:54:54', NULL),
(16, 23, 2, 2, 4, 2, 2, '2022-03-08 00:27:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_education`
--

CREATE TABLE `student_education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `exam_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `major_area` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_file` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_education`
--

INSERT INTO `student_education` (`id`, `student_id`, `exam_name`, `institute`, `major_area`, `passing_year`, `grade`, `upload_file`, `created_at`, `updated_at`) VALUES
(12, 20, '[\"Heidi Payne\",\"Michael Bryan\"]', '[\"Minerva Bruce\",\"Leroy Vazquez\"]', '[\"Dicta exercitation a\",\"Autem elit ex volup\"]', '[\"1999-07-27\",\"2013-02-28\"]', '[\"Incidunt harum odit\",\"Est repudiandae quib\"]', '[\"file\\/student_education\\/7200354441.pdf\",\"file\\/student_education\\/5736154182.pdf\"]', '2022-03-03 05:35:16', NULL),
(13, 21, '[\"Jamal Huff\",\"Myra Dominguez\"]', '[\"Carla Fields\",\"Xanthus Reese\"]', '[\"Eos in laboris natus\",\"Occaecat sunt modi\"]', '[\"2003-11-17\",\"1978-09-07\"]', '[\"Aliquam in accusamus\",\"Aut praesentium cons\"]', '[\"file\\/student_education\\/4739714086.pdf\",\"file\\/student_education\\/4131112120.pdf\"]', '2022-03-03 05:36:16', NULL),
(14, 22, '[\"Walter Robbins\",\"Chiquita Beach\"]', '[\"Thor Bullock\",\"Galvin Hayes\"]', '[\"Possimus quia volup\",\"Nostrum ut quidem fa\"]', '[\"1973-04-11\",\"2009-07-13\"]', '[\"Minus iste neque rat\",\"Eu reprehenderit cup\"]', '[\"file\\/student_education\\/1757046107.pdf\",\"file\\/student_education\\/7882908330.pdf\"]', '2022-03-07 23:54:54', NULL),
(15, 23, '[\"Tara Fletcher\",\"Byron David\"]', '[\"Colleen Kaufman\",\"McKenzie Hunt\"]', '[\"Et eius est dolor d\",\"Voluptatem Libero r\"]', '[\"2018-02-05\",\"2003-10-05\"]', '[\"Deleniti illum labo\",\"Debitis ex dolor seq\"]', '[\"file\\/student_education\\/3691476319.pdf\",\"file\\/student_education\\/5866318712.pdf\"]', '2022-03-08 00:27:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_infos`
--

CREATE TABLE `student_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `s_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `m_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enroll_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freedom_fighter` int(11) NOT NULL,
  `poor` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_infos`
--

INSERT INTO `student_infos` (`id`, `s_name`, `f_name`, `m_name`, `b_date`, `gender`, `nationality`, `enroll_date`, `phone`, `email`, `freedom_fighter`, `poor`, `created_at`, `updated_at`) VALUES
(20, 'Tate Martinez', 'Aquila Reeves', 'Zeph Walsh', '2001-11-24', 2, 'Natus quis sit ab s', '2022-03-03 11:35:16', '915', 'nilyhadav@mailinator.com', 1, 2, '2022-03-03 05:35:16', '2022-03-03 05:35:16'),
(21, 'Shelby Nixon', 'Kylan Velez', 'Daniel Jarvis', '1991-04-23', 1, 'Adipisci ipsum occa', '2022-03-03 11:36:16', '328', 'polasug@mailinator.com', 2, 1, '2022-03-03 05:36:16', '2022-03-03 05:36:16'),
(22, 'Walker Perkins', 'Bianca Short', 'Iliana Dickerson', '2017-02-24', 1, 'Repudiandae debitis', '2022-03-08 05:54:54', '55', 'hufejedaj@mailinator.com', 1, 2, '2022-03-07 23:54:54', '2022-03-07 23:54:54'),
(23, 'Candace Richard', 'Barbara Atkins', 'Linda Snow', '1970-10-14', 2, 'Illo veniam ut dese', '2022-03-08 06:27:48', '154', 'byhedu@mailinator.com', 1, 2, '2022-03-08 00:27:48', '2022-03-08 00:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `student_permanent_addresses`
--

CREATE TABLE `student_permanent_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_station` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_permanent_addresses`
--

INSERT INTO `student_permanent_addresses` (`id`, `student_id`, `country`, `district`, `thana`, `police_station`, `post_code`, `address`, `created_at`, `updated_at`) VALUES
(18, 20, 'In voluptate repelle', 'Earum nemo quia in t', 'Omnis quia vitae rec', 'Qui sunt blanditiis', 'Corrupti distinctio', 'Quas possimus omnis', '2022-03-03 05:35:16', NULL),
(19, 21, 'Minim reprehenderit', 'Necessitatibus conse', 'Nulla omnis illum v', 'Voluptatem Eiusmod', 'Quae ut expedita id', 'Consectetur est in', '2022-03-03 05:36:16', NULL),
(20, 22, 'Qui ut praesentium q', 'Veritatis est commo', 'Non excepturi dicta', 'Eu voluptate nihil v', 'Eum exercitationem v', 'Modi eveniet dolore', '2022-03-07 23:54:54', NULL),
(21, 23, 'Veniam in et deseru', 'Mollit incididunt do', 'Pariatur Commodo re', 'Modi deleniti dolori', 'Et aut ut a corrupti', 'Qui dolor incidunt', '2022-03-08 00:27:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student_prasent_addresses`
--

CREATE TABLE `student_prasent_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thana` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `police_station` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `student_prasent_addresses`
--

INSERT INTO `student_prasent_addresses` (`id`, `student_id`, `country`, `district`, `thana`, `police_station`, `post_code`, `address`, `created_at`, `updated_at`) VALUES
(17, 20, 'Dolor quasi dolor ve', 'In officia est volu', 'Ea placeat vero con', 'Facere et minima dui', 'Autem nulla non ad l', 'Quia velit vitae rep', '2022-03-03 05:35:16', NULL),
(18, 21, 'Consequuntur ullam q', 'Voluptas sit fugiat', 'Nemo qui maiores eni', 'Non a do dicta qui e', 'Quo in dolorum aut i', 'Nisi molestiae nisi', '2022-03-03 05:36:16', NULL),
(19, 22, 'Autem iusto et deser', 'Libero tenetur saepe', 'Tempora minus nihil', 'Non ea aperiam ex se', 'Repudiandae excepteu', 'Beatae sed omnis ven', '2022-03-07 23:54:54', NULL),
(20, 23, 'Possimus unde conse', 'Beatae aliquam offic', 'Incidunt ut eos eu', 'Quo voluptatem faci', 'Qui itaque mollitia', 'Eum sunt ea dolorum', '2022-03-08 00:27:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'akash', 'admin@gmail.com', NULL, '$2y$10$tnd6SWmAMmaw0AnBz0w13uioLeUVeMM0x2ujms8mOncWXvP5nGHj2', NULL, '2022-01-30 12:18:04', '2022-01-30 12:18:04');

-- --------------------------------------------------------

--
-- Table structure for table `vision_missions`
--

CREATE TABLE `vision_missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vision_missions`
--

INSERT INTO `vision_missions` (`id`, `image`, `vision_description`, `mission_description`, `dept_id`, `created_at`, `updated_at`) VALUES
(3, 'image/department/VisionMission/1643631613.jpg', '<p>AAAAAAAAAAAAAAAAAAAAAA wwwwwwwwwww</p>', '<p>BBBBBBBBBBBBBBBBBBBBBBBBB dddddddddddddddddd</p>', 2, '2022-01-31 05:42:27', '2022-01-31 06:20:14'),
(5, 'image/department/VisionMission/1643632011.jpg', '<p>dfdfdfdfdfdfdfdfdfdfdfdfdfdfdfdf eeeeeeeeeeeeeee</p>', '<p>AZZZZZZZZZZZZZZZZ dddddddddddddd</p>', 1, '2022-01-31 06:26:21', '2022-01-31 06:26:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aca_calenders`
--
ALTER TABLE `aca_calenders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aca_calenders_session_id_index` (`session_id`);

--
-- Indexes for table `aca_programs`
--
ALTER TABLE `aca_programs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `aca_programs_dept_id_index` (`dept_id`);

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_promotions`
--
ALTER TABLE `admission_promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_requirements`
--
ALTER TABLE `admission_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breaking_news`
--
ALTER TABLE `breaking_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_exams`
--
ALTER TABLE `class_exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `class_exams_dept_id_index` (`dept_id`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clubs_dept_id_index` (`dept_id`);

--
-- Indexes for table `club_details`
--
ALTER TABLE `club_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club_details_club_id_index` (`club_id`);

--
-- Indexes for table `club__committees`
--
ALTER TABLE `club__committees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `club__committees_club_id_index` (`club_id`);

--
-- Indexes for table `controller_of_examinations`
--
ALTER TABLE `controller_of_examinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `controller_of_examination_applications`
--
ALTER TABLE `controller_of_examination_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crhps`
--
ALTER TABLE `crhps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departments_faculty_id_index` (`faculty_id`);

--
-- Indexes for table `dept_addresses`
--
ALTER TABLE `dept_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_addresses_dept_id_index` (`dept_id`);

--
-- Indexes for table `dept_events`
--
ALTER TABLE `dept_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_events_dept_id_index` (`dept_id`);

--
-- Indexes for table `dept_news_media`
--
ALTER TABLE `dept_news_media`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_news_media_dept_id_index` (`dept_id`);

--
-- Indexes for table `dept_notable_alumnis`
--
ALTER TABLE `dept_notable_alumnis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_notable_alumnis_dept_id_index` (`dept_id`);

--
-- Indexes for table `dept_notices`
--
ALTER TABLE `dept_notices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dept_notices_dept_id_index` (`dept_id`);

--
-- Indexes for table `dept__details`
--
ALTER TABLE `dept__details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designations`
--
ALTER TABLE `designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detp_sliders`
--
ALTER TABLE `detp_sliders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detp_sliders_dept_id_index` (`dept_id`);

--
-- Indexes for table `employs`
--
ALTER TABLE `employs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employs_administrators_id_index` (`administrators_id`);

--
-- Indexes for table `exam_infos`
--
ALTER TABLE `exam_infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_infos_exam_session_id_index` (`exam_session_id`);

--
-- Indexes for table `exam_sessions`
--
ALTER TABLE `exam_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facilities_dept_id_index` (`dept_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty_members`
--
ALTER TABLE `faculty_members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faculty_members_dept_id_index` (`dept_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `former_vice_chancellors`
--
ALTER TABLE `former_vice_chancellors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_or_sections`
--
ALTER TABLE `group_or_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_addresses`
--
ALTER TABLE `home_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_events`
--
ALTER TABLE `home_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_news_media`
--
ALTER TABLE `home_news_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_notable_alumnis`
--
ALTER TABLE `home_notable_alumnis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_notices`
--
ALTER TABLE `home_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_sliders`
--
ALTER TABLE `home_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `importent_dates`
--
ALTER TABLE `importent_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iqacs`
--
ALTER TABLE `iqacs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iqac_resources`
--
ALTER TABLE `iqac_resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iqac_workshops`
--
ALTER TABLE `iqac_workshops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iqac_workshops_dept_id_index` (`dept_id`);

--
-- Indexes for table `job_applies`
--
ALTER TABLE `job_applies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_applies_job_id_index` (`job_id`);

--
-- Indexes for table `job_posts`
--
ALTER TABLE `job_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `massage_chairmen`
--
ALTER TABLE `massage_chairmen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `massage_chairmen_e_id_index` (`e_id`);

--
-- Indexes for table `massage_deans`
--
ALTER TABLE `massage_deans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `massage_deans_faculty_id_index` (`faculty_id`),
  ADD KEY `massage_deans_e_id_index` (`e_id`);

--
-- Indexes for table `massage_dept_hads`
--
ALTER TABLE `massage_dept_hads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `massage_dept_hads_dept_id_index` (`dept_id`),
  ADD KEY `massage_dept_hads_faculty_member_id_index` (`faculty_member_id`);

--
-- Indexes for table `massage_v_c_s`
--
ALTER TABLE `massage_v_c_s`
  ADD PRIMARY KEY (`id`),
  ADD KEY `massage_v_c_s_e_id_index` (`e_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `programs`
--
ALTER TABLE `programs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shifts`
--
ALTER TABLE `shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `start_sessions`
--
ALTER TABLE `start_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studends`
--
ALTER TABLE `studends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studends_start_session_id_index` (`start_session_id`),
  ADD KEY `studends_program_id_index` (`program_id`),
  ADD KEY `studends_shift_id_index` (`shift_id`),
  ADD KEY `studends_batche_id_index` (`batche_id`),
  ADD KEY `studends_group_or_section_id_index` (`group_or_section_id`),
  ADD KEY `studends_departments_id_index` (`departments_id`);

--
-- Indexes for table `student_adminastrations`
--
ALTER TABLE `student_adminastrations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_adminastrations_student_id_index` (`student_id`),
  ADD KEY `student_adminastrations_faculty_id_index` (`faculty_id`),
  ADD KEY `student_adminastrations_dept_id_index` (`dept_id`),
  ADD KEY `student_adminastrations_program_id_index` (`program_id`),
  ADD KEY `student_adminastrations_session_id_index` (`session_id`);

--
-- Indexes for table `student_education`
--
ALTER TABLE `student_education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_education_student_id_index` (`student_id`);

--
-- Indexes for table `student_infos`
--
ALTER TABLE `student_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_permanent_addresses`
--
ALTER TABLE `student_permanent_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_permanent_addresses_student_id_index` (`student_id`);

--
-- Indexes for table `student_prasent_addresses`
--
ALTER TABLE `student_prasent_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_prasent_addresses_student_id_index` (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vision_missions`
--
ALTER TABLE `vision_missions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vision_missions_dept_id_index` (`dept_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aca_calenders`
--
ALTER TABLE `aca_calenders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `aca_programs`
--
ALTER TABLE `aca_programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admission_promotions`
--
ALTER TABLE `admission_promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admission_requirements`
--
ALTER TABLE `admission_requirements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `breaking_news`
--
ALTER TABLE `breaking_news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `class_exams`
--
ALTER TABLE `class_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `club_details`
--
ALTER TABLE `club_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `club__committees`
--
ALTER TABLE `club__committees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `controller_of_examinations`
--
ALTER TABLE `controller_of_examinations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `controller_of_examination_applications`
--
ALTER TABLE `controller_of_examination_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crhps`
--
ALTER TABLE `crhps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_addresses`
--
ALTER TABLE `dept_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dept_events`
--
ALTER TABLE `dept_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_news_media`
--
ALTER TABLE `dept_news_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_notable_alumnis`
--
ALTER TABLE `dept_notable_alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dept_notices`
--
ALTER TABLE `dept_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dept__details`
--
ALTER TABLE `dept__details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designations`
--
ALTER TABLE `designations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `detp_sliders`
--
ALTER TABLE `detp_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employs`
--
ALTER TABLE `employs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `exam_infos`
--
ALTER TABLE `exam_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_sessions`
--
ALTER TABLE `exam_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty_members`
--
ALTER TABLE `faculty_members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `former_vice_chancellors`
--
ALTER TABLE `former_vice_chancellors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `group_or_sections`
--
ALTER TABLE `group_or_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_addresses`
--
ALTER TABLE `home_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home_events`
--
ALTER TABLE `home_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_news_media`
--
ALTER TABLE `home_news_media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `home_notable_alumnis`
--
ALTER TABLE `home_notable_alumnis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `home_notices`
--
ALTER TABLE `home_notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home_sliders`
--
ALTER TABLE `home_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `importent_dates`
--
ALTER TABLE `importent_dates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `iqacs`
--
ALTER TABLE `iqacs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `iqac_resources`
--
ALTER TABLE `iqac_resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `iqac_workshops`
--
ALTER TABLE `iqac_workshops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_applies`
--
ALTER TABLE `job_applies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_posts`
--
ALTER TABLE `job_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `massage_chairmen`
--
ALTER TABLE `massage_chairmen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `massage_deans`
--
ALTER TABLE `massage_deans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `massage_dept_hads`
--
ALTER TABLE `massage_dept_hads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `massage_v_c_s`
--
ALTER TABLE `massage_v_c_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programs`
--
ALTER TABLE `programs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shifts`
--
ALTER TABLE `shifts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `start_sessions`
--
ALTER TABLE `start_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `studends`
--
ALTER TABLE `studends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_adminastrations`
--
ALTER TABLE `student_adminastrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `student_education`
--
ALTER TABLE `student_education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `student_infos`
--
ALTER TABLE `student_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `student_permanent_addresses`
--
ALTER TABLE `student_permanent_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `student_prasent_addresses`
--
ALTER TABLE `student_prasent_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vision_missions`
--
ALTER TABLE `vision_missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `aca_calenders`
--
ALTER TABLE `aca_calenders`
  ADD CONSTRAINT `aca_calenders_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `start_sessions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `aca_programs`
--
ALTER TABLE `aca_programs`
  ADD CONSTRAINT `aca_programs_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `class_exams`
--
ALTER TABLE `class_exams`
  ADD CONSTRAINT `class_exams_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `clubs`
--
ALTER TABLE `clubs`
  ADD CONSTRAINT `clubs_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `club_details`
--
ALTER TABLE `club_details`
  ADD CONSTRAINT `club_details_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `club__committees`
--
ALTER TABLE `club__committees`
  ADD CONSTRAINT `club__committees_club_id_foreign` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `departments`
--
ALTER TABLE `departments`
  ADD CONSTRAINT `departments_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dept_addresses`
--
ALTER TABLE `dept_addresses`
  ADD CONSTRAINT `dept_addresses_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dept_events`
--
ALTER TABLE `dept_events`
  ADD CONSTRAINT `dept_events_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dept_news_media`
--
ALTER TABLE `dept_news_media`
  ADD CONSTRAINT `dept_news_media_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dept_notable_alumnis`
--
ALTER TABLE `dept_notable_alumnis`
  ADD CONSTRAINT `dept_notable_alumnis_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `dept_notices`
--
ALTER TABLE `dept_notices`
  ADD CONSTRAINT `dept_notices_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `detp_sliders`
--
ALTER TABLE `detp_sliders`
  ADD CONSTRAINT `detp_sliders_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employs`
--
ALTER TABLE `employs`
  ADD CONSTRAINT `employs_administrators_id_foreign` FOREIGN KEY (`administrators_id`) REFERENCES `administrators` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `exam_infos`
--
ALTER TABLE `exam_infos`
  ADD CONSTRAINT `exam_infos_exam_session_id_foreign` FOREIGN KEY (`exam_session_id`) REFERENCES `exam_sessions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `facilities`
--
ALTER TABLE `facilities`
  ADD CONSTRAINT `facilities_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faculty_members`
--
ALTER TABLE `faculty_members`
  ADD CONSTRAINT `faculty_members_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `iqac_workshops`
--
ALTER TABLE `iqac_workshops`
  ADD CONSTRAINT `iqac_workshops_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_applies`
--
ALTER TABLE `job_applies`
  ADD CONSTRAINT `job_applies_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `job_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `massage_chairmen`
--
ALTER TABLE `massage_chairmen`
  ADD CONSTRAINT `massage_chairmen_e_id_foreign` FOREIGN KEY (`e_id`) REFERENCES `employs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `massage_deans`
--
ALTER TABLE `massage_deans`
  ADD CONSTRAINT `massage_deans_e_id_foreign` FOREIGN KEY (`e_id`) REFERENCES `employs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `massage_deans_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `massage_dept_hads`
--
ALTER TABLE `massage_dept_hads`
  ADD CONSTRAINT `massage_dept_hads_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `massage_dept_hads_faculty_member_id_foreign` FOREIGN KEY (`faculty_member_id`) REFERENCES `faculty_members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `massage_v_c_s`
--
ALTER TABLE `massage_v_c_s`
  ADD CONSTRAINT `massage_v_c_s_e_id_foreign` FOREIGN KEY (`e_id`) REFERENCES `employs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `studends`
--
ALTER TABLE `studends`
  ADD CONSTRAINT `studends_batche_id_foreign` FOREIGN KEY (`batche_id`) REFERENCES `batches` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `studends_departments_id_foreign` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `studends_group_or_section_id_foreign` FOREIGN KEY (`group_or_section_id`) REFERENCES `group_or_sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `studends_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `programs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `studends_shift_id_foreign` FOREIGN KEY (`shift_id`) REFERENCES `shifts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `studends_start_session_id_foreign` FOREIGN KEY (`start_session_id`) REFERENCES `start_sessions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_adminastrations`
--
ALTER TABLE `student_adminastrations`
  ADD CONSTRAINT `student_adminastrations_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_adminastrations_faculty_id_foreign` FOREIGN KEY (`faculty_id`) REFERENCES `faculties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_adminastrations_program_id_foreign` FOREIGN KEY (`program_id`) REFERENCES `aca_programs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_adminastrations_session_id_foreign` FOREIGN KEY (`session_id`) REFERENCES `start_sessions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `student_adminastrations_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_education`
--
ALTER TABLE `student_education`
  ADD CONSTRAINT `student_education_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_permanent_addresses`
--
ALTER TABLE `student_permanent_addresses`
  ADD CONSTRAINT `student_permanent_addresses_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `student_prasent_addresses`
--
ALTER TABLE `student_prasent_addresses`
  ADD CONSTRAINT `student_prasent_addresses_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `student_infos` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `vision_missions`
--
ALTER TABLE `vision_missions`
  ADD CONSTRAINT `vision_missions_dept_id_foreign` FOREIGN KEY (`dept_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
