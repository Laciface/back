CREATE DATABASE IF NOT EXISTS `back_to_the_future` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `back_to_the_future`;

CREATE TABLE IF NOT EXISTS `MENU`
(
    `ID`       INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `LABEL`    TEXT NOT NULL,
    `POSITION` INT(11) UNSIGNED NOT NULL,
    `FILE`     TEXT NOT NULL,
    `TMS`      TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY ( `ID` )
) ENGINE=MyISAM DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `VIDEO_CONTENT`
(
    `ID`    INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `LABEL` TEXT NOT NULL,
    `URL`   TEXT NOT NULL,
    `TMS`   TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY ( `ID` )
) ENGINE=MyISAM DEFAULT CHARSET=UTF8;

CREATE TABLE IF NOT EXISTS `INFO`
(
    `ID`    INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    `LABEL` TEXT NOT NULL,
    `DATA`  TEXT NOT NULL,
    `TMS`   TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY ( `ID` )
) ENGINE=MyISAM DEFAULT CHARSET=UTF8;
