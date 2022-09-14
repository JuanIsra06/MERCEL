<html>
    <head>
        <title>MERCEL</title>
        <link rel='stylesheet' type='text/css' href='../css/akinator.css'>
    </head>

    <body>

        <header>
            <h1>MERCEL</h1>
        </header>

        <main>
        <?php
            //Conectamos con la base de datos
            require '../conexion.php';
            $respuesta = $_GET['r'];
            $nodo = $_GET['n'];
            $nombre = $_GET['nom'];

            function resp($n, $p, $nom){
                echo "<div class='cont_pregunta'>";
                    echo "<form action='formulario.php' id='formulario' method='POST'>";
                        echo "<textarea id='nodo' name='nodo' form='formulario', style='display:none'>" .$n. "</textarea>";
                        echo "<textarea id='nom_ant' name='nom_ant' form='formulario', style='display:none'>" .$nom. "</textarea>";
                    
                        echo "<h2> ¿En quién habias pensado?</h2>";
                        echo "<textarea class='TA' id='nombre' name='nombre'  form='formulario' placeholder='Nombre'></textarea>";
                        echo "<h3> ¿En que se diferencia este personaje con ".$nom."?</h3>";
                        echo "<textarea class='TA' id='caract' name='caract' form='formulario' placeholder='Caracteristicas'></textarea>";

                        echo"<div>";
                            echo "<br>";
                            echo "<br>";
                            echo "<button class='boton2' type='submit' name='enviar'>Enviar</button>";
                        echo "<div/>";
                    echo "</form>";
                echo "<div/>";
            }

            resp($nodo, $respuesta, $nombre);
        ?>

        
        </main>

    </body>

</html>