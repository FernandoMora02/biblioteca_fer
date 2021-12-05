<?php

    session_start();

    if (!isset($_SESSION['nameC'])) {
        echo'
        <script>
            alert("Por favor debes iniciar sesion");
            window.location = "login.php";
        </script>
        ';
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/styles.css">
    <meta name="keywords" content="technology,software,web design">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link rel="icon" href="">
    <title>Binvenido</title>
</head>
<body>

<header id="home">
    <!--NAVIGATION BAR SECTION-->
        <nav class="navbar navbar-expand-lg text-white navbar-light bg-dark px-4 border-bottom fixed-top" >
          <div class="container-fluid " >
          
            <a class="navbar-brand fs-5" href="index.html">
             <!--The<span class="text-primary"> Peach</span>--> 
              <img src="imagenes/LogoLibro.png" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5 text-center">
              
          <li class="nav-item">
              <a class="nav-link active text-primary" aria-current="page" href="#home">
                
                <i class="fa fa-home text-primary p-1 "></i>Home</a>
            </li>
              
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle " href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fa fa-user text-primary p-1  "></i>Usuario</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="Req_php/cerrar_sesion.php">cerrar sesion</a></li>      
                <li><hr class="dropdown-divider"></li>
              </ul>
            </li>
          </div>
    
        </nav>
     <br>
     <h1>Bienvenido a mi biblioteca</h1>
      </header>
    <h1>Bienvenido a mi biblioteca</h1>
    <a href="Req_php/cerrar_sesion.php">cerrar sesion</a>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

</body>
</html>