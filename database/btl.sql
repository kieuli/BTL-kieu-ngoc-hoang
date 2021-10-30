-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2021 lúc 06:27 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_catalog`
--

CREATE TABLE `menu_catalog` (
  `id_ca` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metaTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_catalog`
--

INSERT INTO `menu_catalog` (`id_ca`, `name`, `metaTitle`, `created`, `updated`, `id`) VALUES
(3, 'meo meo', 'meo-meo', '2021-10-29 15:48:42', '2021-10-30 16:24:17', 3),
(4, 'đời sống', 'doi-song', '2021-10-29 15:53:03', '2021-10-30 16:24:25', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_list_blog`
--

CREATE TABLE `menu_list_blog` (
  `id_blog` int(11) NOT NULL,
  `images` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `metaTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_list_blog`
--

INSERT INTO `menu_list_blog` (`id_blog`, `images`, `name`, `metaTitle`, `catalog`, `description`, `content`, `token`, `dateTime`, `id`) VALUES
(0, '', 'kakak', '', '', '', 'sdfghjgn', 'csfcs', '', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `permission` int(1) NOT NULL,
  `activated` tinyint(1) DEFAULT 0,
  `varkey` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `templates` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `token`, `created`, `updated`, `permission`, `activated`, `varkey`, `templates`) VALUES
(3, 'lâm thị kiều', 'likieu2607@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2021-10-24 03:36:03', '2021-10-25 05:58:20', 0, 1, '', 0),
(4, 'li kiều', '1951060022@e.tlu.edu.vn', 'fcea920f7412b5da7be0cf42b8c93759', '', '2021-10-24 03:36:51', '2021-10-25 05:58:40', 0, 1, '', 0),
(5, 'yến ngọc', 'nyn11092001@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2021-10-24 07:18:07', '2021-10-24 07:18:07', 0, 0, '', 0),
(6, 'nguyenyenngoc', 'nguyenyenngoc61ht@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'wfFmPrmxFi', '2021-10-26 01:08:30', '2021-10-26 01:08:30', 0, 0, '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `menu_catalog`
--
ALTER TABLE `menu_catalog`
  ADD PRIMARY KEY (`id_ca`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `menu_list_blog`
--
ALTER TABLE `menu_list_blog`
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `menu_catalog`
--
ALTER TABLE `menu_catalog`
  MODIFY `id_ca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `menu_catalog`
--
ALTER TABLE `menu_catalog`
  ADD CONSTRAINT `menu_catalog_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `menu_list_blog`
--
ALTER TABLE `menu_list_blog`
  ADD CONSTRAINT `menu_list_blog_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
