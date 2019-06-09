-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 05:54 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `programme_id` int(191) NOT NULL,
  `level_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coursetitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coursecode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecturer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `programme_id`, `level_id`, `coursetitle`, `coursecode`, `lecturer`, `created_at`, `updated_at`) VALUES
(1, 1, '1', 'Algebrae and Trigonometry', '123', 'Lilian Kyei', '2019-01-23 07:10:38', '2019-01-23 07:10:38'),
(2, 1, '2', 'Calculus I', '201', 'Lilian Kyei', '2019-01-28 16:47:52', '2019-01-28 16:47:52'),
(3, 2, '1', 'Introduction to Computer Science I', '101', 'Mr. Ernest Gyebi', '2019-01-29 18:29:45', '2019-01-29 18:29:45'),
(4, 2, '1', 'Introduction to Computer Science II', '102', 'Mr. John Ecklu', '2019-01-29 18:30:48', '2019-01-29 18:30:48'),
(5, 1, '1', 'Computational Mathematics', '134', 'Grace Okine', '2019-02-11 16:52:23', '2019-02-11 16:52:23'),
(6, 3, '1', 'Introduction to Statistics', '101', 'Abeiku Asare', '2019-02-17 22:18:57', '2019-02-17 22:18:57'),
(7, 4, '1', 'Micro Economics', '122', 'Dr. Kwabena Acheampong', '2019-03-31 03:02:23', '2019-03-31 03:02:23'),
(8, 4, '1', 'Macro Economics', '124', 'Mr. Kwadwo Okyere', '2019-03-31 04:34:26', '2019-03-31 04:34:26'),
(9, 3, '1', 'Elementary Probability', '102', 'Mr. Asamoah Gyan', '2019-04-02 16:34:50', '2019-04-02 16:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `datetime`
--

CREATE TABLE `datetime` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `level` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `level`, `created_at`, `updated_at`) VALUES
(1, 100, '0000-00-00 00:00:00', NULL),
(2, 200, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 300, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(34, '2018_12_19_210503_create_trains_table', 1),
(35, '2018_12_21_045415_create_routes_table', 1),
(36, '2018_12_24_183832_create_tickets_table', 1),
(74, '2019_01_16_131136_create_venue_table', 4),
(96, '2014_10_12_000000_create_users_table', 5),
(97, '2014_10_12_100000_create_password_resets_table', 5),
(98, '2018_09_13_210257_resgistration', 5),
(99, '2018_10_02_223624_users_profile_table', 5),
(100, '2019_01_16_131010_create_programmes_table', 5),
(101, '2019_01_16_131112_create_courses_table', 5),
(102, '2019_01_16_131211_create_datetime_table', 6),
(103, '2019_01_22_145024_create_venue_table', 7),
(104, '2019_01_29_131829_create_timetable_table', 7),
(105, '2019_02_12_000640_create_schedules_table', 7),
(106, '2019_02_12_100810_create_timetable_table', 8),
(107, '2019_02_16_203432_create_timetables_table', 9),
(108, '2019_03_14_123202_create_levels_table', 10);

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `telephone` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educationallev` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skill3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `programmes`
--

CREATE TABLE `programmes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `initials` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `programmes`
--

INSERT INTO `programmes` (`id`, `name`, `initials`, `created_at`, `updated_at`) VALUES
(1, 'Mathematics', 'MATH', '2019-01-28 21:14:32', '2019-01-28 21:14:32'),
(2, 'Computer Science', 'CSCD', '2019-01-29 18:23:13', '2019-01-29 18:23:13'),
(3, 'Statistics', 'STAT', '2019-02-17 22:00:46', '2019-02-17 22:00:46'),
(4, 'Economics', 'ECONS', '2019-02-18 01:25:31', '2019-02-18 01:25:31'),
(5, 'Academic Directorate', NULL, '2019-02-20 06:32:19', '2019-02-20 06:32:19');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `othername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int(10) UNSIGNED NOT NULL,
  `depature` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `arrival` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `train` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tickettype` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sales_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `timefrom` time NOT NULL,
  `timeto` time NOT NULL,
  `venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timetables`
--

CREATE TABLE `timetables` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `programme_id` int(191) NOT NULL,
  `date` date NOT NULL,
  `timefrom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timeto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `timetables`
--

INSERT INTO `timetables` (`id`, `course_id`, `programme_id`, `date`, `timefrom`, `timeto`, `venue`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-02-04', '11:00:00', '12:00:00', 'JQB', '2019-02-17 02:43:53', '2019-02-17 02:43:53'),
(2, 2, 1, '2019-02-26', '09:00:00', '11:00:00', 'JQB 13', '2019-02-17 04:55:33', '2019-02-17 04:55:33'),
(3, 5, 1, '2019-02-28', '07:00:00', '09:30:00', 'NNB1', '2019-02-19 19:27:26', '2019-02-19 19:27:26'),
(4, 3, 2, '2019-02-12', '12:00:00', '14:30:00', 'LOC1', '2019-02-19 19:37:23', '2019-02-19 19:37:23'),
(5, 4, 2, '2019-02-06', '12:00:00', '14:15:00', 'NB3', '2019-02-19 19:38:40', '2019-02-19 19:38:40'),
(6, 7, 1, '2019-03-12', '1:00 pm', '3:00 pm', 'K.A.B', '2019-03-31 05:54:17', '2019-03-31 05:54:17'),
(7, 8, 1, '2019-04-23', '5:00 pm', '7:00 pm', 'RKO LAB', '2019-04-02 18:32:55', '2019-04-02 18:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `programme_id` int(191) NOT NULL,
  `level` int(191) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `programmename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `programme_id`, `level`, `name`, `email`, `programmename`, `studentid`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `admin`) VALUES
(1, 1, 100, 'Aryee Roland Nii Ayi', 'niiayikumaaryee@gmail.com', 'Mathematics', '10472376', NULL, '$2y$10$Xu0XwLxy0F6YorWFKJgxFOskPlBA3S45w.gETOw/DP3n/Iz6Yr9WW', 'mRnq1RuL2ujV0eVlAU0kpLQ982SIxui6GbdSE0RwRCyVD1CxMVdgW83ZDZLu', '2019-01-23 06:09:27', '2019-01-23 06:09:27', 1),
(2, 2, 100, 'Eric Owusu Jr.', 'ericowus@gmail.com', 'Computer Science', '10234567', NULL, '$2y$10$GuC.3fYcx8mds/PZ5GOEt.v5D6RKzJwRDkvGs8sGgptkPhjGSjk4C', 'sa5c1DIF7LLkxr2wX0O3keLUmk9txEysPmZ3zt0LK4cOrU4mr55oHHPyCN4y', '2019-01-29 18:32:03', '2019-01-29 18:32:03', 0),
(3, 3, 200, 'Gershon Ashiatey', 'gershonash@yahoo.com', 'Statistics', '10492345', NULL, '$2y$10$FpVnUnraDrnHwIyVsGn.MO86EIUt4h0A89zyaTeQ2eyx3WMsYpbOW', NULL, '2019-02-17 21:56:21', '2019-02-17 21:56:21', 0),
(4, 5, 200, 'Kwadwo Oppong Owusu', 'putupringlez@gmail.com', 'Academic Directorate', '10223344', NULL, '$2y$10$4k7qM.qG9E6p9eYn7tpfKO6eQwn0CdBqtjGZ6/IrW7.kC7rnapJum', NULL, '2019-02-20 06:40:58', '2019-02-20 06:40:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `venues`
--

CREATE TABLE `venues` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(191) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `venues`
--

INSERT INTO `venues` (`id`, `course_id`, `name`, `room`, `created_at`, `updated_at`) VALUES
(1, 1, 'Larway Orraca Tetteh', '309', '2019-01-23 07:14:16', '2019-01-23 07:14:16'),
(2, 2, 'JQB', '23', '2019-02-10 04:59:35', '2019-02-10 04:59:35'),
(4, 5, 'K.A BUSIA', 'room2', '2019-02-11 16:34:06', '2019-02-11 16:34:06'),
(5, 3, 'JQB', '15', '2019-02-11 17:54:03', '2019-02-11 17:54:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datetime`
--
ALTER TABLE `datetime`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programmes`
--
ALTER TABLE `programmes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetables`
--
ALTER TABLE `timetables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venues`
--
ALTER TABLE `venues`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `datetime`
--
ALTER TABLE `datetime`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `programmes`
--
ALTER TABLE `programmes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetables`
--
ALTER TABLE `timetables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `trains`
--
ALTER TABLE `trains`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venues`
--
ALTER TABLE `venues`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
