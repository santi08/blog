@extends('admin.template.main')

@section('title', 'Lista de Usuarios')
@section('nameUser',$users[0]->name)

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar nuevo Usuario</a><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Accion</th>
			

		</thead>
			<tbody>
				@foreach($users as $user)
				<tr> 	
					<td> {{ $user->id }} </td>
					<td> {{ $user->name }} </td>
					<td> {{ $user->email }} </td>
					<td> 
						@if($user->type == 'admin')
							<span class="label label-info">{{ $user->type }} </span>
						@else
							<span class="label label-primary">{{ $user->type }}</span> 
						@endif
					
					</td>
					<td> <a href="{{ route('admin.users.destroy', $user->id) }}" onclick=" return confirm('¿Seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle"></span></a> 

						 <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench"></span></a>
					</td>
					
				</tr>

				@endforeach
				
			</tbody>

	</table>
	{!! $users->render() !!}

@endsection 