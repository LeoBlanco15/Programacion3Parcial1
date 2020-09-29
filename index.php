<?php
require_once './Clases/User.php';
require __DIR__ . '/vendor/autoload.php';
use \Firebase\JWT\JWT;

$key = "primerparcial";
$payload = array(
    "iss" => "http://example.org",
    "aud" => "http://example.com",
    "iat" => 1356999524,
    "nbf" => 1357000000
);
$jwt = JWT::encode($payload, $key);
print_r($jwt);



$method = $_SERVER['REQUEST_METHOD'];
$path = $_SERVER['PATH_INFO'];

$email = $_POST['email']??'usuario@email.com';
$usuario = $_POST['usuario']??'usuario';
$password = $_POST['password']??'password';
$foto = $_POST['foto']??null;

$User = new User($email,$usuario,$password,$foto);

//var_dump($User);