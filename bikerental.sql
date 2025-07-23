-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 07:11 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikerental`
--

-- --------------------------------------------------------

--
-- Table structure for table `bikes`
--

CREATE TABLE `bikes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) DEFAULT 'default.jpg',
  `bike_name` varchar(255) DEFAULT NULL,
  `bike_number` varchar(255) DEFAULT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bikes`
--

INSERT INTO `bikes` (`id`, `photo`, `bike_name`, `bike_number`, `brand`, `model`, `price`, `updated_at`, `created_at`) VALUES
(1, '639d976b114e9.webp', 'Thunderbolt', 'RTL-555', 'Harley-Davidson ', 'Road King ', '200', '2022-12-17 10:18:19', '2022-12-17 10:18:19'),
(2, '639d98dd0a5c4.jpg', 'Maverick', ' MXR-777', 'Indian ', 'Scout ', '250', '2022-12-17 10:26:19', '2022-12-17 10:24:29'),
(3, '639d9969d07aa.jpg', 'Shadow Cruisers', 'SDW-222', 'Honda', 'Shadow', '400', '2022-12-17 10:26:49', '2022-12-17 10:26:49'),
(4, '639d9a054aa06.jpg', 'Sonic', 'SNC-999', 'Suzuki ', 'Hayabusa ', '350', '2022-12-17 10:29:25', '2022-12-17 10:29:25'),
(5, '639d9a66d85e5.jpg', 'Venture', 'VNT-111', 'Yamaha ', 'Royal Star ', '500', '2022-12-17 10:31:02', '2022-12-17 10:31:02'),
(6, '639d9ae38a680.jpg', 'Eclipse', 'ECL-333', 'Kawasaki ', 'Ninja ', '500', '2022-12-17 10:33:07', '2022-12-17 10:33:07'),
(7, '639d9b642b062.webp', 'Tempest ', 'TMP-666', 'Ducati ', 'Monster ', '650', '2022-12-17 10:35:16', '2022-12-17 10:35:16'),
(8, '639d9be53a7e7.png', 'Raptor', 'RPT-888', 'Triumph ', 'Rocket III ', '550', '2022-12-17 10:37:25', '2022-12-17 10:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bike_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pick_up_date` datetime DEFAULT NULL,
  `return_date` datetime DEFAULT NULL,
  `total_hours` varchar(255) DEFAULT NULL,
  `total_cost` varchar(255) DEFAULT NULL,
  `transaction_code` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT 'No remarks',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `bike_id`, `user_id`, `pick_up_date`, `return_date`, `total_hours`, `total_cost`, `transaction_code`, `status`, `remarks`, `updated_at`, `created_at`) VALUES
(6, 2, 3, '2023-06-25 00:00:00', '2023-06-27 00:00:00', '2', '500', 'MHGHDI55DHGF', 'pending', 'No remarks', '2023-06-25 10:10:29', '2023-06-25 10:10:29'),
(7, 2, 3, '2023-07-07 00:00:00', '2023-07-31 00:00:00', '24', '6000', 'MGHDUD75H', 'pending', 'No remarks', '2023-07-01 09:02:25', '2023-07-01 09:02:25');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `migration` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `updated_at`, `created_at`) VALUES
(1, 'CreateBikesTable', '2022-12-17 09:59:23', '2022-12-17 09:59:23'),
(2, 'CreateBookingTable', '2022-12-17 09:59:23', '2022-12-17 09:59:23'),
(3, 'CreateUsersTable', '2022-12-17 09:59:23', '2022-12-17 09:59:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT 'default.jpg',
  `type` varchar(255) DEFAULT 'client',
  `status` varchar(255) DEFAULT 'active',
  `code` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `phone`, `password`, `photo`, `type`, `status`, `code`, `updated_at`, `created_at`) VALUES
(3, 'Daniela', 'jane@gmail.com', '0701564753', '$2y$10$BSbwmMvBTtMoaC4EPE.AlOvKVp5f1Px.bwDkt0y/5SEnt.BW6pVq2', '6494816d2025e.jpg', 'client', 'active', NULL, '2023-06-22 17:14:21', '2023-06-22 17:11:59'),
(4, 'admin05', 'admin@gmail.com', '0702564753', '$2y$10$zs77AzQENa10HeYAh2no8./oThf7rqjUvg3peHE9qaVgwK7ADfyvi', '649fee00247a7.jpg', 'admin', 'active', NULL, '2023-07-01 09:12:32', '2023-06-25 09:17:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bikes`
--
ALTER TABLE `bikes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
