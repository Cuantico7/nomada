<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta htt-equiv="X-UA-Compatible" content="IE=edge>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuarios</title>
</head>

<body>
    <h3>Listado de usuarios</h3>
    <?php

    foreach ($d->data as $usuario)

    print_r($usuario->id . "-" . $usuario->nombre . "<br>");

    ?>
    
    



</body>
</html>