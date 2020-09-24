    <?php
        $html1 = '';
        $html1 = $html1.'
        <!doctype html>
        <html lang="en">
        <head>
            <title>Ejercicio 1</title>
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <link rel="stylesheet" href="estilos/miEstilo.css" />
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> 
        </head>
        <body>

        <!-- Nav tabs -->
      <ul class="nav nav-tabs" id="navId">
          <li class="nav-item">
              <a href="../" class="nav-link active">HOME</a>
          </li>
          <!--
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Tareas</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="./ejercicio1/ej1.php">Ejercicio 1</a>
                  <a class="dropdown-item" href="./ejercicio2/ej2.php">Ejercicio 2</a>
                  <a class="dropdown-item" href="./ejercicio3/ej3.php">Ejercicio 3</a>
              </div>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" 
                href="#" role="button" aria-haspopup="true" aria-expanded="false">Recursos</a>
              <div class="dropdown-menu">
                  <a class="dropdown-item" href="./imagenes">Imagenes</a>
                  <a class="dropdown-item" href="./estilos">Estilos</a>
                  <a class="dropdown-item" href="./datos">Datos</a>
              </div>
          </li>
          -->
      </ul>
        ';
        /*MY CODE HERE*/
        $html2="<div class='container'>";
        require_once '../datos/datos.php';
        $html2 = $html2."<table class='table table-responsive'>";
        $html2 = $html2."<tr><th>NOMBRE</th><th>ID</th><th>DEPARTAMENTO</th><th>EMPLEADOS</th></tr>";
        foreach($datos as $empresa) {
            $html2 = $html2."<tr>";
            $html2 = $html2."<td>".$empresa["NOMBRE"]."</td>";
            $html2 = $html2."<td>".$empresa["ID"]."</td>";
            $html2 = $html2."<td>".$empresa["DEPARTAMENTO"]."</td>";
            $html2 = $html2."<td>".$empresa["EMPLEADOS"]."</td>";
            $html2 = $html2."</tr>";
          }
          $html2 = $html2."</div></body></html>";
          echo $html1,$html2;
        ;
        