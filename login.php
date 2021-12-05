<?php
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <h6 class="nombre"></h6>
    <p class="nombre" >Fernando Mora Rojas</p>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/iconfont/material-icons.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<header id="home">
    <!--NAVIGATION BAR SECTION-->
        <nav class="navbar navbar-expand-lg text-white navbar-light bg-dark px-4 border-bottom fixed-top" >
          <div class="container-fluid " >
          
            <a class="navbar-brand fs-5" href="index.html">
             <!--The<span class="text-primary"> Peach</span>--> 
              <img src="imagenes/LogoLibro.png" alt="">
            </a>
              
    
            <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
    
    
                <li class="nav-item">
                  <a class="nav-link text-white" aria-current="page" href="index.html #home">
                    
                    <i class="fa fa-home p-1 text-white"></i>Home</a>
                </li>
               
           
                <li class="nav-item">
                  <a class="nav-link text-white" href="SecondPage.html">
                    <i class="fa fa-plus text-white p-1"></i>More</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active text-primary" href="#home">
                    <i class="fa fa-user text-primary p-1  "></i>Login</a>
                </li>
              </ul>
             
            </div>
          </div>
    
        </nav>
     <br>
      </header>
<body> 
    <div class="login-box">
        <img class="avatar" src="imagenes/libro1.jpeg" alt="logo de Fazt">
        <h2>Login</h2>
        <form action="Req_php/login_user.php" method="POST">
            <div>
                <label for="Username">Username</label>
                <input type="text" name="user" id="username" 
                class="form-control" placeholder="Nombre de Usuario">
               </div>

            <div>
                <label for="password">password</label>
                <input type="password" name="pass" id="password"
                     class="form-control " placeholder="Contraseña">
                    </div>
            
                    <div class="alert alert-danger mt-1" role="alert" id="msgLogin">
                            
            </div>

           
            <div class="card-footer">
                <input button type="submit" class="btn btn-danger" value="Log In"></button>
               </div>
                    <div class="col-12">
                        <p class="text-center mb-0">¿Aún no tienes cuenta? <a class="st-log" href="Registros.php">Registrate</a></p>
                        <a href="#">  ¿Olvidaste tu contraseña?</a><br>
                    </div>
        </form>
    </div>

    
    <footer>
        <div class="container-fluid bg-dark text-white p-2 text-center fs-4 fixed-bottom">
          BINARIUM - COPYRIGHT 2021
          <br>
          <a href="http://facebook.com" target="_blank">
            <i class="fa fa-facebook  text-white rounded fs-1"></i> 
          </a>
        
          <a href="http://twitter.com" target="_blank">
            <i class="fa fa-twitter  text-white rounded fs-1"></i> 
          </a>
        
          <a href="http://instagram.com" target="_blank">
            <i class="fa fa-instagram  text-white rounded fs-1"></i> 
          </a>
        </div>
    
          </footer>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</body>
</html>
