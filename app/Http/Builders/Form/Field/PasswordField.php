<?php
/**
 * Created by PhpStorm.
 * User: Gustavo
 * Date: 24/07/2017
 * Time: 17:56
 */

namespace App\Http\Builders\Form\Field;


class PasswordField extends Field
{
    public $placeholder, $value;

    private function __construct()
    {
        $this->type = "password";
    }

    public static function build($data)
    {

        $input = new PasswordField();

        parent::preBuild($input, $data);

        if (isset($data->placeholder)) $input->placeholder = $data->placeholder;
        if (isset($data->value)) $input->value = $data->value;

        return $input;
    }
}