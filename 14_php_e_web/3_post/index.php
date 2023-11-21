<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>metodo post</title>
</head>

<body>
    <form action="cadastro.php" method="POST">
        <div>
            <input type="text" name="marca" placeholder="Marca do carro">
        </div>
        <div>
            <input type="number" name="preco" placeholder="Preço do carro">
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="teto solar">teto solar
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="pelicula">pelicula
        </div>
        <div>
            <input type="checkbox" name="opcionais[]" value="blindado">blindado
        </div>
        <div>
            <input type="submit" value="Enviar">
        </div>
    </form>
</body>

</html>