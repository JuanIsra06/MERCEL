<?php
    //Conectamos con la base de datos
    require '../conexion.php';

    $node = $_POST['nodo'];
    $name = $_POST['nombre'];
    $carac = $_POST['caract'];
    $nom_ant = $_POST['nom_ant'];

    $numRamIzq = $node*2;
    $numRamDer = ($node*2)+1;

    $nomRamIzq = $name;
    $nomRamDer = $nom_ant;

    $pregunta = $carac;

    //Guardar información en BD
    $consulta = "INSERT INTO arbol (nodo,texto,pregunta) VALUES('".$numRamIzq."', '".$nomRamIzq."', FALSE);";
    mysqli_query($enlace, $consulta);

    $consulta = "INSERT INTO arbol (nodo,texto,pregunta) VALUES('".$numRamDer."', '".$nomRamDer."', FALSE);";
    mysqli_query($enlace, $consulta);

    $consulta = "UPDATE arbol SET texto='".$pregunta."', pregunta=TRUE WHERE nodo='".$node."'";
    mysqli_query($enlace, $consulta);

    header("Location:../index.php");
?>