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

          $Insertar = "INSERT into usuarios_hojas_de_vida_doc values ('$Usuario', '$Nombres', '$Apellidos', '$Contraseña', '$Correo', '$Teléfono')";
            
          
          $resultado = mysqli_query($conexion, $Insertar)
               or die ("Error al ingresar los registros");

          mysqli_close($conexion);
          echo "Datos Insertados Correctamente";

           ?>         
                   
      </body>
         
    </html>   