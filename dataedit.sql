-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 04:21 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_catalog`
--

CREATE TABLE `menu_catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metaTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_catalog`
--

INSERT INTO `menu_catalog` (`id`, `name`, `metaTitle`, `created`, `updated`) VALUES
(1, 'ngoc', 'ngoc', '2021-10-29 01:58:50', '2021-10-29 01:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `menu_list_blog`
--

CREATE TABLE `menu_list_blog` (
  `id` int(11) NOT NULL,
  `images` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metaTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_list_blog`
--

INSERT INTO `menu_list_blog` (`id`, `images`, `name`, `metaTitle`, `catalog`, `description`, `content`, `token`, `dateTime`) VALUES
(4, 'public/images/1635475247z2749690876366_a1f45a1b60c959504f0391d0463ed7eb.jpg', 'chân váy', 'chan-vay', '1', 'Nguyễn Yến Ngọc', '<p>Ss&Aacute;</p>\r\n', 'bxwWlykYsU', '29/10/2021'),
(5, 'public/images/1635475508z2749690876366_a1f45a1b60c959504f0391d0463ed7eb.jpg', 'dấdad', 'dadad', '1', 'adádsa', '<p>d&acirc;d</p>\r\n', 'W30iQX1wyo', '29/10/2021'),
(6, 'public/images/1635476357z2749690876366_a1f45a1b60c959504f0391d0463ed7eb.jpg', 'tesst', 'tesst', '1', 'd', '<p>dasd</p>\r\n', 'BcGmTzJPRI', '29/10/2021'),
(7, 'public/images/16355170376659BAAC-51A8-4D54-9A57-B1034E073298.jpg', '61HT tung tung ta', '61HT-tung-tung-ta', '1', 'Nếu không', '<p>Thi&nbsp;</p>\r\n', 'x3QW5P1iUz', '29/10/2021');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `permission` int(1) NOT NULL,
  `activated` tinyint(1) DEFAULT 0,
  `varkey` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `name`, `email`, `password`, `token`, `created`, `updated`, `permission`, `activated`, `varkey`) VALUES
(3, 'lâm thị kiều', 'likieu2607@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2021-10-24 10:36:03', '2021-10-25 12:58:20', 0, 1, ''),
(4, 'li kiều', '1951060022@e.tlu.edu.vn', 'fcea920f7412b5da7be0cf42b8c93759', '', '2021-10-24 10:36:51', '2021-10-25 12:58:40', 0, 1, ''),
(5, 'yến ngọc', 'nyn11092001@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2021-10-24 14:18:07', '2021-10-24 14:18:07', 0, 0, ''),
(6, 'nguyenyenngoc', 'nguyenyenngoc61ht@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'wfFmPrmxFi', '2021-10-26 08:08:30', '2021-10-26 08:08:30', 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_catalog`
--
ALTER TABLE `menu_catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_list_blog`
--
ALTER TABLE `menu_list_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_catalog`
--
ALTER TABLE `menu_catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_list_blog`
--
ALTER TABLE `menu_list_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
