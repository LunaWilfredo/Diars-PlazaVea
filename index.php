<?php require_once 'Controller/loginController.php' ?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="GroupOne">

    <title>Plaza Vea Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="Assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-danger">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6 my-5 py-5">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h2 text-gray-900 mb-4">Bienvenido a Plaza Vea</h1>
                                        <h1 class="h6">Web Service</h1>
                                    </div>
                                    <form class="user" action="" method ="Post">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="user" aria-describedby="emailHelp"
                                                placeholder="Ingresa tu usuario" name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña" name="userpassword">
                                        </div>
                                        <div class="form-group">
                                            <select name="userrol" id="" value="" class="form-control">
                                                <option value="0">Selecionar</option>
                                                <option value="1">Administrador</option>
                                                <option value="2">Tienda</option>
                                                <option value="3">Almacen</option>
                                                <option value="4">Proveedor</option>
                                            </select>
                                        </div>
                                        
                                        <!-- <a href="body.php" >
                                            
                                        </a> -->
                                        <button class="btn btn-primary btn-user btn-block">Login</button>
                                    </form>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
<?php
if(isset($_POST) && $_POST != null){
    $usuario = $_POST['username'];
    $password = $_POST['userpassword'];
    $rol = $_POST['userrol'];

    $login = new LoginController;
    $login -> login($usuario,$password,$rol); 

    if($login == 'ok' && $login != null){
        echo '
        <div class="container">
            <div class="alert alert-success" role="alert">
                Inicio de sesion exitoso
            </div>
        </div>
        ';
    }else{
        echo '
        <div class="container">
            <div class="alert alert-danger" role="alert">
                Usuario o contraseña incorrecta!
            </div>
        </div>
        ';
    }
}
?>