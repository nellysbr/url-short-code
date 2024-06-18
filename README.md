CREATE TABLE `urls` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`short_key` varchar(6) NOT NULL,
`original_url` text NOT NULL,
`created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
PRIMARY KEY (`id`),
UNIQUE KEY `short_key` (`short_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
