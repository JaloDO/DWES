<?php
    /*MY CODE HERE*/
    require_once '../datos/datos.php';
    require_once '../datos/cabecera.php';
        
        $html="<div class='container'>";
        
        $html = $html."<table class='table table-responsive'>";
        $html = $html."<tr><th>NOMBRE</th><th>ID</th><th>DEPARTAMENTO</th><th>EMPLEADOS</th></tr>";
        foreach($datos as $empresa) {
            $html = $html."<tr>";
            $html = $html."<td>".$empresa["NOMBRE"]."</td>";
            $html = $html."<td>".$empresa["ID"]."</td>";
            $html = $html."<td>".$empresa["DEPARTAMENTO"]."</td>";
            $html = $html."<td>".$empresa["EMPLEADOS"]."</td>";
            $html = $html."</tr>";
          }
          $html = $html."</table></div></body></html>";
          echo $head,$html;
        ;
        