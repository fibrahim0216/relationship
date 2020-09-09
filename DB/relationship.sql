-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2020 at 01:50 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relationship`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES
(1, 'mdibrahim', 'mibrahim0216@gmail.com', '2020-09-09 11:41:45', '2020-09-09 11:41:45'),
(2, 'Hossain', 'hossain0216@gmail.com', '2020-09-09 11:44:23', '2020-09-09 11:44:23'),
(3, 'Moniruzzaman', 'miniruzzaman@gmail.com', '2020-09-09 11:46:30', '2020-09-09 11:46:30'),
(4, 'Indea', 'khaledsaif394@gmail.com', '2020-09-09 11:48:04', '2020-09-09 11:48:04');

-- --------------------------------------------------------

--
-- Table structure for table `author_book`
--

CREATE TABLE `author_book` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` bigint(20) UNSIGNED NOT NULL,
  `author_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isbn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `description`, `isbn`, `created_at`, `updated_at`) VALUES
(1, 'English', 'This is English Book', '123', '2020-09-09 17:08:18', '2020-09-09 17:08:18'),
(2, 'English', 'This is English Book', '123', '2020-09-09 17:08:33', '2020-09-09 17:08:33'),
(3, 'Mathmetics', 'Methmethics is the very important subject of CSE', '124', '2020-09-09 17:38:51', '2020-09-09 17:38:51'),
(4, 'Mathmetics', 'Methmethics is the very important subject of CSE', '1235', '2020-09-09 17:39:56', '2020-09-09 17:39:56'),
(5, 'Bangla', 'Bangla Subject is the best of Atrs', '12356', '2020-09-09 17:42:59', '2020-09-09 17:42:59');

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
(1, '2020_09_06_095930_create_users_table', 1),
(3, '2020_09_06_163755_create_profiles_table', 2),
(4, '2020_09_08_012337_create_books_table', 3),
(5, '2020_09_08_012721_create_books_table', 4),
(6, '2020_09_08_013128_create_authors_table', 5),
(8, '2020_09_08_013349_create_author_book_table', 6),
(10, '2020_09_08_014534_create_books_table', 7),
(11, '2020_09_08_014906_create_authors_table', 8),
(12, '2020_09_09_172638_create_authors_table', 9),
(13, '2020_09_09_172827_create_books_table', 10),
(14, '2020_09_09_234507_create_author_book_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `profile_pic`, `bio`, `address`, `owner_id`, `created_at`, `updated_at`) VALUES
(7, 'ibrahim picture', 'I am Md Ibrhaim Hossain', 'Savar, Dhak', 22, '2020-09-07 09:29:06', '2020-09-07 09:29:06'),
(8, 'ibrahim picture', 'I am Md Ibrhaim Hossain', 'Savar, Dhak', 23, '2020-09-07 09:29:39', '2020-09-07 09:29:39'),
(9, 'ibrahim picture', 'I am Md Ibrhaim Hossain', 'Savar, Dhak', 24, '2020-09-07 09:31:36', '2020-09-07 09:31:36'),
(10, 'ibrahim picture', 'I am Md Ibrhaim Hossain', 'Savar, Dhak', 26, '2020-09-07 09:39:20', '2020-09-07 09:39:20'),
(11, 'ibrahim picture', 'I am Md Ibrhaim Hossain', 'Savar, Dhak', 27, '2020-09-08 19:47:20', '2020-09-08 19:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phone`, `date_of_birth`, `username`, `created_at`, `updated_at`) VALUES
(22, 'Md Ibrahim', 'Hossain (shahin)', 'fibrahim0216@gmail.com', '01945546612', '2020-09-03 00:00:00', 'mdibrahim', '2020-09-07 09:29:06', '2020-09-08 19:47:43'),
(23, 'Md Sagor', 'Hossain', 'ibrahim0216@gmail.com', '01945546612', '2020-10-08 00:00:00', 'Author', '2020-09-07 09:29:38', '2020-09-07 09:29:38'),
(24, 'Md Shahinur', 'Hossain', 'rahim0216@gmail.com', '01945546612', '2020-09-01 00:00:00', 'fibrahim0216', '2020-09-07 09:31:36', '2020-09-07 09:31:36'),
(26, 'Md Shahinur', 'Hossain', 'ahim0216@gmail.com', '01945546612', '2020-09-30 00:00:00', 'mdsalman', '2020-09-07 09:39:20', '2020-09-07 09:39:20'),
(27, 'Md Shahinur', 'Hossain', 'firahim0216@gmail.com', '01945546612', '2020-09-30 00:00:00', 'skmonin', '2020-09-08 19:47:20', '2020-09-08 19:47:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author_book`
--
ALTER TABLE `author_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `author_book`
--
ALTER TABLE `author_book`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
