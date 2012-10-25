<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * @package superfish
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;


/**
 * Class Superfish 
 *
 * @copyright  Lionel Maccaud 
 * @author     Lionel Maccaud 
 * @package    Controller
 */
class Superfish extends \Frontend {

    public function myGeneratePage($objPage, $objLayout, $objPageRegular) {
        
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
        
        if($objLayout->superfish == 1) {
            $GLOBALS['TL_MOOTOOLS'][] = 
                (($objLayout->hoverIntent == true) ? '<script src="system/modules/superfish/assets/js/hoverIntent_r6.js"></script>' : '') . "\n" .
                "<script src=\"system/modules/superfish/assets/js/superfish.js\"></script>" . "\n" .
                (($objLayout->supersubs == true) ? '<script src="system/modules/superfish/assets/js/supersubs.js"></script>' : '') . "\n" .
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