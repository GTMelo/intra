<?php
/**
 * Created by PhpStorm.
 * User: Gustavo
 * Date: 24/07/2017
 * Time: 22:18
 */

namespace App\Http\Builders\Form\Field;

class DateField extends Field
{
    public function __construct()
    {
        $this->type = 'datetime';
    }

    public static function build($data)
    {

        $input = new DateField();

        parent::preBuild($input, $data);

        return $input;
    }


}