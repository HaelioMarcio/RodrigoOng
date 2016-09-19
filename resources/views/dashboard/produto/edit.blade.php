@extends('layouts.dashboard')
@section('content')

	<h3>Editando Produto - {{$produto->nome}}</h3>
	<a class="btn btn-warning" href="{{url('dashboard/produto')}}">Cancelar</a>
	<br><br>
	<div class="row">
		<div class="col-md-7">
		@include('dashboard.validator')
		<form method="post" action="{{url('dashboard/produto/update')}}/{{$produto->id}}" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<input type="hidden" name="id" value="{{$produto->id}}">
			
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<input type="text" value="{{$produto->nome}}"  class="form-control" name="nome" placeholder="Nome">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="radio" id="pub" name="status" value="1" checked>
					<label for="pub">Publicado</label>
					
					<input type="radio" id="des" value="0" name="status">
					<label for="des">Despublicado</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<textarea class="form-control" name="descricao" placeholder="Descrição">{{$produto->descricao}}</textarea>
		</div>
		<div class="form-group">
			<select name="categoria_id" class="form-control">
				<option value="{{$produto->categoria->id}}">{{$produto->categoria->nome}}</option>
				@foreach($categorias as $c)
					<option value="{{$c->id}}">{{$c->nome}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<input type="file" name="image" class="btn btn-success" value="Salvar">
		</div>
		<div class="form-group">
			<input type="submit" class="btn btn-success" value="Salvar">
		</div>
		</form>
		</div>
		<div class="col-md-3">
			<img class="img-thumbnail center-block" width="200px" src="{{url('images/produtos/produto_')}}{{$produto->id}}.jpg">
		</div>
		</div>
	</div>
	
@endsection()