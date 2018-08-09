-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2015 at 03:29 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petpooja`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `house_no.` varchar(10) NOT NULL,
  `area` varchar(20) NOT NULL,
  `city` varchar(25) NOT NULL DEFAULT 'DELHI',
  `postal_code` int(10) NOT NULL,
  `cus_id` varchar(15) DEFAULT NULL,
  `res_id` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`house_no.`, `area`, `city`, `postal_code`, `cus_id`, `res_id`) VALUES
('1857', 'JIIT', 'Noida', 201307, '1000', NULL),
('113', 'JIIT', 'Noida', 201307, '1001', NULL),
('109', 'JIIT', 'Noida', 201307, '1010', NULL),
('109', 'JIIT', 'Noida', 201307, '1011', NULL),
('D-69', 'Connaught Place', 'Delhi', 110001, NULL, '301'),
('57', 'Pritampura', 'Delhi', 110047, NULL, '302'),
('10', 'Janakpuri', 'Delhi', 110078, NULL, '303'),
('27', 'Khan Market', 'Delhi', 110006, NULL, '304');

-- --------------------------------------------------------

--
-- Table structure for table `card_details`
--

CREATE TABLE IF NOT EXISTS `card_details` (
  `cus_id` int(15) NOT NULL,
  `Name_on_card` varchar(15) NOT NULL,
  `type` varchar(10) NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `date_of_expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card_details`
--

INSERT INTO `card_details` (`cus_id`, `Name_on_card`, `type`, `card_no`, `date_of_expiry`) VALUES
(1011, 'ANKIT GOEL', 'Debit', '1450302823456789', '2015-12-22'),
(1010, 'SHRUTI SAHU', 'Credit', '1450301134567890', '2022-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cus_id` varchar(15) NOT NULL,
  `cus_name` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `cus_phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_id`, `cus_name`, `username`, `cus_phone`) VALUES
('1000', 'Aditya ', 'aadi bhai', 1234567890),
('1001', 'manasvi', 'manu', 2134567890),
('1010', 'shruti', 'bugs', 2147483647),
('1011', 'ankit', 'memphis', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(15) NOT NULL DEFAULT '',
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('manu', '14503003'),
('bugs', '14503011'),
('aadi bhai', '14503027'),
('memphis', '14503028');

-- --------------------------------------------------------

--
-- Table structure for table `menu_item`
--

CREATE TABLE IF NOT EXISTS `menu_item` (
  `res_id` varchar(15) NOT NULL,
  `item_id` varchar(10) NOT NULL,
  `item_name` varchar(15) NOT NULL,
  `item_price` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `cus_id` varchar(15) NOT NULL,
  `item_id` varchar(15) NOT NULL,
  `res_id` varchar(15) NOT NULL,
  `order_id` varchar(15) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` varchar(30) NOT NULL DEFAULT 'it is being prepared',
  `order_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_er`
--

CREATE TABLE IF NOT EXISTS `order_er` (
  `order_id` varchar(15) NOT NULL,
  `item_id` varchar(15) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reastaurant`
--

CREATE TABLE IF NOT EXISTS `reastaurant` (
  `res_id` varchar(15) NOT NULL,
  `res_name` varchar(35) NOT NULL,
  `cuisine` varchar(35) NOT NULL,
  `res_phone` int(10) NOT NULL,
  `food_type` varchar(10) NOT NULL,
  `minimum_order` int(5) NOT NULL DEFAULT '250',
  `hours_open` varchar(20) NOT NULL DEFAULT '10 AM - 10 PM',
  `avg_rating` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reastaurant`
--

INSERT INTO `reastaurant` (`res_id`, `res_name`, `cuisine`, `res_phone`, `food_type`, `minimum_order`, `hours_open`, `avg_rating`) VALUES
('301', 'Dakshinayan', 'South Indian', 987654321, 'veg', 500, '10 AM - 10 PM', 4.2),
('302', 'Agashiye', 'gujarati', 897654321, 'veg', 250, '10 AM - 10 PM', 3.9),
('303', 'Aaheli', 'Bengali', 789654321, 'Non-veg', 350, '10 AM - 10 PM', 4.1),
('304', 'Dhaba', 'punjabi', 678954321, 'Non veg', 250, '10 AM - 10 PM', 4.5);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `res_id` varchar(15) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `r_reviews` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_details`
--
ALTER TABLE `card_details`
  ADD UNIQUE KEY `Name_on_card` (`Name_on_card`),
  ADD UNIQUE KEY `card_no` (`card_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `menu_item`
--
ALTER TABLE `menu_item`
  ADD PRIMARY KEY (`item_id`),
  ADD UNIQUE KEY `item_id` (`item_id`),
  ADD UNIQUE KEY `item_name` (`item_name`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_id` (`order_id`);

--
-- Indexes for table `reastaurant`
--
ALTER TABLE `reastaurant`
  ADD PRIMARY KEY (`res_id`),
  ADD UNIQUE KEY `res_id` (`res_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD UNIQUE KEY `res_id` (`res_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
