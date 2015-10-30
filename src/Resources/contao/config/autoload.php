<?php

/**
 * Superfish
 * Superfish menu jQuery plugin for Contao
 *
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   superfish
 * @license   MIT (http://lionel-m.mit-license.org/)
 */

/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
    'LionelM',
));

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
    // Classes
    'LionelM\SuperfishBundle\Superfish' => 'vendor/lionel/superfish/src/Resources/contao/classes/Superfish.php',
));

/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
    'nav_superfish_horizontal' => 'vendor/lionel/superfish/src/Resources/contao/templates',
    'nav_superfish_navbar'     => 'vendor/lionel/superfish/src/Resources/contao/templates',
    'nav_superfish_vertical'   => 'vendor/lionel/superfish/src/Resources/contao/templates',
));
