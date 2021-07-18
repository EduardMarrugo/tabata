<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- Core theme CSS (includes Bootstrap)-->
  <link rel="stylesheet" href="css/styles.css">
</head>

<body class="text-center" style="background-color: grey;">

  <form class="form-signin" action="../controlador/accion/act_singup.php">

    <div class="mx-4 mt-5 my-5" style="border: grey solid; background-color: rgb(255, 255, 255);">
      <h1 class=" my-3 font-weight-normal">Register</h1>
      <div class="mb-3 row">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nombre" value="Escribe tu nombre...">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="correo" class="col-sm-2 col-form-label">Correo</label>
        <div class="col-sm-10 mb-3 ">
          <input class="form-control" id="correo" value="Ingresa tu correo...">
        </div>
        <div class="row">
          <label for="password" class="col-sm-2 col-form-label">Password</label>
          <div class="col-sm-10 mb-3 ">
            <input type="password" class="form-control" id="password" value="password">
          </div>
        </div>
      </div>

      <div class="mb-3 row">
        <label for="telefono" class="col-sm-2 col-form-label">Telefono</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="telefono" value="Escribe tu telefono...">
        </div>
      </div>
      <div class="mb-3 row">
        <label for="fechaNac" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
        <div class="col-sm-10 mb-3 ">
          <input class="form-control" id="fechaNac" value="Ingresa tu fecha de nacimiento...">
        </div>
        <div class="row">
          <label for="sexo" class="col-sm-2 col-form-label">Sexo</label>
          <div class="col-sm-10 mb-3 ">
            <input type="text" class="form-control" id="sexo" value="Ingrese si genero">
          </div>
        </div>
      </div>
      <div class="row">
        <label for="peso" class="col-sm-2 col-form-label">Peso</label>
        <div class="col-sm-10 mb-4 ">
          <input class="form-control" id="peso" value="Ingresa tu peso en kilogramo (kg)...">
        </div>
      </div>
    </div>
  </form>
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Programacion Web 2021</p>
    </div>
  </footer>

</body>

</html>