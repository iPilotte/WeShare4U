-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 06:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weshare4u`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `recipientID` int(11) NOT NULL,
  `shoeID` int(11) NOT NULL,
  `amount` int(3) NOT NULL,
  `shipmethod` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `idNumber` int(11) NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `firstName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `postcode` int(5) NOT NULL,
  `mobile` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `question` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `answer` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`idNumber`, `password`, `firstName`, `lastName`, `address`, `postcode`, `mobile`, `email`, `question`, `answer`) VALUES
(123, 'ecc4208a7778c1d76e7e89c5253128c5', 'Firstname', 'Lastname', '', 0, '', 'weshare@hotmail.com', '1', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `shoesdonate`
--

CREATE TABLE `shoesdonate` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `detail` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `size` decimal(4,2) NOT NULL,
  `sizeType` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(2) NOT NULL,
  `imurl` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `shipmethod` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `shipaddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `donorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `shoesdonate`
--

INSERT INTO `shoesdonate` (`id`, `name`, `detail`, `gender`, `size`, `sizeType`, `type`, `amount`, `imurl`, `shipmethod`, `shipaddress`, `color`, `datetime`, `donorID`) VALUES
(1, 'ASICS Men\'s GEL Venture 5 Trail Running Shoe', 'Synthetic/Mesh\r\nImported\r\nRubber sole', 'Men', '1.00', 'US', 'Athletic', 1, '/user_upload/shoes/1.JPG', 'company', '', 'Black', '2017-04-04 14:07:11', 0),
(2, 'ASICS Women\'s GEL-Venture 5 Running Shoe', 'Synthetic\r\nImported\r\nSynthetic sole', 'Women', '6.00', 'US', 'Athletic', 2, '/user_upload/shoes/2.JPG', 'post', '', 'Pink/Gray', '2017-04-04 14:08:11', 0),
(3, 'Bruno MARC PRIME-1 New Men\'s Classic Modern Lace U', 'man made material\r\nDesigned in USA\r\nHeel height: 1\" Wooden Heel(approx)', 'Men', '8.00', 'US', 'Oxfords', 1, '/user_upload/shoes/3.JPG', 'company', '', 'Black', '2017-04-04 14:09:11', 0),
(4, 'JACKSHIBO Women Skull Fashionable Leather Lace-up ', 'lether\r\nRubber sole\r\nPlatform measures approximately 1.18', 'Women', '5.00', 'US', 'Athletic', 4, '/user_upload/shoes/4.JPG', 'appointment', 'Place', 'Black', '2017-04-04 14:10:11', 0),
(5, 'JSport by Jambu Women\'s Misty Encore Walking Shoe', 'Textile\r\nImported\r\nSynthetic sole', 'Women', '5.00', 'US', 'Athletic', 1, '/user_upload/shoes/5.JPG', 'post', '', 'Gray/Green', '2017-04-04 14:11:11', 0),
(6, 'L-RUN Women\'s Casual Comfortable Suede Walking Sho', 'Suede\r\nRubber sole\r\nPlatform measures approximately .75\"\r\nClassic lace-up closure ensures a great fi', 'Women', '8.50', 'US', 'Fashion_Sneakers', 1, '/user_upload/shoes/6.JPG', 'post', '', 'Red', '2017-04-04 14:12:11', 0),
(7, 'Madden Girl Women\'s Baailey Fashion Sneaker', 'Textile\r\nImported', 'Women', '7.00', 'US', 'Fashion_Sneakers', 1, '/user_upload/shoes/7.JPG', 'post', '', 'Gray', '2017-04-04 14:13:11', 0),
(8, 'DADAWEN Men\'s Leather Oxford Shoe', 'Leather\r\nRubber sole', 'Men', '7.00', 'US', 'Oxfords', 1, '/user_upload/shoes/8.JPG', 'post', '', 'Gray', '2017-04-04 14:14:11', 0),
(9, 'LED Light Up Shoes Trainers 11 Color Patterns, USB', 'Premium genuine fresh and breathable net cloth\r\nRubber sole', 'Boys', '1.00', 'US', 'Fashion_Sneakers', 1, '/user_upload/shoes/9.JPG', 'appointment', 'Place', 'Black', '2017-04-04 14:15:11', 0),
(10, 'Kunsto Men\'s Classic Leather Oxford Flats Shoes La', 'Leather\r\nImported\r\nRubber sole\r\nPlatform measures approximately 0.25\"', 'Men', '7.00', 'US', 'Oxfords', 1, '/user_upload/shoes/10.JPG', 'company', '', 'Camel', '2017-04-04 14:15:11', 0),
(11, 'The Children\'s Place Kids\' Tg Mlti Gltr Kayla Mary', 'Manmade\r\nSynthetic sole\r\nNon-functional nylon-coated bow at top', 'Girls', '5.00', 'US', 'Outdoor', 1, '/user_upload/shoes/11.JPG', 'post', '', 'Pink', '2017-04-04 14:16:11', 0),
(12, 'Schutz Women\'s Elke Slide Sandal', 'Leather\r\nImported\r\nLeather sole', 'Women', '6.00', 'US', 'Sandals', 1, '/user_upload/shoes/12.JPG', 'company', '', 'Pink', '2017-04-04 14:17:11', 0),
(13, 'KEEN Newport H2 Sandal(Toddler/Little Kid/Big Kid)', 'Textile\r\nMade in USA or Imported\r\nSynthetic sole', 'Baby', '2.00', 'EUR', 'Athletic_Outdoor', 1, '/user_upload/shoes/13.JPG', 'appointment', 'Test', 'White/Green', '2017-04-04 14:18:11', 0),
(14, 'adidas Performance Hyperfast 2.0 K Running Shoe', 'Synthetic\r\nRubber sole', 'Boys', '11.00', 'US', 'Athletic', 4, '/user_upload/shoes/14.JPG', 'post', '', 'Black/Gray', '2017-04-04 14:19:11', 0),
(15, 'Baby Unisex Swim Shoes', '82% Neoprene, 10% Rubber, 8% Nylon\r\nImported\r\npull-on closure', 'Baby', '3.00', 'US', 'Athletic_Outdoor', 1, '/user_upload/shoes/15.JPG', 'post', '', 'Pink', '2017-04-04 14:20:11', 0),
(16, 'Ahnu Women\'s Sugarpine Hiking Boot', 'Leather and textile\r\nImported\r\nRubber sole', 'Women', '5.00', 'US', 'Boots', 1, '/user_upload/shoes/16.JPG', 'post', '', 'Green', '2017-04-06 19:00:35', 0),
(17, 'Sperry Top-Sider Men\'s A/O Boat Shoe', 'Leather\r\nImported\r\nRubber sole', 'Men', '7.00', 'US', 'Loafers_Slip-Ons', 1, '/user_upload/shoes/18.JPG', 'post', '', 'Brown', '2017-04-06 19:07:55', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `shoeID` (`shoeID`),
  ADD KEY `recipientID` (`recipientID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idNumber`);

--
-- Indexes for table `shoesdonate`
--
ALTER TABLE `shoesdonate`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `shoesdonate`
--
ALTER TABLE `shoesdonate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`shoeID`) REFERENCES `shoesdonate` (`id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`recipientID`) REFERENCES `member` (`idNumber`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
