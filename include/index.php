<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&family=Sixtyfour&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Strike&family=Roboto+Slab:wght@100..900&family=Sixtyfour&display=swap" rel="stylesheet">
    <link rel="stylesheet" href=./css/style.css>
    <title>Pagina Principal Include</title>
</head>

<body>
    <h1>RAMA PRINCIPAL CURSO PHP</h1>
    <br>
    <h2>Autor Kevin Lata - Editado desde GitHub</h2>
    <br>
    <?php include_once "./inc/nav.php"; ?>
    <br>
    <p>Agregando un parrafo a la rama de actualización.
        Ahora estoy modificando cambiosen el mismo parrafo para asi
        poder ver los cambios en la master. <br>

        Me presento soy el Ingeniero en Sistemas de Información Kevin Lata Jácome, tengo 24 años de edad.
    </p>
    <br>
    <p>
        Aqui estoy agregando otro parrafo para poder
        enviarlo a la rama secundaria.
    </p>
    <?php include_once "./inc/footer.php"; ?>
</body>

</html>