<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Slideshow, Validator;

class SlideshowController extends Controller
{
	protected $repository;

    public function __construct(Slideshow $slideshow){
    	$this->repository = $slideshow;
    }

    public function index(){
    	$dados = [
    		'all' => $this->repository->paginate(15)
    	];
    	return view('dashboard.slideshow.index', $dados);
    }

    public function store(Request $request){
    	$inputs = $request->all();
        
        //Validation
        $validator = Validator::make($inputs,
            [   
                'nome' => 'required|min:3',
            ]);

        if(!$validator->fails()){

            $produto = $this->repository->create($inputs);
            //$this->produto->upload($request->file('image'), $produto->id);
            $path = public_path().'/images/slideshow/';
            //mkdir($path.'/'.$produto->id, 0777, true);
            //Upload de Image

            $imageName = 'slideshow_'.$produto->id.'.'.
            $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move($path.'/', $imageName);
            
            //if($id != null & $id > 0){
                return redirect('dashboard/slideshow')->with('status_ok', 'Slideshow criado com sucesso.');
            //}
        } else{
            return redirect()->back()->withErrors($validator->errors());
        }
    }
}
