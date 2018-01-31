<?php

/**
 * SG-Dashboard - HandlerProject
 */

namespace GIndie\ScriptGenerator\Dashboard\Plugins\UnitTest;

/**
 * Description of HandlerProject
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (c) 2018 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @version SG-DSHBRD.00.00 18-01-30 Empty class created.
 * @edit SG-DSHBRD.00.01
 * - Added code from DML
 */
class HandlerProject extends \GIndie\UnitTest\HandlerProject
{

    /**
     * @since SG-DSHBRD.00.01
     * @return array
     * @todo
     */
    public static function projectClasses()
    {
        return [
//            Node::class,
//            Node\NodeAbs::class,
//            Node\Tag::class,
//            Node\Tag\TagAbs::class,
//            Node\Tag\Attributes::class
        ];
    }

    /**
     * @since SG-DSHBRD.00.01 
     * @return string
     */
    public static function projectName()
    {
        return "Dashboard\\";
    }

    /**
     * @since SG-DSHBRD.00.01
     * @return string
     */
    public static function projectNamespace()
    {
        return "ScriptGenerator\\";
    }

    /**
     * @since SG-DSHBRD.00.01
     * @return string
     */
    public static function projectVendor()
    {
        return "\\GIndie\\";
    }

}
