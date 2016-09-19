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
App\Produto;

class DashboardController extends Controller
{
    protected $user, $video, $galeria, $newsletter, $parametro, $categoria, $produto;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(User $user, Video $video, Galeria $galeria, Newsletter $newsletter, Parametro $parametro, Categoria $categoria, Produto $produto)
    {
        $this->user = $user;
        $this->video = $user;
        $this->galeria = $user;
        $this->newsletter = $user;
        $this->parametro = $user;
    }

    public function index()
    {   
        return view('dashboard.index');
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
