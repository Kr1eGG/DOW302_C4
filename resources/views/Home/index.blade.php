<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Only Arts</title>
</head>
<body class="bg-dark">
   <div class="container w-50 mt-5 rounded shadow">
    <div class="row">
        <div class="col bg-white">
            <h3 class="text-center py-5 fw-bold" >Inicio de Sesión</h3>
            <!--Inicio de Sesión-->
            <form action="#">
                <div class="mb-4">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="mb-4">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="d-grid">
                    <a href="{{route('home.principal')}}" class="btn btn-outline-primary fw-bold">Iniciar Sesión</a>
                </div>
                <br>
                <div class="d-grid">
                    <a href="{{route('home.principal')}}" class="btn btn-outline-success fw-bold">Iniciar Sesión como invitado</a>
                </div>
                <br>
            </form>
        </div>
    </div>
   </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
