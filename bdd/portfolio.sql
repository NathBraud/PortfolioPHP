-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `Users`;
CREATE TABLE `Users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Users` (`id`, `username`, `password`) VALUES
(1,	'Nathan',	'$2y$10$25hJz39AbNOvRJFSsdrPBeKAxbBIbgJfSybq29p2ICNR9t.jKHIEu'),
(5,	'Bruno',	'$2y$10$VnHyhopKFqxLaxV0mUjMH.3VJOFg/RJPh7y.ecWmgE2tN.CJ3PNI2');

DROP TABLE IF EXISTS `Works`;
CREATE TABLE `Works` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `url` varchar(10000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Works` (`id`, `title`, `description`, `url`) VALUES
(63,	'Qu\'est-il advenu du monde ?',	'Voici comment la population actuelle s\'est retrouvÃ©e...',	''),
(65,	'Sardoche',	'Sardoche rage',	'https://imgur.com/a/8e6YBwc');

-- 2020-03-20 10:45:13
