@extends('layouts.dashboard')
@section('content')
	<h3>Novo Usuário</h3>
	<a class="btn btn-warning" href="{{url('dashboard/usuario')}}">Cancelar</a>
	@include('dashboard.validator')
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form action="{{url('dashboard/usuario/store')}}" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<input name="name" type="text" value="{{old('name')}}" class="form-control" placeholder="Nome" required>
				</div>
				<div class="form-group">
					<input name="email" type="email" value="{{old('email')}}" class="form-control" placeholder="Email" required>
				</div>
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Senha">
				</div>
				<div class="form-group">
					<input name="password_confirmation" type="password" class="form-control" placeholder="Confirmar Senha">
				</div>
				<div class="form-group">
					<select name="type" id="" class="form-control">
						<option value="administrador">Administrador</option>
						<option value="usuario">Usuário</option>
					</select>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Cadastrar">
				</div>

			</form>	
		</div>
	</div>
@endsection()