<?php
    class Conexao{
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $banco = 'db_escola';

        public function conectar(){
            try {
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->banco",
                    "$this->user",
                    "$this->pass"
                );
                return $conexao;
                
            } catch (PDOException $e) {
                echo "<p>".$e->getMessage().'</p>';
            }
        }
    }


    $action = $_GET['action'];
    $conexao = new Conexao();
    if($action == "professor") {
        
    }else if($action == "aluno") {
        $nome = strtoupper(trim($_POST['nome_aluno']));
        $data = $_POST['data_aluno'];
        $ensino = $_POST['escolaridade'];

        $sql = "INSERT INTO TB_ALUNO(RM_ALUNO,DT_NASCIMENTO,NM_ENSINO) VALUE(?,?,?)";
        $stmt = $conexao->conectar()->prepare($sql);
        $stmt->bindValue(1,$nome);
        $stmt->bindValue(2,$data);
        $stmt->bindValue(3,$ensino);
        try {
            $stmt->execute();
            header('location:index.php');
        } catch (PDOException $e) {
            return false;
        }
    }else if($action == "funcionario") {
        echo "cadastro de funcionario";
    }
?>