<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
	use \Venturecraft\Revisionable\RevisionableTrait;    

    protected $table = 'parametro';
    protected $fillable = ['nome', 'posicao', 'status', 'descricao'];
    
    protected $guarded = [];

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 500;    
    protected $revisionCreationsEnabled = true;

    protected $keepRevisionOf = array(
        'nome', 'posicao', 'descricao'
    );  

    public static function boot()
    {
        parent::boot();
    }

    public function userName($id){
        $user = User::find($id);
        return $user['name'];
    }
    

    public function statusName(){
    	if($this->status){
    		return "Publicado";
    	} else {
    		return "Despubliicado";
    	}
    }
}
