@extends('template.index')
@section('contenido')
<div class="container py-5">
	<div class="row">
		<div class="col-sm-12">
			<h5 class="font-weight-bold text-center">Facturacion de Productos</h5>
		</div>
		<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>id_producto</th>
			<th>Cantidad</th>
			<th>Valor Total</th>
			<th>&nbsp;</th>
			<th>&nbsp;</th>
		</thead>
		<tbody>
			@foreach($facturas as $factura)
				@foreach($productos as $producto)
					@if($producto->id == $factura->id_producto )
			<tr>
				<td> {{ $factura->id }} </td>
				<td> {{ $producto->nombre }} </td>
				<td> {{ $factura->cantidad }} </td>
				<td> {{ $factura->valor_total }} </td>
				<td><a href="javascript:cargaFactura('{{$factura->id}}','{{$factura->id_producto}}','{{ $factura->cantidad }}','{{ $factura->valor_total}}','{{ $producto->nombre}}','{{ $producto->precio}}')"  class="btn btn-success" onclick="">Visualizar</a></td>
				<td><a href="{{route('facturas.destroy', $factura->id)}}" class="btn btn-danger">Cancelar</a></td>
			</tr>
					@endif
				@endforeach
			@endforeach
		</tbody>
	</table>
	</div>
</div>
<button id="btnModalImageFactura" class="btn btn-primary" data-toggle="modal" href="#factura" style="display:none"></button>
	<div id="factura" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content" >
	        	<div class="modal-header">
			        <h5 class="modal-title">Modal Facturación</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          <span aria-hidden="true">&times;</span>
			        </button>
			    </div>
	            <div class="modal-body" align="center" id="bodyfactura"> 
	            	<table class="table table-dark">
					  <tbody>
					  	<tr>
					  		<td colspan="3">Factura</td>
					  		<td id="num_factura" colspan="1"></td>
					  	</tr>
					  	<tr>
					      <td>id</td>
					      <td>Producto</td>
					      <td>Cantidad</td>
					      <td>Precio</td>
					    </tr>
					    <tr>
					      <td id="cod_product">1</td>
					      <td id="nombre">Mark</td>
					      <td id="cantidad">Otto</td>
					      <td id="precio">@mdo</td>
					    </tr>
					    <tr>
					  		<td colspan="3">Precio Total</td>
					  		<td id="valorTotal" colspan="1"></td>
					    </tr>
					  </tbody>
					</table>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
@section('scripts')
<script>
		function cargaFactura(id,id_producto,cantidad,valor_total, nombrep, precioUni){
			$("#btnModalImageFactura").click();
			$("#cod_product").text( id_producto);
			$("#cantidad").text(cantidad);
			$("#num_factura").text("N° " + id);
			$("#nombre").text(nombrep);
			$("#precio").text("$ "+ precioUni);
			$("#valorTotal").text("$" + valor_total);
			//$('.modales').slideDown('slow');
		}
	</script>
@endsection