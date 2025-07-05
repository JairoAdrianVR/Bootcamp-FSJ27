<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar alumno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include './views/layouts/navbar.php'?>
    <main class="container mt-2"> 
            <h2 class="text-center">Agregar nuevo alumno</h2>
        <section class="d-flex justify-content-center">
            <article class="card col-8" >
            <form class="form-control" action="./index.php?action=create" method="POST">
                <label class="form-label" for="">Nombre</label>
                <input class='form-control' type="text" name="nombre">
                <label class="form-label" for="">Edad</label>
                <input class='form-control' type="number" name="edad">
                <label class="form-label" for="">Correo</label>
                <input class='form-control' type="text" name="correo">
                <button class="btn btn-success mt-2" type="submit">Agregar</button>
            </form>
            </article>
        </section>
    </main>


</body>
</html>