@extends('template.index')
@section('contenido')
<div class="container py-5">
	<div class="row">
		@foreach($productos as $producto)
			<div class="card col-sm-4" style="width: 18rem;">
			  <img class="card-img-top" src="{{asset('plugins/images/monitos.jpg')}}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title ">{{$producto->nombre}}</h5>
			    <p class="card-text">Precio Unit: ${{$producto->precio}} <br> Fecha Vencimiento: {{$producto->fecha_vencimiento}} </p>
			    <a href="producto/{{$producto->id}}" class="btn btn-primary">Comprar</a>
			  </div>
			</div>
		@endforeach
	</div>
</div>	
@endsection