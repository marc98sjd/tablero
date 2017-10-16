 <html>
  <head>
    <?php
      $filas =  $_GET['fila'];
      $columnas = $_GET['columna'];
      $contador = 0;
      $first_time= true;
      $columnas_pares=0;
      $a=65;
    ?>
    <meta charset="utf-8">
    <style type="text/css">
      td{
        height: 15px;
        width: 15px;
        padding: 20px;
      }
      .naranja{
        background-color: #fff8c9; 
      }
      .amarilla{
        background-color: #513000; 
      }
      .primero{
        background-color: lightgrey;
      }
    </style>                                         
  </head>                                                                 
  <body>      
    <table border="5">
      
      <?php
        if ($filas>26){
          echo'<script language="javascript">alert("Ep! Maxim 25 linies!");</script>'; 
        }else {
          for($i=$filas+1;$i>0;$i--){           
            $first_time2= true;
            $first_time3= true;
            echo "<tr>";
            $contador=$contador+1;
            if($contador%2==0){
              for($x=0;$x<$columnas+1;$x++){
                if($columnas_pares%2==0){  
                  $columnas_pares=$columnas_pares+1;
                  if($first_time2){
                    echo "<td class='primero'>".chr("$a")."</td>";
                    $first_time2=false;
                    $a=$a+1;
                  }else{
                    echo "<td class='naranja'></td>";
                  }
                  $contador=$contador+1;
                }
                else{
                  $columnas_pares=$columnas_pares+1;
                  if($first_time2){
                    echo "<td class='primero'>".chr("$a")."</td>";
                    $first_time2=false;
                    $a=$a+1;
                  }else{
                    echo "<td class='amarilla'></td>";
                  }
                  $contador=$contador+1;
                }
              }
            }
            else{
              if($first_time){
                for($x=0;$x<$columnas+1;$x++){                    
                    $columnas_pares=$columnas_pares+1;
                    if($first_time){
                      echo "<td class='primero'></td>";
                    }else{
                      echo "<td class='primero'>$x</td>";
                    }
                    $contador =$contador+1;
                    $first_time=false;  
                }
              }else{
                for($x=0;$x<$columnas+1;$x++){
                  if($columnas_pares%2==0){
                    $columnas_pares=$columnas_pares+1;
                    if($first_time3){
                      echo "<td class='primero'>".chr("$a")."</td>";
                      $first_time3=false;
                      $a=$a+1;
                    }else{
                      echo "<td class='amarilla'></td>";
                    }
                    $contador=$contador+1;
                  }
                  else{
                    $columnas_pares=$columnas_pares+1;
                    if($first_time3){
                      echo "<td class='primero'>".chr("$a")."</td>";
                      $first_time3=false;
                      $a=$a+1;
                    } else {
                      echo "<td class='naranja'></td>";
                    }                    
                    $contador=$contador+1;
                  }
                }
              }  
            }
            echo "</tr>";
          }
        }
      ?>
    </table>
  </body>                                                                 
</html>