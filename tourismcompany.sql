-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 05:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourismcompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `customes`
--

CREATE TABLE `customes` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customes`
--

INSERT INTO `customes` (`id`, `name`, `email`, `password`, `fullName`, `phone`, `image`, `created_at`, `updated_at`) VALUES
(1, 'tset', 'tset12@gmail.com', '$2y$10$RJQiU2c1hYE3AuC6L2NEn.C4MdleDxfvU0GzF6rVeUIyb/NIo4cRu', 'test test', '01094975264', '1682867761.png', '2023-04-30 13:16:01', '2023-04-30 13:16:01');

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
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2023_04_15_061730_create_customes_table', 1),
(8, '2023_04_15_082818_create_permission_tables', 1),
(9, '2023_04_20_043301_create_settings_table', 1),
(10, '2023_04_30_140102_create_logos_table', 1),
(16, '2023_04_15_043039_create_rates_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'settings', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(2, 'setting edit', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(3, 'roles', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(4, 'role create', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(5, 'role view', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(6, 'role edit', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(7, 'role delete', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(8, 'users', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(9, 'user create', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(10, 'user view', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(11, 'user edit', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(12, 'user delete', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(13, 'customers', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(14, 'customers delete', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19'),
(15, 'customers send email', 'web', '2023-04-30 12:44:19', '2023-04-30 12:44:19');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'Laravel Password Grant Client', 'c389593dbbba11ae2dec2b880751eec23b8fd8dfc38257dea6b55dbf622a1591', '[\"*\"]', '2023-04-30 13:16:01', NULL, '2023-04-30 13:15:49', '2023-04-30 13:16:01'),
(2, 'App\\Models\\Customer', 1, 'Laravel Password Grant Client', 'b33fc5368cde5a9eb8d07b9327b52278249473a6b135f9dba6dd7923be33f99a', '[\"*\"]', '2023-04-30 13:25:07', NULL, '2023-04-30 13:16:05', '2023-04-30 13:25:07');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint(20) NOT NULL,
  `Agent_ID` varchar(255) NOT NULL,
  `Port_of_Loading_POL` varchar(255) NOT NULL,
  `Country_of_Origin` varchar(255) NOT NULL,
  `Port_of_Destination_POD` varchar(255) NOT NULL,
  `Country_of_Destination` varchar(255) NOT NULL,
  `VESSEL_VOYAGE` varchar(255) NOT NULL,
  `Cut_off` varchar(255) NOT NULL,
  `Departure_Date` varchar(255) NOT NULL,
  `Arrival_Date` varchar(255) NOT NULL,
  `20_Standard` varchar(255) NOT NULL,
  `40_Standard` varchar(255) NOT NULL,
  `20_Refrigerated` varchar(255) NOT NULL,
  `40_Refrigerated` varchar(255) NOT NULL,
  `40_High_Cube` varchar(255) NOT NULL,
  `container_currency` varchar(255) NOT NULL,
  `Shipping_Line` varchar(255) NOT NULL,
  `VALID` varchar(255) NOT NULL,
  `Transit_time` varchar(255) NOT NULL,
  `Routing` varchar(255) NOT NULL,
  `Free_time_at_Origin` varchar(255) NOT NULL,
  `Free_Time_at_Destination` varchar(255) NOT NULL,
  `Rate_Type` varchar(255) NOT NULL,
  `Booking_Type` varchar(255) NOT NULL,
  `Origin_Charges_OTHC` varchar(255) NOT NULL,
  `OTHC_Currency` varchar(255) NOT NULL,
  `Destination_Charge_DTHC` varchar(255) NOT NULL,
  `DTHC_Currency` varchar(255) NOT NULL,
  `Documentation` varchar(255) NOT NULL,
  `Docs_Currency` varchar(255) NOT NULL,
  `Cancelation_fee` varchar(255) NOT NULL,
  `Cancelation_Currency` varchar(255) NOT NULL,
  `visits` varchar(255) NOT NULL DEFAULT '0',
  `booking` varchar(255) NOT NULL DEFAULT '0',
  `cst_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `Agent_ID`, `Port_of_Loading_POL`, `Country_of_Origin`, `Port_of_Destination_POD`, `Country_of_Destination`, `VESSEL_VOYAGE`, `Cut_off`, `Departure_Date`, `Arrival_Date`, `20_Standard`, `40_Standard`, `20_Refrigerated`, `40_Refrigerated`, `40_High_Cube`, `container_currency`, `Shipping_Line`, `VALID`, `Transit_time`, `Routing`, `Free_time_at_Origin`, `Free_Time_at_Destination`, `Rate_Type`, `Booking_Type`, `Origin_Charges_OTHC`, `OTHC_Currency`, `Destination_Charge_DTHC`, `DTHC_Currency`, `Documentation`, `Docs_Currency`, `Cancelation_fee`, `Cancelation_Currency`, `visits`, `booking`, `cst_id`, `created_at`, `updated_at`) VALUES
(3, ' Agent_ID', 'Port_of_Loading_POL', 'Country_of_Origin', 'Port_of_Destination_POD', 'Country_of_Destination', 'VESSEL_VOYAGE', 'Cut_off', 'Departure_Date', 'Arrival_Date', '20_Standard', '40_Standard', '20_Refrigerated', '40_Refrigerated', '40_High_Cube', 'container_currency', 'Shipping_Line', 'VALID', 'Transit_time', 'Routing', 'Free_time_at_Origin', 'Free_Time_at_Destination', 'Rate_Type', 'Booking_Type', 'Origin_Charges_OTHC', 'OTHC_Currency', 'Destination_Charge_DTHC', 'DTHC_Currency', 'Documentation', 'Docs_Currency', 'Cancelation_fee', 'Cancelation_Currency', '0', '0', NULL, '2023-04-30 13:05:06', '2023-04-30 13:05:06'),
(4, '133456', 'Sokhna', 'Egypt', 'Jeddeh', 'Saudi Arabia', 'CAPT', '14/15/2018', '14/15/2018', '14/15/2018', '1000', '2000', '2100', '4000', '5000', 'usd', '1', '14/15/2018', '10', 'Direct', '7', '7', 'Tariff ', 'pre-paid', '1500', 'egp', '280', 'sar', '100', 'usd', '100', 'usd', '0', '0', NULL, '2023-04-30 13:05:06', '2023-04-30 13:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'web', '2023-04-30 12:44:28', '2023-04-30 12:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `fullName`, `phone`, `image`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Mohamad', 'admin@gmail.com', '$2y$10$PXtTfdgynZT8lK2AVf1c2.xrD1Pl2Q1Em9HFD27gFQdfDpGyjz3.C', 'Mohamad Emrle', '01094975264', 'http://localhost/images/mohamad.jpg', 'Super Admin', '2023-04-30 12:44:28', '2023-04-30 12:44:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customes`
--
ALTER TABLE `customes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `customes`
--
ALTER TABLE `customes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
