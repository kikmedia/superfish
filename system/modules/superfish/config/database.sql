-- ********************************************************
-- *                                                      *
-- * IMPORTANT NOTE                                       *
-- *                                                      *
-- * Do not import this file manually but use the Contao  *
-- * install tool to create and maintain database tables! *
-- *                                                      *
-- ********************************************************

-- 
-- Table `tl_layout`
-- 

CREATE TABLE `tl_layout` (
  `superfish` char(1) NOT NULL default '',
  `hoverIntent` char(1) NOT NULL default '',
  `supersubs` char(1) NOT NULL default '',
  `sf_hoverClass` varchar(32) NOT NULL default '',
  `sf_pathClass` varchar(32) NOT NULL default '',
  `sf_animation` text NULL,
  `sf_pathLevels` int(10) unsigned NOT NULL default '0',
  `sf_delay` int(10) unsigned NOT NULL default '0',
  `sf_speed` varchar(32) NOT NULL default '',
  `sf_autoArrows` char(1) NOT NULL default '',
  `sf_dropShadows` char(1) NOT NULL default '',
  `sf_disableHI` char(1) NOT NULL default '',
  `sf_minWidth` int(10) unsigned NOT NULL default '0',
  `sf_maxWidth` int(10) unsigned NOT NULL default '0',
  `sf_extraWidth` int(10) unsigned NOT NULL default '0',
  `sf_onInit` text NULL,
  `sf_onBeforeShow` text NULL,
  `sf_onShow` text NULL,
  `sf_onHide` text NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;