<?php
	
namespace App\Models;

use MF\Model\Model;

class Aluno extends Model{
	private $id;
	private $nome;
	private $rm;
	private $data;
	private $escolaridade;


	public function __set($att,$valor) {
		$this->$att = $valor;
	}

	public function __get($att) {
		return $this->$att;
	}

	public function salvar() {
		$query = "insert into tb_aluno(nome,rm,data,escolaridade) values(:nome,:rm,:data,:escolaridade)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':nome',$this->__get('nome'));
		$stmt->bindValue(':rm',$this->__get('rm'));
		$stmt->bindValue(':data',$this->__get('data'));
		$stmt->bindValue(':escolaridade',$this->__get('escolaridade'));
		$stmt->execute();
		return true;

	}

	public function getAll() {
		$query = "select id,nome,rm,DATE_FORMAT(data,'%d/%m/%Y') as data, escolaridade from tb_aluno group by id DESC";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}

	public function remover() {
		$query = "delete from tb_aluno where id = :id";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':id',$this->__get('id'));
		$stmt->execute();
	}
}	

?>