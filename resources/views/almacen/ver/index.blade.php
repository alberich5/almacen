@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<form action="{{asset('php/excel/copia.php')}}" method="get" accept-charset="utf-8">
		<label>Articulos por dia</label><br>
				<input type="date" name="fecha" value="">
				<input type="submit" name="" value="Descargar" class="btn btn-primary">
				
		</form>	
	</div>
</div>
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<form action="{{asset('php/excel/movimiento.php')}}" method="get" accept-charset="utf-8">
		<label>Movientos por dia</label><br>
				<input type="date" name="fecha">
				<input type="submit" name="" value="Descargar" class="btn btn-primary">
				
		</form>	
	</div>
</div>

<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<form action="{{asset('php/excel/kardes.php')}}" method="get" accept-charset="utf-8">
		<label>kardes del mes</label><br>
				<input type="date" name="fecha1" value="">
				<input type="date" name="fecha1" value="">
				<input type="submit" name="" value="Descargar" class="btn btn-primary">
				
		</form>	
	</div>
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			
		</div>
	</div>
</div>


@endsection