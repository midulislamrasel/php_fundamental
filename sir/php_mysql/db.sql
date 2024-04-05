DROP TABLE IF EXISTS `core_users`;
CREATE TABLE  `core_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `full_name` varchar(45) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `ip` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `core_users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;