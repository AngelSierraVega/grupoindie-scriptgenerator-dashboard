<?php

namespace GIndie\ScriptGenerator\Dashboard;

/**
 * DVLP-SG4-Dashboard - ProjectHandler
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @version SG-DSHBRD.00.00 18-02-24 Empty class created.
 * @edit SG-DSHBRD.00.01
 * - Added code from Boostrap3
 */
class ProjectHandler extends \GIndie\ProjectHandler\AbstractProjectHandler
{

    /**
     * @return string
     * @since SG-DSHBRD.00.01
     */
    public static function pathToSourceCode()
    {
        return \pathinfo(__FILE__, \PATHINFO_DIRNAME) . \DIRECTORY_SEPARATOR;
    }

    /**
     * @return string
     * @since SG-DSHBRD.00.01
     */
    public static function projectName()
    {
        return "Dashboard";
    }

    /**
     * @return string
     * @since SG-DSHBRD.00.01
     */
    public static function projectNamespace()
    {
        return "ScriptGenerator";
    }

    /**
     * @return string
     * @since SG-DSHBRD.00.01
     */
    public static function projectVendor()
    {
        return "GIndie";
    }

}
