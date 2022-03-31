SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `dunling_chat`;
CREATE TABLE `dunling_chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nicheng` varchar(55) COLLATE utf8_bin DEFAULT NULL,
  `content` varchar(55) COLLATE utf8_bin DEFAULT NULL,
  `time` varchar(55) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;