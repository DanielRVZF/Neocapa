<?php 
//print_r($_POST);
    if(empty($_POST["oculto"]) || empty($_POST["txtNombres"]) || empty($_POST["txtEdad"]) || empty($_POST["txtPregunta1"]) || empty($_POST["txtPregunta2"]) || empty($_POST["txtPregunta3"])){
       header('Location: index.php?mensaje=falta');
       exit();
    }

    include_once 'model/conexion.php';
    $nombres = $_POST["txtNombres"];
    $edad = $_POST["txtEdad"];
    $pregunta1 = $_POST["txtPregunta1"];
    $pregunta2 = $_POST["txtPregunta2"];
    $pregunta3 = $_POST["txtPregunta3"];


    $sentencia = $bd->prepare("INSERT INTO encuesta(nombre,edad,pregunta_1,pregunta_2,pregunta_3) VALUES (?,?,?,?,?);");
    $resultado = $sentencia->execute([$nombres,$edad,$pregunta1,$pregunta2, $pregunta3]);

    if ($resultado === TRUE) {
        header('Location: index.php?mensaje=registrado');
    } else {
        header('Location: index.php?mensaje=error');
       exit();
    }
    
?>