-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 08, 2018 lúc 08:46 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.0.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tdtuan123`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `configs`
--

CREATE TABLE `configs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `configs`
--

INSERT INTO `configs` (`id`, `name`, `content`, `description`, `order`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'config-contact', '<p style=\"text-align: center;\">\r\n	<span style=\"color:#ffffff;\"><strong><em>Hotline hỗ trợ tư vấn và phản hồi ý kiến</em></strong><em>:&nbsp;</em></span>\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<span style=\"color:#ffa800;\"><span style=\"font-size:20px;\"><strong>094.22.88.567 -&nbsp;0167.70.78.929 -&nbsp;091.113.02.95</strong></span></span>\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<span style=\"color:#ffffff;\"><strong><em>Hân hạnh được phục vụ quý khách hàng.!</em></strong></span>\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<span style=\"color:#ffffff;\"><strong><em>157 Nguyễn Thượng Hiền, P.6 Quận Bình Thạnh, TPHCM</em></strong></span>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>', NULL, NULL, 1, NULL, '2018-06-06 13:46:15'),
(3, 'email-receive', 'athunguyen.dn@gmail.com', 'Cấu Hình Email Nhận Báo Giá', 1, 1, '2017-08-26 06:53:20', '2018-05-16 02:36:00'),
(4, 'email-sender-subject', 'Re:Topten Immigration', 'Cấu Hình Subject Gửi Khách Hàng', 2, 1, '2017-08-26 06:53:20', '2018-05-11 10:13:42'),
(5, 'email-sender-from', 'Topten Immigration', 'Cấu Hình From Gửi Khách Hàng', 3, 1, '2017-08-26 06:53:21', '2018-05-11 10:13:42'),
(6, 'email-receive-subject', 'LIÊN HỆ MỚI TỪ KHÁCH HÀNG', 'Cấu Hình Subject Nhận Báo Giá', 4, 1, '2017-08-26 06:53:21', '2018-05-11 10:13:42'),
(7, 'email-receive-from', 'Topten Immigration', 'Cấu Hình From Nhận Báo Giá', 5, 1, '2017-08-26 06:53:21', '2018-05-11 10:13:42'),
(8, 'email-signatures', '', 'Cấu Hình Chữ Ký', 7, 1, '2017-08-26 06:53:21', '2018-05-11 10:13:42'),
(9, 'email-sender-content', '<h1 style=\"margin-left:0cm; margin-right:0cm\">\r\n	<span style=\"font-size:24pt\">Chúng Tôi Đã Nhận Được Mail, Xin Chân Thành Cảm Ơn</span>\r\n</h1>', 'Cấu Hình Nội Dung Gửi Khách Hàng', 6, 1, '2017-08-26 06:53:21', '2018-04-28 10:34:48'),
(13, 'config-phone', '0962.038.484', NULL, NULL, 1, NULL, '2018-08-07 02:25:13'),
(14, 'config-email', 'diencoduyduong@gmail.com', NULL, NULL, 1, NULL, '2018-06-06 16:23:38'),
(15, 'config-address', '157 Nguyễn Thượng Hiền, P.6 Quận Bình Thạnh, TPHCM', NULL, NULL, 1, NULL, '2018-06-06 13:22:55'),
(16, 'config-name', NULL, NULL, NULL, 1, NULL, '2018-06-06 13:22:55'),
(18, 'config-introduce', '<p>\r\n	Công ty Bất động sản Tuấn 123 tiền thân là Công ty TNHH Tuấn 123 với 5 năm kinh nghiệm trong lĩnh vực Bất động sản Thổ cư tại Việt Nam. Khởi đầu từ một Công ty Môi giới Nhà đất, Tuấn 123 lần lượt phát triển về quy mô nhân sự cũng như các lĩnh vực hoạt động. Ở tất cả các lĩnh vực: Môi giới Bất động sản, Định giá Bất động sản, Đào tạo Môi giới &hellip; công ty đều chứng tỏ sự chuyên nghiệp và chất lượng dịch vụ của mình.\r\n</p>\r\n\r\n<p>\r\n	<em><strong>Công ty Bất động sản Tuấn 123</strong>&nbsp;</em>đã được biết đến là đơn vị Môi giới Bất động sản Thổ cư lớn nhất Hà Nội và từng bước tiến đến lớn nhất Việt Nam với dấu mốc thành lập Trụ sở Miền Nam từ đầu năm 2017.\r\n</p>\r\n\r\n<p>\r\n	Bất động sản Tuấn 123&nbsp;mong muốn cung cấp những sản phẩm và dịch vụ gắn liền với thương hiệu Tuấn 123, đảm bảo quy trình chuyên nghiệp, tư vấn nhiệt thành đáp ứng nhu cầu rất lớn của thị trường Bất động sản. Không ngừng đổi mới và phát triển để khẳng định tầm vóc của một doanh nghiệp Việt Nam năng động, sáng tạo, tiên phong trong cả lĩnh vực kinh doanh và các hoạt động cộng đồng.\r\n</p>', NULL, NULL, 1, NULL, '2018-08-08 02:57:48');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configs_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `configs`
--
ALTER TABLE `configs`
  ADD CONSTRAINT `configs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
