<?php

/**
 * SG4-Dashboard - FormInput
 */

namespace GIndie\ScriptGenerator\Dashboard;

/**
 * Description of FormInput
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @version SG-DSHBRD.00.00 18-02-03 Empty class created.
 * @edit SG-DSHBRD.00.01
 * - Extend from \GIndie\ScriptGenerator\Bootstrap3\FormInput
 * - Created form(), formGetOnSelf(), inputText(), label(), inputHidden(), inputSubmit
 * @edit SG-DSHBRD.00.02 18-02-04
 * - Created formGetOnCustom(), formPostOnCustom()
 * @edit SG-DSHBRD.00.03 18-02-14
 * - Created formPostOnSelf()
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
     * @since SG-DSHBRD.00.02
     * 
     * @param string $formId
     * @param string $customTarget
     * 
     * @return \GIndie\ScriptGenerator\Dashboard\FormInput\Form
     */
    public static function formGetOnCustom($formId, $customTarget)
    {
        $form = static::form();
        $form->setMethod("get");
        $form->setTarget($customTarget);
        $form->setId($formId);
        return $form;
    }

    /**
     * @since SG-DSHBRD.00.01
     * 
     * @param string $formId
     * 
     * @return \GIndie\ScriptGenerator\Dashboard\FormInput\Form
     */
    public static function formGetOnSelf($formId)
    {
        $form = static::form();
        $form->setMethod("get");
        $form->setTarget("_self");
        $form->setId($formId);
        return $form;
    }

    /**
     * @since SG-DSHBRD.00.03
     * 
     * @param string $formId
     * 
     * @return \GIndie\ScriptGenerator\Dashboard\FormInput\Form
     */
    public static function formPostOnSelf($formId)
    {
        $form = static::form();
        $form->setMethod("post");
        $form->setTarget("_self");
        $form->setId($formId);
        return $form;
    }

    /**
     * @since SG-DSHBRD.00.02
     * 
     * @param string $formId
     * @param string $customTarget
     * 
     * @return \GIndie\ScriptGenerator\Dashboard\FormInput\Form
     */
    public static function formPostOnCustom($formId, $customTarget)
    {
        $form = static::form();
        $form->setMethod("post");
        $form->setTarget($customTarget);
        $form->setId($formId);
        return $form;
    }

    /**
     * @since SG-DSHBRD.00.01
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Hidden
     * @ut_params inputHidden "name" "value"
     * @ut_str inputHidden "<input type="hidden" name="name" value="value" />"
     */
    public static function inputHidden($name = null, $value = null)
    {
        return parent::inputHidden()->setName($name)->setValue($value);
    }

    /**
     * @since SG-DSHBRD.00.01
     * 
     * @param type $value
     * @return \GIndie\ScriptGenerator\HTML5\Category\FormInput\Input\Submit
     */
    public static function inputSubmit($value = null)
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
    public static function inputText($label = null, $name = null, $value = null)
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
    public static function label($value = null, $forInput = null)
    {
        $label = parent::label($value);
        $label->setAttribute("for", $forInput);
        return $label;
    }

}
