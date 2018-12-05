-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2018 lúc 05:30 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `dbwebschool`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `nameAvatar` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `DiaChi` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaSinhVien` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID`, `nameAvatar`, `HoTen`, `Email`, `SDT`, `DiaChi`, `MaSinhVien`, `MatKhau`) VALUES
(1, 'user.png', 'ADMIN', 'admin@gmail.com', 987654321, 'Hà Nội', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baidang`
--

CREATE TABLE `baidang` (
  `id` int(11) NOT NULL,
  `title` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `baidang`
--

INSERT INTO `baidang` (`id`, `title`, `date`, `content`) VALUES
(3, 'NEW POST 1', ' Ngày đăng : 05-12-2018', '<p>new post 1</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baigiang`
--

CREATE TABLE `baigiang` (
  `ID` int(11) NOT NULL,
  `image` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `baigiang`
--

INSERT INTO `baigiang` (`ID`, `image`, `code`, `name`, `mota`, `file`, `pdf`) VALUES
(21, 'Sketch-100x75.png', 'ATM', 'Tổng quan automat', '<p>\r\n\r\nAutomat hữu hạn (p01) là nội dung bài 2 thuộc Bài giảng Lý thuyết tính toán. Bài giảng hướng đến trình bày các vấn đề cơ bản về Accepter hữu hạn đơn định; Accepter hữu hạn không đơn định; sự tương đương giữa Accepter hữu hạn đơn định và Accepter hữu hạn không đơn định;... a<br></p>', '46479913_363417427762878_2100452235690377216_n.jpg', 'Otomat.pdf'),
(22, 'Slide1.JPG', 'ATM', 'Chương 3 : AUTOMAT hữu hạn', '<p>\r\n\r\nBài giảng Lý thuyết automat và ứng dụng - Chương&nbsp; 3 trình bày những kiến thức về: Bổ túc toán, ngôn ngữ và biểu diễn ngôn ngữ, automat hữu hạn và biểu thức chính qui, văn phạm chính qui và các tính chất, văn phạm phi ngữ cảnh. Mời các bạn cùng tham khảo.\r\n\r\n<br></p>', '', ''),
(23, 'Sketch-1-340x290.png', 'VXL', 'Bài giảng Vi xử lý và Lập trình hợp ngữ', '<p>\r\n\r\nBài giảng Vi xử lý gồm 9 chương, có nội dung giới thiệu chung về hệ vi xử lí, vi điều khiển PIC, phần cứng của PIC 16F84 và PIC 16F877A, tập lệnh của PIC 16F877A, hoạt động của bộ định thời, lập trình vi điều khiển PIC 16F84 và PIC 16F877A, truyền thông nối tiếp USART, bộ chuyển đổi tương tự sang số (ADC),...Mời các bạn cùng tham khảo.\r\n\r\n<br></p>', '', 'ĐHCN.Vi Xử Lý-Vi Điều Khiển - Pgs.Ts.Nguyễn Hữu Công, 222 Trang.pdf'),
(27, 'internet-200x150.png', 'TDC', 'Chương 1: Ngôn ngữ lập trình C', '<p>\r\n\r\nNội dung Bài giảng Tin học đại cương - Chương 1: Ngôn ngữ lập trình C giới thiệu về ngôn ngữ C, bộ từ vững C, cấu trúc chương trình C, sử dụng môi trường làm việc C.\r\n\r\n<br></p>', '', ''),
(28, '1', 'CSDL', 'Chương 1 CSDL', '<p>aaaaaaaaaaaabbbbbbbbbbbbbbbbcccccccccc</p>', '', 'Otomat.pdf');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocphan`
--

CREATE TABLE `hocphan` (
  `id` int(11) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hocphan`
--

INSERT INTO `hocphan` (`id`, `name`) VALUES
(4, 'Đợt 1 (2018 - 2019)'),
(5, 'Đợt 2 (2018 - 2019)'),
(6, 'Đợt 3 (2017 - 2018)'),
(7, 'Đợt 4 (2017 - 2018)');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `ID` int(11) NOT NULL,
  `code` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hocphan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`ID`, `code`, `name`, `hocphan`) VALUES
(4, 'ATM', 'MÔN AUTOMAT', 4),
(5, 'TDC', 'MÔN TIN ĐẠI CƯƠNG', 4),
(6, 'VXL', 'MÔN VI XỬ LÝ', 4),
(7, 'CSDL', 'MÔN HỆ CƠ SỞ DỮ LIỆU', 4),
(8, 'CTD', 'MÔN CHƯƠNG TRÌNH DỊCH', 4),
(10, 'TTNT', 'MÔN TRÍ TUỆ NHÂN TẠO', 4),
(15, 'PTW', 'MÔN PHÁT TRIỂN WEB', 4),
(16, 'XLA', 'MÔN XỬ LÝ ẢNH', 5),
(17, 'PTVTKGT', 'MÔN PHÂN TÍCH VÀ THIẾT KẾ GIẢI THUẬT', 5),
(18, 'LTW', 'MÔN LẬP TRÌNH WINDOWS', 5),
(19, 'TA', 'MÔN TIẾNG ANH CHUYÊN NGÀNH CNTT', 5),
(20, 'DAHP', 'ĐỒ ÁN HỌC PHẦN 2', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nganh`
--

CREATE TABLE `nganh` (
  `ID` int(11) NOT NULL,
  `MaNganh` varchar(10) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `TenNganh` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nganh`
--

INSERT INTO `nganh` (`ID`, `MaNganh`, `TenNganh`) VALUES
(1, 'cntt', 'Công Nghệ Thông Tin'),
(2, 'qtkd', 'Quản Trị Kinh Doanh'),
(3, 'dien', 'Điện'),
(4, 'kt', 'Kỹ Thuật');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `nameAvatar` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(11) NOT NULL,
  `DiaChi` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MaSinhVien` int(7) NOT NULL,
  `MatKhau` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`ID`, `nameAvatar`, `HoTen`, `Email`, `SDT`, `DiaChi`, `MaSinhVien`, `MatKhau`) VALUES
(3, 'andrew-garfield-continua-parlare-the-amazing-spider-man-v2-236492.jpg', 'nguyễn văn a', 'a@gmail.com', 974342921, 'Kiêu Kỵ - Gia Lâm - Hà Nội', 1500666, '$2y$10$WwfBgy.cOYPdnJBzjp60i.PZg7NYbAGCvoCdMQNPvcK6aPiadqenS'),
(5, 'user.png', 'phương nguyễn văn', 'nvp21121997@gmail.com', 974342921, 'Kiêu Kỵ - Gia Lâm - Hà Nội', 1500629, '$2y$10$PY2esKBYxmQlrmsC9h2Mh.MXXXB9.hQyArPo1jJ0ZZPT0QUMU1qNy'),
(7, 'pucca.png', 'obama', 'obama@gmail.com', 974342921, 'Kiêu Kỵ - Gia Lâm - Hà Nội', 1500999, '$2y$10$hacirEIJLiiz/KtPKvCqA.KMvgxMdJYf8yUNArFlHyt5fBJK0CySi'),
(10, 'bi-fan-che-trach-nhung-the-amazing-spiderman-van-lam-tiep-phan-3.jpg', 'I am Groot', 'groot@gmail.com', 974342921, 'Kiêu Kỵ - Gia Lâm - Hà Nội', 0, '$2y$10$SLR0njDaQbQ8Xab45JFxjuN7.k2MpQ787GiZNqeLjH45MbQUOcLdK');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `baidang`
--
ALTER TABLE `baidang`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `baigiang`
--
ALTER TABLE `baigiang`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `nganh`
--
ALTER TABLE `nganh`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `baidang`
--
ALTER TABLE `baidang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `baigiang`
--
ALTER TABLE `baigiang`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `hocphan`
--
ALTER TABLE `hocphan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `nganh`
--
ALTER TABLE `nganh`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
