<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
	<body>
		<div class="container-fluid">
			<form action="{{url('estud')}}" method="POST">
				@csrf
			<div class="form-row">
		    <div class="form-group col-sm-4">
		      <label for="inputNombre">Nombre</label>
		      <input type="text" class="form-control" name="inputNombre" placeholder="Nombre">
		    </div>
		    <div class="form-group col-sm-4">
		      <label for="inpuApellidos">Apellidos</label>
		      <input type="text" class="form-control" name="inputApellidos" placeholder="Apellidos">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="inputTelefono">Telefono</label>
		    <input type="number" class="form-control col-sm-2" name="inputTelefono" placeholder="6677299122">
		  </div>
		  
		  <fieldset class="form-group">
		    <div class="row">
		      <legend class="col-form-label col-sm-4 pt-0">Sexo</legend>
		      <div class="col-sm-10">
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="sexo" id="mujer" value="M" checked>
		          <label class="form-check-label" for="mujer">
		            Mujer
		          </label>
		        </div>
		        <div class="form-check">
		          <input class="form-check-input" type="radio" name="sexo" id="hombre" value="H">
		          <label class="form-check-label" for="hombre">
		            Hombre
		          </label>
		        </div>
		      </div>
		    </div>
		  </fieldset>

		  <div class="form-row">
		    <div class="form-group col-sm-4">
		      <label for="inputEdad">Edad</label>
		      <input type="number" class="form-control" name="inputEdad">
		    </div>

		    <div class="form-group col-sm-4">
		      <label for="inputSueldo">Sueldo</label>
		      <input type="double" class="form-control" name="inputSueldo">
		    </div>
		  </div>
			  <div class="form-group">
			    <div class="form-check">
			      <input class="form-check-input" type="checkbox" id="gridCheck">
			      <label class="form-check-label" for="gridCheck">
			        Check me out
		      	  </label>
		    	</div>
		 	 </div>
		  	<button type="submit" class="btn btn-primary">Agregar</button>
			</form>
		</div>
		<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>


	</body>
</html>
