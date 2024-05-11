-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2024 at 04:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `image`) VALUES
(11, 'گوشی موبایل', '1706813504-banner_CircleCategories_FgGs07_040c7036-93f8-4a6d-8ff5-dedb88183674.png'),
(12, 'لوازم جانبی', '1706813691-banner_CircleCategories_bKYtgp_4aff6a4f-2ed8-4153-8368-b73fb6f16906.png'),
(13, 'هدفون و هندزفری', '1706813714-banner_CircleCategories_ZF2YTy_bc869e82-f53c-40bb-b05c-65c5139585ee.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `username` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_name`, `price`, `username`) VALUES
(3, 'گوشی موبایل شیائومی', 7799000, 'zahra');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `summray` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `description` text COLLATE utf8_persian_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` text COLLATE utf8_persian_ci NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `summray`, `description`, `price`, `image`, `cat_id`) VALUES
(23, 'گوشی موبایل شیائومی', 'گوشی موبایل شیائومی', 'گوشی موبایل شیائومی مدل redmi note 12 4G ظرفیت 128 گیگابایت-رم8گیگابایت', 7799000, '1706813941-small_product-TLP-19992_49b7937f-ed04-4792-b036-a19f54cf8622.png', 11),
(24, 'گوشی موبایل سامسونگ مدل   Galaxy S21 FE 5G', 'گوشی موبایل سامسونگ مدل   Galaxy S21 FE 5G', 'گوشی موبایل سامسونگ مدل   Galaxy S21 FE 5G ظرفیت 256 گیگابیت- رم 8 گیگابیت', 21899000, '1706814094-small_product-TLP-4107_ae2b6508-4f39-4568-98d1-d397f996f929.png', 11),
(25, 'گوشی موبایل سامسونگ گلکسی S23 Ultra 5G', 'گوشی موبایل سامسونگ گلکسی S23 Ultra 5G', 'گوشی موبایل سامسونگ گلکسی S23 Ultra 5G  ظرفیت256 گیگابایت رم 12 گیگابایت-ویتنام', 53299000, '1706814203-small_product-TLP-14997_74c7c219-40ea-456c-9f61-e826505fcec4.png', 11),
(26, 'کاور گوشی سامسونگ گلکسی A14', 'کاور گوشی سامسونگ گلکسی A14', 'کاور گوشی سامسونگ گلکسی A14 مدل سیلیکونی محافظ لنز دار', 62000, '1706814322-small_product-TLP-21605_abad116a-9318-4235-b067-a6edcb9da418.png', 12),
(27, 'گلس گوشی شیائومی redmi note 12', 'گلس گوشی شیائومی redmi note 12', 'گلس گوشی شیائومی redmi note 12  مذل  super d', 200000, '1706814419-small_product-TLP-27169_1275545d-10f4-4cb8-803d-8084371908b4.png', 12),
(28, 'کابل تبدیل usb-c', 'کابل تبدیل usb-c', 'کابل تبدیل usb-c  به لایتنینگ اپل طول 1 متر', 540000, '1706814496-small_product-TLP-2816_0bf9baf1-5359-4400-bc87-b61938c3f93e.png', 12),
(29, 'فلش مموری سن دیسک', 'فلش مموری سن دیسک', 'فلش  مدل مموری سن دیسک Ultra Flair Cz73', 230000, '1706814570-small_product-TLP-2373.png', 12),
(30, 'هندزفری بی سیم', 'هندزفری بی سیم', 'هندزفری بی سیم کیو سی وای مدل t13', 685000, '1706814680-small_product-TLP-3163_7e1fe252-59b5-4330-a642-2e9bea6bfbd6.png', 13),
(31, 'هندزفری بی سیم انکر', 'هندزفری بی سیم انکر', 'هندزفری بی سیم انکر مدل soundcore life u2i', 834000, '1706814778-small_product-TLP-24896_a5967fd2-8278-4320-b448-6b09b076b003.png', 13),
(32, ' هدفون بی سیم ', ' هدفون بی سیم ', ' هدفون بی سیم زیلوت مدل B570', 899000, '1706814838-small_product-TLP-6248_8a5ebdb4-c979-4e21-a08f-bb0a81b5b33c.png', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `role` varchar(10) COLLATE utf8_persian_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '2424', 'admin'),
(5, 'zahra', 'zahra@gmail.com', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
