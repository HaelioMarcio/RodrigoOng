@extends('layouts.dashboard')
@section('content')

	@include('dashboard.validator')
	<table class="table table-hover">
		<tr>
			<td>ID</td>
			<td>Email</td>
			<td>Ações</td>
		</tr>

		@foreach($all as $n)
		<tr>
			<td>{{$n->id}}</td>
			<td>{{$n->email}}</td>
			<td>
				<a href="{{url('dashboard/newsletter/delete')}}/{{$n->id}}">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
		@endforeach
	</table>
	{{$all->render()}}

@endsection()
