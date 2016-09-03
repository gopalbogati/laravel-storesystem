-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2016 at 08:51 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelprj`
--

-- --------------------------------------------------------

--
-- Table structure for table `citizens`
--

CREATE TABLE `citizens` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `age` mediumint(9) DEFAULT NULL,
  `father_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mother_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grandfather_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `citizens`
--

INSERT INTO `citizens` (`id`, `name`, `dob`, `age`, `father_name`, `mother_name`, `grandfather_name`, `permanent_address`, `image`, `description`, `created_at`, `updated_at`) VALUES
(39, 'dsvewv', '2050-06-12', 23, 'wevwe', 'evwev', 'vevw', 'v wev', '2016-09-03-12-16-30-20150706_115949.jpg', 'vsevw', '2016-09-03 06:31:30', '2016-09-03 06:31:30'),
(40, 'dfg', '2050-04-04', 45, 'vvewvwe', 'vewvewv', 'weewv', 'vewwef', '2016-09-03-12-29-48-20150718_111914.jpg', 'ewfewf', '2016-09-03 06:44:48', '2016-09-03 06:44:48'),
(41, 'Amit ayer', '2050-06-15', 24, 'hem', 'sem', 'bem', 'mahendranagar', '2016-09-03-01-10-27-20150914_152802.jpg', 'he is cosmos student', '2016-09-03 07:25:27', '2016-09-03 07:25:27'),
(42, 'hemant', '2050-06-12', 23, 'hari', 'vewvwev', 'gntrr', 'koteshor', '2016-09-03-03-31-19-20150914_153418.jpg', 'gjjhj', '2016-09-03 09:46:19', '2016-09-03 09:46:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_08_29_180323_create_user_table', 1),
('2016_08_30_090147_create_user_table', 2),
('2016_08_30_091000_add_name_field', 3),
('2016_09_01_113221_create_citizens_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `profile_image`, `email`, `password`, `user_field`, `status`, `active`, `name`) VALUES
(1, '2016-08-30 03:26:19', '2016-08-30 03:26:19', NULL, 'ewfw', '$2y$10$GuNcsMOj6vbPjuCmX3RmW.Ka6Mh0byAUv4ajMTTPqGIi/XJDnKZL2', NULL, NULL, NULL, 'yuuewr'),
(2, '2016-08-30 03:29:31', '2016-08-30 03:29:31', NULL, 'gopal@2736@gmail.com', '$2y$10$Te/.ytBsWP2HURnjXgJTieXH/As1kJ0.yNt0DzAQRbf7TfkwNOWqi', NULL, NULL, NULL, 'test'),
(3, '2016-08-30 03:33:25', '2016-08-30 03:33:25', NULL, 'hello', '$2y$10$jifzOQpY.dwO6RMNVDM0U.0izrefIEghFYC3g92SdD3OtV/nMLQg2', NULL, NULL, NULL, 'hello'),
(5, '2016-08-30 03:33:41', '2016-08-30 03:33:41', NULL, 'aa', '$2y$10$fn1nCoc/XxdFByMoDGCoZeCBybYEz/977GlhSlU1LXw.BE9EyIuZm', NULL, NULL, NULL, 'fdd'),
(6, '2016-08-30 03:34:51', '2016-08-30 03:34:51', NULL, 'hhh', '$2y$10$tMXop9K7XHzWXLVhNQVrp.McSUpf4e6l553NJzi5zwy8.t4noSJ0i', NULL, NULL, NULL, 'hhh'),
(8, '2016-08-30 03:37:01', '2016-08-30 03:37:01', NULL, '11', '$2y$10$VNtF4vxkDlrQok8sFx0cXe0wYXi5/Ga0ZqwQgxLBpLYzoV.JHtzae', NULL, NULL, NULL, '11'),
(10, '2016-08-30 03:37:51', '2016-08-30 03:37:51', NULL, '2', '$2y$10$J3oRe/W.Uih2UeQFF0DnR.BxkMCV9ncXojPhG3cnb2aAWTvie7bZS', NULL, NULL, NULL, '2'),
(12, '2016-08-30 03:45:16', '2016-08-30 03:45:16', NULL, 'gopal', '$2y$10$4NraqdseuwjoayN.Ywo6b.qlGa04ud36UxFpE4JqI7PqTZVcfYJny', NULL, NULL, NULL, 'gopal'),
(13, '2016-08-30 04:20:25', '2016-08-30 04:20:25', NULL, 'hellooo', '$2y$10$AnTnnxlA1Utm3pngE59MO.nqfRbwjm/53m/P/A1En40cWJD/9rlKa', NULL, NULL, NULL, 'helloo'),
(14, '2016-08-31 01:57:34', '2016-08-31 01:57:34', NULL, 'brebre', '$2y$10$ITgxmSgFl7M1IcDJ9ZImqeJweqGBw4YRwc7YvpY95z5/jgUP.Ex5q', NULL, NULL, NULL, 'grege'),
(15, '2016-08-31 01:59:13', '2016-08-31 01:59:13', NULL, 'lal', '$2y$10$FLLzpaSTc1fNnBQo.qJg.eV19hT55Pe7ypA33VqMb.NXAAJ4M4oCu', NULL, NULL, NULL, 'lal'),
(16, '2016-08-31 02:02:09', '2016-08-31 02:02:09', NULL, 'nepal', '$2y$10$C8HoiH77cR3luTi/vhufIOUjTBYNAo7DooAE/LAZGoLGLZoJ1Es3G', NULL, NULL, NULL, 'nepal'),
(17, '2016-08-31 02:03:12', '2016-08-31 02:03:12', NULL, 'retet', '$2y$10$cwl3/2PUgh3UhOjagzhq/ObBpXeXvl2DXlVoDKizDe2wNyccLNgmC', NULL, NULL, NULL, 'grgeg'),
(18, '2016-08-31 02:37:03', '2016-08-31 02:37:03', NULL, 'werewrewr@gmail.com', '$2y$10$XsiqbtOiZha.Eu6tHh3e/e4qD6clFSxQYCxCxkRiQcgxjOkANfkHu', NULL, NULL, NULL, 'gre'),
(19, '2016-08-31 02:37:44', '2016-08-31 02:37:44', NULL, 'gopal2736@gmail.com', '$2y$10$Y8n3y5apwHgd8qfBcUZYzOjGWZe2BCGI94Z3P1ZXw1ZM73YWVHy0S', NULL, NULL, NULL, 'raja'),
(21, '2016-08-31 03:11:50', '2016-08-31 03:11:50', NULL, 'fdbfdb', '$2y$10$miQN73lDPzYxncaTxDO1VOOg.1wOzaPE.eMQvg8ygx8kI9d45YDpO', NULL, NULL, NULL, 'bfff'),
(23, '2016-08-31 03:33:36', '2016-08-31 03:33:36', NULL, 'htrht', '$2y$10$cXGl2HYn/m5nwEnqhvZYF.scXfUznKN2pW/eHnbCr4gJRC4.gjGMW', NULL, NULL, NULL, 'gthh'),
(24, '2016-09-03 08:32:36', '2016-09-03 08:32:36', NULL, 'hhas', '$2y$10$Hs9Ih.F1NIVo0Hm1P0spmO3t2/qjjUlireeA6M7.b4EAnQtmq20cW', NULL, NULL, NULL, 'greg'),
(25, '2016-09-03 08:32:57', '2016-09-03 08:32:57', NULL, 'harilal', '$2y$10$3wHH96qlyAz6VOJ9KL6OyOiUXFgutR2hDFctFXi6UMuwtXXq8FDw6', NULL, NULL, NULL, 'raju'),
(26, '2016-09-03 08:41:49', '2016-09-03 08:41:49', NULL, 'shyam@gmail.com', '$2y$10$Xv.LIW2pUUYFXuRkyILgu.rB9KY3QrC.VAx1YwKL3ZojvuwPx4klu', NULL, NULL, NULL, 'harilal'),
(27, '2016-09-03 08:48:42', '2016-09-03 08:48:42', NULL, 'hhh@gmail.com', '$2y$10$itB0fv08xaa78W2pqSAlMe26lvFdEs0C4HFXyg39ERuf53xXBYNbG', NULL, NULL, NULL, 'raju'),
(28, '2016-09-03 08:57:20', '2016-09-03 08:57:20', NULL, 'f32f2f23f23f', '$2y$10$dLH4dATuSoeKRkvUcuo2guEDa98OH42oZiCMHBCqYw0cNwqR5al9a', NULL, NULL, NULL, 'vewfew');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `citizens`
--
ALTER TABLE `citizens`
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
-- AUTO_INCREMENT for table `citizens`
--
ALTER TABLE `citizens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
