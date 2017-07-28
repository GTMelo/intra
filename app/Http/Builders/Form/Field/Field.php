<?php
/**
 * Created by PhpStorm.
 * User: 02364114110
 * Date: 12/07/2017
 * Time: 15:49
 */

namespace App\Http\Builders\Form\Field;


class Field
{
    public $type, $id, $label, $name, $classes, $tip, $confirm;
    public $placeholder, $options;

    public static function build($data)
    {
        $field = new Field();

        $field->type = $data->type;
        $field->id = $data->id;
        $field->label = $data->label;
        $field->name = $data->name;
        $field->classes = $data->classes;
        $field->tip = $data->tip;

        return $field;
    }

    public static function text($data)
    {
        $field = self::build($data);
        if (isset($data->placeholder)) $field->placeholder = $data->placeholder;
        if (isset($data->confirm)) $field->confirm = $data->confirm;

        return $field;
    }

    public static function password($data)
    {
        $field = self::text($data);
        return $field;
    }

    public static function date($data)
    {
        $field = self::build($data);
        return $field;
    }

    public static function select($data)
    {
        $field = self::build($data);
        $field->options = $data->options;
        return $field;
    }

    public static function checkbox($data)
    {
        $field = self::build($data);
        return $field;
    }

    public static function radio($data)
    {
        $field = self::build($data);
        return $field;
    }

    public static function textarea($data)
    {
        $field = self::build($data);
        return $field;
    }

    public static function button($data)
    {
        $field = self::build($data);
        return $field;
    }

}