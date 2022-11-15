<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/estilosIndex.css">
    <link rel="stylesheet" href="../Estilos/estilosVentanas.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/12f3bc59b2.js" crossorigin="anonymous"></script>
    <!-- Bootstrap core CSS -->
    <link href="./Estilos/bootstrap.min.css" rel="stylesheet">
    <title>Descripcion del Producto</title>
</head>

<body>
    <header class="site-header sticky-top py-1 bg-perzonalizado">
        <?php include 'header.php'?>
    </header>
    <main>

        <div class="card text-center bg-card-personalizado">
            <div class="card-header fs-3 fw-bold">
                Detalle del Producto
            </div>
            <div class="card-body">
                <div class="row p-4">
                    <div class="col-md-5">
                        <img class="img-fluid" width="700" height="700" src="../IMG/animado.jpg" role="img">
                        </img>
                    </div>
                    <div class="col-md-3 fs-3">
                        <h2 class="featurette-heading">Nombre del Producto</h2>
                        <ul class="table p-5">
                            <li class="row">PRODUCTOS</li>
                            <li class="row">Cantidad: </li>
                            <li class="row">Marca: </li>
                            <li class="row">Peso:</li>
                            <li class="row">Mascota:</li>
                        </ul>
                    </div>
                    <div class="col-md-4 fs-2">
                        <h2 class="featurette-heading">Precio:</h2>
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-primary fs-2">-</button>
                            <div class="d-block p-2 bg-dark text-white p-4 fs-2" width="500">1</div>
                            <button type="button" class="btn btn-danger fs-2">+</button>
                        </div>
                        <br>
                        <div class="p-3">
                            <a href="#" class="btn btn-primary fs-3">Agregar al Carrito</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card bg-card-personalizado">
            <div class="card-body">
                <div class="row p-4 fs-4">
                    <div class="col-md-5 ">
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                            </label>
                            <i class="fa-solid fa-car-side"></i>Despacho a Domicilio
                        </div>
                        <div class="form-check d-flex justify-content-center">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                            </label>
                            <i class="fa-sharp fa-solid fa-store"></i>Despacho en Tienda
                        </div>
                    </div>
                    <div class="col-md-7 text-center">
                        <h2 class="featurette-heading">Descripcion del Producto</h2>
                        <p class="lead">Descripcion de los productos.</p>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <footer class="container-fluid py-5 bg-perzonalizado text-dark d-flex justify-content-around">
        <?php include 'footer.php' ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="../js/FuncionNavegcion.js"></script>
    <script src="../js/FuncionLogin.js"></script>
</body>

</html>