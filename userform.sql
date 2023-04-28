-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2023 at 04:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `Gname` varchar(50) DEFAULT NULL,
  `Language` varchar(12) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `ram` int(11) DEFAULT NULL,
  `system` varchar(10) DEFAULT NULL,
  `cpu` varchar(30) DEFAULT NULL,
  `vcard` varchar(30) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`Gname`, `Language`, `size`, `ram`, `system`, `cpu`, `vcard`, `link`) VALUES
('Grand Theft Auto V', 'English', 64, 6, '7/8/8.1/10', 'core i5 @2.40GHz(4 CPUs)', 'NVIDIA 9800 GT 1GB', 'https://downloads.digitaltrends.com/tencent-gaming-buddy/windows/post-download'),
('Titanfall 2', 'English', 30, 8, '7<= 64-Bit', 'core i3-6300 (4<= threads)', 'no needed if any have better', 'https://downloads.digitaltrends.com/tencent-gaming-buddy/windows/post-download'),
('GHOST RECON WILDLANDS', 'English', 60, 8, '7/8/8.1/10', 'core i5-2400S @2.5 GHz', 'NVIDIA 1060 GTx 4GB', 'https://downloads.digitaltrends.com/tencent-gaming-buddy/windows/post-download'),
('Quantum Break', 'English', 55, 8, '7/8/8.1/10', '2GHz Core i5 or later', 'NVIDIA 1080 GTx 4GB', 'https://downloads.digitaltrends.com/tencent-gaming-buddy/windows/post-download'),
('Forza Horizon 4', 'English', 70, 16, '10 or Xbox', 'Core i7-3820 @3.6 GHz', 'NVIDIA 1080 GTx 4GB', 'https://downloads.digitaltrends.com/tencent-gaming-buddy/windows/post-download'),
('Call Of Duty WWII', 'English', 60, 8, '7/8/8.1/10', 'Core i5-3225 @3.3GHz', 'NVIDIA 9800 GTx 2GB', 'https://downloads.digitaltrends.com/tencent-gaming-buddy/windows/post-download');

-- --------------------------------------------------------

--
-- Table structure for table `game_pics`
--

CREATE TABLE `game_pics` (
  `Gname` varchar(50) DEFAULT NULL,
  `pic` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_pics`
--

INSERT INTO `game_pics` (`Gname`, `pic`) VALUES
('Grand Theft Auto V', 'GTA_1'),
('Grand Theft Auto V', 'GTA_2'),
('Grand Theft Auto V', 'GTA_3'),
('Grand Theft Auto V', 'GTA_4'),
('Grand Theft Auto V', 'GTA_5'),
('Titanfall 2', 'titanfall_1'),
('Titanfall 2', 'titanfall_2'),
('GHOST RECON WILDLANDS', 'ghost_1'),
('Quantum Break', 'QunBk_1'),
('Forza Horizon 4', 'forza_1'),
('Call Of Duty WWII', 'wwii_1');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL,
  `image_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `image_text`, `image_date`) VALUES
(0, 'q.jpg', 'Everyone is invited', '2020-06-17'),
(0, 'call-of-duty-black-ops-iii-logo-temp.jpg', 'Cod : Online room \r\nID: 12\r\nPass : 1234', '2020-06-20'),
(0, 'i.jpg', '', ''),
(0, 'straeming.jpg', 'Student', '2020-06-27');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `link`) VALUES
(95, ''),
(96, 'https://www.youtube.com/embed/KgA0uRB_ri8'),
(97, ''),
(98, 'https://www.youtube.com/embed/v-hEYvq6t3M'),
(99, ''),
(100, 'https://www.youtube.com/embed/24lzKPr1PPM'),
(101, 'https://www.youtube.com/embed/KTa1_15_FZk'),
(102, 'https://www.youtube.com/embed/OATEmWxyvYo'),
(103, 'https://www.youtube.com/embed/OATEmWxyvYo'),
(104, 'https://www.youtube.com/embed/OATEmWxyvYo'),
(105, 'https://www.youtube.com/embed/OATEmWxyvYo'),
(106, 'https://www.youtube.com/embed/vj1ENjn-XVU'),
(107, 'https://www.youtube.com/embed/vj1ENjn-XVU'),
(108, 'https://www.youtube.com/embed/Pc7lixy4Js8'),
(109, 'https://www.youtube.com/embed/Pc7lixy4Js8'),
(110, ''),
(111, '');

-- --------------------------------------------------------

--
-- 
-- --------------------------------------------------------

--
-- Table structure for table `trnmt`
--

CREATE TABLE `trnmt` (
  `id` int(11) NOT NULL,
  `Date` varchar(30) DEFAULT NULL,
  `Image` varchar(200) DEFAULT NULL,
  `Details` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trnmt`
--

INSERT INTO `trnmt` (`id`, `Date`, `Image`, `Details`) VALUES
(1, '1', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`Personid`);

--
-- Indexes for table `trnmt`
--
ALTER TABLE `trnmt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `Personid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trnmt`
--
ALTER TABLE `trnmt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
