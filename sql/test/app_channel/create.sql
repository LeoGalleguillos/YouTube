CREATE TABLE `app_channel` (
  `app_channel_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `app_id` int(10) unsigned not null,
  `channel_id` int(10) unsigned not null,
  `access_token` varchar(255) DEFAULT NULL,
  `access_token_expiration` DATETIME DEFAULT NULL,
  `refresh_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`app_channel_id`),
  UNIQUE app_id_channel_id (`app_id`, `channel_id`)
) ENGINE=InnoDB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
