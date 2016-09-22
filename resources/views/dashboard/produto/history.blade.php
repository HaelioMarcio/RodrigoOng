@extends('layouts.dashboard')
@section('content')
	
	<h3>Historico de Alterações em Produtos</h3>	
	<hr>
	
	<ul>
		@foreach($all as $p)
			@foreach($p->revisionHistory as $r)
			<li>
Registro: {{$r->id}}: O usuário <strong>{{$p->userName($r->user_id)}}</strong> modificou o campo {{$r->key}} de <strong>{{$r->new_value}}</strong> para <strong>{{$r->old_value}}</strong>. <br>
			</li>
			@endforeach
		@endforeach
	</ul>

@endsection()
