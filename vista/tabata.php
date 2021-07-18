<?php
session_start();

if (!$_SESSION['NOMBRE_USUARIO']) {
    header("Location: ../vista/login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tabata</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-lg-5">
            <a class="navbar-brand" href="#!">Tabata</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../controlador/accion/act_singout.php">Cerrar Sesion</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="py-5">
        <div class="container px-lg-5">
            <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                <div class="m-4 m-lg-5">
                    <h1 class="display-5 fw-bold">Welcome <?php

                                                            echo $_SESSION['NOMBRE_USUARIO'];


                                                            ?></h1>
                    <p class="fs-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Distinctio tempora accusantium veritatis neque aliquid ipsa eum.</p>
                </div>
            </div>
        </div>
    </header>
    <!-- Page Content-->
    <section class="pt-4">
        <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-5">
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <a href="../vista/lista_tabatas.php">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-table"></i></div>
                            </a>

                            <h2 class="fs-4 fw-bold">Tabatas Guardadas</h2>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae consequatur, nisi error doloremque sit aspernatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <a href="../vista/crear_tabata.php">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-pencil-square"></i></div>
                            </a>
                            <h2 class="fs-4 fw-bold">Crear Tabata</h2>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae consequatur, nisi error doloremque sit aspernatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-bounding-box-circles"></i></i></div>
                            <h2 class="fs-4 fw-bold">Ejercicios</h2>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae consequatur, nisi error doloremque sit aspernatur.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-shuffle"></i></div>
                            <h2 class="fs-4 fw-bold">Tabata Aleatorio</h2>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae consequatur, nisi error doloremque sit aspernatur.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Programacion Web 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>