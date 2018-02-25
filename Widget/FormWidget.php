<?php

/**
 * SG4-Dashboard - FormWidget
 */

namespace GIndie\ScriptGenerator\Dashboard\Widget;

use GIndie\ScriptGenerator\Dashboard\FormInput;

/**
 * Description of FormWidget
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @version SG-DSHBRD.00.00 18-02-03 Empty class created.
 * @edit SG-DSHBRD.00.01
 * - Extend from \GIndie\ScriptGenerator\Dashboard\Widget
 * - Created __construct(), getForm(), $form
 * @edit SG-DSHBRD.00.02 18-02-18
 * - Updated __construct()
 */
class FormWidget extends \GIndie\ScriptGenerator\Dashboard\Widget
{

    /**
     * 
     * @param \GIndie\ScriptGenerator\Dashboard\Form $form
     * @param string|boolean $submit
     * @since SG-DSHBRD.00.01
     * @edit SG-DSHBRD.00.02
     * - Added param $submit
     */
    public function __construct(FormInput\Form $form, $submit = false)
    {
        parent::__construct(true, true, true, false, true);
        $this->form = $this->getBody()->addContentGetPointer($form);
        $this->setContext(static::$COLOR_PRIMARY);
        switch (true)
        {
            case \is_string($submit):
                $BtnContinuar = FormInput::inputSubmit($submit);
                break;
            case $submit:
                $BtnContinuar = FormInput::inputSubmit("Submit");
                break;
        }
        if ($submit !== false) {
            $BtnContinuar->setForm($form->getId());
            $BtnContinuar->addClass("btn-success");
            $this->getFooter()->addContent($BtnContinuar);
        }
    }

    /**
     * @since SG-DSHBRD.00.01
     * @return \GIndie\ScriptGenerator\Dashboard\Form
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * @since SG-DSHBRD.00.01
     * @var \GIndie\ScriptGenerator\Dashboard\Form 
     */
    private $form;

}
