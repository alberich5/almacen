@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Articulos: {{ $articulo->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($articulo,['method'=>'PATCH','route'=>['almacen.articulo.update',$articulo->id_articulo],'files'=>'true'])!!}
            {{Form::token()}}
     <div class="row">
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="{{$articulo->nombre}}" class="form-control" >
            </div>
    	</div>
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label>Categoria</label>
            	<select name="id_categoria" class="form-control">
	            	@foreach($categorias as $cat)
	            		@if($cat->id_categoria == $articulo->id_categoria)
	            		<option value="{{$cat->id_categoria}}" selected >{{$cat->nombre}}</option>
	            		@else
	            		<option value="{{$cat->id_categoria}}" >{{$cat->nombre}}</option>
	            		@endif
	            	@endforeach
            	</select>
            	
            </div>
    	</div>
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="descripcion">Descripcion</label>
            	<input type="text" name="descripcion" required value="{{$articulo->descripcion}}" class="form-control">
            </div>
    	</div>
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="precio">Precio</label>
            	<input type="text" name="precio" required value="{{$articulo->precio}}" class="form-control" >
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