<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="../../resources/css/dashboard_styles.css" />
    <link rel="icon" type="image/png" href="../../resources/img/iconows.png" />


    <title>Primer uso</title>
</head>

<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="../../resources/img/LogoClaro.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form id="register-Form" method="post" autocomplete="on" >
                <input type="text" id="nombre" class="fadeIn" name="nombre" placeholder="Nombres">
                <input type="text" id="apellido" class="fadeIn " name="apellido" placeholder="Apellidos">
                <input type="text" id="username" class="fadeIn " name="username" placeholder="Nombre de usuario">
                <input type="password" id="password" class="fadeIn" name="password" placeholder="Contraseña">
                <input type="password" id="password2" class="fadeIn" name="password2" placeholder="Verifcar contraseña">


                <input type="submit" class="fadeIn fourth" value="Registrarme">
            </form>

        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../../app/controllers/dashboard/primer_uso.js"></script>
    <script type="text/javascript" src="../../resources/js/sweetalert.min.js"></script>
    <script src="../../app/helpers/components.js"></script>

</body>

</html>