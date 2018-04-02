-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 08:35 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Table structure for table `advocates`
--

CREATE TABLE `advocates` (
  `adv_id` int(255) NOT NULL,
  `adv_Name` varchar(255) NOT NULL,
  `adv_Father_Name` varchar(255) NOT NULL,
  `adv_Address` varchar(255) NOT NULL,
  `adv_Phone_No` varchar(255) NOT NULL,
  `adv_CNIC` varchar(15) NOT NULL,
  `adv_SNo` varchar(12) NOT NULL,
  `adv_BRPNo` varchar(12) NOT NULL,
  `adv_HCRNo` varchar(12) NOT NULL,
  `adv_DOB` date NOT NULL,
  `adv_EDSC` date NOT NULL,
  `adv_EDHC` date NOT NULL,
  `adv_EDLC` date NOT NULL,
  `adv_VMSC` enum('No','Yes') NOT NULL,
  `adv_VMHC` enum('No','Yes') NOT NULL,
  `adv_VMLC` enum('No','RYK') NOT NULL,
  `adv_NICNo` varchar(15) NOT NULL,
  `adv_Photo` varchar(200) NOT NULL,
  `adv_Image_CNIC` varchar(200) NOT NULL,
  `adv_Image_License` varchar(200) NOT NULL,
  `adv_Voting_Eligibility` enum('No','Yes') NOT NULL,
  `adv_Status` enum('Active','Inactive') NOT NULL,
  `adv_Created_At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adv_Created_By` int(12) NOT NULL,
  `adv_Updated_At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adv_Updated_By` int(12) NOT NULL,
  `testing` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocates`
--

INSERT INTO `advocates` (`adv_id`, `adv_Name`, `adv_Father_Name`, `adv_Address`, `adv_Phone_No`, `adv_CNIC`, `adv_SNo`, `adv_BRPNo`, `adv_HCRNo`, `adv_DOB`, `adv_EDSC`, `adv_EDHC`, `adv_EDLC`, `adv_VMSC`, `adv_VMHC`, `adv_VMLC`, `adv_NICNo`, `adv_Photo`, `adv_Image_CNIC`, `adv_Image_License`, `adv_Voting_Eligibility`, `adv_Status`, `adv_Created_At`, `adv_Created_By`, `adv_Updated_At`, `adv_Updated_By`, `testing`) VALUES
(1, 'Anas', 'Shafqat', 'Gulshan Iqbal', '+03-317-3750274', '23456-7890900-9', '01', '001', '0001', '2018-04-17', '2018-04-19', '2018-04-23', '2018-04-08', 'Yes', 'Yes', 'RYK', '3130304377383', 'uploads/Anas_photo.jpg', '', '', 'No', 'Active', '2018-03-27 18:47:30', 1, '2018-04-02 07:04:27', 3, ''),
(2, 'Rana Faraz Ahmed', 'Rana Naveed Ahmed', 'House # 8, Block E, Gulshan.e.Nasir, Rahim Yar Khan', '+03-006-9998242', '23456-7890345-3', '234', 'w34324', '32423', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'No', 'Yes', 'RYK', '342-34-23423', 'uploads/Rana Faraz Ahmed_photo.jpg', '', '', 'No', 'Active', '2018-03-29 06:47:01', 1, '0000-00-00 00:00:00', 3, ''),
(3, 'dfghjk', 'fghj', 'xcvbnm,', '+12-345-6789067', '23456-7892345-6', 'cvbhjk', 'xcvbjkl', 'zxcvbnm,', '0000-00-00', '2018-03-14', '2018-03-13', '2018-03-20', 'No', 'Yes', 'RYK', '345678', '', '', '', 'Yes', 'Active', '2018-03-20 09:47:43', 2, '2018-03-17 12:47:04', 8, ''),
(5, 'xcvbn', 'fghjk', 'lkjhgfd', '+92-012-3458976', '12345-2345675-6', 'cvbhjk', 'sdfghj', 'iuytre', '0000-00-00', '1912-09-09', '2018-03-21', '2018-03-12', 'Yes', 'Yes', 'RYK', '345678', '', '', '', 'No', 'Active', '2018-03-19 12:17:51', 3, '2018-03-17 12:59:01', 8, ''),
(7, 'dfghjk', 'fghj', 'cvbnm,', '+12-345-6789067', '12345-6789009-8', 'cvbhjk', 'asdfghj', 'zxcvbnm,', '0000-00-00', '2018-03-13', '2018-03-13', '2018-03-20', 'Yes', 'No', 'RYK', '345678', 'uploads/dfghjk_photo.jpg', '', '', 'Yes', 'Inactive', '2018-03-25 06:04:28', 3, '2018-03-17 13:25:20', 3, ''),
(8, 'fghjk', 'zxcvbn', 'dfghjk', 'sdfghjk', 'sdfghjk', 'ertyui', 'xcvbnm,', 'xcvbnm,', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Yes', 'Yes', 'RYK', 'wert789', '', '', '', 'Yes', 'Active', '2018-03-17 13:33:32', 3, '2018-03-17 13:33:32', 8, ''),
(9, 'xcvbn', 'fghjk', 'lkjhgfd', 'fghjk', 'kjhgf', 'jhgfd', 'sdfghj', 'zxcvbnm,', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Yes', 'Yes', 'RYK', '87654567890', '', '', '', 'Yes', 'Active', '2018-03-17 13:37:09', 4, '2018-03-17 13:37:09', 6, ''),
(10, 'Nadia Gull', 'zxcvbn', 'xcvbnm,', '+54-345-6789009', '76543-2345678-9', 'mnbvc', 'sdfghj', 'iuytre', '0000-00-00', '2018-03-17', '2018-03-15', '2018-03-08', 'No', 'No', 'RYK', '87654567890', 'uploads/Nadia Gull_photo.jpg', 'uploads/Nadia Gull_CNIC.png', '', 'No', 'Active', '2018-03-21 19:09:42', 3, '2018-03-17 18:03:43', 3, ''),
(11, 'sdfghjk', 'wertyu', 'lkjhgfd', '+12-345-6789098', '23456-7899876-5', 'kjhgfx', 'asdfghj', 'zxcvghjkl', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'No', 'Yes', 'RYK', '87654567890', '', '', '', 'No', 'Active', '2018-03-21 05:48:10', 0, '2018-03-17 18:19:12', 4, ''),
(12, 'Ali', 'Zahid', 'dfghjk', '234567890', '3789087654', 'cvbhjk', 'asdfghj', 'xcvbnm,', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Yes', 'No', 'RYK', '87654567890', '', '', '', 'Yes', 'Active', '0000-00-00 00:00:00', 2, '0000-00-00 00:00:00', 2, ''),
(13, 'Hasan', 'wertyu', 'xcvbnm,', 'ghjk.', '23456789', 'jhgfd', 'sdfghj', 'zxcvbnm,', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Yes', 'Yes', 'RYK', '87654567890', 'uploads/Hasan_photo.jpg', 'uploads/Hasan_CNIC.png', 'uploads/Hasan_license.jpg', 'Yes', 'Active', '2018-03-17 20:38:29', 2, '2018-03-17 19:51:53', 4, ''),
(14, 'sdfgh', 'sdfghjk', 'kjhgf', 'jhgfd', 'xcvbnm', 'jhgf', 'xcvgbhj', 'jhgfd', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Yes', 'Yes', 'No', 'dfgh', 'uploads/sdfgh_photo.jpg', 'uploads/sdfgh_CNIC.jpg', 'uploads/sdfgh_license.jpg', 'Yes', 'Active', '2018-03-18 08:30:20', 2, '2018-03-18 08:30:20', 8, ''),
(15, 'dfghj', 'zxcvbn', 'cvbnm,', '+76-543-2345678', '23456-7894567-8', 'mnbvc', 'asdfghj', 'iuytre', '0000-00-00', '2018-03-18', '2018-03-20', '2018-03-14', 'No', 'Yes', 'RYK', 'wert789', 'uploads/dfghj_photo.jpg', '', '', 'Yes', 'Active', '2018-03-25 06:12:45', 2, '2018-03-18 08:44:43', 3, ''),
(16, 'dfghjk', 'wertyu', 'lkjhgfd', 'sdfghjk', '23456789', 'ertyui', 'xcvbnm,', 'xcvbnm,', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'No', 'Yes', 'RYK', 'wert789', 'uploads/dfghjk_photo.jpg', 'uploads/dfghjk_CNIC.jpg', 'uploads/dfghjk_license.jpg', 'Yes', 'Active', '2018-03-18 09:11:05', 1, '2018-03-18 09:11:05', 8, ''),
(17, 'sdfghjk', 'fghj', 'lkjhgfd', '+12-345-6789009', '23456-7893456-7', 'jhgfd', 'xcvbnm,', 'zxcvbnm,', '0000-00-00', '2018-03-15', '2018-03-20', '2018-03-22', 'No', 'Yes', 'RYK', 'wert789', '', '', '', 'No', 'Active', '2018-03-21 06:03:32', 2, '2018-03-18 09:23:20', 4, ''),
(18, 'Sadia', 'fghjk', 'xcvbnm,', '+12-345-6789098', '23456-7890987-6', 'jhgfd', 'sdfghj', 'xcvbnm,', '0000-00-00', '2018-03-13', '2018-03-21', '2018-03-22', 'Yes', 'Yes', 'RYK', '87654567890', 'uploads/Sadia_photo.jpg', 'uploads/Sadia_CNIC.png', 'uploads/Sadia_license.jpg', 'Yes', 'Active', '2018-03-21 06:14:06', 2, '2018-03-18 09:27:07', 4, ''),
(19, 'dfghjk', 'fghj', 'lkjhgfd', '+23-456-7890567', '23456-7890789-8', 'cvbhjk', 'asdfghj', 'iuytre', '0000-00-00', '2016-09-07', '2018-03-13', '2018-03-13', 'No', 'Yes', 'RYK', '87654567890', '', '', '', 'Yes', 'Active', '2018-03-21 06:46:48', 0, '2018-03-19 12:21:08', 0, ''),
(20, 'ertyu', 'wertyu', 'dfghjk', '+34-567-8900987', '67890-9876556-7', 'kjhgfx', 'xcvbjkl', 'zxcvbnm,', '0000-00-00', '2018-03-14', '2018-03-15', '2018-03-25', 'Yes', 'Yes', 'No', '345678', 'uploads/ertyu_photo.jpg', 'uploads/ertyu_CNIC.jpg', 'uploads/ertyu_license.jpg', 'Yes', 'Active', '2018-03-21 06:18:57', 4, '2018-03-21 06:18:57', 4, ''),
(21, 'ertyu', 'wertyu', 'dfghjk', '+34-567-8900987', '67890-9876556-7', 'kjhgfx', 'xcvbjkl', 'zxcvbnm,', '0000-00-00', '2018-03-14', '2018-03-15', '2018-03-25', 'Yes', 'Yes', 'No', '345678', 'uploads/ertyu_photo.jpg', 'uploads/ertyu_CNIC.png', 'uploads/ertyu_license.jpg', 'Yes', 'Active', '2018-03-21 06:49:04', 0, '2018-03-21 06:26:21', 4, ''),
(22, 'Aqsa', 'fghj', 'dfghjk', '+73-456-7898765', '45678-9876567-9', 'ertyui', 'sdfghj', 'xcvbnm,', '0000-00-00', '2018-03-20', '2018-03-27', '2018-03-20', 'No', 'Yes', 'RYK', 'wert789', 'uploads/Aqsa_photo.jpg', 'uploads/Aqsa_CNIC.jpg', 'uploads/Aqsa_license.jpg', 'Yes', 'Active', '2018-03-21 06:57:01', 4, '2018-03-21 06:53:09', 3, ''),
(23, 'Aniqa', 'Gull Iftikhar', 'dfghjk', '+54-345-6789098', '76543-3456789-0', 'mnbvc', 'asdfghj', 'zxcvbnm,', '0000-00-00', '2016-09-07', '2018-03-22', '2018-03-15', 'Yes', 'Yes', 'RYK', 'fghjkl', 'uploads/Aniqa_photo.jpg', 'uploads/Aniqa_CNIC.jpg', '', 'Yes', 'Active', '2018-03-22 13:42:57', 3, '2018-03-21 18:24:17', 3, ''),
(24, 'Asmat', 'Gull Iftikhar', 'lkjhgfd', '+45-678-9098765', '34567-8987655-6', 'xcvbjk', 'xcvgbhj', 'zxcvghjkl', '0000-00-00', '2018-03-19', '2018-03-27', '2018-03-29', 'Yes', 'Yes', 'RYK', 'fghjkjh', 'uploads/Asmat_photo.jpg', 'uploads/Asmat_CNIC.jpg', '0', 'Yes', 'Active', '2018-03-21 18:31:36', 3, '2018-03-21 18:31:36', 0, ''),
(25, 'Nimra', 'dfghjk', 'dfghjk', '+56-789-0987656', '23456-7898765-4', '765', 'asdfghj', 'zxcvghjkl', '0000-00-00', '2018-03-20', '2018-03-27', '2018-03-31', 'Yes', 'Yes', 'RYK', '345678', 'uploads/Nimra_photo.jpg', 'uploads/Nimra_CNIC.jpg', 'uploads/Nimra_license.jpg', 'Yes', 'Active', '2018-03-24 12:50:36', 3, '2018-03-24 12:50:36', 0, ''),
(26, 'kljl', 'lkl;k', ';klk', '+56-564-6456444', '56456-4564564-5', '5', '54', '5456', '0000-00-00', '2018-03-24', '2018-04-03', '2018-03-24', 'Yes', 'Yes', 'RYK', '87654567890', 'uploads/kljl_photo.jpg', 'uploads/kljl_CNIC.png', 'uploads/kljl_license.jpg', 'Yes', 'Active', '2018-03-24 13:24:57', 3, '2018-03-24 13:24:57', 0, ''),
(27, 'ghjkj', 'iuytrertyui', 'cvbhjkuhyg', '+23-456-7890987', '76543-2345678-9', 'cvbhjk', 'asdfghj', 'zxcvbnm,', '0000-00-00', '2018-03-20', '2018-03-23', '2018-03-21', 'Yes', 'No', 'RYK', 'wert789', 'uploads/ghjkj_photo.jpg', 'uploads/ghjkj_CNIC.jpg', 'uploads/ghjkj_license.jpg', 'Yes', 'Active', '2018-03-27 18:10:19', 4, '2018-03-27 18:10:19', 0, ''),
(28, 'Kinza', 'fghj', 'dfghjk', '+34-567-8900987', '87654-3345678-9', 'jhgfd', 'xcvbjkl', 'xcvbnm,', '0000-00-00', '2018-03-19', '2018-03-20', '2018-03-18', 'Yes', 'Yes', 'RYK', '87654567890', 'uploads/Kinza_photo.jpg', 'uploads/Kinza_CNIC.jpg', '0', 'Yes', 'Active', '2018-03-29 06:58:31', 3, '0000-00-00 00:00:00', 3, ''),
(29, 'waleed', 'naeem wahid', 'al noor canal view', '+92-331-6087034', '31303-1668656-3', '45', '32', '564', '0000-00-00', '2018-03-15', '2018-03-06', '2018-02-26', 'Yes', 'Yes', 'RYK', '789645312', 'uploads/waleed_photo.jpg', 'uploads/waleed_CNIC.jpg', '0', 'Yes', 'Active', '2018-03-29 12:47:53', 4, '0000-00-00 00:00:00', 4, ''),
(30, 'xyz', 'dfghjk', 'uhgfghjk', '+12-345-6789098', '65432-2345678-9', 'mnbvc', 'xcvgbhj', 'xcvbnm,.', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 'Yes', 'No', 'RYK', 'wert789', '0', '0', '0', 'Yes', 'Active', '2018-03-30 17:56:44', 4, '2018-03-30 17:56:44', 0, ''),
(31, 'Waqas', 'Umer', 'cvbnm,', '+34-567-8987654', '34567-8909876-5', 'cvbhjk', 'asdfghj', 'xcvbnm,', '1991-05-09', '2018-03-02', '2018-03-19', '2018-03-20', 'No', 'Yes', 'RYK', 'fghjkl', '0', '0', '0', 'Yes', 'Active', '2018-03-30 18:27:39', 4, '2018-03-30 03:03:16', 4, '');

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', 3, NULL),
('data entry operator', 4, NULL),
('data entry operator', 14, NULL),
('go to index', 14, NULL),
('reviewer', 5, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` int(11) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'admin can create advocate , view advocate , update advocate , delete advocate', NULL, NULL, NULL, NULL),
('create-advocate', 1, 'allow user to create advocate', NULL, NULL, NULL, NULL),
('data entry operator', 1, 'can create , view , update the record of the advocate', NULL, NULL, NULL, NULL),
('delete-advocate', 1, 'user can delete the advocate', NULL, NULL, NULL, NULL),
('export record', 1, 'Superadmin can export the record', NULL, NULL, NULL, NULL),
('go to index', 1, 'user can go to advocates index page', NULL, NULL, NULL, NULL),
('reviewer', 1, 'can update and read records', NULL, NULL, NULL, NULL),
('update-advocate', 1, 'user can update the advocate', NULL, NULL, NULL, NULL),
('view-advocate', 1, 'user can view the advocate', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'create-advocate'),
('admin', 'delete-advocate'),
('admin', 'export record'),
('admin', 'go to index'),
('admin', 'update-advocate'),
('admin', 'view-advocate'),
('data entry operator', 'create-advocate'),
('data entry operator', 'go to index'),
('data entry operator', 'update-advocate'),
('data entry operator', 'view-advocate'),
('reviewer', 'go to index'),
('reviewer', 'update-advocate'),
('reviewer', 'view-advocate');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1521225953),
('m130524_201442_init', 1521225960);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '', '', 'anas', 'wkqfF_QsnrUZdWTo4W-N0b03ozCTZZha', '$2y$13$CRaM8ko0Jlorg.aDRfF4TO5wyq.1HYrxH37l7xnS.yoYCWgDBbiCa', NULL, 'anasshafqat01@gmail.com', 10, 1521226002, 1521226002),
(2, '', '', 'nadii', 'cN7_O4rxaC84MOOZi5cGMjT7GtTeZYR1', '$2y$13$8G0QwLch6wfqqj5w22mF0ejuUU117yTIApE0HixWachwVp.ZG6Gim', NULL, 'nadia@gmail.com', 10, 1521278135, 1521278135),
(3, '', '', 'superadmin', 'MB9nBn5KcyeJlqqrqPfv5vkBitAbfTrT', '$2y$13$E8yQCDLbZQAnEIW9rqujpOZl4EhmYjIzcq.p.wi0h1UZ4zd7nVNCi', NULL, 'superadmin@gmail.com', 10, 1521367666, 1521367666),
(4, '', '', 'DEO', 'MBo7K0UFrwxiWtSffo5LdACxJWyeGJYt', '$2y$13$9iiGtvVGhfvHTY9DBPM18.bw/yO2nZFGHTH3kBfxqU6LkJJhz3zKi', NULL, 'deo@gmail.com', 10, 1521370609, 1521370609),
(5, '', '', 'reviewer', 'Hu2bMi069akVVJGT8_cffqj6cGlRjGXG', '$2y$13$rDpkfeyuNkvOUhk7fpnmQOtu3U7FBPlLcPEikbVAOueUY.5.RUjqm', NULL, 'reviewer@gmail.com', 10, 1521370934, 1521370934),
(6, '', '', 'sadi', 'te1IkX45VpOJf87ZJ_PY8SHkSIIySjbN', '$2y$13$tzIj1GgZgeskEFmwXryoWOHzxRP7vPSI2jMSN/SyGln5lo.vc/3Yi', NULL, 'sadiagull@gmail.com', 10, 1522611940, 1522611940),
(7, 'Aniqa', 'gull', 'gullaniqa', 'rltDmfNaPmL1Xjn7nM55T1ULdeuQ6krr', '$2y$13$2CcHGI7ac8BUovmU/KGvZuK7pGUjtVdntaeMk/dP5Xx8NA69LasfG', NULL, 'gullaniqa@gmail.com', 10, 1522615597, 1522615597),
(9, 'Ali', 'somename', 'ali', 'HGk7oZZF5G5kp86vrPqiG-dw2v5j2C3r', '$2y$13$KNTTofwGhF3kSaLQiLnHTOb1NxP1RQIZyPbEZcKWKKenlKK/ddAAy', NULL, 'ali@gmail.com', 10, 1522617827, 1522617827),
(10, 'sdfghj', 'svgbhj', 'xyz@gmail.com', 'i6AVYkor8aQoQYTs8wNcKhnJVg10CtHe', '$2y$13$ilKb6Sb1J8bFALSe9bDsMeUIHNgyZr6SVeGtjdKZTaOjjhp/exO/m', NULL, 'dfghj@gmail.com', 10, 1522617989, 1522617989),
(11, 'ertyui', 'dcvgbhnjk', 'gullaniqa@gmail.com', 'RJhWpK9TYA88PQyGy9ESf70cIubBCNXj', '$2y$13$Jf7KhCiTuVMz9pIBGz1nv.a/l3aAZROCpya1qVra0EKP2/SgAAor.', NULL, 'zxcvgbhnj@gmail.com', 10, 1522618126, 1522618126),
(12, 'Faraz ', 'Ahmed', 'faraz', 'VuqfkxeD0ZuiE5GuNUgFbNI0vWSgeij-', '$2y$13$NBZZGYewv0WnzlC6OPqTkewXjP8tX7JgO1qCnhe1XlX3qBInH.kp6', NULL, 'faraz@gmail.com', 10, 1522618481, 1522618481),
(13, 'someone', 'somename', 'someone', 'O3GORnalcDTUwOpfWOBghNZkNn4-q1iK', '$2y$13$6G7xocLGi71enFqqiOk59e/u.EEZiKCFn9sCKJf5LDlk63UIhkRXG', NULL, 'someone@gmail.com', 10, 1522618892, 1522618892),
(14, 'someone', 'somename', 'some', 'IcuRWFMearJ557rG7fQtb0UF7SEBpyPU', '$2y$13$wfQcjNad1YsmTzPgDmd0E.eNyf3vv5DKE7J5llWkwBRJmpmZLm9Y.', NULL, 'someone1@gmail.com', 10, 1522619210, 1522619210);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocates`
--
ALTER TABLE `advocates`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indexes for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Indexes for table `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advocates`
--
ALTER TABLE `advocates`
  MODIFY `adv_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
