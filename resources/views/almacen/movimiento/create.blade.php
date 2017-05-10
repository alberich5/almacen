@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Movimiento</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::open(array('url'=>'almacen/movimiento','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Tipo Movimiento</label>
            	{!! Form::select('tipo', ['ENTRADA' => 'ENTRADA',
                                             'SALIDA' => 'SALIDA'],null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                        <label for="">Articulo</label>
                        <select name="id_articulo"  class="form-group selectpicker" data-live-search="true">
                            @foreach($articulos as $articulo)
                            <option value="{{$articulo->id_articulo}}">{{$articulo->nombre}}</option>
                            @endforeach
                        </select>
            </div>
            <div class="form-group">
            	<label for="cantidad">Cantidad</label>
            	<input type="text" name="cantidad" class="form-control" placeholder="Cantidad de material...">
            </div>
            <div class="form-group">
            	<label for="disponible">Disponible</label>
            	<input type="text" name="disponible" class="form-control" value="10">
            </div>
             <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            </div>
			{!!Form::close()!!}		
            
		</div>
	</div>
@endsection