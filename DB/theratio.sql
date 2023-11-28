-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2023 at 11:03 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theratio`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_1_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details_1_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details_2_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details_2_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `main_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title_english`, `title_bangla`, `details_1_eng`, `details_1_bng`, `details_2_eng`, `details_2_bng`, `main_image`, `banner_image`, `created_at`, `updated_at`) VALUES
(2, 'Welcome To Architecture', 'ভিক্টোরিয়া স্পাতে স্বাগতম', '<p class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p class=\"intro\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'backend/about/1782880812488429.jpg', 'backend/about/1782069335234814.jpg', '2023-11-05 03:02:56', '2023-11-18 00:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `banner_and_titles`
--

CREATE TABLE `banner_and_titles` (
  `id` bigint UNSIGNED NOT NULL,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_and_titles`
--

INSERT INTO `banner_and_titles` (`id`, `title_english`, `title_bangla`, `banner_image`, `page`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', 'যোগাযোগ করুন', 'backend/banner_image/1781886030292265.jpg', 'contacts', '1', '2023-11-07 00:35:42', '2023-11-07 00:35:51');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_des_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_des_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `main_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_image1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_image2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details_image3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title_english`, `title_bangla`, `short_des_eng`, `short_des_bng`, `long_des1_eng`, `long_des1_bng`, `long_des2_eng`, `long_des2_bng`, `long_des3_eng`, `long_des3_bng`, `main_image`, `banner_image`, `details_image1`, `details_image2`, `details_image3`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Facial Scrub is natural care', 'ফেসিয়াল স্ক্রাব প্রাকৃতিক যত্ন', '<div>Facial Scrub is herbal treatment that makes your face skin smooth and refresh</div>', '<div>ফেসিয়াল স্ক্রাব হল ভেষজ চিকিত্সা যা আপনার মুখের ত্বককে মসৃণ এবং সতেজ করে তোলে</div>', '<div>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation</p>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>\r\n</div>', '<div>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>\r\n</div>', '<div>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation</p>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>\r\n</div>', '<div>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>\r\n</div>', '<div>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation</p>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>\r\n</div>', '<div>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>\r\n</div>', 'backend/blogs/main_image/1782612153661823.jpg', 'backend/blogs/banner_image/1781803426413648.jpg', 'backend/blogs/details_images/1781803427001568.jpg', 'backend/blogs/details_images/1781803427196079.jpg', 'backend/blogs/details_images/1781803427662926.jpg', 1, 0, '2023-11-06 02:42:46', '2023-11-15 00:57:07'),
(2, 'Facial Scrub is natural care', 'ফেসিয়াল স্ক্রাব প্রাকৃতিক যত্ন', '<div>Facial Scrub is herbal treatment that makes your face skin smooth and refresh</div>', '<div>ফেসিয়াল স্ক্রাব হল ভেষজ চিকিত্সা যা আপনার মুখের ত্বককে মসৃণ এবং সতেজ করে তোলে</div>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', 'backend/blogs/main_image/1782612137433698.jpg', 'backend/blogs/banner_image/1781803591822048.jpg', 'backend/blogs/details_images/1781803592256375.jpg', 'backend/blogs/details_images/1781803592815315.jpg', 'backend/blogs/details_images/1781803593081019.jpg', 1, 0, '2023-11-06 02:45:24', '2023-11-15 00:56:51'),
(3, 'Facial Scrub is natural care', 'ফেসিয়াল স্ক্রাব প্রাকৃতিক যত্ন', '<div class=\"title\">Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care</div>', '<p>ফেসিয়াল স্ক্রাব হল ভেষজ চিকিত্সা যা আপনার মুখের ত্বককে মসৃণ এবং সতেজ করে তোলে</p>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', 'backend/blogs/main_image/1782612122723222.jpg', 'backend/blogs/banner_image/1781803704400618.jpg', 'backend/blogs/details_images/1781803705046026.jpg', 'backend/blogs/details_images/1781803705299619.jpg', 'backend/blogs/details_images/1781803706220403.jpg', 1, 0, '2023-11-06 02:47:11', '2023-11-15 00:56:37'),
(4, 'Facial Scrub is natural care', 'আপনার জন্য আমাদের সর্বশেষ এবং সর্বাধিক জনপ্রিয় টিপস এবং কৌশল।', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit blandit non sapien est, volutpat convallis feugiat litora urna tellus fermentum euismod quisque eros. Laoreet purus fringilla egestas odio etiam feugiat parturient rhoncus mattis, porttitor volutpat gravida suscipit euismod nisl id ligula, natoque integer diam senectus interdum imperdiet posuere massa. Ad aenean bibendum habitant fermentum nisi urna, semper aliquam velit lacinia at vivamus parturient, pretium donec dis id pellentesque. Torquent est integer turpis diam nisi et vestibulum, cum dis ante enim molestie bibendum, vel aenean sodales sapien morbi risus.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit blandit non sapien est, volutpat convallis feugiat litora urna tellus fermentum euismod quisque eros. Laoreet purus fringilla egestas odio etiam feugiat parturient rhoncus mattis, porttitor volutpat gravida suscipit euismod nisl id ligula, natoque integer diam senectus interdum imperdiet posuere massa. Ad aenean bibendum habitant fermentum nisi urna, semper aliquam velit lacinia at vivamus parturient, pretium donec dis id pellentesque. Torquent est integer turpis diam nisi et vestibulum, cum dis ante enim molestie bibendum, vel aenean sodales sapien morbi risus.</p>', '<p>took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, '<p>took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, '<p>took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, 'backend/blogs/main_image/1782612106430509.jpg', 'backend/blogs/banner_image/1782074743001550.jpg', 'backend/blogs/details_images/1782076478325573.jpg', 'backend/blogs/details_images/1782076478648841.jpg', 'backend/blogs/details_images/1782076479011798.jpg', 1, 0, '2023-11-09 02:30:32', '2023-11-15 00:56:22'),
(5, 'Officia molestias ni', 'Omnis accusantium il', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit blandit non sapien est, volutpat convallis feugiat litora urna tellus fermentum euismod quisque eros. Laoreet purus fringilla egestas odio etiam feugiat parturient rhoncus mattis, porttitor volutpat gravida suscipit euismod nisl id ligula, natoque integer diam senectus interdum imperdiet posuere massa. Ad aenean bibendum habitant fermentum nisi urna, semper aliquam velit lacinia at vivamus parturient, pretium donec dis id pellentesque. Torquent est integer turpis diam nisi et vestibulum, cum dis ante enim molestie bibendum, vel aenean sodales sapien morbi risus.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit blandit non sapien est, volutpat convallis feugiat litora urna tellus fermentum euismod quisque eros. Laoreet purus fringilla egestas odio etiam feugiat parturient rhoncus mattis, porttitor volutpat gravida suscipit euismod nisl id ligula, natoque integer diam senectus interdum imperdiet posuere massa. Ad aenean bibendum habitant fermentum nisi urna, semper aliquam velit lacinia at vivamus parturient, pretium donec dis id pellentesque. Torquent est integer turpis diam nisi et vestibulum, cum dis ante enim molestie bibendum, vel aenean sodales sapien morbi risus.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit blandit non sapien est, volutpat convallis feugiat litora urna tellus fermentum euismod quisque eros. Laoreet purus fringilla egestas odio etiam feugiat parturient rhoncus mattis, porttitor volutpat gravida suscipit euismod nisl id ligula, natoque integer diam senectus interdum imperdiet posuere massa. Ad aenean bibendum habitant fermentum nisi urna, semper aliquam velit lacinia at vivamus parturient, pretium donec dis id pellentesque. Torquent est integer turpis diam nisi et vestibulum, cum dis ante enim molestie bibendum, vel aenean sodales sapien morbi risus.</p>', NULL, NULL, NULL, NULL, NULL, 'backend/blogs/main_image/1782612193303578.jpg', 'backend/blogs/banner_image/1782612193339673.jpg', NULL, NULL, NULL, 1, 0, '2023-11-15 00:57:44', '2023-11-15 00:57:48'),
(6, 'Ab aliquid modi dolo', 'Temporibus esse ut r', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit blandit non sapien est, volutpat convallis feugiat litora urna tellus fermentum euismod quisque eros. Laoreet purus fringilla egestas odio etiam feugiat parturient rhoncus mattis, porttitor volutpat gravida suscipit euismod nisl id ligula, natoque integer diam senectus interdum imperdiet posuere massa. Ad aenean bibendum habitant fermentum nisi urna, semper aliquam velit lacinia at vivamus parturient, pretium donec dis id pellentesque. Torquent est integer turpis diam nisi et vestibulum, cum dis ante enim molestie bibendum, vel aenean sodales sapien morbi risus.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit blandit non sapien est, volutpat convallis feugiat litora urna tellus fermentum euismod quisque eros. Laoreet purus fringilla egestas odio etiam feugiat parturient rhoncus mattis, porttitor volutpat gravida suscipit euismod nisl id ligula, natoque integer diam senectus interdum imperdiet posuere massa. Ad aenean bibendum habitant fermentum nisi urna, semper aliquam velit lacinia at vivamus parturient, pretium donec dis id pellentesque. Torquent est integer turpis diam nisi et vestibulum, cum dis ante enim molestie bibendum, vel aenean sodales sapien morbi risus.</p>', NULL, NULL, NULL, NULL, NULL, NULL, 'backend/blogs/main_image/1782612223874630.jpg', 'backend/blogs/banner_image/1782612223918044.jpg', NULL, NULL, NULL, 1, 0, '2023-11-15 00:58:14', '2023-11-15 00:58:17');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint UNSIGNED NOT NULL,
  `sent_by` int DEFAULT NULL,
  `name_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `sent_by`, `name_english`, `name_bangla`, `phone`, `email`, `subject_english`, `subject_bangla`, `message_english`, `message_bangla`, `created_at`, `updated_at`) VALUES
(1, 3, 'Alex Cruis', NULL, NULL, 'alex@gmail.com', NULL, NULL, 'Hello! Peerly Spa', NULL, '2023-11-05 23:15:28', NULL),
(2, 3, 'Rose Williams', NULL, NULL, 'parvaz@gmail.com', NULL, NULL, 'Hello! Peerly Spa!', NULL, '2023-11-05 23:17:57', NULL),
(3, 3, 'Tamanna Yesmin', NULL, NULL, 'tarek@gmail.com', NULL, NULL, 'dfsdfsdf', NULL, '2023-11-05 23:20:13', NULL),
(4, 3, 'fdkjsldf', NULL, 'dfsdf', 'taleb@gmail.com', NULL, NULL, 'sfdfsf', NULL, '2023-11-11 00:45:43', NULL),
(5, 3, 'Hasem', NULL, '4534534543', 'hasem@gmail.com', NULL, NULL, 'HELLO VICTORIA SPA! I WOULD WANT TO TAKE SERVE FROM YOU.', NULL, '2023-11-11 00:50:56', NULL),
(6, 3, 'Buffy Joyner', NULL, '+1 (806) 452-9314', 'kotu@mailinator.com', NULL, NULL, 'Expedita culpa in a', NULL, '2023-11-15 00:30:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counter_icons`
--

CREATE TABLE `counter_icons` (
  `id` bigint UNSIGNED NOT NULL,
  `title_english_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incon_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incon_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incon_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incon_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counter_icons`
--

INSERT INTO `counter_icons` (`id`, `title_english_1`, `title_bangla_1`, `value_1`, `incon_1`, `title_english_2`, `title_bangla_2`, `value_2`, `incon_2`, `title_english_3`, `title_bangla_3`, `value_3`, `incon_3`, `title_english_4`, `title_bangla_4`, `value_4`, `incon_4`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Projects Done', 'Projects Done', '750', 'fa-solid fa-heart', 'HappyFace', 'খুশিমুখ', '400', 'fa-brands fa-discord', 'Cups of coffee', 'কফি পান', '453', 'fa-solid fa-cart-shopping', 'Projects done', 'কম্পিলিট প্রজেক্ট', '432', 'fa-brands fa-docker', 0, '2023-10-30 01:08:22', '2023-11-14 03:14:25');

-- --------------------------------------------------------

--
-- Table structure for table `counter_images`
--

CREATE TABLE `counter_images` (
  `id` bigint UNSIGNED NOT NULL,
  `title_english_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_english_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_4` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counter_images`
--

INSERT INTO `counter_images` (`id`, `title_english_1`, `title_bangla_1`, `value_1`, `image_1`, `title_english_2`, `title_bangla_2`, `value_2`, `image_2`, `title_english_3`, `title_bangla_3`, `value_3`, `image_3`, `title_english_4`, `title_bangla_4`, `value_4`, `image_4`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Projects done', 'প্রকল্প সম্পন্ন', '456', 'backend/counter_image/1781172469002428.png', 'Happy clients', 'খুশি ক্লায়েন্ট', '899', 'backend/counter_image/1781172469027327.jpg', 'Cups of coffee', 'কফি কাপ', '768', 'backend/counter_image/1781172469044414.jpg', 'Photos taken', 'ছবি তোলা হয়েছে', '899', 'backend/counter_image/1781172469055539.jpg', 0, '2023-10-30 03:33:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint UNSIGNED NOT NULL,
  `footer_details_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_details_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `copy_right_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `footer_details_eng`, `footer_details_bng`, `copy_right_text`, `created_at`, `updated_at`) VALUES
(1, 'Secrets Resorts & Spas offer adults an escape to romance and sensuality in spectacular oceanfront settings.', 'সিক্রেটস রিসোর্ট ও স্পা প্রাপ্তবয়স্কদের রোমান্স এবং কামুকতা থেকে মুক্তির সুযোগ দেয় দর্শনীয় সমুদ্রের ধারে।', 'Developed By techweb bd it', '2023-11-10 23:42:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `image_galleries`
--

CREATE TABLE `image_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_galleries`
--

INSERT INTO `image_galleries` (`id`, `image`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(4, 'backend/img_gallery/1782540252527006.jpg', 1, 0, '2023-11-08 23:30:15', '2023-11-14 05:58:19'),
(5, 'backend/img_gallery/1782540241601032.jpg', 1, 0, '2023-11-08 23:30:34', '2023-11-14 05:58:17'),
(6, 'backend/img_gallery/1782540227904643.jpg', 1, 0, '2023-11-08 23:30:55', '2023-11-14 05:58:14'),
(7, 'backend/img_gallery/1782540215457214.jpg', 1, 0, '2023-11-08 23:31:11', '2023-11-14 05:58:12'),
(8, 'backend/img_gallery/1782540198121948.jpg', 1, 0, '2023-11-08 23:31:31', '2023-11-14 05:58:10'),
(9, 'backend/img_gallery/1782540186155938.jpg', 1, 0, '2023-11-08 23:31:55', '2023-11-14 05:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint UNSIGNED NOT NULL,
  `site_name_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_logo_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frontend_logo_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frontend_footer_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `site_name_english`, `site_name_bangla`, `admin_logo_image`, `frontend_logo_image`, `frontend_footer_image`, `favicon_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'theratio', 'theratio', 'backend/logo/1783346022290075.png', 'backend/logo/1783346022383640.png', 'backend/logo/1783346022393337.png', 'backend/logo/1783346022409127.png', '0', '2023-11-03 22:40:52', '2023-11-23 03:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(17, '2019_08_19_000000_create_failed_jobs_table', 1),
(18, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(19, '2023_10_21_065218_create_banner_and_titles_table', 1),
(20, '2023_10_22_063533_create_logos_table', 1),
(21, '2023_10_22_085429_create_website_links_table', 1),
(22, '2023_10_22_103212_create_website_banners_table', 1),
(23, '2023_10_23_050602_create_footers_table', 1),
(24, '2023_10_23_065803_create_services_table', 1),
(25, '2023_10_26_073022_create_abouts_table', 1),
(26, '2023_10_26_095230_create_teams_table', 1),
(27, '2023_10_27_125514_create_blogs_table', 1),
(28, '2023_10_29_050142_create_testimonials_table', 1),
(29, '2023_10_29_070908_create_image_galleries_table', 2),
(30, '2023_10_29_070937_create_video_galleries_table', 2),
(31, '2023_10_29_092653_create_notices_table', 3),
(32, '2023_10_30_044312_create_sponsors_table', 3),
(33, '2023_10_30_055705_create_counter_icons_table', 4),
(34, '2023_10_30_055718_create_counter_images_table', 4),
(35, '2023_11_05_110507_create_testimonial2s_table', 5),
(36, '2023_11_06_041856_create_contact_us_table', 6),
(37, '2023_11_11_070358_create_sliders_table', 7),
(38, '2023_11_18_064627_create_projects_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint UNSIGNED NOT NULL,
  `pdf_file` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_des_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_des_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detais_image_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detais_image_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detais_image_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_sm_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `des_sm_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title_english`, `title_bangla`, `main_image`, `price`, `banner_image`, `detais_image_1`, `detais_image_2`, `detais_image_3`, `des_sm_eng`, `des_sm_bng`, `long_des1_eng`, `long_des1_bng`, `long_des2_eng`, `long_des2_bng`, `long_des3_eng`, `long_des3_bng`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Nulla veniam non fu', 'Qui et aut ipsa exe', 'backend/service/main_image/1782895629139490.jpg', '529', 'backend/service/banner_image/1782895629199471.jpg', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-11-18 04:02:50', '2023-11-18 04:40:53'),
(4, 'Non sit anim non am', 'Maxime quas enim rep', 'backend/service/main_image/1782895669733396.jpg', '788', 'backend/service/banner_image/1782895669816396.jpg', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, NULL, NULL, NULL, NULL, '1', '2023-11-18 04:03:29', '2023-11-18 04:40:57'),
(5, 'Et quae eum mollit q', 'Dolores suscipit inv', 'backend/service/main_image/1782895699639445.jpg', '905', 'backend/service/banner_image/1782895699702828.jpg', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, NULL, NULL, NULL, '1', '2023-11-18 04:03:57', '2023-11-25 02:56:41'),
(6, 'Ut sed asperiores ev', 'Nam facilis repellen', 'backend/service/main_image/1782895743704326.jpg', '328', 'backend/service/banner_image/1782895743766455.jpg', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, NULL, NULL, '1', '2023-11-18 04:04:39', '2023-11-25 02:56:44'),
(7, 'Nulla veniam non fu', 'Qui et aut ipsa exe', 'backend/service/main_image/1782895629139490.jpg', '529', 'backend/service/banner_image/1782895629199471.jpg', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', '2023-11-18 04:02:50', '2023-11-18 04:40:53'),
(8, 'Non sit anim non am', 'Maxime quas enim rep', 'backend/service/main_image/1782895669733396.jpg', '788', 'backend/service/banner_image/1782895669816396.jpg', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, NULL, NULL, NULL, NULL, '1', '2023-11-18 04:03:29', '2023-11-18 04:40:57'),
(9, 'Et quae eum mollit q', 'Dolores suscipit inv', 'backend/service/main_image/1782895699639445.jpg', '905', 'backend/service/banner_image/1782895699702828.jpg', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, NULL, NULL, NULL, '1', '2023-11-18 04:03:57', '2023-11-25 02:56:48'),
(10, 'Ut sed asperiores ev', 'Nam facilis repellen', 'backend/service/main_image/1782895743704326.jpg', '328', 'backend/service/banner_image/1782895743766455.jpg', NULL, NULL, NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit semper aliquam, fermentum himenaeos molestie aptent tempor cum malesuada arcu et vitae, sociosqu felis sociis dictumst vulputate dis mi per. Suscipit volutpat consequat vehicula feugiat lacinia a torquent magnis vitae, netus nibh sociis conubia facilisi at fringilla facilisis tempus, id ullamcorper lacus dapibus risus praesent quisque aptent. Fusce magna sagittis molestie leo felis venenatis placerat, dui vel tempor vestibulum arcu rutrum sodales, ornare quisque vulputate elementum cubilia porttitor. Rhoncus facilisi in orci imperdiet nisi elementum, vehicula vivamus proin gravida cras potenti, ridiculus montes est lectus varius. Tortor a nisl vehicula scelerisque arcu aptent fermentum tellus, et eleifend dapibus conubia euismod ad aliquet.</p>', NULL, NULL, NULL, '0', '2023-11-18 04:04:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detais_image_1` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detais_image_2` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detais_image_3` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_sm_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `des_sm_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des1_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des2_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_des3_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `basic` int NOT NULL DEFAULT '0',
  `premium` int NOT NULL DEFAULT '0',
  `luxury` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_english`, `title_bangla`, `main_image`, `price`, `banner_image`, `detais_image_1`, `detais_image_2`, `detais_image_3`, `des_sm_eng`, `des_sm_bng`, `long_des1_eng`, `long_des1_bng`, `long_des2_eng`, `long_des2_bng`, `long_des3_eng`, `long_des3_bng`, `status`, `basic`, `premium`, `luxury`, `created_at`, `updated_at`) VALUES
(5, 'Tenant Improvement', 'Tenant Improvement', 'backend/service/main_image/1782516339748044.jpg', '2000', 'backend/service/banner_image/1781881937012122.jpg', 'backend/service/details_images/1781881937436126.jpg', 'backend/service/details_images/1781881937703117.jpg', 'backend/service/details_images/1781881937967941.jpg', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '1', 0, 1, 1, '2023-11-06 23:30:39', '2023-11-13 23:34:11'),
(6, 'Remodeling', 'Remodeling', 'backend/service/main_image/1782516307395046.jpg', '4000', 'backend/service/banner_image/1781882053458936.jpg', 'backend/service/details_images/1781882054110829.jpg', 'backend/service/details_images/1781882054400289.jpg', 'backend/service/details_images/1781882054644985.jpg', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '1', 0, 1, 1, '2023-11-06 23:32:30', '2023-11-13 23:33:41'),
(7, 'New Construction', 'New Construction', 'backend/service/main_image/1782516272678121.jpg', '4500', 'backend/service/banner_image/1781882359274651.jpg', 'backend/service/details_images/1781882359768980.jpg', 'backend/service/details_images/1781882360361280.jpg', 'backend/service/details_images/1781882360643505.jpg', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '1', 0, 1, 1, '2023-11-06 23:37:22', '2023-11-13 23:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text_eng` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_text_bng` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `add_home` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_english`, `title_bangla`, `short_text_eng`, `short_text_bng`, `image`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Best Furniture and Decor', 'Best Furniture and Decor', 'We pride ourselves on being builders — creating architectural and creative solutions to help people realize their vision and make them a reality. Wanna work with us?', 'We pride ourselves on being builders — creating architectural and creative solutions to help people realize their vision and make them a reality. Wanna work with us?', 'backend/slider/1783352595136310.jpg', 1, 0, '2023-11-11 02:55:35', '2023-11-23 05:06:07'),
(2, 'New Level of Interior', 'New Level of Interior', 'We pride ourselves on being builders — creating architectural and creative solutions to help people realize their vision and make them a reality. Wanna work with us?', 'We pride ourselves on being builders — creating architectural and creative solutions to help people realize their vision and make them a reality. Wanna work with us?', 'backend/slider/1783352518197153.jpg', 1, 0, '2023-11-11 02:58:09', '2023-11-23 05:04:53'),
(5, 'High-end Interior Design', 'High-end Interior Design', 'We pride ourselves on being\r\n                        builders — creating architectural and creative solutions to help people realize\r\n                        their vision and make them a reality. Wanna work with us?', 'We pride ourselves on being\r\n                        builders — creating architectural and creative solutions to help people realize\r\n                        their vision and make them a reality. Wanna work with us?', 'backend/slider/1783352338276479.jpg', 1, 0, '2023-11-23 05:02:02', '2023-11-23 05:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint UNSIGNED NOT NULL,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `title_english`, `title_bangla`, `image`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Cristal', 'ওচাকা1', 'backend/sponsor/1783802136679012.png', 1, 0, '2023-10-29 23:43:15', '2023-11-28 04:11:23'),
(3, 'OSI', 'OSI', 'backend/sponsor/1783802121975215.png', 1, 0, '2023-11-06 05:46:08', '2023-11-28 04:11:09'),
(4, NULL, NULL, 'backend/sponsor/1783802108492467.png', 1, 0, '2023-11-06 05:46:42', '2023-11-28 04:10:56'),
(5, NULL, NULL, 'backend/sponsor/1783802096051825.png', 1, 0, '2023-11-06 05:47:03', '2023-11-28 04:10:44'),
(6, NULL, NULL, 'backend/sponsor/1783802081664058.png', 1, 0, '2023-11-06 05:47:18', '2023-11-28 04:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint UNSIGNED NOT NULL,
  `name_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `committee` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name_english`, `name_bangla`, `desig_english`, `desig_bangla`, `email`, `facebook`, `instagram`, `twitter`, `linkedin`, `telegram`, `youtube`, `image`, `committee`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Olivia Peterson', 'Olivia Peterson', '[ CEO of Company ]', '[ CEO of Company ]', 'tomal@gmail.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.linkedin.com/', 'https://telegram.org/', 'https://www.youtube.com/', 'backend/team/1783355677941139.jpg', 'faculty', 1, 0, '2023-11-05 03:58:12', '2023-11-23 05:55:07'),
(2, 'Robert Cooper', 'Robert Cooper', '[ Finance Manager ]', '[ Finance Manager ]', 'taleb@gmail.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.linkedin.com/', 'https://telegram.org/', 'https://www.youtube.com/', 'backend/team/1783355661362270.jpg', 'faculty', 1, 0, '2023-11-05 04:00:57', '2023-11-23 05:54:51'),
(3, 'Sarah Michelle', 'Sarah Michelle', '[ Marketing Manager ]', '[ Marketing Manager ]', 'mewuzumury@mailinator.com', 'Nam eos labore accu', 'Dolor voluptatum fug', 'Id quis dolores dol', 'Nostrum voluptas ull', 'Perspiciatis quia f', 'Quos omnis id dicta', 'backend/team/1783355646011323.jpg', 'advisory', 1, 0, '2023-11-05 04:02:11', '2023-11-23 05:54:36'),
(4, 'Christina Torres', 'Christina Torres', '[ Company Founder ]', '[ Company Founder ]', 'xirivawefy@mailinator.com', 'Hic neque atque ipsa', 'Quam in amet proide', 'Eligendi ducimus re', 'Consequatur ex error', 'Voluptas esse ea ut', 'Voluptas nulla in es', 'backend/team/1783355619684716.jpg', 'vice', 1, 0, '2023-11-14 02:55:13', '2023-11-23 05:54:11'),
(5, 'Amalia Bruno', 'Amalia Bruno', '[ Interior Designer ]', '[ Interior Designer ]', 'lilodehe@mailinator.com', 'Saepe voluptatem iru', 'Veniam est pariatur', 'Voluptas perferendis', 'Provident tempor ob', 'Officiis sunt amet', 'Aut ut dolore aliqui', 'backend/team/1783355003887698.jpg', 'vice', 1, 0, '2023-11-23 05:44:24', '2023-11-23 05:44:28');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial2s`
--

CREATE TABLE `testimonial2s` (
  `id` bigint UNSIGNED NOT NULL,
  `name_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_eng` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_bng` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `review_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `star` int DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial2s`
--

INSERT INTO `testimonial2s` (`id`, `name_english`, `name_bangla`, `desig_eng`, `desig_bng`, `review_eng`, `review_bng`, `star`, `image`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Michael, Customer', 'Michael, Customer', 'Better than we think!', 'Better than we think!', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', 4, 'backend/testimonial/1781722973784208.webp', 1, 1, '2023-11-05 05:23:59', '2023-11-14 00:10:56'),
(2, 'John, Customer', 'John, Customer', 'Big attention to details!', 'Big attention to details!', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', 3, 'backend/testimonial_2/1781723140722568.jpg', 1, 0, '2023-11-05 05:26:38', '2023-11-14 00:10:07'),
(3, 'Sandra, Customer', 'Sandra, Customer', 'Modern and great design!', 'Modern and great design!', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', 2, 'backend/testimonial_2/1781723193144123.jpg', 1, 0, '2023-11-05 05:27:28', '2023-11-14 00:09:05'),
(4, 'Michael, Customer', 'Michael, Customer', 'Better than we think!', 'Better than we think!', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', 4, 'backend/testimonial/1781722973784208.webp', 1, 1, '2023-11-05 05:23:59', '2023-11-14 00:10:56'),
(5, 'John, Customer', 'John, Customer', 'Big attention to details!', 'Big attention to details!', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', 3, 'backend/testimonial_2/1781723140722568.jpg', 1, 0, '2023-11-05 05:26:38', '2023-11-14 00:10:07'),
(6, 'Sandra, Customer', 'Sandra, Customer', 'Modern and great design!', 'Modern and great design!', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', '<p>I\'m always impressed with the services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>', 2, 'backend/testimonial_2/1781723193144123.jpg', 1, 0, '2023-11-05 05:27:28', '2023-11-14 00:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_eng` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desig_bng` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review_eng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `review_bng` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `star` int DEFAULT NULL,
  `image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '1',
  `add_home` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `photo`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@admin.com', 'admin', '01738920277', NULL, NULL, NULL, '$2y$10$nfPv7p0JtkLz7GdVYMykkeeksIRF6vqIFjgPSYh7pKWlq8hpJDOxm', NULL, NULL, '2023-11-05 21:58:57'),
(4, 'User', 'user@user.com', 'user', '01738920277', NULL, NULL, NULL, '$2y$10$nfPv7p0JtkLz7GdVYMykkeeksIRF6vqIFjgPSYh7pKWlq8hpJDOxm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `video_link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `status` int NOT NULL DEFAULT '0',
  `add_home` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video_galleries`
--

INSERT INTO `video_galleries` (`id`, `video_link`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, '-KQUXAWYBLY', 1, 0, '2023-11-14 04:17:52', '2023-11-14 22:57:36'),
(2, 'z-MGzznF6nA', 1, 0, '2023-11-14 05:17:00', '2023-11-14 05:59:00'),
(3, 'GapuZYyoEB4', 1, 0, '2023-11-14 05:21:09', '2023-11-14 05:58:56'),
(4, 'b0tuucPAKFo', 1, 0, '2023-11-14 05:21:34', '2023-11-14 05:58:53'),
(5, 'uct1e_JU9ig', 1, 0, '2023-11-14 05:21:51', '2023-11-14 05:58:48'),
(6, 'W6OdZplvr38', 1, 0, '2023-11-14 05:22:14', '2023-11-14 05:58:44');

-- --------------------------------------------------------

--
-- Table structure for table `website_banners`
--

CREATE TABLE `website_banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_details_eng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_details_bng` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website_links`
--

CREATE TABLE `website_links` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_english` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_bangla` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website_link` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedIn` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_link` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_links`
--

INSERT INTO `website_links` (`id`, `email`, `phone`, `address_english`, `address_bangla`, `website_link`, `facebook`, `instagram`, `linkedIn`, `twitter`, `telegram`, `youtube`, `map_link`, `created_at`, `updated_at`) VALUES
(1, 'contact@example.com', '01780882914', '258C, South City, Main town Brolex Tower, Dhaka', '258C, সাউথ সিটি, প্রধান শহর ব্রোলেক্স টাওয়ার, ঢাকা', 'https://www.w3schools.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.twitter.com/', 'https://telegram.org/', 'https://www.youtube.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.197714892199!2d90.42061257592889!3d23.81156738642416!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75b217edcff%3A0xd9bf0907e20cac6f!2sTechweb%20Bd%20It!5e0!3m2!1sen!2sbd!4v1700027580322!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-11-05 04:40:47', '2023-11-14 23:53:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_and_titles`
--
ALTER TABLE `banner_and_titles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_icons`
--
ALTER TABLE `counter_icons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter_images`
--
ALTER TABLE `counter_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_galleries`
--
ALTER TABLE `image_galleries`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial2s`
--
ALTER TABLE `testimonial2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `video_galleries`
--
ALTER TABLE `video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_banners`
--
ALTER TABLE `website_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_links`
--
ALTER TABLE `website_links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_and_titles`
--
ALTER TABLE `banner_and_titles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `counter_icons`
--
ALTER TABLE `counter_icons`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counter_images`
--
ALTER TABLE `counter_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial2s`
--
ALTER TABLE `testimonial2s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `website_banners`
--
ALTER TABLE `website_banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_links`
--
ALTER TABLE `website_links`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
