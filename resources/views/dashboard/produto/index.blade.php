@extends('layouts.dashboard')
@section('content')
	<h3>Lista de Produtos</h3>
	<a class="btn btn-success" href="{{dashboard/produto/novo}}">Novo Produto</a>

	<table class="table table-hover">
		<tr>
			<td>Id</td>
			<td>Nome</td>
			<td>Categoria</td>
			<td>Status</td>
			<td>Ações</td>
		</tr>

		@foreach($all as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>{{$p->nome}}</td>
				<td>{{$p->nome}}</td>
				<td>{{$p->status}}</td>
				<td>
					{{$p->id}}
				</td>
			</tr>
		@endforeach
	</table>

@endsection()