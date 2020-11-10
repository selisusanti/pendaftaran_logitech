<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersRegister extends Model
{
    protected $table = 'usersregister';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'hobi', 'address', 'birthdate', 'gender', 'membership_type', 'fee_vat',
        'cc_number', 'cc_type', 'cc_expireddate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 
    ];

}
