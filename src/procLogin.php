<?php 
include '../app/model/User.php';

$user = new User();

$nom = $_REQUEST["nom"];
$pass = $_REQUEST["pass"];

$user->setUserName($nom);
$user->setPass($pass);

$resultado = $user->login();