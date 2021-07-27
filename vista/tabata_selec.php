<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="../vista/tabata.php">Tabata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="../vista/tabata.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../controlador/accion/act_singout.php">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Preparación</th>
                                <th>Actividad</th>
                                <th>Descanso</th>
                                <th>Series</th>
                                <th>Rondas</th>
                            </tr>
                        </thead>

                        <tbody id="list-group-selec">

                        </tbody>
                    </table>
                </div>
                <button class="p-4 rounded-3">Iniciar</button>
                
                <button class="p-4 rounded-3">Pausar</button>
            </div>
        </div>
    </header>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="../vista/js/logica/verTabata.js"></script>
    <script src="../vista/js/logica/tabata.js"></script>
</body>

</html>