-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 06:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `product_code` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created-at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_code`, `status`, `created-at`) VALUES
(1, 'BAG', '200', '001', '1', '2023-08-15 16:24:28'),
(4, 'Glue', '20', '002', '1', '2023-08-15 16:25:59'),
(5, 'MUG', '60', '003', '1', '2023-08-15 16:27:35'),
(6, 'Pencil', '10', '004', '1', '2023-08-15 16:29:28'),
(7, 'Sharpner', '10', '005', '1', '2023-08-15 16:34:26'),
(8, 'Sharpner', '10', '005', '1', '2023-08-15 16:35:25'),
(9, 'Color Pencil', '50', '007', '1', '2023-08-15 17:31:13'),
(10, 'Note Book', '25', '008', '1', '2023-08-15 17:33:05'),
(11, 'Eraser', '6', '009', '0', '2023-08-15 22:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `invoice` varchar(20) NOT NULL,
  `vendor_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `invoice`, `vendor_id`, `product_id`, `product_price`, `quantity`, `created_at`) VALUES
(1, 'invoice', 0, 0, 'product_price', 'quantity', '2023-08-17 00:19:25'),
(2, 'invoice', 0, 0, 'product_price', 'quantity', '2023-08-17 00:20:28'),
(3, '002', 1, 8, '10', '23', '2023-08-17 00:24:46'),
(4, '003', 4, 4, '20', '6', '2023-08-17 20:22:23'),
(5, '004', 1, 6, '10', '25', '2023-08-17 21:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

CREATE TABLE `sell` (
  `id` int(11) NOT NULL,
  `sellinvoice` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `sellinvoice`, `name`, `mobile`, `address`, `product_id`, `product_price`, `quantity`, `created_at`) VALUES
(1, '', '', '', '', 0, '', '', '2023-08-17 14:22:49'),
(2, '', '', '', '', 0, '', '', '2023-08-17 14:28:21'),
(3, 'AP2001', 'Ravi', '1234567890', 'dummyaddressxyz', 6, '10', '5', '2023-08-17 14:34:15'),
(4, 'AP2002', 'sonu', '1234787890', 'dummyaddressxyz22', 9, '50', '4', '2023-08-17 14:36:01'),
(6, 'AP2004', 'David', '645645764', 'dummyaddressxyz223', 6, '10', '4', '2023-08-17 14:42:41'),
(7, 'AP2005', 'Gracy', '5346767878', 'dummyaddressxyz908', 10, '25', '5', '2023-08-17 21:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'apple', '123456', '2023-08-15 12:10:15');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `vendor_code` varchar(20) NOT NULL,
  `vendor_name` varchar(20) NOT NULL,
  `shop_name` varchar(20) NOT NULL,
  `vendor_mobile` varchar(20) NOT NULL,
  `vendor_address` varchar(20) NOT NULL,
  `status` varchar(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`id`, `vendor_code`, `vendor_name`, `shop_name`, `vendor_mobile`, `vendor_address`, `status`, `created_at`) VALUES
(1, '001', 'dummyvendorname1  ', 'dummyshopname1', 'dummynumber122  ', 'dummyaddress1', '1', '2023-08-15 23:32:28'),
(2, '002', 'dummyvendorname2', 'dummyshopname2', 'dummynumber133', 'dummyaddress2', '0', '2023-08-15 23:33:49'),
(3, '003', 'dummyvendorname3', 'dummyshopname3', 'dummynumber144', 'dummyaddress3', '1', '2023-08-15 23:35:43'),
(4, '004', 'dummyvendorname4', 'dummyshopname4', 'dummynumber155', 'dummyaddress4', '1', '2023-08-16 00:05:53'),
(5, '005', 'dummyvendorname5', 'dummyshopname5', 'dummynumber166', 'dummyaddress5', '0', '2023-08-16 00:08:01'),
(6, 'cscdc', 'dsvsvs', 'vs vs s', ' s s s s', ' dvdswfcc', '0', '2023-08-16 18:45:24'),
(7, 'fewfw', 'dssds', 'sfsf', 'ssfs', 'sfsfs', '0', '2023-08-16 18:48:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell`
--
ALTER TABLE `sell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sell`
--
ALTER TABLE `sell`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
