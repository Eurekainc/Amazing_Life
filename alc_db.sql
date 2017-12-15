-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2017 at 02:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` int(11) NOT NULL,
  `featured` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `author`, `featured`, `created_at`, `updated_at`) VALUES
(1, 'Hello App', 'The quick brown fox jumps over the lazy dogg.', 'image/pic.jpg', 1, 1, '2017-11-02 12:04:15', '2017-11-02 12:04:15'),
(2, 'My second Article', 'The quick brown fox jumps over the lazy Dogg.', '/images/data.jpg', 1, 1, '2017-11-03 07:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `author` int(11) NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL,
  `video_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department`, `created_at`, `updated_at`) VALUES
(1, 'Singles Department', NULL, NULL),
(2, 'Men\'s Department', NULL, NULL),
(3, 'Women\'s Department', NULL, NULL),
(4, 'Children\'s', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `group` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `department`, `group`) VALUES
(1, 1, 'Group 1'),
(2, 1, 'Group 2');

-- --------------------------------------------------------

--
-- Table structure for table `group_activities`
--

CREATE TABLE `group_activities` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `group_activities`
--

INSERT INTO `group_activities` (`id`, `user_id`, `group`, `department`, `content`, `created_at`, `updated_at`) VALUES
(20, 2, 1, 1, 'Hello, Victory is mine at last!!!!!!!!!!!!!!!!!!!', '2017-12-15 11:26:05', '2017-12-15 11:26:05'),
(21, 6, 1, 1, 'The quick brown fox jumps over the lazy Dog!', '2017-12-15 13:29:48', '2017-12-15 11:26:46'),
(22, 6, 1, 1, 'Sorry, i meant to say Hello. :)', '2017-12-15 11:27:06', '2017-12-15 11:27:06'),
(23, 2, 1, 1, 'Hey Blake, long time no see :D how ave you been?', '2017-12-15 11:29:04', '2017-12-15 11:29:04'),
(24, 6, 1, 1, 'So, wat are you up to?', '2017-12-15 11:31:36', '2017-12-15 11:31:36'),
(25, 2, 1, 1, 'Nothing much, just coding thats all :). \r\nYou?', '2017-12-15 11:32:03', '2017-12-15 11:32:03'),
(26, 6, 1, 1, 'Surfing the Interwebs, the day is moving rather slow.... :/', '2017-12-15 11:34:02', '2017-12-15 11:34:02'),
(28, 9, 2, 1, 'Hello, Tis is James, i\'m New here', '2017-12-15 11:40:51', '2017-12-15 11:40:51'),
(29, 10, 2, 1, 'Hai James, Lara here. I\'m also new :) . Nice to meet you!', '2017-12-15 11:46:13', '2017-12-15 11:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2017_10_08_172943_create_table_departments', 1),
(2, '2017_10_08_173109_create_table_resources', 1),
(3, '2017_10_08_173149_create_table_events', 1),
(4, '2017_10_08_173230_create_table_articles', 1),
(5, '2017_10_08_173306_create_table_comments', 1),
(6, '2017_10_08_173435_create_table_videos', 1);

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` int(11) DEFAULT '0',
  `group` int(11) NOT NULL DEFAULT '0',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `home_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `dob`, `gender`, `department`, `group`, `email`, `phone`, `home_address`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Thulani Tembo', '', '1996-06-07', 'Male', 1, 1, 'tembothulani@gmail.com', '+260976245430', '11o, Chudleigh', '$2y$10$nvZYsjiOaIvlZdSBrH7HAuAKvNSMo2N8D.bt0KzmzdW3mE4Kn3Uxi', 'jTbSaZurgJLlKM3WxtYHyhcJ2EpgLcbGJRL4YNllbXKptI87ganQQsPzStt2', '2017-11-04 01:38:19', '2017-12-15 11:03:49'),
(6, 'Blake Live', '', '2017-11-01', 'Female', 1, 1, 'blake@gmail.com', '+260976245430', 'USA', '$2y$10$v4Mzsls2LgCcivg3Ch2kmeuQ4bOvLrVjeD5HSk7HKPRd3bLPVWYxm', 'GxIigtpCORr4lZbehKl3pcY1mNfXnyk8cjfcZ4PyhtIx7KOTxNr20gjGMMTQ', '2017-11-14 05:08:15', '2017-12-13 20:03:10'),
(9, 'James Dolce', NULL, '1996-12-07', 'Male', 1, 2, 'james@gmail.com', '0962454530', 'Chelstone', '$2y$10$UJdI1AfRh8TIBy/qKGZDNegENwfPIHu3fITxjMO754ppUgx0UqOK2', NULL, '2017-12-15 11:38:43', '2017-12-15 11:38:43'),
(10, 'Lara Croft', NULL, '1989-01-10', 'Female', 1, 2, 'lara@gmail.com', '0976789898', 'Chalo Trust', '$2y$10$v2BCuRhX4KoiCmS3M3RRLujUHfcQxVSplPdXaNQbirMMe8Nig30tm', NULL, '2017-12-15 11:44:50', '2017-12-15 11:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_activities`
--
ALTER TABLE `group_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `group_activities`
--
ALTER TABLE `group_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
