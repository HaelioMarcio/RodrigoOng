<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video;

class SiteController extends Controller
{  
    protected $video;
    public function __construct(Video $video){
        $this->video = $video;
    }
    public function index(){
        $dados = [
            'videos' => $this->video->all(),
        ];
    	return view('site.index', $dados);
    }
    public function quemsomos(){
    	return view('site.quemsomos');
    }
    public function direcao(){
    	return view('site.direcao');
    }
    public function servicos(){
    	return view('site.servicos');
    }
    public function portfolio(){
    	return view('site.portfolio');
    }
    public function blog(){
    	return view('site.blog');
    }
    public function contato(){
    	return view('site.contato');
    }

}
