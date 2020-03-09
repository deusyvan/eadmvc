<?php
namespace Controllers;

use \Core\Controller;
use \Models\Alunos;

class HomeController extends Controller {

	public function index()
    {
		$dados = array();
		
		$alunos = new Alunos();

        if(!$alunos->isLogged()){
            header("Location: ".BASE_URL."login");
		}
		
		$this->loadTemplate('home', $dados);
    }

}