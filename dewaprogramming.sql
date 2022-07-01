-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2022 at 06:42 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dewaprogramming`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'HTML', 'html', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teknologi`
--

CREATE TABLE `teknologi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `isPublished` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `slug_tag` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `deleted_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teknologi`
--

INSERT INTO `teknologi` (`id`, `user_id`, `category_id`, `judul`, `body`, `isPublished`, `photo`, `slug`, `category`, `slug_tag`, `deskripsi`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 1, 'Tutorial', 'Tutorial', '1', 'Tutorial', 'tutorial', 'Tutorial', 'tutorial', 'Tutorial', '2021-05-23', '2021-06-06', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `slug_tag` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `isPublished` int(11) DEFAULT NULL,
  `created_at` date DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp(),
  `deleted_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `user_id`, `photo`, `judul`, `slug`, `category_id`, `slug_tag`, `deskripsi`, `body`, `isPublished`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, 'HTML-1.jpg', 'Apa itu HTML', 'contoh', 1, 'html', '4141', '<p>Tutorial HTML</p>', 1, '2021-05-23', '2021-06-03', NULL),
(2, 3, 'HTML-2.jpg', 'Penge', 'dewa', 1, 'adadadada', 'adadada', '<p>ad</p>', 1, '2021-05-23', '2021-06-03', NULL),
(3, 3, 'HTML-3.jpg', '3', 'dewaaaaa', 1, 'dada', 'dad', '<p>adad</p>', 1, '2021-05-23', '2021-06-03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Adityawarman', 'dewagaming123.sp@gmail.com', '$2y$10$O.cTBuX8IO.rll6ogwQaA.S3//QLp9yPrYQzNWbfLk2ACafz0.tnq', '2021-04-05 16:09:36', '2021-04-05 16:09:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `teknologi`
--
ALTER TABLE `teknologi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teknologi`
--
ALTER TABLE `teknologi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
