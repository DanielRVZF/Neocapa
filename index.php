<?php include 'template/header.php' ?> 

<?php 
    include_once "model/conexion.php";
    $sentencia = $bd -> query("select * from encuesta");
    $encuesta = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //print_r($persona)
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <!-- Inicio Alertas -->
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'falta'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Rellenar todos los campos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?>

           <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'registrado'){
            ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Registrado!</strong> Se agregaron los datos.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 
            
            <?php 
                if(isset($_GET['mensaje']) and $_GET['mensaje'] == 'error'){
            ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> Vuelve a intentar.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php 
                }
            ?> 
            <!-- Fin Alertas -->
            <div class="card">
                <div class="card-header">
                    Lista de Personas
                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Mencione una afectación de la salud que puede generar al entrar en contacto con las sustancias químicas</th>
                                <th scope="col">Mencioné las características de los químicos que corresponden al grupo de oxidantes </th>
                                <th scope="col">¿El símbolo de llamas hace referencia a que químicos?</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($encuesta as $dato){
                            ?>
                            <tr>
                                <td scope="row"><?php echo $dato->codigo;?></td>
                                <td><?php echo $dato->nombre;?></td>
                                <td><?php echo $dato->edad;?></td>
                                <td><?php echo $dato->pregunta_1;?></td>
                                <td><?php echo $dato->pregunta_2;?></td>
                                <td><?php echo $dato->pregunta_3;?></td> 
                            </tr>
                            <?php 
                            }
                            ?>
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar Respuesta:
                </div>
                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-m3">
                        <label class="form-label">Nombres:</label>
                        <input type="text" class="form-control" name="txtNombres" autofocus required>
                    </div>
                    <div class="mb-m3">
                        <label class="form-label">Edad:</label>
                        <input type="number" class="form-control" name="txtEdad" autofocus required>
                    </div>
                    <div class="mb-m3">
                        <label class="form-label">Mencione una afectación de la salud que puede generar al entrar en contacto con las sustancias químicas:</label>
                        <input type="text" class="form-control" name="txtPregunta1" autofocus required>
                    </div>
                    <div class="mb-m3">
                        <label class="form-label">Mencioné las características de los químicos que corresponden al grupo de oxidantes:</label>
                        <input type="text" class="form-control" name="txtPregunta2" autofocus required>
                    </div>
                    <div class="mb-m3">
                        <label class="form-label">¿El símbolo de llamas hace referencia a que químicos?:</label>
                        <input type="text" class="form-control" name="txtPregunta3" autofocus required>
                    </div>

                    <div class="d-grid">
                        <input type="hidden" name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

 <?php include 'template/footer.php' ?>