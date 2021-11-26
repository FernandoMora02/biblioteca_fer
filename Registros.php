<?php
require_once 'conexion.php';

$message ='';

if (!empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['email'])) {
  $sql = "INSERT INTO users (user, pass, email) VALUES (:user, :pass, :email)";
  $stmt = $c->prepare($sql);
  $stmt->bindParam(':user',$_POST['user']);
  $password = password_hash($_POST['pass'], PASSWORD_BCRYPT);
  $stmt->bindParam(':pass', $password);
  $stmt->bindParam(':email',$_POST['email']);

  if ($stmt->execute()) {
    $message = 'Se ha creado un usuario exitosamente';
  }else {
    $message = 'lo siento ha ocurrido un error creando su contrasena ';
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="icon" href="">
    <title>SIGNUP</title>
  </head>
  <body>

    <header id="home">
<!--SECCIÓN DE LA BARRA DE NAVEGACIÓN-->
    <nav class="navbar navbar-expand-lg text-white navbar-light bg-dark px-4 border-bottom fixed-top" >
      <div class="container-fluid " >
      
        <a class="navbar-brand fs-5" href="index.html"> 
          <img src="" alt="">
        </a>
          

        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
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
                <i class="fa fa-user text-primary p-1  "></i>Signup</a>
            </li>
          </ul>
         
        </div>
      </div>

    </nav>
 <br>

  </header>

<!--LOGIN-->
<?php if (!empty($message)): ?>
 <p><?= $message?></p>
 <?php endif; ?>

<div class="container mt-5 mb-4">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-dark mt-4 p-4 text-white">
                    <form action="login.php" method="post" class="row g-3">
                        <h4 class="text-center">Create an Account</h4>

                        <div class="form-group">
                          <i class="fa fa-user text-white"></i>  <label for="user">Username</label>
                          <input type="text" name="user" class="form-control" id="username" placeholder="Username" required>
                        </div>
                        
                      <div class="form-group">
                        <div class="col-12">
                          <i class="fa fa-envelope-o "></i> <label for="email">Email</label>
                          <input type="text" name="email" class="form-control " id="emmail" placeholder="Email" required>
                      </div>
                    </div>


                      <div class="form-group">
                        <div class="col-12">
                          <i class="fa fa-key text-white"></i>    <label for="pass">Password</label>
                            <input type="password" name="pass" class="form-control" id="password" placeholder="Password" required>
                        </div>
                      </div>
                       
                        <div class="col-12 ">
                            <button type="submit" class="btn btn-dark  text-white float-end">Create Account</button>
                        </div>

                     
                    </form>
                    <hr class="mt-4">
                    <div class="col-12">
                        <p class="text-center mb-0">Do you have an account? <a class="st-log"  href="login.html">Login</a></p>
                    </div>
                   
                </div>
            </div>
        </div>
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

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>


  </body>
</html>