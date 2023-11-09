-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2022 lúc 04:16 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
USE webpage;

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webpage`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
--

CREATE TABLE `admins` (
  `adminID` varchar(10) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `address` varchar(30) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`adminID`, `password`, `fullname`, `address`, `telephone`, `email`) VALUES
('Admin001', '12345678', 'Ha Quang Thong', 'Tp.HCM', '0901805330', 'Thongha@gmail.com'),
('Admin002', '12345678', 'Le Gia Khanh', 'Tp.HCM', '0909032131', 'Thongha@gmail.com'),
('Admin003', '12345678', 'Phan Ba Thien', 'Tp.HCM', '0903129321', 'phanbathien700@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `categoryID` varchar(10) CHARACTER SET utf8 NOT NULL,
  `categoryName` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
('K_01', 'Kitchen'),
('L_01', 'Lighting'),
('O_01', 'Outdoor'),
('S_01', 'Sofas'),
('W_01', 'Wall & Desore');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `username` varchar(30) CHARACTER SET utf8 NOT NULL,
  `password` varchar(30) CHARACTER SET utf8 NOT NULL,
  `fullname` varchar(30) CHARACTER SET utf8 NOT NULL,
  `address` varchar(30) CHARACTER SET utf8 NOT NULL,
  `phone` varchar(30) CHARACTER SET utf8 NOT NULL,
  `email` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `productID` varchar(10) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productPrice` float NOT NULL,
  `productDetails` varchar(3000) DEFAULT NULL,
  `productImage1` varchar(30) NOT NULL,
  `trademarkId` varchar(10) CHARACTER SET utf8 NOT NULL,
  `categoryID` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reciept`
--

CREATE TABLE `reciept` (
  `RecieptId` varchar(10) NOT NULL,
  `RecieptD_Id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recieptdetail`
--

CREATE TABLE `recieptdetail` (
  `RecieptD_Id` varchar(10) NOT NULL,
  `Datebuy` datetime DEFAULT NULL,
  `Quantity` int(11) NOT NULL,
  `TotalPrice` varchar(45) DEFAULT NULL,
  `StaffId` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `staff`
--

CREATE TABLE `staff` (
  `StaffId` varchar(10) NOT NULL,
  `Fullname` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `Position` varchar(20) DEFAULT NULL,
  `DoB` datetime DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `Phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trademark`
--

CREATE TABLE `trademark` (
  `trademarkId` varchar(10) CHARACTER SET utf8 NOT NULL,
  `trademarkName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `trademark`
--

INSERT INTO `trademark` (`trademarkId`, `trademarkName`) VALUES
('B01', 'Benchmade Modern'),
('B02', 'Tov Furniture'),
('B03', 'Tov Furniture'),
('B04', 'Article'),
('B05', 'Poly & Bark');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thong Ha Ha', 'thongha1204@gmail.com', 1, NULL, '$2y$10$/KtlhKpFjnKdPpqGNuJQPO8o/dArgORQzrel5Eb5f9M5og20raXeq', NULL, '2022-12-08 20:40:13', '2022-12-08 20:40:13'),
(2, 'User', 'User@gmail.com', NULL, NULL, '$2y$10$QxZ8FyKwk2eQlmvWxMdK3uzySTc/OKWtFhQfFV.fVmscyBZ/5bHqO', NULL, '2022-12-10 23:10:38', '2022-12-10 23:10:38');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminID`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`),
  ADD KEY `products_ibfk_1` (`trademarkId`),
  ADD KEY `products_ibfk_2` (`categoryID`);

--
-- Chỉ mục cho bảng `reciept`
--
ALTER TABLE `reciept`
  ADD PRIMARY KEY (`RecieptId`),
  ADD KEY `fk_ReDId` (`RecieptD_Id`);

--
-- Chỉ mục cho bảng `recieptdetail`
--
ALTER TABLE `recieptdetail`
  ADD PRIMARY KEY (`RecieptD_Id`),
  ADD UNIQUE KEY `StaffId` (`StaffId`);

--
-- Chỉ mục cho bảng `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffId`);

--
-- Chỉ mục cho bảng `trademark`
--
ALTER TABLE `trademark`
  ADD PRIMARY KEY (`trademarkId`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`trademarkId`) REFERENCES `trademark` (`trademarkId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `reciept`
--
ALTER TABLE `reciept`
  ADD CONSTRAINT `fk_ReDId` FOREIGN KEY (`RecieptD_Id`) REFERENCES `recieptdetail` (`RecieptD_Id`);

--
-- Các ràng buộc cho bảng `recieptdetail`
--
ALTER TABLE `recieptdetail`
  ADD CONSTRAINT `fk_StaId` FOREIGN KEY (`StaffId`) REFERENCES `staff` (`StaffId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
