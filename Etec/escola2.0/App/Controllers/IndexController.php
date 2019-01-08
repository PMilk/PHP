<?php

namespace App\Controllers;
use MF\Controller\Action;
use App\Connection;
use App\Models\Produto;
use App\Models\Info;

use MF\Model\Container;

class IndexController extends Action {
	
	public function index() {

		$this->render('index');
	}

	public function aluno() {
		$aluno = Container::getModel('aluno');
		$alunos = $aluno->getAll();
		$this->view->alunos = $alunos;
		$this->render('aluno');
	}

	public function professor() {
		$professor = Container::getModel('professor');
		$professores = $professor->getAll();
		$this->view->professores = $professores;
		$this->render('professor');
	}

	public function funcionario() {
		$funcionario = Container::getModel('funcionario');
		$funcionarios = $funcionario->getAll();
		$this->view->funcionarios = $funcionarios;
		$this->render('funcionario');
	}

	public function registrar() {
		$acao = isset($_GET['acao']) ? $_GET['acao'] : '';
		if($acao == 'aluno') {
			$aluno = Container::getModel('aluno');
			$aluno->__set('nome',ucfirst($_POST['nome_aluno']));
			$aluno->__set('rm',$_POST['rm_aluno']);
			$aluno->__set('data',$_POST['data_aluno']);
			$aluno->__set('escolaridade',$_POST['escolaridade']);
			if($aluno->salvar()){
				header('location: /aluno?cad=ok');	
			}else {
				header('location: /aluno?cad=erro');	
			}
			
		}
		
		if($acao == 'professor') {
			$professor = Container::getModel('professor');
			$professor->__set('nome',ucfirst($_POST['nome']));
			$professor->__set('materia',$_POST['materia']);
			if($professor->salvar()){
				header('location: /professor?cad=ok');	
			}else {
				header('location: /professor?cad=erro');	
			}
		}

		if($acao == 'funcionario') {
			$funcionario = Container::getModel('funcionario');
			$funcionario->__set('nome',ucfirst($_POST['nome']));
			$funcionario->__set('funcao',$_POST['funcao']);
			if($funcionario->salvar()){
				header('location: /funcionario?cad=ok');	
			}else {
				header('location: /funcionario?cad=erro');	
			}
		}


	}

	public function remover() {
		$acao = isset($_GET['acao']) ? $_GET['acao'] : '';

		if($acao == 'aluno') {
			$aluno = Container::getModel('aluno');
			$aluno->__set('id',$_POST['id']);
			$aluno->remover();
			$this->aluno();
		}
	}
}

?>