# Host: localhost  (Version: 5.5.53)
# Date: 2018-12-29 11:04:31
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "migrations"
#

/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_11_28_062653_create_posts_table',1),(4,'2018_12_20_153603_alter_posts_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

#
# Structure for table "password_resets"
#

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "password_resets"
#

/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

#
# Structure for table "posts"
#

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `click` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(3) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "posts"
#

/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (2,'Reiciendis reprehenderit molestiae minus quia modi accusantium libero.','Qui dolor culpa at. Deserunt molestiae corporis aut aut voluptatem enim reprehenderit architecto. Et qui culpa sint nesciunt doloribus. Tempore sequi voluptas id. Enim officia tenetur occaecati quam et beatae minus. Ipsum nisi minus nihil doloremque perferendis architecto. Reprehenderit dolor omnis aperiam repellendus non. Repellendus quibusdam ea voluptas exercitationem enim omnis nihil.',0,22,'2018-11-28 15:21:38','2018-12-19 19:09:12',1),(3,'Voluptatem enim cumque cum esse voluptas totam.','Eaque amet ut rerum. Aut doloribus est sed iure et. Similique velit qui eum voluptatem ut veritatis. Laborum ut non aut. Cumque quo pariatur odio. Perspiciatis id architecto optio possimus eum. Id vitae cum fugiat est dolore voluptatem qui. Occaecati quo eos doloremque. Quo sapiente quo voluptas dolores aliquid quo. Autem quos eveniet voluptates aut. Dolorum occaecati nulla molestiae quisquam.',0,7,'2018-11-28 15:21:38','2018-12-06 14:45:02',1),(4,'Saepe voluptas aut sit dolore qui commodi.','Reprehenderit est distinctio tempora dicta mollitia mollitia. Quo dolor commodi quidem odit est quia occaecati. Perspiciatis est dolorem fugit molestias iste. Omnis velit dolorum esse amet qui laborum iste et. Odio ut officia facere magni. Quo deserunt eius temporibus omnis et. Vero et ut placeat voluptas suscipit. Doloribus sed reprehenderit voluptatem facere. Soluta saepe consequuntur ut porro cupiditate. Possimus omnis dolore consectetur officia sunt cumque quod.',0,5,'2018-11-28 15:21:38','2018-12-06 17:18:04',1),(5,'Beatae ipsa hic itaque autem non labore omnis.','Quae sit dolorum veritatis sed illum fuga. Quo voluptatem rerum qui vero repudiandae cum. Libero qui debitis ad doloribus aspernatur sed sit. Numquam earum enim tenetur enim non. Sunt voluptatem ipsa quibusdam qui. Consequatur explicabo qui officiis laboriosam cumque animi. Unde tempora aut veritatis. Sit enim enim sunt veritatis ad. Odit voluptas ex ea ut placeat ut. Veritatis voluptas fuga dolorem nihil quas. Excepturi exercitationem architecto odit expedita nesciunt id. Deleniti quod magni odio quibusdam voluptatem est velit. Velit voluptatem doloremque officia unde adipisci.',0,3,'2018-11-28 15:21:38','2018-12-06 17:18:02',1),(6,'Magnam illo voluptatem eos et.','Officiis et ut aut eveniet blanditiis repellendus quis. Veniam magni recusandae quia reiciendis deserunt voluptatem. Autem in cumque ipsa consequatur. Inventore vitae explicabo unde consequuntur iusto et voluptatibus magni. Sit qui quaerat similique iste molestiae repudiandae. Sit id cupiditate quidem est blanditiis et aut maiores. Consequatur molestiae enim sequi molestiae nisi quasi. Adipisci magni natus autem qui in. Et occaecati similique nihil distinctio. Eum nihil sit cupiditate commodi neque rerum necessitatibus. Est beatae ut et quidem impedit. Aut sed repellat impedit a placeat doloribus voluptate. Eligendi iure consequatur amet doloribus nemo.',0,2,'2018-11-28 15:21:38','2018-12-06 17:17:57',1),(7,'Ratione voluptas amet rerum iste.','Omnis voluptatem quo consequatur dolorem quae. Quo perspiciatis eos aliquam temporibus ad. Est tenetur in impedit atque ipsam. Aut quod nesciunt modi exercitationem deleniti et enim. Porro asperiores similique et praesentium. Nam reprehenderit veritatis molestias est. A perspiciatis repellendus quam eos assumenda.',0,0,'2018-11-28 15:21:38','2018-11-28 15:21:38',1),(8,'Et perferendis tempora ab alias sed doloribus.','Impedit iure ad sunt nemo. Architecto eveniet quo labore quidem neque vero doloremque. Non maxime rem vitae ea voluptates et. Sit enim dolor fuga iusto saepe. Unde dolores quo est sequi et eligendi a sunt. Nulla quasi rem est excepturi suscipit maxime enim tenetur. Repellendus itaque et voluptatem iure. Rerum quia nostrum maxime at doloremque ad eligendi. Doloribus tempora temporibus ut sint laboriosam maxime magnam commodi. Ea sed in numquam neque in quam blanditiis nobis. Atque vel assumenda rerum ut neque beatae accusantium. Eos incidunt dolor culpa quae. Adipisci enim ratione ea dolorem neque et.',0,2,'2018-11-28 15:21:38','2018-12-22 14:20:48',1),(9,'Quo nesciunt qui suscipit omnis blanditiis asperiores omnis.','Nostrum dicta vel quia. Non pariatur corrupti dolores vero inventore aut excepturi. Est suscipit veniam magnam porro. Dolor consequatur dolores qui provident id expedita. Explicabo amet voluptatem nam velit accusamus. Atque est quibusdam rerum architecto neque corporis laborum. Odit doloribus dicta voluptatum ratione eum eligendi omnis nobis.',0,1,'2018-11-28 15:21:38','2018-12-22 14:20:43',1),(10,'Dolores molestiae voluptatum omnis occaecati consequuntur.','Labore eos et eum consequuntur atque numquam enim. Aut occaecati qui odio in. In quia repellat ad qui dolores praesentium ut. Non repellat non eaque at. Aperiam molestias temporibus consectetur ut molestiae. Tempora deserunt suscipit eveniet cupiditate optio facere aliquid. Et aspernatur ea soluta et. Animi sint ullam deserunt.',0,1,'2018-11-28 15:21:38','2018-11-28 18:17:50',1),(11,'Quae expedita non sed maiores nihil totam et modi.','Voluptate reprehenderit est rerum ut qui ipsa. Quia et impedit expedita qui cum. Ratione eos ad voluptas omnis illo molestias libero. Voluptatum reprehenderit doloribus aut. Fugiat rerum dolor saepe asperiores impedit alias. Similique et eum ut qui. Vitae ut laudantium sit sit a optio aut. Ducimus ratione dolore veritatis. At repellendus corrupti sequi.',0,1,'2018-11-28 15:21:38','2018-12-21 13:53:40',1),(15,'哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈','哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈',0,3,'2018-12-19 19:45:22','2018-12-21 13:53:34',1),(17,'测试测试测试测试测试测试','测试测试测试测试测试测试 测试测试测试测试测试测试 测试测试测试测试测试测试 测试测试测试测试测试测试 测试测试测试测试测试测试 测试测试测试测试测试测试 测试测试测试测试测试测试 测试测试测试测试测试测试',0,2,'2018-12-19 19:48:18','2018-12-22 11:23:48',1),(18,'this are post122222222222','<p>朦朦胧胧朦朦胧胧朦朦胧胧朦朦胧胧朦朦胧胧朦朦胧胧</p>',0,4,'2018-12-20 10:29:51','2018-12-22 11:23:52',0),(19,'图文1图文1图文1图文1图文1','<p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p>16161</p><p>161616</p><p><br></p><p>后王</p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p><p><br></p>',0,2,'2018-12-20 10:45:31','2018-12-22 14:20:28',0),(21,'图片1','<p><img src=\"/uploads/18-12-20/10534167193.png\" style=\"max-width:100%;\"><br></p>',0,8,'2018-12-20 10:55:35','2018-12-22 14:20:39',0);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for table "users"
#

/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'ivan','ivan@doogee.cc','0000-00-00 00:00:00','$2y$10$9QYnwqdfCmPVEkpxP8dFr.YJJMdX44TNDn.Hs9f7mkIH1oyRtDKWi','Buz3ctQdspplcIE0w3MYuwtUsMybdX3tinCcuu74HBGxOoyXrH2jPv31sUA8','2018-11-29 16:56:40','2018-11-29 16:56:40'),(3,'chris1','chris1@doogee.cc',NULL,'$2y$10$GWcVqfRaNYXNgyODfOdNuOLzBkgrok.f9aeO.fvCo/m99yEGQmolO',NULL,'2018-12-19 15:38:59','2018-12-21 14:48:15'),(4,'fredia','fredia@doogee.cc',NULL,'$2y$10$CD3qvh3U5sbHoWaAVZTEP.j.KACslE3Ssv4Zo3pmGXl5HAbUUpTZu',NULL,'2018-12-19 18:40:38','2018-12-19 18:40:38'),(5,'allen','allen@doogee.cc',NULL,'$2y$10$Bg/.glYbRihXjcEmycGLCecAaQdIKLCKFbgeK79MITR.f9pAS5Bc.',NULL,'2018-12-19 18:42:01','2018-12-19 18:42:01');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
