<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User, Validator, Auth, SessionGuard;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{

	protected $repository;

	public function __construct(User $user){
		$this->repository = $user;
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all = $this->repository->all();
        return view('dashboard.usuario.index', ['all' => $all]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),
        	[	
        		'name' => 'required',
        		'email' => 'required|email|unique:users',
        		'password' => 'required|confirmed|min:6'
        	], $this->messages());
        
        $all = $request->all();
        $all['password'] = Hash::make($all['password']);

        if(!$validator->fails()){
        	$this->repository->create($all);
        	return redirect('dashboard/usuario')->with('status_ok', 'Usuário cadastrado com sucesso.');
        }
        
        return redirect()->back()->withInput($request->all())->withErrors($validator);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->repository->find($id);
        return view('sistema.usuario.edit', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = $this->repository->find($id);
        return view('dashboard.usuario.edit', ['user' => $user]);
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
        		'name' => 'required',
        		'email' => 'required|email|unique:users,id,'.$id,
        		'password' => 'confirmed'
        	], $this->messages());
        
        $all = $request->all();
        
        $user = $this->repository->find($id);
        $user->name = $all['name'];
        $user->email = $all['email'];
        $user->type = $all['type'];
        
        if($all['password'] != null){
        	$all['password'] = Hash::make($all['password']);
        	$user->password = $all['password'];
        }

        if(!$validator->fails()){
        	$user->save();
        	return redirect('dashboard/usuario')->with('status_ok', 'Usuário atualizado com sucesso.');
        }
        
        return redirect()->back()->withInput($request->all())->withErrors($validator);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = $this->repository->find($id);
        $user->delete();
        return redirect('dashboard/usuario');
    }

    public function messages()
	{
	    return [
	        'required' => 'Campo :attribute obrigatório',
	        'unique'  => 'Email já cadastro em nossa base de dados.',
	        'min' => 'Senha terá que possui no mínimo 6 caracteres.',
	        'confirmed' => 'A confirmação de senha está diferente.'
	    ];
	}

	public function login(){
        if(!Auth::check()){
            return view('dashboard.usuario.login');    
        }
        return redirect('dashboard');
		
	}

	public function autentica(Request $request){

		$validator = Validator::make($request->all(),[
				'email' => 'required|email',
				'password' => 'required'
			]);
		
		$all = $request->all();
		//$all['password'] = Hash::make($all['password']);
		
		$email = $all['email'];
		$password = $all['password'];
        
        $data = ['email' => $email, 'password' => $password];
        
        if(!$validator->fails()){

			if(Auth::attempt($data)){
				//$user = $this->repository->where('email', '=', $all['email'])->first();
				//Auth::login($user);
            	return redirect('/dashboard');	
			}
        	
		}
		return redirect('/login')->withErrors($validator)->with('status_error', 'Login e senha incorreto.');

	}

	public function logout(){
		Auth::logout();
	}
}
