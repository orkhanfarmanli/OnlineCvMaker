-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2016 at 11:00 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `problem`
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

--
-- Dumping data for table `awards`
--

INSERT INTO `awards` (`award_id`, `cv_id`, `award_text`) VALUES
(6, 5, 'user 5 edited'),
(7, 6, 'user 6 awardsn updated'),
(8, 16, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non'),
(9, 17, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in  cupidatat non');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `cv_id` int(11) NOT NULL,
  `cv_name` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `draft` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`cv_id`, `cv_name`, `user_id`, `created_at`, `draft`) VALUES
(4, 'Vahab', 2, '2016-05-07 10:25:33', 0),
(5, 'Vahab', 2, '2016-05-07 10:27:01', 0),
(6, 'Vahab', 2, '2016-05-07 10:29:10', 0),
(7, 'Vahab', 2, '2016-05-07 13:31:20', 0),
(8, 'Samir', 5, '2016-05-07 13:32:39', 0),
(9, 'Samir', 5, '2016-05-07 14:01:58', 0),
(10, 'Vahab', 2, '2016-05-07 14:06:28', 0),
(11, 'Vahab', 2, '2016-05-09 06:26:52', 0),
(12, 'Vahab', 2, '2016-05-09 07:46:45', 0),
(13, 'Vahab', 2, '2016-05-09 08:12:04', 0),
(14, 'Vahab', 2, '2016-05-09 08:33:29', 0),
(15, 'Vahab', 2, '2016-05-09 08:38:16', 0),
(16, 'Vahab', 2, '2016-05-09 08:42:35', 0),
(17, 'Vahab', 2, '2016-05-09 08:44:50', 0);

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
(44, 5, 'user 5 edu', 'user 5 edu', 'user 5 edu', 'user 5 edu', '2016-05-07 12:43:08', '0000-00-00 00:00:00'),
(45, 6, 'user 6', 'user 6 edited', 'user 6', 'user 6', '2016-05-07 12:54:43', '0000-00-00 00:00:00'),
(46, 16, '2008-2012', 'University of Oxford', 'Computer Science', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid', '2016-05-09 08:42:36', '0000-00-00 00:00:00'),
(47, 17, '2008-2012', 'University of Oxford', 'Computer Science', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid', '2016-05-09 08:44:51', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `language_id` int(11) NOT NULL,
  `cv_id` int(11) NOT NULL,
  `language_name` varchar(255) NOT NULL,
  `language_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`language_id`, `cv_id`, `language_name`, `language_level`) VALUES
(10, 5, 'English', 'asd'),
(12, 6, 'Russian', 'good'),
(13, 6, 'Englishq edited', 'Good'),
(14, 6, 'French', 'good'),
(15, 5, 'user 5', 'user 5 edited'),
(16, 15, 'English', 'Advanced'),
(17, 16, 'English', 'Advanced'),
(18, 17, 'English', 'Advanced'),
(19, 17, 'Russian', 'Native');

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
-- Table structure for table `personal_contact`
--

CREATE TABLE `personal_contact` (
  `personal_contact_id` int(11) NOT NULL,
  `personal_contact_name` varchar(255) NOT NULL,
  `personal_contact_data` varchar(255) NOT NULL,
  `cv_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal_contact`
--

INSERT INTO `personal_contact` (`personal_contact_id`, `personal_contact_name`, `personal_contact_data`, `cv_id`) VALUES
(34, 'Phone', 'user 5', 5),
(35, 'Email', 'user5edited@code.edu.az', 5),
(36, 'Phone', 'user 6  edited', 6),
(37, 'Email', 'example@asancv.com', 15),
(38, 'Email', 'example@asancv.com', 16),
(39, 'Email', 'example@asancv.com', 17),
(40, 'Phone', '050 000 00 00', 17);

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

CREATE TABLE `personal_data` (
  `personal_data_id` int(11) NOT NULL,
  `personal_data_fname` varchar(255) NOT NULL,
  `personal_data_bdate` varchar(255) NOT NULL,
  `personal_data_info` text NOT NULL,
  `personal_data_profession` varchar(255) NOT NULL,
  `cv_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `personal_data`
--

INSERT INTO `personal_data` (`personal_data_id`, `personal_data_fname`, `personal_data_bdate`, `personal_data_info`, `personal_data_profession`, `cv_id`) VALUES
(2, 'Vahab', '1997', 'asdas', 'asd', 4),
(3, 'Ferid edited', 'asd', 'asd', 'asd', 5),
(4, 'Vahab', '11/03/1996', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB DEVELOPER', 7),
(5, 'Samir', '11/03/1996', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB DEVELOPER', 8),
(6, 'Samir 9', '11/03/1996', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB DEVELOPER', 9),
(7, 'Vahab', '11/03/1996', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB DEVELOPER', 10),
(8, 'Vahab', '11/03/1996', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB DEVELOPER', 11),
(9, 'Vahab', '11/03/1996', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB DEVELOPER', 12),
(10, 'Vahab', '11/03/1996', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB DEVELOPER', 13),
(11, 'Vahab', '11/03/1996', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB DEVELOPER', 14),
(12, 'Vahab', '11/03/1996', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB DEVELOPER', 15),
(13, 'Vahab', '11/03/1996', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB DEVELOPER', 16),
(14, 'Vahab', '11/03/1996', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'WEB DEVELOPER', 17);

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skill_id` int(11) NOT NULL,
  `cv_id` int(11) NOT NULL,
  `skill_name` varchar(255) NOT NULL,
  `skill_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skill_id`, `cv_id`, `skill_name`, `skill_level`) VALUES
(6, 5, 'PhP', 'good edited'),
(7, 5, 'user 5', 'user 5'),
(8, 6, 'user 6 skills', 'user 6 updated'),
(9, 15, 'Photoshop', 'Excellent'),
(10, 16, 'Photoshop', 'Excellent'),
(11, 17, 'Photoshop', 'Excellent'),
(12, 17, 'PHP', 'Good');

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
(2, 'Vahab', 'valiyev.vahab@gmail.com', '$2y$10$UmZ22IQ/tHTJBG3tKK7oIusrERQ/lynbuN3RXHpNJvsHj6y4fqWrO', 'PCDHvYb99QLC3r7DOc2GRzkIvsdWPd9ynzjLsUAHTwqg70rQqJg3tqZL4SOg', '2016-04-23 00:35:18', '2016-05-09 15:18:31'),
(3, 'Celil', 'celil.t@code.edu.az', '$2y$10$sdx0E9bHKcSdnZmR/Vc3HOooeKtCaU/ictVC6nTwxQXwXs3LcdQE6', 'KbtcZJvDyOCSEw3Ema2dPV9K4OT1t6UQ7vWv3YqE5pTvbkDqV0WCypmCUIIa', '2016-04-23 01:04:17', '2016-04-23 01:34:48'),
(4, 'Eldar', 'eldar@code.edu.az', '$2y$10$s022KHuJNF4ymvPyp53kdOj.5sNzzKzchGuetSJcqvOLF6HFitZxW', 'UmrbOJbIlHNamYGsIXUr26FNTUS3qYDlZY56OZ7t3MBZIKsohMt4tJaco43e', '2016-05-07 15:40:46', '2016-05-07 16:07:22'),
(5, 'Samir', 'samir@code.edu.az', '$2y$10$q2mkxn8/0g7r9Zgz5.nziO3UuSLTFbkmJPw2y81F7TamC0gFjBDLm', 'bLsQ8V4wkbEHdibS5y7LKqEgrdG5mSB1TqQItUshuIcWRoozKE0KViilgTnc', '2016-05-07 20:32:31', '2016-05-07 21:02:50');

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
(8, 5, '5', 'work edited', '5', '5', '2016-05-07 12:34:46', '0000-00-00 00:00:00'),
(9, 6, 'user 6', 'user 6', 'user 6', 'user 6', '2016-05-07 12:54:21', '0000-00-00 00:00:00'),
(10, 16, '2013 - 2016', 'Google', 'WEB DEVELOPER', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid', '2016-05-09 08:42:35', '0000-00-00 00:00:00'),
(11, 17, '2013 - 2016', 'Google', 'WEB DEVELOPER', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupid', '2016-05-09 08:44:51', '0000-00-00 00:00:00');

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
-- Indexes for table `personal_contact`
--
ALTER TABLE `personal_contact`
  ADD PRIMARY KEY (`personal_contact_id`),
  ADD KEY `cv_id` (`cv_id`);

--
-- Indexes for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`personal_data_id`),
  ADD KEY `cv_id` (`cv_id`);

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
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `cv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `personal_contact`
--
ALTER TABLE `personal_contact`
  MODIFY `personal_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `personal_data_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `works`
--
ALTER TABLE `works`
  MODIFY `work_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
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
-- Constraints for table `personal_contact`
--
ALTER TABLE `personal_contact`
  ADD CONSTRAINT `personal_contact_ibfk_1` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`cv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD CONSTRAINT `personal_data_ibfk_1` FOREIGN KEY (`cv_id`) REFERENCES `cv` (`cv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
