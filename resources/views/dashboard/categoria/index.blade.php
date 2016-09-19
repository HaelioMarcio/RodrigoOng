@extends('layouts.dashboard')

@section('content')
	
	<h3>Categorias</h3>

	<div class="row">
		@if(!isset($edit))
		<form class="form-inline" action="{{url('dashboard/categoria/store')}}" method="post">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="">
			<div class="form-group">
				<input type="text" name="nome" class="form-control" placeholder="Categoria">
			</div>
			<div class="form-group">
				<input type="submit" value="Salvar" class="btn btn-success">
			</div>
		</form>
		@endif
		@if(isset($edit))
			<form class="form-inline" action="{{url('dashboard/categoria/update')}}/{{$categoria->id}}" method="post">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<input type="hidden" name="id" value="@if($edit){{$categoria->id}}@endif">
				<div class="form-group">
					<input value="@if($edit){{$categoria->nome}}@endif" type="text" name="nome" class="form-control" placeholder="Categoria">
				</div>
				<div class="form-group">
					<input type="submit" value="Atualizar" class="btn btn-success">
					<a class="btn btn-warning" href="{{url('dashboard/categoria')}}">Cancelar</a>
				</div>
			</form>
		@endif
	</div>
	@include('dashboard.validator')
	<table class="table table-hover">
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Busca</td>
			<td>Ações</td>
		</tr>
		@foreach($all as $c)
		<tr>
			<td>{{$c->id}}</td>
			<td>
				<a data-toggle="tooltip" data-placement="top" title="Editar Categoria" href="{{url('dashboard/categoria/edit')}}/{{$c->id}}">
					{{$c->nome}}</td>
				</a>
			<td>{{$c->busca}}</td>
			<td>
				<a data-toggle="tooltip" data-placement="top" title="Excluir Categoria" href="{{url('dashboard/categoria/delete')}}/{{$c->id}}">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection