@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Clientes <a href="cliente/create"><button class="btn btn-success">Nuevo Cliente</button></a></h3>
		@include('almacen.categoria.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Opciones</th>
				</thead>
               @foreach ($clientes as $cli)
				<tr>
					<td>{{ $cli->id_cliente}}</td>
					<td>{{ $cli->nombre_c}}</td>
					<td>
						<a href="{{URL::action('ClienteController@edit',$cli->id_cliente)}}"><button class="btn btn-info">Editar</button></a>
					</td>
				</tr>
				@include('almacen.cliente.modal')
				@endforeach
			</table>
		</div>
		
	</div>
</div>

@endsection