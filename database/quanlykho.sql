-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: sql307.byetcluster.com
-- Thời gian đã tạo: Th10 25, 2021 lúc 11:47 PM
-- Phiên bản máy phục vụ: 5.7.35-38
-- Phiên bản PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `epiz_30064721_quanlykho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(5) NOT NULL,
  `masanpham` varchar(30) NOT NULL,
  `tensanpham` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `gianhap` int(10) NOT NULL,
  `giaban` int(10) NOT NULL,
  `tonkho` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `masanpham`, `tensanpham`, `gianhap`, `giaban`, `tonkho`) VALUES
(1, 'DT-OPPO-RN5', 'Dien Thoai Oppo Reno5 Marvel 1', 8590000, 9190000, 200),
(2, 'DT-SAMSUNG-ZF3256', 'Dien Thoai Samsung Galaxy Z Fold3 5G 256GB', 37990000, 41990000, 2),
(3, 'DT-SAMSUNG-ZF3512', 'Dien Thoai Samsung Galaxy Z Fold3 5G 512GB', 38990000, 43990000, 10),
(4, 'DT-XIAOMI-11LNE', 'Dien Thoai Xiaomi 11 Lite 5G NE', 9000000, 9490000, 5),
(7, 'TN-AIRPODKD', 'Tai nghe Bluetooth AirPods Pro Wireless Charge Apple MWP22', 4590000, 6870000, 20),
(8, 'TN-BEATSST3KD', 'Tai nghe chup tai Beats Studio3 Wireless MX422/ MX432', 5900000, 7100000, 5),
(9, 'TNH-SANDISK200', 'The nho MicroSD 200 GB SanDisk Class 10', 889000, 1110000, 100),
(10, 'DT-SAMSUNGZF3256', 'Dien Thoai Samsung Galaxy Z Flip3 5G 256GB', 19800000, 22000000, 5),
(17, 'LT-DELLVOSTRO5581', 'LAPTOP DELL VOSTRO 5581 8GB RAM 256BG SSD NVIDIA RTX 3080', 22980000, 25990000, 7),
(18, '1', '1', 1, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '$2y$10$wWLaDvHJJ1vC4EIH0vj7re0jNcEyD1LJD/cobqskyD/rmfuB6E8Fq', '2021-10-14 08:39:15'),
(2, 'vantoan', '$2y$10$0BrxTAlYMC3VLv2aJnrp3uLpzyIMAuTmuSkIgfKXaoOyccKUbFBJK', '2021-10-15 09:49:19'),
(3, 'nhom9', '$2y$10$WIhC1TdSJV1Q5imU2qrlXurOYqMBRoJSW5g5ADyNdcxseIl.AKUJ6', '2021-10-16 04:50:46'),
(4, 'tuiii', '$2y$10$/D1VavdrOVnrX0q1amLNl.NV2swlEhAWWlJf95Rq7N74jS0DEOJbu', '2021-10-16 09:43:06'),
(5, 'thuthu', '$2y$10$M2W2wUhNtIQQ0kAc7ONNL.WFu7M5opsqKnlJP/QpZCx9iluoAJwCS', '2021-10-17 07:48:59'),
(6, 'vncon', '$2y$10$1Mzg7YbwEcoXwBl2XWPVj.Y5jTyGAiHNHG1uiy6h5GTBkBy4CxWnO', '2021-10-18 21:43:31'),
(7, 'dellnhe', '$2y$10$Ih50yE2TLEm8To0P9n8VEegW4vHjNQJgHoXTf3rmtJ9Rg7J5lPTOq', '2021-10-19 09:20:21'),
(8, 'vn', '$2y$10$bNotqDCnGPMDjJxgxrRG7eO5S8FcYJZCJY6yUM9QSGtb3pkuZ6sjm', '2021-10-20 02:04:51'),
(9, 'tamtam', '$2y$10$SVQc1GLpsCguoa4TakfzAeSfr5UhiXhP/O0v6bmuU/iyal52EZ0Fe', '2021-10-21 03:14:54'),
(10, 'tung1234', '$2y$10$msqrtKBLvLCBecRgBqvDy.HBWhj5YGKKY0xHsWcTAnIM0rxqW28x2', '2021-10-21 03:16:52');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
