@extends('layouts.dashboard')
@section('scripts')
	<script src="{{url('tinymce_4.4.3_dev/js/tinymce/tinymce.min.js')}}"></script>
  	<script type="text/javascript">
  		tinymce.init({
		  selector: 'textarea',
		  height: 300,
		  plugins: [
		    'advlist autolink lists link image charmap print preview anchor',
		    'searchreplace visualblocks code fullscreen',
		    'insertdatetime media table contextmenu paste code'
		  ],
		  toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
		  content_css: '//www.tinymce.com/css/codepen.min.css'
		});
  	</script>
  	<script>tinymce.init({ selector:'textarea' });</script>
  	<script type="text/javascript">
  		$(document).ready(function(){
  			$("#gravarForm").click(function(){
  				var descricao = $("#descricao").value();
  				alert(descricao);
  			});
  		});
  	</script>
@endsection()
@section('content')
	<h3>Editar Parametro - {{$parametro->nome}}</h3>
	@include('dashboard.validator')
	
	<form  action="{{url('dashboard/parametro/update')}}/{{$parametro->id}}" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" value="{{$parametro->nome}}" name="nome" class="form-control" placeholder="Nome">
				</div>		
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" value="{{$parametro->posicao}}" name="posicao" class="form-control" placeholder="Posição">
				</div>		
			</div>
		</div>
		
		<div class="form-group">
			<textarea id="descricao" class="form-control" name="descricao" placeholder="Descrição">
				{{$parametro->descricao}}
			</textarea>
		</div>	
		<div class="form-group">
			<input type="submit" id="gravarForm" value="Salvar" class="btn btn-primary">
			<a href="{{url('dashboard/parametro')}}" value="Cancelar" class="btn btn-warning">Cancelar</a>
		</div>
	</form>
@endsection()