CREATE TABLE `channel` (
  `channel_id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `you_tube_user_id` VARCHAR(255) NOT NULL,
  `you_tube_channel_id` VARCHAR(255) NOT NULL,
  `strikes` INT(1) UNSIGNED NOT NULL DEFAULT '0',
  PRIMARY KEY (`channel_id`)
) ENGINE=InnoDB CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
