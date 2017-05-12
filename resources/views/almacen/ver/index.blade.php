@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Descargar los articulo <a href="{{ url('/excel') }}"><button class="btn btn-success">Descargar</button></a></h3>	

	</div>
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Ver reporte de Movimientos <a href="http://172.16.0.203/crudomar/public/php/excel/movimiento.php"><button class="btn btn-success">Descargar</button></a></h3>	
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			
		</div>
	</div>
</div>

@endsection