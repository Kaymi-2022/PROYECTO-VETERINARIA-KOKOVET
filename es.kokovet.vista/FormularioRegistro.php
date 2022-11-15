<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Estilos/estilosLogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/12f3bc59b2.js" crossorigin="anonymous"></script>

    <title>Descripcion del Producto</title>
</head>

<body class="container">
    <main class="mx-auto p-5">
        <img src="../IMG/animado.jpg" class="rounded mx-auto d-block" alt="..." width="50%" height="50%">
        <form class="row g-3 p-5">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nombre</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Nombre">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Apellidos</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Apellidos">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Password</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Passwor">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Direccion</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Direccion">
            </div>
            <div class="col-md-3">
                <label for="inputCity" class="form-label">Ciudad</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">Pais</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                </select>
            </div>
            <div class="col-md-5">
                <label for="formFile" class="form-label">Seleccione Foto Perfil</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Registrarse</button>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>