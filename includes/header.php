<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tienda Texas Electronics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Texas Electronics</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administrador
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="server/database.php">Crear base de datos</a>
                            <a class="dropdown-item" href="server/create_table.php">Crear tabla</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                    <div class="dropdown ml-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Inventario
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="create_form.php">Crear producto</a>
                            <a class="dropdown-item" href="edit_form.php">Actualizar producto</a>
                            <a class="dropdown-item" href="select_form.php">Consultar producto</a>
                            <a class="dropdown-item" href="delete_form.php">Eliminar producto</a>
                        </div>
                    </div>
                    <a class="nav-item nav-link" href="utilities.php">Utilidades</a>
                    <a class="nav-item nav-link" href="fases.php">Fases</a>
                </div>
            </div>
        </nav>
    </header>