<?php

/**
 * SG-Dashboard - Widget
 */

namespace GIndie\ScriptGenerator\Dashboard;

use GIndie\ScriptGenerator\Bootstrap3\Component\Panel;
use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;

/**
 * Description of Widget
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @version SG-DSHBRD.00.00 18-01-30 Empty class created.
 * @edit SG-DSHBRD.00.01
 * - Added code from Platform
 */
class Widget extends Panel
{

    /**
     * @since SG-DSHBRD.00.01
     * @var type 
     */
    private $btnGroup;

    /**
     * @since SG-DSHBRD.00.01
     * @param type $heading
     * @param type $headingBody
     * @param type $body
     * @param type $bodyFooter
     * @param type $footer
     */
    public function __construct($heading = false, $headingBody = false, $body = false, $bodyFooter = false,
                                $footer = false)
    {
        parent::__construct($heading, $headingBody, $body, $bodyFooter, $footer);
        $this->btnGroup = $this->getHeading()->addContentGetPointer(StylesSemantics::Div("", ["class" => "btn-group pull-right"]));
    }

    /**
     * @since SG-DSHBRD.00.01
     * @return \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
     */
    public function getBtnGroup()
    {
        return $this->btnGroup;
    }

}
