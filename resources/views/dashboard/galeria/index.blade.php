@extends('layouts.dashboard')
@section('content')
	<h3>Galeria de Eventos</h3>
	<h4>Diretório: @if(isset($title)){{$title}}@endif</h4>
	@include('dashboard.validator')
	@if(!isset($upload))
		@if(isset($galeria))
		<form class="form-inline" action="{{url('dashboard/galeria/diretorio/store')}}" method="post">
		@endif
		@if(isset($subdiretorio))
		<form class="form-inline" action="{{url('dashboard/galeria/subdiretorio/store')}}" method="post">
		@endif
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<input class="form-control" type="text" name="nome" placeholder="Novo Diretório">
			</div>
			<div class="form-group">
				<input type="submit" value="Criar" class="btn btn-primary">
			</div>
		</form>
	@endif
	@if(isset($upload))

		<form method="post" action="{{url('dashboard/galeria/upload')}}" enctype="multipart/form-data" class="form-inline">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<input class="form-control" type="file" name="images[]" multiple>
			</div>

			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Enviar">
			</div>
			<div class="form-group">
				<a class="btn btn-warning" href="{{url('dashboard/galeria')}}">Voltar</a>
			</div>
		</form>
	@endif
	<br>
	<div class="row">
		@if(isset($diretorios))
			@foreach($diretorios as $d)
				<div class="col-md-3">
					<a href="{{url('dashboard/galeria')}}/{{$d}}">
						<img class="center-block" width="200" src="{{url('images/directory.png')}}">
						<p class="text-center">{{$d}}</p>
					</a>
				</div>
			@endforeach()
		@endif
		@if(isset($images))
			@foreach($images as $d)
				<div class="col-md-3">
						<img class="center-block" width="250" src="{{url('images/galeria/')}}/{{$d}}">
					<p class="text-center">{{$d}} 
					<a class="text-center" href="{{url('dashboard/galeria/delete/image')}}/?image={{$d}}">
						<i class="fa fa-trash"></i>
					</a>
					</p>
				</div>
			@endforeach()
		@endif
	</div>
@endsection