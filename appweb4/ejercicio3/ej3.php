<?php

    /*MY CODE HERE*/
    require_once '../datos/datos.php';
    require_once '../datos/cabecera.php';
        
    $dept = [];
    $dept_aux = [];
    $cont=0;
    
    foreach($datos as $empresa) {
        echo "Entrada:".++$cont." ";
        $cont2=0;
        foreach($dept as $name){
            echo "Entrada: ".$cont.".".++$cont2." ";
            if($empresa["DEPARTAMENTO"]==$name){
               $dept_aux = [$name => $empresa["EMPLEADOS"]];
               $dept = array_merge($dept, $dept_aux);
                break; 
            }
            $dept[] = [$name => $empresa["EMPLEADOS"]];  
        }
    }

    /**
     * Aqui haré un for para recorrer la lista dept["DEPARTAMENTO","EMPLEADOS"]
     * en una tabla
     */

    $html="<div class='container'>";
    $html = $html."<table class='table table-responsive'>";
    $html = $html."<tr><th>DEPARTAMENTO</th><th>EMPLEADOS</th></tr>";

    foreach($dept as $row){
        $html = $html."<tr>";
        $html = $html."<td>".$x["DEPARTAMENTO"]."</td>";
        $html = $html."</tr>";
    }

    $html = $html."</table></div></body></html>";
    echo $head,$html;
        