<?php
session_start();
require_once 'conexao.php';



if (isset($_POST['btn-deletar'])) {

    $id = mysqli_escape_string($conn, $_POST['id']);

    $sql = "DELETE FROM clientes WHERE id='$id'"; 

    if (mysqli_query($conn, $sql)) {
        $_SESSION['mensagem'] = "Removido com Sucesso";
        header('Location: index.php');
    } else {
        $_SESSION['mensagem'] = "Erro ao remover o produto";
        header('Location: index.php');
    }
}
