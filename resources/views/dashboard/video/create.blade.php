@extends('layouts.dashboard')
@section('content')
	
	<h3>Vídeos</h3>
	<a href="{{url('dashboard/video/novo')}}" class="btn btn-success">Novo Vídeo</a>
	@include('dashboard.validator')
	<div class="row">
		<div class="col-md-6">
		<form method="post" action="{{url('dashboard/video/store')}}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<input class="form-control" type="text" name="nome" placeholder="Nome" required>
			</div>		
			<div class="form-group">
				<input class="form-control" type="text" name="link" placeholder="Link Vídeo Youtube" required>
			</div>
			<div class="form-group">
				<textarea name="descricao" class="form-control" placeholder="Descrição"></textarea>
			</div>
			<div class="form-group">
				<input class="btn btn-success" type="submit" value="Salvar" >
			</div>
		</form>
		</div>
		<div class="col-md-4">
			<div class="embed-responsive embed-responsive-16by9">
				<iframe width="100%" height="315" src="" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

@endsection
