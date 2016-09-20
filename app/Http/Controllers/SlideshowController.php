<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Slideshow, Validator, Storage;

class SlideshowController extends Controller
{
	protected $repository;

    public function __construct(Slideshow $slideshow){
    	$this->repository = $slideshow;
    }

    public function index(){
    	$dados = [
            'images' => Storage::disk('public_slideshow')->allFiles(),
    	];
    	return view('dashboard.slideshow.index', $dados);
    }

    public function store(Request $request){
        $path = $request->file('image')->storeAs('','slide4.jpeg', 'public_slideshow');
        return redirect()->back()->with('status_ok', 'Imagem enviada com sucesso.');
        /*$inputs = $request->all();
        //Validation
        $validator = Validator::make($inputs,
            [   
                'nome' => 'required|min:3',
            ]);
        $inputs['status'] = 1;
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
        } */
    }

    public function destroy($name){
        Storage::disk('public_slideshow')->delete($name);
        return redirect()->back()->with('status_ok', 'Imagem removida com sucesso.');
    }
}
