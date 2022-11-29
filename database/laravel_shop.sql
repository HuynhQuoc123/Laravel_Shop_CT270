-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2022 lúc 03:50 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banners`
--

INSERT INTO `banners` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'slider1.jpg', NULL, NULL),
(2, 'slider2.jpg', NULL, NULL),
(3, 'slider3.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Guitar', '2022-10-18 22:33:58', '2022-10-18 22:33:58'),
(2, 'Piano', '2022-10-18 22:34:03', '2022-10-18 22:34:03'),
(3, 'Drum', '2022-10-18 22:34:07', '2022-10-18 22:34:07');

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
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_product` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `id_product`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', 'Martin-D21_640x640-2.jpg', '2022-10-25 00:07:40', '2022-10-25 00:07:40'),
(2, '1', 'Martin-D21_640x640-3.jpg', '2022-10-25 00:07:40', '2022-10-25 00:07:40'),
(3, '1', 'Martin-D21_640x640-4.jpg', '2022-10-25 00:07:40', '2022-10-25 00:07:40'),
(4, '2', 'Fender American Ultra Telecaster_640x640-2.jpg', '2022-10-25 00:07:58', '2022-10-25 00:07:58'),
(5, '2', 'Fender American Ultra Telecaster_640x640-3.jpg', '2022-10-25 00:07:58', '2022-10-25 00:07:58'),
(6, '2', 'Fender American Ultra Telecaster_640x640-4.jpg', '2022-10-25 00:07:58', '2022-10-25 00:07:58'),
(7, '3', 'Fender California Redondo_640x640-2.jpg', '2022-10-25 00:08:16', '2022-10-25 00:08:16'),
(8, '3', 'Fender California Redondo_640x640-3.jpg', '2022-10-25 00:08:16', '2022-10-25 00:08:16'),
(9, '3', 'Fender California Redondo_640x640-4.jpg', '2022-10-25 00:08:16', '2022-10-25 00:08:16');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_09_15_073842_create_categories_table', 1),
(6, '2022_09_21_015537_create_banners_table', 1),
(7, '2022_10_04_023304_create_products_table', 1),
(8, '2022_10_04_071406_create_images_table', 1),
(9, '2022_10_19_023345_create_roles_table', 1),
(10, '2022_10_19_023407_create_user_roles_table', 1),
(11, '2022_10_20_080146_add_paid_to_users_table', 2),
(12, '2022_10_20_080415_add_paid_to_users_table', 3),
(13, '2022_10_25_081747_edit_users_table', 4),
(14, '2022_10_25_082651_edit_users_table', 5),
(15, '2022_10_25_083037_create_roles_table', 6);

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
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_category` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `id_category`, `name`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, '1', 'Martin Standard Series D-21', '68,300,000', 'Martin-D21_640x640-1.jpg', '2022-10-18 22:36:32', '2022-10-18 22:36:32'),
(2, '1', 'Fender American Ultra', '55,000,000', 'Fender American Ultra Telecaster_640x640-1.jpg', '2022-10-18 22:37:50', '2022-10-25 01:55:28'),
(3, '1', 'Fender California Redondo', '21,780,000', 'Fender California Redondo_640x640-1.jpg', '2022-10-18 22:38:54', '2022-10-25 01:55:37'),
(4, '3', 'Fame Maple Standard', '9,000,000', 'fame-maple-standard-jungle-set-schlagzeug-tuerkis-1.jpg', '2022-10-18 22:44:05', '2022-10-18 22:44:05'),
(5, '1', 'Squier Classic Vibe 70s', '11,990,000', 'Squier Classic Vibe 70s Jazz 5-String_640x640-1.jpg', '2022-10-18 22:44:51', '2022-10-18 22:44:51'),
(6, '1', 'Fender CN-140SCE Nylon', '11,000,000', 'Fender CN-140SCE Nylon Classical_640x640-1.jpg', '2022-10-18 22:46:05', '2022-10-18 22:46:05'),
(7, '2', 'Kawai SK-EX', '4,975,000,000', 'Shigeru-kawai-SK-ex-1.jpg', '2022-10-18 22:46:52', '2022-10-18 22:46:52'),
(8, '2', 'Yamaha YDP-103', '17,000,000', 'Yamaha YDP-103 Digital Home_640x640-1.jpg', '2022-10-18 22:48:00', '2022-10-18 22:48:00'),
(9, '1', 'Epiphone PR-5E', '8,000,000', 'Epiphone PR-5E_640x640-1.jpg', '2022-10-18 22:48:49', '2022-10-18 22:48:49'),
(10, '3', 'Pearl Export EXX705NBR/C', '18,000,000', 'pearl-export-exx705nbr-c-high-voltage-blue-1.jpg', '2022-10-18 22:49:57', '2022-10-18 22:49:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Customer', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_role` bigint(20) UNSIGNED NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `id_role`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$c6XVKixug9HBlZ/ccn41sOTpXnzyGjCg8ptulxoYBMlyfxapeRUya', NULL, '2022-10-18 21:16:34', '2022-10-18 21:16:34', 1),
(2, 'User', 'user@gmail.com', NULL, '$2y$10$x7l0KD2pwrPVw5ZDsxGUoOBh4lJUrACGqFzbJqJpxGJ5cz/BPhUNu', NULL, '2022-10-20 01:05:55', '2022-10-20 01:05:55', 2),
(3, 'User1', 'user1@gmail.com', NULL, '$2y$10$zUKfWuarYMXPpSHO3h3c8Orj8fdWu9PEVUzSju.b8D07tljKLtPKy', NULL, '2022-10-20 02:01:33', '2022-10-20 02:01:33', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_products_categories_1` (`id_category`);


--
-- Chỉ mục cho bảng `users`
--

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_roles_users_1` (`id_role`),
  ADD UNIQUE KEY `users_email_unique` (`email`);
  


ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_images_products_1` (`id_product`);
  
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);


--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;



ALTER TABLE `images`
  ADD CONSTRAINT `fk_images_products_1` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);


ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_categories_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`);


ALTER TABLE `users`
  ADD CONSTRAINT `fk_roles_users_1` FOREIGN KEY (`id_role`) REFERENCES `roles` (`id`);
  

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

COMMIT;
