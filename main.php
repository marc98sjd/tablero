 <html>
  <head>
    <?php
      $filas =  $_GET['fila'];
      $columnas = $_GET['columna'];
      $contador = 0;
      $columnas_pares=0;
    ?>
    <style type="text/css">
      td{
        height: 15px;
        width: 15px;
        padding: 20px;
      }
      .naranja{
        background-color: orange;
      }
      .amarilla{
        background-color: yellow;
      }
    </style>                                         
  </head>                                                                 
  <body>      
    <table border="5">
      <?php
        for($i=0;$i<$filas;$i++){
          echo "<tr>";
          $contador=$contador+1;
          if($contador%2==0){
            for($x=0;$x<$columnas;$x++){
              if($columnas_pares%2==0){
                $columnas_pares=$columnas_pares+1;
                echo "<td class='naranja'></td>";
              }
              else{
                $columnas_pares=$columnas_pares+1;
                echo "<td class='amarilla'></td>";
              }
            }
          }
          else{
            for($x=0;$x<$columnas;$x++){
              if($columnas_pares%2==0){
                $columnas_pares=$columnas_pares+1;
                echo "<td class='amarilla'></td>";
                $contador=$contador+1;
              }
              else{
                $columnas_pares=$columnas_pares+1;
                echo "<td class='naranja'></td>";
                $contador=$contador+1;
              }
            }
          }
          echo "</tr>";
        }
      ?>
    </table>
  </body>                                                                 
</html>