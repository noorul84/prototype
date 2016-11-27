<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


    protected $table = 'users';

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function user_update($data)
    {
        
    }


    public function user_delete($id)
    {
        $this->delete();
        $s =  \App\Survey::where('user_id', $id)->delete();
        $msg = array('User successfully deleted.', 'success', 'user.index');    
        return $msg;            
    }

}
