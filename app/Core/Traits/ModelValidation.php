<?php


namespace App\Core\Traits;


use App\Core\Validation\Validator;
use Respect\Validation\Exceptions\NestedValidationException;

trait ModelValidation
{
    /**
     * Validation messages
     *
     * @var array
     */
    protected $validationMessages = [];

    /**
     * Return the array of rules
     * @see https://respect-validation.readthedocs.io
     *
     * @param boolean $isEdition
     * @return array
     */
    protected static function getRules($isEdition = false)
    {
        return null;
    }

    /**
     * Validate the data
     *
     * @param array $data
     * @param boolean $isEdition
     * @return array
     */
    public static function validate(array $data, $isEdition = false)
    {
        $resultado = [
            'isValid' => true,
            'messages' => []
        ];

        $validator = Validator::createFromArray(self::getRules($isEdition));

        try {
            $validator->assert($data);
        } catch (NestedValidationException $e) {
            $arMessages = $e->findMessages(array_keys($data));
            $resultado = [
                'isValid' => false,
                'messages' => array_filter($arMessages, 'strlen')
            ];
        }

        return $resultado;
    }
}