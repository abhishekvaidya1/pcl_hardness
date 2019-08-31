-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 07:46 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pcl_hardness`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brinell_scrap`
--

CREATE TABLE `tbl_brinell_scrap` (
  `id` int(100) NOT NULL,
  `hardness_chill_id` int(100) NOT NULL,
  `c_date` varchar(12) NOT NULL,
  `item` varchar(100) NOT NULL,
  `heat_no` varchar(10) NOT NULL,
  `b_val` varchar(1000) NOT NULL,
  `created_on` varchar(12) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `page_no` int(10) NOT NULL,
  `dept` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_brinell_scrap`
--

INSERT INTO `tbl_brinell_scrap` (`id`, `hardness_chill_id`, `c_date`, `item`, `heat_no`, `b_val`, `created_on`, `created_by`, `page_no`, `dept`) VALUES
(2, 2, '2019-04-05', '2019-04-05', '1A001', '254,320,254,257,,,,,261,,,264,,,,,,,211,265,,,,,322,,,,,,,,,,,,,,,,231,245,256,254,,,,', '2019-04-05', 'Sup', 2, 'F4'),
(3, 3, '2019-04-05', '2019-04-05', '1D002', '231,236,234,234,237,258,256,257,258,295,241,256,241,256,258,257,236,264,251,211,214,7,45,5,5,,5,,,,,,,,,,,,,,,,,,,,,', '2019-04-05', 'Sup', 1, 'F4'),
(4, 4, '2019-04-05', '2019-04-05', '1D002', '231,232,,,,,,,245,256,,,,,,,278,241,,,,,,,232,254,,,,,,,289,241,,,,,,,256,551,,,,,,', '2019-04-05', 'Sup', 2, 'F4'),
(7, 5, '2019-04-05', '628', '1D003', '254,265,251,247,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,', '2019-04-05', 'Sup', 1, 'F4'),
(8, 6, '2019-04-05', '629', '1D003', ',,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,,', '2019-04-05', 'Sup', 1, 'F4'),
(9, 1, '2019-04-05', '626', '1A001', '245,248,247,247,241,245,256,251,247,241,247,241,256,274,241,278,246,241,258,241,241,256,241,241,279,241,258,241,256,241,257,260,261,268,269,274,275,276,289,290,255,256,257,286,274,278,271,279', '2019-04-05', 'Sup', 1, 'F4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cam_scrap`
--

CREATE TABLE `tbl_cam_scrap` (
  `id` int(100) NOT NULL,
  `hardness_chill_id` int(100) NOT NULL,
  `c_date` varchar(12) NOT NULL,
  `item` varchar(100) NOT NULL,
  `heat_no` varchar(10) NOT NULL,
  `L_val` varchar(1000) NOT NULL,
  `C_val` varchar(1000) NOT NULL,
  `mm_val` varchar(1000) NOT NULL,
  `created_on` varchar(12) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `page_no` int(10) NOT NULL,
  `dept` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_cam_scrap`
--

INSERT INTO `tbl_cam_scrap` (`id`, `hardness_chill_id`, `c_date`, `item`, `heat_no`, `L_val`, `C_val`, `mm_val`, `created_on`, `created_by`, `page_no`, `dept`) VALUES
(2, 2, '2019-04-05', '2019-04-05', '1A001', '500,600,,', '1,6,4,9,,,,', '47,48,48,47,,,,,52,53,51,57,,,,,51,53,57,51,,,,,48,47,46,47,,,,,51,53,52,57,,,,', '2019-04-05', 'Sup', 2, 'F4'),
(3, 3, '2019-04-05', '2019-04-05', '1D002', '101,201,202,203', '1,2,3,3,4,6,7,8', '46,46,48,47,56,51,54,52,57,58,54,56,58,51,54,51,54,56,57,58,53,51,52,51,45,48,47,43,46,47,48,49,4,5,6,7,8,9,10,11', '2019-04-05', 'Sup', 1, 'F4'),
(4, 4, '2019-04-05', '2019-04-05', '1D002', '501,,,', '241,541,,,,,,', '54,56,,,,,,,45,47,,,,,,,47,48,,,,,,,49,48,,,,,,,51,52,,,,,,', '2019-04-05', 'Sup', 2, 'F4'),
(7, 5, '2019-04-05', '628', '1D003', '100,200,,', ',,,,,,,', '45,47,48,49,,,,,43,47,52,49,,,,,51,52,53,58,,,,,58,57,52,51,,,,,4,5,6,7,,,,', '2019-04-05', 'Sup', 1, 'F4'),
(8, 6, '2019-04-05', '629', '1D003', '100,,,', '1,2,,,,,,', '46,51,,,,,,,55,52,,,,,,,52,45,,,,,,,53,48,,,,,,,4,5,,,,,,', '2019-04-05', 'Sup', 1, 'F4'),
(9, 1, '2019-04-05', '626', '1A001', '100,200,300,400', '1,4,1,7,4,9,6,7', '46,48,51,52,45,48,45,47,47,48,52,53,57,58,51,52,46,47,51,52,57,58,53,51,52,53,57,58,52,53,54,55,4.5,5,6,5,4,5.5,57,5', '2019-04-05', 'Sup', 1, 'F4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hardness_chilldepth`
--

CREATE TABLE `tbl_hardness_chilldepth` (
  `id` int(11) NOT NULL,
  `hardness_chill_id` varchar(1000) NOT NULL,
  `c_date` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `heat_no` varchar(100) NOT NULL,
  `L_C` varchar(100) NOT NULL,
  `data_value` varchar(1000) NOT NULL,
  `data_value1` varchar(1000) NOT NULL,
  `created_on` varchar(10) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hardness_chilldepth_b`
--

CREATE TABLE `tbl_hardness_chilldepth_b` (
  `id` int(11) NOT NULL,
  `hardness_chill_id` varchar(100) NOT NULL,
  `c_date` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `heat_no` varchar(100) NOT NULL,
  `L_C` varchar(100) NOT NULL,
  `data_value` varchar(1000) NOT NULL,
  `created_on` varchar(10) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hardness_chilldepth_para`
--

CREATE TABLE `tbl_hardness_chilldepth_para` (
  `id` int(11) NOT NULL,
  `hardness_chill_id` varchar(200) NOT NULL,
  `item` varchar(200) NOT NULL,
  `c_date` varchar(200) NOT NULL,
  `heat_no` varchar(200) NOT NULL,
  `at_point` varchar(200) NOT NULL,
  `cust_spec` varchar(200) NOT NULL,
  `working_spec` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_on` varchar(200) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hardness_chilldepth_para_b`
--

CREATE TABLE `tbl_hardness_chilldepth_para_b` (
  `id` int(11) NOT NULL,
  `hardness_chill_id` varchar(200) NOT NULL,
  `item` varchar(200) NOT NULL,
  `c_date` varchar(200) NOT NULL,
  `heat_no` varchar(200) NOT NULL,
  `at_point` varchar(200) NOT NULL,
  `cust_spec` varchar(200) NOT NULL,
  `working_spec` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_on` varchar(200) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hardness_main`
--

CREATE TABLE `tbl_hardness_main` (
  `id` int(11) NOT NULL,
  `item` varchar(200) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `heat_no` varchar(200) NOT NULL,
  `c_date` varchar(200) NOT NULL,
  `part_no` varchar(100) NOT NULL,
  `qa_ref_no` varchar(50) NOT NULL,
  `approved_by` varchar(200) NOT NULL,
  `checked_by` varchar(200) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_on` varchar(200) NOT NULL,
  `remark` varchar(2000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `checked_by_status` varchar(11) NOT NULL DEFAULT '0',
  `check_by_remark` varchar(1000) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `microflag` int(11) NOT NULL,
  `updated_at` varchar(500) NOT NULL,
  `micro_status` varchar(500) NOT NULL,
  `page_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_hardness_main`
--

INSERT INTO `tbl_hardness_main` (`id`, `item`, `cust_name`, `heat_no`, `c_date`, `part_no`, `qa_ref_no`, `approved_by`, `checked_by`, `created_by`, `created_on`, `remark`, `status`, `checked_by_status`, `check_by_remark`, `dept`, `microflag`, `updated_at`, `micro_status`, `page_no`) VALUES
(1, '626', 'SFT - K71 (Item 0626)', '1A001', '2019-04-05', '6620214', 'PCR/IR/118/101', '', '', 'Sup', '2019-04-05', 'Ok', 0, '0', '', 'F4', 0, '', '', 1),
(2, '626', 'SFT - K71 (Item 0626)', '1A001', '2019-04-05', '6620214', 'PCR/IR/118/101', '', '', 'Sup', '2019-04-05', 'Ok', 0, '0', '', 'F4', 0, '', '', 2),
(3, '627', 'SFT - K71 (Item 0627)', '1D002', '2019-04-05', '6620218', 'PCR/IR/119/101', '', '', 'Sup', '2019-04-05', 'Ok', 0, '0', '', 'F4', 0, '', '', 1),
(4, '627', 'SFT - K71 (Item 0627)', '1D002', '2019-04-05', '6620214', 'PCR/IR/118/101', '', '', 'Sup', '2019-04-05', 'ok', 0, '0', '', 'F4', 0, '', '', 2),
(5, '628', 'SFT - K71 (Item 0628)', '1D003', '2019-04-05', '6620424', 'PCR/IR/120/101', '', '', 'Sup', '2019-04-05', 'ok', 0, '0', '', 'F4', 0, '', '', 1),
(6, '629', 'SFT - K71 (Item 0629)', '1D003', '2019-04-05', '6620428', 'PCR/IR/121/101', '', '', 'Sup', '2019-04-05', 'ok', 0, '0', '', 'F4', 0, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hardness_observation`
--

CREATE TABLE `tbl_hardness_observation` (
  `id` int(11) NOT NULL,
  `hardness_chill_id` varchar(200) NOT NULL,
  `L` varchar(1000) NOT NULL,
  `L_C` varchar(1000) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_on` varchar(200) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hardness_observation_b`
--

CREATE TABLE `tbl_hardness_observation_b` (
  `id` int(11) NOT NULL,
  `hardness_chill_id` varchar(200) NOT NULL,
  `L` varchar(1000) NOT NULL,
  `L_C` varchar(1000) NOT NULL,
  `created_by` varchar(200) NOT NULL,
  `created_on` varchar(200) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item_data`
--

CREATE TABLE `tbl_item_data` (
  `id` int(11) NOT NULL,
  `item` varchar(100) NOT NULL,
  `item_description` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item_data`
--

INSERT INTO `tbl_item_data` (`id`, `item`, `item_description`, `dept`) VALUES
(1, '626', 'SFT - K71 (Item 0626)', 'F4'),
(2, '627', 'SFT - K71 (Item 0627)', 'F4'),
(3, '628', 'SFT - K71 (Item 0628)', 'F4'),
(4, '629', 'SFT - K71 (Item 0629)', 'F4'),
(5, '642', 'GMB - F1GV (Item 0642)', 'F4'),
(6, '670', 'GMA - Fam 0 - 4cyl - Gen3 (Item 0670)', 'F'),
(7, '755', 'SFT - Panamera Turbo Ex. 1-3 Cyl ( Item 0755)', 'F4'),
(8, '756', 'SFT - Panamera Turbo Ex. 4-6 Cyl ( Item 0756)', 'F'),
(9, '814', 'DC - 611 4 Cyl In.(Item 0814)', 'F'),
(10, '815', 'DC - 611 4 Cyl Ex.(Item 0815)', 'F'),
(11, '866', 'GMI -B12D GEN 1 ln.(Item 0866)', 'F'),
(12, '867', 'GMI -B12D GEN 1 Ex.(Item 0867)', 'F'),
(13, '768', '', 'F3'),
(14, '769', '', 'F3'),
(15, '805', 'Ford VEP - 2.0L In. FE (Item 0805)', 'F'),
(16, '816', 'MSIL / SMG - YL1 / YP8 MC (Item 0816)', 'F'),
(17, '819', '', 'F3'),
(18, '829', 'SPIL - YL7 - 2CYL ln. (Item 0829)', 'F'),
(19, '830', 'SPIL - YL7 - 2CYL ln. (Item 0830)', 'F'),
(20, '831', 'LWI - KAPPA-4 In. (Item 0831)', 'F'),
(21, '832', 'LWI - KAPPA-4 In. (Item 0832)', 'F'),
(22, '839', 'Ford VEP - 2.0L GTDi In. (Item 0839)', 'F'),
(23, '840', '', ''),
(24, '860', 'Ford VEP - 2.3L GTDi Ex.(Maverick)(Item 0860)', 'F'),
(25, '861', 'Ford VEP - 2.3L GTDi In.(Maverick)(Item 0861)', 'F'),
(26, '862', 'MSIL - E15 In.(Item 0862)', 'F'),
(27, '863', 'MSIL - E15 Ex.(Item 0863)', 'F'),
(28, '622', '', 'F3'),
(29, '623', '', 'F3'),
(30, '672', '', 'F3'),
(31, '677', '', 'F3'),
(32, '678', '', 'F3'),
(33, '688', '', 'F3'),
(34, '704', '', 'F3'),
(35, '705', '', 'F3'),
(36, '724', '', 'F3'),
(37, '725', '', 'F3'),
(38, '726', '', 'F3'),
(39, '727', '', 'F3'),
(40, '778', '', 'F3'),
(41, '817', '', 'F3'),
(42, '831', '', 'F3'),
(43, '832', '', 'F3'),
(44, '853', '', 'F3'),
(45, '882', '', 'F3'),
(46, '663', 'TML - 2.2 DICR In. (Item 0663)', 'F'),
(47, '664', 'TML - 2.2 DICR Ex. (Item 0664)', 'F'),
(48, '667', 'TML - 1.4 DICR In. (Item 0667)', 'F'),
(49, '668', 'TML - 1.4 DICR Ex. (Item 0668)', 'F'),
(50, '708', 'MSIL / SMG - K12 In./YP-8 (Item 0708)', 'F'),
(51, '741', 'SFT - Rotax 1403 (Item 0741)', 'F'),
(52, '742', 'SFT - Rotax 1403 (Item 0742)', 'F'),
(53, '697', 'LWP - LAMBDA 2 - In LH (Item 0697)', 'F'),
(54, '698', 'LWP - LAMBDA 2 - In RH (Item 0698)', 'F'),
(55, '699', 'LWP - LAMBDA 2 - Ex LH (Item 0699)', 'F'),
(56, '700', 'LWP - LAMBDA 2 - Ex RH (Item 0700)', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `access` varchar(200) NOT NULL,
  `rights` varchar(200) NOT NULL,
  `created_on` varchar(200) NOT NULL,
  `dept` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `password`, `access`, `rights`, `created_on`, `dept`) VALUES
(2, 'Admin', '123', '5', '', '2018-03-30', 'F4'),
(3, 'Micro', '123', '6', '', '', 'F4'),
(4, 'Sup', '123', '4', '', '', 'F4'),
(5, 'Admin1', '123', '5', '', '2019-01-17', 'F3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_brinell_scrap`
--
ALTER TABLE `tbl_brinell_scrap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cam_scrap`
--
ALTER TABLE `tbl_cam_scrap`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hardness_chilldepth`
--
ALTER TABLE `tbl_hardness_chilldepth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hardness_chilldepth_b`
--
ALTER TABLE `tbl_hardness_chilldepth_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hardness_chilldepth_para`
--
ALTER TABLE `tbl_hardness_chilldepth_para`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hardness_chilldepth_para_b`
--
ALTER TABLE `tbl_hardness_chilldepth_para_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hardness_main`
--
ALTER TABLE `tbl_hardness_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hardness_observation`
--
ALTER TABLE `tbl_hardness_observation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_hardness_observation_b`
--
ALTER TABLE `tbl_hardness_observation_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item_data`
--
ALTER TABLE `tbl_item_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_brinell_scrap`
--
ALTER TABLE `tbl_brinell_scrap`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_cam_scrap`
--
ALTER TABLE `tbl_cam_scrap`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_hardness_chilldepth`
--
ALTER TABLE `tbl_hardness_chilldepth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hardness_chilldepth_b`
--
ALTER TABLE `tbl_hardness_chilldepth_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hardness_chilldepth_para`
--
ALTER TABLE `tbl_hardness_chilldepth_para`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hardness_chilldepth_para_b`
--
ALTER TABLE `tbl_hardness_chilldepth_para_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hardness_main`
--
ALTER TABLE `tbl_hardness_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_hardness_observation`
--
ALTER TABLE `tbl_hardness_observation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_hardness_observation_b`
--
ALTER TABLE `tbl_hardness_observation_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_item_data`
--
ALTER TABLE `tbl_item_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
