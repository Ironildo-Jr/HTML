<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jornada Cientifica</title>
    <link rel="stylesheet" type="text/css" href="CSS.css">
</head>

<body>
    <header id="head" class="titulo">
        <h1>XIII Jornada Científica e Tecnológica do Oeste Baiano</h1>
    </header>
    <header id="header">
        <div id="ifba" class="img"></div>
        <div id="jctob" class="img"></div>
        <div id="snct" class="img"></div>
    </header>
    <section>
    <?php
        include 'Banco_Dados.php';
        $row = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") { 
            if($_POST["opcao"] == "sim" ){
                excluir_usuario($_POST["id"]);
            }else{
                header('Location:Cadastrados.php');
            }       
        } else {
            $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
            $result = get_usuario($id);
            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
            }
        }
    ?>
    <section >
        <div id="formu">
            <form name="formCadastro" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <label for="id">Código:</label>
                <input type="text" id="id" name="id" value="<?php echo $row['id']?>" readonly="true">
                <br>
                <br>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" placeholder="Digite seu nome" size=50 name="nome" value="<?php echo $row['nome']?>">
                <br>
                <br>
                <label for="email">E-mail:</label>
                <input type="email" id="email" placeholder="Digite o e-mail" size=50 name="email" value="<?php echo $row['email']?>">
                <br>
                <br>
                <label for="cell">Telefone:</label>
                <input type="number" id="cell" placeholder="Digite o Celular" size=20 name="cell" value=<?php $row['cell']?>>
                <br>
                <br>
                <label for="curso">Curso:</label>
                <input type="text" id="curso" placeholder="Digite o Curso" size=15 name="curso" value="<?php echo $row['curso']?>">
                <br>
                <br>
                <label for="turno">Turno:</label>
                <input type="text" id="turno" placeholder="Digite o Turno" size=15 name="turno" value="<?php echo $row['turno']?>">
                <br>
                <br>
                <legend>Tem certeza que deseja excluir o usuário:</legend>
                <input type="radio" id="sim" name="opcao" value="sim" />
                <label for="sim">Sim</label>
                <input type="radio" id="nao" name="opcao" checked value="nao" />
                <label for="sim">Não</label>
                <input type="submit" value="Confirmar">
                <br>
            </form>
        </div>
    </section>
    <footer>
        <div id="ifba" class="img"></div>
        <div id="jctob" class="img"></div>
        <div id="snct" class="img"></div>
    </footer>
</body>
</html>