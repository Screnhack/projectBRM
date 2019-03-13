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
			<tr>
				<td> {{ $factura->id }} </td>
				<td> {{ $factura->id_producto }} </td>
				<td> {{ $factura->cantidad }} </td>
				<td> {{ $factura->valor_total }} </td>
				<td><a href="javascript:cargaFactura('{{$factura->id_producto}}','{{ $factura->cantidad }}','{{ $factura->valor_total}}')"  class="btn btn-success" onclick="">Visualizar</a></td>
				<td><a href="{{route('facturas.destroy', $factura->id)}}" class="btn btn-danger">Cancelar</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div>
<button id="btnModalImageFactura" class="btn btn-primary" data-toggle="modal" href="#factura" style="display:none"></button>
	<div id="factura" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content" >
	            <div class="modal-body" align="center" >  
	              <p id="factura"></p>
	            </div>
	        </div>
	    </div>
	</div>
@endsection
@section('scripts')
<script>
		function cargaFactura(id_producto,cantidad,valor_total){
			$("#btnModalImageFactura").click();
			$("#factura").append("<p>" + cantidad +"<p>");
			//$('.modales').slideDown('slow');
		}
	</script>
@endsection