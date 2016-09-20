@extends('layouts.dashboard')
@section('content')
	
	<h3>Imagens Slideshow</h3>
	@include('dashboard.validator')
	<p>Imagem recomendável - 1600 x 878PX</p>
	<form class="form-inline" action="{{url('dashboard/slideshow/store')}}" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<input type="file" name="image" class="form-control">
		</div>
		<div class="form-group">
			<input type="submit" value="Carregar" class="btn btn-success">
		</div>
	</form>
	<br>
	<div class="row">
		@foreach($images as $image)
			<div class="col-md-4 text-center">
				<img width="320px" src="{{url('images/slideshow')}}/{{$image}}" alt="">
				<p><strong></strong></p>
				<a href="{{url('dashboard/slideshow/delete')}}/{{$image}}"><i class="fa fa-trash"></i></a>	
			</div>
			
		@endforeach
	</div>

@endsection