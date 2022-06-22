-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 22, 2021 at 10:48 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `puressha`
--

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_don_hang`
--

CREATE TABLE `chi_tiet_don_hang` (
  `MDH` varchar(225) collate utf8_unicode_ci NOT NULL,
  `MCTSP` varchar(225) collate utf8_unicode_ci NOT NULL,
  `GIA_BAN` double NOT NULL,
  `SO_LUONG` int(11) NOT NULL,
  `THANH_TIEN` double NOT NULL,
  PRIMARY KEY  (`MDH`,`MCTSP`),
  KEY `MDH` (`MDH`),
  KEY `MCTSP` (`MCTSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chi_tiet_don_hang`
--

INSERT INTO `chi_tiet_don_hang` (`MDH`, `MCTSP`, `GIA_BAN`, `SO_LUONG`, `THANH_TIEN`) VALUES
('DH001', 'CTSP2003', 250000, 2, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_phieu_nhap`
--

CREATE TABLE `chi_tiet_phieu_nhap` (
  `MPN` varchar(225) collate utf8_unicode_ci NOT NULL,
  `MCTSP` varchar(225) collate utf8_unicode_ci NOT NULL,
  `GIA_NHAP` double NOT NULL,
  `SO_LUONG` int(11) NOT NULL,
  `THANH_TIEN` double NOT NULL,
  PRIMARY KEY  (`MPN`,`MCTSP`),
  KEY `MPN` (`MPN`),
  KEY `MCTSP` (`MCTSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chi_tiet_phieu_nhap`
--

INSERT INTO `chi_tiet_phieu_nhap` (`MPN`, `MCTSP`, `GIA_NHAP`, `SO_LUONG`, `THANH_TIEN`) VALUES
('PN001', 'CTSP1001', 80000, 10, 800000),
('PN002', 'CTSP2001', 200000, 5, 1000000),
('PN002', 'CTSP2002', 350000, 4, 1400000),
('PN002', 'CTSP2003', 200000, 5, 1000000),
('PN003', 'CTSP3001', 200000, 5, 1000000),
('PN003', 'CTSP6001', 250000, 5, 1250000),
('PN004', 'CTSP4001', 200000, 5, 1000000),
('PN005', 'CTSP5001', 200000, 5, 1000000),
('PN005', 'CTSP5002', 250000, 4, 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_san_pham`
--

CREATE TABLE `chi_tiet_san_pham` (
  `MSP` varchar(225) collate utf8_unicode_ci NOT NULL,
  `MCTSP` varchar(225) collate utf8_unicode_ci NOT NULL,
  `SIZE` varchar(225) collate utf8_unicode_ci NOT NULL,
  `GIA_BAN` double NOT NULL,
  `GIA_NHAP` double NOT NULL,
  `SO_LUONG` int(11) NOT NULL,
  `MAU_SAC` varchar(225) collate utf8_unicode_ci NOT NULL,
  `ANH` varchar(225) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`MCTSP`),
  KEY `MSP` (`MSP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chi_tiet_san_pham`
--

INSERT INTO `chi_tiet_san_pham` (`MSP`, `MCTSP`, `SIZE`, `GIA_BAN`, `GIA_NHAP`, `SO_LUONG`, `MAU_SAC`, `ANH`) VALUES
('SP001', 'CTSP1001', 'S', 100000, 80000, 10, 'Cam', 'product-5.jpg'),
('SP002', 'CTSP2001', 'M', 300000, 200000, 5, 'Đen', 'product-4.jpg'),
('SP002', 'CTSP2002', 'L', 400000, 350000, 4, 'Xanh rêu', 'product-3.jpg'),
('SP002', 'CTSP2003', 'S', 250000, 200000, 3, 'Xám', 'product-7.jpg'),
('SP003', 'CTSP3001', 'S', 250000, 200000, 5, 'Xanh đen', 'product-7.png'),
('SP004', 'CTSP4001', 'M', 250000, 200000, 5, 'Xanh nhạt', 'product-8.png'),
('SP005', 'CTSP5001', 'M', 250000, 200000, 5, 'Đen', 'product-9.png'),
('SP005', 'CTSP5002', 'L', 300000, 250000, 4, 'Nâu', 'product-10.png'),
('SP006', 'CTSP6001', 'L', 300000, 250000, 5, 'Nâu', 'product-10.png');

-- --------------------------------------------------------

--
-- Table structure for table `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `MCV` varchar(225) collate utf8_unicode_ci NOT NULL,
  `TEN_CHUC_VU` varchar(225) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`MCV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuc_vu`
--

INSERT INTO `chuc_vu` (`MCV`, `TEN_CHUC_VU`) VALUES
('CV001', 'Admin'),
('CV002', 'Nhân Viên Bán Hàng'),
('CV003', 'Nhân Viên Nhập Hàng'),
('CV004', 'Nhân Viên Giao Hàng');

-- --------------------------------------------------------

--
-- Table structure for table `danh_muc`
--

CREATE TABLE `danh_muc` (
  `MDM` varchar(225) collate utf8_unicode_ci NOT NULL,
  `TEN_DANH_MUC` varchar(225) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`MDM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danh_muc`
--

INSERT INTO `danh_muc` (`MDM`, `TEN_DANH_MUC`) VALUES
('DM001', 'Đầm'),
('DM002', 'Váy'),
('DM003', 'Denim'),
('DM004', 'Tops'),
('DM005', 'Bottoms');

-- --------------------------------------------------------

--
-- Table structure for table `don_hang`
--

CREATE TABLE `don_hang` (
  `MDH` varchar(225) collate utf8_unicode_ci NOT NULL,
  `MKH` varchar(225) collate utf8_unicode_ci NOT NULL,
  `NGAY_TAO_DON` date NOT NULL,
  `DIA_CHI_GIAO_HANG` varchar(225) collate utf8_unicode_ci NOT NULL,
  `HINH_THUC_THANH_TOAN` varchar(225) collate utf8_unicode_ci NOT NULL,
  `TRANG_THAI` varchar(225) collate utf8_unicode_ci NOT NULL,
  `TONG_SO_LUONG` int(11) NOT NULL,
  `TONG_TIEN` double NOT NULL,
  PRIMARY KEY  (`MDH`),
  KEY `MKH` (`MKH`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `don_hang`
--

INSERT INTO `don_hang` (`MDH`, `MKH`, `NGAY_TAO_DON`, `DIA_CHI_GIAO_HANG`, `HINH_THUC_THANH_TOAN`, `TRANG_THAI`, `TONG_SO_LUONG`, `TONG_TIEN`) VALUES
('DH001', 'KH001', '2021-11-22', 'TPHCM', 'Tiền mặt', 'Chưa xử lý', 2, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `MKH` varchar(225) collate utf8_unicode_ci NOT NULL,
  `TEN` varchar(225) collate utf8_unicode_ci NOT NULL,
  `SDT` varchar(225) collate utf8_unicode_ci NOT NULL,
  `MAT_KHAU` varchar(225) collate utf8_unicode_ci default NULL,
  `NGAY_SINH` date default NULL,
  `GIOI_TINH` varchar(225) collate utf8_unicode_ci default NULL,
  `DIA_CHI` varchar(225) collate utf8_unicode_ci default NULL,
  `TRANG_THAI` tinyint(1) NOT NULL,
  PRIMARY KEY  (`MKH`),
  UNIQUE KEY `SDT` (`SDT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`MKH`, `TEN`, `SDT`, `MAT_KHAU`, `NGAY_SINH`, `GIOI_TINH`, `DIA_CHI`, `TRANG_THAI`) VALUES
('KH001', 'Kim', '0973645218', 'kim123', '2003-12-17', 'Nam', 'TPHCM', 1),
('KH002', 'An', '0973458126', 'an123', '2002-12-10', 'Nu', 'TPHCM', 1),
('KH3', 'Nguyễn Thị Yến Nhi', '0978454360', '123', '0000-00-00', '', '', 1),
('KH4', 'Cam', '0124485637', '123', '0000-00-00', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `MNV` varchar(225) collate utf8_unicode_ci NOT NULL,
  `TEN` varchar(225) collate utf8_unicode_ci NOT NULL,
  `SDT` varchar(225) collate utf8_unicode_ci NOT NULL,
  `MAT_KHAU` varchar(225) collate utf8_unicode_ci NOT NULL,
  `NGAY_SINH` date NOT NULL,
  `GIOI_TINH` varchar(225) collate utf8_unicode_ci NOT NULL,
  `DIA_CHI` varchar(225) collate utf8_unicode_ci NOT NULL,
  `CCCD` varchar(225) collate utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(225) collate utf8_unicode_ci NOT NULL,
  `CHUC_VU` varchar(225) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`MNV`),
  KEY `CHUC_VU` (`CHUC_VU`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhan_vien`
--

INSERT INTO `nhan_vien` (`MNV`, `TEN`, `SDT`, `MAT_KHAU`, `NGAY_SINH`, `GIOI_TINH`, `DIA_CHI`, `CCCD`, `EMAIL`, `CHUC_VU`) VALUES
('NV001', 'Nhi', '0987654312', 'nhi123', '2001-10-20', 'Nữ', 'TPHCM', '3119410288', 'nhi@gmail.com', 'CV001'),
('NV002', 'Nhung', '0978654123', 'nhung123', '2001-09-16', 'Nữ', 'TPHCM', '3119410291', 'nhung@gmail.com', 'CV002'),
('NV003', 'Nhu', '0986751234', 'nhu123', '2001-12-13', 'Nữ', 'TPHCM', '3119410293', 'nhu@gmail.com', 'CV002'),
('NV004', 'Ngan', '0967843215', 'ngan123', '2001-01-18', 'Nữ', 'TPHCM', '3119410263', 'ngan@gmail.com', 'CV003'),
('NV005', 'Nguyen', '0967482153', 'nguyen123', '2001-12-26', 'Nam', 'TPHCM', '3119410278', 'nguyen@gmail.com', 'CV003'),
('NV006', 'Thach', '0978365412', 'thach123', '2001-12-04', 'Nam', 'TPHCM', '3119410379', 'thach@gmail.com', 'CV004');

-- --------------------------------------------------------

--
-- Table structure for table `phan_quyen`
--

CREATE TABLE `phan_quyen` (
  `MCV` varchar(225) collate utf8_unicode_ci NOT NULL,
  `QL_NHANVIEN` tinyint(4) NOT NULL,
  `QL_SANPHAM` tinyint(4) NOT NULL,
  `QL_DANHMUC` tinyint(4) NOT NULL,
  `QL_XCC` tinyint(4) NOT NULL,
  `QL_KHUYENMAI` tinyint(4) NOT NULL,
  `QL_TAIKHOAN` tinyint(4) NOT NULL,
  `QL_DONHANG` tinyint(4) NOT NULL,
  `QL_NHAPHANG` tinyint(4) NOT NULL,
  `QL_GIAOHANG` tinyint(4) NOT NULL,
  `XEMSANPHAM` tinyint(4) NOT NULL,
  `THONGKE_DOANHTHU` tinyint(4) NOT NULL,
  PRIMARY KEY  (`MCV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phan_quyen`
--

INSERT INTO `phan_quyen` (`MCV`, `QL_NHANVIEN`, `QL_SANPHAM`, `QL_DANHMUC`, `QL_XCC`, `QL_KHUYENMAI`, `QL_TAIKHOAN`, `QL_DONHANG`, `QL_NHAPHANG`, `QL_GIAOHANG`, `XEMSANPHAM`, `THONGKE_DOANHTHU`) VALUES
('CV001', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1),
('CV002', 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0),
('CV003', 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0),
('CV004', 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phieu_nhap`
--

CREATE TABLE `phieu_nhap` (
  `MPN` varchar(225) collate utf8_unicode_ci NOT NULL,
  `MXCC` varchar(225) collate utf8_unicode_ci NOT NULL,
  `NGAY_NHAP_HANG` date NOT NULL,
  `TONG_TIEN` double NOT NULL,
  `TONG_SO_LUONG` int(11) NOT NULL,
  PRIMARY KEY  (`MPN`),
  KEY `MXCC` (`MXCC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phieu_nhap`
--

INSERT INTO `phieu_nhap` (`MPN`, `MXCC`, `NGAY_NHAP_HANG`, `TONG_TIEN`, `TONG_SO_LUONG`) VALUES
('PN001', 'XCC002', '2021-03-08', 800000, 10),
('PN002', 'XCC004', '2021-06-22', 3400000, 14),
('PN003', 'XCC005', '2021-08-10', 1000000, 5),
('PN004', 'XCC001', '2021-06-07', 1000000, 5),
('PN005', 'XCC003', '2021-10-13', 2000000, 9);

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `MSP` varchar(225) collate utf8_unicode_ci NOT NULL,
  `MDM` varchar(225) collate utf8_unicode_ci NOT NULL,
  `TEN` varchar(225) collate utf8_unicode_ci NOT NULL,
  `MO_TA` varchar(225) collate utf8_unicode_ci NOT NULL,
  `TONG_SO_LUONG` int(11) NOT NULL,
  PRIMARY KEY  (`MSP`),
  KEY `MDM` (`MDM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`MSP`, `MDM`, `TEN`, `MO_TA`, `TONG_SO_LUONG`) VALUES
('SP001', 'DM002', 'Váy hoa nhí', 'ải Hoa lụa. Hàng may 2 lớp có lót full đầm.', 10),
('SP002', 'DM001', 'Đầm body', 'Chất vải mặc nhẹ nhàng, thoáng mát, thoải mái.', 12),
('SP003', 'DM003', 'Quần jean Nút màu trơn Giải trí', 'Kiểu: Quần ống rộng', 5),
('SP004', 'DM003', 'Quần jean nữ Nút Túi Hem thô màu trơn Giải trí', 'Chi tiết: Hem thô, Nút, Túi', 5),
('SP005', 'DM004', 'Áo thun nữ xoắn lại màu trơn Giải trí', 'Sexy mà không sợ lạnh', 5),
('SP006', 'DM005', 'Váy nữ Xếp li màu trơn Giải trí', 'Kiểu: Xếp li', 4);

-- --------------------------------------------------------

--
-- Table structure for table `xuong_cung_cap`
--

CREATE TABLE `xuong_cung_cap` (
  `MXCC` varchar(225) collate utf8_unicode_ci NOT NULL,
  `TEN` varchar(225) collate utf8_unicode_ci NOT NULL,
  `SDT` varchar(225) collate utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(225) collate utf8_unicode_ci NOT NULL,
  `DIA_CHI` varchar(225) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`MXCC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `xuong_cung_cap`
--

INSERT INTO `xuong_cung_cap` (`MXCC`, `TEN`, `SDT`, `EMAIL`, `DIA_CHI`) VALUES
('XCC001', 'SHEIN', '0789347125', 'shein@gmail.com', 'TPHCM'),
('XCC002', 'Fiin', '0985746123', 'fiin@gmail.com', 'Hà Nội'),
('XCC003', 'Laminapparel', '0965839234', 'laminapparel@gmail.com', 'TPHCM'),
('XCC004', 'FLEUR', '0947583136', 'fleur@gmail.com', 'TPHCM'),
('XCC005', 'UFO', '0974829134', 'ufo@gmail.com', 'Hà Nội');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chi_tiet_don_hang`
--
ALTER TABLE `chi_tiet_don_hang`
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_1` FOREIGN KEY (`MDH`) REFERENCES `don_hang` (`MDH`),
  ADD CONSTRAINT `chi_tiet_don_hang_ibfk_2` FOREIGN KEY (`MCTSP`) REFERENCES `chi_tiet_san_pham` (`MCTSP`);

--
-- Constraints for table `chi_tiet_phieu_nhap`
--
ALTER TABLE `chi_tiet_phieu_nhap`
  ADD CONSTRAINT `chi_tiet_phieu_nhap_ibfk_1` FOREIGN KEY (`MPN`) REFERENCES `phieu_nhap` (`MPN`),
  ADD CONSTRAINT `chi_tiet_phieu_nhap_ibfk_2` FOREIGN KEY (`MCTSP`) REFERENCES `chi_tiet_san_pham` (`MCTSP`);

--
-- Constraints for table `chi_tiet_san_pham`
--
ALTER TABLE `chi_tiet_san_pham`
  ADD CONSTRAINT `chi_tiet_san_pham_ibfk_1` FOREIGN KEY (`MSP`) REFERENCES `san_pham` (`MSP`);

--
-- Constraints for table `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `don_hang_ibfk_1` FOREIGN KEY (`MKH`) REFERENCES `khach_hang` (`MKH`);

--
-- Constraints for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD CONSTRAINT `nhan_vien_ibfk_1` FOREIGN KEY (`CHUC_VU`) REFERENCES `chuc_vu` (`MCV`);

--
-- Constraints for table `phieu_nhap`
--
ALTER TABLE `phieu_nhap`
  ADD CONSTRAINT `phieu_nhap_ibfk_1` FOREIGN KEY (`MXCC`) REFERENCES `xuong_cung_cap` (`MXCC`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `san_pham_ibfk_1` FOREIGN KEY (`MDM`) REFERENCES `danh_muc` (`MDM`);
