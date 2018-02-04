<?php

/**
 * SG4-Dashboard - FormWidget
 */

namespace GIndie\ScriptGenerator\Dashboard\Widget;

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
 */
class FormWidget extends \GIndie\ScriptGenerator\Dashboard\Widget
{

    /**
     * @since SG-DSHBRD.00.01
     * @param \GIndie\ScriptGenerator\Dashboard\Form $form
     */
    public function __construct(\GIndie\ScriptGenerator\Dashboard\FormInput\Form $form)
    {
        parent::__construct(true, false, true, false, true);
        $this->form = $this->getBody()->addContentGetPointer($form);
        $this->setContext(static::$COLOR_PRIMARY);
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
