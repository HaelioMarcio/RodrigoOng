<?php

namespace App\Helpers;

use App\Parametro;

if (! function_exists('position')) {
    /**
     * Format text.
     *
     * @param  string  $text
     * @return string
     */
    function position(){
		$parametro = Parametro::where('posicao', '=', 'rodape')->get();
		return $parametro->descricao;
	}	
}



