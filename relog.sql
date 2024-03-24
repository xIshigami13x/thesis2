-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2024 at 02:50 PM
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
-- Database: `relog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL,
  `department` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`ID`, `name`, `password`, `department`) VALUES
(28, 'vince', '$2y$10$p8PM2dUbrsIrvhYUFGt8ZuG0YhzfI0RtbN00fP2Qb.6iLnf3euPAK', 'Zoning Municipal Planning and Development office'),
(29, 'vince', '$2y$10$sZ6dmRfWoYJUhiHMNxBM5eGWMyIDu7ISJMhjWHUwGGDCNf1UQE8F2', 'Building Permit & Occupancy Permit Municipal Engineering Office'),
(30, 'lyn', '$2y$10$bDk/tQBSwrF56WuNTugRsuf2cU.BGFZ8VS/Gi2ZQp1CiXKC7bUmSW', 'Building Permit & Occupancy Permit Municipal Engineering Office');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `ID` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`ID`, `username`, `password`) VALUES
(1, 'lynel', '$2y$10$PR0RKI6z7LuIwe57Luc6auQ3svZAv/j3a6ei..yssaFxH7TkyNz.q');

-- --------------------------------------------------------

--
-- Table structure for table `assessor_tb`
--

CREATE TABLE `assessor_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `filename1` varchar(256) NOT NULL,
  `filesize1` varchar(256) NOT NULL,
  `filetype1` varchar(255) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assessor_tb`
--

INSERT INTO `assessor_tb` (`id`, `name`, `filename1`, `filesize1`, `filetype1`, `status`) VALUES
(10, 'lynel', 'DAILY-ACCOMPLISHMENT-REPORT Week 6 - Copy.docx', '1166830', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Pending'),
(11, 'bins', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `bfp_tb`
--

CREATE TABLE `bfp_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `filename1` varchar(256) NOT NULL,
  `filesize1` varchar(256) NOT NULL,
  `filetype1` varchar(255) NOT NULL,
  `filename2` varchar(255) NOT NULL,
  `filesize2` varchar(255) NOT NULL,
  `filetype2` varchar(255) NOT NULL,
  `filename3` varchar(255) NOT NULL,
  `filesize3` varchar(255) NOT NULL,
  `filetype3` varchar(255) NOT NULL,
  `filename4` varchar(255) NOT NULL,
  `filesize4` varchar(255) NOT NULL,
  `filetype4` varchar(256) NOT NULL,
  `filename5` varchar(256) NOT NULL,
  `filesize5` varchar(256) NOT NULL,
  `filetype5` varchar(256) NOT NULL,
  `filename6` varchar(256) NOT NULL,
  `filesize6` varchar(256) NOT NULL,
  `filetype6` varchar(256) NOT NULL,
  `filename7` varchar(256) NOT NULL,
  `filesize7` varchar(256) NOT NULL,
  `filetype7` varchar(256) NOT NULL,
  `filename8` varchar(256) NOT NULL,
  `filesize8` varchar(256) NOT NULL,
  `filetype8` varchar(256) NOT NULL,
  `filename9` varchar(256) NOT NULL,
  `filesize9` varchar(256) NOT NULL,
  `filetype9` varchar(256) NOT NULL,
  `filename10` varchar(256) NOT NULL,
  `filesize10` varchar(256) NOT NULL,
  `filetype10` varchar(256) NOT NULL,
  `filename11` varchar(256) NOT NULL,
  `filesize11` varchar(256) NOT NULL,
  `filetype11` varchar(256) NOT NULL,
  `filename12` varchar(256) NOT NULL,
  `filesize12` varchar(256) NOT NULL,
  `filetype12` varchar(255) NOT NULL,
  `filename13` varchar(255) NOT NULL,
  `filesize13` varchar(255) NOT NULL,
  `filetype13` varchar(255) NOT NULL,
  `filename14` varchar(255) NOT NULL,
  `filesize14` varchar(255) NOT NULL,
  `filetype14` varchar(255) NOT NULL,
  `filename15` varchar(255) NOT NULL,
  `filesize15` varchar(255) NOT NULL,
  `filetype15` varchar(255) NOT NULL,
  `filename16` varchar(256) NOT NULL,
  `filesize16` varchar(256) NOT NULL,
  `filetype16` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bfp_tb`
--

INSERT INTO `bfp_tb` (`id`, `name`, `filename1`, `filesize1`, `filetype1`, `filename2`, `filesize2`, `filetype2`, `filename3`, `filesize3`, `filetype3`, `filename4`, `filesize4`, `filetype4`, `filename5`, `filesize5`, `filetype5`, `filename6`, `filesize6`, `filetype6`, `filename7`, `filesize7`, `filetype7`, `filename8`, `filesize8`, `filetype8`, `filename9`, `filesize9`, `filetype9`, `filename10`, `filesize10`, `filetype10`, `filename11`, `filesize11`, `filetype11`, `filename12`, `filesize12`, `filetype12`, `filename13`, `filesize13`, `filetype13`, `filename14`, `filesize14`, `filetype14`, `filename15`, `filesize15`, `filetype15`, `filename16`, `filesize16`, `filetype16`, `status`) VALUES
(20, 'lynel', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 6 - Copy.docx', '1166830', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'img251.jpg', '482317', 'image/jpeg', 'DAILY-ACCOMPLISHMENT-REPORT Week 6 - Copy.docx', '1166830', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 6.docx', '828698', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 6 - Copy.docx', '1166830', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 6 - Copy.docx', '1166830', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 6 - Copy.docx', '1166830', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 6 - Copy.docx', '1166830', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `engr_tb`
--

CREATE TABLE `engr_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `filename1` varchar(256) NOT NULL,
  `filetype1` varchar(255) NOT NULL,
  `filename2` varchar(256) NOT NULL,
  `filetype2` varchar(256) NOT NULL,
  `filename3` varchar(256) NOT NULL,
  `filetype3` varchar(256) NOT NULL,
  `filename4` varchar(255) NOT NULL,
  `filetype4` varchar(255) NOT NULL,
  `filename5` varchar(255) NOT NULL,
  `filetype5` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `engr_tb`
--

INSERT INTO `engr_tb` (`id`, `name`, `filename1`, `filetype1`, `filename2`, `filetype2`, `filename3`, `filetype3`, `filename4`, `filetype4`, `filename5`, `filetype5`, `status`) VALUES
(7, 'lynel', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `engr_tb2`
--

CREATE TABLE `engr_tb2` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `filename1` varchar(256) NOT NULL,
  `filesize1` varchar(255) NOT NULL,
  `filetype1` varchar(255) NOT NULL,
  `filename2` varchar(255) NOT NULL,
  `filesize2` varchar(255) NOT NULL,
  `filetype2` varchar(255) NOT NULL,
  `filename3` varchar(255) NOT NULL,
  `filesize3` varchar(255) NOT NULL,
  `filetype3` varchar(255) NOT NULL,
  `filename4` varchar(255) NOT NULL,
  `filesize4` varchar(256) NOT NULL,
  `filetype4` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `engr_tb2`
--

INSERT INTO `engr_tb2` (`id`, `name`, `filename1`, `filesize1`, `filetype1`, `filename2`, `filesize2`, `filetype2`, `filename3`, `filesize3`, `filetype3`, `filename4`, `filesize4`, `filetype4`, `status`) VALUES
(1, 'lynel', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `engr_tb3`
--

CREATE TABLE `engr_tb3` (
  `id` int(11) NOT NULL,
  `dateapp` date NOT NULL,
  `occupancy` varchar(256) NOT NULL,
  `filename1` varchar(256) NOT NULL,
  `filetype1` varchar(255) NOT NULL,
  `filename2` varchar(255) NOT NULL,
  `filetype2` varchar(255) NOT NULL,
  `filename3` varchar(255) NOT NULL,
  `filetype3` varchar(255) NOT NULL,
  `filename4` varchar(255) NOT NULL,
  `filetype4` varchar(256) NOT NULL,
  `filename5` varchar(256) NOT NULL,
  `filetype5` varchar(256) NOT NULL,
  `filename6` varchar(256) NOT NULL,
  `filetype6` varchar(256) NOT NULL,
  `filename7` varchar(256) NOT NULL,
  `filetype7` varchar(256) NOT NULL,
  `filename8` varchar(256) NOT NULL,
  `filetype8` varchar(256) NOT NULL,
  `filename9` varchar(256) NOT NULL,
  `filetype9` varchar(256) NOT NULL,
  `filename10` varchar(256) NOT NULL,
  `filetype10` varchar(256) NOT NULL,
  `filename11` varchar(256) NOT NULL,
  `filetype11` varchar(256) NOT NULL,
  `filename12` varchar(256) NOT NULL,
  `filetype12` varchar(256) NOT NULL,
  `filename13` varchar(256) NOT NULL,
  `filetype13` varchar(256) NOT NULL,
  `filename14` varchar(256) NOT NULL,
  `filetype14` varchar(256) NOT NULL,
  `filename15` varchar(256) NOT NULL,
  `filetype15` varchar(256) NOT NULL,
  `filename16` varchar(256) NOT NULL,
  `filetype16` varchar(256) NOT NULL,
  `filename17` varchar(256) NOT NULL,
  `filetype17` varchar(256) NOT NULL,
  `filename18` varchar(256) NOT NULL,
  `filetype18` varchar(256) NOT NULL,
  `filename19` varchar(2562) NOT NULL,
  `filetype19` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menro_tb`
--

CREATE TABLE `menro_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `filename1` varchar(256) NOT NULL,
  `filesize1` varchar(255) NOT NULL,
  `filetype1` varchar(255) NOT NULL,
  `filename2` varchar(255) NOT NULL,
  `filesize2` varchar(255) NOT NULL,
  `filetype2` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menro_tb`
--

INSERT INTO `menro_tb` (`id`, `name`, `filename1`, `filesize1`, `filetype1`, `filename2`, `filesize2`, `filetype2`, `status`) VALUES
(6, 'lynel', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '', '0', '', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `sanitation_tb`
--

CREATE TABLE `sanitation_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `filename1` varchar(256) NOT NULL,
  `filesize1` varchar(256) NOT NULL,
  `filetype1` varchar(255) NOT NULL,
  `filename2` varchar(255) NOT NULL,
  `filesize2` varchar(255) NOT NULL,
  `filetype2` varchar(255) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanitation_tb`
--

INSERT INTO `sanitation_tb` (`id`, `name`, `filename1`, `filesize1`, `filetype1`, `filename2`, `filesize2`, `filetype2`, `status`) VALUES
(9, 'lynel', 'DAILY-ACCOMPLISHMENT-REPORT Week 6 - Copy.docx', '1166830', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 6 - Copy.docx', '1166830', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`ID`, `name`, `username`, `email`, `password`) VALUES
(38, 'lynel', 'lynel', 'lynel@gmail', '$2y$10$hry9JhUIYWSqkzDU0PEQ5uMk4zCPx6.vq.T/Rs.F9O6jytvz4JwNG'),
(39, 'bins', 'bins', 'bins@gmil.com', '$2y$10$RCyjx4Tofnbl7ULQNSogEu3xxwLjN45iYBQ.iiODaSt8vQWzTpGF6');

-- --------------------------------------------------------

--
-- Table structure for table `upload_tb`
--

CREATE TABLE `upload_tb` (
  `ID` int(100) NOT NULL,
  `name` varchar(256) NOT NULL,
  `filename1` varchar(255) NOT NULL,
  `filesize1` varchar(255) NOT NULL,
  `filetype1` varchar(255) NOT NULL,
  `filename2` varchar(256) NOT NULL,
  `filesize2` varchar(256) NOT NULL,
  `filetype2` varchar(256) NOT NULL,
  `organizationtype` varchar(256) NOT NULL,
  `businessname` varchar(255) NOT NULL,
  `tradename` varchar(255) NOT NULL,
  `businessadress` varchar(255) NOT NULL,
  `noemployees` varchar(255) NOT NULL,
  `registrationno` varchar(255) NOT NULL,
  `dateapp` date DEFAULT NULL,
  `CTCNo` varchar(255) NOT NULL,
  `lessorname` varchar(256) NOT NULL,
  `lessoradd` varchar(256) NOT NULL,
  `lessorno` varchar(256) NOT NULL,
  `lessoremail` varchar(255) NOT NULL,
  `montlyrent` varchar(255) NOT NULL,
  `line_business` varchar(255) NOT NULL,
  `other` varchar(256) NOT NULL,
  `businessarea` varchar(256) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upload_tb`
--

INSERT INTO `upload_tb` (`ID`, `name`, `filename1`, `filesize1`, `filetype1`, `filename2`, `filesize2`, `filetype2`, `organizationtype`, `businessname`, `tradename`, `businessadress`, `noemployees`, `registrationno`, `dateapp`, `CTCNo`, `lessorname`, `lessoradd`, `lessorno`, `lessoremail`, `montlyrent`, `line_business`, `other`, `businessarea`, `status`) VALUES
(138, 'test2', 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'DAILY-ACCOMPLISHMENT-REPORT Week 6 - Copy.docx', '1166830', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', 'Sole Proprietorship', 'test1', 'test1', 'parang', '1', '111', '2024-03-21', '111', 'test1', 'test1', '1', 'test1@gmail', '1', 'Manufacturing, Assemble etc ', '1111', '1hrt', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `zoning_tb`
--

CREATE TABLE `zoning_tb` (
  `id` int(11) NOT NULL,
  `filename1` varchar(256) NOT NULL,
  `filesize1` varchar(256) NOT NULL,
  `filetype1` varchar(256) NOT NULL,
  `dateapp` varchar(256) NOT NULL,
  `organizationtype` varchar(256) NOT NULL,
  `nameapp` varchar(255) NOT NULL,
  `addapp` varchar(255) NOT NULL,
  `namecorp` varchar(255) NOT NULL,
  `addcorp` varchar(255) NOT NULL,
  `nameauthorep` varchar(255) NOT NULL,
  `addauthorep` varchar(255) NOT NULL,
  `projecttype` varchar(255) NOT NULL,
  `projectnature` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `rightoverland` varchar(256) NOT NULL,
  `land` varchar(256) NOT NULL,
  `projectlocation` varchar(256) NOT NULL,
  `procoscap` varchar(256) NOT NULL,
  `status` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zoning_tb`
--

INSERT INTO `zoning_tb` (`id`, `filename1`, `filesize1`, `filetype1`, `dateapp`, `organizationtype`, `nameapp`, `addapp`, `namecorp`, `addcorp`, `nameauthorep`, `addauthorep`, `projecttype`, `projectnature`, `year`, `rightoverland`, `land`, `projectlocation`, `procoscap`, `status`) VALUES
(10, 'DAILY-ACCOMPLISHMENT-REPORT Week 7.docx', '1167110', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '2024-03-21', 'Nonprofit', 'lynel', 'pando', 'test1', 'test1', 'test1', 'test1', 'test1', 'newdevelopment', '1year', 'owner', 'Agricultural', 'test1', 'test1', 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `assessor_tb`
--
ALTER TABLE `assessor_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bfp_tb`
--
ALTER TABLE `bfp_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engr_tb`
--
ALTER TABLE `engr_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engr_tb2`
--
ALTER TABLE `engr_tb2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `engr_tb3`
--
ALTER TABLE `engr_tb3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menro_tb`
--
ALTER TABLE `menro_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanitation_tb`
--
ALTER TABLE `sanitation_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `upload_tb`
--
ALTER TABLE `upload_tb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `zoning_tb`
--
ALTER TABLE `zoning_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `assessor_tb`
--
ALTER TABLE `assessor_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bfp_tb`
--
ALTER TABLE `bfp_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `engr_tb`
--
ALTER TABLE `engr_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `engr_tb2`
--
ALTER TABLE `engr_tb2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `engr_tb3`
--
ALTER TABLE `engr_tb3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menro_tb`
--
ALTER TABLE `menro_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sanitation_tb`
--
ALTER TABLE `sanitation_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `upload_tb`
--
ALTER TABLE `upload_tb`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `zoning_tb`
--
ALTER TABLE `zoning_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
