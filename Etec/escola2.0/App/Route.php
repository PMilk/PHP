<?php 

namespace App;

use MF\Init\Bootstrap;

class Route  extends Bootstrap {

	protected function initRoutes() {
		$routes['home'] = array (
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);
		$routes['aluno'] = array (
			'route' => '/aluno',
			'controller' => 'indexController',
			'action' => 'aluno'
		);
		$routes['registrar'] = array (
			'route' => '/registrar',
			'controller' => 'indexController',
			'action' => 'registrar'
		);
		$routes['professor'] = array (
			'route' => '/professor',
			'controller' => 'indexController',
			'action' => 'professor'
		);
		$routes['funcionario'] = array (
			'route' => '/funcionario',
			'controller' => 'indexController',
			'action' => 'funcionario'
		);
		$routes['remover'] = array (
			'route' => '/remover',
			'controller' => 'indexController',
			'action' => 'remover'
		);

		$this->setRoutes($routes);
	}

	


}



?>