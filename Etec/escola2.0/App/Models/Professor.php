<?php
	
namespace App\Models;

use MF\Model\Model;

class Professor extends Model{
	private $id;
	private $nome;
	private $materia;


	public function __set($att,$valor) {
		$this->$att = $valor;
	}

	public function __get($att) {
		return $this->$att;
	}

	public function salvar() {
		$query = "insert into tb_professor(nome,materia) values(:nome,:materia)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(':nome',$this->__get('nome'));
		$stmt->bindValue(':materia',$this->__get('materia'));
		$stmt->execute();
		return true;

	}

	public function getAll() {
		$query = "select id,nome,materia from tb_professor group by id DESC";
		$stmt = $this->db->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(\PDO::FETCH_ASSOC);
	}
}	

?>