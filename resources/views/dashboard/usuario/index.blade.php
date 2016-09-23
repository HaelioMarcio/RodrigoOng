@extends('layouts.dashboard')
@section('content')
	
	<h3>Usuários Cadastrados</h3>
	@include('dashboard.validator')
	<div class="row">
		<div class="col-md-6">
			<a class="btn btn-success" href="{{url('dashboard/usuario/novo')}}">Novo Usuário</a>
			<a class="btn btn-info" href="{{url('dashboard/usuario/historico')}}">Histórico</a>
		</div>
		<div class="col-md-2 col-md-offset-4">
			
		</div>
	</div>
	<table class="table table-hover">
		<tr>
			<td>ID</td>
			<td>Nome</td>
			<td>Email</td>
			<td>Tipo</td>
			<td>Ações</td>
		</tr>
		
		@foreach($all as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td>
				<a data-toggle="tooltip" data-placement="top" title="Clique para Editar" href="{{url('dashboard/usuario/edit')}}/{{$user->id}}">
					{{$user->name}}
				</a>
			</td>
			<td>
				<a data-toggle="tooltip" data-placement="top" title="Clique para Editar" href="{{url('dashboard/usuario/edit')}}/{{$user->id}}">
					{{$user->email}}
				</a>
			</td>
			<td>{{$user->type}}</td>
			<td>
				<a data-toggle="tooltip" data-placement="top" title="Excluir Registro" href="{{url('dashboard/usuario/delete')}}/{{$user->id}}">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
		@endforeach

	</table>

@endsection()