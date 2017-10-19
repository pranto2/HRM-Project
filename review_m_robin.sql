-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 07:41 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `review_m_robin`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `footer_manament` ()  BEGIN
SELECT * FROM about_widget WHERE id=1;
SELECT * FROM useful_links ORDER BY id ASC;
SELECT * FROM recent_post_widget WHERE id=1;
SELECT * FROM feedback WHERE id=1;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `site_info_manament` ()  BEGIN
SELECT * FROM color_picker WHERE id=1;
SELECT * FROM siteinfos WHERE id=1;
SELECT * FROM support_bars WHERE id=1;
SELECT * FROM social_managements ORDER BY id ASC;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `about_widget`
--

CREATE TABLE `about_widget` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_widget`
--

INSERT INTO `about_widget` (`id`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Wire something about your company', 'on', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `advertisements`
--

CREATE TABLE `advertisements` (
  `id` int(10) UNSIGNED NOT NULL,
  `add_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advertisements`
--

INSERT INTO `advertisements` (`id`, `add_code`, `created_at`, `updated_at`) VALUES
(1, 'enter adsense code here', '2017-10-12 06:13:56', '2017-10-12 06:13:56'),
(2, 'enter adsense code here', '2017-10-12 06:13:56', '2017-10-12 06:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `btcs`
--

CREATE TABLE `btcs` (
  `id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `xpub_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `btc_picture` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `btcs`
--

INSERT INTO `btcs` (`id`, `display_name`, `api_key`, `xpub_code`, `status`, `btc_picture`, `created_at`, `updated_at`) VALUES
(1, 'BITCOIN', 'api_key', 'xpub_code', NULL, 'jpg', '2017-10-12 06:13:51', '2017-10-12 06:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'fa-book', '2017-10-13 23:18:08', '2017-10-13 23:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `color_picker`
--

CREATE TABLE `color_picker` (
  `id` int(10) UNSIGNED NOT NULL,
  `color_code` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_picker`
--

INSERT INTO `color_picker` (`id`, `color_code`, `created_at`, `updated_at`) VALUES
(1, '4d0b0b', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'on', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home_page_managements`
--

CREATE TABLE `home_page_managements` (
  `id` int(10) UNSIGNED NOT NULL,
  `header_section` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_section` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_section` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recent_items` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_section` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `countdown_section` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popular_items` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_page_managements`
--

INSERT INTO `home_page_managements` (`id`, `header_section`, `featured_section`, `category_section`, `recent_items`, `team_section`, `countdown_section`, `popular_items`, `created_at`, `updated_at`) VALUES
(1, 'on', 'on', 'on', 'on', 'on', 'on', 'on', '2017-10-12 03:55:54', '2017-10-12 03:55:54');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_02_102258_create_categories_table', 1),
(4, '2017_10_04_070056_create_sub_categories_table', 1),
(5, '2017_10_04_113111_create_plans_table', 1),
(6, '2017_10_05_081245_create_paypals_table', 1),
(7, '2017_10_05_094111_create_perfect_moneys_table', 1),
(8, '2017_10_05_103539_create_btcs_table', 1),
(9, '2017_10_05_115012_create_stripes_table', 1),
(10, '2017_10_07_055619_create_advertisements_table', 1),
(11, '2017_10_07_062621_create_locations_table', 1),
(12, '2017_10_07_070507_create_currencies_table', 1),
(13, '2017_10_07_111806_create_home_page_managements_table', 1),
(14, '2017_10_08_082145_create_page_managements_table', 1),
(15, '2017_10_10_044526_create_siteinfos_table', 1),
(16, '2017_10_10_062124_create_support_bars_table', 1),
(17, '2017_10_10_070455_create_widget_managements_table', 1),
(18, '2017_10_10_080035_create_about_widget_table', 1),
(19, '2017_10_10_120449_create_feedback_table', 1),
(20, '2017_10_10_120557_create_recent_post_widget', 1),
(21, '2017_10_11_041245_create_useful_links_winget_table', 1),
(22, '2017_10_11_072848_create_color_picker_table', 1),
(23, '2017_10_12_103202_create_social_managements_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `page_managements`
--

CREATE TABLE `page_managements` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `menu_order` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_managements`
--

INSERT INTO `page_managements` (`id`, `name`, `content`, `menu_order`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uuyuy', 'faq', NULL, 0, '2017-10-12 04:26:37', '2017-10-12 06:13:02');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paypals`
--

CREATE TABLE `paypals` (
  `id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_picture` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paypals`
--

INSERT INTO `paypals` (`id`, `display_name`, `paypal_email`, `status`, `payment_picture`, `created_at`, `updated_at`) VALUES
(1, 'Enter Display Name', 'Enter Paypal Email', NULL, 'jpg', '2017-10-12 06:13:51', '2017-10-12 06:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `perfect_moneys`
--

CREATE TABLE `perfect_moneys` (
  `id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passpharase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefect_money_picture` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perfect_moneys`
--

INSERT INTO `perfect_moneys` (`id`, `display_name`, `passpharase`, `usd`, `status`, `prefect_money_picture`, `created_at`, `updated_at`) VALUES
(1, 'Perfect Money', 'U5220203', 'reg4e54h1grt1j', NULL, 'jpg', '2017-10-12 06:13:51', '2017-10-12 06:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `days` int(10) UNSIGNED NOT NULL,
  `status` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `name`, `price`, `days`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 1200, 3, 'on', '2017-10-12 06:10:15', '2017-10-12 06:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `recent_post_widget`
--

CREATE TABLE `recent_post_widget` (
  `id` int(10) UNSIGNED NOT NULL,
  `count` int(10) UNSIGNED NOT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recent_post_widget`
--

INSERT INTO `recent_post_widget` (`id`, `count`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 'on', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siteinfos`
--

CREATE TABLE `siteinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fevicon` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `siteinfos`
--

INSERT INTO `siteinfos` (`id`, `title`, `copyright_text`, `logo`, `fevicon`, `meta_description`, `meta_keyword`, `created_at`, `updated_at`) VALUES
(1, 'This is a demo title', '© 2017 Demo Site. All rights reserved.', 'png', 'png', 'Demo Meta Description', 'Demo Meta Keyword', '2017-10-12 03:42:37', '2017-10-12 03:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `social_managements`
--

CREATE TABLE `social_managements` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_managements`
--

INSERT INTO `social_managements` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(2, 'Electronics', 'http://robin.thesoftking.com/mama-host/', '2017-10-12 04:46:49', '2017-10-12 04:46:49'),
(4, 'Demo Page', 'http://onlyapk24.com/kingsoft/awesome/Awesome-Community-demo', '2017-10-12 04:47:39', '2017-10-12 04:47:39'),
(6, 'about', 'devrobin.com/test', '2017-10-12 04:48:40', '2017-10-12 04:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `stripes`
--

CREATE TABLE `stripes` (
  `id` int(10) UNSIGNED NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publisher_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_picture` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stripes`
--

INSERT INTO `stripes` (`id`, `display_name`, `secret_key`, `publisher_key`, `status`, `stripe_picture`, `created_at`, `updated_at`) VALUES
(1, 'Card', 'sk_test_aat3tzBCCXXBkS4sxY3M8A1B', 'pk_test_AU3G7doZ1sbdpJLj0NaozPBu', NULL, 'jpg', '2017-10-12 06:13:51', '2017-10-12 06:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `support_bars`
--

CREATE TABLE `support_bars` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_time_icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_time` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `support_bars`
--

INSERT INTO `support_bars` (`id`, `contact_icon`, `phone_number`, `service_time_icon`, `service_time`, `status`, `created_at`, `updated_at`) VALUES
(1, 'phone', '12345678910', 'clock', '9.00 am - 5.00 pm', NULL, '2017-10-12 03:42:37', '2017-10-12 03:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `useful_links`
--

CREATE TABLE `useful_links` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `widget_managements`
--

CREATE TABLE `widget_managements` (
  `id` int(10) UNSIGNED NOT NULL,
  `search` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recent_post` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advertisement` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `widget_managements`
--

INSERT INTO `widget_managements` (`id`, `search`, `category`, `recent_post`, `tag`, `advertisement`, `created_at`, `updated_at`) VALUES
(1, 'on', 'on', 'on', 'on', 'on', '2017-10-12 03:55:54', '2017-10-12 03:55:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_widget`
--
ALTER TABLE `about_widget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advertisements`
--
ALTER TABLE `advertisements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `btcs`
--
ALTER TABLE `btcs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `btcs_api_key_unique` (`api_key`),
  ADD UNIQUE KEY `btcs_xpub_code_unique` (`xpub_code`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `color_picker`
--
ALTER TABLE `color_picker`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_page_managements`
--
ALTER TABLE `home_page_managements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_managements`
--
ALTER TABLE `page_managements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_managements_name_unique` (`name`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `paypals`
--
ALTER TABLE `paypals`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paypals_paypal_email_unique` (`paypal_email`);

--
-- Indexes for table `perfect_moneys`
--
ALTER TABLE `perfect_moneys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `perfect_moneys_passpharase_unique` (`passpharase`),
  ADD UNIQUE KEY `perfect_moneys_usd_unique` (`usd`);

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent_post_widget`
--
ALTER TABLE `recent_post_widget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siteinfos`
--
ALTER TABLE `siteinfos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_managements`
--
ALTER TABLE `social_managements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_managements_name_unique` (`name`),
  ADD UNIQUE KEY `social_managements_url_unique` (`url`);

--
-- Indexes for table `stripes`
--
ALTER TABLE `stripes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stripes_secret_key_unique` (`secret_key`),
  ADD UNIQUE KEY `stripes_publisher_key_unique` (`publisher_key`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_categories_id_foreign` (`categories_id`);

--
-- Indexes for table `support_bars`
--
ALTER TABLE `support_bars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useful_links`
--
ALTER TABLE `useful_links`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `useful_links_name_unique` (`name`),
  ADD UNIQUE KEY `useful_links_url_unique` (`url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `widget_managements`
--
ALTER TABLE `widget_managements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_widget`
--
ALTER TABLE `about_widget`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advertisements`
--
ALTER TABLE `advertisements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `btcs`
--
ALTER TABLE `btcs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `color_picker`
--
ALTER TABLE `color_picker`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_page_managements`
--
ALTER TABLE `home_page_managements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `page_managements`
--
ALTER TABLE `page_managements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paypals`
--
ALTER TABLE `paypals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `perfect_moneys`
--
ALTER TABLE `perfect_moneys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recent_post_widget`
--
ALTER TABLE `recent_post_widget`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `siteinfos`
--
ALTER TABLE `siteinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_managements`
--
ALTER TABLE `social_managements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stripes`
--
ALTER TABLE `stripes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `support_bars`
--
ALTER TABLE `support_bars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `useful_links`
--
ALTER TABLE `useful_links`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widget_managements`
--
ALTER TABLE `widget_managements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
