<?php 

namespace App\Utils;

class FormSelect {

    public function __construct(public $label, public $value)
    {        
    }

    public static function create($label, $value): FormSelect {
        return new FormSelect($label, $value);
    }
}