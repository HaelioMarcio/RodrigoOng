@extends('layouts.dashboard')
@section('content')
	
	<h3>Editando o Vídeo - {{$video->nome}}</h3>
	@include('dashboard.validator')
	<br>
	<div class="row">
		<div class="col-md-6">
		<form method="post" action="{{url('dashboard/video/update')}}/{{$video->id}}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<input class="form-control" value="{{$video->nome}}" type="text" name="nome" placeholder="Nome" required>
			</div>		
			<div class="form-group">
				<input class="form-control" value="{{$video->link}}" type="text" name="link" placeholder="Link Vídeo Youtube" required>
			</div>
			<div class="form-group">
				<textarea name="descricao" class="form-control" placeholder="Descrição">{{$video->descricao}}</textarea>
			</div>
			<div class="form-group">
				<input class="btn btn-success" type="submit" value="Atualizar" >
				<a href="{{url('dashboard/video')}}" class="btn btn-warning">Cancelar</a>
			</div>
		</form>
		</div>
		<div class="col-md-4">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe width="100%" height="315" src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

@endsection
