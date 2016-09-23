@extends('layouts.dashboard')
@section('content')
	<h3>Lista de Produtos</h3>
	<a class="btn btn-success" href="{{url('dashboard/produto/novo')}}">Novo Produto</a>
	<a class="btn btn-info" href="{{url('dashboard/produto/historico')}}">Histórico</a>
	@include('dashboard.validator')
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
				<td>
					<a data-toggle="tooltip" data-placement="top" title="Editar Produto" href="{{url('dashboard/produto/edit')}}/{{$p->id}}">
						{{$p->nome}}
					</a>
				</td>
				<td>{{$p->categoria->nome}}</td>
				<td>
					{{$p->statusName()}}
				</td>
				<td>
					<a data-toggle="tooltip" data-placement="top" title="Excluir Produto" href="{{url('dashboard/produto/delete')}}/{{$p->id}}">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>
		@endforeach
	</table>
	{{$all->render()}}
@endsection()