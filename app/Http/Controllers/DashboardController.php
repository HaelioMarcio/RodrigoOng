<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use 
App\User,
App\Video,
App\Galeria,
App\Newsletter,
App\Parametro,
App\Categoria,
App\Produto,
App\Slideshow;

class DashboardController extends Controller
{
    protected $user, $video, $slideshow, $galeria, $newsletter, $parametro, $categoria, $produto;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(User $user, Video $video, Galeria $galeria, Newsletter $newsletter, Parametro $parametro, Categoria $categoria, Produto $produto, Slideshow $slideshow)
    {
        $this->user = $user;
        $this->video = $video;
        $this->galeria = $galeria;
        $this->newsletter = $newsletter;
        $this->parametro = $parametro;
        $this->produto = $produto;
        $this->categoria = $categoria;
        $this->slideshow = $slideshow;
    }

    public function index()
    {   
        $dados = [
            'produto' => $this->produto->where('nome', 0)->count(),
            'categoria' => $this->categoria->where('nome', 0)->count(),
            'galeria' => $this->galeria->where('nome', 0)->count(),
            'slideshow' => $this->slideshow->where('nome', 0)->count(),
            'video' => $this->video->where('nome', 0)->count(),
            'usuario' => $this->user->where('name', 0)->count(),

        ];
        return view('dashboard.index', $dados);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
