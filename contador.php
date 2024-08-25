<?php
    include('conexao.php');

    $timestamp = mysqli_real_escape_string($conexao, $_POST['timestamp']);

    $data = date('Y-m-d H:i:s', $timestamp);

    $inserir_data = "INSERT INTO
    corou
    VALUE ('', '$date')";

    $query_users = mysqli_query($conexao, $inserir_data);

    header('Location: https://corou.nicolascage.dev.br/');
    exit();
?>
