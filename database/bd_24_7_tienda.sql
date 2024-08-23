/*
 Navicat Premium Data Transfer

 Source Server         : mis_proyectos_bd
 Source Server Type    : MySQL
 Source Server Version : 50724
 Source Host           : localhost:3306
 Source Schema         : bd_24_7_tienda

 Target Server Type    : MySQL
 Target Server Version : 50724
 File Encoding         : 65001

 Date: 01/01/2020 18:29:11
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES (1, 'Bicicletas de Ruta', 'bicicletas-de-ruta', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', '#440022', NULL, NULL);
INSERT INTO `categories` VALUES (2, 'Bicicletas Híbridas', 'bicicletas-hibridas', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', '#445500', NULL, NULL);
INSERT INTO `categories` VALUES (3, 'Bicicletas Urbanas', 'bicicletas-urbanas', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', '#445502', NULL, NULL);
INSERT INTO `categories` VALUES (4, 'Bicicletas plegables', 'bicicletas-plegables', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, perferendis!', '#445503', NULL, NULL);

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (5, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (6, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (7, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (8, '2019_12_05_035901_create_categories_table', 1);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of password_resets
-- ----------------------------
INSERT INTO `password_resets` VALUES ('daniel30081990@gmail.com', '$2y$10$9m8Qy6/IC9m73g9bHmQUTu0VHI1qdH3YFUQtUuXu9/EeCyhyngX9.', '2019-12-25 04:21:57');

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `extract` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(10, 2) NOT NULL,
  `image` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of products
-- ----------------------------
INSERT INTO `products` VALUES (1, 'Bicicleta 1', 'bicicleta-1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 275.00, 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/b/m/bm2015-drako-20-grafito-2020-01.jpg', 1, 1, '2019-12-08 03:23:27', '2019-12-08 03:23:27');
INSERT INTO `products` VALUES (2, 'Bicicleta 2', 'bicicleta-2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 255.00, 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/b/a/ba2951_merak_1_29_negro-blanco_2020_01_1.jpg', 1, 1, '2019-12-08 03:23:27', '2019-12-08 03:23:27');
INSERT INTO `products` VALUES (3, 'Bicicleta 3', 'bicicleta-3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 300.00, 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/b/m/bm2416-luna-24-rosado-2020-01.jpg', 1, 1, '2019-12-08 03:23:27', '2019-12-08 03:23:27');
INSERT INTO `products` VALUES (4, 'Bicicleta 4', 'bicicleta-4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 475.00, 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/b/a/ba2963-orion-5-29-celeste-2020-01.png', 1, 2, '2019-12-08 03:23:27', '2019-12-08 03:23:27');
INSERT INTO `products` VALUES (5, 'Bicicleta 5', 'bicicleta-5', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 280.00, 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/m/y/my20_remote_ctrl_1_1.jpg', 1, 2, '2019-12-08 03:23:27', '2019-12-08 03:23:27');
INSERT INTO `products` VALUES (6, 'Bicicleta 6', 'bicicleta-6', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 275.00, 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/e/b/eb2751-parsec-grafito-2020-01_1.jpg', 1, 2, '2019-12-08 03:23:27', '2019-12-08 03:23:27');
INSERT INTO `products` VALUES (7, 'Bicicleta 7', 'bicicleta-7', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 275.00, 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/m/y/my20_process_153_dl_29_1_1.jpg', 1, 1, '2019-12-08 03:23:27', '2019-12-08 03:23:27');
INSERT INTO `products` VALUES (8, 'Bicicleta 8', 'bicicleta-8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus doloribus molestias odio nisi! Aspernatur eos saepe veniam quibusdam totam.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 275.00, 'https://www.oxfordstore.cl/media/catalog/product/cache/1/image/1200x/17f82f742ffe127f42dca9de82fb58b1/k/o/kona153a_1_1.jpg', 1, 2, '2019-12-08 03:23:27', '2019-12-08 03:23:27');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NULL DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE,
  UNIQUE INDEX `users_user_unique`(`user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'Daniel', 'Angel', 'daniel30081990@gmail.com', 'DanielGeek', NULL, '$2y$10$A5KnToqCnE69JA0SZqR9pea3inEhKKaFuwi2CHhrNCZB02p/DUcQW', 'admin', 1, 'Venegas 738-A, Puerto Varas, Chile.', NULL, '2019-12-17 03:17:00', '2019-12-17 03:17:00');
INSERT INTO `users` VALUES (2, 'Ruth', 'Angel', 'ruth@gmail.com', 'ruth', NULL, '$2y$10$JERIluu1Q92/jMuhRC05eecgxQUV3nOdkS5uDg6FmzNeDWcU.sddW', 'user', 1, 'Zulia, Venezuela', NULL, '2019-12-17 03:17:00', '2019-12-17 03:17:00');
INSERT INTO `users` VALUES (3, 'prueba', 'apeprueba', 'prueba@gmail.com', 'pruebageek', NULL, '$2y$10$epx6/2M1y3Ddods4uwrMAu4rQd9JgBYn0wTXQSpK0DF6vJXB9SIMO', 'user', NULL, NULL, NULL, '2019-12-25 03:37:14', '2019-12-25 03:37:14');
INSERT INTO `users` VALUES (5, 'prueba', 'apeprueba', 'prueba2@gmail.com', 'prueba2Geek', NULL, '$2y$10$SN9TILCO4GSnOvkEnVihuOZ5G2defU16i41lczBsMel7KyKDZEyKS', 'user', NULL, NULL, NULL, '2019-12-25 03:47:56', '2019-12-25 03:47:56');
INSERT INTO `users` VALUES (6, 'prueba3', 'app3 apellido', 'prueba3@gmail.com', 'ap3', NULL, '$2y$10$Bjoo3vvwF/NdgW3LUZ.e..sf1Z3wpWKOXsAMbQiJ.fBeL9JiGvHtu', 'user', NULL, NULL, NULL, '2019-12-25 03:55:13', '2019-12-25 03:55:13');
INSERT INTO `users` VALUES (7, 'p4 nombre', 'p4 apellido', 'prueba4@gmail.com', 'p4', NULL, '$2y$10$7zGPgVF0ZN.OvMZMuWG39uaqkDiIaDp7UGvQE4JwARmyIWv76Xs/a', 'user', NULL, NULL, NULL, '2019-12-25 04:05:18', '2019-12-25 04:05:18');
INSERT INTO `users` VALUES (8, 'p5 nombre', 'p5 apellido', 'prueba5@gmail.com', 'p5', NULL, '$2y$10$AnzG/xQunbKDNuwgYJ40EelYNWOwkizje7GymEAg.A5CsO1SjdD5W', 'user', NULL, NULL, NULL, '2019-12-25 04:09:19', '2019-12-25 04:09:19');
INSERT INTO `users` VALUES (9, 'p5 nombre', 'p5ap', 'p5@gmail.com', 'p6', NULL, '$2y$10$NUUMH1CPGHxFY8CKS1ZsNeH1WVWYPI2ZP0t3.8bvYunWumixXNERu', 'user', NULL, NULL, NULL, '2020-01-01 19:54:40', '2020-01-01 19:54:40');

SET FOREIGN_KEY_CHECKS = 1;
