-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2018 at 05:32 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Set Menu', 'Choose from a variety of platters from out set menu section', NULL, NULL),
(2, 'Pizza', 'Enjoy our different types of original italiano and european pizzas!', NULL, '2018-08-21 05:58:03'),
(3, 'Pasta', 'Choose from our wide range of pastas. Enjoy!!', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `password`, `is_admin`, `address`, `created_at`, `updated_at`, `gender`, `employee_image`) VALUES
(1, 'Abrar', 'abrar@gmail.com', '01736985214', 'abcd', 1, 'Mirpur DOHS', NULL, '2018-08-23 01:20:16', 'Male', 'abrar_1535008816.jpg'),
(2, 'Arefin', 'arefin@gmail.com', '01764431859', 'flawless', 1, 'Mirpur 13', NULL, '2018-08-24 14:53:23', 'Male', 'my_new_image_1535139227.jpg'),
(3, 'Shimi', 'shimi@gmail.com', '01763217896', 'qwerty', 0, 'Uttara, Sector 13', '2018-08-22 22:12:22', '2018-08-22 22:12:22', 'Female', 'noimage.jpg'),
(4, 'Jhuma', 'fjhuma@gmail.com', '01632894129', 'yellow', 0, 'Banani, Chairman Bari', '2018-08-22 22:17:25', '2018-08-23 01:21:51', 'Female', 'jhuma_1534997845.png'),
(8, 'Ema', 'ema1994@gmail.com', '01893671893', 'emadhar', 0, 'Bashundhara R/A', '2018-08-23 06:28:56', '2018-08-23 06:30:14', 'Female', 'ema_1535027414.png'),
(9, 'Fatehaz Khan', 'fatehaz.khan@gmail.com', '01685518795', '145236', 0, '150,Jail road , Ghop, Jessore', '2018-08-23 09:22:24', '2018-08-23 09:22:24', 'Male', 'fatehaz_1535037744.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `item_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `quantity`, `category_id`, `created_at`, `updated_at`, `item_image`) VALUES
(3, 'Classic Aussie Platter', 'A classic aussie platter containing sausages, vegetables, lettuce and other delicious goodies', 1700.00, 10, 1, '2018-08-20 16:57:12', '2018-08-20 16:57:12', 'aussie_platter_1534805831.jpg'),
(4, 'Classic Pasta', 'Pasta with permasen cheese and chicken', 350.00, 25, 3, '2018-08-21 02:12:54', '2018-08-21 02:20:56', 'pasta_1534839656.jpeg'),
(5, 'Margaritta Pizza', 'A delicious pizza with topings and added mozzarella', 450.00, 15, 2, '2018-08-21 04:33:58', '2018-08-21 04:33:58', 'pizza_1534847638.png');

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
(1, '2018_08_20_112438_create_employees_table', 1),
(2, '2018_08_20_134541_create_items_table', 1),
(3, '2018_08_20_135413_create_categories_table', 1),
(4, '2018_08_20_190253_add_item_image_to_items_table', 2),
(5, '2018_08_23_025851_add_gender_to_employees_table', 3),
(9, '2018_08_23_031507_add_employee_image_to_employees_table', 4),
(11, '2018_08_23_080607_create_tables_table', 5),
(12, '2018_08_23_111102_add_capacity_column_to_tables_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

CREATE TABLE `tables` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Available',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `capacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `status`, `created_at`, `updated_at`, `capacity`) VALUES
(1, 'Available', NULL, '2018-08-25 12:40:56', 2),
(2, 'Occupied', NULL, '2018-08-25 01:10:58', 4),
(3, 'Available', NULL, '2018-08-24 13:50:56', 6),
(4, 'Occupied', NULL, '2018-08-24 13:37:17', 8),
(5, 'Occupied', NULL, '2018-08-23 05:02:46', 4),
(6, 'Available', NULL, '2018-08-24 13:51:03', 2),
(7, 'Available', NULL, '2018-08-24 13:50:59', 10),
(8, 'Occupied', NULL, '2018-08-24 13:50:48', 15),
(9, 'Occupied', NULL, '2018-08-24 13:50:49', 6),
(12, 'Available', '2018-08-23 06:17:02', '2018-08-24 13:51:00', 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employees_phone_unique` (`phone`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `items_name_unique` (`name`),
  ADD KEY `items_category_id_index` (`category_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tables`
--
ALTER TABLE `tables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tables`
--
ALTER TABLE `tables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
