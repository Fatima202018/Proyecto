<?php
include '../models/conexion.php';
include '../controllers/procesos.php';
include '../models/procesos.php';

$user = $_POST['user'];
$email = $_POST['email'];

$query1 = "SELECT COUNT(usuario) AS tuser FROM usuarios WHERE usuario = '$user'";

$query1 = "SELECT COUNT(email) AS temail FROM usuarios WHERE usuario = '$user' AND email = '$email'";

$buscaUser = CRUD($query1, "s");
$buscaEmail = CRUD($query2, "s");

foreach($buscaUser AS $result)
{
    echo $contUser = $result['tuser'];
}

foreach($buscaEmail AS $result)
{
    echo $contEmail = $result['temail'];
}
?>