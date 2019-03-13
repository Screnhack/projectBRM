@extends('template.index')
@section('contenido')
<div class="container py-5">
	<div class="row">
		<div class="col-sm-12">
			<h5 class="font-weight-bold text-center">Inventario de Productos</h5>
		</div>
		<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>fecha Vencimiento</th>
			<th>Numero Lote</th>
			<th>Precio</th>
		</thead>
		<tbody>
			@foreach($productos as $producto)
			<tr>
				<td> {{ $producto->id }} </td>
				<td> {{ $producto->nombre }} </td>
				<td> {{ $producto->cantidad }} </td>
				<td> {{ $producto->fecha_vencimiento }} </td>
				<td> {{ $producto->numero_lote }} </td>
				<td> {{ $producto->precio }} </td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>
@endsection