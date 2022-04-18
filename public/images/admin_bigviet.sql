-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 06:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_bigviet`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` int(11) DEFAULT NULL,
  `kitchen_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `head_img`, `active`, `parent_id`, `kitchen_id`, `created_at`, `updated_at`) VALUES
(1, 'Các món nướng', 'Pariatur officiis aut aut non qui sit. Officiis necessitatibus qui ullam quas ipsam. Excepturi id nemo aperiam natus facilis animi id. Officia maxime nobis id.', '/images/item6.png', 1, NULL, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(2, 'Lẩu', 'Necessitatibus recusandae quo eum ut. In architecto natus fugiat quos temporibus dolor. Voluptates ut numquam earum omnis dolorem ut est. Voluptas quis dolor possimus sequi culpa ea.', '/images/item1.png', 1, NULL, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(3, 'Các món rau', 'Enim neque dolor qui. Et iusto voluptas atque. Aliquam labore rerum reprehenderit dolorum nesciunt. Perspiciatis quae ex iusto sed atque et excepturi.', '/images/item2.png', 1, NULL, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(4, 'Lẩu', 'Et et velit aspernatur sunt quibusdam qui. Est minima consequatur voluptatem aliquid dolor illo et. Autem animi pariatur dicta. At quas tempora et pariatur. Assumenda sit alias saepe nihil.', '/images/item3.png', 1, NULL, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(5, 'Các món nướng', 'Consectetur itaque et exercitationem quidem. Quia ea sed repellat ea. Et odit explicabo cum consequatur unde.', '/images/item12.png', 1, NULL, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(6, 'Lẩu', 'Voluptatem alias eius fugiat consequuntur laborum. Asperiores explicabo rem vel libero. Corrupti libero animi ut.', '/images/item12.png', 1, NULL, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(7, 'Lẩu', 'Nobis vel maxime aut quaerat sit. Repellat velit in perspiciatis iusto. Dolores ducimus rerum et ipsa soluta ut corporis.', '/images/item1.png', 1, NULL, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(8, 'Lẩu', 'Beatae voluptas est qui et. Eum maxime quam reprehenderit veniam doloribus illum eos. Provident ut minus corporis repellat et.', '/images/item5.png', 1, NULL, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(9, 'Phở', 'Dolore explicabo culpa quod non laudantium. Dicta quibusdam veniam molestiae non illo impedit unde. Aut est tempora quas non voluptatem aspernatur eveniet.', '/images/item4.png', 1, NULL, 2, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(10, 'Khai vị', 'Qui perferendis dolores vero eligendi. Cupiditate consequatur aspernatur pariatur. Neque ut qui quo fuga necessitatibus. Delectus non placeat velit adipisci ducimus cumque.', '/images/item11.png', 1, NULL, 2, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(11, 'Cơm', 'Dolore quia quasi est similique eius cumque. Quia commodi vel asperiores et ea tempore sit. Minima quis temporibus explicabo sit.', '/images/item1.png', 1, NULL, 2, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(12, 'Phở', 'Perferendis accusantium voluptatum officia sapiente dolore. Delectus veritatis fugiat qui. Reprehenderit et suscipit exercitationem eos dolore quia.', '/images/item1.png', 1, NULL, 2, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(13, 'Các món xào', 'Maiores assumenda blanditiis a et quis. Non soluta vero dolores qui voluptatum laudantium et. Ut dolores reprehenderit excepturi tempore delectus qui accusamus.', '/images/item3.png', 1, NULL, 2, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(14, 'Khai vị', 'Consequatur quibusdam ducimus ad quasi voluptate. Et eius rerum aut et. Consequuntur temporibus suscipit possimus.', '/images/item4.png', 1, NULL, 2, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(15, 'Các món xào', 'Libero sunt voluptas impedit. Laboriosam maxime quo nisi culpa dolor. Placeat tempore dolorum dolorem enim aut sequi id. Facere voluptatem aspernatur earum. Non et quia numquam similique sequi.', '/images/item9.png', 1, NULL, 2, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(16, 'Các món xào', 'Id est quae voluptas non vel. Molestiae eius cupiditate nostrum consequatur. Quod ut nesciunt libero sed libero consequatur.', '/images/item10.png', 1, NULL, 2, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(17, 'Cơm', 'Repellat blanditiis voluptate ipsam voluptas aut vel. Et qui eos eos at vel magnam. Rerum illo est reprehenderit natus.', '/images/item7.png', 1, NULL, 3, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(18, 'Các món rau', 'Laborum nihil nam aliquid et aut sint labore. Sit eaque aut ut quod.', '/images/item3.png', 1, NULL, 3, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(19, 'Phở', 'Corrupti quae inventore sit qui eum eos sint. Nesciunt aliquam voluptatem dolor ipsam impedit. Repellat qui error voluptas. Sed consectetur eaque dolor consequatur sit in voluptatem.', '/images/item3.png', 1, NULL, 3, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(20, 'Đồ uống', 'Est ut mollitia consequuntur id. Voluptatibus est eos cupiditate molestiae voluptatum molestiae cupiditate. Amet non voluptatem molestias et minima magnam. Minus vitae omnis rem nulla totam est iure.', '/images/item5.png', 1, NULL, 3, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(21, 'Các món Ốc', 'Reiciendis pariatur cumque labore qui magni numquam doloremque. Voluptatem porro sit ea. Aut unde qui blanditiis nostrum quo.', '/images/item9.png', 1, NULL, 3, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(22, 'Đồ uống', 'Dolore eligendi doloribus ipsum. Voluptatum quae ipsum fugit enim magnam. Vel optio id dignissimos hic. Dolor incidunt dolores ut omnis.', '/images/item9.png', 1, NULL, 3, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(23, 'Các món rau', 'Itaque totam et et voluptas eius occaecati est. Nam autem quod quis illo. Quia necessitatibus ipsum deleniti et.', '/images/item6.png', 1, NULL, 3, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(24, 'Các món Ốc', 'Quas accusantium nesciunt aut. Nostrum vel aut quod doloremque aut a. Ut tenetur voluptas quia voluptatem maiores non aut exercitationem.', '/images/item9.png', 1, NULL, 3, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(25, 'Lẩu', 'Nihil ut quo incidunt molestias est. Dolores aliquid esse sint et. Doloremque sint et voluptas et. Iste doloremque quo quis eum. Et ullam rerum natus omnis odit. Laboriosam vel nobis dolor totam.', '/images/item2.png', 1, NULL, 4, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(26, 'Các món Ốc', 'Iusto aut dolores quidem in et. Similique omnis laboriosam est est sint quae. Sit aut est in fugiat nisi. Molestiae soluta eveniet non aut libero beatae.', '/images/item7.png', 1, NULL, 4, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(27, 'Các món xào', 'Quas aut fugiat excepturi a. Recusandae quo inventore vitae voluptas. Natus id quis est earum deleniti provident. Minus consequatur rem voluptas consequatur accusantium qui.', '/images/item11.png', 1, NULL, 4, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(28, 'Các món Ốc', 'At qui inventore velit voluptates nihil ipsam. Eum quo aperiam enim quo saepe dolorem. Recusandae animi molestiae perferendis eaque.', '/images/item10.png', 1, NULL, 4, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(29, 'Phở', 'Expedita vitae perferendis alias molestiae. Architecto deserunt quia veritatis sunt. Aut voluptatem amet nobis aliquid qui. Ipsum omnis corrupti ut.', '/images/item1.png', 1, NULL, 4, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(30, 'Các món rau', 'Doloremque illo suscipit molestiae vel. Distinctio repellendus placeat in ipsam ad assumenda. Nihil sit deserunt molestiae eligendi eum quas.', '/images/item2.png', 1, NULL, 4, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(31, 'Các món bò', 'Blanditiis ut id quos officia. Est praesentium et et debitis. Quia ut et nostrum autem est nesciunt. Natus asperiores quo itaque nobis ut et.', '/images/item11.png', 1, NULL, 4, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(32, 'Đồ uống', 'Numquam iure beatae debitis molestiae eligendi non et. Dicta quaerat corrupti aut eum. Et eligendi quod quod rerum non. Tempore nesciunt explicabo illum natus natus vel.', '/images/item11.png', 1, NULL, 4, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(33, 'Các món Ốc', 'Qui aspernatur et aut saepe facere. Nesciunt voluptatem sequi reiciendis quaerat. Omnis unde iusto omnis et. Fuga quia culpa dolor est aperiam.', '/images/item2.png', 1, NULL, 5, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(34, 'Lẩu', 'Facilis dolorem sit dolor earum numquam facere a. Adipisci doloribus aut exercitationem. Quo pariatur numquam et aperiam perspiciatis totam enim.', '/images/item4.png', 1, NULL, 5, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(35, 'Các món Ốc', 'Qui in asperiores eius voluptatem doloribus similique ad. Qui aut reiciendis repudiandae natus. Consequuntur quasi blanditiis ipsa dolor modi et dolorum.', '/images/item2.png', 1, NULL, 5, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(36, 'Phở', 'Impedit expedita dolore temporibus ut facilis sint quis dolorem. Dicta cum perspiciatis aliquid. Rerum ut natus occaecati sunt molestiae dolores. Vero eum omnis non doloremque iste.', '/images/item4.png', 1, NULL, 5, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(37, 'Phở', 'Asperiores excepturi qui aut ut. Accusantium vel omnis a dolorum explicabo numquam quod. Id amet omnis quidem neque velit nostrum reprehenderit.', '/images/item4.png', 1, NULL, 5, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(38, 'Cơm', 'Eligendi vero natus eos et et vel voluptatem. Recusandae nam enim hic. Incidunt esse dolores modi dolorum. Maiores vel quo perspiciatis itaque.', '/images/item9.png', 1, NULL, 5, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(39, 'Phở', 'Provident molestiae dolor eveniet velit molestias. Dolorem amet eum dolorem nulla maiores et. Quidem et dolor ex est qui voluptatibus ut. Ut modi veritatis repellat id modi autem.', '/images/item2.png', 1, NULL, 5, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(40, 'Các món xào', 'Rem eos delectus ut quo consectetur voluptatem tenetur facere. Ducimus aspernatur possimus illo et.', '/images/item6.png', 1, NULL, 5, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(41, 'Các món nướng', 'Vel incidunt expedita aspernatur est. Voluptatem accusantium autem qui autem ea quo quis. Mollitia laborum sapiente tenetur aut sunt in et. Quia distinctio architecto distinctio impedit qui aut et.', '/images/item7.png', 1, NULL, 6, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(42, 'Các món bò', 'Consequatur molestias ut et id. Commodi molestiae quis fuga. Natus iste soluta animi et incidunt ullam. Occaecati reiciendis qui est odit. Sint similique et fugiat sapiente a sit dolorum.', '/images/item10.png', 1, NULL, 6, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(43, 'Các món rau', 'Facere hic minus illo eligendi dolorem suscipit fugiat. Porro aliquam ea laudantium autem et. Assumenda aut fugit ipsum et ut quaerat illum.', '/images/item12.png', 1, NULL, 6, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(44, 'Lẩu', 'Commodi in ut modi ut. Quod et omnis laboriosam alias unde sunt ut. Sed non cum amet excepturi quo nihil.', '/images/item10.png', 1, NULL, 6, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(45, 'Các món rau', 'Sed dolore quisquam dicta deleniti. Quidem animi sint expedita quia voluptatibus quia. Est voluptatem quisquam porro aut. Aperiam repudiandae minus ipsa est sequi eos.', '/images/item4.png', 1, NULL, 6, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(46, 'Khai vị', 'Dolor natus quibusdam hic vero ut minus. Veniam esse corporis in repellat ab iure. Placeat necessitatibus tempore qui aut dolorem debitis.', '/images/item6.png', 1, NULL, 6, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(47, 'Các món bò', 'Temporibus animi est nam ipsa laborum laborum qui. Consectetur ab dolor officiis vitae ea praesentium nostrum. Veniam qui sed magnam quia qui neque sint.', '/images/item3.png', 1, NULL, 6, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(48, 'Các món bò', 'Omnis dolore cupiditate eos pariatur doloribus tenetur autem. Quos iusto sunt eos iste quisquam et. Laborum voluptatem veniam labore quam recusandae qui.', '/images/item9.png', 1, NULL, 6, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(49, 'Các món Ốc', 'Vel id quo et sit deleniti. Necessitatibus sed voluptate numquam minima ea deleniti. Velit aut dolor totam nobis et ut quis. Iusto assumenda tempora corrupti voluptas ullam illo.', '/images/item12.png', 1, NULL, 7, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(50, 'Các món nướng', 'Natus amet sunt ipsa ipsam cumque et. Facilis voluptates enim in atque vitae in.', '/images/item6.png', 1, NULL, 7, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(51, 'Các món bò', 'Praesentium aut voluptatem quos consequatur facere saepe. Sed et quibusdam totam sunt consectetur nostrum molestiae. Dolore cupiditate sunt omnis assumenda laudantium.', '/images/item6.png', 1, NULL, 7, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(52, 'Các món xào', 'Quos in deleniti id quisquam. Expedita ut atque dolores pariatur numquam sint. Quisquam incidunt debitis enim aut in. Autem enim ut aspernatur aut.', '/images/item7.png', 1, NULL, 7, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(53, 'Phở', 'Totam qui modi laboriosam enim nam quia nisi saepe. Pariatur vel quam saepe molestiae aut ex facilis. Illum in qui fuga hic deserunt labore est molestiae. Dignissimos nisi praesentium doloribus vel.', '/images/item11.png', 1, NULL, 7, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(54, 'Các món rau', 'Alias dolore ad quis adipisci. Qui mollitia dolores fugiat sit voluptatem repellendus est et. Doloribus sint autem aspernatur consequatur dolorem.', '/images/item5.png', 1, NULL, 7, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(55, 'Các món bò', 'Necessitatibus sed molestiae voluptas inventore atque et atque. Ea occaecati debitis numquam qui dignissimos.', '/images/item1.png', 1, NULL, 7, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(56, 'Đồ uống', 'Neque sit eaque sunt temporibus. Non et aut libero quisquam. Ut impedit ut asperiores voluptatem.', '/images/item3.png', 1, NULL, 7, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(57, 'Các món bò', 'Quas laborum itaque sit totam architecto. Nemo quas explicabo est autem. Officia et sit qui illum quia. Nemo sint velit rem.', '/images/item8.png', 1, NULL, 8, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(58, 'Các món Ốc', 'Qui esse tenetur ducimus rem. Qui ut impedit quas. Voluptates vel debitis consequatur voluptate repudiandae non veniam a. Dicta illo facilis omnis reiciendis.', '/images/item2.png', 1, NULL, 8, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(59, 'Lẩu', 'Consequatur inventore aliquid rerum ab in. Et natus veniam dolor cupiditate quas fuga. Quia molestias quis neque et voluptas. Eos ratione dolores earum sequi.', '/images/item9.png', 1, NULL, 8, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(60, 'Đồ uống', 'Rerum qui quod rerum eligendi quidem repudiandae. Enim ut in vero doloremque et aspernatur. Unde enim velit cupiditate aut laborum iusto eos sunt. Sed qui voluptatibus corporis rerum.', '/images/item2.png', 1, NULL, 8, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(61, 'Lẩu', 'Labore nobis laboriosam aut odio commodi ipsam. Minus harum corrupti maiores sint est unde. Impedit labore ad nam sit cumque commodi incidunt. Vel vel pariatur quis totam.', '/images/item6.png', 1, NULL, 8, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(62, 'Phở', 'Perspiciatis fugit praesentium explicabo voluptas exercitationem vel. Unde qui perferendis omnis vel et ut aut eos. Voluptatem eligendi delectus id repellat id asperiores.', '/images/item6.png', 1, NULL, 8, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(63, 'Phở', 'Nobis voluptatem quod quo nostrum. Sint occaecati expedita sit voluptatem non voluptatibus aliquid. Eum neque voluptas ea illo corrupti.', '/images/item9.png', 1, NULL, 8, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(64, 'Phở', 'Recusandae neque vitae aut. Reprehenderit aut perspiciatis explicabo perferendis quo. Neque corrupti saepe architecto et voluptate praesentium consequatur.', '/images/item7.png', 1, NULL, 8, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(65, 'Các món Ốc', 'Fugiat ut animi et repudiandae nulla nostrum. Nihil quia voluptatem molestias nobis ea sequi reiciendis. Praesentium fugiat eum qui aut ipsa error quis. Nostrum sit cumque vitae.', '/images/item1.png', 1, NULL, 9, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(66, 'Cơm', 'Doloremque magni aliquid sapiente pariatur rem sit. Culpa ducimus et illo sit quia non reiciendis.', '/images/item10.png', 1, NULL, 9, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(67, 'Các món bò', 'Odit et velit aut quod in ut et. Magnam quia quia nesciunt ut fugit sequi. Aut doloribus quos eius eos. Rerum eligendi ut doloremque enim quos sint quidem non.', '/images/item2.png', 1, NULL, 9, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(68, 'Cơm', 'Totam dolorem non officiis magnam et. Voluptatum est ut qui nihil veniam quo ut. Iusto iste aut id id impedit voluptates sit.', '/images/item11.png', 1, NULL, 9, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(69, 'Các món xào', 'Et vel rerum nostrum eos libero ut iure. Nesciunt aut ea quia iure eos ab et. Sit rerum corporis sit qui. Sapiente eos consequatur odio eum.', '/images/item7.png', 1, NULL, 9, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(70, 'Cơm', 'Occaecati magnam harum excepturi quia consequatur eum. Et nam corrupti saepe consectetur vel animi explicabo. Inventore minus ab nobis ipsam voluptas omnis praesentium.', '/images/item10.png', 1, NULL, 9, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(71, 'Đồ uống', 'Blanditiis dignissimos et aperiam. Dolorem et id eius molestiae. Ullam dolores quibusdam ut eveniet optio id sequi.', '/images/item7.png', 1, NULL, 9, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(72, 'Các món xào', 'Ratione provident consequuntur dolor dicta. Neque eius sed dolor autem asperiores ullam ea. Sunt deleniti sit est reprehenderit.', '/images/item6.png', 1, NULL, 9, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(73, 'Cơm', 'Nulla quibusdam voluptatibus laborum. Ducimus doloribus iste rem placeat. Consequuntur est odit dolorem ut quod enim et.', '/images/item7.png', 1, NULL, 10, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(74, 'Các món Ốc', 'Veritatis explicabo incidunt ipsa error maxime praesentium quo voluptatem. Vero non illum qui soluta. Consectetur tempora minima amet sint in. Eum et porro fugit cumque aliquid voluptatum ipsum.', '/images/item3.png', 1, NULL, 10, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(75, 'Khai vị', 'Illo sunt ullam aperiam inventore sapiente et. Similique sunt tenetur error illo maxime sint nulla. Eum molestias quod maxime fugiat aut consequuntur. Sed non magnam blanditiis aut fugit sint.', '/images/item10.png', 1, NULL, 10, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(76, 'Các món Ốc', 'Cum id voluptas id. Sed dolore magni suscipit distinctio laborum ut aut deserunt. Voluptatum repellendus odit cupiditate architecto magni nulla.', '/images/item12.png', 1, NULL, 10, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(77, 'Các món Ốc', 'Ipsum quos dolorum magnam. Voluptatem consequatur illum sit inventore sequi expedita. Nesciunt ut architecto nostrum. Ab assumenda eos quod doloribus incidunt magni illum.', '/images/item11.png', 1, NULL, 10, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(78, 'Các món bò', 'Ducimus ipsa et quam rerum. Ipsum laudantium quia minima sit. Doloremque amet quo non quo. Aut exercitationem omnis minus officiis nisi a aut asperiores.', '/images/item10.png', 1, NULL, 10, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(79, 'Lẩu', 'Et voluptas assumenda ullam rerum. Vel totam voluptas eum veritatis sed. Assumenda illo dolorem modi qui. Saepe numquam eos aut tempore fugit.', '/images/item10.png', 1, NULL, 10, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(80, 'Các món xào', 'Eius ut eum in aliquam in. Consequuntur modi deleniti unde doloremque. Est ullam repellendus voluptatum quisquam consectetur ipsum unde. Odit ea a laborum sit sunt cupiditate.', '/images/item9.png', 1, NULL, 10, '2021-09-23 09:19:41', '2021-09-23 09:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `category_product`
--

CREATE TABLE `category_product` (
  `category_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_product`
--

INSERT INTO `category_product` (`category_id`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(1, 2, NULL, NULL),
(1, 11, NULL, NULL),
(1, 15, NULL, NULL),
(1, 20, NULL, NULL),
(1, 22, NULL, NULL),
(1, 25, NULL, NULL),
(1, 32, NULL, NULL),
(1, 39, NULL, NULL),
(1, 48, NULL, NULL),
(1, 61, NULL, NULL),
(1, 65, NULL, NULL),
(1, 74, NULL, NULL),
(1, 80, NULL, NULL),
(1, 86, NULL, NULL),
(1, 88, NULL, NULL),
(1, 94, NULL, NULL),
(1, 95, NULL, NULL),
(1, 97, NULL, NULL),
(1, 99, NULL, NULL),
(2, 4, NULL, NULL),
(2, 10, NULL, NULL),
(2, 11, NULL, NULL),
(2, 12, NULL, NULL),
(2, 24, NULL, NULL),
(2, 30, NULL, NULL),
(2, 31, NULL, NULL),
(2, 39, NULL, NULL),
(2, 46, NULL, NULL),
(2, 49, NULL, NULL),
(2, 50, NULL, NULL),
(2, 55, NULL, NULL),
(2, 58, NULL, NULL),
(2, 59, NULL, NULL),
(2, 67, NULL, NULL),
(2, 80, NULL, NULL),
(2, 81, NULL, NULL),
(2, 91, NULL, NULL),
(2, 96, NULL, NULL),
(2, 99, NULL, NULL),
(3, 7, NULL, NULL),
(3, 9, NULL, NULL),
(3, 10, NULL, NULL),
(3, 16, NULL, NULL),
(3, 18, NULL, NULL),
(3, 19, NULL, NULL),
(3, 24, NULL, NULL),
(3, 31, NULL, NULL),
(3, 35, NULL, NULL),
(3, 47, NULL, NULL),
(3, 49, NULL, NULL),
(3, 52, NULL, NULL),
(3, 58, NULL, NULL),
(3, 60, NULL, NULL),
(3, 63, NULL, NULL),
(3, 69, NULL, NULL),
(3, 73, NULL, NULL),
(3, 75, NULL, NULL),
(3, 90, NULL, NULL),
(3, 96, NULL, NULL),
(4, 1, NULL, NULL),
(4, 9, NULL, NULL),
(4, 12, NULL, NULL),
(4, 13, NULL, NULL),
(4, 17, NULL, NULL),
(4, 21, NULL, NULL),
(4, 28, NULL, NULL),
(4, 36, NULL, NULL),
(4, 51, NULL, NULL),
(4, 59, NULL, NULL),
(4, 61, NULL, NULL),
(4, 69, NULL, NULL),
(4, 71, NULL, NULL),
(4, 73, NULL, NULL),
(4, 76, NULL, NULL),
(4, 79, NULL, NULL),
(4, 90, NULL, NULL),
(4, 95, NULL, NULL),
(4, 98, NULL, NULL),
(4, 100, NULL, NULL),
(5, 4, NULL, NULL),
(5, 7, NULL, NULL),
(5, 10, NULL, NULL),
(5, 20, NULL, NULL),
(5, 26, NULL, NULL),
(5, 30, NULL, NULL),
(5, 38, NULL, NULL),
(5, 39, NULL, NULL),
(5, 41, NULL, NULL),
(5, 44, NULL, NULL),
(5, 48, NULL, NULL),
(5, 52, NULL, NULL),
(5, 57, NULL, NULL),
(5, 69, NULL, NULL),
(5, 71, NULL, NULL),
(5, 74, NULL, NULL),
(5, 79, NULL, NULL),
(5, 83, NULL, NULL),
(5, 86, NULL, NULL),
(5, 97, NULL, NULL),
(6, 11, NULL, NULL),
(6, 12, NULL, NULL),
(6, 13, NULL, NULL),
(6, 25, NULL, NULL),
(6, 27, NULL, NULL),
(6, 33, NULL, NULL),
(6, 37, NULL, NULL),
(6, 50, NULL, NULL),
(6, 63, NULL, NULL),
(6, 65, NULL, NULL),
(6, 72, NULL, NULL),
(6, 74, NULL, NULL),
(6, 76, NULL, NULL),
(6, 77, NULL, NULL),
(6, 79, NULL, NULL),
(6, 83, NULL, NULL),
(6, 90, NULL, NULL),
(6, 91, NULL, NULL),
(6, 93, NULL, NULL),
(6, 95, NULL, NULL),
(7, 2, NULL, NULL),
(7, 3, NULL, NULL),
(7, 9, NULL, NULL),
(7, 10, NULL, NULL),
(7, 18, NULL, NULL),
(7, 19, NULL, NULL),
(7, 26, NULL, NULL),
(7, 29, NULL, NULL),
(7, 45, NULL, NULL),
(7, 48, NULL, NULL),
(7, 57, NULL, NULL),
(7, 60, NULL, NULL),
(7, 61, NULL, NULL),
(7, 64, NULL, NULL),
(7, 73, NULL, NULL),
(7, 88, NULL, NULL),
(7, 95, NULL, NULL),
(7, 97, NULL, NULL),
(7, 98, NULL, NULL),
(7, 100, NULL, NULL),
(8, 10, NULL, NULL),
(8, 11, NULL, NULL),
(8, 14, NULL, NULL),
(8, 16, NULL, NULL),
(8, 29, NULL, NULL),
(8, 31, NULL, NULL),
(8, 32, NULL, NULL),
(8, 35, NULL, NULL),
(8, 43, NULL, NULL),
(8, 52, NULL, NULL),
(8, 53, NULL, NULL),
(8, 64, NULL, NULL),
(8, 71, NULL, NULL),
(8, 79, NULL, NULL),
(8, 83, NULL, NULL),
(8, 85, NULL, NULL),
(8, 89, NULL, NULL),
(8, 94, NULL, NULL),
(8, 95, NULL, NULL),
(8, 100, NULL, NULL),
(9, 1, NULL, NULL),
(9, 5, NULL, NULL),
(9, 9, NULL, NULL),
(9, 14, NULL, NULL),
(9, 21, NULL, NULL),
(9, 23, NULL, NULL),
(9, 25, NULL, NULL),
(9, 28, NULL, NULL),
(9, 30, NULL, NULL),
(9, 37, NULL, NULL),
(9, 41, NULL, NULL),
(9, 42, NULL, NULL),
(9, 56, NULL, NULL),
(9, 57, NULL, NULL),
(9, 68, NULL, NULL),
(9, 69, NULL, NULL),
(9, 86, NULL, NULL),
(9, 93, NULL, NULL),
(9, 94, NULL, NULL),
(9, 100, NULL, NULL),
(10, 3, NULL, NULL),
(10, 4, NULL, NULL),
(10, 6, NULL, NULL),
(10, 7, NULL, NULL),
(10, 9, NULL, NULL),
(10, 12, NULL, NULL),
(10, 14, NULL, NULL),
(10, 16, NULL, NULL),
(10, 23, NULL, NULL),
(10, 25, NULL, NULL),
(10, 26, NULL, NULL),
(10, 28, NULL, NULL),
(10, 29, NULL, NULL),
(10, 30, NULL, NULL),
(10, 44, NULL, NULL),
(10, 59, NULL, NULL),
(10, 83, NULL, NULL),
(10, 85, NULL, NULL),
(10, 89, NULL, NULL),
(10, 95, NULL, NULL),
(11, 16, NULL, NULL),
(11, 23, NULL, NULL),
(11, 25, NULL, NULL),
(11, 29, NULL, NULL),
(11, 30, NULL, NULL),
(11, 39, NULL, NULL),
(11, 40, NULL, NULL),
(11, 43, NULL, NULL),
(11, 48, NULL, NULL),
(11, 55, NULL, NULL),
(11, 63, NULL, NULL),
(11, 67, NULL, NULL),
(11, 68, NULL, NULL),
(11, 69, NULL, NULL),
(11, 72, NULL, NULL),
(11, 80, NULL, NULL),
(11, 88, NULL, NULL),
(11, 89, NULL, NULL),
(11, 90, NULL, NULL),
(11, 96, NULL, NULL),
(12, 1, NULL, NULL),
(12, 8, NULL, NULL),
(12, 9, NULL, NULL),
(12, 13, NULL, NULL),
(12, 16, NULL, NULL),
(12, 34, NULL, NULL),
(12, 41, NULL, NULL),
(12, 43, NULL, NULL),
(12, 44, NULL, NULL),
(12, 51, NULL, NULL),
(12, 61, NULL, NULL),
(12, 68, NULL, NULL),
(12, 69, NULL, NULL),
(12, 76, NULL, NULL),
(12, 77, NULL, NULL),
(12, 79, NULL, NULL),
(12, 86, NULL, NULL),
(12, 88, NULL, NULL),
(12, 94, NULL, NULL),
(12, 97, NULL, NULL),
(13, 4, NULL, NULL),
(13, 6, NULL, NULL),
(13, 12, NULL, NULL),
(13, 27, NULL, NULL),
(13, 36, NULL, NULL),
(13, 37, NULL, NULL),
(13, 43, NULL, NULL),
(13, 44, NULL, NULL),
(13, 47, NULL, NULL),
(13, 50, NULL, NULL),
(13, 60, NULL, NULL),
(13, 64, NULL, NULL),
(13, 65, NULL, NULL),
(13, 68, NULL, NULL),
(13, 69, NULL, NULL),
(13, 71, NULL, NULL),
(13, 90, NULL, NULL),
(13, 91, NULL, NULL),
(13, 98, NULL, NULL),
(13, 99, NULL, NULL),
(14, 1, NULL, NULL),
(14, 12, NULL, NULL),
(14, 21, NULL, NULL),
(14, 25, NULL, NULL),
(14, 30, NULL, NULL),
(14, 36, NULL, NULL),
(14, 39, NULL, NULL),
(14, 48, NULL, NULL),
(14, 49, NULL, NULL),
(14, 50, NULL, NULL),
(14, 52, NULL, NULL),
(14, 53, NULL, NULL),
(14, 58, NULL, NULL),
(14, 65, NULL, NULL),
(14, 68, NULL, NULL),
(14, 75, NULL, NULL),
(14, 79, NULL, NULL),
(14, 84, NULL, NULL),
(14, 85, NULL, NULL),
(14, 87, NULL, NULL),
(15, 3, NULL, NULL),
(15, 4, NULL, NULL),
(15, 10, NULL, NULL),
(15, 12, NULL, NULL),
(15, 15, NULL, NULL),
(15, 20, NULL, NULL),
(15, 23, NULL, NULL),
(15, 26, NULL, NULL),
(15, 38, NULL, NULL),
(15, 42, NULL, NULL),
(15, 54, NULL, NULL),
(15, 57, NULL, NULL),
(15, 60, NULL, NULL),
(15, 66, NULL, NULL),
(15, 70, NULL, NULL),
(15, 71, NULL, NULL),
(15, 72, NULL, NULL),
(15, 74, NULL, NULL),
(15, 86, NULL, NULL),
(15, 100, NULL, NULL),
(16, 5, NULL, NULL),
(16, 10, NULL, NULL),
(16, 14, NULL, NULL),
(16, 32, NULL, NULL),
(16, 38, NULL, NULL),
(16, 39, NULL, NULL),
(16, 43, NULL, NULL),
(16, 45, NULL, NULL),
(16, 46, NULL, NULL),
(16, 53, NULL, NULL),
(16, 68, NULL, NULL),
(16, 70, NULL, NULL),
(16, 71, NULL, NULL),
(16, 84, NULL, NULL),
(16, 85, NULL, NULL),
(16, 88, NULL, NULL),
(16, 93, NULL, NULL),
(16, 94, NULL, NULL),
(16, 96, NULL, NULL),
(16, 97, NULL, NULL),
(17, 2, NULL, NULL),
(17, 4, NULL, NULL),
(17, 6, NULL, NULL),
(17, 8, NULL, NULL),
(17, 11, NULL, NULL),
(17, 16, NULL, NULL),
(17, 20, NULL, NULL),
(17, 25, NULL, NULL),
(17, 31, NULL, NULL),
(17, 44, NULL, NULL),
(17, 56, NULL, NULL),
(17, 58, NULL, NULL),
(17, 60, NULL, NULL),
(17, 69, NULL, NULL),
(17, 75, NULL, NULL),
(17, 76, NULL, NULL),
(17, 78, NULL, NULL),
(17, 86, NULL, NULL),
(17, 92, NULL, NULL),
(17, 97, NULL, NULL),
(18, 8, NULL, NULL),
(18, 22, NULL, NULL),
(18, 23, NULL, NULL),
(18, 26, NULL, NULL),
(18, 29, NULL, NULL),
(18, 30, NULL, NULL),
(18, 32, NULL, NULL),
(18, 35, NULL, NULL),
(18, 38, NULL, NULL),
(18, 46, NULL, NULL),
(18, 48, NULL, NULL),
(18, 55, NULL, NULL),
(18, 64, NULL, NULL),
(18, 65, NULL, NULL),
(18, 70, NULL, NULL),
(18, 81, NULL, NULL),
(18, 83, NULL, NULL),
(18, 86, NULL, NULL),
(18, 88, NULL, NULL),
(18, 90, NULL, NULL),
(19, 2, NULL, NULL),
(19, 5, NULL, NULL),
(19, 8, NULL, NULL),
(19, 13, NULL, NULL),
(19, 28, NULL, NULL),
(19, 35, NULL, NULL),
(19, 38, NULL, NULL),
(19, 48, NULL, NULL),
(19, 50, NULL, NULL),
(19, 53, NULL, NULL),
(19, 54, NULL, NULL),
(19, 60, NULL, NULL),
(19, 61, NULL, NULL),
(19, 73, NULL, NULL),
(19, 76, NULL, NULL),
(19, 83, NULL, NULL),
(19, 86, NULL, NULL),
(19, 87, NULL, NULL),
(19, 97, NULL, NULL),
(19, 98, NULL, NULL),
(20, 2, NULL, NULL),
(20, 11, NULL, NULL),
(20, 12, NULL, NULL),
(20, 14, NULL, NULL),
(20, 19, NULL, NULL),
(20, 23, NULL, NULL),
(20, 25, NULL, NULL),
(20, 28, NULL, NULL),
(20, 51, NULL, NULL),
(20, 70, NULL, NULL),
(20, 71, NULL, NULL),
(20, 73, NULL, NULL),
(20, 75, NULL, NULL),
(20, 76, NULL, NULL),
(20, 77, NULL, NULL),
(20, 83, NULL, NULL),
(20, 84, NULL, NULL),
(20, 89, NULL, NULL),
(20, 93, NULL, NULL),
(20, 96, NULL, NULL),
(21, 3, NULL, NULL),
(21, 4, NULL, NULL),
(21, 8, NULL, NULL),
(21, 10, NULL, NULL),
(21, 14, NULL, NULL),
(21, 26, NULL, NULL),
(21, 34, NULL, NULL),
(21, 38, NULL, NULL),
(21, 42, NULL, NULL),
(21, 43, NULL, NULL),
(21, 52, NULL, NULL),
(21, 54, NULL, NULL),
(21, 57, NULL, NULL),
(21, 62, NULL, NULL),
(21, 63, NULL, NULL),
(21, 66, NULL, NULL),
(21, 78, NULL, NULL),
(21, 86, NULL, NULL),
(21, 92, NULL, NULL),
(21, 96, NULL, NULL),
(22, 1, NULL, NULL),
(22, 2, NULL, NULL),
(22, 7, NULL, NULL),
(22, 15, NULL, NULL),
(22, 17, NULL, NULL),
(22, 18, NULL, NULL),
(22, 21, NULL, NULL),
(22, 24, NULL, NULL),
(22, 28, NULL, NULL),
(22, 32, NULL, NULL),
(22, 33, NULL, NULL),
(22, 45, NULL, NULL),
(22, 48, NULL, NULL),
(22, 55, NULL, NULL),
(22, 60, NULL, NULL),
(22, 79, NULL, NULL),
(22, 81, NULL, NULL),
(22, 87, NULL, NULL),
(22, 89, NULL, NULL),
(22, 93, NULL, NULL),
(23, 9, NULL, NULL),
(23, 17, NULL, NULL),
(23, 20, NULL, NULL),
(23, 23, NULL, NULL),
(23, 29, NULL, NULL),
(23, 31, NULL, NULL),
(23, 32, NULL, NULL),
(23, 43, NULL, NULL),
(23, 44, NULL, NULL),
(23, 46, NULL, NULL),
(23, 48, NULL, NULL),
(23, 54, NULL, NULL),
(23, 59, NULL, NULL),
(23, 65, NULL, NULL),
(23, 71, NULL, NULL),
(23, 73, NULL, NULL),
(23, 85, NULL, NULL),
(23, 94, NULL, NULL),
(23, 96, NULL, NULL),
(23, 97, NULL, NULL),
(24, 1, NULL, NULL),
(24, 2, NULL, NULL),
(24, 7, NULL, NULL),
(24, 8, NULL, NULL),
(24, 13, NULL, NULL),
(24, 18, NULL, NULL),
(24, 19, NULL, NULL),
(24, 41, NULL, NULL),
(24, 62, NULL, NULL),
(24, 64, NULL, NULL),
(24, 66, NULL, NULL),
(24, 68, NULL, NULL),
(24, 73, NULL, NULL),
(24, 83, NULL, NULL),
(24, 85, NULL, NULL),
(24, 88, NULL, NULL),
(24, 90, NULL, NULL),
(24, 92, NULL, NULL),
(24, 94, NULL, NULL),
(24, 96, NULL, NULL),
(25, 3, NULL, NULL),
(25, 7, NULL, NULL),
(25, 11, NULL, NULL),
(25, 12, NULL, NULL),
(25, 14, NULL, NULL),
(25, 16, NULL, NULL),
(25, 20, NULL, NULL),
(25, 24, NULL, NULL),
(25, 25, NULL, NULL),
(25, 38, NULL, NULL),
(25, 41, NULL, NULL),
(25, 50, NULL, NULL),
(25, 58, NULL, NULL),
(25, 60, NULL, NULL),
(25, 69, NULL, NULL),
(25, 70, NULL, NULL),
(25, 71, NULL, NULL),
(25, 72, NULL, NULL),
(25, 93, NULL, NULL),
(25, 99, NULL, NULL),
(26, 3, NULL, NULL),
(26, 6, NULL, NULL),
(26, 9, NULL, NULL),
(26, 17, NULL, NULL),
(26, 22, NULL, NULL),
(26, 26, NULL, NULL),
(26, 29, NULL, NULL),
(26, 30, NULL, NULL),
(26, 32, NULL, NULL),
(26, 45, NULL, NULL),
(26, 52, NULL, NULL),
(26, 56, NULL, NULL),
(26, 72, NULL, NULL),
(26, 84, NULL, NULL),
(26, 85, NULL, NULL),
(26, 87, NULL, NULL),
(26, 91, NULL, NULL),
(26, 94, NULL, NULL),
(26, 98, NULL, NULL),
(26, 99, NULL, NULL),
(27, 5, NULL, NULL),
(27, 13, NULL, NULL),
(27, 15, NULL, NULL),
(27, 16, NULL, NULL),
(27, 19, NULL, NULL),
(27, 21, NULL, NULL),
(27, 24, NULL, NULL),
(27, 34, NULL, NULL),
(27, 35, NULL, NULL),
(27, 38, NULL, NULL),
(27, 40, NULL, NULL),
(27, 42, NULL, NULL),
(27, 43, NULL, NULL),
(27, 49, NULL, NULL),
(27, 51, NULL, NULL),
(27, 55, NULL, NULL),
(27, 62, NULL, NULL),
(27, 78, NULL, NULL),
(27, 88, NULL, NULL),
(27, 99, NULL, NULL),
(28, 1, NULL, NULL),
(28, 21, NULL, NULL),
(28, 22, NULL, NULL),
(28, 26, NULL, NULL),
(28, 30, NULL, NULL),
(28, 32, NULL, NULL),
(28, 34, NULL, NULL),
(28, 51, NULL, NULL),
(28, 53, NULL, NULL),
(28, 59, NULL, NULL),
(28, 63, NULL, NULL),
(28, 64, NULL, NULL),
(28, 73, NULL, NULL),
(28, 75, NULL, NULL),
(28, 76, NULL, NULL),
(28, 77, NULL, NULL),
(28, 81, NULL, NULL),
(28, 87, NULL, NULL),
(28, 91, NULL, NULL),
(28, 94, NULL, NULL),
(29, 1, NULL, NULL),
(29, 4, NULL, NULL),
(29, 7, NULL, NULL),
(29, 9, NULL, NULL),
(29, 10, NULL, NULL),
(29, 14, NULL, NULL),
(29, 17, NULL, NULL),
(29, 20, NULL, NULL),
(29, 30, NULL, NULL),
(29, 39, NULL, NULL),
(29, 43, NULL, NULL),
(29, 62, NULL, NULL),
(29, 63, NULL, NULL),
(29, 66, NULL, NULL),
(29, 69, NULL, NULL),
(29, 80, NULL, NULL),
(29, 82, NULL, NULL),
(29, 83, NULL, NULL),
(29, 84, NULL, NULL),
(29, 93, NULL, NULL),
(30, 14, NULL, NULL),
(30, 15, NULL, NULL),
(30, 20, NULL, NULL),
(30, 24, NULL, NULL),
(30, 34, NULL, NULL),
(30, 44, NULL, NULL),
(30, 47, NULL, NULL),
(30, 48, NULL, NULL),
(30, 49, NULL, NULL),
(30, 51, NULL, NULL),
(30, 53, NULL, NULL),
(30, 54, NULL, NULL),
(30, 57, NULL, NULL),
(30, 60, NULL, NULL),
(30, 65, NULL, NULL),
(30, 77, NULL, NULL),
(30, 84, NULL, NULL),
(30, 88, NULL, NULL),
(30, 94, NULL, NULL),
(30, 99, NULL, NULL),
(31, 2, NULL, NULL),
(31, 6, NULL, NULL),
(31, 21, NULL, NULL),
(31, 25, NULL, NULL),
(31, 27, NULL, NULL),
(31, 31, NULL, NULL),
(31, 32, NULL, NULL),
(31, 34, NULL, NULL),
(31, 39, NULL, NULL),
(31, 43, NULL, NULL),
(31, 48, NULL, NULL),
(31, 52, NULL, NULL),
(31, 63, NULL, NULL),
(31, 64, NULL, NULL),
(31, 69, NULL, NULL),
(31, 77, NULL, NULL),
(31, 81, NULL, NULL),
(31, 88, NULL, NULL),
(31, 93, NULL, NULL),
(31, 95, NULL, NULL),
(32, 6, NULL, NULL),
(32, 7, NULL, NULL),
(32, 9, NULL, NULL),
(32, 12, NULL, NULL),
(32, 16, NULL, NULL),
(32, 28, NULL, NULL),
(32, 34, NULL, NULL),
(32, 45, NULL, NULL),
(32, 47, NULL, NULL),
(32, 53, NULL, NULL),
(32, 57, NULL, NULL),
(32, 76, NULL, NULL),
(32, 77, NULL, NULL),
(32, 85, NULL, NULL),
(32, 89, NULL, NULL),
(32, 91, NULL, NULL),
(32, 92, NULL, NULL),
(32, 93, NULL, NULL),
(32, 95, NULL, NULL),
(32, 98, NULL, NULL),
(33, 6, NULL, NULL),
(33, 10, NULL, NULL),
(33, 18, NULL, NULL),
(33, 20, NULL, NULL),
(33, 29, NULL, NULL),
(33, 31, NULL, NULL),
(33, 41, NULL, NULL),
(33, 42, NULL, NULL),
(33, 46, NULL, NULL),
(33, 47, NULL, NULL),
(33, 54, NULL, NULL),
(33, 56, NULL, NULL),
(33, 63, NULL, NULL),
(33, 64, NULL, NULL),
(33, 67, NULL, NULL),
(33, 71, NULL, NULL),
(33, 81, NULL, NULL),
(33, 89, NULL, NULL),
(33, 93, NULL, NULL),
(33, 95, NULL, NULL),
(34, 2, NULL, NULL),
(34, 4, NULL, NULL),
(34, 13, NULL, NULL),
(34, 18, NULL, NULL),
(34, 19, NULL, NULL),
(34, 20, NULL, NULL),
(34, 39, NULL, NULL),
(34, 40, NULL, NULL),
(34, 48, NULL, NULL),
(34, 49, NULL, NULL),
(34, 50, NULL, NULL),
(34, 59, NULL, NULL),
(34, 61, NULL, NULL),
(34, 65, NULL, NULL),
(34, 69, NULL, NULL),
(34, 70, NULL, NULL),
(34, 88, NULL, NULL),
(34, 91, NULL, NULL),
(34, 92, NULL, NULL),
(34, 99, NULL, NULL),
(35, 1, NULL, NULL),
(35, 6, NULL, NULL),
(35, 8, NULL, NULL),
(35, 9, NULL, NULL),
(35, 10, NULL, NULL),
(35, 13, NULL, NULL),
(35, 25, NULL, NULL),
(35, 30, NULL, NULL),
(35, 33, NULL, NULL),
(35, 37, NULL, NULL),
(35, 44, NULL, NULL),
(35, 48, NULL, NULL),
(35, 49, NULL, NULL),
(35, 54, NULL, NULL),
(35, 63, NULL, NULL),
(35, 68, NULL, NULL),
(35, 69, NULL, NULL),
(35, 83, NULL, NULL),
(35, 88, NULL, NULL),
(35, 91, NULL, NULL),
(36, 1, NULL, NULL),
(36, 7, NULL, NULL),
(36, 12, NULL, NULL),
(36, 13, NULL, NULL),
(36, 14, NULL, NULL),
(36, 17, NULL, NULL),
(36, 20, NULL, NULL),
(36, 34, NULL, NULL),
(36, 62, NULL, NULL),
(36, 63, NULL, NULL),
(36, 68, NULL, NULL),
(36, 70, NULL, NULL),
(36, 82, NULL, NULL),
(36, 84, NULL, NULL),
(36, 85, NULL, NULL),
(36, 87, NULL, NULL),
(36, 91, NULL, NULL),
(36, 93, NULL, NULL),
(36, 98, NULL, NULL),
(36, 100, NULL, NULL),
(37, 2, NULL, NULL),
(37, 7, NULL, NULL),
(37, 9, NULL, NULL),
(37, 13, NULL, NULL),
(37, 14, NULL, NULL),
(37, 19, NULL, NULL),
(37, 23, NULL, NULL),
(37, 25, NULL, NULL),
(37, 37, NULL, NULL),
(37, 38, NULL, NULL),
(37, 40, NULL, NULL),
(37, 41, NULL, NULL),
(37, 44, NULL, NULL),
(37, 48, NULL, NULL),
(37, 58, NULL, NULL),
(37, 60, NULL, NULL),
(37, 61, NULL, NULL),
(37, 86, NULL, NULL),
(37, 98, NULL, NULL),
(37, 100, NULL, NULL),
(38, 1, NULL, NULL),
(38, 4, NULL, NULL),
(38, 15, NULL, NULL),
(38, 16, NULL, NULL),
(38, 18, NULL, NULL),
(38, 24, NULL, NULL),
(38, 26, NULL, NULL),
(38, 36, NULL, NULL),
(38, 38, NULL, NULL),
(38, 44, NULL, NULL),
(38, 46, NULL, NULL),
(38, 54, NULL, NULL),
(38, 56, NULL, NULL),
(38, 68, NULL, NULL),
(38, 76, NULL, NULL),
(38, 81, NULL, NULL),
(38, 86, NULL, NULL),
(38, 91, NULL, NULL),
(38, 94, NULL, NULL),
(38, 95, NULL, NULL),
(39, 1, NULL, NULL),
(39, 7, NULL, NULL),
(39, 10, NULL, NULL),
(39, 21, NULL, NULL),
(39, 23, NULL, NULL),
(39, 29, NULL, NULL),
(39, 31, NULL, NULL),
(39, 38, NULL, NULL),
(39, 44, NULL, NULL),
(39, 53, NULL, NULL),
(39, 57, NULL, NULL),
(39, 60, NULL, NULL),
(39, 66, NULL, NULL),
(39, 70, NULL, NULL),
(39, 72, NULL, NULL),
(39, 77, NULL, NULL),
(39, 90, NULL, NULL),
(39, 92, NULL, NULL),
(39, 96, NULL, NULL),
(39, 98, NULL, NULL),
(40, 14, NULL, NULL),
(40, 16, NULL, NULL),
(40, 23, NULL, NULL),
(40, 25, NULL, NULL),
(40, 28, NULL, NULL),
(40, 32, NULL, NULL),
(40, 37, NULL, NULL),
(40, 40, NULL, NULL),
(40, 44, NULL, NULL),
(40, 48, NULL, NULL),
(40, 55, NULL, NULL),
(40, 63, NULL, NULL),
(40, 68, NULL, NULL),
(40, 80, NULL, NULL),
(40, 82, NULL, NULL),
(40, 86, NULL, NULL),
(40, 88, NULL, NULL),
(40, 92, NULL, NULL),
(40, 97, NULL, NULL),
(40, 99, NULL, NULL),
(41, 1, NULL, NULL),
(41, 4, NULL, NULL),
(41, 14, NULL, NULL),
(41, 21, NULL, NULL),
(41, 22, NULL, NULL),
(41, 26, NULL, NULL),
(41, 33, NULL, NULL),
(41, 34, NULL, NULL),
(41, 37, NULL, NULL),
(41, 45, NULL, NULL),
(41, 46, NULL, NULL),
(41, 56, NULL, NULL),
(41, 68, NULL, NULL),
(41, 79, NULL, NULL),
(41, 80, NULL, NULL),
(41, 87, NULL, NULL),
(41, 91, NULL, NULL),
(41, 93, NULL, NULL),
(41, 95, NULL, NULL),
(41, 100, NULL, NULL),
(42, 3, NULL, NULL),
(42, 5, NULL, NULL),
(42, 7, NULL, NULL),
(42, 8, NULL, NULL),
(42, 24, NULL, NULL),
(42, 25, NULL, NULL),
(42, 31, NULL, NULL),
(42, 33, NULL, NULL),
(42, 35, NULL, NULL),
(42, 45, NULL, NULL),
(42, 46, NULL, NULL),
(42, 50, NULL, NULL),
(42, 57, NULL, NULL),
(42, 59, NULL, NULL),
(42, 71, NULL, NULL),
(42, 78, NULL, NULL),
(42, 83, NULL, NULL),
(42, 84, NULL, NULL),
(42, 85, NULL, NULL),
(42, 96, NULL, NULL),
(43, 1, NULL, NULL),
(43, 6, NULL, NULL),
(43, 7, NULL, NULL),
(43, 15, NULL, NULL),
(43, 17, NULL, NULL),
(43, 35, NULL, NULL),
(43, 36, NULL, NULL),
(43, 40, NULL, NULL),
(43, 45, NULL, NULL),
(43, 48, NULL, NULL),
(43, 49, NULL, NULL),
(43, 56, NULL, NULL),
(43, 58, NULL, NULL),
(43, 59, NULL, NULL),
(43, 64, NULL, NULL),
(43, 66, NULL, NULL),
(43, 78, NULL, NULL),
(43, 80, NULL, NULL),
(43, 83, NULL, NULL),
(43, 94, NULL, NULL),
(44, 8, NULL, NULL),
(44, 10, NULL, NULL),
(44, 11, NULL, NULL),
(44, 13, NULL, NULL),
(44, 15, NULL, NULL),
(44, 28, NULL, NULL),
(44, 33, NULL, NULL),
(44, 37, NULL, NULL),
(44, 38, NULL, NULL),
(44, 52, NULL, NULL),
(44, 54, NULL, NULL),
(44, 55, NULL, NULL),
(44, 62, NULL, NULL),
(44, 66, NULL, NULL),
(44, 72, NULL, NULL),
(44, 75, NULL, NULL),
(44, 85, NULL, NULL),
(44, 88, NULL, NULL),
(44, 90, NULL, NULL),
(44, 97, NULL, NULL),
(45, 8, NULL, NULL),
(45, 13, NULL, NULL),
(45, 18, NULL, NULL),
(45, 23, NULL, NULL),
(45, 25, NULL, NULL),
(45, 37, NULL, NULL),
(45, 40, NULL, NULL),
(45, 42, NULL, NULL),
(45, 49, NULL, NULL),
(45, 52, NULL, NULL),
(45, 57, NULL, NULL),
(45, 58, NULL, NULL),
(45, 59, NULL, NULL),
(45, 61, NULL, NULL),
(45, 68, NULL, NULL),
(45, 78, NULL, NULL),
(45, 79, NULL, NULL),
(45, 90, NULL, NULL),
(45, 92, NULL, NULL),
(45, 94, NULL, NULL),
(46, 3, NULL, NULL),
(46, 6, NULL, NULL),
(46, 9, NULL, NULL),
(46, 13, NULL, NULL),
(46, 14, NULL, NULL),
(46, 36, NULL, NULL),
(46, 37, NULL, NULL),
(46, 40, NULL, NULL),
(46, 43, NULL, NULL),
(46, 45, NULL, NULL),
(46, 62, NULL, NULL),
(46, 64, NULL, NULL),
(46, 67, NULL, NULL),
(46, 70, NULL, NULL),
(46, 77, NULL, NULL),
(46, 81, NULL, NULL),
(46, 82, NULL, NULL),
(46, 90, NULL, NULL),
(46, 97, NULL, NULL),
(46, 99, NULL, NULL),
(47, 3, NULL, NULL),
(47, 5, NULL, NULL),
(47, 8, NULL, NULL),
(47, 11, NULL, NULL),
(47, 12, NULL, NULL),
(47, 18, NULL, NULL),
(47, 20, NULL, NULL),
(47, 21, NULL, NULL),
(47, 27, NULL, NULL),
(47, 28, NULL, NULL),
(47, 29, NULL, NULL),
(47, 31, NULL, NULL),
(47, 37, NULL, NULL),
(47, 54, NULL, NULL),
(47, 61, NULL, NULL),
(47, 69, NULL, NULL),
(47, 72, NULL, NULL),
(47, 73, NULL, NULL),
(47, 95, NULL, NULL),
(47, 99, NULL, NULL),
(48, 1, NULL, NULL),
(48, 6, NULL, NULL),
(48, 7, NULL, NULL),
(48, 10, NULL, NULL),
(48, 12, NULL, NULL),
(48, 13, NULL, NULL),
(48, 24, NULL, NULL),
(48, 30, NULL, NULL),
(48, 38, NULL, NULL),
(48, 44, NULL, NULL),
(48, 47, NULL, NULL),
(48, 53, NULL, NULL),
(48, 65, NULL, NULL),
(48, 67, NULL, NULL),
(48, 70, NULL, NULL),
(48, 74, NULL, NULL),
(48, 87, NULL, NULL),
(48, 91, NULL, NULL),
(48, 92, NULL, NULL),
(48, 98, NULL, NULL),
(49, 2, NULL, NULL),
(49, 3, NULL, NULL),
(49, 7, NULL, NULL),
(49, 8, NULL, NULL),
(49, 12, NULL, NULL),
(49, 16, NULL, NULL),
(49, 21, NULL, NULL),
(49, 25, NULL, NULL),
(49, 39, NULL, NULL),
(49, 43, NULL, NULL),
(49, 46, NULL, NULL),
(49, 58, NULL, NULL),
(49, 61, NULL, NULL),
(49, 63, NULL, NULL),
(49, 66, NULL, NULL),
(49, 74, NULL, NULL),
(49, 80, NULL, NULL),
(49, 81, NULL, NULL),
(49, 99, NULL, NULL),
(49, 100, NULL, NULL),
(50, 17, NULL, NULL),
(50, 19, NULL, NULL),
(50, 23, NULL, NULL),
(50, 31, NULL, NULL),
(50, 34, NULL, NULL),
(50, 36, NULL, NULL),
(50, 37, NULL, NULL),
(50, 39, NULL, NULL),
(50, 51, NULL, NULL),
(50, 54, NULL, NULL),
(50, 61, NULL, NULL),
(50, 62, NULL, NULL),
(50, 67, NULL, NULL),
(50, 78, NULL, NULL),
(50, 80, NULL, NULL),
(50, 81, NULL, NULL),
(50, 82, NULL, NULL),
(50, 84, NULL, NULL),
(50, 95, NULL, NULL),
(50, 96, NULL, NULL),
(51, 9, NULL, NULL),
(51, 15, NULL, NULL),
(51, 27, NULL, NULL),
(51, 28, NULL, NULL),
(51, 32, NULL, NULL),
(51, 35, NULL, NULL),
(51, 37, NULL, NULL),
(51, 42, NULL, NULL),
(51, 43, NULL, NULL),
(51, 44, NULL, NULL),
(51, 46, NULL, NULL),
(51, 50, NULL, NULL),
(51, 58, NULL, NULL),
(51, 63, NULL, NULL),
(51, 71, NULL, NULL),
(51, 73, NULL, NULL),
(51, 83, NULL, NULL),
(51, 92, NULL, NULL),
(51, 93, NULL, NULL),
(51, 97, NULL, NULL),
(52, 3, NULL, NULL),
(52, 4, NULL, NULL),
(52, 14, NULL, NULL),
(52, 17, NULL, NULL),
(52, 19, NULL, NULL),
(52, 20, NULL, NULL),
(52, 22, NULL, NULL),
(52, 27, NULL, NULL),
(52, 46, NULL, NULL),
(52, 48, NULL, NULL),
(52, 56, NULL, NULL),
(52, 58, NULL, NULL),
(52, 60, NULL, NULL),
(52, 62, NULL, NULL),
(52, 68, NULL, NULL),
(52, 78, NULL, NULL),
(52, 83, NULL, NULL),
(52, 93, NULL, NULL),
(52, 97, NULL, NULL),
(52, 100, NULL, NULL),
(53, 2, NULL, NULL),
(53, 4, NULL, NULL),
(53, 6, NULL, NULL),
(53, 21, NULL, NULL),
(53, 27, NULL, NULL),
(53, 34, NULL, NULL),
(53, 43, NULL, NULL),
(53, 44, NULL, NULL),
(53, 46, NULL, NULL),
(53, 48, NULL, NULL),
(53, 50, NULL, NULL),
(53, 54, NULL, NULL),
(53, 68, NULL, NULL),
(53, 69, NULL, NULL),
(53, 75, NULL, NULL),
(53, 78, NULL, NULL),
(53, 80, NULL, NULL),
(53, 84, NULL, NULL),
(53, 92, NULL, NULL),
(53, 96, NULL, NULL),
(54, 10, NULL, NULL),
(54, 11, NULL, NULL),
(54, 24, NULL, NULL),
(54, 46, NULL, NULL),
(54, 50, NULL, NULL),
(54, 52, NULL, NULL),
(54, 55, NULL, NULL),
(54, 60, NULL, NULL),
(54, 69, NULL, NULL),
(54, 75, NULL, NULL),
(54, 76, NULL, NULL),
(54, 79, NULL, NULL),
(54, 81, NULL, NULL),
(54, 88, NULL, NULL),
(54, 90, NULL, NULL),
(54, 92, NULL, NULL),
(54, 94, NULL, NULL),
(54, 95, NULL, NULL),
(54, 99, NULL, NULL),
(54, 100, NULL, NULL),
(55, 1, NULL, NULL),
(55, 12, NULL, NULL),
(55, 19, NULL, NULL),
(55, 20, NULL, NULL),
(55, 30, NULL, NULL),
(55, 34, NULL, NULL),
(55, 36, NULL, NULL),
(55, 37, NULL, NULL),
(55, 45, NULL, NULL),
(55, 49, NULL, NULL),
(55, 50, NULL, NULL),
(55, 64, NULL, NULL),
(55, 70, NULL, NULL),
(55, 71, NULL, NULL),
(55, 75, NULL, NULL),
(55, 85, NULL, NULL),
(55, 88, NULL, NULL),
(55, 92, NULL, NULL),
(55, 99, NULL, NULL),
(55, 100, NULL, NULL),
(56, 2, NULL, NULL),
(56, 3, NULL, NULL),
(56, 4, NULL, NULL),
(56, 8, NULL, NULL),
(56, 13, NULL, NULL),
(56, 14, NULL, NULL),
(56, 17, NULL, NULL),
(56, 23, NULL, NULL),
(56, 34, NULL, NULL),
(56, 36, NULL, NULL),
(56, 44, NULL, NULL),
(56, 53, NULL, NULL),
(56, 55, NULL, NULL),
(56, 58, NULL, NULL),
(56, 65, NULL, NULL),
(56, 68, NULL, NULL),
(56, 70, NULL, NULL),
(56, 75, NULL, NULL),
(56, 78, NULL, NULL),
(56, 96, NULL, NULL),
(57, 2, NULL, NULL),
(57, 3, NULL, NULL),
(57, 6, NULL, NULL),
(57, 12, NULL, NULL),
(57, 21, NULL, NULL),
(57, 22, NULL, NULL),
(57, 30, NULL, NULL),
(57, 34, NULL, NULL),
(57, 51, NULL, NULL),
(57, 53, NULL, NULL),
(57, 57, NULL, NULL),
(57, 59, NULL, NULL),
(57, 63, NULL, NULL),
(57, 64, NULL, NULL),
(57, 65, NULL, NULL),
(57, 69, NULL, NULL),
(57, 77, NULL, NULL),
(57, 79, NULL, NULL),
(57, 93, NULL, NULL),
(57, 97, NULL, NULL),
(58, 3, NULL, NULL),
(58, 12, NULL, NULL),
(58, 14, NULL, NULL),
(58, 17, NULL, NULL),
(58, 28, NULL, NULL),
(58, 33, NULL, NULL),
(58, 35, NULL, NULL),
(58, 40, NULL, NULL),
(58, 41, NULL, NULL),
(58, 48, NULL, NULL),
(58, 49, NULL, NULL),
(58, 60, NULL, NULL),
(58, 69, NULL, NULL),
(58, 70, NULL, NULL),
(58, 83, NULL, NULL),
(58, 84, NULL, NULL),
(58, 87, NULL, NULL),
(58, 95, NULL, NULL),
(58, 98, NULL, NULL),
(58, 99, NULL, NULL),
(59, 1, NULL, NULL),
(59, 3, NULL, NULL),
(59, 9, NULL, NULL),
(59, 11, NULL, NULL),
(59, 16, NULL, NULL),
(59, 23, NULL, NULL),
(59, 30, NULL, NULL),
(59, 37, NULL, NULL),
(59, 38, NULL, NULL),
(59, 57, NULL, NULL),
(59, 58, NULL, NULL),
(59, 59, NULL, NULL),
(59, 61, NULL, NULL),
(59, 65, NULL, NULL),
(59, 72, NULL, NULL),
(59, 73, NULL, NULL),
(59, 75, NULL, NULL),
(59, 83, NULL, NULL),
(59, 86, NULL, NULL),
(59, 91, NULL, NULL),
(60, 2, NULL, NULL),
(60, 6, NULL, NULL),
(60, 9, NULL, NULL),
(60, 16, NULL, NULL),
(60, 19, NULL, NULL),
(60, 23, NULL, NULL),
(60, 26, NULL, NULL),
(60, 30, NULL, NULL),
(60, 42, NULL, NULL),
(60, 44, NULL, NULL),
(60, 52, NULL, NULL),
(60, 53, NULL, NULL),
(60, 61, NULL, NULL),
(60, 69, NULL, NULL),
(60, 71, NULL, NULL),
(60, 72, NULL, NULL),
(60, 74, NULL, NULL),
(60, 81, NULL, NULL),
(60, 92, NULL, NULL),
(60, 98, NULL, NULL),
(61, 1, NULL, NULL),
(61, 4, NULL, NULL),
(61, 10, NULL, NULL),
(61, 11, NULL, NULL),
(61, 12, NULL, NULL),
(61, 14, NULL, NULL),
(61, 17, NULL, NULL),
(61, 32, NULL, NULL),
(61, 35, NULL, NULL),
(61, 42, NULL, NULL),
(61, 54, NULL, NULL),
(61, 56, NULL, NULL),
(61, 61, NULL, NULL),
(61, 63, NULL, NULL),
(61, 68, NULL, NULL),
(61, 82, NULL, NULL),
(61, 93, NULL, NULL),
(61, 94, NULL, NULL),
(61, 95, NULL, NULL),
(61, 100, NULL, NULL),
(62, 13, NULL, NULL),
(62, 21, NULL, NULL),
(62, 27, NULL, NULL),
(62, 34, NULL, NULL),
(62, 42, NULL, NULL),
(62, 50, NULL, NULL),
(62, 61, NULL, NULL),
(62, 65, NULL, NULL),
(62, 66, NULL, NULL),
(62, 67, NULL, NULL),
(62, 68, NULL, NULL),
(62, 69, NULL, NULL),
(62, 70, NULL, NULL),
(62, 71, NULL, NULL),
(62, 72, NULL, NULL),
(62, 75, NULL, NULL),
(62, 88, NULL, NULL),
(62, 90, NULL, NULL),
(62, 93, NULL, NULL),
(62, 99, NULL, NULL),
(63, 14, NULL, NULL),
(63, 18, NULL, NULL),
(63, 20, NULL, NULL),
(63, 30, NULL, NULL),
(63, 32, NULL, NULL),
(63, 39, NULL, NULL),
(63, 43, NULL, NULL),
(63, 46, NULL, NULL),
(63, 51, NULL, NULL),
(63, 55, NULL, NULL),
(63, 61, NULL, NULL),
(63, 62, NULL, NULL),
(63, 64, NULL, NULL),
(63, 65, NULL, NULL),
(63, 76, NULL, NULL),
(63, 78, NULL, NULL),
(63, 82, NULL, NULL),
(63, 87, NULL, NULL),
(63, 90, NULL, NULL),
(63, 100, NULL, NULL),
(64, 4, NULL, NULL),
(64, 5, NULL, NULL),
(64, 9, NULL, NULL),
(64, 17, NULL, NULL),
(64, 25, NULL, NULL),
(64, 28, NULL, NULL),
(64, 35, NULL, NULL),
(64, 36, NULL, NULL),
(64, 48, NULL, NULL),
(64, 50, NULL, NULL),
(64, 54, NULL, NULL),
(64, 56, NULL, NULL),
(64, 62, NULL, NULL),
(64, 65, NULL, NULL),
(64, 67, NULL, NULL),
(64, 68, NULL, NULL),
(64, 80, NULL, NULL),
(64, 93, NULL, NULL),
(64, 97, NULL, NULL),
(64, 98, NULL, NULL),
(65, 8, NULL, NULL),
(65, 11, NULL, NULL),
(65, 12, NULL, NULL),
(65, 14, NULL, NULL),
(65, 25, NULL, NULL),
(65, 26, NULL, NULL),
(65, 30, NULL, NULL),
(65, 32, NULL, NULL),
(65, 35, NULL, NULL),
(65, 45, NULL, NULL),
(65, 52, NULL, NULL),
(65, 61, NULL, NULL),
(65, 64, NULL, NULL),
(65, 65, NULL, NULL),
(65, 67, NULL, NULL),
(65, 76, NULL, NULL),
(65, 78, NULL, NULL),
(65, 80, NULL, NULL),
(65, 86, NULL, NULL),
(65, 99, NULL, NULL),
(66, 1, NULL, NULL),
(66, 2, NULL, NULL),
(66, 3, NULL, NULL),
(66, 8, NULL, NULL),
(66, 9, NULL, NULL),
(66, 13, NULL, NULL),
(66, 33, NULL, NULL),
(66, 42, NULL, NULL),
(66, 43, NULL, NULL),
(66, 44, NULL, NULL),
(66, 58, NULL, NULL),
(66, 61, NULL, NULL),
(66, 69, NULL, NULL),
(66, 76, NULL, NULL),
(66, 79, NULL, NULL),
(66, 83, NULL, NULL),
(66, 88, NULL, NULL),
(66, 90, NULL, NULL),
(66, 91, NULL, NULL),
(66, 99, NULL, NULL),
(67, 4, NULL, NULL),
(67, 5, NULL, NULL),
(67, 6, NULL, NULL),
(67, 13, NULL, NULL),
(67, 20, NULL, NULL),
(67, 22, NULL, NULL),
(67, 31, NULL, NULL),
(67, 55, NULL, NULL),
(67, 58, NULL, NULL),
(67, 60, NULL, NULL),
(67, 61, NULL, NULL),
(67, 63, NULL, NULL),
(67, 65, NULL, NULL),
(67, 67, NULL, NULL),
(67, 68, NULL, NULL),
(67, 72, NULL, NULL),
(67, 76, NULL, NULL),
(67, 78, NULL, NULL),
(67, 90, NULL, NULL),
(67, 99, NULL, NULL),
(68, 2, NULL, NULL),
(68, 3, NULL, NULL),
(68, 9, NULL, NULL),
(68, 13, NULL, NULL),
(68, 14, NULL, NULL),
(68, 24, NULL, NULL),
(68, 30, NULL, NULL),
(68, 33, NULL, NULL),
(68, 40, NULL, NULL),
(68, 43, NULL, NULL),
(68, 61, NULL, NULL),
(68, 65, NULL, NULL),
(68, 68, NULL, NULL),
(68, 75, NULL, NULL),
(68, 79, NULL, NULL),
(68, 80, NULL, NULL),
(68, 83, NULL, NULL),
(68, 89, NULL, NULL),
(68, 93, NULL, NULL),
(68, 99, NULL, NULL),
(69, 3, NULL, NULL),
(69, 4, NULL, NULL),
(69, 20, NULL, NULL),
(69, 25, NULL, NULL),
(69, 32, NULL, NULL),
(69, 37, NULL, NULL),
(69, 44, NULL, NULL),
(69, 47, NULL, NULL),
(69, 56, NULL, NULL),
(69, 57, NULL, NULL),
(69, 61, NULL, NULL),
(69, 62, NULL, NULL),
(69, 64, NULL, NULL),
(69, 67, NULL, NULL),
(69, 76, NULL, NULL),
(69, 78, NULL, NULL),
(69, 83, NULL, NULL),
(69, 97, NULL, NULL),
(69, 98, NULL, NULL),
(69, 99, NULL, NULL),
(70, 2, NULL, NULL),
(70, 3, NULL, NULL),
(70, 9, NULL, NULL),
(70, 12, NULL, NULL),
(70, 16, NULL, NULL),
(70, 19, NULL, NULL),
(70, 32, NULL, NULL),
(70, 36, NULL, NULL),
(70, 38, NULL, NULL),
(70, 39, NULL, NULL),
(70, 42, NULL, NULL),
(70, 47, NULL, NULL),
(70, 49, NULL, NULL),
(70, 52, NULL, NULL),
(70, 61, NULL, NULL),
(70, 63, NULL, NULL),
(70, 69, NULL, NULL),
(70, 77, NULL, NULL),
(70, 91, NULL, NULL),
(70, 99, NULL, NULL),
(71, 10, NULL, NULL),
(71, 16, NULL, NULL),
(71, 20, NULL, NULL),
(71, 31, NULL, NULL),
(71, 34, NULL, NULL),
(71, 35, NULL, NULL),
(71, 39, NULL, NULL),
(71, 41, NULL, NULL),
(71, 42, NULL, NULL),
(71, 45, NULL, NULL),
(71, 53, NULL, NULL),
(71, 59, NULL, NULL),
(71, 62, NULL, NULL),
(71, 69, NULL, NULL),
(71, 75, NULL, NULL),
(71, 81, NULL, NULL),
(71, 85, NULL, NULL),
(71, 90, NULL, NULL),
(71, 91, NULL, NULL),
(71, 95, NULL, NULL),
(72, 4, NULL, NULL),
(72, 8, NULL, NULL),
(72, 16, NULL, NULL),
(72, 24, NULL, NULL),
(72, 25, NULL, NULL),
(72, 28, NULL, NULL),
(72, 29, NULL, NULL),
(72, 35, NULL, NULL),
(72, 43, NULL, NULL),
(72, 53, NULL, NULL),
(72, 54, NULL, NULL),
(72, 55, NULL, NULL),
(72, 58, NULL, NULL),
(72, 73, NULL, NULL),
(72, 77, NULL, NULL),
(72, 83, NULL, NULL),
(72, 86, NULL, NULL),
(72, 90, NULL, NULL),
(72, 93, NULL, NULL),
(72, 99, NULL, NULL),
(73, 5, NULL, NULL),
(73, 7, NULL, NULL),
(73, 8, NULL, NULL),
(73, 14, NULL, NULL),
(73, 16, NULL, NULL),
(73, 17, NULL, NULL),
(73, 26, NULL, NULL),
(73, 29, NULL, NULL),
(73, 39, NULL, NULL),
(73, 43, NULL, NULL),
(73, 45, NULL, NULL),
(73, 50, NULL, NULL),
(73, 52, NULL, NULL),
(73, 53, NULL, NULL),
(73, 59, NULL, NULL),
(73, 62, NULL, NULL),
(73, 64, NULL, NULL),
(73, 69, NULL, NULL),
(73, 85, NULL, NULL),
(73, 88, NULL, NULL),
(74, 8, NULL, NULL),
(74, 9, NULL, NULL),
(74, 17, NULL, NULL),
(74, 18, NULL, NULL),
(74, 26, NULL, NULL),
(74, 32, NULL, NULL),
(74, 38, NULL, NULL),
(74, 40, NULL, NULL),
(74, 48, NULL, NULL),
(74, 49, NULL, NULL),
(74, 54, NULL, NULL),
(74, 55, NULL, NULL),
(74, 60, NULL, NULL),
(74, 70, NULL, NULL),
(74, 74, NULL, NULL),
(74, 83, NULL, NULL),
(74, 85, NULL, NULL),
(74, 88, NULL, NULL),
(74, 96, NULL, NULL),
(74, 100, NULL, NULL),
(75, 7, NULL, NULL),
(75, 13, NULL, NULL),
(75, 14, NULL, NULL),
(75, 24, NULL, NULL),
(75, 31, NULL, NULL),
(75, 36, NULL, NULL),
(75, 39, NULL, NULL),
(75, 44, NULL, NULL),
(75, 53, NULL, NULL),
(75, 56, NULL, NULL),
(75, 57, NULL, NULL),
(75, 62, NULL, NULL),
(75, 63, NULL, NULL),
(75, 75, NULL, NULL),
(75, 85, NULL, NULL),
(75, 86, NULL, NULL),
(75, 87, NULL, NULL),
(75, 94, NULL, NULL),
(75, 96, NULL, NULL),
(75, 100, NULL, NULL),
(76, 1, NULL, NULL),
(76, 2, NULL, NULL),
(76, 19, NULL, NULL),
(76, 30, NULL, NULL),
(76, 36, NULL, NULL),
(76, 47, NULL, NULL),
(76, 50, NULL, NULL),
(76, 52, NULL, NULL),
(76, 57, NULL, NULL),
(76, 60, NULL, NULL),
(76, 61, NULL, NULL),
(76, 63, NULL, NULL),
(76, 64, NULL, NULL),
(76, 71, NULL, NULL),
(76, 74, NULL, NULL),
(76, 80, NULL, NULL),
(76, 83, NULL, NULL),
(76, 92, NULL, NULL),
(76, 98, NULL, NULL),
(76, 99, NULL, NULL),
(77, 3, NULL, NULL),
(77, 8, NULL, NULL),
(77, 10, NULL, NULL),
(77, 12, NULL, NULL),
(77, 18, NULL, NULL),
(77, 25, NULL, NULL),
(77, 39, NULL, NULL),
(77, 46, NULL, NULL),
(77, 49, NULL, NULL),
(77, 54, NULL, NULL),
(77, 64, NULL, NULL),
(77, 66, NULL, NULL),
(77, 70, NULL, NULL),
(77, 78, NULL, NULL),
(77, 81, NULL, NULL),
(77, 86, NULL, NULL),
(77, 91, NULL, NULL),
(77, 97, NULL, NULL),
(77, 99, NULL, NULL),
(77, 100, NULL, NULL),
(78, 2, NULL, NULL),
(78, 15, NULL, NULL),
(78, 23, NULL, NULL),
(78, 24, NULL, NULL),
(78, 27, NULL, NULL),
(78, 36, NULL, NULL),
(78, 39, NULL, NULL),
(78, 43, NULL, NULL),
(78, 48, NULL, NULL),
(78, 53, NULL, NULL),
(78, 60, NULL, NULL),
(78, 62, NULL, NULL),
(78, 67, NULL, NULL),
(78, 68, NULL, NULL),
(78, 90, NULL, NULL),
(78, 93, NULL, NULL),
(78, 94, NULL, NULL),
(78, 96, NULL, NULL),
(78, 97, NULL, NULL),
(78, 99, NULL, NULL),
(79, 8, NULL, NULL),
(79, 11, NULL, NULL),
(79, 15, NULL, NULL),
(79, 16, NULL, NULL),
(79, 18, NULL, NULL),
(79, 24, NULL, NULL),
(79, 26, NULL, NULL),
(79, 41, NULL, NULL),
(79, 47, NULL, NULL),
(79, 49, NULL, NULL),
(79, 50, NULL, NULL),
(79, 58, NULL, NULL),
(79, 64, NULL, NULL),
(79, 71, NULL, NULL),
(79, 76, NULL, NULL),
(79, 84, NULL, NULL),
(79, 87, NULL, NULL),
(79, 89, NULL, NULL),
(79, 98, NULL, NULL),
(79, 99, NULL, NULL),
(80, 11, NULL, NULL),
(80, 16, NULL, NULL),
(80, 24, NULL, NULL),
(80, 25, NULL, NULL),
(80, 27, NULL, NULL),
(80, 37, NULL, NULL),
(80, 41, NULL, NULL),
(80, 44, NULL, NULL),
(80, 45, NULL, NULL),
(80, 52, NULL, NULL),
(80, 55, NULL, NULL),
(80, 57, NULL, NULL),
(80, 67, NULL, NULL),
(80, 69, NULL, NULL),
(80, 75, NULL, NULL),
(80, 79, NULL, NULL),
(80, 85, NULL, NULL),
(80, 89, NULL, NULL),
(80, 94, NULL, NULL),
(80, 98, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `kitchens`
--

CREATE TABLE `kitchens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `head_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kitchens`
--

INSERT INTO `kitchens` (`id`, `name`, `description`, `head_img`, `active`, `user_id`, `shop_id`, `created_at`, `updated_at`) VALUES
(1, 'Bếp - Jamar Kris Jr.', 'Rerum adipisci accusamus ipsum labore aut est quos. Quos et voluptas id omnis voluptatum rerum. Et et aliquid rerum error ab eligendi.', '/images/item11.png', 1, 9, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(2, 'Bếp - Dr. Juana Roberts I', 'Voluptatem repellendus modi porro incidunt aut. Sint culpa inventore qui quis quas distinctio. Dolorem asperiores recusandae cum dolorem odio exercitationem.', '/images/item11.png', 1, 24, 4, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(3, 'Bếp - Prof. Demarcus Koelpin III', 'Et corporis dolorem aut eum illum ut amet. Cupiditate velit et facilis omnis. Et voluptatibus eum aspernatur necessitatibus.', '/images/item8.png', 1, 24, 2, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(4, 'Bếp - Chaya Bernier', 'Provident accusantium et quia voluptas. Ducimus consequatur impedit aut et. Consequatur nam similique qui aut.', '/images/item5.png', 1, 8, 5, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(5, 'Bếp - Dr. Giovanna Ratke', 'Et neque iste eligendi est. Ut nulla saepe tempore tenetur sequi. Quia vel aliquam beatae rerum repellat. Perferendis ipsam qui blanditiis.', '/images/item4.png', 1, 8, 3, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(6, 'Bếp - Jennie Ortiz', 'Tempora cum qui temporibus aut ad. Reiciendis illo nemo debitis ex. Perferendis est ullam ut. Accusamus et quae doloribus sequi. Aut qui nihil quis quos. Eveniet eius quo modi tempora cum quis.', '/images/item12.png', 1, 13, 3, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(7, 'Bếp - Kariane Rohan', 'Veritatis sed dolor vel fuga. Consequatur dolorem et quo itaque earum dolor veniam. Laborum mollitia omnis qui natus ut. Sit ad voluptatibus dolor veritatis a dolorum.', '/images/item12.png', 1, 27, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(8, 'Bếp - Eleazar Bailey', 'Temporibus voluptatem aperiam et beatae earum incidunt totam adipisci. Dolorem enim illo quia sunt sit consequatur. Sunt sunt veritatis quia iure.', '/images/item1.png', 1, 8, 5, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(9, 'Bếp - Abdiel Pfannerstill', 'Explicabo dolorem ad est a totam. Voluptatem soluta in aut temporibus deleniti. Sed repudiandae vel sapiente aut est. Aliquid omnis omnis nostrum dolorum asperiores id sint.', '/images/item1.png', 1, 14, 3, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(10, 'Bếp - Cloyd Stokes I', 'Alias optio recusandae sint incidunt omnis. Illum nesciunt voluptates aut hic velit. Ab ex et ipsa exercitationem quia.', '/images/item8.png', 1, 14, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(31, '2014_10_12_000000_create_users_table', 1),
(32, '2014_10_12_100000_create_password_resets_table', 1),
(33, '2019_08_19_000000_create_failed_jobs_table', 1),
(34, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(35, '2021_09_08_174554_laratrust_setup_tables', 1),
(36, '2021_09_13_165115_create_shops_table', 1),
(37, '2021_09_13_170937_create_kitchens_table', 1),
(38, '2021_09_13_171937_create_categories_table', 1),
(39, '2021_09_13_174128_create_category_product_table', 1),
(40, '2021_09_23_160928_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(11, 'products-create', 'Create Products', 'Create Products', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(12, 'products-read', 'Read Products', 'Read Products', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(13, 'products-update', 'Update Products', 'Update Products', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(14, 'products-delete', 'Delete Products', 'Delete Products', '2021-09-23 09:19:40', '2021-09-23 09:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 4),
(2, 1),
(2, 2),
(2, 4),
(3, 1),
(3, 2),
(3, 4),
(4, 1),
(4, 2),
(4, 4),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 1),
(11, 2),
(11, 4),
(11, 5),
(12, 1),
(12, 2),
(12, 4),
(12, 5),
(13, 1),
(13, 2),
(13, 4),
(13, 5),
(14, 1),
(14, 2),
(14, 4),
(14, 5);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `discount` bigint(20) DEFAULT NULL,
  `like_number` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `photos`, `price`, `discount`, `like_number`, `created_at`, `updated_at`) VALUES
(1, 'Filomena Rogahn', 'Enim nihil facere tempora optio rerum voluptates. Vitae iste in voluptatem. Et voluptate commodi ab dolorem. Quae deleniti culpa et consequatur est voluptatem.', '/images/item12.png', 101000, 15000, 97, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(2, 'Prof. Henry Stroman DVM', 'Voluptate nihil tempore ex eligendi. Qui maxime enim quos est quo non. Consequatur labore veniam officiis iure. Ab dicta deleniti maiores ratione repudiandae.', '/images/item6.png', 98000, 16000, 70, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(3, 'Amie Skiles', 'Et vel sint pariatur quia hic labore. Labore amet assumenda est dolorem voluptates repudiandae. Quos et quod vel quam vel sint. Rerum ea voluptatem facere ad.', '/images/item5.png', 296000, 6000, 90, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(4, 'Dr. Creola Reilly', 'Deserunt sunt voluptatem iste. Ut illum nostrum odio et. Sunt aspernatur magnam vel nisi.', '/images/item7.png', 288000, 20000, 40, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(5, 'Friedrich Kiehn', 'Officiis minus minus odio expedita sed accusamus in. Non aut magni eaque. Id odio doloremque ea. Quidem rerum odio ea et cumque suscipit asperiores.', '/images/item7.png', 152000, 8000, 5, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(6, 'Dr. Phyllis Hartmann', 'Autem reiciendis maxime explicabo ut vel at. Reiciendis sint et aut voluptatem iusto praesentium et. Voluptas quidem dolore et numquam quas et. Voluptatum minima velit autem temporibus minus.', '/images/item2.png', 85000, 28000, 13, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(7, 'Shaun Roberts Jr.', 'Officia in quae officia est. Aperiam saepe nulla et. Qui quo sunt enim enim consequuntur et. Vel porro debitis modi nulla voluptatem assumenda.', '/images/item5.png', 76000, 19000, 88, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(8, 'Alexanne Jones', 'Laborum rerum et aliquam mollitia natus. Temporibus natus in similique quia sit. Sit dolore laudantium culpa et tenetur. Magnam doloremque illo rerum reiciendis velit.', '/images/item9.png', 84000, 22000, 82, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(9, 'Barry Lubowitz', 'Nam ratione distinctio voluptatibus in ut et magni. Et magni voluptate est saepe assumenda reiciendis vero.', '/images/item2.png', 194000, 7000, 76, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(10, 'Madeline Schultz', 'Fuga nostrum officiis et soluta dolor in et. Fuga qui id qui suscipit.', '/images/item2.png', 176000, 27000, 10, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(11, 'Orrin Weissnat Jr.', 'Repudiandae voluptatibus et molestias ut pariatur a. Provident laudantium consequatur voluptates. Voluptatum saepe nihil officiis sit.', '/images/item5.png', 183000, 23000, 76, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(12, 'Anjali Schoen', 'Eos possimus nisi quidem quis iste. Aliquam est occaecati voluptas ipsam. Illum cum exercitationem quisquam sed sit.', '/images/item3.png', 244000, 24000, 66, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(13, 'Wilma McClure', 'Aliquam quia sunt rerum et provident ex occaecati quod. Voluptas occaecati totam doloremque quo molestiae quas molestiae ea. Numquam nulla nisi nisi ut laborum.', '/images/item3.png', 251000, 21000, 57, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(14, 'Addison Volkman III', 'Illo ex qui facere tempora. Maiores dolorum vel vitae et. Aliquid ducimus dignissimos aut vel perspiciatis alias quod.', '/images/item5.png', 264000, 27000, 86, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(15, 'Hunter Willms Jr.', 'Praesentium facere inventore qui est et repellendus atque rerum. Sed ullam aliquam iusto. Rerum dolor recusandae inventore exercitationem vel optio vel.', '/images/item5.png', 188000, 25000, 42, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(16, 'Dr. Yessenia Bins', 'Eaque qui soluta debitis aut beatae quam. Eos quasi est non animi dolor. Quos nisi est consequatur saepe possimus officia voluptas quia. Enim aut quos et modi.', '/images/item3.png', 279000, 14000, 11, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(17, 'Ms. Caleigh Hermann III', 'Voluptas est hic sit amet. Harum ut aperiam in saepe ut mollitia dignissimos. Maiores iusto ut aliquid necessitatibus voluptatem.', '/images/item6.png', 235000, 29000, 50, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(18, 'Krystal Pollich Jr.', 'Numquam nihil non fugiat rerum eaque saepe. Veritatis vel ipsam minima repellat id odit inventore. Autem provident possimus voluptas aut fugiat.', '/images/item9.png', 91000, 30000, 24, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(19, 'Prof. Isadore Hodkiewicz V', 'Nihil ipsam exercitationem quae dolorum aut dolor nesciunt. Quia reprehenderit et enim doloremque fuga. Rem quisquam et quae enim illo qui. Laudantium qui praesentium aspernatur libero quibusdam.', '/images/item7.png', 275000, 30000, 67, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(20, 'Barton Flatley', 'Atque cupiditate ex alias officia pariatur dolor eos. Et illum qui eos est inventore. Voluptas laudantium vel ad vitae. Ab maiores quia tempore sint ea similique.', '/images/item7.png', 269000, 5000, 66, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(21, 'Florine Hoeger V', 'Non nulla ratione quos dolor iusto et voluptatem. Veniam rerum nisi totam quia nisi consectetur iusto. Facilis delectus consequuntur iusto possimus vel omnis facere.', '/images/item9.png', 113000, 8000, 98, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(22, 'Aida Auer', 'A consequatur odit rerum. Sit corporis consectetur aspernatur quia nostrum cumque. Dolorem est ea qui et explicabo suscipit. Temporibus ut tempore commodi dolor possimus omnis ipsam.', '/images/item10.png', 111000, 26000, 96, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(23, 'Candace Gibson', 'Recusandae rem minima repellendus. Quis unde nulla enim eos doloremque. Qui deserunt adipisci eaque magni eaque. Molestiae magni placeat consectetur. Dolor id et earum aspernatur.', '/images/item4.png', 299000, 28000, 9, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(24, 'Logan Moen', 'Nobis eveniet tempora voluptas aut. Et commodi ratione qui non ut. Et similique itaque ab ea rerum voluptatem minima tempore.', '/images/item6.png', 203000, 6000, 8, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(25, 'Jo Kirlin V', 'Sequi repudiandae quis molestiae quae quibusdam repellendus. Iusto earum vel amet iste perspiciatis. Sed iusto commodi doloremque fugit voluptatum recusandae dolorem. Qui soluta in quaerat.', '/images/item1.png', 179000, 28000, 79, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(26, 'Domenick Hansen', 'Omnis sint blanditiis voluptatem minima recusandae sunt. Sequi quae reiciendis ad consequatur quas eligendi hic. Asperiores dolorum unde et reprehenderit.', '/images/item8.png', 169000, 17000, 82, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(27, 'Macie Kshlerin', 'Corporis velit culpa soluta ex voluptas qui omnis. Et voluptatum quidem enim laborum dolorum et. Sit id itaque sit debitis ea.', '/images/item1.png', 70000, 7000, 7, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(28, 'Mariam Johns', 'Non eos quia eos. Excepturi omnis quo qui eius.', '/images/item1.png', 292000, 16000, 54, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(29, 'Mr. Grayson Prohaska Sr.', 'Vero qui et eligendi aut sunt nam ut. Dolorem velit laboriosam eveniet et at qui qui. Provident aliquid aut necessitatibus ipsum in tempore placeat tenetur.', '/images/item7.png', 262000, 13000, 52, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(30, 'Maria Zulauf', 'Vero dolores rem nihil corrupti rerum blanditiis molestiae. Explicabo sed tenetur voluptas nesciunt voluptatem similique.', '/images/item1.png', 151000, 18000, 62, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(31, 'Alyson Hoeger II', 'Ut similique minus debitis dolorum. Repellendus omnis ducimus placeat deleniti tempore ratione. Rerum distinctio magnam eligendi similique. In necessitatibus et qui fugit suscipit.', '/images/item2.png', 223000, 5000, 60, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(32, 'Assunta Aufderhar PhD', 'Odio possimus qui dolores. Et quod alias quaerat dolores. Quae voluptas iure earum quia nulla nisi ipsa et. Qui soluta et esse aliquid.', '/images/item10.png', 191000, 26000, 40, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(33, 'Heidi Champlin', 'Vero maxime totam eveniet. Esse iusto accusantium at ea optio. Error qui sit quod quia dolor.', '/images/item4.png', 123000, 9000, 10, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(34, 'Kaleb Kuvalis', 'Eveniet sint eum quia et minima ex illum dolorum. Iusto quam voluptatem quia harum rerum non. Dolorum est beatae vel in eveniet hic et.', '/images/item6.png', 224000, 21000, 46, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(35, 'Dr. Leopoldo Brown', 'Velit omnis eum ipsum rerum ullam ut. Esse praesentium neque quo molestiae ut non. Sed expedita aliquam modi odio et non vero.', '/images/item4.png', 218000, 28000, 31, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(36, 'Mikel Langworth', 'Culpa amet et corrupti nulla. Molestiae corrupti consequatur maxime quibusdam sint eius eum. Vel eaque molestiae consequatur nam. Facere odio dolore fugiat.', '/images/item10.png', 109000, 7000, 63, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(37, 'Birdie Lockman', 'Perferendis voluptas molestiae molestiae sed. Voluptatem saepe libero veniam odit deserunt veritatis eligendi. Officia nam dolorum aliquid.', '/images/item4.png', 71000, 27000, 16, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(38, 'Idella Halvorson', 'Dolorem tempora magni voluptas porro eius ut. Fuga et tempore quo. Corrupti sint distinctio dolorem nostrum. Excepturi laborum nisi tempore quia facilis similique nihil.', '/images/item2.png', 255000, 9000, 11, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(39, 'Prof. Joesph Kihn DVM', 'Doloribus ipsam voluptatem in unde qui autem quam. Voluptas vero tempora et quo nemo hic molestias odit. Sapiente labore quia facere aspernatur quos.', '/images/item12.png', 210000, 8000, 94, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(40, 'Mary Lehner', 'Sit corporis omnis odio repudiandae sit consequatur neque. Quis ratione ea ea suscipit cupiditate eligendi aperiam. Ea dicta molestiae sed. Qui dolorem et tenetur dolorum dolor quis aut.', '/images/item8.png', 267000, 27000, 2, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(41, 'Austyn Hayes', 'Qui et et voluptates unde rerum tempore. Consequuntur et rem aut. Ut exercitationem et ex deleniti sit et non. Error pariatur neque qui ab ut quod nobis.', '/images/item2.png', 235000, 13000, 69, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(42, 'Maynard Jacobson', 'Sunt sequi sed illo. Ducimus minus non quos similique dolor. Tempora aut minus aperiam natus. Ea qui labore sit tempore est est dignissimos.', '/images/item1.png', 32000, 15000, 14, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(43, 'Mr. Mohamed Hintz', 'Fuga quis non facilis illo et asperiores libero natus. Sapiente rerum eius ipsum accusamus adipisci reprehenderit. Aut quis est iure optio. Aspernatur expedita sit nobis est itaque consequuntur.', '/images/item7.png', 155000, 28000, 62, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(44, 'Dion Mante', 'Veniam quasi quisquam ab quos dolores. Magni rem sapiente omnis dolor. Facilis rerum earum ea.', '/images/item6.png', 217000, 10000, 60, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(45, 'Prof. Ashlee Schultz I', 'Ex eum nesciunt totam eaque ratione. Voluptatem nobis dicta nisi unde. Qui occaecati eum expedita vitae debitis nostrum.', '/images/item10.png', 230000, 7000, 94, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(46, 'Maxie Predovic', 'Reiciendis est quis blanditiis voluptatem doloribus. Odit cupiditate rem quas provident. Placeat ducimus est voluptatem.', '/images/item8.png', 38000, 20000, 45, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(47, 'Aurelie Bins', 'Aspernatur quidem quisquam aut nobis. Modi ut quisquam culpa voluptatem quis. Dolorem voluptatem qui labore. Non totam laborum voluptas rerum at totam beatae laudantium.', '/images/item2.png', 272000, 27000, 70, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(48, 'Maymie Tromp', 'Totam saepe repellendus laborum voluptatum sed totam. Nemo autem aut doloremque dignissimos et et ea. Quia esse neque corrupti hic.', '/images/item1.png', 236000, 9000, 10, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(49, 'Arch Towne DVM', 'Natus sunt at est mollitia quam eligendi et. Eum sunt optio sint. Laudantium et eligendi quisquam sint distinctio. Voluptas nemo corporis hic et nihil inventore quam ipsam.', '/images/item8.png', 130000, 24000, 99, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(50, 'Prof. Deondre Corwin DDS', 'Consequatur et nesciunt voluptatem autem nemo. Ut necessitatibus quod provident. Eaque soluta asperiores eveniet perferendis.', '/images/item10.png', 151000, 12000, 37, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(51, 'Prof. Shaniya Bergnaum III', 'Voluptate repudiandae assumenda est id. Aut iste atque porro nihil explicabo.', '/images/item10.png', 269000, 10000, 92, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(52, 'Stone Stamm IV', 'Et sunt sunt repellendus ut velit blanditiis. Commodi corporis est quam quis. Voluptas suscipit voluptas quasi ad.', '/images/item4.png', 277000, 12000, 52, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(53, 'Katharina Trantow', 'Aut dolor ex commodi accusantium. Et autem pariatur placeat minus voluptas provident. Occaecati veniam et maxime consequuntur rerum.', '/images/item5.png', 117000, 19000, 19, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(54, 'Gina Conroy IV', 'Ratione sed unde officia quae cupiditate. Praesentium quidem nulla veritatis non. Culpa totam laboriosam odio voluptatum. Expedita voluptates provident voluptas vitae iusto.', '/images/item12.png', 284000, 9000, 90, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(55, 'Oliver Hansen', 'Nisi blanditiis aut ex harum maiores voluptatem error. Facere ut voluptas eos cupiditate quis et velit aut. Aliquid enim esse enim.', '/images/item12.png', 271000, 19000, 23, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(56, 'Bernita Wilkinson', 'Officiis quis soluta ab non omnis recusandae reiciendis. Laborum sequi voluptatem vitae recusandae quam autem perferendis. Aut fuga veritatis asperiores harum deleniti perspiciatis.', '/images/item4.png', 32000, 7000, 30, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(57, 'Isabell Nienow', 'Qui totam aut qui recusandae provident. Id dolores officiis molestias officiis exercitationem et. Inventore dolores tempora ut velit facilis. Aut possimus expedita repudiandae ab error.', '/images/item5.png', 45000, 20000, 95, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(58, 'Sibyl Bernhard', 'Praesentium sequi porro et. Error consequatur et qui facilis. Amet enim a odit et voluptate quo qui.', '/images/item5.png', 191000, 22000, 36, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(59, 'Andy Ratke', 'Ab expedita nesciunt perferendis id deserunt minima debitis. Molestiae sint facere dolor. Animi dolorem quis hic quia et. Id velit sed deleniti odit.', '/images/item11.png', 131000, 14000, 84, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(60, 'Benjamin Dickinson', 'Sapiente nam et voluptas. Iure sed eos quasi voluptatem nulla aut. Labore veniam ad labore nemo dicta. Dolore qui dolorem necessitatibus consequatur ea. Ut vitae sit alias.', '/images/item7.png', 131000, 27000, 28, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(61, 'Damaris Graham', 'Odio fugiat omnis labore. Sit eos esse beatae voluptate aut. Porro pariatur voluptas iste ad odit quis.', '/images/item3.png', 150000, 10000, 90, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(62, 'Prof. Daphney Hodkiewicz Sr.', 'Reiciendis doloribus neque modi ut facilis. Eius et et iste sed autem.', '/images/item8.png', 168000, 12000, 13, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(63, 'Fatima Shanahan DVM', 'Voluptatibus laborum corporis vero ducimus consequatur. Libero eum rem incidunt iusto quasi amet. Animi omnis ipsa doloremque natus.', '/images/item4.png', 47000, 6000, 14, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(64, 'Maxie Torp', 'Occaecati accusantium doloremque incidunt. Illum porro facere non quod ab cupiditate. Nulla velit et recusandae ut doloremque quasi.', '/images/item6.png', 54000, 23000, 42, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(65, 'Ms. Genoveva Collier DDS', 'Ullam illum quo voluptatum eveniet consequatur soluta. Dolorum temporibus dolorem occaecati totam. Et voluptate eaque voluptatem excepturi atque veritatis nobis repellat.', '/images/item12.png', 146000, 7000, 47, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(66, 'Mr. Cletus Wehner DVM', 'Nam quisquam labore quis porro. Esse laudantium aut optio qui eligendi distinctio non. Modi debitis ab sint sapiente illum beatae.', '/images/item6.png', 175000, 21000, 39, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(67, 'Mr. Gennaro Nikolaus', 'Culpa sequi commodi sed consectetur libero eaque molestias. Aspernatur esse qui quae animi corrupti aut. Consequatur cupiditate nihil est magnam et similique aut.', '/images/item11.png', 40000, 16000, 66, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(68, 'Solon Mayer', 'Ut cumque ipsum ratione enim eos blanditiis. Soluta ad praesentium autem reiciendis qui maiores ab. Impedit fugit labore est pariatur quos et. Blanditiis quis accusamus maiores.', '/images/item2.png', 242000, 13000, 30, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(69, 'Neoma Schulist', 'Aut delectus reiciendis alias dignissimos. Deleniti quo voluptatem nesciunt aut. Voluptatem et porro animi ad.', '/images/item4.png', 45000, 17000, 46, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(70, 'Sabina Sauer', 'Eligendi ipsa soluta sit qui adipisci facilis voluptas. Ut quia vero accusamus ipsum dicta magni eos maxime. Qui quibusdam quia assumenda id vel repellat alias et. Enim sed eaque est officiis facere.', '/images/item4.png', 209000, 22000, 92, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(71, 'Darrick Bailey', 'Placeat enim non quisquam quos provident ex. Iusto earum saepe qui. Adipisci doloribus perferendis est sunt commodi.', '/images/item5.png', 288000, 10000, 7, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(72, 'Korey Beier', 'Optio nihil commodi reprehenderit odio est. Optio deleniti sint et ipsa veniam iusto. Et ducimus et libero.', '/images/item8.png', 42000, 30000, 26, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(73, 'Ocie Durgan', 'Corrupti totam exercitationem incidunt quidem fuga ratione vel. Sed deserunt voluptatem natus. Fuga labore accusantium et distinctio. Dolores consequatur dolore est nostrum in et dolores veritatis.', '/images/item12.png', 134000, 16000, 15, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(74, 'Princess Trantow', 'At veritatis vel temporibus consequatur. Eligendi qui eos a. Ratione vitae voluptates saepe alias dolor sed. Ipsa repudiandae sint recusandae ab.', '/images/item11.png', 130000, 10000, 95, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(75, 'Dr. Lucile Fisher DDS', 'Ea voluptatem totam enim voluptas veniam voluptatem. Voluptas quod corrupti ut molestias. Nostrum beatae et alias excepturi. Dolor cupiditate qui quis eos.', '/images/item3.png', 38000, 12000, 40, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(76, 'Mr. Floy Stiedemann', 'Dolorum sit repudiandae suscipit molestiae atque et. Optio maiores odit adipisci et similique.', '/images/item2.png', 132000, 16000, 60, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(77, 'Dr. Unique Roob', 'Dolor aut aliquid est perspiciatis sit. Magnam non sed rerum repellat. Vitae distinctio eligendi ipsa doloribus inventore et.', '/images/item11.png', 159000, 15000, 4, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(78, 'Nella Cremin', 'Et nobis ratione distinctio ut. Vitae aut omnis dignissimos recusandae suscipit ut facilis. Et ipsum non animi soluta vel eveniet.', '/images/item5.png', 92000, 22000, 92, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(79, 'Dr. Ernestina Wolf', 'Ab magnam in sed. Quia culpa occaecati culpa eum sint voluptate. Saepe vitae quidem vel.', '/images/item9.png', 178000, 17000, 61, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(80, 'Dayton Huel', 'Non beatae ipsa voluptas quia molestiae. Optio minus dolor ducimus rerum quaerat et totam non.', '/images/item12.png', 191000, 23000, 82, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(81, 'Clay Hoppe', 'Voluptates iste labore optio illum voluptas non reiciendis. Error dolores ipsa omnis qui ut. Nostrum facilis vitae ullam impedit tempora.', '/images/item1.png', 204000, 25000, 91, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(82, 'Winona Kuphal', 'Autem quasi ut ullam illo itaque repudiandae. Ducimus et eum cum odio qui inventore. Eos a voluptas sit et et dolor.', '/images/item2.png', 74000, 13000, 80, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(83, 'Prof. Kelton Dickinson', 'Pariatur ut omnis nulla commodi itaque dolores eos. Error et laboriosam numquam qui. Molestiae non velit voluptate iure ut.', '/images/item12.png', 278000, 12000, 93, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(84, 'Prof. Reece Anderson DDS', 'Quibusdam nesciunt accusantium alias corporis. Accusantium non quia aliquid et veritatis iusto quam laboriosam. Ea iure rerum rerum ipsam harum. Illum et ab fugit corrupti et iure sit.', '/images/item8.png', 270000, 30000, 61, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(85, 'Timmy Ruecker III', 'Error sint suscipit ab consequuntur. Repudiandae totam explicabo sit et quo. Qui saepe nobis sint aut minus.', '/images/item11.png', 105000, 21000, 40, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(86, 'Lori Schiller', 'Iure quasi aliquid beatae sequi et dolorem inventore. Qui beatae excepturi distinctio fugit molestias sunt ut. Repellat explicabo nisi id quis tempore quis. Alias et ullam maxime laboriosam.', '/images/item8.png', 156000, 10000, 46, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(87, 'Mrs. Sadie Gaylord', 'Rerum consequatur dolore est. Sint rerum quo sunt corrupti. Et modi fugit ullam dolor est dolores. Eum consequatur id ea quasi earum eos. Eius praesentium dolorum qui omnis dolore.', '/images/item10.png', 74000, 12000, 1, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(88, 'Linwood Stiedemann III', 'Culpa est quidem laudantium quo atque quod. Atque quo consequatur praesentium suscipit voluptatem. Dicta corporis itaque ut.', '/images/item11.png', 213000, 23000, 13, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(89, 'Noe Keebler', 'Iusto aut quo sit tenetur. Labore quo deleniti ea accusantium est ut est. Officia sed aut qui impedit ut libero nihil.', '/images/item7.png', 258000, 15000, 35, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(90, 'Della Runte', 'Et et est ea iure omnis ipsum et. Fugiat esse aut error doloremque exercitationem consequuntur ut qui. Totam consequatur repellendus et maiores asperiores.', '/images/item11.png', 216000, 28000, 71, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(91, 'Lucie McClure', 'Sit nihil assumenda dolore. Ut est iste est quia. Rerum pariatur repudiandae iure saepe. Voluptatem architecto et voluptatem dignissimos repellendus excepturi unde.', '/images/item7.png', 201000, 19000, 90, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(92, 'Barry Goldner', 'Nam alias dolore aut vitae harum. Libero quisquam aspernatur tenetur esse laborum. Aut suscipit voluptas itaque quidem eveniet. Consequatur in repellat sed neque quae qui.', '/images/item9.png', 144000, 17000, 87, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(93, 'Dawson Walter V', 'Et est rem quaerat voluptas aut ipsam. Dolores nobis est ullam est iusto. Similique sit saepe iste.', '/images/item8.png', 90000, 27000, 89, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(94, 'Frederik Klocko', 'Accusamus enim et voluptatum necessitatibus. Mollitia ipsam nisi consequatur eaque consequatur modi incidunt. Et impedit qui rerum atque sit deserunt. Corporis ad quis sunt quod ipsa voluptatibus et.', '/images/item4.png', 85000, 26000, 56, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(95, 'Prof. Savion Durgan Sr.', 'Repudiandae enim eaque quo placeat maxime pariatur. Omnis praesentium ipsa similique voluptatem. Dolorem eum qui dolores sint. Architecto fugiat quia voluptatum exercitationem amet aut.', '/images/item1.png', 232000, 29000, 30, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(96, 'Mr. Terrill Dickens Jr.', 'Officia vitae sit est omnis voluptate. Saepe rerum cupiditate dolores nihil ipsam. Eos sequi est et.', '/images/item1.png', 53000, 22000, 19, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(97, 'Dr. Electa Heidenreich PhD', 'Ullam consequatur qui recusandae saepe eum. Dolor vero repellendus molestiae laudantium occaecati. Consequatur reprehenderit non dolor expedita consequatur eum nisi rerum.', '/images/item8.png', 218000, 27000, 82, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(98, 'Dr. Jessyca Schmitt Jr.', 'Et et est nostrum aut unde hic iste. Minima est voluptates dolor omnis. Non id excepturi doloribus laudantium. Sit et doloremque quae ut quia.', '/images/item7.png', 274000, 6000, 47, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(99, 'Ashlee Grimes', 'Placeat quisquam natus sit qui laborum ut. Sunt quidem accusantium rerum corrupti minus et. Libero suscipit magnam quia accusantium.', '/images/item7.png', 142000, 9000, 44, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(100, 'Dr. Wilber Kihn DVM', 'Saepe quod consequatur debitis autem commodi. Voluptatem eius cupiditate quis excepturi in eum sequi. Dolor aliquam ut et ut qui ratione aut. Eius odit repellendus reprehenderit quaerat magnam.', '/images/item7.png', 137000, 25000, 85, '2021-09-23 09:19:41', '2021-09-23 09:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(2, 'administrator', 'Administrator', 'Administrator', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(3, 'user', 'User', 'User', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(4, 'shop_manager', 'Shop Manager', 'Shop Manager', '2021-09-23 09:19:40', '2021-09-23 09:19:40'),
(5, 'kitchen_manager', 'Kitchen Manager', 'Kitchen Manager', '2021-09-23 09:19:40', '2021-09-23 09:19:40');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(3, 1, 'Normal'),
(1, 2, 'Normal'),
(4, 3, 'Normal'),
(1, 4, 'Normal'),
(4, 5, 'Normal'),
(2, 6, 'Normal'),
(2, 7, 'Normal'),
(4, 8, 'Normal'),
(3, 9, 'Normal'),
(1, 10, 'Normal'),
(3, 11, 'Normal'),
(2, 12, 'Normal'),
(1, 13, 'Normal'),
(4, 14, 'Normal'),
(2, 15, 'Normal'),
(2, 16, 'Normal'),
(1, 17, 'Normal'),
(5, 18, 'Normal'),
(1, 19, 'Normal'),
(3, 20, 'Normal'),
(4, 21, 'Normal'),
(5, 22, 'Normal'),
(5, 23, 'Normal'),
(4, 24, 'Normal'),
(4, 25, 'Normal'),
(3, 26, 'Normal'),
(4, 27, 'Normal'),
(1, 28, 'Normal'),
(2, 29, 'Normal'),
(5, 30, 'Normal'),
(1, 31, 'Normal'),
(1, 32, 'Normal'),
(2, 33, 'Normal');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `name`, `description`, `address`, `head_img`, `active`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Lebsack, McGlynn and Smitham', 'Voluptatum nesciunt non exercitationem harum. Aspernatur eveniet nobis et fugiat. Quisquam quia cupiditate quibusdam velit. Blanditiis aut delectus provident voluptatum excepturi.', '895 Meta Mountain\nDeshauntown, NH 79188-1416', '/images/restaurant3.jpg', 1, 21, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(2, 'Rippin LLC', 'Est modi voluptatibus qui ratione ex enim natus quia. Voluptatem commodi est cum est aliquam ut. Et quaerat id eum.', '64929 Mario Cliffs Apt. 719\nEast Hermanton, MT 18779', '/images/restaurant3.jpg', 1, 19, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(3, 'Gutkowski Ltd', 'Cupiditate placeat consequuntur est. Saepe est fugit reiciendis ad quibusdam. Assumenda quis quas reiciendis voluptatum ea voluptas doloribus. Sunt eos distinctio quia optio omnis.', '29381 Grayson Via Apt. 009\nNew Daphneton, NV 72902-7722', '/images/restaurant2.jpg', 1, 22, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(4, 'Fay, Murray and Harber', 'Eum sint voluptate qui excepturi facere perferendis. Magnam perspiciatis laborum consequatur cum debitis voluptas non. Sint nulla eos id exercitationem saepe vero rerum molestiae.', '8882 Emmerich Turnpike\nLake Daijashire, HI 62246', '/images/restaurant1.jpg', 1, 21, '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(5, 'Torphy Group', 'Consectetur at est occaecati quia. In voluptate voluptatibus adipisci ullam. Rerum ut et quibusdam odio recusandae vitae.', '407 Rippin Stream\nHankchester, IA 93135-7490', '/images/restaurant2.jpg', 1, 15, '2021-09-23 09:19:41', '2021-09-23 09:19:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tel`, `email_verified_at`, `password`, `photo`, `gender`, `active`, `deleted_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'trungliem87@gmail.com', '0916888195', NULL, '$2y$10$6IRsutAFQ4.70LRPKEkksOUZgtb2szoMfRQjqNh8H8hltA31tU1ci', NULL, 1, 1, NULL, NULL, NULL, NULL),
(2, 'Le Kien Cuong Admin', 'kiencuongle@yahoo.com', '0987456456', NULL, '$2y$10$y/9nNAx3tw29g/Aa9grUoOXIq9pl3ub2fleP4YbTccuN2XMGGvq2e', NULL, 1, 1, NULL, NULL, NULL, NULL),
(3, 'Admin', 'phi@gmail.com', '0987654321', NULL, '$2y$10$swVlAAWpCxhQDYYErzE5JO79DdkIKVrOonY9YVBvw7Anl0oGVeoXe', NULL, 1, 1, NULL, NULL, NULL, NULL),
(4, 'Reyes Reichel', 'frida.emmerich@example.org', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 1, NULL, 'XK102lu6Gz', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(5, 'Russ O\'Keefe DDS', 'rbartell@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'aCejENZ6Ud', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(6, 'Tamia Marvin', 'lchamplin@example.net', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 1, NULL, 'gCMzYiqgDK', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(7, 'Ellsworth Jacobs', 'orippin@example.net', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'HMfmKIqa3t', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(8, 'Jacquelyn Larkin', 'rosenbaum.britney@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'jBQJBAXC9h', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(9, 'April Sauer', 'ojohnson@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 1, NULL, 'npvG6CsOWh', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(10, 'Guadalupe Lemke', 'harmony.witting@example.net', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 1, NULL, 'k68Nq3a1an', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(11, 'Emile Johnson', 'simeon46@example.org', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, 1, NULL, 'fBSyf2IkBw', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(12, 'Arlo Greenholt', 'mbode@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, 1, NULL, 'qLddttWYWo', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(13, 'Salvatore Feil PhD', 'stewart23@example.org', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'vyRnbZE5mt', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(14, 'Prof. Miller Klocko III', 'monica.daugherty@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'qkvQUm675H', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(15, 'Karl Bergstrom IV', 'ymurray@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'TofLC4fwTS', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(16, 'Jaime Mosciski', 'laurel72@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'UZ44uNcCsb', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(17, 'Jaycee Lynch', 'pagac.zaria@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 1, NULL, 'AQGyutr9Wq', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(18, 'Lottie Raynor', 'wilderman.baby@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, 1, NULL, 'eRfpgqhUbi', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(19, 'Emilie Hirthe', 'pollich.alvena@example.org', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, 1, NULL, 'nBODts7uvZ', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(20, 'Mossie Kuvalis', 'homenick.kyla@example.net', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 1, NULL, 'mDt9zmJfpE', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(21, 'Mike Trantow DVM', 'aabernathy@example.net', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'mdeXDNMB3R', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(22, 'Dr. Viva Kunde', 'jacobi.dexter@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 1, NULL, 'zFYTOf2e21', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(23, 'Zoe Hintz DVM', 'ddenesik@example.org', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 1, NULL, 'pra9wmPbGc', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(24, 'Zoe Kling', 'tstiedemann@example.org', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, 1, NULL, '3AcdzEcuVf', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(25, 'Cale Walker', 'reynolds.elissa@example.net', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'IJqjtcBbpG', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(26, 'Carli Prohaska', 'ikuvalis@example.net', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 1, 1, NULL, 'SuBtp7kktq', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(27, 'Isaiah Cruickshank', 'merle.nienow@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'MBbcOkgjrg', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(28, 'Abbey Ratke', 'sauer.louvenia@example.org', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, 1, NULL, '0gmNMcR8cH', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(29, 'Nestor Herman', 'jacklyn37@example.com', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, 1, NULL, 'qouBuzb9A6', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(30, 'Michel Bartoletti V', 'lyda.reinger@example.net', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'xUk2b2WwHZ', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(31, 'Mrs. Serenity Trantow', 'rbashirian@example.net', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'RRDVUnqyIJ', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(32, 'Amani Schaefer', 'xgerlach@example.net', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 2, 1, NULL, 'CciVpErDDl', '2021-09-23 09:19:41', '2021-09-23 09:19:41'),
(33, 'Mrs. Augusta Littel', 'isobel74@example.org', NULL, '2021-09-23 09:19:41', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 0, 1, NULL, 'gSLk6JwV0B', '2021-09-23 09:19:41', '2021-09-23 09:19:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_parent_id_index` (`parent_id`),
  ADD KEY `categories_kitchen_id_index` (`kitchen_id`);

--
-- Indexes for table `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`category_id`,`product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kitchens`
--
ALTER TABLE `kitchens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kitchens_user_id_index` (`user_id`),
  ADD KEY `kitchens_shop_id_index` (`shop_id`);

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
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

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
  ADD PRIMARY KEY (`id`);

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
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shops_user_id_index` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_tel_unique` (`tel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kitchens`
--
ALTER TABLE `kitchens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
