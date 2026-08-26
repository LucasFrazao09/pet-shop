<?php

    include("../infra/conexao.php");

    if (isset($_POST['cadastrar'])) {

        $nome_pet = $_POST['nome_pet'];
        $raca_pet = $_POST['raca_pet'];     

    $sql = "INSERT INTO pets (nome_pet, raca_pet) VALUES (?, ?)";

    $stmt = $conexao->prepare($sql);
        

    }
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PET SHOP</title>
    <link rel="stylesheet" href="../style/style.css">
</head>

<body>

    <header>
        <h1>Pet Shop</h1>
    </header>

    <main>
        <div
            <h2>Cadastre um novo Pet!</h2> <br> <br>
            <form method="POST">
                <label for="nome_pet">Nome do Pet: </label>
                <input type="text" name="nome_pet" required> <br> <br>
                <label for="tipo">Gato ou Cachorro: </label>
                <input type="text" name="tipo_pet" required> <br> <br>
                <label for="raca_pet">Raça: </label>
                <input type="text" name="raca_pet" required> <br> <br>
                <label for="idade">Idade do Pet: </label>
                <input type="number" name="idade_pet" required> <br> <br>
                <label for="usuario">Dono: </label>
                <option value="">Selecione um usuário</option>
                
                <button type="submit">Cadastrar</button>
            </form>
            <button type="button" onclick="window.location.href='../index.php'">Voltar</button>
        </div>
    </main>

</body>

</html>