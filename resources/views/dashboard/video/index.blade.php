@extends('layouts.dashboard')
@section('content')
	
	<h3>Vídeos</h3>
	<a href="{{url('dashboard/video/novo')}}" class="btn btn-success">Novo Vídeo</a>
	<a class="btn btn-info" href="{{url('dashboard/video/historico')}}">Histórico</a>
	@include('dashboard.validator')
	<hr>
	<div class="row">
		@foreach($all as $v)
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe width="100%" height="315" src="{{$v->link}}" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-md-6">
					<strong>Nome:</strong> <br> {{$v->nome}} <br>
					<strong>Descrição:</strong> <br>
					{{$v->descricao}} <br>
					<a href="{{url('dashboard/video/edit')}}/{{$v->id}}">
						<i class="fa fa-edit"></i>
					</a>
					<a href="{{url('dashboard/video/delete')}}/{{$v->id}}">
						<i class="fa fa-trash"></i>
					</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>

@endsection
