<?php
/**
 * Created by PhpStorm.
 * User: 02364114110
 * Date: 10/07/2017
 * Time: 11:59
 */

namespace App\Http\Builders\Form;


use App\Http\Builders\Form\Field\TextField;

class FieldBuilder
{
    public static function build($data){
        switch($data['type']){
            case 'text':
                TextField::build($data);
            default:
                return false; // TODO Exception aqui

        }
    }

}