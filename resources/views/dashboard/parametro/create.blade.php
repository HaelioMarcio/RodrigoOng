@extends('layouts.dashboard')
@section('scripts')
	<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
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
@endsection()
@section('content')
	<h3>Criar Novo Parametros</h3>
	@include('dashboard.validator')
	
	<form action="{{url('dashboard/parametro/store')}}" method="post">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" name="nome" class="form-control" placeholder="Nome">
				</div>		
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<input type="text" name="posicao" class="form-control" placeholder="Posição">
				</div>		
			</div>
		</div>
		
		
		<div class="form-group">
			<textarea class="form-control" name="descricao" placeholder="Descrição"></textarea>
		</div>	
		<div class="form-group">
			<input type="submit" value="Salvar" class="btn btn-primary">
		</div>
	</form>

@endsection()