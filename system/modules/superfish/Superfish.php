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
 * Class Superfish 
 *
 * @copyright  Lionel Maccaud 
 * @author     Lionel Maccaud 
 * @package    Controller
 */
class Superfish extends Frontend {

    public function myGeneratePage(Database_Result $objPage, Database_Result $objLayout, PageRegular $objPageRegular) {
        
        if($objLayout->usejquery == 1 && $objLayout->superfish == 1) {
            $GLOBALS['TL_MOOTOOLS'][] = 
                (($objLayout->hoverIntent == true) ? '<script src="system/modules/superfish/html/external/superfish/js/hoverIntent_r6.js"></script>' : '') . "\n" .
                "<script src=\"system/modules/superfish/html/external/superfish/js/superfish.js\"></script>" . "\n" .
                (($objLayout->supersubs == true) ? '<script src="system/modules/superfish/html/external/superfish/js/supersubs.js"></script>' : '') . "\n" .
                "<script> 
                    (function($) { ".
                    (($objLayout->supersubs == false) ? "
                        $(\"ul.sf-menu\").superfish({
                            hoverClass: '".$objLayout->sf_hoverClass."',
                            ".(($objLayout->sf_pathClass != NULL) ? "pathClass: '".$objLayout->sf_pathClass."'," : "")."
                            delay: ".$objLayout->sf_delay.",
                            speed: ".(is_numeric($objLayout->sf_speed) ? $objLayout->sf_speed : "'".$objLayout->sf_speed."'").",
                            autoArrows: ".(($objLayout->sf_autoArrows == true) ? "true" : "false").",
                            dropShadows: ".(($objLayout->sf_dropShadows == true) ? "true" : "false")."
                        });
                        " : "
                        $(\"ul.sf-menu\").supersubs({ 
                                minWidth: ".$objLayout->sf_minWidth.",
                                maxWidth: ".$objLayout->sf_maxWidth.",
                                extraWidth: ".$objLayout->sf_extraWidth."
                            }).superfish({
                                hoverClass: '".$objLayout->sf_hoverClass."',
                                ".(($objLayout->sf_pathClass != NULL) ? "pathClass: '".$objLayout->sf_pathClass."'," : "")."
                                delay: ".$objLayout->sf_delay.",
                                speed: ".(is_numeric($objLayout->sf_speed) ? $objLayout->sf_speed : "'".$objLayout->sf_speed."'").",
                                autoArrows: ".(($objLayout->sf_autoArrows == true) ? "true" : "false").",
                                dropShadows: ".(($objLayout->sf_dropShadows == true) ? "true" : "false")."
                            });
                        ") ."
                    })(jQuery);
                </script>
            ";
        }
    }
}

?>