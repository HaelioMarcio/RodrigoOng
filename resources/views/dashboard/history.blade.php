@extends('layouts.dashboard')
@section('content')
	<h3>Historico de Alterações em {{$title}}</h3>	
	<hr>
	<ul>
		@foreach($all as $p)
			@foreach($p->revisionHistory as $r)
			<li style="border-bottom: 1px solid #ccc; line-height: 3em;">
Registro: {{$r->id}}: {{$r->created_at->format('d/m/Y')}}
				as
				{{$r->created_at->format('h:i:s')}}: O usuário <strong>{{$p->userName($r->user_id)}}</strong> modificou o campo {{$r->key}} de <strong>"{{$r->new_value}}"</strong> para <strong>"{{$r->old_value}}"</strong>.  <br>
			</li>
			@endforeach
		@endforeach
	</ul>
@endsection()