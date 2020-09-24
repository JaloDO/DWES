<?php

    /*MY CODE HERE*/
    require_once '../datos/datos.php';
    require_once '../datos/cabecera.php';
        
        echo $head;
        echo "<div class='container'>";
        
        $departamentos = [];
        foreach($datos as $dept) {
            
            if(!in_array($dept["DEPARTAMENTO"],$departamentos)){
                $departamentos[] =  $dept["DEPARTAMENTO"];
            }
            
        }
        echo "<pre>".print_r($departamentos)."</pre>";
        echo"</div></body></html>";
        ; 
        
?>
        