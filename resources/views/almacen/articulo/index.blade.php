@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Articulos    <a href="articulo/create"><button class="btn btn-success">Nuevo Articulo</button></a></h3>
		@include('almacen.articulo.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Categoria</th>
					<th>Unidad</th>
					<th>Precio</th>
					<th>Opciones</th>
				</thead>
               @foreach ($articulos as $art)
				<tr>
					<td>{{ $art->id_articulo}}</td>
					<td>{{ $art->nombre}}</td>
					<td>{{ $art->descripcion}}</td>
					<td>{{ $art->categoria}}</td>
					<td>{{ $art->unidad}}</td>
					<td>{{ $art->precio}}</td>
					<td>
						<a href="{{URL::action('ArticuloController@edit',$art->id_articulo)}}"><button class="btn btn-info">Editar</button></a>
                         
					</td>
				</tr>
				@include('almacen.articulo.modal')
				@endforeach
			</table>
		</div>
		{{$articulos->render()}}
	</div>
</div>

@endsection