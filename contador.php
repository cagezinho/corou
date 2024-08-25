<?php
    include('conexao.php');

    // Captura o timestamp enviado pelo formulário
    $timestamp = mysqli_real_escape_string($conexao, $_POST['timestamp']);

    // Converte o timestamp para o formato de data 'YYYY-MM-DD'
    $data = date('Y-m-d', $timestamp);

    $inserir_data = "INSERT INTO
    corou
    VALUE ('', '$data')";

    $query_users = mysqli_query($conexao, $inserir_data);

    header('Location: https://corou.nicolascage.dev.br/');
    exit();
?>
