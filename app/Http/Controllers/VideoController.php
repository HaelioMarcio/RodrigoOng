<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Video, Validator;

class VideoController extends Controller
{
    protected $repository;
    public function __construct(Video $video){
        $this->repository = $video;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = [
            'all' => $this->repository->paginate(6),
        ];

        return view('dashboard.video.index', $dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.video.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
                'nome' => 'required|min:4',
                'link' => 'required'
            ],[
                'required' => 'O campo :attribute não pode ser vazio.',
                'min:4' => 'O campo terá que possui no mínimo 4 caracteres.'
            ]);
        $all = $request->all();
        $all['status'] = true;
        if(!$validator->fails()){
            $this->repository->create($all);
            return redirect('dashboard/video')->with('status_ok', 'Vídeo cadastrado com sucesso.');
        }

        return redirect()->back()->withErrors($validator)->withInput($request->all());
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
        $video = $this->repository->find($id);
        return view('dashboard.video.edit', ['video' => $video]);
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
        $validator = Validator::make($request->all(),[
                'nome' => 'required|min:4',
                'link' => 'required'
            ],[
                'required' => 'O campo :attribute não pode ser vazio.',
                'min:4' => 'O campo terá que possui no mínimo 4 caracteres.'
            ]);
        $video = $this->repository->find($id);
        if(!$validator->fails()){
            $video->update($request->all());
            return redirect('dashboard/video')->with('status_ok', 'Vídeo atualizado com sucesso.');
        }

        return redirect()->back()->withErrors($validator)->withInput($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $video = $this->repository->find($id);
        $video->delete();
        return redirect()->back()->with('status_ok', 'Vídeo removido com sucesso.');
    }

    public function history(){
        $dados = [
            'title' => 'Vídeos',
            'all' => $this->repository->all(),
        ];

        return view('dashboard.history', $dados); 
    }
}
