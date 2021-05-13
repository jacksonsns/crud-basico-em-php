<?php
session_start();
include_once 'conexao.php';

if(isset($_POST['btn-adicionar'])){
    $nome = mysqli_escape_string($conn, $_POST['nome']);
    $sobrenome = mysqli_escape_string($conn, $_POST['sobrenome']);
    $cpf = mysqli_escape_string($conn, $_POST['cpf']);
    $email = mysqli_escape_string($conn, $_POST['email']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);

    $sql = "INSERT INTO clientes (nome, sobrenome, cpf, email, senha) VALUES ('$nome', '$sobrenome', '$cpf', '$email', '$senha')";

    if(mysqli_query($conn, $sql)){
        $_SESSION['mensagem'] = "Cadastrado com Sucesso!";
        header('Location: index.php');
    }else{
        $_SESSION['mensagem']="Erro ao cadastrar, tente mais tarde!";
        header('Location: index.php');
    }
}