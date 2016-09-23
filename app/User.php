<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    use \Venturecraft\Revisionable\RevisionableTrait;    

    protected $guarded = [];

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 500;    
    protected $revisionCreationsEnabled = true;

    protected $keepRevisionOf = array(
        'name', 'email'
    );  

    public static function boot()
    {
        parent::boot();
    }

    public function userName($id){
        $user = User::find($id);
        return $user['name'];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
