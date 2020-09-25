<?php

    /*MY CODE HERE*/
    require_once '../datos/datos.php';
    require_once '../datos/cabecera.php';
    
    $empleados_departamento = [];

    foreach($datos as $empresa){
        
       if(array_key_exists($empresa["DEPARTAMENTO"], $empleados_departamento)){
            $nEmple = $empleados_departamento[$empresa["DEPARTAMENTO"]];
            $nEmple += $empresa["EMPLEADOS"];

       }else{
            $empleados_departamento [] = [$empresa["DEPARTAMENTO"] => $empresa["EMPLEADOS"]];
       }
        
    }

    /**
     * AQUI TENGO QUE HACER EL WHILW
     * PERO PRIMERO, TENGO QUE ARREGLAR EL FINAL DE MI ARCHIVO
     */
    
    $html="<div class='container'>";
    $html = $html."<table class='table table-responsive'>";
    $html = $html."<tr><th>DEPARTAMENTO</th><th>EMPLEADOS</th></tr>";

    while(current($empleados_departamento)){
        $html = $html."<tr>";
        $html = $html."<td>".key($empleados_departamento)."</td>";
        $html = $html."<td>".$empleados_departamento."</td>";
        $html = $html."</tr>";
        next($empleados_departamento);
    }
    $html = $html."</table></body></html>";
    
    echo $head, $html;
    print_r($empleados_departamento);
  
        