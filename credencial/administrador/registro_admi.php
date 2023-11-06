<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Bootstrap -->
    <link href="css/creative.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/variacion1.jpg" type="image/x-icon">

    <title>Creación de cuenta de administrador</title>

    <script>
        function Validar(f) { 
            if (f.email.value == ""){
            alert("Proporciona el Email"); 
            f.email.focus(); 
            return (false); 
            }

            if (f.password.value.length <= 5) {
                alert("Introduce la contraseña correcta de mínimo 6 caracteres."); 
                f.password.focus(); 
                return (false); 
            }

                if (f.password_2.value.length <= 5) {
                alert("Introduce la contraseña correcta de mínimo 6 caracteres."); 
                f.password_2.focus(); 
                return (false); 
            }
          

        }
    </script>
            
</head>

<body id="page-top">


    <!-- Menú de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light py-3">
        <div class="container"  >
            <a class="navbar-brand js-scroll-trigger" ><img src="img/variacion6.png" alt=""></a>
           <!-- <a class="navbar-brand js-scroll-trigger" ><img src="img/Logo_Vinculación.png" alt=""></a>-->
            <a class="navbar-brand js-scroll-trigger" ><img src="img/egresados.png" width="200px" alt=""></a>
          
        </div>
    </nav>


    <!-- Cabecera-->
    <section class="">
        <div class="container-fluid bg-dark text-white">

            <div class="col-lg-12 border">
                <h2 class="text-center pt-3 pb-3"> Credencial de Egresada y Egresado UAM</h2>

            </div>
        </div>
    </section>


    <!-- Contenido-->
    <section class="mt-5">



        <div class="container ">


            <div class="row">
                <div class="col-md-10 ">
                    <h2 class="pb-3">Creación de cuenta </h2>
                </div>
            </div>


            <div class="row  ">

                <div class="col-md-12 ">
                    <!-- Inicia Formulario-->
        <!-- Primera Fila -->
    <form autocomplete="on" method="POST" action="registrar1.php" onsubmit="return Validar(this);">
        <div class="form-row">
            
            <div class="form-group-4 col-md-4">
                    <label for="">Correo Electrónico:</label> 
                    <input type="email" class="form-control" name="email" id="email" placeholder="Escribe tu correo electrónico" >
            </div>

            <div class="form-group-4 col-md-4">
                    <label for="">Contraseña: </label> <br>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Escribe tu contraseña">
            </div>

            <div class="form-group-4 col-md-4">
                    <label for="">Confirmar contraseña:</label> <br>
                    <input type="password" class="form-control" name="password_2" id="password_2"  placeholder="Repite tu contraseña">
            </div>

            
       
            <div class="col-md-12 text-right"> <br><br>
             <button class="btn btn-dark text-white" type="Submit" name="Submit" value="Enviar">Crear cuenta</button>
         </div>

        </div>
    
    </form>
</div>
                
                    <!-- Termina Formulario -->
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="bg-dark fixed-bottom py-3">
        <div class="container">

            <div class="small text-center text-white">Universidad Autónoma Metropolitana</div>
        </div>
    </footer>

    <!-- Bootstrap y JavaScript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"></script>

</body>

</html>