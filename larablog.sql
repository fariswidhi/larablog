-- phpMyAdmin SQL Dump
-- version 4.6.6deb1+deb.cihar.com~xenial.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 13, 2018 at 02:20 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.12-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `larablog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `user`, `created_at`, `updated_at`) VALUES
(1, 'Tes', 'a', 1, '2017-09-07 18:16:54', '2017-09-07 18:16:54'),
(2, 'hay', 'k', 1, NULL, NULL),
(3, 'hay', 'lorem ipsum', 1, NULL, NULL),
(4, 'hay', 'lorem ipsum', 1, NULL, NULL),
(5, 'hay', 'lorem ipsum', 1, NULL, NULL),
(6, 'hay', 'lorem ipsum', 1, NULL, NULL),
(7, 'hay', 'lorem ipsum', 1, NULL, NULL),
(8, 'hay', 'lorem ipsum', 1, NULL, NULL),
(9, 'hay', 'lorem ipsum', 1, NULL, NULL),
(10, 'hay', 'lorem ipsum', 1, NULL, NULL),
(11, 'hay', 'lorem ipsum', 1, NULL, NULL),
(12, 'hay', 'lorem ipsum', 1, NULL, NULL),
(13, 'hay', 'lorem ipsum', 1, NULL, NULL),
(14, 'hay', 'lorem ipsum', 1, NULL, NULL),
(15, 'hay', 'lorem ipsum', 1, NULL, NULL),
(16, 'hay', 'lorem ipsum', 1, NULL, NULL),
(17, 'hay', 'lorem ipsum', 1, NULL, NULL),
(18, 'hay', 'lorem ipsum', 1, NULL, NULL),
(19, 'hay', 'lorem ipsum', 1, NULL, NULL),
(20, 'hay', 'lorem ipsum', 1, NULL, NULL),
(21, 'hay', 'lorem ipsum', 1, NULL, NULL),
(22, 'hay', 'lorem ipsum', 1, NULL, NULL),
(23, 'hay', 'lorem ipsum', 1, NULL, NULL),
(24, 'hay', 'lorem ipsum', 1, NULL, NULL),
(25, 'hay', 'lorem ipsum', 1, NULL, NULL),
(26, 'hay', 'lorem ipsum', 1, NULL, NULL),
(27, 'hay', 'lorem ipsum', 1, NULL, NULL),
(28, 'hay', 'lorem ipsum', 1, NULL, NULL),
(29, 'hay', 'lorem ipsum', 1, NULL, NULL),
(30, 'hay', 'lorem ipsum', 1, NULL, NULL),
(31, 'hay', 'lorem ipsum', 1, NULL, NULL),
(32, 'hay', 'lorem ipsum', 1, NULL, NULL),
(33, 'hay', 'lorem ipsum', 1, NULL, NULL),
(34, 'hay', 'lorem ipsum', 1, NULL, NULL),
(35, 'hay', 'lorem ipsum', 1, NULL, NULL),
(36, 'hay', 'lorem ipsum', 1, NULL, NULL),
(37, 'hay', 'lorem ipsum', 1, NULL, NULL),
(38, 'hay', 'lorem ipsum', 1, NULL, NULL),
(39, 'hay', 'lorem ipsum', 1, NULL, NULL),
(40, 'hay', 'lorem ipsum', 1, NULL, NULL),
(41, 'hay', 'lorem ipsum', 1, NULL, NULL),
(42, 'hay', 'lorem ipsum', 1, NULL, NULL),
(43, 'hay', 'lorem ipsum', 1, NULL, NULL),
(44, 'hay', 'lorem ipsum', 1, NULL, NULL),
(45, 'hay', 'lorem ipsum', 1, NULL, NULL),
(46, 'hay', 'lorem ipsum', 1, NULL, NULL),
(47, 'hay', 'lorem ipsum', 1, NULL, NULL),
(48, 'hay', 'lorem ipsum', 1, NULL, NULL),
(49, 'hay', 'lorem ipsum', 1, NULL, NULL),
(50, 'hay', 'lorem ipsum', 1, NULL, NULL),
(51, 'hay', 'lorem ipsum', 1, NULL, NULL),
(52, 'hay', 'lorem ipsum', 1, NULL, NULL),
(53, 'hay', 'lorem ipsum', 1, NULL, NULL),
(54, 'hay', 'lorem ipsum', 1, NULL, NULL),
(55, 'hay', 'lorem ipsum', 1, NULL, NULL),
(56, 'hay', 'lorem ipsum', 1, NULL, NULL),
(57, 'hay', 'lorem ipsum', 1, NULL, NULL),
(58, 'hay', 'lorem ipsum', 1, NULL, NULL),
(59, 'hay', 'lorem ipsum', 1, NULL, NULL),
(60, 'hay', 'lorem ipsum', 1, NULL, NULL),
(61, 'hay', 'lorem ipsum', 1, NULL, NULL),
(62, 'hay', 'lorem ipsum', 1, NULL, NULL),
(63, 'hay', 'lorem ipsum', 1, NULL, NULL),
(64, 'hay', 'lorem ipsum', 1, NULL, NULL),
(65, 'hay', 'lorem ipsum', 1, NULL, NULL),
(66, 'hay', 'lorem ipsum', 1, NULL, NULL),
(67, 'hay', 'lorem ipsum', 1, NULL, NULL),
(68, 'hay', 'lorem ipsum', 1, NULL, NULL),
(69, 'hay', 'lorem ipsum', 1, NULL, NULL),
(70, 'hay', 'lorem ipsum', 1, NULL, NULL),
(71, 'hay', 'lorem ipsum', 1, NULL, NULL),
(72, 'hay', 'lorem ipsum', 1, NULL, NULL),
(73, 'hay', 'lorem ipsum', 1, NULL, NULL),
(74, 'hay', 'lorem ipsum', 1, NULL, NULL),
(75, 'hay', 'lorem ipsum', 1, NULL, NULL),
(76, 'hay', 'lorem ipsum', 1, NULL, NULL),
(77, 'hay', 'lorem ipsum', 1, NULL, NULL),
(78, 'hay', 'lorem ipsum', 1, NULL, NULL),
(79, 'hay', 'lorem ipsum', 1, NULL, NULL),
(80, 'hay', 'lorem ipsum', 1, NULL, NULL),
(81, 'hay', 'lorem ipsum', 1, NULL, NULL),
(82, 'hay', 'lorem ipsum', 1, NULL, NULL),
(83, 'hay', 'lorem ipsum', 1, NULL, NULL),
(84, 'hay', 'lorem ipsum', 1, NULL, NULL),
(85, 'hay', 'lorem ipsum', 1, NULL, NULL),
(86, 'hay', 'lorem ipsum', 1, NULL, NULL),
(87, 'hay', 'lorem ipsum', 1, NULL, NULL),
(88, 'hay', 'lorem ipsum', 1, NULL, NULL),
(89, 'hay', 'lorem ipsum', 1, NULL, NULL),
(90, 'hay', 'lorem ipsum', 1, NULL, NULL),
(91, 'hay', 'lorem ipsum', 1, NULL, NULL),
(92, 'hay', 'lorem ipsum', 1, NULL, NULL),
(93, 'hay', 'lorem ipsum', 1, NULL, NULL),
(94, 'hay', 'lorem ipsum', 1, NULL, NULL),
(95, 'hay', 'lorem ipsum', 1, NULL, NULL),
(96, 'hay', 'lorem ipsum', 1, NULL, NULL),
(97, 'hay', 'lorem ipsum', 1, NULL, NULL),
(98, 'hay', 'lorem ipsum', 1, NULL, NULL),
(99, 'hay', 'lorem ipsum', 1, NULL, NULL),
(100, 'hay', 'lorem ipsum', 1, NULL, NULL),
(101, 'hay', 'lorem ipsum', 1, NULL, NULL);

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2017_09_06_155015_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$gNlli9We9mJrhwepkPxCrealZovHEwo8GXEOG2/nPqRH47CS.w/Wa', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_foreign` (`user`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_foreign` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
