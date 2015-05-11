<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Home extends CI_Controller{
		
		public function __construct(){
			parent::__construct();
			$this->load->helper('url');	
		}
		
		public function index(){
							
			$dados = array(
				'titulo' => 'Login',
			);

			$this->load->view('home', $dados);
		}	
	}

?>