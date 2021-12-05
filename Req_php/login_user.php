<?php
    session_start();

    include 'conexion.php';

    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $pass = $_POST= hash('sha512', $pass);

    $validar_login = mysqli_query($conexion, "SELECT * FROM users WHERE user='$user' 
    and pass='$pass'");

    if (mysqli_num_rows($validar_login) > 0) {
        $_SESSION['nameC']= $user;
        header("location: ../bienvenida.php");
        exit;
    }else {
        echo '
            <script>
                alert("Usuario no existe, por favor verififique los datos introducidos");
                window.lacation = "../index.html";
            </script>
        ';
        exit;
    }

?>