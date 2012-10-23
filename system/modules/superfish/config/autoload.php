<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Superfish
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'Contao\Superfish' => 'system/modules/superfish/classes/Superfish.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'nav_superfish_horizontal' => 'system/modules/superfish/templates',
	'nav_superfish_navbar'     => 'system/modules/superfish/templates',
	'nav_superfish_vertical'   => 'system/modules/superfish/templates',
));
