@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Agregar Cantidad inicial de articulos</h3>
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
            	<label>Articulo</label>
            	<select name="id_categoria" class="form-control">
	            	
            	</select>
            	
            </div>
    	</div>
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="codigo">Cantidad Inicial</label>
            	<input type="text" name="descripcion" required value="{{old('descripcion')}}" class="form-control" placeholder="Descripcion del Articulo...">
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