-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 08:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Food Bevereges`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `userid` varchar(100) NOT NULL,
  `addressid` int(5) NOT NULL,
  `tag` varchar(15) NOT NULL,
  `address` varchar(150) NOT NULL,
  `location` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`userid`, `addressid`, `tag`, `address`, `location`) VALUES
('brijeshbhaliya1234@gmail.com', 1, 'home', '27, Satadhar Soc. A.K. Road Surat', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.389288711177!2d72.84403141493581!3d21.216406285897058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04ee49ba42eb3%3A0xad2ff73ddf2463e5!2sAshwini%20Kumar%20Rd%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1622538065478!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>'),
('rajkachhadiya02@gmail.com', 2, 'office', '63, Devji Nagar soc. A.K. Road Surat', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.389288711177!2d72.84403141493581!3d21.216406285897058!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04ee49ba42eb3%3A0xad2ff73ddf2463e5!2sAshwini%20Kumar%20Rd%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1622538065478!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>'),
('tanvibabriya302@gmail.com', 3, 'home', 'C-302, Vrundaone Rec. Mota Varachha Surat', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59498.46735157954!2d72.84737998591068!3d21.245556435495875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f4fb5c0b087%3A0xb7aabd8a90da0679!2sMota%20Varachha%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1622538555892!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>'),
('vrutiakbari8320@gmail.com', 4, 'home', 'D-103, Gangotri Rec. Sudama Chock Mota Varachha\r\n', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59498.46735157954!2d72.84737998591068!3d21.245556435495875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f4fb5c0b087%3A0xb7aabd8a90da0679!2sMota%20Varachha%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1622538555892!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>'),
('brijeshbhaliya1234@gmail.com', 5, 'office', '102,Nandan Park Soc, Mota Varachha', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59498.46735157954!2d72.84737998591068!3d21.245556435495875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04f4fb5c0b087%3A0xb7aabd8a90da0679!2sMota%20Varachha%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1622538555892!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `lastlogin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`emailid`, `password`, `lastlogin`) VALUES
('mysteryflavours606@gmail.com', 'admin1234', '2021-05-25 12:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `areaid` int(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`areaid`, `name`, `pincode`) VALUES
(1, 'mota varachha', 394101),
(2, 'varachha', 395006),
(3, 'Akroad', 395008),
(4, 'Abrama', 394150),
(5, 'Adajan', 395009),
(6, 'Amroli', 394107),
(7, 'Ashram', 394405),
(8, 'Athwalines', 395001),
(9, 'Atodara', 394130),
(10, 'Bamroli', 394210),
(11, 'Bardoli', 394601),
(12, 'Bhagal', 395003),
(13, 'Bhatha', 394510),
(14, 'Bhesan', 395005),
(15, 'Bhimpore', 394640),
(16, 'Bombay Market', 395010),
(17, 'Katargam', 395004),
(18, 'Dandi', 394540),
(19, 'Delvada', 394620),
(20, 'Dumas', 394550),
(21, 'Ena', 394310),
(22, 'Hazira', 394270),
(23, 'Kadodara', 394327),
(24, 'Kamrej', 394180),
(25, 'Kathodara', 394326),
(26, 'Kharoli', 394163),
(27, 'Khatodara', 395002),
(28, 'Kim', 394110),
(29, 'Lajpore', 394235),
(30, 'Palsana', 394315),
(31, 'Pandesara', 394221),
(32, 'Piplod', 394370),
(33, 'Sachin', 394230),
(35, 'Uttran', 394105),
(36, 'Ved', 394440),
(37, 'Vesu', 395007);

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `addressid` int(5) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `billid` int(5) NOT NULL,
  `date` date NOT NULL,
  `finalamount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`addressid`, `userid`, `billid`, `date`, `finalamount`) VALUES
(5, 'brijeshbhaliya1234@gmail.com', 63, '2021-06-20', 1040),
(5, 'brijeshbhaliya1234@gmail.com', 64, '2021-06-20', 500);

-- --------------------------------------------------------

--
-- Table structure for table `billitem`
--

CREATE TABLE `billitem` (
  `billid` int(5) NOT NULL,
  `fixthaliid` int(5) NOT NULL,
  `itemid` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `discount` int(5) NOT NULL,
  `finalamount` int(5) NOT NULL,
  `referencepaymentid` varchar(25) NOT NULL,
  `via` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billitem`
--

INSERT INTO `billitem` (`billid`, `fixthaliid`, `itemid`, `amount`, `discount`, `finalamount`, `referencepaymentid`, `via`) VALUES
(63, 2, 0, 1040, 0, 1040, 'pay_HPOsAMQJtNL35r', 'Netbanking'),
(63, 0, 65, 1040, 0, 1040, 'pay_HPOsAMQJtNL35r', 'Netbanking'),
(63, 3, 0, 1040, 0, 1040, 'pay_HPOsAMQJtNL35r', 'Netbanking'),
(63, 3, 0, 1040, 0, 1040, 'pay_HPOsAMQJtNL35r', 'Netbanking'),
(64, 2, 0, 500, 0, 500, 'pay_HPPTtwPaYJshJg', 'Netbanking'),
(64, 0, 34, 500, 0, 500, 'pay_HPPTtwPaYJshJg', 'Netbanking'),
(64, 0, 14, 500, 0, 500, 'pay_HPPTtwPaYJshJg', 'Netbanking');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `userid` varchar(100) NOT NULL,
  `fixthaliid` int(5) NOT NULL,
  `itemid` int(5) NOT NULL,
  `cartid` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `discount` int(5) NOT NULL,
  `finalamount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`userid`, `fixthaliid`, `itemid`, `cartid`, `amount`, `discount`, `finalamount`) VALUES
('mangukiyaromit09@gmail.com', 3, 0, 20, 350, 0, 350),
('rokadnancy@gmail.com', 0, 66, 48, 30, 0, 30),
('tanvibabriya302@gmail.com', 3, 0, 112, 350, 0, 350),
('vrutiakbari8320@gmail.com', 3, 0, 113, 350, 0, 350),
('vrutiakbari8320@gmail.com', 0, 49, 114, 30, 0, 30),
('vrutiakbari8320@gmail.com', 0, 42, 115, 70, 0, 70);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `name`, `icon`) VALUES
(5, 'Panjabi ', 'assets/images/iconimg/panjabi03T36.jpeg'),
(6, 'Gujarati ', 'assets/images/iconimg/Gujarati Thali05D43.jpeg'),
(16, 'Maharashtrian ', 'assets/images/iconimg/varachha05L58.jpeg'),
(18, 'Royal Bengali ', 'assets/images/iconimg/royal05O22.jpeg'),
(19, 'Andhra ', 'assets/images/iconimg/andhrathali05I91.jpeg'),
(20, 'ARUNACHAL PRADESH ', 'assets/images/iconimg/ARUNACHAL05H84.jpeg'),
(21, 'Assamesh ', 'assets/images/iconimg/Assameshthali05B38.jpeg'),
(22, 'Bengal ', 'assets/images/iconimg/Bengal thali05U93.jpeg'),
(23, 'Goan ', 'assets/images/iconimg/Goan thali05W98.jpeg'),
(24, 'Bhojpuri ', 'assets/images/iconimg/Bhojpuri thali05R78.jpeg'),
(25, 'Dalma Oriya ', 'assets/images/iconimg/Dalma Oriya thali05O17.jpeg'),
(26, 'Haryanvi ', 'assets/images/iconimg/Haryanvi thali05U32.jpeg'),
(27, 'KERALA SADHYA ', 'assets/images/iconimg/KERALA05E27.jpeg'),
(28, 'Himachali dham ', 'assets/images/iconimg/Himachali05T75.jpeg'),
(29, 'Jharkhand ', 'assets/images/iconimg/Jharkhand thali05S98.jpeg'),
(30, 'Karnataka ', 'assets/images/iconimg/Karnataka thali05L36.jpeg'),
(31, 'Manipuri', 'assets/images/iconimg/Manipuri thali05N79.jpeg'),
(32, 'Meghalaya ', 'assets/images/iconimg/Meghalaya Thali05Q21.jpeg'),
(33, 'MIZORAM', 'assets/images/iconimg/MIZO05C80.jpeg'),
(34, 'Rajasthani ', 'assets/images/iconimg/Rajasthani05L81.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `fixthali`
--

CREATE TABLE `fixthali` (
  `fixthaliid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixthali`
--

INSERT INTO `fixthali` (`fixthaliid`, `name`, `image`, `amount`) VALUES
(1, 'Punjabi Dish', 'assets/images/iconimg/panjabidish03T74.jpeg', 300),
(2, 'South Indian', 'assets/images/iconimg/South Indian06H81.png', 250),
(3, 'Gujarati Kathiawadi Thali', 'assets/images/iconimg/Gujarati06K29.png', 350),
(4, 'Nourth Indian', 'assets/images/fixthaliimg/Nourth Indian03H26.jpeg', 250),
(5, 'Rajasthani Thali', 'assets/images/iconimg/Rajasthani Thali06Q93.png', 350),
(15, 'Maharashtrian Thali', 'assets/images/fixthaliimg/gujarati03X66.jpeg', 60),
(18, 'Andhra thali', 'assets/images/fixthaliimg/andhrathali05L77.jpeg', 200),
(24, 'Bhojpuri thali', 'assets/images/fixthaliimg/Bhojpuri thali05L27.jpeg', 150),
(26, 'Assamesh thali', 'assets/images/fixthaliimg/Assameshthali05E67.jpeg', 280),
(31, 'Haryanvi thali', 'assets/images/fixthaliimg/Haryanvithali05Q96.jpeg', 270),
(32, 'Goan thali', 'assets/images/fixthaliimg/Goan thali05J67.jpeg', 260),
(38, 'Jharkhand thali', 'assets/images/fixthaliimg/Jharkhandthali05B73.jpeg', 250),
(47, 'Sikkimese Thali', 'assets/images/fixthaliimg/SikkimeseThali05R35.jpeg', 220),
(49, 'Telangana Thali', 'assets/images/iconimg/Telangana Thali05N83.jpeg', 200),
(51, 'UTTAR PRADESH', 'assets/images/fixthaliimg/UTTAR PRADESH05Q65.jpeg', 160),
(55, 'MADHYA PRADESH', 'assets/images/fixthaliimg/MADHYA PRADESH05F54.jpeg', 150),
(56, 'NAGALAND THALI', 'assets/images/fixthaliimg/NAGALAND THALI05Q83.jpeg', 250),
(67, 'Himachal Thali', 'assets/images/fixthaliimg/Haryanvithali05U16.jpeg', 150),
(72, 'KUMAONI THALI - UTTARAKHAND', 'assets/images/fixthaliimg/Uttarakhand05K60.jpeg', 250),
(73, 'KANNADIGA OOTA THALI - KARNATA', 'assets/images/fixthaliimg/Karnataka05Q34.jpeg', 220),
(75, 'KERALA SADHYA THALI - KERALA', 'assets/images/fixthaliimg/Kerala05Y33.jpeg', 200),
(76, 'MEITEI - MANIPURI THALI', 'assets/images/fixthaliimg/Manipuri05I97.jpeg', 180),
(79, 'Meghalaya Thali', 'assets/images/fixthaliimg/varachha05K40.jpeg', 130),
(81, 'MIZO CHAWHMEH THALI - MIZORAM', 'assets/images/fixthaliimg/varachha05T18.jpeg', 120),
(82, 'MUI BOROK - TRIPURA', 'assets/images/fixthaliimg/Tripura05Y13.jpeg', 180),
(84, 'CHETTINAD THALI - TAMIL NADU', 'assets/images/fixthaliimg/varachha05V78.jpeg', 110),
(85, 'WEST BENGAL THALI', 'assets/images/fixthaliimg/Bengal05B52.jpeg', 200),
(88, 'ARUNACHAL PRADESH Thali', 'assets/images/fixthaliimg/varachha05X23.jpeg', 180),
(90, 'Royal Bengali Thali', 'assets/images/fixthaliimg/brijesh05R40.jpeg', 350);

-- --------------------------------------------------------

--
-- Table structure for table `fixthaliitemassign`
--

CREATE TABLE `fixthaliitemassign` (
  `fixthaliid` int(5) NOT NULL,
  `itemid` int(5) NOT NULL,
  `fixthaliassignid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixthaliitemassign`
--

INSERT INTO `fixthaliitemassign` (`fixthaliid`, `itemid`, `fixthaliassignid`) VALUES
(3, 63, 4),
(3, 58, 5),
(3, 57, 6),
(3, 56, 7),
(3, 55, 8),
(3, 54, 9),
(3, 53, 10),
(3, 52, 11),
(3, 51, 12),
(3, 50, 13),
(3, 49, 14),
(3, 48, 15),
(3, 47, 16),
(3, 45, 17),
(3, 44, 18),
(3, 43, 19),
(3, 42, 20),
(5, 40, 23),
(5, 39, 24),
(5, 37, 25),
(5, 36, 26),
(5, 35, 27),
(90, 34, 28),
(90, 33, 29),
(90, 32, 30),
(90, 31, 31),
(90, 30, 32),
(90, 29, 33),
(90, 28, 34),
(15, 27, 35),
(15, 26, 36),
(15, 25, 37),
(15, 24, 38),
(15, 23, 39),
(15, 21, 40),
(15, 20, 41),
(3, 18, 43),
(3, 17, 44),
(3, 15, 45),
(3, 12, 46),
(3, 7, 47),
(3, 6, 48),
(1, 3, 49),
(1, 14, 50),
(5, 64, 57),
(1, 72, 58),
(1, 71, 59),
(1, 70, 60),
(1, 69, 61),
(1, 68, 62),
(1, 67, 63),
(1, 66, 64),
(1, 65, 65);

-- --------------------------------------------------------

--
-- Table structure for table `fixthali_rate`
--

CREATE TABLE `fixthali_rate` (
  `fixthaliid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `rateid` int(5) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixthali_rate`
--

INSERT INTO `fixthali_rate` (`fixthaliid`, `userid`, `rateid`, `rate`) VALUES
(5, 'brijeshbhaliya1234@gmail.com', 5, 2),
(5, 'rahuldudhat36@gmail.com', 6, 3),
(5, 'mangukiyaromit09@gmail.com', 7, 4),
(5, 'rajkachhadiya02@gmail.com', 16, 3),
(5, 'desaivishv235@gmail.com', 32, 4),
(5, 'desaivishv235@gmail.com', 40, 4),
(1, 'desaivishv235@gmail.com', 42, 4),
(4, 'desaivishv235@gmail.com', 43, 3),
(3, 'desaivishv235@gmail.com', 44, 4),
(2, 'desaivishv235@gmail.com', 45, 3),
(1, 'dhavalbakaraniya0013@gmail.com', 46, 4),
(15, 'dhavalbakaraniya0013@gmail.com', 47, 3),
(2, 'brijeshbhaliya1234@gmail.com', 57, 4),
(3, 'brijeshbhaliya1234@gmail.com', 58, 3),
(1, 'brijeshbhaliya1234@gmail.com', 59, 3),
(1, 'rajkachhadiya02@gmail.com', 60, 3),
(3, 'rahuldudhat36@gmail.com', 61, 3),
(90, 'brijeshbhaliya1234@gmail.com', 64, 4),
(3, 'vrutiakbari8320@gmail.com', 65, 4);

-- --------------------------------------------------------

--
-- Table structure for table `fixthali_review`
--

CREATE TABLE `fixthali_review` (
  `userid` varchar(50) NOT NULL,
  `fixthaliid` int(5) NOT NULL,
  `reviewid` int(5) NOT NULL,
  `reviewdate` date NOT NULL,
  `reviewtext` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixthali_review`
--

INSERT INTO `fixthali_review` (`userid`, `fixthaliid`, `reviewid`, `reviewdate`, `reviewtext`) VALUES
('brijeshbhaliya1234@gmail.com', 3, 1, '2021-04-13', 'Gujrati Thali served in a thali vary from region to region in the Indian subcontinent and are usually served in small bowls, called katori in India'),
('brijeshbhaliya1234@gmail.com', 90, 5, '2021-05-28', 'Punjabi Dishes served in a thali vary from region to region in the Indian subcontinent and are usually served in small bowls, called katori in India');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `categoryid` int(5) NOT NULL,
  `itemid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`categoryid`, `itemid`, `name`, `image`, `amount`) VALUES
(5, 3, 'Paneer-Tika', 'assets/images/itemimg/panirtika03F55.jpeg', 50),
(6, 6, 'Roti', 'assets/images/itemimg/roti03Y76.jpeg', 20),
(6, 7, 'Smoosa', 'assets/images/itemimg/samosha03B58.png', 40),
(6, 12, 'Gujarati Salad', 'assets/images/itemimg/Gujarati Salad05W10.jpeg', 30),
(5, 14, 'Strawberry Ice-Cream', 'assets/images/itemimg/Ice-Cream05K94.jpeg', 70),
(6, 15, 'Kesar Pista Matho ', 'assets/images/itemimg/Kesar Pista Matho 05L79.jpeg', 130),
(6, 17, 'rajbhog', 'assets/images/itemimg/rajbhog05C40.jpeg', 120),
(6, 18, 'Mixed Fruits & Nuts Shrikhand', 'assets/images/itemimg/varachha05T76.jpeg', 160),
(16, 20, 'Dalbati', 'assets/images/itemimg/Dalbati05Q78.jpeg', 60),
(16, 21, 'Kaju Kothimbir Vadi', 'assets/images/itemimg/Kaju05H17.jpeg', 70),
(16, 23, 'mawa kachori', 'assets/images/itemimg/mawa kachori05Y63.jpeg', 60),
(16, 24, 'kaju-badam Modak', 'assets/images/itemimg/Modak05L56.jpeg', 70),
(16, 25, 'poha', 'assets/images/itemimg/poha05U50.jpeg', 50),
(16, 26, 'Sev-Tamatar', 'assets/images/itemimg/Sev-Tamatar05J22.jpeg', 60),
(16, 27, 'vada-pav', 'assets/images/itemimg/vada-pav05O53.jpeg', 30),
(18, 28, 'Sandesh Sweet', 'assets/images/itemimg/sandesh sweet05W80.jpeg', 110),
(18, 29, 'Chomchom', 'assets/images/itemimg/Chomchom05Y83.jpeg', 120),
(18, 30, 'Kalakand', 'assets/images/itemimg/kalakand05Z70.jpeg', 110),
(22, 31, 'Kheerkadam', 'assets/images/itemimg/Kheerkadam05Y57.jpeg', 70),
(18, 32, 'Malpua', 'assets/images/itemimg/Malpua05L24.jpeg', 90),
(18, 33, 'Misti-doi', 'assets/images/itemimg/Misti-doi05M38.jpeg', 130),
(18, 34, 'Rose Flavouer Rasgulla', 'assets/images/itemimg/rasgullas05X72.jpeg', 150),
(34, 35, 'Bajra ki Rabdi', 'assets/images/itemimg/bajrakirabdi05Q22.jpeg', 120),
(34, 36, 'cream-fruit-salad', 'assets/images/itemimg/cream-fruit-salad05K53.jpeg', 130),
(34, 37, 'dal-bati-churma', 'assets/images/itemimg/dal-bati-churma05F66.jpeg', 100),
(34, 39, 'kadhi', 'assets/images/itemimg/kadhi05S96.jpeg', 60),
(34, 40, 'laal-maas', 'assets/images/itemimg/laal-maas05O64.jpeg', 70),
(6, 42, 'Batata bhajiya', 'assets/images/itemimg/Batata bhajiya05K67.jpeg', 70),
(6, 43, 'Khaman-Dhokla', 'assets/images/itemimg/Dhokla05K36.jpeg', 90),
(6, 44, 'Fafda', 'assets/images/itemimg/Fafda05Y29.jpeg', 70),
(6, 45, 'Jalebi', 'assets/images/itemimg/Jalebi05K70.jpeg', 80),
(6, 47, 'mango-matho-shrikhand', 'assets/images/itemimg/matho05N61.jpeg', 110),
(6, 48, 'Mashala bhat', 'assets/images/itemimg/Mashala bhat05V29.jpeg', 70),
(6, 49, 'Masala-Chaas', 'assets/images/itemimg/Masala-Chaas05R57.jpeg', 30),
(6, 50, 'methina bhajiya', 'assets/images/itemimg/methina bhajiya05Y88.jpeg', 80),
(6, 51, 'mohan-thaal', 'assets/images/itemimg/mohan-thaal05M18.jpeg', 40),
(6, 52, 'Muthia dhokla', 'assets/images/itemimg/Muthia dhokla05Y58.jpeg', 60),
(6, 53, 'patra', 'assets/images/itemimg/patra05E38.jpeg', 60),
(6, 54, 'Patudi', 'assets/images/itemimg/Patudi05V33.jpeg', 70),
(6, 55, 'kesar rabdi', 'assets/images/itemimg/kesar rabdi05H55.jpeg', 110),
(6, 56, 'badam-pista rabdi', 'assets/images/itemimg/badam-pista rabdi05P71.jpeg', 120),
(18, 57, 'ras-malai', 'assets/images/itemimg/ras-malai05M15.jpeg', 120),
(6, 58, 'Shrikhand', 'assets/images/itemimg/Shrikhand05V58.jpeg', 100),
(6, 63, 'Thepla', 'assets/images/itemimg/Thepla05Z25.jpeg', 30),
(34, 64, 'Moong-Ki-Daal-Ka-Halwa', 'assets/images/itemimg/Moong-Ki05P58.jpeg', 80),
(5, 65, 'Fruit Salad', 'assets/images/itemimg/Fruit Salad05G72.jpeg', 60),
(5, 66, 'Fulka Roti', 'assets/images/itemimg/Fulka Roti05U69.jpeg', 30),
(5, 67, 'Mango Lasi', 'assets/images/itemimg/Mango Lasi05D29.jpeg', 50),
(5, 68, 'Pudina Pyaz Kachumber Salad', 'assets/images/itemimg/Pudina Pyaz05B26.jpeg', 30),
(5, 69, 'Punjabi-Aloo-Kadhi', 'assets/images/itemimg/Punjabi Kadhi05H34.jpeg', 70),
(5, 70, 'Punjabi Dahi', 'assets/images/itemimg/Punjabi Dahi05N83.png', 40),
(5, 71, 'Kadhi Pakora', 'assets/images/itemimg/punjabikadhipakora05A91.jpeg', 80),
(5, 72, 'Tandoori Roti', 'assets/images/itemimg/Tandoori Roti05G55.jpeg', 40);

-- --------------------------------------------------------

--
-- Table structure for table `item_rate`
--

CREATE TABLE `item_rate` (
  `itemid` int(5) NOT NULL,
  `userid` varchar(50) NOT NULL,
  `rateid` int(5) NOT NULL,
  `rate` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_rate`
--

INSERT INTO `item_rate` (`itemid`, `userid`, `rateid`, `rate`) VALUES
(7, 'brijeshbhaliya1234@gmail.com', 23, 4),
(6, 'brijeshbhaliya1234@gmail.com', 26, 4),
(3, 'brijeshbhaliya1234@gmail.com', 27, 4),
(7, 'rajkachhadiya02@gmail.com', 28, 3),
(7, 'rahuldudhat36@gmail.com', 29, 3),
(7, 'himuborda@gmail.com', 31, 3),
(7, 'rokadnancy@gmail.com', 33, 4),
(18, 'brijeshbhaliya1234@gmail.com', 34, 4),
(3, 'vrutiakbari8320@gmail.com', 35, 3),
(72, 'brijeshbhaliya1234@gmail.com', 36, 4),
(49, 'brijeshbhaliya1234@gmail.com', 37, 3),
(53, 'brijeshbhaliya1234@gmail.com', 38, 4),
(37, 'brijeshbhaliya1234@gmail.com', 39, 4),
(14, 'tanvibabriya302@gmail.com', 40, 4),
(66, 'tanvibabriya302@gmail.com', 41, 3),
(49, 'vrutiakbari8320@gmail.com', 42, 4),
(67, 'rajkachhadiya02@gmail.com', 43, 4),
(65, 'brijeshbhaliya1234@gmail.com', 44, 3);

-- --------------------------------------------------------

--
-- Table structure for table `item_review`
--

CREATE TABLE `item_review` (
  `userid` varchar(50) NOT NULL,
  `itemid` int(5) NOT NULL,
  `reviewid` int(5) NOT NULL,
  `reviewdate` date NOT NULL,
  `reviewtext` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item_review`
--

INSERT INTO `item_review` (`userid`, `itemid`, `reviewid`, `reviewdate`, `reviewtext`) VALUES
('rahuldudhat36@gmail.com', 7, 8, '2021-04-10', 'Loved the samosas. Thick crispy outer with good amount of sweet yet spicy filling. It comes with a pepper-like spicy chutney to boot. Wonderful product from ...'),
('rajkachhadiya02@gmail.com', 7, 9, '2021-04-10', 'A samosa is a fried or baked pastry with a savory filling, such as spiced potatoes, onions, peas, beef and other meats, or lentils. It may take different forms.'),
('brijeshbhaliya1234@gmail.com', 7, 10, '2021-04-10', 'The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the Samosa. I really Love Mystery Flavours.'),
('himuborda@gmail.com', 7, 12, '2021-04-11', 'Samosa is not just any fried snack in India. It is, for many of us, an emotion, a feeling, and a comforting hot snack on cold ...'),
('vrutiakbari8320@gmail.com', 7, 19, '2021-04-13', 'I really Love Mystery Flavours. The Taste is still in my mouth and I can feel the depth of the taste of the every ingr edients used in the Samosa.'),
('vrutiakbari8320@gmail.com', 3, 21, '2021-06-04', 'I had Panner tikka, Dahi ke sholey, Dal Makhni and Garlic Naan. All the things were ordered nicely. The delivery was on time. Food was warm and Tasty.'),
('brijeshbhaliya1234@gmail.com', 3, 22, '2021-06-04', 'The delivery was on time. Food was warm and Tasty. And Packaging was perfect. It was my first order but I am definitely going to order it again soon.');

-- --------------------------------------------------------

--
-- Table structure for table `landmark`
--

CREATE TABLE `landmark` (
  `areaid` int(5) NOT NULL,
  `landmarkid` int(5) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landmark`
--

INSERT INTO `landmark` (`areaid`, `landmarkid`, `name`) VALUES
(1, 1, 'sudamachok'),
(15, 2, 'Bhimpor Ovaro'),
(2, 3, 'Hirabag'),
(4, 4, 'Gokuldham Soc'),
(7, 5, 'ISKCON Circle'),
(6, 6, 'BRTS office'),
(3, 7, 'Gausala'),
(5, 8, 'Galaxy Circle'),
(8, 9, 'Aeroplane Circle'),
(10, 10, 'Raika Circle'),
(12, 11, 'Mahavir Chowk'),
(15, 12, 'Bhimpore Ovaro'),
(16, 13, 'Marudhar Industries'),
(17, 14, 'Singanpor'),
(18, 15, 'MV circle'),
(20, 16, 'City Plus Multiplex'),
(21, 17, 'Ena Cricket Ground'),
(22, 18, 'Hazira Police Station'),
(23, 19, 'Kadodra Police Station'),
(24, 20, 'Patel Pavbhaji'),
(25, 21, 'Someshwar Mahadev'),
(26, 22, 'Kharoli Bus Station'),
(28, 23, 'G-Mart Mall'),
(27, 24, 'INS Hospital'),
(29, 25, 'Hanumanji Temple'),
(30, 26, 'Gokuldham Texturisers P.L.'),
(31, 27, 'Pandesara GIDC'),
(32, 28, 'Pipload Multi-Specialty Hospital'),
(33, 29, 'Bal-Hanuman Temple'),
(35, 30, 'Anand Peroleum'),
(36, 31, 'Dabholi Circle'),
(1, 32, 'Sudama Chowk'),
(1, 33, 'ABC Circle'),
(1, 34, 'D-Mart Mall'),
(1, 35, 'Maharaja Farm'),
(3, 36, 'Ankur Chowkdi'),
(3, 37, 'Dharam Nager Road'),
(2, 38, 'Lakshmi Hotel'),
(3, 39, 'Bhavani Circle'),
(1, 41, 'SAT circle Uttran Mota Varachha'),
(1, 42, 'Bhojal Ram Chowk'),
(4, 43, 'TWIN Tower'),
(1, 44, 'Reeva icon'),
(5, 45, 'Gujrat Gas Circle Adajan Surat'),
(5, 46, 'Shreeji Arcade'),
(5, 47, 'Honey Park Cross Road'),
(5, 48, 'Honda Showroom'),
(6, 49, 'Showroom Honda'),
(6, 50, 'Gandhi Kutir Yatri Nivas Chapprabhata'),
(6, 51, 'Chaprabhatha Khadi'),
(7, 52, 'Ram Madhi Ovaro'),
(37, 53, 'Anuvrat Dwar'),
(37, 54, 'VNSGU University'),
(37, 55, 'Ghod dod road'),
(12, 56, 'Surat Clock Tower'),
(16, 57, 'Umarwada Water Works'),
(16, 58, 'Globale Textile Market'),
(16, 59, 'Momai Complex'),
(17, 60, 'Katargam Old Wall'),
(17, 61, 'Lakhi Stepwell'),
(17, 62, 'Gajera Circle'),
(17, 63, 'Laxmi Enclave'),
(17, 64, 'Gajera school'),
(22, 65, 'Ichhapore'),
(35, 66, 'Turning Point Complex'),
(35, 67, 'Amby Valley Heights & Arcade'),
(35, 68, 'Silver Luxuria'),
(35, 69, 'Shivalik Heights'),
(35, 70, 'Silver Empire'),
(23, 71, 'Shubham Elegant'),
(23, 72, 'Sahara darwaja'),
(31, 73, 'Bhedvad Khadi'),
(31, 74, 'Piyush Point'),
(30, 75, 'Avadh Kimberly'),
(20, 76, 'sultanabad gate'),
(20, 77, 'Dumas Gam'),
(20, 78, 'Avadh Utopia '),
(20, 79, 'Avadh Carolina'),
(20, 80, 'Weekend Address');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `offerid` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(50) NOT NULL,
  `startdate` date NOT NULL,
  `enddate` date NOT NULL,
  `offeramount` int(5) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offerid`, `name`, `image`, `startdate`, `enddate`, `offeramount`, `status`) VALUES
(2, 'Holi Special', 'assets/images/offerimg/holispecial03A98.jpeg', '2021-03-27', '2021-03-31', 199, 1),
(3, 'Raksha Bandhan ', 'assets/images/offerimg/Raksha Bandhan 06X87.jpeg', '2021-09-19', '2021-09-23', 250, 1),
(4, 'Janmashtami', 'assets/images/offerimg/Janmashtami06Q12.jpeg', '2021-09-28', '2021-10-02', 199, 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `areaid` int(5) NOT NULL,
  `landmarkid` int(5) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `profilepic` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `lastlogin` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`areaid`, `landmarkid`, `userid`, `fname`, `lname`, `gender`, `mobile`, `profilepic`, `password`, `lastlogin`) VALUES
(1, 1, 'brijeshbhaliya1234@gmail.com', 'bris', 'patel', 'male', '8140422048', 'img/userprofile/bris04L41.jpeg', 'brijesh1', '2021-06-20 11:52:43'),
(1, 1, 'desaivishv235@gmail.com', 'vishv', 'desai', 'male', '7990100027', 'img/userprofile/vishv02V12.jpeg', '12345678', '0000-00-00 00:00:00'),
(1, 1, 'dhavalbakaraniya0013@gmail.com', 'dhaval', 'bakaraniya', 'male', '9723248982', 'img/userprofile/dhaval04D86.jpeg', 'dhaval123', '2021-04-01 03:18:09'),
(1, 1, 'himuborda@gmail.com', 'himani', 'borda', 'female', ' 990488203', 'img/userprofile/himani02G41.jpeg', 'himani123', '2021-02-22 03:17:31'),
(35, 2, 'mangukiyaromit09@gmail.com', 'Romit ', 'Mangukiya', 'male', '9913636402', 'img/userprofile/Romit 03J42.jpeg', 'rajugungalo', '2021-06-09 01:16:00'),
(1, 1, 'manthan.sutariya001@gmail.com', 'manthan', 'sutariya', 'male', '7383033330', 'img/userprofile/manthan02P67.jpeg', '123456789m', '0000-00-00 00:00:00'),
(1, 1, 'milangodhani2661@gmail.com', 'milan', 'godhani ', 'male', '7777984610', 'img/userprofile/milan02R79.jpeg', 'milan123', '0000-00-00 00:00:00'),
(1, 1, 'rahuldudhat36@gmail.com', 'rahul', 'dudhat', 'male', '6353443673', 'img/userprofile/rahul02W21.jpg', 'rahul123', '2021-04-10 04:32:35'),
(2, 7, 'rajkachhadiya02@gmail.com', 'raju', 'Kachhadiya', 'male', '6353443673', 'img/userprofile/raju03B75.jpeg', 'rajukaju123', '2021-06-20 06:27:51'),
(1, 1, 'rokadnancy@gmail.com', 'nancy', 'rokad', 'female', '9978913489', 'img/userprofile/nancy02Y96.jpeg', 'nancy123', '2021-06-12 12:38:11'),
(1, 1, 'srushti5946@gmail.com', 'srushti', 'avaiya', 'female', '7984626397', 'img/userprofile/srushti02D83.jpeg', 'sruz123', '0000-00-00 00:00:00'),
(1, 1, 'tanvibabriya302@gmail.com', 'tanvi', 'babariya', 'female', '6354781130', 'img/userprofile/tanvi02E90.jpeg', 'tanvi123', '2021-06-18 10:26:16'),
(1, 1, 'vrutiakbari8320@gmail.com', 'vrutika ', 'akbari', 'female', '8320182915', 'img/userprofile/vrutika02I57.jpg', 'vruti123', '2021-06-12 01:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `worngpass`
--

CREATE TABLE `worngpass` (
  `userid` varchar(50) NOT NULL,
  `wornpassid` int(5) NOT NULL,
  `dt` date NOT NULL,
  `tm` time NOT NULL,
  `cnt` int(2) NOT NULL,
  `endtm` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressid`),
  ADD KEY `fk1` (`userid`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`areaid`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billid`),
  ADD KEY `fk6` (`userid`),
  ADD KEY `fk5` (`addressid`);

--
-- Indexes for table `billitem`
--
ALTER TABLE `billitem`
  ADD KEY `fk14` (`billid`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `fk9` (`userid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `fixthali`
--
ALTER TABLE `fixthali`
  ADD PRIMARY KEY (`fixthaliid`);

--
-- Indexes for table `fixthaliitemassign`
--
ALTER TABLE `fixthaliitemassign`
  ADD PRIMARY KEY (`fixthaliassignid`),
  ADD KEY `fk7` (`fixthaliid`),
  ADD KEY `fk8` (`itemid`);

--
-- Indexes for table `fixthali_rate`
--
ALTER TABLE `fixthali_rate`
  ADD PRIMARY KEY (`rateid`),
  ADD KEY `fk23` (`userid`),
  ADD KEY `fk22` (`fixthaliid`);

--
-- Indexes for table `fixthali_review`
--
ALTER TABLE `fixthali_review`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `fk28` (`userid`),
  ADD KEY `fk29` (`fixthaliid`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`itemid`),
  ADD KEY `fk2` (`categoryid`);

--
-- Indexes for table `item_rate`
--
ALTER TABLE `item_rate`
  ADD PRIMARY KEY (`rateid`),
  ADD KEY `fk21` (`userid`),
  ADD KEY `fk20` (`itemid`);

--
-- Indexes for table `item_review`
--
ALTER TABLE `item_review`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `fk26` (`userid`),
  ADD KEY `fk27` (`itemid`);

--
-- Indexes for table `landmark`
--
ALTER TABLE `landmark`
  ADD PRIMARY KEY (`landmarkid`),
  ADD KEY `relationview` (`areaid`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`offerid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `f4` (`landmarkid`),
  ADD KEY `f3` (`areaid`);

--
-- Indexes for table `worngpass`
--
ALTER TABLE `worngpass`
  ADD PRIMARY KEY (`wornpassid`),
  ADD KEY `fk25` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `areaid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `billid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `fixthali`
--
ALTER TABLE `fixthali`
  MODIFY `fixthaliid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `fixthaliitemassign`
--
ALTER TABLE `fixthaliitemassign`
  MODIFY `fixthaliassignid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `fixthali_rate`
--
ALTER TABLE `fixthali_rate`
  MODIFY `rateid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `fixthali_review`
--
ALTER TABLE `fixthali_review`
  MODIFY `reviewid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `itemid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `item_rate`
--
ALTER TABLE `item_rate`
  MODIFY `rateid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `item_review`
--
ALTER TABLE `item_review`
  MODIFY `reviewid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `landmark`
--
ALTER TABLE `landmark`
  MODIFY `landmarkid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `offerid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `worngpass`
--
ALTER TABLE `worngpass`
  MODIFY `wornpassid` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`addressid`) REFERENCES `address` (`addressid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk6` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `billitem`
--
ALTER TABLE `billitem`
  ADD CONSTRAINT `fk14` FOREIGN KEY (`billid`) REFERENCES `bill` (`billid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk9` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fixthaliitemassign`
--
ALTER TABLE `fixthaliitemassign`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`fixthaliid`) REFERENCES `fixthali` (`fixthaliid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk8` FOREIGN KEY (`itemid`) REFERENCES `item` (`itemid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fixthali_rate`
--
ALTER TABLE `fixthali_rate`
  ADD CONSTRAINT `fk22` FOREIGN KEY (`fixthaliid`) REFERENCES `fixthali` (`fixthaliid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk23` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fixthali_review`
--
ALTER TABLE `fixthali_review`
  ADD CONSTRAINT `fk28` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk29` FOREIGN KEY (`fixthaliid`) REFERENCES `fixthali` (`fixthaliid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item_rate`
--
ALTER TABLE `item_rate`
  ADD CONSTRAINT `fk20` FOREIGN KEY (`itemid`) REFERENCES `item` (`itemid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk21` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item_review`
--
ALTER TABLE `item_review`
  ADD CONSTRAINT `fk26` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk27` FOREIGN KEY (`itemid`) REFERENCES `item` (`itemid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `landmark`
--
ALTER TABLE `landmark`
  ADD CONSTRAINT `relationview` FOREIGN KEY (`areaid`) REFERENCES `area` (`areaid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `register`
--
ALTER TABLE `register`
  ADD CONSTRAINT `f3` FOREIGN KEY (`areaid`) REFERENCES `area` (`areaid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `f4` FOREIGN KEY (`landmarkid`) REFERENCES `landmark` (`landmarkid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `worngpass`
--
ALTER TABLE `worngpass`
  ADD CONSTRAINT `fk25` FOREIGN KEY (`userid`) REFERENCES `register` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
