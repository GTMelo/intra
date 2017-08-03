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
    public $placeholder, $value;

    private function __construct()
    {
        $this->type = "text";
    }

    public static function build($data)
    {

        $input = new TextField();

        parent::preBuild($input, $data);

        if (isset($data->placeholder)) $input->placeholder = $data->placeholder;
        if (isset($data->value)) $input->value = $data->value;

        return $input;
    }
}