<?php
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cell = $_POST["cell"];
    $curso = $_POST["curso"];
    $turno = $_POST["turno"];
    if($nome=="" || $email=="" || $cell=="" || $curso=="" || $turno==""){
        echo "Insira todos os Campos";
        header('location:Formulario.php');
    }
    include 'Banco_Dados.php';
    cadastrar($nome,$email,$cell,$curso,$turno);
?>