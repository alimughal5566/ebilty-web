<?php namespace Backend\Models;

use Mail;
use Event;
use Backend;
use October\Rain\Auth\Models\User as UserBase;

/**
 * Administrator user model
 *
 * @package october\backend
 * @author Alexey Bobkov, Samuel Georges
 */
class UserVehicles extends UserBase
{
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var string The database table used by the model.
     */
    protected $table = 'backend_users';

    /**
     * Validation rules
     */
    public $rules = [
        'email' => 'required|between:6,255|email|unique:backend_users',
        'login' => 'required|between:2,255|unique:backend_users',
        'password' => 'required:create|between:4,255|confirmed',
        'password_confirmation' => 'required_with:password|between:4,255'
    ];

    /**
     * @var array Attributes that should be cast to dates
     */
    protected $dates = [
        'activated_at',
        'last_login',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


}
