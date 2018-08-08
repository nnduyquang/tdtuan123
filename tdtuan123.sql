-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 08, 2018 lúc 04:20 AM
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
-- Cấu trúc bảng cho bảng `category_items`
--

CREATE TABLE `category_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_items`
--

INSERT INTO `category_items` (`id`, `name`, `path`, `description`, `image`, `image_mobile`, `level`, `parent_id`, `type`, `order`, `isActive`, `created_at`, `updated_at`, `seo_id`) VALUES
(4, 'test1-1', 'test1-1', '<p>\r\n	test1-1\r\n</p>', 'images/uploads/images/gt_1.jpg', NULL, 1, 1, 0, 5, 1, '2018-07-17 02:24:13', '2018-07-17 02:24:13', 4),
(7, 'Hoạt Động Công Ty', 'hoat-dong-cong-ty', NULL, '0', NULL, 0, NULL, 0, 1, 1, '2018-08-08 01:23:55', '2018-08-08 01:23:55', 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_many`
--

CREATE TABLE `category_many` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_many`
--

INSERT INTO `category_many` (`category_id`, `item_id`, `created_at`, `updated_at`) VALUES
(7, 1, '2018-08-08 01:33:50', '2018-08-08 01:33:50'),
(7, 2, '2018-08-08 01:44:45', '2018-08-08 01:44:45'),
(7, 3, '2018-08-08 01:51:44', '2018-08-08 01:51:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_permissions`
--

CREATE TABLE `category_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category_permissions`
--

INSERT INTO `category_permissions` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Role', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(2, 'User', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(3, 'Menu', '2018-03-14 07:31:28', '2018-03-14 07:31:28'),
(4, 'Page', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(5, 'Post', '2018-03-14 07:31:29', '2018-03-14 07:31:29'),
(7, 'Product', '2018-03-27 03:05:29', '2018-03-27 03:05:29');

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
(18, 'config-introduce', '<p style=\"text-align: center;\">\r\n	<span style=\"font-size:20px;\"><span style=\"color:#0d51db;\"><strong>CÔNG TY ĐIỆN CƠ DUY DƯƠNG</strong></span></span>\r\n</p>\r\n\r\n<p>\r\n	<strong>Lĩnh vực hoạt động:</strong>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	Chúng tôi hoạt động trong lĩnh vực nhập khẩu và phân phối các sản phẩm<strong>,&nbsp;Máy Bơm Nước,</strong>&nbsp;<strong>các thiết bị điện nước</strong>&nbsp;với những thương hiệu nổi tiếng thế giới như&nbsp;<strong>&nbsp;Panasonic, Sena, Selton, Hanil,&nbsp;</strong><strong>Pentax, Sealand,</strong><strong>&nbsp;Ebara&hellip;.</strong><strong>..</strong>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	Đội ngũ nhân viên và quản lý kinh nghiệm lâu năm luôn được lựa chọn kỹ càng trước khi trải qua quá trình huấn luyện và cập nhật thường xuyên những thành tựu mới nhất về dịch vụ khách hàng, dịch vụ kỹ thuật và sản phẩm. Chúng tôi xem khả năng làm hài lòng khách hàng là thước đo thành công của chính mình.\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	<strong>Chúng tôi cam kêt:</strong>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;Mang lại sản phẩm chất lượng cao với giá tốt nhất đến với khách hàng.\r\n</p>\r\n\r\n<p>\r\n	&nbsp;Đặt dịch vụ khách hàng lên hàng đầu.\r\n</p>', NULL, NULL, 1, NULL, '2018-06-06 15:52:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(3) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `parent_id` int(11) DEFAULT NULL,
  `content_id` int(11) DEFAULT NULL,
  `type` tinyint(3) UNSIGNED DEFAULT NULL,
  `isActive` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_14_140923_create_entrust_setup_tables', 1),
(4, '2018_07_12_085612_create_seos_table', 2),
(5, '2018_07_12_090313_add_seo_id_to_posts_table', 3),
(6, '2018_07_12_091007_add_seo_id_to_products_table', 4),
(7, '2018_07_12_091116_add_seo_id_to_category_items_table', 5),
(8, '2018_07_17_084914_create_category_many_table', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_permission_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `category_permission_id`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'Xem Danh Sách Quyền', 'Được Xem Danh Sách Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(2, 'role-create', 'Tạo Quyền Mới', 'Được Tạo Quyền Mới', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(3, 'role-edit', 'Cập Nhật Quyền', 'Được Cập Nhật Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(4, 'role-delete', 'Xóa Quyền', 'Được Xóa Quyền', 1, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(5, 'user-list', 'Xem Danh Sách Users', 'Được Xem Danh Sách Users', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(6, 'user-create', 'Tạo User', 'Được Tạo User Mới', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(7, 'user-edit', 'Cập Nhật User', 'Được Cập Nhật User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(8, 'user-delete', 'Xóa user', 'Được Xóa User', 2, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(9, 'menu-list', 'Toàn Quyền Menu', 'Được Toàn Quyền Menu', 3, '2018-03-14 07:32:41', '2018-03-14 07:32:41'),
(10, 'menu-create', 'Thêm Mới Menu', 'Được Thêm Mới Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(11, 'menu-edit', 'Cập Nhật Menu', 'Được Cập Nhật Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(12, 'menu-delete', 'Xóa Menu', 'Được Xóa Menu', 3, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(13, 'page-list', 'Toàn Quyền Trang', 'Được Toàn Quyền Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(14, 'page-create', 'Thêm Mới Trang', 'Được Thêm Mới Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(15, 'page-edit', 'Cập Nhật Trang', 'Được Cập Nhật Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(16, 'page-delete', 'Xóa Trang', 'Được Xóa Trang', 4, '2018-03-14 07:32:42', '2018-03-14 07:32:42'),
(17, 'post-list', 'Toàn Quyền Bài Viết', 'Được Toàn Quyền Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(18, 'post-create', 'Thêm Mới Bài Viết', 'Được Thêm Mới Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(19, 'post-edit', 'Cập Nhật Bài Viết', 'Được Cập Nhật Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(20, 'post-delete', 'Xóa Bài Viết', 'Được Xóa Bài Viết', 5, '2018-03-14 07:54:54', '2018-03-14 07:54:54'),
(21, 'product-list', 'Toàn Quyền Sản Phẩm', 'Được Toàn Quyền Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(22, 'product-create', 'Thêm Mới Sản Phẩm', 'Được Thêm Mới Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(23, 'product-edit', 'Cập Nhật Sản Phẩm', 'Được Cập Nhật Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34'),
(24, 'product-delete', 'Xóa Sản Phẩm', 'Được Xóa Sản Phẩm', 7, '2018-03-27 03:06:34', '2018-03-27 03:06:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `isActive` tinyint(1) NOT NULL DEFAULT '1',
  `category_item_id` int(11) DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `path`, `description`, `content`, `image`, `post_type`, `isActive`, `category_item_id`, `user_id`, `created_at`, `updated_at`, `seo_id`) VALUES
(1, 'ĐẠI HỘI THỂ THAO TUẤN 123', 'dai-hoi-the-thao-tuan-123', '<p>\r\n	Hoạt động thể thao bên lề Tổng kết Quý II tại Thành phố Đà Nẵng đã diễn ra tốt đẹp với nhiều hạng mục: Chung kết bóng đá nam, kéo co, chuyền người và đặc biệt là chạy cự ly 10.000 m. Công ty Tuấn 123 thực sự đã nhuộm đỏ SVĐ Chi Lăng với tinh thần thể thao cao thượng\r\n</p>', '<p>\r\n	<strong>Thời gian:</strong>&nbsp;22/10/2017 &ndash; 26/10/2017.<br>\r\n	<strong>Địa điểm:</strong>&nbsp;Sân vận động Chi Lăng, Đà Nẵng, Việt Nam<br>\r\n	<strong>Các môn thi đấu:</strong><br>\r\n	<em>+ Bóng đá:</em><br>\r\n	+ Chạy tiếp sức 10.000m:<br>\r\n	&ndash; Giải nhất: 60.000.000VNĐ.<br>\r\n	<em>+ Ôm lấy nhau Tuấn 123:</em><br>\r\n	&ndash; Giải nhất: 20.000.000VNĐ.<br>\r\n	<em>+ Sức mạnh tập thể Tuấn 123:</em><br>\r\n	&ndash; Giải nhất: 20.000.000VNĐ.\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-9.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-13.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-12.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-10.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-11.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-15.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-16.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-17.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-18.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-19.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-14.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>', 'images/uploads/images/hoatdong/bds-tuan-123-9.jpg', 1, 1, 7, 1, '2018-08-08 01:33:50', '2018-08-08 01:33:50', 10),
(2, 'TUẤN 123 CHINH PHỤC ĐỈNH THÁI BÌNH DƯƠNG – SINGAPORE', 'tuan-123-chinh-phuc-dinh-thai-binh-duong-singapore', '<p>\r\n	Ngày 28/10/2017, Công ty Cổ phần Tuấn 123 &ndash; Bất động sản Tuấn 123 đã trở thành đoàn khách đông nhất trong lịch sử chào đón của bể bơi vô cực cao nhất thế giới nằm trên đỉnh tòa nhà khách sạn đắt giá nhất thế giới Marina Bay Sands.\r\n</p>', '<p>\r\n	123 thành viên xứng đáng nhất của Bất động sản Tuấn 123 sau nửa đầu năm 2017 Âm lịch đã cùng nhau chinh phục nơi đây &ndash; nơi mà được định danh là đỉnh Thái Bình Dương.\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/23154768_879568312197985_4878594429516424744_o-1-768x488.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p>\r\n	Đoàn đã tham quan nhiều địa danh nổi tiếng tại đây như: Phim trường Universal, Clark Quay, Thủy cung S.E.A Aquarium, Vườn Bách thảo Botanic Gardens&hellip;\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/1.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22829438_2121158151231289_1255443193623745877_o.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22879110_1869540126420300_2110560393_o.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22883631_2120310594649378_610659184_o.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22906480_772219586296211_1127679293_o.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22906692_1869540159753630_222834647_o.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22908283_10213784358270617_1592389535_o.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22906717_1869540306420282_945891851_o.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>', 'images/uploads/images/hoatdong/23154768_879568312197985_4878594429516424744_o-1-768x488.jpg', 1, 1, 7, 1, '2018-08-08 01:44:44', '2018-08-08 01:44:44', 11),
(3, 'Bất động sản Tuấn 123 – 4 năm một chặng đường.', 'bat-dong-san-tuan-123-4-nam-mot-chang-duong', '<h1>\r\n	Bất động sản Tuấn 123 &ndash; 4 năm một chặng đường.\r\n</h1>', '<p>\r\n	26/6/2017, một ngày đặc biệt của thương hiệu Bất động sản Tuấn 123, đánh dấu 4 năm góp mặt trên thị trường Bất động sản tại Hà Nội. Từ một văn phòng nhỏ ở ngõ 105 Láng Hạ, đến nay, cùng với sự phát triển thần tốc lên đến hơn 1200 thành viên, công ty đã chuyển đến văn phòng phủ kín 2 tầng của tòa nhà Hồng Hà, ngõ 109 Trường Chinh.\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19452932_803985479756269_4767196522106781395_o.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p>\r\n	Đến nay, với phương châm làm việc không thay đổi, bộ máy hỗ trợ ngày càng được cải thiện theo hướng chuyên nghiệp, văn hóa Công ty ngày càng được tôn vinh, tạo được dấu ấn trên thị trường Bất động sản Hà Nội. Không những vậy, giáo án đào tạo của Công ty ngày càng được bổ sung và hoàn thiện, thu hút được nguồn nhân lực từ nhiều lĩnh vực khác nhau, cùng tiến tới thanh lọc thị trường Bất động sản thổ cư tại Việt Nam.\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19467614_10209704845558961_722768898462892057_o-696x243.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p>\r\n	Trong buổi sinh nhật này, không những có sự tham dự của hơn 1200 anh chị em Bất động sản Tuấn 123, mà còn có sự tham dự của người thân, gia đình các Chuyên viên, lãnh đạo công ty Bất động sản Tuấn 123, cùng các thầy cô đang giảng dạy trong trường ĐH Sư Phạm Hà Nội.\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19452991_1996370760584303_4056525601611340131_o.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19488552_803985133089637_2505145769061537539_o.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	Để chào mừng sinh nhật 4 tuổi của Công ty, anh chị em Bất động sản Tuấn 123 đã chuẩn bị 4 tiết mục văn nghệ đặc sắc, ấn tượng, hoành tráng, đầy ý nghĩa. Dưới đây là một số hình ảnh của các tiết mục văn nghệ hoành tráng ấy!<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19429915_10209705007803017_733078871093940274_n.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19437244_10209705665379456_7010529168622423024_n.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19467603_10209705001882869_2161976640472218929_o.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	<img alt=\"\" src=\"http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19555028_10209705003722915_8820789447009291940_n.jpg\" style=\"width: 80%; height: 80%;\">\r\n</p>\r\n\r\n<p style=\"text-align: center;\">\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	Bốn năm một chặng đường, từ một văn phòng nhỏ không ai biết đến, cho đến nay, Công ty Bất động sản Tuấn 123 đã vươn lên thành công ty Bất động sản thổ cư lớn nhất tại Hà Nội, với quy mô lớn, phong cách làm việc chuyên nghiệp, tạo dấu ấn trên thị trường Bất động sản Hà Nội.\r\n</p>\r\n\r\n<p>\r\n	Lời cuối, chúc cho Công ty Bất động sản Tuấn 123 một buổi tiệc sinh nhật đầy ý nghĩa, bước sang tuổi mới với nhiều bước tiến quan trọng, không chỉ phát triển ở khu vực Hà Nội, mà còn vươn tầm vững mạnh hơn nữa ở Thành phố Hồ Chí Minh cũng như các tỉnh thành khác của đất nước Việt Nam thân yêu.\r\n</p>', 'images/uploads/images/hoatdong/19488552_803985133089637_2505145769061537539_o.jpg', 1, 1, 7, 1, '2018-08-08 01:51:44', '2018-08-08 02:20:06', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `sale` int(11) NOT NULL DEFAULT '0',
  `final_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `order` int(11) NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `category_product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'administer the website and manage users', '2018-03-14 07:23:50', '2018-03-14 07:23:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `seos`
--

INSERT INTO `seos` (`id`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(4, 'test1-1', 'test1-1', 'test1,1', '2018-07-17 02:24:13', '2018-07-17 02:24:13'),
(6, 'test bài viết', 'test bài viết', 'test bài viết', '2018-07-17 03:13:47', '2018-07-17 03:13:47'),
(9, NULL, NULL, NULL, '2018-08-08 01:23:55', '2018-08-08 01:23:55'),
(10, NULL, NULL, NULL, '2018-08-08 01:33:50', '2018-08-08 01:33:50'),
(11, NULL, NULL, NULL, '2018-08-08 01:44:44', '2018-08-08 01:44:44'),
(12, NULL, NULL, NULL, '2018-08-08 01:51:44', '2018-08-08 01:51:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$mStg572JFNI89/0Cg7TOGOUkACFaBl/nsNeOvx8zglr1qyJPA0tj6', NULL, '2018-03-14 07:24:10', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category_items`
--
ALTER TABLE `category_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_items_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `category_many`
--
ALTER TABLE `category_many`
  ADD PRIMARY KEY (`category_id`,`item_id`);

--
-- Chỉ mục cho bảng `category_permissions`
--
ALTER TABLE `category_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_permissions_name_unique` (`name`);

--
-- Chỉ mục cho bảng `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

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
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_category_permission_id_foreign` (`category_permission_id`);

--
-- Chỉ mục cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_product_id_foreign` (`category_product_id`),
  ADD KEY `products_seo_id_foreign` (`seo_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Chỉ mục cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT cho bảng `category_items`
--
ALTER TABLE `category_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `category_permissions`
--
ALTER TABLE `category_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `category_items`
--
ALTER TABLE `category_items`
  ADD CONSTRAINT `category_items_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `configs`
--
ALTER TABLE `configs`
  ADD CONSTRAINT `configs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_category_permission_id_foreign` FOREIGN KEY (`category_permission_id`) REFERENCES `category_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_product_id_foreign` FOREIGN KEY (`category_product_id`) REFERENCES `category_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
