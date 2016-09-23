@extends('layouts.dashboard')
@section('content')
	<h3>Lista de Parametros</h3>
	<a class="btn btn-success" href="{{url('dashboard/parametro/novo')}}">Novo Parametro</a>
	<a class="btn btn-info" href="{{url('dashboard/parametro/historico')}}">Histórico</a>
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