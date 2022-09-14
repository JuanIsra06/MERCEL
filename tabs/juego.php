<html>
    <head>
        <title>MERCEL</title>
        <link rel='stylesheet' type='text/css' href='../css/akinator.css'>
    </head>
    <body>
        <?php
            //Conectamos con la base de datos
            require '../conexion.php';
            $node = 1;
            if(isset($_GET['n'])){
                $node = $_GET['n'];
            }
            //Calcular los nodos para navegar en BD
            $nodeY = $node*2;
            $nodeN = ($node*2)+1;
        ?>
        <header>
            <h1>MERCEL</h1>
        </header>
        <main>
            <h2>Pregunta</h2>

            <?php
                //Consulta a la base de datos
                $consulta = "SELECT texto,pregunta FROM arbol WHERE nodo=" . $node . ";";
                $texto = '';
                $pregunta = true;
                $resultado;
                if($resultado = mysqli_query($enlace,$consulta)){
                    if($resultado->num_rows === 0){
                        echo 'Error nodo inexistente';
                    }
                    else{//Informacion sin errores
                        while($fila = mysqli_fetch_row($resultado)){
                            $texto = $fila[0];
                            $pregunta = $fila[1];
                        }
                        //Resultado
                        if($pregunta == FALSE){
                            echo "<div class='cont_pregunta'>";
                                echo "<h2>¿Has pensado en " . $texto . "?</h2>"; 
                            echo "</div>";

                            echo"<div class='cont_respuesta'>";
                                echo "<a class='boton' href='../index.php'>Sí</a>";
                                echo "<a class='boton' href='respuesta.php?n=" . $node . "&r=0&nom=".$texto."'>No</a>";
                            echo "</div>";
                        }
                        //Pregunta
                        else{
                            echo "<div class='cont_pregunta'>";
                                echo "<h2>¿Tu personaje ".$texto."?</h2>"; 
                            echo "</div>";
            
                            echo"<div class='cont_respuesta'>";
                                echo "<a class='boton' href='juego.php?n=".$nodeY ."'>Sí</a>";
                                echo "<a class='boton' href='juego.php?n=".$nodeN."'>No</a>";
                            echo "</div>";
                        }


                    }
                }
            ?>

        </main>

        <br>
        <br>

        <footer>
            <a href="../index.php">Regresar al inicio</a>
        </footer>

    </body>

</html>