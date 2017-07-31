<?php
/**
 * Created by PhpStorm.
 * User: 02364114110
 * Date: 10/07/2017
 * Time: 11:59
 */

namespace App\Http\Builders\Form;

use App\Http\Builders\Form\Field\Field;

class FieldBuilder
{
    public static function build($data){
        switch ($data->type) {
            case 'text':
                return Field::text($data);
            case 'password':
                return Field::password($data);
            case 'date':
                return Field::date($data);
            case 'select':
                return Field::select($data);
            case 'checkbox':
                return Field::checkbox($data);
            case 'radio':
                return Field::radio($data);
            case 'textarea':
                return Field::textArea($data);
            case 'button':
                return Field::button($data);
            default:
                return false; // TODO Exception aqui
        }
    }

}