-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2021 lúc 05:48 PM
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
-- Cơ sở dữ liệu: `qlth`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diem`
--

CREATE TABLE `diem` (
  `Mahs` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mamh` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Diem` decimal(3,2) DEFAULT NULL,
  `Hocky` int(11) DEFAULT NULL,
  `Namhoc` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `diem`
--

INSERT INTO `diem` (`Mahs`, `Mamh`, `Diem`, `Hocky`, `Namhoc`) VALUES
('H01', 'M01', '8.25', 2, '2020-2021'),
('H01', 'M02', '8.25', 2, '2020-2021'),
('H01', 'M03', '7.25', 2, '2020-2021'),
('H01', 'M04', '6.75', 2, '2020-2021'),
('H01', 'M05', '8.25', 2, '2020-2021'),
('H01', 'M06', '8.00', 2, '2020-2021'),
('H02', 'M01', '8.75', 2, '2020-2021'),
('H02', 'M02', '7.50', 2, '2020-2021'),
('H02', 'M03', '9.00', 2, '2020-2021'),
('H02', 'M04', '9.25', 2, '2020-2021'),
('H02', 'M05', '8.00', 2, '2020-2021'),
('H02', 'M06', '7.25', 2, '2020-2021'),
('H03', 'M01', '8.50', 2, '2020-2021'),
('H03', 'M02', '7.00', 2, '2020-2021'),
('H03', 'M03', '8.75', 2, '2020-2021'),
('H03', 'M04', '9.25', 2, '2020-2021'),
('H03', 'M05', '8.00', 2, '2020-2021'),
('H03', 'M06', '9.00', 2, '2020-2021'),
('H04', 'M01', '8.25', 2, '2020-2021'),
('H04', 'M02', '6.75', 2, '2020-2021'),
('H04', 'M03', '9.25', 2, '2020-2021'),
('H04', 'M07', '9.00', 2, '2020-2021'),
('H04', 'M08', '9.50', 2, '2020-2021'),
('H04', 'M09', '8.00', 2, '2020-2021'),
('H05', 'M01', '6.25', 2, '2020-2021'),
('H05', 'M02', '6.50', 2, '2020-2021'),
('H05', 'M03', '9.00', 2, '2020-2021'),
('H05', 'M07', '8.50', 2, '2020-2021'),
('H05', 'M08', '7.50', 2, '2020-2021'),
('H05', 'M09', '8.75', 2, '2020-2021'),
('H06', 'M01', '8.50', 2, '2020-2021'),
('H06', 'M02', '7.50', 2, '2020-2021'),
('H06', 'M03', '8.75', 2, '2020-2021'),
('H06', 'M07', '8.50', 2, '2020-2021'),
('H06', 'M08', '7.75', 2, '2020-2021'),
('H06', 'M09', '8.00', 2, '2020-2021'),
('H07', 'M01', '8.75', 2, '2020-2021'),
('H07', 'M02', '7.75', 2, '2020-2021'),
('H07', 'M03', '9.50', 2, '2020-2021'),
('H07', 'M04', '8.50', 2, '2020-2021'),
('H07', 'M05', '8.00', 2, '2020-2021'),
('H07', 'M06', '7.75', 2, '2020-2021'),
('H08', 'M01', '9.75', 2, '2020-2021'),
('H08', 'M02', '7.50', 2, '2020-2021'),
('H08', 'M03', '8.50', 2, '2020-2021'),
('H08', 'M04', '7.75', 2, '2020-2021'),
('H08', 'M05', '8.25', 2, '2020-2021'),
('H08', 'M06', '8.75', 2, '2020-2021'),
('H09', 'M01', '7.75', 2, '2020-2021'),
('H09', 'M02', '6.75', 2, '2020-2021'),
('H09', 'M03', '9.50', 2, '2020-2021'),
('H09', 'M04', '7.50', 2, '2020-2021'),
('H09', 'M05', '7.25', 2, '2020-2021'),
('H09', 'M06', '7.75', 2, '2020-2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giao_vien`
--

CREATE TABLE `giao_vien` (
  `Magv` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hotengv` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `Gioitinh` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Diachi` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Chucvu` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sdt` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giao_vien`
--

INSERT INTO `giao_vien` (`Magv`, `Hotengv`, `Ngaysinh`, `Gioitinh`, `Diachi`, `Chucvu`, `Sdt`) VALUES
('GV01', 'Kiều Văn Sinh', '1988-02-12', 'Nam', 'Hà Nam', 'giáo viên', '097485581'),
('GV02', 'Nguyễn Thị Thúy', '1978-10-09', 'Nữ', 'Hà Nội', 'giáo viên', '036287661'),
('GV03', 'Trần Hải Anh', '1989-10-01', 'Nữ', 'Nam Định', 'giáo viên', '0976381618'),
('GV04', 'Lý Anh Tuấn', '1995-09-20', 'Nam', 'Quảng Ninh', 'giáo viên', '0368194618'),
('GV05', 'Trần Thị Loan', '1992-12-07', 'Nữ', 'Hải Dương', 'giáo viên', '0926471588'),
('GV06', 'Nguyễn Thị Lý', '1982-05-30', 'Nữ', 'Hà Nội', 'giáo viên chủ nhiệm', '0367876184'),
('GV07', 'Lê Nguyễn Tuấn Thành', '1985-02-20', 'Nam', 'Hải Phòng', 'giáo viên chủ nhiệm', '0978246178'),
('GV08', 'Hoàng Thị Oanh', '1995-06-01', 'Nữ', 'Thái Nguyên', 'giáo viên chủ nhiệm', '0361864816'),
('GV09', 'Quách Tuấn Dũng', '1980-09-08', 'Nam', 'Thanh Hóa', 'giáo viên', '0972864816'),
('GV10', 'Huỳnh Văn Quốc', '1987-11-14', 'Nam', 'Nam Định', 'giáo viên', '097614576'),
('GV11', 'Đoàn Văn Diệp', '1989-06-20', 'Nam', 'Hà Nội', 'giáo viên', '036925897');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoc_sinh`
--

CREATE TABLE `hoc_sinh` (
  `Mahs` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Hotenhs` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `Gioitinh` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sdtph` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Mal` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Hocky` int(11) DEFAULT NULL,
  `Namhoc` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoc_sinh`
--

INSERT INTO `hoc_sinh` (`Mahs`, `Hotenhs`, `Ngaysinh`, `Gioitinh`, `Sdtph`, `Mal`, `Hocky`, `Namhoc`) VALUES
('H01', 'Trần Tú Anh', '2006-12-01', 'Nam', '099862561', 'L01', 1, '2021-2022'),
('H02', 'Nguyễn Tuấn Dũng', '2006-01-22', 'Nam', '036268812', 'L01', 1, '2021-2022'),
('H03', 'Nguyễn Thị Loan', '2006-03-24', 'Nữ', '097637515', 'L01', 1, '2021-2022'),
('H04', 'Đỗ Văn Phong', '2005-06-12', 'Nam', '09871648761', 'L02', 1, '2021-2022'),
('H05', 'Hoàng Văn Tuấn', '2005-09-26', 'Nam', '035815864', 'L02', 1, '2021-2022'),
('H06', 'Hoàng Quỳnh Trang', '2005-10-12', 'Nữ', '0368149619', 'L02', 1, '2021-2022'),
('H07', 'Trần Văn Hải', '2004-03-26', 'Nam', '092761852', 'L03', 1, '2021-2022'),
('H08', 'Lê Đức Anh', '2004-12-12', 'Nam', '0921851576', 'L03', 1, '2021-2022'),
('H09', 'Đỗ Thị Hoa', '2004-11-30', 'Nữ', '036168185', 'L03', 1, '2021-2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichday`
--

CREATE TABLE `lichday` (
  `Magv` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mamh` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mal` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tiet` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngay` date DEFAULT NULL,
  `Hocky` int(11) DEFAULT NULL,
  `Namhoc` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichday`
--

INSERT INTO `lichday` (`Magv`, `Mamh`, `Mal`, `Tiet`, `Ngay`, `Hocky`, `Namhoc`) VALUES
('GV01', 'M01', 'L01', 'Tiết 1,2,3', '2021-11-01', 1, '2021-2022'),
('GV01', 'M01', 'L02', 'Tiết 4,5,6', '2021-11-01', 1, '2021-2022'),
('GV01', 'M01', 'L03', 'Tiết 1,2,3', '2021-11-03', 1, '2021-2022'),
('GV01', 'M12', 'L01', 'Tiết 4,5,6', '2021-11-06', 1, '2021-2022'),
('GV01', 'M12', 'L02', 'Tiết 1,2,3', '2021-11-06', 1, '2021-2022'),
('GV01', 'M12', 'L03', 'Tiết 4,5,6', '2021-11-04', 1, '2021-2022'),
('GV02', 'M02', 'L01', 'Tiết 4,5,6', '2021-11-01', 1, '2021-2022'),
('GV02', 'M02', 'L02', 'Tiết 1,2,3', '2021-11-01', 1, '2021-2022'),
('GV02', 'M02', 'L03', 'Tiết 4,5,6', '2021-11-03', 1, '2021-2022'),
('GV03', 'M03', 'L01', 'Tiết 1,2,3', '2021-11-02', 1, '2021-2022'),
('GV03', 'M03', 'L02', 'Tiết 4,5,6', '2021-11-02', 1, '2021-2022'),
('GV03', 'M03', 'L03', 'Tiết 1,2,3', '2021-11-05', 1, '2021-2022'),
('GV04', 'M04', 'L01', 'Tiết 4,5,6', '2021-11-02', 1, '2021-2022'),
('GV04', 'M04', 'L02', 'Tiết 1,2,3', '2021-11-02', 1, '2021-2022'),
('GV04', 'M04', 'L03', 'Tiết 4,5,6', '2021-11-05', 1, '2021-2022'),
('GV05', 'M05', 'L01', 'Tiết 1,2,3', '2021-11-03', 1, '2021-2022'),
('GV05', 'M05', 'L02', 'Tiết 4,5,6', '2021-11-03', 1, '2021-2022'),
('GV05', 'M05', 'L03', 'Tiết 1,2,3', '2021-11-01', 1, '2021-2022'),
('GV06', 'M06', 'L01', 'Tiết 1,2,3', '2021-11-04', 1, '2021-2022'),
('GV06', 'M06', 'L02', 'Tiết 4,5,6', '2021-11-04', 1, '2021-2022'),
('GV06', 'M06', 'L03', 'Tiết 1,2,3', '2021-11-06', 1, '2021-2022'),
('GV07', 'M07', 'L01', 'Tiết 4,5,6', '2021-11-03', 1, '2021-2022'),
('GV07', 'M07', 'L02', 'Tiết 1,2,3', '2021-11-03', 1, '2021-2022'),
('GV07', 'M07', 'L03', 'Tiết 4,5,6', '2021-11-01', 1, '2021-2022'),
('GV08', 'M08', 'L01', 'Tiết 4,5,6', '2021-11-04', 1, '2021-2022'),
('GV08', 'M08', 'L02', 'Tiết 1,2,3', '2021-11-04', 1, '2021-2022'),
('GV08', 'M08', 'L03', 'Tiết 4,5,6', '2021-11-06', 1, '2021-2022'),
('GV09', 'M09', 'L01', 'Tiết 1,2,3', '2021-11-05', 1, '2021-2022'),
('GV09', 'M09', 'L02', 'Tiết 4,5,6', '2021-11-05', 1, '2021-2022'),
('GV09', 'M09', 'L03', 'Tiết 1,2,3', '2021-11-02', 1, '2021-2022'),
('GV10', 'M10', 'L01', 'Tiết 4,5,6', '2021-11-05', 1, '2021-2022'),
('GV10', 'M10', 'L02', 'Tiết 1,2,3', '2021-11-05', 1, '2021-2022'),
('GV10', 'M10', 'L03', 'Tiết 4,5,6', '2021-11-02', 1, '2021-2022'),
('GV11', 'M11', 'L01', 'Tiết 1,2,3', '2021-11-06', 1, '2021-2022'),
('GV11', 'M11', 'L02', 'Tiết 4,5,6', '2021-11-06', 1, '2021-2022'),
('GV11', 'M11', 'L03', 'Tiết 1,2,3', '2021-11-04', 1, '2021-2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lop`
--

CREATE TABLE `lop` (
  `Mal` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ten_l` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sohs` int(11) DEFAULT NULL,
  `Magv` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lop`
--

INSERT INTO `lop` (`Mal`, `Ten_l`, `Sohs`, `Magv`) VALUES
('L01', '10A1', 32, 'GV06'),
('L02', '11B1', 36, 'GV07'),
('L03', '12C1', 38, 'GV08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

CREATE TABLE `monhoc` (
  `Mamh` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tenmh` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`Mamh`, `Tenmh`) VALUES
('M01', 'Toán'),
('M02', 'Ngữ Văn'),
('M03', 'Tiếng Anh'),
('M04', 'Vật Lý'),
('M05', 'Hóa Học'),
('M06', 'Sinh Học'),
('M07', 'Địa Lí'),
('M08', 'Lịch Sử'),
('M09', 'Giáo dục công dân'),
('M10', 'Tin Học'),
('M11', 'Công Nghệ'),
('M12', 'Thể dục');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thi`
--

CREATE TABLE `thi` (
  `Mahs` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Mamh` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sbd` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Ngaythi` date DEFAULT NULL,
  `Phongthi` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Giothi` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thi`
--

INSERT INTO `thi` (`Mahs`, `Mamh`, `Sbd`, `Ngaythi`, `Phongthi`, `Giothi`) VALUES
('H01', 'M01', 'H01MH01', '2022-01-30', '10A1', '13:30:00'),
('H01', 'M02', 'H01MH02', '2022-01-30', '10A1', '15:30:00'),
('H01', 'M03', 'H01MH03', '2022-02-03', '10A1', '07:30:00'),
('H01', 'M04', 'H01MH04', '2022-02-05', '10A1', '07:30:00'),
('H02', 'M01', 'H02MH01', '2022-01-30', '10A1', '13:30:00'),
('H02', 'M02', 'H02MH02', '2022-01-30', '10A1', '15:30:00'),
('H02', 'M03', 'H02MH03', '2022-02-03', '10A1', '07:30:00'),
('H02', 'M04', 'H02MH04', '2022-02-05', '10A1', '07:30:00'),
('H03', 'M01', 'H03MH01', '2022-01-30', '10A1', '13:30:00'),
('H03', 'M02', 'H03MH02', '2022-01-30', '10A1', '15:30:00'),
('H03', 'M03', 'H03MH03', '2022-02-03', '10A1', '07:30:00'),
('H03', 'M04', 'H03MH04', '2022-02-05', '10A1', '07:30:00'),
('H04', 'M01', 'H04MH01', '2022-01-30', '11B1', '13:30:00'),
('H04', 'M02', 'H04MH02', '2022-01-30', '11B1', '15:30:00'),
('H04', 'M03', 'H04MH03', '2022-02-03', '11B1', '07:30:00'),
('H04', 'M06', 'H04MH06', '2022-02-05', '11B1', '07:30:00'),
('H05', 'M01', 'H05MH01', '2022-01-30', '11B1', '13:30:00'),
('H05', 'M02', 'H05MH02', '2022-01-30', '11B1', '15:30:00'),
('H05', 'M03', 'H05MH03', '2022-02-03', '11B1', '07:30:00'),
('H05', 'M06', 'H05MH06', '2022-02-05', '11B1', '07:30:00'),
('H06', 'M01', 'H06MH01', '2022-01-30', '11B1', '13:30:00'),
('H06', 'M02', 'H06MH02', '2022-01-30', '11B1', '15:30:00'),
('H06', 'M03', 'H06MH03', '2022-02-03', '11B1', '07:30:00'),
('H06', 'M06', 'H06MH06', '2022-02-05', '11B1', '07:30:00'),
('H07', 'M01', 'H07MH01', '2022-01-30', '12C1', '13:30:00'),
('H07', 'M02', 'H07MH02', '2022-01-30', '12C1', '15:30:00'),
('H07', 'M03', 'H07MH03', '2022-02-03', '12CB1', '07:30:00'),
('H07', 'M08', 'H04MH08', '2022-02-05', '12CB1', '07:30:00'),
('H08', 'M01', 'H08MH01', '2022-01-30', '12C1', '13:30:00'),
('H08', 'M02', 'H08MH02', '2022-01-30', '12C1', '15:30:00'),
('H08', 'M03', 'H08MH03', '2022-02-03', '12CB1', '07:30:00'),
('H08', 'M08', 'H08MH08', '2022-02-05', '12CB1', '07:30:00'),
('H09', 'M01', 'H09MH01', '2022-01-30', '12C1', '13:30:00'),
('H09', 'M02', 'H09MH02', '2022-01-30', '12C1', '15:30:00'),
('H09', 'M03', 'H09MH03', '2022-02-03', '12C1', '07:30:00'),
('H09', 'M08', 'H09MH08', '2022-02-05', '12C1', '07:30:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `ID` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Accout` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Pass` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`ID`, `Accout`, `Pass`, `Level`) VALUES
('AD01', 'Trần Hải Đức', 'ducad01', 1),
('AD02', 'Lý Văn Chính', 'chinhad02', 1),
('AD03', 'Nguyễn Quỳnh Ánh', 'anhad03', 1),
('GV01', 'Kiều Văn Sinh', 'sinhgv01', 3),
('GV02', 'Nguyễn Thị Thúy', 'thuygv02', 3),
('GV03', 'Trần Hải Anh', 'anhgv03', 3),
('GV04', 'Lý Anh Tuấn', 'tuangv04', 3),
('GV05', 'Trần Thị Loan', 'loangv05', 3),
('GV06', 'Nguyễn Thị Lý', 'lygv06', 2),
('GV07', 'Lê Nguyễn Tuấn Thành', 'thanhgv07', 2),
('GV08', 'Hoàng Thị Oanh', 'oanhgv08', 2),
('GV09', 'Quách Tuấn Dũng', 'dunggv09', 3),
('GV10', 'Huỳnh Văn Quốc ', 'quocgv10', 3),
('GV11', 'Đoàn Văn Diệp', 'diepgv11', 3),
('H01', 'Trần Tú Anh', 'anhh01', 4),
('H02', 'Nguyễn Tuấn Dũng', 'dungh02', 4),
('H03', 'Nguyễn Thị Loan', 'loanh03', 4),
('H04', 'Đỗ Văn Phong', 'phongh04', 4),
('H05', 'Hoàng Văn Tuấn', 'tuanh05', 4),
('H06', 'Hoàng Quỳnh Trang', 'trangh06', 4),
('H07', 'Trần Văn Hải ', 'haih07', 4),
('H08', 'Lê Đức Anh', 'anhh08', 4),
('H09', 'Đỗ Thị Hoa', 'hoah09', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `diem`
--
ALTER TABLE `diem`
  ADD PRIMARY KEY (`Mahs`,`Mamh`),
  ADD KEY `Mamh` (`Mamh`);

--
-- Chỉ mục cho bảng `giao_vien`
--
ALTER TABLE `giao_vien`
  ADD PRIMARY KEY (`Magv`);

--
-- Chỉ mục cho bảng `hoc_sinh`
--
ALTER TABLE `hoc_sinh`
  ADD PRIMARY KEY (`Mahs`),
  ADD KEY `Mal` (`Mal`);

--
-- Chỉ mục cho bảng `lichday`
--
ALTER TABLE `lichday`
  ADD PRIMARY KEY (`Magv`,`Mamh`,`Mal`),
  ADD KEY `Mamh` (`Mamh`),
  ADD KEY `Mal` (`Mal`);

--
-- Chỉ mục cho bảng `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`Mal`),
  ADD KEY `Magv` (`Magv`);

--
-- Chỉ mục cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`Mamh`);

--
-- Chỉ mục cho bảng `thi`
--
ALTER TABLE `thi`
  ADD PRIMARY KEY (`Mahs`,`Mamh`),
  ADD KEY `Mamh` (`Mamh`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `diem`
--
ALTER TABLE `diem`
  ADD CONSTRAINT `diem_ibfk_1` FOREIGN KEY (`Mahs`) REFERENCES `hoc_sinh` (`Mahs`),
  ADD CONSTRAINT `diem_ibfk_2` FOREIGN KEY (`Mamh`) REFERENCES `monhoc` (`Mamh`);

--
-- Các ràng buộc cho bảng `hoc_sinh`
--
ALTER TABLE `hoc_sinh`
  ADD CONSTRAINT `hoc_sinh_ibfk_1` FOREIGN KEY (`Mal`) REFERENCES `lop` (`Mal`);

--
-- Các ràng buộc cho bảng `lichday`
--
ALTER TABLE `lichday`
  ADD CONSTRAINT `lichday_ibfk_1` FOREIGN KEY (`Magv`) REFERENCES `giao_vien` (`Magv`),
  ADD CONSTRAINT `lichday_ibfk_2` FOREIGN KEY (`Mamh`) REFERENCES `monhoc` (`Mamh`),
  ADD CONSTRAINT `lichday_ibfk_3` FOREIGN KEY (`Mal`) REFERENCES `lop` (`Mal`);

--
-- Các ràng buộc cho bảng `lop`
--
ALTER TABLE `lop`
  ADD CONSTRAINT `lop_ibfk_1` FOREIGN KEY (`Magv`) REFERENCES `giao_vien` (`Magv`);

--
-- Các ràng buộc cho bảng `thi`
--
ALTER TABLE `thi`
  ADD CONSTRAINT `thi_ibfk_1` FOREIGN KEY (`Mahs`) REFERENCES `hoc_sinh` (`Mahs`),
  ADD CONSTRAINT `thi_ibfk_2` FOREIGN KEY (`Mamh`) REFERENCES `monhoc` (`Mamh`),
  ADD CONSTRAINT `thi_ibfk_3` FOREIGN KEY (`Mahs`) REFERENCES `hoc_sinh` (`Mahs`),
  ADD CONSTRAINT `thi_ibfk_4` FOREIGN KEY (`Mamh`) REFERENCES `monhoc` (`Mamh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
