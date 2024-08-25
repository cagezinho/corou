<?php
    include('/conexao.php');

    $data = $_POST['timestamp'];

    $inserir_data = "INSERT INTO
        corou
        VALUE ('', '$date')";
    
    $query_users = mysqli_query($conexao, $inserir_data);

    header('location:https://corou.nicolascage.dev.br/');
?>