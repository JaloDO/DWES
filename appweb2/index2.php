<html>
   <body>
      <?php
         $d = date("D");

         switch ($d){
            case "Mon":
               echo "Hoy es lunes";
               break;

            case "Tue":
               echo "Hoy es martes";
               break;

            case "Wed":
               echo "Hoy es miércoles";
               break;

            case "Thu":
               echo "Hoy es jueves";
               break;

            case "Fri":
               echo "Hoy es viernes";
               break;    

            case "Sat":
               echo "Hoy es sábado";
               break;

            case "Sun":
               echo "Hoy es domingo";
               break;

            default:
               echo "¿Me pregunto qué día es este?";
         }
      ?>
   </body>
</html>