@extends('layouts.dashboard')
@section('content')
	
	<h3>Vídeos</h3>
	<div class="row">
		<div class="col-md-6">
			<a href="{{url('dashboard/video/novo')}}" class="btn btn-success">Novo Vídeo</a>	
			@include('dashboard.linkhistory')		
		</div>
		<div class="col-md-6">
			<form action="{{url('dashboard/video')}}" class="form-inline">
				<div class="form-group">
					<input type="text" name="busca" class="form-control" placeholder="Pesquisar">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Buscar">
				</div>
				<div class="form-group">
					<a href="{{url('dashboard/video')}}" class="btn btn-warning">Limpar</a>
				</div>
			</form>
		</div>
	</div>
	

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
