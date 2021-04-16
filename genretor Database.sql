-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2021 at 11:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `genretor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `sub_name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `sub_name`, `image`, `status`, `added_on`) VALUES
(6, 'Generator', 'All Types of Generators are availabe', '97553054_dieselgenerator.jpg', 1, '2021-02-27 12:23:15'),
(7, 'Portable Generator', 'Brand Daito Model DG6500 SE Fuel Consumption', '74376841_Onshore Diesel Generators US large portable power unit render_crop.jpg', 1, '2021-02-27 12:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE `career` (
  `career_id` int(11) NOT NULL,
  `job_name` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`career_id`, `job_name`, `description`, `experience`, `location`, `status`, `added_on`) VALUES
(2, 'Javascript ', 'Mean Stack developer', 'fresher', 'Mumbai', 0, '2021-02-23 09:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `career_applied`
--

CREATE TABLE `career_applied` (
  `id` int(11) NOT NULL,
  `career_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career_applied`
--

INSERT INTO `career_applied` (`id`, `career_id`, `name`, `email`, `mobile`, `image`, `status`, `added_on`) VALUES
(8, 2, 'azhar', 'azhar.coderr@gmail.com', '2545871874', '69147585_FYH5BGh.jpg', 0, '2021-02-26 02:31:02'),
(11, 2, 'admin', 'azhar.coderr@gmail.com', '16555425232', '54910490_black-background-mak-creates-web-design-services-1500-2500.jpg', 0, '2021-02-26 02:34:37'),
(12, 2, 'admin', 'admin@gmail.com', '2545871874', '90329213_737400.jpg', 0, '2021-02-26 02:35:39'),
(13, 2, 'azhar', 'azhar.coderr@gmail.com', '2545871874', '67603303_993772.jpg', 0, '2021-02-26 02:36:20'),
(14, 2, 'abc', 'abc@gmail.com', '2545871874', '14973479_69ScPA.png', 0, '2021-02-26 02:36:59'),
(15, 2, 'admin', 'azhar.coderr@gmail.com', '2545871874', '18710374_FYH5BGh.jpg', 0, '2021-02-26 02:37:36'),
(16, 2, 'qwerty', 'azhar.coderr@gmail.com', '2545871874', '95588219_2791.jpg', 0, '2021-02-26 02:39:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `status`, `added_on`) VALUES
(7, 'Diesel Generator', 1, '2021-02-27 17:33:52'),
(8, ' Alternator Repairing Service', 1, '2021-02-27 17:38:00'),
(9, ' Portable Generator', 1, '2021-02-27 17:39:41'),
(10, 'Inverter Batteries', 1, '2021-02-27 17:41:16');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `bio`, `image`, `status`, `added_on`) VALUES
(7, 'technology 24', 'tech2', '92991453_factory-1.png', 1, '2021-02-27 12:28:08'),
(8, 'factory', 'machine', '71759582_factory-2.png', 1, '2021-02-27 12:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `client_review`
--

CREATE TABLE `client_review` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `review` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_review`
--

INSERT INTO `client_review` (`id`, `name`, `review`, `image`, `status`, `added_on`) VALUES
(2, 'abcd', 'Its a best web site ever i seen ', '81874064_author-3.jpg', 1, '2021-02-27 12:30:48'),
(3, 'qwerty', 'This Company is Trust worthy', '19093487_author-1.jpg', 0, '2021-02-27 12:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE `enquery` (
  `e_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `e_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `message` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquery`
--

INSERT INTO `enquery` (`e_id`, `p_id`, `e_name`, `email`, `mobile`, `message`, `address`, `status`, `added_on`) VALUES
(2, 19, 'sd', 'sd@gmail.com', 0, 'sdf', 'sd', 0, '2021-02-23 03:35:45'),
(3, 21, 'abc', 'abc@gmail.com', 2147483647, 'test', 'test', 0, '2021-02-23 04:23:54'),
(4, 20, 'test', 'test@gmail.com', 2147483647, 'sd', 'd', 0, '2021-02-25 21:09:27'),
(5, 20, 'azhar', 'azhar.coderr@gmail.com', 2147483647, 'df', 'df', 0, '2021-02-25 21:10:43'),
(6, 20, 'snd', 'new@gmail.com', 0, 'df', 'd', 0, '2021-02-25 21:23:51'),
(7, 19, 'abc', 'admin@gmail.com', 2147483647, 'df', 'df', 0, '2021-02-25 21:29:33'),
(8, 21, 'abc', 'sara@gmail.com', 2147483647, 'SD', 'D', 0, '2021-02-25 21:44:44'),
(9, 20, 'test', 'nk@gmail.com', 2147483647, 'sn', 'nn', 0, '2021-02-25 22:01:50'),
(10, 20, 'abc', 'sara@gmail.com', 2147483647, 'df', 'df', 0, '2021-02-25 22:02:25'),
(11, 21, 'azhar', 'azhar.coderr@gmail.com', 2147483647, 'd', 'd', 0, '2021-02-25 22:04:23'),
(12, 20, 'abc', 'azhar.coderr@gmail.com', 2147483647, 'SDD', 'DF', 0, '2021-02-26 01:59:17'),
(13, 21, 'CV', 'dfght@g.com', 0, 'DF', 'DF', 0, '2021-02-26 02:00:45'),
(14, 21, 'abc', 'azhar.coderr@gmail.com', 0, 'c', 'dd', 0, '2021-02-26 02:27:42'),
(15, 21, 'mn', 'mm@gmail.com', 2147483647, 'sd', 'sd', 0, '2021-02-26 02:28:48'),
(16, 20, 'abc', 'admin@gmail.com', 3, 's', 'sd', 0, '2021-02-26 02:49:54'),
(17, 20, 'abc', 'azhar.coderr@gmail.com', 2147483647, 'sdfg', 'edfg', 0, '2021-02-26 03:10:02'),
(18, 19, 'abc', 'azhar.coderr@gmail.com', 3, 'f', 'df', 0, '2021-02-26 03:11:00'),
(19, 20, 'snd', 'qwerty@gmail.com', 0, 'mk', 'nk', 0, '2021-02-26 03:43:52'),
(20, 20, 'test', 'azhar.coderr@gmail.com', 2147483647, 'asdfg', 'sde', 0, '2021-02-26 03:47:56'),
(21, 19, 'abc', 'azhar.coderr@gmail.com', 33333, 'ed', 'df', 0, '2021-02-26 03:49:16'),
(22, 19, 'abc', 'sara@gmail.com', 3, 'edd', 'sdf', 0, '2021-02-26 03:50:18'),
(23, 21, 'test', 'azhar.coderr@gmail.com', 3, 'edfg', 'd', 0, '2021-02-26 03:51:40'),
(24, 20, 'asd', 'azhar.coderr@gmail.com', 1234567890, 'sdf', 'dfg', 0, '2021-02-27 07:23:03'),
(25, 27, 'abc', 'sndk@gmail.com', 2147483647, 'sdf', 'sdfg', 1, '2021-02-26 20:49:40'),
(26, 23, '233', 'azhar.coderr@gmail.com', 2147483647, 'asd', 'sdsd', 1, '2021-03-01 04:39:44');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `file`, `status`) VALUES
(20, './media/gallery/11870014_product-jpeg-500x500.jpg', 1),
(21, './media/gallery/18413592_30-kva-silent-diesel-generator-250x250.jpg', 1),
(22, './media/gallery/25994936_single-phase-alternator-repairing-service-500x500.png', 0),
(23, './media/gallery/32198439_portable-generator-500x500.jpg', 0),
(24, './media/gallery/52737003_diesel-generator-500x500.jpg', 0),
(25, './media/gallery/74782256_koel-single-phase-diesel-generator-500x500.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `cat_id`, `name`, `description`, `image`, `status`, `added_on`) VALUES
(22, 7, '30 KVA Silent Diesel Generator', 'Phase	Single Phase\r\nPower	5 kVA\r\nFuel Consumption (at 100% Load)	1.5 ltrs/hr\r\nFuel Tank Capacity	12.5 L\r\nWarranty	1 Year\r\nCountry of Origin	Made in India\r\nMax Power Output	5500 VA\r\nComparison Method	55% savings over petrol gensets\r\nFuel Consumption (At 50% Load)	0.9 ltrs/hr', '18413592_30-kva-silent-diesel-generator-250x250.jpg', 1, '2021-02-27 12:04:33'),
(23, 7, 'Diesel Generator', 'Phase	Single Phase\r\nPower	5 kVA\r\nFuel Consumption (at 100% Load)	1.5 ltrs/hr\r\nFuel Tank Capacity	12.5 L\r\nWarranty	1 Year\r\nCountry of Origin	Made in India\r\nMax Power Output	5500 VA\r\nComparison Method	55% savings over petrol gensets\r\nFuel Consumption (At 50% Load)	0.9 ltrs/hr\r\nFuel Consumption (At 75% Load)	1.2 ltrs/hr\r\nLube. Oil Capacity	1650 ml\r\nFuel Type	Diesel\r\n', '52737003_diesel-generator-500x500.jpg', 1, '2021-02-27 12:05:49'),
(25, 7, 'Koel Single Phase Diesel Generator', 'Phase	Three\r\nPower	320 kVA\r\nVoltage	450 V\r\nCooling System	Water Cooling\r\nFuel Type	Diesel\r\nCountry of Origin	Made in India\r\nPower Factor	0.8\r\nNoise	Less than 72 dB\r\nRated Speed	3000 RPM', '74782256_koel-single-phase-diesel-generator-500x500.jpg', 0, '2021-02-27 12:07:23'),
(26, 8, 'Single Phase Alternator Repairing Service', 'We render our highly reliable Single Phase Alternator Repairing Service in complete compliance with industry standards and norms. Widely offered to power generation units in various', '25994936_single-phase-alternator-repairing-service-500x500.png', 1, '2021-02-27 12:09:10'),
(27, 9, 'Portable', 'Brand	Daito\r\nModel	DG6500 SE\r\nFuel Consumption (at 100% Load)	1 L\r\nFuel Tank Capacity	16 L\r\nCountry of Origin	Made in India\r\nEngine Type	Diesel\r\nEngine Mode	Air-cooled\r\nDisplacement	1500 ml\r\nNoise Level	60dbA\r\nContinuing Time	6 hours\r\nMax Output	6 Kw\r\nSize	900x520x700 mm\r\nWeight	170 Kg\r\nPower	10 KVA\r\n\r\nPortable Generator\r\n', '32198439_portable-generator-500x500.jpg', 1, '2021-02-27 12:10:40'),
(28, 10, 'Inverter Batteries', 'Brand	Luminous\r\nCapacity	135-1800', '43485155_Onshore Diesel Generators US large portable power unit render_crop.jpg', 1, '2021-02-27 12:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `q_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` int(11) NOT NULL,
  `notes` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `added_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`id`, `p_id`, `q_name`, `email`, `mobile`, `notes`, `status`, `added_on`) VALUES
(1, 21, 'abc', '', 1234566789, '', 1, '2021-02-26 09:50:10'),
(2, 0, '$q_name', '', 0, '', 1, '0000-00-00 00:00:00'),
(3, 0, 'xyz', '', 2147483647, '', 1, '2021-02-26 05:54:37'),
(4, 20, 'xyzq', '', 2147483647, '', 1, '2021-02-26 05:57:03'),
(5, 19, 'xyz', 'azhar.coderr@gmail.com', 2147483647, 'ED', 1, '2021-02-27 01:14:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `career_applied`
--
ALTER TABLE `career_applied`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_review`
--
ALTER TABLE `client_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquery`
--
ALTER TABLE `enquery`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `career_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `career_applied`
--
ALTER TABLE `career_applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_review`
--
ALTER TABLE `client_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enquery`
--
ALTER TABLE `enquery`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
