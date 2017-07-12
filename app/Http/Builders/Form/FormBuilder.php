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

        $json = collect($jsonString);
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

    public function test()
    {
        return '
        
          {
          "id" : 1,
          "method" : "POST",
          "action" : "action",
          "fieldsets" : {
            "legend" : "thing",
            "inputs" : {
              "input1" : {
                "name" : "namehere",
                "label" : "labelhere",
                "classes": "classhere",
                "tip" : "tip here and stuff",
                "type" : {
                  "type" : "text",
                  "placeholder" : "placeholder here"
                }
              },
              "input2" : {
                "name" : "password",
                "label" : "Senha",
                "classes": "passwordstuff",
                "tip" : "Digite a senha",
                "type" : {
                  "type" : "password",
                  "placeholder" : "Digite a senha"
                }
              },
              "input3" : {
                "name" : "Select",
                "label" : "Exemplo de Select",
                "classes": "",
                "tip" : "",
                "type" : {
                  "type" : "select",
                  "options" : [
                    {
                      "label" : "Do the Thing",
                      "value" : "doit",
                      "selected" : false
                    },
                    {
                      "label" : "Default Thing",
                      "value" : "defthing",
                      "selected" : true
                    }
                  ]
                }
              }
            }
          }
        }
        
        ';
    }


}