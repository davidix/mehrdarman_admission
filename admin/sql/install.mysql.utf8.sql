CREATE TABLE IF NOT EXISTS `#__mehrdarman_admission_admission` (
	`id` int(11) unsigned NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(100) NOT NULL,
	`tel` VARCHAR(20) NOT NULL,
	`disease` VARCHAR(100) NOT NULL,
	`description` VARCHAR(500) NOT NULL,
	`ordering` int(11) NOT NULL DEFAULT '0',
	`published` tinyint(3) NOT NULL DEFAULT '0',
	`checked_out` int(11) unsigned NOT NULL DEFAULT '0',
	`checked_out_time` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`created_by` int(11) unsigned NOT NULL DEFAULT '0',
	`created_by_alias` varchar(255) NOT NULL DEFAULT '',
	`modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
	`modified_by` int(11) unsigned NOT NULL DEFAULT '0',
	`version` int(11) unsigned NOT NULL DEFAULT '1',
	`hits` int(11) NOT NULL DEFAULT '0',
	`language` char(7) NOT NULL COMMENT 'The language code for the article.',
	`metadata` text NOT NULL,
	`metakey` text NOT NULL,
	`metadesc` text NOT NULL,
	PRIMARY KEY (id)
)
CHARACTER SET utf8
COLLATE utf8_general_ci;
