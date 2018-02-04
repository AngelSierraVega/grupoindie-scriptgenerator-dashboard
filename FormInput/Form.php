<?php

/**
 * SG-Dashboard - Form
 */

namespace GIndie\ScriptGenerator\Dashboard\FormInput;

use GIndie\ScriptGenerator\HTML5;

/**
 * Description of Form
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * 
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @version SG-DSHBRD.00.00 18-01-30 Empty class created.
 * @edit SG-DSHBRD.00.01 18-02-03
 * - Extend from GIndie\ScriptGenerator\HTML5\Category\FormInput\Form
 * - Created $formElements, addInput()
 */
class Form extends HTML5\Category\FormInput\Form
{

    /**
     * @since SG-DSHBRD.00.01
     * @var type 
     */
    private $formElements = [];

    /**
     * @since SG-DSHBRD.00.01
     * @param type $input
     * @return $this
     */
    public function addInput($input)
    {
        $this->formElements[] = $this->addContentGetPointer($input);
        return $this;
    }

}
