<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="css/bootstrap.js"></script>	
</head>
<body>

<div class="container-fluid">
    <div class="alert alert-primary" role="alter">
       <h4> <strong>PHP - SESSION</strong> </h4>
    </div>
    <P>
    Generar una lista de alumnos (id, nombre, nota). y almacenarla por session para mostrar un listado.<br>
    Seguir el ejemplo enviado en clase de lista.php <br>
    Al finalizar el listado, mostrar el promedio de notas de todos los alumnos.<br><hr>
    </P>

    <form>
     <div class="form-row">
       <div class="col">
         <input type="text" class="form-control" placeholder="ID Alumno" id="inputID">
       </div>
       <div class="col">
         <input type="text" class="form-control" placeholder="Nombre de Alumno">
       </div>
       <div class="col">
         <input type="number" class="form-control" placeholder="Nota" min="1" max="20">
       </div>
       <!-- botones -->
       <div class="col">
            <button type="submit" class="btn btn-primary mb-2">Agregar</button>
            <button type="submit" class="btn btn-info mb-2">Limpiar</button>
       </div>
     </div>
    </form>    
<br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
        </tr>
      </tbody>
    </table>    




<footer>
 <hr>
    <strong> Esgar Fernandez Lluen </strong>
 <hr>  
</footer>


</div>
</body>
</html> 