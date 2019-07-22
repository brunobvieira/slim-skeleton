<?php


namespace App\Model;


use App\Core\Traits\ModelValidation;
use App\Core\Validation\Validator;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use ModelValidation;

    /**
     * Fillable atritutes
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'born_at',
        'description'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password'];

    /**
     * { @inheritDoc }
     *
     * @param boolean $isEdition
     * @return array
     */
    public static function getRules($isEdition = false)
    {
        $rules = [
            'name' => Validator::stringType()->notEmpty()->length(null, 100),
            'email' => Validator::email()->notEmpty()->length(null, 100),
            'born_at' => Validator::optional(Validator::date()),
            'description' => Validator::optional(Validator::stringType()->length(null, 200)),
        ];

        if ($isEdition) {
            return $rules;
        }

        $rules['password'] = Validator::stringType()->notEmpty()->length(8, 20);

        return $rules;
    }
}