<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Galeria, Storage, Validator;
class GaleriaController extends Controller
{
    protected $repository;
    
    public function __construct(Galeria $galeria){
        $this->repository = $galeria;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name = null, $evento = null)
    {
        if($name == null){
            $dados = [
                'galeria' => true,
                'diretorios' => Storage::disk('galeria')->directories(),
            ];
            return view('dashboard.galeria.index', $dados);    
        } else {
            if($evento == null){

                $dados = [
                    'subdiretorio' => true,
                    'title' => $name,
                    'diretorios' => Storage::disk('galeria')->directories($name),
                ];
                return view('dashboard.galeria.index', $dados);        
            } else {

                $dados = [
                    'upload' => true,
                    'title' => $name.' > '.$evento,
                    'images' => Storage::disk('galeria')->allFiles($name.'/'.$evento),
                ];
                return view('dashboard.galeria.index', $dados);        
            }
            
        }

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function uploadImages(Request $request)
    {   
        $all = $request->all();
        for($i = 0; $i < count($all['images']); $i++){
            $image = $all['images'][$i];
            $path = $image->store('images/', 'galeria');    
        }
        
        return $path;
        //$request->images->store('images', 'galeria');
        //Storage::disk('galeria')->store('');

    }

    public function storeDiretorio(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nome' => 'required|min:3',
        ],[
            'required' => 'O campo :attribute não pode ser vazio.',
            'min:3' => 'O nome do diretório é de no mínimo 3 caracteres'
        ]);

        if(!$validator->fails()){
            Storage::disk('galeria')->makeDirectory($request->get('nome'));
        }
        return redirect()->back()->withInput($request->all())->withErrors($validator);
    }
    public function storeSubdiretorio(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nome' => 'required|min:3',
        ],[
            'required' => 'O campo :attribute não pode ser vazio.',
            'min:3' => 'O nome do diretório é de no mínimo 3 caracteres'
        ]);

        if(!$validator->fails()){
            Storage::disk('galeria')->makeDirectory($request->get('nome'));
        }
        return redirect()->back()->withInput($request->all())->withErrors($validator);
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
    public function destroyImage(Request $request)
    {   
        //return $request->get('image');
        Storage::disk('galeria')->delete($request->get('image'));
        return redirect()->back()->with('status_ok', 'Imagem removida com sucesso.');
    }
}
