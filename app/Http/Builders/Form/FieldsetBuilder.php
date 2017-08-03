<?php
/**
 * Created by PhpStorm.
 * User: 02364114110
 * Date: 10/07/2017
 * Time: 11:00
 */

namespace App\Http\Builders\Form;


use Illuminate\Support\Collection;

class FieldsetBuilder
{

    public $id;
    public $classes;
    public $legend;
    public $fields;

    public static function build($data)
    {
        $fieldset = new FieldsetBuilder();
        $fieldset->fields = new Collection();

        if(isset($data->id))$fieldset->id = $data->id;
        if(isset($data->classes))$fieldset->classes = $data->classes;
        if(isset($data->legend))$fieldset->legend = $data->legend;

        foreach ($data->fields as $input) {
            $fieldset->fields->push(FieldBuilder::build($input));
        }

        return $fieldset;
    }


}