<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video, App\Produto, Storage;

class SiteController extends Controller
{  
    protected $video;
    public function __construct(Video $video, Produto $produto){
        $this->video = $video;
        $this->produto = $produto;
    }
    public function index(){
        $dados = [
            'videos' => $this->video->all(),
            'images' => Storage::disk('public_slideshow')->allFiles(),
        ];
    	return view('site.index', $dados);
    }
    public function videos(){
        $dados = [
            'videos' => $this->video->all(),
        ];
        return view('site.video', $dados);
    }

    public function loja(){
        $dados = [
            'produtos' => $this->produto->paginate(20),
        ];
        return view('site.loja', $dados);
    }

    public function produto($busca){
        $produto = $this->produto->where('busca', '=', $busca)->get();
        $dados = [
            'produto' => $produto->first(),
        ];

        return view('site.produto', $dados);
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
