-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2016 at 03:18 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `awards`
--

CREATE TABLE `awards` (
  `award_id` int(11) NOT NULL,
  `cv_id` int(11) NOT NULL,
  `award_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `cv_id` int(11) NOT NULL,
  `cv_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `adress` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `social_network` text NOT NULL,
  `info` text NOT NULL,
  `profession` varchar(255) NOT NULL,
  `draft` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`cv_id`, `cv_name`, `user_id`, `full_name`, `phone_number`, `birth_date`, `adress`, `email`, `social_network`, `info`, `profession`, `draft`) VALUES
(1, 'VahabCv', 2, 'Vahab', 504265511, '03/11/1997', 'Baku, Mir Jalal 34, 39', 'valiyev.vahab@code.edu.az', 'fb.com/vahab.valiyev', 'More info about Vahab', 'Web Developer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `education_id` int(11) NOT NULL,
  `cv_id` int(11) NOT NULL,
  `education_date` varchar(255) NOT NULL,
  `education_name` varchar(255) NOT NULL,
  `education_degree` varchar(255) NOT NULL,
  `education_info` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`education_id`, `cv_id`, `education_date`, `education_name`, `education_degree`, `education_info`, `updated_at`, `created_at`) VALUES
(2, 1, '2013', 'Qafqaz University', 'Bachalor', 'World Economy 3rd class', '2016-04-23 03:57:20', '2016-04-23 03:57:20'),
(3, 1, '2018', 'Qafqaz', 'Bachalor', 'adwe', '2016-04-23 04:50:14', '2016-04-23 04:50:14'),
(4, 1, '2013-2017', 'Baku State University', 'Bachalor', 'Commerce Law', '2016-04-23 05:16:27', '2016-04-23 05:16:27'),
(5, 1, '2014-2015', 'Code Academy', 'Master', 'Extra Information', '2016-04-23 05:45:58', '2016-04-23 05:45:58'),
(6, 1, '2013-2018', 'Texniki Universitet', 'Bachalor', 'More information', '2016-04-23 08:04:18', '2016-04-23 08:04:18');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `language_id` int(11) NOT NULL,
  `cv_id` int(11) NOT NULL,
  `language_name` varchar(255) NOT NULL,
  `language_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('valiyev.vahab@gmail.com', 'cffbec0159e27a2d1fd664709f6be536090d06cf1b7948cb7ef51bad47abe076', '2016-04-23 00:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `cv_id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `skill_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
(2, 'Vahab', 'valiyev.vahab@gmail.com', '$2y$10$UmZ22IQ/tHTJBG3tKK7oIusrERQ/lynbuN3RXHpNJvsHj6y4fqWrO', 'nHl0HtItXwDkSv4UGWvj1FQ9BiZ9zCEAxjJcuHOtVoF61jdhrjOXCL9jv0xu', '2016-04-23 00:35:18', '2016-04-23 06:53:18'),
(3, 'Celil', 'celil.t@code.edu.az', '$2y$10$sdx0E9bHKcSdnZmR/Vc3HOooeKtCaU/ictVC6nTwxQXwXs3LcdQE6', 'KbtcZJvDyOCSEw3Ema2dPV9K4OT1t6UQ7vWv3YqE5pTvbkDqV0WCypmCUIIa', '2016-04-23 01:04:17', '2016-04-23 01:34:48');

-- --------------------------------------------------------

--
-- Table structure for table `works`
--

CREATE TABLE `works` (
  `work_id` int(11) NOT NULL,
  `cv_id` int(11) NOT NULL,
  `work_date` varchar(255) NOT NULL,
  `work_company` varchar(255) NOT NULL,
  `work_profession` varchar(255) NOT NULL,
  `work_info` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `works`
--

INSERT INTO `works` (`work_id`, `cv_id`, `work_date`, `work_company`, `work_profession`, `work_info`, `created_at`, `updated_at`) VALUES
(1, 1, '2014-2018', 'Facebook', 'Web Developer', 'More info will be here', '2016-04-23 03:56:35', '2016-04-23 03:56:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`award_id`),
  ADD KEY `cv_id` (`cv_id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`cv_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`education_id`),
  ADD KEY `cv_id` (`cv_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`language_id`),
  ADD KEY `cv_id` (`cv_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skill_id`),
  ADD KEY `cv_id` (`cv_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`work_id`),
  ADD KEY `cv_id` (`cv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awards`
--
ALTER TABLE `awards`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `awards`
--
ALTER TABLE `awards`
  ADD CONSTRAINT `awards_ibfk_1` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`cv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_ibfk_1` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`cv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `languages`
--
ALTER TABLE `languages`
  ADD CONSTRAINT `languages_ibfk_1` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`cv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`cv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `works_ibfk_1` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`cv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
