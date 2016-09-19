<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login - O Pequeno Nazareno</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<br><br><br><br><br><br>
	<div class="row">
	<div class="col-md-4 col-md-offset-4">
	@include('dashboard.validator')
	<form action="{{url('autentica')}}" method="POST">
		<input type="hidden" value="{{csrf_token()}}" name="_token">
	  	<div class="form-group">
	    <label class="control-label" for="inputEmail">E-mail</label>
	    <div class="controls">
	    <input name="email" class="form-control" type="email" placeholder="Email" />
	    </div>
	  	</div>
	  	<div class="form-group">
	    <label class="control-label" for="inputPassword">Senha</label>
	    <div class="controls">
	    <input name="password" class="form-control" type="password" placeholder="Password" />
	    </div>
	  	</div>
	  	<div class="control-group">
	    <div class="controls">
	    <label class="checkbox"><input type="checkbox" /> Lembrar senha</label>
	    <button class="btn btn-primary" type="submit">Acessar</button>
	    </div>
	  	</div>
	</form>
		</div>
	</div>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>