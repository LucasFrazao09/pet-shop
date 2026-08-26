<?php

if(isset($_POST['usuario'])) {
    header("Location: public/cadastrar_cliente.php");
    exit;
}

    if(isset($_POST['pets'])) {
    header("Location: public/cadastrar_pet.php");
    exit;
}

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Inicial</title>
</head>

<body>
    <header>
        <h1>PetShop do Lucas</h1>
    </header>

    <p>Qual cadastro você deseja realizar? </p>

    <form method="POST">
        <button type="submit" name="usuario">Cadastro de Usuário</button>

    </form>

    <form method="POST">
        <button type="submit" name="pets">Cadastro de Pets</button>
    </form>
</body>

</html>