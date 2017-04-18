
<table>
	<caption>listado de users</caption>
	<thead>
		<tr>
			<th>id</th>
			<th>nombre</th>
			<th>email</th>
		</tr>
	</thead>
	<tbody>
		<tr>
		@foreach($users as $user)
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
		@endforeach
		</tr>
	</tbody>
</table>