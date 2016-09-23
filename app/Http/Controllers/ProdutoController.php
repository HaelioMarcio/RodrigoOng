<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Produto, App\Categoria, Validator;

class ProdutoController extends Controller
{
    protected $repository, $categoria;

    public function __construct(Produto $produto, Categoria $categoria)    {
        $this->repository = $produto;
        $this->categoria = $categoria;
    }

    public function history(){
        $dados = [
            'title' => 'Produtos',
            'all' => $this->repository->all(),
        ];

        return view('dashboard.history', $dados); 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dados = [
            'all' => $this->repository->paginate(15),
        ];
        return view('dashboard.produto.index', $dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dados = [
            'categorias' => $this->categoria->all(),
        ];

        return view('dashboard.produto.create', $dados);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        //Input buscas
        $inputs['busca'] = str_slug($inputs['nome']);
        //Validation
        $validator = Validator::make($inputs,
            [   
                'nome' => 'required|min:3',
                'categoria_id' => 'required',
            ]);

        if(!$validator->fails()){

            $produto = $this->repository->create($inputs);
            //$this->produto->upload($request->file('image'), $produto->id);
            $path = public_path().'/images/produtos/';
            //mkdir($path.'/'.$produto->id, 0777, true);
            //Upload de Image

            $imageName = 'produto_'.$produto->id.'.'.
            $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($path.'/', $imageName);
            
            
            //if($id != null & $id > 0){
                return redirect('dashboard/produto')->with('status_ok', 'Produto criado com sucesso.');
            //}
        } else{
            return redirect()->back()->withErrors($validator->errors());
        }
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
        $dados = [
            'produto' => $this->repository->find($id),
            'categorias' => $this->categoria->all(),
        ];

        return view('dashboard.produto.edit', $dados);
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
        $inputs = $request->all();
        $inputs['busca'] = str_slug($inputs['nome']);

        $validator = Validator::make($inputs,
            [   
                'nome' => 'required|min:3',
                'categoria_id' => 'required',
            ]);

        if(!$validator->fails()){
            $produto = $this->repository->find($id);
            $produto->update($inputs);
            if(isset($inputs['image'])){
            $path = public_path().'/images/produtos/';
                //$produto->upload_update($inputs['image'],$inputs['id']);    
                if( file_exists($path.'/produto_'.$id.'.jpg') ){
                    unlink($path.'/produto_'.$id.'.jpg');
                }
                if(!is_dir($path)){
                    //mkdir($path.'/'.$id, 0777, true);
                }

                //Upload de Image
                $imageName = 'produto_'.$id.'.'.
                $request->file('image')->getClientOriginalExtension();
                $request->file('image')->move($path.'/', $imageName);
            }

            return redirect('dashboard/produto')->with('status_ok', 'Produto atualizado com sucesso.');
            
        } else{
            return redirect()->back()->withErrors($validator->errors());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = $this->produto->find($id);
        $produto->delete();
        if(unlink(public_path().'/images/produtos/'.$id.'/produto_'.$id.'.jpg')){
        }
        rmdir(public_path().'/images/produtos/'.$id);
        return redirect('admin/produto')->with('info', 'Produto excluído.');
    }
}
