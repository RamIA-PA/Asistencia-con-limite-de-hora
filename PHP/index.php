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
       $desde = 10; #
$hasta = 17; #  

$hora_actual = intval(date("H"));

if ($hora_actual >= $desde && $hora_actual < $hasta) {
    # Aquí la acción que se realice en el horario permitido
     //conexion con la base de datos y el servidor
	$mysqli = new mysqli("localhost", "root", "", "alum") or die("<h2>Error de Conexion</h2>");
	
	//obtenemos los valores del formulario
        
        
            
        $nombre = filter_input(INPUT_POST, 'nombre');
        $tema = filter_input(INPUT_POST, 'tema');
        $cedula = filter_input(INPUT_POST, 'cedula');
        $facultad = filter_input(INPUT_POST, 'facultad');
        $correo =  filter_input(INPUT_POST, 'correo');
        $telefono = filter_input(INPUT_POST, 'telefono');
        
        //ingresamos la informacion a la base de datos
        
       mysqli_query($mysqli, "INSERT INTO estudiantes VALUES ('','$nombre', '$tema', '$cedula', '$facultad', '$correo', '$telefono')"); 
       mysqli_close($mysqli);       
       
       
       echo 'registro exitoso';


} else {
    # Mostrar un aviso
    echo "No se permiten visitantes a esta hora del día";
}
       
    
       
       
	





// mensaje de verificacion y regreso al HTML
	
// otras versiones 

    //$cedula=$_POST['cedula']; 
    //$facultad=$_POST['facultad'];
    //$correo=$_POST['correo']; 
    //$telefono=$_POST['telefono'];
    //$req = (strlen($nombre)*strlen($cedula)*strlen($facultad)*strlen($correo)*strlen($telefono)) or die("No se han llenado todos los campos");
    //$sql = "INSERT INTO estudiantes(nombre, cedula, facultad, correo, telefono) VALUES ('$nombre', '$cedula', '$facultad', '$correo', $telefono)"  or die("<h2>Error Guardando los datos</h2>");
    //mysqli_query($mysqli, "INSERT INTO estudiantes VALUES ('','Brianqwqw', '213123213', 'sadsadsadsadsd', 'correo@gmail.com', 12312321321)");



        ?>

    </body>
</html>
