-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2021 lúc 04:48 PM
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
-- Cấu trúc bảng cho bảng `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_catalog`
--

CREATE TABLE `menu_catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metaTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_catalog`
--

INSERT INTO `menu_catalog` (`id`, `name`, `metaTitle`, `created`, `updated`) VALUES
(3, 'la la', 'la-la', '2021-10-31 09:33:40', '2021-11-02 06:24:45'),
(5, 'la la', 'la-la', '2021-10-31 13:41:59', '2021-10-31 13:41:59'),
(6, 'la la', 'la-la', '2021-10-31 13:45:43', '2021-10-31 13:45:43'),
(7, 'la la', 'la-la', '2021-10-31 13:45:44', '2021-10-31 13:45:44'),
(8, 'meo meo', 'meo-meo', '2021-10-31 13:45:46', '2021-10-31 13:45:46'),
(12, 'mạnh cứt', 'manh-cut', '2021-11-02 12:57:07', '2021-11-02 12:57:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_list_blog`
--

CREATE TABLE `menu_list_blog` (
  `id` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metaTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_list_blog`
--

INSERT INTO `menu_list_blog` (`id`, `images`, `name`, `metaTitle`, `catalog`, `description`, `content`, `token`, `updated`, `dateTime`) VALUES
(8, 'public/images/1635857886li.jpg', 'Lâm Thị Kiều', 'Lam-Thi-Kieu', '3', 'gd', '<p>ssss</p>\r\n', 'kJQUUckraZ', '2021-11-02 12:58:06', '02/11/2021'),
(9, 'public/images/16358660562021-10-29.png', 'Lâm Thị Kiều', 'Lam-Thi-Kieu', '3', 'ss', '<p>ss</p>\r\n', 'ukYs552uxu', '2021-11-02 15:14:16', '02/11/2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `permission` int(1) NOT NULL,
  `activated` tinyint(1) DEFAULT 0,
  `varkey` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `templates` int(11) NOT NULL DEFAULT 0,
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avata`, `email`, `password`, `token`, `created`, `updated`, `permission`, `activated`, `varkey`, `templates`, `last_seen`) VALUES
(8, 'lâm', '', 'likieu2607@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'qJpREB1Wpc', '2021-10-31 12:16:15', '2021-11-02 01:47:24', 0, 1, '', 0, '0000-00-00 00:00:00'),
(10, 'admin', '', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'abc1213344s', '2021-10-24 03:36:03', '2021-10-25 05:58:20', 1, 1, '', 0, '0000-00-00 00:00:00'),
(11, 'li', '', 'lllieu2607@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'KrS0DC7IGx', '2021-11-01 15:39:41', '2021-11-01 15:42:19', 0, 1, '', 1, '2021-11-01 22:39:41'),
(13, 'vom', '', 'lk@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'mmK3tIOU71', '2021-11-01 15:41:51', '2021-11-01 15:43:20', 0, 1, '', 0, '2021-11-01 22:41:51'),
(15, 'aa', '', 'ain@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '208c5RtmYF', '2021-11-02 12:57:32', '2021-11-02 12:57:32', 0, 1, '', 0, '2021-11-02 19:57:32');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Chỉ mục cho bảng `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Chỉ mục cho bảng `menu_catalog`
--
ALTER TABLE `menu_catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_list_blog`
--
ALTER TABLE `menu_list_blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menu_catalog`
--
ALTER TABLE `menu_catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `menu_list_blog`
--
ALTER TABLE `menu_list_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
