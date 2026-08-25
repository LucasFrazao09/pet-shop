<?php

include "..infra/conexao.php";
if (!isset($conexao) || $conexao == null) {
    die("Erro na conexão com o banco de dados");
}

$sql = "SELECT * FROM pets";
$resultado = mysqli_query($conexao, $sql);

if ($resultado === false) {
    die('Erro ao consular os usuários: ' . mysqli_error($conexao));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_pet = $_POST['nome_pet'];
    $raca_pet = $_POST['raca_pet'];
    $idade_pet = $_POST['idade_pet'];
    $tipo_pet = $_POST['tipo_pet'];
    $usuario_id = $_POST['usuario'];

    $sql = "INSERT INTO pets (nome_pet, raca_pet, idade_pet, tipo_pet, usuario_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conexao, $sql);

    if ($stmt === false) {
        die('Erro ao fazer a inserção do pet: ' . mysqli_error($conexao));
    }

    mysqli_stmt_bind_param($stmt, 'ssdsi', $nome_pet, $raca_pet, $idade_pet, $tipo_pet, $usuario_id);
     
    if (mysqli_stmt_execute($stmt)) {
        echo "Pet cadastrado com sucesso!";
        echo "<br><a href='../index.php'>Voltar</a>";
        exit();
    } else {
        echo "Erro ao cadastrar o Pet: " . mysqli_error($conexao);
    }

    mysqli_stmt_close($stmt);
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
            <h2>Cadastre um novo Pet!</h2>
            <form method="POST">
                <label for="nome_pet">Nome do Pet: </label>
                <input type="text" name="nome_pet" required>
                <label for="tipo">Gato ou Cachorro: </label>
                <input type="text" name="tipo_pet" required>
                <label for="raca_pet">Raça: </label>
                <input type="text" name="raca_pet" required>
                <label for="idade">Idade do Pet: </label>
                <input type="number" name="idade_pet" required>
                <label for="usuario">Dono: </label>
                    <option value="">Selecione um usuário</option>
                        <?php
                            while ($usuario = mysqli_fetch_assoc($resultado)) {
                            echo "<option value='{$usuario['id']}'>{$usuario['nome']}</option>";
                         }
                        ?>
                <button type="submit">Cadastrar</button>
            </form>
                <button type="button" onclick="window.location.href='../index.php'">Voltar</button>
        </div>
    </main>

</body>

</html>