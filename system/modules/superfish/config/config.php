<?php

/**
 * Superfish
 * Superfish menu jQuery plugin for Contao
 *
 * @author    Lionel Maccaud
 * @copyright Lionel Maccaud
 * @package   superfish
 * @license   MIT
 */

/**
 * -------------------------------------------------------------------------
 * HOOKS
 * -------------------------------------------------------------------------
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('Superfish', 'myGeneratePage');
?>