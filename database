-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 08:00 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `note marketplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `country_code` varchar(100) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `seller` int(11) NOT NULL,
  `downloader` int(11) NOT NULL,
  `issellerhasalloweddownload` bit(64) NOT NULL,
  `attachmentpath` varchar(255) DEFAULT NULL,
  `isattachment_downloaded` bit(64) NOT NULL,
  `attachment_downloadeddate` datetime(6) DEFAULT NULL,
  `ispaid` bit(64) NOT NULL,
  `purchasedprice` decimal(65,0) DEFAULT NULL,
  `note_title` varchar(100) NOT NULL,
  `note_category` varchar(100) NOT NULL,
  `created_date` datetime(6) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note_categories`
--

CREATE TABLE `note_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `note_types`
--

CREATE TABLE `note_types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_date` datetime(6) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reference_data`
--

CREATE TABLE `reference_data` (
  `id` int(11) NOT NULL,
  `value` varchar(100) NOT NULL,
  `datavalue` varchar(100) NOT NULL,
  `ref_category` varchar(100) NOT NULL,
  `created_date` datetime(6) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellernotes_attachements`
--

CREATE TABLE `sellernotes_attachements` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_path` varchar(2) NOT NULL,
  `created_date` datetime(6) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellernotes_reportedissues`
--

CREATE TABLE `sellernotes_reportedissues` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `reportebyid` int(11) NOT NULL,
  `againstdownload_id` int(11) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `created_date` datetime(6) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sellernotes_reviews`
--

CREATE TABLE `sellernotes_reviews` (
  `id` int(11) NOT NULL,
  `note_id` int(11) NOT NULL,
  `reviewedbyid` int(11) NOT NULL,
  `againstdownloads_id` int(11) NOT NULL,
  `ratings` decimal(20,0) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `created_date` datetime(6) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `seller_notes`
--

CREATE TABLE `seller_notes` (
  `id` int(11) NOT NULL,
  `seller_id` int(20) NOT NULL,
  `status` int(20) NOT NULL,
  `action_by` int(20) DEFAULT NULL,
  `admin_remark` varchar(1000) DEFAULT NULL,
  `publis_date` datetime(6) DEFAULT NULL,
  `title` varchar(100) NOT NULL,
  `category` int(20) NOT NULL,
  `display_picture` varchar(500) DEFAULT NULL,
  `note_type` int(30) DEFAULT NULL,
  `number_of_pages` int(11) DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `university_name` varchar(200) DEFAULT NULL,
  `country` int(30) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `course_code` varchar(100) DEFAULT NULL,
  `professor` varchar(100) DEFAULT NULL,
  `is_paid` bit(6) NOT NULL,
  `selling_price` decimal(20,0) DEFAULT NULL,
  `notes_preview` varchar(1000) DEFAULT NULL,
  `created_date` datetime(6) DEFAULT NULL,
  `created_by` int(20) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(20) DEFAULT NULL,
  `is_active` bit(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `system_configurations`
--

CREATE TABLE `system_configurations` (
  `id` int(11) NOT NULL,
  `key` varchar(100) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_date` datetime(6) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role_id` int(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `isemailverified` bit(10) NOT NULL,
  `created_date` datetime(6) DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `is_active` bit(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dob` datetime(6) DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `secondaryemailaddress` varchar(100) NOT NULL,
  `phoneno_countrycode` varchar(5) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `profile_picture` varchar(500) DEFAULT NULL,
  `address_line1` varchar(100) NOT NULL,
  `address_line2` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `university` varchar(100) DEFAULT NULL,
  `collage` varchar(100) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `modified_date` datetime DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` longtext DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` int(50) DEFAULT NULL,
  `modified_date` datetime(6) DEFAULT NULL,
  `modified_by` int(50) DEFAULT NULL,
  `is_active` bit(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `seller` (`seller`),
  ADD KEY `downloader` (`downloader`);

--
-- Indexes for table `note_categories`
--
ALTER TABLE `note_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note_types`
--
ALTER TABLE `note_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reference_data`
--
ALTER TABLE `reference_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellernotes_attachements`
--
ALTER TABLE `sellernotes_attachements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `note_id` (`note_id`);

--
-- Indexes for table `sellernotes_reportedissues`
--
ALTER TABLE `sellernotes_reportedissues`
  ADD PRIMARY KEY (`id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `reportebyid` (`reportebyid`),
  ADD KEY `againstdownload_id` (`againstdownload_id`);

--
-- Indexes for table `sellernotes_reviews`
--
ALTER TABLE `sellernotes_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `note_id` (`note_id`),
  ADD KEY `reviewedbyid` (`reviewedbyid`),
  ADD KEY `againstdownloads_id` (`againstdownloads_id`);

--
-- Indexes for table `seller_notes`
--
ALTER TABLE `seller_notes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seller_id` (`seller_id`),
  ADD KEY `status` (`status`),
  ADD KEY `action_by` (`action_by`),
  ADD KEY `category` (`category`),
  ADD KEY `note_type` (`note_type`),
  ADD KEY `country` (`country`);

--
-- Indexes for table `system_configurations`
--
ALTER TABLE `system_configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_ibfk_1` (`role_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `gender` (`gender`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `downloads`
--
ALTER TABLE `downloads`
  ADD CONSTRAINT `downloads_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`),
  ADD CONSTRAINT `downloads_ibfk_2` FOREIGN KEY (`seller`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `downloads_ibfk_3` FOREIGN KEY (`downloader`) REFERENCES `users` (`id`);

--
-- Constraints for table `sellernotes_attachements`
--
ALTER TABLE `sellernotes_attachements`
  ADD CONSTRAINT `sellernotes_attachements_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`);

--
-- Constraints for table `sellernotes_reportedissues`
--
ALTER TABLE `sellernotes_reportedissues`
  ADD CONSTRAINT `sellernotes_reportedissues_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`),
  ADD CONSTRAINT `sellernotes_reportedissues_ibfk_2` FOREIGN KEY (`reportebyid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sellernotes_reportedissues_ibfk_3` FOREIGN KEY (`againstdownload_id`) REFERENCES `downloads` (`id`);

--
-- Constraints for table `sellernotes_reviews`
--
ALTER TABLE `sellernotes_reviews`
  ADD CONSTRAINT `sellernotes_reviews_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `seller_notes` (`id`),
  ADD CONSTRAINT `sellernotes_reviews_ibfk_2` FOREIGN KEY (`reviewedbyid`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sellernotes_reviews_ibfk_3` FOREIGN KEY (`againstdownloads_id`) REFERENCES `downloads` (`id`);

--
-- Constraints for table `seller_notes`
--
ALTER TABLE `seller_notes`
  ADD CONSTRAINT `seller_notes_ibfk_1` FOREIGN KEY (`seller_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `seller_notes_ibfk_2` FOREIGN KEY (`status`) REFERENCES `reference_data` (`id`),
  ADD CONSTRAINT `seller_notes_ibfk_3` FOREIGN KEY (`action_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `seller_notes_ibfk_4` FOREIGN KEY (`category`) REFERENCES `note_categories` (`id`),
  ADD CONSTRAINT `seller_notes_ibfk_5` FOREIGN KEY (`note_type`) REFERENCES `note_types` (`id`),
  ADD CONSTRAINT `seller_notes_ibfk_6` FOREIGN KEY (`country`) REFERENCES `countries` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_roles` (`id`);

--
-- Constraints for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_profile_ibfk_2` FOREIGN KEY (`gender`) REFERENCES `reference_data` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
