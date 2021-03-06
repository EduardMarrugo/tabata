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
    <script src="js/librerias/jquery-3.3.1.min.js"></script>
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
                    <li class="nav-item"><a class="nav-link" href="../controlador/accion/act_signout.php">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <!-- <div class="p-4 p-lg-5 bg-light rounded-3 text-center">

                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">Tabatas</h1>
                </div>

            </div> -->
            <div>
                <div>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nombre</th>
                                <th>Preparaci??n</th>
                                <th>Actividad</th>
                                <th>Descanso</th>
                                <th>Series</th>
                                <th>Rondas</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="list-group">

                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div id="list-group">
            </div> -->
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar Tabata</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-signin" method="post"
                                action="../controlador/accion/act_editarTabatas.php">

                                <input name="idTabata" type="text" id="idTabata" readonly class="form-control" autofocus>

                                <input name="nombreTabata" type="text" id="nombreTabata" class="form-control mt-2"
                                    placeholder="Nombre para la tabata" autofocus>

                                <input name="tPreparacion" type="number" id="tPreparacion" class="form-control mt-2"
                                    placeholder="Tiempo de preparacion" autofocus>

                                <input name="tActividad" type="number" id="tActividad" class="form-control mt-2"
                                    placeholder="Tiempo de actividad">

                                <input name="tDescanso" type="number" id="tDescanso" class="form-control mt-2"
                                    placeholder="Tiempo de descanso">

                                <input name="numSeries" type="number" id="numSeries" class="form-control mt-2"
                                    placeholder="Cantidad de series">

                                <input name="numRondas" type="number" id="numRondas" class="form-control mt-2"
                                    placeholder="Cantidad de rondas">

                                <div class="checkbox mb-3">
                                </div>

                                <button class="btn btn-lg btn-primary" type="submit">
                                    Guardar
                                </button>
                                <button type="button" class="btn btn-lg btn-secondary btn-block" data-bs-dismiss="modal">
                                    Close
                                </button>


                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
    </header>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="../vista/js/logica/tabatasGuardadas.js"></script>
</body>

</html>