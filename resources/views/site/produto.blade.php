@extends('layouts.site')
@section('content')
	
	<div class="container">
		<br>
		<div class="row">
			<div class="col-md-4">
				<img src="{{url('images/produtos/produto')}}_{{$produto->id}}.jpg" class="img-responsive center-block img-thumbnail">
			</div>	
			<div class="col-md-8">
				<h2>{{$produto->nome}}</h2>
				<h5>Descrição:</h5>
				<p>{{$produto->descricao}}</p>
			</div>
		</div>
		<br>
	</div>

@endsection()