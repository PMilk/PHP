<?php
class Conexao {
    public function conectar() {
        try {
            $conexao = new PDO(
                "mysql:host=localhost;dbname=db_escola;root,''");
            return conexao();
        } catch (PDOException $e) {
            echo "<p>".$e->getMessage().'</p>';
        }
    }
}

    $action = $_GET['action'];
    $conexao = new Conexao();
    if($action == "professor") {
        
    }else if($action == "aluno") {
        echo "cadastro de aluno";
    }else if($action == "funcionario") {
        echo "cadastro de funcionario";
    }
?>