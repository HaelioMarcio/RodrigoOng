<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Produto extends Model
{

    use \Venturecraft\Revisionable\RevisionableTrait;    

    protected $guarded = [];

    protected $revisionEnabled = true;
    protected $revisionCleanup = true; //Remove old revisions (works only when used with $historyLimit)
    protected $historyLimit = 500;    
    protected $revisionCreationsEnabled = true;

    protected $keepRevisionOf = array(
        'nome', 'descricao'
    );  

    public static function boot()
    {
        parent::boot();
    }

    protected $table = 'produto';
    protected $fillable = ['nome', 'descricao', 'status', 'busca', 'categoria_id'];

    public function categoria(){
    	return $this->belongsTo('App\Categoria');
    }

    public function statusName(){
    	if($this->status){
    		return "Publicado";
    	} else {
    		return "Despubliicado";
    	}
    }

    public function userName($id){
        $user = User::find($id);
        return $user['name'];
    }

}
