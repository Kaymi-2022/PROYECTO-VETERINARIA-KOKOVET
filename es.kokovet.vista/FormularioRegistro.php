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

    <title>Formulario de Registro</title>
</head>

<body class="container fs-2">
    <main class="mx-auto p-3">

        <div class="row">

            <div class="fs-2 fw-bold">
                <p class="p-5 text-center">FORMULARIO DE REGISTRO</p>
            </div>

        </div>

        <div class="row">

            <div class="col-md-4">
                <img src="../IMG/budin.png" class="rounded mx-auto d-block " alt="..." width="100%" height="100%">
            </div>
            <div class="col-md-8">
                <form class="row g-3 p-2">
                    <div class="col-md-6">
                        <label for="inputDNI" class="form-label">DNI</label>
                        <input type="text" class="form-control" id="inputDNI" placeholder="DNI">
                    </div>
                    <div class="col-md-6">
                        <label for="inputNombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="inputNombre" placeholder="Nombre">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <label for="inputDireccion" class="form-label">Direccion</label>
                        <input type="text" class="form-control" id="inputDireccion" placeholder="Direccion">
                    </div>
                    <div class="col-md-6">
                        <label for="inputMascota" class="form-label">Nombre de su mascota</label>
                        <input type="text" class="form-control" id="inputMascota" placeholder="Nombre">
                    </div>
                    <div class="col-md-6">
                        <label for="formFile" class="form-label">Seleccione Foto Perfil</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </div>
                </form>
    
            </div>

        </div>

    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>