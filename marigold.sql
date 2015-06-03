-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2015 at 11:29 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `marigold`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`, `user_id`) VALUES
(15, 'Dvieļi', '2015-05-27 04:33:46', '2015-05-27 04:33:46', 2),
(16, 'Cepures', '2015-05-27 04:34:17', '2015-05-27 04:34:17', 2),
(19, 'Maisiņi', '2015-05-27 04:35:54', '2015-05-27 04:35:54', 2),
(20, 'Priekšauti', '2015-05-27 04:54:11', '2015-05-27 04:54:11', 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_03_21_181804_create_table_users', 1),
('2015_01_13_094009_create_table_users', 2),
('2015_04_06_143526_create_categories_table', 3),
('2015_04_12_101411_create_products_table', 4),
('2015_04_18_172021_create_users_table', 5),
('2015_04_30_194304_create_posts_table', 6),
('2015_04_30_195406_create_comments_table', 7),
('2015_05_01_090242_create_posts_table', 8),
('2015_05_02_055429_create_comments_table', 9),
('2015_05_02_082722_add_username_to_users_table', 10),
('2015_05_02_132549_add_password_temp_to_users_table', 11),
('2015_05_02_133205_add_code_to_users_table', 12),
('2015_05_04_142857_add_short_description_to_products_table', 13),
('2015_05_24_061409_create_reviews_table', 14),
('2015_05_26_065946_add_user_to_category_table', 15),
('2015_05_26_072847_add_user_to_product_table', 16);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `m_keys` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `m_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=37 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `m_keys`, `m_desc`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(33, 'Lorem ipsum', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis nulla non leo mattis, vitae dictum purus pretium. Nullam accumsan tellus nec blandit malesuada. Integer vel lobortis neque, at laoreet purus. Curabitur porta augue eu diam venenatis, vitae semper eros blandit. Sed vehicula in nibh et vulputate. Fusce sed tortor sit amet sem commodo ultricies. Maecenas facilisis tristique magna nec feugiat.\r\n\r\nVestibulum ullamcorper justo enim, nec finibus augue lobortis vel. Nam vestibulum vulputate eleifend. Vestibulum mattis erat congue, tincidunt justo a, sagittis risus. Sed malesuada lectus aliquam tellus vulputate faucibus. In sollicitudin metus eget pulvinar vulputate. Aenean ut nulla eget massa suscipit tincidunt. Etiam erat ligula, semper eu quam in, semper pretium ipsum. Donec nisi nisi, cursus quis arcu vel, viverra ornare neque. Pellentesque sollicitudin semper rutrum. Proin eget pulvinar justo. Mauris non lacus pharetra, lacinia nibh vel, tristique risus. Integer sagittis vestibulum purus iaculis fermentum.\r\n\r\nNullam ut dictum odio, id hendrerit diam. Nam volutpat nisi sit amet libero blandit, nec convallis ipsum viverra. Nulla sodales neque id felis tincidunt vehicula. Quisque mollis feugiat metus a malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eleifend ultricies eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec interdum commodo dignissim. Sed a lectus a sapien consequat ornare. Integer ac massa efficitur, pretium lectus ut, maximus eros. Etiam mollis quis tortor eget ullamcorper. Duis in auctor ante.\r\n\r\nSed vulputate ex in aliquam bibendum. Morbi vitae metus ornare lorem fermentum tristique. Maecenas tincidunt iaculis sem, eu malesuada mi finibus vitae. Curabitur lectus metus, ullamcorper ut tincidunt vitae, interdum quis neque. Morbi tellus diam, malesuada eget volutpat nec, lobortis eu est. Duis sit amet nunc quis libero euismod blandit non eu nulla. Etiam ac viverra enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porta faucibus vulputate. Morbi ullamcorper, dolor eget egestas accumsan, lectus massa porta erat, nec aliquet libero libero sit amet tellus. Proin ac velit venenatis, vestibulum dolor faucibus, finibus dui. Nullam tempor dictum sem at ultricies.\r\n\r\nAliquam pretium faucibus ipsum ac sagittis. Mauris dictum ligula bibendum lectus fringilla, sed placerat ligula posuere. Quisque scelerisque sagittis risus, at feugiat quam dapibus quis. Praesent luctus cursus ipsum, eget lacinia turpis dictum eget. Quisque lobortis venenatis sem ut consequat. Pellentesque leo libero, efficitur eu felis quis, congue tincidunt ipsum. In hac habitasse platea dictumst. Ut pretium, mauris ut mollis mattis, nisi orci scelerisque felis, id dapibus ante felis id dolor. Nam eget ultricies velit, at varius felis. Donec viverra molestie ante, ac feugiat massa ultrices in. Mauris tellus neque, scelerisque sed commodo quis, congue non turpis. Suspendisse ultrices lacinia sodales. Fusce dapibus ex ac odio commodo dapibus. ', 'Lorem, ipsum', 'Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit', 'lorem-ipsum', 2, '2015-05-27 05:35:40', '2015-05-27 05:35:40'),
(34, 'Lorem ipsum - 2', ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer iaculis nulla non leo mattis, vitae dictum purus pretium. Nullam accumsan tellus nec blandit malesuada. Integer vel lobortis neque, at laoreet purus. Curabitur porta augue eu diam venenatis, vitae semper eros blandit. Sed vehicula in nibh et vulputate. Fusce sed tortor sit amet sem commodo ultricies. Maecenas facilisis tristique magna nec feugiat.\r\n\r\nVestibulum ullamcorper justo enim, nec finibus augue lobortis vel. Nam vestibulum vulputate eleifend. Vestibulum mattis erat congue, tincidunt justo a, sagittis risus. Sed malesuada lectus aliquam tellus vulputate faucibus. In sollicitudin metus eget pulvinar vulputate. Aenean ut nulla eget massa suscipit tincidunt. Etiam erat ligula, semper eu quam in, semper pretium ipsum. Donec nisi nisi, cursus quis arcu vel, viverra ornare neque. Pellentesque sollicitudin semper rutrum. Proin eget pulvinar justo. Mauris non lacus pharetra, lacinia nibh vel, tristique risus. Integer sagittis vestibulum purus iaculis fermentum. ', '', '', 'lorem-ipsum-2', 2, '2015-05-27 05:36:22', '2015-05-27 05:36:22'),
(35, 'Lorem ipsum - 3', ' Nullam ut dictum odio, id hendrerit diam. Nam volutpat nisi sit amet libero blandit, nec convallis ipsum viverra. Nulla sodales neque id felis tincidunt vehicula. Quisque mollis feugiat metus a malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eleifend ultricies eros. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec interdum commodo dignissim. Sed a lectus a sapien consequat ornare. Integer ac massa efficitur, pretium lectus ut, maximus eros. Etiam mollis quis tortor eget ullamcorper. Duis in auctor ante.\r\n\r\nSed vulputate ex in aliquam bibendum. Morbi vitae metus ornare lorem fermentum tristique. Maecenas tincidunt iaculis sem, eu malesuada mi finibus vitae. Curabitur lectus metus, ullamcorper ut tincidunt vitae, interdum quis neque. Morbi tellus diam, malesuada eget volutpat nec, lobortis eu est. Duis sit amet nunc quis libero euismod blandit non eu nulla. Etiam ac viverra enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porta faucibus vulputate. Morbi ullamcorper, dolor eget egestas accumsan, lectus massa porta erat, nec aliquet libero libero sit amet tellus. Proin ac velit venenatis, vestibulum dolor faucibus, finibus dui. Nullam tempor dictum sem at ultricies. ', '', '', 'lorem-ipsum-3', 2, '2015-05-27 05:37:05', '2015-05-27 05:37:05'),
(36, 'Lorem ipsum - 4', 'Aliquam pretium faucibus ipsum ac sagittis. Mauris dictum ligula bibendum lectus fringilla, sed placerat ligula posuere. Quisque scelerisque sagittis risus, at feugiat quam dapibus quis. Praesent luctus cursus ipsum, eget lacinia turpis dictum eget. Quisque lobortis venenatis sem ut consequat. Pellentesque leo libero, efficitur eu felis quis, congue tincidunt ipsum. In hac habitasse platea dictumst. Ut pretium, mauris ut mollis mattis, nisi orci scelerisque felis, id dapibus ante felis id dolor. Nam eget ultricies velit, at varius felis. Donec viverra molestie ante, ac feugiat massa ultrices in. Mauris tellus neque, scelerisque sed commodo quis, congue non turpis. Suspendisse ultrices lacinia sodales. Fusce dapibus ex ac odio commodo dapibus. ', '', '', 'lorem-ipsum-4', 2, '2015-05-27 05:37:36', '2015-05-27 05:37:36');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `category_id`, `title`, `description`, `short_description`, `price`, `availability`, `image`, `created_at`, `updated_at`) VALUES
(24, 2, 16, 'Cepure - LATVIJA', 'Cepure ar uzrakstu LATVIJA.\r\nDer visiem izmēriem.', '', '10.00', 1, 'img/products/1432712691.jpg', '2015-05-27 04:44:54', '2015-05-27 04:44:54'),
(25, 2, 16, 'Cepure - Eju copēt', 'Cepure makšķerniekiem - ar uzrakstu Eju copēt.\r\nDer visiem izmēriem.', '', '7.00', 1, 'img/products/1432712922.jpg', '2015-05-27 04:48:44', '2015-05-27 04:48:44'),
(26, 2, 19, '"Saulaini sveicieni"', 'Maisiņš ar uzrakstu "Saulaini sveicieni" un skaistiem ziediem.', '', '5.00', 1, 'img/products/1432713024.jpg', '2015-05-27 04:50:27', '2015-05-27 04:50:27'),
(27, 2, 19, '"Sirsnīgi sveicieni"', 'Maisiņš ar uzrakstu "Sirsnīgi sveicieni"', '', '5.00', 1, 'img/products/1432713076.jpg', '2015-05-27 04:51:18', '2015-05-27 04:51:18'),
(28, 2, 15, 'Velosipēds un sirdis', 'Dievis ar velosipēda un siržu apdruku', '', '9.00', 1, 'img/products/1432713150.jpg', '2015-05-27 04:52:32', '2015-05-27 04:52:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_temp` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`, `telephone`, `admin`, `created_at`, `updated_at`, `remember_token`, `username`, `password_temp`, `code`) VALUES
(1, 'Jon', 'Doe', 'jon@doe.com', '$2y$10$ec6yLR..eZBf80NMd5ogxOhLkCJYWXkg1EKTz1sCnn2l5JDUIePoa', '5557771234', 1, '2015-04-18 14:32:38', '2015-04-18 14:32:38', NULL, '', '', ''),
(2, 'Sintija', 'Borskoviča', 'sintija.borskovica@gmail.com', '$2y$10$yq.hse3paPBZuYm5BYefauip7SGApJvRreAGc8Np9pCcU4Jgj2GZi', '26488862', 1, '2015-04-18 16:49:23', '2015-05-27 06:12:46', 'QtCqRw0cLvI5NVWpALC2AGae03StfyT0m1Meok2yGzh2uwTAMs6F3kH3O6w9', 'Administrators', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
