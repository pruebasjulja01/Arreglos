<?php

        /*
        Datos del alumno
        Curso
        Evidencia_AA2: Taller uso de arreglos
        */

        // A continuacion se muestra el arreglo(array) con los datos 

        $Colores = array (
            "Blanco" => "Transparencia y decencia",
            "Azul" => "Pureza y Tranquilidad",
           );


            $arregloLista = array(
                array("Nombres","Direccion","Telefono","Fecha de Cumpleaños","Color","Significado"),
                array("Juan Perez","Carrera 42c #68 c 39","3146898190","08/12/1999","Blanco"),
                array("Pedro Gonzales","Calle 8a #50 - 89","3202827678","07/04/2000", "Azul"),
                array("Luis Rodriguez","Carrera 89c # 12 - 02","3107890087","01/01/2002",""),
            );
           
        // El ciclo for nos recorre y evalua los array 

            for($i=1;$i<4;$i++){
                $color=$arregloLista[$i][4];
                  if(empty($Colores[$color])){
                      $arregloLista[$i][5]='No se encuentra el significado';
                }
            else {
                $arregloLista[$i][5]=$Colores[$color];
     
                }
            }
              ?>         
<!DOCTYPE html>    
<html>
<head>
        <title>evidencia2_JulianAndresFlorez</title>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
       
</head>

  <body>
    
                <h3>Uso de arreglos</h3>
         <table border="2" align="center" width="50%" cellspacing="0">
             
      <?php
    
        // El foreach recorre el arreglo 

             foreach ($arregloLista as $fila){
                echo "<tr>";
                   foreach ($fila as $celda){
                   echo "<td> $celda </td>";
                }
                echo "</tr>";
            }
      ?>
            </table>

    </body>
</html>

