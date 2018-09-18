<table class="table table-active">
	<tr class="bg-success">
		<th>ID</th>
		<th>Nombre </th>
		<th> Apellidos </th>
		<th> Telefono </th>
		<th> Sexo </th>
		<th> Edad </th>
		<th> Sueldo </th>
	</tr>
	@foreach($est as $m)
			<tr>
				<td>{{$m->id}}</td>
				<td>{{$m->nombre}}</td>
				<td>{{$m->apellidos}}</td>
				<td>{{$m->telefono}}</td>
				<td>{{$m->sexo}}</td>
				<td>{{$m->edad}}</td>
				<td>{{$m->sueldo}}</td>
			</tr>
	@endforeach
</table>