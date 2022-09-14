<html>
    <head>
        <title>MERCEL</title>
        <link rel='stylesheet' type='text/css' href='css/akinator.css'>
    </head>
    <body>
        <?php
            //Conectamos con la base de datos
            require 'conexion.php';
        ?>
        <header>
            <h1>MERCEL</h1>
        </header>
        <main>
            <h2>Bienvenido</h2>
            <div>
                <h3>Piense en un personaje de la serie animada One Punch Man</h3>
            </div>

            <?php
                //Consulta a la base de datos
                echo"<div  class='cont_pregunta'>";
                    echo "<li><a class='boton2' href='tabs/juego.php'>Jugar</a></li>";
                echo "<div/>";
            ?>

        </main>

    </body>

</html>