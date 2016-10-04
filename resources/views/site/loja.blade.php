@extends('layouts.site')
@section('content')
	
	<div class="container">
		<h2>Nossos Produtos</h2>
		<div class="row">
			@foreach($produtos as $p)
				<div class="col-md-3">
				<div style="height: 380px; border: 1px solid #CCC;">
					<a href="{{url('loja/produto')}}/{{$p->busca}}">
					<br>
					<img class="center-block img-responsive" width="200px" src="{{url('images/produtos/produto')}}_{{$p->id}}.jpg">
					<hr>
					<h4 class="text-center">{{$p->nome}}</h4>
					<p class="text-center">{{$p->descricao}}</p>
					</a>
					
				</div>
				</div>
			@endforeach
		</div>
		<br>
		{{$produtos->render()}}
		<br>
	</div>
@endsection()