@extends('template.index')
@section('contenido')
<div class="container py-5">
		<form action=""  method="POST" class="row" autocomplete="off">
			@csrf
			<div class="col-sm-12 center">
				<h5 class="font-weight-bold text-center">Producto a Comprar {{$producto->nombre}}</h5>
			</div>
			<div class="form-group col-md-5" hidden>
				<label for="id">id:</label>
				<input type="text" placeholder="" name="id" value="{{$producto->id}}" class="form-control" >
			</div>
			<div class="form-group col-md-5">
				<label for="nombre">Producto:</label>
				<input type="text" placeholder="Nombre Completo" name="nombre" onkeypress="return soloLetras(event);" onkeyup="return soloLetras(event);" value="{{$producto->nombre}}" class="form-control" disabled="">
			</div>
			<div class="form-group col-md-3">
				<label for="cantidad">Cantidad:</label>
				<input type="text" placeholder="Cantidad" name="cantidad" id="cantidad" class="form-control" value="{{$producto->cantidad}}" onkeypress="return soloNumeros(event);" onkeyup="return soloNumeros(event);">
			</div>
			<div class="form-group col-md-3">
				<label for="fecha_vencimiento">Fecha Vencimiento:</label>
				<input type="date" placeholder="Fecha" name="fecha_vencimiento" id="fecha_vencimiento" value="{{$producto->fecha_vencimiento}}" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label for="numero_lote">Num Lote:</label>
				<input type="text" placeholder="Numero de Lote" name="numero_lote" id="numero_lote" value="{{$producto->numero_lote}}" class="form-control">
			</div>
			<div class="form-group col-md-6">
				<label for="precio">Precio Unitario:</label>
				<input type="text" placeholder="Precio $" name="precio" id="precio" value="{{$producto->precio}}" onkeypress="return soloNumeros(event);" onkeyup="return soloNumeros(event);" class="form-control">
			</div>
			<div class="col-sm-12 center">
				<div class="row justify-content-center">
					<button type="submit" class="btn btn-primary col-md-3">Comprar</button>
				</div>
			</div>
		</form>
</div>
@endsection