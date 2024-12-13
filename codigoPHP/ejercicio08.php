<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../webroot/css/ejercicio01.css">
</head>
<body>
    <header>
        <h1>Mostrar la dirección IP del equipo desde el que estás accediendo</h1>
    </header>
    <main>
        <?php
        /*
         * @version 2024/10/1
         * @author Alex Asensio Sanchez                          
         */
            echo($_SERVER['REMOTE_ADDR']);
        ?>
    </main>
    <footer>
        <p><a href="../../index.html">Alex Asensio Sanchez</a></p>
        <p><a href="../indexProyectoTema3.php">Tema 3</a></p>
        <p><a target="blank" href="https://github.com/AlexAnacardo/204DWESProyectoTema3/tree/developer">GitHub del repositorio</a></p>
    </footer>
</body>
</html>