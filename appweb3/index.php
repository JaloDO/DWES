<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="miEstilo.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>Tabla calificaciones</title>
    </head>
    
    <body>

        <?php
        
        $a;$b;
        $html = "<div class='container marco1'>";
        $html = $html."<p class='sin_margen'>Nota Final = (Extraordinaria x 80%) + (Ordinaria x 20%)</p>";
        $html = $html."<p class='small sin_margen'>Nota Extraordinaria = Columna, Nota Ordinaria = Fila</p>";
        $html = $html."<table class='table centrado'>";
        $html = $html."<thead class='fondo_1'>
                    <tr><th class='fondo_empty' ></th>
                    <th>1</th><th>2</th>
                    <th>3</th><th>4</th><th>5</th>
                    <th>6</th><th>7</th><th>8</th>
                    <th>9</th><th>10</th>
                    </tr></thead>
                    <tbody class='fondo_1'>";

        for($i=1; $i<5; $i++){
            $a = 0;$b = 0;
            $a = $i * 0.2;
            $html = $html."<tr><th>".$i."</th>";
            for($j=1; $j<11; $j++){
                $b = $j * 0.8;
                $res = $a + $b;
                if($res<5){
                    $html = $html."<td class='sus_2'>".$res."</td>";
                }
                else{
                    $html = $html."<td class='ap_1'>".$res."</td>";
                }
                
            }
            $html = $html."</tr>";
        }
        $html = $html."</tbody></table></div>";

        echo $html;


        ?>
    </body>
</html>