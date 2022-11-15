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
        <div class="container-fluid">

            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../IMG/animado.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur eaque
                            quibusdam delectus molestias fugit quas commodi quam. Quaerat non quas nostrum libero iure
                            voluptas inventore adipisci debitis, fugiat laborum esse.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
            <div class="row p-3">
                <div class="col-md-4">
                    <div class="container">
                        <h5 class="card-title">Tipo de Entrega</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Default radio
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                                checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Default checked radio
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <h5 class="card-title">Descripcion:</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur eaque
                            quibusdam delectus molestias fugit quas commodi quam. Quaerat non quas nostrum libero iure
                            voluptas inventore adipisci debitis, fugiat laborum esse.</p>
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