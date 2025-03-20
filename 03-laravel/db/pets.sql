-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2025 a las 16:26:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petsapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pets`
--

CREATE TABLE `pets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'no-image.png',
  `kind` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pets`
--

INSERT INTO `pets` (`id`, `name`, `photo`, `kind`, `weight`, `age`, `breed`, `location`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Firulais', 'no-image.png', 'Dog', 16, 2, 'Shiba Inu', 'Kioto', 'El shiba inu es un perro bonito', 0, '2025-03-20 20:12:30', NULL),
(2, 'Michi', 'no-image.png', 'Cat', 4, 18, 'Siames', 'Osaka', 'El siames tiene lindos colores', 0, '2025-03-20 20:12:30', NULL),
(3, 'Toby', 'no-image.png', 'Dog', 19, 4, 'Criollo', 'Colombia', 'Toby es negro', 0, '2025-03-20 20:12:30', NULL),
(4, 'marvin', 'no-image.png', 'Dog', 62, 96, 'Turquoise', 'Gaylordton', 'Omnis totam rerum velit quia ut ullam et doloribus nesciunt.', 0, '2025-03-20 20:12:30', '2025-03-20 20:12:31'),
(5, 'hermann', 'no-image.png', 'Fish', 54, 32, 'Yellow', 'Gilbertfort', 'Repellat necessitatibus et non modi commodi qui dolorem est doloremque totam eius aspernatur.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(6, 'rath', 'no-image.png', 'Cat', 64, 63, 'CadetBlue', 'Raqueltown', 'Saepe libero quisquam et non sint quia sint iure nulla ullam deleniti.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(7, 'harvey', 'no-image.png', 'Mouse', 55, 44, 'Turquoise', 'Earleneport', 'Numquam pariatur et dicta dolorum consequatur temporibus aliquid quod corrupti sit ut rem cum.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(8, 'pagac', 'no-image.png', 'Fish', 42, 41, 'PaleVioletRed', 'Kuphalbury', 'Quia enim optio consequatur et molestias expedita illo veritatis quaerat.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(9, 'reichel', 'no-image.png', 'Cat', 62, 64, 'DarkViolet', 'North Jettieview', 'Amet aspernatur ut iure et facere sequi numquam aperiam delectus voluptatibus occaecati et hic voluptatum.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(10, 'bernhard', 'no-image.png', 'Cat', 32, 84, 'Silver', 'West Raymundo', 'Molestias libero vero repellat quia aut placeat mollitia omnis officiis.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(11, 'gerhold', 'no-image.png', 'Fish', 10, 73, 'Olive', 'Jaylenfort', 'Ut vero et magni tenetur neque minima tempora praesentium.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(12, 'bergnaum', 'no-image.png', 'Bird', 48, 46, 'LavenderBlush', 'Lucindaton', 'Fugiat quos non totam voluptatibus id et ratione reiciendis voluptas aut.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(13, 'dicki', 'no-image.png', 'Dog', 23, 99, 'LavenderBlush', 'New Marlinhaven', 'Sunt autem quis aut omnis sed odio.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(14, 'okeefe', 'no-image.png', 'Mouse', 29, 53, 'Maroon', 'North Urbanchester', 'Consequatur eum consequatur laudantium cumque dolorem quia praesentium deserunt at porro.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(15, 'bruen', 'no-image.png', 'Cat', 29, 58, 'Orchid', 'Port Ethan', 'Quam adipisci harum assumenda corporis sapiente porro enim quidem ea possimus soluta.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(16, 'oconner', 'no-image.png', 'Cat', 37, 75, 'SpringGreen', 'South Elenor', 'Ut et aut officia qui et odio voluptatum.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(17, 'graham', 'no-image.png', 'Cat', 3, 73, 'OldLace', 'North Furman', 'Ratione vel rerum aut atque optio dolor non harum.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(18, 'daniel', 'no-image.png', 'Bird', 19, 45, 'MediumSeaGreen', 'North Chasity', 'Qui nulla architecto similique aperiam sunt eveniet dolorum commodi nemo.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(19, 'williamson', 'no-image.png', 'Dog', 79, 49, 'LightSkyBlue', 'West Celestino', 'Aliquid velit quasi eligendi ut sint dolorem voluptatem molestiae nesciunt.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(20, 'dibbert', 'no-image.png', 'Dog', 59, 22, 'Green', 'Lewport', 'At dolorem aspernatur ab similique nulla ipsum id tempore vitae occaecati commodi.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(21, 'turner', 'no-image.png', 'Bird', 70, 72, 'GreenYellow', 'Port Hankfurt', 'Itaque voluptates iure quaerat voluptas incidunt cumque et natus dolores rerum.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(22, 'watsica', 'no-image.png', 'Bird', 6, 58, 'LightSkyBlue', 'Port Clementina', 'Modi laboriosam et et et qui nam.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(23, 'sporer', 'no-image.png', 'Bird', 65, 41, 'Chocolate', 'South Jennifer', 'Eveniet mollitia praesentium numquam eum quaerat accusantium accusantium aut quia repudiandae enim numquam distinctio.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(24, 'sanford', 'no-image.png', 'Dog', 13, 71, 'Cornsilk', 'East Roscoeburgh', 'Veritatis et incidunt rem est rerum quia dolores eos porro.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(25, 'bergstrom', 'no-image.png', 'Fish', 18, 42, 'SpringGreen', 'Lake Rodrickshire', 'Eum voluptatum explicabo voluptas quod qui tenetur ducimus cupiditate et.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(26, 'schulist', 'no-image.png', 'Mouse', 64, 53, 'LightCyan', 'Yoshikoport', 'Ad culpa qui blanditiis quia facere et sit sint expedita.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(27, 'dubuque', 'no-image.png', 'Cat', 76, 45, 'Linen', 'Johnstonmouth', 'Libero omnis vero quia aliquid adipisci laboriosam ipsum distinctio voluptas veritatis.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(28, 'stanton', 'no-image.png', 'Mouse', 2, 45, 'DarkGoldenRod', 'East Jodie', 'Sunt consequatur quisquam aut aut omnis debitis omnis provident similique.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(29, 'labadie', 'no-image.png', 'Dog', 59, 71, 'Darkorange', 'Port Gabriel', 'Quia placeat rerum sequi sunt accusantium quibusdam ipsam recusandae consequuntur voluptatibus consequatur.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(30, 'huel', 'no-image.png', 'Fish', 12, 19, 'YellowGreen', 'Lake Caitlyn', 'Ut laudantium et repudiandae quo et odio possimus non labore aliquid quis.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(31, 'grimes', 'no-image.png', 'Fish', 46, 48, 'AliceBlue', 'West Frederickport', 'Fugit sapiente unde autem pariatur ratione ipsam voluptatem.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(32, 'considine', 'no-image.png', 'Bird', 68, 40, 'Darkorange', 'Boganport', 'Rerum in deserunt velit enim quidem eligendi amet quidem sunt nostrum vel reprehenderit.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(33, 'mayer', 'no-image.png', 'Fish', 22, 45, 'DarkGoldenRod', 'New Gisselleborough', 'Ea ut cumque aut eos ut dolorem fugit sed voluptates aut est.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(34, 'braun', 'no-image.png', 'Bird', 45, 19, 'DarkSlateBlue', 'Toyside', 'Itaque unde dolores et perspiciatis et omnis et ea aut consectetur.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(35, 'hermann', 'no-image.png', 'Fish', 74, 33, 'DimGray', 'North Mara', 'Est doloremque ratione ratione mollitia occaecati veniam ut omnis.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(36, 'lemke', 'no-image.png', 'Fish', 6, 48, 'Gold', 'South Geraldine', 'Eos animi voluptatem sit dignissimos et accusantium nihil recusandae a ipsa hic porro.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(37, 'predovic', 'no-image.png', 'Bird', 8, 55, 'Plum', 'West Tryciashire', 'Et nam odit et neque nam inventore ut eveniet error.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(38, 'larson', 'no-image.png', 'Dog', 30, 28, 'LightPink', 'Walshfurt', 'Omnis rerum commodi voluptas sunt deleniti nostrum et vitae.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(39, 'senger', 'no-image.png', 'Bird', 77, 78, 'Purple', 'Port Jeramie', 'Ut ex velit pariatur dolores est harum consequatur vitae distinctio at facere non.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(40, 'hettinger', 'no-image.png', 'Mouse', 56, 69, 'LimeGreen', 'West Kayli', 'Vitae voluptatum dolores adipisci necessitatibus sed ipsum ad incidunt quia nesciunt.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(41, 'rippin', 'no-image.png', 'Mouse', 16, 58, 'MediumTurquoise', 'Shainaborough', 'Molestiae nihil natus similique in aut necessitatibus dolorem dolore ratione consequatur assumenda molestias eaque.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(42, 'kerluke', 'no-image.png', 'Cat', 40, 99, 'Orchid', 'West Adrienneborough', 'Rerum facere incidunt ad in magnam praesentium quis perferendis vero et vel consequatur veritatis.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(43, 'reinger', 'no-image.png', 'Dog', 24, 59, 'SlateBlue', 'Reingershire', 'Repellendus molestias eaque non debitis sed ut necessitatibus impedit quos recusandae.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(44, 'bernhard', 'no-image.png', 'Cat', 10, 57, 'Darkorange', 'North Olga', 'Similique quis eaque nobis alias id beatae ut harum tempore.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(45, 'ruecker', 'no-image.png', 'Mouse', 1, 69, 'PaleTurquoise', 'Kemmerhaven', 'Minus consequatur ipsam id nobis ipsum veritatis dolore quod.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(46, 'harris', 'no-image.png', 'Cat', 44, 99, 'WhiteSmoke', 'New Salvatoreshire', 'Consequatur aut ipsam ex deserunt molestias et temporibus sint molestias ut minima ipsum harum.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(47, 'donnelly', 'no-image.png', 'Fish', 74, 99, 'BlanchedAlmond', 'Damarisfort', 'Omnis sit sit provident possimus omnis necessitatibus eum nesciunt.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(48, 'brakus', 'no-image.png', 'Dog', 52, 46, 'HotPink', 'Katrinehaven', 'Id laborum impedit nostrum et dolorem aut eligendi est reiciendis itaque.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(49, 'rogahn', 'no-image.png', 'Dog', 58, 78, 'Ivory', 'East Kris', 'Dicta quas sit et unde inventore rerum voluptatem.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(50, 'reilly', 'no-image.png', 'Mouse', 70, 47, 'Orange', 'Ezrafurt', 'Voluptatum aut ab et explicabo est pariatur natus qui veritatis vitae quasi.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(51, 'gusikowski', 'no-image.png', 'Mouse', 1, 76, 'Silver', 'Misaelville', 'Laboriosam sint assumenda repudiandae voluptatem illum magni quia inventore sapiente aut reiciendis reiciendis minus.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(52, 'bartoletti', 'no-image.png', 'Bird', 55, 76, 'Aquamarine', 'South Fiona', 'Delectus quo quia at commodi impedit vel qui ducimus vitae.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(53, 'labadie', 'no-image.png', 'Bird', 49, 15, 'DarkGoldenRod', 'South Arlo', 'Delectus tempora quidem accusamus quis unde iusto.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(54, 'raynor', 'no-image.png', 'Fish', 32, 26, 'LightPink', 'Millsborough', 'Earum non ad dolores blanditiis earum saepe nihil voluptatem.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(55, 'considine', 'no-image.png', 'Fish', 20, 88, 'MediumSeaGreen', 'Abbieton', 'Qui id ipsam maiores nemo saepe culpa omnis numquam.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(56, 'marks', 'no-image.png', 'Mouse', 52, 33, 'DarkOrchid', 'North Koleshire', 'Alias voluptatem non voluptatem et expedita voluptate assumenda dicta sed et.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(57, 'lowe', 'no-image.png', 'Fish', 52, 82, 'LightCoral', 'Elsabury', 'Officia ea qui aut et perspiciatis non omnis vel beatae aut vel explicabo.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(58, 'kemmer', 'no-image.png', 'Bird', 15, 91, 'Orchid', 'Port Brianneburgh', 'Ut labore molestiae facere dolor perspiciatis atque.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(59, 'oconnell', 'no-image.png', 'Fish', 8, 81, 'DarkRed', 'East Kara', 'Nemo error est ratione voluptatibus ea velit voluptas.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(60, 'ruecker', 'no-image.png', 'Mouse', 16, 64, 'MediumSlateBlue', 'New Anastasia', 'Quo id sit minus rerum pariatur eveniet.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(61, 'oconner', 'no-image.png', 'Cat', 1, 59, 'DarkBlue', 'Predovictown', 'Voluptatem pariatur consequatur magnam voluptatem veniam dolorem vel nesciunt.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(62, 'osinski', 'no-image.png', 'Cat', 46, 55, 'DarkOrchid', 'Vickyport', 'Tempora officia ut nobis quia saepe sit distinctio.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(63, 'stracke', 'no-image.png', 'Dog', 5, 63, 'PaleTurquoise', 'South Ettie', 'Laboriosam officia omnis vel inventore possimus est et aliquid quidem eligendi facilis facere debitis.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(64, 'sporer', 'no-image.png', 'Mouse', 61, 85, 'MediumTurquoise', 'Gladyceland', 'Illum nisi non alias vitae inventore aut sint et aut.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(65, 'fritsch', 'no-image.png', 'Mouse', 67, 95, 'Aqua', 'Bradtkeport', 'Hic dolor quod minima dignissimos dolores esse velit in id omnis voluptas doloremque similique.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(66, 'hessel', 'no-image.png', 'Bird', 22, 55, 'Turquoise', 'Gillianburgh', 'Sit dolores et rerum ipsum omnis quas sapiente et vel dolor minima iure.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(67, 'oreilly', 'no-image.png', 'Fish', 68, 13, 'Wheat', 'South Patsyton', 'Nemo quia sapiente non unde aut laborum.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(68, 'langworth', 'no-image.png', 'Cat', 35, 77, 'Magenta', 'Kochton', 'Odit harum voluptatem quia quia accusantium sit et quo veniam vitae.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(69, 'blanda', 'no-image.png', 'Mouse', 10, 20, 'LightSeaGreen', 'Bridgetteside', 'Commodi nihil nihil cum saepe voluptatem dolore accusamus earum sequi quos nostrum et.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(70, 'littel', 'no-image.png', 'Fish', 4, 36, 'DeepPink', 'North Lauriannehaven', 'Vero ipsa nemo quis rerum consequatur reprehenderit.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(71, 'kub', 'no-image.png', 'Bird', 47, 94, 'Yellow', 'Wizamouth', 'Perspiciatis alias pariatur eos illum exercitationem itaque fugiat est assumenda cumque magnam cum dolorem autem.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(72, 'glover', 'no-image.png', 'Mouse', 5, 12, 'Lime', 'Kuhlmanside', 'Sint repellat explicabo quis consequatur sit est dolor in itaque.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(73, 'stiedemann', 'no-image.png', 'Dog', 13, 88, 'HotPink', 'Kareemburgh', 'Consectetur minus ut aut laborum minus ducimus.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(74, 'heller', 'no-image.png', 'Fish', 58, 63, 'BlueViolet', 'New Allie', 'Ut ex sint ducimus rem eum maiores explicabo et vitae.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(75, 'baumbach', 'no-image.png', 'Fish', 47, 78, 'YellowGreen', 'Port Ransomside', 'Ipsam tempore ea velit aliquam et quos perspiciatis assumenda.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(76, 'gislason', 'no-image.png', 'Fish', 59, 39, 'OliveDrab', 'South Alejandrin', 'Qui qui aliquam inventore quo maiores et et distinctio ratione ut.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(77, 'gottlieb', 'no-image.png', 'Cat', 37, 79, 'Navy', 'Leannonport', 'Nam quaerat aspernatur adipisci eum nihil animi eaque adipisci voluptatum rerum ut.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(78, 'armstrong', 'no-image.png', 'Bird', 74, 14, 'DarkSalmon', 'North Geneport', 'Nostrum est aliquid nemo dignissimos id et optio et ipsum fugit explicabo quo rem.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(79, 'jerde', 'no-image.png', 'Mouse', 44, 21, 'Lime', 'Lake Alysonstad', 'Beatae ut fuga ut qui nesciunt est rerum ratione.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(80, 'hartmann', 'no-image.png', 'Fish', 34, 68, 'DarkGreen', 'Noemieborough', 'Nihil magnam assumenda repudiandae nostrum sed molestiae quas aut.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(81, 'yost', 'no-image.png', 'Mouse', 77, 99, 'DimGray', 'Port Blazefort', 'Velit totam nam quibusdam est amet excepturi magni at qui sed distinctio rerum.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(82, 'marquardt', 'no-image.png', 'Bird', 48, 64, 'Crimson', 'Jaysonside', 'Hic commodi rerum a magni quam natus quidem.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(83, 'kassulke', 'no-image.png', 'Dog', 9, 44, 'DarkCyan', 'West Burleymouth', 'Qui aut nulla repellat corrupti eligendi est error rerum quae aliquid voluptas.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(84, 'stoltenberg', 'no-image.png', 'Fish', 52, 79, 'CadetBlue', 'Blockview', 'Distinctio molestias nostrum modi esse odit qui laborum reiciendis et nemo et.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(85, 'krajcik', 'no-image.png', 'Dog', 17, 89, 'PaleTurquoise', 'Emardport', 'Unde ut doloribus voluptas et vel inventore quo molestiae quae aut.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(86, 'jaskolski', 'no-image.png', 'Bird', 31, 43, 'Lavender', 'Lake Elenora', 'Quasi natus a eveniet nam possimus beatae excepturi provident magnam in quasi.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(87, 'conroy', 'no-image.png', 'Mouse', 67, 81, 'MediumVioletRed', 'Port Adrianamouth', 'Blanditiis ut explicabo laudantium est nemo quis in unde quae voluptas.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(88, 'larkin', 'no-image.png', 'Mouse', 39, 80, 'MediumSeaGreen', 'Arnaldomouth', 'Dolorem ad sed dolorem voluptas reiciendis molestias aut sit.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(89, 'hessel', 'no-image.png', 'Fish', 24, 71, 'RosyBrown', 'North Natasha', 'Qui magnam aspernatur eum omnis voluptates earum voluptate magnam ab enim quo asperiores enim.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(90, 'zulauf', 'no-image.png', 'Dog', 69, 79, 'CadetBlue', 'Osinskiburgh', 'Nam pariatur aut odio quisquam ut modi rem quia est voluptas minus eaque.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(91, 'zemlak', 'no-image.png', 'Fish', 48, 19, 'Teal', 'Abelardoberg', 'Autem qui aut modi pariatur quis commodi provident est soluta.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(92, 'cartwright', 'no-image.png', 'Fish', 30, 89, 'MediumSlateBlue', 'South Delilah', 'Facilis voluptatem recusandae reiciendis quia dolores eos.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(93, 'davis', 'no-image.png', 'Mouse', 1, 24, 'SeaShell', 'Linwoodland', 'Natus omnis accusantium labore molestiae quae molestias in officiis.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(94, 'kohler', 'no-image.png', 'Mouse', 22, 26, 'Silver', 'Lake Orinton', 'Dolor eius ad et omnis unde quia deserunt.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(95, 'stokes', 'no-image.png', 'Dog', 13, 51, 'LavenderBlush', 'East Britneyfurt', 'Recusandae omnis laboriosam sint architecto et vel voluptatum ut quos nam qui.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(96, 'bogan', 'no-image.png', 'Fish', 38, 40, 'Magenta', 'Lake Cesar', 'Vel quam doloribus in eveniet eum officiis dolorem eos quae temporibus id.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(97, 'strosin', 'no-image.png', 'Fish', 32, 18, 'Crimson', 'Schneiderberg', 'Id error sed beatae eum exercitationem dolores.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(98, 'beatty', 'no-image.png', 'Mouse', 25, 55, 'LightCyan', 'Destineeburgh', 'Nihil quod possimus quae quod iusto quisquam tenetur itaque molestiae et dolorum.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(99, 'kunde', 'no-image.png', 'Mouse', 57, 75, 'Turquoise', 'North Aidaburgh', 'Ea ad dolore a vero dolore vero autem nesciunt doloremque.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(100, 'bauch', 'no-image.png', 'Fish', 32, 92, 'PaleGreen', 'Oceaneville', 'Eveniet eius id officiis quo quo et dolorum mollitia dignissimos deserunt et.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(101, 'dare', 'no-image.png', 'Dog', 5, 30, 'Snow', 'Madgebury', 'Nulla voluptatem rerum sint maiores vitae quibusdam dolor veritatis nemo enim et mollitia placeat.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(102, 'morissette', 'no-image.png', 'Mouse', 68, 82, 'MediumSlateBlue', 'North Frederik', 'Quia saepe suscipit explicabo quo sit quasi laudantium.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31'),
(103, 'hodkiewicz', 'no-image.png', 'Dog', 67, 79, 'BurlyWood', 'Schillerfurt', 'Molestiae sed dolorum nobis enim quibusdam quaerat dicta molestiae et fugiat.', 0, '2025-03-20 20:12:31', '2025-03-20 20:12:31');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pets`
--
ALTER TABLE `pets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pets`
--
ALTER TABLE `pets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
