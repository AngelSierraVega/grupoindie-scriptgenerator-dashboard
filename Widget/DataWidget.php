<?php

/**
 * DVLP-SG4-Dashboard - DataWidget
 */

namespace GIndie\ScriptGenerator\Dashboard\Widget;

/**
 * Description of DataWidget
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @version SG-DSHBRD.00.00 18-02-14 Empty class created.
 * @edit SG-DSHBRD.00.01
 * - Extends from \GIndie\ScriptGenerator\Dashboard\Widget
 */
class DataWidget extends \GIndie\ScriptGenerator\Dashboard\Widget
{

    /**
     * @since SG-DSHBRD.00.01
     * @param \GIndie\ScriptGenerator\Dashboard\Form $form
     */
    public function __construct()
    {
        parent::__construct(true, false, true, false, true);
        $this->setContext(static::$COLOR_PRIMARY);
    }

}
