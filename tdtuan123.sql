-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2018 at 01:58 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tdtuan123`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_items`
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
-- Dumping data for table `category_items`
--

INSERT INTO `category_items` (`id`, `name`, `path`, `description`, `image`, `image_mobile`, `level`, `parent_id`, `type`, `order`, `isActive`, `created_at`, `updated_at`, `seo_id`) VALUES
(4, 'test1-1', 'test1-1', '<p>\r\n	test1-1\r\n</p>', 'images/uploads/images/gt_1.jpg', NULL, 1, 1, 0, 5, 1, '2018-07-17 02:24:13', '2018-07-17 02:24:13', 4),
(7, 'Hoạt Động Công Ty', 'hoat-dong-cong-ty', NULL, '0', NULL, 0, NULL, 0, 1, 1, '2018-08-08 01:23:55', '2018-08-08 01:23:55', 9),
(8, 'Tuyển Dụng', 'tuyen-dung', NULL, '0', NULL, 0, NULL, 0, 1, 1, '2018-08-08 02:23:42', '2018-08-08 02:23:42', 13);

-- --------------------------------------------------------

--
-- Table structure for table `category_many`
--

CREATE TABLE `category_many` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `item_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_many`
--

INSERT INTO `category_many` (`category_id`, `item_id`, `created_at`, `updated_at`) VALUES
(7, 1, '2018-08-08 01:33:50', '2018-08-08 01:33:50'),
(7, 2, '2018-08-08 01:44:45', '2018-08-08 01:44:45'),
(7, 3, '2018-08-08 01:51:44', '2018-08-08 01:51:44'),
(8, 4, '2018-08-08 02:46:58', '2018-08-08 02:46:58'),
(8, 5, '2018-08-08 14:37:48', '2018-08-08 14:37:48'),
(8, 6, '2018-08-08 14:42:32', '2018-08-08 14:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `category_permissions`
--

CREATE TABLE `category_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_permissions`
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
-- Table structure for table `configs`
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
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `content`, `description`, `order`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'config-contact', '<p style="text-align: center;">\r\n	<span style="color:#ffffff;"><strong><em>Hotline hỗ trợ tư vấn và phản hồi ý kiến</em></strong><em>:&nbsp;</em></span>\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<span style="color:#ffffff;"><strong><em>Hân hạnh được phục vụ quý khách hàng.!</em></strong></span>\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<span style="color:#ffffff;"><strong><em>157 Nguyễn Thượng Hiền, P.6 Quận Bình Thạnh, TPHCM</em></strong></span>\r\n</p>\r\n\r\n<p>\r\n	&nbsp;\r\n</p>', NULL, 3, 1, NULL, '2018-08-08 15:10:24'),
(3, 'email-receive', 'trangnh.sml@gmail.com', 'Cấu Hình Email Nhận Báo Giá', 1, 1, '2017-08-26 06:53:20', '2018-08-08 07:40:29'),
(4, 'email-sender-subject', 'Re: Thông Tin Ứng Tuyển', 'Cấu Hình Subject Gửi Khách Hàng', 2, 1, '2017-08-26 06:53:20', '2018-08-08 07:40:30'),
(5, 'email-sender-from', 'Thông Tin Ứng Tuyển Tuấn 123', 'Cấu Hình From Gửi Khách Hàng', 3, 1, '2017-08-26 06:53:21', '2018-08-08 07:40:30'),
(6, 'email-receive-subject', 'Thông Tin Ứng Tuyển Từ Ứng Viên', 'Cấu Hình Subject Nhận Báo Giá', 4, 1, '2017-08-26 06:53:21', '2018-08-08 07:40:30'),
(7, 'email-receive-from', 'Thông Tin Ứng Tuyển Từ Ứng Viên', 'Cấu Hình From Nhận Báo Giá', 5, 1, '2017-08-26 06:53:21', '2018-08-08 07:40:30'),
(8, 'email-signatures', '', 'Cấu Hình Chữ Ký', 7, 1, '2017-08-26 06:53:21', '2018-05-11 10:13:42'),
(9, 'email-sender-content', '<h1 style="margin-left:0cm; margin-right:0cm">\r\n	<span style="font-size:24pt">Chúng tôi đã nhận được mail, mọi thông tin về ứng tuyển sẽ được phản hồi trong vòng 24h. Xin cảm ơn!</span>\r\n</h1>', 'Cấu Hình Nội Dung Gửi Khách Hàng', 6, 1, '2017-08-26 06:53:21', '2018-08-08 07:40:30'),
(13, 'config-phone', '0984.929.097', NULL, 2, 1, NULL, '2018-08-08 15:10:24'),
(14, 'config-email', 'congtycophantuan123@gmail.com', NULL, 8, 1, NULL, '2018-08-08 15:10:24'),
(15, 'config-address', '202B Hoàng Văn Thụ Phường 9 Quận Phú Nhuận TP.HCM', NULL, 9, 1, NULL, '2018-08-08 15:10:24'),
(16, 'config-name', 'Phạm Anh Tuân', NULL, 4, 1, NULL, '2018-08-08 15:10:24'),
(18, 'config-introduce', '<p>\r\n	Công ty Bất động sản Tuấn 123 tiền thân là Công ty TNHH Tuấn 123 với 5 năm kinh nghiệm trong lĩnh vực Bất động sản Thổ cư tại Việt Nam. Khởi đầu từ một Công ty Môi giới Nhà đất, Tuấn 123 lần lượt phát triển về quy mô nhân sự cũng như các lĩnh vực hoạt động. Ở tất cả các lĩnh vực: Môi giới Bất động sản, Định giá Bất động sản, Đào tạo Môi giới &hellip; công ty đều chứng tỏ sự chuyên nghiệp và chất lượng dịch vụ của mình.\r\n</p>\r\n\r\n<p>\r\n	<em><strong>Công ty Bất động sản Tuấn 123</strong>&nbsp;</em>đã được biết đến là đơn vị Môi giới Bất động sản Thổ cư lớn nhất Hà Nội và từng bước tiến đến lớn nhất Việt Nam với dấu mốc thành lập Trụ sở Miền Nam từ đầu năm 2017.\r\n</p>\r\n\r\n<p>\r\n	Bất động sản Tuấn 123&nbsp;mong muốn cung cấp những sản phẩm và dịch vụ gắn liền với thương hiệu Tuấn 123, đảm bảo quy trình chuyên nghiệp, tư vấn nhiệt thành đáp ứng nhu cầu rất lớn của thị trường Bất động sản. Không ngừng đổi mới và phát triển để khẳng định tầm vóc của một doanh nghiệp Việt Nam năng động, sáng tạo, tiên phong trong cả lĩnh vực kinh doanh và các hoạt động cộng đồng.\r\n</p>', NULL, 5, 1, NULL, '2018-08-08 02:57:48'),
(20, 'config-company-name', 'Công Ty BĐS Tuấn 123', NULL, 1, 1, NULL, '2018-08-08 09:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
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
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
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
-- Dumping data for table `permissions`
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
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
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
-- Table structure for table `posts`
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
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `path`, `description`, `content`, `image`, `post_type`, `isActive`, `category_item_id`, `user_id`, `created_at`, `updated_at`, `seo_id`) VALUES
(1, 'ĐẠI HỘI THỂ THAO TUẤN 123', 'dai-hoi-the-thao-tuan-123', '<p>\r\n	Hoạt động thể thao bên lề Tổng kết Quý II tại Thành phố Đà Nẵng đã diễn ra tốt đẹp với nhiều hạng mục: Chung kết bóng đá nam, kéo co, chuyền người và đặc biệt là chạy cự ly 10.000 m. Công ty Tuấn 123 thực sự đã nhuộm đỏ SVĐ Chi Lăng với tinh thần thể thao cao thượng\r\n</p>', '<p>\r\n	<strong>Thời gian:</strong>&nbsp;22/10/2017 &ndash; 26/10/2017.<br>\r\n	<strong>Địa điểm:</strong>&nbsp;Sân vận động Chi Lăng, Đà Nẵng, Việt Nam<br>\r\n	<strong>Các môn thi đấu:</strong><br>\r\n	<em>+ Bóng đá:</em><br>\r\n	+ Chạy tiếp sức 10.000m:<br>\r\n	&ndash; Giải nhất: 60.000.000VNĐ.<br>\r\n	<em>+ Ôm lấy nhau Tuấn 123:</em><br>\r\n	&ndash; Giải nhất: 20.000.000VNĐ.<br>\r\n	<em>+ Sức mạnh tập thể Tuấn 123:</em><br>\r\n	&ndash; Giải nhất: 20.000.000VNĐ.\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-9.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-13.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-12.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-10.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-11.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-15.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-16.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-17.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-18.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-19.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/bds-tuan-123-14.jpg" style="width: 80%; height: 80%;">\r\n</p>', 'images/uploads/images/hoatdong/bds-tuan-123-9.jpg', 1, 1, 7, 1, '2018-08-08 01:33:50', '2018-08-08 01:33:50', 10),
(2, 'TUẤN 123 CHINH PHỤC ĐỈNH THÁI BÌNH DƯƠNG – SINGAPORE', 'tuan-123-chinh-phuc-dinh-thai-binh-duong-singapore', '<p>\r\n	Ngày 28/10/2017, Công ty Cổ phần Tuấn 123 &ndash; Bất động sản Tuấn 123 đã trở thành đoàn khách đông nhất trong lịch sử chào đón của bể bơi vô cực cao nhất thế giới nằm trên đỉnh tòa nhà khách sạn đắt giá nhất thế giới Marina Bay Sands.\r\n</p>', '<p>\r\n	123 thành viên xứng đáng nhất của Bất động sản Tuấn 123 sau nửa đầu năm 2017 Âm lịch đã cùng nhau chinh phục nơi đây &ndash; nơi mà được định danh là đỉnh Thái Bình Dương.\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/23154768_879568312197985_4878594429516424744_o-1-768x488.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p>\r\n	Đoàn đã tham quan nhiều địa danh nổi tiếng tại đây như: Phim trường Universal, Clark Quay, Thủy cung S.E.A Aquarium, Vườn Bách thảo Botanic Gardens&hellip;\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/1.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22829438_2121158151231289_1255443193623745877_o.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22879110_1869540126420300_2110560393_o.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22883631_2120310594649378_610659184_o.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22906480_772219586296211_1127679293_o.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22906692_1869540159753630_222834647_o.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22908283_10213784358270617_1592389535_o.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/22906717_1869540306420282_945891851_o.jpg" style="width: 80%; height: 80%;">\r\n</p>', 'images/uploads/images/hoatdong/23154768_879568312197985_4878594429516424744_o-1-768x488.jpg', 1, 1, 7, 1, '2018-08-08 01:44:44', '2018-08-08 01:44:44', 11),
(3, 'Bất động sản Tuấn 123 – 4 năm một chặng đường.', 'bat-dong-san-tuan-123-4-nam-mot-chang-duong', '<h1>\r\n	Bất động sản Tuấn 123 &ndash; 4 năm một chặng đường.\r\n</h1>', '<p>\r\n	26/6/2017, một ngày đặc biệt của thương hiệu Bất động sản Tuấn 123, đánh dấu 4 năm góp mặt trên thị trường Bất động sản tại Hà Nội. Từ một văn phòng nhỏ ở ngõ 105 Láng Hạ, đến nay, cùng với sự phát triển thần tốc lên đến hơn 1200 thành viên, công ty đã chuyển đến văn phòng phủ kín 2 tầng của tòa nhà Hồng Hà, ngõ 109 Trường Chinh.\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19452932_803985479756269_4767196522106781395_o.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p>\r\n	Đến nay, với phương châm làm việc không thay đổi, bộ máy hỗ trợ ngày càng được cải thiện theo hướng chuyên nghiệp, văn hóa Công ty ngày càng được tôn vinh, tạo được dấu ấn trên thị trường Bất động sản Hà Nội. Không những vậy, giáo án đào tạo của Công ty ngày càng được bổ sung và hoàn thiện, thu hút được nguồn nhân lực từ nhiều lĩnh vực khác nhau, cùng tiến tới thanh lọc thị trường Bất động sản thổ cư tại Việt Nam.\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19467614_10209704845558961_722768898462892057_o-696x243.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p>\r\n	Trong buổi sinh nhật này, không những có sự tham dự của hơn 1200 anh chị em Bất động sản Tuấn 123, mà còn có sự tham dự của người thân, gia đình các Chuyên viên, lãnh đạo công ty Bất động sản Tuấn 123, cùng các thầy cô đang giảng dạy trong trường ĐH Sư Phạm Hà Nội.\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19452991_1996370760584303_4056525601611340131_o.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19488552_803985133089637_2505145769061537539_o.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	Để chào mừng sinh nhật 4 tuổi của Công ty, anh chị em Bất động sản Tuấn 123 đã chuẩn bị 4 tiết mục văn nghệ đặc sắc, ấn tượng, hoành tráng, đầy ý nghĩa. Dưới đây là một số hình ảnh của các tiết mục văn nghệ hoành tráng ấy!<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19429915_10209705007803017_733078871093940274_n.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19437244_10209705665379456_7010529168622423024_n.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19467603_10209705001882869_2161976640472218929_o.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	<img alt="" src="http://localhost:8080/tdtuan123/images/uploads/images/hoatdong/19555028_10209705003722915_8820789447009291940_n.jpg" style="width: 80%; height: 80%;">\r\n</p>\r\n\r\n<p style="text-align: center;">\r\n	&nbsp;\r\n</p>\r\n\r\n<p>\r\n	Bốn năm một chặng đường, từ một văn phòng nhỏ không ai biết đến, cho đến nay, Công ty Bất động sản Tuấn 123 đã vươn lên thành công ty Bất động sản thổ cư lớn nhất tại Hà Nội, với quy mô lớn, phong cách làm việc chuyên nghiệp, tạo dấu ấn trên thị trường Bất động sản Hà Nội.\r\n</p>\r\n\r\n<p>\r\n	Lời cuối, chúc cho Công ty Bất động sản Tuấn 123 một buổi tiệc sinh nhật đầy ý nghĩa, bước sang tuổi mới với nhiều bước tiến quan trọng, không chỉ phát triển ở khu vực Hà Nội, mà còn vươn tầm vững mạnh hơn nữa ở Thành phố Hồ Chí Minh cũng như các tỉnh thành khác của đất nước Việt Nam thân yêu.\r\n</p>', 'images/uploads/images/hoatdong/19488552_803985133089637_2505145769061537539_o.jpg', 1, 1, 7, 1, '2018-08-08 01:51:44', '2018-08-08 02:20:06', 12),
(4, 'Tuyển Chuyên viên kinh doanh Bất động sản tại TP HCM', 'tuyen-chuyen-vien-kinh-doanh-bat-dong-san-tai-tp-hcm', '<p>\r\n	Tuyển Chuyên viên kinh doanh Bất động sản tại TP HCM\r\n</p>', '<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Công ty Bất động sản Tuấn 123 tuyển dụng nhân sự.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Vị trí: Chuyên viên Kinh doanh.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Số lượng: 10 Chuyên viên kinh doanh (ưu tiên các thành viên gọi điện trước)</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">1. Mô tả công việc</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Đăng tin trên các trang web. </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Được làm Ông chủ thực sự công việc của chính mình.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Chăm sóc nguồn khách hàng sẵn có của Công ty.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Bán sản phẩm phù hợp nhất trên thị trường Bất động sản.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Tìm kiếm khách hàng và chăm sóc ngay từ lần gặp đầu tiên.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Được sự hướng dẫn, hỗ trợ trực tiếp từ Giám đốc và Trưởng phòng trong việc thực hiện các cuộc giao dịch Bất động sản.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">2. Yêu cầu</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Công dân Việt Nam từ 20 tuổi trở lên đến 70 tuổi.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Tốt nghiệp Trung cấp trở lên.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Có xe máy, laptop, điện thoại.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Luôn cầu tiến, ham học hỏi và khao khát phát triển bản thân.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Làm hết việc - không làm hết giờ. Đủ sức khỏe, đủ nhiệt huyết để ăn chơi, du lịch cùng Phòng và Công ty.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Tự tin, năng động, nhanh nhẹn, có tinh thần cầu tiến trong công việc.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Ưu tiên người đam mê kinh doanh nhất là Bất động sản (chưa biết nghề Công ty sẽ đào tạo).</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">3. Quyền lợi</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Lương cơ bản 4.3 triệu (có thể thương lượng với Trưởng phòng về mức cao hơn) + hoa hồng nhận về thì được chia luôn.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Được đóng BHXH, BHYT theo quy định của Luật Lao động Việt Nam.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Cơ hội giao lưu, học tập, thăng tiến và phát triển bản thân tại một Công ty tốt nhất Việt Nam về thổ cư.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Được đào tạo từ cơ bản đến nâng cao, tham gia các hoạt động học tập, du lịch, tâm linh, ăn chơi phong phú trong và ngoài nước theo chương trình của Phòng và Công ty.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Cơ hội bứt phá thu nhập, thăng tiến không ngừng lên các vị trí khác trong toàn Công ty nếu có đủ đức, đủ tài.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">4. Liên hệ: Anh Hiển &ndash; Trưởng phòng Kinh doanh.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Phụ trách tuyển dụng: 0962038484 &ndash; 0948104812.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Email: Lebahienbds.tuan123@gmail.com</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Hoặc bạn có thể đăng ký trực tuyến tại đường link dưới đây: https://goo.gl/forms/N2s6OSsdknJorWfF2</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Địa chỉ Tổng Công ty: Tòa nhà hồng Hà, ngõ 109, đường Trường Chinh, quận Thanh Xuân, thành phố Hà Nội.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Địa chỉ Trụ sở miền Nam: Số 202B Hoàng Văn Thụ, Phường 9, Phú Nhuận, Thành phố Hồ Chí Minh.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Lưu ý: Ứng viên vui lòng liên hệ trước để được đặt lịch phỏng vấn.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Trân trọng!</span></span></span>\r\n</p>', 'images/uploads/images/tuyendung/thien-khoi.jpg', 1, 1, NULL, 1, '2018-08-08 02:46:58', '2018-08-08 02:46:58', 14),
(5, 'KHÓA ĐÀO TẠO NGHIỆP VỤ BẤT ĐỘNG SẢN ĐỈNH CAO', 'khoa-dao-tao-nghiep-vu-bat-dong-san-dinh-cao', '<p>\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Một khóa đào tạo MIỄN PHÍ nhưng CHẤT LƯỢNG về tất cả lĩnh vực: Bán hàng, đàm phán, luật pháp, quản lý,&hellip;</span></span></span>\r\n</p>', '<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Để học một khóa đào tạo chất lượng về đàm phán, bán hàng, pháp lý, quản lý Bất động sản,&hellip;bạn chắc chắn mất tiền, RẤT RẤT nhiều tiền. Vì trên đời không ai cho không ai gì hết, không có gì giá trị mà lại miễn phí hết.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">🔥🔥🔥</span>&hellip;Nhưng BẤT ĐỘNG SẢN TUẤN 123 là một ngoại lệ. Đến với Tuấn 123, bạn sẽ được </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Một khóa đào tạo MIỄN PHÍ nhưng CHẤT LƯỢNG về tất cả lĩnh vực: Bán hàng, đàm phán, luật pháp, quản lý,&hellip;</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">✔</span>️ Một môi trường để bạn áp dụng ngay và luôn kiến thức vào thực tế công việc, các tình huống xịn, các khách hàng xịn và đẳng cấp, sản phẩm Bất động sản là sản phẩm đỉnh cao nhất trong các loại bán hàng. </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">&hellip;VÀ THẬM CHÍ..</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">✔</span>️ Bạn được trả 4.3 triệu/tháng để học và có thể kiếm được nhiều tiền, rất nhiều tiền nếu bạn áp dụng thành công các kiến thức vào các tình huống thực tế trong môi trường này. </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">✔</span>️Thu nhập tối thiểu 50 triệu đến 500 trăm triệu không giới hạn.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">🔥🔥🔥</span>NỘI DUNG CHI TIẾT KHÓA ĐÀO TẠO: </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 1: &ldquo;Kiến thức cơ bản về Bất động sản Thổ cư.&rdquo; </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 2: &ldquo;Định giá, tư duy khi phân tích Bất động sản&rdquo;.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 3: &ldquo;Các kênh và công cụ truyền thông Bất động sản, cách viết bài truyền thông Bất động sản hấp dẫn, ra tiền, cách tạo hệ thống tin vệ tinh&rdquo;.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 4: &ldquo;Thiết lập công cụ và các thao tác đăng tin&rdquo;. </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 5: &ldquo;Cuộc điện thoại đầu tiên của khách hàng&rdquo;.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 6: &ldquo;Dẫn khách xem nhà, các tình huống thực tế khi dẫn khách.&rdquo;</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 7: &ldquo;Các bước chăm khách cũ&rdquo;.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 8: &ldquo;Pháp lý trong giao dịch Bất động sản và tư vấn khách hàng&rdquo;. </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 9: &ldquo;Kịch bản đưa họ khách hàng đi xem lại&rdquo;.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 10: &ldquo;Các tình huống đàm phán, thương lượng giá trong giao dịch&rdquo;.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 11: &ldquo;Tư vấn khách hàng ôm tiền đặt cọc&rdquo;.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 12: &ldquo;Trên bàn đặt cọc&rdquo;.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Buổi 13: &ldquo;Hậu đặt cọc và các thủ tục công chứng, sang tên, chốt giao dịch.&rdquo;</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">🔥🔥🔥</span>CHÚNG TÔI CHỈ YÊU CẦU Ở BẠN:</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">✔</span>️ Tham gia tất cả chương trình đào tạo của Công ty và không được phép bỏ dù một buổi. </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">✔</span>️ Làm ĐÚNG, làm CHUẨN những gì chúng tôi hướng dẫn. </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">✔</span>️ Một tinh thần cầu tiến, sẵn sàng lắng nghe học hỏi, kiên trì chăm chỉ không bỏ cuộc.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">✔</span>️ Xe máy, laptop, điện thoại.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">✔</span>️ Năng lượng tinh thần và sức khỏe thể chất.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif"><span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">✔</span>️ Và 1 bộ hồ sơ gồm: Thư ứng tuyển viết tay, SYLL, CMND, hộ khẩu, bằng tốt nghiệp Trung cấp trở lên, 3 ảnh 3x4.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">Sau khi đăng ký ứng tuyển và học xong đào tạo, bạn muốn tạm biệt Công ty sang môi trường khác làm việc, chúng tôi không giữ, không níu kéo, không giữ hồ sơ, không thu tiền. Vì việc bạn tham gia khóa học trên và áp dụng được đã là giúp chúng tôi lan tỏa cách làm việc chuyên nghiệp, nâng tầm hình ảnh Môi giới trong mắt khách hàng và thị trường.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">VUI LÒNG LIÊN HỆ <span style="font-family:&quot;Segoe UI Symbol&quot;,sans-serif">🔥🔥🔥</span></span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Phụ trách tuyển dụng: Anh Hiển &ndash; 0962038484 - 0948104812.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Email: lebahienbds.tuan123@gmail.com</span></span></span>\r\n</p>\r\n\r\n<p>\r\n	<span style="font-size:11.0pt"><span style="line-height:107%"><span style="font-family:&quot;Calibri&quot;,sans-serif">+ Địa chỉ: 202B Hoàng Văn Thụ - Phường 9 - Phú Nhuận - Hồ Chí Minh.</span></span></span>\r\n</p>', 'images/uploads/images/tuyendung/bds-tuan-123-2-696x464.jpg', 1, 1, NULL, 1, '2018-08-08 14:37:48', '2018-08-08 14:37:48', 15),
(6, 'TUYỂN DỤNG TRỢ LÝ TRƯỞNG PHÒNG KINH DOANH (CẢ NAM VÀ NỮ)', 'tuyen-dung-tro-ly-truong-phong-kinh-doanh-ca-nam-va-nu', '<p>\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">TUYỂN DỤNG TRỢ LÝ TRƯỞNG PHÒNG KINH DOANH (CẢ NAM VÀ NỮ)</span></span></span>\r\n</p>', '<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">TP HCM BẤT ĐỘNG SẢN TUẤN 123 TUYỂN DỤNG TRỢ LÝ TRƯỞNG PHÒNG KINH DOANH (CẢ NAM VÀ NỮ)</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">1. Số lượng: 03.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">2. Mô tả công việc: </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Quản lý hồ sơ, tài liệu, giấy tờ</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Phối hợp, hỗ trợ với các bộ phận khác trong Công ty.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Trợ lý, phụ tá công việc cho Trưởng phòng.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Hỗ trợ các công việc văn phòng khác như nhận bưu phẩm, bưu kiện, lưu trữ hồ sơ&hellip;</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">3. Yêu cầu:</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Tốt nghiệp Trung cấp trở lên, không phân biệt chuyên ngành.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Có điện thoại, laptop và phương tiện đi lại.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Không cần kinh nghiệm. Cần tinh thần muốn làm, muốn học hỏi, và sẵn sàng vứt bỏ những thú vui tầm thường để nâng trình bản thân.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">4. Quyền lợi: </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Lương cơ bản: 5 triệu (cao hơn nếu có khả năng) + hỗ trợ ăn trưa, xăng xe điện thoại + thưởng kinh doanh.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Hưởng BHYT, BHXH theo luật Lao động của Nhà nước.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Được đào tạo bài bản từ nhỏ nhất đến tinh vi nhất.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Tham dự các chương trình giải trí, du lịch, thể thao, nghỉ lễ Tết của Công ty.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Làm việc trực tiếp với Trưởng phòng, làm việc tại nơi hội tụ những Chủ tịch, Giám đốc, Tiến sĩ, Thạc sĩ để trưởng thành nhanh nhất. Được học hỏi trực tiếp từ Tổng Giám đốc và các Lãnh đạo Công ty.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Sống trong môi trường &ldquo;Chính nhân quân tử&rdquo; và văn hóa độc, lạ duy nhất của Công ty.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">5. Hồ sơ ứng tuyển</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Đơn ứng tuyển.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Sơ yếu lí lịch, Chứng minh nhân dân, Sổ hộ khẩu công chứng trong vòng</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">6 tháng.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Bằng tốt nghiệp photo.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Bản mô tả kinh nghiệm, thành tích đã đạt được trong công việc trước đây (nếu có).</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	&nbsp;\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">6. Liên hệ: </span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">*Gửi hồ sơ tới email anh Hiển Trưởng phòng kinh doanh: Lebahienbds.tuan123@gmail.com hoặc inbox trực tiếp qua Facebook cá nhân.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Thắc mắc vui lòng liên hệ trực tiếp số điện thoại: 0962038484 - 0948104812.</span></span></span>\r\n</p>\r\n\r\n<p style="margin:0in 0in 8pt">\r\n	<span style="font-size:11pt"><span style="line-height:107%"><span style="font-family:Calibri,sans-serif">+ Địa chỉ làm việc: Trụ sở miền Nam, 202B Hoàng Văn Thụ, Phường 9, Phú Nhuận.</span></span></span>\r\n</p>', 'images/uploads/images/tuyendung/sungroup-thong-tin.png', 1, 1, NULL, 1, '2018-08-08 14:42:32', '2018-08-08 14:42:32', 16);

-- --------------------------------------------------------

--
-- Table structure for table `products`
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
-- Table structure for table `roles`
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
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'administer the website and manage users', '2018-03-14 07:23:50', '2018-03-14 07:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `seos`
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
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `seo_title`, `seo_description`, `seo_keywords`, `created_at`, `updated_at`) VALUES
(4, 'test1-1', 'test1-1', 'test1,1', '2018-07-17 02:24:13', '2018-07-17 02:24:13'),
(6, 'test bài viết', 'test bài viết', 'test bài viết', '2018-07-17 03:13:47', '2018-07-17 03:13:47'),
(9, NULL, NULL, NULL, '2018-08-08 01:23:55', '2018-08-08 01:23:55'),
(10, NULL, NULL, NULL, '2018-08-08 01:33:50', '2018-08-08 01:33:50'),
(11, NULL, NULL, NULL, '2018-08-08 01:44:44', '2018-08-08 01:44:44'),
(12, NULL, NULL, NULL, '2018-08-08 01:51:44', '2018-08-08 01:51:44'),
(13, NULL, NULL, NULL, '2018-08-08 02:23:42', '2018-08-08 02:23:42'),
(14, NULL, NULL, NULL, '2018-08-08 02:46:58', '2018-08-08 02:46:58'),
(15, NULL, NULL, NULL, '2018-08-08 14:37:48', '2018-08-08 14:37:48'),
(16, NULL, NULL, NULL, '2018-08-08 14:42:32', '2018-08-08 14:42:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'nnduyquang', 'nnduyquang@gmail.com', '$2y$10$mStg572JFNI89/0Cg7TOGOUkACFaBl/nsNeOvx8zglr1qyJPA0tj6', NULL, '2018-03-14 07:24:10', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_items`
--
ALTER TABLE `category_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_items_seo_id_foreign` (`seo_id`);

--
-- Indexes for table `category_many`
--
ALTER TABLE `category_many`
  ADD PRIMARY KEY (`category_id`,`item_id`);

--
-- Indexes for table `category_permissions`
--
ALTER TABLE `category_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_permissions_name_unique` (`name`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `configs_user_id_foreign` (`user_id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`),
  ADD KEY `permissions_category_permission_id_foreign` (`category_permission_id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_seo_id_foreign` (`seo_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`),
  ADD KEY `products_category_product_id_foreign` (`category_product_id`),
  ADD KEY `products_seo_id_foreign` (`seo_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_items`
--
ALTER TABLE `category_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category_permissions`
--
ALTER TABLE `category_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `category_items`
--
ALTER TABLE `category_items`
  ADD CONSTRAINT `category_items_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `configs`
--
ALTER TABLE `configs`
  ADD CONSTRAINT `configs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_category_permission_id_foreign` FOREIGN KEY (`category_permission_id`) REFERENCES `category_permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_product_id_foreign` FOREIGN KEY (`category_product_id`) REFERENCES `category_items` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_seo_id_foreign` FOREIGN KEY (`seo_id`) REFERENCES `seos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
