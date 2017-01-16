<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>template</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="public/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    </head>
    <body>

        <header>
            <img src="public/img/logo.png" alt="ISMAELJDz" width="170px">
        </header>

        <?php include "modules/navegacion.php" ?>

        <section>

            <?php

                $mvc = new MvcController();
                $mvc->enlacesPaginasController();

            ?>

        </section>

    </body>
</html>
