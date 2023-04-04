<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="../CSS/estilosinestilo.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" type="image/jpg" href="../CSS/images/AA.png">
        <title>Asistencia consulta</title>


    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mt-4">
                        <div class="card-header">
                            <h4>Consulta de asistencia</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-7">

                                    <form action="" method="GET">
                                        <div class="input-group mb-3">
                                            
                                            
                                            
                                            
                                            
                        
                                             
                                            






                                             <button type="submit" name="searchd" class ="n1" class="btn btn-primary" value="<?php if (isset($_GET['searchd'])) {
    echo $_GET['searchd'];
} ?>"  placeholder="">delete</button><!-- boton delete -->

<button disabled="true"></button>




 <button type="submit" name="search" class ="n2" class="btn btn-primary" value="<?php if (isset($_GET['search'])) {
    echo $_GET['search'];
} ?>"  placeholder="">Search</button><!-- boton buscar -->


                                             
                                            <input type="text" name="searcht"  value="<?php if (isset($_GET['searcht'])) {
    echo $_GET['searcht'];
} ?>" class="form-control" placeholder="">
                                           






                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card mt-4">
                        <div  class="card-body1">
                            <table class="table table-bordered">
                                <thead class="est">
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Tema</th>
                                        <th>Cedula</th>
                                        <th>Facultad</th>
                                        <th>Correo</th> 
                                        <th>Telefono</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody class="tb1">
                                    <?php
                                    $con = new mysqli("localhost", "root", "", "alum");

                                    if (isset($_GET['search'])) {
                                        $filtervalues = $_GET['searcht'];
                                        $query = "SELECT * FROM estudiantes WHERE CONCAT(nombre,tema,cedula,facultad,correo,telefono) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($con, $query);
                                        
                                     

                                        if (mysqli_num_rows($query_run) > 0) {
                                            foreach ($query_run as $items) {
                                                ?>
                                                <tr>
                                                    <td><?= $items['id']; ?></td>
                                                    <td><?= $items['nombre']; ?></td>
                                                    <td><?= $items['tema']; ?></td>
                                                    <td><?= $items['cedula']; ?></td>
                                                    <td><?= $items['facultad']; ?></td>
                                                    <td><?= $items['correo']; ?></td>
                                                    <td><?= $items['telefono']; ?></td>
                                                    <td><a href="modificar.php"  target="_blank" <button type="submit" name="searchu" class="btn btn-primary"                      
  placeholder="">update</button> </a> </td>
                                                </tr>
                                                <?php
                                            }
                                        } else {
                                            ?>
                                            <tr>
                                                <td colspan="4">Ningun registro fue encontrado</td>
                                            </tr>
        <?php
    }
}

?>
                                            
                                            
                                             <?php
                                    $con = new mysqli("localhost", "root", "", "alum");

                                   if (isset($_GET['searchd'])) {
                                        $filtervalues = $_GET['searcht'];
                                        $query = "DELETE  FROM estudiantes WHERE id='$filtervalues' ";
                                        $query_run = mysqli_query($con, $query);
                                        
                                     

                                       
    }
    
    
      
    
    

?>
                                            
                                            
                                             <?php
                                    $con = new mysqli("localhost", "root", "", "alum");

                                    
                                   if (isset($_GET['searchu'])) {
                                       window.open("aaaa");
                                        $filtervalues = $_GET['searcht'];
                                   

                                        $query = "";
                                        $query_run = mysqli_query($con, $query);
                                        
                                     

                                       
    }
    
    
    
    

?>
                                            
                                            
                                            
                                            
                                            


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>






        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>