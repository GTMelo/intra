<?php
/**
 * Created by PhpStorm.
 * User: 02364114110
 * Date: 10/07/2017
 * Time: 10:24
 */

namespace App\Http\Builders\Form;


use Illuminate\Support\Collection;

class FormBuilder
{
    public $id;
    public $method;
    public $action;
    public $classes;
    public $fieldsets;

    public static function build($jsonString){

        $json = json_decode($jsonString);
        $json = collect($json);

        $form = new FormBuilder();
        $form->fieldsets = new Collection();

        $form->id = $json['id'];
        $form->method = $json['method'];
        $form->action = $json['action'];
        $form->classes = $json['classes'];

        foreach($json->get('fieldsets') as $fieldset){
            $form->fieldsets->push(FieldsetBuilder::build($fieldset));
        }

        return $form;
    }

}