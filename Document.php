<?php

/**
 * SG-Dashboard - Document
 */

namespace GIndie\ScriptGenerator\Dashboard;

use \GIndie\ScriptGenerator\Bootstrap3;

/**
 * Description of Document
 *
 * @author Angel Sierra Vega <angel.sierra@grupoindie.com>
 * @copyright (CC) 2020 Angel Sierra Vega. Grupo INDIE.
 *
 * @package ScriptGenerator
 * @subpackage Dashboard
 *
 * @version SG-DSHBRD.00.00 18-01-30 Empty class created.
 * @edit SG-DSHBRD.00.01
 * - Created instanceWithWebSources()
 */
class Document extends Bootstrap3\Document
{

    /**
     * @since SG-DSHBRD.00.01
     * @param type $title
     * @param type $lang
     * @return \GIndie\ScriptGenerator\Dashboard\Document
     */
    public static function instanceWithWebSources($title, $lang = "en")
    {
        return new static($title, $lang, null, null, null, null);
    }

}
