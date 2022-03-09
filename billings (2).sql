-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2022 at 05:31 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ouchesho_erkpay_billing`
--

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

CREATE TABLE `billings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tx_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dataplan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cabletv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smartcardno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meterNo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transRef` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `statuscode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uuid` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(50) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `billings`
--

INSERT INTO `billings` (`id`, `tx_id`, `billing_type`, `network`, `dataplan`, `cable_type`, `cabletv`, `smartcardno`, `meterNo`, `phone`, `amount`, `orderid`, `transRef`, `statuscode`, `status`, `uuid`, `user_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Airtime', '01', NULL, NULL, NULL, NULL, NULL, '09034996898', '100', '6427368418', NULL, '100', 'ORDER_RECEIVED', NULL, 5, '2022-02-23 04:14:25', '2022-02-23 04:14:25'),
(2, NULL, 'Cable', NULL, NULL, 'Gotv', NULL, '8057637329', NULL, NULL, NULL, NULL, '8227738424648289', NULL, 'Unsuccessful: INSUFFICIENT FUND!!!', NULL, 9568, '2022-03-09 02:25:02', '2022-03-09 02:25:02'),
(3, NULL, 'Cable', NULL, NULL, 'Gotv', NULL, '8057637329', NULL, NULL, NULL, NULL, '8222891914839986', NULL, 'Unsuccessful: INSUFFICIENT FUND!!!', '95b744b0-346e-4daf-8ffb-35f5322a030a', NULL, '2022-03-09 02:31:47', '2022-03-09 02:31:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billings`
--
ALTER TABLE `billings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `billings_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billings`
--
ALTER TABLE `billings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
