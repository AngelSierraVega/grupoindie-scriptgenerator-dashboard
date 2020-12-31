<?php

namespace GIndie\ScriptGenerator\Dashboard\Tables;

/**
 * GI-SG4-Dashboard-DVLP - Selectable
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package GIndie\ScriptGenerator\Framework\View\Tables
 *
 * @version 0.500
 * 
 * @since 18-05-11
 * 
 * @edit 18-05-19
 * - Class extends Table
 */
class Selectable extends Table
{

    /**
     * @since 18-05-19
     */
    public function __construct()
    {
        parent::__construct();
        $this->addClass("table-striped table-hover");
    }

    /**
     * 
     * @param type $rowId
     * @param type $content
     * 
     * @since 18-05-19
     */
    public function addSelectableRow($rowId, $content)
    {
        \ob_start();
        ?>
        <input type = "radio"
               name = "@selectedId"
               id = "<?= $rowId; ?>"
               value = "<?= $rowId; ?>" />
        <label for = "<?= $rowId; ?>"> <?= (\count($this->rows) + 1); ?></label>
        <?php
        $rowId = \ob_get_contents();
        \ob_end_clean();
        \array_unshift($content, $rowId);
        return parent::addRow($content);
    }

}
