<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  Lionel Maccaud 
 * @author     Lionel Maccaud 
 * @package    superfish 
 * @license    MIT 
 * @filesource
 */

/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_layout']['superfish'] = array('Superfish', 'Enable superfish.');
$GLOBALS['TL_LANG']['tl_layout']['hoverIntent'] = array('Hover intent - plugin', 'Advanced hover behaviour for the mouseovers. (Require jQuery 1.5.1+)');
$GLOBALS['TL_LANG']['tl_layout']['sf_delay'] = array('Delay', 'The delay in milliseconds that the mouse can remain outside a submenu without it closing.');
$GLOBALS['TL_LANG']['tl_layout']['sf_speed'] = array('Speed', 'Speed of the animation. Equivalent to second parameter of jQuery’s .animate() method.');
$GLOBALS['TL_LANG']['tl_layout']['sf_autoArrows'] = array('Auto arrows', 'If true, arrow mark-up generated automatically = cleaner source code at expense of initialisation performance.');
$GLOBALS['TL_LANG']['tl_layout']['sf_dropShadows'] = array('Drop shadows', 'Completely disable drop shadows by setting this to false.');
$GLOBALS['TL_LANG']['tl_layout']['sf_disableHI'] = array('Disable HI', 'Set to true to disable hoverIntent detection.');
$GLOBALS['TL_LANG']['tl_layout']['sf_hoverClass'] = array('Hover class', 'The class applied to hovered list items.');
$GLOBALS['TL_LANG']['tl_layout']['sf_pathClass'] = array('Path class', 'The class you have applied to list items that lead to the current page.');
$GLOBALS['TL_LANG']['tl_layout']['sf_pathLevels'] = array('Path levels', 'The number of levels of submenus that remain open or are restored using pathClass.');
$GLOBALS['TL_LANG']['tl_layout']['sf_animation'] = array('Animation', 'An object equivalent to first parameter of jQuery’s .animate() method.');
$GLOBALS['TL_LANG']['tl_layout']['sf_onInit'] = array('On init', 'Callback function fires once Superfish is initialised – \'this\' is the containing ul.');
$GLOBALS['TL_LANG']['tl_layout']['sf_onBeforeShow'] = array('On before show', 'Callback function fires just before reveal animation begins – \'this\' is the ul about to open.');
$GLOBALS['TL_LANG']['tl_layout']['sf_onShow'] = array('On show', 'Callback function fires once reveal animation completed – \'this\' is the opened ul.');
$GLOBALS['TL_LANG']['tl_layout']['sf_onHide'] = array('On hide', 'Callback function fires after a sub-menu has closed – \'this\' is the ul that just closed.');

$GLOBALS['TL_LANG']['tl_layout']['supersubs'] = array('Supersubs - plugin', 'Uses Supersubs to make the sub-menu widths variable.');
$GLOBALS['TL_LANG']['tl_layout']['sf_minWidth'] = array('Min width', 'Minimum width of sub-menus in em units.');
$GLOBALS['TL_LANG']['tl_layout']['sf_maxWidth'] = array('Max width', 'Maximum width of sub-menus in em units.');
$GLOBALS['TL_LANG']['tl_layout']['sf_extraWidth'] = array('Extra width', 'Extra width can ensure lines don\'t sometimes turn over due to slight rounding differences and font-family.');

/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_layout']['superfish_legend'] = 'Superfish';

?>