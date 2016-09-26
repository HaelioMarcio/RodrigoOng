<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Parametro, Validator;

class ParametroController extends Controller
{
    protected $repository;

    public function __construct(Parametro $parametro){
        $this->repository = $parametro;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = [
        'link' => 'parametro',
            'all' => $this->repository->paginate(15),
        ];

        return view('dashboard.parametro.index', $dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.parametro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request->all();
        $validator = Validator::make($request->all(),
            [   
                'nome' => 'required',
                'posicao' => 'required',
            ],
            $this->messages());

        $all = $request->all();
        $all['status'] = true;
        
        if(!$validator->fails()){
            $this->repository->create($all);
            return redirect('dashboard/parametro')->with('status_ok', 'Parametro criado com sucesso.');
        }

        return redirect()->back()->withErros($validator);
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
        $parametro = $this->repository->find($id);
        return view('dashboard.parametro.edit', ['parametro' => $parametro]);
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
        $validator = Validator::make($request->all(),
            [   
                'nome' => 'required',
                'posicao' => 'required',
            ],
            $this->messages());

        $parametro = $this->repository->find($id);
        
        if(!$validator->fails()){
            $parametro->update($request->all());
            return redirect('dashboard/parametro')->with('status_ok', 'Parametro atualizado com sucesso.');
        }

        return redirect()->back()->withErros($validator);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parametro = $this->repository->find($id);
        $parametro->delete();
        return redirect()->back()->with('status_ok', 'Parametro removido com sucesso');

    }

    public function messages(){
        return [
            'required' => 'O campo :attibute não pode ser vazio.'
        ];
    }

    public function history(){
        $dados = [
            'link' => 'categoria',
            'title' => 'Parametros',
            'all' => $this->repository->all(),
        ];

        return view('dashboard.history', $dados); 
    }
}
