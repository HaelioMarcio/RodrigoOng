<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video, App\Produto, Storage, App\Newsletter;
use Validator;

use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;

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
            'images' => Storage::disk('public_slideshow')->allFiles(),
        ];
        return view('site.video', $dados);
    }

    public function loja(){
        $dados = [
            'produtos' => $this->produto->paginate(20),
            'images' => Storage::disk('public_slideshow')->allFiles(),
        ];
        return view('site.loja', $dados);
    }

    public function produto($busca){
        $produto = $this->produto->where('busca', '=', $busca)->get();
        $dados = [
            'produto' => $produto->first(),
            'images' => Storage::disk('public_slideshow')->allFiles(),
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

    public function newsletter(Request $request){
        $newsletter = new Newsletter();

        $validator = Validator::make($request->all(),
            [
                'email' => 'required|unique:newsletter|email'
            ],[
                'required' => 'Por favor, informe o email no campo acima',
                'unique' => 'Email já cadastrado em nosso sistema',
                'email' => 'Email inválido, por favor, informe corretamente seu email.'
            ]);

        if(!$validator->fails()){
            $newsletter->create($request->all());
            return ['success' => 'Email salvo com sucesso.'];
        }
        
        return $validator->errors();

    }

}
