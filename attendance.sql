-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 11:58 PM
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
-- Database: `smart-attendance`
--
CREATE DATABASE IF NOT EXISTS `smart-attendance` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `smart-attendance`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'المسئول', 'admin@admin.com', '$2y$10$QPfYYcoTqmuAB2eDI6IKm.E.xGYOtjMWy2p.EGSSpDi.3ZgeW3/W2', NULL, '2022-11-27 15:49:28', '2022-11-27 15:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(10) UNSIGNED NOT NULL,
  `lecture_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `entrance_time` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `lecture_id`, `student_id`, `entrance_time`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '2022-11-20 00:09:02', '2022-11-19 22:09:02', '2022-11-19 22:09:02'),
(2, 2, 8, '2022-11-22 00:12:00', '2022-11-21 22:12:00', '2022-11-21 22:12:00'),
(3, 1, 9, '2022-11-20 00:09:01', '2022-11-19 22:09:01', '2022-11-19 22:09:01'),
(4, 2, 9, '2022-11-22 00:12:05', '2022-11-21 22:12:05', '2022-11-21 22:12:05'),
(5, 2, 13, '2022-11-22 00:12:03', '2022-11-21 22:12:03', '2022-11-21 22:12:03'),
(6, 4, 2, '2022-11-20 09:01:00', '2022-11-20 07:01:00', '2022-11-20 07:01:00'),
(7, 4, 12, '2022-11-20 09:00:00', '2022-11-20 07:00:00', '2022-11-20 07:00:00'),
(8, 4, 15, '2022-11-20 09:10:00', '2022-11-20 07:10:00', '2022-11-20 07:10:00'),
(9, 5, 8, '2022-11-22 11:01:00', '2022-11-22 09:01:00', '2022-11-22 09:01:00'),
(10, 5, 13, '2022-11-22 11:05:00', '2022-11-22 09:05:00', '2022-11-22 09:05:00');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'قسم الرياضيات', 'يهتم بعلوم الرياضيات البحته والتطبيقية والخوارزميات ', NULL, NULL),
(2, 'قسم اللغات ', ' يهتم  بااللغات ', NULL, NULL),
(3, 'قسم العلوم ', ' يهتم بالعلوم التطبيقيه وعلوم الطبيعة', NULL, NULL),
(4, 'قسم الحاسبات ', 'يهتم بعلوم الحاسب والبرمجة ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `student_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`id`, `subject_id`, `student_id`, `created_at`, `updated_at`) VALUES
(1, 16, 8, '2022-11-28 22:09:09', '2022-11-28 22:09:09'),
(2, 16, 9, '2022-11-28 22:09:09', '2022-11-28 22:09:09'),
(3, 16, 13, '2022-11-28 22:09:09', '2022-11-28 22:09:09'),
(4, 11, 2, '2022-11-28 22:51:06', '2022-11-28 22:51:06'),
(5, 11, 12, '2022-11-28 22:51:06', '2022-11-28 22:51:06'),
(6, 11, 15, '2022-11-28 22:51:06', '2022-11-28 22:51:06'),
(7, 11, 16, '2022-11-28 22:51:06', '2022-11-28 22:51:06'),
(8, 11, 19, '2022-11-28 22:51:06', '2022-11-28 22:51:06'),
(9, 11, 20, '2022-11-28 22:51:06', '2022-11-28 22:51:06'),
(10, 12, 2, '2022-11-28 23:12:08', '2022-11-28 23:12:08'),
(11, 12, 12, '2022-11-28 23:12:08', '2022-11-28 23:12:08'),
(12, 12, 15, '2022-11-28 23:12:08', '2022-11-28 23:12:08'),
(13, 12, 20, '2022-11-28 23:21:11', '2022-11-28 23:21:11'),
(14, 15, 8, '2022-11-28 23:48:16', '2022-11-28 23:48:16'),
(15, 15, 9, '2022-11-28 23:48:16', '2022-11-28 23:48:16'),
(16, 15, 13, '2022-11-28 23:48:16', '2022-11-28 23:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `lectures`
--

CREATE TABLE `lectures` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qr_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qr_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'متاح',
  `subject_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lectures`
--

INSERT INTO `lectures` (`id`, `title`, `qr_code`, `qr_url`, `status`, `subject_id`, `created_at`, `updated_at`) VALUES
(1, 'المحاضرة الاولي', 'yBsVq9XAaZ', 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=yBsVq9XAaZ', 'انتهت', 16, '2022-11-19 22:09:00', '2022-11-20 07:00:00'),
(2, 'المحاضرة الثانية', 'DwcnkPo7Eh', 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=DwcnkPo7Eh', 'انتهت', 16, '2022-11-22 10:00:00', '2022-11-22 10:00:00'),
(3, 'المحاضرة الاولي في مادة البصريات', 'bsYWxYkq5V', 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=bsYWxYkq5V', 'انتهت', 11, '2022-11-20 08:00:00', '2022-11-20 08:00:00'),
(4, 'محاضرة اولي كمياء عضوية', 'GboyXfJSVE', 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=GboyXfJSVE', 'انتهت', 12, '2022-11-20 07:00:00', '2022-11-20 07:00:00'),
(5, 'محاضرة 1 نظم تشغيل حاسب', 'DKNint795H', 'https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=DKNint795H', 'انتهت', 15, '2022-11-22 09:00:00', '2022-11-28 23:56:18');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_09_26_023741_create_admins_table', 1),
(3, '2022_10_31_001838_create_departments_table', 1),
(4, '2022_10_31_001839_create_students_table', 1),
(5, '2022_10_31_001900_create_professors_table', 1),
(6, '2022_10_31_011901_create_subjects_table', 1),
(7, '2022_10_31_011902_create_lectures_table', 1),
(8, '2022_10_31_020211_attendance', 1),
(9, '2022_10_31_022733_enrollment', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`id`, `name`, `email`, `phone`, `photo`, `gender`, `department_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'عايد معن', 'ayed.moeen@email.net', '69577373', NULL, 'ذكر', 4, '$2y$10$sJop1ZqfP/REyn1.9IOb9OBVzapgqVKr2s6NQfFF/gtiYFCHJ1Psu', '2022-11-27 15:49:28', '2022-11-27 15:49:28'),
(2, 'جهاد غازي', 'gehad.ghazy@email.net', '69591127', NULL, 'ذكر', 4, '$2y$10$DKmKpKAof2eeOxq4eDy.sOhYqC8gAd/go/O9Zfr/utb8Nziq5D0Hy', '2022-11-27 15:49:28', '2022-11-27 15:49:28'),
(3, 'مثنى داوود', 'mosana.dawood@email.net', '69522983', NULL, 'ذكر', 2, '$2y$10$W5jTShayCqv3ropvxBxrx.tqeKbaBN33WniaeMYC4YmdxmjIA95SS', '2022-11-27 15:49:28', '2022-11-27 15:49:28'),
(4, 'عبدالحميد كامل', 'abdelhamid.kamel@email.net', '69571787', NULL, 'ذكر', 4, '$2y$10$QFW.RxvVG07DpMOYVzgvmekytWasf0DKWRx2Z5/BHsOMZFbZBIe1e', '2022-11-27 15:49:28', '2022-11-27 15:49:28'),
(5, 'قصي عبد المجيد', 'kosay.abdelmagid@email.net', '69572254', NULL, 'ذكر', 3, '$2y$10$FVpsJuJYs8FiKzKW0lFEE.Jw4fRetNykFNzabyBgL258OihpP3DUS', '2022-11-27 15:49:28', '2022-11-27 15:49:28'),
(6, 'البراء مجد', 'elbaraa.magd@@email.net', '69557121', NULL, 'ذكر', 1, '$2y$10$aPI1Nint6piSCwVcCg9iHeSlLWk3qj4Qsb2NX5T0VsPiqpVdsnH1G', '2022-11-27 15:49:28', '2022-11-27 15:49:28'),
(7, 'هادي بدر', 'hady.badr@email.net', '69511179', NULL, 'ذكر', 2, '$2y$10$iyEkMTQxgUEB7Qg/AwzDPONVmODlODzcGcs4TvEGgOoxI8zzbLLCa', '2022-11-27 15:49:28', '2022-11-27 15:49:28'),
(8, 'نائل عبدالجواد', 'nael.abdelgaowad@email.net', '69576455', NULL, 'ذكر', 1, '$2y$10$KxSdnNxqlrPJdx.yNrFsO.Mrn5B2oi1lOKQGbsEr1Jl5HPVUK4t9S', '2022-11-27 15:49:28', '2022-11-27 15:49:28'),
(9, 'أواس مضر', 'aows.moder@email.net', '69564771', NULL, 'ذكر', 2, '$2y$10$hMn7/52f8HC3ei5/ExG.o.N.mORCc298jzK4Jh4H5OV58HkztVPB.', '2022-11-27 15:49:28', '2022-11-27 15:49:28'),
(10, 'مروان عبدالمهيمن', 'marawan.abdelmohaymen@email.net', '69552593', NULL, 'ذكر', 2, '$2y$10$7s9k9ns68uUjincJRyDPg.h21kBR5JoL754DLPT3OBTS00Qdevpr.', '2022-11-27 15:49:28', '2022-11-27 15:49:28');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(10) UNSIGNED NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `photo`, `gender`, `level`, `department_id`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ذياب مامون', 'zyab.maamoun@email.net', '69588247', NULL, 'ذكر', 'المستوى الرابع', 1, '$2y$10$.mlaqzdSJQOs4li.QGrP/Og50cAYZ7r/FuLBQp7gyZIfiKuEv.35O', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(2, 'بلال هادي', 'belal.hady@email.net', '69519128', NULL, 'ذكر', 'المستوى الثانى', 3, '$2y$10$PcGad97Qkid72/dVuxKVK.f14KNmjYLk8.xy6d6fRDH074DgsHvEK', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(3, 'عتيبه بشار', 'otiba.bashar@email.net', '69542973', NULL, 'ذكر', 'المستوى الاول', 1, '$2y$10$uPwpkI.lm1vnUltrTf2C9.5gMaJEx8GtgxqnLnL.vhBKSyajH7oPu', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(4, 'اسعد غالب', 'asaad.ghaleb@email.net', '69528816', NULL, 'ذكر', 'المستوى الرابع', 2, '$2y$10$DjeRzNnU8NrXlumkqcSZEeU.C7KYL1Cq7mlWthQznupiCfXcWFrTG', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(5, 'شهم شهاب', 'shahm.shehab@email.net', '69535534', NULL, 'ذكر', 'المستوى الرابع', 1, '$2y$10$ZxWkkBlYfFXywm2rxy1pN.mYUCHJw/dLJaZ7Xgm6U0vnhRyFv6Yz2', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(6, 'محمود سري', 'mahmooud.sery@email.net', '69513419', NULL, 'ذكر', 'المستوى الرابع', 2, '$2y$10$agquWRT/.U2G054MktVeq.RPS5D4yJ65qziPgAqxgRKUoLtHwAmDa', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(7, 'رضوان واصف', 'radwan.wasef@email.net', '69599848', NULL, 'ذكر', 'المستوى الاول', 1, '$2y$10$expRbB6cOLyngwo13vS4BuA/RqFiOxCYnsXcd9ItofzH7OjCTOAfK', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(8, 'أيمن غدير', 'ayman.ghadeer@email.net', '69545772', NULL, 'ذكر', 'المستوى الثالث', 4, '$2y$10$EPys2VXXUuwBpSx6ERh/gu2WW7UqvZDwH8N6wT6ftR.bhcpMQJA9i', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(9, 'كايد داوود', 'kaeeed.dawwod@email.net', '69525234', NULL, 'ذكر', 'المستوى الثالث', 4, '$2y$10$FMMgzAM75eiSuFyPr3rbauYwvTGN6ycF5xPGy1f6npXRwsA46UXKW', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(10, 'خضر بلال', 'kedr.belal@email.net', '69549829', NULL, 'ذكر', 'المستوى الاول', 2, '$2y$10$eCJDFd5xV6/SH7T2eXkbcOws0CUAlTJN.dU6rIv3oMCWJFGuCrEcy', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(11, 'راضي عبدالمجيد', 'rady.abdelhamid@email.net', '69535522', NULL, 'ذكر', 'المستوى الثالث', 2, '$2y$10$aPKatv5/D.b/yN4i2PldDOA0wvlNsN/O8sAhqMC7HFbB0NDWJ/s1q', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(12, 'كرم جعفر', 'karam.gafaar@email.net', '69569464', NULL, 'ذكر', 'المستوى الاول', 3, '$2y$10$gTppAh7goKGYWebRh1XbB.psyY8X0q7Zd9Wv0hA6Xm.KcUPPMBXhy', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(13, 'يوسف سعود', 'yousef.saaaoud@email.net', '69549621', NULL, 'ذكر', 'المستوى الثالث', 4, '$2y$10$esRACoWV4lPQH96zPtbYfej/UHoqShm9Lltf/3EZZXoN3YcRwHHfm', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(14, 'ادريس عزت', 'edreess.ezzat@email.net', '69573128', NULL, 'ذكر', 'المستوى الرابع', 2, '$2y$10$O93iEZVIfpUXZ0FEB9RzxemVif3RyG/qtgDMiWQBtiYqO/aXZDhFO', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(15, 'بليغ زاهر', 'baellgh.zaher@email.net', '69563334', NULL, 'ذكر', 'المستوى الرابع', 3, '$2y$10$f35YYdAKVUpMAs4yVC2kkOVTX/FBD80sYUBt44UBIUC633BHWvfYS', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(16, 'بشر نزيه', 'beshr.nazieh@email.net', '69546624', NULL, 'ذكر', 'المستوى الرابع', 3, '$2y$10$N5x5V2S5.8tCtJmn6QLNQeIrVTB5KoxzLphcQhcZqHsPp5.IfPWOy', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(17, 'نديم ورد', 'nadeem.ward@email.net', '69524391', NULL, 'ذكر', 'المستوى الثانى', 2, '$2y$10$EC7JMeeUt/PNThlYSe3E1OsUpu49yVGQ7GG.97Xq0Gxx2Asp703jO', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(18, 'هانى حسين', 'hany.hussain@email.net', '69565268', NULL, 'ذكر', 'المستوى الثانى', 1, '$2y$10$NJZddO1mgblok8iqHD4z/uMsaKvaLQ1W.u1rIdAR8NE1hOmRWq0du', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(19, 'اوس يمان', 'aws.yamaan@email.net', '69599789', NULL, 'ذكر', 'المستوى الرابع', 3, '$2y$10$frLGhBNC2t8PhlPT2tZJA.hOqWnV1O1yRLLizyM6B4/BI9r7eo3FK', '2022-11-27 15:49:29', '2022-11-27 15:49:29'),
(20, 'اكرم نهار', 'akram.nahar@email.net', '69511821', NULL, 'ذكر', 'المستوى الثانى', 3, '$2y$10$qbQxiMo7Rkmsv7BX2MIq7.QPznUyEJuuf4pAZfQHt93D0/g/AXUta', '2022-11-27 15:49:29', '2022-11-27 15:49:29');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'لم يتم الرد',
  `department_id` int(10) UNSIGNED NOT NULL,
  `professor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `content`, `approval`, `department_id`, `professor_id`, `created_at`, `updated_at`) VALUES
(1, 'التفاضل', ' محتوي مادة التفاضل', 'مرفوضة', 1, 8, NULL, NULL),
(2, 'معادلات تفاضلية', ' محتوي مادة المعادلات التفاضلية ', 'لم يتم الرد', 1, 6, NULL, '2022-11-28 18:33:00'),
(3, 'التكامل', ' محتوي مادة  التكامل ', 'مرفوضة', 1, 8, NULL, NULL),
(4, 'الجبر الخطي', ' محتوي مادة الجبر الخطي ', 'لم يتم الرد', 1, 6, NULL, '2022-11-28 18:33:01'),
(5, 'الهندسة', ' محتوي مادة  الهندسة ', 'مرفوضة', 1, 8, NULL, '2022-11-28 18:33:02'),
(6, 'نظرية اعداد', ' محتوي مادة نظرية اعداد ', 'لم يتم الرد', 1, 6, NULL, '2022-11-28 18:33:03'),
(7, 'ترجمة', ' محتوي مادة ترجمة  ', 'مرفوضة', 2, 9, NULL, '2022-11-28 18:33:18'),
(8, 'صوتيات اللغة ', ' محتوي مادة صوتيات اللغة ', 'لم يتم الرد', 2, 3, NULL, NULL),
(9, 'قواعد اللغة الانجليزية', ' محتوي مادة قواعد اللغة الانجليزية', 'مرفوضة', 2, 3, NULL, '2022-11-28 18:33:19'),
(10, ' الدراما الانجليزية', ' محتوي مادة الدراما الانجليزية', 'لم يتم الرد', 2, 7, NULL, NULL),
(11, 'بصريات', ' محتوي مادة بصريات', 'موافقة', 3, 5, NULL, '2022-11-28 18:33:21'),
(12, ' كمياء عضوية ', ' محتوي مادة مياء عضوية ', 'موافقة', 3, 5, NULL, NULL),
(13, 'كمياء غير عضوية ', ' محتوي كمياء غير عضوية  ', 'لم يتم الرد', 3, 5, NULL, '2022-11-28 18:33:07'),
(14, 'كمياء تحليلة', ' محتوي كمياء تحليلة ', 'موافقة', 3, 5, NULL, '2022-11-28 18:33:08'),
(15, 'نظم تشغيل حاسب', ' نظم تشغيل حاسب', 'لم يتم الرد', 4, 2, NULL, NULL),
(16, '  قواعد بيانات ', '  محتوي قواعد بيانات ', 'موافقة', 4, 4, NULL, '2022-11-28 18:33:05'),
(17, 'شبكات الحاسب', '  محتوي شبكات الحاسب ', 'موافقة', 4, 2, NULL, NULL),
(18, 'مبادئ برمجة', '  محتوي مبادئ برمجة  ', 'لم يتم الرد', 4, 1, NULL, '2022-11-28 18:48:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attendance_lecture_id_foreign` (`lecture_id`),
  ADD KEY `attendance_student_id_foreign` (`student_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `enrollment_subject_id_foreign` (`subject_id`),
  ADD KEY `enrollment_student_id_foreign` (`student_id`);

--
-- Indexes for table `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lectures_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `professors_email_unique` (`email`),
  ADD KEY `professors_department_id_foreign` (`department_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD KEY `students_department_id_foreign` (`department_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_department_id_foreign` (`department_id`),
  ADD KEY `subjects_professor_id_foreign` (`professor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_lecture_id_foreign` FOREIGN KEY (`lecture_id`) REFERENCES `lectures` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `attendance_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD CONSTRAINT `enrollment_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrollment_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lectures`
--
ALTER TABLE `lectures`
  ADD CONSTRAINT `lectures_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `professors`
--
ALTER TABLE `professors`
  ADD CONSTRAINT `professors_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_department_id_foreign` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subjects_professor_id_foreign` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
