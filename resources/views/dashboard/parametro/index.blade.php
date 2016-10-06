@extends('layouts.dashboard')
@section('content')
	<h3>Lista de Parametros</h3>
	<div class="row">
		<div class="col-md-6">
			<a class="btn btn-success" href="{{url('dashboard/parametro/novo')}}">Novo Parametro</a>
				@include('dashboard.linkhistory')		
		</div>
		<div class="col-md-6">
			<form action="{{url('dashboard/parametro')}}" class="form-inline">
				<div class="form-group">
					<input type="text" name="busca" class="form-control" placeholder="Pesquisar">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Buscar">
				</div>
				<div class="form-group">
					<a href="{{url('dashboard/parametro')}}" class="btn btn-warning">Limpar</a>
				</div>
			</form>
		</div>
	</div>
	
	@include('dashboard.validator')
	<table class="table table-hover">
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Status</td>
			<td>Posição</td>
			<td>Ações</td>
		</tr>
		@foreach($all as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>
					<a href="{{url('dashboard/parametro/edit')}}/{{$p->id}}">
						{{$p->nome}}
					</a>
				</td>
				<td>{{$p->statusName()}}</td>
				<td>{{$p->posicao}}</td>
				<td>
					<a href="{{url('dashboard/parametro/delete')}}/{{$p->id}}">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>
		@endforeach()
	</table>
	
@endsection()