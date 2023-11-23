-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 11:48 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `victoria_spa`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_english` varchar(191) DEFAULT NULL,
  `title_bangla` varchar(191) DEFAULT NULL,
  `details_1_eng` longtext DEFAULT NULL,
  `details_1_bng` longtext DEFAULT NULL,
  `details_2_eng` longtext DEFAULT NULL,
  `details_2_bng` longtext DEFAULT NULL,
  `main_image` varchar(191) DEFAULT NULL,
  `banner_image` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title_english`, `title_bangla`, `details_1_eng`, `details_1_bng`, `details_2_eng`, `details_2_bng`, `main_image`, `banner_image`, `created_at`, `updated_at`) VALUES
(2, 'Welcome To Victoria Spa', 'ভিক্টোরিয়া স্পাতে স্বাগতম', '<div>\r\n<h1><span style=\"color: rgb(250, 162, 146);\">Incredible &amp;</span><br><span style=\"color: rgb(250, 162, 146);\">Relaxiable SpaShape</span></h1>\r\n<h4>We have more than 20 years of Exprience with 100% client Satisfaction</h4>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases are some perfectly simple and easy to distinguish. In a free hour,power can help you for a relaxation and fresh mind with great enjoy take an example, which of us ever undertakes laborious physical satisfaction</p>\r\n</div>', '<div>\r\n<h1><span style=\"color: rgb(250, 162, 146);\">অবিশ্বাস্য এবং</span><br><span style=\"color: rgb(250, 162, 146);\">আরামদায়ক SpaShape</span></h1>\r\n<h4>100% ক্লায়েন্ট সন্তুষ্টি সহ আমাদের 20 বছরেরও বেশি অভিজ্ঞতা রয়েছে</h4>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হল স্পা কেসগুলির সেরা উপায় হল কিছু পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, শক্তি আপনাকে বিশ্রামের জন্য সাহায্য করতে পারে এবং দুর্দান্ত উপভোগের সাথে তাজা মন একটি উদাহরণ নিন, আমাদের মধ্যে কে কখনও শ্রমসাধ্য শারীরিক তৃপ্তি গ্রহণ করে</p>\r\n</div>', '<div>Exprienced Specialists<br>Message Therapy is the best way of Spa cases are perfectly simple and easy</div>\r\n<div>100% Safe &amp; Natural<br>Message Therapy is the best way of Spa cases are perfectly simple and easy</div>\r\n<div>Special gifts &amp; Offers<br>Message Therapy is the best way of Spa cases are perfectly simple and easy</div>\r\n<div>Choose<br>Qulaity &amp; Natural Herbs<br>Message Therapy is the best way of Spa cases are perfectly simple and easy</div>\r\n<div>Unique from other Spa<br>Message Therapy is the best way of Spa cases are perfectly simple and easy</div>\r\n<div>Spa Consultancy<br>Message Therapy is the best way of Spa cases are perfectly simple and easy</div>', '<div>অভিজ্ঞ বিশেষজ্ঞ<br>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং সহজ<br>100% নিরাপদ ও প্রাকৃতিক<br>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং সহজ<br>বিশেষ উপহার এবং অফার<br>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং সহজ<br>পছন্দ করা<br>কুলাইটি এবং প্রাকৃতিক ভেষজ<br>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং সহজ<br>অন্যান্য স্পা থেকে অনন্য<br>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং সহজ<br>স্পা কনসালটেন্সি<br>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং সহজ</div>', 'backend/about/1781714098630870.webp', 'backend/about/1782069335234814.jpg', '2023-11-05 03:02:56', '2023-11-09 01:09:15');

-- --------------------------------------------------------

--
-- Table structure for table `banner_and_titles`
--

CREATE TABLE `banner_and_titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_english` varchar(191) DEFAULT NULL,
  `title_bangla` varchar(191) DEFAULT NULL,
  `banner_image` varchar(191) DEFAULT NULL,
  `page` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT '0',
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_english` varchar(191) DEFAULT NULL,
  `title_bangla` varchar(191) DEFAULT NULL,
  `short_des_eng` text DEFAULT NULL,
  `short_des_bng` text DEFAULT NULL,
  `long_des1_eng` longtext DEFAULT NULL,
  `long_des1_bng` longtext DEFAULT NULL,
  `long_des2_eng` longtext DEFAULT NULL,
  `long_des2_bng` longtext DEFAULT NULL,
  `long_des3_eng` longtext DEFAULT NULL,
  `long_des3_bng` longtext DEFAULT NULL,
  `main_image` varchar(191) DEFAULT NULL,
  `banner_image` varchar(191) DEFAULT NULL,
  `details_image1` varchar(191) DEFAULT NULL,
  `details_image2` varchar(191) DEFAULT NULL,
  `details_image3` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `add_home` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title_english`, `title_bangla`, `short_des_eng`, `short_des_bng`, `long_des1_eng`, `long_des1_bng`, `long_des2_eng`, `long_des2_bng`, `long_des3_eng`, `long_des3_bng`, `main_image`, `banner_image`, `details_image1`, `details_image2`, `details_image3`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Facial Scrub is natural care', 'ফেসিয়াল স্ক্রাব প্রাকৃতিক যত্ন', '<div>Facial Scrub is herbal treatment that makes your face skin smooth and refresh</div>', '<div>ফেসিয়াল স্ক্রাব হল ভেষজ চিকিত্সা যা আপনার মুখের ত্বককে মসৃণ এবং সতেজ করে তোলে</div>', '<div>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation</p>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>\r\n</div>', '<div>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>\r\n</div>', '<div>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation</p>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>\r\n</div>', '<div>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>\r\n</div>', '<div>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation</p>\r\n<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>\r\n</div>', '<div>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>\r\n</div>', 'backend/blogs/main_image/1781803425676018.png', 'backend/blogs/banner_image/1781803426413648.jpg', 'backend/blogs/details_images/1781803427001568.jpg', 'backend/blogs/details_images/1781803427196079.jpg', 'backend/blogs/details_images/1781803427662926.jpg', 1, 0, '2023-11-06 02:42:46', '2023-11-06 02:48:30'),
(2, 'Facial Scrub is natural care', 'ফেসিয়াল স্ক্রাব প্রাকৃতিক যত্ন', '<div>Facial Scrub is herbal treatment that makes your face skin smooth and refresh</div>', '<div>ফেসিয়াল স্ক্রাব হল ভেষজ চিকিত্সা যা আপনার মুখের ত্বককে মসৃণ এবং সতেজ করে তোলে</div>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', 'backend/blogs/main_image/1781803591761119.webp', 'backend/blogs/banner_image/1781803591822048.jpg', 'backend/blogs/details_images/1781803592256375.jpg', 'backend/blogs/details_images/1781803592815315.jpg', 'backend/blogs/details_images/1781803593081019.jpg', 1, 0, '2023-11-06 02:45:24', '2023-11-06 02:48:26'),
(3, 'Facial Scrub is natural care', 'ফেসিয়াল স্ক্রাব প্রাকৃতিক যত্ন', '<div class=\"title\">Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care Facial Scrub is natural care</div>', '<p>ফেসিয়াল স্ক্রাব হল ভেষজ চিকিত্সা যা আপনার মুখের ত্বককে মসৃণ এবং সতেজ করে তোলে</p>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', '<p>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever undertake laborious physical satisfaction free hour,power you for a relaxation and fresh mind with great enjoy take which of us ever undertakes laborious physical free hour,power you for a relaxation<br><br>Peerly is the best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish. In a free hour,power you for a relaxation and fresh mind with great enjoy take an which of us ever</p>', '<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনাকে একটি বিশ্রামের জন্য শক্তি এবং তাজা মনকে দারুণ উপভোগের সাথে গ্রহণ করুন আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক তৃপ্তি মুক্ত ঘন্টা গ্রহণ করে, আপনাকে একটি বিশ্রাম এবং তাজা মনকে দুর্দান্ত উপভোগ করার জন্য শক্তি দেয় আমাদের মধ্যে কোনটি শ্রমসাধ্য শারীরিক মুক্ত ঘন্টা গ্রহণ করে ,একটি শিথিল করার জন্য আপনাকে শক্তি</p>\r\n<p>পিয়ারলি হল সেরা স্পা থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং আলাদা করা সহজ। একটি বিনামূল্যের ঘন্টায়, আপনি একটি শিথিল এবং তাজা মনের জন্য শক্তি দিয়ে মহান উপভোগ করুন আমাদের মধ্যে কোনটি গ্রহণ করুন</p>', 'backend/blogs/main_image/1781803704317749.png', 'backend/blogs/banner_image/1781803704400618.jpg', 'backend/blogs/details_images/1781803705046026.jpg', 'backend/blogs/details_images/1781803705299619.jpg', 'backend/blogs/details_images/1781803706220403.jpg', 1, 0, '2023-11-06 02:47:11', '2023-11-09 02:14:42'),
(4, 'Facial Scrub is natural care', 'আপনার জন্য আমাদের সর্বশেষ এবং সর্বাধিক জনপ্রিয় টিপস এবং কৌশল।', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer&nbsp;</p>', NULL, '<p>took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, '<p>took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, '<p>took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>', NULL, 'backend/blogs/main_image/1782074449196982.jpg', 'backend/blogs/banner_image/1782074743001550.jpg', 'backend/blogs/details_images/1782076478325573.jpg', 'backend/blogs/details_images/1782076478648841.jpg', 'backend/blogs/details_images/1782076479011798.jpg', 1, 0, '2023-11-09 02:30:32', '2023-11-09 03:02:48');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sent_by` int(11) DEFAULT NULL,
  `name_english` varchar(191) DEFAULT NULL,
  `name_bangla` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `subject_english` varchar(191) DEFAULT NULL,
  `subject_bangla` varchar(191) DEFAULT NULL,
  `message_english` varchar(191) DEFAULT NULL,
  `message_bangla` varchar(191) DEFAULT NULL,
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
(5, 3, 'Hasem', NULL, '4534534543', 'hasem@gmail.com', NULL, NULL, 'HELLO VICTORIA SPA! I WOULD WANT TO TAKE SERVE FROM YOU.', NULL, '2023-11-11 00:50:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counter_icons`
--

CREATE TABLE `counter_icons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_english_1` varchar(191) DEFAULT NULL,
  `title_bangla_1` varchar(191) DEFAULT NULL,
  `value_1` varchar(191) DEFAULT NULL,
  `incon_1` varchar(191) DEFAULT NULL,
  `title_english_2` varchar(191) DEFAULT NULL,
  `title_bangla_2` varchar(191) DEFAULT NULL,
  `value_2` varchar(191) DEFAULT NULL,
  `incon_2` varchar(191) DEFAULT NULL,
  `title_english_3` varchar(191) DEFAULT NULL,
  `title_bangla_3` varchar(191) DEFAULT NULL,
  `value_3` varchar(191) DEFAULT NULL,
  `incon_3` varchar(191) DEFAULT NULL,
  `title_english_4` varchar(191) DEFAULT NULL,
  `title_bangla_4` varchar(191) DEFAULT NULL,
  `value_4` varchar(191) DEFAULT NULL,
  `incon_4` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `counter_icons`
--

INSERT INTO `counter_icons` (`id`, `title_english_1`, `title_bangla_1`, `value_1`, `incon_1`, `title_english_2`, `title_bangla_2`, `value_2`, `incon_2`, `title_english_3`, `title_bangla_3`, `value_3`, `incon_3`, `title_english_4`, `title_bangla_4`, `value_4`, `incon_4`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ShowEye', 'চোখে দেখা', '750', 'fa-solid fa-heart', 'HappyFace', 'খুশিমুখ', '400', 'fa-brands fa-discord', 'Cups of coffee', 'কফি পান', '453', 'fa-solid fa-cart-shopping', 'Projects done', 'কম্পিলিট প্রজেক্ট', '432', 'fa-brands fa-docker', 0, '2023-10-30 01:08:22', '2023-10-30 02:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `counter_images`
--

CREATE TABLE `counter_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_english_1` varchar(191) DEFAULT NULL,
  `title_bangla_1` varchar(191) DEFAULT NULL,
  `value_1` varchar(191) DEFAULT NULL,
  `image_1` varchar(191) DEFAULT NULL,
  `title_english_2` varchar(191) DEFAULT NULL,
  `title_bangla_2` varchar(191) DEFAULT NULL,
  `value_2` varchar(191) DEFAULT NULL,
  `image_2` varchar(191) DEFAULT NULL,
  `title_english_3` varchar(191) DEFAULT NULL,
  `title_bangla_3` varchar(191) DEFAULT NULL,
  `value_3` varchar(191) DEFAULT NULL,
  `image_3` varchar(191) DEFAULT NULL,
  `title_english_4` varchar(191) DEFAULT NULL,
  `title_bangla_4` varchar(191) DEFAULT NULL,
  `value_4` varchar(191) DEFAULT NULL,
  `image_4` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `footer_details_eng` text DEFAULT NULL,
  `footer_details_bng` text DEFAULT NULL,
  `copy_right_text` text DEFAULT NULL,
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
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `add_home` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_galleries`
--

INSERT INTO `image_galleries` (`id`, `image`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'backend/img_gallery/1782063005419460.jpg', 0, 0, '2023-11-08 23:28:38', NULL),
(2, 'backend/img_gallery/1782063014945172.jpg', 0, 0, '2023-11-08 23:28:47', NULL),
(3, 'backend/img_gallery/1782063023919791.jpg', 0, 0, '2023-11-08 23:28:56', NULL),
(4, 'backend/img_gallery/1782063106972393.jpg', 0, 0, '2023-11-08 23:30:15', NULL),
(5, 'backend/img_gallery/1782063127031097.jpg', 0, 0, '2023-11-08 23:30:34', NULL),
(6, 'backend/img_gallery/1782063149091084.jpg', 0, 0, '2023-11-08 23:30:55', NULL),
(7, 'backend/img_gallery/1782063165463556.jpg', 0, 0, '2023-11-08 23:31:11', NULL),
(8, 'backend/img_gallery/1782063186664680.jpg', 0, 0, '2023-11-08 23:31:31', NULL),
(9, 'backend/img_gallery/1782063212360094.png', 0, 0, '2023-11-08 23:31:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name_english` varchar(191) DEFAULT NULL,
  `site_name_bangla` varchar(191) DEFAULT NULL,
  `admin_logo_image` varchar(191) DEFAULT NULL,
  `frontend_logo_image` varchar(191) DEFAULT NULL,
  `frontend_footer_image` varchar(191) DEFAULT NULL,
  `favicon_image` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `site_name_english`, `site_name_bangla`, `admin_logo_image`, `frontend_logo_image`, `frontend_footer_image`, `favicon_image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Victoria Spa', 'ভিক্টোরিয়া স্পা', 'backend/logo/1781906224624356.png', 'backend/logo/1781906224775028.png', 'backend/logo/1781906224792104.png', 'backend/logo/1781906224810593.png', '0', '2023-11-03 22:40:52', '2023-11-07 05:56:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
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
(37, '2023_11_11_070358_create_sliders_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pdf_file` varchar(191) DEFAULT NULL,
  `short_des_eng` text DEFAULT NULL,
  `short_des_bng` text DEFAULT NULL,
  `long_des_eng` text DEFAULT NULL,
  `long_des_bng` text DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `add_home` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_english` varchar(191) DEFAULT NULL,
  `title_bangla` varchar(191) DEFAULT NULL,
  `main_image` varchar(191) DEFAULT NULL,
  `price` varchar(191) DEFAULT NULL,
  `banner_image` varchar(191) DEFAULT NULL,
  `detais_image_1` varchar(191) DEFAULT NULL,
  `detais_image_2` varchar(191) DEFAULT NULL,
  `detais_image_3` varchar(191) DEFAULT NULL,
  `des_sm_eng` text DEFAULT NULL,
  `des_sm_bng` text DEFAULT NULL,
  `long_des1_eng` longtext DEFAULT NULL,
  `long_des1_bng` longtext DEFAULT NULL,
  `long_des2_eng` longtext DEFAULT NULL,
  `long_des2_bng` longtext DEFAULT NULL,
  `long_des3_eng` longtext DEFAULT NULL,
  `long_des3_bng` longtext DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT '0',
  `basic` int(10) NOT NULL DEFAULT 0,
  `premium` int(10) NOT NULL DEFAULT 0,
  `luxury` int(10) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title_english`, `title_bangla`, `main_image`, `price`, `banner_image`, `detais_image_1`, `detais_image_2`, `detais_image_3`, `des_sm_eng`, `des_sm_bng`, `long_des1_eng`, `long_des1_bng`, `long_des2_eng`, `long_des2_bng`, `long_des3_eng`, `long_des3_bng`, `status`, `basic`, `premium`, `luxury`, `created_at`, `updated_at`) VALUES
(1, 'Massage Therapy', 'মালিশের মাধ্যমে চিকিৎসা', 'backend/service/main_image/1781697610212713.webp', '1000', 'backend/service/banner_image/1781707899868487.jpg', 'backend/service/details_images/1781697611029493.webp', 'backend/service/details_images/1781697611185906.webp', 'backend/service/details_images/1781697611340856.webp', '<div>Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power</div>', '<div>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি</div>', '<div>\r\n<div>\r\n<div>Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power. Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power.</div>\r\n</div>\r\n</div>', '<div>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি</div>', '<div>Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power. Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power.</div>', '<div>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি</div>', '<div>Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power. Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power.</div>', '<div>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি</div>', '1', 1, 0, 1, '2023-10-30 04:00:00', '2023-11-07 00:25:11'),
(2, 'Aroma Therapy', 'অ্যারোমা থেরাপি', 'backend/service/main_image/1781698863761963.webp', '5000', 'backend/service/banner_image/1781707523882502.jpg', 'backend/service/details_images/1781698864342983.webp', 'backend/service/details_images/1781698864558559.webp', 'backend/service/details_images/1781698864705261.webp', '<div>Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power.</div>', '<p>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি</p>', '<div>Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power. Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power.</div>', '<div>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি</div>', '<div>Hot Stone Spa best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish power<br>Hot Stone Spa best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish power<br>Hot Stone Spa best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish power<br>Hot Stone Spa best Spa therapy is the best way of Spa cases perfectly simple and easy to distinguish power</div>', '<div>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি</div>', '<div>Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power. Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power.</div>', '<div>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি</div>', '1', 1, 1, 1, '2023-11-04 23:00:47', '2023-11-07 00:25:08'),
(3, 'Organic Therapy', 'জৈব থেরাপি', 'backend/service/main_image/1781699037425290.webp', '1000', 'backend/service/banner_image/1781707688053534.jpg', 'backend/service/details_images/1781699037962463.webp', 'backend/service/details_images/1781699038081512.webp', 'backend/service/details_images/1781699038203464.webp', '<div>Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power.&nbsp;</div>', '<div>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ।&nbsp;</div>', '<div>Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power. Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power.</div>', '<div>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি</div>', '<div>Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power. Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power.</div>', '<div>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি</div>', '<div>Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power. Message Therapy is the best way of Spa cases are perfectly simple and easy to distinguish. In a free hour,power.</div>', '<div>মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি মেসেজ থেরাপি হ\'ল স্পা কেসগুলির সর্বোত্তম উপায় পুরোপুরি সহজ এবং পার্থক্য করা সহজ। একটি বিনামূল্যে ঘন্টা, শক্তি</div>', '1', 1, 1, 1, '2023-11-04 23:03:32', '2023-11-07 00:24:35'),
(4, 'Hot Oil Message', 'গরম তেলের বার্তা', 'backend/service/main_image/1781712301518358.png', '2500', 'backend/service/banner_image/1781712301574393.jpg', 'backend/service/details_images/1781712302479733.jpg', 'backend/service/details_images/1781712302754484.jpg', 'backend/service/details_images/1781712303218815.jpg', '<div>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</div>', '<div>জনপ্রিয় বিশ্বাসের বিপরীতে, Lorem Ipsum কেবল এলোমেলো পাঠ্য নয়। এটি 45 খ্রিস্টপূর্বাব্দের ধ্রুপদী ল্যাটিন সাহিত্যের একটি অংশে শিকড় রয়েছে, এটি 2000 বছরেরও বেশি পুরানো।</div>', '<div>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</div>', '<div>জনপ্রিয় বিশ্বাসের বিপরীতে, Lorem Ipsum কেবল এলোমেলো পাঠ্য নয়। এটি 45 খ্রিস্টপূর্বাব্দের ধ্রুপদী ল্যাটিন সাহিত্যের একটি অংশে শিকড় রয়েছে, এটি 2000 বছরেরও বেশি পুরানো।</div>', '<div>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</div>', '<div>জনপ্রিয় বিশ্বাসের বিপরীতে, Lorem Ipsum কেবল এলোমেলো পাঠ্য নয়। এটি 45 খ্রিস্টপূর্বাব্দের ধ্রুপদী ল্যাটিন সাহিত্যের একটি অংশে শিকড় রয়েছে, এটি 2000 বছরেরও বেশি পুরানো।</div>', '<div>ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</div>', '<div>জনপ্রিয় বিশ্বাসের বিপরীতে, Lorem Ipsum কেবল এলোমেলো পাঠ্য নয়। এটি 45 খ্রিস্টপূর্বাব্দের ধ্রুপদী ল্যাটিন সাহিত্যের একটি অংশে শিকড় রয়েছে, এটি 2000 বছরেরও বেশি পুরানো।</div>', '1', 1, 1, 1, '2023-11-05 02:34:23', '2023-11-07 00:24:32'),
(5, 'Tea Therapy', 'চা থেরাপি', 'backend/service/main_image/1781881936226497.jpg', '2000', 'backend/service/banner_image/1781881937012122.jpg', 'backend/service/details_images/1781881937436126.jpg', 'backend/service/details_images/1781881937703117.jpg', 'backend/service/details_images/1781881937967941.jpg', '<div>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</div>', '<div>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</div>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '1', 0, 1, 1, '2023-11-06 23:30:39', '2023-11-07 00:25:05'),
(6, 'Body Treatment', 'শারীরিক চিকিৎসা', 'backend/service/main_image/1781882052852845.jpg', '4000', 'backend/service/banner_image/1781882053458936.jpg', 'backend/service/details_images/1781882054110829.jpg', 'backend/service/details_images/1781882054400289.jpg', 'backend/service/details_images/1781882054644985.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '1', 0, 1, 1, '2023-11-06 23:32:30', '2023-11-07 00:25:00'),
(7, 'Herbal Message', 'ভেষজ বার্তা', 'backend/service/main_image/1781882358707466.jpg', '4500', 'backend/service/banner_image/1781882359274651.jpg', 'backend/service/details_images/1781882359768980.jpg', 'backend/service/details_images/1781882360361280.jpg', 'backend/service/details_images/1781882360643505.jpg', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,&nbsp;</p>', '<p>এটি একটি দীর্ঘ প্রতিষ্ঠিত সত্য যে একটি পাঠক একটি পৃষ্ঠার পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হবে যখন এটির বিন্যাসটি দেখবে। Lorem Ipsum ব্যবহার করার বিষয় হল যে এটিতে অক্ষরগুলির একটি কম-বেশি স্বাভাবিক বিতরণ রয়েছে,</p>', '1', 0, 1, 1, '2023-11-06 23:37:22', '2023-11-07 00:24:53');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_english` varchar(191) DEFAULT NULL,
  `title_bangla` varchar(191) DEFAULT NULL,
  `short_text_eng` varchar(191) DEFAULT NULL,
  `short_text_bng` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `add_home` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title_english`, `title_bangla`, `short_text_eng`, `short_text_bng`, `image`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'A MODERN DAY SPRITUAL SPA', 'ফেসিয়াল স্ক্রাব প্রাকৃতিক যত্ন', 'Access the highest quality library of Vue courses free - This weekend only.', 'Vue কোর্সের সর্বোচ্চ মানের লাইব্রেরি বিনামূল্যে অ্যাক্সেস করুন - শুধুমাত্র এই সপ্তাহান্তে।', 'backend/slider/1782257218933776.jpg', 1, 0, '2023-11-11 02:55:35', '2023-11-11 03:18:45'),
(2, 'Meet Our Member', 'বাড়ির আসবাবপত্র', 'Access the highest quality library of Vue courses free - This weekend only.', 'Vue কোর্সের সর্বোচ্চ মানের লাইব্রেরি বিনামূল্যে অ্যাক্সেস করুন - শুধুমাত্র এই সপ্তাহান্তে।', 'backend/slider/1782257379758553.jpg', 1, 0, '2023-11-11 02:58:09', '2023-11-11 04:48:26'),
(3, 'A MODERN DAY SPRITUAL SPA', 'ফেসিয়াল স্ক্রাব প্রাকৃতিক যত্ন', 'Access the highest quality library of Vue courses free - This weekend only.', 'Vue কোর্সের সর্বোচ্চ মানের লাইব্রেরি বিনামূল্যে অ্যাক্সেস করুন - শুধুমাত্র এই সপ্তাহান্তে।', 'backend/slider/1782257420851697.jpg', 1, 0, '2023-11-11 02:58:47', '2023-11-11 04:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_english` varchar(191) DEFAULT NULL,
  `title_bangla` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `add_home` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id`, `title_english`, `title_bangla`, `image`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Cristal', 'ওচাকা1', 'backend/sponsor/1781158481694955.png', 1, 0, '2023-10-29 23:43:15', '2023-10-29 23:51:37'),
(3, 'OSI', 'OSI', 'backend/sponsor/1781814964714232.png', 1, 0, '2023-11-06 05:46:08', '2023-11-06 05:47:36'),
(4, NULL, NULL, 'backend/sponsor/1781815000554177.png', 1, 0, '2023-11-06 05:46:42', '2023-11-06 05:47:32'),
(5, NULL, NULL, 'backend/sponsor/1781815022289011.png', 1, 0, '2023-11-06 05:47:03', '2023-11-06 05:47:28'),
(6, NULL, NULL, 'backend/sponsor/1781815037677838.png', 1, 0, '2023-11-06 05:47:18', '2023-11-06 05:47:25');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_english` varchar(191) DEFAULT NULL,
  `name_bangla` varchar(191) DEFAULT NULL,
  `desig_english` varchar(191) DEFAULT NULL,
  `desig_bangla` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `instagram` varchar(191) DEFAULT NULL,
  `twitter` varchar(191) DEFAULT NULL,
  `linkedin` varchar(191) DEFAULT NULL,
  `telegram` varchar(191) DEFAULT NULL,
  `youtube` varchar(191) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `committee` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `add_home` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name_english`, `name_bangla`, `desig_english`, `desig_bangla`, `email`, `facebook`, `instagram`, `twitter`, `linkedin`, `telegram`, `youtube`, `image`, `committee`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Alex Cruis', 'অ্যালেক্স ক্রুস', 'Stone Spa Expert', 'স্টোন স্পা এক্সপার্ট', 'tomal@gmail.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.linkedin.com/', 'https://telegram.org/', 'https://www.youtube.com/', 'backend/team/1781717576819717.webp', 'faculty', 1, 0, '2023-11-05 03:58:12', '2023-11-05 04:02:44'),
(2, 'Rose Williams', 'রোজ উইলিয়ামস', 'Message Expart', 'বার্তা এক্সপার্ট', 'taleb@gmail.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.linkedin.com/', 'https://telegram.org/', 'https://www.youtube.com/', 'backend/team/1781717750364254.webp', 'faculty', 1, 0, '2023-11-05 04:00:57', '2023-11-05 04:02:41'),
(3, 'Tamanna Yesmin', 'তামান্না ইয়াসমিন', 'Aroma Message Expert', 'সুবাস বার্তা বিশেষজ্ঞ', 'user@user.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.twitter.com/', 'https://www.linkedin.com/', 'https://telegram.org/', 'https://www.youtube.com/', 'backend/team/1781717828046323.webp', 'faculty', 1, 0, '2023-11-05 04:02:11', '2023-11-05 04:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial2s`
--

CREATE TABLE `testimonial2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_english` varchar(191) DEFAULT NULL,
  `name_bangla` varchar(191) DEFAULT NULL,
  `desig_eng` varchar(191) DEFAULT NULL,
  `desig_bng` varchar(191) DEFAULT NULL,
  `review_eng` longtext DEFAULT NULL,
  `review_bng` longtext DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `add_home` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonial2s`
--

INSERT INTO `testimonial2s` (`id`, `name_english`, `name_bangla`, `desig_eng`, `desig_bng`, `review_eng`, `review_bng`, `star`, `image`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Alex Cruis', 'অ্যালেক্স ক্রুস', 'CEO, IBAC', 'সিইও, আইবিএসি', '<p>Google\'s service, offered free of charge, instantly translates words, phrases, and web pages between English and over 100 other languages.</p>', '<p>Google-এর পরিষেবা, বিনামূল্যে দেওয়া হয়, অবিলম্বে ইংরেজি এবং 100 টিরও বেশি অন্যান্য ভাষার মধ্যে শব্দ, বাক্যাংশ এবং ওয়েব পৃষ্ঠাগুলি অনুবাদ করে৷</p>', 4, 'backend/testimonial/1781722973784208.webp', 1, 1, '2023-11-05 05:23:59', '2023-11-05 22:13:03'),
(2, 'Tamanna Yesmin', 'তামান্না ইয়াসমিন', 'Client', 'ক্লায়েন্ট', '<p><em>Google\'s</em>&nbsp;service, offered free of charge, instantly translates words, phrases, and web pages between&nbsp;<em>English</em> and over 100 other languages.</p>', '<p>Google-এর পরিষেবা, বিনামূল্যে দেওয়া হয়, অবিলম্বে ইংরেজি এবং 100 টিরও বেশি অন্যান্য ভাষার মধ্যে শব্দ, বাক্যাংশ এবং ওয়েব পৃষ্ঠাগুলি অনুবাদ করে৷</p>', 3, 'backend/testimonial_2/1781723140722568.jpg', 1, 0, '2023-11-05 05:26:38', '2023-11-05 05:27:35'),
(3, 'test', 'test', 'CEO, IBAC', 'সিইও, আইবিএসি1', '<p><em>Google\'s</em>&nbsp;service, offered free of charge, instantly translates words, phrases, and web pages between&nbsp;<em>English</em> and over 100 other languages.</p>', '<p>পিয়ারলি সেরা স্পা সেন্টার। তারা আমাদের জন্য সর্বোত্তম পরিষেবা পরিবেশন করে এবং আমি খুব সন্তুষ্ট তাই তাদের সাথে সন্তুষ্ট স্পা কেস সম্পূর্ণ সহজ এবং সহজ<span style=\"color: rgb(224, 62, 45);\">❤</span></p>', 2, 'backend/testimonial_2/1781723193144123.jpg', 1, 0, '2023-11-05 05:27:28', '2023-11-05 22:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_english` varchar(191) DEFAULT NULL,
  `name_bangla` varchar(191) DEFAULT NULL,
  `desig_eng` varchar(191) DEFAULT NULL,
  `desig_bng` varchar(191) DEFAULT NULL,
  `review_eng` longtext DEFAULT NULL,
  `review_bng` longtext DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `image` varchar(191) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `add_home` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name_english`, `name_bangla`, `desig_eng`, `desig_bng`, `review_eng`, `review_bng`, `star`, `image`, `status`, `add_home`, `created_at`, `updated_at`) VALUES
(1, 'Rose Williams', 'রোজ উইলিয়ামস', 'Client', 'ক্লায়েন্ট', '<div>Peerly is the best Spa centre. They serve best service for us amd I am very much so satisfy with them is the best way of Spa cases perfectly simple and easy</div>', '<div>পিয়ারলি সেরা স্পা সেন্টার। তারা আমাদের জন্য সর্বোত্তম পরিষেবা পরিবেশন করে এবং আমি খুব সন্তুষ্ট তাই তাদের সাথে সন্তুষ্ট স্পা কেস সম্পূর্ণ সহজ এবং সহজ</div>', 4, 'backend/testimonial/1781627428650373.webp', 0, 1, '2023-11-04 04:05:20', '2023-11-05 22:12:32'),
(2, 'Tamanna Yesmin', 'তামান্না ইয়াসমিন', 'Client', 'ক্লায়েন্ট', '<div>\r\n<div>\r\n<div>Peerly is the best Spa centre. They serve best service for us amd I am very much so satisfy with them is the best way of Spa cases perfectly simple and easy</div>\r\n</div>\r\n</div>', '<div>পিয়ারলি সেরা স্পা সেন্টার। তারা আমাদের জন্য সর্বোত্তম পরিষেবা পরিবেশন করে এবং আমি খুব সন্তুষ্ট তাই তাদের সাথে সন্তুষ্ট স্পা কেস সম্পূর্ণ সহজ এবং সহজ</div>', 3, 'backend/testimonial/1781627564779113.png', 0, 1, '2023-11-04 04:07:30', '2023-11-05 22:12:35'),
(3, 'Alex Cruis', 'অ্যালেক্স ক্রুস', 'CEO, IBAC', 'সিইও, আইবিএসি', '<div>\r\n<div>Peerly is the best Spa centre. They serve best service for us amd I am very much so satisfy with them is the best way of Spa cases perfectly simple and easy</div>\r\n</div>', '<div>পিয়ারলি সেরা স্পা সেন্টার। তারা আমাদের জন্য সর্বোত্তম পরিষেবা পরিবেশন করে এবং আমি খুব সন্তুষ্ট তাই তাদের সাথে সন্তুষ্ট স্পা কেস সম্পূর্ণ সহজ এবং সহজ</div>', 5, 'backend/testimonial/1781627662431892.jpg', 1, 1, '2023-11-04 04:09:03', NULL),
(4, 'Rose Williams', 'রোজ উইলিয়ামস', 'Client', 'ক্লায়েন্ট', '<p>Peerly is the best Spa centre. They serve best service for us amd I am very much so satisfy with them is the best way of Spa cases perfectly simple and easy</p>', '<p>পিয়ারলি সেরা স্পা সেন্টার। তারা আমাদের জন্য সর্বোত্তম পরিষেবা পরিবেশন করে এবং আমি খুব সন্তুষ্ট তাই তাদের সাথে সন্তুষ্ট স্পা কেস সম্পূর্ণ সহজ এবং সহজ</p>', 3, 'backend/testimonial/1781786712783073.jpg', 1, 1, '2023-11-05 05:21:22', '2023-11-05 22:17:05'),
(5, 'Rose Williams', 'রোজ উইলিয়ামস', 'Client', 'ক্লায়েন্ট', '<p>Peerly is the best Spa centre. They serve best service for us amd I am very much so satisfy with them is the best way of Spa cases perfectly simple and easy</p>', '<p>পিয়ারলি সেরা স্পা সেন্টার। তারা আমাদের জন্য সর্বোত্তম পরিষেবা পরিবেশন করে এবং আমি খুব সন্তুষ্ট তাই তাদের সাথে সন্তুষ্ট স্পা কেস সম্পূর্ণ সহজ এবং সহজ</p>', 3, 'backend/testimonial/1781722884850320.jpg', 1, 1, '2023-11-05 05:22:34', '2023-11-05 22:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `role` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `photo` varchar(191) DEFAULT NULL,
  `address` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `photo`, `address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'admin@admin.com', 'admin', '01738920277', NULL, NULL, NULL, '$2y$10$nfPv7p0JtkLz7GdVYMykkeeksIRF6vqIFjgPSYh7pKWlq8hpJDOxm', NULL, NULL, '2023-11-05 21:58:57'),
(4, 'User', 'user@user.com', 'user', '01738920277', NULL, NULL, NULL, '$2y$10$bUVBiI9pgPu83r2ddtaqnu8SlJ.06Y2l50K3iRFDRaCI.vxRlQwWK', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video_galleries`
--

CREATE TABLE `video_galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `video_link` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `add_home` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website_banners`
--

CREATE TABLE `website_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_english` varchar(191) DEFAULT NULL,
  `title_bangla` varchar(191) DEFAULT NULL,
  `short_details_eng` text DEFAULT NULL,
  `short_details_bng` text DEFAULT NULL,
  `banner_image` varchar(191) DEFAULT NULL,
  `status` varchar(191) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website_links`
--

CREATE TABLE `website_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `address_english` varchar(191) DEFAULT NULL,
  `address_bangla` varchar(191) DEFAULT NULL,
  `website_link` varchar(191) DEFAULT NULL,
  `facebook` varchar(191) DEFAULT NULL,
  `instagram` varchar(191) DEFAULT NULL,
  `linkedIn` varchar(191) DEFAULT NULL,
  `twitter` varchar(191) DEFAULT NULL,
  `telegram` varchar(191) DEFAULT NULL,
  `youtube` varchar(191) DEFAULT NULL,
  `map_link` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_links`
--

INSERT INTO `website_links` (`id`, `email`, `phone`, `address_english`, `address_bangla`, `website_link`, `facebook`, `instagram`, `linkedIn`, `twitter`, `telegram`, `youtube`, `map_link`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', '01780882914', '258C, South City, Main town Brolex Tower, Dhaka', '258C, সাউথ সিটি, প্রধান শহর ব্রোলেক্স টাওয়ার, ঢাকা', 'https://www.w3schools.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.linkedin.com/', 'https://www.twitter.com/', 'https://telegram.org/', 'https://www.youtube.com/', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d330550.0898982129!2d90.35612028988673!3d23.743918978859348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1699180815591!5m2!1sen!2sbd\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2023-11-05 04:40:47', '2023-11-11 00:29:03');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_and_titles`
--
ALTER TABLE `banner_and_titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `counter_icons`
--
ALTER TABLE `counter_icons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `counter_images`
--
ALTER TABLE `counter_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `image_galleries`
--
ALTER TABLE `image_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sponsors`
--
ALTER TABLE `sponsors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonial2s`
--
ALTER TABLE `testimonial2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `video_galleries`
--
ALTER TABLE `video_galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_banners`
--
ALTER TABLE `website_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `website_links`
--
ALTER TABLE `website_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
