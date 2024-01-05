-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 04, 2023 at 08:30 AM
-- Server version: 5.7.41-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `live_accpeted_therpay`
--

-- --------------------------------------------------------

--
-- Table structure for table `article_moldels`
--

CREATE TABLE `article_moldels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(119) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `blog_hide` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_moldels`
--

INSERT INTO `article_moldels` (`id`, `page_name`, `title`, `description`, `image`, `status`, `blog_hide`, `created_at`, `updated_at`) VALUES
(12, NULL, 'https://designprosusa.com/Asl_Global/', NULL, '6214b0647825e.png', '1', '1', '2022-02-23 22:44:04', '2022-02-23 22:44:04'),
(13, NULL, 'google', NULL, '6214b0967800e.png', '0', '1', '2022-02-23 22:44:54', '2022-02-23 23:00:14');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `banner_image` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(119) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `center_sections`
--

CREATE TABLE `center_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_image` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `header` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `center_sections`
--

INSERT INTO `center_sections` (`id`, `feature_image`, `header`, `footer`, `created_at`, `updated_at`) VALUES
(1, '62d1e039740bf.png', '62d1e0397420f.png', '62d1e039742a8.png', NULL, '2022-07-17 08:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `cms_contents`
--

CREATE TABLE `cms_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(119) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cms_contents`
--

INSERT INTO `cms_contents` (`id`, `page_name`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Home', NULL, NULL, '1', NULL, NULL),
(2, 'Home', NULL, NULL, '1', NULL, NULL),
(3, 'Home', NULL, NULL, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_first` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_second` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdin` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tiktok` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_first` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_second` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_first` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_second` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_right` text COLLATE utf8mb4_unicode_ci,
  `subs_message` text COLLATE utf8mb4_unicode_ci,
  `subs_subject` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subs_thanks` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subs_site` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `facebook`, `twitter`, `instagram`, `country`, `city_first`, `city_second`, `linkdin`, `tiktok`, `email`, `phone_first`, `phone_second`, `address_first`, `address_second`, `copy_right`, `subs_message`, `subs_subject`, `subs_thanks`, `subs_site`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/AcceptedTherapy', NULL, 'https://instagram.com/', 'United States', 'Hattiesburg', 'Fort Worth', NULL, NULL, 'mucide@mailinator.com', '(601)602-3624', '(817)744-7424', '423 Weathersby Rd Suite 240, Hattiesburg, MS 39402', '7833 Oakmont Blvd Suite 110, Fort Worth, TX 76132', 'COPYRIGHTS ALL RIGHTS RESERVED 2022 BY Accepted Therapy', '<p>Thanks for subscribing to our Business Building Resume!</p>', 'Subscription Email From Business Building Resume', 'Thanks and Regards,', 'Business Builidng Resume', NULL, '2023-03-29 03:18:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact_inquiry_models`
--

CREATE TABLE `contact_inquiry_models` (
  `id` int(11) NOT NULL,
  `full_name` varchar(119) DEFAULT NULL,
  `email` varchar(119) DEFAULT NULL,
  `phone_number` varchar(119) DEFAULT NULL,
  `subject` varchar(119) DEFAULT NULL,
  `message` text,
  `status` varchar(119) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `title_second` text COLLATE utf8mb4_unicode_ci,
  `title_third` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `building_resume` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `test` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `page_name`, `title`, `title_second`, `title_third`, `description`, `building_resume`, `image`, `status`, `test`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'Banner', NULL, NULL, '<p>Let us walk with you so that you don&#39;t have to do this alone</p>', NULL, '630ce05ebd610.png', NULL, NULL, NULL, '2022-08-30 00:50:54'),
(2, 'Home', 'Mission Statement', NULL, NULL, '<p style=\"text-align:center\">At Accepted Therapy Services, we want you to feel seen, heard, and experience acceptance. Our goal is to provide a safe place for you to examine your past, live fully in the present, and plan for the future. We will be with you every step of your journey, celebrating your wins, grieving your losses, and navigating life&#39;s demands. We hope that as you process your journey, you will embrace who you are and grow into the best version of yourself.&nbsp;</p>', NULL, '6213c5a85ea40.png', NULL, NULL, NULL, '2023-03-10 01:56:05'),
(3, 'Home', 'Existing Clients', NULL, NULL, '<p>You can schedule an appointment through the portal.&nbsp;</p>', NULL, '627e792784ad3.png', NULL, NULL, NULL, '2022-08-30 09:27:50'),
(4, 'Home', 'New Clients', NULL, NULL, '<p>If you would like to establish care<br />\r\nwith Accepted Therapy<br />\r\nServices&nbsp;</p>', NULL, '627e793d0bce9.png', NULL, NULL, NULL, '2022-08-30 09:28:42'),
(5, 'Home', 'Make a Referral', NULL, NULL, '<p>If you would like to make a referral.&nbsp;</p>', NULL, '627e794aa0377.png', NULL, NULL, NULL, '2022-08-30 09:29:11'),
(6, 'Home', 'Client Resources', NULL, NULL, '<p>If you would like more information on coping skills or other therapy tools, you can find those here.</p>', NULL, '6309556520ee6.png', NULL, NULL, NULL, '2022-08-30 09:30:12'),
(7, 'Home', 'Clinician Resources', NULL, NULL, '<p>If you would like to explore the clinician resources, sign up and check them out!&nbsp;</p>', NULL, '6102f67eab8bd.png', NULL, NULL, NULL, '2022-08-30 09:26:19'),
(8, 'Home', 'Get In touch', NULL, NULL, '<p>If you have any questions, concerns, or feedback please reach out and let us know.</p>', NULL, '6302d18c1728a.jpg', NULL, NULL, NULL, '2022-08-30 09:24:27'),
(9, 'Delivery', 'Delivery', '&', 'Transportation', NULL, NULL, '6214e7be8d742.png', NULL, NULL, NULL, '2022-02-24 02:40:14');

-- --------------------------------------------------------

--
-- Table structure for table `credit_card_forms`
--

CREATE TABLE `credit_card_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `credit_card_checkbox_details` text COLLATE utf8mb4_unicode_ci,
  `name_on_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_four_card_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiration_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_ccv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receipt_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `your_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_status` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_status` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `package_name`, `price`, `resume_status`, `cover_status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Bronze', NULL, '1', '2', '22', '2021-08-16 20:25:09', '2021-08-16 20:25:09'),
(2, 'Bronze', NULL, '1', '2', '22', '2021-08-16 20:25:16', '2021-08-16 20:25:16'),
(3, 'Bronze', '$137', '0', '0', '22', '2021-08-16 20:26:11', '2021-08-16 20:26:11'),
(4, 'Gold', '$217', '1', '0', '22', '2021-08-16 20:27:08', '2021-08-16 20:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_layout_contents`
--

CREATE TABLE `dynamic_layout_contents` (
  `id` int(11) NOT NULL,
  `title` varchar(119) DEFAULT NULL,
  `site_name` varchar(119) DEFAULT NULL,
  `site_name_full` varchar(119) DEFAULT NULL,
  `company_provides` varchar(119) DEFAULT NULL,
  `image` varchar(119) DEFAULT NULL,
  `descriptions` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dynamic_layout_contents`
--

INSERT INTO `dynamic_layout_contents` (`id`, `title`, `site_name`, `site_name_full`, `company_provides`, `image`, `descriptions`, `created_at`, `updated_at`) VALUES
(1, 'Distinctio Qui volu', 'Abraham Norton', 'Kim Shepard', 'Odom and Mcdowell LLC', NULL, '<p>Are You SERIOUS About Your Business? - WE ARE! Remember, YOU are your business. Not only have we been helping individuals, entrepreneurs, and businesses grow for years. Business Building Resume provides you with the best resume writing service and take the hassle out of resume writing. Our expert resume writers have ample working experience in various fields which enables them to craft your resumes in a manner that highlights your strengths. We hold all our customers, be it professionals or fresh graduates in high regard. We give thorough importance to you, your experiences and your achievements so that your resume speaks about you rather than ambiguous information that leaves the reader confused. Let us create a resume for you that will highlight you professionally and place you on the top of the employer&rsquo;s mind.</p>', '2021-09-19 10:02:19', '2021-09-19 05:02:19'),
(2, 'Hello,', 'Welcome to Business', 'Building Resume.', 'Our company provides the most superior services to our clients.', '61426318c3a8c.jpg', '<p>Are You SERIOUS About Your Business? - WE ARE! Remember, YOU are your business. Not only have we been helping individuals, entrepreneurs, and businesses grow for years. Business Building Resume provides you with the best resume writing service and take the hassle out of resume writing. Our expert resume writers have ample working experience in various fields which enables them to craft your resumes in a manner that highlights your strengths. We hold all our customers, be it professionals or fresh graduates in high regard. We give thorough importance to you, your experiences and your achievements so that your resume speaks about you rather than ambiguous information that leaves the reader confused. Let us create a resume for you that will highlight you professionally and place you on the top of the employer&rsquo;s mind.</p>', '2021-09-19 10:18:16', '2021-09-19 05:18:16'),
(3, 'Hello,', 'Welcome to Business', 'Building Resume.', 'Our company provides the most superior services to our clients.', NULL, '<p>Are You SERIOUS About Your Business? - WE ARE! Remember, YOU are your business. Not only have we been helping individuals, entrepreneurs, and businesses grow for years. Business Building Resume provides you with the best resume writing service and take the hassle out of resume writing. Our expert resume writers have ample working experience in various fields which enables them to craft your resumes in a manner that highlights your strengths. We hold all our customers, be it professionals or fresh graduates in high regard. We give thorough importance to you, your experiences and your achievements so that your resume speaks about you rather than ambiguous information that leaves the reader confused. Let us create a resume for you that will highlight you professionally and place you on the top of the employer&rsquo;s mind.</p>', '2021-09-19 10:20:39', '2021-09-19 05:20:39'),
(4, 'Hello,', 'Welcome to Business', 'Building Resume.', 'Our company provides the most superior services to our clients.', '6142637f90249.jpg', '<p>Are You SERIOUS About Your Business? - WE ARE! Remember, YOU are your business. Not only have we been helping individuals, entrepreneurs, and businesses grow for years. Business Building Resume provides you with the best resume writing service and take the hassle out of resume writing. Our expert resume writers have ample working experience in various fields which enables them to craft your resumes in a manner that highlights your strengths. We hold all our customers, be it professionals or fresh graduates in high regard. We give thorough importance to you, your experiences and your achievements so that your resume speaks about you rather than ambiguous information that leaves the reader confused. Let us create a resume for you that will highlight you professionally and place you on the top of the employer&rsquo;s mind.</p>', '2021-09-19 10:19:59', '2021-09-19 05:19:59'),
(5, 'Hello,', 'Welcome to Business', 'Building Resume.', 'Our company provides the most superior services to our clients.', '614263f9ba3d9.jpeg', '<p>Are You SERIOUS About Your Business? - WE ARE! Remember, YOU are your business. Not only have we been helping individuals, entrepreneurs, and businesses grow for years. Business Building Resume provides you with the best resume writing service and take the hassle out of resume writing. Our expert resume writers have ample working experience in various fields which enables them to craft your resumes in a manner that highlights your strengths. We hold all our customers, be it professionals or fresh graduates in high regard. We give thorough importance to you, your experiences and your achievements so that your resume speaks about you rather than ambiguous information that leaves the reader confused. Let us create a resume for you that will highlight you professionally and place you on the top of the employer&rsquo;s mind.</p>', '2021-09-19 10:22:01', '2021-09-19 05:22:01');

-- --------------------------------------------------------

--
-- Table structure for table `dynamic_pages`
--

CREATE TABLE `dynamic_pages` (
  `id` int(11) NOT NULL,
  `page_name` varchar(119) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `slug` varchar(119) DEFAULT NULL,
  `title` varchar(119) DEFAULT NULL,
  `site_name` varchar(119) DEFAULT NULL,
  `site_name_full` varchar(119) DEFAULT NULL,
  `company_provides` varchar(119) DEFAULT NULL,
  `image` varchar(119) DEFAULT NULL,
  `descriptions` text,
  `status` varchar(119) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dynamic_pages`
--

INSERT INTO `dynamic_pages` (`id`, `page_name`, `type`, `slug`, `title`, `site_name`, `site_name_full`, `company_provides`, `image`, `descriptions`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Herrod Baxter', NULL, 'herrod-baxter', NULL, NULL, NULL, NULL, '6214f7925c050.png', NULL, '1', '2022-02-24 03:47:46', '2022-02-24 03:47:46'),
(4, 'Caldwell Silva', NULL, 'caldwell-silva', NULL, NULL, NULL, NULL, '6214f7aa6369a.png', NULL, '1', '2022-02-24 03:48:10', '2022-02-24 03:48:10'),
(8, 'Xaviera Whitney', 1, 'xaviera-whitney', NULL, NULL, NULL, NULL, '6214f8e597ff7.png', NULL, '1', '2022-02-24 03:53:25', '2022-05-14 11:11:21'),
(9, 'test', 1, 'test', NULL, NULL, NULL, NULL, '6214f8fcce3de.png', NULL, '1', '2022-02-24 03:53:48', '2022-02-24 03:53:48'),
(11, 'Orla Holland', 2, 'orla-holland', NULL, NULL, NULL, NULL, '621509c05695f.png', NULL, '1', '2022-02-24 05:05:20', '2022-05-14 11:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `degree` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `university` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_start` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_end` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_one_expereince` text COLLATE utf8mb4_unicode_ci,
  `institute_name` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section_id` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `degree`, `university`, `year_start`, `year_end`, `title`, `cover_one_expereince`, `institute_name`, `user_id`, `section_id`, `created_at`, `updated_at`) VALUES
(192, 'xitehocy@mailinator.com', 'zilicywyto@mailinator.com', 'tucaqyv@mailinator.com', 'Jan 2013 - jun 2015', NULL, NULL, NULL, '22', '1305', '2021-08-30 01:37:00', '2021-08-30 01:37:00'),
(193, 'kykiwazah@mailinator.com', 'romujoha@mailinator.com', 'zorylus@mailinator.com', 'Jan 2013 - jun 2015', 'kykiwazah@mailinator.com', 'Numquam ex est velit.dsds', 'romujoha@mailinator.com', '1', '1310', '2021-09-16 08:41:56', '2021-09-16 08:41:56'),
(194, 'kykiwazah@mailinator.com', 'romujoha@mailinator.com', 'zorylus@mailinator.com', 'Jan 2013 - jun 2015', 'kykiwazah@mailinator.com', 'Numquam ex est velit.dsds', 'romujoha@mailinator.com', '1', '1311', '2021-09-16 08:42:42', '2021-09-16 08:42:42'),
(195, 'kykiwazah@mailinator.com', 'romujoha@mailinator.com', 'zorylus@mailinator.com', 'Jan 2013 - jun 2015', 'kykiwazah@mailinator.com', 'Numquam ex est velit.dsds', 'romujoha@mailinator.com', '1', '1312', '2021-09-16 08:43:24', '2021-09-16 08:43:24'),
(196, 'kykiwazah@mailinator.com', 'romujoha@mailinator.com', 'zorylus@mailinator.com', 'Jan 2013 - jun 2015', 'kykiwazah@mailinator.com', 'Numquam ex est velit.dsds', 'romujoha@mailinator.com', '1', '1313', '2021-09-16 08:46:32', '2021-09-16 08:46:32'),
(201, 'Non aut fugiat aut', 'Yuli Blankenship', '2019', '1985', 'Non aut fugiat aut', 'Voluptatibus sit pla.ds', 'Yuli Blankenship', '2', '1335', '2021-09-19 00:36:29', '2021-09-19 00:36:29'),
(202, 'vidicib@mailinator.com', 'pukaxex@mailinator.com', 'muluhu@mailinator.com', 'dipakaf@mailinator.com', 'vidicib@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'pukaxex@mailinator.com', '2', '1336', '2021-09-19 00:38:58', '2021-09-19 00:38:58'),
(203, 'bojusa@mailinator.com', 'detoxaxyva@mailinator.com', 'fuzowuhyda@mailinator.com', 'jimiziza@mailinator.com', 'bojusa@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'detoxaxyva@mailinator.com', '2', '1336', '2021-09-19 00:38:58', '2021-09-19 00:38:58'),
(204, 'vidicib@mailinator.com', 'pukaxex@mailinator.com', 'muluhu@mailinator.com', 'dipakaf@mailinator.com', 'vidicib@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'pukaxex@mailinator.com', '2', '1337', '2021-09-19 00:39:03', '2021-09-19 00:39:03'),
(205, 'bojusa@mailinator.com', 'detoxaxyva@mailinator.com', 'fuzowuhyda@mailinator.com', 'jimiziza@mailinator.com', 'bojusa@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'detoxaxyva@mailinator.com', '2', '1337', '2021-09-19 00:39:03', '2021-09-19 00:39:03'),
(206, 'vidicib@mailinator.com', 'pukaxex@mailinator.com', 'muluhu@mailinator.com', 'dipakaf@mailinator.com', 'vidicib@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'pukaxex@mailinator.com', '2', '1338', '2021-09-19 00:40:26', '2021-09-19 00:40:26'),
(207, 'bojusa@mailinator.com', 'detoxaxyva@mailinator.com', 'fuzowuhyda@mailinator.com', 'jimiziza@mailinator.com', 'bojusa@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'detoxaxyva@mailinator.com', '2', '1338', '2021-09-19 00:40:26', '2021-09-19 00:40:26'),
(208, 'vidicib@mailinator.com', 'pukaxex@mailinator.com', 'muluhu@mailinator.com', 'dipakaf@mailinator.com', 'vidicib@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'pukaxex@mailinator.com', '2', '1339', '2021-09-19 00:40:41', '2021-09-19 00:40:41'),
(209, 'bojusa@mailinator.com', 'detoxaxyva@mailinator.com', 'fuzowuhyda@mailinator.com', 'jimiziza@mailinator.com', 'bojusa@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'detoxaxyva@mailinator.com', '2', '1339', '2021-09-19 00:40:41', '2021-09-19 00:40:41'),
(210, 'vidicib@mailinator.com', 'pukaxex@mailinator.com', 'muluhu@mailinator.com', 'dipakaf@mailinator.com', 'vidicib@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'pukaxex@mailinator.com', '2', '1340', '2021-09-19 00:41:01', '2021-09-19 00:41:01'),
(211, 'bojusa@mailinator.com', 'detoxaxyva@mailinator.com', 'fuzowuhyda@mailinator.com', 'jimiziza@mailinator.com', 'bojusa@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'detoxaxyva@mailinator.com', '2', '1340', '2021-09-19 00:41:01', '2021-09-19 00:41:01'),
(212, 'vidicib@mailinator.com', 'pukaxex@mailinator.com', 'muluhu@mailinator.com', 'dipakaf@mailinator.com', 'vidicib@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'pukaxex@mailinator.com', '2', '1341', '2021-09-19 00:41:19', '2021-09-19 00:41:19'),
(213, 'bojusa@mailinator.com', 'detoxaxyva@mailinator.com', 'fuzowuhyda@mailinator.com', 'jimiziza@mailinator.com', 'bojusa@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'detoxaxyva@mailinator.com', '2', '1341', '2021-09-19 00:41:19', '2021-09-19 00:41:19'),
(214, 'vidicib@mailinator.com', 'pukaxex@mailinator.com', 'muluhu@mailinator.com', 'dipakaf@mailinator.com', 'vidicib@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'pukaxex@mailinator.com', '2', '1342', '2021-09-19 00:41:36', '2021-09-19 00:41:36'),
(215, 'bojusa@mailinator.com', 'detoxaxyva@mailinator.com', 'fuzowuhyda@mailinator.com', 'jimiziza@mailinator.com', 'bojusa@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'detoxaxyva@mailinator.com', '2', '1342', '2021-09-19 00:41:36', '2021-09-19 00:41:36'),
(218, 'vidicib@mailinator.com', 'pukaxex@mailinator.com', 'muluhu@mailinator.com', 'dipakaf@mailinator.com', 'vidicib@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'pukaxex@mailinator.com', '2', '1343', '2021-09-19 01:09:29', '2021-09-19 01:09:29'),
(219, 'bojusa@mailinator.com', 'detoxaxyva@mailinator.com', 'fuzowuhyda@mailinator.com', 'jimiziza@mailinator.com', 'bojusa@mailinator.com', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'detoxaxyva@mailinator.com', '2', '1343', '2021-09-19 01:09:29', '2021-09-19 01:09:29'),
(220, 'Intermediate', 'Rowan High School', '2019', '2021', 'Intermediate', '<p>High School Student.</p>', 'Rowan High School', '22', '1355', '2021-10-14 18:02:36', '2021-10-14 18:02:36'),
(221, 'BSCS', 'Iqra University Of Science', '2021', 'Present', 'BSCS', 'Doing Bachelors in Computer Science.', 'Iqra University Of Science', '22', '1355', '2021-10-14 18:02:36', '2021-10-14 18:02:36'),
(222, 'Intermediate', 'Rowan High School', '2019', '2021', 'Intermediate', '<p>High School Student.</p>', 'Rowan High School', '22', '1356', '2021-10-14 18:02:57', '2021-10-14 18:02:57'),
(223, 'BSCS', 'Iqra University Of Science', '2021', 'Present', 'BSCS', 'Doing Bachelors in Computer Science.', 'Iqra University Of Science', '22', '1356', '2021-10-14 18:02:57', '2021-10-14 18:02:57'),
(232, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013 - jun 2015', 'Jan 2013 - jun 2015', 'MASTER DESIGN WEB', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'College In Lorem Ipsum - Rajsahi', '27', '1363', '2021-10-24 06:13:29', '2021-10-24 06:13:29'),
(233, '', '', '', '', '', '<span style=\"color: rgba(33, 37, 41, 0.62); font-size: 13px;\">porttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span>', '', '27', '1363', '2021-10-24 06:13:29', '2021-10-24 06:13:29'),
(234, '', '', '', '', '', '<span style=\"color: rgba(33, 37, 41, 0.62); font-size: 13px;\">porttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span>', '', '27', '1363', '2021-10-24 06:13:29', '2021-10-24 06:13:29'),
(239, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013 - jun 2015', 'Jan 2013 - jun 2015', 'MASTER DESIGN WEB', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'College In Lorem Ipsum - Rajsahi', '27', '1362', '2021-10-24 06:34:43', '2021-10-24 06:34:43'),
(240, '', '', '', '', '', '<span style=\"color: rgba(33, 37, 41, 0.62); font-size: 13px;\">porttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span>', '', '27', '1362', '2021-10-24 06:34:43', '2021-10-24 06:34:43'),
(241, '', '', '', '', '', '<span style=\"color: rgba(33, 37, 41, 0.62); font-size: 13px;\">porttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span>', '', '27', '1362', '2021-10-24 06:34:43', '2021-10-24 06:34:43'),
(242, 'Hamdard high school', 'High School Diploma', '2012', '2014', 'Hamdard high school', '', 'High School Diploma', '26', '1366', '2021-10-24 06:39:28', '2021-10-24 06:39:28'),
(243, 'bachelors', 'anhui xinhua university', '2018', '2019', 'bachelors', '', 'anhui xinhua university', '26', '1366', '2021-10-24 06:39:28', '2021-10-24 06:39:28'),
(244, 'Hamdard high school', 'High School Diploma', '2012', '2014', 'Hamdard high school', '', 'High School Diploma', '26', '1367', '2021-10-24 06:43:41', '2021-10-24 06:43:41'),
(245, 'bachelors', 'anhui xinhua university', '2018', '2019', 'bachelors', '', 'anhui xinhua university', '26', '1367', '2021-10-24 06:43:41', '2021-10-24 06:43:41'),
(246, 'Hamdard high school', 'High School Diploma', '2012', '2014', 'Hamdard high school', '', 'High School Diploma', '26', '1368', '2021-10-24 06:44:43', '2021-10-24 06:44:43'),
(247, 'bachelors', 'anhui xinhua university', '2018', '2019', 'bachelors', '', 'anhui xinhua university', '26', '1368', '2021-10-24 06:44:43', '2021-10-24 06:44:43'),
(248, 'new city school', 'High School Diploma', '321', '123', 'new city school', '', 'High School Diploma', '27', '1376', '2021-10-24 07:37:42', '2021-10-24 07:37:42'),
(249, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013 - jun 2015', 'Jan 2013 - jun 2015', 'MASTER DESIGN WEB', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'College In Lorem Ipsum - Rajsahi', '27', '1360', '2021-10-24 07:39:04', '2021-10-24 07:39:04'),
(250, '', '', '', '', '', '<span style=\"color: rgba(33, 37, 41, 0.62); font-size: 13px;\">porttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span>', '', '27', '1360', '2021-10-24 07:39:04', '2021-10-24 07:39:04'),
(251, '', '', '', '', '', '<span style=\"color: rgba(33, 37, 41, 0.62); font-size: 13px;\">porttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span>', '', '27', '1360', '2021-10-24 07:39:04', '2021-10-24 07:39:04'),
(252, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013 - jun 2015', 'Jan 2013 - jun 2015', 'MASTER DESIGN WEB', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'College In Lorem Ipsum - Rajsahi', '27', '1377', '2021-10-24 07:44:54', '2021-10-24 07:44:54'),
(253, '', '', '', '', '', '<span style=\"color: rgba(33, 37, 41, 0.62); font-size: 13px;\">porttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span>', '', '27', '1377', '2021-10-24 07:44:54', '2021-10-24 07:44:54'),
(254, '', '', '', '', '', '<span style=\"color: rgba(33, 37, 41, 0.62); font-size: 13px;\">porttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span>', '', '27', '1377', '2021-10-24 07:44:54', '2021-10-24 07:44:54'),
(255, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013 - jun 2015', 'Jan 2013 - jun 2015', 'MASTER DESIGN WEB', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'College In Lorem Ipsum - Rajsahi', '22', '1378', '2021-10-24 07:56:01', '2021-10-24 07:56:01'),
(256, 'Student', 'College In Lorem Ipsum - Rajsahi', 'jan 2012 - jan 2013', '', 'Student', '<p><span style=\"caret-color: rgba(33, 37, 41, 0.62); color: rgba(33, 37, 41, 0.62); font-size: 13px;\">Porttitor amet massa Done cporttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span></p><p><span style=\"color: rgba(33, 37, 41, 0.62); font-weight: 500;\">Porttitor amet massa Done cporttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span></p><p><span style=\"color: rgba(33, 37, 41, 0.62); font-weight: 500;\">Porttitor amet massa Done cporttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span><span style=\"color: rgba(33, 37, 41, 0.62); font-weight: 500;\"><br></span><span style=\"caret-color: rgba(33, 37, 41, 0.62); color: rgba(33, 37, 41, 0.62); font-size: 13px;\"><br></span>                    </p>', 'College In Lorem Ipsum - Rajsahi', '22', '1378', '2021-10-24 07:56:01', '2021-10-24 07:56:01'),
(257, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013 - jun 2015', 'Jan 2013 - jun 2015', 'MASTER DESIGN WEB', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'College In Lorem Ipsum - Rajsahi', '22', '1379', '2021-10-24 07:58:10', '2021-10-24 07:58:10'),
(258, 'Student', 'College In Lorem Ipsum - Rajsahi', 'jan 2012 - jan 2013', '', 'Student', '<p><span style=\"caret-color: rgba(33, 37, 41, 0.62); color: rgba(33, 37, 41, 0.62); font-size: 13px;\">Porttitor amet massa Done cporttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span></p><p><span style=\"color: rgba(33, 37, 41, 0.62); font-weight: 500;\">Porttitor amet massa Done cporttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span></p><p><span style=\"color: rgba(33, 37, 41, 0.62); font-weight: 500;\">Porttitor amet massa Done cporttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</span><span style=\"color: rgba(33, 37, 41, 0.62); font-weight: 500;\"><br></span><span style=\"caret-color: rgba(33, 37, 41, 0.62); color: rgba(33, 37, 41, 0.62); font-size: 13px;\"><br></span>                    </p>', 'College In Lorem Ipsum - Rajsahi', '22', '1379', '2021-10-24 07:58:10', '2021-10-24 07:58:10'),
(259, 'Carnegie Mellon University', 'Bachelors in Computer Science', '321', '123', 'Carnegie Mellon University', '', 'Bachelors in Computer Science', '30', '1392', '2021-10-31 04:04:19', '2021-10-31 04:04:19'),
(260, 'Carnegie Mellon University', 'Bachelors in Computer Science', '321', '123', 'Carnegie Mellon University', '', 'Bachelors in Computer Science', '30', '1393', '2021-10-31 04:04:23', '2021-10-31 04:04:23'),
(261, 'Carnegie Mellon University', 'Bachelors in Computer Science', '321', '123', 'Carnegie Mellon University', '', 'Bachelors in Computer Science', '30', '1394', '2021-10-31 04:10:33', '2021-10-31 04:10:33'),
(262, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<ul><li>with bullet</li></ul><p>without</p>', 'Boston University', '34', '1408', '2021-11-29 04:40:08', '2021-11-29 04:40:08'),
(263, 'Arts', 'Bellevue University, Bellevue, NE', '1567', '1567', 'Arts', '<ul><li>bullet in white txt why</li></ul><p>not white</p>', 'Bellevue University, Bellevue, NE', '34', '1408', '2021-11-29 04:40:08', '2021-11-29 04:40:08'),
(264, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<ul><li>with bullet</li></ul><p>without</p>', 'Boston University', '34', '1409', '2021-11-29 04:47:49', '2021-11-29 04:47:49'),
(265, 'Arts', 'Bellevue University, Bellevue, NE', '1567', '1567', 'Arts', '<ul><li>bullet in white txt why</li></ul><p>not white</p>', 'Bellevue University, Bellevue, NE', '34', '1409', '2021-11-29 04:47:49', '2021-11-29 04:47:49'),
(266, '', '', '', '', '', '<ul><li>abcd</li><li>abc</li></ul>', '', '13', '1413', '2021-11-29 08:14:02', '2021-11-29 08:14:02'),
(267, 'tydodif@mailinator.com', 'lokul@mailinator.com', 'xino@mailinator.com', 'waxuwiso@mailinator.com', 'tydodif@mailinator.com', '<ol><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></li></ol><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><br></span></p><ul><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><br></span></li></ul>', 'lokul@mailinator.com', '13', '1414', '2021-12-01 16:30:52', '2021-12-01 16:30:52'),
(268, 'tydodif@mailinator.com', 'lokul@mailinator.com', 'xino@mailinator.com', 'waxuwiso@mailinator.com', 'tydodif@mailinator.com', '<ol><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></li></ol><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><br></span></p><ul><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><br></span></li></ul>', 'lokul@mailinator.com', '13', '1415', '2021-12-01 16:31:47', '2021-12-01 16:31:47'),
(269, 'tydodif@mailinator.com', 'lokul@mailinator.com', 'xino@mailinator.com', 'waxuwiso@mailinator.com', 'tydodif@mailinator.com', '<ol><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></li></ol><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><br></span></p><ul><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><br></span></li></ul>', 'lokul@mailinator.com', '13', '1416', '2021-12-01 16:46:50', '2021-12-01 16:46:50'),
(270, 'tydodif@mailinator.com', 'lokul@mailinator.com', 'xino@mailinator.com', 'waxuwiso@mailinator.com', 'tydodif@mailinator.com', '<ol><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></li></ol><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><br></span></p><ul><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><br></span></li></ul>', 'lokul@mailinator.com', '13', '1417', '2021-12-01 16:48:00', '2021-12-01 16:48:00'),
(271, 'tydodif@mailinator.com', 'lokul@mailinator.com', 'xino@mailinator.com', 'waxuwiso@mailinator.com', 'tydodif@mailinator.com', '<ol><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span></li></ol><p><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><br></span></p><ul><li><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</span><span style=\"color: rgb(77, 81, 86); font-family: arial, sans-serif; font-size: 14px; background-color: rgb(255, 255, 255);\"><br></span></li></ul>', 'lokul@mailinator.com', '13', '1418', '2021-12-01 16:54:24', '2021-12-01 16:54:24'),
(272, 'tydodif@mailinator.com', 'lokul@mailinator.com', 'xino@mailinator.com', 'waxuwiso@mailinator.com', 'tydodif@mailinator.com', '', 'lokul@mailinator.com', '13', '1419', '2021-12-01 16:57:02', '2021-12-01 16:57:02'),
(273, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ 2006', 'High School Diploma', '321', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ 2006', '', 'High School Diploma', '13', '1419', '2021-12-01 16:57:02', '2021-12-01 16:57:02'),
(274, 'tydodif@mailinator.com', 'lokul@mailinator.com', 'xino@mailinator.com', 'waxuwiso@mailinator.com', 'tydodif@mailinator.com', '', 'lokul@mailinator.com', '13', '1420', '2021-12-01 16:58:57', '2021-12-01 16:58:57'),
(275, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ 2006', 'High School Diploma', '321', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ 2006', '', 'High School Diploma', '13', '1420', '2021-12-01 16:58:57', '2021-12-01 16:58:57'),
(276, 'tydodif@mailinator.com', 'lokul@mailinator.com', 'xino@mailinator.com', 'waxuwiso@mailinator.com', 'tydodif@mailinator.com', '', 'lokul@mailinator.com', '13', '1421', '2021-12-01 17:00:08', '2021-12-01 17:00:08'),
(277, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ 2006', 'High School Diploma', '321', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ 2006', '', 'High School Diploma', '13', '1421', '2021-12-01 17:00:08', '2021-12-01 17:00:08'),
(278, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<ol><li>ascasvas ascqv&nbsp; FFawega<u>gaega we w</u><i style=\"text-decoration-line: underline;\">a w&nbsp; v</i><b style=\"\"><i style=\"text-decoration-line: underline;\">ev&nbsp; wae v awe&nbsp; ba eb er</i><u>ae</u>a&nbsp;&nbsp;</b>b ae&nbsp; wb ebawe&nbsp; bawe&nbsp;</li><li>vaweb</li><li>ae</li><li>rbaerb</li><li>earsbae baerbaerbv ae&nbsp;<span style=\"font-size: 36px;\">aer varv&nbsp; eraervaer</span></li><li><span style=\"font-size: 36px;\">va</span></li><li><span style=\"font-size: 36px;\">ervaerv aerv ae rvae rvve</span></li></ol>', 'Boston University', '14', '1422', '2021-12-01 17:51:46', '2021-12-01 17:51:46'),
(279, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<ol><li>ascasvas ascqv&nbsp; FFawega<u>gaega we w</u><i style=\"text-decoration-line: underline;\">a w&nbsp; v</i><b style=\"\"><i style=\"text-decoration-line: underline;\">ev&nbsp; wae v awe&nbsp; ba eb er</i><u>ae</u>a&nbsp;&nbsp;</b>b ae&nbsp; wb ebawe&nbsp; bawe&nbsp;</li><li>vaweb</li><li>ae</li><li>rbaerb</li><li>earsbae baerbaerbv ae&nbsp;<span style=\"font-size: 36px;\">aer varv&nbsp; eraervaer</span></li><li><span style=\"font-size: 36px;\">va</span></li><li><span style=\"font-size: 36px;\">ervaerv aerv ae rvae rvve</span></li></ol>', 'Boston University', '14', '1423', '2021-12-01 17:54:19', '2021-12-01 17:54:19'),
(280, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<ol><li>ascasvas ascqv&nbsp; FFawega<u>gaega we w</u><i style=\"text-decoration-line: underline;\">a w&nbsp; v</i><b style=\"\"><i style=\"text-decoration-line: underline;\">ev&nbsp; wae v awe&nbsp; ba eb er</i><u>ae</u>a&nbsp;&nbsp;</b>b ae&nbsp; wb ebawe&nbsp; bawe&nbsp;</li><li>vaweb</li><li>ae</li><li>rbaerb</li><li>earsbae baerbaerbv ae&nbsp;<span style=\"font-size: 36px;\">aer varv&nbsp; eraervaer</span></li><li><span style=\"font-size: 36px;\">va</span></li><li><span style=\"font-size: 36px;\">ervaerv aerv ae rvae rvve</span></li></ol>', 'Boston University', '14', '1439', '2021-12-01 21:53:03', '2021-12-01 21:53:03'),
(281, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<ol><li>ascasvas ascqv&nbsp; FFawega<u>gaega we w</u><i style=\"text-decoration-line: underline;\">a w&nbsp; v</i><b style=\"\"><i style=\"text-decoration-line: underline;\">ev&nbsp; wae v awe&nbsp; ba eb er</i><u>ae</u>a&nbsp;&nbsp;</b>b ae&nbsp; wb ebawe&nbsp; bawe&nbsp;</li><li>vaweb</li><li>ae</li><li>rbaerb</li><li>earsbae baerbaerbv ae&nbsp;<span style=\"font-size: 36px;\">aer varv&nbsp; eraervaer</span></li><li><span style=\"font-size: 36px;\">va</span></li><li><span style=\"font-size: 36px;\">ervaerv aerv ae rvae rvve</span></li></ol>', 'Boston University', '14', '1440', '2021-12-01 22:00:07', '2021-12-01 22:00:07'),
(282, 'tuiy', 'Bellevue University, Bellevue, NE', 'jan 2011-dec 2015', '', 'tuiy', 'yiuoju', 'Bellevue University, Bellevue, NE', '36', '1444', '2021-12-02 03:34:17', '2021-12-02 03:34:17'),
(283, 'web', 'College', '56', '', 'web', '<p>tyuiyy</p><p>yuuyt</p><p><br></p>', 'College', '36', '1444', '2021-12-02 03:34:17', '2021-12-02 03:34:17'),
(284, 'rust 2019', '', '', '', 'rust 2019', 'yiuy', '', '36', '1444', '2021-12-02 03:34:17', '2021-12-02 03:34:17'),
(285, 'work', 'Bellevue University, Bellevue, NE', 'jan 2011-dec 2015', '', 'work', 'uiuytr', 'Bellevue University, Bellevue, NE', '36', '1444', '2021-12-02 03:34:17', '2021-12-02 03:34:17'),
(286, 'tuiy', 'Bellevue University, Bellevue, NE', 'jan 2011-dec 2015', '', 'tuiy', 'yiuoju', 'Bellevue University, Bellevue, NE', '36', '1445', '2021-12-02 03:36:53', '2021-12-02 03:36:53'),
(287, 'web', 'College', '56', '', 'web', '<p>tyuiyy</p><p>yuuyt</p><p><br></p>', 'College', '36', '1445', '2021-12-02 03:36:53', '2021-12-02 03:36:53'),
(288, 'rust 2019', '', '', '', 'rust 2019', 'yiuy', '', '36', '1445', '2021-12-02 03:36:53', '2021-12-02 03:36:53'),
(289, 'work', 'Bellevue University, Bellevue, NE', 'jan 2011-dec 2015', '', 'work', 'uiuytr', 'Bellevue University, Bellevue, NE', '36', '1445', '2021-12-02 03:36:53', '2021-12-02 03:36:53'),
(290, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</p>', 'Boston University', '13', '1446', '2021-12-03 01:41:38', '2021-12-03 01:41:38'),
(291, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<p>asdnasd</p><p>sadjansd</p><p>asd</p><p>asasdansd<b>asd</b></p><p><b>asd</b></p><p><b>asdasda</b></p><p><b>sdasdasdasd</b></p><p><b>as</b></p><p><b>dasda</b></p><p><b>sdasd<u>aasdas</u></b></p><p><b><u>dasdjasndas</u></b></p><p><b><u>dasdnasda</u></b></p><p><b><u>s<i>asd</i></u></b></p><p><b><u><i>a</i></u></b></p><ul><li><b><u><i>sdasdaasdasdnasd</i></u></b></li><li><b><u><i>asdmasdn</i></u></b></li><li><b><u><i><br></i></u></b></li></ul>', 'Boston University', '38', '1456', '2021-12-08 04:58:26', '2021-12-08 04:58:26'),
(292, 'Bachelors Of Arts', 'College Of Design Arts', '2005', '2003', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '38', '1456', '2021-12-08 04:58:26', '2021-12-08 04:58:26'),
(293, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<p>asdnasd</p><p>sadjansd</p><p>asd</p><p>asasdansd<b>asd</b></p><p><b>asd</b></p><p><b>asdasda</b></p><p><b>sdasdasdasd</b></p><p><b>as</b></p><p><b>dasda</b></p><p><b>sdasd<u>aasdas</u></b></p><p><b><u>dasdjasndas</u></b></p><p><b><u>dasdnasda</u></b></p><p><b><u>s<i>asd</i></u></b></p><p><b><u><i>a</i></u></b></p><ul><li><b><u><i>sdasdaasdasdnasd</i></u></b></li><li><b><u><i>asdmasdn</i></u></b></li><li><b><u><i><br></i></u></b></li></ul>', 'Boston University', '38', '1457', '2021-12-08 05:04:11', '2021-12-08 05:04:11'),
(294, 'Bachelors Of Arts', 'College Of Design Arts', '2005', '2003', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '38', '1457', '2021-12-08 05:04:11', '2021-12-08 05:04:11'),
(295, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<p>asdnasd</p><p>sadjansd</p><p>asd</p><p>asasdansd<b>asd</b></p><p><b>asd</b></p><p><b>asdasda</b></p><p><b>sdasdasdasd</b></p><p><b>as</b></p><p><b>dasda</b></p><p><b>sdasd<u>aasdas</u></b></p><p><b><u>dasdjasndas</u></b></p><p><b><u>dasdnasda</u></b></p><p><b><u>s<i>asd</i></u></b></p><p><b><u><i>a</i></u></b></p><ul><li><b><u><i>sdasdaasdasdnasd</i></u></b></li><li><b><u><i>asdmasdn</i></u></b></li><li><b><u><i><br></i></u></b></li></ul>', 'Boston University', '38', '1458', '2021-12-08 05:06:41', '2021-12-08 05:06:41'),
(296, 'Bachelors Of Arts', 'College Of Design Arts', '2005', '2003', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '38', '1458', '2021-12-08 05:06:41', '2021-12-08 05:06:41'),
(297, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<p>asdnasd</p><p>sadjansd</p><p>asd</p><p>asasdansd<b>asd</b></p><p><b>asd</b></p><p><b>asdasda</b></p><p><b>sdasdasdasd</b></p><p><b>as</b></p><p><b>dasda</b></p><p><b>sdasd<u>aasdas</u></b></p><p><b><u>dasdjasndas</u></b></p><p><b><u>dasdnasda</u></b></p><p><b><u>s<i>asd</i></u></b></p><p><b><u><i>a</i></u></b></p><ul><li><b><u><i>sdasdaasdasdnasd</i></u></b></li><li><b><u><i>asdmasdn</i></u></b></li><li><b><u><i><br></i></u></b></li></ul>', 'Boston University', '38', '1459', '2021-12-08 05:08:25', '2021-12-08 05:08:25'),
(298, 'Bachelors Of Arts', 'College Of Design Arts', '2005', '2003', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '38', '1459', '2021-12-08 05:08:25', '2021-12-08 05:08:25'),
(299, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<p>asdnasd</p><p>sadjansd</p><p>asd</p><p>asasdansd<b>asd</b></p><p><b>asd</b></p><p><b>asdasda</b></p><p><b>sdasdasdasd</b></p><p><b>as</b></p><p><b>dasda</b></p><p><b>sdasd<u>aasdas</u></b></p><p><b><u>dasdjasndas</u></b></p><p><b><u>dasdnasda</u></b></p><p><b><u>s<i>asd</i></u></b></p><p><b><u><i>a</i></u></b></p><ul><li><b><u><i>sdasdaasdasdnasd</i></u></b></li><li><b><u><i>asdmasdn</i></u></b></li><li><b><u><i><br></i></u></b></li></ul>', 'Boston University', '38', '1460', '2021-12-08 05:11:01', '2021-12-08 05:11:01'),
(300, 'Bachelors Of Arts', 'College Of Design Arts', '2005', '2003', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '38', '1460', '2021-12-08 05:11:01', '2021-12-08 05:11:01'),
(301, 'Master Communations', 'Boston University', '2009', '2005', 'Master Communations', '<p>asdnasd</p><p>sadjansd</p><p>asd</p><p>asasdansd<b>asd</b></p><p><b>asd</b></p><p><b>asdasda</b></p><p><b>sdasdasdasd</b></p><p><b>as</b></p><p><b>dasda</b></p><p><b>sdasd<u>aasdas</u></b></p><p><b><u>dasdjasndas</u></b></p><p><b><u>dasdnasda</u></b></p><p><b><u>s<i>asd</i></u></b></p><p><b><u><i>a</i></u></b></p><ul><li><b><u><i>sdasdaasdasdnasd</i></u></b></li><li><b><u><i>asdmasdn</i></u></b></li><li><b><u><i><br></i></u></b></li></ul>', 'Boston University', '38', '1461', '2021-12-08 05:19:49', '2021-12-08 05:19:49'),
(302, 'Bachelors Of Arts', 'College Of Design Arts', '2005', '2003', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '38', '1461', '2021-12-08 05:19:49', '2021-12-08 05:19:49'),
(303, 'nuasnd jncas', 'onajnd sadbjas d', '1773', '1231', 'nuasnd jncas', 'xyz', 'onajnd sadbjas d', '38', '1462', '2021-12-08 05:25:41', '2021-12-08 05:25:41'),
(304, 'nuasnd jncas', 'onajnd sadbjas d', '1773', '1231', 'nuasnd jncas', 'xyz', 'onajnd sadbjas d', '38', '1463', '2021-12-08 05:26:45', '2021-12-08 05:26:45'),
(305, '', 'onajnd sadbjas d', '1773', '1231', '', 'xyz ft tdc tse jkguid ydr5ts tyc', 'onajnd sadbjas d', '38', '1464', '2021-12-08 05:36:49', '2021-12-08 05:36:49'),
(306, 'dfg', 'tyu yii', '1234-1234', 'Jan 2013 - jun 2015', 'dfg', '<p>ryuui yiouoi uopioi uoiupo&nbsp;</p>', 'tyu yii', '38', '1465', '2021-12-09 01:15:20', '2021-12-09 01:15:20'),
(307, 'dfg', 'tyu yii', '467898', '798098', 'dfg', 'xyz', 'tyu yii', '38', '1466', '2021-12-09 01:32:47', '2021-12-09 01:32:47'),
(308, 'dfg', 'tyu yii', '467898', '798098', 'dfg', 'xyz', 'tyu yii', '38', '1467', '2021-12-09 01:37:22', '2021-12-09 01:37:22'),
(309, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', 'asd asd asd asd asc', '2022', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', '', 'asd asd asd asd asc', '50', '1475', '2021-12-11 20:14:38', '2021-12-11 20:14:38'),
(310, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', 'asd asd asd asd asc', '2022', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', '', 'asd asd asd asd asc', '50', '1476', '2021-12-11 21:08:49', '2021-12-11 21:08:49'),
(311, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', 'asd asd asd asd asc', '2022', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', '', 'asd asd asd asd asc', '50', '1477', '2021-12-11 21:09:44', '2021-12-11 21:09:44'),
(312, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', 'asd asd asd asd asc', '2022', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', '', 'asd asd asd asd asc', '50', '1478', '2021-12-11 21:10:24', '2021-12-11 21:10:24'),
(313, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', 'asd asd asd asd asc', '2022', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', '', 'asd asd asd asd asc', '50', '1479', '2021-12-11 21:11:21', '2021-12-11 21:11:21'),
(314, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', 'asd asd asd asd asc', '2022', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', '', 'asd asd asd asd asc', '50', '1480', '2021-12-11 21:13:41', '2021-12-11 21:13:41'),
(315, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', 'asd asd asd asd asc', '2022', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', '', 'asd asd asd asd asc', '50', '1482', '2021-12-11 21:19:31', '2021-12-11 21:19:31'),
(316, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', 'asd asd asd asd asc', '2022', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', '', 'asd asd asd asd asc', '50', '1483', '2021-12-11 21:21:07', '2021-12-11 21:21:07'),
(317, 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', 'asd asd asd asd asc', '2022', '123', 'ST. PETERÃ¢â‚¬â„¢S PUBLIC , Baltimore, MD Ã¢â‚¬â€œ', '', 'asd asd asd asd asc', '50', '1487', '2021-12-11 21:59:09', '2021-12-11 21:59:09'),
(318, '', 'Boston University', '', '', '', '<ol><li>Porttitor amet massa Done cporttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</li></ol>', 'Boston University', '54', '1509', '2021-12-15 20:15:16', '2021-12-15 20:15:16'),
(319, '', 'Boston University', '', '', '', '<ul><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n\r\n                                                scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'Boston University', '54', '1509', '2021-12-15 20:15:16', '2021-12-15 20:15:16'),
(320, '', 'Boston University', '', '', '', '<ol><li>Porttitor amet massa Done cporttitor dolor et molestie pretium scon lore imolestie pretium. liberosn ollicitudin est</li></ol>', 'Boston University', '54', '1510', '2021-12-15 20:19:53', '2021-12-15 20:19:53'),
(321, '', 'Boston University', '', '', '', '<ul><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n\r\n                                                scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'Boston University', '54', '1510', '2021-12-15 20:19:53', '2021-12-15 20:19:53'),
(322, 'Master Communations', 'Boston University', '2005', '2009', 'Master Communations', '<ol><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore im</li></ol><p>olestie pretium. liberosn ollicitudin est</p>', 'Boston University', '55', '1511', '2021-12-15 21:53:12', '2021-12-15 21:53:12'),
(323, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<ol><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</li></ol>', 'College Of Design Arts', '55', '1511', '2021-12-15 21:53:12', '2021-12-15 21:53:12'),
(324, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013', 'jun 2015', 'MASTER DESIGN WEB', '<ul><li>Porttitor amet massa Do</li><li>ne cporttitor dolor et molestie pretium\r\n\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'College In Lorem Ipsum - Rajsahi', '57', '1514', '2021-12-16 15:46:52', '2021-12-16 15:46:52'),
(325, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013', 'jun 2015', 'MASTER DESIGN WEB', '<ul><li>Porttitor amet massa Do</li><li>ne cporttitor dolor et molestie pretium\r\n\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'College In Lorem Ipsum - Rajsahi', '57', '1515', '2021-12-16 15:58:41', '2021-12-16 15:58:41'),
(326, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013', 'jun 2015', 'MASTER DESIGN WEB', '<ul><li>Porttitor amet massa Do</li><li>ne cporttitor dolor et molestie pretium\r\n\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'College In Lorem Ipsum - Rajsahi', '57', '1518', '2021-12-16 16:30:30', '2021-12-16 16:30:30'),
(327, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013', 'jun 2015', 'MASTER DESIGN WEB', '<ul><li>Porttitor amet massa Do</li><li>ne cporttitor dolor et molestie pretium\r\n\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'College In Lorem Ipsum - Rajsahi', '57', '1520', '2021-12-16 16:32:00', '2021-12-16 16:32:00'),
(328, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013', 'jun 2015', 'MASTER DESIGN WEB', '<ul><li>Porttitor amet massa Do</li><li>ne cporttitor dolor et molestie pretium\r\n\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'College In Lorem Ipsum - Rajsahi', '57', '1523', '2021-12-16 16:33:29', '2021-12-16 16:33:29'),
(329, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013', 'jun 2015', 'MASTER DESIGN WEB', '<ul><li>Porttitor amet massa Do</li><li>ne cporttitor dolor et molestie pretium\r\n\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'College In Lorem Ipsum - Rajsahi', '57', '1526', '2021-12-16 16:35:51', '2021-12-16 16:35:51'),
(330, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013', 'jun 2015', 'MASTER DESIGN WEB', '<ul><li>Porttitor amet massa Do</li><li>ne cporttitor dolor et molestie pretium\r\n\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'College In Lorem Ipsum - Rajsahi', '57', '1528', '2021-12-16 16:37:26', '2021-12-16 16:37:26'),
(331, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013', 'jun 2015', 'MASTER DESIGN WEB', '<ul><li>Porttitor amet massa Do</li><li>ne cporttitor dolor et molestie pretium\r\n\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'College In Lorem Ipsum - Rajsahi', '57', '1529', '2021-12-16 16:39:12', '2021-12-16 16:39:12'),
(332, 'MASTER DESIGN WEB', 'College In Lorem Ipsum - Rajsahi', 'Jan 2013', 'jun 2015', 'MASTER DESIGN WEB', '<ul><li>Porttitor amet massa Do</li><li>ne cporttitor dolor et molestie pretium\r\n\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'College In Lorem Ipsum - Rajsahi', '57', '1530', '2021-12-16 16:39:40', '2021-12-16 16:39:40'),
(333, 'Master Communations', 'Boston University', '2005', '2009', 'Master Communations', '<ul><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'Boston University', '62', '1567', '2021-12-16 21:30:59', '2021-12-16 21:30:59'),
(334, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '62', '1567', '2021-12-16 21:30:59', '2021-12-16 21:30:59'),
(335, 'Master Communations', 'Boston University', '2005', '2009', 'Master Communations', '<ul><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'Boston University', '62', '1568', '2021-12-16 21:33:30', '2021-12-16 21:33:30'),
(336, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '62', '1568', '2021-12-16 21:33:30', '2021-12-16 21:33:30'),
(337, '', '', '', '', '', '<ul><li>one cporttitor dolor et molestie pretium felis con lore imolestie pretium.&nbsp;\r\n                    </li></ul>', '', '62', '1568', '2021-12-16 21:33:30', '2021-12-16 21:33:30'),
(338, 'Master Communations', 'Boston University', '2005', '2009', 'Master Communations', '<ul><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'Boston University', '62', '1569', '2021-12-16 21:40:35', '2021-12-16 21:40:35'),
(339, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '62', '1569', '2021-12-16 21:40:35', '2021-12-16 21:40:35'),
(340, '', '', '', '', '', '<ul><li>one cporttitor dolor et molestie pretium felis con lore imolestie pretium.&nbsp;\r\n                    </li></ul>', '', '62', '1569', '2021-12-16 21:40:35', '2021-12-16 21:40:35'),
(341, 'Master Communations', 'Boston University', '2005', '2009', 'Master Communations', '<ul><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'Boston University', '62', '1570', '2021-12-16 21:41:45', '2021-12-16 21:41:45'),
(342, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '62', '1570', '2021-12-16 21:41:45', '2021-12-16 21:41:45'),
(343, '', '', '', '', '', '<ul><li>one cporttitor dolor et molestie pretium felis con lore imolestie pretium.&nbsp;\r\n                    </li></ul>', '', '62', '1570', '2021-12-16 21:41:45', '2021-12-16 21:41:45'),
(344, 'Master Communations', 'Boston University', '2005', '2009', 'Master Communations', '<ul><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'Boston University', '62', '1571', '2021-12-16 21:43:45', '2021-12-16 21:43:45'),
(345, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '62', '1571', '2021-12-16 21:43:45', '2021-12-16 21:43:45'),
(346, '', '', '', '', '', '<ul><li>one cporttitor dolor et molestie pretium felis con lore imolestie pretium.&nbsp;\r\n                    </li></ul>', '', '62', '1571', '2021-12-16 21:43:45', '2021-12-16 21:43:45'),
(347, 'Master Communations', 'Boston University', '2005', '2009', 'Master Communations', '<ul><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'Boston University', '62', '1572', '2021-12-16 21:45:26', '2021-12-16 21:45:26'),
(348, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '62', '1572', '2021-12-16 21:45:26', '2021-12-16 21:45:26'),
(349, '', '', '', '', '', '<ul><li>one cporttitor dolor et molestie pretium felis con lore imolestie pretium.&nbsp;\r\n                    </li></ul>', '', '62', '1572', '2021-12-16 21:45:26', '2021-12-16 21:45:26');
INSERT INTO `education` (`id`, `degree`, `university`, `year_start`, `year_end`, `title`, `cover_one_expereince`, `institute_name`, `user_id`, `section_id`, `created_at`, `updated_at`) VALUES
(350, 'Master Communations', 'Boston University', '2005', '2009', 'Master Communations', '<ul><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'Boston University', '62', '1573', '2021-12-16 21:46:36', '2021-12-16 21:46:36'),
(351, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '62', '1573', '2021-12-16 21:46:36', '2021-12-16 21:46:36'),
(352, '', '', '', '', '', '<ul><li>one cporttitor dolor et molestie pretium felis con lore imolestie pretium.&nbsp;\r\n                    </li></ul>', '', '62', '1573', '2021-12-16 21:46:36', '2021-12-16 21:46:36'),
(353, 'maSASNDAS D', 'ndnasd sadn asdja sd', '2013', '2010', 'maSASNDAS D', '<p>iasndiasnda sdjasbd asjd asdnauisdna sdjasbd asdna sdubas dasd asd</p>', 'ndnasd sadn asdja sd', '64', '1575', '2021-12-16 21:59:30', '2021-12-16 21:59:30'),
(354, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '64', '1575', '2021-12-16 21:59:30', '2021-12-16 21:59:30'),
(355, 'maSASNDAS D', 'ndnasd sadn asdja sd', '2013', '2010', 'maSASNDAS D', '<p>iasndiasnda sdjasbd asjd asdnauisdna sdjasbd asdna sdubas dasd asd</p>', 'ndnasd sadn asdja sd', '64', '1576', '2021-12-16 22:00:14', '2021-12-16 22:00:14'),
(356, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '64', '1576', '2021-12-16 22:00:14', '2021-12-16 22:00:14'),
(357, 'Master Communations', 'Boston University', '2005', '2009', 'Master Communations', '<ul><li>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        scon lore imolestie pretium. liberosn ollicitudin est</li></ul>', 'Boston University', '62', '1577', '2021-12-16 22:04:34', '2021-12-16 22:04:34'),
(358, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '62', '1577', '2021-12-16 22:04:34', '2021-12-16 22:04:34'),
(359, '', '', '', '', '', '<ul><li>one cporttitor dolor et molestie pretium felis con lore imolestie pretium.&nbsp;\r\n                    </li></ul>', '', '62', '1577', '2021-12-16 22:04:34', '2021-12-16 22:04:34'),
(360, 'maSASNDAS D', 'ndnasd sadn asdja sd', '2013', '2010', 'maSASNDAS D', '<p>iasndiasnda sdjasbd asjd asdnauisdna sdjasbd asdna sdubas dasd asd</p>', 'ndnasd sadn asdja sd', '64', '1578', '2021-12-16 22:05:28', '2021-12-16 22:05:28'),
(361, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '64', '1578', '2021-12-16 22:05:28', '2021-12-16 22:05:28'),
(362, 'maSASNDAS D', 'ndnasd sadn asdja sd', '2013', '2010', 'maSASNDAS D', '<p>iasndiasnda sdjasbd asjd asdnauisdna sdjasbd asdna sdubas dasd asd</p>', 'ndnasd sadn asdja sd', '64', '1579', '2021-12-16 22:08:08', '2021-12-16 22:08:08'),
(363, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '64', '1579', '2021-12-16 22:08:08', '2021-12-16 22:08:08'),
(364, 'maSASNDAS D', 'ndnasd sadn asdja sd', '2013', '2010', 'maSASNDAS D', '<p>iasndiasnda sdjasbd asjd asdnauisdna sdjasbd asdna sdubas dasd asd</p>', 'ndnasd sadn asdja sd', '64', '1580', '2021-12-16 22:30:39', '2021-12-16 22:30:39'),
(365, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '64', '1580', '2021-12-16 22:30:39', '2021-12-16 22:30:39'),
(366, 'maSASNDAS D', 'ndnasd sadn asdja sd', '2013', '2010', 'maSASNDAS D', '<p>iasndiasnda sdjasbd asjd asdnauisdna sdjasbd asdna sdubas dasd asd</p>', 'ndnasd sadn asdja sd', '64', '1581', '2021-12-16 22:32:16', '2021-12-16 22:32:16'),
(367, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '64', '1581', '2021-12-16 22:32:16', '2021-12-16 22:32:16'),
(368, 'maSASNDAS D', 'ndnasd sadn asdja sd', '2013', '2010', 'maSASNDAS D', '<p>iasndiasnda sdjasbd asjd asdnauisdna sdjasbd asdna sdubas dasd asd</p>', 'ndnasd sadn asdja sd', '64', '1582', '2021-12-16 22:33:52', '2021-12-16 22:33:52'),
(369, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '64', '1582', '2021-12-16 22:33:52', '2021-12-16 22:33:52'),
(370, 'maSASNDAS D', 'ndnasd sadn asdja sd', '2013', '2010', 'maSASNDAS D', '<p>iasndiasnda sdjasbd asjd asdnauisdna sdjasbd asdna sdubas dasd asd</p>', 'ndnasd sadn asdja sd', '64', '1584', '2021-12-16 22:36:18', '2021-12-16 22:36:18'),
(371, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '64', '1584', '2021-12-16 22:36:18', '2021-12-16 22:36:18'),
(372, 'maSASNDAS D', 'ndnasd sadn asdja sd', '2013', '2010', 'maSASNDAS D', '<p>iasndiasnda sdjasbd asjd asdnauisdna sdjasbd asdna sdubas dasd asd</p>', 'ndnasd sadn asdja sd', '64', '1585', '2021-12-16 22:38:47', '2021-12-16 22:38:47'),
(373, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '64', '1585', '2021-12-16 22:38:47', '2021-12-16 22:38:47'),
(374, 'maSASNDAS D', 'ndnasd sadn asdja sd', '2013', '2010', 'maSASNDAS D', '<p>iasndiasnda sdjasbd asjd asdnauisdna sdjasbd asdna sdubas dasd asd</p>', 'ndnasd sadn asdja sd', '64', '1586', '2021-12-16 22:46:31', '2021-12-16 22:46:31'),
(375, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '64', '1586', '2021-12-16 22:46:31', '2021-12-16 22:46:31'),
(376, 'maSASNDAS D', 'ndnasd sadn asdja sd', '2013', '2010', 'maSASNDAS D', '<p>iasndiasnda sdjasbd asjd asdnauisdna sdjasbd asdna sdubas dasd asd</p>', 'ndnasd sadn asdja sd', '64', '1594', '2021-12-16 23:36:32', '2021-12-16 23:36:32'),
(377, 'Bachelors Of Arts', 'College Of Design Arts', '2003', '2005', 'Bachelors Of Arts', '<p>Porttitor amet massa Done cporttitor dolor et molestie pretium\r\n                                        felis con lore imolestie pretium. liberosn</p>', 'College Of Design Arts', '64', '1594', '2021-12-16 23:36:32', '2021-12-16 23:36:32'),
(378, '', 'Boston University', '', '', '', '<p>\r\n                                    <b><span style=\"font-size: 18px;\">545465465465465465465465454</span></b></p><p><b><span style=\"font-size: 18px;\">46565465465465465465465</span></b></p>', 'Boston University', '74', '1613', '2021-12-18 02:48:34', '2021-12-18 02:48:34'),
(379, '', 'Boston University', '', '', '', '<p>\r\n                                    <b><span style=\"font-size: 18px;\">545465465465465465465465454</span></b></p><p><b><span style=\"font-size: 18px;\">46565465465465465465465</span></b></p>', 'Boston University', '74', '1614', '2021-12-18 02:52:26', '2021-12-18 02:52:26'),
(380, '', 'Boston University', '', '', '', '<p>\r\n                                    <b><span style=\"font-size: 18px;\">545465465465465465465465454</span></b></p><p><b><span style=\"font-size: 18px;\">46565465465465465465465</span></b></p>', 'Boston University', '74', '1615', '2021-12-18 02:54:03', '2021-12-18 02:54:03'),
(381, '', 'Boston University', '', '', '', '<p>\r\n                                    <b><span style=\"font-size: 18px;\">545465465465465465465465454</span></b></p><p><b><span style=\"font-size: 18px;\">46565465465465465465465</span></b></p>', 'Boston University', '74', '1616', '2021-12-18 02:57:38', '2021-12-18 02:57:38'),
(382, '', 'Boston University', '', '', '', '<p>\r\n                                    <b><span style=\"font-size: 18px;\">545465465465465465465465454</span></b></p><p><b><span style=\"font-size: 18px;\">46565465465465465465465</span></b></p>', 'Boston University', '74', '1617', '2021-12-18 03:01:05', '2021-12-18 03:01:05'),
(383, 'Molestias vel dolori', 'Jescie Mcintyre', '1991', '123', 'Molestias vel dolori', '', 'Jescie Mcintyre', '83', '1647', '2022-01-05 18:40:21', '2022-01-05 18:40:21'),
(384, 'Molestias vel dolori', 'Jescie Mcintyre', '1991', '123', 'Molestias vel dolori', '', 'Jescie Mcintyre', '83', '1648', '2022-01-05 18:47:22', '2022-01-05 18:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `faq_type_id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `faq_type_id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'How do I contact Accepted Therapy Services?', 'There are several ways that you can contact Accepted Therapy Services. We are often in therapy sessions, and our clients sometimes find it easier to contact us by email! You can contact your therapist directly by emailing them:\r\nNikki Dear, LCSW               	 nikki@acceptedtherapy.com\r\nLori Hodges, LMSW            	 lori@acceptedtherapy.com\r\nYvette Huddleston, LCSW     yvette@acceptedtherapy.com\r\nJesse Mitchell, LMSW         	 jesse@acceptedtherapy.com\r\n \r\nYou can also reach out by phone if you need to talk to someone.\r\nNikki Dear, LCSW:              	817-744-7424\r\nLori Hodges, LMSW:  	601-602-3624\r\nYvette Huddleston, LCSW: 	601-602-3624\r\nJesse Mitchell, LMSW:       	601-602-3624\r\n \r\nYou can contact Accepted Therapy Services through this website using the “Contact Us” feature at the top of the page. You will find a “Get in Touch” form where you can submit your name, email, and message. You can expect an answer to your message within 1-3 business days. \r\n\r\nYou can contact Accepted Therapy Services anonymously through our Anonymous Feedback Form located here. You can use this form to submit feedback about your therapy experience or express any other concerns.', 1, '2022-08-05 09:18:17', '2023-03-11 04:07:26'),
(2, 2, 'What happens if Accepted Therapy Services is closed and I need help?', 'Accepted Therapy Services is an outpatient clinic with no resources to address crisis situations or urgent needs immediately or outside of office hours.\r\n \r\nIf you are in a crisis, please call 911 or your local emergency services or visit the closest emergency room. You may also reach out to the National Suicide and Crisis Lifeline through phone or text by dialing 988 or online via chat.', 1, '2022-08-05 09:22:04', '2023-03-11 04:08:18'),
(3, 2, 'Where are you located?', 'We have two locations! \r\n \r\nHattiesburg, Mississippi\r\n423 Weathersby Road Suite 240 in Hattiesburg, MS 39402 \r\nAccepted Therapy Services is located directly behind Vitamins Plus next to Turtle Creek Mall.\r\nFrom Hwy 98 West, take Weathersby Road (which runs next to Turtle Creek Mall).\r\nThe road will veer to the right. \r\nOn your left, you will see a shopping center called Willow Pointe at Turtle Creek, followed by Vitamins Plus. \r\nAfter Vitamins Plus, Turn left into the group of office buildings \r\nThe parking lot will turn left and you will see our building at the end of the lot Suite 240\r\nLost? Call: 601-602-3624\r\n \r\nFort Worth, Texas:\r\n7833 Oakmont Blvd. Suite 110, Fort Worth, TX 76132\r\nAccepted Therapy Services is located at the back of the Oakmont Professional Building located at 7833 Oakmont Blvd, Fort Wort, TX. You can access the office in two different ways:\r\nIf you drive around to the back of the building and enter through the back door, Accepted Therapy Services is the first door on the left. \r\nIf you park in the front of the building, you may enter through the main door and proceed toward the back of the building. There is a glass door that says \"Oakmont Counseling Center,\" Accepted Therapy Services is the first door on the right. \r\nLost? Call: 817-744-7424', 1, '2022-08-05 09:22:21', '2023-03-11 04:08:55'),
(4, 2, 'Do you offer online sessions?', 'Yes, all of the Accepted Therapy Services clinicians offer both in-person and telehealth clients. \r\n \r\nOnline therapy takes place via a private, secure (HIPAA compliant) video platform. Even though we make our best efforts to ensure that the connection is secure, please be aware that any internet-based communication is not 100 % guaranteed to be secure. The benefit of online therapy is convenience and accessibility to therapists who may not live or work in your area. If you decide to meet via telehealth, please ensure you have a quiet, private space to talk to your clinician.', 1, '2022-08-05 09:22:39', '2023-03-11 04:09:51'),
(5, 2, 'What if I have a complaint?', 'If you have any complaints or concerns, you can reach out to your therapist or the owner, Nikki Dear.\r\n\r\nYou can also contact Accepted Therapy Services anonymously through our Anonymous Feedback Form located here. You can use this form to submit feedback about your therapy experience or express any other concerns.', 1, '2022-08-05 09:22:55', '2023-03-11 05:11:35'),
(6, 2, 'Habla Español?', 'As of now, none of the therapists are fluent in Spanish. We do have a translator on staff who can assist if needed. Please note that in-person sessions with a translator are only available in the Fort Worth office.\r\n \r\nPor el momento, ni una de las terapistas hablan español con fluidez. Sí contamos con un interprete del personal quien puede asistìr, si es necesario. Porfavor tome nota que las sesiones en persona con un interprete solo estan disponibles en la oficina de Fort Worth.', 1, '2022-08-05 09:23:10', '2023-03-11 04:11:17'),
(7, 3, 'Do I need therapy?', 'We all have experienced moments of stress and anxiety in our lives. Many of us are no strangers to the emotional and mental challenges brought on by life’s demands. Most of have experienced or are experiencing problems with life transitions, issues at work, financial worries, relationship problems, or grief over the loss of a loved one. Some of us have experienced negative thoughts and struggle with self-esteem, anxiety, and depression. Some of us also engage in risky behaviors and struggle with addiction.\r\n \r\nSometimes we can handle these challenges on our own or with the help of friends and family members we trust. However, many of us find it beneficial to get an objective point of view from someone outside of our circle. It may be helpful to talk to a therapist who is qualified to listen to our problems and help us find some relief through the therapy process. \r\n\r\nPsychotherapy, or talk therapy, is a common treatment for many mental health conditions. It can also help with day-to-day challenges and concerns. Not all psychotherapy is the same, and not all therapists offer the same services in the same way. Because there is a wide variation in both therapists and therapeutic methods, the therapy outcome for each person will depend on a number of factors, including therapist skill and client motivation.', 1, '2022-08-05 09:23:48', '2023-03-11 04:12:37'),
(8, 3, 'What are the benefits of therapy?', 'The primary benefit of therapy is to have an objective person to listen to your concerns and offer evidenced-based strategies for making improvements that address your concerns. Your therapist is someone who is “on your side” and who will work together with you in the therapy process. Your therapist will support you, challenge you, and provide insight into the areas of your life that you find challenging. Your therapist will tailor your treatment needs to your desired outcome, level of motivation, and ability to meet therapeutic challenges, enabling you to enhance your well-being and experience increased satisfaction in multiple areas of your life. \r\n \r\nOther benefits of therapy may include:\r\nDecreased Anxiety\r\nDecreased Depression\r\nIncreased Self Esteem\r\nBetter Decision-Making skills\r\nIncreased Self-Worth\r\nBetter Ability to Concentrate\r\nIncreased Confidence\r\nIncreased Self-Acceptance\r\nImproved Coping Skills\r\nAbility to Manage Stress\r\nAbility to Handle Anger\r\nAbility to Regulate Emotions\r\nImproved Relationships\r\nIncreased Support System\r\nAbility to Set Boundaries\r\nClearer Personal Goals\r\nIncreased Insight into Past Experiences', 1, '2022-08-05 09:24:46', '2023-03-11 04:13:34'),
(9, 3, 'Are there any risks to therapy?', 'The risks of therapy can include:\r\nTherapy requires an extreme sense of vulnerability and a willingness to revisit painful experiences. As these experiences are recalled, you may experience some uncomfortable emotions, such as sadness, guilt, shame, anger, or anxiety.\r\nBecause therapy often focuses on unpleasant and painful issues, it may seem like things are worsening. Remember that things often get worse before they improve.\r\nIn order for therapy to be successful, change will be required. Most of the time, change is hard and uncomfortable (even when it is good).', 1, '2022-08-05 09:25:07', '2023-03-11 04:14:15'),
(11, 3, 'How long will I have to see a therapist?', 'At Accepted Therapy Services, the length of time you spend in therapy will vary based on your needs. Just as everyone’s life experiences and circumstances are different, the length that you will need to see a therapist is different for everyone. Some people just need help dealing with an immediate crisis or problem. Other people like to keep seeing someone to process life transitions, even after they feel stable or out of crisis. Your therapist will work with you to determine what is best for you.', 1, '2022-08-05 09:25:44', '2023-03-11 04:17:56'),
(12, 3, 'How does confidentiality work?', 'The therapeutic relationship is a confidential relationship where no information will be disclosed about you or the fact that you are receiving services from Accepted Therapy Services without written consent.  \r\n \r\nAlthough we keep your information confidential, there are a few limitations to confidentiality. This means that your therapist may disclose confidential information without consent. The limitations to confidentiality include:\r\nSuicidal or Homicidal Ideations\r\nIf you (the client) threaten or attempt to commit suicide or otherwise conducts yourself in a manner in which there is a substantial risk of incurring serious bodily harm then the proper authorities will be notified.\r\nIf you (the client) threaten grave bodily harm or death to another person then the proper authorities and/or the person who harm is threatened will be notified.\r\nAbuse or Neglect\r\nIf there is disclosure or reasonable suspicion that you (the client) or another named individual is the perpetrator, observer of, or actual victim of neglect, physical abuse, emotional abuse, or sexual abuse of children under the age of 18. I (the client) understand that my therapist is a mandated reporter and will be required to report the suspicion of or abuse to the Department of Child Protective Services in my state or the state in which the victim resides. \r\nIf there is a disclosure or reasonable suspicion of elder abuse then a report will be made to the Department of Human Services in your state or the state in which the victim resides.\r\n \r\nIf a report regarding suicidal ideation, homicidal ideation, or abuse/neglect needs to be made, your therapist will try to notify you prior to the report being made; however, your therapist is not required to notify you prior making a report.\r\n \r\nSubpoena\r\nIf a court of law issues a legitimate subpoena, the information, as specifically stated on the subpoena may be released. \r\nStaffing/Consultation\r\nThe staff of Accepted Therapy Services staff weekly to make sure that you are getting the best possible care. All information that is shared during staffing is relevant to your care and necessary. Information is not shared just for conversational purposes.\r\nOccasionally, your therapist may need to consult with other professionals in their areas of expertise in order to provide the best treatment for me. Information shared about you, outside of Accepted Therapy Services, will be shared without using your name or any other protected health information (PHI).\r\nNon-Secure Communication\r\nIt is not the practice of Accepted Therapy Services to provide therapy via text messages, emails, or other non-secure means. \r\n Information related to the scheduling of meetings or other appointments as well as information related to billing and payment may be communicated via non-secure means', 1, '2022-08-05 09:26:05', '2023-03-11 04:19:40'),
(13, 4, 'What type of therapy do you provide?', 'Each therapist at Accepted Therapy Services has different specialties and modalities that they draw from. Our therapists typically use techniques derived from the following types of therapy: \r\nAcceptance and Commitment Therapy (ACT)\r\nCognitive Behavioral Therapy (CBT)\r\nDialectical Behavioral Therapy (DBT)\r\nEmotion-Focused Therapy (EFT)\r\nExposure Therapy\r\nEye Movement Desensitization and Reprocessing (EMDR)\r\nPsychoanalytic Motivational Interviewing\r\nReality-Based\r\nSolution Focused\r\nTalk Therapy\r\nTrauma-Informed\r\nAnd more!\r\n \r\nYou can learn more about our individual therapists by visiting the “Meet Our Team” page. We encourage you to reach out to a therapist at your desired location to inquire about your specific needs.', 1, '2022-08-05 10:51:41', '2023-03-11 04:27:20'),
(14, 4, 'Do you provide therapy for adults?', 'At Accepted Therapy Services, we believe that an adult’s mental health is essential to their overall well-being. Therapy services for adults can improve emotional health and interpersonal relationships. We have therapists in each location that provide individual therapy services to adults. We offer a wide range of treatment techniques and therapeutic interventions for the adult population.\r\n \r\nEach Therapist at Accepted Therapy Services is committed to expanding their therapeutic knowledge base and increasing their skill set to better meet the needs of the clients we serve. Each of our therapists is uniquely qualified to treat specific problem areas among different populations.\r\n \r\nYou can learn more about our individual therapists by visiting the “Meet Our Team” page. We encourage you to reach out to a therapist at your desired location to inquire about your specific needs.', 1, '2022-08-05 10:52:16', '2023-03-11 04:28:04'),
(15, 4, 'Do you provide therapy for children/teens?', 'It is the policy of Accepted Therapy Services not to provide treatment to a child under age 13 unless the child agrees that information can be shared, when necessary, with a parent.\r\n \r\nFor children 14 and older:\r\nAn agreement between the child and the parent/guardian allows the therapist to share general information about treatment progress and attendance.\r\nThis agreement also allows the parent/guardian to receive a treatment summary upon completion of therapy.\r\nAll other communication will require the child’s agreement unless there is a safety concern. \r\nAccepted Therapy Services will make every effort to notify the child of any intention to disclose information ahead of time and make every effort to handle any objections that are raised.\r\n \r\nEach Therapist at Accepted Therapy Services is committed to expanding their therapeutic knowledge base and increasing their skill set to better meet the needs of the clients we serve. Each of our therapists is uniquely qualified to treat specific problem areas among different populations.\r\n \r\nYou can learn more about our individual therapists by visiting the “Meet Our Team” page. We encourage you to reach out to a therapist at your desired location to inquire about your specific needs.', 1, '2022-08-05 10:52:42', '2023-03-11 04:28:37'),
(16, 4, 'Do you provide therapy for Couples/Marriage counseling?', 'At Accepted Therapy Services, we recognize that there are unique challenges experienced by married individuals/partners/couples. We understand that communication, trust, and the mental health of each individual are essential to the overall health and well-being of the relationship.\r\n \r\nEach Therapist at Accepted Therapy Services is committed to expanding their therapeutic knowledge base and increasing their skill set to better meet the needs of the clients we serve. Each of our therapists is uniquely qualified to treat specific problem areas among different populations. \r\n \r\nYou can learn more about our individual therapists by visiting the “Meet Our Team” page. We encourage you to reach out to a therapist at your desired location to inquire about your specific needs.', 1, '2022-08-05 10:52:59', '2023-03-11 04:29:09'),
(17, 4, 'Do you provide Christian Counseling?', 'At Accepted Therapy Services, we embrace many spiritual or religious practices that promote individual well-being and enhance the therapeutic journey. We understand that, to some, spirituality, religion, church, prayer, mindfulness, and meditation are beneficial to the healing process. If you wish to incorporate your belief system into your treatment, you are encouraged to speak with your therapist.', 1, '2022-08-05 10:53:20', '2023-03-11 04:29:51'),
(18, 4, 'Do you provide therapy for LGBTQIA individuals?', 'Accepted Therapy Services is a LGBTQIA+ Safe Space. At Accepted Therapy Services, we recognize that there are unique challenges experienced by LGBTQIA+ individuals and we desire to be supportive of you.', 1, '2022-08-05 11:01:23', '2023-03-11 04:30:31'),
(19, 5, 'What is the cost of a therapy session?', 'The standard fee for the initial intake and each subsequent session is $150.00 per session. A sliding scale is available if you do not have insurance coverage. You are responsible for paying at the time of my session unless prior arrangements have been made in writing.\r\n \r\nIf you have insurance, your copayment or coinsurance is specific to your insurance plan. It is your responsibility to know your insurance benefits (including coinsurance, copayments, and deductible status). You are also responsible for the cost of services in the event that your insurance does not cover them (typically due to your deductible not being met).', 1, '2022-08-05 11:01:51', '2023-03-11 04:42:45'),
(20, 5, 'How can I pay for my session/copay?', 'Payment can be made in any of the following ways:\r\nCredit Card\r\nCash\r\nCheck\r\nCashApp\r\nVenmo\r\n \r\nThere will be a convenience fee of $2.00 for each invoice that is paid for with a credit or debit card. To avoid this fee, you can pay with cash, check (made out to Accepted Therapy Services), Cash App ($AcceptedTherapy) or Venmo (@aceptedtherapy).\r\n \r\nPlease note that any checks returned to Accepted Therapy Services are subject to an additional fee of up to $50.00 to cover the bank fee that is incurred.', 1, '2022-08-05 11:02:37', '2023-03-11 04:43:12'),
(21, 5, 'Are there any other fees that I need to know about?', 'Credit Card Transaction Fee\r\nThere will be a convenience fee of $2.00 for each invoice that is paid for with a credit or\r\ndebit card. To avoid this fee, you can pay with cash, check (made out to Accepted Therapy Services), CashApp ($AcceptedTherapy) or Venmo (@aceptedtherapy).\r\n \r\nLate Cancellation Fees\r\nA “No Show or Late Cancellation Fee” of $75.00 will be charged if any of the following occur:\r\nYou are more than 10 minutes late to a session ‘\r\nYou miss a session without canceling, or cancel with less than 24-hour notice\r\nIt is important to note that insurance companies do not provide reimbursement for canceled sessions; thus, you will be responsible for the portion of the fee described above.\r\n \r\nBook Fees\r\nMost of the therapists at Accepted Therapy Services have a personal library of books that is available if you wish to read on various topics that may be discussed during therapy. Books that are loaned to you should be returned within a reasonable time frame (two months maximum). If a book is loaned out and not returned within two months or is damaged upon return a fee of $25 plus the cover cost of the book, will be charged to my card on file.\r\n \r\nCourt Fees\r\nIf your case requires your therapist’s participation, you will be expected to pay for the professional time required even if another party compels your therapist to testify. It is important to note that insurance companies do not provide reimbursement for these fees and the fees must be received prior to your therapist becoming involved. \r\n \r\nThe fees for court involvement are:\r\nPreparation of statement for an attorney or legal use: $200\r\nPhone calls regarding legal issues: $50 for 15 minutes or $200 an hour\r\nTravel to court/attorney’s office: $25 minimum or $1 per mile.\r\nTestimony in court (including time spent waiting to be called as a witness): $250 per hour\r\n \r\nOther Fees\r\nA prorated fee will be charged for other professional services that you may require such as report\r\nwriting, telephone conversations that last longer than 15 minutes, meetings or consultations which you have requested your therapist to attend, or the time required to perform any other service which you may request of your therapist.', 1, '2022-08-05 11:02:55', '2023-03-11 04:44:18'),
(22, 5, 'Do you take insurance?', 'Yes! Accepted Therapy Services is currently credentialed with the following providers:\r\nAetna     \r\nBlue Cross Blue Shield\r\nCigna\r\nMagellan   \r\nTricare\r\nUnited Healthcare/UMR\r\n \r\nIf you have insurance that is not listed above, please inquire. We do not accept Medicaid or Medicare.', 1, '2022-08-05 11:03:11', '2023-03-11 04:45:01'),
(23, 5, 'What is my copay?', 'Your copayment or coinsurance is specific to your insurance plan. Your therapist will do their best to verify your benefits and confirm your payment prior to your first session; however, it is your responsibility to know your insurance benefits (including coinsurance, copayments, and deductible status). You are also responsible for the cost of services in the event that your insurance does not cover them (typically due to your deductible not being met).  \r\n \r\nIf your insurance changes, it is your responsibility to let your therapist know, failure to do so may result in the entire cost of services being billed.', 1, '2022-08-05 11:03:26', '2023-03-11 04:45:22'),
(24, 5, 'Do you accept Medicaid or Medicare?', 'Accepted Therapy does not accept Medicaid or Medicare but we offer a sliding scale for individuals who have Medicaid or Medicare.', 1, '2022-08-05 11:03:45', '2023-03-11 04:47:05'),
(25, 5, 'Do you have a sliding scale rate ?', 'We offer a sliding scale for individuals who do not have insurance or have Medicaid or Medicare.', 1, '2022-08-05 11:04:05', '2023-03-11 04:47:52'),
(26, 6, 'Do I need a referral to your office?', 'No! There are several ways to start receiving services from Accepted Therapy Services. \r\n \r\nTo get started:\r\nYou can contact Accepted Therapy Services through this website using the “Contact Us” feature at the top of the page. There is a “Get in Touch” form where you can submit your name, email, and message. You can expect an answer to your message within 1-3 business days.\r\n \r\nYou can also reach out by phone to talk to someone about starting services:\r\nHattiesburg, Mississippi: 601-602-3624\r\nLori Hodges, LMSW\r\nYvette Huddleston, LCSW\r\nJesse Mitchell, LMSW\r\n \r\nFort Worth, Texas: 817-744-7424\r\nNikki Dear, LCSW', 1, '2022-08-05 11:04:25', '2023-03-11 04:48:29'),
(27, 6, 'Do you accept walk-ins?', 'No, all of the therapists at Accepted Therapy Services require an appointment.', 1, '2022-08-05 11:04:42', '2023-03-11 04:49:00'),
(29, 6, 'How do I make an appointment?', 'You can make an appointment via email or phone. If you choose to complete a consultation call, your therapist can get your first appointment scheduled during the call.', 1, '2022-08-05 11:05:13', '2023-03-11 04:52:41'),
(30, 6, 'What do I need to do before my first appointment?', 'Once your initial session is scheduled, your therapist will send you an invitation to the client portal, TheraNest.\r\n \r\nAll intake paperwork should be completed prior to your first session. You will also need to send a copy of your insurance card, if applicable, to your therapist for benefit verification, prior to your first session.', 1, '2022-08-05 11:05:26', '2023-03-11 04:53:12'),
(31, 6, 'What happens if I am late for a session?', 'If you are late to your session, your appointment will still end at the original end time. Your therapist has the right to cancel the appointment if you are more than 10 minutes late.', 1, '2022-08-05 11:05:40', '2023-03-11 04:53:39'),
(32, 6, 'What happens if I can not make it to my scheduled appointment?', 'At Accepted Therapy Services, we require a 24-Hour Notice to cancel your appointment. We have an appointment reminder system that will text you the day before your appointment to confirm or cancel your scheduled appointment. You can use this feature to cancel your appointment without receiving a cancellation fee. \r\n \r\nYou can also call or email your therapist to notify them of your cancellation. However, if you do not notify your therapist that you are canceling your appointment, you will be charged a “No Show or Late Cancellation Fee” of $75.00. It is important to note that insurance companies do not provide reimbursement for canceled sessions.', 1, '2022-08-05 11:05:57', '2023-03-11 04:54:15'),
(33, 7, 'How do I access the client portal?', 'After you have been invited to the TheraNest Client Portal, you can access your client portal here.', 1, '2022-08-05 11:06:15', '2023-03-11 04:55:20'),
(35, 8, 'Does Accepted Therapy Services prescribe medications?', 'No, there are no therapists at Accepted Therapy Services that can prescribe or adjust any medications. If you need medication management in addition to therapy, we will be happy to refer you to a provider who can manage your medications.', 1, '2022-08-05 11:06:49', '2023-03-11 05:00:19'),
(36, 8, 'Does Accepted Therapy Services conduct psychological testing?', 'No, we do not provide psychological testing. If you need psychological testing, we will refer you to a provider who can assist with testing.', 1, '2022-08-05 11:07:05', '2023-03-11 05:01:25'),
(37, 8, 'Does Accepted Therapy Services make referrals?', 'Yes! We want to make sure that your needs are being met, even when that means that we can not meet them. If we see that you need a higher level of care (inpatient or residential treatment), we will make a referral to an appropriate treatment center.', 1, '2022-08-05 11:07:24', '2023-03-11 05:01:52'),
(38, 8, 'If you refer me to a higher level of care, does that mean I can’t work with you anymore?', 'Not at all! If you are referred to a higher level of care, you can continue working with your therapist once you are discharged or are in need on an outpatient therapist again.', 1, '2022-08-05 11:07:50', '2023-03-11 05:02:20'),
(39, 8, 'Will you provide a statement for me to have an emotional support animal or critter?', 'At Accepted Therapy Services, we want to make sure that we are meeting your needs. If you require an emotional support animal (ESA), we will assist you in the process after a minimum of six months of active services. This service is only available to active clients who meet the criteria for an emotional support animal.', 1, '2022-08-05 11:08:08', '2023-03-11 05:03:01'),
(40, 8, 'Do you provide statements for SSI benefits?', 'At Accepted Therapy Services, we want to make sure that we are meeting your needs. If you require documentation for SSI benefits, we will assist you in the process, if requested, after a minimum of six months of active therapy services. This service is only available to active clients.', 1, '2022-08-05 11:08:24', '2023-03-11 05:03:32'),
(41, 8, 'Will you provide a legal statement for me?', 'If you anticipate becoming involved in a court case, please make your therapist aware as soon as possible, especially if you need your therapist to be involved. It is a good idea to discuss any pending legal involvement with your therapist before waiving the right to confidentiality. \r\n \r\nIf your case requires your therapist’s participation, you will be expected to pay for the professional time required, even if another party compels your therapist to testify. It is important to note that insurance companies do not provide reimbursement for these, fees and the fees must be received prior to your therapist becoming involved. \r\n \r\nThe fees for court involvement are:\r\nPreparation of statement for attorney or legal use: $200\r\nPhone calls regarding legal issues: $50 for 15 minutes or $200 an hour\r\nTravel to court/attorney’s office: $25 minimum or $1 per mile.\r\nTestimony in court (including time spent waiting to be called at witness): $250 per hour', 1, '2022-08-05 11:08:40', '2023-03-11 05:04:05'),
(42, 11, 'Anti-Discrimination Policy', 'Accepted Therapy Services does not unlawfully discriminate internally or externally on the basis of age, marital status, political orientation, religious affiliation, national origin, ethnicity, ancestry, race, gender, gender identification, sexuality, veteran status, mental disability, intellectual disability, developmental disability, mental health diagnosis, physical disability, insurance status, income or any other status prohibited by applicable law.', 1, '2022-08-05 11:10:13', '2023-03-11 05:04:43'),
(43, 11, 'Collections Policy', 'As of August 1, 2022, it is the policy of Accepted Therapy Services that balance accrual is not allowed. If you have a balance, speak to your therapist about a payment plan. Follow-up sessions will not be scheduled without a payment plan in place. \r\n \r\nFor a balance that is more than 90 days past due, Accepted Therapy Services reserves the right to use an attorney or collection agency to secure payment.', 1, '2022-08-05 11:10:28', '2023-03-11 05:06:36'),
(44, 11, 'COVID Policy', 'Accepted Therapy Services has implemented the following precautions to address COVID-19:\r\n·   It is recommended that all affiliates of Accepted Therapy Services be vaccinated.\r\n·   Masks are recommended for all affiliates who are not fully vaccinated.\r\n·   All affiliates of Accepted Therapy Services, even if fully vaccinated, will be required to wear a mask if a client requests that one be worn.\r\n·   Cleaning procedures are completed between each session and at the beginning and end of each day.\r\n·   Clients or affiliates of Accepted Therapy Services should not present for in-person services if they are experiencing any symptoms of COVID-19.\r\n·   Telehealth services are provided for clients who are uncomfortable with in-person sessions.', 1, '2022-08-05 11:10:43', '2023-03-11 05:05:54'),
(46, 11, 'NASW Code of Ethics', 'The therapists at Accepted Therapy Services are guided by the NASW Code of Ethics. For more information on the Code of Ethics in its entirety please visit: NASW Code of Ethics', 1, '2022-08-05 11:33:19', '2023-03-11 05:05:25'),
(47, 2, 'What are the values of Accepted Therapy Services?', 'At Accepted Therapy Services, we embrace values that are essential to the therapeutic relationship. Our team of therapists is committed to integrating these values into our daily practice and our personal lives. We are attentive to the sensitive nature of the therapeutic relationship and work diligently to engage in these values to serve our clients best. These values include:\r\n\r\nAcceptance - We want our clients to experience unconditional acceptance. It is important for our clients to know that they can communicate their innermost thoughts, feelings, and experiences without fear of judgment or rejection. \r\n\r\nSafety - At Accepted Therapy Services, we work hard to create an environment that feels safe for our clients. We know that emotional safety and physical safety are crucial for our clients to express vulnerability and feel supported. \r\n\r\nGenuineness -  Our therapists believe it is important to practice authenticity. It is important for our therapists to be sincere, open, and honest. In doing so, our Therapists operate in accordance with each of our individual personalities, values, educational backgrounds, skill levels, and areas of expertise. \r\n\r\nIntegrity - At Accepted Therapy Services, we value integrity in all of our operations, including the therapeutic process, client communications, billing, insurance, and other areas that demand professional responsibility. Our therapists are committed to providing services in a way that is honest, ethical, consistent, and transparent.\r\n\r\n Growth - It is our hope that through the therapy process, our clients gain insights that promote personal growth. It is also important that our therapists continue to grow personally and professionally. Our therapists actively seek to increase our professional knowledge and skills, and apply those concepts in our practice and in our personal lives. \r\n\r\nIt is important to note that as Professional Social Workers, each of our Therapists practices Social Work in accordance with the NASW Code of Ethics expressed values: Service, Social Justice, Dignity, and Worth of the Person, the Importance of Human Relationships, Integrity, and Competence. For more information on the Code of Ethics in its entirety please visit: NASW Code of Ethics', 1, '2023-03-11 05:09:07', '2023-03-11 05:21:21'),
(48, 2, 'Can I request to work with a specific provider?', 'Yes! We want to know your preference! We recommend that you visit the “Meet our Team” page, and get to know our therapists so that you can make an informed decision on which provider you would like to work with. \r\n\r\nIf you request a specific provider, we will do our best to honor your request. Please be aware that your choice of therapist may have limited availability or a waiting list. In these circumstances, you will be able to decide how to best proceed.', 1, '2023-03-11 05:09:42', '2023-03-11 05:21:31'),
(49, 2, 'How do I contact my therapist?', 'You can contact your therapist directly by emailing them:\r\nNikki Dear, LCSW               	 nikki@acceptedtherapy.com\r\nLori Hodges, LMSW          	  lori@acceptedtherapy.com\r\nYvette Huddleston, LCSW   	 yvette@acceptedtherapy.com \r\nJesse Mitchell, LMSW         	 jesse@acceptedtherapy.com  \r\nYou can call your therapist at the following numbers:\r\nNikki Dear, LCSW:              	817-744-7424\r\nLori Hodges, LMSW:  	601-602-3624\r\nYvette Huddleston, LCSW:    601-602-3624\r\nJesse Mitchell, LMSW:       	601-602-3624\r\n\r\nYou can also message your therapist through the TheraNest client portal.', 1, '2023-03-11 05:10:47', '2023-03-11 05:21:37'),
(50, 12, 'What are your hours of operation?', 'Our typical hours of operation are 9:00 am - 5:00 pm. However, each therapist makes their own schedule and may have availability outside of these hours. There may be times during the hours of operations that your therapist is not in the office, if you do not have an appointment, please call before you stop by.', 1, '2023-03-11 05:12:43', '2023-03-11 05:20:52'),
(51, 2, 'Is your office wheelchair accessible?', 'Both the Hattiesburg and Fort Worth offices are accessible for individuals who have disabilities.', 1, '2023-03-11 05:13:45', '2023-03-11 05:21:45'),
(52, 6, 'How do I choose a therapist?', 'We recommend that you visit the “Meet our Team” page, and get to know our therapists so that you can make an informed decision on which provider you would like to work with. \r\n\r\nA therapist is considered to be a good fit when you like your therapist, can trust them, and respect them. It is important for you to be able to get along with your therapist. Because we believe that a good fit is so important, we provide a free 15-minute consultation with the therapist of your choice.\r\n\r\nIf you request a specific provider, we will do our best to honor your request. Please be aware that your choice of therapist may have limited availability or a waiting list. In these circumstances, you will be able to decide how to best proceed.', 1, '2023-03-11 05:14:44', '2023-03-11 05:21:49'),
(53, 6, 'Do you offer a consultation call?', 'All of the therapists at Accepted Therapy Services provide free 15-minute phone consultations. This call is designed to give you an opportunity to talk to your potential therapist, ask questions, and, if desired, get your first appointment scheduled.', 1, '2023-03-11 05:15:19', '2023-03-11 05:21:53'),
(54, 4, 'What types of mental health issues do you provide services for?', 'Addictive Behaviors (shopping, pornography, etc.)\r\nAnxiety DisordersDepressive Disorders\r\nMood Disorders \r\nPersonality Disorders\r\nSelf-Harm/Suicidal Ideation\r\nSubstance Abuse\r\nTrauma and Grief\r\n\r\nYou can learn more about our individual therapists and the types of issues that they treat by visiting the “Meet Our Team” page. We encourage you to reach out to a therapist at your desired location to inquire about your specific needs.', 1, '2023-03-11 05:16:07', '2023-03-11 05:21:56'),
(55, 4, 'Are there any types of mental health issues that you do not provide services for?', 'Yes, we do not treat any of the following conditions:\r\n·  Developmental disorders\r\n·  Psychosis (including substance induced\r\n·  Autism Spectrum Disorder\r\n·  Brain Injuries\r\n \r\nIn addition, we will not provide services to anyone (even if they are an existing client), who is under the influence of drugs or alcohol during their session.', 1, '2023-03-11 05:16:45', '2023-03-11 05:21:59'),
(56, 7, 'What do I use the client portal for?', 'The client portal can be used to:\r\nSubmit intake paperwork, or other forms as requested\r\nMake or cancel an appointment\r\nContact your therapist\r\nAdd a new credit card\r\nAdd new insurance information\r\nMake a payment on your account\r\nUpdate your personal information\r\nPrint invoices or superbills\r\n \r\nTo learn how to do these things, you can visit the TheraNest help desk located here.', 1, '2023-03-11 05:17:17', '2023-03-11 05:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `faq_types`
--

CREATE TABLE `faq_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `section_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_types`
--

INSERT INTO `faq_types` (`id`, `section_type`, `status`, `created_at`, `updated_at`) VALUES
(2, 'General Question', 1, '2022-08-05 08:36:18', '2022-09-12 19:36:21'),
(3, 'About Therapy', 1, '2022-08-05 08:38:58', '2022-09-09 23:53:05'),
(4, 'Types of Therapy', 1, '2022-08-05 08:39:13', '2022-08-05 08:57:27'),
(5, 'Costs', 1, '2022-08-05 08:39:23', '2022-08-05 08:57:29'),
(6, 'Appointments', 1, '2022-08-05 08:39:32', '2022-08-05 08:57:31'),
(7, 'Portal', 1, '2022-08-05 08:39:41', '2022-08-05 08:57:40'),
(8, 'Other Services', 1, '2022-08-05 08:39:50', '2022-08-05 08:58:02'),
(11, 'Policies', 1, '2022-08-05 09:05:37', '2022-08-05 09:05:51'),
(12, 'Locations', 1, '2023-03-11 05:12:14', '2023-03-11 05:12:14');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quote_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inform_consent_forms`
--

CREATE TABLE `inform_consent_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefit_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telehealth_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_fees_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_fees_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `book_fees_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `professional_record_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `confidentiality_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parents_minor_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rights_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `printed_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `witness` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inform_consent_date_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inform_consent_forms`
--

INSERT INTO `inform_consent_forms` (`id`, `user_id`, `team_member_id`, `benefit_signature`, `telehealth_signature`, `professional_fees_signature`, `session_fees_signature`, `book_fees_signature`, `professional_record_signature`, `confidentiality_signature`, `parents_minor_signature`, `rights_signature`, `printed_name`, `witness`, `inform_consent_date_time`, `is_active`, `created_at`, `updated_at`) VALUES
(7, NULL, NULL, 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', NULL, NULL, '2023-02-10T23:43', 1, '2023-02-11 01:43:42', '2023-02-11 01:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `intake_children_forms`
--

CREATE TABLE `intake_children_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intake_form_id` bigint(20) UNSIGNED NOT NULL,
  `no_of_children_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_children` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_child_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_of_child_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_with_child_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_child_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_of_child_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_with_child_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_child_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_of_child_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_with_child_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_child_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_of_child_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_with_child_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_child_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_of_child_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_with_child_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intake_children_forms`
--

INSERT INTO `intake_children_forms` (`id`, `intake_form_id`, `no_of_children_radio`, `no_of_children`, `name_child_1`, `age_of_child_1`, `relationship_with_child_1`, `name_child_2`, `age_of_child_2`, `relationship_with_child_2`, `name_child_3`, `age_of_child_3`, `relationship_with_child_3`, `name_child_4`, `age_of_child_4`, `relationship_with_child_4`, `name_child_5`, `age_of_child_5`, `relationship_with_child_5`, `created_at`, `updated_at`) VALUES
(3, 3, 'no', '6', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 03:06:57', '2023-01-19 03:06:57'),
(4, 4, 'yes', '7', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 03:07:30', '2023-01-19 03:07:30'),
(5, 5, 'yes', '7', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 03:07:55', '2023-01-19 03:07:55'),
(6, 6, 'yes', '19', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 03:08:13', '2023-01-19 03:08:13'),
(7, 7, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-19 03:08:45', '2023-01-19 03:08:45'),
(8, 8, 'yes', '16', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 03:56:44', '2023-01-24 03:56:44'),
(9, 9, 'yes', '19', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-24 06:55:05', '2023-01-24 06:55:05'),
(10, 10, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 02:04:11', '2023-01-25 02:04:11'),
(11, 11, 'yes', '17', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-25 02:06:32', '2023-01-25 02:06:32'),
(12, 12, 'yes', '14', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 01:36:39', '2023-01-27 01:36:39'),
(13, 13, 'yes', '23', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 02:28:49', '2023-01-27 02:28:49'),
(14, 14, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 02:50:33', '2023-01-27 02:50:33'),
(15, 15, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 02:54:05', '2023-01-27 02:54:05'),
(16, 16, 'yes', '8', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 23:14:38', '2023-01-27 23:14:38'),
(17, 17, 'yes', '3', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 23:18:18', '2023-01-27 23:18:18'),
(18, 18, 'yes', '19', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 23:19:23', '2023-01-27 23:19:23'),
(19, 19, 'yes', '14', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 23:25:27', '2023-01-27 23:25:27'),
(20, 20, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 23:26:53', '2023-01-27 23:26:53'),
(21, 21, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 23:27:29', '2023-01-27 23:27:29'),
(22, 22, 'yes', '28', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 23:29:51', '2023-01-27 23:29:51'),
(23, 23, 'yes', '17', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 23:32:44', '2023-01-27 23:32:44'),
(24, 24, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 23:33:16', '2023-01-27 23:33:16'),
(25, 25, 'yes', '7', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 23:34:18', '2023-01-27 23:34:18'),
(26, 26, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-27 23:35:09', '2023-01-27 23:35:09'),
(27, 27, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 02:29:43', '2023-01-28 02:29:43'),
(28, 28, 'yes', '16', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 02:32:05', '2023-01-28 02:32:05'),
(29, 29, 'yes', '27', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 02:46:15', '2023-01-28 02:46:15'),
(30, 30, 'yes', '4', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 02:56:22', '2023-01-28 02:56:22'),
(31, 31, 'yes', '11', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 03:00:52', '2023-01-28 03:00:52'),
(32, 32, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 03:30:25', '2023-01-28 03:30:25'),
(33, 33, 'yes', '27', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 03:31:56', '2023-01-28 03:31:56'),
(34, 34, 'yes', '4', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 03:34:46', '2023-01-28 03:34:46'),
(35, 35, 'yes', '15', NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 03:41:44', '2023-01-28 03:41:44'),
(36, 36, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 03:45:55', '2023-01-28 03:45:55'),
(37, 37, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 03:57:12', '2023-01-28 03:57:12'),
(38, 38, 'no', NULL, NULL, NULL, 'Excellent', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-02-11 01:47:17', '2023-02-11 01:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `intake_drug_forms`
--

CREATE TABLE `intake_drug_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intake_form_id` bigint(20) UNSIGNED NOT NULL,
  `checkbox_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_use_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_use_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency_use_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_use_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_use_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkbox_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_use_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_use_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency_use_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_use_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_use_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkbox_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_use_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_use_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency_use_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_use_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_use_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkbox_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_use_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_use_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency_use_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_use_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_use_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkbox_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_use_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_use_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency_use_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_use_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_use_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkbox_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_use_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_use_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency_use_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_use_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_use_6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkbox_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_use_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_use_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency_use_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_use_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_use_7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkbox_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_use_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_use_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency_use_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_use_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_use_8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkbox_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_use_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_use_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency_use_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_use_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_use_9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `checkbox_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age_use_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `length_use_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `frequency_use_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_use_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_use_10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drug_misused_or_abuse_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drug_misused_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intake_drug_forms`
--

INSERT INTO `intake_drug_forms` (`id`, `intake_form_id`, `checkbox_1`, `age_use_1`, `length_use_1`, `frequency_use_1`, `amount_use_1`, `date_last_use_1`, `checkbox_2`, `age_use_2`, `length_use_2`, `frequency_use_2`, `amount_use_2`, `date_last_use_2`, `checkbox_3`, `age_use_3`, `length_use_3`, `frequency_use_3`, `amount_use_3`, `date_last_use_3`, `checkbox_4`, `age_use_4`, `length_use_4`, `frequency_use_4`, `amount_use_4`, `date_last_use_4`, `checkbox_5`, `age_use_5`, `length_use_5`, `frequency_use_5`, `amount_use_5`, `date_last_use_5`, `checkbox_6`, `age_use_6`, `length_use_6`, `frequency_use_6`, `amount_use_6`, `date_last_use_6`, `checkbox_7`, `age_use_7`, `length_use_7`, `frequency_use_7`, `amount_use_7`, `date_last_use_7`, `checkbox_8`, `age_use_8`, `length_use_8`, `frequency_use_8`, `amount_use_8`, `date_last_use_8`, `checkbox_9`, `age_use_9`, `length_use_9`, `frequency_use_9`, `amount_use_9`, `date_last_use_9`, `checkbox_10`, `age_use_10`, `length_use_10`, `frequency_use_10`, `amount_use_10`, `date_last_use_10`, `drug_misused_or_abuse_radio`, `drug_misused_info`, `created_at`, `updated_at`) VALUES
(3, 3, NULL, '10', '13', '4', '20', '1988-05-14', 'Ecstasy', '27', '9', '20', '13', '1975-03-29', 'Hallucinogens (LSD)', '11', '25', '26', '19', '2008-11-19', 'Heroin', '12', '18', '18', '6', '2012-03-14', NULL, NULL, NULL, NULL, NULL, NULL, 'Methadone/Suboxone', '23', '26', '28', '20', '1986-10-12', NULL, '27', '10', '14', '12', '2022-12-28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', '21', '20', '16', '1981-07-13', NULL, '15', '20', '7', '7', '1996-04-17', 'yes', 'Voluptatem consequat', '2023-01-19 03:06:57', '2023-01-19 03:06:57'),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, 'Ecstasy', '15', '13', '11', '22', '1985-06-10', 'Hallucinogens (LSD)', '23', '4', '18', '8', '1971-04-23', 'Heroin', '5', '12', '23', '26', '1984-03-27', 'Marijuana', '27', '27', '19', '18', '1980-03-22', NULL, NULL, NULL, NULL, NULL, NULL, 'Methamphetamines', '24', '18', '19', '22', '1995-03-06', 'Opioids (pain killers)', '22', '9', '7', '23', '2017-10-05', NULL, NULL, NULL, NULL, NULL, NULL, 'Tranquilizers', '16', '22', '15', '2', '1994-01-01', 'no', NULL, '2023-01-19 03:07:30', '2023-01-19 03:07:30'),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, 'Ecstasy', '15', '13', '11', '22', '1985-06-10', 'Hallucinogens (LSD)', '23', '4', '18', '8', '1971-04-23', 'Heroin', '5', '12', '23', '26', '1984-03-27', 'Marijuana', '27', '27', '19', '18', '1980-03-22', NULL, NULL, NULL, NULL, NULL, NULL, 'Methamphetamines', '24', '18', '19', '22', '1995-03-06', 'Opioids (pain killers)', '22', '9', '7', '23', '2017-10-05', NULL, NULL, NULL, NULL, NULL, NULL, 'Tranquilizers', '16', '22', '15', '2', '1994-01-01', 'no', NULL, '2023-01-19 03:07:55', '2023-01-19 03:07:55'),
(6, 6, 'Cocaine', '3', '17', '9', '28', '1978-10-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Heroin', '20', '15', '24', '1', '1985-12-27', 'Marijuana', '18', '19', '10', '22', '2021-06-29', NULL, NULL, NULL, NULL, NULL, NULL, 'Methamphetamines', '8', '11', '3', '1', '2001-11-08', 'Opioids (pain killers)', '16', '10', '1', '24', '1982-07-19', 'Stimulants (pills)', '7', '24', '9', '7', '2012-08-02', 'Tranquilizers', '25', '10', '28', '17', '2012-01-09', 'no', NULL, '2023-01-19 03:08:13', '2023-01-19 03:08:13'),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marijuana', '1', '20', '27', '9', '1995-04-06', 'Methadone/Suboxone', '14', '21', '25', '2', '1989-01-20', 'Methamphetamines', '27', '7', '11', '10', '2020-01-06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tranquilizers', '12', '17', '9', '14', '1985-01-23', 'yes', 'Eos minus delectus', '2023-01-19 03:08:45', '2023-01-19 03:08:45'),
(8, 8, NULL, NULL, NULL, NULL, NULL, NULL, 'Ecstasy', '16', '3', '15', '3', '1974-03-13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marijuana', '3', '13', '14', '3', '1989-05-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Opioids (pain killers)', '9', '20', '3', '12', '1979-11-25', 'Stimulants (pills)', '1', '2', '22', '15', '1975-05-15', 'Tranquilizers', '28', '26', '2', '8', '2004-03-24', 'no', NULL, '2023-01-24 03:56:44', '2023-01-24 03:56:44'),
(9, 9, NULL, NULL, NULL, NULL, NULL, NULL, 'Ecstasy', '4', '1', '4', '25', '1998-07-15', 'Hallucinogens (LSD)', '23', '25', '20', '3', '1982-03-04', 'Heroin', '3', '4', '1', '22', '1972-06-11', 'Marijuana', '24', '21', '13', '24', '2015-08-14', 'Methadone/Suboxone', '7', '15', '16', '14', '2020-07-29', 'Methamphetamines', '24', '10', '1', '7', '2021-11-23', NULL, NULL, NULL, NULL, NULL, NULL, 'Stimulants (pills)', '13', '6', '14', '14', '1993-08-13', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, '2023-01-24 06:55:05', '2023-01-24 06:55:05'),
(10, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hallucinogens (LSD)', '7', '25', '11', '17', '1998-10-09', 'Heroin', '13', '25', '23', '27', '2012-01-14', NULL, NULL, NULL, NULL, NULL, NULL, 'Methadone/Suboxone', '20', '23', '8', '16', '1990-04-01', 'Methamphetamines', '2', '10', '25', '15', '1971-05-23', NULL, NULL, NULL, NULL, NULL, NULL, 'Stimulants (pills)', '27', '11', '21', '25', '2009-08-09', 'Tranquilizers', '25', '11', '10', '16', '2003-10-18', 'no', NULL, '2023-01-25 02:04:11', '2023-01-25 02:04:11'),
(11, 11, 'Cocaine', '6', '10', '26', '3', '1999-06-29', 'Ecstasy', '17', '15', '25', '19', '1994-09-29', NULL, NULL, NULL, NULL, NULL, NULL, 'Heroin', '28', '21', '8', '24', '1994-09-16', 'Marijuana', '7', '8', '8', '13', '1979-07-12', NULL, NULL, NULL, NULL, NULL, NULL, 'Methamphetamines', '3', '9', '8', '20', '1973-01-22', 'Opioids (pain killers)', '4', '8', '27', '16', '2018-09-14', 'Stimulants (pills)', '26', '28', '14', '13', '2013-11-12', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, '2023-01-25 02:06:32', '2023-01-25 02:06:32'),
(12, 12, 'Cocaine', '22', '21', '15', '6', '1993-02-12', NULL, NULL, NULL, NULL, NULL, NULL, 'Hallucinogens (LSD)', '2', '11', '2', '27', '1996-11-06', NULL, NULL, NULL, NULL, NULL, NULL, 'Marijuana', '22', '16', '4', '11', '2010-01-19', NULL, NULL, NULL, NULL, NULL, NULL, 'Methamphetamines', '21', '17', '5', '26', '2011-05-07', 'Opioids (pain killers)', '24', '24', '1', '12', '1990-02-07', 'Stimulants (pills)', '20', '9', '16', '1', '2021-03-21', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, '2023-01-27 01:36:39', '2023-01-27 01:36:39'),
(13, 13, 'Cocaine', '11', '25', '12', '27', '1994-07-24', 'Ecstasy', '26', '25', '23', '21', '1975-01-11', 'Hallucinogens (LSD)', '1', '5', '26', '11', '1997-05-25', 'Heroin', '25', '26', '27', '16', '2002-08-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Stimulants (pills)', '14', '22', '8', '19', '1994-06-27', 'Tranquilizers', '16', '4', '11', '22', '2004-05-25', 'no', NULL, '2023-01-27 02:28:49', '2023-01-27 02:28:49'),
(14, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Methadone/Suboxone', '3', '21', '26', '24', '1979-03-13', 'Methamphetamines', '16', '10', '20', '20', '1973-07-20', 'Opioids (pain killers)', '28', '18', '20', '26', '1977-06-29', 'Stimulants (pills)', '22', '24', '4', '20', '1996-12-30', 'Tranquilizers', '9', '16', '24', '18', '1972-07-04', 'yes', 'Sed cupidatat non fu', '2023-01-27 02:50:33', '2023-01-27 02:50:33'),
(15, 15, NULL, NULL, NULL, NULL, NULL, NULL, 'Ecstasy', '5', '17', '15', '13', '2000-02-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tranquilizers', '7', '21', '1', '8', '2000-12-24', 'yes', 'Quis distinctio Dol', '2023-01-27 02:54:05', '2023-01-27 02:54:05'),
(16, 16, 'Cocaine', '1', '14', '4', '12', '1978-01-26', 'Ecstasy', '13', '14', '9', '21', '2006-04-22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Opioids (pain killers)', '19', '21', '21', '23', '2013-07-13', NULL, NULL, NULL, NULL, NULL, NULL, 'Tranquilizers', '7', '1', '22', '4', '2009-01-14', 'no', NULL, '2023-01-27 23:14:38', '2023-01-27 23:14:38'),
(17, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hallucinogens (LSD)', '1', '12', '20', '12', '1990-12-13', 'Heroin', '24', '4', '15', '1', '2003-10-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Methamphetamines', '2', '18', '22', '23', '1984-01-14', 'Opioids (pain killers)', '17', '23', '20', '4', '2018-06-13', NULL, NULL, NULL, NULL, NULL, NULL, 'Tranquilizers', '22', '11', '17', '2', '1978-06-09', 'yes', 'Ut sunt enim veniam', '2023-01-27 23:18:18', '2023-01-27 23:18:18'),
(18, 18, NULL, NULL, NULL, NULL, NULL, NULL, 'Ecstasy', '4', '16', '5', '17', '2006-02-15', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marijuana', '15', '9', '19', '17', '2019-07-11', 'Methadone/Suboxone', '26', '24', '26', '21', '2009-09-25', NULL, NULL, NULL, NULL, NULL, NULL, 'Opioids (pain killers)', '14', '11', '16', '10', '2019-05-04', 'Stimulants (pills)', '11', '2', '19', '26', '1979-01-18', 'Tranquilizers', '2', '3', '4', '10', '1996-10-25', 'yes', 'Reiciendis sit esse', '2023-01-27 23:19:23', '2023-01-27 23:19:23'),
(19, 19, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hallucinogens (LSD)', '23', '26', '16', '15', '1993-09-04', 'Heroin', '11', '22', '12', '20', '2020-06-06', 'Marijuana', '20', '17', '16', '18', '1999-09-25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Opioids (pain killers)', '25', '24', '20', '23', '2003-06-23', 'Stimulants (pills)', '2', '17', '5', '21', '2006-07-26', 'Tranquilizers', '6', '11', '1', '11', '2009-02-15', 'no', NULL, '2023-01-27 23:25:27', '2023-01-27 23:25:27'),
(20, 20, 'Cocaine', '17', '18', '11', '14', '1984-09-29', 'Ecstasy', '18', '7', '19', '24', '2003-09-18', 'Hallucinogens (LSD)', '26', '26', '16', '16', '2018-04-08', 'Heroin', '14', '4', '21', '27', '2001-07-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Opioids (pain killers)', '14', '21', '5', '10', '1998-12-23', 'Stimulants (pills)', '25', '24', '8', '10', '2021-11-08', 'Tranquilizers', '22', '8', '28', '16', '2009-04-08', 'yes', 'Nemo voluptates exce', '2023-01-27 23:26:53', '2023-01-27 23:26:53'),
(21, 21, 'Cocaine', '16', '24', '5', '9', '2017-01-16', NULL, NULL, NULL, NULL, NULL, NULL, 'Hallucinogens (LSD)', '17', '5', '23', '15', '1982-01-01', 'Heroin', '13', '28', '3', '13', '2001-08-10', NULL, NULL, NULL, NULL, NULL, NULL, 'Methadone/Suboxone', '25', '17', '21', '10', '1995-07-04', NULL, NULL, NULL, NULL, NULL, NULL, 'Opioids (pain killers)', '18', '3', '17', '7', '1971-04-16', 'Stimulants (pills)', '21', '9', '16', '13', '2011-01-19', NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'Qui rerum occaecat v', '2023-01-27 23:27:29', '2023-01-27 23:27:29'),
(22, 22, 'Cocaine', '8', '12', '15', '24', '1972-03-02', 'Ecstasy', '16', '13', '25', '16', '1997-11-24', 'Hallucinogens (LSD)', '3', '3', '13', '18', '2000-03-26', NULL, NULL, NULL, NULL, NULL, NULL, 'Marijuana', '8', '18', '1', '17', '2014-05-29', 'Methadone/Suboxone', '3', '13', '22', '6', '1970-12-07', NULL, NULL, NULL, NULL, NULL, NULL, 'Opioids (pain killers)', '9', '4', '8', '25', '1994-02-27', 'Stimulants (pills)', '5', '7', '2', '8', '1980-03-26', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, '2023-01-27 23:29:51', '2023-01-27 23:29:51'),
(23, 23, 'Cocaine', '24', '18', '27', '8', '2016-02-01', 'Ecstasy', '18', '7', '2', '11', '1999-12-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marijuana', '25', '7', '8', '25', '1997-07-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Stimulants (pills)', '27', '26', '3', '23', '1973-08-31', NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, '2023-01-27 23:32:44', '2023-01-27 23:32:44'),
(24, 24, 'Cocaine', '13', '16', '1', '16', '1988-07-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Heroin', '25', '17', '25', '27', '1979-12-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Opioids (pain killers)', '23', '2', '8', '15', '2015-01-10', 'Stimulants (pills)', '26', '21', '13', '13', '2011-02-06', 'Tranquilizers', '2', '7', '18', '13', '2003-06-01', 'yes', 'Atque ipsum occaecat', '2023-01-27 23:33:16', '2023-01-27 23:33:16'),
(25, 25, 'Cocaine', '24', '19', '21', '27', '2012-07-07', NULL, NULL, NULL, NULL, NULL, NULL, 'Hallucinogens (LSD)', '9', '20', '5', '27', '1993-09-30', 'Heroin', '10', '17', '10', '21', '1974-09-28', 'Marijuana', '15', '15', '22', '15', '2007-09-12', 'Methadone/Suboxone', '26', '21', '5', '4', '1988-08-13', 'Methamphetamines', '11', '17', '24', '2', '1982-08-10', 'Opioids (pain killers)', '1', '23', '16', '21', '1997-07-20', 'Stimulants (pills)', '11', '23', '9', '26', '1986-02-17', 'Tranquilizers', '27', '27', '6', '21', '2019-12-01', 'no', NULL, '2023-01-27 23:34:18', '2023-01-27 23:34:18'),
(26, 26, 'Cocaine', '18', '5', '11', '21', '1983-01-08', 'Ecstasy', '1', '7', '13', '20', '2001-09-30', 'Hallucinogens (LSD)', '10', '1', '22', '5', '2008-10-24', 'Heroin', '21', '22', '28', '13', '1981-08-13', 'Marijuana', '1', '7', '15', '17', '1998-08-22', 'Methadone/Suboxone', '18', '27', '14', '12', '1982-01-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Stimulants (pills)', '18', '17', '15', '11', '1981-07-27', 'Tranquilizers', '15', '23', '10', '1', '1991-03-18', 'no', NULL, '2023-01-27 23:35:09', '2023-01-27 23:35:09'),
(27, 27, NULL, NULL, NULL, NULL, NULL, NULL, 'Ecstasy', '11', '7', '28', '3', '1996-02-19', 'Hallucinogens (LSD)', '13', '12', '19', '2', '2003-10-04', 'Heroin', '4', '10', '9', '9', '2014-11-04', 'Marijuana', '7', '26', '25', '18', '1991-11-24', 'Methadone/Suboxone', '15', '20', '7', '17', '1992-11-29', NULL, NULL, NULL, NULL, NULL, NULL, 'Opioids (pain killers)', '24', '5', '2', '20', '1987-03-27', NULL, NULL, NULL, NULL, NULL, NULL, 'Tranquilizers', '25', '2', '28', '7', '1971-02-09', 'yes', 'Esse id ratione sin', '2023-01-28 02:29:43', '2023-01-28 02:29:43'),
(28, 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marijuana', '21', '10', '9', '10', '2021-01-04', 'Methadone/Suboxone', '19', '9', '6', '12', '1985-04-18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Stimulants (pills)', '25', '3', '15', '16', '1980-03-06', 'Tranquilizers', '25', '16', '1', '19', '1982-02-13', 'no', NULL, '2023-01-28 02:32:05', '2023-01-28 02:32:05'),
(29, 29, NULL, NULL, NULL, NULL, NULL, NULL, 'Ecstasy', '19', '6', '18', '17', '1992-02-01', 'Hallucinogens (LSD)', '27', '24', '19', '1', '2007-04-29', 'Heroin', '16', '25', '19', '21', '2000-10-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Methamphetamines', '2', '5', '12', '11', '2000-11-01', NULL, NULL, NULL, NULL, NULL, NULL, 'Stimulants (pills)', '6', '14', '23', '2', '1980-05-23', 'Tranquilizers', '10', '6', '17', '5', '1970-02-17', 'yes', 'Autem libero quibusd', '2023-01-28 02:46:15', '2023-01-28 02:46:15'),
(30, 30, NULL, NULL, NULL, NULL, NULL, NULL, 'Ecstasy', '18', '16', '5', '15', '2000-02-16', NULL, NULL, NULL, NULL, NULL, NULL, 'Heroin', '13', '10', '17', '16', '1993-03-23', NULL, NULL, NULL, NULL, NULL, NULL, 'Methadone/Suboxone', '17', '26', '21', '15', '1985-07-20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Stimulants (pills)', '23', '1', '23', '16', '1979-11-18', 'Tranquilizers', '26', '20', '26', '14', '1987-12-10', 'no', NULL, '2023-01-28 02:56:22', '2023-01-28 02:56:22'),
(31, 31, 'Cocaine', '19', '12', '28', '1', '1986-09-29', 'Ecstasy', '3', '1', '1', '28', '1978-08-10', 'Hallucinogens (LSD)', '5', '26', '1', '23', '1992-06-21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Methadone/Suboxone', '17', '14', '28', '26', '1984-07-24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'Consequatur consect', '2023-01-28 03:00:52', '2023-01-28 03:00:52'),
(32, 32, NULL, NULL, NULL, NULL, NULL, NULL, 'Ecstasy', '22', '2', '11', '1', '1971-02-18', 'Hallucinogens (LSD)', '27', '25', '20', '25', '1988-07-08', NULL, NULL, NULL, NULL, NULL, NULL, 'Marijuana', '1', '19', '5', '8', '1980-02-22', 'Methadone/Suboxone', '17', '25', '6', '20', '1994-02-23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tranquilizers', '22', '26', '25', '17', '2016-02-18', 'yes', 'At recusandae Est', '2023-01-28 03:30:25', '2023-01-28 03:30:25'),
(33, 33, 'Cocaine', '4', '15', '27', '23', '1988-10-31', 'Ecstasy', '5', '9', '24', '11', '2016-08-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Methadone/Suboxone', '7', '11', '18', '27', '1993-11-06', 'Methamphetamines', '24', '16', '15', '20', '1991-01-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'Qui totam consequunt', '2023-01-28 03:31:56', '2023-01-28 03:31:56'),
(34, 34, 'Cocaine', '2', '4', '2', '1', '2000-05-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Heroin', '5', '1', '15', '13', '1989-06-04', NULL, NULL, NULL, NULL, NULL, NULL, 'Methadone/Suboxone', '16', '24', '27', '27', '1992-09-16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tranquilizers', '19', '20', '5', '16', '2021-04-17', 'yes', 'Nulla velit ut repu', '2023-01-28 03:34:46', '2023-01-28 03:34:46'),
(35, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hallucinogens (LSD)', '13', '19', '4', '11', '1974-09-10', 'Heroin', '26', '15', '3', '22', '2013-12-21', 'Marijuana', '8', '19', '19', '22', '2011-11-19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tranquilizers', '20', '17', '19', '25', '1977-04-10', 'yes', 'Illo consectetur ea', '2023-01-28 03:41:44', '2023-01-28 03:41:44'),
(36, 36, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Methadone/Suboxone', '9', '23', '12', '12', '2008-06-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'Mollitia odio quis v', '2023-01-28 03:45:55', '2023-01-28 03:45:55'),
(37, 37, 'Cocaine', '19', '24', '11', '22', '1989-06-25', 'Ecstasy', '19', '25', '16', '2', '2009-09-15', 'Hallucinogens (LSD)', '27', '24', '3', '5', '2002-04-12', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Methadone/Suboxone', '20', '23', '15', '15', '2004-01-28', 'Methamphetamines', '23', '27', '22', '27', '1995-11-19', NULL, NULL, NULL, NULL, NULL, NULL, 'Stimulants (pills)', '12', '2', '20', '16', '2008-09-17', NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'Recusandae Eum numq', '2023-01-28 03:57:12', '2023-01-28 03:57:12'),
(38, 38, 'Cocaine', '6', '18', '11', '18', '2000-06-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Marijuana', '7', '2', '16', '20', '2004-12-03', 'Methadone/Suboxone', '24', '24', '17', '10', '1996-08-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Stimulants (pills)', '6', '9', '10', '19', '2010-05-18', 'Tranquilizers', '1', '14', '2', '26', '2004-12-29', 'yes', 'Rerum nisi dolorem e', '2023-02-11 01:47:17', '2023-02-11 01:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `intake_forms`
--

CREATE TABLE `intake_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_preferred_therapist_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_street` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_county` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emergency_relationship` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_of_service` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos_police_departement_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos_police_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pos_police_address` text COLLATE utf8mb4_unicode_ci,
  `di_date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `di_legal_gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `di_legal_gender_identity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `di_pronounce` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `di_sexual_orientation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `di_race` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `di_marital_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pp_complaint_or_issue` text COLLATE utf8mb4_unicode_ci,
  `pp_previously_suffered` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pp_diagnosed` text COLLATE utf8mb4_unicode_ci,
  `current_symtoms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cs_other_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cs_other_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cs_therapy_past` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `csi_radio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mh_current_suicidal_ideations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `csp_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mh_current_suicidal_plan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cshb_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mh_current_self_harming_behaviors` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hsoi_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mh_history_of_suicidal_ideations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `psa_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mh_previous_suicide_attempts` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hosh_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mh_history_of_self_harming` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `su_nicotine_caffeine` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `su_caffeinated_beverages_per_day` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohole_consume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alcohole_drinks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `who_told_you` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ai_occupation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ai_employer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ai_what_you_do` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_married_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_married` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_divorced_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_divorced` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_rwyp_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divorce_or_death_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_many` int(11) DEFAULT NULL,
  `how_many_question` text COLLATE utf8mb4_unicode_ci,
  `divorce_death_1` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divorce_death_2` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divorce_death_3` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divorce_death_4` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divorce_death_5` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_relationship_with_your_partner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spirituality` text COLLATE utf8mb4_unicode_ci,
  `adopted_radio` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adopted_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biological_parents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_of_parents` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parents_remarry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_mother_living_radio` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_date_of_death` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_with_mother` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_living_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `father_date_of_death` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_with_father` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_conditions` text COLLATE utf8mb4_unicode_ci,
  `mental_illness` text COLLATE utf8mb4_unicode_ci,
  `anything_else_know_therapist` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intake_forms`
--

INSERT INTO `intake_forms` (`id`, `user_id`, `team_member_id`, `client_first_name`, `client_last_name`, `client_full_name`, `client_preferred_therapist_name`, `client_phone`, `client_email`, `client_address`, `client_street`, `client_county`, `client_city`, `client_state`, `client_zip`, `emergency_name`, `emergency_phone`, `emergency_relationship`, `place_of_service`, `pos_police_departement_name`, `pos_police_phone`, `pos_police_address`, `di_date_of_birth`, `di_legal_gender`, `di_legal_gender_identity`, `di_pronounce`, `di_sexual_orientation`, `di_race`, `di_marital_status`, `pp_complaint_or_issue`, `pp_previously_suffered`, `pp_diagnosed`, `current_symtoms`, `cs_other_1`, `cs_other_2`, `cs_therapy_past`, `csi_radio`, `mh_current_suicidal_ideations`, `csp_radio`, `mh_current_suicidal_plan`, `cshb_radio`, `mh_current_self_harming_behaviors`, `hsoi_radio`, `mh_history_of_suicidal_ideations`, `psa_radio`, `mh_previous_suicide_attempts`, `hosh_radio`, `mh_history_of_self_harming`, `su_nicotine_caffeine`, `su_caffeinated_beverages_per_day`, `alcohole_consume`, `alcohole_drinks`, `who_told_you`, `ai_occupation`, `ai_employer`, `ai_what_you_do`, `m_married_radio`, `m_married`, `m_divorced_radio`, `m_divorced`, `m_rwyp_radio`, `divorce_or_death_date`, `how_many`, `how_many_question`, `divorce_death_1`, `divorce_death_2`, `divorce_death_3`, `divorce_death_4`, `divorce_death_5`, `m_relationship_with_your_partner`, `religion`, `spirituality`, `adopted_radio`, `adopted_age`, `biological_parents`, `relationship_of_parents`, `parents_remarry`, `is_mother_living_radio`, `mother_date_of_death`, `relationship_with_mother`, `father_living_radio`, `father_date_of_death`, `relationship_with_father`, `birth_order`, `medical_conditions`, `mental_illness`, `anything_else_know_therapist`, `is_active`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, 'Chaim', 'Roberson', 'Chaim Roberson', 'Serina Terry', '+1 (802) 742-5138', 'cibanatah@mailinator.com', 'Porro error cupidata', NULL, 'Haskell County', 'The Hills', 'Kentucky', '75935', 'Dana Rosario', '+1 (938) 465-5001', '16', 'Fort Worth, TX', NULL, NULL, NULL, '2002-01-09', 'male', 'others', '19', 'Gay', 'Hawaiian Native/Pacific Islander', 'divorced', 'Eum non ea incidunt', 'no', 'Quibusdam velit in', '[\"1\",\"3\",\"4\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\",\"15\",\"16\",\"17\",\"18\",\"19\",\"21\"]', '21', '22', NULL, 'yes', 'Deleniti facere aut', 'no', NULL, NULL, 'Magna ipsum maiores', 'no', NULL, 'yes', 'Omnis qui et aut ab', 'no', NULL, '25', '12', 'More than 5 times per week', '1 or 2', 'Nisi cupiditate aut', '18', '6', 'Similique consequunt', 'yes', '2007-08-24', 'no', NULL, 'no', '[\"2014-06-15\"]', 4, '[\"1\"]', 'divorce', NULL, NULL, NULL, NULL, 'Excellent', 'Latter-Day Saints', 'Sed quibusdam eaque', 'no', NULL, NULL, NULL, 'Separated', 'no', '1971-01-17', 'Poor', 'no', '1994-12-17', 'Fair', '28', 'Irure voluptatibus u', 'Aut praesentium nequ', 'Quidem necessitatibu', 1, '2023-01-19 03:06:57', '2023-01-19 03:06:57'),
(4, NULL, NULL, 'Baker', 'Wallace', 'Baker Wallace', 'Ignatius Ramos', '+1 (501) 883-6001', 'kyqorarid@mailinator.com', 'Sed quia dolore volu', NULL, 'Coke County', 'Midway South', 'United States Minor Outlying Islands', '78100', 'Craig Crosby', '+1 (647) 752-4064', '25', 'Telehealth', NULL, NULL, NULL, '1979-06-16', 'male', 'Female', '25', 'Asexual', 'Asian', 'divorced', 'Velit eos optio ni', 'yes', 'Dignissimos voluptat', '[\"5\",\"6\",\"9\",\"10\",\"14\",\"15\",\"16\",\"18\",\"19\",\"20\"]', '10', NULL, NULL, 'yes', 'Et aut sequi officia', 'yes', 'Qui sequi assumenda', NULL, 'Laborum Quas asperi', 'yes', 'Aliquid voluptas deb', 'no', NULL, 'yes', 'Placeat cupidatat t', '13', '24', '1 to 2 times per week', 'More than 5 drinks', 'Explicabo Qui ipsam', '27', '8', 'Porro magna in expli', 'yes', '2012-02-22', 'yes', '2003-02-24', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'N/A', 'Catholic', 'Qui mollit labore do', 'no', NULL, NULL, NULL, 'Married', 'yes', NULL, 'Excellent', 'no', '1971-04-11', 'Excellent', '4', 'Quo porro rem dicta', 'Qui ex culpa ea et', 'Amet perferendis to', 1, '2023-01-19 03:07:30', '2023-01-19 03:07:30'),
(5, NULL, NULL, 'Baker', 'Wallace', 'Baker Wallace', 'Ignatius Ramos', '+1 (501) 883-6001', 'kyqorarid@mailinator.com', 'Sed quia dolore volu', NULL, 'Coke County', 'Midway South', 'United States Minor Outlying Islands', '78100', 'Craig Crosby', '+1 (647) 752-4064', '25', 'Telehealth', NULL, NULL, NULL, '1979-06-16', 'male', 'Female', '25', 'Asexual', 'Asian', 'divorced', 'Velit eos optio ni', 'yes', 'Dignissimos voluptat', '[\"5\",\"6\",\"9\",\"10\",\"14\",\"15\",\"16\",\"18\",\"19\",\"20\"]', '10', NULL, NULL, 'yes', 'Et aut sequi officia', 'yes', 'Qui sequi assumenda', NULL, 'Laborum Quas asperi', 'yes', 'Aliquid voluptas deb', 'no', NULL, 'yes', 'Placeat cupidatat t', '13', '24', '1 to 2 times per week', 'More than 5 drinks', 'Explicabo Qui ipsam', '27', '8', 'Porro magna in expli', 'yes', '2012-02-22', 'yes', '2003-02-24', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'N/A', 'Catholic', 'Qui mollit labore do', 'no', NULL, NULL, NULL, 'Married', 'yes', NULL, 'Excellent', 'no', '1971-04-11', 'Excellent', '4', 'Quo porro rem dicta', 'Qui ex culpa ea et', 'Amet perferendis to', 1, '2023-01-19 03:07:55', '2023-01-19 03:07:55'),
(6, NULL, NULL, 'Mark', 'Bray', 'Mark Bray', 'Alvin Hooper', '+1 (163) 407-8564', 'huhera@mailinator.com', 'Praesentium placeat', NULL, 'McLennan County', 'Lackland Air Force Base', 'Arkansas', '15086', 'Uta Cooke', '+1 (289) 533-2422', '5', 'Fort Worth, TX', NULL, NULL, NULL, '2022-05-24', 'female', 'others', '6', 'Choose Not to Disclose', 'Black/African-American', 'separated', 'Aut harum ipsum prov', 'no', 'Ullam reprehenderit', '[\"1\",\"2\",\"9\",\"16\"]', NULL, NULL, NULL, 'yes', NULL, 'no', NULL, NULL, 'Nisi ipsum esse prov', 'no', NULL, 'yes', 'Quod fuga Sed ab qu', 'no', NULL, '2', '7', 'none', '', 'Tenetur doloremque f', '10', '7', 'Vitae do corporis ex', 'yes', '2015-10-07', 'yes', '2014-10-30', 'yes', '[\"2006-07-16\"]', 68, '[\"1\"]', 'death', NULL, NULL, NULL, NULL, 'Good', 'Hindu', 'Quas quidem velit de', 'no', NULL, NULL, NULL, 'Divorced', 'yes', NULL, 'Poor', 'yes', NULL, 'Fair', '7', 'Doloremque eum volup', 'Quo similique vel mo', 'Amet aute enim reic', 1, '2023-01-19 03:08:13', '2023-01-19 03:08:13'),
(7, NULL, NULL, 'Adrian', 'Macdonald', 'Adrian Macdonald', 'Rebekah Stout', '+1 (126) 303-8115', 'guvyk@mailinator.com', 'Ab in quidem quis od', NULL, 'Waller County', 'South Padre Island', 'Michigan', '45484', 'Yardley Sweeney', '+1 (144) 108-2529', '3', 'Fort Worth, TX', NULL, NULL, NULL, '2016-07-30', 'others', 'Genderqueer', '3', 'Heterosexual', 'American Indian/Alaska Native', 'common-law', 'Quis aut est nisi i', 'no', 'Incididunt possimus', '[\"4\",\"8\",\"10\",\"13\",\"14\",\"15\",\"17\",\"18\",\"19\",\"21\"]', '14', '18', NULL, 'yes', 'Ut nesciunt nesciun', 'no', NULL, NULL, 'Consequatur ut obcae', 'yes', 'Sint explicabo Non', 'no', NULL, 'no', NULL, '5', '12', 'none', '', 'Aute corrupti enim', '4', '9', 'Aspernatur non omnis', 'no', NULL, 'yes', '1985-12-18', 'yes', '[\"1990-07-08\"]', 82, '[\"2\",\"4\"]', 'divorce', NULL, NULL, NULL, NULL, 'N/A', 'Protestant', 'Proident architecto', 'no', NULL, NULL, NULL, 'Married', 'no', '1992-03-11', 'Fair', 'no', '2015-06-01', 'Good', '13', 'Aut voluptatem Ipsu', 'Neque esse provident', 'Aut saepe quo magni', 1, '2023-01-19 03:08:45', '2023-01-19 03:08:45'),
(8, NULL, NULL, 'Sacha', 'Pope', 'Sacha Pope', 'Rafael Ramos', '+1 (978) 392-2902', 'vimenaw@mailinator.com', 'Deserunt magni asper', NULL, 'Zavala County', 'Donna', 'Alaska', '33987', 'Uma Oneil', '+1 (693) 823-3168', '12', 'Fort Worth, TX', NULL, NULL, NULL, '1988-11-15', 'transMF', 'Female', '1', 'Others', 'Asian', 'common-law', 'Nulla tempor ea ab a', 'no', 'Et sequi et et aliqu', '[\"2\",\"3\",\"5\",\"7\",\"8\",\"9\",\"10\",\"12\",\"14\",\"17\",\"19\"]', '26', NULL, NULL, 'no', 'Culpa veniam sit vo', 'no', NULL, NULL, NULL, 'no', NULL, 'no', NULL, 'yes', 'Et reprehenderit vi', '27', '1', '1 to 2 times per week', 'More than 5 drinks', 'Exercitationem ab of', '12', '5', 'Aliquip atque consec', 'no', NULL, 'no', NULL, 'yes', '[\"2000-01-30\"]', 53, '[\"1\",\"4\"]', 'divorce', NULL, NULL, NULL, NULL, 'N/A', 'Christian', 'Qui ad non nostrud d', 'yes', '28', NULL, '26', 'Divorced', 'no', '1985-11-16', 'Good', 'yes', NULL, 'Good', '25', 'Ducimus quaerat iur', 'In aperiam iusto vol', 'Aliquip consectetur', 1, '2023-01-24 03:56:44', '2023-01-24 03:56:44'),
(9, NULL, NULL, 'Mechelle', 'Collier', 'Mechelle Collier', 'Wallace Donovan', '+1 (862) 634-8017', 'lyxysinir@mailinator.com', 'Est tempora magnam a', NULL, 'Runnels County', 'Irion County', 'Virginia', '10174', 'Deacon Hinton', '+1 (936) 705-5023', '2', 'Hattiesburg, MS', NULL, NULL, NULL, '1987-06-24', 'others', 'Genderqueer', '10', 'Gay', 'Asian', 'single', 'Laborum Voluptatibu', 'yes', 'Amet atque molestia', '[\"1\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"12\",\"14\",\"17\",\"18\",\"19\",\"21\"]', '2', '11', NULL, 'yes', 'Et necessitatibus el', 'yes', 'Consequatur Itaque', NULL, 'Qui minima est eum o', 'no', NULL, 'no', NULL, 'no', NULL, '14', '26', '1 to 2 times per week', 'More than 5 drinks', 'Incidunt quia ipsum', '8', '9', 'Provident et aperia', 'no', NULL, 'yes', '1992-12-14', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'N/A', 'Buddhist', 'Laboris quos tempor', 'no', NULL, NULL, NULL, 'Step Parents', 'no', '1981-05-13', 'Good', 'no', '2007-09-05', 'Fair', '17', 'In aute dolorem nobi', 'Voluptatem ratione', 'Aut qui similique qu', 1, '2023-01-24 06:55:05', '2023-01-24 06:55:05'),
(10, NULL, NULL, 'Devin', 'Rollins', 'Devin Rollins', 'Zeph Hurley', '+1 (902) 881-2925', 'xypy@mailinator.com', 'At cupiditate ea ea', NULL, 'Culberson County', 'Carthage', 'California', '16818', 'Rinah Hamilton', '+1 (359) 972-3103', '23', 'Fort Worth, TX', NULL, NULL, NULL, '1977-09-10', 'female', 'Questioning', '19', 'Pansexual', 'American Indian/Alaska Native', 'partners', 'At ex velit fuga Q', 'yes', 'Atque libero et dolo', '[\"2\",\"3\",\"7\",\"9\",\"10\",\"12\",\"13\",\"14\",\"15\",\"18\",\"21\"]', '26', '13', NULL, 'no', NULL, 'no', NULL, NULL, NULL, 'yes', 'Sit sunt quis cum qu', 'no', NULL, 'no', NULL, '25', '13', '3 to 4 times per week', '1 or 2', 'Sint dolore voluptat', '25', '3', 'Est sed irure facil', 'no', NULL, 'yes', '1973-02-15', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Poor', 'Agnostic', 'Autem est voluptate', 'no', NULL, NULL, NULL, 'Separated', 'yes', NULL, 'Fair', 'yes', NULL, 'Poor', '19', 'Mollit ea vel sed qu', 'Cupidatat sunt quia', 'Sunt odit libero pra', 1, '2023-01-25 02:04:11', '2023-01-25 02:04:11'),
(11, NULL, NULL, 'Hannah', 'Hodges', 'Hannah Hodges', 'Wendy Stanton', '+1 (904) 485-6442', 'pyvonoq@mailinator.com', 'In deserunt molestia', NULL, 'Coleman County', 'Uvalde County', 'Palmyra Atoll', '78336', 'Buffy Barrera', '+1 (648) 934-8557', '26', 'Hattiesburg, MS', NULL, NULL, NULL, '1976-06-24', 'male', 'Choose Not to Disclose', '17', 'Others', 'American Indian/Alaska Native', 'single', 'Ipsa veniam ration', 'yes', 'Et reiciendis ipsum', '[\"2\",\"3\",\"4\",\"9\",\"11\",\"12\",\"17\",\"20\"]', NULL, NULL, NULL, 'yes', NULL, 'no', NULL, NULL, 'Pariatur Rerum dolo', 'yes', 'Ut laborum in cupida', 'no', NULL, 'yes', 'Minim incidunt natu', '7', '13', 'none', '', 'Quia est minus sunt', '28', '6', 'Dolore fugit esse', 'no', NULL, 'yes', '1985-11-02', 'yes', '[\"1998-03-04\"]', 71, '[\"1\",\"2\"]', 'divorce', NULL, NULL, NULL, NULL, 'N/A', 'Catholic', 'Architecto ut eligen', 'yes', '16', NULL, '24', 'Separated', 'no', '1995-12-07', 'Good', 'no', '2005-09-04', 'Fair', '5', 'Consequatur eu quo u', 'Elit iusto magni na', 'Adipisicing nulla iu', 1, '2023-01-25 02:06:32', '2023-01-25 02:06:32'),
(12, NULL, NULL, 'Lewis', 'Cline', 'Lewis Cline', 'Christine Jimenez', '+1 (731) 417-4409', 'hyrelip@mailinator.com', 'Sit nesciunt vel a', NULL, 'Coryell County', 'Greatwood', 'Montana', '27232', 'Tiger Hanson', '+1 (448) 844-1605', '6', 'Hattiesburg, MS', NULL, NULL, NULL, '2002-08-02', 'male', 'Questioning', '2', 'Choose Not to Disclose', 'Asian', 'partners', 'Magnam in fugit eum', 'no', 'Iure harum consequat', '[\"2\",\"3\",\"5\",\"8\",\"9\",\"12\",\"13\",\"14\",\"17\",\"18\"]', '21', NULL, NULL, 'no', 'Eligendi odio esse', 'yes', 'Eos error aut minim', NULL, NULL, 'yes', 'Exercitation ea exer', 'no', NULL, 'no', NULL, '6', '28', '3 to 4 times per week', 'More than 5 drinks', 'Voluptate deserunt a', '16', '3', 'Quia elit quaerat e', 'no', NULL, 'no', NULL, 'yes', '[\"2022-01-14\"]', 7, '[\"3\"]', 'death', NULL, NULL, NULL, NULL, 'Excellent', 'Protestant', 'Voluptatem aut cons', 'no', NULL, NULL, NULL, 'Step Parents', 'no', '2001-11-20', 'Good', 'no', '1991-01-10', 'Excellent', '16', 'Possimus quas alias', 'Enim neque omnis off', 'Recusandae Ad ipsam', 1, '2023-01-27 01:36:39', '2023-01-27 01:36:39'),
(13, NULL, NULL, 'Elaine', 'Goodwin', 'Elaine Goodwin', 'Rafael Oconnor', '+1 (214) 902-1343', 'vigequguxy@mailinator.com', 'Officiis facere quod', NULL, 'Comal County', 'Harper', 'Kentucky', '24077', 'Lance Brennan', '+1 (103) 975-5947', '14', 'Hattiesburg, MS', NULL, NULL, NULL, '2007-10-10', 'female', 'others', '1', 'Bisexual', 'Multiracial', 'separated', 'Molestias voluptate', 'yes', 'Fugiat quis nostrud', '[\"1\",\"3\",\"6\",\"8\",\"9\",\"11\",\"13\",\"14\",\"15\"]', '27', NULL, NULL, 'no', 'Necessitatibus volup', 'no', NULL, NULL, NULL, 'yes', 'Dolore omnis dolor a', 'yes', 'A et minima nostrud', 'no', NULL, '16', '5', '3 to 4 times per week', '3 or 4', 'Quasi non fugiat vel', '16', '19', 'Earum eos dolore ve', 'no', NULL, 'yes', '1979-10-25', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Excellent', 'Jewish', 'Dolore aspernatur ne', 'yes', '5', NULL, '4', 'Divorced', 'no', '1989-05-22', 'Good', 'yes', NULL, 'Poor', '13', 'Harum alias ut aut d', 'Quia laboris quia mo', 'Maxime exercitatione', 1, '2023-01-27 02:28:49', '2023-01-27 02:28:49'),
(14, NULL, NULL, 'Noble', 'Bentley', 'Noble Bentley', 'Channing Munoz', '+1 (367) 701-8993', 'cybu@mailinator.com', 'Dolor ut dolor eaque', NULL, 'Kenedy County', 'Bellaire', 'Hawaii', '73025', 'Kibo Donovan', '+1 (676) 385-9583', '4', 'Hattiesburg, MS', NULL, NULL, NULL, '1974-01-03', 'male', 'Gender Non-conforming', '17', 'Bisexual', 'Hispanic/Latino', 'divorced', 'Sapiente voluptatum', 'no', 'Consequatur sint vol', '[\"5\",\"9\",\"11\",\"12\",\"13\",\"16\",\"17\",\"20\"]', NULL, NULL, NULL, 'no', 'Hic corrupti esse', 'yes', 'Commodi in aperiam q', NULL, NULL, 'yes', 'Dolor sint ipsa sin', 'yes', 'Aut eius quibusdam i', 'yes', 'Est velit consequat', '27', '2', 'More than 5 times per week', '3 or 4', 'Ipsum enim cillum n', '5', '16', 'Ut aliqua Sed dolor', 'no', NULL, 'no', NULL, 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'N/A', 'Hindu', 'Aliquid proident in', 'yes', '3', NULL, '22', 'Divorced', 'yes', NULL, 'Poor', 'no', '2021-03-03', 'Poor', '27', 'Cupiditate iure cons', 'Nobis voluptatem ex', 'Dolorem commodi cupi', 1, '2023-01-27 02:50:33', '2023-01-27 02:50:33'),
(15, NULL, NULL, 'Amery', 'George', 'Amery George', 'Rowan Mccarty', '+1 (989) 652-8553', 'vakas@mailinator.com', 'Est corporis omnis o', NULL, 'Lamar County', 'Hedwig Village', 'Arkansas', '36607', 'Regan Fulton', '+1 (553) 499-1921', '28', 'Telehealth', NULL, NULL, NULL, '1987-12-09', 'male', 'Intersex', '12', 'Asexual', 'Hawaiian Native/Pacific Islander', 'widowed', 'Consectetur vitae l', 'yes', 'Illum hic et repudi', '[\"3\",\"4\",\"5\",\"6\",\"11\",\"12\",\"13\",\"15\",\"16\",\"21\"]', NULL, '2', NULL, 'yes', NULL, 'no', NULL, NULL, 'Eum quod suscipit es', 'no', NULL, 'yes', 'Est aut cupiditate', 'no', NULL, '8', '22', '1 to 2 times per week', '1 or 2', 'Illo neque repellend', '1', '21', 'Rerum fuga Qui nemo', 'no', NULL, 'no', NULL, 'yes', '[\"1992-08-15\"]', 35, '[\"3\",\"4\"]', 'death', NULL, NULL, NULL, NULL, 'N/A', 'Catholic', 'Sed provident quam', 'no', NULL, NULL, NULL, 'Widowed', 'no', '2010-03-27', 'Fair', 'no', '2018-09-02', 'Fair', '16', 'Sint qui eligendi co', 'Voluptatem Ut numqu', 'Aute duis qui evenie', 1, '2023-01-27 02:54:05', '2023-01-27 02:54:05'),
(16, NULL, NULL, 'Raya', 'Horn', 'Raya Horn', 'Buckminster Salinas', '+1 (418) 999-9282', 'tavosyqos@mailinator.com', 'Vitae do error qui t', NULL, 'Kimble County', 'Fort Bliss', 'Alabama', '83396', 'Ginger Dotson', '+1 (686) 663-2621', '12', 'Fort Worth, TX', NULL, NULL, NULL, '1998-12-16', 'female', 'Gender Non-conforming', '8', 'Gay', 'Black/African-American', 'common-law', 'Voluptatibus soluta', 'no', 'Culpa quod ut vel se', '[\"1\",\"2\",\"3\",\"4\",\"6\",\"10\",\"11\",\"12\",\"14\",\"15\",\"16\",\"19\"]', '8', NULL, NULL, 'no', NULL, 'no', NULL, NULL, NULL, 'yes', 'Quidem eveniet dolo', 'no', NULL, 'no', NULL, '28', '9', '1 to 2 times per week', 'More than 5 drinks', 'Et pariatur Hic ita', '25', '2', 'Asperiores ea sapien', 'yes', '2002-11-22', 'yes', '1984-05-16', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Poor', 'Buddhist', 'Aut quis odit qui et', 'no', NULL, NULL, NULL, 'Married', 'no', '1998-10-19', 'Good', 'yes', NULL, 'Poor', '14', 'Odit eum sed volupta', 'Nisi omnis qui ipsam', 'Dolores incidunt of', 1, '2023-01-27 23:14:38', '2023-01-27 23:14:38'),
(17, NULL, NULL, 'Hope', 'Waters', 'Hope Waters', 'Fredericka Strong', '+1 (237) 226-3167', 'xupi@mailinator.com', 'In dolore voluptate', NULL, 'Brooks County', 'Henderson County', 'Rhode Island', '90618', 'Oscar Mosley', '+1 (872) 459-1816', '21', 'Telehealth', NULL, NULL, NULL, '2016-09-18', 'transFM', 'Female', '8', 'Bisexual', 'Multiracial', 'divorced', 'Temporibus dolore at', 'yes', 'Exercitationem volup', '[\"2\",\"4\",\"5\",\"6\",\"7\",\"11\",\"13\",\"14\",\"15\",\"18\",\"19\"]', '24', NULL, NULL, 'no', NULL, 'no', NULL, NULL, NULL, 'yes', 'Tempor delectus cil', 'no', NULL, 'yes', 'Proident accusamus', '1', '24', 'none', '', 'Eos ducimus eos ve', '6', '28', 'Eligendi nisi Nam qu', 'no', NULL, 'yes', '2016-09-03', 'yes', '[\"1980-12-13\"]', 84, '[\"2\"]', 'divorce', NULL, NULL, NULL, NULL, 'Fair', 'Christian', 'Id eaque nihil sed c', 'no', NULL, NULL, NULL, 'Married', 'yes', NULL, 'Poor', 'yes', NULL, 'Poor', '9', 'Sit est sunt quasi', 'Maxime id libero asp', 'Perspiciatis libero', 1, '2023-01-27 23:18:18', '2023-01-27 23:18:18'),
(18, NULL, NULL, 'Ann', 'Fuller', 'Ann Fuller', 'Regan Rosa', '+1 (895) 305-9309', 'murigilom@mailinator.com', 'Elit dolores alias', NULL, 'Kent County', 'Giddings', 'Washington', '74709', 'Sharon Hudson', '+1 (602) 755-9009', '15', 'Telehealth', NULL, NULL, NULL, '2017-03-17', 'non-binary', 'others', '4', 'Others', 'American Indian/Alaska Native', 'separated', 'Sunt eiusmod mollit', 'no', 'Cupidatat fuga Minu', '[\"5\",\"6\",\"7\",\"10\",\"11\",\"12\",\"13\",\"16\",\"18\",\"19\",\"20\"]', NULL, NULL, NULL, 'yes', NULL, 'no', NULL, NULL, 'Recusandae Aliquip', 'no', NULL, 'no', NULL, 'no', NULL, '18', '10', '3 to 4 times per week', '3 or 4', 'Esse veritatis illum', '22', '12', 'Corporis doloribus e', 'no', NULL, 'no', NULL, 'yes', '[\"1974-02-23\"]', 70, '[\"2\",\"4\"]', 'divorce', NULL, NULL, NULL, NULL, 'N/A', 'Atheist', 'Qui et proident inc', 'no', NULL, NULL, NULL, 'Widowed', 'yes', NULL, 'Good', 'no', '1986-07-17', 'Good', '26', 'Animi pariatur Dis', 'Est aperiam quia dol', 'Et officia duis irur', 1, '2023-01-27 23:19:23', '2023-01-27 23:19:23'),
(19, NULL, NULL, 'Vernon', 'Douglas', 'Vernon Douglas', 'Halla Sosa', '+1 (396) 573-4859', 'cate@mailinator.com', 'Ut doloremque facere', NULL, 'Carson County', 'Cottonwood Shores', 'Indiana', '73399', 'Lev Craig', '+1 (235) 665-2571', '3', 'Hattiesburg, MS', NULL, NULL, NULL, '2005-09-19', 'female', 'Female', '21', 'Gay', 'Multiracial', 'living-together', 'Praesentium molestia', 'no', 'Culpa nihil tenetur', '[\"2\",\"5\",\"7\",\"9\",\"10\",\"13\",\"14\",\"19\"]', '11', NULL, NULL, 'yes', NULL, 'yes', 'Facere quia culpa v', NULL, 'Quo aliquam eos deb', 'yes', 'Ea in eveniet expli', 'yes', 'Corrupti provident', 'yes', 'Fugiat amet ut dolo', '13', '1', '1 to 2 times per week', '3 or 4', 'Omnis eum rerum qui', '16', '28', 'Obcaecati nihil reru', 'no', NULL, 'no', NULL, 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Fair', 'Other', 'Reiciendis consequat', 'no', NULL, NULL, NULL, 'Widowed', 'no', '2005-04-09', 'Excellent', 'no', '1996-10-23', 'Good', '19', 'At voluptatem Enim', 'Tempore cumque volu', 'Autem ipsa eligendi', 1, '2023-01-27 23:25:27', '2023-01-27 23:25:27'),
(20, NULL, NULL, 'Idona', 'Kemp', 'Idona Kemp', 'Kasimir Hutchinson', '+1 (481) 857-6989', 'xotynew@mailinator.com', 'Tenetur nostrud magn', NULL, 'Fayette County', 'Brenham', 'Pennsylvania', '67221', 'Lucian Short', '+1 (718) 782-4177', '19', 'Fort Worth, TX', NULL, NULL, NULL, '1974-09-20', 'non-binary', 'Choose Not to Disclose', '21', 'Bisexual', 'Others', 'widowed', 'Nisi ut cupiditate n', 'no', 'Anim pariatur Persp', '[\"1\",\"8\",\"11\",\"12\",\"13\",\"14\",\"15\",\"17\",\"20\",\"21\"]', '27', '17', NULL, 'yes', 'Eiusmod laudantium', 'no', NULL, NULL, 'Non aut dolor qui es', 'yes', 'Sit repellendus Su', 'yes', 'Maxime non minima es', 'no', NULL, '19', '1', '3 to 4 times per week', '1 or 2', 'Ut qui sunt aliquam', '21', '26', 'Dolor et modi ipsum', 'no', NULL, 'no', NULL, 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Poor', 'Orthodox', 'Aut non et animi si', 'no', NULL, NULL, NULL, 'Separated', 'no', '2010-06-16', 'Excellent', 'yes', NULL, 'Excellent', '27', 'Placeat omnis molli', 'Ex tempore et ea mo', 'Asperiores occaecat', 1, '2023-01-27 23:26:53', '2023-01-27 23:26:53'),
(21, NULL, NULL, 'Emery', 'Flynn', 'Emery Flynn', 'David Stephens', '+1 (125) 841-6999', 'xuhamolaf@mailinator.com', 'Laborum eligendi lab', NULL, 'Martin County', 'Montague County', 'District of Columbia', '17737', 'Marcia Contreras', '+1 (709) 482-1934', '15', 'Fort Worth, TX', NULL, NULL, NULL, '2021-01-20', 'female', 'Gender Non-conforming', '26', 'Heterosexual', 'Hawaiian Native/Pacific Islander', 'partners', 'Dolore voluptas ea v', 'no', 'Eu adipisicing eiusm', '[\"1\",\"5\",\"7\",\"8\",\"9\",\"11\",\"12\",\"13\",\"15\",\"17\",\"18\",\"21\"]', NULL, '2', NULL, 'no', 'Animi deleniti dolo', 'no', NULL, NULL, NULL, 'no', NULL, 'no', NULL, 'no', NULL, '4', '9', '3 to 4 times per week', '1 or 2', 'Hic modi quia volupt', '28', '11', 'Aute earum id quis', 'yes', '1991-06-28', 'yes', '1982-03-27', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Excellent', 'Buddhist', 'Est occaecat ut vero', 'no', NULL, NULL, NULL, 'Widowed', 'no', '2010-12-13', 'Good', 'no', '1975-01-26', 'Poor', '22', 'Fuga Delectus earu', 'Adipisicing minima d', 'Ex doloremque est m', 1, '2023-01-27 23:27:29', '2023-01-27 23:27:29'),
(22, NULL, NULL, 'Chiquita', 'Joyce', 'Chiquita Joyce', 'Emma Brown', '+1 (587) 693-8584', 'vada@mailinator.com', 'Sequi necessitatibus', NULL, 'Van Zandt County', 'Palmhurst', 'California', '60963', 'Flynn Carpenter', '+1 (403) 352-4317', '17', 'Telehealth', NULL, NULL, NULL, '1986-10-03', 'others', 'others', '17', 'Heterosexual', 'American Indian/Alaska Native', 'engage', 'Quis vero do aliquam', 'yes', 'Inventore at qui sed', '[\"2\",\"5\",\"7\",\"9\",\"13\",\"15\",\"19\",\"20\"]', NULL, NULL, NULL, 'no', NULL, 'no', NULL, NULL, NULL, 'no', NULL, 'no', NULL, 'yes', 'Laudantium quibusda', '13', '3', 'none', '', 'In nisi laboriosam', '2', '14', 'Nulla fugiat assume', 'yes', '2020-09-13', 'no', NULL, 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'N/A', 'Other', 'Ea alias unde anim p', 'no', NULL, NULL, NULL, 'Widowed', 'yes', NULL, 'Good', 'no', '1972-10-25', 'Fair', '8', 'Laudantium quaerat', 'Nostrum dolor reicie', 'Esse commodo labore', 1, '2023-01-27 23:29:51', '2023-01-27 23:29:51'),
(23, NULL, NULL, 'Astra', 'Page', 'Astra Page', 'Griffin Cameron', '+1 (153) 138-6604', 'zewe@mailinator.com', 'Commodi elit quod m', NULL, 'Austin County', 'Double Oak', 'Kansas', '62875', 'Catherine Chambers', '+1 (874) 499-7818', '15', 'Telehealth', NULL, NULL, NULL, '2009-05-23', 'transFM', 'Intersex', '25', 'Gay', 'Others', 'engage', 'Eos dignissimos nis', 'no', 'Fugit quibusdam et', '[\"1\",\"4\",\"8\",\"11\",\"12\",\"13\",\"15\",\"19\",\"21\"]', NULL, '22', NULL, 'yes', NULL, 'no', NULL, NULL, 'Repellendus Officia', 'no', NULL, 'no', NULL, 'yes', 'Totam sunt voluptat', '10', '16', 'none', '', 'Doloremque amet omn', '1', '14', 'Veniam perferendis', 'yes', '2014-09-15', 'no', NULL, 'yes', '[\"2004-10-07\"]', 88, '[\"1\",\"2\",\"3\",\"4\"]', 'death', NULL, NULL, NULL, NULL, 'Poor', 'Jewish', 'Ea rerum incididunt', 'no', NULL, NULL, NULL, 'Widowed', 'yes', NULL, 'Fair', 'no', '1972-08-09', 'Fair', '20', 'Consequatur Exercit', 'Possimus et harum a', 'Voluptatem molestia', 1, '2023-01-27 23:32:44', '2023-01-27 23:32:44'),
(24, NULL, NULL, 'Zenia', 'House', 'Zenia House', 'Bell Moreno', '+1 (269) 279-4043', 'beqebe@mailinator.com', 'Suscipit dolore cupi', NULL, 'Floyd County', 'Fulshear', 'Texas', '45724', 'Jameson Atkins', '+1 (709) 597-5784', '21', 'Telehealth', NULL, NULL, NULL, '2014-06-04', 'transMF', 'Intersex', '2', 'Asexual', 'Asian', 'divorced', 'Est saepe quisquam s', 'no', 'Dolore vitae nemo co', '[\"1\",\"6\",\"8\",\"9\",\"14\",\"15\",\"17\",\"18\",\"19\",\"20\",\"21\"]', '13', '20', NULL, 'yes', NULL, 'yes', 'Quia velit in anim s', NULL, 'Ut a debitis quia is', 'no', NULL, 'yes', 'Hic quod facere enim', 'no', NULL, '10', '17', '3 to 4 times per week', '3 or 4', 'Rerum fuga Quo dign', '22', '9', 'Nisi ex error cupida', 'no', NULL, 'no', NULL, 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Excellent', 'Catholic', 'Lorem dolor exceptur', 'no', NULL, NULL, NULL, 'Step Parents', 'no', '2009-01-25', 'Poor', 'yes', NULL, 'Good', '1', 'Est quibusdam iure', 'Quia dolores laborum', 'Ex elit id voluptat', 1, '2023-01-27 23:33:16', '2023-01-27 23:33:16'),
(25, NULL, NULL, 'Ingrid', 'Bird', 'Ingrid Bird', 'Fallon Copeland', '+1 (764) 353-7855', 'muvuhy@mailinator.com', 'Veniam et in offici', NULL, 'Hutchinson County', 'Somerville', 'Louisiana', '77574', 'Nash Mayo', '+1 (424) 249-5366', '13', 'Hattiesburg, MS', NULL, NULL, NULL, '1992-10-29', 'transFM', 'Questioning', '27', 'Lesbian', 'Others', 'living-together', 'Consectetur optio', 'no', 'Ut ut dolores est et', '[\"1\",\"5\",\"6\",\"8\",\"10\",\"11\",\"12\",\"14\",\"15\",\"16\",\"17\",\"20\"]', '20', NULL, NULL, 'no', NULL, 'yes', 'Laboris eaque explic', NULL, NULL, 'yes', 'Proident dolores om', 'yes', 'Incididunt vero est', 'no', NULL, '22', '28', '3 to 4 times per week', '1 or 2', 'Sint natus ea volup', '23', '24', 'Aut reprehenderit m', 'yes', '1990-06-02', 'yes', '1983-04-07', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Good', 'None', 'Laudantium eum fuga', 'yes', '23', NULL, '15', 'Divorced', 'yes', NULL, 'Good', 'yes', NULL, 'Excellent', '24', 'Tempora sunt non ani', 'Aliqua Enim laborum', 'Nulla dolorem labore', 1, '2023-01-27 23:34:18', '2023-01-27 23:34:18'),
(26, NULL, NULL, 'Victoria', 'Gonzalez', 'Victoria Gonzalez', 'Yeo Key', '+1 (881) 317-1464', 'zapelojak@mailinator.com', 'Qui vel eum omnis ex', NULL, 'Kimble County', 'Lyford', 'Northern Mariana Islands', '16740', 'Melissa Joyce', '+1 (334) 459-3748', '2', 'Telehealth', NULL, NULL, NULL, '1975-02-16', 'others', 'Trans Male', '24', 'Gay', 'Hawaiian Native/Pacific Islander', 'separated', 'In non a nihil animi', 'no', 'Consequatur Volupta', '[\"5\",\"11\",\"12\",\"13\",\"14\",\"15\",\"18\",\"21\"]', '20', '13', NULL, 'no', NULL, 'yes', 'Vitae ipsam corrupti', NULL, NULL, 'yes', 'Dolorum atque quaera', 'yes', 'Adipisci nostrud mol', 'yes', 'Alias pariatur Alia', '16', '4', 'none', '', 'Eligendi est natus', '12', '27', 'Quis magnam porro bl', 'no', NULL, 'no', NULL, 'yes', '[\"1999-02-15\"]', 95, '[\"2\",\"4\"]', 'death', NULL, NULL, NULL, NULL, 'Good', 'Latter-Day Saints', 'Corrupti omnis et a', 'no', NULL, NULL, NULL, 'Step Parents', 'yes', NULL, 'Excellent', 'yes', NULL, 'Good', '12', 'Cumque ut quidem exc', 'Tenetur veniam dolo', 'Quo qui facere nostr', 1, '2023-01-27 23:35:09', '2023-01-27 23:35:09'),
(27, NULL, NULL, 'Alfreda', 'Rodriguez', 'Alfreda Rodriguez', 'Amaya Myers', '+1 (912) 823-7106', 'paxaje@mailinator.com', 'Dolores labore cupid', NULL, 'Cherokee County', 'Wildwood', 'New Hampshire', '70685', 'Yoshio Blackburn', '+1 (929) 775-5254', '24', 'Telehealth', NULL, NULL, NULL, '2009-03-23', 'male', 'Male', '15', 'Lesbian', 'Black/African-American', 'common-law', 'Sapiente eius conseq', 'no', 'Nulla eveniet aut c', '[\"2\",\"3\",\"6\",\"7\",\"8\",\"10\",\"11\",\"12\",\"13\",\"14\",\"15\",\"16\",\"17\"]', '6', NULL, NULL, 'yes', 'Voluptate enim esse', 'yes', 'Id sunt illum ipsum', NULL, 'Est consequuntur inc', 'yes', 'Consectetur delectu', 'yes', 'Dolores sint ut sit', 'yes', 'Ullamco quae porro v', '21', '28', '3 to 4 times per week', 'More than 5 drinks', 'Incidunt eiusmod su', '11', '15', 'Voluptatem Hic sit', 'yes', '1972-10-20', 'yes', '2009-10-10', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Excellent', 'Protestant', 'Laborum qui maiores', 'no', NULL, NULL, NULL, 'Separated', 'no', '1980-03-01', 'Good', 'no', '2017-05-14', 'Poor', '13', 'Ut impedit explicab', 'Rem aute recusandae', 'Enim sunt aliquid e', 1, '2023-01-28 02:29:43', '2023-01-28 02:29:43'),
(28, NULL, NULL, 'Driscoll', 'Cook', 'Driscoll Cook', 'Sarah Herman', '+1 (455) 665-8999', 'zuwety@mailinator.com', 'Non error eiusmod sa', NULL, 'Harris County', 'Borden County', 'New Hampshire', '95813', 'Imogene Harrington', '+1 (286) 142-4079', '3', 'Fort Worth, TX', NULL, NULL, NULL, '2018-02-26', 'transFM', 'Genderqueer', '11', 'Asexual', 'American Indian/Alaska Native', 'widowed', 'Cupiditate natus sed', 'no', 'Et sequi sunt eum c', '[\"2\",\"3\",\"5\",\"7\",\"13\",\"14\",\"15\",\"16\",\"20\"]', '23', NULL, NULL, 'no', NULL, 'no', NULL, NULL, NULL, 'yes', 'Culpa ex omnis esse', 'no', NULL, 'yes', 'Minim quod accusanti', '16', '11', '3 to 4 times per week', '3 or 4', 'Reprehenderit tenetu', '20', '1', 'Veniam fugit dolor', 'yes', '2015-09-09', 'no', NULL, 'yes', '[\"1977-05-28\"]', 52, '[\"1\",\"2\",\"3\",\"4\"]', 'death', NULL, NULL, NULL, NULL, 'N/A', 'Latter-Day Saints', 'Voluptate reiciendis', 'yes', '21', NULL, '13', 'Separated', 'yes', NULL, 'Poor', 'no', '1994-11-14', 'Good', '27', 'Officiis ab autem si', 'Porro ut tenetur exp', 'Tempora reprehenderi', 1, '2023-01-28 02:32:05', '2023-01-28 02:32:05'),
(29, NULL, NULL, 'Inga', 'Walton', 'Inga Walton', 'Kiona Marsh', '+1 (439) 856-8392', 'lamavevyvo@mailinator.com', 'Voluptatem enim natu', NULL, 'Washington County', 'Pampa', 'Colorado', '72065', 'Tamara Hansen', '+1 (371) 848-4787', '24', 'Fort Worth, TX', NULL, NULL, NULL, '1987-10-02', 'transFM', 'Gender Fluid', '12', 'Others', 'Multiracial', 'engage', 'Quibusdam ea velit', 'yes', 'Id quod nisi eius qu', '[\"5\",\"6\",\"7\",\"13\",\"14\",\"16\",\"17\",\"18\",\"21\"]', '27', '2', NULL, 'no', NULL, 'no', NULL, NULL, NULL, 'yes', 'In deserunt porro mo', 'yes', 'Voluptas labore dist', 'no', NULL, '9', '13', '1 to 2 times per week', '3 or 4', 'Enim aut nisi quos e', '16', '6', 'Eligendi deleniti eu', 'yes', '1982-12-01', 'yes', '2006-08-22', 'yes', '[\"2020-06-05\"]', 68, '[\"1\",\"4\"]', 'death', NULL, NULL, NULL, NULL, 'Excellent', 'Hindu', 'Est optio dolore a', 'no', NULL, NULL, NULL, 'Separated', 'yes', NULL, 'Good', 'yes', NULL, 'Fair', '21', 'Cumque itaque in ex', 'Itaque corrupti inc', 'Est ab ipsa deseru', 1, '2023-01-28 02:46:15', '2023-01-28 02:46:15'),
(30, NULL, NULL, 'Julie', 'Ewing', 'Julie Ewing', 'Shafira Lara', '+1 (517) 883-4835', 'zuzyxyfe@mailinator.com', 'Numquam voluptatem', NULL, 'Goliad County', 'Richland Hills', 'Georgia', '75732', 'Illana Brooks', '+1 (825) 708-3573', '12', 'Hattiesburg, MS', NULL, NULL, NULL, '1989-06-15', 'male', 'Gender Fluid', '22', 'Lesbian', 'Asian', 'widowed', 'Tempore magna assum', 'yes', 'Eaque excepturi perf', '[\"1\",\"3\",\"4\",\"6\",\"7\",\"11\",\"14\",\"15\",\"16\",\"17\",\"19\"]', '28', NULL, NULL, 'yes', NULL, 'yes', 'Animi dolores ea qu', NULL, 'Quis asperiores repe', 'no', NULL, 'no', NULL, 'no', NULL, '17', '7', '1 to 2 times per week', 'More than 5 drinks', 'Sed id fugiat volupt', '15', '13', 'Lorem beatae eum ali', 'yes', '1988-01-16', 'no', NULL, 'yes', '[\"2020-09-23\"]', 72, '[\"2\",\"3\",\"4\"]', 'death', NULL, NULL, NULL, NULL, 'Poor', 'Atheist', 'Aut animi laboriosa', 'yes', '23', NULL, '18', 'Widowed', 'no', '1973-06-09', 'Good', 'no', '1970-12-11', 'Poor', '27', 'Eaque explicabo Exe', 'Possimus earum duci', 'Qui a quo id qui por', 1, '2023-01-28 02:56:22', '2023-01-28 02:56:22'),
(31, NULL, NULL, 'Jin', 'Hammond', 'Jin Hammond', 'Stuart Collier', '+1 (449) 483-7809', 'jibexorez@mailinator.com', 'Sed voluptatem Nisi', NULL, 'Childress County', 'Fort Clark Springs', 'North Carolina', '64551', 'Brielle Mccray', '+1 (907) 851-1535', '20', 'Telehealth', NULL, NULL, NULL, '2014-06-07', 'male', 'Two Spirit', '26', 'Pansexual', 'Multiracial', 'single', 'In dolor vero ut in', 'yes', 'Sed voluptatibus fac', '[\"1\",\"2\",\"4\",\"7\",\"9\",\"11\",\"12\",\"14\",\"16\",\"17\",\"18\",\"20\"]', '18', NULL, NULL, 'no', NULL, 'no', NULL, NULL, NULL, 'yes', 'Facilis nulla except', 'no', NULL, 'no', NULL, '26', '7', 'none', '', 'Natus eligendi est', '13', '19', 'Consequatur eiusmod', 'no', NULL, 'no', NULL, 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Excellent', 'Jewish', 'Nam et culpa enim vo', 'no', NULL, NULL, NULL, 'Divorced', 'yes', NULL, 'Fair', 'no', '2019-04-17', 'Fair', '7', 'Aspernatur do autem', 'Qui tempore officia', 'Rerum ipsum molestia', 1, '2023-01-28 03:00:52', '2023-01-28 03:00:52'),
(32, NULL, NULL, 'Giacomo', 'Williams', 'Giacomo Williams', 'Veda Guy', '+1 (166) 291-2039', 'lovaraneg@mailinator.com', 'Iusto pariatur Ad p', NULL, 'Lavaca County', 'Hopkins County', 'Louisiana', '81873', 'Eve Hardin', '+1 (852) 885-2183', '9', 'Telehealth', NULL, NULL, NULL, '2022-03-27', 'female', 'others', '2', 'Polysexual', 'Black/African-American', 'partners', 'Ipsa perferendis be', 'yes', 'Minima quis consequa', '[\"1\",\"3\",\"5\",\"6\",\"7\",\"8\",\"10\",\"15\",\"18\",\"19\",\"20\"]', NULL, NULL, NULL, 'no', 'Quisquam temporibus', 'yes', 'Atque sint hic volup', NULL, NULL, 'yes', 'Dicta non commodo oc', 'yes', 'Quidem non laboriosa', 'no', NULL, '15', '21', '1 to 2 times per week', 'More than 5 drinks', 'Velit expedita culpa', '11', '19', 'Id corrupti omnis m', 'no', NULL, 'no', NULL, 'yes', '[\"2007-10-04\"]', 34, '[\"2\",\"4\"]', 'divorce', NULL, NULL, NULL, NULL, 'Poor', 'Muslim', 'Cupidatat sint vel t', 'yes', '5', NULL, '26', 'Divorced', 'yes', NULL, 'Excellent', 'no', '2022-02-06', 'Good', '18', 'Numquam nisi vel ame', 'Et aut dignissimos c', 'Non rerum unde fugit', 1, '2023-01-28 03:30:25', '2023-01-28 03:30:25'),
(33, NULL, NULL, 'Eden', 'Stokes', 'Eden Stokes', 'Odette Pratt', '+1 (531) 348-6902', 'repiqaqac@mailinator.com', 'Cumque rerum repelle', NULL, 'Wilson County', 'Leakey', 'Northern Mariana Islands', '21626', 'Nichole Day', '+1 (527) 135-6094', '5', 'Hattiesburg, MS', NULL, NULL, NULL, '2022-08-17', 'male', 'Trans Female', '10', 'Gay', 'Black/African-American', 'partners', 'Ad est saepe quia mo', 'yes', 'Praesentium fugiat', '[\"3\",\"4\",\"5\",\"7\",\"10\",\"15\",\"20\"]', NULL, NULL, NULL, 'yes', 'In proident aliquip', 'yes', 'Facere lorem perspic', NULL, 'Natus dicta iusto no', 'yes', 'Adipisicing et vitae', 'no', NULL, 'no', NULL, '16', '8', '3 to 4 times per week', 'More than 5 drinks', 'Voluptatem voluptate', '18', '21', 'Placeat esse praes', 'yes', '1982-12-16', 'yes', '2021-11-07', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Fair', 'Buddhist', 'Quia sint fugiat qu', 'yes', '23', NULL, '21', 'Married', 'no', '2015-10-25', 'Good', 'no', '1986-05-04', 'Excellent', '9', 'Beatae iure facilis', 'Dolor ducimus non a', 'Maiores eum id eius', 1, '2023-01-28 03:31:56', '2023-01-28 03:31:56'),
(34, NULL, NULL, 'Brady', 'Pratt', 'Brady Pratt', 'Nash Fletcher', '+1 (192) 726-5815', 'dekyfy@mailinator.com', 'Omnis aut omnis vero', NULL, 'Grimes County', 'Spur', 'Florida', '17970', 'Nathaniel Cash', '+1 (871) 217-7736', '14', 'Hattiesburg, MS', NULL, NULL, NULL, '2008-09-22', 'others', 'others', '10', 'Asexual', 'Asian', 'engage', 'Alias officia conseq', 'yes', 'Officia sed dolore e', '[\"1\",\"4\",\"5\",\"6\",\"8\",\"10\",\"11\",\"12\",\"13\",\"15\"]', NULL, NULL, NULL, 'no', 'Officia dolor esse', 'yes', 'Culpa exercitatione', NULL, NULL, 'no', NULL, 'no', NULL, 'yes', 'Aperiam occaecat eli', '2', '3', 'none', '', 'Ducimus officia sae', '24', '6', 'Ut veniam nihil vel', 'yes', '1985-02-22', 'yes', '1976-06-30', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Poor', 'Christian', 'Exercitationem in es', 'no', NULL, NULL, NULL, 'Divorced', 'no', '1980-09-26', 'Poor', 'yes', NULL, 'Excellent', '7', 'Consectetur non moll', 'Et sed et ipsam aut', 'Sit magna cillum sa', 1, '2023-01-28 03:34:46', '2023-01-28 03:34:46'),
(35, NULL, NULL, 'Amethyst', 'Crosby', 'Amethyst Crosby', 'Sonya Skinner', '+1 (457) 554-8875', 'dimacy@mailinator.com', 'Reprehenderit earum', NULL, 'Sherman County', 'Longview', 'United States Virgin Islands', '87372', 'Coby Weber', '+1 (593) 185-1355', '8', 'Hattiesburg, MS', NULL, NULL, NULL, '1984-01-19', 'male', 'Gender Non-conforming', '1', 'Gay', 'Multiracial', 'widowed', 'Voluptatum et dolori', 'yes', 'Voluptas nostrum nob', '[\"1\",\"5\",\"7\",\"9\",\"11\",\"13\",\"14\",\"17\",\"21\"]', '14', '19', NULL, 'no', NULL, 'yes', 'Commodo voluptatem', NULL, NULL, 'yes', 'Aspernatur dignissim', 'no', NULL, 'yes', 'Nam maxime aute in i', '11', '8', 'none', '', 'Corrupti vitae ab e', '6', '24', 'Dolorem ut excepteur', 'yes', '2015-04-08', 'yes', '1983-01-23', 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Good', 'Other', 'Quo velit voluptate', 'yes', '19', NULL, '8', 'Widowed', 'yes', NULL, 'Excellent', 'no', '2011-07-29', 'Poor', '18', 'Ea et in aliquip ut', 'Nam adipisicing in e', 'Placeat vel dolore', 1, '2023-01-28 03:41:43', '2023-01-28 03:41:43'),
(36, NULL, NULL, 'Kellie', 'Barry', 'Kellie Barry', 'Yasir Fox', '+1 (208) 873-9812', 'bepype@mailinator.com', 'Accusamus fuga Vero', NULL, 'Kendall County', 'West Livingston', 'Mississippi', '13863', 'Gavin Mcintyre', '+1 (688) 974-5433', '10', 'Telehealth', NULL, NULL, NULL, '2020-07-27', 'transFM', 'Intersex', '27', 'Lesbian', 'Hawaiian Native/Pacific Islander', 'living-together', 'Cillum nostrud earum', 'yes', 'Odit neque corrupti', '[\"4\",\"5\",\"8\",\"10\",\"12\",\"14\",\"16\",\"17\",\"18\",\"20\",\"21\"]', '13', '21', NULL, 'no', 'Aliquid facere recus', 'no', NULL, NULL, NULL, 'yes', 'Ex labore nostrud il', 'no', NULL, 'yes', 'Dolore est a esse q', '2', '15', 'More than 5 times per week', 'More than 5 drinks', 'Exercitationem molli', '25', '5', 'Fugiat voluptatem of', 'no', NULL, 'yes', '1985-09-13', 'yes', '[\"1973-12-02\"]', 89, '[\"1\",\"4\"]', 'divorce', NULL, NULL, NULL, NULL, 'Poor', 'None', 'Deserunt nihil tempo', 'no', NULL, NULL, NULL, 'Separated', 'no', '1979-10-30', 'Good', 'yes', NULL, 'Excellent', '25', 'Nemo amet nesciunt', 'Aut odit aliqua Qui', 'Ad inventore ut volu', 1, '2023-01-28 03:45:55', '2023-01-28 03:45:55'),
(37, NULL, NULL, 'Cara', 'Bentley', 'Cara Bentley', 'Lareina Parrish', '+1 (578) 245-6652', 'jevefec@mailinator.com', 'Nulla eum temporibus', NULL, 'Harrison County', 'Nueces County', 'Baker Island', '60788', 'Wanda Mejia', '+1 (223) 455-3859', '7', 'Telehealth', NULL, NULL, NULL, '2004-12-16', 'others', 'others', '4', 'Choose Not to Disclose', 'American Indian/Alaska Native', 'married', 'Quo tempor suscipit', 'no', 'Consectetur quae qui', '[\"1\",\"2\",\"3\",\"6\",\"8\",\"10\",\"11\",\"16\",\"18\"]', NULL, NULL, NULL, 'no', 'Fugit sapiente exer', 'yes', 'Eos ad laborum dign', NULL, NULL, 'no', NULL, 'no', NULL, 'yes', 'Blanditiis accusamus', '24', '10', 'none', '', 'Molestiae velit est', '16', '8', 'Qui nisi eaque repel', 'no', NULL, 'no', NULL, 'yes', '[\"1992-04-21\"]', 18, '[\"3\"]', 'death', NULL, NULL, NULL, NULL, 'Excellent', 'Muslim', 'Delectus pariatur', 'yes', '14', NULL, '6', 'Divorced', 'yes', NULL, 'Excellent', 'no', '1972-11-24', 'Fair', '26', 'Perspiciatis non ex', 'Voluptatem officia n', 'Et et porro ducimus', 1, '2023-01-28 03:57:12', '2023-01-28 03:57:12'),
(38, NULL, NULL, 'test', 'Avery', 'test Avery', 'Jada Bush', '+1 (266) 615-4108', 'xurof@mailinator.com', 'Ipsa delectus aute', NULL, 'Anderson County', 'Brownsville', 'Palmyra Atoll', '75016', 'Candice Ross', '+1 (289) 702-5323', '19', 'Fort Worth, TX', NULL, NULL, NULL, '2004-10-31', 'others', 'Gender Non-conforming', '25', 'Others', 'Asian', 'married', 'Vel odit laborum nat', 'no', 'Repellendus Delenit', '[\"1\",\"6\",\"7\",\"8\",\"9\",\"11\",\"12\",\"13\",\"14\",\"15\",\"17\",\"19\",\"20\"]', '9', NULL, NULL, 'yes', 'Eos enim quod incid', 'yes', 'Et commodo optio vo', NULL, 'Magna exercitation q', 'yes', 'Nihil ipsum velit ra', 'no', NULL, 'yes', 'Itaque voluptate omn', '17', '5', 'More than 5 times per week', 'More than 5 drinks', 'Perferendis vero cum', '22', '3', 'Mollitia reiciendis', 'yes', '2008-11-18', 'no', NULL, 'no', '[null]', NULL, 'null', NULL, NULL, NULL, NULL, NULL, 'Poor', 'Muslim', 'Fugiat maiores poss', 'yes', '12', NULL, '1', 'Separated', 'yes', NULL, 'Poor', 'yes', NULL, 'Poor', '25', 'Esse voluptatem la', 'Eu sint cupiditate', 'Corrupti eaque culp', 1, '2023-02-11 01:47:17', '2023-02-11 01:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `intake_insurance_forms`
--

CREATE TABLE `intake_insurance_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intake_form_id` bigint(20) UNSIGNED NOT NULL,
  `medical_insurance_radio_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsible_party_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_with_client_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_if_different_1` text COLLATE utf8mb4_unicode_ci,
  `insurance_provider_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_number_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_group_number_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_pay_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_relationship_to_insurance_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medical_insurance_radio_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_provider_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_number_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_group_number_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `co_pay_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_with_client_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_copy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_checkboxes_details` text COLLATE utf8mb4_unicode_ci,
  `insurance_signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intake_insurance_forms`
--

INSERT INTO `intake_insurance_forms` (`id`, `intake_form_id`, `medical_insurance_radio_1`, `responsible_party_1`, `insurance_birthday`, `relationship_with_client_1`, `address_if_different_1`, `insurance_provider_1`, `insurance_name_1`, `policy_number_1`, `policy_group_number_1`, `co_pay_1`, `client_relationship_to_insurance_1`, `medical_insurance_radio_2`, `insurance_provider_2`, `insurance_name_2`, `policy_number_2`, `policy_group_number_2`, `co_pay_2`, `relationship_with_client_2`, `insurance_copy`, `insurance_checkboxes_details`, `insurance_signature`, `created_at`, `updated_at`) VALUES
(3, 3, 'no', 'Voluptatem Dolorem', NULL, '23', 'Amet expedita anim', 'Aetna', NULL, '590', '697', '10', 'Spouse', 'yes', 'Tricare', 'Byron Armstrong', '922', '494', '27', 'Child', NULL, '[\"2\",\"6\"]', '13', '2023-01-19 03:06:57', '2023-01-19 03:06:57'),
(4, 4, 'yes', 'Consectetur voluptat', NULL, '17', 'Facere esse ut provi', 'Tricare', NULL, '775', '525', '1', 'Self', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"4\"]', '24', '2023-01-19 03:07:30', '2023-01-19 03:07:30'),
(5, 5, 'yes', 'Consectetur voluptat', NULL, '17', 'Facere esse ut provi', 'Tricare', NULL, '775', '525', '1', 'Self', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"4\"]', '24', '2023-01-19 03:07:55', '2023-01-19 03:07:55'),
(6, 6, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"1\",\"2\",\"7\"]', '16', '2023-01-19 03:08:13', '2023-01-19 03:08:13'),
(7, 7, 'yes', 'Et dolor commodo in', NULL, '20', 'Reiciendis amet non', 'Aetna', NULL, '88', '785', '6', 'Spouse', 'yes', 'Aetna', 'Ariel Barnes', '816', '937', '27', 'Spouse', NULL, '[\"1\",\"2\",\"3\",\"4\",\"7\"]', '11', '2023-01-19 03:08:45', '2023-01-19 03:08:45'),
(8, 8, 'yes', 'Nemo minima quis sit', NULL, '24', 'Aliquid consectetur', 'Cigna', NULL, '984', '684', '23', 'Child', 'yes', 'Other', 'Omar Grimes', '719', '294', '14', 'Spouse', NULL, '[\"3\",\"4\"]', '1', '2023-01-24 03:56:44', '2023-01-24 03:56:44'),
(9, 9, 'yes', 'Error in aut sunt no', NULL, '8', 'Reiciendis similique', 'Cigna', NULL, '422', '224', '13', 'Other', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"1\",\"5\"]', '18', '2023-01-24 06:55:05', '2023-01-24 06:55:05'),
(10, 10, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'Cigna', 'Shay Camacho', '40', '844', '25', 'Child', NULL, '[\"1\",\"2\",\"3\",\"6\",\"7\"]', '18', '2023-01-25 02:04:11', '2023-01-25 02:04:11'),
(11, 11, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'Aetna', 'Madaline Ramirez', '932', '864', '15', 'Child', NULL, '[\"5\",\"6\"]', '11', '2023-01-25 02:06:32', '2023-01-25 02:06:32'),
(12, 12, 'yes', 'Vero qui assumenda c', NULL, '20', 'Libero ut laborum vo', 'United Healthcare/UMR', NULL, '368', '696', '7', 'Other', 'yes', 'United Healthcare/UMR', 'Addison Mckenzie', '988', '788', '4', 'Self', NULL, '[\"1\",\"2\",\"4\",\"6\"]', '13', '2023-01-27 01:36:39', '2023-01-27 01:36:39'),
(13, 13, 'yes', 'Ea eos sint officii', NULL, '13', 'Voluptas ducimus Na', 'United Healthcare/UMR', NULL, '393', '714', '6', 'Other', 'yes', 'Cigna', 'Lunea Castaneda', '389', '138', '3', 'Spouse', NULL, '[\"1\",\"2\"]', '11', '2023-01-27 02:28:49', '2023-01-27 02:28:49'),
(14, 14, 'yes', 'Soluta voluptas est', NULL, '22', 'Consectetur quae fac', 'Other', NULL, '937', '803', '12', 'Self', 'yes', 'Cigna', 'Maryam Cotton', '581', '869', '10', 'Child', NULL, '[\"2\",\"5\",\"6\"]', '25', '2023-01-27 02:50:33', '2023-01-27 02:50:33'),
(15, 15, 'yes', 'Dolor reprehenderit', NULL, '13', 'Rerum dicta enim eos', 'Cigna', NULL, '493', '227', '25', 'Self', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"2\",\"5\",\"6\"]', '28', '2023-01-27 02:54:05', '2023-01-27 02:54:05'),
(16, 16, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'United Healthcare/UMR', 'Talon Case', '51', '861', '26', 'Child', NULL, '[\"3\",\"4\",\"6\",\"7\"]', '18', '2023-01-27 23:14:38', '2023-01-27 23:14:38'),
(17, 17, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"1\",\"3\",\"4\",\"5\",\"6\",\"7\"]', '15', '2023-01-27 23:18:18', '2023-01-27 23:18:18'),
(18, 18, 'yes', 'Ullamco voluptates i', NULL, '6', 'Qui aut consectetur', 'Cigna', NULL, '975', '615', '3', 'Other', 'yes', 'Cigna', 'Kenyon Shaffer', '417', '929', '14', 'Other', NULL, '[\"2\",\"7\"]', '21', '2023-01-27 23:19:23', '2023-01-27 23:19:23'),
(19, 19, 'yes', 'Aut minim autem nost', NULL, '4', 'Sit incididunt ad ei', 'United Healthcare/UMR', NULL, '175', '444', '28', 'Other', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"4\",\"5\",\"6\",\"7\"]', '1', '2023-01-27 23:25:27', '2023-01-27 23:25:27'),
(20, 20, 'yes', 'Quia et eu itaque ma', NULL, '10', 'Ipsam aut qui tempor', 'Blue Cross Blue Shield', NULL, '792', '840', '16', 'Self', 'yes', 'United Healthcare/UMR', 'Alexis Buchanan', '97', '674', '23', 'Child', NULL, '[\"5\"]', '16', '2023-01-27 23:26:53', '2023-01-27 23:26:53'),
(21, 21, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'Tricare', 'Isaac Levy', '654', '526', '5', 'Child', NULL, '[\"2\",\"3\",\"7\"]', '2', '2023-01-27 23:27:29', '2023-01-27 23:27:29'),
(22, 22, 'yes', 'Numquam asperiores t', NULL, '6', 'Fugiat modi natus vo', 'Blue Cross Blue Shield', NULL, '90', '897', '26', 'Self', 'yes', 'Blue Cross Blue Shield', 'Sylvia Cobb', '532', '530', '19', 'Self', NULL, '[\"1\",\"4\",\"5\"]', '15', '2023-01-27 23:29:51', '2023-01-27 23:29:51'),
(23, 23, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'Cigna', 'Darrel Nelson', '187', '459', '25', 'Spouse', NULL, '[\"1\",\"2\",\"3\",\"5\",\"6\"]', '14', '2023-01-27 23:32:44', '2023-01-27 23:32:44'),
(24, 24, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"4\",\"5\",\"6\",\"7\"]', '5', '2023-01-27 23:33:16', '2023-01-27 23:33:16'),
(25, 25, 'yes', 'Sunt et laborum Et', NULL, '20', 'Aliquip culpa deseru', 'Tricare', NULL, '835', '9', '14', 'Self', 'yes', 'United Healthcare/UMR', 'Plato Hurst', '84', '519', '3', 'Other', NULL, '[\"2\",\"6\",\"7\"]', '16', '2023-01-27 23:34:18', '2023-01-27 23:34:18'),
(26, 26, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'United Healthcare/UMR', 'Patricia Beach', '7', '990', '20', 'Child', NULL, '[\"2\",\"4\"]', '13', '2023-01-27 23:35:09', '2023-01-27 23:35:09'),
(27, 27, 'yes', 'Quod eu sint nostrum', NULL, '5', 'Id maxime voluptate', 'Other', NULL, '276', '585', '6', 'Spouse', 'yes', 'Aetna', 'Quynn Carlson', '615', '579', '27', 'Spouse', NULL, '[\"1\",\"3\",\"4\",\"5\",\"6\",\"7\"]', '21', '2023-01-28 02:29:43', '2023-01-28 02:29:43'),
(28, 28, 'yes', 'Omnis id delectus e', NULL, '14', 'Sit ab cumque atque', 'Other', NULL, '85', '354', '17', 'Self', 'yes', 'Blue Cross Blue Shield', 'Gillian Frank', '139', '829', '14', 'Spouse', NULL, '[\"1\",\"3\",\"4\",\"5\"]', '12', '2023-01-28 02:32:05', '2023-01-28 02:32:05'),
(29, 29, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'Other', 'Haley Grant', '651', '552', '7', 'Child', NULL, '[\"4\",\"6\",\"7\"]', '23', '2023-01-28 02:46:15', '2023-01-28 02:46:15'),
(30, 30, 'yes', 'Neque pariatur Est', NULL, '13', 'Aliqua Dolor pariat', 'Aetna', NULL, '748', '704', '9', 'Other', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"1\",\"2\",\"3\",\"5\",\"6\"]', '16', '2023-01-28 02:56:22', '2023-01-28 02:56:22'),
(31, 31, 'yes', 'Excepteur laudantium', NULL, '12', 'Amet quia modi sint', 'Cigna', NULL, '467', '169', '20', 'Other', 'yes', 'United Healthcare/UMR', 'Uriah Garza', '635', '99', '1', 'Child', NULL, '[\"3\",\"4\",\"5\",\"6\"]', '7', '2023-01-28 03:00:52', '2023-01-28 03:00:52'),
(32, 32, 'yes', 'Occaecat dolores ab', NULL, '5', 'Et quibusdam accusan', 'Tricare', NULL, '702', '563', '16', 'Child', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"2\",\"4\",\"6\"]', '17', '2023-01-28 03:30:25', '2023-01-28 03:30:25'),
(33, 33, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"2\",\"4\",\"6\"]', '10', '2023-01-28 03:31:56', '2023-01-28 03:31:56'),
(34, 34, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"1\",\"2\",\"3\",\"5\",\"6\",\"7\"]', '23', '2023-01-28 03:34:46', '2023-01-28 03:34:46'),
(35, 35, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'Tricare', 'Brady Tyson', '572', '201', '5', 'Other', NULL, '[\"2\",\"4\",\"5\",\"6\"]', '24', '2023-01-28 03:41:44', '2023-01-28 03:41:44'),
(36, 36, 'yes', 'Iste eligendi repell', NULL, '5', 'Doloremque velit fac', 'Tricare', NULL, '348', '963', '20', 'Spouse', 'yes', 'Other', 'Gretchen Mccoy', '669', '282', '17', 'Child', NULL, '[\"3\",\"4\",\"6\"]', '21', '2023-01-28 03:45:55', '2023-01-28 03:45:55'),
(37, 37, 'yes', 'Distinctio Accusant', NULL, '25', 'Eos sed quia iusto u', 'Tricare', NULL, '264', '956', '28', 'Child', 'yes', 'United Healthcare/UMR', 'Micah Davenport', '874', '40', '4', 'Spouse', NULL, '[\"1\",\"3\",\"4\",\"5\",\"7\"]', '5', '2023-01-28 03:57:12', '2023-01-28 03:57:12'),
(38, 38, 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'yes', 'United Healthcare/UMR', 'Dane Vargas', '20', '869', '3', 'Spouse', '1676054837.jpg', '[\"1\",\"2\",\"3\",\"4\",\"6\",\"7\"]', '5', '2023-02-11 01:47:17', '2023-02-11 01:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `intake_medication_forms`
--

CREATE TABLE `intake_medication_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intake_form_id` bigint(20) UNSIGNED NOT NULL,
  `primary_care_provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medication_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medication_radio` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_name_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_dosage_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_frequency_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_name_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_dosage_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_frequency_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_name_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_dosage_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_frequency_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_name_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_dosage_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_frequency_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_name_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_dosage_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m_frequency_5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `madication_tried` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `madication_condition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intake_medication_forms`
--

INSERT INTO `intake_medication_forms` (`id`, `intake_form_id`, `primary_care_provider`, `medication_phone`, `medication_radio`, `m_name_1`, `m_dosage_1`, `m_frequency_1`, `m_name_2`, `m_dosage_2`, `m_frequency_2`, `m_name_3`, `m_dosage_3`, `m_frequency_3`, `m_name_4`, `m_dosage_4`, `m_frequency_4`, `m_name_5`, `m_dosage_5`, `m_frequency_5`, `madication_tried`, `madication_condition`, `created_at`, `updated_at`) VALUES
(3, 3, '28', '+1 (526) 871-6483', 'no', 'Jasmine Talley', '3', '16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Aperiam sed sit cum', 'Aute maxime minus ob', '2023-01-19 03:06:57', '2023-01-19 03:06:57'),
(4, 4, '10', '+1 (586) 595-9844', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ut veniam id aute', 'Ducimus deleniti bl', '2023-01-19 03:07:30', '2023-01-19 03:07:30'),
(5, 5, '10', '+1 (586) 595-9844', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ut veniam id aute', 'Ducimus deleniti bl', '2023-01-19 03:07:55', '2023-01-19 03:07:55'),
(6, 6, '7', '+1 (272) 939-6268', 'yes', 'Kiayada Tyson', '11', '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Aut excepturi volupt', 'Quis et qui ut est e', '2023-01-19 03:08:13', '2023-01-19 03:08:13'),
(7, 7, '17', '+1 (529) 963-9676', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Voluptate est magna', 'Molestiae nesciunt', '2023-01-19 03:08:45', '2023-01-19 03:08:45'),
(8, 8, '10', '+1 (676) 796-1976', 'yes', 'Jasper Byers', '6', '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Soluta ab facilis ve', 'Sit deleniti cupidat', '2023-01-24 03:56:44', '2023-01-24 03:56:44'),
(9, 9, '20', '+1 (633) 823-1605', 'yes', 'Dorian Gould', '16', '24', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pariatur Quia quod', 'Minima sed quis quas', '2023-01-24 06:55:05', '2023-01-24 06:55:05'),
(10, 10, '8', '+1 (839) 189-3377', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Suscipit dolore labo', 'Culpa sit dolor inv', '2023-01-25 02:04:11', '2023-01-25 02:04:11'),
(11, 11, '17', '+1 (613) 149-8924', 'yes', 'Darryl Larson', '14', '20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Quia explicabo Hic', 'Sunt deserunt porro', '2023-01-25 02:06:32', '2023-01-25 02:06:32'),
(12, 12, '13', '+1 (381) 411-6307', 'yes', 'Bell Benjamin', '21', '6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Quia duis recusandae', 'Vel earum sed eos n', '2023-01-27 01:36:39', '2023-01-27 01:36:39'),
(13, 13, '18', '+1 (908) 371-6208', 'yes', 'Arden Farrell', '23', '7', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Quis dolore minim id', 'Facilis molestias ex', '2023-01-27 02:28:49', '2023-01-27 02:28:49'),
(14, 14, '12', '+1 (182) 187-2934', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Consectetur officia', 'Omnis corrupti omni', '2023-01-27 02:50:33', '2023-01-27 02:50:33'),
(15, 15, '8', '+1 (546) 895-2451', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Eos quidem dolores', 'In sed nisi et dolor', '2023-01-27 02:54:05', '2023-01-27 02:54:05'),
(16, 16, '26', '+1 (783) 607-9056', 'yes', 'Emerson Riggs', '8', '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Officia dolorem sit', 'Consequat Mollitia', '2023-01-27 23:14:38', '2023-01-27 23:14:38'),
(17, 17, '14', '+1 (701) 188-6852', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hic commodo dolores', 'Quia minim eos in es', '2023-01-27 23:18:18', '2023-01-27 23:18:18'),
(18, 18, '20', '+1 (584) 615-1248', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Anim sapiente labore', 'Animi sunt minus qu', '2023-01-27 23:19:23', '2023-01-27 23:19:23'),
(19, 19, '18', '+1 (265) 445-2018', 'yes', 'Candice Mann', '17', '21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Minus culpa quibusd', 'Eu officia ipsum so', '2023-01-27 23:25:27', '2023-01-27 23:25:27'),
(20, 20, '17', '+1 (526) 779-4124', 'yes', 'Clementine Mcdonald', '2', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sint nihil maxime du', 'A omnis est deserunt', '2023-01-27 23:26:53', '2023-01-27 23:26:53'),
(21, 21, '2', '+1 (859) 118-8857', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Eveniet laborum Au', 'Quo sint exercitatio', '2023-01-27 23:27:29', '2023-01-27 23:27:29'),
(22, 22, '10', '+1 (417) 314-8991', 'yes', 'Pandora Webster', '4', '28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Iste ut enim exercit', 'Dolores sequi nihil', '2023-01-27 23:29:51', '2023-01-27 23:29:51'),
(23, 23, '23', '+1 (967) 881-8594', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Anim in esse harum e', 'Aut debitis porro pe', '2023-01-27 23:32:44', '2023-01-27 23:32:44'),
(24, 24, '20', '+1 (226) 494-1602', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Cupiditate totam qui', 'Odio non voluptas si', '2023-01-27 23:33:16', '2023-01-27 23:33:16'),
(25, 25, '27', '+1 (529) 144-8264', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Assumenda praesentiu', 'Dolor temporibus id', '2023-01-27 23:34:18', '2023-01-27 23:34:18'),
(26, 26, '13', '+1 (962) 456-5667', 'yes', 'Maisie Salas', '25', '19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Architecto in et nat', 'Officiis vel blandit', '2023-01-27 23:35:09', '2023-01-27 23:35:09'),
(27, 27, '26', '+1 (132) 468-2484', 'yes', 'Paul Britt', '14', '13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Dolore sequi ut opti', 'Architecto anim eius', '2023-01-28 02:29:43', '2023-01-28 02:29:43'),
(28, 28, '15', '+1 (168) 859-7024', 'yes', 'Marny Lowery', '17', '25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Quaerat voluptas rep', 'Ut iure ipsam quo at', '2023-01-28 02:32:05', '2023-01-28 02:32:05'),
(29, 29, '6', '+1 (324) 718-2285', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nisi eum deserunt es', 'Commodi rerum dolor', '2023-01-28 02:46:15', '2023-01-28 02:46:15'),
(30, 30, '15', '+1 (213) 667-9594', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Vel adipisci molesti', 'Quia qui est minim', '2023-01-28 02:56:22', '2023-01-28 02:56:22'),
(31, 31, '17', '+1 (748) 187-7463', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Nostrum enim error d', 'Voluptatibus molliti', '2023-01-28 03:00:52', '2023-01-28 03:00:52'),
(32, 32, '18', '+1 (297) 872-7043', 'yes', 'Hanae Bryant', '12', '22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Odio consequatur el', 'Et beatae sint eius', '2023-01-28 03:30:25', '2023-01-28 03:30:25'),
(33, 33, '21', '+1 (669) 668-8307', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Corrupti sed et non', 'Doloribus hic velit', '2023-01-28 03:31:56', '2023-01-28 03:31:56'),
(34, 34, '5', '+1 (991) 432-9231', 'yes', 'Sade Gates', '26', '18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Consequuntur ut et e', 'Voluptates sit moles', '2023-01-28 03:34:46', '2023-01-28 03:34:46'),
(35, 35, '9', '+1 (397) 488-5002', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Odit animi ipsam te', 'Ratione aut exercita', '2023-01-28 03:41:44', '2023-01-28 03:41:44'),
(36, 36, '18', '+1 (764) 589-7182', 'yes', 'Autumn Underwood', '12', '27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Ut animi nihil illo', 'Adipisci culpa magni', '2023-01-28 03:45:55', '2023-01-28 03:45:55'),
(37, 37, '16', '+1 (112) 773-8657', 'yes', 'John Holder', '15', '14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Sed error minus mini', 'Praesentium porro do', '2023-01-28 03:57:12', '2023-01-28 03:57:12'),
(38, 38, '20', '+1 (588) 403-9325', 'no', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Obcaecati non deseru', 'Quas cupidatat quia', '2023-02-11 01:47:17', '2023-02-11 01:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `intake_siblings_forms`
--

CREATE TABLE `intake_siblings_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `intake_form_id` bigint(20) UNSIGNED NOT NULL,
  `sibling_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sibling_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sibling_age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sibling_relation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `intake_siblings_forms`
--

INSERT INTO `intake_siblings_forms` (`id`, `intake_form_id`, `sibling_count`, `sibling_name`, `sibling_age`, `sibling_relation`, `created_at`, `updated_at`) VALUES
(3, 3, '2', 'Sharon Calhoun', '14', '4', '2023-01-19 03:06:57', '2023-01-19 03:06:57'),
(4, 4, '5', NULL, NULL, '2', '2023-01-19 03:07:30', '2023-01-19 03:07:30'),
(5, 5, '5', NULL, NULL, '2', '2023-01-19 03:07:55', '2023-01-19 03:07:55'),
(6, 6, '0', NULL, NULL, '1', '2023-01-19 03:08:13', '2023-01-19 03:08:13'),
(7, 7, '1', NULL, NULL, '3', '2023-01-19 03:08:45', '2023-01-19 03:08:45'),
(8, 8, '1', NULL, NULL, '4', '2023-01-24 03:56:44', '2023-01-24 03:56:44'),
(9, 9, '3', NULL, NULL, '2', '2023-01-24 06:55:05', '2023-01-24 06:55:05'),
(10, 10, '4', NULL, NULL, '4', '2023-01-25 02:04:11', '2023-01-25 02:04:11'),
(11, 11, '0', NULL, NULL, '1', '2023-01-25 02:06:32', '2023-01-25 02:06:32'),
(12, 12, '2', NULL, NULL, '3', '2023-01-27 01:36:39', '2023-01-27 01:36:39'),
(13, 13, '0', NULL, NULL, '1', '2023-01-27 02:28:49', '2023-01-27 02:28:49'),
(14, 14, '0', NULL, NULL, '1', '2023-01-27 02:50:33', '2023-01-27 02:50:33'),
(15, 15, '5', NULL, NULL, '4', '2023-01-27 02:54:05', '2023-01-27 02:54:05'),
(16, 16, '2', NULL, NULL, '3', '2023-01-27 23:14:38', '2023-01-27 23:14:38'),
(17, 17, '0', NULL, NULL, '1', '2023-01-27 23:18:18', '2023-01-27 23:18:18'),
(18, 18, '2', NULL, NULL, '1', '2023-01-27 23:19:23', '2023-01-27 23:19:23'),
(19, 19, '1', NULL, NULL, '1', '2023-01-27 23:25:27', '2023-01-27 23:25:27'),
(20, 20, '2', NULL, NULL, '3', '2023-01-27 23:26:53', '2023-01-27 23:26:53'),
(21, 21, '0', NULL, NULL, '1', '2023-01-27 23:27:29', '2023-01-27 23:27:29'),
(22, 22, '5', NULL, NULL, '2', '2023-01-27 23:29:51', '2023-01-27 23:29:51'),
(23, 23, '3', NULL, NULL, '2', '2023-01-27 23:32:44', '2023-01-27 23:32:44'),
(24, 24, '0', NULL, NULL, '1', '2023-01-27 23:33:16', '2023-01-27 23:33:16'),
(25, 25, '3', NULL, NULL, '2', '2023-01-27 23:34:18', '2023-01-27 23:34:18'),
(26, 26, '3', NULL, NULL, '4', '2023-01-27 23:35:09', '2023-01-27 23:35:09'),
(27, 27, '0', NULL, NULL, '1', '2023-01-28 02:29:43', '2023-01-28 02:29:43'),
(28, 28, '0', NULL, NULL, '1', '2023-01-28 02:32:05', '2023-01-28 02:32:05'),
(29, 29, '1', NULL, NULL, '2', '2023-01-28 02:46:15', '2023-01-28 02:46:15'),
(30, 30, '4', NULL, NULL, '2', '2023-01-28 02:56:22', '2023-01-28 02:56:22'),
(31, 31, '3', NULL, NULL, '1', '2023-01-28 03:00:52', '2023-01-28 03:00:52'),
(32, 32, '2', NULL, NULL, '3', '2023-01-28 03:30:25', '2023-01-28 03:30:25'),
(33, 33, '4', NULL, NULL, '2', '2023-01-28 03:31:56', '2023-01-28 03:31:56'),
(34, 34, '2', NULL, NULL, '4', '2023-01-28 03:34:46', '2023-01-28 03:34:46'),
(35, 35, '3', NULL, NULL, '2', '2023-01-28 03:41:44', '2023-01-28 03:41:44'),
(36, 36, '0', NULL, NULL, '1', '2023-01-28 03:45:55', '2023-01-28 03:45:55'),
(37, 37, '4', NULL, NULL, '3', '2023-01-28 03:57:12', '2023-01-28 03:57:12'),
(38, 38, '3', NULL, NULL, '2', '2023-02-11 01:47:17', '2023-02-11 01:47:17');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `embed_map_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `image`, `contact`, `address`, `city`, `state`, `country`, `embed_map_link`, `status`, `created_at`, `updated_at`) VALUES
(1, '1662983118.jpg', '(601)602-3624', '423 Weathersby Road Suite 240, Hattiesburg, MS 39402', 'Hattiesburg', 'Mississippi', 'United States', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107905.66700812282!2d-90.26382761943357!3d32.31045414791606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86282b7f90741b21%3A0x713cde441f038a0!2sJackson%2C%20MS%2C%20USA!5e0!3m2!1sen!2s!4v1652720527184!5m2!1sen!2s', 1, '2022-05-18 01:05:10', '2022-09-12 18:45:18'),
(2, '1659724859.jpg', '(817)744-7424', '7833 Oakmont Blvd, Suite 110, Fort Worth, TX 76132, USA', 'Fort Worth', 'Texas', 'United States', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3358.781992316556!2d-97.42835294953825!3d32.665245096890665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864e6d45747b7c63%3A0x762569f85ab71efb!2s7833%20Oakmont%20Blvd%20%23110%2C%20Fort%20Worth%2C%20TX%2076132%2C%20USA!5e0!3m2!1sen!2s!4v1656716068330!5m2!1sen!2s', 1, '2022-05-18 01:56:07', '2023-03-10 02:13:01'),
(3, '1652723980.png', '(817)744-7424', '423 Weathersby Road Suite 240', 'Virtual', 'Telehealth', 'United States', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3255.7467335741007!2d-80.78036568480819!3d35.31227405772542!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88541dc549cf8b79%3A0xc031786876d383e7!2sVirtual%20Way%2C%20Charlotte%2C%20NC%2028262%2C%20USA!5e0!3m2!1sen!2s!4v1652723932140!5m2!1sen!2s', 1, '2022-05-18 01:59:40', '2023-03-18 02:14:02'),
(12, '1657922539.jpg', '(123)456-789', '381 MADISON AVENUE', 'New York', 'New York', 'United States', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.295392845551!2d-73.97925074931548!3d40.755527342787495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fddfe6098d%3A0x47825c7e8501829d!2s381%20Madison%20Ave%2C%20New%20York%2C%20NY%2010017%2C%20USA!5e0!3m2!1sen!2s!4v1657922517136!5m2!1sen!2s', 0, '2022-07-17 09:02:19', '2022-08-22 21:51:39');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reciever_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(119) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 2),
(4, '2021_04_27_071334_create_foriegntables_table', 2),
(5, '2021_05_08_044237_create_download_links_table', 2),
(6, '2021_06_16_213950_create_center_sections_table', 2),
(7, '2021_06_17_181825_create_cms_contents_table', 2),
(8, '2021_06_17_202144_create_basic_profiles_table', 2),
(9, '2021_06_17_202213_create_videos_table', 2),
(11, '2021_06_18_205910_create_configurations_table', 2),
(12, '2021_06_18_215546_create_banners_table', 2),
(13, '2021_06_20_203848_create_contact_inquiry_models_table', 2),
(14, '2021_06_21_102529_create_article_moldels_table', 2),
(15, '2021_06_24_160704_create_posts_table', 2),
(16, '2021_06_29_194928_create_invoicemodels_table', 2),
(18, '2021_07_08_161558_create_video_dashboards_table', 2),
(19, '2021_07_16_141447_create_sports_table', 2),
(20, '2021_07_19_160747_create_prefered_positions_table', 2),
(22, '2021_06_18_160201_create_contents_table', 3),
(23, '2021_07_28_164009_create_subscriptions_table', 4),
(24, '2021_07_28_182246_create_testimonials_table', 5),
(25, '2021_08_02_141600_basic_profiles', 6),
(26, '2021_08_05_191526_create_experiences_table', 7),
(27, '2021_08_07_125708_create_refrences_table', 8),
(28, '2021_08_09_172850_create_cover_experiences_table', 9),
(29, '2021_08_11_181511_create_section_1s_table', 9),
(30, '2021_08_12_082411_create_education_table', 10),
(31, '2021_08_12_084402_create_expertises_table', 11),
(32, '2021_08_12_084448_create_skills_stores_table', 11),
(33, '2021_08_13_122052_create_deals_table', 12),
(34, '2021_08_15_182035_create_resume1_covers_table', 13),
(35, '2021_08_19_140351_create_customization_models_table', 14),
(36, '2021_08_19_192823_create_customization_models_table', 15),
(37, '2021_09_06_164835_create_brake__book__models_table', 16),
(38, '2021_09_09_160957_create_appointment_users_table', 17),
(39, '2021_09_09_171941_create_appointment_requests_table', 18),
(40, '2014_10_12_000000_create_users_table', 19),
(41, '2014_10_12_200000_add_two_factor_columns_to_users_table', 20),
(42, '2019_12_14_000001_create_personal_access_tokens_table', 20),
(43, '2021_09_12_093411_create_sessions_table', 20),
(44, '2022_02_22_135434_create_service_models_table', 21),
(45, '2022_02_23_102639_create_images_table', 21),
(46, '2022_03_01_101538_create_locations_table', 21),
(47, '2016_06_01_000001_create_oauth_auth_codes_table', 22),
(48, '2016_06_01_000002_create_oauth_access_tokens_table', 22),
(49, '2016_06_01_000003_create_oauth_refresh_tokens_table', 22),
(50, '2016_06_01_000004_create_oauth_clients_table', 22),
(51, '2016_06_01_000005_create_oauth_personal_access_clients_table', 22),
(52, '2022_05_12_194058_create_team_management_table', 23),
(53, '2022_05_13_162538_create_specialities_table', 24),
(55, '2014_10_11_100000_create_specialities_table', 25),
(56, '2022_05_13_194307_create_team_specialities_table', 26),
(57, '2022_05_16_160731_create_locations_table', 27),
(58, '2022_05_18_151613_create_team_management__locations_table', 28),
(62, '2022_05_20_203412_create_schedule_management_table', 29),
(101, '2022_05_23_213735_create_referral_forms_table', 30),
(102, '2022_05_24_171922_create_intake_forms_table', 30),
(103, '2022_05_25_032007_create_intake_insurance_forms_table', 30),
(107, '2022_05_25_054240_create_intake_medication_forms_table', 31),
(108, '2022_05_25_063801_create_intake_drug_forms_table', 32),
(109, '2022_05_25_144523_create_intake_children_forms_table', 33),
(110, '2022_05_25_155924_create_inform_consent_forms_table', 34),
(124, '2022_05_25_165026_create_credit_card_forms_table', 35),
(125, '2022_05_25_190105_create_non_secure_forms_table', 35),
(126, '2022_05_25_194149_create_release_info_forms_table', 35),
(127, '2022_05_25_221823_create_sliding_scale_forms_table', 35),
(128, '2022_05_25_225325_create_sliding_scale_household_member_forms_table', 35),
(129, '2022_05_26_160650_create_telehealth_forms_table', 36),
(131, '2022_05_27_172853_create_intake_siblings_forms_table', 37),
(133, '2022_06_10_231403_create_packages_table', 38),
(135, '2022_06_15_155034_create_package_subscribers_table', 39),
(139, '0000_00_00_000000_create_websockets_statistics_entries_table', 41),
(141, '2022_06_15_213340_create_user_links_table', 42),
(143, '2022_06_15_213341_create_messages_table', 43),
(145, '2022_08_04_151108_create_faq_types_table', 45),
(146, '2022_07_26_182224_create_faqs_table', 46),
(147, '2022_08_15_235502_create_pdfs_table', 47);

-- --------------------------------------------------------

--
-- Table structure for table `non_secure_forms`
--

CREATE TABLE `non_secure_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `your_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `non_secure_checkboxes` text COLLATE utf8mb4_unicode_ci,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `non_secure_forms`
--

INSERT INTO `non_secure_forms` (`id`, `user_id`, `team_member_id`, `name`, `date_of_birth`, `your_name`, `non_secure_checkboxes`, `signature`, `is_active`, `created_at`, `updated_at`) VALUES
(3, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:45', '2023-01-15 09:57:45'),
(4, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:46', '2023-01-15 09:57:46'),
(6, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:46', '2023-01-15 09:57:46'),
(7, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '${839308886+836492900}', '1', '2023-01-15 09:57:47', '2023-01-15 09:57:47'),
(8, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:47', '2023-01-15 09:57:47'),
(9, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456|expr 988051095 + 938390155', '1', '2023-01-15 09:57:48', '2023-01-15 09:57:48'),
(10, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:48', '2023-01-15 09:57:48'),
(11, NULL, NULL, 'admin', '123456', '\'-var_dump(md5(600052525))-\'', '[\"5\"]', '123456', '1', '2023-01-15 09:57:48', '2023-01-15 09:57:48'),
(12, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:49', '2023-01-15 09:57:49'),
(13, NULL, NULL, 'admin', '123456', '${997654874+889301588}', '[\"5\"]', '123456', '1', '2023-01-15 09:57:49', '2023-01-15 09:57:49'),
(14, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:49', '2023-01-15 09:57:49'),
(15, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456$(expr 879301441 + 975931376)', '1', '2023-01-15 09:57:49', '2023-01-15 09:57:49'),
(16, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:49', '2023-01-15 09:57:49'),
(17, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:50', '2023-01-15 09:57:50'),
(18, NULL, NULL, 'admin', '123456', 'admin\'and/**/extractvalue(1,concat(char(126),md5(1297130351)))and\'', '[\"5\"]', '123456', '1', '2023-01-15 09:57:51', '2023-01-15 09:57:51'),
(19, NULL, NULL, 'admin', '/*1*/{{827530750+864713631}}', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:51', '2023-01-15 09:57:51'),
(20, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456&set /A 965701664+834400092', '1', '2023-01-15 09:57:51', '2023-01-15 09:57:51'),
(21, NULL, NULL, 'admin', '${@var_dump(md5(537808104))};', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:51', '2023-01-15 09:57:51'),
(22, NULL, NULL, 'admin', '${944743270+822410088}', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:51', '2023-01-15 09:57:51'),
(23, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\/**\\/and+0=0\"]', '123456', '1', '2023-01-15 09:57:51', '2023-01-15 09:57:51'),
(24, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:52', '2023-01-15 09:57:52'),
(25, NULL, NULL, 'admin', '123456', 'admin\"and/**/extractvalue(1,concat(char(126),md5(1196742450)))and\"', '[\"5\"]', '123456', '1', '2023-01-15 09:57:52', '2023-01-15 09:57:52'),
(26, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', 'expr 880242115 + 988469884', '1', '2023-01-15 09:57:52', '2023-01-15 09:57:52'),
(27, NULL, NULL, 'admin', '\'-var_dump(md5(910136036))-\'', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:52', '2023-01-15 09:57:52'),
(28, NULL, NULL, 'admin', '${914904059+948496456}', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:52', '2023-01-15 09:57:52'),
(29, NULL, NULL, '${922436366+929105552}', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:53', '2023-01-15 09:57:53'),
(30, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\/**\\/and+0=5\"]', '123456', '1', '2023-01-15 09:57:53', '2023-01-15 09:57:53'),
(31, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:54', '2023-01-15 09:57:54'),
(32, NULL, NULL, 'admin', '123456', 'extractvalue(1,concat(char(126),md5(1412551281)))', '[\"5\"]', '123456', '1', '2023-01-15 09:57:54', '2023-01-15 09:57:54'),
(33, NULL, NULL, 'admin', '123456', 'admin\nexpr 960882385 + 940867514', '[\"5\"]', '123456', '1', '2023-01-15 09:57:54', '2023-01-15 09:57:54'),
(34, NULL, NULL, '${@var_dump(md5(686302070))};', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:54', '2023-01-15 09:57:54'),
(35, NULL, NULL, 'admin', '${(966969434+938032871)?c}', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:54', '2023-01-15 09:57:54'),
(36, NULL, NULL, 'admin', '123456', 'admin', '[\"${930250287+928447623}\"]', '123456', '1', '2023-01-15 09:57:54', '2023-01-15 09:57:54'),
(37, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'and\'g\'=\'g\"]', '123456', '1', '2023-01-15 09:57:55', '2023-01-15 09:57:55'),
(38, NULL, NULL, 'admin', '123456', 'admin\'and(select\'1\'from/**/cast(md5(1556591579)as/**/int))>\'0', '[\"5\"]', '123456', '1', '2023-01-15 09:57:55', '2023-01-15 09:57:55'),
(39, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:55', '2023-01-15 09:57:55'),
(40, NULL, NULL, '\'-var_dump(md5(842630172))-\'', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:55', '2023-01-15 09:57:55'),
(41, NULL, NULL, 'admin', '123456', 'admin|expr 803731606 + 930160177', '[\"5\"]', '123456', '1', '2023-01-15 09:57:55', '2023-01-15 09:57:55'),
(42, NULL, NULL, 'admin', '#set($c=846759223+827408315)${c}$c', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:55', '2023-01-15 09:57:55'),
(43, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'and\'n\'=\'i\"]', '123456', '1', '2023-01-15 09:57:56', '2023-01-15 09:57:56'),
(44, NULL, NULL, 'admin', '123456', 'admin/**/and/**/cast(md5(\'1951297020\')as/**/int)>0', '[\"5\"]', '123456', '1', '2023-01-15 09:57:56', '2023-01-15 09:57:56'),
(45, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:56', '2023-01-15 09:57:56'),
(46, NULL, NULL, 'admin', '123456', 'admin', '[\"${@var_dump(md5(141712440))};\"]', '123456', '1', '2023-01-15 09:57:56', '2023-01-15 09:57:56'),
(47, NULL, NULL, 'admin', '123456', 'admin$(expr 840719416 + 841529670)', '[\"5\"]', '123456', '1', '2023-01-15 09:57:56', '2023-01-15 09:57:56'),
(48, NULL, NULL, 'admin', '<%- 953212117+922218462 %>', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:56', '2023-01-15 09:57:56'),
(49, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\\"and\\\"c\\\"=\\\"c\"]', '123456', '1', '2023-01-15 09:57:57', '2023-01-15 09:57:57'),
(50, NULL, NULL, 'admin', '123456', 'convert(int,sys.fn_sqlvarbasetostr(HashBytes(\'MD5\',\'1567461129\')))', '[\"5\"]', '123456', '1', '2023-01-15 09:57:57', '2023-01-15 09:57:57'),
(51, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:57', '2023-01-15 09:57:57'),
(52, NULL, NULL, 'admin', '123456', 'admin', '[\"\'-var_dump(md5(644601634))-\'\"]', '123456', '1', '2023-01-15 09:57:58', '2023-01-15 09:57:58'),
(53, NULL, NULL, 'admin', '123456', 'admin&set /A 824981334+910730708', '[\"5\"]', '123456', '1', '2023-01-15 09:57:58', '2023-01-15 09:57:58'),
(54, NULL, NULL, '/*1*/{{970827463+997372806}}', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:58', '2023-01-15 09:57:58'),
(55, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\\"and\\\"x\\\"=\\\"z\"]', '123456', '1', '2023-01-15 09:57:59', '2023-01-15 09:57:59'),
(56, NULL, NULL, 'admin', '123456', 'admin\'and/**/convert(int,sys.fn_sqlvarbasetostr(HashBytes(\'MD5\',\'1428411315\')))>\'0', '[\"5\"]', '123456', '1', '2023-01-15 09:57:59', '2023-01-15 09:57:59'),
(57, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:59', '2023-01-15 09:57:59'),
(58, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '${@var_dump(md5(370005587))};', '1', '2023-01-15 09:57:59', '2023-01-15 09:57:59'),
(59, NULL, NULL, '${939899635+837594080}', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:57:59', '2023-01-15 09:57:59'),
(60, NULL, NULL, 'admin', '123456', 'expr 830399854 + 844759812', '[\"5\"]', '123456', '1', '2023-01-15 09:57:59', '2023-01-15 09:57:59'),
(61, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:00', '2023-01-15 09:58:00'),
(62, NULL, NULL, 'admin', '123456', 'admin鎈\'\"\\(', '[\"5\"]', '123456', '1', '2023-01-15 09:58:00', '2023-01-15 09:58:00'),
(63, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:00', '2023-01-15 09:58:00'),
(64, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '\'-var_dump(md5(145050987))-\'', '1', '2023-01-15 09:58:00', '2023-01-15 09:58:00'),
(65, NULL, NULL, '${(885279742+817327828)?c}', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:00', '2023-01-15 09:58:00'),
(66, NULL, NULL, 'admin', '123456\nexpr 975691892 + 833572411', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:01', '2023-01-15 09:58:01'),
(67, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:01', '2023-01-15 09:58:01'),
(68, NULL, NULL, 'admin', '123456', 'admin\'\"\\(', '[\"5\"]', '123456', '1', '2023-01-15 09:58:01', '2023-01-15 09:58:01'),
(69, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:01', '2023-01-15 09:58:01'),
(70, NULL, NULL, '#set($c=879038841+826719893)${c}$c', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:01', '2023-01-15 09:58:01'),
(71, NULL, NULL, 'admin', '123456|expr 830048717 + 967004577', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:02', '2023-01-15 09:58:02'),
(72, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:02', '2023-01-15 09:58:02'),
(73, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:02', '2023-01-15 09:58:02'),
(74, NULL, NULL, '<%- 930901956+912257028 %>', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:02', '2023-01-15 09:58:02'),
(75, NULL, NULL, 'admin', '123456$(expr 888604177 + 919621493)', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:03', '2023-01-15 09:58:03'),
(76, NULL, NULL, 'admin', '123456', 'admin', '[\"(select*from(select+sleep(0)union\\/**\\/select+1)a)\"]', '123456', '1', '2023-01-15 09:58:03', '2023-01-15 09:58:03'),
(77, NULL, NULL, 'admin', '123456', 'admin', '[\"\\/*1*\\/{{870128084+827292971}}\"]', '123456', '1', '2023-01-15 09:58:04', '2023-01-15 09:58:04'),
(78, NULL, NULL, 'admin', '123456\'and/**/extractvalue(1,concat(char(126),md5(1151801289)))and\'', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:04', '2023-01-15 09:58:04'),
(79, NULL, NULL, 'admin', '123456&set /A 833449920+836644314', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:05', '2023-01-15 09:58:05'),
(80, NULL, NULL, 'admin', '123456', 'admin', '[\"(select*from(select+sleep(3)union\\/**\\/select+1)a)\"]', '123456', '1', '2023-01-15 09:58:05', '2023-01-15 09:58:05'),
(81, NULL, NULL, 'admin', '123456', 'admin', '[\"${825886489+949353777}\"]', '123456', '1', '2023-01-15 09:58:05', '2023-01-15 09:58:05'),
(82, NULL, NULL, 'admin', '123456\"and/**/extractvalue(1,concat(char(126),md5(1958277574)))and\"', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:05', '2023-01-15 09:58:05'),
(83, NULL, NULL, 'admin', 'expr 839600655 + 874037373', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:06', '2023-01-15 09:58:06'),
(84, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'and(select*from(select+sleep(0))a\\/**\\/union\\/**\\/select+1)=\'\"]', '123456', '1', '2023-01-15 09:58:06', '2023-01-15 09:58:06'),
(85, NULL, NULL, 'admin', '123456', 'admin', '[\"${(898830741+957919923)?c}\"]', '123456', '1', '2023-01-15 09:58:06', '2023-01-15 09:58:06'),
(86, NULL, NULL, 'admin', 'extractvalue(1,concat(char(126),md5(1671421654)))', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:06', '2023-01-15 09:58:06'),
(87, NULL, NULL, 'admin\nexpr 981662912 + 816566261', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:07', '2023-01-15 09:58:07'),
(88, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'and(select*from(select+sleep(3))a\\/**\\/union\\/**\\/select+1)=\'\"]', '123456', '1', '2023-01-15 09:58:07', '2023-01-15 09:58:07'),
(89, NULL, NULL, 'admin', '123456', 'admin', '[\"#set($c=801561804+977021383)${c}$c\"]', '123456', '1', '2023-01-15 09:58:07', '2023-01-15 09:58:07'),
(90, NULL, NULL, 'admin', '123456\'and(select\'1\'from/**/cast(md5(1059933163)as/**/int))>\'0', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:08', '2023-01-15 09:58:08'),
(91, NULL, NULL, 'admin|expr 985848780 + 888371356', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:08', '2023-01-15 09:58:08'),
(92, NULL, NULL, 'admin', '123456', 'admin', '[\"<%- 866986913+950470675 %>\"]', '123456', '1', '2023-01-15 09:58:09', '2023-01-15 09:58:09'),
(93, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\\"and(select*from(select+sleep(0))a\\/**\\/union\\/**\\/select+1)=\\\"\"]', '123456', '1', '2023-01-15 09:58:09', '2023-01-15 09:58:09'),
(94, NULL, NULL, 'admin', '123456/**/and/**/cast(md5(\'1090093930\')as/**/int)>0', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:09', '2023-01-15 09:58:09'),
(95, NULL, NULL, 'admin$(expr 931568391 + 909748683)', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:09', '2023-01-15 09:58:09'),
(96, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '/*1*/{{925329688+891523029}}', '1', '2023-01-15 09:58:10', '2023-01-15 09:58:10'),
(97, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\\"and(select*from(select+sleep(3))a\\/**\\/union\\/**\\/select+1)=\\\"\"]', '123456', '1', '2023-01-15 09:58:10', '2023-01-15 09:58:10'),
(98, NULL, NULL, 'admin', 'convert(int,sys.fn_sqlvarbasetostr(HashBytes(\'MD5\',\'1472414249\')))', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:10', '2023-01-15 09:58:10'),
(99, NULL, NULL, 'admin&set /A 824407416+829699760', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:10', '2023-01-15 09:58:10'),
(100, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '${824160756+997004669}', '1', '2023-01-15 09:58:11', '2023-01-15 09:58:11'),
(101, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\/**\\/and(select+1\\/**\\/from\\/**\\/pg_sleep(0))>0\\/**\\/\"]', '123456', '1', '2023-01-15 09:58:11', '2023-01-15 09:58:11'),
(102, NULL, NULL, 'admin', '123456\'and/**/convert(int,sys.fn_sqlvarbasetostr(HashBytes(\'MD5\',\'1288587497\')))>\'0', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:11', '2023-01-15 09:58:11'),
(103, NULL, NULL, 'expr 815117809 + 922766424', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:12', '2023-01-15 09:58:12'),
(104, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '${(885078121+888307029)?c}', '1', '2023-01-15 09:58:12', '2023-01-15 09:58:12'),
(105, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\/**\\/and(select+1\\/**\\/from\\/**\\/pg_sleep(3))>0\\/**\\/\"]', '123456', '1', '2023-01-15 09:58:13', '2023-01-15 09:58:13'),
(106, NULL, NULL, 'admin', '123456鎈\'\"\\(', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:13', '2023-01-15 09:58:13'),
(107, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\nexpr 899017574 + 899353919\"]', '123456', '1', '2023-01-15 09:58:13', '2023-01-15 09:58:13'),
(108, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '#set($c=857411835+953754492)${c}$c', '1', '2023-01-15 09:58:13', '2023-01-15 09:58:13'),
(109, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'\\/**\\/and(select\'1\'from\\/**\\/pg_sleep(0))::text>\'0\"]', '123456', '1', '2023-01-15 09:58:14', '2023-01-15 09:58:14'),
(110, NULL, NULL, 'admin', '123456\'\"\\(', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:14', '2023-01-15 09:58:14'),
(111, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '<%- 835242742+984380474 %>', '1', '2023-01-15 09:58:14', '2023-01-15 09:58:14'),
(112, NULL, NULL, 'admin', '123456', 'admin', '[\"5|expr 857319558 + 971790491\"]', '123456', '1', '2023-01-15 09:58:14', '2023-01-15 09:58:14'),
(113, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'\\/**\\/and(select\'1\'from\\/**\\/pg_sleep(3))::text>\'0\"]', '123456', '1', '2023-01-15 09:58:15', '2023-01-15 09:58:15'),
(114, NULL, NULL, 'admin\'and/**/extractvalue(1,concat(char(126),md5(1028173604)))and\'', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:15', '2023-01-15 09:58:15'),
(115, NULL, NULL, 'admin', '123456', '/*1*/{{826073797+965764546}}', '[\"5\"]', '123456', '1', '2023-01-15 09:58:16', '2023-01-15 09:58:16'),
(116, NULL, NULL, 'admin', '123456', 'admin', '[\"5$(expr 846540483 + 983382139)\"]', '123456', '1', '2023-01-15 09:58:16', '2023-01-15 09:58:16'),
(117, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\/**\\/and(select+1)>0waitfor\\/**\\/delay\'0:0:0\'\\/**\\/\"]', '123456', '1', '2023-01-15 09:58:16', '2023-01-15 09:58:16'),
(118, NULL, NULL, 'admin\"and/**/extractvalue(1,concat(char(126),md5(1545567590)))and\"', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:17', '2023-01-15 09:58:17'),
(119, NULL, NULL, 'admin', '123456', '${994593695+845310649}', '[\"5\"]', '123456', '1', '2023-01-15 09:58:17', '2023-01-15 09:58:17'),
(120, NULL, NULL, 'admin', '123456', 'admin', '[\"5&set \\/A 850594309+857572038\"]', '123456', '1', '2023-01-15 09:58:17', '2023-01-15 09:58:17'),
(121, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\/**\\/and(select+1)>0waitfor\\/**\\/delay\'0:0:3\'\\/**\\/\"]', '123456', '1', '2023-01-15 09:58:17', '2023-01-15 09:58:17'),
(122, NULL, NULL, 'extractvalue(1,concat(char(126),md5(1604982577)))', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:18', '2023-01-15 09:58:18'),
(123, NULL, NULL, 'admin', '123456', '${(976774079+958596443)?c}', '[\"5\"]', '123456', '1', '2023-01-15 09:58:18', '2023-01-15 09:58:18'),
(124, NULL, NULL, 'admin', '123456', 'admin', '[\"expr 868363835 + 904068157\"]', '123456', '1', '2023-01-15 09:58:18', '2023-01-15 09:58:18'),
(125, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'and(select+1)>0waitfor\\/**\\/delay\'0:0:0\"]', '123456', '1', '2023-01-15 09:58:19', '2023-01-15 09:58:19'),
(126, NULL, NULL, 'admin\'and(select\'1\'from/**/cast(md5(1059848279)as/**/int))>\'0', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:19', '2023-01-15 09:58:19'),
(127, NULL, NULL, 'admin', '123456', '#set($c=954834290+993758582)${c}$c', '[\"5\"]', '123456', '1', '2023-01-15 09:58:19', '2023-01-15 09:58:19'),
(128, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'and(select+1)>0waitfor\\/**\\/delay\'0:0:3\"]', '123456', '1', '2023-01-15 09:58:20', '2023-01-15 09:58:20'),
(129, NULL, NULL, 'admin/**/and/**/cast(md5(\'1666597523\')as/**/int)>0', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:20', '2023-01-15 09:58:20'),
(130, NULL, NULL, 'admin', '123456', '<%- 851752863+941807521 %>', '[\"5\"]', '123456', '1', '2023-01-15 09:58:20', '2023-01-15 09:58:20'),
(131, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\/**\\/and\\/**\\/4=DBMS_PIPE.RECEIVE_MESSAGE(\'e\',0)\"]', '123456', '1', '2023-01-15 09:58:21', '2023-01-15 09:58:21'),
(132, NULL, NULL, 'convert(int,sys.fn_sqlvarbasetostr(HashBytes(\'MD5\',\'1036093298\')))', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:21', '2023-01-15 09:58:21'),
(133, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\/**\\/and\\/**\\/1=DBMS_PIPE.RECEIVE_MESSAGE(\'r\',3)\"]', '123456', '1', '2023-01-15 09:58:22', '2023-01-15 09:58:22'),
(134, NULL, NULL, 'admin\'and/**/convert(int,sys.fn_sqlvarbasetostr(HashBytes(\'MD5\',\'1078661560\')))>\'0', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:23', '2023-01-15 09:58:23'),
(135, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'\\/**\\/and\\/**\\/DBMS_PIPE.RECEIVE_MESSAGE(\'a\',0)=\'a\"]', '123456', '1', '2023-01-15 09:58:24', '2023-01-15 09:58:24'),
(136, NULL, NULL, 'admin鎈\'\"\\(', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:24', '2023-01-15 09:58:24'),
(137, NULL, NULL, 'admin\'\"\\(', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:58:25', '2023-01-15 09:58:25'),
(138, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'\\/**\\/and\\/**\\/DBMS_PIPE.RECEIVE_MESSAGE(\'e\',3)=\'e\"]', '123456', '1', '2023-01-15 09:58:25', '2023-01-15 09:58:25'),
(139, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'and\\/**\\/extractvalue(1,concat(char(126),md5(1624115856)))and\'\"]', '123456', '1', '2023-01-15 09:58:26', '2023-01-15 09:58:26'),
(140, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456/**/and+2=2', '1', '2023-01-15 09:58:27', '2023-01-15 09:58:27'),
(141, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\\"and\\/**\\/extractvalue(1,concat(char(126),md5(1015856532)))and\\\"\"]', '123456', '1', '2023-01-15 09:58:27', '2023-01-15 09:58:27'),
(142, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456/**/and+3=7', '1', '2023-01-15 09:58:28', '2023-01-15 09:58:28'),
(143, NULL, NULL, 'admin', '123456', 'admin', '[\"extractvalue(1,concat(char(126),md5(1548878726)))\"]', '123456', '1', '2023-01-15 09:58:28', '2023-01-15 09:58:28'),
(144, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'and(select\'1\'from\\/**\\/cast(md5(1248287830)as\\/**\\/int))>\'0\"]', '123456', '1', '2023-01-15 09:58:29', '2023-01-15 09:58:29'),
(145, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'and\'p\'=\'p', '1', '2023-01-15 09:58:29', '2023-01-15 09:58:29'),
(146, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\/**\\/and\\/**\\/cast(md5(\'1857414167\')as\\/**\\/int)>0\"]', '123456', '1', '2023-01-15 09:58:31', '2023-01-15 09:58:31'),
(147, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'and\'u\'=\'e', '1', '2023-01-15 09:58:31', '2023-01-15 09:58:31'),
(148, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\"and\"h\"=\"h', '1', '2023-01-15 09:58:32', '2023-01-15 09:58:32'),
(149, NULL, NULL, 'admin', '123456', 'admin', '[\"convert(int,sys.fn_sqlvarbasetostr(HashBytes(\'MD5\',\'1846342478\')))\"]', '123456', '1', '2023-01-15 09:58:32', '2023-01-15 09:58:32'),
(150, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\"and\"h\"=\"d', '1', '2023-01-15 09:58:33', '2023-01-15 09:58:33'),
(151, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'and\\/**\\/convert(int,sys.fn_sqlvarbasetostr(HashBytes(\'MD5\',\'1600733422\')))>\'0\"]', '123456', '1', '2023-01-15 09:58:33', '2023-01-15 09:58:33'),
(152, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '(select*from(select+sleep(0)union/**/select+1)a)', '1', '2023-01-15 09:58:34', '2023-01-15 09:58:34'),
(153, NULL, NULL, 'admin', '123456', 'admin', '[\"5\\u9388\'\\\"\\\\(\"]', '123456', '1', '2023-01-15 09:58:34', '2023-01-15 09:58:34'),
(154, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '(select*from(select+sleep(3)union/**/select+1)a)', '1', '2023-01-15 09:58:35', '2023-01-15 09:58:35'),
(155, NULL, NULL, 'admin', '123456', 'admin', '[\"5\'\\\"\\\\(\"]', '123456', '1', '2023-01-15 09:58:35', '2023-01-15 09:58:35'),
(156, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'and(select*from(select+sleep(0))a/**/union/**/select+1)=\'', '1', '2023-01-15 09:58:36', '2023-01-15 09:58:36'),
(157, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'and/**/extractvalue(1,concat(char(126),md5(1961168790)))and\'', '1', '2023-01-15 09:58:37', '2023-01-15 09:58:37'),
(158, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'and(select*from(select+sleep(3))a/**/union/**/select+1)=\'', '1', '2023-01-15 09:58:38', '2023-01-15 09:58:38'),
(159, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\"and/**/extractvalue(1,concat(char(126),md5(1607669167)))and\"', '1', '2023-01-15 09:58:38', '2023-01-15 09:58:38'),
(160, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\"and(select*from(select+sleep(0))a/**/union/**/select+1)=\"', '1', '2023-01-15 09:58:39', '2023-01-15 09:58:39'),
(161, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', 'extractvalue(1,concat(char(126),md5(1100448843)))', '1', '2023-01-15 09:58:39', '2023-01-15 09:58:39'),
(162, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\"and(select*from(select+sleep(3))a/**/union/**/select+1)=\"', '1', '2023-01-15 09:58:40', '2023-01-15 09:58:40'),
(163, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'and(select\'1\'from/**/cast(md5(1161633190)as/**/int))>\'0', '1', '2023-01-15 09:58:41', '2023-01-15 09:58:41'),
(164, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456/**/and(select+1/**/from/**/pg_sleep(0))>0/**/', '1', '2023-01-15 09:58:42', '2023-01-15 09:58:42'),
(165, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456/**/and/**/cast(md5(\'1766730566\')as/**/int)>0', '1', '2023-01-15 09:58:42', '2023-01-15 09:58:42'),
(166, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456/**/and(select+1/**/from/**/pg_sleep(3))>0/**/', '1', '2023-01-15 09:58:43', '2023-01-15 09:58:43'),
(167, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', 'convert(int,sys.fn_sqlvarbasetostr(HashBytes(\'MD5\',\'1473295184\')))', '1', '2023-01-15 09:58:43', '2023-01-15 09:58:43'),
(168, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'and/**/convert(int,sys.fn_sqlvarbasetostr(HashBytes(\'MD5\',\'1639130949\')))>\'0', '1', '2023-01-15 09:58:44', '2023-01-15 09:58:44'),
(169, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'/**/and(select\'1\'from/**/pg_sleep(0))::text>\'0', '1', '2023-01-15 09:58:45', '2023-01-15 09:58:45'),
(170, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456鎈\'\"\\(', '1', '2023-01-15 09:58:46', '2023-01-15 09:58:46'),
(171, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'/**/and(select\'1\'from/**/pg_sleep(3))::text>\'0', '1', '2023-01-15 09:58:47', '2023-01-15 09:58:47'),
(172, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'\"\\(', '1', '2023-01-15 09:58:47', '2023-01-15 09:58:47'),
(173, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456/**/and(select+1)>0waitfor/**/delay\'0:0:0\'/**/', '1', '2023-01-15 09:58:48', '2023-01-15 09:58:48'),
(174, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456/**/and(select+1)>0waitfor/**/delay\'0:0:3\'/**/', '1', '2023-01-15 09:58:49', '2023-01-15 09:58:49'),
(175, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'and(select+1)>0waitfor/**/delay\'0:0:0', '1', '2023-01-15 09:58:51', '2023-01-15 09:58:51'),
(176, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'and(select+1)>0waitfor/**/delay\'0:0:3', '1', '2023-01-15 09:58:53', '2023-01-15 09:58:53'),
(177, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456/**/and/**/1=DBMS_PIPE.RECEIVE_MESSAGE(\'a\',0)', '1', '2023-01-15 09:58:54', '2023-01-15 09:58:54'),
(178, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456/**/and/**/2=DBMS_PIPE.RECEIVE_MESSAGE(\'m\',3)', '1', '2023-01-15 09:58:56', '2023-01-15 09:58:56'),
(179, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'/**/and/**/DBMS_PIPE.RECEIVE_MESSAGE(\'g\',0)=\'g', '1', '2023-01-15 09:58:58', '2023-01-15 09:58:58'),
(180, NULL, NULL, 'admin', '123456', 'admin', '[\"5\"]', '123456\'/**/and/**/DBMS_PIPE.RECEIVE_MESSAGE(\'a\',3)=\'a', '1', '2023-01-15 09:58:59', '2023-01-15 09:58:59'),
(181, NULL, NULL, 'admin', '123456', 'admin\'and\'n\'=\'n', '[\"5\"]', '123456', '1', '2023-01-15 09:59:01', '2023-01-15 09:59:01'),
(182, NULL, NULL, 'admin', '123456', 'admin\'and\'o\'=\'c', '[\"5\"]', '123456', '1', '2023-01-15 09:59:02', '2023-01-15 09:59:02'),
(183, NULL, NULL, 'admin', '123456', 'admin\"and\"l\"=\"l', '[\"5\"]', '123456', '1', '2023-01-15 09:59:03', '2023-01-15 09:59:03'),
(184, NULL, NULL, 'admin', '123456', 'admin\"and\"o\"=\"r', '[\"5\"]', '123456', '1', '2023-01-15 09:59:05', '2023-01-15 09:59:05'),
(185, NULL, NULL, 'admin', '123456', 'admin\'and(select*from(select+sleep(0))a/**/union/**/select+1)=\'', '[\"5\"]', '123456', '1', '2023-01-15 09:59:06', '2023-01-15 09:59:06'),
(186, NULL, NULL, 'admin', '123456', 'admin\'and(select*from(select+sleep(3))a/**/union/**/select+1)=\'', '[\"5\"]', '123456', '1', '2023-01-15 09:59:08', '2023-01-15 09:59:08'),
(187, NULL, NULL, 'admin', '123456', 'admin\"and(select*from(select+sleep(0))a/**/union/**/select+1)=\"', '[\"5\"]', '123456', '1', '2023-01-15 09:59:09', '2023-01-15 09:59:09'),
(188, NULL, NULL, 'admin', '123456', 'admin\"and(select*from(select+sleep(3))a/**/union/**/select+1)=\"', '[\"5\"]', '123456', '1', '2023-01-15 09:59:11', '2023-01-15 09:59:11'),
(189, NULL, NULL, 'admin', '123456', 'admin\'/**/and(select\'1\'from/**/pg_sleep(0))::text>\'0', '[\"5\"]', '123456', '1', '2023-01-15 09:59:13', '2023-01-15 09:59:13'),
(190, NULL, NULL, 'admin', '123456', 'admin\'/**/and(select\'1\'from/**/pg_sleep(3))::text>\'0', '[\"5\"]', '123456', '1', '2023-01-15 09:59:14', '2023-01-15 09:59:14'),
(191, NULL, NULL, 'admin', '123456', 'admin\'and(select+1)>0waitfor/**/delay\'0:0:0', '[\"5\"]', '123456', '1', '2023-01-15 09:59:16', '2023-01-15 09:59:16'),
(192, NULL, NULL, 'admin', '123456', 'admin\'and(select+1)>0waitfor/**/delay\'0:0:3', '[\"5\"]', '123456', '1', '2023-01-15 09:59:18', '2023-01-15 09:59:18'),
(193, NULL, NULL, 'admin', '123456', 'admin\'/**/and/**/DBMS_PIPE.RECEIVE_MESSAGE(\'y\',0)=\'y', '[\"5\"]', '123456', '1', '2023-01-15 09:59:20', '2023-01-15 09:59:20'),
(194, NULL, NULL, 'admin', '123456', 'admin\'/**/and/**/DBMS_PIPE.RECEIVE_MESSAGE(\'u\',3)=\'u', '[\"5\"]', '123456', '1', '2023-01-15 09:59:21', '2023-01-15 09:59:21'),
(195, NULL, NULL, 'admin', '123456/**/and+2=2', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:31', '2023-01-15 09:59:31'),
(196, NULL, NULL, 'admin', '123456/**/and+0=7', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:32', '2023-01-15 09:59:32'),
(197, NULL, NULL, 'admin', '123456\'and\'f\'=\'f', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:33', '2023-01-15 09:59:33'),
(198, NULL, NULL, 'admin', '123456\'and\'o\'=\'c', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:34', '2023-01-15 09:59:34'),
(199, NULL, NULL, 'admin', '123456\"and\"t\"=\"t', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:36', '2023-01-15 09:59:36'),
(200, NULL, NULL, 'admin', '123456\"and\"g\"=\"z', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:37', '2023-01-15 09:59:37'),
(201, NULL, NULL, 'admin', '(select*from(select+sleep(0)union/**/select+1)a)', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:38', '2023-01-15 09:59:38'),
(202, NULL, NULL, 'admin', '(select*from(select+sleep(3)union/**/select+1)a)', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:40', '2023-01-15 09:59:40'),
(203, NULL, NULL, 'admin', '123456\'and(select*from(select+sleep(0))a/**/union/**/select+1)=\'', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:41', '2023-01-15 09:59:41'),
(204, NULL, NULL, 'admin', '123456\'and(select*from(select+sleep(3))a/**/union/**/select+1)=\'', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:43', '2023-01-15 09:59:43'),
(205, NULL, NULL, 'admin', '123456\"and(select*from(select+sleep(0))a/**/union/**/select+1)=\"', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:45', '2023-01-15 09:59:45'),
(206, NULL, NULL, 'admin', '123456\"and(select*from(select+sleep(3))a/**/union/**/select+1)=\"', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:46', '2023-01-15 09:59:46'),
(207, NULL, NULL, 'admin', '123456/**/and(select+1/**/from/**/pg_sleep(0))>0/**/', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:48', '2023-01-15 09:59:48'),
(208, NULL, NULL, 'admin', '123456/**/and(select+1/**/from/**/pg_sleep(3))>0/**/', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:50', '2023-01-15 09:59:50'),
(209, NULL, NULL, 'admin', '123456\'/**/and(select\'1\'from/**/pg_sleep(0))::text>\'0', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:52', '2023-01-15 09:59:52'),
(210, NULL, NULL, 'admin', '123456\'/**/and(select\'1\'from/**/pg_sleep(3))::text>\'0', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:53', '2023-01-15 09:59:53'),
(211, NULL, NULL, 'admin', '123456/**/and(select+1)>0waitfor/**/delay\'0:0:0\'/**/', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:55', '2023-01-15 09:59:55'),
(212, NULL, NULL, 'admin', '123456/**/and(select+1)>0waitfor/**/delay\'0:0:3\'/**/', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:57', '2023-01-15 09:59:57'),
(213, NULL, NULL, 'admin', '123456\'and(select+1)>0waitfor/**/delay\'0:0:0', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 09:59:58', '2023-01-15 09:59:58'),
(214, NULL, NULL, 'admin', '123456\'and(select+1)>0waitfor/**/delay\'0:0:3', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:00', '2023-01-15 10:00:00'),
(215, NULL, NULL, 'admin', '123456/**/and/**/0=DBMS_PIPE.RECEIVE_MESSAGE(\'e\',0)', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:02', '2023-01-15 10:00:02'),
(216, NULL, NULL, 'admin', '123456/**/and/**/1=DBMS_PIPE.RECEIVE_MESSAGE(\'u\',3)', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:04', '2023-01-15 10:00:04'),
(217, NULL, NULL, 'admin', '123456\'/**/and/**/DBMS_PIPE.RECEIVE_MESSAGE(\'d\',0)=\'d', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:06', '2023-01-15 10:00:06'),
(218, NULL, NULL, 'admin', '123456\'/**/and/**/DBMS_PIPE.RECEIVE_MESSAGE(\'h\',3)=\'h', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:07', '2023-01-15 10:00:07'),
(219, NULL, NULL, 'admin\'and\'x\'=\'x', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:09', '2023-01-15 10:00:09'),
(220, NULL, NULL, 'admin\'and\'q\'=\'k', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:10', '2023-01-15 10:00:10'),
(221, NULL, NULL, 'admin\"and\"r\"=\"r', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:11', '2023-01-15 10:00:11'),
(222, NULL, NULL, 'admin\"and\"q\"=\"f', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:13', '2023-01-15 10:00:13'),
(223, NULL, NULL, 'admin\'and(select*from(select+sleep(0))a/**/union/**/select+1)=\'', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:14', '2023-01-15 10:00:14'),
(224, NULL, NULL, 'admin\'and(select*from(select+sleep(3))a/**/union/**/select+1)=\'', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:16', '2023-01-15 10:00:16'),
(225, NULL, NULL, 'admin\"and(select*from(select+sleep(0))a/**/union/**/select+1)=\"', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:17', '2023-01-15 10:00:17'),
(226, NULL, NULL, 'admin\"and(select*from(select+sleep(3))a/**/union/**/select+1)=\"', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:19', '2023-01-15 10:00:19'),
(227, NULL, NULL, 'admin\'/**/and(select\'1\'from/**/pg_sleep(0))::text>\'0', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:21', '2023-01-15 10:00:21'),
(228, NULL, NULL, 'admin\'/**/and(select\'1\'from/**/pg_sleep(3))::text>\'0', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:22', '2023-01-15 10:00:22'),
(229, NULL, NULL, 'admin\'and(select+1)>0waitfor/**/delay\'0:0:0', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:24', '2023-01-15 10:00:24'),
(230, NULL, NULL, 'admin\'and(select+1)>0waitfor/**/delay\'0:0:3', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:26', '2023-01-15 10:00:26'),
(231, NULL, NULL, 'admin\'/**/and/**/DBMS_PIPE.RECEIVE_MESSAGE(\'k\',0)=\'k', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:28', '2023-01-15 10:00:28'),
(232, NULL, NULL, 'admin\'/**/and/**/DBMS_PIPE.RECEIVE_MESSAGE(\'d\',3)=\'d', '123456', 'admin', '[\"5\"]', '123456', '1', '2023-01-15 10:00:29', '2023-01-15 10:00:29'),
(233, NULL, NULL, 'Quyn Beard', '2009-04-23', 'Cynthia Myers', '[\"3\",\"4\"]', 'Harum eum quasi mole', '1', '2023-01-28 03:57:30', '2023-01-28 03:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_listing` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_icon`, `package_title`, `package_price`, `package_listing`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Single', '10', '[\"Includes one time access link to Value Sort (expires after 30 days)\",null,null,null,null,null,null,null]', 1, '2022-06-15 05:46:27', '2022-09-10 07:53:24'),
(2, NULL, '4 pack', '35', '[\"Includes 4 one-time access link to Value Sort (expires after 60 days)\",null,null,null,null,null,null,null]', 1, '2022-06-15 05:48:13', '2022-09-10 07:53:25'),
(3, NULL, '10 Pack', '75', '[\"Includes 4 one-time access link to Value Sort (expires after 90 days)\",null,null,null,null,null,null,null]', 1, '2022-06-15 05:49:03', '2022-09-10 07:53:25'),
(4, NULL, 'Download', '25', '[\"PDF version of Value Sort for hand-on interaction (unlimited copies can be made);\",null,null,null,null,null,null,null]', 1, '2022-08-16 11:47:59', '2022-11-24 01:13:32');

-- --------------------------------------------------------

--
-- Table structure for table `package_subscribers`
--

CREATE TABLE `package_subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paypal_response` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_subscribers`
--

INSERT INTO `package_subscribers` (`id`, `user_id`, `package_id`, `package_title`, `paypal_response`, `created_at`, `updated_at`) VALUES
(3, '178', '1', 'Single', '{\"orderID\":\"9VH22556G6001115V\",\"subscriptionID\":\"I-5C356FNTNFUX\",\"facilitatorAccessToken\":\"A21AAJDF2P9jqsUFj9rjp0SWFHWIy5ADkTqOVfbM3lKVorh2g04ve7QIuXyyNe-iciXVAa4SpB7Qz7lI31JDOvj7ZmmrkVINw\",\"paymentSource\":\"paypal\"}', '2022-09-10 00:21:46', '2022-09-10 00:21:46'),
(4, '181', '3', '10 Pack', '{\"orderID\":\"67D26611S7809024K\",\"subscriptionID\":\"I-SUGJ6F4CYEBJ\",\"facilitatorAccessToken\":\"A21AAL-fl26gaAYr8SUHn3nB12nTr4Qg0rEiECaDCvPG4DlT4_u6h3ONoOWDx-EfF0gO8jfzVVSyIfm60lF4EwNt6Oxnooj7Q\",\"paymentSource\":\"paypal\"}', '2022-09-10 02:11:04', '2022-09-10 02:11:04'),
(5, '181', '3', '10 Pack', '{\"orderID\":\"8Y407312MM395434C\",\"subscriptionID\":\"I-DP6RMVNV3KT1\",\"facilitatorAccessToken\":\"A21AAL-fl26gaAYr8SUHn3nB12nTr4Qg0rEiECaDCvPG4DlT4_u6h3ONoOWDx-EfF0gO8jfzVVSyIfm60lF4EwNt6Oxnooj7Q\",\"paymentSource\":\"paypal\"}', '2022-09-10 02:16:38', '2022-09-10 02:16:38'),
(6, '181', '1', 'Single', '{\"orderID\":\"41015529JN247032H\",\"subscriptionID\":\"I-LVS9REBRTE4A\",\"facilitatorAccessToken\":\"A21AAL-fl26gaAYr8SUHn3nB12nTr4Qg0rEiECaDCvPG4DlT4_u6h3ONoOWDx-EfF0gO8jfzVVSyIfm60lF4EwNt6Oxnooj7Q\",\"paymentSource\":\"paypal\"}', '2022-09-10 02:17:46', '2022-09-10 02:17:46'),
(9, '202', '1', 'Single', '{\"orderID\":\"5377162062224684A\",\"subscriptionID\":\"I-VXYT335125R5\",\"facilitatorAccessToken\":\"A21AAJQB7HkuIi4K8cyw0IcWOuV8eqKNB5PV3pr4c9PdPWqCtPLELt8FCTBJ8wDUlD_nTj3i_zCKVJYSu_B6wJfibiO3KSJPA\",\"paymentSource\":\"paypal\"}', '2022-09-10 06:37:21', '2022-09-10 06:37:21'),
(10, '178', '3', '10 Pack', '{\"orderID\":\"4EH531487C7316728\",\"subscriptionID\":\"I-X48KJX83U4AV\",\"facilitatorAccessToken\":\"A21AAKsZfKusbr8j3Stnl1IuX6KAYm4HWiGtBUG313ZMQDXcktiXAX8CtQvZ8OFnP1Hb8HIjJiUoI3trWOqxQzrp9bRbmMitA\",\"paymentSource\":\"paypal\"}', '2022-09-10 07:18:30', '2022-09-10 07:18:30'),
(11, '178', '1', 'Single', '{\"orderID\":\"0BJ85824HB641800V\",\"subscriptionID\":\"I-G7ENFBX5S3VS\",\"facilitatorAccessToken\":\"A21AALmJZ2ukxKEET1EY3aRrPsGkpfn3-1BmfuFCgwZotelRHG1NJagcGegGvtZg_6U9KVk5c2oX3MhahuuHoTRuAbdCz8M6g\",\"paymentSource\":\"paypal\"}', '2022-09-10 07:22:14', '2022-09-10 07:22:14'),
(12, '148', '1', 'single', '{\"orderID\":\"9VH22556G6001115V\",\"subscriptionID\":\"I-5C356FNTNFUX\",\"facilitatorAccessToken\":\"A21AAJDF2P9jqsUFj9rjp0SWFHWIy5ADkTqOVfbM3lKVorh2g04ve7QIuXyyNe-iciXVAa4SpB7Qz7lI31JDOvj7ZmmrkVINw\",\"paymentSource\":\"paypal\"}', NULL, NULL),
(13, '84', '1', 'single', '{\"orderID\":\"9VH22556G6001115V\",\"subscriptionID\":\"I-5C356FNTNFUX\",\"facilitatorAccessToken\":\"A21AAJDF2P9jqsUFj9rjp0SWFHWIy5ADkTqOVfbM3lKVorh2g04ve7QIuXyyNe-iciXVAa4SpB7Qz7lI31JDOvj7ZmmrkVINw\",\"paymentSource\":\"paypal\"}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pdfs`
--

CREATE TABLE `pdfs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pdfs`
--

INSERT INTO `pdfs` (`id`, `pdf`, `created_at`, `updated_at`) VALUES
(1, '2022-09-10__1662770693__ATS Value Sort.pdf', '2022-08-17 15:43:24', '2022-09-10 07:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(119) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(119) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prefered_positions`
--

CREATE TABLE `prefered_positions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `referral_forms`
--

CREATE TABLE `referral_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `team_management_id` int(11) NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell_phone_other` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_state_zip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `insurance_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnoses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reason_for_refferal` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `refferral_source` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fax_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referral_forms`
--

INSERT INTO `referral_forms` (`id`, `user_id`, `team_management_id`, `date`, `client_name`, `date_of_birth`, `cell_phone`, `cell_phone_other`, `referral_email`, `address`, `city_state_zip`, `insurance_image`, `diagnoses`, `reason_for_refferal`, `refferral_source`, `phone_number`, `fax_number`, `email`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, '2023-01-25', 'Hello World! https://gb4fsi.com?hs=13a546b723382577121c662c41cd3ae1&', '2023-01-25', '202591307444', '202591307444', 'l49v1x@mailto.plus', '3tc0qq', '17789', '1674670111.', 'fck4d6', 'kdxtiy', 'evav3g', '202591307444', 'sm452s', 'l49v1x@mailto.plus', 1, '2023-01-26 01:08:31', '2023-01-26 01:08:31'),
(2, NULL, 0, '2023-02-05', 'Hello World! https://z5vvrt.com?hs=13a546b723382577121c662c41cd3ae1&', '2023-02-05', '393419932406', '393419932406', 'l49v1x@mailto.plus', '6vvcnh', '42720', '1675609293.', 'w6yrx7', 's0b2yv', '4qadyz', '393419932406', 'm9udbx', 'l49v1x@mailto.plus', 1, '2023-02-05 22:01:33', '2023-02-05 22:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `release_info_forms`
--

CREATE TABLE `release_info_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `your_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `person_or_agency_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_of_info_checkboxes` text COLLATE utf8mb4_unicode_ci,
  `other_symtoms` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reason` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `release_info_forms`
--

INSERT INTO `release_info_forms` (`id`, `user_id`, `team_member_id`, `your_name`, `date`, `person_or_agency_name`, `release_of_info_checkboxes`, `other_symtoms`, `reason`, `signature`, `is_active`, `created_at`, `updated_at`) VALUES
(2, NULL, NULL, 'Drew Thomas', '2000-06-02', 'Menninger Clinic Houston', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\"]', NULL, 'Treatment', 'Drew Thomas', '1', '2022-10-20 03:25:51', '2022-10-20 03:25:51'),
(3, NULL, NULL, 'Drew Thomas', '2000-06-02', 'Menninger Clinic Houston', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\"]', NULL, 'Treatment', 'Drew Thomas', '1', '2022-10-20 03:25:57', '2022-10-20 03:25:57'),
(4, NULL, NULL, 'Karlie Jordan', '2000-06-03', 'Dr. Roopsi Bassi, Pine Grove', '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\"]', NULL, 'To help better diagnose my mental state.', 'Karlie Jordan', '1', '2023-01-10 03:33:09', '2023-01-10 03:33:09'),
(5, NULL, NULL, 'admin', '123456', 'admin', '[\"10\"]', '123456', '123456', '123456', '1', '2023-01-15 09:53:15', '2023-01-15 09:53:15'),
(6, NULL, NULL, 'Keelie Brown', '2015-11-24', 'Jamalia Collins', '[\"1\",\"2\",\"3\",\"5\",\"8\"]', NULL, 'Doloremque unde quia', 'Omnis ad ad non saep', '1', '2023-01-28 03:57:34', '2023-01-28 03:57:34');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_management`
--

CREATE TABLE `schedule_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_management_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule_form_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule_form_description` text COLLATE utf8mb4_unicode_ci,
  `schedule_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(119) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule_message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule_insurance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedule_management`
--

INSERT INTO `schedule_management` (`id`, `user_id`, `team_management_id`, `schedule_form_title`, `schedule_form_description`, `schedule_name`, `schedule_email`, `schedule_phone`, `location`, `schedule_message`, `schedule_insurance`, `is_active`, `created_at`, `updated_at`) VALUES
(67, NULL, '31', NULL, NULL, 'Alexis Rose Spano', 'aspano2296@gmail.com', '4697731994', 'Fort Worth, Texas', 'Hello, I wanted to inquire about availability for services as I saw that Nikki Dear offered EMDR therapy. Currently, I am diagnosed with PTSD, general anxiety, bipolar disorder, and depression, but I am only on medicine and not any type of actual therapy. I am also looking for a reassessment on conditions.', 'Aetna', 0, '2023-02-10 23:59:42', '2023-02-10 23:59:42'),
(74, NULL, '0', NULL, NULL, 'Michelle Stanford', 'michellejuarez52@gmail.com', '(254)534-0853', 'Fort Worth, TX, USA', 'Hello, I’m interested in scheduling as a new patient', 'United Healthcare student resources', 0, '2023-03-02 08:08:31', '2023-03-02 08:08:31');

-- --------------------------------------------------------

--
-- Table structure for table `service_models`
--

CREATE TABLE `service_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(119) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('xvjBWMBfDdKiXyW8UOeXK4xmRZWpiKFFfykGeyHl', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTo0OntzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjQ5OiJodHRwOi8vbG9jYWxob3N0L0J1c2luZXNzX0J1aWxkaW5nX1Jlc3VtZS9wcm9maWxlIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDc6Imh0dHA6Ly9sb2NhbGhvc3QvQnVzaW5lc3NfQnVpbGRpbmdfUmVzdW1lL2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6ImVseUJtVVBQdEJrSjNYYkJJTHlQajZWaE00S2piQXpPb0Q5bldRSWMiO30=', 1631458838);

-- --------------------------------------------------------

--
-- Table structure for table `sliding_scale_forms`
--

CREATE TABLE `sliding_scale_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rent_mortgage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rent_mortgage_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electricity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `electricity_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_sewer_gas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `water_sewer_gas_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_payments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_payments_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_car_home_renter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insurance_car_home_renter_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_explain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_explain_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wages_salaries_or_tips` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_1` int(11) DEFAULT NULL,
  `frequency_1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unemployment_workers` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_2` int(11) DEFAULT NULL,
  `frequency_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `child_support` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_3` int(11) DEFAULT NULL,
  `frequency_3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `another_income_source` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_4` int(11) DEFAULT NULL,
  `frequency_4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `your_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliding_scale_forms`
--

INSERT INTO `sliding_scale_forms` (`id`, `user_id`, `team_member_id`, `date`, `name`, `rent_mortgage`, `rent_mortgage_amount`, `electricity`, `electricity_amount`, `water_sewer_gas`, `water_sewer_gas_amount`, `car_payments`, `car_payments_amount`, `phone`, `phone_amount`, `insurance_car_home_renter`, `insurance_car_home_renter_amount`, `other_explain`, `other_explain_amount`, `wages_salaries_or_tips`, `amount_1`, `frequency_1`, `unemployment_workers`, `amount_2`, `frequency_2`, `child_support`, `amount_3`, `frequency_3`, `another_income_source`, `amount_4`, `frequency_4`, `your_name`, `signature`, `is_active`, `created_at`, `updated_at`) VALUES
(5, NULL, NULL, '2022-10-03', 'Shakenya Simmons', '1', '750', '2', '254', '3', '55.00', '4', '430.00', '5', '75.00', '6', NULL, NULL, NULL, NULL, 2160, '[\"1\"]', '2', NULL, '', NULL, NULL, '', NULL, NULL, '', 'Shakenya Simmons', 'Shakenya Simmons', '1', '2022-10-04 05:59:41', '2022-10-04 05:59:41'),
(8, NULL, NULL, '2022-11-01', 'Savanna bowar', '1', '500', '2', '150', '3', '30', '4', NULL, '5', '175', '6', NULL, NULL, NULL, NULL, 1500, '[\"1\"]', '2', NULL, '', NULL, NULL, '', NULL, NULL, '', 'Savanna bowar', 'Savanna Bowar', '1', '2022-11-01 22:17:55', '2022-11-01 22:17:55'),
(9, NULL, NULL, '2022-12-01', 'Kamane Barnes', '1', '950', '2', '160', '3', NULL, '4', NULL, '5', '119', '6', NULL, NULL, '300', NULL, 1600, '[\"1\"]', '2', 30000, '[\"2\"]', NULL, NULL, '', NULL, NULL, '', 'Kamane Barnes', 'Kamane Barnes', '1', '2022-12-01 23:51:37', '2022-12-01 23:51:37'),
(10, NULL, NULL, '2023-01-04', 'Cara Flowers', '1', '430', '2', '0', '3', '0', '4', '0', '5', '105', '6', '130', 'groceries/gas', '150', NULL, 1500, '[\"1\"]', '2', NULL, '', NULL, NULL, '', NULL, NULL, '', 'Cara Flowers', 'Cara Flowers', '1', '2023-01-05 02:27:32', '2023-01-05 02:27:32'),
(11, NULL, NULL, '2023-01-20', 'Katie Fortenberry', '1', NULL, '2', NULL, '3', '30', '4', NULL, '5', '110', '6', NULL, NULL, NULL, NULL, 1200, '[\"1\"]', '2', NULL, '', NULL, NULL, '', NULL, NULL, '', 'Katie Fortenberry', 'Katie Fortenberry', '1', '2023-01-21 02:10:33', '2023-01-21 02:10:33'),
(12, NULL, NULL, '1999-12-13', 'Elijah Lane', '1', '16', '2', '51', '3', '35', '4', '84', '5', '94', '6', '46', '+1 (332) 376-5726', '70', NULL, 55, '[\"1\"]', '2', 43, '[\"1\"]', NULL, 68, '[\"1\",\"2\"]', NULL, 29, '[\"1\"]', 'Knox Sharpe', '+1 (582) 557-7294', '1', '2023-01-28 03:57:40', '2023-01-28 03:57:40'),
(13, NULL, NULL, '2023-02-08', 'Shayla Blackwell', '1', '370', '2', '120', '3', '0', '4', '0', '5', '160', '6', '150', 'Child Care', '420', NULL, 1100, '', '2', 0, '', NULL, 500, '', NULL, NULL, '', 'Shayla Blackwell', 'Shayla Blackwell', '1', '2023-02-08 13:26:24', '2023-02-08 13:26:24'),
(14, NULL, NULL, '2023-02-13', 'Tamara Del Pilar', '1', '400', '2', '100', '3', NULL, '4', NULL, '5', NULL, '6', NULL, 'Credit Card', '180', NULL, 600, '', '2', NULL, '', NULL, 780, '', NULL, NULL, '', 'Tamara DelPilar', 'Tamara DelPilar', '1', '2023-02-14 03:34:36', '2023-02-14 03:34:36'),
(15, NULL, NULL, '1995-08-29', 'Joycelyn Estess', '1', '850.00', '2', '140.00', '3', '40.00', '4', '481.00', '5', '385.00', '6', '183.00', NULL, NULL, NULL, 3252, '[\"1\"]', '2', NULL, '', NULL, NULL, '', NULL, NULL, '', 'Joycelyn Estess', 'Joycelyn Estess', '1', '2023-02-14 08:41:42', '2023-02-14 08:41:42'),
(16, NULL, NULL, '2023-03-08', 'Kortney Vincent', '1', '750', '2', '150', '3', '0', '4', '0', '5', '50', '6', '95', NULL, NULL, NULL, 2000, '[\"1\"]', '2', 0, '', NULL, 0, '', NULL, NULL, '', 'Kortney Vincent', 'Kortney Vinxent', '1', '2023-03-08 15:23:14', '2023-03-08 15:23:14'),
(17, NULL, NULL, '2023-03-08', 'Kortney Vincent', '1', '750', '2', '150', '3', '0', '4', '0', '5', '50', '6', '95', NULL, NULL, NULL, 2000, '[\"1\"]', '2', 0, '', NULL, 0, '', NULL, NULL, '', 'Kortney Vincent', 'Kortney Vinxent', '1', '2023-03-08 15:23:15', '2023-03-08 15:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `sliding_scale_household_member_forms`
--

CREATE TABLE `sliding_scale_household_member_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sliding_scale_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relationship_to_you` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliding_scale_household_member_forms`
--

INSERT INTO `sliding_scale_household_member_forms` (`id`, `sliding_scale_id`, `name`, `relationship_to_you`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(26, 5, 'Shakenya', NULL, '1994-05-13', '2022-10-04 05:59:41', '2022-10-04 05:59:41'),
(27, 5, 'Khloee Simmons', 'daughter', '2017-02-03', '2022-10-04 05:59:41', '2022-10-04 05:59:41'),
(28, 5, 'Saniyah Duplessis', 'Daughter', '2021-08-26', '2022-10-04 05:59:41', '2022-10-04 05:59:41'),
(29, 5, 'Devin Duplessis', 'Son', '2021-08-26', '2022-10-04 05:59:41', '2022-10-04 05:59:41'),
(30, 11, 'Katie', NULL, '1995-11-20', '2023-01-21 02:10:33', '2023-01-21 02:10:33'),
(31, 11, 'Giselle', 'Daughter', '2017-02-20', '2023-01-21 02:10:33', '2023-01-21 02:10:33'),
(32, 11, 'Anneliese', 'Daughter', '2020-04-20', '2023-01-21 02:10:33', '2023-01-21 02:10:33'),
(33, 13, 'Shayla Blackwell', NULL, '1998-03-02', '2023-02-08 13:26:24', '2023-02-08 13:26:24'),
(34, 13, 'Blakely Blackwell', 'Daughter', '2019-02-28', '2023-02-08 13:26:24', '2023-02-08 13:26:24'),
(35, 14, 'Tamara Del Pilar', NULL, '1984-07-13', '2023-02-14 03:34:36', '2023-02-14 03:34:36'),
(36, 14, 'Layne Sowell', 'Son', '2007-10-13', '2023-02-14 03:34:36', '2023-02-14 03:34:36'),
(37, 14, 'Levi Sowell', 'Son', '2009-07-13', '2023-02-14 03:34:36', '2023-02-14 03:34:36'),
(38, 14, 'Ruby Wright', 'Daughter', '2013-01-13', '2023-02-14 03:34:36', '2023-02-14 03:34:36'),
(39, 15, 'Joycelyn Estess', NULL, '1995-08-29', '2023-02-14 08:41:42', '2023-02-14 08:41:42'),
(40, 15, 'Nicholas Estess', 'Spouse', '1993-03-28', '2023-02-14 08:41:42', '2023-02-14 08:41:42'),
(41, 15, 'Jackson Estess', 'Child', '2018-04-08', '2023-02-14 08:41:42', '2023-02-14 08:41:42'),
(42, 15, 'Roman Gipson', 'Child', '2015-06-10', '2023-02-14 08:41:42', '2023-02-14 08:41:42'),
(43, 16, 'Kortney Vincent', NULL, '1999-09-08', '2023-03-08 15:23:14', '2023-03-08 15:23:14'),
(44, 16, NULL, NULL, NULL, '2023-03-08 15:23:14', '2023-03-08 15:23:14'),
(45, 16, NULL, NULL, NULL, '2023-03-08 15:23:14', '2023-03-08 15:23:14'),
(46, 17, 'Kortney Vincent', NULL, '1999-09-08', '2023-03-08 15:23:16', '2023-03-08 15:23:16'),
(47, 17, NULL, NULL, NULL, '2023-03-08 15:23:16', '2023-03-08 15:23:16'),
(48, 17, NULL, NULL, NULL, '2023-03-08 15:23:16', '2023-03-08 15:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `specialities`
--

CREATE TABLE `specialities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `speciality_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialities`
--

INSERT INTO `specialities` (`id`, `speciality_title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'LCSW', 'Licensed Certified Social Worker', 1, '2022-05-20 07:39:47', '2022-07-17 09:11:49'),
(4, 'LMSW', 'Licensed Master Social Worker', 1, '2022-08-22 20:59:32', '2022-08-22 20:59:32'),
(5, 'GRM', 'Grief Recovery Specialist', 1, '2023-03-10 02:09:05', '2023-03-10 02:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(119) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `email`, `name`, `created_at`, `updated_at`) VALUES
(4, 'admin@email.com', NULL, '2021-08-01 01:15:18', '2021-08-01 01:15:18'),
(7, 'xixno1@gmail.com', NULL, '2021-08-05 21:12:09', '2021-08-05 21:12:09'),
(8, 'dsdsdsd@gmail.com', NULL, '2021-08-23 20:33:34', '2021-08-23 20:33:34'),
(12, 'mikejaxon26@gmail.com', 'Mike Jaxon', '2021-10-18 04:21:23', '2021-10-18 04:21:23'),
(14, 'georgereece948@gmail.com', 'Fred Aston', '2021-10-18 04:48:32', '2021-10-18 04:48:32'),
(15, 'fredaston49@gmail.com', 'test', '2021-10-22 02:40:52', '2021-10-22 02:40:52'),
(22, 'dominicxavier143@gmail.com', 'Dominic Xavier', '2021-10-22 04:50:47', '2021-10-22 04:50:47'),
(23, 'sarahgomez1289@gamil.com', 'Sarah', '2021-10-24 05:24:38', '2021-10-24 05:24:38'),
(24, 'admin@venu2go.com', 'JOHaN SMITH', '2021-12-01 17:21:36', '2021-12-01 17:21:36'),
(25, 'ahmedakhter1289@yahoo.com', 'test', '2021-12-08 03:34:46', '2021-12-08 03:34:46'),
(27, 'pharmstudent25@gmail.com', 'T', '2022-01-01 22:18:20', '2022-01-01 22:18:20'),
(28, 'fonedaq@mailinator.com', 'Samuel Alford', '2022-01-08 19:52:58', '2022-01-08 19:52:58'),
(29, 'benjaminwilliam3529dsdsd@gmail.com', 'test', '2022-02-17 04:50:51', '2022-02-17 04:50:51');

-- --------------------------------------------------------

--
-- Table structure for table `team_management`
--

CREATE TABLE `team_management` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` tinytext COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `education` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciality` varchar(350) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_management`
--

INSERT INTO `team_management` (`id`, `profile_image`, `first_name`, `last_name`, `email`, `slug`, `location`, `description`, `bio`, `education`, `speciality`, `quote`, `status`, `created_at`, `updated_at`) VALUES
(31, '1661124056.png', 'Nikki', 'Dear', 'nikki@acceptedtherapy.com', 'nikki-dear', 'Alabama, Louisiana, Mississippi, and Texas', '<p style=\"text-align:center\"><span style=\"font-family:Georgia,serif\"><span style=\"font-size:24px\"><strong>Nikki is not currently accepting new clients.&nbsp;</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">My name is Nikki Dear. I am a Licensed Certified Social Worker in Alabama, Mississippi, Louisiana, and Texas. I am the owner of Accepted Therapy Services. I currently live in Fort Worth, Texas where I manage the Fort Worth office of Accepted Therapy Services.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">In 2013, I experienced a significant change and loss in my life. During this process, I found myself in a dark, hopeless place trying to find a way forward. It was in this that I found myself telling people I was &ldquo;fine.&rdquo; I realized that the world we live in tells us that we should always be &quot;fine,&quot; even when nothing is remotely fine. There is a lot of pressure to be perfect and not let other people see us struggle.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">According to Bren&eacute; Brown, the definition of shame is to &ldquo;do it all, do it perfectly, and don&rsquo;t let them see you struggle.&rdquo; So when we don&rsquo;t allow ourselves to struggle out loud, we are severely impacted, as I learned the hard way.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">My hope is to walk with you through any difficult time you may be experiencing so that you can give yourself permission to struggle out loud. This process will look differently for everyone as our issues are unique to our experiences. My specialties include trauma, shame, and grief as these are all areas that I have experienced and still, on occasion, battle.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">I am also a Grief Recovery Specialist with the Grief Recovery Method. I came to the Grief Recovery Method through my own process of working through the death of my first husband while dealing with divorcing my second husband. As I intentionally worked through the Method, I was able to realize how much my grief had been holding me back from living my life. </span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">I currently provide Grief Recovery Model to the Fort Worth, TX area and I offer the Grief Support Group, Grief One-on-One, Pet Loss Group, and Helping Children with Loss programs. I will be starting online groups in the foreseeable future. *The Grief Recovery Model can be provided to individuals who are not clients of Accepeted Thearpy Services. For more informaiton please check out the upcoming events:&nbsp;<a href=\"https://www.griefrecoverymethod.com/grms/nikki-dear\">The Grief Recovery Method</a></span></span></p>\r\n\r\n<p>&nbsp;</p>', '<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">Hello my name is Nikki Dear and I am a Grief Recovery Specialist. I came to the Grief Recovery Method through my own process of working through the death of my first husband while dealing with divorcing my second husband. As I intentionally worked through the Method, I was able to realize how much my grief had been holding me back from living my life. </span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">I currently provide Grief Recovery Model to the Fort Worth, TX area and I offer the Grief Support Group, Grief One-on-One, Pet Loss Group, and Helping Children with Loss programs. I will be starting online groups in the foreseeable future. </span></span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:12pt\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-family:&quot;Bookman Old Style&quot;,serif\">I graduated with my Master&rsquo;s Degree in Social Work from The University of Southern Mississippi in 2013. </span></span></span></p>', '<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>Degress and Certifications:</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>2022</strong>: Certificaiton in The Grief Recovery Model</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>2020: </strong>Certification in Eye-Movement Desensitization and Reprocessing (EMDR)</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>2013:</strong> Master&rsquo;s Degree in Social Work from The University of Southern Mississippi</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>2011:</strong> Bachelor&rsquo;s Degree in Social Work from The University of Southern Mississippi</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>Licenses: Licensed Certified Social Worker</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Alabama License #&nbsp;5114C</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Louisiana License # 16461</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Mississippi License # C8220</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Texas License # 105598</span></span></p>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"font-size:20px\"><span style=\"font-family:Georgia,serif\"><span style=\"color:#2d6d95\"><strong>Hobbies and Interests</strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">I live in the Wizarding World of Harry Potter. Although, I never personally attended Hogwarts, I am a Gryffindor and can recount the story of Harry Potter and his defeat of Voldemort with anyone who will listen.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">In addition to the defeat of truly nasty wizards (i.e. Voldemort), I also am fascinated by real life serial killers. I am a true crime junky and can often be found listening to, reading, or watching anything true crime or serial killer related.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>My Top 10 Values as a Therapist:</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp;1. Emotional Safety</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp;2. Genuineness</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp;3. Empathy</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp;4. Intimacy</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp;5. Communication</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp;6. Acceptance</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp;7. Compassion</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp;8. Reliability</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp;9. Thoughtfulness</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">&nbsp; &nbsp; &nbsp; &nbsp;10. Supportive</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>Fun Facts!</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">1. My Myers Briggs Personality type is INJF which is the rarest personality type and is found in only 2% of women and 1% of men.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">2. I enjoy watching (and yelling at) the New York Yankees.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">3. I am a dog mom to two pups - Leo (12 year old) and Nox (1 year old).</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">4. The beach calls to me and is healing for my soul, but I also really love the mountains.&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">5. I love a good DIY project, particularly using power tools to refinish furniture.</span></span></p>\r\n\r\n<div class=\"container\">\r\n<div class=\"row\">\r\n<div class=\"col-md-4\">\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><img src=\"https://acceptedtherapy.com/uploads/images/Leo.JPG\" style=\"height:200px\" /></span></span></p>\r\n</div>\r\n\r\n<div class=\"col-md-4\">\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><img src=\"https://acceptedtherapy.com/uploads/images/Nikki Wand.JPG\" style=\"width:150px\" /></span></span></p>\r\n</div>\r\n\r\n<div class=\"col-md-4\">\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><img src=\"https://acceptedtherapy.com/uploads/images/Yankees.JPG\" style=\"height:200px; width:200px\" /></span></span></p>\r\n</div>\r\n</div>\r\n</div>', '[\"1\",\"5\"]', '“No one can make you feel inferior without your consent.” ~ Eleanor Roosevelt', 1, '2022-05-15 05:23:02', '2023-03-31 21:18:36'),
(36, '1661124157.jpg', 'Lori', 'Hodges', 'lori@acceptedtherapy.com', 'lori-hodges', 'Mississippi', '<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">We want to feel like we&#39;re &quot;good enough.&quot; We struggle with negative thoughts and low self-esteem. We feel restless and insecure. We worry excessively about the future, and we live in regret of the past. We avoid the difficult stuff and numb ourselves with social media, shopping, or alcohol. We need a different solution. We want to manage our lives effectively- To make healthy decisions and have meaningful experiences. We want to be good parents, partners, and providers. We want to feel good about ourselves. The therapy process can help us understand how our life experiences impact our current well-being.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">I would like to provide a safe place for you to examine your past, live fully in the present, and plan for the future. Let&#39;s dig in! We will explore your core beliefs and combat negative thoughts. We can begin to process trauma, develop new coping skills, and build healthy esteem. We will use your values as a guide in the process.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">My therapy style is engaging, heartfelt, and relatable. We will work together to determine what changes you would like to make, prioritize your goals, and develop solutions. You already have the capacity for change - I&#39;m ready to support you! Send me a message, and let&#39;s get started.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">My name is Lori Hodges, and I am a Licensed Master&#39;s Social Worker from Hattiesburg, Mississippi. I graduated with Honors from The University of Alabama #RollTide in May 2022 with a Master&#39;s Degree in Social Work. I am delighted to be a full-time Therapist with Accepted Therapy Services. I believe that our Team&#39;s dedication and compassionate approach provides an ideal setting for our clients to process their emotions, heal from past hurts, learn new strategies, and experience personal growth.</span></span></p>', '<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">The world we live in tells us that we should always be &quot;fine,&quot; but a lot of the time, nothing is remotely fine. There is a lot of pressure to be perfect and not let other people see us struggle. My therapy style is warm and relational. I believe that you are the expert of your life and you hold all of the solutions. You are capable of overcoming whatever you are facing and because of that, you will decide what areas are focused on. I just walk through the process with you to help you recognize and implement the strengths that you already have. I would love to meet you where you are and watch you grow into the person that you want to be</span></span></p>', '<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>2022:</strong> Masters&rsquo; Degree in Social Work from The University of Alabama #RollTide</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>2007</strong>: Bachelor&#39;s Degree in Social Work from The University of Southern Mississippi</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">Licensed Master Social Worker&nbsp;</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">License Number <strong>#10385</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">I am currently under supervision to receive my Licensed Certified Social Worker (LCSW) designation in 2024. My professional goals are to become certified in Eye Movement Desensitization and Reprocessing (EMDR) and to explore the practice of Art Therapy.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>Pine Belt Mental Healthcare Resources (Hattiesburg, MS)</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">As a Community Support Specialist, I provided Intensive Case Management and Crisis Intervention Services to Individuals who experience Serious Mental Illness.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>The Mississippi Department of Mental Health (Jackson, MS)</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">As a Peer Support Ambassador, I facilitated training and provided technical assistance to Peer Support Specialists throughout the state.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>Pine Belt Mental Healthcare Resources (Hattiesburg, MS)</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">As a Peer Support Specialist, I worked with a multidisciplinary team to deliver Mental Health Services to Individuals who experience Serious Mental Illness.</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>West Way Behavioral Healthcare (Laurel, MS)</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">As an Active Treatment Technician, I provided Direct Care to Individuals in crisis at an Inpatient Facility.</span></span></p>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><span style=\"color:#2d6d95\"><strong>Hobbies and Interests</strong></span></span></span></h1>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">I enjoy live music, and I attend concerts as often as possible. I find the experience of live music to have a profoundly restorative effect. I also enjoy the process of creativity. I am typically immersed in several creative ventures at one time. My favorite projects include anything that is visionary and tactile, like painting, drawing, or collage work. I&#39;m also a big fan of reading, watching documentaries, and taking naps. Lots of naps. I come from a close-knit family and a supportive group of friends. I am also incredibly blessed to be a mom to a remarkably witty teenager who just graduated High School</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>Fun Facts</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;1. I have a cat named Mufasa</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;2. Myers Briggs: ENT</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;3. I worked as a theater set designer</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;4. Enneagram Type: Helper, Achiever, Loyalist</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;5. I once snuck backstage at a concert and was given Jack White&#39;s guitar pick!</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\"><strong>Top 10 Values as a Therapist</strong></span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;1. Validation</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;2. Compassion</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;3. Safety</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;4. Trust</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;5. Commitment</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;6. Acceptance</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;7. Empathy</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;8. Insight</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;9. Authenticity</span></span></p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:Georgia,serif\">&nbsp; &nbsp;10. Being Present</span></span></p>', '[\"4\"]', '\"We cannot selectively numb emotion. If we numb the dark, we numb the light. If we take the edge off pain and discomfort, we are, by default, taking the edge off joy, love, belonging, and the other emotions that give meaning to our lives.\" ~ Brené Brown\r\n\r\n\"Do what you feel in your heart to be right- for you\'ll be criticized anyway.\" ~Eleanor Roosevelt', 1, '2022-07-27 19:31:10', '2023-03-17 21:24:17'),
(38, '1661126732.jpg', 'Jesse', 'Mitchell', 'jesse@acceptedtherapy.com', 'jesse-mitchell', 'Mississippi', '<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Hello! I&rsquo;m Jesse Mitchell, a Licensed Master Social Worker in Hattiesburg, MS. I have 18 years of experience working with children and families in a multitude of settings. Prior to taking the leap into private practice, I worked for 8 years providing individual, family,and group counseling services to children, adolescents, and adults in community mental health, residential, and intensive outpatient settings. I am a graduate of the University of Southern Mississippi obtaining my bachelor&rsquo;s degree in Social Work (2004) and my master&rsquo;s degree in Social Work (2015).</span></span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">My therapeutic style is highly relational. My goal as a therapist is to provide a safe, caring, and non-judgmental space where my clients feel seen, heard, and valued. I believe that this environment encourages growth and healing, which, to me, is the purpose of the therapeutic process. I hope to be a calm and encouraging presence to my clients while listening to their highs and lows, helping them with identifying and practicing new coping skills, and assisting them with developing goals that meet their individual needs. I&rsquo;m eclectic, drawing from numerous treatment modalities, my own clinical training, and my years of experience. I like to think of myself as a life-long learner. Because I value learning, I continue to research, attend training, and seek out resources to enhance my therapeutic skills.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">I have a broad range of experience working with individuals and families dealing with anxiety, depression, trauma, family dynamics, grief &amp; loss and navigating life transitions.</span></span></p>', '<p>Bio</p>', '<h1>&nbsp;</h1>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>2015:</strong> Masters Degree in Social Work from The University of Southern Mississippi</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>2004:</strong> Bachelor&#39;s Degree in Social Work from The University of Southern Mississippi</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Licensed Master Social Worker:</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">Mississippi License # M7070</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>Homes of Hope for Children (Purvis, MS)</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">I worked for Homes of Hope for Children, a residential children&rsquo;s home, as the Case Manager/Counselor. In this role, I provided individual and family therapy to the children living in the children&rsquo;s home and their biological families. As well as, provided case management services to the children and their house parents.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>Gulf Coast Mental Health Services (Picayune, MS)</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">As a School Based Clinician for Gulf Coast Mental Health Services, I provided individual and family therapy, crisis services, and consultation with-in a school-based setting.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>Beacon Behavioral Outpatient, IOP (Bogalusa, LA)</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">I worked for Beacon Behavioral Health as an Outpatient Therapist. In this role, I provided individual/ family therapy, crisis services, and case management services within their Intensive Outpatient Program.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>Pearl River County Hospital &amp; Nursing Home, IOP (Poplarville, MS)</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">As a Program Therapist at Pearl River County Hospital &amp; Nursing Home, I provided individual/family therapy, crisis services, and case management services within their Intensive Outpatient Program.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>University of Southern Mississippi, Mississippi Integrated Health and Disaster Program (Long Beach, MS)</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">I worked for the Mississippi Integrated Health and Disaster Program as a Primary Care Behavioral Health Intern. In this role, I provided behavioral health assessments,screenings, and interventions to patients with a wide range of chronic medical/health issues. In addition, I provided behavioral health consultation to patient&rsquo;s primary care providers.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>Forrest General Hospital (Hattiesburg, MS)</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">As a Medical Social Worker at Forrest General Hospital, I served as a liaison between patients and their families and medical staff. I also assisted in patient and family counseling regarding medical/health issues and assisted patients with making plans for discharge.</span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\"><strong>Pearl River County Child Protection Services (Poplarville, MS)</strong></span></span></p>\r\n\r\n<p><span style=\"font-family:Georgia,serif\"><span style=\"font-size:16px\">I worked for Pearl River County Child Protection as a Family Protection Specialist. In this role, I provided case management services to foster children and their families within the foster care system.</span></span></p>', '[\"4\"]', 'You can’t go back and change the beginning, but you can start where you are and change the ending -C.S. Lewis', 1, '2022-07-27 19:40:46', '2023-03-17 21:25:18'),
(39, '1668806397.jpg', 'Yvette', 'Huddleston', 'yvette@acceptedtherapy.com', 'yvette-huddleston', NULL, '<p>My name is Yvette Huddleston. I am a Licensed Certified Social Worker in the state of MS. I have 16 years of professional practice experience in the field of social work.&nbsp;</p>\r\n\r\n<p>I believe that you are the expert of your life and you possess insight in overcoming past and current challenges. My experience is in helping clients with stress and anxiety, relationship issues, depression, motivation, self esteem, and self-love.</p>', '<p>My therapeutic approaches are Psychodynamic Psychotherapy, CBT, DBT, Motivational Interviewing, and Solution Focused Therapy. I am intentional about being supportive, non judgemental but challenging, in hopes people feel important and empowered. I believe if you change the way you look at things, the things you look at change.&nbsp;</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p>At some time in all of our lives we may need that unbiased person to hold that space with us.&nbsp; I believe it takes courage to seek help in times of need, vulnerability to share those needs and accountability to address needs. If you find yourself in that season of life, It would be a privilege to hold that space with you.</p>', '<p><strong>2013:</strong>&nbsp;Master&rsquo;s Degree in Social Work from The University of Southern Mississippi</p>\r\n\r\n<p><strong>20069:</strong>&nbsp;Bachelor&rsquo;s Degree in Social Work from The University of Southern Mississippi</p>\r\n\r\n<p>Mississippi License # C6763</p>', '[\"1\"]', '\"When you change the way you look at things, the things you look at change.\" - Wayne Dyer', 0, '2022-11-19 04:19:57', '2023-03-10 02:10:25');

-- --------------------------------------------------------

--
-- Table structure for table `team_management__locations`
--

CREATE TABLE `team_management__locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_management_id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_management__locations`
--

INSERT INTO `team_management__locations` (`id`, `team_management_id`, `location_id`, `created_at`, `updated_at`) VALUES
(42, 31, 12, '2022-07-17 09:08:18', '2022-07-17 09:08:18'),
(57, 36, 1, '2022-09-12 18:45:18', '2022-09-12 18:45:18'),
(58, 38, 1, '2022-09-12 18:45:18', '2022-09-12 18:45:18'),
(66, 31, 2, '2023-03-10 02:13:01', '2023-03-10 02:13:01'),
(70, 31, 3, '2023-03-18 02:14:02', '2023-03-18 02:14:02'),
(71, 36, 3, '2023-03-18 02:14:02', '2023-03-18 02:14:02'),
(72, 38, 3, '2023-03-18 02:14:02', '2023-03-18 02:14:02');

-- --------------------------------------------------------

--
-- Table structure for table `team_specialities`
--

CREATE TABLE `team_specialities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_management_id` bigint(20) UNSIGNED NOT NULL,
  `speciality_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_specialities`
--

INSERT INTO `team_specialities` (`id`, `team_management_id`, `speciality_title`, `description`, `created_at`, `updated_at`) VALUES
(277, 39, 'LCSW', 'Licensed Certified Social Worker', '2022-11-22 23:02:15', '2022-11-22 23:02:15'),
(305, 36, 'LMSW', 'Licensed Master Social Worker', '2023-03-17 21:24:17', '2023-03-17 21:24:17'),
(306, 38, 'LMSW', 'Licensed Master Social Worker', '2023-03-17 21:25:18', '2023-03-17 21:25:18'),
(313, 31, 'LCSW', 'Licensed Certified Social Worker', '2023-03-31 21:18:36', '2023-03-31 21:18:36'),
(314, 31, 'GRM', 'Grief Recovery Specialist', '2023-03-31 21:18:36', '2023-03-31 21:18:36');

-- --------------------------------------------------------

--
-- Table structure for table `telehealth_forms`
--

CREATE TABLE `telehealth_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_member_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client_understanding_checkboxes` text COLLATE utf8mb4_unicode_ci,
  `your_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `telehealth_forms`
--

INSERT INTO `telehealth_forms` (`id`, `user_id`, `team_member_id`, `client_understanding_checkboxes`, `your_name`, `signature`, `is_active`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '[\"1\",\"2\",\"3\",\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\",\"12\",\"13\"]', 'Kenneth Wise', 'Est amet commodi ne', '1', '2023-01-28 03:57:59', '2023-01-28 03:57:59');

-- --------------------------------------------------------

--
-- Table structure for table `template_models`
--

CREATE TABLE `template_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_image` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `template_name` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `type` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `template_models`
--

INSERT INTO `template_models` (`id`, `template_image`, `value`, `template_name`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, '612d6583d4d0f.png', '2', 'RUSTY MORSE', '1', 'Cover', '2021-09-03 09:10:59', '2021-09-04 04:19:59'),
(2, '612d65871d2bd.png', '3', 'JOHN SMITH', '1', 'Cover', '2021-09-03 09:11:03', '2021-09-03 09:11:03'),
(3, '612d658a4cff4.png', '4', 'SARAH', '1', 'Cover', '2021-09-03 09:11:06', '2021-09-03 09:11:06'),
(4, '612d658ea0d0e.png', '5', 'JAMIE', '1', 'Cover', '2021-09-03 09:11:10', '2021-09-03 09:11:10'),
(5, '612e6e40c9d60.png', '2', 'RUSTY MORSE', '1', 'Resume', '2021-09-04 04:00:32', '2021-09-04 04:16:49'),
(6, '612e6e5227adb.png', '3', 'JOHN SMITH', '1', 'Resume', '2021-09-04 04:00:50', '2021-09-04 04:00:50'),
(7, '612e6e561b4bb.png', '4', 'SARAH', '1', 'Resume', '2021-09-04 04:00:54', '2021-09-04 04:00:54'),
(8, '612e6e593b67a.png', '5', 'SARAH PAULSON', '1', 'Resume', '2021-09-04 04:00:57', '2021-11-25 01:14:22'),
(9, '612e6eec9e2f3.png', '6', 'MARTIN', '1', 'Resume', '2021-09-04 04:03:24', '2021-11-25 01:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(119) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `vehicles` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(119) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `company_name`, `email`, `phone`, `services`, `image`, `description`, `vehicles`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Samuel Davenport', 'Padilla Velasquez LLC', 'ralonykam@mailinator.com', '(213)212-3132', '[\"Frozen Storage\",\"Rework (Load Adjustment)\"]', '6214daadd50a1.png', 'Earum est voluptate', '[\"Container\",\"Full Truckload\",\"Parcel Carrier\"]', '1', '2022-02-24 01:44:29', '2022-02-24 01:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actual_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_id` int(11) DEFAULT NULL,
  `login_checkpoint` int(11) DEFAULT NULL,
  `agent_link` int(150) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_expire_count` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `profile_image`, `name`, `email`, `role`, `email_verified_at`, `password`, `actual_password`, `link_id`, `login_checkpoint`, `agent_link`, `address`, `city`, `state`, `zip`, `country`, `remember_token`, `link_expire_count`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', 'admin@acceptedtherapy.com', '1', NULL, '$2y$10$31W7x2S/s1I3iA.H.O2M0OEnRuDVjn3z1.HcbXWD5/KLB4itpwmSq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-05-13 11:45:20', '2022-06-25 04:03:58'),
(84, NULL, 'Nikki Dear', 'nikkidear@gmail.com', '2', NULL, '$2y$10$3qtAs.kkKHMCKSCoRy0BneRbTRE15JmNjaaGk7pU1hJdiaP8BhgYu', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 1, '2022-07-16 06:40:57', '2022-11-18 23:58:35'),
(148, NULL, 'Fredaston', 'fredaston@gmail.com', '2', NULL, '$2y$10$9JILHPIvZbd.H45X7K55a.vVP.gX0BgYPNzItzChELJjvsMz7IInO', 'Fredaston@123', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2bIh5Flm4jEaPloe9KCHvuqgBkhdaeIJNvrcGBMwaVRtdkfbuqWvfrRnhQl9', '10', 1, '2022-07-17 08:20:43', '2022-08-17 12:10:36'),
(149, NULL, '', 'H98KnNBI0fWL3DpX5sW56zzskwOc8yynoyb1@gmail.com', '', NULL, '$2y$10$FrOBzQLZIoZV0DDhNeDEtOLw/kXaW/9o1w3YngEva7Z.jT8MOhgFS', '6U9wXEbhIu3s18X', 1, 1, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-08-11 08:04:02', '2022-08-11 08:04:02'),
(150, NULL, '', 'H98KnNBI0fWL3DpX5sW56zzskwOc8yynoyb2@gmail.com', '', NULL, '$2y$10$SPQYyj4Yf3uw50kqEyqbj.eoXtkJqfBFEelwAQ0MeRCHWWWTqlz7W', '6U9wXEbhIu3s18X', 1, 1, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-08-11 08:04:02', '2022-08-11 08:04:02'),
(151, NULL, '', 'ZRLjRdkOgVjzAWwqaoYhCE0dG1AOAKzQkjH1@gmail.com', '', NULL, '$2y$10$vCfz195N2iPZ9sbEIqY5zuUenJKtCrC40.P4nyKsgQOBnlujBEoUG', 'Mnzv8jYSkNLhhIk', 2, 1, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-08-11 08:04:02', '2022-08-11 08:04:02'),
(152, NULL, '', 'ZRLjRdkOgVjzAWwqaoYhCE0dG1AOAKzQkjH2@gmail.com', '', NULL, '$2y$10$ot55uJP5Cr9/7SLRhlOlh.VTK/dS4etXlgDhi1lPIg80QG.AQ2Z9e', 'Mnzv8jYSkNLhhIk', 2, 1, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-08-11 08:04:02', '2022-08-11 08:04:02'),
(153, NULL, '', 'rzPiw4dkR4rx0yRt6qs6k9ZpVl8pqHPKU8q1@gmail.com', '', NULL, '$2y$10$o5kSJauD1PD/SDgU5134bO0knXtQBMAm3mq4v7pYX9r3voQFclk9G', 'F0Ko7GrpAccQbrq', 3, 1, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-08-11 08:04:02', '2022-08-11 08:04:02'),
(154, NULL, '', 'rzPiw4dkR4rx0yRt6qs6k9ZpVl8pqHPKU8q2@gmail.com', '', NULL, '$2y$10$C/EuckEJPT9kK/A2.9nY7Osi6nsFphdTBmyst4Ry5wBnj039el5eS', 'F0Ko7GrpAccQbrq', 3, 1, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-08-11 08:04:02', '2022-08-11 08:04:02'),
(155, NULL, '', '9Bn8fiHhEnMgN6ije5isOzNCB1zx8a6von71@gmail.com', '', NULL, '$2y$10$apq7hfHlyucD0dqK/QZZkuroGy8wtMuEh0QD6sHHUn/FCT9hxn56K', 'eZvGCEjwmYm6c3c', 4, 1, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-08-11 08:04:02', '2022-08-11 08:04:02'),
(156, NULL, '', '9Bn8fiHhEnMgN6ije5isOzNCB1zx8a6von72@gmail.com', '', NULL, '$2y$10$laPpeTSh.ggabRvYgQZVmeSHytvF9wYHxuHL7P7.CPcfzFDpaT0qG', 'eZvGCEjwmYm6c3c', 4, 1, 148, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-08-11 08:04:02', '2022-08-11 08:04:02'),
(198, NULL, '', 'j3L0eHpKXBoiOtdO2aKDFuTwIVnw4xfp2mF1@gmail.com', '', NULL, '$2y$10$GRAoO18kXkElUB4QROx8cOudwSo.I0eIveRo5Xucnw5wtjVrDXBI2', 'eakwPOFpoLUGmfr', 14, 1, 181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-10 02:17:53', '2022-09-10 02:17:53'),
(199, NULL, '', 'j3L0eHpKXBoiOtdO2aKDFuTwIVnw4xfp2mF2@gmail.com', '', NULL, '$2y$10$dFZHvEoOUkwoBNXhjqp8G.2eIfeTmQZm07RyCE5VYW8RFjoEfebeW', 'eakwPOFpoLUGmfr', 14, 1, 181, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-10 02:17:53', '2022-09-10 02:17:53'),
(203, NULL, '', 'XKW907t6XKZmYNhrHhFR2WXtfRgjlJqQ4K01@gmail.com', '', NULL, '$2y$10$Mn1jedoq5vUqWpwEEzj2oO9kQsYqaAoCaiXxL5kGTs/OyeyyNRO6i', 'DRo1ILx7zn3uuFx', 15, 1, 202, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-10 06:41:13', '2022-09-10 06:41:13'),
(204, NULL, '', 'XKW907t6XKZmYNhrHhFR2WXtfRgjlJqQ4K02@gmail.com', '', NULL, '$2y$10$.BsQNQ/IluHfcX8vihPP0ehzaIymNtPUw6BBoz6wwXtdXJn2lahHG', 'DRo1ILx7zn3uuFx', 15, 1, 202, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-10 06:41:13', '2022-09-10 06:41:13'),
(213, NULL, '', 'fBRHIiuo3qACz2u59rS4Xfr6J0x3clzKFNZ1@gmail.com', '', NULL, '$2y$10$1pYOVByOX2egHcktuGdwkeq64QpYYeimkW/ZzRCZc6kkaiR4kenfS', 'gKDIF3uBdbXItMq', 20, 1, 178, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-10 07:22:22', '2022-09-10 07:22:22'),
(214, NULL, '', 'fBRHIiuo3qACz2u59rS4Xfr6J0x3clzKFNZ2@gmail.com', '', NULL, '$2y$10$ADkIYTilMLy3qZAZiqylr.JBGNaZDH2GjygHb93FzB3x82uoYnuIa', 'gKDIF3uBdbXItMq', 20, 1, 178, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-09-10 07:22:22', '2022-09-10 07:22:22'),
(225, NULL, '', 'B4DLMD1ul6cCdH1qCVI9IE94Ymls6526IIS1@gmail.com', '', NULL, '$2y$10$XnYZlHYaVZksYpmHC4FKvedQWjq4Yh4wf7tiWTtZQjsjdKQjceJJC', 'krWnShQaDUvgIgC', 26, 1, 84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-23 03:26:40', '2022-11-23 03:26:40'),
(226, NULL, '', 'B4DLMD1ul6cCdH1qCVI9IE94Ymls6526IIS2@gmail.com', '', NULL, '$2y$10$gRJuQt4EizEhOVrjzEv61.SHJouM5M64XKUvpMyZPP3S93e/ZSgve', 'krWnShQaDUvgIgC', 26, 1, 84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-23 03:26:40', '2022-11-23 03:26:40'),
(227, NULL, '', 'Qv7jVahHYVAWsweuRa31ubU4qtXpPldbY0T1@gmail.com', '', NULL, '$2y$10$AIRE9/T9r6nfgT6Wv4lLe.XykY5iBjpWiUeJi/txLkDeqLS/nhSDe', 'yxt6mEoCZZmoP8r', 27, 1, 84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-23 03:26:40', '2022-11-23 03:26:40'),
(228, NULL, '', 'Qv7jVahHYVAWsweuRa31ubU4qtXpPldbY0T2@gmail.com', '', NULL, '$2y$10$Rrgb/DFrMVMAWWDjdV7kDe77SLezmIbbpdtVbgIwEqt5jaFMK4oce', 'yxt6mEoCZZmoP8r', 27, 1, 84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-23 03:26:40', '2022-11-23 03:26:40'),
(229, NULL, '', 'hf2gRqpkh7jfmCcCPs5HQLX90gQVFVMVOxH1@gmail.com', '', NULL, '$2y$10$X/a.pEimSnwWqOnfToOmBe7MT3KIBdzwJnp3Kpzc1Nsme9J2JM7U2', 'DTvteUAon6yjyqF', 28, 1, 84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-23 03:26:40', '2022-11-23 03:26:40'),
(230, NULL, '', 'hf2gRqpkh7jfmCcCPs5HQLX90gQVFVMVOxH2@gmail.com', '', NULL, '$2y$10$wCJuEY9X0w0fDdHLO.4L..NLj3Qm81PhP1mW0p6nwgKVWHdvp5yb6', 'DTvteUAon6yjyqF', 28, 1, 84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-23 03:26:40', '2022-11-23 03:26:40'),
(231, NULL, '', 'mxdrdU18ZZKviKkOdPoDqZykrOsDOiHkWJ31@gmail.com', '', NULL, '$2y$10$QG45QPeM2MqCfOFBXp816OnmU4fG9kinbIO.NhSv6P/foY1Ql0Qk.', 'mPED1MSiSDBiCGA', 29, 1, 84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-23 03:26:40', '2022-11-23 03:26:40'),
(232, NULL, '', 'mxdrdU18ZZKviKkOdPoDqZykrOsDOiHkWJ32@gmail.com', '', NULL, '$2y$10$0bDYNDgIDw7Q/fLpy5QPqePpFZQUgbBHMkECTGtvR0KlAyyfASdvO', 'mPED1MSiSDBiCGA', 29, 1, 84, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-11-23 03:26:40', '2022-11-23 03:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `user_links`
--

CREATE TABLE `user_links` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `actual_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generated_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `request_for_password` text COLLATE utf8mb4_unicode_ci,
  `link_used_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `used_status` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_links`
--

INSERT INTO `user_links` (`id`, `user_id`, `email`, `password`, `actual_password`, `generated_link`, `request_for_password`, `link_used_count`, `status`, `used_status`, `created_at`, `updated_at`) VALUES
(1, '148', NULL, '$2y$10$Fx1dSQnZGZ0BkRbdi35FcuDfdDA8UqZmwL.XSRKkDfUJ4NU0fF2ia', '6U9wXEbhIu3s18X', 'H98KnNBI0fWL3DpX5sW56zzskwOc8yynoyb', NULL, '2', '1', NULL, '2022-08-11 08:04:01', '2022-08-11 08:04:01'),
(2, '148', NULL, '$2y$10$x5.Nm6fPR5TCae1HZRHH7uldf7q5VBmABxQtN8uL8sRzDpWlNfbcO', 'Mnzv8jYSkNLhhIk', 'ZRLjRdkOgVjzAWwqaoYhCE0dG1AOAKzQkjH', NULL, '2', '1', NULL, '2022-08-11 08:04:02', '2022-08-11 08:04:02'),
(3, '148', NULL, '$2y$10$GwuHQZr0qcBWmIKQUToeZenYH2mqcLJpzxp1FRmfcRclEHIBfVpXy', 'F0Ko7GrpAccQbrq', 'rzPiw4dkR4rx0yRt6qs6k9ZpVl8pqHPKU8q', NULL, '2', '1', NULL, '2022-08-11 08:04:02', '2022-08-11 08:04:02'),
(4, '148', NULL, '$2y$10$0pkKxOP.7O36i6qHqm9TAOPYOlhf7Ihfm4GLXnXK.fLy7NViG5k4G', 'eZvGCEjwmYm6c3c', '9Bn8fiHhEnMgN6ije5isOzNCB1zx8a6von7', NULL, '2', '1', NULL, '2022-08-11 08:04:02', '2022-08-11 08:04:02'),
(14, '181', NULL, '$2y$10$aRxXQNK8JYOd5eSaNvWWEen9FvUsHK1GTo7K7gjIB9p9tILBrnXam', 'eakwPOFpoLUGmfr', 'j3L0eHpKXBoiOtdO2aKDFuTwIVnw4xfp2mF', NULL, '2', '1', NULL, '2022-09-10 02:17:53', '2022-09-10 02:17:53'),
(15, '202', NULL, '$2y$10$ljzF7z3YCNzcr1F08CfdUOaxnaKnTXhelRouGLSuSNSEAqJ8AWWO.', 'DRo1ILx7zn3uuFx', 'XKW907t6XKZmYNhrHhFR2WXtfRgjlJqQ4K0', NULL, '2', '1', NULL, '2022-09-10 06:41:13', '2022-09-10 06:41:13'),
(20, '178', NULL, '$2y$10$TFFHzFU2KCNVBlQuZDJUw.3L5/YHJIyLlevuS85U62dWM8H56mZuW', 'gKDIF3uBdbXItMq', 'fBRHIiuo3qACz2u59rS4Xfr6J0x3clzKFNZ', NULL, '2', '1', NULL, '2022-09-10 07:22:22', '2022-09-10 07:22:22'),
(21, '84', NULL, '$2y$10$FD2lzL4LBYaGzmi4f4CikOyswaM1WDfvWXzQA8XsFv0w0YPviazgK', 'QF9wg3bo8ESyo8R', 'dp4pT0DFTDianGC3ueHvk2KuKDAsgWieEhJ', NULL, '2', '1', NULL, '2022-11-23 03:26:39', '2022-11-23 03:26:39'),
(22, '84', NULL, '$2y$10$3Excc17X4x1tw2Gbhsa.hOrc65D4DBO98sSyzLBooe6uxHEkdJCvO', 'YlXBPjGHMgE7xE9', 'aEFKgXWrfjHM0l68eWlhBaC7rWyJk6goimD', NULL, '2', '1', NULL, '2022-11-23 03:26:39', '2022-11-23 03:26:39'),
(23, '84', NULL, '$2y$10$GGJH5XstYKM8IuIsQg0pw.s50Wm0H0l2wRY8hLx.69QLrjPZWJsMW', '7Ms5fhLbakwEAdq', 'ZZewhvI6nXv1V9RFscFtmxIi0YMzH9sQxoZ', NULL, '2', '1', NULL, '2022-11-23 03:26:39', '2022-11-23 03:26:39'),
(24, '84', NULL, '$2y$10$akcoDe1UZZSKLlvWlBIERedQwac2LLt.hJs3jZydAmRfHqD7IQD.W', 'B8k5e8ZvBZk9wxu', 'Lj068sW9g6PubPt08WpoWvpP6Zs5mCBFEoL', NULL, '2', '1', NULL, '2022-11-23 03:26:39', '2022-11-23 03:26:39'),
(25, '84', NULL, '$2y$10$qPShXQe53KwigzpkLgUTOuolHkbCCTXCjkSjwElCaXEjeO/cG.MgG', 'BFBF8UBTkv5BSVL', '3X8QYURKDQjeWTRgvSN0EovBRi7gxT30ILd', NULL, '2', '1', NULL, '2022-11-23 03:26:40', '2022-11-23 03:26:40'),
(26, '84', NULL, '$2y$10$KG2dA3FP/ItxG7bX9g72cu3afZr87G7BnKBdMZ/axr7WfeflFxO9S', 'krWnShQaDUvgIgC', 'B4DLMD1ul6cCdH1qCVI9IE94Ymls6526IIS', NULL, '2', '1', NULL, '2022-11-23 03:26:40', '2022-11-23 03:26:40'),
(27, '84', NULL, '$2y$10$VbHn7WcQTRmZwQSEUWyT5OGU1EbLytqQHxSGEKDS7nR1F73Syzf7m', 'yxt6mEoCZZmoP8r', 'Qv7jVahHYVAWsweuRa31ubU4qtXpPldbY0T', NULL, '2', '1', NULL, '2022-11-23 03:26:40', '2022-11-23 03:26:40'),
(28, '84', NULL, '$2y$10$DOPAWPhN794VzSnvWGl.neN2hp5QPjXPJaRbaOcEMfbWDHkoovbBC', 'DTvteUAon6yjyqF', 'hf2gRqpkh7jfmCcCPs5HQLX90gQVFVMVOxH', NULL, '2', '1', NULL, '2022-11-23 03:26:40', '2022-11-23 03:26:40'),
(29, '84', NULL, '$2y$10$QmEwbivMZS8ByC4974XeeO8HeFx/IqCySz8Fpwm07xg1ykGIDSHDi', 'mPED1MSiSDBiCGA', 'mxdrdU18ZZKviKkOdPoDqZykrOsDOiHkWJ3', NULL, '2', '1', NULL, '2022-11-23 03:26:40', '2022-11-23 03:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_moldels`
--
ALTER TABLE `article_moldels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `center_sections`
--
ALTER TABLE `center_sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_contents`
--
ALTER TABLE `cms_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `configurations`
--
ALTER TABLE `configurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_inquiry_models`
--
ALTER TABLE `contact_inquiry_models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_card_forms`
--
ALTER TABLE `credit_card_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_layout_contents`
--
ALTER TABLE `dynamic_layout_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dynamic_pages`
--
ALTER TABLE `dynamic_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faqs_faq_type_id_foreign` (`faq_type_id`);

--
-- Indexes for table `faq_types`
--
ALTER TABLE `faq_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inform_consent_forms`
--
ALTER TABLE `inform_consent_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intake_children_forms`
--
ALTER TABLE `intake_children_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intake_children_forms_intake_form_id_foreign` (`intake_form_id`);

--
-- Indexes for table `intake_drug_forms`
--
ALTER TABLE `intake_drug_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intake_drug_forms_intake_form_id_foreign` (`intake_form_id`);

--
-- Indexes for table `intake_forms`
--
ALTER TABLE `intake_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intake_insurance_forms`
--
ALTER TABLE `intake_insurance_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intake_insurance_forms_intake_form_id_foreign` (`intake_form_id`);

--
-- Indexes for table `intake_medication_forms`
--
ALTER TABLE `intake_medication_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intake_medication_forms_intake_form_id_foreign` (`intake_form_id`);

--
-- Indexes for table `intake_siblings_forms`
--
ALTER TABLE `intake_siblings_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `intake_siblings_forms_intake_form_id_foreign` (`intake_form_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `non_secure_forms`
--
ALTER TABLE `non_secure_forms`
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
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_subscribers`
--
ALTER TABLE `package_subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdfs`
--
ALTER TABLE `pdfs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prefered_positions`
--
ALTER TABLE `prefered_positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referral_forms`
--
ALTER TABLE `referral_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `release_info_forms`
--
ALTER TABLE `release_info_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_management`
--
ALTER TABLE `schedule_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_models`
--
ALTER TABLE `service_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sliding_scale_forms`
--
ALTER TABLE `sliding_scale_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliding_scale_household_member_forms`
--
ALTER TABLE `sliding_scale_household_member_forms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sliding_scale_household_member_forms_slid_scale_id_foreign` (`sliding_scale_id`);

--
-- Indexes for table `specialities`
--
ALTER TABLE `specialities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscriptions_email_unique` (`email`);

--
-- Indexes for table `team_management`
--
ALTER TABLE `team_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_management__locations`
--
ALTER TABLE `team_management__locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_management__locations_team_management_id_foreign` (`team_management_id`),
  ADD KEY `team_management__locations_location_id_foreign` (`location_id`);

--
-- Indexes for table `team_specialities`
--
ALTER TABLE `team_specialities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `team_specialities_team_management_id_foreign` (`team_management_id`);

--
-- Indexes for table `telehealth_forms`
--
ALTER TABLE `telehealth_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template_models`
--
ALTER TABLE `template_models`
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
-- Indexes for table `user_links`
--
ALTER TABLE `user_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article_moldels`
--
ALTER TABLE `article_moldels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `center_sections`
--
ALTER TABLE `center_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cms_contents`
--
ALTER TABLE `cms_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `configurations`
--
ALTER TABLE `configurations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_inquiry_models`
--
ALTER TABLE `contact_inquiry_models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=454;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `credit_card_forms`
--
ALTER TABLE `credit_card_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dynamic_layout_contents`
--
ALTER TABLE `dynamic_layout_contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dynamic_pages`
--
ALTER TABLE `dynamic_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=385;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `faq_types`
--
ALTER TABLE `faq_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inform_consent_forms`
--
ALTER TABLE `inform_consent_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `intake_children_forms`
--
ALTER TABLE `intake_children_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `intake_drug_forms`
--
ALTER TABLE `intake_drug_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `intake_forms`
--
ALTER TABLE `intake_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `intake_insurance_forms`
--
ALTER TABLE `intake_insurance_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `intake_medication_forms`
--
ALTER TABLE `intake_medication_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `intake_siblings_forms`
--
ALTER TABLE `intake_siblings_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `non_secure_forms`
--
ALTER TABLE `non_secure_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `package_subscribers`
--
ALTER TABLE `package_subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pdfs`
--
ALTER TABLE `pdfs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prefered_positions`
--
ALTER TABLE `prefered_positions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `referral_forms`
--
ALTER TABLE `referral_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `release_info_forms`
--
ALTER TABLE `release_info_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schedule_management`
--
ALTER TABLE `schedule_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `service_models`
--
ALTER TABLE `service_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliding_scale_forms`
--
ALTER TABLE `sliding_scale_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `sliding_scale_household_member_forms`
--
ALTER TABLE `sliding_scale_household_member_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `specialities`
--
ALTER TABLE `specialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `team_management`
--
ALTER TABLE `team_management`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `team_management__locations`
--
ALTER TABLE `team_management__locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `team_specialities`
--
ALTER TABLE `team_specialities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=315;

--
-- AUTO_INCREMENT for table `telehealth_forms`
--
ALTER TABLE `telehealth_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template_models`
--
ALTER TABLE `template_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=233;

--
-- AUTO_INCREMENT for table `user_links`
--
ALTER TABLE `user_links`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_faq_type_id_foreign` FOREIGN KEY (`faq_type_id`) REFERENCES `faq_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `intake_children_forms`
--
ALTER TABLE `intake_children_forms`
  ADD CONSTRAINT `intake_children_forms_intake_form_id_foreign` FOREIGN KEY (`intake_form_id`) REFERENCES `intake_forms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `intake_drug_forms`
--
ALTER TABLE `intake_drug_forms`
  ADD CONSTRAINT `intake_drug_forms_intake_form_id_foreign` FOREIGN KEY (`intake_form_id`) REFERENCES `intake_forms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `intake_insurance_forms`
--
ALTER TABLE `intake_insurance_forms`
  ADD CONSTRAINT `intake_insurance_forms_intake_form_id_foreign` FOREIGN KEY (`intake_form_id`) REFERENCES `intake_forms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `intake_medication_forms`
--
ALTER TABLE `intake_medication_forms`
  ADD CONSTRAINT `intake_medication_forms_intake_form_id_foreign` FOREIGN KEY (`intake_form_id`) REFERENCES `intake_forms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `intake_siblings_forms`
--
ALTER TABLE `intake_siblings_forms`
  ADD CONSTRAINT `intake_siblings_forms_intake_form_id_foreign` FOREIGN KEY (`intake_form_id`) REFERENCES `intake_forms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sliding_scale_household_member_forms`
--
ALTER TABLE `sliding_scale_household_member_forms`
  ADD CONSTRAINT `sliding_scale_household_member_forms_slid_scale_id_foreign` FOREIGN KEY (`sliding_scale_id`) REFERENCES `sliding_scale_forms` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_management__locations`
--
ALTER TABLE `team_management__locations`
  ADD CONSTRAINT `team_management__locations_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `team_management__locations_team_management_id_foreign` FOREIGN KEY (`team_management_id`) REFERENCES `team_management` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `team_specialities`
--
ALTER TABLE `team_specialities`
  ADD CONSTRAINT `team_specialities_team_management_id_foreign` FOREIGN KEY (`team_management_id`) REFERENCES `team_management` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
