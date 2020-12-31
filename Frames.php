<?php

/**
 * DVLP-SG4-Dashboard - Frames
 */

namespace GIndie\ScriptGenerator\Dashboard;

/**
 * Description of Frames
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @version SG-DSHBRD.00.00 18-02-04 Empty class created.
 * @edit SG-DSHBRD.00.01
 * - Extend from \GIndie\ScriptGenerator\HTML5\Category\Frames
 * - Created iframe()
 */
class Frames extends \GIndie\ScriptGenerator\HTML5\Category\Frames
{

    /**
     * @since SG-HTML5.00.01
     * @param type $name
     * @param type $src
     * @return \GIndie\ScriptGenerator\HTML5\Category\Frames\IFrame
     */
    public static function iframe($name, $src)
    {
        return parent::iframe()->setName($name)->setSrc($src)->setId($name)
                        ->setAttribute("style", "display: block;overflow:hidden;height:100%;width:100%;")
                        ->setAttribute("frameBorder", "0")
                        ->setAttribute("scrolling", "no")
                        ->setAttribute("height", "100%")
                        ->setAttribute("width", "100%");
                        //->setAttribute("seamless", "seamless");
    }

}
