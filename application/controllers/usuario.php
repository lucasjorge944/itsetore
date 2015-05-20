<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Usuario extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');	
		}
		
		public function index(){
							
			$dados = array(
				'titulo' => 'Usuario',
			);

			require_once('includes/bootstrap/modal.php');
			$this->load->view('Usuario', $dados);
		}	
	}

?>