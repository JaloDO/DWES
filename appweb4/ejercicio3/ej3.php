<?php

    /*MY CODE HERE*/
    require_once '../datos/datos.php';
    require_once '../datos/cabecera.php';
    
    $lista_departamentos = [];
    $empleados_departamento = [];

    foreach($datos as $dept) {
            
        if(!in_array($dept["DEPARTAMENTO"],$lista_departamentos)){
            $lista_departamentos[] =  $dept["DEPARTAMENTO"];
        }   
    }
    /*..................................................................*/ 

    foreach($datos as $empresa){
        $dept_name = $empresa["DEPARTAMENTO"];
        echo "ID: ".$empresa["ID"];

        for($i=0; $i<sizeof($lista_departamentos); $i++){
            echo "Registro: ".$i;
            if($dept_name == $lista_departamentos[$i]){
                $auxiliar = [$dept_name => $empresa["EMPLEADOS"]];
        }
        $empleados_departamento = array_merge($empleados_departamento, $auxiliar);
    }

    /**
     * AQUI TENGO QUE HACER EL WHILW
     * PERO PRIMERO, TENGO QUE ARREGLAR EL FINAL DE MI ARCHIVO
     */
    
    $html="<div class='container'>";
    $html = $html."<table class='table table-responsive'>";
    $html = $html."<tr><th>DEPARTAMENTO</th><th>EMPLEADOS</th></tr>";
    
    echo $head;
    echo "<pre>";
        print_r($empleados_departamento);
    echo"</pre></div></body></html>";
        