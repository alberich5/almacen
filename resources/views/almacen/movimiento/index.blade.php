@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Movimiento <a href="movimiento/create"><button class="btn btn-success">Nuevo Movimiento</button></a></h3>
		@include('almacen.movimiento.search')
		
	</div>
</div>
<div id="mover">
<form action="{{asset('php/excel/copia.php')}}" method="get" accept-charset="utf-8">
	<input type="hidden" name="fecha" value="<?php echo date("Y-m-d"); ?>">
	<i class="fa fa-download" aria-hidden="true"><input type="submit" name="" value="excel" class=" btn btn-info"></i>
</form>
			
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Articulo</th>
					<th>Cantidad</th>
					<th>Tipo</th>
					<th>Cliente</th>
					<th>Atendio</th>
					<th>Fecha</th>
					<th>Operacion</th>
				</thead>
               @foreach ($movimientos as $mov)
				<tr>
					<td>{{ $mov->nombre}}</td>
					<td>{{ $mov->cantidad}}</td>
					<td>{{ $mov->tipo}}</td>
					<td>{{ $mov->nombre_c}}</td>
					<td>Omar</td>
					<td>{{ $mov->fecha}}</td>
					<td>
						<a href="http://172.16.0.203/crudomar/public/php/formato1.php?nom={{ $mov->nombre}}&cant={{ $mov->cantidad}}&uni={{ $mov->unidad}}&cli={{ $mov->nombre_c}}"><button class="btn btn-primary">Descargar</button></a>
					</td>
				</tr>
				@include('almacen.movimiento.modal')
				@endforeach
			</table>
		</div>
		{{$movimientos->render()}}
	</div>
</div>

@endsection