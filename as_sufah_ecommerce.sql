-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 05, 2022 at 12:10 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `as_sufah_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `name`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Motijheel', 0, 0, NULL, '2021-07-28 06:08:54'),
(2, 'Arambag', 1, 0, NULL, NULL),
(3, 'Tikatoli', 1, 0, NULL, '2021-05-09 19:28:24'),
(4, 'Wari', 1, 0, NULL, NULL),
(5, 'Gulshan', 1, 1, '2021-04-17 21:19:29', '2021-05-07 21:49:07'),
(6, 'Kaptan Bazar', 1, 0, '2021-04-17 21:27:01', '2021-04-17 21:27:01'),
(7, 'Nobabpur', 1, 1, '2021-05-07 21:49:37', '2021-07-28 05:59:54');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`, `order`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(3, 'image/banner_image/1612446807.jpg', 1, 1, 0, '2021-02-04 07:53:27', '2021-06-09 10:23:44'),
(4, 'image/banner_image/1612446934.jpg', 2, 1, 0, '2021-02-04 07:55:34', '2021-06-09 10:23:44'),
(5, 'image/banner_image/1612446943.jpg', 3, 1, 0, '2021-02-04 07:55:43', '2021-06-09 10:23:44');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_starting_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `campaign_ending_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `campaign_products`
--

CREATE TABLE `campaign_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `campaign_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `discount_percentage` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `domain_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `domain_id`, `name`, `status`, `delete_status`, `image`, `description`, `created_at`, `updated_at`) VALUES
(28, NULL, 'Honey', 1, 0, 'image/category_image/1628157771.jpg', NULL, '2021-08-05 10:02:51', '2021-08-05 10:02:51'),
(29, NULL, 'Alcohol free perfume', 1, 0, 'image/category_image/1628157924.jpg', NULL, '2021-08-05 10:05:24', '2021-08-05 10:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `company_infos`
--

CREATE TABLE `company_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_infos`
--

INSERT INTO `company_infos` (`id`, `company_name`, `contact_no1`, `contact_no2`, `email`, `address`, `logo_url`, `created_at`, `updated_at`) VALUES
(2, 'Urrbor', '01730806526', '01730806539', 'urrbor.organic@gmail.com', '42/a Salek Garden,Moulovi Salek Road, Zigatola Dhaka -1209.', NULL, '2021-04-16 20:21:46', '2021-07-27 18:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `courier_men`
--

CREATE TABLE `courier_men` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `area_id` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `personal_document_front` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `personal_document_back` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reference_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courier_men`
--

INSERT INTO `courier_men` (`id`, `user_id`, `area_id`, `status`, `delete_status`, `personal_document_front`, `personal_document_back`, `address`, `user_image`, `reference_name`, `created_at`, `updated_at`) VALUES
(1, 17, '4', 0, 1, 'image/courier_man_document/1617470964.jpg', NULL, '72, Jalil Building, Muradpur, Chittagong', 'image/courier_man_image/1617470965.jpg', 'Test', '2021-04-03 17:29:25', '2021-05-09 19:27:48'),
(3, 25, '', 0, 1, 'image/courier_man_document/1617730355.jpg', NULL, 'ctg', 'image/courier_man_image/1617730355.jpg', 'Nokib', '2021-04-07 07:32:35', '2021-05-30 20:57:20'),
(5, 31, NULL, 0, 0, 'image/courier_man_document/1618220141.jpg', NULL, 'Rahaman Nagar', 'image/courier_man_image/1618220141.jpg', 'Nokib', '2021-04-12 23:35:41', '2021-05-11 05:20:54'),
(11, 40, '4,6,1', 0, 0, 'image/courier_man_document/nid_front_1619260656.jpg', 'image/courier_man_document/nid_back_1619260656.jpg', 'abcd', 'image/courier_man_image/user_image_1619260656.jpg', 'abcd', '2021-04-25 00:37:36', '2021-05-09 19:23:24'),
(12, 47, NULL, 0, 1, 'image/courier_man_document/1620406611.png', NULL, 'In quis et tempore', 'image/courier_man_image/1620406611.png', 'Fredericka Craig', '2021-05-08 05:56:51', '2021-05-08 05:57:00'),
(13, 51, NULL, 0, 0, 'image/courier_man_document/1620455736.png', NULL, '72, Jalil Building, Muradpur, Chittagong', 'image/courier_man_image/1620455736.png', 'ge', '2021-05-08 19:35:36', '2021-05-08 19:35:36'),
(15, 55, NULL, 1, 0, 'image/courier_man_document/nid_front_55_1622361284.pdf', 'image/courier_man_document/nid_back_55_1622361284.pdf', 'Mamun Plaza, 31, hatkhola road,dhaka-1203', 'image/courier_man_image/1622361284.jpg', 'Mahmud', '2021-05-30 20:54:44', '2021-05-30 20:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_charges`
--

CREATE TABLE `delivery_charges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `unit_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_charge` int(11) DEFAULT NULL,
  `variable_weight` text COLLATE utf8mb4_unicode_ci,
  `variable_charge` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_charges`
--

INSERT INTO `delivery_charges` (`id`, `unit_weight`, `unit_charge`, `variable_weight`, `variable_charge`, `created_at`, `updated_at`) VALUES
(1, '5000', 70, '1000', 10, '2021-04-17 07:11:36', '2021-07-30 19:20:03');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_statuses`
--

CREATE TABLE `delivery_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `courier_man` bigint(20) UNSIGNED NOT NULL,
  `deposit_received_by` bigint(20) UNSIGNED NOT NULL,
  `deposit_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deposit_note` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `discount_percentage` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `domains`
--

CREATE TABLE `domains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ecommerce_types`
--

CREATE TABLE `ecommerce_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense_amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense_note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homepage_product_lists`
--

CREATE TABLE `homepage_product_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `homepage_section_id` bigint(20) UNSIGNED NOT NULL,
  `product_list` bigint(20) UNSIGNED NOT NULL,
  `discount_percentage` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepage_product_lists`
--

INSERT INTO `homepage_product_lists` (`id`, `homepage_section_id`, `product_list`, `discount_percentage`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(42, 14, 1111, 0, 1, 0, '2021-08-05 10:36:28', '2021-08-05 10:36:28'),
(43, 14, 1112, 0, 1, 0, '2021-08-05 13:28:17', '2021-08-05 13:28:17'),
(44, 14, 1113, 0, 1, 0, '2021-08-05 13:28:25', '2021-08-05 13:28:25'),
(45, 14, 1114, 0, 1, 0, '2021-08-05 13:28:29', '2021-08-05 13:28:29'),
(46, 14, 1115, 0, 1, 0, '2021-08-05 13:28:49', '2021-08-05 13:28:49');

-- --------------------------------------------------------

--
-- Table structure for table `homepage_sections`
--

CREATE TABLE `homepage_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_order` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepage_sections`
--

INSERT INTO `homepage_sections` (`id`, `section_name`, `section_order`, `image`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(13, 'Daily Needs', 2, 'image/homepage_section_image/1626441550.jpg', 0, 0, '2021-07-16 13:19:10', '2021-08-05 10:54:10'),
(14, 'Alcohol Free Perfume', 1, 'image/homepage_section_image/1626446285.jpg', 1, 0, '2021-07-16 14:38:05', '2021-08-05 13:22:35'),
(15, 'Snacks', 3, 'image/homepage_section_image/1626449342.jpg', 0, 0, '2021-07-16 15:29:02', '2021-08-05 10:54:10'),
(16, 'Tomato', 4, 'image/homepage_section_image/1626506052.png', 1, 1, '2021-07-17 07:14:12', '2021-07-17 07:15:12');

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
(49, '2014_10_12_000000_create_users_table', 1),
(50, '2014_10_12_100000_create_password_resets_table', 1),
(51, '2019_08_19_000000_create_failed_jobs_table', 1),
(52, '2021_01_04_092529_create_user_roles_table', 1),
(53, '2021_01_04_092626_create_social_ids_table', 1),
(54, '2021_01_04_092643_create_user_addresses_table', 1),
(55, '2021_01_04_092739_create_ecommerce_types_table', 1),
(56, '2021_01_04_092814_create_domains_table', 1),
(57, '2021_01_04_092909_create_categories_table', 1),
(58, '2021_01_04_092929_create_sub_categories_table', 1),
(59, '2021_01_04_092930_create_product_brands_table', 1),
(60, '2021_01_04_093054_create_products_table', 1),
(61, '2021_01_04_093128_create_product_detail_images_table', 1),
(62, '2021_01_04_093157_create_product_units_table', 1),
(63, '2021_01_04_093257_create_product_sizes_table', 1),
(64, '2021_01_04_093340_create_product_colors_table', 1),
(65, '2021_01_04_093353_create_discounts_table', 1),
(66, '2021_01_04_093419_create_campaigns_table', 1),
(67, '2021_01_04_093437_create_campaign_products_table', 1),
(68, '2021_01_04_093453_create_homepage_sections_table', 1),
(69, '2021_01_04_093518_create_order_details_table', 1),
(70, '2021_01_04_093546_create_delivery_charges_table', 1),
(71, '2021_01_04_093601_create_payments_table', 1),
(72, '2021_01_04_093631_create_delivery_statuses_table', 1),
(74, '2021_01_04_104211_create_orders_table', 1),
(75, '2021_01_08_075803_create_product_required_fileds_table', 1),
(76, '2021_01_08_122117_create_vendors_table', 1),
(77, '2021_01_08_132345_create_product_stocks_table', 1),
(78, '2021_02_04_112638_create_banners_table', 2),
(79, '2021_01_04_100933_create_homepage_product_lists_table', 3),
(80, '2016_06_01_000001_create_oauth_auth_codes_table', 4),
(81, '2016_06_01_000002_create_oauth_access_tokens_table', 4),
(82, '2016_06_01_000003_create_oauth_refresh_tokens_table', 4),
(83, '2016_06_01_000004_create_oauth_clients_table', 4),
(84, '2016_06_01_000005_create_oauth_personal_access_clients_table', 4),
(85, '2021_02_13_093755_create_areas_table', 5),
(86, '2021_03_22_134511_create_courier_men_table', 5),
(87, '2021_03_29_013301_create_warehouses_table', 6),
(88, '2021_02_12_013301_create_warehouses_table', 7),
(90, '2021_03_29_161713_create_warehouse_products_table', 8),
(93, '2021_03_30_161404_create_user_tokens_table', 9),
(94, '2021_02_12_134511_create_courier_men_table', 10),
(95, '2021_04_16_223824_create_company_infos_table', 11),
(96, '2021_04_21_003947_create_roles_table', 12),
(97, '2021_04_21_030805_create_role_permisiions_table', 13),
(98, '2021_04_30_110122_create_deposits_table', 14),
(99, '2021_05_07_011238_create_terms_and_conditions_table', 15),
(100, '2021_05_29_120539_create_expenses_table', 15),
(101, '2021_06_05_101157_create_suppliers_table', 15),
(102, '2021_06_05_121259_create_purchases_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('0099dd05c1a736d4af2401f2cc87baaf17eba605fb1450121cafc6d010cadf7086194ec9ff4461de', 14, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-24 01:34:35', '2021-03-24 01:34:35', '2022-03-23 18:34:35'),
('00b92c9e0bd37060097f45cd952fee3e9824c62afd633a64c4841b2b3c59bd552efe6b9290ed0756', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-14 12:52:54', '2021-02-14 12:52:54', '2022-02-14 07:52:54'),
('0247911c183caecc39eb9c6e75edc99ee8171f3c20430bc194052e00a7c612b7d9b03d5189676fce', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-31 17:49:37', '2021-03-31 17:49:37', '2022-03-31 10:49:37'),
('04b59025f13de891c1f27e93d599b5a21dda8c9856acd2830de2946614e40f212fc7534f3b26b8bf', 25, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 01:05:44', '2021-04-16 01:05:44', '2022-04-15 18:05:44'),
('06f6c19bdbb9ac4745449639ef6bdf712d920c41d7a6306f7be5b44be23f295b657dcf23e265533b', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-25 10:47:27', '2021-04-25 10:47:27', '2022-04-25 03:47:27'),
('07ba364acfbac89685575dc5b7d659616ef6c60c44a54c13881654897c39015d4061287f54e2bec6', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 08:37:34', '2021-04-16 08:37:34', '2022-04-16 01:37:34'),
('07ca84cf1ba26e9bf814b0137185e5650ba964f05eed57447e224ba45eb6e28d801b0d5f134b2efc', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 00:28:15', '2021-04-25 00:28:15', '2022-04-24 17:28:15'),
('09caf8ad518ba1ced696bf08a9ef1928a9123ec37739d311b56a67f62d6856e76836003485dfcaae', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-29 10:31:22', '2021-03-29 10:31:22', '2022-03-29 03:31:22'),
('0abe10fb21b6c900f9bf0d5f730e71432a07cf2b4f030b702166c0754e199c372c3e205c781e208c', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-10 23:43:00', '2021-03-10 23:43:00', '2022-03-10 15:43:00'),
('0ac4ba845634e35dac83b8c2ad5a45eecde1ece2088592e661c7175e6f28effcf80e027c76018bd8', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-25 10:47:53', '2021-04-25 10:47:53', '2022-04-25 03:47:53'),
('0ce3b0bfad84a780f946ac69d20ba5c7b221eea1d659bfbb250e861a329651adb445e1b3370031fa', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-19 11:04:08', '2021-04-19 11:04:08', '2022-04-19 04:04:08'),
('0e7db008cccf7859985b0c2074ed6f41728e6d5f82a2f016265c21ad3bfff3b6985f608471db7c29', 14, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-10 22:36:52', '2021-03-10 22:36:52', '2022-03-10 14:36:52'),
('0ea44e539a8d46ffb8cfe4a61a71d0f920ea2cfdc33f86454cd1568416dc267d8039da08cbac0380', 32, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-16 10:11:07', '2021-04-16 10:11:07', '2022-04-16 03:11:07'),
('10d614647711e6ffda6743d76b3c8818a2808845b69bebf18760c63ef0428f0ceed4f0f49bfcde25', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-24 21:16:05', '2021-03-24 21:16:05', '2022-03-24 14:16:05'),
('11eebc46358d03ab533d3a77c706a06c3e56c0f578bcb63945629a4f006b551fd4b0d3ae6306aa1b', 16, 1, 'Laravel Password Grant Client', '[]', 0, '2021-05-08 03:15:44', '2021-05-08 03:15:44', '2022-05-07 20:15:44'),
('123801cde0a9f7245e64fc5594592b9d28fb1c0706c30677666770bf539053dc59a798d4f901c44e', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-05 06:27:38', '2021-04-05 06:27:38', '2022-04-04 23:27:38'),
('12641cfb90176c9e2da1b2e29c54a049b2a623b944f47b5e574a691a4c072b18a6868d5e1c1b9624', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-24 01:35:13', '2021-03-24 01:35:13', '2022-03-23 18:35:13'),
('16c08fcb7680da8ae2912181da6d2a290219af50c15c6a739603449e5d2987c3ac76beb2c3c0f726', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-25 01:08:51', '2021-03-25 01:08:51', '2022-03-24 18:08:51'),
('175f6993a7b8c0851ee30e7aa6570e0684483bf447941d72060f0506a69a2b37d27277c2656ce78f', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-19 10:20:40', '2021-04-19 10:20:40', '2022-04-19 03:20:40'),
('17e0de7f53dc77c191bfb8a2cc6d213f6d5628bbff0bfe496726398f64e90fba9e11ce25bdfaff33', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 10:04:23', '2021-04-16 10:04:23', '2022-04-16 03:04:23'),
('183923f7c033865ed16984a936045f3848d340cded650ecc10d1c2d051cb6d12f11c7b2dca1bc84f', 25, 1, 'Laravel Password Grant Client', '[]', 0, '2021-05-11 06:21:24', '2021-05-11 06:21:24', '2022-05-10 23:21:24'),
('1a78706fff33800f2f69e23a4841a5df8a2cf99d7dcb5cb55283a6c74e7f0ded5f4e13bedd258ac2', 32, 1, 'Laravel Password Grant Client', '[]', 0, '2021-05-08 02:20:12', '2021-05-08 02:20:12', '2022-05-07 19:20:12'),
('1c08446ebd59328781495658c69129dff90097d0e4fe70e81dc0d05b127a186f627cd4ee24b1666f', 34, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-17 22:52:23', '2021-04-17 22:52:23', '2022-04-17 15:52:23'),
('1dcbcdd189881068567791759fa2099768d328387e256d2ed6f76341da4ac6f9130e09e56c048dcb', 39, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 00:30:48', '2021-04-25 00:30:48', '2022-04-24 17:30:48'),
('1eaeae9f51bbbe57af07661781e6132a297a5bec83f3d02d3951f60694e758578894fc14d9d6954a', 16, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-14 05:27:06', '2021-03-14 05:27:06', '2022-03-13 21:27:06'),
('1eb7ac7cd043abc77c9009dbd5d260e5fcc451b64e59c2be49c7e183d6258c171e13a03c09faae2e', 31, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-12 23:35:41', '2021-04-12 23:35:41', '2022-04-12 16:35:41'),
('209af9e82d49c7a260864ffd5adf6b7f33e7449726cbdebf1f87795fb2bbbdc109211330191d9e94', 18, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-31 19:11:58', '2021-03-31 19:11:58', '2022-03-31 12:11:58'),
('20eb91825711737b1679191bd661fe69767809ba6f64fb86694baf74c4e455c52c2da61c13dde4e9', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-24 21:00:20', '2021-03-24 21:00:20', '2022-03-24 14:00:20'),
('24d83bbb8d6e6d0c7e3155e9a0d34fa9e0e8bdac7a8157b435cbbcd331ca89a3267a2ef33874c498', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-09 17:14:20', '2021-02-09 17:14:20', '2022-02-09 12:14:20'),
('25083ddb73f12cec8ec36422aacc8fa082b6e08be74edf29b78da1fa25f94f55d6fd7b02b71367a3', 14, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-11 03:56:43', '2021-03-11 03:56:43', '2022-03-10 19:56:43'),
('26ccf14e05f7e9c8ef984fb07562ea99cb3832fbabbdb5958cb656dbf294e4d2cb1a7be9d1577f39', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-17 07:28:33', '2021-04-17 07:28:33', '2022-04-17 00:28:33'),
('2838137535764c3e6f421322112850afb6cccb75a71ade182e00110d78ffb8f6043d3b7952fd293b', 41, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 20:05:52', '2021-04-25 20:05:52', '2022-04-25 13:05:52'),
('2984380358779db252536ebff995a725b83135b397aa7a3728f8f9f308cf8dc11c804b6b39496d13', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 09:58:21', '2021-04-16 09:58:21', '2022-04-16 02:58:21'),
('29dff5c4badf3b011eb0321b397b4566e46b27560afebcb996ec90ddbe0dcf4c8f9a7ca0b0db86e5', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-17 07:30:26', '2021-04-17 07:30:26', '2022-04-17 00:30:26'),
('2abe7e9c2c76d8642d90fb4e05adb844d8da2bf4f8b8051509d74cde5df20d87b4158f6de96c8dcf', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-10 21:17:26', '2021-03-10 21:17:26', '2022-03-10 13:17:26'),
('2d009298243d5e277ab64dbc69a381977ddba2ea6ac6eb29abd4f41fa05ee862f6664f8b2ab9f3a8', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-25 00:48:53', '2021-04-25 00:48:53', '2022-04-24 17:48:53'),
('2e0b4d617431c646532b524f8f011f87dd7f3d3aa5dbf061d378f5f1803b61891a5952a7bb729b95', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-09 17:22:41', '2021-02-09 17:22:41', '2022-02-09 12:22:41'),
('32c7380a2d1fd209594048e762c766834f39238cd94d66f44eec4ae09358b23afbb15bc24c83fd48', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-31 18:24:31', '2021-03-31 18:24:31', '2022-03-31 11:24:31'),
('34efadc950ecd03eed6f81cacad1de35dc73037014355acd5b05f354a6e2f09ec483ccb643f8d9b4', 33, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 09:28:20', '2021-04-16 09:28:20', '2022-04-16 02:28:20'),
('35f719bec84848dac8f3d46ef91272136da9a2566df6837217c21004611c65f42fed28444d6e382b', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-19 11:02:03', '2021-04-19 11:02:03', '2022-04-19 04:02:03'),
('38e769dc94b57c3c56b3642873e6593fa72e7765f5f2c4b0c78ef7877e9dd5eb0332104ef4618e05', 18, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-26 23:30:43', '2021-03-26 23:30:43', '2022-03-26 16:30:43'),
('3cc3866e6ac38a3c70558efb494e72bbf2a19fce6be00156c32b5ab0990633e4ca650cdf8ba983cc', 28, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-12 18:28:29', '2021-04-12 18:28:29', '2022-04-12 11:28:29'),
('4227a619b9f1154d197a5344dece8a41998bc73b33921ce1a8f508ba5f889a7512fb46b5ef7938d5', 2, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-14 12:51:13', '2021-02-14 12:51:13', '2022-02-14 07:51:13'),
('4299db33a2906e30ec47b4c38e834ea76c7c8cad3bd944dd57cd96a25a19179a0a649831d7f480b8', 18, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-25 08:29:11', '2021-03-25 08:29:11', '2022-03-25 01:29:11'),
('439286d5c36a31025e71b39cc5cb0758f86f08c04fac1d7216d265a6bf40464f9da005dfb7214b0f', 33, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-16 09:41:56', '2021-04-16 09:41:56', '2022-04-16 02:41:56'),
('454d445b268d9fab70c2e6196460feb09589f10d18fd620ae39c9c9f4556bcc29ea38812208b5be2', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-12 19:59:47', '2021-02-12 19:59:47', '2022-02-12 14:59:47'),
('4827f949cb14103f6f88777edd7ada8812540221aa1360e0ab86d9c17195e123a4ed8e433561b85b', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-29 09:58:08', '2021-03-29 09:58:08', '2022-03-29 02:58:08'),
('4985c482700f74412bbc4f4d62ffcbbfc83c9690f6d8873d1375038790f0c8d51893b2eea424f5be', 14, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-24 21:04:18', '2021-03-24 21:04:18', '2022-03-24 14:04:18'),
('4a4ad3a92e76ce9ac0b906944ce0f1eae163c42fa17a9637e47c7405d9cfe2121d94f1c34b0d87d8', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-17 12:29:57', '2021-02-17 12:29:57', '2022-02-17 07:29:57'),
('4a8e40481c492cf031b137eda5a91139573f8e73358909ecfea2395fb0d0a76c0367932c357e9fe2', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 10:33:14', '2021-04-16 10:33:14', '2022-04-16 03:33:14'),
('4ac959631b4f034a40866efb7110381cbc2192ed5678ec6bb4482abbd6a057a0c0edfded387a272d', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-16 10:01:54', '2021-04-16 10:01:54', '2022-04-16 03:01:54'),
('4b7336de17a41cc6d8e3a1b822f1ba70443b8111362e303ec15c51edd243cecde6651725b1a11316', 38, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 00:15:53', '2021-04-25 00:15:53', '2022-04-24 17:15:53'),
('52dae034e9da765ccf17fc05a58785f34e58e6c39f137e7c8119403e8a4585fb10f5337f5950209d', 34, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-19 12:22:25', '2021-04-19 12:22:25', '2022-04-19 05:22:25'),
('533a6bef61ae7c7d7a234863f8e4dd1ddc4e24d626db9383766bb6be5a6e06a8ca1a16bea7faf2f0', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 08:34:51', '2021-04-16 08:34:51', '2022-04-16 01:34:51'),
('54f191b2cf829d79f0b6acde183f6260f051ef8335ca4a8b4e778adec5bf13f9037eec46ffb36990', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-02 06:52:09', '2021-04-02 06:52:09', '2022-04-01 23:52:09'),
('58101d2202c38384962a10aa8241de0ee179140ab7a59e8e3e0f791a60ff04c9fe556d412e358216', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-17 11:32:11', '2021-02-17 11:32:11', '2022-02-17 06:32:11'),
('592963d5bdd7a4c7a564ed4d4c6093854bc52a3915d38f9029e2d3093594d8f87e5a842220eb2b90', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-31 06:56:41', '2021-03-31 06:56:41', '2022-03-30 23:56:41'),
('595c9d6c158a888903db136b9bde9f87b306b8b3e7cc3eb4d97e0b20de56b9e71b859cbc30dd76d2', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-14 12:47:40', '2021-02-14 12:47:40', '2022-02-14 07:47:40'),
('5a54f665d68f07cea85bfefef94c0e14960d215eb7cb8aa7b4235859438dcc2770e5c341f8aa32a5', 14, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-10 22:41:01', '2021-03-10 22:41:01', '2022-03-10 14:41:01'),
('5d20ba01fc01d25c6d3be5fa01bd6525c075a1949c2a4b593814f0d5e25aac4fe968e9d6238af7e8', 32, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-17 21:54:39', '2021-04-17 21:54:39', '2022-04-17 14:54:39'),
('60fccc42429249d160774666f2a7f043f909ea8564e21b187a4cd2375bca1c8d5726f0a3a2e36a7a', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-09 17:18:34', '2021-02-09 17:18:34', '2022-02-09 12:18:34'),
('62631997ff29a4f0ffdf253546b0716b272df049c67c7b691f5a7d7ab9b3a529be96dc5b8969055e', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-11 00:51:40', '2021-03-11 00:51:40', '2022-03-10 16:51:40'),
('6338a91e0058f63b46bc788cbaf743af087355a12894cb55896408e01d4ed6bc014327ba5829d1b7', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-26 23:04:00', '2021-03-26 23:04:00', '2022-03-26 16:04:00'),
('6348fe29fd96e2d8ecab3b6efd3f15baa8dd9462d221a14d602e86955bc8b795e9cf8d4ce494197d', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-09 18:16:29', '2021-02-09 18:16:29', '2022-02-09 13:16:29'),
('63bd3d91caac02b8140f43686de03a013a230f7e56544502e701f5c9cbf7ddb943b3aa26ddeb4f78', 32, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-17 07:25:45', '2021-04-17 07:25:45', '2022-04-17 00:25:45'),
('63f71f5396a5afc15a9e219cc1b08caedcbb6d6a136561b0d8d1784becc423dbd8f0fec6ab1d87e2', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-19 11:04:24', '2021-04-19 11:04:24', '2022-04-19 04:04:24'),
('659c72ffa4028028ad3668aca9acb6d5e560759817a4931a14d63eb4f43e7bed23ca0a19e498144e', 32, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-19 10:41:31', '2021-04-19 10:41:31', '2022-04-19 03:41:31'),
('66618cb94e6186862d62306ae5827230be92cd6b30693e5580ace81c98586f9c68771e510a51e5b1', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-17 05:30:54', '2021-03-17 05:30:54', '2022-03-16 22:30:54'),
('670ccb014c77e4c77ac508cb8231a7459bdc1f773ae734b4531c2dc8f246732ec917db6ed7a33bac', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-25 10:47:09', '2021-04-25 10:47:09', '2022-04-25 03:47:09'),
('671bc4ab9aa1ab651bc05a4224703be435f9a2c1a115043b15e44a78bd39bc2b63108f86983730fd', 40, 1, 'Laravel Password Grant Client', '[]', 1, '2021-05-02 05:37:26', '2021-05-02 05:37:26', '2022-05-01 22:37:26'),
('69a1c1eda72979c1b2f099a3d22d2dc376197323892bf1134573085d54acf4519ba983ecebee631e', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-19 12:21:12', '2021-04-19 12:21:12', '2022-04-19 05:21:12'),
('6b1d5b08d73bc49c74f7591f031cca319bd4859a608e5ac207c39973b3cb2b0197d41fc7d98e5258', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-10 20:47:04', '2021-03-10 20:47:04', '2022-03-10 12:47:04'),
('6b5901cb8e618837bdae1b6c04abe11b4155c87367b43697bfe96f42c8711d16a7d88bac92fedda3', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-26 23:13:04', '2021-03-26 23:13:04', '2022-03-26 16:13:04'),
('6c54a2be8a60a0d6c2f848330e11b6d9c42785baf3c0be5016272112affb16275bf51b61c1f8579f', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-14 12:52:33', '2021-02-14 12:52:33', '2022-02-14 07:52:33'),
('6c569f313a9526b9fa2a2d574bc5692471570a5493f69683e02332b9d7e289eb73c5d14b3a0a584f', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-17 22:00:07', '2021-04-17 22:00:07', '2022-04-17 15:00:07'),
('6cc8eab1467f5b3b2856ba1ab29ff1db821472387605a272e67f71df3b77762c7aefdaba56f23553', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-14 20:50:00', '2021-03-14 20:50:00', '2022-03-14 13:50:00'),
('6d22545cc0769bac8009717419e25812137dbe7aa84586f88168c91fac9450f9992a2279e84e20c2', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-14 14:05:11', '2021-02-14 14:05:11', '2022-02-14 09:05:11'),
('6d397482892c75e199d5d0a1a840f110f7510ade57c30f08c4c4ad0c501e03863b840f415052d62e', 40, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 00:38:39', '2021-04-25 00:38:39', '2022-04-24 17:38:39'),
('6f3e610b8f4a2ddfe913201519029cdd85a9ad6f5548944ded49add5729b0db943a72d43adf2534c', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-19 10:19:33', '2021-04-19 10:19:33', '2022-04-19 03:19:33'),
('6fb80e933ba168ce4277c048b5b3ce7d763c4dcfd8e03957397c3505907b7421ea7582c02a6ad1e1', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-27 02:44:10', '2021-03-27 02:44:10', '2022-03-26 19:44:10'),
('6fcdc55ff56f38c8a6e4715e87c78e0c4745406a9d9737dd3f8fef4ea8f6e42a9d1b498ce3373430', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-24 21:59:44', '2021-03-24 21:59:44', '2022-03-24 14:59:44'),
('7044623419c6b53b0daa8c947f7903b21917adecb32b8b50bbe49f5b69ac087dabce3de55caa5d08', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-13 12:32:28', '2021-02-13 12:32:28', '2022-02-13 07:32:28'),
('732251f7983ed930d6680bf819797055906a245433cdd800bffca771980ce36346a3de6da0807c5f', 14, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-24 01:35:48', '2021-03-24 01:35:48', '2022-03-23 18:35:48'),
('74f8cab8e28d2fcc05fa77098b099e428610b89cd5a098e39e332a1ff86ca8dba3134a9d8373613b', 2, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-09 17:09:49', '2021-02-09 17:09:49', '2022-02-09 12:09:49'),
('7595d006572353a14f55d86fa5094c14dd989d21c3abbc6801b13b997daf12c33c34e6b5445f6952', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-25 10:44:21', '2021-04-25 10:44:21', '2022-04-25 03:44:21'),
('77bca849db2381ec9e8396a3e7367bc23be177c848bdf8f5f63eaee1d017630dafa4cf6e9f0071b3', 33, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-16 09:43:18', '2021-04-16 09:43:18', '2022-04-16 02:43:18'),
('78c45f27a1b8411acfa530a14232a7b8663f9e5f8a40a66e1d073e144d9b7a9609c510d638c66fce', 16, 1, 'Laravel Password Grant Client', '[]', 0, '2021-05-08 06:01:08', '2021-05-08 06:01:08', '2022-05-07 23:01:08'),
('7bab80230b6f1ea281f288b6c06a2432eadb9d987158c908c046bf6b8dcf7295fdb847824fb0c60c', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-17 12:12:38', '2021-04-17 12:12:38', '2022-04-17 05:12:38'),
('7c4361790d1b3e4297b83554e31e52932e18ba78c769c6755f860765d06ae8546fe76797927593bf', 20, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-07 03:48:40', '2021-04-07 03:48:40', '2022-04-06 20:48:40'),
('7df5ef59f576ddc7dbad18cdd86640be8daf268daa2a26d669b4d3d8129d5c4500c6d211bd00295d', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-17 12:56:40', '2021-02-17 12:56:40', '2022-02-17 07:56:40'),
('7fbf588ec53994e622ec5de7a5049f3e327d4a96831cff481eeffd1425b6096b55a4cb3829681449', 38, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 00:26:36', '2021-04-25 00:26:36', '2022-04-24 17:26:36'),
('7fc49819ce8564fc135e68d4e247b21359a5e8be8e384e52d6e5065e46d70c90c5a2a0ec0be0a249', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-27 02:46:12', '2021-03-27 02:46:12', '2022-03-26 19:46:12'),
('8124b9bfd07b58b765437e4873b665faed1b80d4dc581a5ab9c83969bdfdc996885d91fd2f50561b', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 09:16:45', '2021-04-16 09:16:45', '2022-04-16 02:16:45'),
('816bdc076b39f7ccebeb17bbcfcb1122dc684de438847028dbab4b436058afedb3feec0413e0919a', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-26 22:12:02', '2021-03-26 22:12:02', '2022-03-26 15:12:02'),
('83e5f87d9439de2830401382d0bbf61f391061a84ee0552781248727df31215e4b54d47291377fda', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-28 02:31:48', '2021-03-28 02:31:48', '2022-03-27 19:31:48'),
('8530f1f684c521e928ee15b4b6e40f6a9679e61d70224f07c822764f1f43f011288111f23c1e61e8', 25, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-15 23:36:41', '2021-04-15 23:36:41', '2022-04-15 16:36:41'),
('8553907384c4d78da14ec34b1ec351a1bb14d6ee7b452c5d43c3d8c1dcd7e5f4f6a7c81c498d34db', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 10:28:11', '2021-04-16 10:28:11', '2022-04-16 03:28:11'),
('871c08c7772c84db9bd7f21d49040b4b965f9e6a093cd3519481b1bd66d361e1bf74b5534f0b5021', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-25 10:46:46', '2021-04-25 10:46:46', '2022-04-25 03:46:46'),
('898fb33cfe29a0f13893c185e1ec3dcd7c8c95721110a55a9287b8274f3a9093391bdf04f03dc4b4', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-16 10:01:20', '2021-04-16 10:01:20', '2022-04-16 03:01:20'),
('8ac493a3e9e50fd97539f0f73340d6b2d1413773202f3acfd9972f508b1e5379b9b7a89c3d93c097', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 10:21:39', '2021-04-16 10:21:39', '2022-04-16 03:21:39'),
('8b1a282793d3a6c6369da9f6fafa8ac44898e41236ce1ecf26becc9c5629001573922f52e9dabbb6', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-02 06:53:06', '2021-04-02 06:53:06', '2022-04-01 23:53:06'),
('8e73814741b7d4d3ab60ac54662bd323e3f3c7e32e882786054049a9153832f3c326a37f97415e4e', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-27 02:51:32', '2021-03-27 02:51:32', '2022-03-26 19:51:32'),
('91eac447b51ca4ce8d63964e15addf513b3222c11d66d743059793c23e3d893170909929a274e1fb', 2, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-09 17:09:35', '2021-02-09 17:09:35', '2022-02-09 12:09:35'),
('925d74f5dab8c621a4be0fb048991d5a9ef5364af676d844e0e6145386a11520e310c83ed101ca5d', 33, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-16 09:46:06', '2021-04-16 09:46:06', '2022-04-16 02:46:06'),
('932fa30cfae9bf08ca46f199e957d19328e1ff0bc5a2a13dac3877a4926577052473279fa8262419', 40, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-25 07:11:47', '2021-04-25 07:11:47', '2022-04-25 00:11:47'),
('9368141a03b40266c4ed1420894f7218b67ca3ba65059332d68276fbe869aa7c88cfedcc87124834', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-17 22:32:46', '2021-04-17 22:32:46', '2022-04-17 15:32:46'),
('939e5b273ea36de48fbcd0d6878b169787efc1d4b40d0534865643187555c4af4cda5eb86c58bc1b', 34, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-24 23:44:38', '2021-04-24 23:44:38', '2022-04-24 16:44:38'),
('9afc69171961f401fcc5ab2f08ccd270fae1e04d85681d5a8514ee562d6ded1afdc0f7548736bbb8', 34, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-17 22:49:51', '2021-04-17 22:49:51', '2022-04-17 15:49:51'),
('9b3ecaf7b95718c6dec93b140e4ceba08d38c3f8c4020e5e26bc7f32aa46b0860911d8742e971152', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-05-02 03:24:02', '2021-05-02 03:24:02', '2022-05-01 20:24:02'),
('9de01259fe104aa11969fdd7784542664410daf6479b42d4b480bfc0df73e6979b1e189de76b9914', 32, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-16 21:15:43', '2021-04-16 21:15:43', '2022-04-16 14:15:43'),
('a054b61be4432da4fcbf3f037026e401a6616ff70b5d38eb77a91b7e96797d7e5c7e61ec89305f4c', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-14 12:00:50', '2021-02-14 12:00:50', '2022-02-14 07:00:50'),
('a10b2b8ea504b704189dff1faf75bb72fcafffb70a5f55bbdfd43259cf9f76ef17088019b0dba22e', 38, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 00:24:37', '2021-04-25 00:24:37', '2022-04-24 17:24:37'),
('a1b91d2faa4a9d6f0fb7349a20a8411d5f94d72d72428cd2ee0947e3b2f08768720d2f70303d99ac', 13, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-10 22:04:32', '2021-03-10 22:04:32', '2022-03-10 14:04:32'),
('a3e7c9c6e5353d6d4ccf3250ae71c589e1b432466fb99d43d7eb605ce0560ae5c001a440754efaa0', 14, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-10 22:43:36', '2021-03-10 22:43:36', '2022-03-10 14:43:36'),
('abec821bac76c5bdaf4b21c348e6e2f0430c00e3d73df259fba2dee9b9a4cf9b01954ac25cf40243', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-27 02:40:13', '2021-03-27 02:40:13', '2022-03-26 19:40:13'),
('ac6df9539e343d8f09b87367dae0a82b15e7a085afd345c7d5a847e34fc76eafd6041e020667630a', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-19 12:22:04', '2021-04-19 12:22:04', '2022-04-19 05:22:04'),
('acfd185793c8eff20a97451d98a3586ae126c4b9281569b0ce159c5986aad9e28860218eb15c774c', 40, 1, 'Laravel Password Grant Client', '[]', 1, '2021-05-02 03:18:47', '2021-05-02 03:18:47', '2022-05-01 20:18:47'),
('ad691cd0a02f3842e0b3f99fc70d8a97cfc0974233e31e516cd76b8f8c1ce19d8a038d6d1f457dd3', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 10:48:11', '2021-04-25 10:48:11', '2022-04-25 03:48:11'),
('ad8ee7506f3fcff5b962a23e1cf0aeee52be3b3ea82d508cecb5b614a5838f4fef3de54191c95435', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-07 10:42:44', '2021-04-07 10:42:44', '2022-04-07 03:42:44'),
('adba82fa0d6ed8f74a732854f0fcc1b3f1de436e626a2937a48c15a910768c9f28cfe41ae1e5e793', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-23 22:49:43', '2021-03-23 22:49:43', '2022-03-23 15:49:43'),
('adee568b09664aafaed875c9511718febbdbf0093926277e0b9e976923489235f800efd7262d2b61', 14, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-10 22:34:35', '2021-03-10 22:34:35', '2022-03-10 14:34:35'),
('b0315a744b5394b662d361f0e720dd21f1d20ad52723438c95359bb12bcc6ace06f05887ea38aad4', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 09:54:00', '2021-04-16 09:54:00', '2022-04-16 02:54:00'),
('b08679bfc3576a70d568618344b43d1a67855335a29560683077eebe12b7906cd40148b3f302bb85', 32, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-19 10:24:49', '2021-04-19 10:24:49', '2022-04-19 03:24:49'),
('b2a5ac82c83b28e470cf1cc716c88d55dbedc5cf6b1cc4ae16acd8376d17fb517df4bcee1894215e', 38, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-25 00:18:23', '2021-04-25 00:18:23', '2022-04-24 17:18:23'),
('b356110c5d072aaeb7aac380500b76ea7735cfd1028413e4798b98bd926dec3e3a99a13f969d4ffa', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-12 22:15:29', '2021-02-12 22:15:29', '2022-02-12 17:15:29'),
('b5f18e4fece3f1d109482f2399ff90ef0abf6d00268ee8caef9dea2698b0cfe8240eed26a1665657', 32, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-18 00:12:05', '2021-04-18 00:12:05', '2022-04-17 17:12:05'),
('b740fe41ecf2a4ff001c8299b27fd411f1f3e58bf08246aadef80f8410f65c7c4d39c401137ae23c', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-26 22:08:56', '2021-03-26 22:08:56', '2022-03-26 15:08:56'),
('b81173c60ed3716c40898b0b4660a15ec31981f9995e6fac42aeb772252adc591545f7c76fa1d579', 40, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 00:37:36', '2021-04-25 00:37:36', '2022-04-24 17:37:36'),
('b81c96aea2072399798946098fa6bc64d5521ba5d12ff78b347d2405db1e73c74f7d4fe153925db0', 15, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-10 22:46:23', '2021-03-10 22:46:23', '2022-03-10 14:46:23'),
('b86a31fe1ca86d1d5f50abb7c4ec251b13a908038ddd869c3afe3d3de87692cd674cb5aca3b678d2', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 07:38:16', '2021-04-16 07:38:16', '2022-04-16 00:38:16'),
('b86cfc1972ca1fea742e0b8d275652a99a78797ae99d39bb5952dc6e798cba8051ba51d67f16a2e3', 2, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-09 17:14:27', '2021-02-09 17:14:27', '2022-02-09 12:14:27'),
('ba9b67a620e646062714e96ca2e21e923ac2c256b136b8658d5f6a4d6fabbc4d2fe95b62748bf148', 32, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-16 07:58:58', '2021-04-16 07:58:58', '2022-04-16 00:58:58'),
('bb5260658d70e9e16bfb291f383525068e7e85e8a26fc1b1dd4a549ad5ccab43ff2241ba9fe210d7', 40, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 19:44:21', '2021-04-25 19:44:21', '2022-04-25 12:44:21'),
('c0e835ab91b3aa95752aea7488256d93d27937b6dabc9846ed16fa4d1b8195ae53745d50e2cade6a', 38, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 00:27:39', '2021-04-25 00:27:39', '2022-04-24 17:27:39'),
('c164c3c7d29e6b0333082490d2cde8c870222aac0c903e083a138666e50ab873c534e288a01f3a4c', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-17 16:06:03', '2021-02-17 16:06:03', '2022-02-17 11:06:03'),
('c220bf5900e1ced45821c28d7ad74df269966e981902d17df70be85ea1ff2d57cc20dc38ec9b6be6', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-17 22:24:47', '2021-04-17 22:24:47', '2022-04-17 15:24:47'),
('c342603e2ddd87573cc4a6b2aae0325aa949c7f3e38e2f491ccb626be74fcab62c0649f61f12e399', 14, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-10 22:32:03', '2021-03-10 22:32:03', '2022-03-10 14:32:03'),
('c4bcf2183565175b4f29d037bf6b1889347cc08b6e684642d1b630157a54d43ce0fdabdc0a005b6b', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-09 17:33:59', '2021-02-09 17:33:59', '2022-02-09 12:33:59'),
('c4e0de20bc7558a81fa3f93e95da4a2fb633454704b78a848129f24c6ed7675d2918572b5ad01373', 12, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-10 21:57:22', '2021-03-10 21:57:22', '2022-03-10 13:57:22'),
('c4f57ae068e903cedd7c7ac2344b2e3c738f39e9d9937b4f26e59a7d4c3a7b416b19d3a6d24c1925', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-19 11:05:22', '2021-04-19 11:05:22', '2022-04-19 04:05:22'),
('c604cc9e8606c88ca9a1a291fe0116d225d667c6ace92098656dc3594ad289d9fe759adc6dba0873', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-26 22:06:13', '2021-03-26 22:06:13', '2022-03-26 15:06:13'),
('c6dd9dac047c3614e8c73cb5d25ba01346ac5f70e2f4f958ace1e3d6d63a19889c3711e5b11b2d4f', 33, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-16 08:33:54', '2021-04-16 08:33:54', '2022-04-16 01:33:54'),
('c6e3eaab01caf120945f18289db8c160c81c76ac31d6faad84b2992d605ca5e65014f7f81856415b', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-27 02:57:05', '2021-03-27 02:57:05', '2022-03-26 19:57:05'),
('c8ca569c4f7d7b29b08522797304465dd0e983c0fc70c2c0d38c9fef2c6a16f27b8287278c609a21', 39, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 00:31:36', '2021-04-25 00:31:36', '2022-04-24 17:31:36'),
('c96dfb94a54656287d3c73e30e4abce18f132439c286b6bf3cb6a98d516e9cf202934f495e7e108a', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-19 11:05:38', '2021-04-19 11:05:38', '2022-04-19 04:05:38'),
('cc8ae8004260ee9f255da45b78da4bdb7aa0a0e0799980354ed17885373f1edefe404562cc829979', 14, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-28 11:47:27', '2021-03-28 11:47:27', '2022-03-28 04:47:27'),
('cdcbe1d38a600bcb65928ce91d879f03e2c5acb818934d7effec8ed727e524f5781698cae5abebde', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-17 12:47:37', '2021-04-17 12:47:37', '2022-04-17 05:47:37'),
('ce4d311f9f75c4c97ed73e6518a3ad15be61da90ba0a4f21d60a9db40b79f7c37af917ec669d50aa', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-10 22:35:54', '2021-03-10 22:35:54', '2022-03-10 14:35:54'),
('ce777d9c338b7fd979142b41756dc96a779351a0906ee251c2f65480f78cb5dbd7fa191ed68a31bc', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-05-02 03:20:22', '2021-05-02 03:20:22', '2022-05-01 20:20:22'),
('cebecba3f499d74f0bc76c21d560388cbbaf464cef1a9c725f6c4858e63fbbe70967493d610bcd9f', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-25 00:26:26', '2021-04-25 00:26:26', '2022-04-24 17:26:26'),
('cf3de0e6f1f6b6ae09a14ad55c59c67ed5557b2911bea97f48b696033e874c5ebc8426121069a279', 25, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-07 07:32:35', '2021-04-07 07:32:35', '2022-04-07 00:32:35'),
('cfa731c081a72857c8aa024171340a912c599e14450068f7d45335ac14693e67d51be6fa3bccf5c8', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-14 12:39:45', '2021-02-14 12:39:45', '2022-02-14 07:39:45'),
('d0258b5228b0ba8b4a582303d65324b2f46f2b6186c920c7c558d8a65efbe01398c9c758eefe2051', 2, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-09 16:42:17', '2021-02-09 16:42:17', '2022-02-09 11:42:17'),
('d04663d9985eca93ba47b286096267dbb8a6b280c48d006f5798fb418d2a0b9538789a0245d5857e', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 09:51:28', '2021-04-16 09:51:28', '2022-04-16 02:51:28'),
('d194c40f3d5bbaf68c44244a1d5efab2b5a8545e771a0045362decc469abd1c65cad744b72440cf0', 19, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-04 19:44:46', '2021-04-04 19:44:46', '2022-04-04 12:44:46'),
('d3ecdb1c882384b681e6ed22d1a5c7cd4772095bef245e1c2b1ae77f6583956d95b87ae8826a9200', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-17 12:10:11', '2021-04-17 12:10:11', '2022-04-17 05:10:11'),
('d472870f657f6d570d54073a52e7f4b7a450482529937c32b9914452cab8b2d6c3994c9c2fac5fe2', 2, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-09 16:25:38', '2021-02-09 16:25:38', '2022-02-09 11:25:38'),
('d5122a3eaf01b779e2956a9fcc7a40ddc8ba4370774e223dc191ef4e952ef04b54171bff9fb1e732', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-12 22:27:32', '2021-02-12 22:27:32', '2022-02-12 17:27:32'),
('d620815b6a47509817683252184859b91403d8963779f2f8fbf145af52d077dc89c30e8182a5c950', 14, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-10 22:26:06', '2021-03-10 22:26:06', '2022-03-10 14:26:06'),
('d795ebcf228301b8587928585a7c526b79ca199e78d494525b9c0c94e17f9bb28b7e153db743f6ac', 32, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-17 22:28:34', '2021-04-17 22:28:34', '2022-04-17 15:28:34'),
('d7a34988f25fcf1de0caa2b122348130dd14b1c7ef5b34ab480a68794d26c8f2137869665c707db5', 18, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-26 23:29:38', '2021-03-26 23:29:38', '2022-03-26 16:29:38'),
('dbdc0554394760037091f3b6169c5608b209506acbf89c5f70d26f49b718cbab5f192a7b2164291c', 9, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-08 02:55:46', '2021-03-08 02:55:46', '2022-03-07 18:55:46'),
('dc090e346f79cb13538da13cf21d9408f9694118474fb74233590826ae4e99f1e29854ecc7ee1ce2', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-17 07:15:58', '2021-04-17 07:15:58', '2022-04-17 00:15:58'),
('de2d1c8c00a838409642970c0896dfc8664c1ff3551716b39357cb816e96e4baf71dec6b5b515ef5', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-27 01:53:48', '2021-03-27 01:53:48', '2022-03-26 18:53:48'),
('df471f97243e325554c2ffc3a45f6ed1b6e9bd705590e1dd3dac0314d50e738d64ddea85b06b2b4c', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-27 02:59:11', '2021-03-27 02:59:11', '2022-03-26 19:59:11'),
('e029666482e1c894e6631ae460e1fbbf031f72addde2b8db37433f9dc05605ef1347a6de847dfac0', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-19 10:18:39', '2021-04-19 10:18:39', '2022-04-19 03:18:39'),
('e102bb95705f15ea70d1e6b244ae1bfbf0d07c538b65f5fae7881728e5464c5f823abe6c5fb9c35b', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 08:24:09', '2021-04-16 08:24:09', '2022-04-16 01:24:09'),
('e1d822c07c1baecc8f17cdc829f24210cd5c4dce8d1301191b5323fda28b232c3d21c1c3c9ddae30', 32, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-18 06:58:48', '2021-04-18 06:58:48', '2022-04-17 23:58:48'),
('e58773319806b2ebe87fc03741e1a8eb4d4e4a13b5375eb863c9783e37a128e52b885de0f1830eaa', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-28 11:12:52', '2021-03-28 11:12:52', '2022-03-28 04:12:52'),
('e791c4d36064629b19f08966a8bee66ddbb946d334ef5e7652bd418a49fa5d9ba7b9ea68bd0cde86', 33, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-16 09:48:39', '2021-04-16 09:48:39', '2022-04-16 02:48:39'),
('e79b27752f81d99c8c4fd0f8ac3038125af9922005c9f9d48b0f2e1e877adf46357bb2a7b8243f5f', 14, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-10 22:44:42', '2021-03-10 22:44:42', '2022-03-10 14:44:42'),
('e8333732ad2be7be0cb91b200e804a859709c433131c0234e59e04c0312cc71fbf42ea7dab32846d', 14, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-05 05:18:00', '2021-04-05 05:18:00', '2022-04-04 22:18:00'),
('e84163a1c89494e7735e5f3235b088846155ebe759467d2f4e62b027842910ce55e3c0e7cd115327', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-26 22:13:09', '2021-03-26 22:13:09', '2022-03-26 15:13:09'),
('e951c3a6e675e3c5bfb0015923a1f4f5e6175c7aefa671ed146bbd86ed4d70a18e6e6760d9fa44aa', 14, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-11 04:17:30', '2021-03-11 04:17:30', '2022-03-10 20:17:30'),
('ea447f56240f72ae66e9f4875b70a5af9cff21474423d00c09563d41be0f8768796ff1666465d3b4', 18, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-25 08:49:41', '2021-03-25 08:49:41', '2022-03-25 01:49:41'),
('ed068161e658ba808d53deaff84d7bca45446f24b40ba4ebf527d2910cf11b9db23610f3e56266da', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-05-02 05:38:02', '2021-05-02 05:38:02', '2022-05-01 22:38:02'),
('ed3e9aa833352794ab853ff11726d62140c8f936be96c3c9947fb6c1b6dea11cce31211ff7714041', 1, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-28 11:48:08', '2021-03-28 11:48:08', '2022-03-28 04:48:08'),
('f29cf091f56b36b7dc2efdef93bc10c9e832c33fdd41842f46604315e1ed4cb38163e7e23cebf62d', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-03-29 12:31:16', '2021-03-29 12:31:16', '2022-03-29 05:31:16'),
('f357c4c20d63d8b0f549f00e2e08f65b60cdf52637b3b59e635ce867ed4574ebd46d7a80e4122516', 1, 1, 'Laravel Password Grant Client', '[]', 0, '2021-02-17 11:17:49', '2021-02-17 11:17:49', '2022-02-17 06:17:49'),
('f4655bfbaaa9ba48323af84152c5c783bc5e43a02d0baf25a832939024588b0aa5904409198ddd5f', 32, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-16 10:33:58', '2021-04-16 10:33:58', '2022-04-16 03:33:58'),
('f5bb06b1bc97d9a091ef2d5ddc08a054c8453654622f78e49dc71cae9209c6347e7e37ee79519be1', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-27 02:56:54', '2021-03-27 02:56:54', '2022-03-26 19:56:54'),
('fb5636c2e8c763174a690b5fc3cd847ec2482aeec12b7e2cfd1971525ed5f0a2f05e705b4b5c1fb1', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-04-17 07:32:21', '2021-04-17 07:32:21', '2022-04-17 00:32:21'),
('fcdf8158f936833ea6c005919e7d48091fa7e9e22ea6ea9cd1589a22dfa4b43503e22766a672f92d', 17, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-17 12:11:13', '2021-04-17 12:11:13', '2022-04-17 05:11:13'),
('fe9c4d9bda27142ee1a09c3b55ecdd36aba8f998b82089c19e90ea83815939bd58264ab481a041b5', 40, 1, 'Laravel Password Grant Client', '[]', 1, '2021-04-25 00:40:57', '2021-04-25 00:40:57', '2022-04-24 17:40:57'),
('fefb0878ab531fa40b3221fce0313ea7b583e4b33c9605f607fb2b2f39fd6c513f725b02bd50ad53', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-27 02:43:16', '2021-03-27 02:43:16', '2022-03-26 19:43:16'),
('fffac585edfdc01a26c8a9cd94bc8d922d1393dcfe7b048e321615c82fdd880ddb42c48f52d7c0ad', 17, 1, 'Laravel Password Grant Client', '[]', 0, '2021-03-26 22:05:09', '2021-03-26 22:05:09', '2022-03-26 15:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'pdYc4sWT6kV9Gn3WstGZsz1j8C9z0UdFbn4zWp0t', NULL, 'http://localhost', 1, 0, 0, '2021-02-08 23:51:13', '2021-02-08 23:51:13'),
(2, NULL, 'Laravel Password Grant Client', 'XFFHmpwJo33E3bRHHMfnC8wlFI3wDDWvrL6d5Rd8', 'users', 'http://localhost', 0, 1, 0, '2021-02-08 23:51:13', '2021-02-08 23:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-02-08 23:51:13', '2021-02-08 23:51:13');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `courier_man` bigint(20) UNSIGNED DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `delivery_fee` int(11) DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `remarks` text COLLATE utf8mb4_unicode_ci,
  `delivery_date` text COLLATE utf8mb4_unicode_ci,
  `delivery_time` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_no`, `user_id`, `address_id`, `courier_man`, `total_price`, `delivery_fee`, `status`, `delete_status`, `remarks`, `delivery_date`, `delivery_time`, `created_at`, `updated_at`) VALUES
(1, 'GG6371094', 63, 92, NULL, 1035, 60, 'pending', 0, NULL, '04/08/2021', '12:30 AM', '2021-08-03 17:46:10', '2021-08-03 17:46:10'),
(2, 'UB5838134', 58, 91, NULL, 220, 70, 'pending', 0, NULL, NULL, NULL, '2021-08-12 12:27:57', '2021-08-12 12:27:57'),
(3, 'UB5883969', 58, 91, NULL, 200, 70, 'pending', 0, NULL, NULL, NULL, '2021-08-16 13:23:17', '2021-08-16 13:23:17'),
(4, 'UB5877453', 58, 91, NULL, 220, 70, 'pending', 0, NULL, NULL, NULL, '2021-08-16 13:37:14', '2021-08-16 13:37:14'),
(5, 'UB5811192', 58, 91, NULL, 220, 70, 'pending', 0, NULL, NULL, NULL, '2021-08-16 13:38:20', '2021-08-16 13:38:20'),
(6, 'UB5858556', 58, 91, NULL, 200, 70, 'pending', 0, NULL, NULL, NULL, '2021-08-16 13:50:04', '2021-08-16 13:50:04'),
(7, 'UB5868451', 58, 91, NULL, 200, 70, 'pending', 0, NULL, NULL, NULL, '2021-08-16 14:06:01', '2021-08-16 14:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `package_id` bigint(20) UNSIGNED DEFAULT NULL,
  `unit_quantity` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `product_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_no`, `product_id`, `package_id`, `unit_quantity`, `unit_size`, `unit_color`, `count`, `price`, `product_type`, `created_at`, `updated_at`) VALUES
(1, 'UB5838134', 1112, NULL, '1 ml', NULL, NULL, 1, 100, 'regular', '2021-08-12 12:27:57', '2021-08-12 12:27:57'),
(2, 'UB5838134', 1113, NULL, '1 ml', NULL, NULL, 1, 120, 'regular', '2021-08-12 12:27:57', '2021-08-12 12:27:57'),
(3, 'UB5883969', 1112, NULL, '1 ml', NULL, NULL, 2, 100, 'regular', '2021-08-16 13:23:17', '2021-08-16 13:23:17'),
(4, 'UB5877453', 1112, NULL, '1 ml', NULL, NULL, 1, 100, 'regular', '2021-08-16 13:37:14', '2021-08-16 13:37:14'),
(5, 'UB5877453', 1113, NULL, '1 ml', NULL, NULL, 1, 120, 'regular', '2021-08-16 13:37:14', '2021-08-16 13:37:14'),
(6, 'UB5811192', 1112, NULL, '1 ml', NULL, NULL, 1, 100, 'regular', '2021-08-16 13:38:20', '2021-08-16 13:38:20'),
(7, 'UB5811192', 1113, NULL, '1 ml', NULL, NULL, 1, 120, 'regular', '2021-08-16 13:38:20', '2021-08-16 13:38:20'),
(8, 'UB5858556', 1112, NULL, '1 ml', NULL, NULL, 1, 100, 'regular', '2021-08-16 13:50:04', '2021-08-16 13:50:04'),
(9, 'UB5858556', 1111, NULL, '500 gm', NULL, NULL, 1, 100, 'regular', '2021-08-16 13:50:04', '2021-08-16 13:50:04'),
(10, 'UB5868451', 1112, NULL, '1 ml', NULL, NULL, 1, 100, 'regular', '2021-08-16 14:06:01', '2021-08-16 14:06:01'),
(11, 'UB5868451', 1111, NULL, '500 gm', NULL, NULL, 1, 100, 'regular', '2021-08-16 14:06:01', '2021-08-16 14:06:01');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_percentage` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `total_price` int(11) NOT NULL DEFAULT '0',
  `discount_price` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `package_image`, `discount_percentage`, `status`, `delete_status`, `total_price`, `discount_price`, `created_at`, `updated_at`) VALUES
(1, 'Eid Package1', 'image/package_image/1627391176.jpg', 12, 1, 0, 280, 247, '2021-07-26 14:05:17', '2021-07-29 16:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `package_products`
--

CREATE TABLE `package_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `unit_quantity` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_confirmation_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL DEFAULT '3',
  `sub_category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `net_weight` text COLLATE utf8mb4_unicode_ci,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `brand_id`, `name`, `price`, `net_weight`, `description`, `thumbnail_image`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1111, 28, NULL, NULL, 'Shundorban Khalisha Honey', 100, NULL, 'Test Description', 'image/product_image/1628158835.jpg', 1, 0, '2021-08-05 10:20:35', '2021-08-05 10:20:35'),
(1112, 29, NULL, NULL, 'Creed Aventus', 100, NULL, 'Test Description', 'image/product_image/1628159033.jpg', 1, 0, '2021-08-05 10:23:53', '2021-08-05 10:23:53'),
(1113, 29, NULL, NULL, 'perfume2', 120, NULL, 'test', 'image/product_image/1628170030.jpg', 1, 0, '2021-08-05 13:27:10', '2021-08-05 13:27:10'),
(1114, 29, NULL, NULL, 'perfume3', 100, NULL, 'test', 'image/product_image/1628170055.jpg', 1, 0, '2021-08-05 13:27:35', '2021-08-05 13:27:35'),
(1115, 29, NULL, NULL, 'perfume4', 100, NULL, 'test', 'image/product_image/1628170083.jpg', 1, 0, '2021-08-05 13:28:03', '2021-08-05 13:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_brands`
--

CREATE TABLE `product_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_category_id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_detail_images`
--

CREATE TABLE `product_detail_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_required_fileds`
--

CREATE TABLE `product_required_fileds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verdict` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_required_fileds`
--

INSERT INTO `product_required_fileds` (`id`, `name`, `verdict`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Product Category', 'Mandatory', 1, '2021-01-11 04:25:34', '2021-01-11 04:25:34'),
(2, 'Product Sub Category', 'Mandatory', 1, '2021-01-11 04:25:34', '2021-01-11 04:25:34'),
(3, 'Product Brand', 'Optional', 0, '2021-01-11 04:25:34', '2021-04-23 23:51:05'),
(4, 'Product Price', 'Mandatory', 1, '2021-01-11 04:25:34', '2021-01-11 04:25:34'),
(5, 'Product Thumbnail Image', 'Mandatory', 1, '2021-01-11 04:25:34', '2021-01-11 04:25:34'),
(6, 'Product Description', 'Optional', 1, '2021-01-11 04:25:34', '2021-04-18 05:49:47'),
(7, 'Product Detail Image', 'Optional', 0, '2021-01-11 04:25:34', '2021-01-14 03:58:59'),
(8, 'Product Size', 'Optional', 0, '2021-01-11 04:25:34', '2021-01-14 03:59:06'),
(9, 'Product Color', 'Optional', 0, '2021-01-11 04:25:34', '2021-02-08 07:31:11'),
(10, 'Product Unit', 'Mandatory', 1, '2021-01-11 04:25:34', '2021-01-11 04:25:34'),
(11, 'Product Unit Quantity', 'Mandatory', 1, '2021-01-11 04:25:34', '2021-01-11 04:25:34'),
(12, 'Product Stock in Unit', 'Mandatory', 1, '2021-01-11 04:25:34', '2021-01-11 04:25:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_sizes`
--

CREATE TABLE `product_sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_stocks`
--

CREATE TABLE `product_stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `stock_amount` int(11) NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_stocks`
--

INSERT INTO `product_stocks` (`id`, `product_id`, `stock_amount`, `delete_status`, `created_at`, `updated_at`) VALUES
(1107, 1111, -2, 0, '2021-08-05 10:20:35', '2021-08-16 14:06:01'),
(1108, 1112, -13, 0, '2021-08-05 10:23:53', '2021-08-16 14:06:01'),
(1109, 1113, -3, 0, '2021-08-05 13:27:10', '2021-08-16 13:38:20'),
(1110, 1114, 0, 0, '2021-08-05 13:27:35', '2021-08-05 13:27:35'),
(1111, 1115, 0, 0, '2021-08-05 13:28:03', '2021-08-05 13:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_units`
--

CREATE TABLE `product_units` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `unit_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit_quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_units`
--

INSERT INTO `product_units` (`id`, `product_id`, `unit_type`, `unit_quantity`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1107, 1111, 'gm', '500', 1, 0, '2021-08-05 10:20:35', '2021-08-05 10:20:35'),
(1108, 1112, 'ml', '1', 1, 0, '2021-08-05 10:23:53', '2021-08-05 10:23:53'),
(1109, 1113, 'ml', '1', 1, 0, '2021-08-05 13:27:10', '2021-08-05 13:27:10'),
(1110, 1114, 'ml', '1', 1, 0, '2021-08-05 13:27:35', '2021-08-05 13:27:35'),
(1111, 1115, 'ml', '1', 1, 0, '2021-08-05 13:28:03', '2021-08-05 13:28:03');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `unit_purchasing_price` int(11) NOT NULL,
  `net_price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `vat` int(11) DEFAULT NULL,
  `shipping_cost` int(11) DEFAULT NULL,
  `purchase_note` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'Admin can view, add, edit, delete all', 0, '2021-04-20 19:38:46', '2021-04-23 11:34:02'),
(2, 'Employee', '', 1, '2021-04-20 19:41:16', '2021-07-17 05:46:18'),
(3, 'Manager', 'Manager can add product', 0, '2021-04-24 21:53:35', '2021-07-17 05:47:47'),
(4, 'Product Editor', 'Edit the product details and adding new product', 0, '2021-05-07 21:51:15', '2021-05-07 21:51:15'),
(5, 'Product Add', 'Can Add product', 0, '2021-07-16 15:34:46', '2021-07-16 15:34:46');

-- --------------------------------------------------------

--
-- Table structure for table `role_permisiions`
--

CREATE TABLE `role_permisiions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_permisiions`
--

INSERT INTO `role_permisiions` (`id`, `content_name`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'category_add', 1, NULL, NULL),
(3, 'category_view', 1, '2021-04-22 15:27:00', '2021-04-22 15:27:00'),
(4, 'sub_category_add', 1, '2021-04-22 15:27:00', '2021-04-22 15:27:00'),
(5, 'sub_category_edit', 1, '2021-04-22 15:27:00', '2021-04-22 15:27:00'),
(6, 'courier_man_edit', 1, '2021-04-22 15:39:00', '2021-04-22 15:39:00'),
(7, 'area_add', 1, '2021-04-22 15:39:00', '2021-04-22 15:39:00'),
(8, 'area_delete', 1, '2021-04-22 15:41:19', '2021-04-22 15:41:19'),
(9, 'category_view', 2, '2021-04-22 15:46:59', '2021-04-22 15:46:59'),
(10, 'category_edit', 2, '2021-04-22 15:46:59', '2021-04-22 15:46:59'),
(11, 'category_edit', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(12, 'category_delete', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(13, 'sub_category_view', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(14, 'sub_category_delete', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(15, 'product_view', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(16, 'product_add', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(17, 'product_edit', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(18, 'product_delete', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(19, 'homepage_content_view', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(20, 'homepage_content_add', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(21, 'homepage_content_edit', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(22, 'homepage_content_delete', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(23, 'banner_view', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(24, 'banner_add', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(25, 'banner_edit', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(26, 'banner_delete', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(27, 'new_order_view', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(28, 'new_order_add', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(29, 'new_order_edit', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(30, 'new_order_delete', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(31, 'all_order_view', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(32, 'all_order_add', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(33, 'all_order_edit', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(34, 'all_order_delete', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(35, 'courier_man_view', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(36, 'courier_man_add', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(37, 'courier_man_delete', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(38, 'area_view', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(39, 'area_edit', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(40, 'warehouse_view', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(41, 'warehouse_add', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(42, 'warehouse_edit', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(43, 'warehouse_delete', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(44, 'delivery_charge_view', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(45, 'delivery_charge_add', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(46, 'delivery_charge_delete', 1, '2021-04-23 11:26:18', '2021-04-23 11:26:18'),
(47, 'delivery_charge_edit', 1, '2021-04-23 11:28:55', '2021-04-23 11:28:55'),
(49, 'dashboard_view', 1, '2021-04-23 11:33:09', '2021-04-23 11:33:09'),
(50, 'product_view', 3, '2021-04-24 21:54:00', '2021-04-24 21:54:00'),
(51, 'product_add', 3, '2021-04-24 21:54:00', '2021-04-24 21:54:00'),
(52, 'category_view', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(53, 'category_add', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(54, 'category_edit', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(55, 'category_delete', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(56, 'sub_category_view', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(57, 'sub_category_add', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(58, 'sub_category_edit', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(59, 'sub_category_delete', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(60, 'product_view', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(61, 'product_add', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(62, 'product_edit', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(63, 'product_delete', 4, '2021-05-07 21:52:13', '2021-05-07 21:52:13'),
(64, 'product_view', 5, '2021-07-16 15:35:30', '2021-07-16 15:35:30'),
(65, 'product_add', 5, '2021-07-16 15:35:30', '2021-07-16 15:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `social_ids`
--

CREATE TABLE `social_ids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `supplier_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `supplier_contact_no`, `supplier_address`, `created_at`, `updated_at`) VALUES
(1, 'XiT Bangladesh', '01845318609', 'Test Address', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_conditions`
--

CREATE TABLE `terms_and_conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `condition_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `role` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `contact_no`, `password`, `status`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(35, 'Admin', 'assuffahadmin@gmail.com', NULL, '01815822471', '$2y$10$mnvUefTRiJG2zuroOA5ptegPbxO8B73QNL8iGcpJ5OKzw0dbEM8le', 1, 'Admin', NULL, '2021-07-17 06:05:45', '2021-07-30 20:03:09'),
(57, 'Mehedi', 'mdria33@gmail.com', NULL, '01730806526', '$2y$10$YQMV/OzCgwkSniV6ITo.QerBtrTlbWLjg9jgL8fRtyOWd/C8xF8.q', 0, NULL, NULL, '2021-07-16 15:36:01', '2021-07-17 06:27:39'),
(58, 'Mahbub Farooqi', 'sadakalo.coordinator@gmail.com', NULL, '01730806539', '$2y$10$305sTm8d2lc/6IsZu8TS4OUcYkXYIyKS84QBMjK5av6qUfLgzVJvG', 1, 'customer', NULL, '2021-07-17 05:54:18', '2021-07-17 06:04:11'),
(63, 'Kazi Mohammad Nokib', NULL, NULL, '01845318609', NULL, 1, 'customer', NULL, '2021-07-18 16:05:25', '2021-07-18 16:05:25'),
(64, 'yeadia zaman', NULL, NULL, '01760326468', NULL, 1, 'customer', NULL, '2021-07-25 06:17:50', '2021-07-25 06:17:50'),
(65, 'Mahbub Farooqi', NULL, NULL, '01611700513', NULL, 1, 'customer', NULL, '2021-07-25 11:19:39', '2021-07-25 11:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_addresses`
--

CREATE TABLE `user_addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL DEFAULT '1',
  `address_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_addresses`
--

INSERT INTO `user_addresses` (`id`, `user_id`, `area_id`, `address_type`, `address`, `contact_no`, `delete_status`, `created_at`, `updated_at`) VALUES
(89, 35, 3, 'Home', '72, Jalil Building, Muradpur, Chittagong', '01845318609', 0, '2021-07-16 14:48:14', '2021-07-16 14:48:14'),
(91, 58, 1, 'Home', 'D-5 F-5 Mohammadpur housing estate kazi nazrul islam road Mohammadpur dhaka', '01611700513', 0, '2021-07-25 11:20:44', '2021-07-25 11:20:44'),
(92, 63, 2, '72, Jalil Building, Muradpur, Chittagong', '72, Jalil Building, Muradpur, Chittagong', '01845318609', 0, '2021-07-29 14:00:27', '2021-07-29 14:00:27'),
(93, 58, 3, 'Home', '72, Jalil Building, Muradpur, Chittagong', '01845318609', 0, '2021-08-12 11:20:19', '2021-08-12 11:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_otps`
--

CREATE TABLE `user_otps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_otps`
--

INSERT INTO `user_otps` (`id`, `token`, `otp`, `created_at`, `updated_at`) VALUES
(147, '5HuGEL1ZVmBglvC73BddTqHCuZQlrF', '6469', '2021-07-16 13:22:38', '2021-07-16 13:22:38'),
(148, '67iq2x6pajSAMYd7OleF3VE2Ze4oZN', '3310', '2021-07-16 14:44:59', '2021-07-16 14:44:59'),
(149, 'Y0zq27LMmgBRXKv7fdSWADS3Tu8JgU', '2279', '2021-07-16 14:46:04', '2021-07-16 14:46:04'),
(150, 'OZFnjSOPwhKxWLkXuBHdSIwdzwJAgs', '2135', '2021-07-17 04:31:09', '2021-07-17 04:31:09'),
(151, 'XlJgkwPH8RgJiY7GrsX1jA4mvLVt1e', '1629', '2021-07-17 04:32:02', '2021-07-17 04:32:02'),
(152, 'ZFRkPS7LzmiAg892Nf4dt2SK9Th1DW', '4791', '2021-07-17 07:46:56', '2021-07-17 07:46:56'),
(153, 'uM5TsSmw6lLLK9QwgROoNAAGZQhwMT', '7631', '2021-07-17 07:47:46', '2021-07-17 07:47:46'),
(154, '8kGZwxtBN5VVnMrwTtWZ9hWcCO26dh', '8711', '2021-07-17 07:50:16', '2021-07-17 07:50:16'),
(155, 'GxHYys6j7enmzqhqg6LQcuI1Arz9lR', '7978', '2021-07-17 07:50:55', '2021-07-17 07:50:55'),
(156, 'i7ZNp4cVEC7RJ1OmF3dC9RLtcNXCG3', '2864', '2021-07-17 07:51:32', '2021-07-17 07:51:32'),
(157, 'wR6t7jncSE2qz0WMZQh8PN6ZgqjFQd', '6040', '2021-07-17 08:07:12', '2021-07-17 08:07:12'),
(158, 'npVaHRocKqBQHJkK859A49onT6XeN5', '1061', '2021-07-17 08:08:18', '2021-07-17 08:08:18'),
(159, 'OtzrF2NraKwX9KsR6Tu5eVjImB9WM6', '6112', '2021-07-17 08:08:53', '2021-07-17 08:08:53'),
(160, 'DM3YdA1ZQpgbIbwvxvxHkR4zKfyODs', '4996', '2021-07-17 08:09:08', '2021-07-17 08:09:08'),
(161, 'ayYCflOCLPbcKpuiFD9Yf02EjotAMw', '5630', '2021-07-17 08:20:20', '2021-07-17 08:20:20'),
(162, 'cQ3d8vAQzhr6SFMByQnPO3jtLobXHX', '4713', '2021-07-17 08:21:21', '2021-07-17 08:21:21'),
(163, 'w1F96FPBrciQE7zxLPsAjCGRHT8Afq', '4362', '2021-07-17 08:21:39', '2021-07-17 08:21:39'),
(164, 'NjgGVHZ7gOLzCRIFMgNCQ1cItaV9b7', '5351', '2021-07-17 08:22:08', '2021-07-17 08:22:08'),
(165, 'cazk7oMHDnmQmiW2wdVU3bNhPCzP4b', '3626', '2021-07-17 08:28:30', '2021-07-17 08:28:30'),
(166, 'mXQ2O2pFkoFwsb67g0S6Grt3Z9JyBP', '3755', '2021-07-17 08:28:50', '2021-07-17 08:28:50'),
(167, 'loSF6EnZS6RGVzYgTAdbPh0Iy3FFeA', '5679', '2021-07-17 08:30:03', '2021-07-17 08:30:03'),
(168, 'rBxPt3xGV2b3a0Xi1kLayl9JRgr1nW', '2974', '2021-07-17 08:31:12', '2021-07-17 08:31:12'),
(169, 'gMF0SMQAhwzi8lmlvoLV8WXeaeIcs7', '7816', '2021-07-17 08:31:43', '2021-07-17 08:31:43'),
(170, 'rrX6w1LvH5ZMUAnEwmiJNLfYHf844l', '6532', '2021-07-17 08:32:51', '2021-07-17 08:32:51'),
(171, 'Oe98hR5skFCjLGLQnZrXcDBd1NIQAy', '1525', '2021-07-17 08:32:55', '2021-07-17 08:32:55'),
(172, '9x3q2wg1hIxMu4bD31bTEBriuUCPwh', '2450', '2021-07-17 08:45:35', '2021-07-17 08:45:35'),
(173, 'Z01cKshO9rBvpzPnVMRL8KnYlWXou4', '7556', '2021-07-18 05:05:48', '2021-07-18 05:05:48'),
(174, 'F3194T5yVxmgGoqeSBzrlUhhtIi2n1', '9889', '2021-07-18 16:03:57', '2021-07-18 16:03:57'),
(175, '3gq95XaGFIuQm3qEqK4M70E6qiT87Y', '6360', '2021-07-18 23:06:31', '2021-07-18 23:06:31'),
(176, 'ovHATXmrA2Ot2Dw9Z36gcOgyyWUBSw', '8464', '2021-07-18 23:11:19', '2021-07-18 23:11:19'),
(177, '2KsSnTqidMgCGJeE6TJkO9ExrD13UA', '7772', '2021-07-20 17:02:49', '2021-07-20 17:02:49'),
(178, '8pT3rnz7vwFDOneFfL9UvPkhncRAIe', '1499', '2021-07-20 17:03:26', '2021-07-20 17:03:26'),
(179, '8DaEjt5JIrkanaM71Pxv94egnQgtMS', '7121', '2021-07-20 17:52:12', '2021-07-20 17:52:12'),
(180, 'zvUJf95UPqKcgJq3bMxVLBXnYBxmvc', '5008', '2021-07-22 19:20:46', '2021-07-22 19:20:46'),
(181, '9XJdsxXycb3IR22paEE3cTeaIb414g', '9324', '2021-07-23 04:26:44', '2021-07-23 04:26:44'),
(182, '5YvxOcUwy29IW0H8vln319B2V7sFGv', '9053', '2021-07-23 05:58:32', '2021-07-23 05:58:32'),
(183, '26euoTNATnuhxCmwrV5I7BiKtxmWde', '2039', '2021-07-25 06:09:37', '2021-07-25 06:09:37'),
(184, 'ZxM6O3sPm7Yz5jKpLT6cRpIo9cVbB4', '5758', '2021-07-25 06:14:00', '2021-07-25 06:14:00'),
(185, 'ZXK6T5UD9K8ZZwPQMx7tAipL0I51Zz', '7945', '2021-07-25 06:17:27', '2021-07-25 06:17:27'),
(186, '3vjIT4aztXVnwegwN0CHOmo1ahA9iY', '8539', '2021-07-25 11:19:14', '2021-07-25 11:19:14'),
(187, 'WDi8VOg6Mfih0Lc9qAzFYGRQZW4cnP', '2033', '2021-07-27 05:08:58', '2021-07-27 05:08:58'),
(188, '3XiesV9WomaWBnurTqvHmj4n7Qi7g1', '2590', '2021-07-27 18:52:38', '2021-07-27 18:52:38'),
(189, 'VmCm2UPlAH0vjGMuoTMXrlLWqBcxkt', '8692', '2021-07-27 18:53:47', '2021-07-27 18:53:47'),
(190, 'VMvP2yvIUlGc7hGaYnl72QNowJcTLD', '1786', '2021-07-28 04:27:36', '2021-07-28 04:27:36'),
(191, 'qlyw09XjmxSRTyFgh80k0n3zLl254y', '7021', '2021-07-28 10:12:27', '2021-07-28 10:12:27'),
(192, '47GZdIFQsksOU1xV9E0GKekBLmzLoE', '6500', '2021-07-28 19:42:30', '2021-07-28 19:42:30'),
(193, 'g09HCuYz1rwXBFptIACkwkoDIgHPnK', '3322', '2021-07-29 14:00:12', '2021-07-29 14:00:12'),
(194, 'FmqrzAlIlRAkjfcW3U0yfvkgotq1j1', '9848', '2021-07-30 18:43:21', '2021-07-30 18:43:21'),
(195, 'HBDMmBrP3lruy70odj8kZpTXIty4gn', '7974', '2021-07-30 18:43:43', '2021-07-30 18:43:43'),
(196, 'mVBDt0oYdkUIWN02VsIlgFiDkQxfFh', '3823', '2021-07-30 18:44:09', '2021-07-30 18:44:09'),
(197, 'rag90A5keSY9m1UmMsInI513bWscGu', '5745', '2021-08-03 17:43:06', '2021-08-03 17:43:06'),
(198, 'wSgZJVL7XwhYTO1I5xGlM49VqXR3nd', '3392', '2021-08-04 11:27:57', '2021-08-04 11:27:57'),
(199, 'wX2fPN5waIZR13WK1V0F8J1UPoFqsu', '5187', '2021-08-05 18:03:17', '2021-08-05 18:03:17'),
(200, 't1OtRoZSv52i6m5GNIUCbHeuvIjKAE', '2589', '2021-08-05 18:06:47', '2021-08-05 18:06:47'),
(201, 'H8tEI2i70z86WCQLNLvjON7U6px8fq', '9771', '2021-08-05 18:06:47', '2021-08-05 18:06:47'),
(202, 'tKxAYYQ3Ar4JiufsOPx7tUPb7DhdnJ', '7663', '2021-08-16 18:15:23', '2021-08-16 18:15:23'),
(203, 'yQ3nIWWfHodUcuO8znf87xss4sU8VM', '8577', '2021-08-16 18:27:22', '2021-08-16 18:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tokens`
--

CREATE TABLE `user_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `firebase_token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vendor_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warehouses`
--

CREATE TABLE `warehouses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `area_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `warehouses`
--

INSERT INTO `warehouses` (`id`, `area_id`, `name`, `address`, `contact_no`, `status`, `delete_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Salek Garden', '42/a Salek Garden,Moulovi Salek Road, Zigatola Dhaka -1209.', '01730806526', 1, 0, '2021-03-29 11:03:05', '2021-07-17 06:33:58'),
(2, 3, 'Mokka Store', 'Muradpur, Chittagong', '01679636311', 1, 1, '2021-03-30 22:11:16', '2021-07-16 13:09:51');

-- --------------------------------------------------------

--
-- Table structure for table `warehouse_products`
--

CREATE TABLE `warehouse_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `warehouse_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `delete_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_products`
--
ALTER TABLE `campaign_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `campaign_products_product_id_foreign` (`product_id`),
  ADD KEY `campaign_products_campaign_id_foreign` (`campaign_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_domain_id_foreign` (`domain_id`);

--
-- Indexes for table `company_infos`
--
ALTER TABLE `company_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courier_men`
--
ALTER TABLE `courier_men`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courier_men_user_id_foreign` (`user_id`);

--
-- Indexes for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_statuses`
--
ALTER TABLE `delivery_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`),
  ADD KEY `deposits_courier_man_foreign` (`courier_man`),
  ADD KEY `deposits_deposit_received_by_foreign` (`deposit_received_by`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `discounts_product_id_foreign` (`product_id`);

--
-- Indexes for table `domains`
--
ALTER TABLE `domains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecommerce_types`
--
ALTER TABLE `ecommerce_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homepage_product_lists`
--
ALTER TABLE `homepage_product_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `homepage_product_lists_homepage_section_id_foreign` (`homepage_section_id`),
  ADD KEY `homepage_product_lists_product_list_foreign` (`product_list`);

--
-- Indexes for table `homepage_sections`
--
ALTER TABLE `homepage_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_no_unique` (`order_no`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_address_id_foreign` (`address_id`),
  ADD KEY `orders_courier_man_foreign` (`courier_man`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`),
  ADD KEY `order_details_package_id_foreign` (`package_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_products`
--
ALTER TABLE `package_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_products_package_id_foreign` (`package_id`),
  ADD KEY `package_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_sub_category_id_foreign` (`sub_category_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_brands_sub_category_id_foreign` (`sub_category_id`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_colors_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_detail_images`
--
ALTER TABLE `product_detail_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_detail_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_required_fileds`
--
ALTER TABLE `product_required_fileds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_sizes_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_stocks_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_units`
--
ALTER TABLE `product_units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_units_product_id_foreign` (`product_id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`),
  ADD KEY `purchases_supplier_id_foreign` (`supplier_id`),
  ADD KEY `purchases_product_id_foreign` (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_permisiions`
--
ALTER TABLE `role_permisiions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_permisiions_role_id_foreign` (`role_id`);

--
-- Indexes for table `social_ids`
--
ALTER TABLE `social_ids`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_ids_social_id_unique` (`social_id`),
  ADD KEY `social_ids_user_id_foreign` (`user_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_contact_no_unique` (`contact_no`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_addresses_user_id_foreign` (`user_id`),
  ADD KEY `user_addresses_area_id_foreign` (`area_id`);

--
-- Indexes for table `user_otps`
--
ALTER TABLE `user_otps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_roles_user_id_foreign` (`user_id`);

--
-- Indexes for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_tokens_user_id_foreign` (`user_id`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `warehouses`
--
ALTER TABLE `warehouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warehouses_area_id_foreign` (`area_id`);

--
-- Indexes for table `warehouse_products`
--
ALTER TABLE `warehouse_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `warehouse_products_warehouse_id_foreign` (`warehouse_id`),
  ADD KEY `warehouse_products_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `campaign_products`
--
ALTER TABLE `campaign_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `company_infos`
--
ALTER TABLE `company_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courier_men`
--
ALTER TABLE `courier_men`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `delivery_charges`
--
ALTER TABLE `delivery_charges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery_statuses`
--
ALTER TABLE `delivery_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domains`
--
ALTER TABLE `domains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ecommerce_types`
--
ALTER TABLE `ecommerce_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homepage_product_lists`
--
ALTER TABLE `homepage_product_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `homepage_sections`
--
ALTER TABLE `homepage_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package_products`
--
ALTER TABLE `package_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1116;

--
-- AUTO_INCREMENT for table `product_brands`
--
ALTER TABLE `product_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_detail_images`
--
ALTER TABLE `product_detail_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_required_fileds`
--
ALTER TABLE `product_required_fileds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_sizes`
--
ALTER TABLE `product_sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_stocks`
--
ALTER TABLE `product_stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT for table `product_units`
--
ALTER TABLE `product_units`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1112;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role_permisiions`
--
ALTER TABLE `role_permisiions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `social_ids`
--
ALTER TABLE `social_ids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms_and_conditions`
--
ALTER TABLE `terms_and_conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `user_addresses`
--
ALTER TABLE `user_addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `user_otps`
--
ALTER TABLE `user_otps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tokens`
--
ALTER TABLE `user_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warehouses`
--
ALTER TABLE `warehouses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `warehouse_products`
--
ALTER TABLE `warehouse_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaign_products`
--
ALTER TABLE `campaign_products`
  ADD CONSTRAINT `campaign_products_campaign_id_foreign` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `campaign_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_domain_id_foreign` FOREIGN KEY (`domain_id`) REFERENCES `domains` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `deposits`
--
ALTER TABLE `deposits`
  ADD CONSTRAINT `deposits_courier_man_foreign` FOREIGN KEY (`courier_man`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `deposits_deposit_received_by_foreign` FOREIGN KEY (`deposit_received_by`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `homepage_product_lists`
--
ALTER TABLE `homepage_product_lists`
  ADD CONSTRAINT `homepage_product_lists_homepage_section_id_foreign` FOREIGN KEY (`homepage_section_id`) REFERENCES `homepage_sections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `homepage_product_lists_product_list_foreign` FOREIGN KEY (`product_list`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_address_id_foreign` FOREIGN KEY (`address_id`) REFERENCES `user_addresses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_courier_man_foreign` FOREIGN KEY (`courier_man`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `package_products`
--
ALTER TABLE `package_products`
  ADD CONSTRAINT `package_products_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `packages` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `package_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `product_brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_brands`
--
ALTER TABLE `product_brands`
  ADD CONSTRAINT `product_brands_sub_category_id_foreign` FOREIGN KEY (`sub_category_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_detail_images`
--
ALTER TABLE `product_detail_images`
  ADD CONSTRAINT `product_detail_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_sizes`
--
ALTER TABLE `product_sizes`
  ADD CONSTRAINT `product_sizes_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_stocks`
--
ALTER TABLE `product_stocks`
  ADD CONSTRAINT `product_stocks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_units`
--
ALTER TABLE `product_units`
  ADD CONSTRAINT `product_units_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `purchases_supplier_id_foreign` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_permisiions`
--
ALTER TABLE `role_permisiions`
  ADD CONSTRAINT `role_permisiions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_ids`
--
ALTER TABLE `social_ids`
  ADD CONSTRAINT `social_ids_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_addresses`
--
ALTER TABLE `user_addresses`
  ADD CONSTRAINT `user_addresses_area_id_foreign` FOREIGN KEY (`area_id`) REFERENCES `areas` (`id`),
  ADD CONSTRAINT `user_addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `warehouse_products`
--
ALTER TABLE `warehouse_products`
  ADD CONSTRAINT `warehouse_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `warehouse_products_warehouse_id_foreign` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouses` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
