<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parametro extends Model
{
    protected $table = 'parametro';
    protected $fillable = ['nome', 'posicao', 'status', 'descricao'];

}
