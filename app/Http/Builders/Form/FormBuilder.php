<?php
/**
 * Created by PhpStorm.
 * User: 02364114110
 * Date: 10/07/2017
 * Time: 10:24
 */

namespace App\Http\Builders\Form;


class FormBuilder
{
    public $id;
    public $method;
    public $action;
    public $classes;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->method = $data['method'];
        $this->action = $data['action'];
        $this->classes = $data['classes'];
    }


}