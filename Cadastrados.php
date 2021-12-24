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
        <div >
        <?php
            include 'Banco_Dados.php';
            $result = get_usuarios();
            echo "<table id='cadastros'>";
            echo "<tr>";
            echo "<th> Nome </th>";
            echo "<th> E-mail </th>";
            echo "<th> Telefone </th>";
            echo "<th> Curso </th>";
            echo "<th> Turno </th>";
            echo "<th colspan ='2' height='20' width='30'>Ação </th>";
            echo "</tr>";
            if ($result->num_rows > 0) {
                 while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td height='45' width='70'>" . $row['nome'] . "</td>";
                    echo "<td width='150'>" . $row['email'] . "</td>";
                    echo "<td width='90'>" . $row['cell'] . "</td>";
                    echo "<td width='90'>" . $row['curso'] . "</td>";
                    echo "<td width='90'>". $row['turno']."</td>";
                    echo '<td ><a class="botao" href = "Editar_usuario.php?id='.$row['id'].'">Editar </a></td>';
                    echo '<td ><a class="botao" href="excluir.php?id='.$row['id'].'">Excluir </a></td>';
                    echo "</tr>";
                }
            }
            echo "</table>";
        ?>
        </div>
    </section>
    <footer>
        <div id="ifba" class="img"></div>
        <div id="jctob" class="img"></div>
        <div id="snct" class="img"></div>
    </footer>
</body>
</html>