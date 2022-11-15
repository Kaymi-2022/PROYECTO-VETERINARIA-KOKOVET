<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Veterinaria KOKOVET</title>
    <link rel="stylesheet" href="Estilos/estilosIndex.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">
    <script src="https://kit.fontawesome.com/12f3bc59b2.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="./Estilos/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="site-header sticky-top py-1 bg-perzonalizado">
        <div class="px-3 py-2 text-white">
            <div class="container-fluid">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                        <img src="../IMG/logo.png" alt="">
                    </a>
                    <ul class="nav col-lg-auto my-2 justify-content-center my-md-0 text-small fs-2">
                        <li>
                            <a href="#" class="nav-link text-dark">
                                <i class="fa-brands fa-square-facebook"></i>
                                Facebook
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-dark">
                                <i class="fa-brands fa-twitter"></i>
                                Twitter
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-dark">
                                <i class="fa-brands fa-whatsapp"></i>
                                Whatsapp
                            </a>
                        </li>
                        <li>
                            <a href="#" class="nav-link text-dark">
                                <i class="fa-brands fa-square-facebook"></i>
                                Messenger
                        </li>
                    </ul>
                    <div class="text-end">
                        <button type="button" class="btn btn-primary" onclick="abrirLogin()">Login</button>
                        <button type="button" class="redes btn btn-danger" onclick="abrirNavegador()"><i
                                class="fa-solid fa-bars"></i></button>
                    </div>
                    <div class="flex-shrink-0 dropdown align-center">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="user"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../IMG/MichaelMaster.jfif" alt="mdo" width="32" height="32"
                                class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small shadow" aria-labelledby="user">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div>
        </div>
        <!-- LOGIN -->
        <section class="contenedor-login">
            <form>
                <button class="close" onclick="cerrarLogin()"> X</button>
                <img src="../IMG/avatar.png" class="avatar" alt="Avatar Image">
                <h1>Ingrese Sesión</h1>
                <!--username-->
                <label for="username">Username</label>
                <input type="text">
                <!-- PASSWORD INPUT -->
                <label for="password">Password</label>
                <input type="password">
                <input type="submit" value="Ingresar">
                <a href="#">Recuperar su clave?</a><br>
                <a href="#">No tiene cuenta? Registrese</a>
            </form>
        </section>
    </header>

    <div id="nav" class="contenedor-modal">
        <div class="modal-navegacontenedor">
            <button class="close" onclick="cerrarVentana()"> X</button>
            <button type="button" class="boton menu" onclick="inicio()">
                <span>INICIO</span>
                <div class="icono">
                    <i class="fa-solid fa-marker"></i>
                </div>
            </button>
            <button type="button" onclick="mision()" class="boton menu">
                <span>NOSOTROS</span>
                <div class="icono">
                    <i class="fa-solid fa-marker"></i>
                </div>
            </button>
            <button type="button" onclick="vision()" class="boton menu">
                <span>CONTACTENOS</span>
                <div class="icono">
                    <i class="fa-solid fa-marker"></i>
                </div>
            </button>
            <button type="button" onclick="nosotros()" class="boton menu">
                <span>PET SHOP</span>
                <div class="icono">
                    <i class="fa-solid fa-marker"></i>
                </div>
            </button>
            <button type="button" onclick="producto()" class="boton menu">
                <span>PRODUCTOS</span>
                <div class="icono">
                    <i class="fa-solid fa-marker"></i>
                </div>
            </button>
        </div>
    </div>

    <script src="../js/FuncionNavegcion.js"></script>
    <script src="../js/FuncionLogin.js"></script>

</body>

</html>