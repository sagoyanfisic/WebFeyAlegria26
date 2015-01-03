<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>I.E Fe y Alegría 26</title>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <!-- Center -->
    <link rel="stylesheet" type="text/css" href="http://getbootstrap.com/examples/signin/signin.css">
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script> 
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
</head>
<body>
<form class="form-horizontal" role="form">
<!-- incio del boton -->
   <div class="form-group">
      <label class="col-sm-2 control-label">Cargo:</label>
        <div class="col-sm-2">
         <select class="form-control">
           <option>Administrador</option>
           <option>Contador</option>
           <option>Padre de familia</option>
    </select>
</div>
      </div>
         </div>
   <!-- fin del boton -->
   <div class="form-group">
      <label for="inputPassword" class="col-sm-2 control-label">
         Nombre y Apellido :
      </label>
      <div class="col-sm-6">
         <input class="form-control" id="disabledInput" type="text" 
            placeholder="Ingrese datos..." >
      </div>
   </div>
      <div class="form-group">
         <label for="disabledTextInput"  class="col-sm-2 control-label">
           Redaccion del acta :
         </label>
         <div class="col-sm-8">
            <textarea class="form-control" rows="3" placeholder="Siendo las 10 horas. del día 21 de abril..."></textarea>
        </div>
      </div>
      <div class="form-group">
         <label for="disabledSelect"  class="col-sm-2 control-label">
            Fecha y Día :
         </label>
         <div class="col-sm-10">

</div>
         </div>
      </div>
   <div class="form-group has-success">
      <label class="col-sm-2 control-label" for="inputSuccess">
         Input with success
      </label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="inputSuccess">
      </div>
   </div>
   <div class="form-group has-warning">
      <label class="col-sm-2 control-label" for="inputWarning">
         Input with warning
      </label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="inputWarning">
      </div>
   </div>
   <div class="form-group has-error">
      <label class="col-sm-2 control-label" for="inputError">
         Input with error
      </label>
      <div class="col-sm-10">
         <input type="text" class="form-control" id="inputError">
      </div>
   </div>

</form>



</body>
</html>
