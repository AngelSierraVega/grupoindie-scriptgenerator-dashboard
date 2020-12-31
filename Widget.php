<?php

namespace GIndie\ScriptGenerator\Dashboard;

use GIndie\ScriptGenerator\Bootstrap3\Component\Panel;
use GIndie\ScriptGenerator\HTML5\Category\StylesSemantics;

/**
 * Description of Widget
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @version SG-DSHBRD.00.00 18-01-30 Empty class created.
 * @edit SG-DSHBRD.00.01
 * - Added code from Platform
 * @edit 18-03-21
 * - Removed btnGroup
 */
class Widget extends Panel
{

    /**
     * @since SG-DSHBRD.00.01
     * @param type $heading
     * @param type $headingBody
     * @param type $body
     * @param type $bodyFooter
     * @param type $footer
     * @edit 18-03-21
     * - Removed btnGroup
     */
    public function __construct($heading = false, $headingBody = false, $body = false, $bodyFooter = false,
                                $footer = false)
    {
        parent::__construct($heading, $headingBody, $body, $bodyFooter, $footer);
    }

    /**
     * @since SG-DSHBRD.00.01
     * @return \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
     * @edit 18-03-21
     * - Remove use of private btnGroup
     */
    public function getBtnGroup()
    {
        return $this->getHeading()->getBtnGroup();
    }

    /**
     * 
     * @param mixed $button
     * @since 18-03-21
     * - Added for Platform compatibility
     * @todo
     * - Deprecate method
     */
    public function addButtonHeading($button)
    {
        $this->getBtnGroup()->addContent($button);
    }

    /**
     * @since 18-03-21
     * 
     * @param mixed $content
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\StylesSemantics\Div
     */
    public function addContentIntoWell($content)
    {
        return $this->getBody()->addContentGetPointer(StylesSemantics::div($content, ["class" => "well well-sm"]));
    }

}
