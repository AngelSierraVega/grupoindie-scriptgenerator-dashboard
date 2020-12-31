<?php

namespace GIndie\ScriptGenerator\Dashboard\Tables;

/**
 * GI-SG4-Dashboard-DVLP - TableSimple
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @since 18-05-11
 * @version UNDEFINED
 */
class TableSimple extends Table
{

    /**
     * @since 18-06-17
     */
    public function __construct()
    {
        parent::__construct();
        $this->addClass("table-striped");
    }

}
