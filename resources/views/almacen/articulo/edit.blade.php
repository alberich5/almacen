@extends ('layouts.admin')
@section ('contenido')
@if (Auth::user()->name == 'admin')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Articulosq: {{ $articulo->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($articulo,['method'=>'PATCH','route'=>['seguridad-usuario-update',$articulo->idarticulo],'files'=>'true'])!!}
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
            	<select name="idcategoria" class="form-control">
	            	@foreach($categorias as $cat)
	            		@if($cat->idcategoria == $articulo->idcategoria)
	            		<option value="{{$cat->idcategoria}}" selected >{{$cat->nombre}}</option>
	            		@else
	            		<option value="{{$cat->idcategoria}}" >{{$cat->nombre}}</option>
	            		@endif
	            	@endforeach
            	</select>
            	
            </div>
    	</div>
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="codigo">Codigo</label>
            	<input type="text" name="codigo" required value="{{$articulo->codigo}}" class="form-control">
            </div>
    	</div>
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="stock">Stock</label>
            	<input type="text" disabled name="stock" required value="{{$articulo->stock}}" class="form-control" >
            </div>
    	</div>
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="descripcion">Descripcion</label>
            	<input type="text" name="descripcion"  value="{{$articulo->descripcion}}" class="form-control" >
            </div>
    	</div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
                <label for="descripcion">Marca</label>
                <input type="text" name="marca"  value="{{$articulo->marca}}" class="form-control" style="text-transform: uppercase;">
            </div>
        </div>
        
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
    		<div class="form-group">
            	<label for="imagen">Imagen</label>
            	<input type="file" name="imagen"  class="form-control" >
            	@if(($articulo->imagen)!="")
            		<img src="{{asset('imagenes/articulos/'.$articulo->imagen)}}" alt="" height="300px" width="300px">
            	@endif
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
@else
    No Tienes permiso para esto
@endif          
		
@endsection