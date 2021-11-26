<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'bibioteca_fer';


try{
    $c = new PDO("mysql:host={$server};dbname={$database}", $username, $password);
    $c->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $c;
}catch (PDOExcpetion $e) {
    //throw $th;
    exit($e->getMessage());
}

?>
