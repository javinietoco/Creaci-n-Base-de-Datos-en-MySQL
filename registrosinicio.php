<!DOCTYPE html>

<html lang="es">

 <meta charset="UTF-8">
      
    
    <body>
        
    <?php
     
          $Servidor = "localhost";
          $usuario = "root";
          $password = "javi0916";
          $bd = "almacenar";  

      $conexion = mysqli_connect($Servidor, $usuario, $password, $bd)          
               or die ("Error en la Conexión");
      
      $consulta = mysqli_query($conexion, "SELECT * from administrador")
               or die ("Error al traer los Datos");
      
      echo '<table border= "1">';
      echo '<tr>';
      echo '<th id="Usuario">Usuario</th>';  
      echo '<th id="Nombres">Nombres</th>';  
      echo '<th id="Contraseña">Contraseña</th>';  
      echo '</tr>';    

      while ($extraido = mysqli_fetch_array($consulta))
       {
         echo '<tr>';
         echo '<td>'.$extraido['Usuario'].'</td>'; 
         echo '<td>'.$extraido['Nombres'].'</td>'; 
         echo '<td>'.$extraido['Contraseña'].'</td>'; 
         echo '</tr>';
        }  

        mysqli_close($conexion);
        echo '</table>';

       ?>         
                   
      </body>
         
    </html>   