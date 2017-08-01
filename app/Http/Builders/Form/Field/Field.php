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
    public $placeholder, $options, $rows;

    public static function build($data)
    {
        $field = new Field();

        $field->type = $data->type;
        if(isset($data->name))$field->name = $data->name;
        if(isset($data->id)) $field->id = $data->id;
        if(isset($data->label))$field->label = $data->label;
        if(isset($data->classes)) $field->classes = $data->classes;
        if(isset($data->tip)) $field->tip = $data->tip;

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
        $field->options = $data->options;
        return $field;
    }

    public static function radio($data)
    {
        $field = self::build($data);
        $field->options = $data->options;
        return $field;
    }

    public static function textarea($data)
    {
        $field = self::build($data);
        if(isset($data->rows)) $field->rows = $data->rows;
        return $field;
    }

    public static function button($data)
    {
        $field = self::build($data);
        return $field;
    }

}