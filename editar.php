<?php
$id = $_POST["id"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$cell = $_POST["cell"];
$curso = $_POST["curso"];
$turno = $_POST["turno"];
include 'Banco_Dados.php';
editar_usuario($id, $nome, $email, $cell, $curso, $turno);
?>