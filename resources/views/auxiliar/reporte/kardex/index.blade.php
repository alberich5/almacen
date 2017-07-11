@extends ('auxiliar.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Reportes</h3>
	</div>
</div>
<div class="row">
	
</div>
<div class="row">
	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<form action="{{asset('php/excel/kardes.php')}}" method="get" accept-charset="utf-8">
				{!! Form::label('kardes del mes:') !!}
	    		{!! Form::select('mes', ['JULIO' => 'JULIO'],null,['class'=>'form-control']) !!}
				<input type="submit" name="" value="Descargar" class="btn btn-primary">
				
		</form>	
	</div>
</div>
@endsection