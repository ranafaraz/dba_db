-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2018 at 09:04 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dba_db`
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
  `adv_EDSC` date NOT NULL,
  `adv_EDHC` date NOT NULL,
  `adv_EDLC` date NOT NULL,
  `adv_VMSC` enum('No','Yes') NOT NULL,
  `adv_VMHC` enum('No','Yes') NOT NULL,
  `adv_VMLC` enum('No','RYK') NOT NULL,
  `adv_NICNo` varchar(15) NOT NULL,
  `adv_Photo` blob NOT NULL,
  `adv_Image_CNIC` blob NOT NULL,
  `adv_Image_License` blob NOT NULL,
  `adv_Voting_Eligibility` enum('No','Yes') NOT NULL,
  `adv_Status` enum('Active','Inactive') NOT NULL,
  `adv_Created_At` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `adv_Created_By` int(12) NOT NULL,
  `adv_Updated_At` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `adv_Updated_By` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advocates`
--

INSERT INTO `advocates` (`adv_id`, `adv_Name`, `adv_Father_Name`, `adv_Address`, `adv_Phone_No`, `adv_CNIC`, `adv_SNo`, `adv_BRPNo`, `adv_HCRNo`, `adv_EDSC`, `adv_EDHC`, `adv_EDLC`, `adv_VMSC`, `adv_VMHC`, `adv_VMLC`, `adv_NICNo`, `adv_Photo`, `adv_Image_CNIC`, `adv_Image_License`, `adv_Voting_Eligibility`, `adv_Status`, `adv_Created_At`, `adv_Created_By`, `adv_Updated_At`, `adv_Updated_By`) VALUES
(1, 'Anas', 'Shafqat', 'Gulshan Iqbal', '0331-7375027', '', '01', '001', '0001', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '3130304377383', '', '', '', 'No', 'Active', '2018-03-16 19:22:54', 1, '2018-03-16 19:21:46', 1),
(2, 'Rana Faraz Ahmed', 'Rana Naveed Ahmed', 'House # 8, Block E, Gulshan.e.Nasir, Rahim Yar Khan', '03006999824', '', '234', 'w34324', '32423', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '342-34-23423', '', '', '', 'No', '', '2018-03-17 05:19:24', 1, '2018-03-17 05:19:24', 1);

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

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'anas', 'wkqfF_QsnrUZdWTo4W-N0b03ozCTZZha', '$2y$13$CRaM8ko0Jlorg.aDRfF4TO5wyq.1HYrxH37l7xnS.yoYCWgDBbiCa', NULL, 'anasshafqat01@gmail.com', 10, 1521226002, 1521226002);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advocates`
--
ALTER TABLE `advocates`
  ADD PRIMARY KEY (`adv_id`);

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
  MODIFY `adv_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
