<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    protected $table = 'parametro';
    protected $fillable = ['nome', 'posicao', 'status', 'descricao'];

    public function statusName(){
    	if($this->status){
    		return "Publicado";
    	} else {
    		return "Despubliicado";
    	}
    }
}
