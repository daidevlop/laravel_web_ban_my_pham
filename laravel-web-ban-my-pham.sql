-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 20, 2024 at 03:02 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-web-ban-my-pham`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint UNSIGNED NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `id_product` bigint UNSIGNED NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name_category`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Ivory Weimann', '2024-07-17 02:56:39', '2024-07-17 02:56:39'),
(2, 'Fannie Cartwright', '2024-07-17 02:57:33', '2024-07-17 02:57:33'),
(3, 'Rosemarie Zulauf', '2024-07-17 02:57:35', '2024-07-17 02:57:35'),
(4, 'Alexandro Quitzon', '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(5, 'Freddy Barton', '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(6, 'Ricardo Bauch', '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(7, 'Arnoldo Stamm', '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(8, 'Vernie Bednar', '2024-07-17 02:57:36', '2024-07-17 02:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2024_07_15_091820_create_categories_table', 1),
(30, '2024_07_15_093421_create_products_table', 1),
(31, '2024_07_20_144011_create_cars_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `warranty_policy` text COLLATE utf8mb4_unicode_ci,
  `discount` decimal(5,2) NOT NULL DEFAULT '0.00',
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `price`, `stock`, `description`, `warranty_policy`, `discount`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Vern Schaefer', 'bo-cuc-tana-ha-ve.jpg', '560.64', 72, 'Aut cupiditate sint nulla officia. Quia quod molestiae quo et. Fugit nihil qui a amet natus. Velit explicabo voluptatem placeat et magnam pariatur.', 'Eius repellat nihil illum minima ut pariatur.', '86.55', 1, '2024-07-17 02:56:39', '2024-07-17 02:56:39'),
(2, 'Arlie Gerlach Sr.', 'hoa-chuc-mung-20-11-hoa-sen.jpg', '817.79', 22, 'Dolorum molestiae suscipit in omnis molestiae. Tempora recusandae voluptatum molestiae nesciunt velit. Minus molestiae repellat deleniti.', 'Nesciunt voluptates dolores atque qui.', '87.67', 1, '2024-07-17 02:56:39', '2024-07-17 02:56:39'),
(5, 'Verda Keebler', 'bo-hoa-cam-chuong-mong-manh-2.jpg', '951.74', 39, 'Est quos possimus nostrum eos. Ipsum eligendi expedita ipsam quae et aliquid. Ut ut voluptas velit rerum aliquam quae quia. Vero amet rerum vitae consequatur fuga ut rerum aliquid.', 'Magnam nam non quas aut debitis aut nostrum ea.', '52.95', 3, '2024-07-17 02:57:35', '2024-07-17 02:57:35'),
(6, 'Mrs. Barbara Gutkowski', 'bo-hoa-hong-do-tang-ban-gai.jpg', '677.64', 14, 'Veritatis eius quis similique vitae nihil dolore. Assumenda temporibus ut sunt illo et. Eaque amet facilis placeat est.', 'Similique ipsa doloribus et.', '61.78', 1, '2024-07-17 02:57:35', '2024-07-17 02:57:35'),
(7, 'Else Mohr', 'bo-hoa-hong-tang-sinh-nhat.jpg', '760.64', 32, 'Quidem aut incidunt quia in. Sequi odio iste ut pariatur error numquam nulla. Et deserunt id illo est et cum.', 'Voluptates voluptatibus necessitatibus odio qui.', '45.78', 2, '2024-07-17 02:57:35', '2024-07-17 02:57:35'),
(8, 'Brooklyn Schroeder', 'bo-hoa-ly-ki-niem.jpg', '621.71', 65, 'Vel eum nobis quia vel dicta. Qui nihil aut qui in quaerat. Nemo dolores molestias cum qui non saepe est harum. Non mollitia culpa et consequatur reiciendis ab commodi.', 'Quo distinctio ut quia sint quas earum.', '29.65', 2, '2024-07-17 02:57:35', '2024-07-17 02:57:35'),
(9, 'Adriel Mayer III', 'y-nghia-so-luong-hoa-hong.jpg', '28.53', 6, 'Est debitis qui aspernatur voluptas et. Veniam repudiandae similique cum tempore quis harum at. Facilis odio molestias ut. Vel optio illum nulla libero. Dolore consequatur qui voluptatem voluptatem.', 'Et in autem vel omnis.', '8.79', 2, '2024-07-17 02:57:35', '2024-07-17 02:57:35'),
(10, 'Sylvia Buckridge', 'hoa-khai-truong-nhu-y-cat-tuong.jpg', '478.74', 1, NULL, 'Sunt doloribus cumque omnis reprehenderit.', '41.97', 1, '2024-07-17 02:57:35', '2024-07-17 02:57:35'),
(12, 'Gia Abshire', 'bo-hoa-mau-don.jpg', '105.13', 62, 'Doloribus doloribus aut qui. Aut et sed autem libero. Quos dolores non aut ullam vitae illum. Illum quos consequatur vel unde ut.', 'Sequi ipsum impedit nam enim.', '29.40', 2, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(13, 'Carlie Bosco Jr.', 'hoa-chuc-mung-20-11-hoa-cuc.jpg', '145.35', 2, 'Modi incidunt deleniti accusantium ipsum consectetur explicabo ex. Omnis architecto ab nesciunt.', 'Aliquam placeat id et vel.', '88.91', 4, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(14, 'Hudson Kirlin IV', 'bo-hoa-tang-me-hoa-cam-chuong.jpg', '308.17', 82, 'Est molestiae hic perspiciatis quo ut eum blanditiis. Quibusdam ullam tenetur sed soluta delectus reiciendis ex. Est dolorem tempore eum officiis qui nulla ipsa laboriosam.', 'Est laborum reprehenderit enim sed sed.', '0.03', 1, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(15, 'Nathanial Williamson', 'hoa-chuc-mung-20-11-hoa-cam-chuong.jpg', '437.71', 38, 'Optio distinctio corporis vel accusamus reprehenderit vel. Vel eaque temporibus quia ut aut ducimus aut. Autem laboriosam praesentium cum cumque et. Id ipsam est quae aut illo similique officia.', 'Harum et eligendi est nobis vitae et.', '63.13', 3, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(16, 'Trevion Johnston', 'hoa-chuc-mung-20-11-hoa-cuc.jpg', '215.06', 61, 'Nulla rerum in pariatur ab. Et numquam et voluptate officiis. Fuga commodi dolor cum quidem est et voluptatem.', 'Ratione quidem minus ut ut accusamus.', '87.78', 1, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(17, 'Colin Funk', 'hoa-chuc-mung-20-11-hoa-hong.jpg', '912.70', 50, 'At quos atque iusto nesciunt. Voluptates est vitae ut sed rerum sequi optio. Quasi id eos architecto eaque aut libero molestiae.', 'Dolores velit natus nostrum et perspiciatis id.', '59.95', 2, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(18, 'Dr. Carroll Collier', 'hoa-chuc-mung-20-11-hoa-sen.jpg', '742.78', 68, 'Nisi ut suscipit et doloribus fugiat autem sed. Eos ut dignissimos esse unde vel fuga at. Est a libero eligendi expedita.', 'Molestiae tempora repudiandae rerum et.', '91.21', 4, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(19, 'Prof. Vivianne Beahan V', 'hoa-cuoi-am-ap.jpg', '876.69', 29, 'Nesciunt beatae commodi dolorum corrupti excepturi sint. Perferendis maiores et qui aut quo nemo. Doloremque doloribus iste vel natus aut eum.', 'Adipisci non ut nostrum et amet optio quo odio.', '54.80', 1, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(20, 'Dr. Gussie Murazik', 'y-nghia-so-luong-hoa-hong.jpg', '270.31', 20, 'Ea quia itaque accusamus sed. Autem ex et voluptatum voluptates rerum ut consectetur. Cupiditate ea distinctio consequatur omnis quo. Doloribus quia asperiores rerum nesciunt.', 'Qui molestiae aperiam optio dolor.', '6.12', 3, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(21, 'Prof. Darien Cummerata DVM', 'hoa-cuoi-cam-tu-cau-ngat-xanh.jpg', '303.37', 23, 'Quos sit ipsum eos omnis. Nostrum laborum quia et non quisquam sequi itaque eveniet. Perspiciatis eveniet esse libero.', 'Ipsum quis exercitationem ut iusto quia.', '63.14', 4, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(22, 'Wilhelmine Stamm IV', 'hoa-cuoi-cam-tu-cau-hong.jpg', '707.81', 60, 'Molestias odit commodi est qui a. Quae dolores eos velit ex et dolor incidunt quo. Corrupti ex delectus necessitatibus est.', 'Autem facilis sed maxime magnam explicabo.', '52.94', 2, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(23, 'Amya Gislason MD', 'ke-hoa-khai-truong-mini-xinh-yeu.jpg', '499.97', 7, 'Incidunt et beatae sed qui atque. Animi sit nemo non ratione. Non consequatur nulla ducimus quis nemo deleniti incidunt.', 'Nihil quis reprehenderit modi nihil ut.', '67.58', 2, '2024-07-17 02:57:36', '2024-07-17 02:57:36'),
(24, 'Frankie Carroll', 'hoa-khai-truong-nhu-y-cat-tuong.jpg', '523.64', 42, 'Quisquam voluptatem dicta est id. Numquam rerum ipsam ut accusantium doloribus in in. Magnam est vel accusamus ut sapiente dolor.', 'Deserunt iste numquam quidem.', '97.46', 1, '2024-07-17 02:57:36', '2024-07-17 02:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Đại Trần Đức', 'cut0266@gmail.com', NULL, '$2y$12$Q2Eb/RXqZMOm.A.Q9CbyU.QakRW5qbtO9JEdDJz5OBbN9qZ9bgFk6', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cars_id_user_foreign` (`id_user`),
  ADD KEY `cars_id_product_foreign` (`id_product`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `cars_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
