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
      
      $consulta = mysqli_query($conexion, "SELECT * from usuarios_hojas_de_vida_doc")
               or die ("Error al traer los Datos");
      
      echo '<table border= "1">';
      echo '<tr>';
      echo '<th id="Usuario">Usuario</th>';  
      echo '<th id="Nombres">Nombres</th>';  
      echo '<th id="Apellidos">Apellidos</th>';  
      echo '<th id="Contraseña">Contraseña</th>';  
      echo '<th id="Correo">Correo</th>';  
      echo '<th id="Teléfono">Teléfono</th>';  
      echo '</tr>';    

      while ($extraido = mysqli_fetch_array($consulta))
       {
         echo '<tr>';
         echo '<td>'.$extraido['Usuario'].'</td>'; 
         echo '<td>'.$extraido['Nombres'].'</td>'; 
         echo '<td>'.$extraido['Apellidos'].'</td>'; 
         echo '<td>'.$extraido['Contraseña'].'</td>'; 
         echo '<td>'.$extraido['Correo'].'</td>'; 
         echo '<td>'.$extraido['Teléfono'].'</td>'; 

         echo '</tr>';
        }  

        mysqli_close($conexion);
        echo '</table>';

       ?>         
                   
      </body>
         
    </html>   