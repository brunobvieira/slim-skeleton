<?php


namespace App\Core\Validation;

use \Respect\Validation\Validator as RespectValidation;

class Validator extends RespectValidation
{
    /**
     * Create a validator from array
     *
     * @param $rules
     * @return RespectValidation
     */
    public static function createFromArray($rules)
    {
        $validator = self::create();

        foreach ($rules as $field => $rule) {
            $validator->key($field, $rule);
        }

        return $validator;
    }
}