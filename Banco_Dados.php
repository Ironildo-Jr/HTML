<?php
    function conectar(){
        $conn = new mysqli("localhost", "root","","jornada");
        if ($conn->connect_error){
            echo "Connection Failed";
        }
        return $conn;
    }

    function cadastrar($nome,$email,$cell,$curso,$turno){
        $conn = conectar();
        $stmt = $conn->prepare("insert into Usuarios(nome,email,cell,curso,turno) values(?,?,?,?,?)");
        $stmt->bind_param("ssiss",$nome,$email,$cell,$curso,$turno);   
        $stmt->execute();
        mysqli_close($conn);
        header('Location:index.html');
    }

    function get_usuarios(){
        $conn = conectar();
        $result = $conn->query("select * from Usuarios order by nome");
        mysqli_close($conn);
        return $result;
    }

    function get_usuario($id){
        $conn = conectar();
        $result = $conn->query("select * from Usuarios where id = ".$id);
        mysqli_close($conn);
        return $result;
    }
    
    function editar_usuario($id,$nome,$email,$cell,$curso,$turno){
        $conn = conectar();
        $stmt = $conn->prepare("update Usuarios set nome = ?, email = ?, cell = ?, curso = ?, turno = ? where id = ?");
        $stmt->bind_param("ssissi",$nome, $email, $cell, $curso, $turno, $id);
        $stmt->execute();
        mysqli_close($conn);
        header('Location:Cadastrados.php');
    }

    function excluir_usuario($id){
        $conn = conectar();
        $conn->query("delete from Usuarios where id = ".$id);
        mysqli_close($conn);
        header('Location:Cadastrados.php');
    }
?>