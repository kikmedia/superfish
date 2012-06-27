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
        
        $options = array();
        
        $options[0] = "hoverClass: '".$objLayout->sf_hoverClass."',\n";
        $options[1] = (($objLayout->sf_pathClass != NULL) ? "pathClass: '".$objLayout->sf_pathClass."',\n" : "");
        $options[2] = (($objLayout->sf_pathClass != NULL) ? "pathLevels: ".$objLayout->sf_pathLevels.",\n" : "");
        $options[3] = "delay: ".$objLayout->sf_delay.",\n";
        $options[4] = (($objLayout->sf_animation != NULL) ? "animation: '".$objLayout->sf_animation."',\n" : "");
        $options[5] = "speed: ".(is_numeric($objLayout->sf_speed) ? $objLayout->sf_speed.",\n" : "'".$objLayout->sf_speed."',\n");
        $options[6] = (($objLayout->sf_autoArrows != NULL) ? "autoArrows: ".(($objLayout->sf_autoArrows == true) ? "true,\n" : "false,\n") : "");
        $options[7] = (($objLayout->sf_dropShadows != NULL) ? "dropShadows: ".(($objLayout->sf_dropShadows == true) ? "true,\n" : "false,\n") : "");
        $options[8] = (($objLayout->sf_disableHI != NULL) ? "disableHI: ".(($objLayout->sf_disableHI == true) ? "true,\n" : "false,\n") : "");
        $options[9] = (($objLayout->sf_onInit != NULL) ? "onInit: '".$objLayout->sf_onInit."',\n" : "");
        $options[10] = (($objLayout->sf_onBeforeShow != NULL) ? "onBeforeShow: '".$objLayout->sf_onBeforeShow."',\n" : "");
        $options[11] = (($objLayout->sf_onShow != NULL) ? "onShow: '".$objLayout->sf_onShow."',\n" : "");
        $options[12] = (($objLayout->sf_onHide != NULL) ? "onHide: '".$objLayout->sf_onHide."',\n" : "");
        
        // Reindex the array
        $options = array_values($options);
        
        if($objLayout->usejquery == 1 && $objLayout->superfish == 1) {
            $GLOBALS['TL_MOOTOOLS'][] = 
                (($objLayout->hoverIntent == true) ? '<script src="system/modules/superfish/html/external/superfish/js/hoverIntent_r6.js"></script>' : '') . "\n" .
                "<script src=\"system/modules/superfish/html/external/superfish/js/superfish.js\"></script>" . "\n" .
                (($objLayout->supersubs == true) ? '<script src="system/modules/superfish/html/external/superfish/js/supersubs.js"></script>' : '') . "\n" .
                "<script> 
                    (function($) { ".
                    (($objLayout->supersubs == false) ? "
                        $(\"ul.sf-menu\").superfish({" ."\n".
                            $options[0].
                            $options[1].
                            $options[2].
                            $options[3].
                            $options[4].
                            $options[5].
                            $options[6].
                            $options[7].
                            $options[8].
                            $options[9].
                            $options[10].
                            $options[11].
                            $options[12].
                        "});
                        " : "
                        $(\"ul.sf-menu\").supersubs({ 
                                minWidth: ".$objLayout->sf_minWidth.",
                                maxWidth: ".$objLayout->sf_maxWidth.",
                                extraWidth: ".$objLayout->sf_extraWidth."
                            }).superfish({" ."\n".
                                $options[0].
                                $options[1].
                                $options[2].
                                $options[3].
                                $options[4].
                                $options[5].
                                $options[6].
                                $options[7].
                                $options[8].
                                $options[9].
                                $options[10].
                                $options[11].
                                $options[12].
                            "});
                        ") ."
                    })(jQuery);
                </script>
            ";
        }
    }
}
?>