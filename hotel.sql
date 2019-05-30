-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2019 at 05:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `BookingNo` int(10) NOT NULL,
  `CheckInDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `CheckOutDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `MemberOrNot` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `GuestID` int(11) DEFAULT NULL,
  `UserID` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `UsingPoint` int(11) DEFAULT NULL,
  `DiscountCode` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `TotalPrice` int(11) NOT NULL,
  `TotalDiscount` float NOT NULL,
  `Balance` float NOT NULL,
  `GetPoint` int(11) DEFAULT NULL,
  `GuestName` varchar(120) COLLATE utf8_unicode_ci DEFAULT NULL,
  `KeyStatus` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`BookingNo`, `CheckInDate`, `CheckOutDate`, `MemberOrNot`, `GuestID`, `UserID`, `UsingPoint`, `DiscountCode`, `TotalPrice`, `TotalDiscount`, `Balance`, `GetPoint`, `GuestName`, `KeyStatus`) VALUES
(1000000001, '2019-05-27 17:55:02', '2019-05-30 17:00:00', 'Yes', NULL, 'M0000000001', 0, NULL, 2500, 0, 2500, 25, 'Carson Saunders', 2),
(1000000002, '2019-01-12 17:00:00', '2019-01-13 17:00:00', 'Yes', NULL, 'M0000000002', 0, NULL, 4000, 0, 4000, 40, 'Jayme Bray', 2),
(1000000003, '2019-01-13 17:00:00', '2019-01-14 17:00:00', 'Yes', NULL, 'M0000000003', 0, NULL, 2500, 0, 2500, 25, 'Lisa Blackpink', 2),
(1000000004, '2019-01-20 17:00:00', '2019-01-21 17:00:00', 'Yes', NULL, 'M0000000004', 0, NULL, 5500, 0, 5500, 55, 'Rose Blackpink', 2),
(1000000005, '2019-01-22 17:00:00', '2019-01-23 17:00:00', 'Yes', NULL, 'M0000000005', 0, NULL, 7500, 0, 7500, 70, 'Boa SM', 2),
(1000000006, '2019-05-27 17:55:21', '2019-05-28 17:00:00', 'No', 1, NULL, 0, NULL, 7500, 0, 7500, 0, 'Jaemin NctDream', 2),
(1000000007, '2019-04-27 16:55:17', '2019-04-28 17:00:00', 'No', 2, NULL, 0, NULL, 7500, 0, 7500, 0, 'Jeno NctDream', 2),
(1000000008, '2019-05-27 17:56:13', '2019-05-28 17:00:00', 'No', 3, NULL, 0, NULL, 5500, 0, 5500, 0, 'Mark NctDream', 2),
(1000000009, '2019-05-24 16:55:17', '2019-05-25 17:00:00', 'No', 4, NULL, 0, NULL, 5500, 0, 5500, 0, 'Renjun NctDream', 2),
(1000000010, '2019-02-14 17:00:00', '2019-02-15 17:00:00', 'Yes', NULL, 'M0000000001', 0, NULL, 2350, 0, 2350, 23, 'Carson Saunders', 2),
(1000000011, '2019-02-14 17:00:00', '2019-02-17 17:00:00', 'Yes', NULL, 'M0000000009', 0, NULL, 10500, 0, 10500, 105, 'Chanyeol Exo', 2),
(1000000012, '2019-02-16 16:55:17', '2019-02-22 17:00:00', 'No', 5, NULL, 0, NULL, 10500, 0, 10500, 105, 'Baekhyun Exo', 2),
(1000000013, '2019-03-01 17:00:00', '2019-03-02 17:00:00', 'Yes', NULL, 'M0000000003', 0, NULL, 2500, 0, 2500, 25, 'Jennie Blackpink', 2),
(1000000014, '2019-03-04 16:55:17', '2019-03-05 17:00:00', 'No', 6, NULL, 0, NULL, 4000, 0, 4000, 0, 'Minho SHINee', 2),
(1000000015, '2019-03-14 17:00:00', '2019-03-15 17:00:00', 'Yes', NULL, 'M0000000001', 0, NULL, 4500, 0, 4500, 45, 'Carson Saunders', 2),
(1000000016, '2019-04-22 16:55:17', '2019-04-24 17:00:00', 'No', 7, NULL, 0, 'L3W78ZNM4M', 10500, 5250, 5250, 0, 'Key SHINee', 2),
(1000000017, '2019-04-07 17:00:00', '2019-04-08 17:00:00', 'Yes', NULL, 'M0000000001', 20, NULL, 4000, 200, 3800, 38, 'Carson Saunders', 2),
(1000000018, '2019-04-07 17:00:00', '2019-04-08 17:00:00', 'Yes', NULL, 'M0000000050', 0, 'X7R63HKT2A', 1500, 750, 750, 7, 'Heechul Superjunior', 2),
(1000000019, '2019-05-27 17:00:00', '2019-05-28 17:00:00', 'Yes', NULL, 'M0000000003', 20, 'S0B42DJM7X', 3500, 1190, 2310, 23, 'Surapont Toomnak', 1),
(1000000020, '2019-05-24 18:21:20', '2019-05-30 17:00:00', 'No', 8, NULL, 0, 'O0W45BWP4K', 7250, 725, 6525, 0, NULL, 0),
(1000000021, '2019-05-28 17:00:00', '2019-05-30 17:00:00', 'No', 16, NULL, NULL, 'A3J92WIV6I', 0, 0, 0, NULL, NULL, 0),
(1000000022, '2019-05-28 17:00:00', '2019-05-30 17:00:00', 'No', 17, NULL, NULL, 'A3J92WIV6I', 0, 0, 0, NULL, NULL, 0),
(1000000023, '2019-05-28 17:00:00', '2019-05-30 17:00:00', 'No', 17, NULL, NULL, 'A3J92WIV6I', 0, 0, 0, NULL, NULL, 0),
(1000000024, '2019-05-28 17:00:00', '2019-05-30 17:00:00', 'No', 17, NULL, NULL, 'A3J92WIV6I', 0, 0, 0, NULL, NULL, 0),
(1000000025, '2019-05-28 17:00:00', '2019-05-30 17:00:00', 'No', 17, NULL, 0, 'A3J92WIV6I', 8800, 3960, 4840, 0, NULL, 0),
(1000000026, '2019-05-29 17:00:00', '2019-05-30 17:00:00', 'Yes', NULL, 'M0000000001', NULL, 'A3J92WIV6I', 0, 0, 0, NULL, NULL, 0),
(1000000027, '2019-05-28 17:00:00', '2019-05-30 17:00:00', 'Yes', NULL, 'M0000000001', NULL, 'A3J92WIV6I', 0, 0, 0, NULL, NULL, 0),
(1000000028, '2019-05-29 17:00:00', '2019-05-30 17:00:00', 'Yes', NULL, 'M0000000001', NULL, 'A3J92WIV6I', 0, 0, 0, NULL, NULL, 0),
(1000000029, '2019-05-28 17:00:00', '2019-05-30 17:00:00', 'Yes', NULL, 'M0000000001', 2, 'A3J92WIV6I', 7000, 3161, 3839, 38, NULL, 0),
(1000000030, '2019-05-28 17:00:00', '2019-05-30 17:00:00', 'Yes', NULL, 'M0000000001', 5, 'A3J92WIV6I', 15400, 6957.5, 8442.5, 84, NULL, 0),
(1000000031, '2019-05-28 17:00:00', '2019-05-29 17:00:00', 'Yes', NULL, 'M0000000001', NULL, NULL, 0, 0, 0, NULL, 'testtt', 1),
(1000000032, '2019-05-28 17:00:00', '2019-05-29 17:00:00', 'Yes', NULL, 'M0000000001', NULL, NULL, 0, 0, 0, NULL, NULL, 0),
(1000000033, '2019-05-29 17:00:00', '2019-05-30 17:00:00', 'Yes', NULL, 'M0000000001', NULL, NULL, 0, 0, 0, NULL, NULL, 0),
(1000000034, '2019-05-28 17:00:00', '2019-05-29 17:00:00', 'Yes', NULL, 'M0000000001', NULL, NULL, 0, 0, 0, NULL, NULL, 0),
(1000000035, '2019-05-28 17:00:00', '2019-05-30 17:00:00', 'Yes', NULL, 'M0000000050', 20, 'A3J92WIV6I', 10800, 4970, 5830, 58, NULL, 0),
(1000000036, '2019-05-28 17:00:00', '2019-05-29 17:00:00', 'Yes', NULL, 'M0000000050', NULL, NULL, 0, 0, 0, NULL, NULL, 0),
(1000000037, '2019-05-28 17:00:00', '2019-05-29 17:00:00', 'Yes', NULL, 'M0000000050', NULL, NULL, 0, 0, 0, NULL, NULL, 0),
(1000000038, '2019-05-28 17:00:00', '2019-05-29 17:00:00', 'Yes', NULL, 'M0000000050', NULL, NULL, 0, 0, 0, NULL, NULL, 0),
(1000000039, '2019-05-30 17:00:00', '2019-06-02 17:00:00', 'Yes', NULL, 'M0000000050', 20, NULL, 17200, 200, 17000, 170, NULL, 0),
(1000000040, '2019-06-02 17:00:00', '2019-06-04 17:00:00', 'Yes', NULL, 'M0000000050', NULL, NULL, 0, 0, 0, NULL, NULL, 0),
(1000000041, '2019-05-30 17:00:00', '2019-06-03 17:00:00', 'Yes', NULL, 'M0000000050', NULL, NULL, 0, 0, 0, NULL, NULL, 0),
(1000000042, '2019-05-30 17:00:00', '2019-05-31 17:00:00', 'Yes', NULL, 'M0000000050', NULL, NULL, 0, 0, 0, NULL, NULL, 0),
(1000000043, '2019-05-29 17:00:00', '2019-05-30 17:00:00', 'Yes', NULL, 'M0000000050', NULL, NULL, 0, 0, 0, NULL, NULL, 0),
(1000000044, '2019-05-30 17:00:00', '2019-05-31 17:00:00', 'Yes', NULL, 'M0000000050', 20, NULL, 3500, 200, 3300, 33, NULL, 0),
(1000000045, '2019-05-30 17:00:00', '2019-06-01 17:00:00', 'Yes', NULL, 'M0000000050', 20, NULL, 9700, 200, 9500, 95, NULL, 0),
(1000000046, '2019-05-30 17:00:00', '2019-05-31 17:00:00', 'Yes', NULL, 'M0000000050', 20, NULL, 7250, 200, 7050, 70, NULL, 0),
(1000000047, '2019-05-31 17:00:00', '2019-06-04 17:00:00', 'Yes', NULL, 'M0000000050', 20, NULL, 22000, 200, 21800, 218, NULL, 0),
(1000000048, '2019-05-30 17:00:00', '2019-05-31 17:00:00', 'Yes', NULL, 'M0000000050', 20, NULL, 2350, 200, 2150, 21, NULL, 0),
(1000000049, '2019-05-30 17:00:00', '2019-05-31 17:00:00', 'Yes', NULL, 'M0000000050', 20, NULL, 3500, 200, 3300, 33, NULL, 0),
(1000000050, '2019-05-31 17:00:00', '2019-06-11 17:00:00', 'Yes', NULL, 'M0000000050', 0, NULL, 60500, 0, 60500, 605, NULL, 0),
(1000000051, '2019-05-31 17:00:00', '2019-06-01 17:00:00', 'Yes', NULL, 'M0000000050', 20, NULL, 7350, 200, 7150, 71, NULL, 0),
(1000000052, '2019-05-30 17:00:00', '2019-05-31 17:00:00', 'Yes', NULL, 'M0000000050', NULL, 'A3J92WIV6I', 0, 0, 0, NULL, NULL, 0),
(1000000053, '2019-05-30 17:00:00', '2019-05-31 17:00:00', 'Yes', NULL, 'M0000000050', 20, 'A3J92WIV6I', 11700, 5375, 6325, 63, NULL, 0),
(1000000054, '2019-05-30 17:00:00', '2019-05-31 17:00:00', 'Yes', NULL, 'M0000000050', 11, NULL, 5500, 110, 5390, 53, NULL, 0),
(1000000055, '2019-05-30 17:00:00', '2019-05-31 17:00:00', 'Yes', NULL, 'M0000000050', NULL, NULL, 0, 0, 0, NULL, NULL, 0),
(1000000056, '2019-05-30 17:00:00', '2019-05-31 17:00:00', 'No', 18, NULL, 0, 'A3J92WIV6I', 3500, 1575, 1925, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bookingroom`
--

CREATE TABLE `bookingroom` (
  `RoomID` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `BookingNo` int(10) NOT NULL,
  `AmountOfGuest` int(11) NOT NULL,
  `AdditionBed` tinyint(4) NOT NULL,
  `FoodService` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookingroom`
--

INSERT INTO `bookingroom` (`RoomID`, `BookingNo`, `AmountOfGuest`, `AdditionBed`, `FoodService`) VALUES
('BKK001DLX001', 1000000026, 1, 0, 0),
('BKK001DLX002', 1000000027, 3, 1, 0),
('BKK001DLX401', 1000000001, 2, 0, 0),
('BKK001DLX401', 1000000028, 3, 1, 0),
('BKK001DLX402', 1000000029, 1, 0, 0),
('BKK001DLX403', 1000000030, 4, 1, 0),
('BKK001DLX404', 1000000030, 4, 1, 0),
('BKK001SPR205', 1000000026, 4, 1, 1),
('BKK001SPR309', 1000000001, 2, 0, 1),
('BKK001STD201', 1000000026, 2, 1, 0),
('BKK001STD202', 1000000027, 4, 1, 1),
('BKK001STD203', 1000000028, 5, 1, 0),
('BKK001SUT501', 1000000026, 3, 0, 1),
('BKK001SUT502', 1000000027, 7, 1, 1),
('BKK001SUT503', 1000000039, 3, 1, 0),
('BKK001SUT504', 1000000047, 1, 0, 0),
('BKK002DLX401', 1000000024, 3, 1, 0),
('BKK002DLX402', 1000000034, 1, 0, 0),
('BKK002DLX403', 1000000038, 1, 0, 0),
('BKK002DLX404', 1000000056, 1, 0, 0),
('BKK002SPR205', 1000000025, 4, 1, 0),
('BKK002STD201', 1000000025, 4, 1, 0),
('BKK002STD301', 1000000002, 1, 0, 1),
('BKK002STD302', 1000000002, 2, 1, 0),
('BKK003DLX401', 1000000033, 1, 1, 1),
('BKK003DLX402', 1000000049, 1, 0, 0),
('BKK003SPR212', 1000000010, 1, 0, 1),
('BKK003STD201', 1000000041, 1, 1, 0),
('BKK003STD308', 1000000013, 3, 1, 1),
('BKK003STD308', 1000000018, 3, 0, 0),
('BKK003SUT501', 1000000042, 1, 0, 0),
('BKK003SUT502', 1000000052, 1, 1, 0),
('BKK003SUT503', 1000000054, 1, 0, 0),
('BKK004DLX401', 1000000044, 1, 0, 0),
('BKK004SPR205', 1000000008, 4, 0, 0),
('BKK004SPR205', 1000000032, 1, 0, 0),
('BKK004SPR206', 1000000048, 1, 0, 0),
('BKK004SUT501', 1000000050, 1, 0, 0),
('BKK004SUT701', 1000000009, 2, 0, 1),
('CMI001DLX501', 1000000004, 3, 1, 0),
('CMI001DLX501', 1000000015, 1, 0, 0),
('CMI001DLX501', 1000000031, 1, 0, 0),
('CMI001DLX502', 1000000045, 1, 1, 0),
('CMI001DLX503', 1000000055, 1, 0, 0),
('CMI001DLX602', 1000000016, 5, 0, 0),
('CMI001SPR405', 1000000011, 2, 0, 1),
('CMI001SPR405', 1000000012, 2, 0, 0),
('CMI001STD201', 1000000003, 1, 0, 1),
('CMI001STD201', 1000000035, 3, 0, 1),
('CMI001STD205', 1000000019, 3, 1, 0),
('CMI001SUT101', 1000000040, 1, 1, 0),
('CMI001SUT701', 1000000006, 2, 0, 0),
('CMI001SUT701', 1000000007, 2, 0, 1),
('PKT001DLX501', 1000000046, 1, 0, 0),
('PKT001DLX502', 1000000051, 1, 0, 1),
('PKT001DLX503', 1000000020, 1, 0, 0),
('PKT001DLX601', 1000000005, 1, 0, 1),
('PKT001SPR405', 1000000017, 1, 0, 0),
('PKT001SPR407', 1000000014, 2, 0, 0),
('PKT001SUT101', 1000000053, 5, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `branchinfo`
--

CREATE TABLE `branchinfo` (
  `BranchNo` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `BranchName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `BranchCountry` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `BranchAddress` text COLLATE utf8_unicode_ci NOT NULL,
  `BranchTel` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `BranchZipCode` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `branchinfo`
--

INSERT INTO `branchinfo` (`BranchNo`, `BranchName`, `BranchCountry`, `BranchAddress`, `BranchTel`, `BranchZipCode`) VALUES
('BKK001', 'PrachaUthit', 'Bangkok', '3/135 PrachaUthih Rd.', '024568512', '10140'),
('BKK002', 'Ramintra', 'Bangkok', '58/7 Ramintra Rd.', '025198722', '10220'),
('BKK003', 'Farmland', 'Bangkok', '1/111 Kaset-Nawamin Rd.', '025478965', '10340'),
('BKK004', 'Rice', 'Bangkok', '66/88 Kao-San Rd.', '025147852', '10270'),
('CMI001', 'StickyRice', 'Chiang Mai', '658/1 Kao-Niew Rd.', '023654789', '50300'),
('PKT001', 'Alley', 'Phuket', '22/8 Bird Zoo Phuket', '023145826', '83000');

-- --------------------------------------------------------

--
-- Table structure for table `discountinfo`
--

CREATE TABLE `discountinfo` (
  `DiscountCode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DiscountPercent` int(11) NOT NULL,
  `ExpireDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `StartUsingDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `EndUsingDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `discountinfo`
--

INSERT INTO `discountinfo` (`DiscountCode`, `DiscountPercent`, `ExpireDate`, `StartUsingDate`, `EndUsingDate`) VALUES
('A3J92WIV6I', 45, '2020-06-21 17:00:00', '2019-09-19 17:00:00', '2019-10-23 17:00:00'),
('A4C13FNY9I', 43, '2020-06-22 17:00:00', '2019-09-25 17:00:00', '2019-10-27 17:00:00'),
('B6N51WLM9M', 11, '2020-06-07 17:00:00', '2019-08-31 17:00:00', '2019-10-08 17:00:00'),
('B9K60POJ2M', 47, '2020-06-10 17:00:00', '2019-09-14 17:00:00', '2019-10-16 17:00:00'),
('C0E66XOS1Q', 46, '2020-06-09 17:00:00', '2019-09-18 17:00:00', '2019-10-27 17:00:00'),
('C0R44YEZ1U', 48, '2020-06-26 17:00:00', '2019-09-12 17:00:00', '2019-10-12 17:00:00'),
('C0W32JMJ4A', 32, '2020-05-31 17:00:00', '2019-09-05 17:00:00', '2019-10-26 17:00:00'),
('C1M41QBM2G', 33, '2020-06-25 17:00:00', '2019-09-14 17:00:00', '2019-10-12 17:00:00'),
('C4Q86ZYI6M', 30, '2020-06-14 17:00:00', '2019-09-02 17:00:00', '2019-10-19 17:00:00'),
('C5X32ZLR6B', 28, '2020-06-01 17:00:00', '2019-09-02 17:00:00', '2019-10-21 17:00:00'),
('C6Z61XIU6Z', 26, '2020-06-21 17:00:00', '2019-09-26 17:00:00', '2019-10-29 17:00:00'),
('C8R10GPM2C', 27, '2020-06-03 17:00:00', '2019-09-15 17:00:00', '2019-10-17 17:00:00'),
('D5O46SBN0I', 44, '2020-06-16 17:00:00', '2019-09-16 17:00:00', '2019-10-30 17:00:00'),
('D5Q48FDQ8T', 42, '2020-06-04 17:00:00', '2019-09-16 17:00:00', '2019-10-16 17:00:00'),
('D8S76RLY4F', 20, '2020-06-29 17:00:00', '2019-09-16 17:00:00', '2019-10-07 17:00:00'),
('E0A46GJP6M', 40, '2020-06-15 17:00:00', '2019-09-26 17:00:00', '2019-10-20 17:00:00'),
('E6X69FRS5D', 17, '2020-06-17 17:00:00', '2019-09-20 17:00:00', '2019-10-22 17:00:00'),
('E7T35WLE0T', 11, '2020-06-22 17:00:00', '2019-09-08 17:00:00', '2019-10-24 17:00:00'),
('F0J62WXO9L', 45, '2020-06-13 17:00:00', '2019-09-11 17:00:00', '2019-10-05 17:00:00'),
('F4Q42DDU6P', 22, '2020-06-02 17:00:00', '2019-09-23 17:00:00', '2019-10-26 17:00:00'),
('F8B37QRI4L', 11, '2020-06-01 17:00:00', '2019-09-04 17:00:00', '2019-10-06 17:00:00'),
('F8K35WDR5G', 47, '2020-06-17 17:00:00', '2019-09-05 17:00:00', '2019-10-17 17:00:00'),
('G0V20GTX6G', 47, '2020-06-09 17:00:00', '2019-09-20 17:00:00', '2019-10-08 17:00:00'),
('G9X45JQL1Y', 31, '2020-06-07 17:00:00', '2019-09-09 17:00:00', '2019-10-03 17:00:00'),
('H0S17MMN3T', 46, '2020-06-20 17:00:00', '2019-09-28 17:00:00', '2019-10-03 17:00:00'),
('H0T37MTI2R', 16, '2020-06-25 17:00:00', '2019-09-27 17:00:00', '2019-10-28 17:00:00'),
('H3P69LFG0P', 12, '2020-06-01 17:00:00', '2019-09-15 17:00:00', '2019-10-08 17:00:00'),
('H5J20ZWV3W', 12, '2020-06-09 17:00:00', '2019-09-19 17:00:00', '2019-10-27 17:00:00'),
('H8E31COC6N', 27, '2020-06-23 17:00:00', '2019-09-25 17:00:00', '2019-10-08 17:00:00'),
('I4S56CHJ7I', 33, '2020-05-30 17:00:00', '2019-09-26 17:00:00', '2019-10-14 17:00:00'),
('I8F28WOP3D', 12, '2020-06-28 17:00:00', '2019-09-02 17:00:00', '2019-10-19 17:00:00'),
('I8G59BAZ4D', 12, '2020-06-17 17:00:00', '2019-09-04 17:00:00', '2019-10-05 17:00:00'),
('I8H21GOF8X', 27, '2020-06-05 17:00:00', '2019-09-29 17:00:00', '2019-10-16 17:00:00'),
('J1M15LXS7D', 31, '2020-06-06 17:00:00', '2019-09-07 17:00:00', '2019-10-06 17:00:00'),
('J2V35CWL7I', 31, '2020-06-28 17:00:00', '2019-09-06 17:00:00', '2019-10-12 17:00:00'),
('J8Q06IRW6O', 44, '2020-06-28 17:00:00', '2019-09-07 17:00:00', '2019-10-14 17:00:00'),
('J8X15DFK3N', 32, '2020-06-17 17:00:00', '2019-09-03 17:00:00', '2019-10-17 17:00:00'),
('K3V38OWB0Z', 36, '2020-06-09 17:00:00', '2019-09-15 17:00:00', '2019-10-06 17:00:00'),
('K7B30QXG1Z', 13, '2020-06-07 17:00:00', '2019-09-19 17:00:00', '2019-10-13 17:00:00'),
('K9V53DAQ7C', 44, '2020-06-19 17:00:00', '2019-09-12 17:00:00', '2019-10-02 17:00:00'),
('L3W78ZNM4M', 50, '2020-06-04 17:00:00', '2019-09-15 17:00:00', '2019-09-30 17:00:00'),
('L7G38QFJ2R', 46, '2020-06-27 17:00:00', '2019-09-10 17:00:00', '2019-10-15 17:00:00'),
('M0A87LJS0O', 33, '2020-05-30 17:00:00', '2019-09-04 17:00:00', '2019-10-11 17:00:00'),
('M0Z40PQZ4P', 12, '2020-06-08 17:00:00', '2019-09-04 17:00:00', '2019-10-15 17:00:00'),
('M7D51SIJ6G', 49, '2020-06-18 17:00:00', '2019-09-18 17:00:00', '2019-10-07 17:00:00'),
('M7U79TJX6X', 28, '2020-06-15 17:00:00', '2019-09-14 17:00:00', '2019-10-21 17:00:00'),
('M8E71WLN3C', 50, '2020-06-28 17:00:00', '2019-08-31 17:00:00', '2019-10-28 17:00:00'),
('N0Q99HIY2Y', 41, '2020-06-25 17:00:00', '2019-09-14 17:00:00', '2019-10-29 17:00:00'),
('N4C44YXO0A', 34, '2020-05-31 17:00:00', '2019-09-02 17:00:00', '2019-10-19 17:00:00'),
('N7F06CGE7I', 17, '2020-06-03 17:00:00', '2019-09-18 17:00:00', '2019-10-08 17:00:00'),
('N7N97ROR0W', 11, '2020-06-11 17:00:00', '2019-09-29 17:00:00', '2019-10-07 17:00:00'),
('O0G90GYF4V', 24, '2020-06-20 17:00:00', '2019-09-25 17:00:00', '2019-10-19 17:00:00'),
('O0W45BWP4K', 10, '2020-06-11 17:00:00', '2019-09-08 17:00:00', '2019-10-18 17:00:00'),
('O4T47EUK9X', 18, '2020-06-16 17:00:00', '2019-09-25 17:00:00', '2019-10-17 17:00:00'),
('O6N53OXP8J', 45, '2020-06-17 17:00:00', '2019-09-04 17:00:00', '2019-10-21 17:00:00'),
('O6R78SDC6U', 40, '2020-06-23 17:00:00', '2019-09-25 17:00:00', '2019-10-21 17:00:00'),
('O9N98GKC5F', 48, '2020-06-23 17:00:00', '2019-09-27 17:00:00', '2019-10-02 17:00:00'),
('P0M16BTD1W', 49, '2020-05-31 17:00:00', '2019-09-12 17:00:00', '2019-10-11 17:00:00'),
('P2V20LZP2G', 48, '2020-05-31 17:00:00', '2019-09-06 17:00:00', '2019-10-21 17:00:00'),
('Q1T75BUT5W', 15, '2020-06-24 17:00:00', '2019-09-26 17:00:00', '2019-10-21 17:00:00'),
('Q4T12MZH2C', 11, '2020-06-08 17:00:00', '2019-09-10 17:00:00', '2019-10-12 17:00:00'),
('Q9C34XVR5I', 43, '2020-06-17 17:00:00', '2019-09-05 17:00:00', '2019-10-15 17:00:00'),
('Q9D11WWX1V', 41, '2020-06-06 17:00:00', '2019-09-05 17:00:00', '2019-10-03 17:00:00'),
('R0M30GMC4H', 10, '2020-06-02 17:00:00', '2019-09-04 17:00:00', '2019-10-18 17:00:00'),
('R2W10LBF5A', 35, '2020-06-03 17:00:00', '2019-09-01 17:00:00', '2019-10-27 17:00:00'),
('R4H91AJR8L', 28, '2020-06-05 17:00:00', '2019-08-31 17:00:00', '2019-10-25 17:00:00'),
('R4T80QYS8Y', 14, '2020-05-30 17:00:00', '2019-09-14 17:00:00', '2019-10-06 17:00:00'),
('R5F91ZWA9H', 15, '2020-06-11 17:00:00', '2019-09-08 17:00:00', '2019-10-03 17:00:00'),
('R5R91HJS6P', 48, '2020-06-16 17:00:00', '2019-09-05 17:00:00', '2019-10-17 17:00:00'),
('S0B42DJM7X', 30, '2020-06-29 17:00:00', '2019-09-28 17:00:00', '2019-10-06 17:00:00'),
('S1Y55TVP3Y', 45, '2020-06-25 17:00:00', '2019-08-31 17:00:00', '2019-10-17 17:00:00'),
('S4K91JBQ0H', 45, '2020-06-29 17:00:00', '2019-09-17 17:00:00', '2019-10-23 17:00:00'),
('S6T80VKZ4D', 11, '2020-06-21 17:00:00', '2019-09-23 17:00:00', '2019-10-21 17:00:00'),
('S9K56TNS6K', 25, '2020-06-11 17:00:00', '2019-09-08 17:00:00', '2019-10-14 17:00:00'),
('T2D47ZRZ6P', 16, '2020-06-23 17:00:00', '2019-09-02 17:00:00', '2019-10-20 17:00:00'),
('T3G41MFL5R', 45, '2020-06-22 17:00:00', '2019-09-02 17:00:00', '2019-10-18 17:00:00'),
('U1D50HMX4J', 37, '2020-06-25 17:00:00', '2019-09-29 17:00:00', '2019-10-26 17:00:00'),
('U2H97OAO2L', 35, '2020-06-13 17:00:00', '2019-09-25 17:00:00', '2019-10-09 17:00:00'),
('U6E81ZFI7G', 32, '2020-06-15 17:00:00', '2019-09-25 17:00:00', '2019-10-15 17:00:00'),
('V2X48CXV6V', 18, '2020-06-06 17:00:00', '2019-09-18 17:00:00', '2019-10-15 17:00:00'),
('V6F80ZTI7Q', 50, '2020-05-30 17:00:00', '2019-09-20 17:00:00', '2019-10-04 17:00:00'),
('V9T77SLD4X', 11, '2020-06-04 17:00:00', '2019-09-09 17:00:00', '2019-10-09 17:00:00'),
('W1K22VMN5B', 23, '2020-06-27 17:00:00', '2019-09-10 17:00:00', '2019-10-22 17:00:00'),
('W2E92JJB9C', 34, '2020-06-13 17:00:00', '2019-09-21 17:00:00', '2019-10-21 17:00:00'),
('W8H50WXQ6S', 12, '2020-06-28 17:00:00', '2019-09-28 17:00:00', '2019-10-22 17:00:00'),
('W9G51AJT9K', 18, '2020-06-07 17:00:00', '2019-09-29 17:00:00', '2019-10-26 17:00:00'),
('X0G23GUO5L', 31, '2020-06-23 17:00:00', '2019-09-28 17:00:00', '2019-10-09 17:00:00'),
('X1W59AJP8R', 11, '2020-06-18 17:00:00', '2019-09-23 17:00:00', '2019-10-09 17:00:00'),
('X3K12FKN4V', 46, '2020-06-15 17:00:00', '2019-09-08 17:00:00', '2019-10-28 17:00:00'),
('X5K06OFK2H', 30, '2020-06-04 17:00:00', '2019-09-16 17:00:00', '2019-10-12 17:00:00'),
('X6O98WBV4R', 19, '2020-06-17 17:00:00', '2019-09-28 17:00:00', '2019-10-18 17:00:00'),
('X7R63HKT2A', 50, '2020-06-20 17:00:00', '2019-09-26 17:00:00', '2019-10-13 17:00:00'),
('X9F47AWQ0A', 33, '2020-06-20 17:00:00', '2019-09-10 17:00:00', '2019-10-04 17:00:00'),
('Y5H71YBQ9V', 19, '2020-06-02 17:00:00', '2019-09-14 17:00:00', '2019-10-17 17:00:00'),
('Y8J20HJB5J', 10, '2020-06-01 17:00:00', '2019-09-11 17:00:00', '2019-10-09 17:00:00'),
('Y8Z82POK3N', 40, '2020-06-27 17:00:00', '2019-09-14 17:00:00', '2019-10-05 17:00:00'),
('Y9J82GSZ0B', 35, '2020-06-05 17:00:00', '2019-09-04 17:00:00', '2019-10-29 17:00:00'),
('Z5B53NLY4Z', 15, '2020-06-17 17:00:00', '2019-09-11 17:00:00', '2019-10-27 17:00:00'),
('Z8N53NLD9M', 27, '2020-06-21 17:00:00', '2019-09-20 17:00:00', '2019-10-29 17:00:00'),
('Z8Z94OPL6G', 32, '2020-05-30 17:00:00', '2019-09-03 17:00:00', '2019-10-10 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `guestinfo`
--

CREATE TABLE `guestinfo` (
  `GuestID` int(11) NOT NULL,
  `Email` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `FirstName` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `guestinfo`
--

INSERT INTO `guestinfo` (`GuestID`, `Email`, `FirstName`, `LastName`, `PhoneNumber`) VALUES
(1, 'manman@gmail.com', 'Jaemin', ' NctDream', '095-875-5124'),
(2, 'mintmint@gmail.com', 'Jeno', ' NctDream', '098-547-5898'),
(3, 'QQ@gmail.com', 'Mark', ' NctDream', '099-123-4567'),
(4, 'fangfang@gmail.com', 'Renjun', ' NctDream', '081-587-2145'),
(5, 'osake@gmail.com', 'Baekhyun', ' Exo', '064-856-9856'),
(6, 'yahama@gmail.com', 'Minho', 'SHINee', '032-451-3258'),
(7, 'sukom@gmail.com', 'Key', ' SHINee', '098-874-6581'),
(8, 'nonono@gmail.com', 'Kangta ', 'SM', '041-541-7777'),
(9, 'vuttithatkrongyot@gmail.com', 'Wuttithat', 'Krongyottttt', '080-413-1377'),
(14, 'cpe223.digital@gmail.com', 'Digital', 'Lanoratory', '098-855-6565'),
(15, 'mintmafiacake@gmail.com', 'Settapong', 'Subkong', '085-195-7830'),
(16, 'vuttithatkrongyot@gmail.com', 'Wuttithat', 'Krongyottttt', '080-413-1377'),
(17, 'vuttithatkrongyot@gmail.com', 'Wuttithat', 'Krongyottttt', '080-413-1377'),
(18, 'mintmafiacake@gmail.com', 'Settapong', 'Subkong', '085-195-7830');

-- --------------------------------------------------------

--
-- Table structure for table `memberinfo`
--

CREATE TABLE `memberinfo` (
  `UserID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `FirstName` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `SignUpDateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Nationality` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CitizenID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `memberinfo`
--

INSERT INTO `memberinfo` (`UserID`, `FirstName`, `LastName`, `Username`, `Password`, `Email`, `PhoneNumber`, `SignUpDateTime`, `Nationality`, `CitizenID`, `DOB`, `Point`) VALUES
('M0000000001', 'Carson', 'Saunders', 'carsonsaunders', 'VZH34BYG6HS', 'convallis@placerat.co.uk', '009-808-8377', '2015-12-09 00:57:20', 'Mars', '1680040624899', '1994-09-18 17:00:00', 37),
('M0000000002', 'Jayme', 'Bray', 'jaymebray', 'MES87YFC6CT', 'sit.amet@Quisquefringilla.ca', '065-164-4188', '2018-03-20 18:16:28', 'American', '1616012880499', '2000-02-02 17:00:00', 91),
('M0000000003', 'Graiden', 'Reese', 'graidenreese', 'HPZ26WHB9QD', 'Proin.dolor.Nulla@milaciniamattis.co.uk', '008-984-5788', '2016-05-04 18:55:48', 'American', '1675092510999', '1979-03-09 17:00:00', 14),
('M0000000004', 'Cheryl', 'Marquez', 'cherylmarquez', 'WJG60RKI8HM', 'Sed@facilisisfacilisis.ca', '092-505-4330', '2018-10-11 23:57:14', 'Chinese', '1617072539299', '1971-09-21 17:00:00', 13),
('M0000000005', 'Idona', 'Tucker', 'idonatucker', 'ZVO48FTL7LU', 'Cras.interdum@erosnec.com', '076-937-2889', '2017-06-19 02:44:08', 'Mars', '1633092277299', '1984-03-10 17:00:00', 69),
('M0000000006', 'Ori', 'Burke', 'oriburke', 'FPE41FTB3AT', 'malesuada.fames@pellentesque.ca', '090-663-8894', '2015-08-15 04:24:16', 'German', '1673122533399', '1998-10-23 17:00:00', 93),
('M0000000007', 'Lareina', 'Montoya', 'lareinamontoya', 'MFN45LFJ4BJ', 'sem@enimnec.ca', '048-930-6303', '2018-07-14 20:27:54', 'Thai', '1682072964599', '1975-01-19 17:00:00', 6),
('M0000000008', 'Tatyana', 'Sherman', 'tatyanasherman', 'OUR63GVK7PB', 'vel@semNullainterdum.com', '047-844-4445', '2018-02-03 02:38:50', 'Chinese', '1651111979199', '1976-11-15 17:00:00', 76),
('M0000000009', 'Sigourney', 'Terry', 'sigourneyterry', 'NBZ43AMZ6RO', 'lacus@mieleifend.ca', '036-881-4382', '2017-03-24 02:40:58', 'Thai', '1697082218399', '1977-10-07 17:00:00', 15),
('M0000000010', 'Tyler', 'Cannon', 'tylercannon', 'RZQ11KHN5FQ', 'tellus.Suspendisse@nonluctussit.com', '086-746-3756', '2017-01-02 02:39:04', 'Japanese', '1617051423299', '1998-01-15 17:00:00', 74),
('M0000000011', 'Dexter', 'Gross', 'dextergross', 'XFD68BWQ2KY', 'et.ultrices.posuere@Maecenasmi.co.uk', '013-138-0268', '2015-05-04 23:36:31', 'Japanese', '1619032942999', '1997-05-02 17:00:00', 99),
('M0000000012', 'Boris', 'Ramos', 'borisramos', 'PVC24IQA6XA', 'est.arcu.ac@dui.co.uk', '066-463-1453', '2017-09-19 04:45:55', 'Chinese', '1669040544399', '1998-09-27 17:00:00', 97),
('M0000000013', 'Clio', 'Aguirre', 'clioaguirre', 'PXT28CHB4DO', 'lobortis@cubiliaCurae.co.uk', '077-069-7405', '2018-09-19 04:46:17', 'Japanese', '1699071952199', '1980-04-06 17:00:00', 24),
('M0000000014', 'Abraham', 'Mcfadden', 'abrahammcfadden', 'XQB70XOG9WG', 'Nulla.eu@tempusmauris.ca', '098-680-9316', '2017-10-09 23:26:58', 'Japanese', '1632060877799', '1995-08-02 17:00:00', 31),
('M0000000015', 'Britanney', 'Pittman', 'britanneypittman', 'MSI06AWC6FK', 'sagittis.Nullam@consectetuereuismodest.co.uk', '007-545-5911', '2017-10-30 20:48:33', 'English', '1666092470299', '1973-06-19 17:00:00', 41),
('M0000000016', 'Blaze', 'Hogan', 'blazehogan', 'JDZ33DUW2QB', 'interdum.ligula@tinciduntnequevitae.edu', '067-297-7983', '2016-08-06 04:00:02', 'American', '1672082868799', '1976-12-02 17:00:00', 35),
('M0000000017', 'Duncan', 'Parrish', 'duncanparrish', 'JSE33SSK2JD', 'pellentesque@elitelitfermentum.ca', '033-573-7556', '2018-08-29 20:28:29', 'English', '1629112386999', '1988-09-25 17:00:00', 77),
('M0000000018', 'Judah', 'Lancaster', 'judahlancaster', 'PRA27PSR2KH', 'per.inceptos.hymenaeos@sed.co.uk', '087-389-9653', '2017-09-02 23:05:37', 'German', '1600043022599', '1991-12-11 17:00:00', 39),
('M0000000019', 'Brian', 'Cantu', 'briancantu', 'MSA38HMA5FU', 'et@sitametmassa.com', '084-022-8884', '2016-02-08 18:55:27', 'Thai', '1618080639699', '1972-07-02 17:00:00', 8),
('M0000000020', 'Caleb', 'Cline', 'calebcline', 'MRZ79GJQ7NO', 'posuere.cubilia.Curae@metuseuerat.net', '058-531-9257', '2015-04-04 19:50:13', 'Chinese', '1615042370699', '1993-03-03 17:00:00', 27),
('M0000000021', 'Ulla', 'Parsons', 'ullaparsons', 'BVD51THD7LB', 'interdum.Sed@Integerinmagna.ca', '050-799-4501', '2017-09-17 22:20:05', 'Thai', '1655061195799', '1987-09-14 17:00:00', 55),
('M0000000022', 'Craig', 'Rivas', 'craigrivas', 'FUZ05XEQ5VR', 'est.mollis.non@dictumeleifend.edu', '016-209-5535', '2018-10-12 01:54:47', 'English', '1676060738099', '1989-07-10 17:00:00', 10),
('M0000000023', 'Nigel', 'Sellers', 'nigelsellers', 'DPP65VQK2OE', 'pharetra.sed.hendrerit@nequetellusimperdiet.org', '009-386-4224', '2017-09-12 23:01:38', 'German', '1673082508799', '1989-03-29 17:00:00', 7),
('M0000000024', 'Jerry', 'Hammond', 'jerryhammond', 'UCM05LYV7WS', 'sed.est@venenatisvel.net', '002-378-1339', '2016-04-14 20:15:03', 'Thai', '1648021368199', '1972-01-04 17:00:00', 99),
('M0000000025', 'Hilel', 'Langley', 'hilellangley', 'JDJ82FEG1TV', 'eu.ultrices@consectetuer.ca', '056-690-0564', '2015-07-12 00:50:02', 'American', '1629030114999', '1985-03-17 17:00:00', 40),
('M0000000026', 'Adrienne', 'Rich', 'adriennerich', 'PQC05DXO6TA', 'nulla@nullaInteger.co.uk', '012-950-6773', '2016-06-13 03:53:20', 'Thai', '1634070328399', '1989-05-21 17:00:00', 93),
('M0000000027', 'Dante', 'Dale', 'dantedale', 'RNQ02JGB0QI', 'dictum@Nullam.co.uk', '098-153-2684', '2016-06-16 05:22:06', 'American', '1695010306499', '1989-10-27 17:00:00', 17),
('M0000000028', 'Haley', 'Randolph', 'haleyrandolph', 'GUS96RBL8ET', 'pellentesque@pedemalesuadavel.ca', '084-857-6974', '2018-08-14 22:47:42', 'English', '1683110150499', '1973-06-13 17:00:00', 44),
('M0000000029', 'Philip', 'Shields', 'philipshields', 'NCH99BKB9VD', 'arcu.ac@dolorsitamet.net', '069-794-8590', '2015-12-02 22:09:25', 'Chinese', '1647091481499', '1987-08-18 17:00:00', 33),
('M0000000030', 'Fay', 'Hickman', 'fayhickman', 'NMV63MHN2QW', 'ullamcorper.magna.Sed@semmollis.co.uk', '087-704-5953', '2016-05-25 22:08:00', 'American', '1671071744399', '1977-02-16 17:00:00', 78),
('M0000000031', 'Naomi', 'Romero', 'naomiromero', 'IGQ21ZCH4UK', 'Maecenas@ante.co.uk', '086-256-7221', '2018-11-07 23:38:30', 'English', '1694012951999', '1979-09-19 17:00:00', 86),
('M0000000032', 'Rebecca', 'Blackwell', 'rebeccablackwell', 'SOL60JMA7JB', 'adipiscing@augue.com', '098-813-2639', '2017-08-28 18:32:14', 'Mars', '1663012879099', '1994-06-17 17:00:00', 32),
('M0000000033', 'Sarah', 'Bishop', 'sarahbishop', 'LSR97BNT2EL', 'Etiam.imperdiet@arcuiaculis.org', '079-543-3889', '2018-02-18 20:41:38', 'English', '1618111096399', '1993-09-13 17:00:00', 30),
('M0000000034', 'Derek', 'Becker', 'derekbecker', 'DNZ74TCO5IN', 'massa.lobortis.ultrices@tincidunt.net', '052-081-2211', '2015-02-11 03:10:58', 'Japanese', '1608011824899', '1972-08-11 17:00:00', 43),
('M0000000035', 'Peter', 'Matthews', 'petermatthews', 'AJA23XQC4KP', 'Mauris.molestie.pharetra@sed.edu', '044-909-1029', '2015-11-01 03:23:20', 'German', '1672051415699', '1987-10-01 17:00:00', 25),
('M0000000036', 'Henry', 'Bowman', 'henrybowman', 'KUI99LFP3XD', 'Fusce.fermentum@sem.net', '058-646-7151', '2017-06-24 04:56:22', 'English', '1693041763199', '1977-11-18 17:00:00', 39),
('M0000000037', 'Rigel', 'Burnett', 'rigelburnett', 'KMX39VRG9MC', 'enim.sit.amet@loremutaliquam.edu', '080-706-0573', '2018-06-12 20:11:50', 'Mars', '1671011605799', '2000-02-19 17:00:00', 65),
('M0000000038', 'Gil', 'Mckee', 'gilmckee', 'UCP61GWM2PQ', 'posuere@Donec.org', '032-517-0472', '2016-04-13 18:34:01', 'American', '1661010242999', '1989-10-14 17:00:00', 44),
('M0000000039', 'Ria', 'Peterson', 'riapeterson', 'HLY64ZEN8XP', 'nulla@cursusInteger.org', '098-295-9512', '2016-08-28 20:14:33', 'Japanese', '1616032093099', '1994-01-02 17:00:00', 92),
('M0000000040', 'Malcolm', 'Wyatt', 'malcolmwyatt', 'CFA74MGG0EY', 'dolor.egestas.rhoncus@acfeugiat.com', '017-506-6131', '2019-05-23 13:45:45', 'American', '1680121201899', '2019-05-07 17:00:00', 34),
('M0000000041', 'Elizabeth', 'Wilkerson', 'elizabethwilkerson', 'PNE25XKT6XF', 'sed@Proinvelnisl.net', '012-849-4272', '2016-02-12 21:52:28', 'Japanese', '1656021868099', '1993-06-20 17:00:00', 49),
('M0000000042', 'Latifah', 'Velazquez', 'latifahvelazquez', 'DCF09SJN3BN', 'urna@ornare.ca', '071-153-2072', '2016-05-09 00:09:53', 'English', '1642040885099', '1978-11-18 17:00:00', 70),
('M0000000043', 'Bianca', 'Sanchez', 'biancasanchez', 'HAG92EZA5ZC', 'in.molestie.tortor@intempus.ca', '064-220-6404', '2016-08-05 20:51:49', 'Thai', '1647050482499', '1985-12-20 17:00:00', 95),
('M0000000044', 'Ian', 'George', 'iangeorge', 'USV19IHV9KI', 'Morbi.sit.amet@semmagna.edu', '003-222-4492', '2016-08-05 20:51:00', 'German', '1687070772799', '1983-04-28 17:00:00', 32),
('M0000000045', 'Kylynn', 'Keith', 'kylynnkeith', 'RHR67AGK3VY', 'Ut.tincidunt.orci@augueac.edu', '029-310-1257', '2016-11-28 22:30:03', 'Thai', '1625122127999', '1995-05-28 17:00:00', 23),
('M0000000046', 'Henry', 'Russell', 'henryrussell', 'BJY29UZH1FT', 'et.nunc.Quisque@amagna.net', '025-788-8336', '2016-05-26 04:09:05', 'German', '1696080473699', '1980-03-29 17:00:00', 4),
('M0000000047', 'Griffith', 'Soto', 'griffithsoto', 'YOU16QFL5VM', 'Integer.in.magna@posuerevulputate.net', '069-228-8147', '2017-02-07 18:30:21', 'English', '1667092777099', '2000-11-14 17:00:00', 51),
('M0000000048', 'Oliver', 'Goff', 'olivergoff', 'RFS60AFO8WS', 'vel.vulputate.eu@montesnascetur.com', '040-114-8925', '2018-09-25 18:30:39', 'American', '1612051824099', '1983-06-06 17:00:00', 68),
('M0000000049', 'Sierra', 'Henson', 'sierrahenson', 'PAI91PXS2YY', 'erat@maurisrhoncus.ca', '073-208-5356', '2016-05-15 04:40:32', 'German', '1653050863599', '2000-11-16 17:00:00', 28),
('M0000000050', 'Prakasit', 'Nuchkamnerd', 'mannajae', '11111', 'mannajae@kmutt.com', '099-999-9999', '2019-05-30 02:23:43', 'Pluto', '1676031575899', '1998-09-29 17:00:00', 2321),
('M0000000051', 'Settapong', 'Subkong', 'mintimer', '22222', 'mintmint@kmutt.com', '088-888-8888', '2019-05-28 00:16:31', 'Asgard', '1604092698899', '1998-11-14 17:00:00', 7),
('M0000000052', 'Pureafa', 'Rattanatakul', 'justfang', '33333', 'fang@mailmail.com', '077-777-7777', '2019-03-26 04:09:05', 'Wakanda', '1677072064299', '1977-11-18 17:00:00', 95),
('M0000000053', 'Wuttithat', 'Krongkot', 'aickuy', '44444', 'kiew@kk.com', '066-666-6666', '2019-04-24 04:56:22', 'Doisu', '1611052022999', '1977-02-16 17:00:00', 65),
('M0000000054', 'Korbboon', 'YEEEE', 'yee', '55555', 'yeenoobboi@web.com', '055-555-5555', '2019-01-15 04:40:32', 'Finland', '1633081116199', '1978-11-18 17:00:00', 54);

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfo`
--

CREATE TABLE `paymentinfo` (
  `PaymentID` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `BookingNo` int(10) NOT NULL,
  `ConfirmationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `PaymentMethod` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Paid` float NOT NULL,
  `StaffID` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `paymentinfo`
--

INSERT INTO `paymentinfo` (`PaymentID`, `BookingNo`, `ConfirmationDate`, `PaymentMethod`, `Paid`, `StaffID`) VALUES
('p000001', 1000000001, '2019-01-10 18:55:48', 'credit card', 2500, 'S0000000004'),
('p000002', 1000000002, '2019-01-13 00:57:20', 'credit card', 4000, 'S0000000009'),
('p000003', 1000000003, '2019-01-14 04:24:16', 'cash', 2500, 'S0000000012'),
('p000004', 1000000004, '2019-01-18 04:24:16', 'credit card', 5500, NULL),
('p000005', 1000000005, '2019-01-22 20:27:54', 'credit card', 7500, 'S0000000019'),
('p000006', 1000000006, '2019-01-26 02:39:04', 'credit card', 7500, 'S0000000012'),
('p000007', 1000000007, '2019-01-24 04:45:55', 'credit card', 4000, NULL),
('p000008', 1000000007, '2019-01-24 23:26:58', 'credit card', 3500, NULL),
('p000009', 1000000008, '2019-02-01 23:26:58', 'cash', 5500, 'S0000000042'),
('p000010', 1000000009, '2019-02-05 00:50:02', 'cash', 5500, 'S0000000043'),
('p000011', 1000000010, '2019-02-14 22:20:05', 'cash', 2350, 'S0000000013'),
('p000012', 1000000011, '2019-02-13 20:15:03', 'credit card', 5000, NULL),
('p000013', 1000000011, '2019-02-14 03:53:20', 'credit card', 5500, NULL),
('p000014', 1000000012, '2019-02-19 23:38:30', 'credit card', 10500, 'S0000000008'),
('p000015', 1000000013, '2019-02-28 18:32:14', 'credit card', 2500, NULL),
('p000016', 1000000014, '2019-03-04 20:41:38', 'credit card', 4000, 'S0000000019'),
('p000017', 1000000015, '2019-03-10 03:10:58', 'credit card', 4500, NULL),
('p000018', 1000000016, '2019-04-01 20:11:50', 'credit card', 5250, NULL),
('p000019', 1000000017, '2019-04-07 20:14:33', 'cash', 3800, 'S0000000019'),
('p000020', 1000000018, '2019-04-06 21:52:28', 'credit card', 750, NULL),
('p000021', 1000000019, '2019-05-14 22:30:03', 'credit card', 2310, 'S0000000012'),
('p000022', 1000000020, '2019-05-26 17:01:55', 'cash', 3000, 'S0000000019');

-- --------------------------------------------------------

--
-- Table structure for table `reviewinfo`
--

CREATE TABLE `reviewinfo` (
  `ReviewID` int(6) NOT NULL,
  `BookingNo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Comment` text COLLATE utf8_unicode_ci,
  `RatingScore` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `reviewinfo`
--

INSERT INTO `reviewinfo` (`ReviewID`, `BookingNo`, `Comment`, `RatingScore`) VALUES
(1, '1000000001', 'Good service, Love in swimming pool', 4),
(2, '1000000002', 'The hotel is beautiful,comfortable,clean,excellent,also very friendly staff?', 4),
(3, '1000000003', 'The staffs were friendly and nice. The swimming pool is nice too!', 5),
(4, '1000000004', 'A good and well located hotel. Great breakfast. The extra bed is expensive in relation to the rate I paid in the low season.', 5),
(5, '1000000005', 'Fine room and good breakfast good location nearby the old town', 3),
(6, '1000000006', ' Front desk staff very helpful. Great choice.', 5),
(7, '1000000007', 'This hotel offers a comfortable stay in friendly and modern surroundings.?', 4),
(8, '1000000008', 'Fine hotel with a good rooms and a friendly staff. Free wifi, car parking. Very clean and all you need even a small balcony if you like to sit outside if you don\'t worry about the airco. This hotel is a great for a short stay.', 3),
(9, '1000000009', 'This is a rather new small hotel that is quite good for the price. Very friendly staff. To be sure, it is very basic but comes with TV & fridge, and body wash & shampoo in the bathroom. Air-con is strong enough.', 4),
(10, '1000000010', 'The staff are efficient and the room is nest and clean with everything you could require.?', 3),
(11, '1000000011', 'Good clean room, spacious but can be quite noisy if you are on the lower floor. Food was pretty good and service is really friendly. I was sick the first day and the team checked in with me, now that\'s hospitality. By the way they give free mobile wifi.', 4),
(12, '1000000012', 'Highly Recommended - great location, friendly and helpful staff, entire environment clean and fresh, nice room facilities, very comfortable bed, WiFi fast and easy to use, very pleasant all around. Will definitely be back again!', 4),
(13, '1000000013', 'Great location with a pleasant and clean room. The front desk has been incredibly nice, veey helpful and generous. Hotel was very clean as well as the room. The breakfast was nice.?', 4),
(14, '1000000014', 'Hotel location is good,clean. There is a free shuttle bus to center, the service is very good, the hotel is clean and tidy. High cost performance Highly recommended! Everything is really good.See you again', 5),
(15, '1000000015', 'Staff wete very friendly and I would particularly like to thank Ramesh the front desk manager for going out of his way to really our stay a memorable one. Its staff like Ramesh that makes this hotel different to others.', 4),
(16, '1000000016', 'This hotel was a delight to stay at from checkin to departure. We found the bed a touch firm, but a soft mattress topper was found quickly. Super clean, funky and fun. Great location. Great lift facilities (no waiting), very attentive staff, fabulous rooftop pool. Would have liked to have tried the in-house restaurant but we were too busy exploring the many local options. Our experience was certainly a 5.', 5),
(17, '1000000017', 'The room was spacious and comfortable. The pool was every bit as amazing as many other travelers have described. We particularly enjoyed watching the night time show from the edge of the pool. The plethora of high-end retail shops and options to spend your hard earned monies are countless as well.', 5),
(19, '1000000019', 'Recently stayed at this hotel and had a great time.The room was spacious, we weren?t sure about the bathroom arrangement at first but it worked fine. If the sliding door went further across the room I think that would be better for privacy.', 3),
(20, '1000000020', 'I will be honest to start with. Most likely a one off experience for me. Was too big and felt a lot like a Vegas or Macau casino resort. Lots of people (staff included), casino, high end shops, indoor waterfall and canal (fancy a boat ride?), not hard to lose your way. But heck its worth the experience. You pay the high price for the amazing infinity pool and view (forget doing laps - way too crowded!).', 5),
(21, '1000000001', 'VeryGood', 4),
(22, '1000000015', 'delicious', 3),
(24, '1000000017', 'excellent!', 4),
(49, '1000000015', 'sugoi!!', 5),
(50, '1000000010', 'pump', 5),
(51, '1000000010', 'wow', 3),
(52, '1000000001', 'button\r\n', 4),
(53, '1000000015', 'God', 5),
(54, '1000000001', 'eiei', 5),
(55, '1000000018', 'à¸”à¸£à¸à¸¡à¸²à¸', 5);

-- --------------------------------------------------------

--
-- Table structure for table `roominfo`
--

CREATE TABLE `roominfo` (
  `RoomID` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `BranchNo` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `RoomType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `CanBeCancel` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `RoomPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roominfo`
--

INSERT INTO `roominfo` (`RoomID`, `BranchNo`, `RoomType`, `CanBeCancel`, `RoomPrice`) VALUES
('BKK001DLX001', 'BKK001', 'Deluxe', 'Yes', 150000),
('BKK001DLX002', 'BKK001', 'Deluxe', 'Yes', 150000),
('BKK001DLX204', 'BKK001', 'Deluxe', 'No', 2000),
('BKK001DLX401', 'BKK001', 'Deluxe', 'Yes', 3500),
('BKK001DLX402', 'BKK001', 'Deluxe', 'Yes', 3500),
('BKK001DLX403', 'BKK001', 'Deluxe', 'Yes', 3500),
('BKK001DLX404', 'BKK001', 'Deluxe', 'Yes', 3500),
('BKK001DLX405', 'BKK001', 'Deluxe', 'No', 3350),
('BKK001DLX406', 'BKK001', 'Deluxe', 'No', 3350),
('BKK001DLX407', 'BKK001', 'Deluxe', 'No', 3350),
('BKK001DLX408', 'BKK001', 'Deluxe', 'No', 3350),
('BKK001DLX409', 'BKK001', 'Deluxe', 'No', 3350),
('BKK001DLX410', 'BKK001', 'Deluxe', 'No', 3350),
('BKK001DLX685', 'BKK001', 'Deluxe', 'Yes', 2000),
('BKK001DLX888', 'BKK001', 'Deluxe', 'Yes', 120000),
('BKK001DLX994', 'BKK001', 'Deluxe', 'Yes', 150000),
('BKK001DLX995', 'BKK001', 'Deluxe', 'Yes', 150000),
('BKK001DLX998', 'BKK001', 'Deluxe', 'Yes', 150000),
('BKK001DLX999', 'BKK001', 'Deluxe', 'Yes', 2000),
('BKK001SPR205', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR206', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR207', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR208', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR209', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR210', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR211', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR212', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR213', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR214', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR215', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR216', 'BKK001', 'Superior', 'No', 2350),
('BKK001SPR222', 'BKK001', 'Superior', 'Yes', 222000),
('BKK001SPR309', 'BKK001', 'Superior', 'Yes', 2500),
('BKK001SPR310', 'BKK001', 'Superior', 'Yes', 2500),
('BKK001SPR311', 'BKK001', 'Superior', 'Yes', 2500),
('BKK001SPR312', 'BKK001', 'Superior', 'Yes', 2500),
('BKK001SPR313', 'BKK001', 'Superior', 'Yes', 2500),
('BKK001SPR314', 'BKK001', 'Superior', 'Yes', 2500),
('BKK001SPR315', 'BKK001', 'Superior', 'Yes', 2500),
('BKK001SPR316', 'BKK001', 'Superior', 'Yes', 2500),
('BKK001STD201', 'BKK001', 'Standard', 'No', 1350),
('BKK001STD202', 'BKK001', 'Standard', 'No', 1350),
('BKK001STD203', 'BKK001', 'Standard', 'No', 1350),
('BKK001STD204', 'BKK001', 'Standard', 'No', 1350),
('BKK001STD301', 'BKK001', 'Standard', 'Yes', 1500),
('BKK001STD302', 'BKK001', 'Standard', 'Yes', 1500),
('BKK001STD303', 'BKK001', 'Standard', 'Yes', 1500),
('BKK001STD304', 'BKK001', 'Standard', 'Yes', 1500),
('BKK001STD305', 'BKK001', 'Standard', 'Yes', 1500),
('BKK001STD306', 'BKK001', 'Standard', 'Yes', 1500),
('BKK001STD307', 'BKK001', 'Standard', 'Yes', 1500),
('BKK001STD308', 'BKK001', 'Standard', 'Yes', 1500),
('BKK001STD454', 'BKK001', 'Standard', 'Yes', 2000),
('BKK001SUT501', 'BKK001', 'Suite', 'No', 5500),
('BKK001SUT502', 'BKK001', 'Suite', 'No', 5500),
('BKK001SUT503', 'BKK001', 'Suite', 'No', 5500),
('BKK001SUT504', 'BKK001', 'Suite', 'No', 5500),
('BKK001SUT556', 'BKK001', 'Suite', 'No', 1666680000),
('BKK001SUT601', 'BKK001', 'Suite', 'No', 5500),
('BKK001SUT602', 'BKK001', 'Suite', 'No', 5500),
('BKK001SUT603', 'BKK001', 'Suite', 'No', 5500),
('BKK001SUT604', 'BKK001', 'Suite', 'No', 5500),
('BKK001SUT701', 'BKK001', 'Suite', 'No', 5500),
('BKK001SUT702', 'BKK001', 'Suite', 'No', 5500),
('BKK001SUT703', 'BKK001', 'Suite', 'No', 5500),
('BKK001SUT704', 'BKK001', 'Suite', 'No', 5500),
('BKK002DLX401', 'BKK002', 'Deluxe', 'Yes', 3500),
('BKK002DLX402', 'BKK002', 'Deluxe', 'Yes', 3500),
('BKK002DLX403', 'BKK002', 'Deluxe', 'Yes', 3500),
('BKK002DLX404', 'BKK002', 'Deluxe', 'Yes', 3500),
('BKK002DLX405', 'BKK002', 'Deluxe', 'No', 3350),
('BKK002DLX406', 'BKK002', 'Deluxe', 'No', 3350),
('BKK002DLX407', 'BKK002', 'Deluxe', 'No', 3350),
('BKK002DLX408', 'BKK002', 'Deluxe', 'No', 3350),
('BKK002DLX409', 'BKK002', 'Deluxe', 'No', 3350),
('BKK002DLX410', 'BKK002', 'Deluxe', 'No', 3350),
('BKK002SPR205', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR206', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR207', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR208', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR209', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR210', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR211', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR212', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR213', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR214', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR215', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR216', 'BKK002', 'Superior', 'No', 2350),
('BKK002SPR309', 'BKK002', 'Superior', 'Yes', 2500),
('BKK002SPR310', 'BKK002', 'Superior', 'Yes', 2500),
('BKK002SPR311', 'BKK002', 'Superior', 'Yes', 2500),
('BKK002SPR312', 'BKK002', 'Superior', 'Yes', 2500),
('BKK002SPR313', 'BKK002', 'Superior', 'Yes', 2500),
('BKK002SPR314', 'BKK002', 'Superior', 'Yes', 2500),
('BKK002SPR315', 'BKK002', 'Superior', 'Yes', 2500),
('BKK002SPR316', 'BKK002', 'Superior', 'Yes', 2500),
('BKK002STD201', 'BKK002', 'Standard', 'No', 1350),
('BKK002STD202', 'BKK002', 'Standard', 'No', 1350),
('BKK002STD203', 'BKK002', 'Standard', 'No', 1350),
('BKK002STD204', 'BKK002', 'Standard', 'No', 1350),
('BKK002STD301', 'BKK002', 'Standard', 'Yes', 1500),
('BKK002STD302', 'BKK002', 'Standard', 'Yes', 1500),
('BKK002STD303', 'BKK002', 'Standard', 'Yes', 1500),
('BKK002STD304', 'BKK002', 'Standard', 'Yes', 1500),
('BKK002STD305', 'BKK002', 'Standard', 'Yes', 1500),
('BKK002STD306', 'BKK002', 'Standard', 'Yes', 1500),
('BKK002STD307', 'BKK002', 'Standard', 'Yes', 1500),
('BKK002STD308', 'BKK002', 'Standard', 'Yes', 1500),
('BKK002SUT501', 'BKK002', 'Suite', 'No', 5500),
('BKK002SUT502', 'BKK002', 'Suite', 'No', 5500),
('BKK002SUT503', 'BKK002', 'Suite', 'No', 5500),
('BKK002SUT504', 'BKK002', 'Suite', 'No', 5500),
('BKK002SUT601', 'BKK002', 'Suite', 'No', 5500),
('BKK002SUT602', 'BKK002', 'Suite', 'No', 5500),
('BKK002SUT603', 'BKK002', 'Suite', 'No', 5500),
('BKK002SUT604', 'BKK002', 'Suite', 'No', 5500),
('BKK002SUT701', 'BKK002', 'Suite', 'No', 5500),
('BKK002SUT702', 'BKK002', 'Suite', 'No', 5500),
('BKK002SUT703', 'BKK002', 'Suite', 'No', 5500),
('BKK002SUT704', 'BKK002', 'Suite', 'No', 5500),
('BKK003DLX401', 'BKK003', 'Deluxe', 'Yes', 3500),
('BKK003DLX402', 'BKK003', 'Deluxe', 'Yes', 3500),
('BKK003DLX403', 'BKK003', 'Deluxe', 'Yes', 3500),
('BKK003DLX404', 'BKK003', 'Deluxe', 'Yes', 3500),
('BKK003DLX405', 'BKK003', 'Deluxe', 'No', 3350),
('BKK003DLX406', 'BKK003', 'Deluxe', 'No', 3350),
('BKK003DLX407', 'BKK003', 'Deluxe', 'No', 3350),
('BKK003DLX408', 'BKK003', 'Deluxe', 'No', 3350),
('BKK003DLX409', 'BKK003', 'Deluxe', 'No', 3350),
('BKK003DLX410', 'BKK003', 'Deluxe', 'No', 3350),
('BKK003SPR205', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR206', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR207', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR208', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR209', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR210', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR211', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR212', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR213', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR214', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR215', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR216', 'BKK003', 'Superior', 'No', 2350),
('BKK003SPR309', 'BKK003', 'Superior', 'Yes', 2500),
('BKK003SPR310', 'BKK003', 'Superior', 'Yes', 2500),
('BKK003SPR311', 'BKK003', 'Superior', 'Yes', 2500),
('BKK003SPR312', 'BKK003', 'Superior', 'Yes', 2500),
('BKK003SPR313', 'BKK003', 'Superior', 'Yes', 2500),
('BKK003SPR314', 'BKK003', 'Superior', 'Yes', 2500),
('BKK003SPR315', 'BKK003', 'Superior', 'Yes', 2500),
('BKK003SPR316', 'BKK003', 'Superior', 'Yes', 2500),
('BKK003STD201', 'BKK003', 'Standard', 'No', 1350),
('BKK003STD202', 'BKK003', 'Standard', 'No', 1350),
('BKK003STD203', 'BKK003', 'Standard', 'No', 1350),
('BKK003STD204', 'BKK003', 'Standard', 'No', 1350),
('BKK003STD301', 'BKK003', 'Standard', 'Yes', 1500),
('BKK003STD302', 'BKK003', 'Standard', 'Yes', 1500),
('BKK003STD303', 'BKK003', 'Standard', 'Yes', 1500),
('BKK003STD304', 'BKK003', 'Standard', 'Yes', 1500),
('BKK003STD305', 'BKK003', 'Standard', 'Yes', 1500),
('BKK003STD306', 'BKK003', 'Standard', 'Yes', 1500),
('BKK003STD307', 'BKK003', 'Standard', 'Yes', 1500),
('BKK003STD308', 'BKK003', 'Standard', 'Yes', 1500),
('BKK003SUT501', 'BKK003', 'Suite', 'No', 5500),
('BKK003SUT502', 'BKK003', 'Suite', 'No', 5500),
('BKK003SUT503', 'BKK003', 'Suite', 'No', 5500),
('BKK003SUT504', 'BKK003', 'Suite', 'No', 5500),
('BKK003SUT601', 'BKK003', 'Suite', 'No', 5500),
('BKK003SUT602', 'BKK003', 'Suite', 'No', 5500),
('BKK003SUT603', 'BKK003', 'Suite', 'No', 5500),
('BKK003SUT604', 'BKK003', 'Suite', 'No', 5500),
('BKK003SUT701', 'BKK003', 'Suite', 'No', 5500),
('BKK003SUT702', 'BKK003', 'Suite', 'No', 5500),
('BKK003SUT703', 'BKK003', 'Suite', 'No', 5500),
('BKK003SUT704', 'BKK003', 'Suite', 'No', 5500),
('BKK004DLX401', 'BKK004', 'Deluxe', 'Yes', 3500),
('BKK004DLX402', 'BKK004', 'Deluxe', 'Yes', 3500),
('BKK004DLX403', 'BKK004', 'Deluxe', 'Yes', 3500),
('BKK004DLX404', 'BKK004', 'Deluxe', 'Yes', 3500),
('BKK004DLX405', 'BKK004', 'Deluxe', 'No', 3350),
('BKK004DLX406', 'BKK004', 'Deluxe', 'No', 3350),
('BKK004DLX407', 'BKK004', 'Deluxe', 'No', 3350),
('BKK004DLX408', 'BKK004', 'Deluxe', 'No', 3350),
('BKK004DLX409', 'BKK004', 'Deluxe', 'No', 3350),
('BKK004DLX410', 'BKK004', 'Deluxe', 'No', 3350),
('BKK004SPR205', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR206', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR207', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR208', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR209', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR210', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR211', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR212', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR213', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR214', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR215', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR216', 'BKK004', 'Superior', 'No', 2350),
('BKK004SPR309', 'BKK004', 'Superior', 'Yes', 2500),
('BKK004SPR310', 'BKK004', 'Superior', 'Yes', 2500),
('BKK004SPR311', 'BKK004', 'Superior', 'Yes', 2500),
('BKK004SPR312', 'BKK004', 'Superior', 'Yes', 2500),
('BKK004SPR313', 'BKK004', 'Superior', 'Yes', 2500),
('BKK004SPR314', 'BKK004', 'Superior', 'Yes', 2500),
('BKK004SPR315', 'BKK004', 'Superior', 'Yes', 2500),
('BKK004SPR316', 'BKK004', 'Superior', 'Yes', 2500),
('BKK004STD201', 'BKK004', 'Standard', 'No', 1350),
('BKK004STD202', 'BKK004', 'Standard', 'No', 1350),
('BKK004STD203', 'BKK004', 'Standard', 'No', 1350),
('BKK004STD204', 'BKK004', 'Standard', 'No', 1350),
('BKK004STD301', 'BKK004', 'Standard', 'Yes', 1500),
('BKK004STD302', 'BKK004', 'Standard', 'Yes', 1500),
('BKK004STD303', 'BKK004', 'Standard', 'Yes', 1500),
('BKK004STD304', 'BKK004', 'Standard', 'Yes', 1500),
('BKK004STD305', 'BKK004', 'Standard', 'Yes', 1500),
('BKK004STD306', 'BKK004', 'Standard', 'Yes', 1500),
('BKK004STD307', 'BKK004', 'Standard', 'Yes', 1500),
('BKK004STD308', 'BKK004', 'Standard', 'Yes', 1500),
('BKK004SUT501', 'BKK004', 'Suite', 'No', 5500),
('BKK004SUT502', 'BKK004', 'Suite', 'No', 5500),
('BKK004SUT503', 'BKK004', 'Suite', 'No', 5500),
('BKK004SUT504', 'BKK004', 'Suite', 'No', 5500),
('BKK004SUT601', 'BKK004', 'Suite', 'No', 5500),
('BKK004SUT602', 'BKK004', 'Suite', 'No', 5500),
('BKK004SUT603', 'BKK004', 'Suite', 'No', 5500),
('BKK004SUT604', 'BKK004', 'Suite', 'No', 5500),
('BKK004SUT701', 'BKK004', 'Suite', 'No', 5500),
('BKK004SUT702', 'BKK004', 'Suite', 'No', 5500),
('BKK004SUT703', 'BKK004', 'Suite', 'No', 5500),
('BKK004SUT704', 'BKK004', 'Suite', 'No', 5500),
('CMI001DLX501', 'CMI001', 'Deluxe', 'No', 4500),
('CMI001DLX502', 'CMI001', 'Deluxe', 'No', 4500),
('CMI001DLX503', 'CMI001', 'Deluxe', 'No', 4500),
('CMI001DLX504', 'CMI001', 'Deluxe', 'No', 4500),
('CMI001DLX505', 'CMI001', 'Deluxe', 'No', 4500),
('CMI001DLX601', 'CMI001', 'Deluxe', 'Yes', 4750),
('CMI001DLX602', 'CMI001', 'Deluxe', 'Yes', 4750),
('CMI001DLX603', 'CMI001', 'Deluxe', 'Yes', 4750),
('CMI001DLX604', 'CMI001', 'Deluxe', 'Yes', 4750),
('CMI001DLX605', 'CMI001', 'Deluxe', 'Yes', 4750),
('CMI001SPR206', 'CMI001', 'Superior', 'No', 3250),
('CMI001SPR207', 'CMI001', 'Superior', 'No', 3250),
('CMI001SPR208', 'CMI001', 'Superior', 'No', 3250),
('CMI001SPR209', 'CMI001', 'Superior', 'No', 3250),
('CMI001SPR210', 'CMI001', 'Superior', 'No', 3250),
('CMI001SPR401', 'CMI001', 'Superior', 'Yes', 3500),
('CMI001SPR402', 'CMI001', 'Superior', 'Yes', 3500),
('CMI001SPR403', 'CMI001', 'Superior', 'Yes', 3500),
('CMI001SPR404', 'CMI001', 'Superior', 'Yes', 3500),
('CMI001SPR405', 'CMI001', 'Superior', 'Yes', 3500),
('CMI001SPR406', 'CMI001', 'Superior', 'Yes', 3500),
('CMI001SPR407', 'CMI001', 'Superior', 'Yes', 3500),
('CMI001SPR408', 'CMI001', 'Superior', 'Yes', 3500),
('CMI001SPR409', 'CMI001', 'Superior', 'Yes', 3500),
('CMI001SPR410', 'CMI001', 'Superior', 'Yes', 3500),
('CMI001STD201', 'CMI001', 'Standard', 'No', 2500),
('CMI001STD202', 'CMI001', 'Standard', 'No', 2500),
('CMI001STD203', 'CMI001', 'Standard', 'No', 2500),
('CMI001STD204', 'CMI001', 'Standard', 'No', 2500),
('CMI001STD205', 'CMI001', 'Standard', 'No', 2500),
('CMI001STD301', 'CMI001', 'Standard', 'Yes', 2750),
('CMI001STD302', 'CMI001', 'Standard', 'Yes', 2750),
('CMI001STD303', 'CMI001', 'Standard', 'Yes', 2750),
('CMI001STD304', 'CMI001', 'Standard', 'Yes', 2750),
('CMI001STD305', 'CMI001', 'Standard', 'Yes', 2750),
('CMI001STD306', 'CMI001', 'Standard', 'Yes', 2750),
('CMI001STD307', 'CMI001', 'Standard', 'Yes', 2750),
('CMI001STD308', 'CMI001', 'Standard', 'Yes', 2750),
('CMI001STD309', 'CMI001', 'Standard', 'Yes', 2750),
('CMI001STD310', 'CMI001', 'Standard', 'Yes', 2750),
('CMI001SUT101', 'CMI001', 'Suite', 'No', 7500),
('CMI001SUT102', 'CMI001', 'Suite', 'No', 7500),
('CMI001SUT111', 'CMI001', 'Suite', 'No', 7500),
('CMI001SUT112', 'CMI001', 'Suite', 'No', 7500),
('CMI001SUT701', 'CMI001', 'Suite', 'No', 7500),
('CMI001SUT702', 'CMI001', 'Suite', 'No', 7500),
('CMI001SUT801', 'CMI001', 'Suite', 'No', 7500),
('CMI001SUT802', 'CMI001', 'Suite', 'No', 7500),
('CMI001SUT901', 'CMI001', 'Suite', 'No', 7500),
('CMI001SUT902', 'CMI001', 'Suite', 'No', 7500),
('PKT001DLX501', 'PKT001', 'Deluxe', 'No', 7250),
('PKT001DLX502', 'PKT001', 'Deluxe', 'No', 7250),
('PKT001DLX503', 'PKT001', 'Deluxe', 'No', 7250),
('PKT001DLX504', 'PKT001', 'Deluxe', 'No', 7250),
('PKT001DLX505', 'PKT001', 'Deluxe', 'No', 7250),
('PKT001DLX601', 'PKT001', 'Deluxe', 'Yes', 7500),
('PKT001DLX602', 'PKT001', 'Deluxe', 'Yes', 7500),
('PKT001DLX603', 'PKT001', 'Deluxe', 'Yes', 7500),
('PKT001DLX604', 'PKT001', 'Deluxe', 'Yes', 7500),
('PKT001DLX605', 'PKT001', 'Deluxe', 'Yes', 7500),
('PKT001SPR206', 'PKT001', 'Superior', 'No', 3750),
('PKT001SPR207', 'PKT001', 'Superior', 'No', 3750),
('PKT001SPR208', 'PKT001', 'Superior', 'No', 3750),
('PKT001SPR209', 'PKT001', 'Superior', 'No', 3750),
('PKT001SPR210', 'PKT001', 'Superior', 'No', 3750),
('PKT001SPR401', 'PKT001', 'Superior', 'Yes', 4000),
('PKT001SPR402', 'PKT001', 'Superior', 'Yes', 4000),
('PKT001SPR403', 'PKT001', 'Superior', 'Yes', 4000),
('PKT001SPR404', 'PKT001', 'Superior', 'Yes', 4000),
('PKT001SPR405', 'PKT001', 'Superior', 'Yes', 4000),
('PKT001SPR406', 'PKT001', 'Superior', 'Yes', 4000),
('PKT001SPR407', 'PKT001', 'Superior', 'Yes', 4000),
('PKT001SPR408', 'PKT001', 'Superior', 'Yes', 4000),
('PKT001SPR409', 'PKT001', 'Superior', 'Yes', 4000),
('PKT001SPR410', 'PKT001', 'Superior', 'Yes', 4000),
('PKT001STD201', 'PKT001', 'Standard', 'No', 3000),
('PKT001STD202', 'PKT001', 'Standard', 'No', 3000),
('PKT001STD203', 'PKT001', 'Standard', 'No', 3000),
('PKT001STD204', 'PKT001', 'Standard', 'No', 3000),
('PKT001STD205', 'PKT001', 'Standard', 'No', 3000),
('PKT001STD301', 'PKT001', 'Standard', 'Yes', 3250),
('PKT001STD302', 'PKT001', 'Standard', 'Yes', 3250),
('PKT001STD303', 'PKT001', 'Standard', 'Yes', 3250),
('PKT001STD304', 'PKT001', 'Standard', 'Yes', 3250),
('PKT001STD305', 'PKT001', 'Standard', 'Yes', 3250),
('PKT001STD306', 'PKT001', 'Standard', 'Yes', 3250),
('PKT001STD307', 'PKT001', 'Standard', 'Yes', 3250),
('PKT001STD308', 'PKT001', 'Standard', 'Yes', 3250),
('PKT001STD309', 'PKT001', 'Standard', 'Yes', 3250),
('PKT001STD310', 'PKT001', 'Standard', 'Yes', 3250),
('PKT001SUT101', 'PKT001', 'Suite', 'No', 10500),
('PKT001SUT102', 'PKT001', 'Suite', 'No', 10500),
('PKT001SUT111', 'PKT001', 'Suite', 'No', 10500),
('PKT001SUT112', 'PKT001', 'Suite', 'No', 10500),
('PKT001SUT701', 'PKT001', 'Suite', 'No', 10500),
('PKT001SUT702', 'PKT001', 'Suite', 'No', 10500),
('PKT001SUT801', 'PKT001', 'Suite', 'No', 10500),
('PKT001SUT802', 'PKT001', 'Suite', 'No', 10500),
('PKT001SUT901', 'PKT001', 'Suite', 'No', 10500),
('PKT001SUT902', 'PKT001', 'Suite', 'No', 10500);

-- --------------------------------------------------------

--
-- Table structure for table `roomtype`
--

CREATE TABLE `roomtype` (
  `RoomType` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `RoomDescribe` text COLLATE utf8_unicode_ci NOT NULL,
  `ExPicture` text COLLATE utf8_unicode_ci,
  `MaximumGuest` tinyint(4) NOT NULL,
  `BedDetail` text COLLATE utf8_unicode_ci NOT NULL,
  `AmountOfToilet` tinyint(4) NOT NULL,
  `Area` float NOT NULL,
  `Rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roomtype`
--

INSERT INTO `roomtype` (`RoomType`, `RoomDescribe`, `ExPicture`, `MaximumGuest`, `BedDetail`, `AmountOfToilet`, `Area`, `Rating`) VALUES
('Deluxe', 'More better room in very good condition', 'pic/deluxe_room.jpg', 7, '4 Queen Size 1 King Size', 5, 60, 4.33333),
('Standard', 'Normal room in good condition', 'pic/standard_room.jpg', 3, '3 Normal Size', 3, 40, 4.2),
('Suite', 'THE BEST ROOM IN THE WORLD', 'pic/suit_room.jpg', 9, '7 King Size', 6, 80, 4.333),
('Superior', 'Better room in better condition', 'pic/superior_room.jpg', 5, '3 Queen Size', 4, 50, 4);

-- --------------------------------------------------------

--
-- Table structure for table `staffinfo`
--

CREATE TABLE `staffinfo` (
  `StaffID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `BranchNo` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  `FirstName` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `LastName` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `CitizenID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Position` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Salary` float NOT NULL,
  `Email` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `PhoneNumber` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Nationality` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Religion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DOB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `BloodType` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Address` text COLLATE utf8_unicode_ci NOT NULL,
  `BankAccountNo` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `staffinfo`
--

INSERT INTO `staffinfo` (`StaffID`, `BranchNo`, `FirstName`, `LastName`, `CitizenID`, `Position`, `Salary`, `Email`, `PhoneNumber`, `Gender`, `Nationality`, `Religion`, `DOB`, `BloodType`, `Address`, `BankAccountNo`) VALUES
('S0000000001', 'BKK002', 'Shea', 'Figueroa', '1659112774099', 'Manager', 500000, 'sed.orci@Craspellentesque.org', '141-857-0665', 'F', 'English', 'Christianity', '1978-12-05 17:00:00', 'B', '322-8022 Egestas. St.', '2149 33985'),
('S0000000002', 'BKK001', 'Bernard', 'Valdez', '1617092049399', 'Manager', 500000, 'semper@nibhPhasellus.net', '163-080-9952', 'F', 'English', 'Buddhism', '1981-11-18 17:00:00', 'O', '242-7194 Curae; Road', '2149 65252'),
('S0000000003', 'BKK001', 'Fallon', 'Carney', '1615120234399', 'Receptionist', 250000, 'orci@Mauris.org', '114-959-7943', 'M', 'English', 'Islam', '1978-01-30 17:00:00', 'AB', '6682 Ac St.', '2149 27299'),
('S0000000004', 'BKK001', 'Lucy', 'Floyd', '1621110990999', 'Receptionist', 250000, 'ipsum@sodalesnisi.org', '916-883-4820', 'F', 'English', 'Christianity', '1975-08-21 17:00:00', 'O', 'P.O. Box 967, 6330 Enim. Road', '2149 05816'),
('S0000000005', 'BKK002', 'Benedict', 'Raymond', '1668043016899', 'Receptionist', 250000, 'eleifend.vitae.erat@et.edu', '092-658-5109', 'M', 'American', 'Christianity', '1989-09-16 17:00:00', 'O', '386 Fusce Avenue', '2149 19829'),
('S0000000006', 'BKK003', 'Keefe', 'Sandoval', '1645092444699', 'Manager', 500000, 'ligula.Aenean@Pellentesque.co.uk', '363-338-3375', 'M', 'American', 'Christianity', '1984-02-11 17:00:00', 'AB', '584 Cras Road', '2149 60874'),
('S0000000007', 'PKT001', 'Elijah', 'Whitley', '1693011252799', 'Manager', 500000, 'condimentum@est.com', '669-385-3975', 'F', 'American', 'Buddhism', '1982-02-15 17:00:00', 'O', 'Ap #666-5171 Ultricies Avenue', '2014 89904'),
('S0000000008', 'CMI001', 'Brianna', 'Kennedy', '1606040893599', 'Manager', 500000, 'ipsum.Phasellus@augue.co.uk', '860-548-0572', 'M', 'American', 'Christianity', '1982-03-30 17:00:00', 'B', 'P.O. Box 858, 5901 Pellentesque, St.', '2149 08448'),
('S0000000009', 'BKK002', 'Keaton', 'Norman', '1691111010099', 'Receptionist', 250000, 'pharetra.ut@commodohendrerit.edu', '933-112-3447', 'F', 'American', 'Christianity', '1981-03-02 17:00:00', 'B', '3003 Fusce St.', '2014 40827'),
('S0000000010', 'BKK002', 'Martena', 'Weeks', '1695022680599', 'Cleaner', 200000, 'diam.nunc.ullamcorper@dolorQuisque.edu', '521-146-9125', 'F', 'Chinese', 'Buddhism', '1973-04-20 17:00:00', 'B', '9494 Diam Ave', '2149 91400'),
('S0000000011', 'BKK003', 'Jesse', 'Clay', '1620031186999', 'Receptionist', 250000, 'tellus.non.magna@lacusQuisquepurus.org', '686-544-1063', 'F', 'Chinese', 'Buddhism', '1986-10-06 17:00:00', 'AB', 'Ap #443-6609 Tristique Avenue', '2014 34288'),
('S0000000012', 'CMI001', 'Roary', 'Horn', '1650071643399', 'Receptionist', 250000, 'ante@fringillami.edu', '862-250-8141', 'M', 'Chinese', 'Buddhism', '1981-09-16 17:00:00', 'AB', '5024 Risus. Street', '2149 92037'),
('S0000000013', 'BKK003', 'Ferdinand', 'Clemons', '1621010645799', 'Receptionist', 250000, 'et.nunc@feugiat.co.uk', '387-072-2643', 'F', 'English', 'Christianity', '1974-05-22 17:00:00', 'A', '3961 Euismod Street', '2014 41068'),
('S0000000014', 'BKK002', 'Silas', 'Patrick', '1620123053999', 'Cleaner', 200000, 'est.congue@vitae.net', '165-300-3340', 'M', 'English', 'Buddhism', '1978-10-04 17:00:00', 'AB', '615 Sit Avenue', '2149 72396'),
('S0000000015', 'BKK003', 'Jin', 'Branch', '1688062132399', 'Cleaner', 150000, 'enim.consequat@ligula.org', '614-343-3601', 'F', 'American', 'Islam', '1980-04-27 17:00:00', 'A', '8795 Quisque Ave', '2014 51021'),
('S0000000016', 'BKK002', 'Mira', 'Mckay', '1661021950799', 'Security guard', 270000, 'tellus.justo.sit@necurna.co.uk', '152-582-5370', 'M', 'American', 'Buddhism', '1983-12-10 17:00:00', 'B', 'P.O. Box 838, 7068 Risus, Av.', '2149 69580'),
('S0000000017', 'CMI001', 'Shad', 'Moreno', '1637122912799', 'Cleaner', 150000, 'ac.risus.Morbi@fringilla.com', '694-213-6960', 'M', 'American', 'Buddhism', '1985-11-27 17:00:00', 'O', 'P.O. Box 993, 3791 Ligula Rd.', '2014 96679'),
('S0000000018', 'BKK001', 'Ivana', 'Santana', '1604011563899', 'Cleaner', 200000, 'at@lectus.com', '707-498-6010', 'F', 'American', 'Christianity', '1970-12-09 17:00:00', 'A', 'Ap #146-6667 Nulla. Road', '2149 28813'),
('S0000000019', 'PKT001', 'Fritz', 'Harper', '1679050398999', 'Receptionist', 250000, 'Lorem.ipsum.dolor@afacilisis.net', '363-396-4273', 'M', 'American', 'Islam', '1989-12-15 17:00:00', 'A', 'Ap #712-3851 Sollicitudin Rd.', '2014 04379'),
('S0000000020', 'BKK003', 'Iris', 'Ruiz', '1606020431699', 'Security guard', 270000, 'at.pretium.aliquet@nibhenimgravida.com', '155-518-1808', 'M', 'Chinese', 'Christianity', '1970-09-11 17:00:00', 'O', '8443 Tincidunt St.', '2014 89661'),
('S0000000021', 'BKK001', 'Declan', 'Blackwell', '1650021370799', 'Cleaner', 200000, 'Duis.a.mi@lorem.com', '260-398-2485', 'F', 'American', 'Buddhism', '1976-05-08 17:00:00', 'O', 'Ap #785-9997 Neque Road', '2014 64056'),
('S0000000022', 'BKK004', 'Candace', 'Navarro', '1660051130699', 'Manager', 500000, 'sagittis.felis.Donec@ametluctusvulputate.net', '530-836-0168', 'F', 'American', 'Christianity', '1970-07-14 17:00:00', 'A', '923-1158 Et, Rd.', '2014 98171'),
('S0000000023', 'BKK002', 'Iola', 'Davidson', '1638031400999', 'Chef', 300000, 'Nullam.scelerisque.neque@sit.net', '351-493-0265', 'F', 'American', 'Buddhism', '1972-09-29 17:00:00', 'A', 'Ap #490-5192 Curabitur Av.', '2149 20135'),
('S0000000024', 'BKK001', 'Mechelle', 'Mcintosh', '1651042031199', 'Cleaner', 200000, 'pede.sagittis@ac.edu', '216-237-2279', 'M', 'American', 'Islam', '1977-06-01 17:00:00', 'B', '2215 Ut St.', '2149 85696'),
('S0000000025', 'BKK001', 'Tanek', 'Miranda', '1614110980999', 'Security guard', 270000, 'venenatis@tempor.com', '718-056-1274', 'F', 'American', 'Buddhism', '1982-11-18 17:00:00', 'AB', '225-1357 Amet Av.', '2014 06566'),
('S0000000026', 'PKT001', 'Glenna', 'Joseph', '1686100425199', 'Cleaner', 150000, 'pede.Cras.vulputate@arcu.com', '328-056-2739', 'F', 'German', 'Islam', '1983-01-05 17:00:00', 'AB', '499-3557 Lacus. Avenue', '2014 45767'),
('S0000000027', 'BKK002', 'Lewis', 'George', '1625111715199', 'Chef', 300000, 'porta.elit@Phasellusfermentumconvallis.net', '605-566-8785', 'F', 'German', 'Buddhism', '1972-02-22 17:00:00', 'AB', 'Ap #392-7972 Dis St.', '2149 80988'),
('S0000000028', 'PKT001', 'Germaine', 'Townsend', '1668071855099', 'Security guard', 270000, 'nec.quam@enimnislelementum.net', '943-646-7742', 'F', 'German', 'Islam', '1972-11-26 17:00:00', 'AB', '9679 Eu Rd.', '2014 96820'),
('S0000000029', 'BKK002', 'Vielka', 'Durham', '1626040175699', 'Room service', 170000, 'in.aliquet.lobortis@dolorsit.ca', '704-962-1511', 'M', 'German', 'Christianity', '1980-05-13 17:00:00', 'B', 'P.O. Box 941, 3099 Donec Av.', '2014 56038'),
('S0000000030', 'BKK001', 'Ross', 'Torres', '1600060382999', 'Chef', 300000, 'odio@mauriseuelit.co.uk', '084-712-6425', 'M', 'Thai', 'Islam', '1976-01-26 17:00:00', 'O', 'Ap #714-2596 Tellus St.', '2149 39028'),
('S0000000031', 'BKK003', 'Quinlan', 'Bowen', '1628101353799', 'Chef', 300000, 'dolor.vitae.dolor@Pellentesquetincidunt.ca', '797-651-8902', 'F', 'Thai', 'Christianity', '1984-09-30 17:00:00', 'O', '3598 Cras St.', '2014 69559'),
('S0000000032', 'BKK003', 'Yasir', 'Harrison', '1628082622699', 'Chef', 300000, 'Morbi@suscipitestac.ca', '745-461-1255', 'M', 'Thai', 'Islam', '1971-11-24 17:00:00', 'B', '1786 Phasellus Avenue', '2149 60035'),
('S0000000033', 'BKK001', 'Ulric', 'Hinton', '1698100870399', 'Chef', 300000, 'ultrices@sitametconsectetuer.ca', '479-267-7188', 'F', 'Chinese', 'Islam', '1990-01-23 17:00:00', 'AB', 'P.O. Box 630, 7094 Nibh Road', '2014 63694'),
('S0000000034', 'BKK001', 'Xerxes', 'Levy', '1659042643199', 'Chef', 300000, 'risus@malesuada.com', '557-995-6308', 'M', 'English', 'Christianity', '1978-12-06 17:00:00', 'A', '361 Lacus. Rd.', '2149 84247'),
('S0000000035', 'PKT001', 'Noble', 'Walsh', '1603101531699', 'Chef', 300000, 'Pellentesque.habitant@pede.net', '621-335-3616', 'M', 'English', 'Christianity', '1984-10-15 17:00:00', 'A', '216-5586 Libero Rd.', '2149 74869'),
('S0000000036', 'BKK001', 'Troy', 'Branch', '1679062321899', 'Room service', 170000, 'augue.eu.tellus@euismodest.net', '169-688-7247', 'M', 'English', 'Islam', '1981-01-03 17:00:00', 'O', '3255 Gravida Rd.', '2014 25066'),
('S0000000037', 'BKK001', 'Tate', 'Mathis', '1655072717799', 'Room service', 170000, 'velit.Aliquam.nisl@pharetra.net', '526-559-9789', 'F', 'English', 'Buddhism', '1986-07-15 17:00:00', 'B', '336-5059 Vestibulum Ave', '2014 86951'),
('S0000000038', 'BKK001', 'Kiayada', 'Barrera', '1668082973999', 'Room service', 170000, 'in.magna@loremut.ca', '453-810-7923', 'M', 'English', 'Buddhism', '1972-09-09 17:00:00', 'AB', 'P.O. Box 296, 1175 Etiam Rd.', '2149 66458'),
('S0000000039', 'CMI001', 'Samson', 'Wade', '1691070219699', 'Security guard', 270000, 'Curabitur.massa.Vestibulum@pretiumaliquetmetus.com', '105-738-9685', 'M', 'American', 'Buddhism', '1977-04-07 17:00:00', 'O', '7978 At Street', '2014 61975'),
('S0000000040', 'CMI001', 'Blaine', 'Ingram', '1683112827799', 'Chef', 300000, 'placerat@urnaNullamlobortis.org', '249-393-4686', 'M', 'American', 'Buddhism', '1977-11-20 17:00:00', 'O', 'Ap #986-9308 Nonummy Road', '2014 53852'),
('S0000000041', 'CMI001', 'Oprah', 'Cantu', '1619071816699', 'Chef', 300000, 'vulputate@magnisdisparturient.edu', '259-242-3430', 'F', 'American', 'Christianity', '1989-11-15 17:00:00', 'AB', 'P.O. Box 988, 6913 Suscipit, Rd.', '2149 09623'),
('S0000000042', 'BKK004', 'Len', 'Mckinney', '1622031311799', 'Receptionist', 250000, 'in.faucibus.orci@lobortisquama.ca', '262-293-2175', 'M', 'American', 'Christianity', '1970-09-25 17:00:00', 'O', '620-5643 Vel, Rd.', '2149 57497'),
('S0000000043', 'BKK004', 'Hakeem', 'Brown', '1667042383799', 'Receptionist', 250000, 'turpis.Nulla.aliquet@Suspendisseseddolor.ca', '720-964-8687', 'M', 'American', 'Buddhism', '1970-10-13 17:00:00', 'B', 'P.O. Box 183, 4247 Arcu Road', '2014 15855'),
('S0000000044', 'BKK002', 'Kylan', 'Cardenas', '1661032654299', 'Room service', 170000, 'vel.faucibus.id@ametconsectetuer.org', '459-196-0126', 'F', 'German', 'Islam', '1973-11-21 17:00:00', 'AB', '159-5996 Arcu. Rd.', '2014 53526'),
('S0000000045', 'BKK003', 'Sylvester', 'Fletcher', '1627010469199', 'Room service', 170000, 'risus@velit.edu', '482-536-2156', 'F', 'English', 'Buddhism', '1984-07-05 17:00:00', 'O', '500-5666 Nunc Street', '2014 72011'),
('S0000000046', 'BKK004', 'Garrett', 'Howe', '1663032522999', 'Cleaner', 150000, 'felis.ullamcorper.viverra@urnaetarcu.ca', '170-229-3984', 'F', 'English', 'Islam', '1974-06-13 17:00:00', 'B', '547-6619 Luctus, Rd.', '2014 08685'),
('S0000000047', 'BKK002', 'Austin', 'Woodard', '1671082246599', 'Room service', 170000, 'tristique.neque@condimentumDonec.ca', '678-266-4741', 'F', 'English', 'Christianity', '1972-02-26 17:00:00', 'A', '8296 Viverra. Avenue', '2014 38584'),
('S0000000048', 'CMI001', 'Igor', 'Bond', '1604070797999', 'Room service', 170000, 'enim.Mauris.quis@lacusEtiambibendum.ca', '925-327-4058', 'M', 'English', 'Islam', '1988-05-24 17:00:00', 'O', '3581 Nulla Av.', '2149 85077'),
('S0000000049', 'CMI001', 'Louis', 'Bowen', '1632042788199', 'Room service', 170000, 'torquent.per@tellus.net', '767-266-1579', 'F', 'English', 'Buddhism', '1985-08-12 17:00:00', 'O', '8201 Volutpat. St.', '2014 09253'),
('S0000000050', 'BKK002', 'Victoria', 'Olson', '1670031043799', 'Cleaner', 200000, 'mollis.lectus.pede@sagittissemperNam.ca', '603-906-2691', 'M', 'English', 'Buddhism', '1976-02-13 17:00:00', 'O', '921-7909 Ante St.', '2014 52424'),
('S0000000051', 'BKK004', 'Laurel', 'Mosley', '1651102899999', 'Security guard', 270000, 'urna@felisorci.co.uk', '108-192-3641', 'M', 'German', 'Buddhism', '1989-03-05 17:00:00', 'O', 'P.O. Box 955, 3201 Lectus Ave', '2014 45924'),
('S0000000052', 'BKK001', 'Cherokee', 'Patterson', '1663110269999', 'Room service', 170000, 'molestie.tortor.nibh@bibendum.ca', '586-047-1210', 'F', 'German', 'Christianity', '1987-04-25 17:00:00', 'A', '128-3259 Cras Ave', '2149 59259'),
('S0000000053', 'PKT001', 'Tanner', 'Finley', '1608100312399', 'Chef', 300000, 'Etiam.laoreet@dictumeleifendnunc.co.uk', '182-688-4668', 'F', 'German', 'Buddhism', '1990-01-27 17:00:00', 'B', '485-9085 Magnis Ave', '2014 30368'),
('S0000000054', 'BKK001', 'Lucas', 'Mayo', '1683042093999', 'Security guard', 270000, 'scelerisque.mollis@nullaanteiaculis.ca', '197-760-5345', 'M', 'Chinese', 'Islam', '1982-04-27 17:00:00', 'AB', 'Ap #536-8548 Semper Ave', '2014 12236'),
('S0000000055', 'BKK003', 'Emerson', 'Stafford', '1620062015699', 'Room service', 170000, 'Curae@vel.ca', '720-094-2340', 'F', 'Chinese', 'Christianity', '1989-05-15 17:00:00', 'A', 'P.O. Box 900, 2554 A, Road', '2149 65221'),
('S0000000056', 'BKK003', 'Montana', 'Perkins', '1617022684199', 'Room service', 170000, 'Etiam@magnis.com', '657-514-5361', 'F', 'English', 'Christianity', '1976-06-14 17:00:00', 'B', '7740 Risus. Street', '2014 38442'),
('S0000000057', 'PKT001', 'Timon', 'Roth', '1666061670599', 'Room service', 170000, 'penatibus.et.magnis@adipiscing.co.uk', '703-819-7440', 'F', 'English', 'Islam', '1972-12-21 17:00:00', 'A', '6040 Pede, Avenue', '2149 68791'),
('S0000000058', 'BKK001', 'Sawyer', 'Cross', '1613040155099', 'Security guard', 270000, 'tincidunt@cursus.com', '045-976-9378', 'M', 'English', 'Islam', '1985-09-17 17:00:00', 'A', '5713 Aliquam Road', '2149 19869'),
('S0000000059', 'BKK003', 'Evangeline', 'Morris', '1645122421099', 'Cleaner', 150000, 'libero@ultricesDuisvolutpat.co.uk', '848-501-3359', 'F', 'English', 'Buddhism', '1980-03-30 17:00:00', 'O', '4554 Placerat, Rd.', '2014 04029'),
('S0000000060', 'PKT001', 'Daria', 'Miranda', '1647092428299', 'Room service', 170000, 'Aenean@amalesuada.ca', '535-214-2906', 'M', 'German', 'Buddhism', '1985-12-25 17:00:00', 'A', '602-127 Eget St.', '2014 08717'),
('S0000000061', 'BKK001', 'Deacon', 'Blanchard', '1604021811899', 'Security guard', 270000, 'sapien.Aenean.massa@quamvel.com', '554-446-2057', 'F', 'German', 'Islam', '1981-01-12 17:00:00', 'O', 'Ap #650-8385 Mus. Street', '2149 65588'),
('S0000000062', 'BKK002', 'Demetrius', 'Jenkins', '1651021553599', 'Cleaner', 200000, 'non@enimcommodohendrerit.org', '475-250-3193', 'M', 'German', 'Buddhism', '1989-02-05 17:00:00', 'O', 'P.O. Box 909, 1948 Euismod Road', '2014 42987'),
('S0000000063', 'BKK004', 'Shaine', 'Conrad', '1637112677699', 'Chef', 300000, 'Vestibulum.ante.ipsum@purusmaurisa.edu', '545-866-6052', 'M', 'Chinese', 'Islam', '1975-08-16 17:00:00', 'O', '7883 Proin Street', '2014 87817'),
('S0000000064', 'PKT001', 'Bert', 'Nguyen', '1648052976999', 'Room service', 170000, 'ultricies.dignissim.lacus@convallisante.net', '205-211-8339', 'M', 'Chinese', 'Christianity', '1974-12-04 17:00:00', 'A', '2780 Luctus Rd.', '2149 03302'),
('S0000000065', 'BKK001', 'Perry', 'Hardin', '1640062720699', 'Security guard', 270000, 'Morbi.sit@ante.co.uk', '731-826-3932', 'F', 'English', 'Christianity', '1974-07-05 17:00:00', 'A', 'P.O. Box 228, 5634 Consequat Av.', '2014 98993'),
('S0000000066', 'BKK003', 'Russell', 'Barr', '1681012186799', 'Cleaner', 150000, 'euismod.et.commodo@Duiscursusdiam.org', '918-384-2237', 'M', 'American', 'Christianity', '1973-06-26 17:00:00', 'O', '105 Libero St.', '2149 49314'),
('S0000000067', 'BKK004', 'Moses', 'Meyer', '1695021453299', 'Chef', 300000, 'sed@ultriciesornare.co.uk', '733-364-5538', 'F', 'American', 'Buddhism', '1989-04-30 17:00:00', 'B', 'Ap #644-6736 Donec Rd.', '2014 37593'),
('S0000000068', 'BKK004', 'Laurel', 'Gonzales', '1677070978199', 'Room service', 170000, 'Nunc.lectus@Aliquam.ca', '569-289-6815', 'F', 'American', 'Christianity', '1982-11-16 17:00:00', 'O', '160-5616 Vel, Street', '2149 47417'),
('S0000000069', 'BKK002', 'Odessa', 'Petersen', '1635080502099', 'Cleaner', 200000, 'luctus.vulputate.nisi@eratnonummy.com', '935-748-7229', 'M', 'American', 'Christianity', '1973-02-08 17:00:00', 'O', 'P.O. Box 493, 9222 Sed Street', '2014 48913'),
('S0000000070', 'BKK002', 'Jack', 'Yates', '1622031543199', 'Cleaner', 200000, 'nulla.ante@massa.ca', '415-269-6692', 'M', 'American', 'Buddhism', '1976-08-25 17:00:00', 'B', '4304 Mauris St.', '2149 10921'),
('S0000000071', 'PKT001', 'Zeph', 'Wade', '1644101580699', 'Cleaner', 150000, 'Morbi.quis@nibh.com', '932-415-7860', 'F', 'Chinese', 'Islam', '1981-03-14 17:00:00', 'A', '4587 Hymenaeos. St.', '2149 58478'),
('S0000000072', 'BKK004', 'Jakeem', 'Martin', '1637062753999', 'Room service', 170000, 'tellus.Suspendisse@amet.edu', '160-338-8917', 'M', 'Chinese', 'Christianity', '1976-01-30 17:00:00', 'O', '6725 Diam. Av.', '2149 24030'),
('S0000000073', 'BKK004', 'Dorothy', 'Soto', '1636052918299', 'Room service', 170000, 'ut.pharetra@nibhvulputate.co.uk', '184-970-2035', 'U', 'Chinese', 'Islam', '1988-03-29 17:00:00', 'B', '775-7240 Eu, Road', '2014 20260'),
('S0000000074', 'BKK002', 'Micah', 'Lewis', '1614082008799', 'Security guard', 270000, 'Aliquam.erat@pellentesquetellus.com', '030-798-7636', 'F', 'German', 'Buddhism', '1979-10-04 17:00:00', 'B', '4665 Neque Street', '2014 77560'),
('S0000000075', 'BKK003', 'Mollie', 'Morris', '1666021780399', 'Security guard', 270000, 'est.Nunc@egetvenenatis.co.uk', '961-534-3796', 'M', 'American', 'Christianity', '1972-07-04 17:00:00', 'O', 'P.O. Box 152, 8587 Gravida Rd.', '2014 64778'),
('S0000000076', 'PKT001', 'Samson', 'Willis', '1695082798299', 'Cleaner', 150000, 'Vivamus.euismod@Integermollis.com', '404-773-0042', 'M', 'American', 'Buddhism', '1979-10-16 17:00:00', 'A', 'P.O. Box 240, 5948 Aenean Rd.', '2014 98632'),
('S0000000077', 'BKK002', 'Magee', 'Gaines', '1675030292599', 'Security guard', 270000, 'nibh@lacusvarius.net', '694-101-8428', 'M', 'American', 'Christianity', '1978-12-26 17:00:00', 'B', '8886 Tempus Street', '2014 30627'),
('S0000000078', 'BKK004', 'Gregory', 'Vasquez', '1680060108999', 'Security guard', 270000, 'vitae.odio.sagittis@Inmi.com', '709-058-2842', 'F', 'American', 'Buddhism', '1972-12-05 17:00:00', 'A', 'P.O. Box 479, 3294 Mauris Av.', '2014 64164'),
('S0000000079', 'CMI001', 'Sopoline', 'Reeves', '1634102945799', 'Room service', 170000, 'pretium.neque@imperdietullamcorper.com', '357-545-8588', 'M', 'American', 'Christianity', '1981-05-10 17:00:00', 'A', '592-5265 Sed, Av.', '2149 19416'),
('S0000000080', 'BKK002', 'Geoffrey', 'Scott', '1640030785299', 'Security guard', 270000, 'vel.convallis@posuereenimnisl.edu', '875-340-3456', 'F', 'English', 'Islam', '1986-12-27 17:00:00', 'A', 'P.O. Box 223, 412 Lorem St.', '2014 13415'),
('S0000000081', 'BKK004', 'Austin', 'Berry', '1619032609299', 'Cleaner', 150000, 'sit.amet@convallis.net', '125-991-3425', 'F', 'English', 'Islam', '1980-09-20 17:00:00', 'AB', 'Ap #975-5111 Lacinia Road', '2149 05386'),
('S0000000082', 'BKK003', 'Coby', 'Dunlap', '1610031702499', 'Security guard', 270000, 'massa.Mauris@diamDuismi.org', '938-170-7216', 'M', 'German', 'Christianity', '1981-02-06 17:00:00', 'AB', '276-4261 Lectus Ave', '2014 57025'),
('S0000000083', 'BKK001', 'Jillian', 'Cain', '1628041200499', 'Cleaner', 200000, 'erat.Vivamus.nisi@Pellentesque.net', '070-973-4709', 'F', 'German', 'Christianity', '1982-06-04 17:00:00', 'AB', 'P.O. Box 392, 9214 Urna, Ave', '2149 28581'),
('S0000000084', 'BKK001', 'Dara', 'Kaufman', '1636011578599', 'Cleaner', 200000, 'vulputate.velit.eu@Vestibulumaccumsan.edu', '160-682-5770', 'M', 'German', 'Christianity', '1973-07-10 17:00:00', 'AB', '988-4476 Fringilla, Rd.', '2014 46380'),
('S0000000085', 'BKK003', 'Jillian', 'Carney', '1603030482599', 'Receptionist', 250000, 'eget@Suspendisse.edu', '941-674-3611', 'F', 'American', 'Buddhism', '1973-08-30 17:00:00', 'B', '572-5658 Convallis Avenue', '2149 82752'),
('S0000000086', 'BKK003', 'Blythe', 'Carey', '1608110596899', 'Chef', 300000, 'urna.Nunc.quis@metusfacilisislorem.ca', '445-294-4187', 'F', 'American', 'Christianity', '1978-12-27 17:00:00', 'AB', '7658 Facilisis Street', '2149 51870'),
('S0000000087', 'PKT001', 'Russell', 'Graves', '1679021285699', 'Cleaner', 150000, 'Pellentesque.habitant.morbi@indolorFusce.co.uk', '297-382-5916', 'F', 'American', 'Islam', '1985-09-14 17:00:00', 'B', '447-7611 Varius Street', '2014 50548'),
('S0000000088', 'BKK001', 'Idona', 'Lambert', '1618081326899', 'Cleaner', 200000, 'lacus.Cras.interdum@velsapien.edu', '423-486-2114', 'F', 'German', 'Buddhism', '1981-04-16 17:00:00', 'O', '683-8532 Rutrum Road', '2014 66967'),
('S0000000089', 'CMI001', 'Bianca', 'Gaines', '1612080930199', 'Security guard', 270000, 'at@faucibusorci.org', '667-472-1239', 'M', 'German', 'Buddhism', '1982-05-16 17:00:00', 'AB', '9175 Nunc Avenue', '2014 13565'),
('S0000000090', 'BKK004', 'Uta', 'Livingston', '1663100248899', 'Cleaner', 150000, 'faucibus.leo.in@lorem.edu', '783-523-8079', 'M', 'German', 'Islam', '1981-08-06 17:00:00', 'A', 'Ap #331-7271 Natoque Road', '2014 01262'),
('S0000000091', 'BKK004', 'Chase', 'Richmond', '1636102052999', 'Cleaner', 150000, 'taciti@nibhQuisquenonummy.org', '790-937-2363', 'M', 'German', 'Islam', '1986-03-30 17:00:00', 'B', '7660 Dapibus Avenue', '2014 57308'),
('S0000000092', 'BKK001', 'Shaeleigh', 'Mayer', '1688051973399', 'Cleaner', 200000, 'eu.dolor.egestas@sitametmetus.ca', '546-389-7621', 'F', 'Thai', 'Christianity', '1971-02-16 17:00:00', 'A', '522-8579 Cras Rd.', '2014 19325'),
('S0000000093', 'BKK002', 'Lavinia', 'Bradford', '1610031526999', 'Security guard', 270000, 'vel@esttempor.edu', '654-216-8943', 'M', 'Thai', 'Islam', '1981-06-29 17:00:00', 'A', 'Ap #627-2912 Arcu. Road', '2014 14577'),
('S0000000094', 'BKK003', 'Driscoll', 'Fields', '1656040736099', 'Cleaner', 150000, 'in@dignissim.net', '661-673-0043', 'M', 'Thai', 'Islam', '1972-04-14 17:00:00', 'B', '7008 Laoreet Road', '2014 19279'),
('S0000000095', 'PKT001', 'Mariko', 'Estrada', '1667051079999', 'Security guard', 270000, 'nulla.magna.malesuada@iaculisenim.edu', '660-990-1506', 'M', 'Thai', 'Christianity', '1979-09-26 17:00:00', 'A', 'Ap #857-1492 Dis Rd.', '2014 01066'),
('S0000000096', 'CMI001', 'Alisa', 'Evans', '1661042709299', 'Cleaner', 150000, 'ornare.tortor@vitaealiquet.edu', '001-892-2026', 'F', 'Thai', 'Buddhism', '1984-03-25 17:00:00', 'A', 'Ap #131-3909 Mattis. Rd.', '2149 32812'),
('S0000000097', 'BKK002', 'Kasper', 'Collins', '1610062732799', 'Receptionist', 250000, 'tempus.non.lacinia@sed.net', '646-432-2182', 'U', 'Thai', 'Buddhism', '1982-08-07 17:00:00', 'O', 'P.O. Box 452, 2521 Lorem. St.', '2149 87424'),
('S0000000098', 'BKK002', 'Vladimir', 'Poole', '1696020871299', 'Receptionist', 250000, 'mollis.dui.in@dictum.co.uk', '393-931-3664', 'F', 'English', 'Islam', '1985-09-17 17:00:00', 'AB', 'P.O. Box 725, 1868 Sit St.', '2014 25951'),
('S0000000099', 'BKK004', 'Melodie', 'Ortega', '1634030549499', 'Security guard', 270000, 'turpis.Aliquam@acurna.com', '467-463-2441', 'M', 'English', 'Islam', '1975-04-14 17:00:00', 'B', 'P.O. Box 601, 9093 Nec Rd.', '2149 64167'),
('S0000000100', 'CMI001', 'Zahir', 'Shepard', '1620010360199', 'Cleaner', 150000, 'eu.tellus@nonbibendumsed.net', '067-496-3986', 'M', 'Thai', 'Buddhism', '1975-05-19 17:00:00', 'O', '684-3374 Et, Road', '2149 11143');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD PRIMARY KEY (`BookingNo`),
  ADD KEY `DiscountCode` (`DiscountCode`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `GuestID` (`GuestID`);

--
-- Indexes for table `bookingroom`
--
ALTER TABLE `bookingroom`
  ADD PRIMARY KEY (`RoomID`,`BookingNo`),
  ADD KEY `BookingNo` (`BookingNo`),
  ADD KEY `RoomID` (`RoomID`);

--
-- Indexes for table `branchinfo`
--
ALTER TABLE `branchinfo`
  ADD PRIMARY KEY (`BranchNo`);

--
-- Indexes for table `discountinfo`
--
ALTER TABLE `discountinfo`
  ADD PRIMARY KEY (`DiscountCode`);

--
-- Indexes for table `guestinfo`
--
ALTER TABLE `guestinfo`
  ADD PRIMARY KEY (`GuestID`);

--
-- Indexes for table `memberinfo`
--
ALTER TABLE `memberinfo`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `StaffID` (`StaffID`),
  ADD KEY `BookingNo` (`BookingNo`);

--
-- Indexes for table `reviewinfo`
--
ALTER TABLE `reviewinfo`
  ADD PRIMARY KEY (`ReviewID`);

--
-- Indexes for table `roominfo`
--
ALTER TABLE `roominfo`
  ADD PRIMARY KEY (`RoomID`),
  ADD KEY `RoomType` (`RoomType`),
  ADD KEY `BranchNo` (`BranchNo`);

--
-- Indexes for table `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`RoomType`);

--
-- Indexes for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD PRIMARY KEY (`StaffID`),
  ADD KEY `BranchNo` (`BranchNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  MODIFY `BookingNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000000057;

--
-- AUTO_INCREMENT for table `guestinfo`
--
ALTER TABLE `guestinfo`
  MODIFY `GuestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviewinfo`
--
ALTER TABLE `reviewinfo`
  MODIFY `ReviewID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD CONSTRAINT `bookinginfo_ibfk_1` FOREIGN KEY (`DiscountCode`) REFERENCES `discountinfo` (`DiscountCode`),
  ADD CONSTRAINT `bookinginfo_ibfk_3` FOREIGN KEY (`UserID`) REFERENCES `memberinfo` (`UserID`),
  ADD CONSTRAINT `bookinginfo_ibfk_4` FOREIGN KEY (`GuestID`) REFERENCES `guestinfo` (`GuestID`);

--
-- Constraints for table `bookingroom`
--
ALTER TABLE `bookingroom`
  ADD CONSTRAINT `bookingroom_ibfk_1` FOREIGN KEY (`RoomID`) REFERENCES `roominfo` (`RoomID`),
  ADD CONSTRAINT `bookingroom_ibfk_2` FOREIGN KEY (`BookingNo`) REFERENCES `bookinginfo` (`BookingNo`);

--
-- Constraints for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  ADD CONSTRAINT `paymentinfo_ibfk_2` FOREIGN KEY (`StaffID`) REFERENCES `staffinfo` (`StaffID`),
  ADD CONSTRAINT `paymentinfo_ibfk_3` FOREIGN KEY (`BookingNo`) REFERENCES `bookinginfo` (`BookingNo`);

--
-- Constraints for table `roominfo`
--
ALTER TABLE `roominfo`
  ADD CONSTRAINT `roominfo_ibfk_2` FOREIGN KEY (`RoomType`) REFERENCES `roomtype` (`RoomType`),
  ADD CONSTRAINT `roominfo_ibfk_3` FOREIGN KEY (`BranchNo`) REFERENCES `branchinfo` (`BranchNo`);

--
-- Constraints for table `staffinfo`
--
ALTER TABLE `staffinfo`
  ADD CONSTRAINT `staffinfo_ibfk_1` FOREIGN KEY (`BranchNo`) REFERENCES `branchinfo` (`BranchNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
