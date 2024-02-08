<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principal Include</title>
</head>

<body>
    <h1>RAMA PRINCIPAL CURSO PHP</h1>
    <h2>Autor Kevin Lata - Editado desde GitHub</h2>
    <?php include_once "./inc/nav.php"; ?>
    <p>Agregando un parrafo a la rama de actualización.
        Ahora estoy modificando cambiosen el mismo parrafo para asi 
        poder ver los cambios en la master.
    </p>

    <p>
        Aqui estoy agregando otro parrafo para poder 
        enviarlo a la rama secundaria.
    </p>
    <?php include_once "./inc/footer.php"; ?>
</body>

</html>
