<?php
/**
 * Created by PhpStorm.
 * User: 02364114110
 * Date: 10/07/2017
 * Time: 10:24
 */

namespace App\Http\Builders\Form;


use App\Models\Form;
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

        if(isset($json['id']))$form->id = $json['id'];
        if(isset($json['method']))$form->method = $json['method'];
        if(isset($json['action']))$form->action = $json['action'];
        if(isset($json['classes']))$form->classes = $json['classes'];

        foreach($json->get('fieldsets') as $fieldset){
            $form->fieldsets->push(FieldsetBuilder::build($fieldset));
        }

        return $form;
    }

    public function show()
    {
        return \View::make('component.form.form', ['form' => $this]);
    }

}