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
          $Apellidos = $_POST['Apellidos'];
          $Contraseña = $_POST['Contraseña'];
          $Correo = $_POST['Correo'];
          $Teléfono = $_POST['Teléfono'];
         
          mysqli_query($conexion, "DELETE from usuarios_notas_est where Usuario='$Usuario'")
               or die ("Error al eliminar los datos");    
          
          mysqli_query($conexion, "DELETE from usuarios_notas_est where Nombres='$Nombres'")
               or die ("Error al eliminar los datos");    
          
          mysqli_query($conexion, "DELETE from usuarios_notas_est where Apellidos='$Apellidos'")
               or die ("Error al eliminar los datos");    

          mysqli_query($conexion, "DELETE from usuarios_notas_est where Contraseña='$Contraseña'")
               or die ("Error al eliminar los datos");           

          mysqli_query($conexion, "DELETE from usuarios_notas_est where Correo='$Correo'")
               or die ("Error al eliminar los datos");
                          
          mysqli_query($conexion, "DELETE from usuarios_notas_est where Teléfono='$Teléfono'")
               or die ("Error al eliminar los datos");                  
          
          mysqli_close($conexion);
          echo "Datos Eliminados Correctamente";

           ?>         
                   
      </body>
         
    </html>   