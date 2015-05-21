<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class GestaoUsuarios extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');	
		}
		
		public function index(){
							
			$dados = array(
				'titulo' => 'Gestão de Usuários',
			);

			$this->load->view('gestaousuarios', $dados);
		}	
	}

?>