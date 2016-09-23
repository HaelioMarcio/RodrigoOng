<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Categoria, Validator;

class CategoriaController extends Controller
{
    protected $repository;

    public function __construct(Categoria $categoria)
    {
        $this->repository = $categoria;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = [
        'link' => 'categoria',
            'all' => $this->repository->paginate(15)
        ];
        return view('dashboard.categoria.index', $dados);
    }

    /*
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        [
            'nome' => 'required|unique:categoria|min:3',
        ], $this->messages());
        
        $all = $request->all();
        $all['busca'] = str_slug($all['nome']);
        
        if(!$validator->fails()){
            $this->repository->create($all);
            return redirect()->back()->with('status_ok', 'Categoria registrada com sucesso.');
        }
        return redirect()->back()->withErrors($validator)->withInput($request->all());
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $dados = [
            'categoria' => $this->repository->find($id),
            'all' => $this->repository->paginate(15),
            'edit' => true,
        ];
        return view('dashboard.categoria.index', $dados);
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
            'nome' => 'required|unique:categoria,id,'.$id,
        ]);

        $all = $request->all();
        $categoria = $this->repository->find($id);
        $categoria->nome = $all['nome'];
        $categoria->busca = str_slug($all['nome']);

        if(!$validator->fails()){
            $categoria->save();
            return redirect('dashboard/categoria')->with('status_ok', 'Categoria atualizada com sucesso.');
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
        $categoria = $this->repository->find($id);
        $categoria->delete();
        return redirect()->back()->with('status_ok', 'Categoria removida com sucesso.');
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute não pode ser vazio',
            'unique' => 'Categoria já registrada',
            'min:3' => 'Nome da categoria deve possuir no mínimo 3 catacteres.'
        ];
    }

    public function history(){
        $dados = [
            'link' => 'categoria',
            'title' => 'Categorias',
            'all' => $this->repository->all(),
        ];

        return view('dashboard.history', $dados); 
    }
}

