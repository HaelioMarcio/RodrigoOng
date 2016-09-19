@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('status_ok'))
	<div class="alert alert-success">
		<p>{{session('status_ok')}}</p>
	</div>
@endif

@if(session('status_error'))
	<div class="alert alert-danger">
		<p>{{session('status_error')}}</p>
	</div>
@endif