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
      
          
          $Usuario = $_POST['Usuario']; 
          $Nombres = $_POST['Nombres'];   
          $Contraseña = $_POST['Contraseña']; 
         
          mysqli_query($conexion, "DELETE from administrador where Usuario='$Usuario'")
               or die ("Error al eliminar los datos");    
          
          mysqli_query($conexion, "DELETE from administrador where Nombres='$Nombres'")
               or die ("Error al eliminar los datos");    
          mysqli_query($conexion, "DELETE from administrador where Contraseña='$Contraseña'")
               or die ("Error al eliminar los datos");           
             
          
          mysqli_close($conexion);
          echo "Datos Eliminados Correctamente";

           ?>         
                   
      </body>
         
    </html>   