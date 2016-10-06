<?php

use App\Parametro;


if (! function_exists('position')) {
    /**
     * Format text.
     *
     * @param  string  $text
     * @return string
     */
    function position($posicao){
		$parametro = Parametro::where('posicao', '=', $posicao)->first();
		return $parametro->descricao;
	}	
}

if (! function_exists('slideshow')) {
    /**
     * Format text.
     *
     * @param  string  $text
     * @return string
     */
    function slideshow(){
        return false;
    }   
}


