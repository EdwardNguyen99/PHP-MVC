-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 13, 2020 lúc 06:08 PM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `gamelist`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `game`
--

CREATE TABLE `game` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `game`
--

INSERT INTO `game` (`id`, `title`, `author`, `description`, `image`) VALUES
(1, 'DRAGON BALL Z:KAKAROT', 'BANDAI NAMCO ENTERTAINMENT', 'GAME DOI KHANG HAY NHAT DINH CAO', 'https://product.hstatic.net/1000190106/product/71hkhlbk2vl._ac_sl1500__69b786cd15574f07a7394be5304e784c.jpg'),
(7, 'NBA 2K21', '2K,2K1 SPORTS', 'Now that NBA 2K21 has finally arrived, so we can evaluate how good the game really is, and how new features in MyCAREER, MyTEAM and more expand the series', 'https://cdn.vox-cdn.com/thumbor/Ni0j2R3X2WzspQpfqXYwxCVkRjk=/0x0:1461x1165/1200x800/filters:focal(615x467:847x699)/cdn.vox-cdn.com/uploads/chorus_image/image/67010016/2k21.0.png'),
(3, 'FIFA 20', 'EA Sports', 'GAME TRI TUE GIAI TRI', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSZOt_MVhEAKb3brb3RnCBSNy0U3yfrb6QZgA&usqp=CAU'),
(4, 'SONIC ', 'SEGA', 'Game Sonic Forces hé l? kh? n?ng tùy bi?n nhân v?t ?a d?ng\r\n\r\nV?i Sonic Forces, b?n s? không ph?i s? d?ng m?i nhân v?t Sonic nh? tr??c mà s? ???c ?i?u khi?n nhi?u nhân v?t khác nhau.M?i ?ây, hãng Sega ?ã ti?t l? r?ng t?a game m?i v? nhím xanh Sonic là Sonic Forces s? cho phép ng??i ch?i tùy ch?nh nhân v?t. ?ây là l?n ??u tiên trong series game Sonic, ng??i ch?i ???c t?o nên m?t nhân v?t cho riêng mình.\r\nTrong game, có t?ng c?ng 7 hình m?u nhân v?t mà b?n có th? l?a ch?n v?i nh?ng kh? n?ng riêng bi?t bao g?m:\r\nWolf: T? ??ng l?y nh?ng chi?c nh?n khi ? g?n chúngRabbit: Kéo dài th?i gian b?t t? sau khi nh?n sát th??ngCat: Gi? l?i m?t chi?c nh?n sau khi nh?n sát th??ngDog: Kh?i ??ng l?i v?i 5 chi?c nh?n sau khi ch?tBear: Th?i bay k? ??ch ra xaBird: Bay cao v?i kh? n?ng nh?y ?ôiHedgehog: Thu th?p nh?n sau khi nh?n sát th??ng\r\nSonic Forces d? ki?n s? ra m?t trên Nintendo Switch, PlayStation 4, Xbox One và PC vào cu?i n?m nay.', 'https://i.ytimg.com/vi/ZHrGWSGOVLc/maxresdefault.jpg'),
(6, 'DIABLO 3', 'Blizzard Entertainment', 'Action Adventure', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRUmeks1C8EmAong99YfxnXXgaBpng2wHHcRQ&usqp=CAU');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `game`
--
ALTER TABLE `game`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
