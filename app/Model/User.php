<?php


namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
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
}