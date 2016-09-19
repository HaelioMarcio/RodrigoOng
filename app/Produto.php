<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $fillable = ['nome', 'descricao', 'status', 'categoria_id'];

    public function categoria(){
    	return $this->hasOne('App\Categoria');
    }
}
