<?php

namespace App\Helpers;

use App\Parametro;

public function position($nome){

	$parametro = Parametro::where('posicao', '=', $nome)->get();
	return $parametro->descricao;

}