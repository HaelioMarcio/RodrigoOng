<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SiteController extends Controller
{
    public function index(){
    	return view('site.index');
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
