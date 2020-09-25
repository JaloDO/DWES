<?php

$nombre
$ciclo
$curso
$horario
$info
$observaciones

















$usuarioTO = new UsuarioTO();
$usuarioTO.setNombre($nombre);
$usuarioTO.setCiclo($ciclo);
$usuarioTO.setCurso($curso);
$usuarioTO.setHorario($horario);
$usuarioTO.setInfo($info);
$usuarioTO.setObservaciones($observaciones);


altaUsuario($usuarioTO);
