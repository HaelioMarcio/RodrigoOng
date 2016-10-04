@extends('layouts.site')
@section('content')

	<div class="container">
	<h2>Vídeos</h2>
	<div class="row">
	@foreach($videos as $v)
		<div class="col-md-4">
			<h3>{{$v->nome}}</h3>
			<iframe width="100%" height="315" src="{{$v->link}}" frameborder="0" allowfullscreen></iframe>
			<p style="text-align: right;">
				<strong>{{$v->created_at->format('d/m/Y')}}</strong>
			</p>
			<p>
				{{$v->descricao}} 
			</p>
		</div>
	@endforeach
	</div>
	</div>

@endsection()