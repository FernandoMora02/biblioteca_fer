<?php

include 'conexion.php';

$nameC = $_POST['nameC'];
$email = $_POST['email'];
$user = $_POST['user'];
$pass = $_POST['pass'];
$pass = hash('sha512', $pass);

$query = "INSERT INTO users(nameC, email, user, pass) 
          VALUES('$nameC', '$email', '$user', '$pass')";

$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '
    <script>
        alert("Usuario almacenado exitosamente");
        window.location = "../index.html";
    </script>
    ';
}else {
    echo '
    <script>
        alert("Intentalo de nuevo, usuario no almacenado");
        window.location = "../index.html";
    </script>
    ';
}
 mysqli_close($conexion);

?>