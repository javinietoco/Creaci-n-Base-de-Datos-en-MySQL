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
      

          $Contraseña = $_POST['Contraseña'];
          $Nombres = $_POST['Nombres'];   
          
         
          mysqli_query($conexion, "UPDATE usuarios_hojas_de_vida_doc set Nombres='$Nombres' where Contraseña='$Contraseña'")
               or die ("Error al actualizar");    
                  
          mysqli_close($conexion);
          echo "Datos Actualizados Correctamente";

           ?>         
                   
      </body>
         
    </html>   