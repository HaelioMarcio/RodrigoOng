@if(Auth::user()->type == "Administrador")
<a class="btn btn-info" href="{{url('dashboard')}}/{{$link}}/historico">
	Histórico
</a>
@endif