<?php
    include('conexao.php');

    $data = mysqli_real_escape_string($conexao, $_POST['timestamp']);

    $inserir_data = "INSERT INTO corou (timestamp_coluna) VALUES ('$data')";

    $query_users = mysqli_query($conexao, $inserir_data);

    header('Location: https://corou.nicolascage.dev.br/');
    exit();
?>
