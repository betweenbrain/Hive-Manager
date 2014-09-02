-- <?php defined('_JEXEC') or die ?>;

CREATE TABLE IF NOT EXISTS `#__hivemanager_hives` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` varchar (100) NOT NULL,
  `lat` DECIMAL(10, 8) NOT NULL,
  `lng` DECIMAL(11, 8) NOT NULL,
  `size` INT(1) NOT NULL,
  `started` datetime NOT NULL DEFAULT '0000-00-00',
  `checked_out` INT(11)  NOT NULL ,
  `checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;