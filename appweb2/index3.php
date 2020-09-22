<html>
   <body>
      <?php
         $a = 0;
         $b = 0;
         $html = "<table style='border:1px solid black;
                    border-collapse:collapse;
                    width:50%;height:50%;
                    text-align:center;'>";
         $html = $html."
             <thead style='background-color:lightgreen;'><tr>
                <th>i</th>
                <th>a</th>
                <th>b</th>
             </tr></thead>
             <tbody style='background-color:lightblue;'>";
         for( $i = 0; $i<5; $i++ ) {
             $a += 10;
             $b += 5;
             
             $html = $html."<tr>";
                $html = $html."<td>".($i+1)."</td>";
                $html = $html."<td>".$a."</td>";
                $html = $html."<td>".$b."</td>";
            $html = $html."</tr>";
         }
         $html=$html."</tbody></table>";
         echo $html;
         
         echo ("Al final del bucle a = ".$a." y b = ".$b);
      ?>
   </body>
</html>