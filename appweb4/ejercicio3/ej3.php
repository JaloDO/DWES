<?php

    /*MY CODE HERE*/
    require_once '../datos/datos.php';
    require_once '../datos/cabecera.php';
        
    $dept = ["Contabilidad" => 0];
    $emple = [];
    $cont=0;
    
    foreach($datos as $empresa) {

        echo "Entrada:".++$cont." ";
        $cont2=0;
        echo $empresa["DEPARTAMENTO"];
        foreach($dept as $name){

            echo "Entrada: ".$cont.".".++$cont2." ";

            if($empresa["DEPARTAMENTO"]==$name["Departamento"]){
               $emple = [$empresa["DEPARTAMENTO"] => $empresa["EMPLEADOS"]];
               $dept = array_merge($dept, $emple);
                break; 
            }
            $dept[] = [$empresa["DEPARTAMENTO"] => $empresa["EMPLEADOS"]];  
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
        $html = $html."<td>".$row["Departamento"]."</td>";
        $html = $html."<td>".$row["Empleados"]."</td>";
        $html = $html."</tr>";
    }

    $html = $html."</table></div></body></html>";
    echo $head,$html;
        