-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2022 at 10:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ism_surgical`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT 'e6e061838856bf47e1de730719fb2609'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'ism@admin.com', 'e6e061838856bf47e1de730719fb2609');

-- --------------------------------------------------------

--
-- Table structure for table `basicinfo`
--

CREATE TABLE `basicinfo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basicinfo`
--

INSERT INTO `basicinfo` (`id`, `email`, `phone_no`, `address`, `description`, `facebook`, `instagram`, `twitter`, `created_at`, `updated_at`) VALUES
(1, 'hammad.arshad672@gmail.com', '+44 7955 008500', '16 Sialkot, 51310, Punjab, Pakistan', 'ISM Surgical is a group of younger professionals engaged in the manufacturing and export of Surgical, Dental, and Beauty Care Instruments. ISM Surgical serves valued business colleagues all over the world. Keeps continuous grip over the quality and service standards as we believe in the best, therefore striving every moment to improve every aspect. To achieve the goals we provide our honorable clients with quality product delivery within the stipulated time limit ensured at any cost. We assure you our best service at all times with top quality, the best price, and on-time delivery. Samples and prices can be obtained on demand. Deliveries of the orders are ensured within time. Although this website does not cover the range of our products yet it assures you that we can make every type of Surgical Instrument, So we will welcome your all inquiries, also for your required designs which have not been listed on this website. Thanking in advance for visiting our website. Best Compliments From, ISM Surgical.', 'https://www.facebook.com/Webo.Solution18/', 'https://www.instagram.com/hammad.arshad18/', 'https://twitter.com/Hammadarshad786', '2022-11-28 12:25:11', '2022-11-29 12:15:48');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Beauty Product', 'beauty-product', '2022-11-22 05:11:34', '2022-11-22 09:29:53'),
(2, 'Scissors', 'scissors', '2022-11-24 03:14:41', '2022-11-24 03:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `comment`, `created_at`, `updated_at`) VALUES
(1, 'Leopoldo Gutkowski', 'spencer.enos@hotmail.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:10:30', '2022-11-21 11:10:30'),
(2, 'Mrs. Elda Kassulke', 'schmidt.alicia@yahoo.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:10:30', '2022-11-21 11:10:30'),
(3, 'Prof. Dora Kuhic', 'rickie89@hotmail.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:10:30', '2022-11-21 11:10:30'),
(4, 'Elsie Bednar', 'quinton47@kuhn.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:10:30', '2022-11-21 11:10:30'),
(5, 'Mrs. Antonia Stanton PhD', 'donald13@yahoo.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:10:30', '2022-11-21 11:10:30'),
(6, 'Annabelle DuBuque Sr.', 'aauer@gmail.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:11:15', '2022-11-21 11:11:15'),
(7, 'Randal Schaden', 'khalid.carroll@russel.info', '', 'Dummy Contact Us Entry', '2022-11-21 11:11:15', '2022-11-21 11:11:15'),
(8, 'Mr. Rodger Tremblay', 'qrunte@greenfelder.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:11:15', '2022-11-21 11:11:15'),
(9, 'Tiffany Labadie', 'maya39@boehm.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:11:15', '2022-11-21 11:11:15'),
(10, 'Newell Ankunding', 'rlangosh@yahoo.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:11:15', '2022-11-21 11:11:15'),
(11, 'Kaleb Little', 'joan.orn@mohr.org', '', 'Dummy Contact Us Entry', '2022-11-21 11:11:15', '2022-11-21 11:11:15'),
(12, 'Prof. Maryam Schmitt', 'devante.carter@yahoo.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:11:15', '2022-11-21 11:11:15'),
(13, 'Prof. Kasey Bins', 'corwin.destin@lang.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:11:15', '2022-11-21 11:11:15'),
(14, 'Myles Koch', 'constantin59@bernhard.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:11:15', '2022-11-21 11:11:15'),
(15, 'Cassie McKenzie', 'ebarton@gmail.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:11:15', '2022-11-21 11:11:15'),
(16, 'Christiana Dibbert', 'runte.roslyn@gmail.com', '', 'Dummy Contact Us Entry', '2022-11-21 11:11:15', '2022-11-21 11:11:15'),
(17, 'Hammad Arshad', 'hammad.arshad672@gmail.com', '+923328432678', 'Test Comment', '2022-11-21 11:45:12', '2022-11-21 11:45:12'),
(18, 'Hamii', 'hamii@yahoo.com', '923341149648', 'Test Stripped Phone', '2022-11-21 11:53:40', '2022-11-21 11:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
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
(5, '2022_11_21_155654_create_contactus_table', 2),
(6, '2022_11_21_162657_add_column_to_contactus_table', 3),
(7, '2022_11_22_092316_create_category_table', 4),
(8, '2022_11_22_093653_create_product_table', 5),
(9, '2022_11_22_101822_add_column_to_product_table', 6),
(10, '0000_00_00_000000_create_filament_users_table', 7),
(11, '0000_00_00_000001_create_filament_password_resets_table', 7),
(12, '2022_11_28_112205_create_basicinfo_table', 8),
(13, '2022_11_29_135136_create_admins_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `description`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Beauty Item', 'beauty-item', 'Beauty Instruments manufactured in our premises are recognized as the high quality instruments throughout the World. We are manufacturing beauty care instruments along with custom designed instruments to meet your specific requirements and branding needs.\n\nWe offer a variety of Beauty care Instruments.', '64D76LG368UxL746ewHqRDTgz45U1j-metaMTM5NS5qcGc=-.jpg', 1, '2022-11-22 05:39:06', '2022-11-23 10:51:52'),
(2, 'Scissor 1179', 'scissor-1179', 'Beauty Instruments manufactured in our premises are recognized as high-quality instruments throughout the World. We are manufacturing beauty care instruments along with custom-designed instruments to meet your specific requirements and branding needs. We offer a variety of Beauty care Instruments.', 'z4ICZbmA1S1N9ZHZOEyhnR1QsBdvxu-metaMTE3OS5qcGc=-.jpg', 2, '2022-11-24 03:17:36', '2022-11-24 03:17:36'),
(3, 'Scissor 1193', 'scissor-1193', 'Beauty Instruments manufactured in our premises are recognized as high-quality instruments throughout the World. We are manufacturing beauty care instruments along with custom-designed instruments to meet your specific requirements and branding needs. We offer a variety of Beauty care Instruments.', '1lu5F0p7cNSOwGTQPn1qQuEqCKjtmi-metaMTE5My5qcGc=-.jpg', 2, '2022-11-24 03:21:55', '2022-11-24 03:21:55'),
(4, 'Scissor 1207', 'scissor-1207', 'Beauty Instruments manufactured in our premises are recognized as high-quality instruments throughout the World. We are manufacturing beauty care instruments along with custom-designed instruments to meet your specific requirements and branding needs. We offer a variety of Beauty care Instruments.', 'hPlnz5BWDOnFFZk9bdx8cJlEkyauiu-metaMTIwNy5qcGc=-.jpg', 2, '2022-11-24 03:22:59', '2022-11-24 03:22:59'),
(5, 'Scissor 1231', 'scissor-1231', 'Beauty Instruments manufactured in our premises are recognized as high-quality instruments throughout the World. We are manufacturing beauty care instruments along with custom-designed instruments to meet your specific requirements and branding needs. We offer a variety of Beauty care Instruments.', '2Vunqzu3dSQUizAwyNQ6RrtvPeX60t-metaMTIzMS5qcGc=-.jpg', 2, '2022-11-24 03:24:23', '2022-11-24 03:24:23'),
(6, 'Scissor 1258', 'scissor-1258', 'Beauty Instruments manufactured in our premises are recognized as high-quality instruments throughout the World. We are manufacturing beauty care instruments along with custom-designed instruments to meet your specific requirements and branding needs. We offer a variety of Beauty care Instruments.', 'r0M0QYyILutnXMyY79bI35U5hgFsil-metaMTI1OC5qcGc=-.jpg', 2, '2022-11-24 03:25:05', '2022-11-24 03:25:05'),
(7, 'Scissor 1289', 'scissor-1289', 'Beauty Instruments manufactured in our premises are recognized as high-quality instruments throughout the World. We are manufacturing beauty care instruments along with custom-designed instruments to meet your specific requirements and branding needs. We offer a variety of Beauty care Instruments.', 'wWJBHwmkrgfcFRakTaDuiItHpbHQyu-metaMTI4OS5qcGc=-.jpg', 2, '2022-11-24 03:26:50', '2022-11-24 03:26:50'),
(10, 'Test Item', 'test-item', 'Test Item', '92ezul08vipdfYHSI8WtPhz3rvFhZrl1tEy8c2xa.jpg', 1, '2022-11-30 03:55:32', '2022-11-30 03:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@admin.com', '2022-11-22 09:15:34', '$2y$10$58uwt60iW7Wmv8Pn8Ow8DuGwftd/gDJAiOmLjaz221Pht.pE.b/Ga', 'MVAElxgA4UpqBnOtPuZFrYL4fWHECQv6802a4b4kSMrdED5azDKbkL8pRU5e', '2022-11-22 03:33:39', '2022-11-22 03:33:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basicinfo`
--
ALTER TABLE `basicinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `basicinfo`
--
ALTER TABLE `basicinfo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
