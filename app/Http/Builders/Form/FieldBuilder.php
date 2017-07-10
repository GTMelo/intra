<?php
/**
 * Created by PhpStorm.
 * User: 02364114110
 * Date: 10/07/2017
 * Time: 11:59
 */

namespace App\Http\Builders\Form;


class FieldBuilder
{
    public static function text($label, $id, $divClasses, $classes, $placeholder, $tooltip)
    {
        return "
            <div class=''>
                <label for=\"input__text\">Text Input</label>
                <input id=\"input__text\" type=\"text\" placeholder=\"Text Input\">
                <small>Some example of small explanation</small>
            </div>
        ";
    }

}