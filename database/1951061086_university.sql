-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 06, 2022 lúc 08:23 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `1951061086_university`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giangvien`
--

CREATE TABLE `giangvien` (
  `magv` char(5) NOT NULL,
  `hovaten` varchar(30) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` bit(2) NOT NULL,
  `trinhdo` varchar(30) NOT NULL,
  `chuyenmon` varchar(30) NOT NULL,
  `hocham` varchar(30) NOT NULL,
  `hocvi` varchar(30) NOT NULL,
  `coquan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `giangvien`
--

INSERT INTO `giangvien` (`magv`, `hovaten`, `ngaysinh`, `gioitinh`, `trinhdo`, `chuyenmon`, `hocham`, `hocvi`, `coquan`) VALUES
('AB123', 'Ngô Văn Tùng', '2012-01-07', b'01', 'Tốt Nghiệp Tiến Sĩ', 'Kế Toán', 'Giáo Sư', 'Tiến Sĩ', 'Đại Học Thủy Lợi'),
('VQ222', 'Tưởng Đăng Vương Quốc', '2001-01-09', b'00', 'Tốt Nghiệp Tiến Sĩ', 'Triết học', 'Phó Giáo Sư', 'Tiếng Sĩ', 'Đại Học Thủy Lợi');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`magv`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
