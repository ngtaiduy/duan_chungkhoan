-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 21, 2021 lúc 04:28 AM
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
-- Cơ sở dữ liệu: `duan_chungkhoan`
--

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_17_063244_alter_table_add_columns', 2),
(8, '2021_12_17_072159_create_roles_table', 3),
(9, '2021_12_17_083037_alter_table_add_column_avatar', 4),
(10, '2021_12_18_034734_create_specialist_info_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('asdsada@gmail.com', '$2y$10$9xDGZDfMjJ639js9GTLHSeCG.egu/RcFfnmau0DohDf0xMrJEo9Wy', '2021-12-20 01:43:31');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Chuyên gia', NULL, NULL),
(2, 'Khách hàng', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `specialist_info`
--

CREATE TABLE `specialist_info` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `score` int(11) NOT NULL DEFAULT 0,
  `view` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `specialist_info`
--

INSERT INTO `specialist_info` (`id`, `user_id`, `score`, `view`, `created_at`, `updated_at`) VALUES
(1, 10, 0, 6, '2021-12-17 21:23:36', '2021-12-17 21:41:07'),
(2, 1, 0, 1, NULL, '2021-12-17 21:41:16'),
(3, 5, 0, 2349, NULL, '2021-12-20 19:56:43'),
(4, 6, 0, 0, NULL, NULL),
(5, 7, 0, 0, NULL, NULL),
(6, 9, 0, 0, NULL, NULL),
(8, 11, 0, 0, '2021-12-19 03:15:19', '2021-12-19 03:15:19'),
(9, 12, 0, 0, '2021-12-19 19:22:07', '2021-12-19 19:22:07');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone_number`, `role_id`, `avatar`) VALUES
(1, '', 'a@gmail.com', NULL, '$2y$10$UevvMepkj1zbRsn0eWtT4OMspFyQUDcUYkTYkN2xciL9bm3fTHuTO', NULL, NULL, NULL, '', 1, ''),
(2, 'Đức Anh Nguyễn', 'aab@gmail.com', NULL, '$2y$10$FGE1Qkdb/fniMwCa/ak1Du0mpEkuwAqC8HO5owpCo.B1UMQrCP5cS', NULL, '2021-12-17 00:10:40', '2021-12-17 01:37:34', '0123456788', 2, 'storage/users/2NstA9lr3vUdgydAJuCHDcGIsbLiZAGFh51uoobs.jpg'),
(3, 'Đức Anh Nguyễn2', 'abc@gmail.com', NULL, '$2y$10$ds5qGJgCHmAMcUryViVwJu3PRv9my7qpy4f0anW9BELEdK68VvZTO', NULL, '2021-12-17 00:28:51', '2021-12-17 00:28:51', NULL, 2, ''),
(5, 'Tài Duy', 'td.nguyen.1997@gmail.com', NULL, '$2y$10$6RGXSCJ09AsR/sD.dDBkDei/6RqDKeIUz00Nk5X82SG8.MA7o23Ey', 'W9CPZDsgl8jyD7iR9KB8p6pZWgYjcrQ4BkLGwtKbdhYrBEyHNASLGh0ifdPR', '2021-12-17 02:02:15', '2021-12-20 19:56:36', '0399089824', 1, 'storage/users/onql8ks2d1GQq8M2YMvAtWxOkEMRCzS3BBq8JaNj.jpg'),
(6, 'zzz', 'zzz@gmail.com', NULL, '$2y$10$YofIHpfpElGmvuf3XqJzVOXihIwUaniS0Y9kEV32h0O7ffIUGsubi', NULL, '2021-12-17 02:44:45', '2021-12-17 02:44:45', NULL, 1, NULL),
(7, 'zzz1', 'zzz1@gmail.com', NULL, '$2y$10$bOtQL0rF.iSn4HLarGeb7eqYG/sxAIrzKThPc7bXOIkO4.VmBIi9a', NULL, '2021-12-17 02:45:11', '2021-12-17 02:45:11', NULL, 1, NULL),
(8, 'asdsada', 'asdsada@gmail.com', NULL, '$2y$10$yT/H.MZs4Z8NmWs5dr2ELesBSiTvtPyFHwBU2Bfx0fp45E/66P4o.', NULL, '2021-12-17 02:47:26', '2021-12-17 02:47:26', NULL, 2, NULL),
(9, 'NTD', 'ntd@gmail.com', NULL, '$2y$10$JKNmUgS.2SP5aFt5hY1Ni.AXxM/tZmOuQkG2/COAVaH5ViVzHetJK', NULL, '2021-12-17 21:22:50', '2021-12-17 21:22:50', NULL, 1, NULL),
(10, 'qqq', 'qqq@gmail.com', NULL, '$2y$10$kQq2pEojODeEFpla5/vWnutJyBvYrx2NW3ZaNaG7T/XWAq7ZSmmoO', NULL, '2021-12-17 21:23:36', '2021-12-17 21:23:36', NULL, 1, NULL),
(11, 'aaaaaaaaaa1', 'hikari.291997@gmail.com', NULL, '$2y$10$qu1bsB8kn2X38pW9ph4egOv7FzASllsyqO4DipmiDxab.Mg.3xXlu', NULL, '2021-12-19 03:15:19', '2021-12-19 03:15:19', NULL, 1, NULL),
(12, '123', '123123@gmail.com', NULL, '$2y$10$uNSqVaJ8NGhbHMhfv/Ah7et6r9s.BQsoiVx2ajJ2Ct39vzsQ1YBvO', NULL, '2021-12-19 19:22:07', '2021-12-19 19:22:07', NULL, 1, NULL),
(13, '147147', '147147@gmail.com', NULL, '$2y$10$Xw4egpsej9pVyLydP6chRe3vEI5iqonoTIA634MDTLw9U9ns.q5ny', NULL, '2021-12-19 21:48:01', '2021-12-19 21:48:01', NULL, 1, NULL),
(14, 'abcdabcd', 'abcdabcd@gmail.com', NULL, '$2y$10$ZFeSUaZxqO14oYzicIfRde1YLW5iMt0VZLUuU1niv.5g5Sr6pA.MO', NULL, '2021-12-19 21:52:52', '2021-12-19 21:52:52', NULL, 1, NULL),
(15, 'hhhhhhhh', 'hhhhhhhh@gmail.com', NULL, '$2y$10$DG5V6/VS/YoVX.nLqIMXVOmwCgwuAeBgcHF3KY40yrtwAlLmdQ5Oi', NULL, '2021-12-19 21:56:42', '2021-12-19 21:56:42', NULL, 1, NULL),
(16, 'hhhhhhhh1', 'hhhhhhhh1@gmail.com', NULL, '$2y$10$1eOwJkdcuua4a.6N5W4OP.URc9i9dyZhRnbLZ5gCgFbl03z/N4jhq', NULL, '2021-12-19 21:57:04', '2021-12-19 21:57:04', NULL, 2, NULL),
(17, 'TD1231', 'Ng.Tai.Duyadsad@gmail.com', NULL, '$2y$10$plEDj3oExEUeZUbiTBlHUODUESbskI8mDUCTTcisQJQMuemSSd4SC', NULL, '2021-12-20 00:34:51', '2021-12-20 00:34:51', NULL, 1, NULL),
(18, '147147', 'qwe@gmail.com', NULL, '$2y$10$8zpNUvIAPMgz6v0DjDtjUOwCSw0rYUc.i0d.YTsIufXka6NLLJNde', NULL, '2021-12-20 01:21:10', '2021-12-20 01:21:10', NULL, 1, NULL),
(19, 'qwerqwer', 'qwerqwer@gmail.com', NULL, '$2y$10$croyVoeLSb2BcDvMflhol.RG2QWgVHgHwIHgjnU.qocRxV7f4oJRW', NULL, '2021-12-20 03:23:38', '2021-12-20 03:23:38', NULL, 2, NULL),
(20, 'fghjfghj', 'fghjfghj@gmail.com', NULL, '$2y$10$kIRDD6LK5c2QBsYXFdN7aOYeX8ssjt03Q6XzR.RSuhitoGGxkQWqC', NULL, '2021-12-20 19:42:33', '2021-12-20 19:42:33', NULL, 1, NULL),
(21, 'fghjfghj1', 'fghjfghj1@gmail.com', NULL, '$2y$10$nO9gOmv97YzmkRAUVZSeXuDXhZsuN4jOVfB.9RxqEDjSkr4bakmT2', NULL, '2021-12-20 19:43:18', '2021-12-20 19:43:18', NULL, 2, NULL),
(22, 'Long', 'long@gmail.com', NULL, '$2y$10$.5F3Z4WZItMcosPO9HhJeO36yAx4BOMWbVov7En3rrvhHBzvDYc0m', NULL, '2021-12-20 19:54:51', '2021-12-20 19:54:51', NULL, 1, NULL),
(23, 'Long1', 'Long1@gmail.com', NULL, '$2y$10$Sx/KPvgkLWdszm7G/mod3u/enOiVBR3CMlP22V05dbIKghXEdFX2W', NULL, '2021-12-20 19:55:25', '2021-12-20 19:55:25', NULL, 2, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `specialist_info`
--
ALTER TABLE `specialist_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specialist_info_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `specialist_info`
--
ALTER TABLE `specialist_info`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `specialist_info`
--
ALTER TABLE `specialist_info`
  ADD CONSTRAINT `specialist_info_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
