<?php
$nombre = $_GET['Nombre'];
$grupo = $_GET['grupo'];

echo "Nombre: " . $nombre . "<br/>";
echo "Grupo: " . $grupo . "<br/>";


$pregunta1 =$_GET['Pregunta1'];
$pregunta2 =$_GET['Pregunta2'];
$pregunta3 =$_GET['Pregunta3'];
$pregunta4 =$_GET['Pregunta4'];
$pregunta5 =$_GET['Pregunta5'];
$pregunta6 =$_GET['Pregunta6'];
$pregunta7 =$_GET['Pregunta7'];
$pregunta8 =$_GET['Pregunta8'];
$pregunta9 =$_GET['Pregunta9'];

$mensaje = "";

$puntos = 0;

if($pregunta1 == "v")
{
    $puntos = $puntos + 1;
}
if($pregunta2 == "v")
{
    $puntos = $puntos + 1;
}
if($pregunta3 == "v")
{
    $puntos = $puntos + 1;
}
if($pregunta4 == "v")
{
    $puntos = $puntos + 1;
}
if($pregunta5 == "v")
{
    $puntos = $puntos + 1;
}

if($pregunta6== "Bogota"){
    $puntos = $puntos + 1;
}

if($pregunta7== "Titan"){
    $puntos = $puntos + 1;
}

if($pregunta8== "España"){
    $puntos = $puntos + 1;
}

if($pregunta9 == "v")
{
    $puntos = $puntos + 2;
}


echo "Puntuacion= $puntos <br> $mensaje <br>";

?>