<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <a class="navbar-brand" href="/">BRM</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      	<li class="nav-item active">
		        	<a class="nav-link" href="{{ route('/')}}">Home</a>
		      	</li>
		    	<li class="nav-item active">
		        	<a class="nav-link" href="/proveedor">Proveedores</a>
		    	</li>
		    	<li class="nav-item active">
		        	<a class="nav-link" href="{{ route('producto.inventario')}}">Inventario</a>
		    	</li>
		    	<li class="nav-item active">
		        	<a class="nav-link" href="{{ route('factura.index')}}">Facturas</a>
		    	</li>
		      <!--<li class="nav-item">
		        <a class="nav-link" href="#">Link</a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Dropdown
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Action</a>
		          <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">Disabled</a>
		      </li>
		    </ul>-->
		  </div>
		</nav>		
	</header>
	@yield('contenido')
	<footer></footer>
	<script src="{{asset('plugins/jquery/jquery-3.2.1.slim.min.js')}}" ></script>
    <script src="{{asset('plugins/jquery/popper.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/bootstrap.min.js')}}"></script>
    @yield('scripts')
    <script type="text/javascript">
    	function soloNumeros(e) {
                var key = e.which || e.keyCode;
                if ((key < 48 && key !== 8 && key !== 13) || key > 57) {
                    e.preventDefault();
                }
            }
            function soloLetras(e) {
                key = e.keyCode || e.which;
                tecla = String.fromCharCode(key).toLowerCase();
                letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
                especiales = "8-37-39-46";

                tecla_especial = false;
                for (var i in especiales) {
                    if (key == especiales[i]) {
                        tecla_especial = true;
                        break;
                    }
                }

                if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                    return false;
                }
            }
    </script>
</body>
</html>