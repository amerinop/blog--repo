@extends('admin.template.main')

@section('title', 'Ver Usuarios')

@section('contenido')
    <table class="table table-striped">
    	<thead>
    		<th>ID</th>
    		<th>Nombre</th>
    		<th>Coreo electrónico</th>
    		<th>Tipo</th>
    		<th>Acción</th>
    	</thead>
    	<tbody>
    		@foreach($users as $users)
				<tr>
					<td>{{ $users->id }}</td>
					<td>{{ $users->name }}</td>
					<td>{{ $users->email }}</td>
					<td>
						@if($users->type == 'admin')
							<span class="label label-warning">{{ $users->type }}</span>
						@else
							<span class="label label-success">{{ $users->type }}</span>
						@endif
					</td>
					<td><a href="" class="btn btn-primary"></a><a href="" class="btn btn-danger"></a></td>
				</tr>
    		@endforeach
    	</tbody>
    </table>
	{{ $users->links() }}
@endsection