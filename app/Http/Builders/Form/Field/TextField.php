<?php
/**
 * Created by PhpStorm.
 * User: 02364114110
 * Date: 12/07/2017
 * Time: 15:48
 */

namespace App\Http\Builders\Form\Field;


class TextField extends Field
{
    public $placeholder;
    public $value;

    private function __construct()
    {
        $this->type = "text";
    }

    public static function build($data){

        $input = new TextField();

        $input->id = $data->id;
        $input->label = $data->label;
        $input->name = $data->name;
        $input->tip = $data->tip;
        $input->classes = $data->classes;
        $input->placeholder = $data->inputSelector->placeholder;

        return $input;
    }


}