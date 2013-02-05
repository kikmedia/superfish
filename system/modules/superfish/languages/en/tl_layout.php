<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

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
 * Fields
 */
$GLOBALS['TL_LANG']['tl_layout']['superfish']       = array('Superfish', 'Enable superfish.');
$GLOBALS['TL_LANG']['tl_layout']['hoverIntent']     = array('Hover intent - plugin', 'Advanced hover behaviour for the mouseovers. (Require jQuery 1.5.1+)');
$GLOBALS['TL_LANG']['tl_layout']['sf_delay']        = array('Delay', 'The delay in milliseconds that the mouse can remain outside a submenu without it closing.');
$GLOBALS['TL_LANG']['tl_layout']['sf_speed']        = array('Speed', 'Speed of the animation. Equivalent to second parameter of jQuery’s .animate() method.');
$GLOBALS['TL_LANG']['tl_layout']['sf_autoArrows']   = array('Auto arrows', 'If true, arrow mark-up generated automatically = cleaner source code at expense of initialisation performance.');
$GLOBALS['TL_LANG']['tl_layout']['sf_disableHI']    = array('Disable HI', 'Set to true to disable hoverIntent detection.');
$GLOBALS['TL_LANG']['tl_layout']['sf_hoverClass']   = array('Hover class', 'The class applied to hovered list items.');
$GLOBALS['TL_LANG']['tl_layout']['sf_pathClass']    = array('Path class', 'The class you have applied to list items that lead to the current page.');
$GLOBALS['TL_LANG']['tl_layout']['sf_pathLevels']   = array('Path levels', 'The number of levels of submenus that remain open or are restored using pathClass.');
$GLOBALS['TL_LANG']['tl_layout']['sf_animation']    = array('Animation', 'An object equivalent to first parameter of jQuery’s .animate() method.');
$GLOBALS['TL_LANG']['tl_layout']['sf_onInit']       = array('On init', 'Callback function fires once Superfish is initialised – \'this\' is the containing ul.');
$GLOBALS['TL_LANG']['tl_layout']['sf_onBeforeShow'] = array('On before show', 'Callback function fires just before reveal animation begins – \'this\' is the ul about to open.');
$GLOBALS['TL_LANG']['tl_layout']['sf_onShow']       = array('On show', 'Callback function fires once reveal animation completed – \'this\' is the opened ul.');
$GLOBALS['TL_LANG']['tl_layout']['sf_onHide']       = array('On hide', 'Callback function fires after a sub-menu has closed – \'this\' is the ul that just closed.');
$GLOBALS['TL_LANG']['tl_layout']['sf_onIdle']       = array('On idle', 'Callback function fires when the \'current\' submenu is restored (if using pathClass functionality)');

$GLOBALS['TL_LANG']['tl_layout']['supersubs']       = array('Supersubs - plugin', 'Uses Supersubs to make the sub-menu widths variable.');
$GLOBALS['TL_LANG']['tl_layout']['sf_minWidth']     = array('Min width', 'Minimum width of sub-menus in em units.');
$GLOBALS['TL_LANG']['tl_layout']['sf_maxWidth']     = array('Max width', 'Maximum width of sub-menus in em units.');
$GLOBALS['TL_LANG']['tl_layout']['sf_extraWidth']   = array('Extra width', 'Extra width can ensure lines don\'t sometimes turn over due to slight rounding differences and font-family.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_layout']['superfish_legend'] = 'Superfish';
?>