<?php
	
namespace App\Models;

use MF\Model\Model;

class Funcionario extends Model{
	private $id;
	private $nome;
	private $funcao;


	public function __set($att,$valor) {
		$this->$att = $valor;
	}

	public function __get($att) {
		return $this->$att;
	}

	public function salvar() {
		$query = "insert into tb_funcionario(nome,funcao) values(:nome,:funcao)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':nome',$this->__get('nome'));
		$stmt->bindValue(':funcao',$this->__get('funcao'));
		$stmt->execute();
		return true;

	}

	public function getAll() {
		$query = "select id,nome,funcao from tb_funcionario group by id DESC";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}	

?>