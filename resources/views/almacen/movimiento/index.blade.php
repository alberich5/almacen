@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Movimiento <a href="movimiento/create"><button class="btn btn-success">Nueva Movimiento</button></a></h3>
		@include('almacen.movimiento.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Articulo</th>
					<th>Cantidad</th>
					<th>Tipo</th>
					<th>Fecha</th>
				</thead>
               @foreach ($movimientos as $mov)
				<tr>
					<td>{{ $mov->id_movimiento}}</td>
					<td>{{ $mov->nombre}}</td>
					<td>{{ $mov->cantidad}}</td>
					<td>{{ $mov->tipo}}</td>
					<td>{{ $mov->fecha}}</td>
					<td>
						
					</td>
				</tr>
				@include('almacen.movimiento.modal')
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection