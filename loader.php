<?php

require_once('env/config.php');
require_once('env/basedatos.php');

require_once('clases/Consulta.php');
require_once('clases/Pelicula.php');
require_once('clases/ValidarPelicula.php');

$bd = BaseDatos::conexion();
$consulta = new Consulta();
$validar = new ValidarPelicula();