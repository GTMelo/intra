<?php
/**
 * Created by PhpStorm.
 * User: 02364114110
 * Date: 10/07/2017
 * Time: 11:00
 */

namespace App\Http\Builders\Form;


class FieldsetBuilder
{

    public $id;
    public $classes;
    public $fields;
    public $legend;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->classes = $data['classes'];
        $this->legend = $data['legend'];
        $this->fields = $data['fields'];
    }


}