@extends('layouts.dashboard')
@section('content')
	
	<h3>Imagens Slideshow</h3>
	@include('dashboard.validator')
	<form class="form-inline" action="{{url('dashboard/slideshow/store')}}" method="POST">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<input type="text" name="nome" class="form-control" placeholder="Nome">
		</div>
		<div class="form-group">
			<input type="file" name="image" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" value="Carregar" class="btn btn-success">
		</div>
	</form>

	<div class="row">
		@foreach($all as $s)
			<div class="col-md-4">
				<img width="200px" src="{{url('images/slideshow')}}/slideshow_{{$s->id}}.jpg" alt="">
				<p><strong>{{$s->nome}}</strong></p>
				<a href="{{url('dashboard/slideshow/delete')}}/{{$s->id}}"><i class="fa fa-trash"></i></a>
			</div>
		@endforeach
	</div>

@endsection