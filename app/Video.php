<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
	use \Venturecraft\Revisionable\RevisionableTrait;    

    protected $guarded = [];

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 500;    
    protected $revisionCreationsEnabled = true;

    protected $keepRevisionOf = array(
        'nome', 'link', 'descricao'
    );  

    public static function boot()
    {
        parent::boot();
    }

    public function userName($id){
        $user = User::find($id);
        return $user['name'];
    }
    protected $table = 'video';
    protected $fillable = ['nome', 'link', 'status', 'descricao', 'local'];

}
