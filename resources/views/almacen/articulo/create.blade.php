@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Articulo</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
		</div>
	</div>
			
			{!!Form::open(array('url'=>'almacen/articulo','method'=>'POST','autocomplete'=>'off','files'=>'true'))!!}
            {{Form::token()}}
    <div class="row">
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="{{old('nombre')}}" class="form-control" placeholder="Nombre...">
            </div>
    	</div>
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label>Categoria</label>
            	<select name="id_categoria" class="form-control">
	            	@foreach($categorias as $cat)
	            		<option value="{{$cat->id_categoria}}">{{$cat->nombre}}</option>
	            	@endforeach
            	</select>
            	
            </div>
    	</div>
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="codigo">Descripcion</label>
            	<input type="text" name="descripcion" required value="{{old('descripcion')}}" class="form-control" placeholder="Descripcion del Articulo...">
            </div>
    	</div>
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="stock">Unidad</label>
                {!! Form::select('unidad', ['BLOC' => 'BLOC',
                                             'BOLSA' => 'BOLSA',
                                             'BOTE' => 'BOTE',
                                             'BULTO' => 'BULTO',
                                             'CAJA' => 'CAJA',
                                             'CIENTO' => 'CIENTO',
                                             'CONO' => 'CONO',
                                             'FOCO' => 'FOCO',
                                             'GALON' => 'GALON',
                                             'INHALADOR' => 'INHALADOR',
                                             'JUEGO' => 'JUEGO',
                                             'KG' => 'KG',
                                             'LITRO' => 'LITRO',
                                             'MCC' => 'MCC',
                                             'METRO' => 'METRO',
                                             'PAQUETE' => 'PAQUETE',
                                             'PAR' => 'PAR',
                                             'PIEZA' => 'PIEZA',
                                             'ROLLO' => 'ROLLO',
                                             'TUBO' => 'TUBO'],null,['class'=>'form-control']) !!}
            </div>
    	</div>
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="descripcion">Precio</label>
            	<input type="text" name="precio"  value="{{old('precio')}}" class="form-control" placeholder="Precio del Articulo...">
            </div>
    	</div>
    	
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>
    	</div>
    </div>

			{!!Form::close()!!}		
            
@endsection