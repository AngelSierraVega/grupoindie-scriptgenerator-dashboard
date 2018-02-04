<?php

/**
 * SG4-Dashboard - FormInput
 */

namespace GIndie\ScriptGenerator\Dashboard;

/**
 * Description of FormInput
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @version SG-DSHBRD.00.00 18-02-03 Empty class created.
 * @edit SG-DSHBRD.00.01
 * - Extend from \GIndie\ScriptGenerator\Bootstrap3\FormInput
 * - Created form(), formGetOnSelf(), inputText(), label(), inputHidden(), inputSubmit
 */
class FormInput extends \GIndie\ScriptGenerator\Bootstrap3\FormInput
{

    /**
     * @since SG-DSHBRD.00.01
     * 
     * @return \GIndie\ScriptGenerator\Dashboard\FormInput\Form
     */
    public static function form()
    {
        return new \GIndie\ScriptGenerator\Dashboard\FormInput\Form();
    }

    /**
     * @since SG-DSHBRD.00.01
     * 
     * @param string $formId
     * @param string $action
     * 
     * @return \GIndie\ScriptGenerator\Dashboard\FormInput\Form
     */
    public static function formGetOnSelf($formId, $action)
    {
        $form = static::form();
        $form->setMethod("get");
        $form->setTarget("_self");
        $form->setId($formId);
        $form->addInput(static::inputHidden("DSHBRD-ACTION", $action));
        return $form;
    }

    /**
     * @since SG-DSHBRD.00.01
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Hidden
     * @ut_params inputHidden "name" "value"
     * @ut_str inputHidden "<input type="hidden" name="name" value="value" />"
     */
    public static function inputHidden($name, $value)
    {
        return parent::inputHidden()->setName($name)->setValue($value);
    }

    /**
     * @since SG-DSHBRD.00.01
     * 
     * @param type $value
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Submit
     */
    public static function inputSubmit($value)
    {
        return parent::inputSubmit()->setValue($value);
    }

    /**
     * @since SG-DSHBRD.00.01
     * 
     * @param type $label
     * @param type $name
     * @param type $value
     * 
     * @return \GIndie\ScriptGenerator\Bootstrap3\FormInput\FormGroup
     */
    public static function inputText($label, $name, $value = null)
    {
        $input = parent::inputText();
        $input->setName($name);
        $input->setId($name);
        $value == null ?: $input->setValue($value);
        return new \GIndie\ScriptGenerator\Bootstrap3\FormInput\FormGroup(static::label($label, $name), $input);
    }

    /**
     * @since SG-DSHBRD.00.01
     * 
     * @param type $value
     * @param type $forInput
     * 
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Label
     */
    public static function label($value, $forInput)
    {
        $label = parent::label($value);
        $label->setAttribute("for", $forInput);
        return $label;
    }

}
