<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    <body>
       <?php
       // hora definida
        date_default_timezone_set("America/Mexico_City");
       // limitaciones de hora 
       $desde = 0; #
$hasta = 24; #  

$hora_actual = intval(date("H"));

if ($hora_actual >= $desde && $hora_actual < $hasta) {
    # Aquí la acción que se realice en el horario permitido
     //conexion con la base de datos y el servidor
	$mysqli = new mysqli("localhost", "root", "", "alum") or die("<h2>Error de Conexion</h2>");
	
	//obtenemos los valores del formulario
        
        
        $id = filter_input(INPUT_POST, 'id');
        $nombre = filter_input(INPUT_POST, 'nombre');
        $tema = filter_input(INPUT_POST, 'tema');
        $cedula = filter_input(INPUT_POST, 'cedula');
        $facultad = filter_input(INPUT_POST, 'facultad');
        $correo =  filter_input(INPUT_POST, 'correo');
        $telefono = filter_input(INPUT_POST, 'telefono');
        
        //ingresamos la informacion a la base de datos
        
       $query = "UPDATE estudiantes SET nombre='$nombre',tema='$tema',cedula='$cedula',facultad='$facultad',correo='$correo',telefono='$telefono' where id='$id'";
       
       $query_run = mysqli_query($mysqli, $query); 


echo 'has modificado los datos';

} else {
    # Mostrar un aviso
    echo "No se permiten visitantes a esta hora del día";
}
       
    
       
       
	







        ?>

    </body>
</html>
