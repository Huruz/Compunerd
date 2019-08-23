<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>
<body class="d-flex flex-column h-100">
    <!--Header-->
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-header">
            <a class="navbar-brand" href="#">
                <img src="{{asset('/images/pika.png')}}" width="30" height="30" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Productos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownServiciosLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Servicios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownServiciosLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Buscar producto" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>
    </header>

    <!--Contenido de la página-->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            @yield('content')
        </div>
    </main>


    <!--Footer-->
    <footer class="footer mt-auto py-3">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-xl-2">
                    <a class="nav-link" href="#">Inicio</a>
                    <a class="nav-link" href="#">Productos</a>
                    <a class="nav-link" href="#">Servicios</a>
                    <a class="nav-link" href="#">Nosotros</a>
                </div>
                <div class="col-xl-3">
                    <h3>Información</h3>
                    <p>
                        C. 43 #111A entre 78 y 80 Col. Pensiones IV Etapa<br>
                        Tel. 9123456<br>
                        Correo. compunerd@gmail.com<br>
                        Lunes a Viernes: 9am - 7pm<br>
                        Sábado: 9am - 2pm
                    </p>
                </div>
                <div class="col-xl-3 bg-dark text-white">
                    Mapa
                </div>
                <div class="col-xl-2">
                    <h3>Síguenos</h3>
                    <i class="fab fa-facebook fa-2x"></i>
                    <i class="fab fa-instagram fa-2x"></i>
                </div>
                <div class="col-xl-2">
                    Enviános un mensaje sin compromiso sobre tus dudas o comentarios.
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Enviar mensaje</button>
                </div>
            </div>
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>

    <!--Scripts-->
    <!--<script src="https://kit.fontawesome.com/dd238de584.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
