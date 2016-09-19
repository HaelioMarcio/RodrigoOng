<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
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
}
